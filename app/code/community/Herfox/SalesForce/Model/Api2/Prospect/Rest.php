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
 * Prospecto abstract REST API handler model
 *
 * @category    Herfox
 * @package     Herfox_SalesForce
 * @author      Ultimate Module Creator
 */
abstract class Herfox_SalesForce_Model_Api2_Prospect_Rest extends Herfox_SalesForce_Model_Api2_Prospect
{
    /**
     * current prospecto
     */
    protected $_prospect;

    /**
     * retrieve entity
     *
     * @access protected
     * @return array|mixed
     * @author Ultimate Module Creator
     */
    protected function _retrieve() {
        $prospect = $this->_getProspect();
        $this->_prepareProspectForResponse($prospect);
        return $prospect->getData();
    }

    /**
     * get collection
     *
     * @access protected
     * @return array
     * @author Ultimate Module Creator
     */
    protected function _retrieveCollection() {
        $collection = Mage::getResourceModel('herfox_salesforce/prospect_collection');
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
        $prospects = $collection->load();
        $prospects->walk('afterLoad');
        foreach ($prospects as $prospect) {
            $this->_setProspect($prospect);
            $this->_prepareProspectForResponse($prospect);
        }
        $prospectsArray = $prospects->toArray();
        $prospectsArray = $prospectsArray['items'];

        return $prospectsArray;
    }

    /**
     * prepare prospecto for response
     *
     * @access protected
     * @param Herfox_SalesForce_Model_Prospect $prospect
     * @author Ultimate Module Creator
     */
    protected function _prepareProspectForResponse(Herfox_SalesForce_Model_Prospect $prospect) {
        $prospectData = $prospect->getData();
    }

    /**
     * create prospecto
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
     * update prospecto
     *
     * @access protected
     * @param array $data
     * @author Ultimate Module Creator
     */
    protected function _update(array $data) {
        $this->_critical(self::RESOURCE_METHOD_NOT_ALLOWED);
    }

    /**
     * delete prospecto
     *
     * @access protected
     * @author Ultimate Module Creator
     */
    protected function _delete() {
        $this->_critical(self::RESOURCE_METHOD_NOT_ALLOWED);
    }

    /**
     * delete current prospecto
     *
     * @access protected
     * @param Herfox_SalesForce_Model_Prospect $prospect
     * @author Ultimate Module Creator
     */
    protected function _setProspect(Herfox_SalesForce_Model_Prospect $prospect) {
        $this->_prospect = $prospect;
    }

    /**
     * get current prospecto
     *
     * @access protected
     * @return Herfox_SalesForce_Model_Prospect
     * @author Ultimate Module Creator
     */
    protected function _getProspect() {
        if (is_null($this->_prospect)) {
            $prospectId = $this->getRequest()->getParam('id');
            $prospect = Mage::getModel('herfox_salesforce/prospect');
            $prospect->load($prospectId);
            if (!($prospect->getId())) {
                $this->_critical(self::RESOURCE_NOT_FOUND);
            }
            $this->_prospect = $prospect;
        }
        return $this->_prospect;
    }
}
