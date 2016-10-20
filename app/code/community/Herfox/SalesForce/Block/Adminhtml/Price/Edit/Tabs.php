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
 * Precio admin edit tabs
 *
 * @category    Herfox
 * @package     Herfox_SalesForce
 * @author      Ultimate Module Creator
 */
class Herfox_SalesForce_Block_Adminhtml_Price_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
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
        $this->setId('price_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(Mage::helper('herfox_salesforce')->__('Precio'));
    }

    /**
     * before render html
     *
     * @access protected
     * @return Herfox_SalesForce_Block_Adminhtml_Price_Edit_Tabs
     * @author Ultimate Module Creator
     */
    protected function _beforeToHtml()
    {
        $this->addTab(
            'form_price',
            array(
                'label'   => Mage::helper('herfox_salesforce')->__('Precio'),
                'title'   => Mage::helper('herfox_salesforce')->__('Precio'),
                'content' => $this->getLayout()->createBlock(
                    'herfox_salesforce/adminhtml_price_edit_tab_form'
                )
                ->toHtml(),
            )
        );
        return parent::_beforeToHtml();
    }

    /**
     * Retrieve precio entity
     *
     * @access public
     * @return Herfox_SalesForce_Model_Price
     * @author Ultimate Module Creator
     */
    public function getPrice()
    {
        return Mage::registry('current_price');
    }
}
