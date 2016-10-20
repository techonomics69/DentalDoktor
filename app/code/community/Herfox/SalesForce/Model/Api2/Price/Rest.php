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
 * Precio abstract REST API handler model
 *
 * @category    Herfox
 * @package     Herfox_SalesForce
 * @author      Ultimate Module Creator
 */
abstract class Herfox_SalesForce_Model_Api2_Price_Rest extends Herfox_SalesForce_Model_Api2_Price
{
    /**
     * current precio
     */
    protected $_price;

    /**
     * retrieve entity
     *
     * @access protected
     * @return array|mixed
     * @author Ultimate Module Creator
     */
    protected function _retrieve() {
        $price = $this->_getPrice();
        $this->_preparePriceForResponse($price);
        return $price->getData();
    }

    /**
     * get collection
     *
     * @access protected
     * @return array
     * @author Ultimate Module Creator
     */
    protected function _retrieveCollection() {
        $collection = Mage::getResourceModel('herfox_salesforce/price_collection');
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
        $prices = $collection->load();
        $prices->walk('afterLoad');
        foreach ($prices as $price) {
            $this->_setPrice($price);
            $this->_preparePriceForResponse($price);
        }
        $pricesArray = $prices->toArray();
        $pricesArray = $pricesArray['items'];

        return $pricesArray;
    }

    /**
     * prepare precio for response
     *
     * @access protected
     * @param Herfox_SalesForce_Model_Price $price
     * @author Ultimate Module Creator
     */
    protected function _preparePriceForResponse(Herfox_SalesForce_Model_Price $price) {
        $priceData = $price->getData();
    }

    /**
     * create precio
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
     * update precio
     *
     * @access protected
     * @param array $data
     * @author Ultimate Module Creator
     */
    protected function _update(array $data) {
        $this->_critical(self::RESOURCE_METHOD_NOT_ALLOWED);
    }

    /**
     * delete precio
     *
     * @access protected
     * @author Ultimate Module Creator
     */
    protected function _delete() {
        $this->_critical(self::RESOURCE_METHOD_NOT_ALLOWED);
    }

    /**
     * delete current precio
     *
     * @access protected
     * @param Herfox_SalesForce_Model_Price $price
     * @author Ultimate Module Creator
     */
    protected function _setPrice(Herfox_SalesForce_Model_Price $price) {
        $this->_price = $price;
    }

    /**
     * get current precio
     *
     * @access protected
     * @return Herfox_SalesForce_Model_Price
     * @author Ultimate Module Creator
     */
    protected function _getPrice() {
        if (is_null($this->_price)) {
            $priceId = $this->getRequest()->getParam('id');
            $price = Mage::getModel('herfox_salesforce/price');
            $price->load($priceId);
            if (!($price->getId())) {
                $this->_critical(self::RESOURCE_NOT_FOUND);
            }
            $this->_price = $price;
        }
        return $this->_price;
    }
}
