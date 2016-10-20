<?php
/**
 * Herfox_SalesForce extension
 * 
 * NOTICE OF LICENSE
 * 
 * This source file is subject to the MIT License
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/mit-license.php
 * 
 * @category       Herfox
 * @package        Herfox_SalesForce
 * @copyright      Copyright (c) 2016
 * @license        http://opensource.org/licenses/mit-license.php MIT License
 */
/**
 * Producto abstract REST API handler model
 *
 * @category    Herfox
 * @package     Herfox_SalesForce
 * @author      Ultimate Module Creator
 */
abstract class Herfox_SalesForce_Model_Api2_Product_Rest extends Herfox_SalesForce_Model_Api2_Product
{
    /**
     * current producto
     */
    protected $_product;

    /**
     * retrieve entity
     *
     * @access protected
     * @return array|mixed
     * @author Ultimate Module Creator
     */
    protected function _retrieve() {
        $product = $this->_getProduct();
        $this->_prepareProductForResponse($product);
        return $product->getData();
    }

    /**
     * get collection
     *
     * @access protected
     * @return array
     * @author Ultimate Module Creator
     */
    protected function _retrieveCollection() {
        $collection = Mage::getResourceModel('herfox_salesforce/product_collection');
        $entityOnlyAttributes = $this->getEntityOnlyAttributes(
            $this->getUserType(),
            Mage_Api2_Model_Resource::OPERATION_ATTRIBUTE_READ
        );
        $availableAttributes = array_keys($this->getAvailableAttributes(
            $this->getUserType(),
            Mage_Api2_Model_Resource::OPERATION_ATTRIBUTE_READ)
        );
        $collection->addFieldToFilter('status', array('eq' => 1));
        $this->_applyCollectionModifiers($collection);
        $products = $collection->load();
        $products->walk('afterLoad');
        foreach ($products as $product) {
            $this->_setProduct($product);
            $this->_prepareProductForResponse($product);
        }
        $productsArray = $products->toArray();
        $productsArray = $productsArray['items'];

        return $productsArray;
    }

    /**
     * prepare producto for response
     *
     * @access protected
     * @param Herfox_SalesForce_Model_Product $product
     * @author Ultimate Module Creator
     */
    protected function _prepareProductForResponse(Herfox_SalesForce_Model_Product $product) {
        $productData = $product->getData();
    }

    /**
     * create producto
     *
     * @access protected
     * @param array $data
     * @return string|void
     * @author Ultimate Module Creator
     */
    protected function _create(array $data) {
        $this->_critical(self::RESOURCE_METHOD_NOT_ALLOWED);
    }

    /**
     * update producto
     *
     * @access protected
     * @param array $data
     * @author Ultimate Module Creator
     */
    protected function _update(array $data) {
        $this->_critical(self::RESOURCE_METHOD_NOT_ALLOWED);
    }

    /**
     * delete producto
     *
     * @access protected
     * @author Ultimate Module Creator
     */
    protected function _delete() {
        $this->_critical(self::RESOURCE_METHOD_NOT_ALLOWED);
    }

    /**
     * delete current producto
     *
     * @access protected
     * @param Herfox_SalesForce_Model_Product $product
     * @author Ultimate Module Creator
     */
    protected function _setProduct(Herfox_SalesForce_Model_Product $product) {
        $this->_product = $product;
    }

    /**
     * get current producto
     *
     * @access protected
     * @return Herfox_SalesForce_Model_Product
     * @author Ultimate Module Creator
     */
    protected function _getProduct() {
        if (is_null($this->_product)) {
            $productId = $this->getRequest()->getParam('id');
            $product = Mage::getModel('herfox_salesforce/product');
            $product->load($productId);
            if (!($product->getId())) {
                $this->_critical(self::RESOURCE_NOT_FOUND);
            }
            $this->_product = $product;
        }
        return $this->_product;
    }
}
