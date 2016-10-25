<?php
/**
 * Created by PhpStorm.
 * User: Herfox
 * Date: 10/10/16
 * Time: 6:56 PM
 */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Herfox_SalesForce_Model_Observer
{
    private $date;
    private $session;
    private $LastModifiedDate;
    private $IsActive;
    private $IsDelete;

    public function __construct($date)
    {
        $this->date = Mage::getModel('core/date')->date('Y-m-d H:i:s');
        $this->session = Mage::getModel('herfox_salesforce/config')->getSession();
        $this->LastModifiedDate = Mage::getStoreConfig('herfox_salesforce/oauth2/last_modified');
        if(empty($this->LastModifiedDate))
            $this->LastModifiedDate = "2016-01-01T00:00:00.000Z";
        $this->IsActive = true;
        $this->IsDelete = false;
    }

    public function sync()
    {
        // Sync Data
        $this->syncProducts();
        $this->syncPrices();

        // Update last sync date in configuration
        $LastModifiedDate = str_replace(' ', 'T', $this->date) . ".000Z";
        Mage::getConfig()->saveConfig('herfox_salesforce/oauth2/last_modified', $LastModifiedDate);
    }

    private function syncProducts()
    {
        $response = $this->getSalesForceData('Products');

        if($response) {
            $sync['name'] = "Sincronización " . $this->date;
            $sync['total'] = count($response);
            $sync['success'] = 0;
            $sync['unsuccess'] = 0;
            $sync['status'] = 1;
            $sync['errors'] = "";

            foreach ($response as $record) {
                $product = Mage::getModel('catalog/product')->loadByAttribute('sku', $record['ProductCode']);

                if (!$product) {
                    if ($this->createProduct($record)) {
                        $sync['success']++;
                    } else {
                        $sync['unsuccess']++;
                        $sync['errors'] .= 'No se pudo crear el producto: ' . $record['ProductCode'] . "\n";
                    }
                } else {
                    $sync['unsuccess']++;
                    $sync['errors'] .= 'Producto Duplicado: ' . $record['ProductCode'] . "\n";
                }
            }

            // Create products sync register
            $sync_product = Mage::getModel('herfox_salesforce/product');
            $sync_product->setData($sync);
            $sync_product->save();
        }
    }

    private function syncPrices()
    {
        $response = $this->getSalesForceData('PricebookEntry');

        if($response) {
            $sync['name'] = "Sincronización " . $this->date;
            $sync['total'] = count($response);
            $sync['success'] = 0;
            $sync['unsuccess'] = 0;
            $sync['status'] = 1;
            $sync['errors'] = "";

            foreach ($response as $record) {
                $product = Mage::getModel('catalog/product')->loadByAttribute('sku', $record['ProductCode']);

                if ($product && isset($record['Pricebook2']['IsStandard'])) {
                    // Create standard price
                    if($record['Pricebook2']['IsStandard']) {
                        $product->setPrice($record['UnitPrice']);
                        $product->save();
                        $sync['success']++;
                    }
                    // Create group price
                    else {
                        $group = $this->getGroup($record['Pricebook2Id']);
                        $product->setData('group_price', [[
                            'website_id' => 0,
                            'cust_group' => $group,
                            'price' => $record['UnitPrice']
                        ]]);
                        $product->save();
                        $sync['success']++;
                    }
                }
                else {
                    $sync['unsuccess']++;
                    $sync['errors'] .= 'Producto no encontrado: ' . $record['ProductCode'] . "\n";
                }
            }

            // Create price sync register
            $sync_product = Mage::getModel('herfox_salesforce/price');
            $sync_product->setData($sync);
            $sync_product->save();
        }
    }

    private function createProduct($record)
    {
        $product = Mage::getModel('catalog/product');
        $product
            ->setStoreId(1)
            ->setWebsiteIds([1])
            ->setAttributeSetId(4)
            ->setTypeId('simple')
            ->setCreatedAt(strtotime('now'))
            // ->setUpdatedAt(strtotime('now'))
            ->setSku($record['ProductCode'])
            ->setName($record['Name'])
            ->setWeight(0)
            ->setStatus(1)
            ->setTaxClassId(0)
            ->setVisibility(Mage_Catalog_Model_Product_Visibility::VISIBILITY_BOTH)
            ->setManufacturer($this->getManufacturer($record['Marca__c']))
            ->setPrice(0)
            ->setMetaTitle($record['Name'])
            ->setMetaDescription($record['Description'])
            ->setDescription($record['Description'])
            ->setShortDescription($record['Description'])
            ->setStockData([
                'use_config_manage_stock' => 0, //'Use config settings' checkbox
                'manage_stock'=>1, //manage stock
                'min_sale_qty'=>1, //Minimum Qty Allowed in Shopping Cart
                'max_sale_qty'=>10000, //Maximum Qty Allowed in Shopping Cart
                'is_in_stock' => 1, //Stock Availability
                'qty' => 1000 //qty
            ]);

        // Assign Categories
        if(isset($record['Subcategor_a__c']))
            $product->setCategoryIds($this->getCategory($record['Family'], $record['Subcategor_a__c']));
        else
            $product->setCategoryIds($this->getCategory($record['Family']));

        // Custom attributes
        $product->setData('delivery_days', $record['Tiempo_de_Entrega__c']);

        return $product->save();
    }

    private function getCategory($category_name, $subcategory_name = "")
    {
        // The parent category
        $category = Mage::getResourceModel('catalog/category_collection')->addFieldToFilter('name', $category_name)->getFirstItem();

        // The child category
        if(!empty($subcategory_name)) {
            $subcategories = $category->getChildrenCategories();

            foreach ($subcategories as $subcategory) {
                if ($subcategory->getName() == $subcategory_name)
                    return [$category->getId(), $subcategory->getId()];
            }
        }

        return [$category->getId()];
    }

    private function getManufacturer($name)
    {
        $manufacturer = Mage::getModel('eav/entity_attribute')->loadByCode('catalog_product', 'manufacturer');
        $valuesCollection = Mage::getResourceModel('eav/entity_attribute_option_collection')
            ->setAttributeFilter($manufacturer->getData('attribute_id'))
            ->setStoreFilter(0, false);

        // Search manufacturer
        foreach($valuesCollection as $value) {
            if($value->getValue() == $name)
                return $value->getOptionId();
        }
        // Create manufacturer if this not exist
        return $this->createAttributeOption($manufacturer, $name);
    }

    private function getGroup($name)
    {
        // Search group
        $group = Mage::getModel('customer/group')->load($name, 'customer_group_code');
        if(isset($group["customer_group_id"])) {
            return $group["customer_group_id"];
        }
        // Create group if this not exist
        $group = Mage::getModel('customer/group');
        $group->setCode($name)->setTaxClassId(11);
        $group->save();
        return $group["customer_group_id"];
    }

    private function createAttributeOption($attribute, $option_name)
    {
        // Create new option
        $option['attribute_id'] = $attribute->getAttributeId();
        $option['value'][$option_name][0] = $option_name;

        $setup = new Mage_Eav_Model_Entity_Setup('core_setup');
        $setup->addAttributeOption($option);

        // Get new option id
        $lastId = $setup->getConnection()->lastInsertId();
        $attr = Mage::getResourceModel('eav/entity_attribute_option_collection')
            ->setStoreFilter(0, false)
            ->addFieldToFilter('tsv.value_id',array('eq'=>$lastId))
            ->getFirstItem();

        return $attr->getData('option_id');
    }

    private function getSalesForceData($method)
    {
        $url = $this->session['instance_url'] . "/services/apexrest/" . $method . "?LastModifiedDate=" . $this->LastModifiedDate;
        // . "&IsActive=" . $this->IsActive
        // . "&IsDelete=" . $this->IsDelete;

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array("Authorization: Bearer " . $this->session['access_token']));

        $json_response = curl_exec($curl);
        curl_close($curl);

        return json_decode($json_response, true);
    }
}