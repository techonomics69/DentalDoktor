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
 * Prospecto model
 *
 * @category    SalesForce
 * @package     SalesForce_WebToLead
 * @author      Ultimate Module Creator
 */
class SalesForce_WebToLead_Model_Prospecto extends Mage_Core_Model_Abstract
{
    /**
     * Entity code.
     * Can be used as part of method name for entity processing
     */
    const ENTITY    = 'salesforce_webtolead_prospecto';
    const CACHE_TAG = 'salesforce_webtolead_prospecto';

    /**
     * Prefix of model events names
     *
     * @var string
     */
    protected $_eventPrefix = 'salesforce_webtolead_prospecto';

    /**
     * Parameter name in event
     *
     * @var string
     */
    protected $_eventObject = 'prospecto';

    /**
     * constructor
     *
     * @access public
     * @return void
     * @author Ultimate Module Creator
     */
    public function _construct()
    {
        parent::_construct();
        $this->_init('salesforce_webtolead/prospecto');
    }

    /**
     * before save prospecto
     *
     * @access protected
     * @return SalesForce_WebToLead_Model_Prospecto
     * @author Ultimate Module Creator
     */
    protected function _beforeSave()
    {
        parent::_beforeSave();
        $now = Mage::getSingleton('core/date')->gmtDate();
        if ($this->isObjectNew()) {
            $this->setCreatedAt($now);
        }
        $this->setUpdatedAt($now);
        return $this;
    }

    /**
     * save prospecto relation
     *
     * @access public
     * @return SalesForce_WebToLead_Model_Prospecto
     * @author Ultimate Module Creator
     */
    protected function _afterSave()
    {
        return parent::_afterSave();
    }

    /**
     * get default values
     *
     * @access public
     * @return array
     * @author Ultimate Module Creator
     */
    public function getDefaultValues()
    {
        $values = array();
        $values['status'] = 1;
        return $values;
    }
    
}
