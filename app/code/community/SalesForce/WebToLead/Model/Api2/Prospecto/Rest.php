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
 * Prospecto abstract REST API handler model
 *
 * @category    SalesForce
 * @package     SalesForce_WebToLead
 * @author      Ultimate Module Creator
 */
abstract class SalesForce_WebToLead_Model_Api2_Prospecto_Rest extends SalesForce_WebToLead_Model_Api2_Prospecto
{
    /**
     * current prospecto
     */
    protected $_prospecto;

    /**
     * retrieve entity
     *
     * @access protected
     * @return array|mixed
     * @author Ultimate Module Creator
     */
    protected function _retrieve() {
        $prospecto = $this->_getProspecto();
        $this->_prepareProspectoForResponse($prospecto);
        return $prospecto->getData();
    }

    /**
     * get collection
     *
     * @access protected
     * @return array
     * @author Ultimate Module Creator
     */
    protected function _retrieveCollection() {
        $collection = Mage::getResourceModel('salesforce_webtolead/prospecto_collection');
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
        $prospectos = $collection->load();
        $prospectos->walk('afterLoad');
        foreach ($prospectos as $prospecto) {
            $this->_setProspecto($prospecto);
            $this->_prepareProspectoForResponse($prospecto);
        }
        $prospectosArray = $prospectos->toArray();
        $prospectosArray = $prospectosArray['items'];

        return $prospectosArray;
    }

    /**
     * prepare prospecto for response
     *
     * @access protected
     * @param SalesForce_WebToLead_Model_Prospecto $prospecto
     * @author Ultimate Module Creator
     */
    protected function _prepareProspectoForResponse(SalesForce_WebToLead_Model_Prospecto $prospecto) {
        $prospectoData = $prospecto->getData();
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
     * @param SalesForce_WebToLead_Model_Prospecto $prospecto
     * @author Ultimate Module Creator
     */
    protected function _setProspecto(SalesForce_WebToLead_Model_Prospecto $prospecto) {
        $this->_prospecto = $prospecto;
    }

    /**
     * get current prospecto
     *
     * @access protected
     * @return SalesForce_WebToLead_Model_Prospecto
     * @author Ultimate Module Creator
     */
    protected function _getProspecto() {
        if (is_null($this->_prospecto)) {
            $prospectoId = $this->getRequest()->getParam('id');
            $prospecto = Mage::getModel('salesforce_webtolead/prospecto');
            $prospecto->load($prospectoId);
            if (!($prospecto->getId())) {
                $this->_critical(self::RESOURCE_NOT_FOUND);
            }
            $this->_prospecto = $prospecto;
        }
        return $this->_prospecto;
    }
}
