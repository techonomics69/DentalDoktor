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
 * Prospecto admin block
 *
 * @category    SalesForce
 * @package     SalesForce_WebToLead
 * @author      Ultimate Module Creator
 */
class SalesForce_WebToLead_Block_Adminhtml_Prospecto extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    /**
     * constructor
     *
     * @access public
     * @return void
     * @author Ultimate Module Creator
     */
    public function __construct()
    {
        $this->_controller         = 'adminhtml_prospecto';
        $this->_blockGroup         = 'salesforce_webtolead';
        parent::__construct();
        $this->_headerText         = Mage::helper('salesforce_webtolead')->__('Prospecto');
        $this->_updateButton('add', 'label', Mage::helper('salesforce_webtolead')->__('Add Prospecto'));

    }
}
