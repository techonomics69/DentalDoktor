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
 * Prospecto model
 *
 * @category    Herfox
 * @package     Herfox_SalesForce
 * @author      Ultimate Module Creator
 */
class Herfox_SalesForce_Model_Prospect extends Mage_Core_Model_Abstract
{
    /**
     * Entity code.
     * Can be used as part of method name for entity processing
     */
    const ENTITY    = 'herfox_salesforce_prospect';
    const CACHE_TAG = 'herfox_salesforce_prospect';

    /**
     * Prefix of model events names
     *
     * @var string
     */
    protected $_eventPrefix = 'herfox_salesforce_prospect';

    /**
     * Parameter name in event
     *
     * @var string
     */
    protected $_eventObject = 'prospect';

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
        $this->_init('herfox_salesforce/prospect');
    }

    /**
     * before save prospecto
     *
     * @access protected
     * @return Herfox_SalesForce_Model_Prospect
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
     * @return Herfox_SalesForce_Model_Prospect
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
