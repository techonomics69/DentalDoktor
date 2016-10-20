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
 * Producto admin edit form
 *
 * @category    Herfox
 * @package     Herfox_SalesForce
 * @author      Ultimate Module Creator
 */
class Herfox_SalesForce_Block_Adminhtml_Product_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
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
        $this->_blockGroup = 'herfox_salesforce';
        $this->_controller = 'adminhtml_product';
        $this->_updateButton(
            'save',
            'label',
            Mage::helper('herfox_salesforce')->__('Save Producto')
        );
        $this->_updateButton(
            'delete',
            'label',
            Mage::helper('herfox_salesforce')->__('Delete Producto')
        );
        $this->_addButton(
            'saveandcontinue',
            array(
                'label'   => Mage::helper('herfox_salesforce')->__('Save And Continue Edit'),
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
        if (Mage::registry('current_product') && Mage::registry('current_product')->getId()) {
            return Mage::helper('herfox_salesforce')->__(
                "Edit Producto '%s'",
                $this->escapeHtml(Mage::registry('current_product')->getName())
            );
        } else {
            return Mage::helper('herfox_salesforce')->__('Add Producto');
        }
    }
}
