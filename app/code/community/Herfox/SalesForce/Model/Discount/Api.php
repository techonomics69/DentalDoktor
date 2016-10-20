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
class Herfox_SalesForce_Model_Discount_Api extends Mage_Api_Model_Resource_Abstract
{


    /**
     * init descuento
     *
     * @access protected
     * @param $discountId
     * @return Herfox_SalesForce_Model_Discount
     * @author      Ultimate Module Creator
     */
    protected function _initDiscount($discountId)
    {
        $discount = Mage::getModel('herfox_salesforce/discount')->load($discountId);
        if (!$discount->getId()) {
            $this->_fault('discount_not_exists');
        }
        return $discount;
    }

    /**
     * get descuentos
     *
     * @access public
     * @param mixed $filters
     * @return array
     * @author Ultimate Module Creator
     */
    public function items($filters = null)
    {
        $collection = Mage::getModel('herfox_salesforce/discount')->getCollection();
        $apiHelper = Mage::helper('api');
        $filters = $apiHelper->parseFilters($filters);
        try {
            foreach ($filters as $field => $value) {
                $collection->addFieldToFilter($field, $value);
            }
        } catch (Mage_Core_Exception $e) {
            $this->_fault('filters_invalid', $e->getMessage());
        }
        $result = array();
        foreach ($collection as $discount) {
            $result[] = $this->_getApiData($discount);
        }
        return $result;
    }

    /**
     * Add descuento
     *
     * @access public
     * @param array $data
     * @return array
     * @author Ultimate Module Creator
     */
    public function add($data)
    {
        try {
            if (is_null($data)) {
                throw new Exception(Mage::helper('herfox_salesforce')->__("Data cannot be null"));
            }
            $data = (array)$data;
            $discount = Mage::getModel('herfox_salesforce/discount')
                ->setData((array)$data)
                ->save();
        } catch (Mage_Core_Exception $e) {
            $this->_fault('data_invalid', $e->getMessage());
        } catch (Exception $e) {
            $this->_fault('data_invalid', $e->getMessage());
        }
        return $discount->getId();
    }

    /**
     * Change existing descuento information
     *
     * @access public
     * @param int $discountId
     * @param array $data
     * @return bool
     * @author Ultimate Module Creator
     */
    public function update($discountId, $data)
    {
        $discount = $this->_initDiscount($discountId);
        try {
            $data = (array)$data;
            $discount->addData($data);
            $discount->save();
        }
        catch (Mage_Core_Exception $e) {
            $this->_fault('save_error', $e->getMessage());
        }

        return true;
    }

    /**
     * remove descuento
     *
     * @access public
     * @param int $discountId
     * @return bool
     * @author Ultimate Module Creator
     */
    public function remove($discountId)
    {
        $discount = $this->_initDiscount($discountId);
        try {
            $discount->delete();
        } catch (Mage_Core_Exception $e) {
            $this->_fault('remove_error', $e->getMessage());
        }
        return true;
    }

    /**
     * get info
     *
     * @access public
     * @param int $discountId
     * @return array
     * @author Ultimate Module Creator
     */
    public function info($discountId)
    {
        $result = array();
        $discount = $this->_initDiscount($discountId);
        $result = $this->_getApiData($discount);
        return $result;
    }

    /**
     * get data for api
     *
     * @access protected
     * @param Herfox_SalesForce_Model_Discount $discount
     * @return array()
     * @author Ultimate Module Creator
     */
    protected function _getApiData(Herfox_SalesForce_Model_Discount $discount)
    {
        return $discount->getData();
    }
}
