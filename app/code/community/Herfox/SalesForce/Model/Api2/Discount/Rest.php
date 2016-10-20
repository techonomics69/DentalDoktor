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
 * Descuento abstract REST API handler model
 *
 * @category    Herfox
 * @package     Herfox_SalesForce
 * @author      Ultimate Module Creator
 */
abstract class Herfox_SalesForce_Model_Api2_Discount_Rest extends Herfox_SalesForce_Model_Api2_Discount
{
    /**
     * current descuento
     */
    protected $_discount;

    /**
     * retrieve entity
     *
     * @access protected
     * @return array|mixed
     * @author Ultimate Module Creator
     */
    protected function _retrieve() {
        $discount = $this->_getDiscount();
        $this->_prepareDiscountForResponse($discount);
        return $discount->getData();
    }

    /**
     * get collection
     *
     * @access protected
     * @return array
     * @author Ultimate Module Creator
     */
    protected function _retrieveCollection() {
        $collection = Mage::getResourceModel('herfox_salesforce/discount_collection');
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
        $discounts = $collection->load();
        $discounts->walk('afterLoad');
        foreach ($discounts as $discount) {
            $this->_setDiscount($discount);
            $this->_prepareDiscountForResponse($discount);
        }
        $discountsArray = $discounts->toArray();
        $discountsArray = $discountsArray['items'];

        return $discountsArray;
    }

    /**
     * prepare descuento for response
     *
     * @access protected
     * @param Herfox_SalesForce_Model_Discount $discount
     * @author Ultimate Module Creator
     */
    protected function _prepareDiscountForResponse(Herfox_SalesForce_Model_Discount $discount) {
        $discountData = $discount->getData();
    }

    /**
     * create descuento
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
     * update descuento
     *
     * @access protected
     * @param array $data
     * @author Ultimate Module Creator
     */
    protected function _update(array $data) {
        $this->_critical(self::RESOURCE_METHOD_NOT_ALLOWED);
    }

    /**
     * delete descuento
     *
     * @access protected
     * @author Ultimate Module Creator
     */
    protected function _delete() {
        $this->_critical(self::RESOURCE_METHOD_NOT_ALLOWED);
    }

    /**
     * delete current descuento
     *
     * @access protected
     * @param Herfox_SalesForce_Model_Discount $discount
     * @author Ultimate Module Creator
     */
    protected function _setDiscount(Herfox_SalesForce_Model_Discount $discount) {
        $this->_discount = $discount;
    }

    /**
     * get current descuento
     *
     * @access protected
     * @return Herfox_SalesForce_Model_Discount
     * @author Ultimate Module Creator
     */
    protected function _getDiscount() {
        if (is_null($this->_discount)) {
            $discountId = $this->getRequest()->getParam('id');
            $discount = Mage::getModel('herfox_salesforce/discount');
            $discount->load($discountId);
            if (!($discount->getId())) {
                $this->_critical(self::RESOURCE_NOT_FOUND);
            }
            $this->_discount = $discount;
        }
        return $this->_discount;
    }
}
