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
class Herfox_SalesForce_Model_Price_Api extends Mage_Api_Model_Resource_Abstract
{


    /**
     * init precio
     *
     * @access protected
     * @param $priceId
     * @return Herfox_SalesForce_Model_Price
     * @author      Ultimate Module Creator
     */
    protected function _initPrice($priceId)
    {
        $price = Mage::getModel('herfox_salesforce/price')->load($priceId);
        if (!$price->getId()) {
            $this->_fault('price_not_exists');
        }
        return $price;
    }

    /**
     * get precios
     *
     * @access public
     * @param mixed $filters
     * @return array
     * @author Ultimate Module Creator
     */
    public function items($filters = null)
    {
        $collection = Mage::getModel('herfox_salesforce/price')->getCollection();
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
        foreach ($collection as $price) {
            $result[] = $this->_getApiData($price);
        }
        return $result;
    }

    /**
     * Add precio
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
            $price = Mage::getModel('herfox_salesforce/price')
                ->setData((array)$data)
                ->save();
        } catch (Mage_Core_Exception $e) {
            $this->_fault('data_invalid', $e->getMessage());
        } catch (Exception $e) {
            $this->_fault('data_invalid', $e->getMessage());
        }
        return $price->getId();
    }

    /**
     * Change existing precio information
     *
     * @access public
     * @param int $priceId
     * @param array $data
     * @return bool
     * @author Ultimate Module Creator
     */
    public function update($priceId, $data)
    {
        $price = $this->_initPrice($priceId);
        try {
            $data = (array)$data;
            $price->addData($data);
            $price->save();
        }
        catch (Mage_Core_Exception $e) {
            $this->_fault('save_error', $e->getMessage());
        }

        return true;
    }

    /**
     * remove precio
     *
     * @access public
     * @param int $priceId
     * @return bool
     * @author Ultimate Module Creator
     */
    public function remove($priceId)
    {
        $price = $this->_initPrice($priceId);
        try {
            $price->delete();
        } catch (Mage_Core_Exception $e) {
            $this->_fault('remove_error', $e->getMessage());
        }
        return true;
    }

    /**
     * get info
     *
     * @access public
     * @param int $priceId
     * @return array
     * @author Ultimate Module Creator
     */
    public function info($priceId)
    {
        $result = array();
        $price = $this->_initPrice($priceId);
        $result = $this->_getApiData($price);
        return $result;
    }

    /**
     * get data for api
     *
     * @access protected
     * @param Herfox_SalesForce_Model_Price $price
     * @return array()
     * @author Ultimate Module Creator
     */
    protected function _getApiData(Herfox_SalesForce_Model_Price $price)
    {
        return $price->getData();
    }
}
