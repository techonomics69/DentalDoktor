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
 * Precio edit form tab
 *
 * @category    Herfox
 * @package     Herfox_SalesForce
 * @author      Ultimate Module Creator
 */
class Herfox_SalesForce_Block_Adminhtml_Price_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
    /**
     * prepare the form
     *
     * @access protected
     * @return Herfox_SalesForce_Block_Adminhtml_Price_Edit_Tab_Form
     * @author Ultimate Module Creator
     */
    protected function _prepareForm()
    {
        $form = new Varien_Data_Form();
        $form->setHtmlIdPrefix('price_');
        $form->setFieldNameSuffix('price');
        $this->setForm($form);
        $fieldset = $form->addFieldset(
            'price_form',
            array('legend' => Mage::helper('herfox_salesforce')->__('Precio'))
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
        $formValues = Mage::registry('current_price')->getDefaultValues();
        if (!is_array($formValues)) {
            $formValues = array();
        }
        if (Mage::getSingleton('adminhtml/session')->getPriceData()) {
            $formValues = array_merge($formValues, Mage::getSingleton('adminhtml/session')->getPriceData());
            Mage::getSingleton('adminhtml/session')->setPriceData(null);
        } elseif (Mage::registry('current_price')) {
            $formValues = array_merge($formValues, Mage::registry('current_price')->getData());
        }
        $form->setValues($formValues);
        return parent::_prepareForm();
    }
}
