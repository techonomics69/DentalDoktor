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
 * Descuento edit form tab
 *
 * @category    Herfox
 * @package     Herfox_SalesForce
 * @author      Ultimate Module Creator
 */
class Herfox_SalesForce_Block_Adminhtml_Discount_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
    /**
     * prepare the form
     *
     * @access protected
     * @return Herfox_SalesForce_Block_Adminhtml_Discount_Edit_Tab_Form
     * @author Ultimate Module Creator
     */
    protected function _prepareForm()
    {
        $form = new Varien_Data_Form();
        $form->setHtmlIdPrefix('discount_');
        $form->setFieldNameSuffix('discount');
        $this->setForm($form);
        $fieldset = $form->addFieldset(
            'discount_form',
            array('legend' => Mage::helper('herfox_salesforce')->__('Descuento'))
        );

        $fieldset->addField(
            'name',
            'text',
            array(
                'label' => Mage::helper('herfox_salesforce')->__('Nombre'),
                'name'  => 'name',
                'required'  => true,
                'class' => 'required-entry',

           )
        );

        $fieldset->addField(
            'total',
            'text',
            array(
                'label' => Mage::helper('herfox_salesforce')->__('Procesados'),
                'name'  => 'total',
                'required'  => true,
                'class' => 'required-entry',

           )
        );

        $fieldset->addField(
            'success',
            'text',
            array(
                'label' => Mage::helper('herfox_salesforce')->__('Exitosos'),
                'name'  => 'success',
                'required'  => true,
                'class' => 'required-entry',

           )
        );

        $fieldset->addField(
            'unsuccess',
            'text',
            array(
                'label' => Mage::helper('herfox_salesforce')->__('No exitosos'),
                'name'  => 'unsuccess',
                'required'  => true,
                'class' => 'required-entry',

           )
        );

        $fieldset->addField(
            'errors',
            'textarea',
            array(
                'label' => Mage::helper('herfox_salesforce')->__('Errores'),
                'name'  => 'errors',

           )
        );
        $fieldset->addField(
            'status',
            'select',
            array(
                'label'  => Mage::helper('herfox_salesforce')->__('Status'),
                'name'   => 'status',
                'values' => array(
                    array(
                        'value' => 1,
                        'label' => Mage::helper('herfox_salesforce')->__('Enabled'),
                    ),
                    array(
                        'value' => 0,
                        'label' => Mage::helper('herfox_salesforce')->__('Disabled'),
                    ),
                ),
            )
        );
        $formValues = Mage::registry('current_discount')->getDefaultValues();
        if (!is_array($formValues)) {
            $formValues = array();
        }
        if (Mage::getSingleton('adminhtml/session')->getDiscountData()) {
            $formValues = array_merge($formValues, Mage::getSingleton('adminhtml/session')->getDiscountData());
            Mage::getSingleton('adminhtml/session')->setDiscountData(null);
        } elseif (Mage::registry('current_discount')) {
            $formValues = array_merge($formValues, Mage::registry('current_discount')->getData());
        }
        $form->setValues($formValues);
        return parent::_prepareForm();
    }
}
