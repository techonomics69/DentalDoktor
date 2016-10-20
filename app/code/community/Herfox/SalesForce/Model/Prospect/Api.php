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
class Herfox_SalesForce_Model_Prospect_Api extends Mage_Api_Model_Resource_Abstract
{


    /**
     * init prospecto
     *
     * @access protected
     * @param $prospectId
     * @return Herfox_SalesForce_Model_Prospect
     * @author      Ultimate Module Creator
     */
    protected function _initProspect($prospectId)
    {
        $prospect = Mage::getModel('herfox_salesforce/prospect')->load($prospectId);
        if (!$prospect->getId()) {
            $this->_fault('prospect_not_exists');
        }
        return $prospect;
    }

    /**
     * get prospectos
     *
     * @access public
     * @param mixed $filters
     * @return array
     * @author Ultimate Module Creator
     */
    public function items($filters = null)
    {
        $collection = Mage::getModel('herfox_salesforce/prospect')->getCollection();
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
        foreach ($collection as $prospect) {
            $result[] = $this->_getApiData($prospect);
        }
        return $result;
    }

    /**
     * Add prospecto
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
            $prospect = Mage::getModel('herfox_salesforce/prospect')
                ->setData((array)$data)
                ->save();
        } catch (Mage_Core_Exception $e) {
            $this->_fault('data_invalid', $e->getMessage());
        } catch (Exception $e) {
            $this->_fault('data_invalid', $e->getMessage());
        }
        return $prospect->getId();
    }

    /**
     * Change existing prospecto information
     *
     * @access public
     * @param int $prospectId
     * @param array $data
     * @return bool
     * @author Ultimate Module Creator
     */
    public function update($prospectId, $data)
    {
        $prospect = $this->_initProspect($prospectId);
        try {
            $data = (array)$data;
            $prospect->addData($data);
            $prospect->save();
        }
        catch (Mage_Core_Exception $e) {
            $this->_fault('save_error', $e->getMessage());
        }

        return true;
    }

    /**
     * remove prospecto
     *
     * @access public
     * @param int $prospectId
     * @return bool
     * @author Ultimate Module Creator
     */
    public function remove($prospectId)
    {
        $prospect = $this->_initProspect($prospectId);
        try {
            $prospect->delete();
        } catch (Mage_Core_Exception $e) {
            $this->_fault('remove_error', $e->getMessage());
        }
        return true;
    }

    /**
     * get info
     *
     * @access public
     * @param int $prospectId
     * @return array
     * @author Ultimate Module Creator
     */
    public function info($prospectId)
    {
        $result = array();
        $prospect = $this->_initProspect($prospectId);
        $result = $this->_getApiData($prospect);
        return $result;
    }

    /**
     * get data for api
     *
     * @access protected
     * @param Herfox_SalesForce_Model_Prospect $prospect
     * @return array()
     * @author Ultimate Module Creator
     */
    protected function _getApiData(Herfox_SalesForce_Model_Prospect $prospect)
    {
        return $prospect->getData();
    }
}
