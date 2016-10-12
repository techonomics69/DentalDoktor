<?php
/**
 * SalesForce_WebToLead extension
 * 
 * NOTICE OF LICENSE
 * 
 * This source file is subject to the MIT License
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/mit-license.php
 * 
 * @category       SalesForce
 * @package        SalesForce_WebToLead
 * @copyright      Copyright (c) 2016
 * @license        http://opensource.org/licenses/mit-license.php MIT License
 */
class SalesForce_WebToLead_Model_Prospecto_Api extends Mage_Api_Model_Resource_Abstract
{


    /**
     * init prospecto
     *
     * @access protected
     * @param $prospectoId
     * @return SalesForce_WebToLead_Model_Prospecto
     * @author      Ultimate Module Creator
     */
    protected function _initProspecto($prospectoId)
    {
        $prospecto = Mage::getModel('salesforce_webtolead/prospecto')->load($prospectoId);
        if (!$prospecto->getId()) {
            $this->_fault('prospecto_not_exists');
        }
        return $prospecto;
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
        $collection = Mage::getModel('salesforce_webtolead/prospecto')->getCollection();
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
        foreach ($collection as $prospecto) {
            $result[] = $this->_getApiData($prospecto);
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
                throw new Exception(Mage::helper('salesforce_webtolead')->__("Data cannot be null"));
            }
            $data = (array)$data;
            $prospecto = Mage::getModel('salesforce_webtolead/prospecto')
                ->setData((array)$data)
                ->save();
        } catch (Mage_Core_Exception $e) {
            $this->_fault('data_invalid', $e->getMessage());
        } catch (Exception $e) {
            $this->_fault('data_invalid', $e->getMessage());
        }
        return $prospecto->getId();
    }

    /**
     * Change existing prospecto information
     *
     * @access public
     * @param int $prospectoId
     * @param array $data
     * @return bool
     * @author Ultimate Module Creator
     */
    public function update($prospectoId, $data)
    {
        $prospecto = $this->_initProspecto($prospectoId);
        try {
            $data = (array)$data;
            $prospecto->addData($data);
            $prospecto->save();
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
     * @param int $prospectoId
     * @return bool
     * @author Ultimate Module Creator
     */
    public function remove($prospectoId)
    {
        $prospecto = $this->_initProspecto($prospectoId);
        try {
            $prospecto->delete();
        } catch (Mage_Core_Exception $e) {
            $this->_fault('remove_error', $e->getMessage());
        }
        return true;
    }

    /**
     * get info
     *
     * @access public
     * @param int $prospectoId
     * @return array
     * @author Ultimate Module Creator
     */
    public function info($prospectoId)
    {
        $result = array();
        $prospecto = $this->_initProspecto($prospectoId);
        $result = $this->_getApiData($prospecto);
        return $result;
    }

    /**
     * get data for api
     *
     * @access protected
     * @param SalesForce_WebToLead_Model_Prospecto $prospecto
     * @return array()
     * @author Ultimate Module Creator
     */
    protected function _getApiData(SalesForce_WebToLead_Model_Prospecto $prospecto)
    {
        return $prospecto->getData();
    }
}
