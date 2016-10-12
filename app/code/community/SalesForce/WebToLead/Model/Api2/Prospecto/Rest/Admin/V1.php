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
/**
 * Prospecto REST API admin handler
 *
 * @category    SalesForce
 * @package     SalesForce_WebToLead
 * @author      Ultimate Module Creator
 */
class SalesForce_WebToLead_Model_Api2_Prospecto_Rest_Admin_V1 extends SalesForce_WebToLead_Model_Api2_Prospecto_Rest
{

    /**
     * Remove specified keys from associative or indexed array
     *
     * @access protected
     * @param array $array
     * @param array $keys
     * @param bool $dropOrigKeys if true - return array as indexed array
     * @return array
     * @author Ultimate Module Creator
     */
    protected function _filterOutArrayKeys(array $array, array $keys, $dropOrigKeys = false) {
        $isIndexedArray = is_array(reset($array));
        if ($isIndexedArray) {
            foreach ($array as &$value) {
                if (is_array($value)) {
                    $value = array_diff_key($value, array_flip($keys));
                }
            }
            if ($dropOrigKeys) {
                $array = array_values($array);
            }
            unset($value);
        } else {
            $array = array_diff_key($array, array_flip($keys));
        }
        return $array;
    }

    /**
     * Retrieve list of prospectos
     *
     * @access protected
     * @return array
     * @author Ultimate Module Creator
     */
    protected function _retrieveCollection() {
        $collection = Mage::getResourceModel('salesforce_webtolead/prospecto_collection');
        $entityOnlyAttributes = $this->getEntityOnlyAttributes($this->getUserType(),
            Mage_Api2_Model_Resource::OPERATION_ATTRIBUTE_READ);
        $availableAttributes = array_keys($this->getAvailableAttributes($this->getUserType(),
            Mage_Api2_Model_Resource::OPERATION_ATTRIBUTE_READ));
        $this->_applyCollectionModifiers($collection);
        $prospectos = $collection->load();

        foreach ($prospectos as $prospecto) {
            $this->_setProspecto($prospecto);
            $this->_prepareProspectoForResponse($prospecto);
        }
        $prospectosArray = $prospectos->toArray();
        $prospectosArray = $prospectosArray['items'];

        return $prospectosArray;
    }

    /**
     * Delete prospecto by its ID
     *
     * @access protected
     * @throws Mage_Api2_Exception
     * @author Ultimate Module Creator
     */
    protected function _delete() {
        $prospecto = $this->_getProspecto();
        try {
            $prospecto->delete();
        } catch (Mage_Core_Exception $e) {
            $this->_critical($e->getMessage(), Mage_Api2_Model_Server::HTTP_INTERNAL_ERROR);
        } catch (Exception $e) {
            $this->_critical(self::RESOURCE_INTERNAL_ERROR);
        }
    }

    /**
     * Create prospecto
     *
     * @access protected
     * @param array $data
     * @return string
     * @author Ultimate Module Creator
     */
    protected function _create(array $data) {
        $prospecto = Mage::getModel('salesforce_webtolead/prospecto')->setData($data);
        try {
            $prospecto->save();
        }
        catch (Mage_Core_Exception $e) {
            $this->_critical($e->getMessage(), Mage_Api2_Model_Server::HTTP_INTERNAL_ERROR);
        } catch (Exception $e) {
            $this->_critical(self::RESOURCE_UNKNOWN_ERROR);
        }
        return $this->_getLocation($prospecto->getId());
    }

    /**
     * Update prospecto by its ID
     *
     * @access protected
     * @param array $data
     * @author Ultimate Module Creator
     */
    protected function _update(array $data) {
        $prospecto = $this->_getProspecto();
        $prospecto->addData($data);
        try {
            $prospecto->save();
        } catch (Mage_Core_Exception $e) {
            $this->_critical($e->getMessage(), Mage_Api2_Model_Server::HTTP_INTERNAL_ERROR);
        } catch (Exception $e) {
            $this->_critical(self::RESOURCE_UNKNOWN_ERROR);
        }
    }

    /**
     * Set additional data before prospecto save
     *
     * @access protected
     * @param SalesForce_WebToLead_Model_Prospecto $entity
     * @param array $prospectoData
     * @author Ultimate Module Creator
     */
    protected function _prepareDataForSave($product, $productData) {
        //add your data processing algorithm here if needed
    }
}