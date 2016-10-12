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
 * Prospecto admin edit form
 *
 * @category    SalesForce
 * @package     SalesForce_WebToLead
 * @author      Ultimate Module Creator
 */
class SalesForce_WebToLead_Block_Adminhtml_Prospecto_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
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
        parent::__construct();
        $this->_blockGroup = 'salesforce_webtolead';
        $this->_controller = 'adminhtml_prospecto';
        $this->_updateButton(
            'save',
            'label',
            Mage::helper('salesforce_webtolead')->__('Save Prospecto')
        );
        $this->_updateButton(
            'delete',
            'label',
            Mage::helper('salesforce_webtolead')->__('Delete Prospecto')
        );
        $this->_addButton(
            'saveandcontinue',
            array(
                'label'   => Mage::helper('salesforce_webtolead')->__('Save And Continue Edit'),
                'onclick' => 'saveAndContinueEdit()',
                'class'   => 'save',
            ),
            -100
        );
        $this->_formScripts[] = "
            function saveAndContinueEdit() {
                editForm.submit($('edit_form').action+'back/edit/');
            }
        ";
    }

    /**
     * get the edit form header
     *
     * @access public
     * @return string
     * @author Ultimate Module Creator
     */
    public function getHeaderText()
    {
        if (Mage::registry('current_prospecto') && Mage::registry('current_prospecto')->getId()) {
            return Mage::helper('salesforce_webtolead')->__(
                "Edit Prospecto '%s'",
                $this->escapeHtml(Mage::registry('current_prospecto')->getEmail())
            );
        } else {
            return Mage::helper('salesforce_webtolead')->__('Add Prospecto');
        }
    }
}
