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

            $date = new Zend_Date($this->date);
            $date->addDay(8);
            //Mage::log($date->toString('yyyy-MM-dd'), null, "sf_opportunity.log");

            $opportunity['name'] = "DentalDoktor-".$order->getIncrementId();
            $opportunity['accountId'] = $customer->getData('account_id');
            $opportunity['stageName'] = "Abierta";
            $opportunity['closeDate'] = $date->toString('yyyy-MM-dd');
            $opportunity['calle_entrega'] = $shipping->getStreet1();
            $opportunity['ciudad_entrega'] = $shipping->getCity();
            $opportunity['condiciones'] = $order->getStatusHistoryCollection()->getFirstItem()->getComment();
            $opportunity['depto_entrega'] = $region;
            $opportunity['localidad'] = $locality;
            $opportunity['pais_entrega'] = $shipping->getCountryId();
            $opportunity['tipo_pago'] = $order->getPayment()->getMethodInstance()->getTitle();
            $opportunity['forma_pago'] = "";

            $method = $order->getPayment()->getMethodInstance()->getCode();
            //Mage::log($method, null, "sf_opportunity.log");
            if($method == 'cash'){
                $opportunity['forma_pago'] = $order->getPayment()->getWayToPay();
            }
            $opportunity['recordTypeName'] = Mage::getStoreConfig('herfox_salesforce/general/oportunity_type_id');

            Mage::log($opportunity, null, "sf_opportunity.log");

            // Create Opportunity
            $o_response = $this->setSalesForceData('Opportunity', $opportunity);

            // Add products to new opportunity
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

                    Mage::log($o_product, null, "oportunity.log");
                    $this->setSalesForceData('OpportunityLineItem', $o_product);
                }

                // Update status to opportunity
                $this->updateSalesForceData('Opportunity', ['stageName' => 'En Facturación'], $o_response['new_opp_id']);
            }
        }
    }

    public function updateCustomer($customer_event)
    {
        $customer = $customer_event->getCustomer();
        // Mage::log($customer->toArray(), null, "sf_edit_customer.log");

        $update = [
            'mobilePhone' => $customer->getMobile(),
            'birthdate' => explode(' ', $customer->getDob())[0]
        ];

        //Mage::log($update, null, "sf_edit_customer.log");
        // $this->updateSalesForceData('Contacts', $update, $customer->getAccountId());
        $this->updateSalesForceData('Contacts', $update, $customer->getEntityId());
    }

    public function updateCustomerAddress($address_event)
    {
        $address = $address_event->getCustomerAddress();
        // Mage::log($address->toArray(), null, "sf_edit_address.log");

        $region_code = Mage::getModel('directory/region')->load($address->getRegionId())->getCode();
        $industry = Mage::getModel('eav/config')->getAttribute('customer_address', 'industry')->getSource()->getOptionText($address->getIndustry());
        // $customer = Mage::getModel('customer/customer')->load($address->getCustomerId());

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

        // Mage::log($update, null, "sf_edit_address.log");
        // $this->updateSalesForceData('Contacts', $update, $customer->getAccountId());
        $this->updateSalesForceData('Contacts', $update, $address->getCustomerId());
    }

    public function sync()
    {
        // Sync Data
        // echo "SINCRONIZACION PRODUCTOS...<br>";
        $this->syncProducts();
        // echo "SINCRONIZACION PRECIOS...<br>";
        $this->syncPrices();
        // echo "SINCRONIZACION PROMOCIONES...<br>";
        $this->syncPriceRules();

        // Reindex Data
        // echo "REINDEXANDO DATOS...<br><br>";
        for ($ga = 1; $ga <= 9; $ga++) {
            $reindex = Mage::getModel('index/process')->load($ga);
            $reindex ->reindexAll();
        }

        // Update last sync date in configuration
        $LastModifiedDate = str_replace(' ', 'T', $this->date) . ".000Z";
        Mage::getConfig()->saveConfig('herfox_salesforce/general/last_modified', $LastModifiedDate);

        // Refresh Cache
        // echo "Refrescando Cache (Configuracion)...<br>";
        Mage::app()->getCacheInstance()->cleanType('config');
        // echo "Refrescando Cache (Bloques HTML)...<br><br>";
        Mage::app()->getCacheInstance()->cleanType('block_html');
        // echo "Fin del proceso.";
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
            $count = 0;
            foreach ($response as $record)
            {
                $info = $record["infoProducto"];
                $files = $record["archivos"];

                $count++;
                if(isset($info['ProductCode'])) {
                    if(!empty($info['ProductCode'])) {
                        $product = Mage::getModel('catalog/product')->loadByAttribute('sku', $info['ProductCode']);

                        if (!$product) {
                            // echo "<br>".$count.". Creando Producto: ".$info['ProductCode']."<br>";
                            if ($this->createProduct($info, $files)) {
                                $sync['success']++;
                                // echo "Producto creado correctamente<br><br>";
                            }
                            else {
                                // echo "Error creando producto<br><br>";
                                $sync['unsuccess']++;
                                $sync['errors'] .= 'No se pudo crear el producto: ' . $info['ProductCode'] . "\n";
                            }
                        } else {
                            // echo "<br>".$count.". Actualizando Producto: ".$info['ProductCode']."<br>";
                            if($this->updateProduct($product, $info, $files)) {
                                $sync['success']++;
                                // echo "Producto actualizado correctamente<br><br>";
                            }
                            else {
                                // echo "Error actualizando producto<br><br>";
                                $sync['unsuccess']++;
                                $sync['errors'] .= 'No se pudo actualizar el producto: ' . $info['ProductCode'] . "\n";
                            }
                        }
                    }
                    else {
                        // echo "Error codigo producto vacio.<br><br>";
                        $sync['unsuccess']++;
                        $sync['errors'] .= 'Codigo de producto vacio: ' . $info['Id'] . "\n";
                    }
                }
                else {
                    // echo "Error codigo producto no definido.<br><br>";
                    $sync['unsuccess']++;
                    $sync['errors'] .= 'Codigo de producto no definido: ' . $info['Id'] . "\n";
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
                if(isset($record['ProductCode'])) {
                    if(!empty($record['ProductCode'])) {
                        // echo "Actualizando precio a producto: " . $record['ProductCode'] . "<br>";
                        $product = Mage::getModel('catalog/product')->loadByAttribute('sku', $record['ProductCode']);

                        if ($product && isset($record['Pricebook2']['IsStandard'])) {
                            // Create standard price
                            if ($record['Pricebook2']['IsStandard']) {
                                // echo "Asignando Precio Base<br>";
                                $product->setPrice($record['UnitPrice']);
                                $product->save();
                                $sync['success']++;
                            } // Create group price
                            else {
                                // echo "Asignando Precio con Descuento<br>";
                                $group = $this->getGroup($record['Pricebook2Id']);
                                $product->setData('group_price', [[
                                    'website_id' => 0,
                                    'cust_group' => $group,
                                    'price' => $record['UnitPrice']
                                ]]);
                                $product->save();
                                $sync['success']++;
                            }
                            // echo "Precio actualizado correctamente.<br><br>";
                        } else {
                            // echo "Error producto no encontrado.<br><br>";
                            $sync['unsuccess']++;
                            $sync['errors'] .= 'Producto no encontrado: ' . $record['ProductCode'] . "\n";
                        }
                    }
                    else {
                        // echo "Error codigo producto vacio.<br><br>";
                        $sync['unsuccess']++;
                        $sync['errors'] .= 'Codigo de producto vacio: ' . $record['Id'] . "\n";
                    }
                }
                else {
                    // echo "Error codigo producto no definido.<br><br>";
                    $sync['unsuccess']++;
                    $sync['errors'] .= 'Codigo de producto no definido: ' . $record['Id'] . "\n";
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
                // echo "Creando Descuento: ".$record['Id']."<br>";
                if ($record['Descuento__c'] != 0){
                    $priceRule = Mage::getModel('salesrule/rule')->load($record['Id'], 'name');

                    if (!isset($priceRule['name'])) {
                        if ($this->createPriceRule($record)) {
                            // echo "Descuento creado correctamente<br><br>";
                            $sync['success']++;
                        } else {
                            // echo "Error creando descuento<br><br>";
                            $sync['unsuccess']++;
                            $sync['errors'] .= 'No se pudo crear la promoción: ' . $record['Id'] . "\n";
                        }
                    } else {
                        // echo "Error descuento Duplicado<br><br>";
                        $sync['unsuccess']++;
                        $sync['errors'] .= 'Promoción Duplicada: ' . $record['Id'] . "\n";
                    }
                } else {
                    // echo "Error el Descuento es de CERO PESOS ($0)<br><br>";
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

    private function createProduct($info, $files)
    {
        $product = Mage::getModel('catalog/product');
        $product
            // ->setStoreId(1)
            ->setWebsiteIds([1])
            ->setAttributeSetId(4)
            ->setTypeId('simple')
            ->setCreatedAt(strtotime('now'))
            // ->setUpdatedAt(strtotime('now'))
            ->setSku($info['ProductCode'])
            ->setName($info['Name'])
            ->setWeight(0)
            ->setStatus(1)
            ->setTaxClassId(0)
            ->setVisibility(Mage_Catalog_Model_Product_Visibility::VISIBILITY_BOTH)
            ->setManufacturer($this->getManufacturer($info['Marca__c']))
            ->setPrice(0)
            ->setMetaTitle($info['Name'])
            ->setMetaDescription($info['Description'])
            ->setShortDescription($info['Description'])
            ->setStockData([
                'use_config_manage_stock' => 0, //'Use config settings' checkbox
                'manage_stock'=>0, //manage stock
                'min_sale_qty'=>1, //Minimum Qty Allowed in Shopping Cart
                'max_sale_qty'=>100000000, //Maximum Qty Allowed in Shopping Cart
                'is_in_stock' => 1, //Stock Availability
                'qty' => 100000000 //qty
            ]);

        if(isset($info['Observaciones__c'])){
            $product->setDescription($info['Observaciones__c']);
        }

        // Set Images
        foreach ($files as $file) {
            if ($file['extension'] == 'jpg') {
                // echo "Creando imagen:<br>";
                $file = $this->getImageUrl($file['url'], $file['nombre'], $file['extension']);
                $media = array('image','small_image','thumbnail');
                $product
                    ->setMediaGallery (array('images'=>array (), 'values'=>array ()))
                    ->addImageToMediaGallery($file, $media, false, false);
            }
        }
        /*
        if(isset($info['Foto__c'])){
            $file = $this->getImageUrl($info['Foto__c'], $info['Name']);
            $media = array('image','small_image','thumbnail');
            $product
                ->setMediaGallery (array('images'=>array (), 'values'=>array ()))
                ->addImageToMediaGallery($file, $media, false, false);
        }
        */

        // Assign Categories
        // echo "Asignando a Categoria y Subcategoria:<br>";
        $product->setCategoryIds($this->getCategory(
            $info['Family'],
            isset($info['Subcategor_a__c'])?$info['Subcategor_a__c']:"",
            isset($info['Marca__c'])?$info['Marca__c']:"")
        );

        // Custom attributes
        // echo "Creando atributos personalizados<br>";
        $product->setData('delivery_days', str_replace(' días','',$info['Tiempo_de_Entrega__c']));
        $product->setData('presentation', $info['Presentaci_n_comercial__c']);
        $product->setData('html_files', $this->getHtmlFiles($files));

        return $product->save();
    }

    private function getHtmlFiles($files)
    {
        // echo "Creando HTML para documentos<br>";
        $count = 0;
        $html = '<div class="container-fluid">';
        $html .= '<div class="row">';
        foreach ($files as $file) {
            if($file['extension'] == 'pdf') {
                if($count%2 == 0) {
                    $html .= '</div><div class="row">';
                }
                $html .= '<div class="col-md-6">';
                $html .= '<a target="_blank" href="'.$file['url'].'" >'.$file['nombre'].'</a>';
                $html .= '</div>';
                $count++;
            }
        }
        $html .= '</div></div>';
        return $html;
    }

    private function updateProduct($product, $info, $files)
    {
        $product
            ->setUpdatedAt(strtotime('now'))
            ->setSku($info['ProductCode'])
            ->setName($info['Name'])
            ->setManufacturer($this->getManufacturer($info['Marca__c']))
            ->setMetaTitle($info['Name'])
            ->setMetaDescription($info['Description'])
            ->setDescription($info['Description'])
            ->setShortDescription($info['Description']);

        // Delete Images
        $mediaApi = Mage::getModel("catalog/product_attribute_media_api");
        $items = $mediaApi->items($product->getId());
        foreach($items as $item) {
            // echo "Eliminado imagen: ".$item['file']."<br>";
            $mediaApi->remove($product->getId(), $item['file']);
        }

        // Set Images
        foreach ($files as $file) {
            if ($file['extension'] == 'jpg' || $file['extension'] == 'png') {
                // echo "Creando imagen:<br>";
                $file = $this->getImageUrl($file['url'], $file['nombre'], $file['extension']);
                $media = array('image','small_image','thumbnail');
                $product
                    ->setMediaGallery (array('images'=>array (), 'values'=>array ()))
                    ->addImageToMediaGallery($file, $media, false, false);
            }
        }

        // Custom attributes
        $product->setData('delivery_days', str_replace(' días','',$info['Tiempo_de_Entrega__c']));
        $product->setData('presentation', $info['Presentaci_n_comercial__c']);

        return $product->save();
    }

    private function getImageUrl($remote_html_img, $name_product, $extension)
    {
        /*
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
        */
        $url_remote_img = $remote_html_img;
        // echo $url_remote_img."<br>";
        $remote_img = file_get_contents($url_remote_img);

        $url_base = Mage::getBaseDir('media') . DS . 'import';
        $name_file = str_replace(" ", "_", $name_product) . '.' . $extension;
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

    private function getCategory($category_name, $subcategory_name = "", $brand_name = "")
    {
        // The parent category
        $category = Mage::getResourceModel('catalog/category_collection')->addFieldToFilter('name', $category_name)->getFirstItem();
        if(count($category->toArray()) == 0) {
            // echo "Creando categoria<br>";
            $category = $this->createCategory($category_name);
        }
        if(!empty($brand_name)) {
            // echo "Asignando a categoria de marca<br>";
            $brand_category = Mage::getResourceModel('catalog/category_collection')->addFieldToFilter('name', $brand_name)->getFirstItem();

            if(count($brand_category->toArray()) == 0){
                // echo "Creando categoria de marca<br>";
                $brand_category = $this->createCategory($brand_name, 145);
            }
        }
        // The child category
        if(!empty($subcategory_name)) {
            // echo "Asignando a Subcategoria<br>";
            $subcategories = $category->getChildrenCategories();

            foreach ($subcategories as $subcategory) {
                if ($subcategory->getName() == $subcategory_name)
                    return [$category->getId(), $subcategory->getId(), $brand_category->getId()];
            }
            // echo "Creando Subcategoria<br>";
            $subcategory = $this->createCategory($subcategory_name, $category->getId());
            return [$category->getId(), $subcategory->getId()];
        }
        return [$category->getId(), $brand_category->getId()];
    }

    private function createCategory($category_name, $parent_id = 2)
    {
        $parent = Mage::getModel('catalog/category')->load($parent_id);

        $category = Mage::getModel('catalog/category');
        $category->setStoreId(0);
        $category->setName($category_name);
        $category->setMetaTitle($category_name);
        $category->setIsActive(1);
        $category->setDisplayMode('PRODUCTS');
        $category->setIsAnchor(1); //for active anchor
        $category->setPath($parent->getPath());
        $category->setUrlKey(Mage::getModel('catalog/product_url')->formatUrlKey($category_name));

        return $category->save();
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
        if($method == 'Products') $date = '"'.$this->LastModifiedDate.'"';
        else $date = $this->LastModifiedDate;

        $url = $this->session['instance_url'] . "/services/apexrest/" . $method . "?LastModifiedDate=" . $date;
        // echo $url."<br><br>";
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
            $error = [
                "URL" => $url,
                "Status" => $status,
                "response" => $json_response,
                "method" => $method,
                "data" => $data,
                "curl_error" => curl_error($curl),
                "curl_errno" => curl_errno($curl)
            ];
            Mage::log($error, null, "sf_set_data.log");
        }

        curl_close($curl);

        $response = json_decode($json_response, true);
        Mage::log($response, null, "sf_set_data.log");

        return $response;
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
            $error = [
                "URL" => $url,
                "Status" => $status,
                "response" => $json_response,
                "method" => $method,
                "data" => $data,
                "curl_error" => curl_error($curl),
                "curl_errno" => curl_errno($curl)
            ];
            Mage::log($error, null, "sf_update_data.log");
        }

        curl_close($curl);

        $response = json_decode($json_response, true);
        Mage::log($response, null, "sf_update_data.log");

        return $response;
    }
}