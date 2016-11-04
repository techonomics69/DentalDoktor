<?php
/**
 * Created by PhpStorm.
 * User: Herfox
 * Date: 10/10/16
 * Time: 6:56 PM
 */

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

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
        $this->LastModifiedDate = Mage::getStoreConfig('herfox_salesforce/general/last_modified');
        if(empty($this->LastModifiedDate))
            $this->LastModifiedDate = "2016-01-01T00:00:00.000Z";
        $this->IsActive = true;
        $this->IsDelete = false;
    }

    public function createOpportunity($order_event)
    {
        $orders = $order_event->getOrderIds();
        foreach ($orders as $order_id)
        {
            $order = Mage::getModel('sales/order')->load($order_id);
            $customer = Mage::getModel('customer/customer')->load($order->getCustomerId());
            $shipping = $order->getShippingAddress();

            $group = Mage::getModel('customer/group')->load($order->getCustomerGroupId())->getCustomerGroupCode();
            $region = Mage::getModel('directory/region')->load($shipping->getRegionId())->getCode();
            $locality = Mage::getModel('eav/config')->getAttribute('customer_address', 'locality')->getSource()->getOptionText($shipping->getLocality());
            
            $opportunity['name'] = "DentalDoktor-".$order->getIncrementId();
            $opportunity['accountId'] = $customer->getData('account_id');
            $opportunity['stageName'] = "Abierta";
            $opportunity['closeDate'] = "2016-11-08";
            $opportunity['calle_entrega'] = $shipping->getStreet1();
            $opportunity['ciudad_entrega'] = $shipping->getCity();
            $opportunity['condiciones'] = $order->getStatusHistoryCollection()->getFirstItem()->getComment();
            $opportunity['depto_entrega'] = $region;
            $opportunity['localidad'] = $locality;
            $opportunity['pais_entrega'] = $shipping->getCountryId();
            $opportunity['tipo_pago'] = $order->getPayment()->getMethodInstance()->getTitle();
            $opportunity['forma_pago'] = "";

            $method = $order->getPayment()->getMethodInstance()->getCode();
            if($method == 'cash'){
                $opportunity['forma_pago'] = $order->getPayment()->getWayToPay();
            }
            $opportunity['recordTypeName'] = Mage::getStoreConfig('herfox_salesforce/general/oportunity_type_id');

            // Mage::log($opportunity, null, "oportunity.log");
            $o_response = $this->setSalesForceData('Opportunity', $opportunity);

            if(isset($o_response['operation_successful']) && isset($o_response['new_opp_id']))
            {
                $products = $order->getAllItems();

                foreach ($products as $product)
                {
                    $o_product = [
                        'quantity' => $product->getQtyOrdered(),
                        'productCode' => $product->getSku(),
                        'opportunityId' => $o_response['new_opp_id'],
                        'pricebookId' => $group,
                        'totalPrice' => $product->getRowTotal()
                    ];

                    // Mage::log($o_product, null, "oportunity.log");
                    $this->setSalesForceData('OpportunityLineItem', $o_product);
                }

                $this->updateSalesForceData('Opportunity', ['stageName' => 'En Facturación'], $o_response['new_opp_id']);
            }
        }
    }

    public function updateCustomer($customer_event)
    {
        $customer = $customer_event->getCustomer();

        $update = [
            'mobilePhone' => $customer->getMobile(),
            'birthdate' => explode(' ', $customer->getDob())[0]
        ];

        Mage::log($update, null, "edit_customer.log");
        $this->updateSalesForceData('Contacts', $update, $customer->getAccountId());
    }

    public function updateCustomerAddress($address_event)
    {
        $address = $address_event->getCustomerAddress();

        $region_code = Mage::getModel('directory/region')->load($address->getRegionId())->getCode();
        $industry = Mage::getModel('eav/config')->getAttribute('customer_address', 'industry')->getSource()->getOptionText($address->getIndustry());
        $customer = Mage::getModel('customer/customer')->load($address->getCustomerId());

        $update = [
            'industry' => $industry,
            'department' => $address->getArea(),
            'title' => $address->getTitle(),
            'website' => $address->getWebsite(),
            'fax' => $address->getFax(),
            'billingCity' => $address->getCity(),
            'billingCountry' => $address->getCountryId(),
            'billingPostalCode' => $address->getPostcode(),
            'billingState' => $region_code,
            'billingStreet' => $address->getStreet1()
        ];

        Mage::log($update, null, "edit_address.log");
        $this->updateSalesForceData('Contacts', $update, $customer->getAccountId());
    }

    public function sync()
    {
        // Sync Data
        $this->syncProducts();
        $this->syncPrices();
        $this->syncPriceRules();

        // Update last sync date in configuration
        $LastModifiedDate = str_replace(' ', 'T', $this->date) . ".000Z";
        Mage::getConfig()->saveConfig('herfox_salesforce/general/last_modified', $LastModifiedDate);
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

    private function syncPriceRules()
    {
        $response = $this->getSalesForceData('DescuentoVolumen');

        if($response) {
            $sync['name'] = "Sincronización " . $this->date;
            $sync['total'] = count($response);
            $sync['success'] = 0;
            $sync['unsuccess'] = 0;
            $sync['status'] = 1;
            $sync['errors'] = "";

            foreach ($response as $record) {

                if ($record['Descuento__c'] != 0){
                    $priceRule = Mage::getModel('salesrule/rule')->load($record['Id'], 'name');

                    if (!isset($priceRule['name'])) {
                        if ($this->createPriceRule($record)) {
                            $sync['success']++;
                        } else {
                            $sync['unsuccess']++;
                            $sync['errors'] .= 'No se pudo crear la promoción: ' . $record['Id'] . "\n";
                        }
                    } else {
                        $sync['unsuccess']++;
                        $sync['errors'] .= 'Promoción Duplicada: ' . $record['Id'] . "\n";
                    }
                } else {
                    $sync['unsuccess']++;
                    $sync['errors'] .= 'Promoción con descuento cero: ' . $record['Id'] . "\n";
                }
            }

            // Create products sync register
            $sync_product = Mage::getModel('herfox_salesforce/discount');
            $sync_product->setData($sync);
            $sync_product->save();
        }
    }

    private function createProduct($record)
    {
        $product = Mage::getModel('catalog/product');
        $product
            // ->setStoreId(1)
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

        if(isset($record['Foto__c'])){
            $file = $this->getImageUrl($record['Foto__c'], $record['Name']);
            $media = array('image','small_image','thumbnail');
            $product
                ->setMediaGallery (array('images'=>array (), 'values'=>array ()))
                ->addImageToMediaGallery($file, $media, false, false);
        }

        // Assign Categories
        if(isset($record['Subcategor_a__c']))
            $product->setCategoryIds($this->getCategory($record['Family'], $record['Subcategor_a__c']));
        else
            $product->setCategoryIds($this->getCategory($record['Family']));

        // Custom attributes
        $product->setData('delivery_days', $record['Tiempo_de_Entrega__c']);

        return $product->save();
    }

    private function getImageUrl($remote_html_img, $name_product)
    {
        $oub = Mage::getStoreConfig('herfox_salesforce/general/origin_image_url_base');
        $nub = Mage::getStoreConfig('herfox_salesforce/general/new_image_url_base');

        // Extract src value of image element
        $doc = new DOMDocument();
        libxml_use_internal_errors(true);
        $doc->loadHTML($remote_html_img);
        libxml_clear_errors();
        $xpath = new DOMXPath($doc);
        $src = $xpath->evaluate("string(//img/@src)");

        $url_remote_img = str_replace($oub, $nub, $src);
        $remote_img = file_get_contents($url_remote_img);

        $url_base = Mage::getBaseDir('media') . DS . 'import';
        $name_file = str_replace(" ", "_", $name_product) . ".jpeg";
        $url_local_img = $url_base . DS . $name_file;
        file_put_contents($url_local_img, $remote_img);

        return $url_local_img;
    }

    private function createPriceRule($record)
    {
        $product = Mage::getModel('catalog/product')->loadByAttribute('sku', $record['Producto_Id__r']['ProductCode']);
        $label = $record['Descuento__c']."% en ".$product->name;

        // Price Rule
        $priceRule = Mage::getModel('salesrule/rule');
        $priceRule
            ->setName($record['Id'])
            ->setDescription('')
            ->setIsActive(1)
            ->setWebsiteIds([1])
            ->setCustomerGroupIds([$this->getGroup($record['ListaPrecios_Id__c'])])
            ->setFromDate('')
            ->setToDate('')
            ->setSortOrder('')
            ->setSimpleAction('by_percent')
            ->setDiscountAmount($record['Descuento__c'])
            ->setStopRulesProcessing(0)
            ->setStoreLabels([$label]);

        // Price Rule Conditions
        $condition = Mage::getModel('salesrule/rule_condition_product_found');
        $condition
            ->setType('salesrule/rule_condition_product_found')
            ->setValue(1)
            ->setAggregator('all');
        $priceRule->getConditions()->addCondition($condition);

        $product = Mage::getModel('salesrule/rule_condition_product');
        $product
            ->setType('salesrule/rule_condition_product')
            ->setAttribute('sku')
            ->setOperator('==')
            ->setValue($record['Producto_Id__r']['ProductCode']);
        $condition->addCondition($product);

        $minimum = Mage::getModel('salesrule/rule_condition_product');
        $minimum
            ->setType('salesrule/rule_condition_product')
            ->setAttribute('quote_item_qty')
            ->setOperator('>')
            ->setValue($record['Minimo__c']);
        $condition->addCondition($minimum);

        $maximum = Mage::getModel('salesrule/rule_condition_product');
        $maximum
            ->setType('salesrule/rule_condition_product')
            ->setAttribute('quote_item_qty')
            ->setOperator('<=')
            ->setValue($record['Maximo__c']);
        $condition->addCondition($maximum);

        $priceRule->getActions()->addCondition($product);

        return $priceRule->save();
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

    private function setSalesForceData($method, $data)
    {
        $url = $this->session['instance_url'] . "/services/apexrest/" . $method;

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array("Authorization: Bearer " . $this->session['access_token'], "Content-type: application/json"));
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));

        $json_response = curl_exec($curl);

        $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        if ( $status != 200 || isset($json_response['error_messages']) ) {
            $error = "Error: call to URL $url failed with status $status, response $json_response, curl_error " . curl_error($curl) . ", curl_errno " . curl_errno($curl);
            Mage::log($error, null, "oportunity.log");
        }

        curl_close($curl);

        $response = json_decode($json_response, true);
        Mage::log($response, null, "oportunity.log");

        return json_decode($json_response, true);
    }

    private function updateSalesForceData($method, $data, $id)
    {
        $url = $this->session['instance_url'] . "/services/apexrest/" . $method . DS . $id;

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array("Authorization: Bearer " . $this->session['access_token'], "Content-type: application/json"));
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));

        $json_response = curl_exec($curl);

        $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        if ( $status != 200 || isset($json_response['error_messages']) ) {
            $error = "Error: call to URL $url failed with status $status, response $json_response, curl_error " . curl_error($curl) . ", curl_errno " . curl_errno($curl);
            Mage::log($error, null, "sf_update_error.log");
        }

        curl_close($curl);

        $response = json_decode($json_response, true);
        Mage::log($response, null, "sf_update_error.log");

        return json_decode($json_response, true);
    }
}