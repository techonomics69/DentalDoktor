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
 * Descuento admin edit tabs
 *
 * @category    Herfox
 * @package     Herfox_SalesForce
 * @author      Ultimate Module Creator
 */
class Herfox_SalesForce_Block_Adminhtml_Discount_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
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
        $this->setId('discount_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(Mage::helper('herfox_salesforce')->__('Descuento'));
    }

    /**
     * before render html
     *
     * @access protected
     * @return Herfox_SalesForce_Block_Adminhtml_Discount_Edit_Tabs
     * @author Ultimate Module Creator
     */
    protected function _beforeToHtml()
    {
        $this->addTab(
            'form_discount',
            array(
                'label'   => Mage::helper('herfox_salesforce')->__('Descuento'),
                'title'   => Mage::helper('herfox_salesforce')->__('Descuento'),
                'content' => $this->getLayout()->createBlock(
                    'herfox_salesforce/adminhtml_discount_edit_tab_form'
                )
                ->toHtml(),
            )
        );
        return parent::_beforeToHtml();
    }

    /**
     * Retrieve descuento entity
     *
     * @access public
     * @return Herfox_SalesForce_Model_Discount
     * @author Ultimate Module Creator
     */
    public function getDiscount()
    {
        return Mage::registry('current_discount');
    }
}
