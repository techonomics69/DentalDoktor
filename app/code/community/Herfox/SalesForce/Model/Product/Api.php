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
class Herfox_SalesForce_Model_Product_Api extends Mage_Api_Model_Resource_Abstract
{


    /**
     * init producto
     *
     * @access protected
     * @param $productId
     * @return Herfox_SalesForce_Model_Product
     * @author      Ultimate Module Creator
     */
    protected function _initProduct($productId)
    {
        $product = Mage::getModel('herfox_salesforce/product')->load($productId);
        if (!$product->getId()) {
            $this->_fault('product_not_exists');
        }
        return $product;
    }

    /**
     * get productos
     *
     * @access public
     * @param mixed $filters
     * @return array
     * @author Ultimate Module Creator
     */
    public function items($filters = null)
    {
        $collection = Mage::getModel('herfox_salesforce/product')->getCollection();
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
        foreach ($collection as $product) {
            $result[] = $this->_getApiData($product);
        }
        return $result;
    }

    /**
     * Add producto
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
            $product = Mage::getModel('herfox_salesforce/product')
                ->setData((array)$data)
                ->save();
        } catch (Mage_Core_Exception $e) {
            $this->_fault('data_invalid', $e->getMessage());
        } catch (Exception $e) {
            $this->_fault('data_invalid', $e->getMessage());
        }
        return $product->getId();
    }

    /**
     * Change existing producto information
     *
     * @access public
     * @param int $productId
     * @param array $data
     * @return bool
     * @author Ultimate Module Creator
     */
    public function update($productId, $data)
    {
        $product = $this->_initProduct($productId);
        try {
            $data = (array)$data;
            $product->addData($data);
            $product->save();
        }
        catch (Mage_Core_Exception $e) {
            $this->_fault('save_error', $e->getMessage());
        }

        return true;
    }

    /**
     * remove producto
     *
     * @access public
     * @param int $productId
     * @return bool
     * @author Ultimate Module Creator
     */
    public function remove($productId)
    {
        $product = $this->_initProduct($productId);
        try {
            $product->delete();
        } catch (Mage_Core_Exception $e) {
            $this->_fault('remove_error', $e->getMessage());
        }
        return true;
    }

    /**
     * get info
     *
     * @access public
     * @param int $productId
     * @return array
     * @author Ultimate Module Creator
     */
    public function info($productId)
    {
        $result = array();
        $product = $this->_initProduct($productId);
        $result = $this->_getApiData($product);
        return $result;
    }

    /**
     * get data for api
     *
     * @access protected
     * @param Herfox_SalesForce_Model_Product $product
     * @return array()
     * @author Ultimate Module Creator
     */
    protected function _getApiData(Herfox_SalesForce_Model_Product $product)
    {
        return $product->getData();
    }
}
