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
 * Prospecto admin edit tabs
 *
 * @category    SalesForce
 * @package     SalesForce_WebToLead
 * @author      Ultimate Module Creator
 */
class SalesForce_WebToLead_Block_Adminhtml_Prospecto_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{
    /**
     * Initialize Tabs
     *
     * @access public
     * @author Ultimate Module Creator
     */
    public function __construct()
    {
        parent::__construct();
        $this->setId('prospecto_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(Mage::helper('salesforce_webtolead')->__('Prospecto'));
    }

    /**
     * before render html
     *
     * @access protected
     * @return SalesForce_WebToLead_Block_Adminhtml_Prospecto_Edit_Tabs
     * @author Ultimate Module Creator
     */
    protected function _beforeToHtml()
    {
        $this->addTab(
            'form_prospecto',
            array(
                'label'   => Mage::helper('salesforce_webtolead')->__('Prospecto'),
                'title'   => Mage::helper('salesforce_webtolead')->__('Prospecto'),
                'content' => $this->getLayout()->createBlock(
                    'salesforce_webtolead/adminhtml_prospecto_edit_tab_form'
                )
                ->toHtml(),
            )
        );
        return parent::_beforeToHtml();
    }

    /**
     * Retrieve prospecto entity
     *
     * @access public
     * @return SalesForce_WebToLead_Model_Prospecto
     * @author Ultimate Module Creator
     */
    public function getProspecto()
    {
        return Mage::registry('current_prospecto');
    }
}
