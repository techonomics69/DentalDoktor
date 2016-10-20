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
 * Prospecto edit form tab
 *
 * @category    Herfox
 * @package     Herfox_SalesForce
 * @author      Ultimate Module Creator
 */
class Herfox_SalesForce_Block_Adminhtml_Prospect_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
    /**
     * prepare the form
     *
     * @access protected
     * @return Herfox_SalesForce_Block_Adminhtml_Prospect_Edit_Tab_Form
     * @author Ultimate Module Creator
     */
    protected function _prepareForm()
    {
        $form = new Varien_Data_Form();
        $form->setHtmlIdPrefix('prospect_');
        $form->setFieldNameSuffix('prospect');
        $this->setForm($form);
        $fieldset = $form->addFieldset(
            'prospect_form',
            array('legend' => Mage::helper('herfox_salesforce')->__('Prospecto'))
        );

        $fieldset->addField(
            'customer_id',
            'text',
            array(
                'label' => Mage::helper('herfox_salesforce')->__('ID Cliente'),
                'name'  => 'customer_id',
                'required'  => true,
                'class' => 'required-entry',

           )
        );

        $fieldset->addField(
            'first_name',
            'text',
            array(
                'label' => Mage::helper('herfox_salesforce')->__('Nombres'),
                'name'  => 'first_name',
                'required'  => true,
                'class' => 'required-entry',

           )
        );

        $fieldset->addField(
            'last_name',
            'text',
            array(
                'label' => Mage::helper('herfox_salesforce')->__('Apellidos'),
                'name'  => 'last_name',
                'required'  => true,
                'class' => 'required-entry',

           )
        );

        $fieldset->addField(
            'document_type',
            'text',
            array(
                'label' => Mage::helper('herfox_salesforce')->__('Tipo de Documento'),
                'name'  => 'document_type',
                'required'  => true,
                'class' => 'required-entry',

           )
        );

        $fieldset->addField(
            'document_number',
            'text',
            array(
                'label' => Mage::helper('herfox_salesforce')->__('Número de Documento'),
                'name'  => 'document_number',
                'required'  => true,
                'class' => 'required-entry',

           )
        );

        $fieldset->addField(
            'birthdate',
            'text',
            array(
                'label' => Mage::helper('herfox_salesforce')->__('Fecha de nacimiento'),
                'name'  => 'birthdate',

           )
        );

        $fieldset->addField(
            'mobile',
            'text',
            array(
                'label' => Mage::helper('herfox_salesforce')->__('Celular'),
                'name'  => 'mobile',

           )
        );

        $fieldset->addField(
            'email_type',
            'text',
            array(
                'label' => Mage::helper('herfox_salesforce')->__('Tipo de Correo'),
                'name'  => 'email_type',

           )
        );

        $fieldset->addField(
            'email',
            'text',
            array(
                'label' => Mage::helper('herfox_salesforce')->__('Correo electrónico'),
                'name'  => 'email',
                'required'  => true,
                'class' => 'required-entry',

           )
        );

        $fieldset->addField(
            'password',
            'text',
            array(
                'label' => Mage::helper('herfox_salesforce')->__('Clave'),
                'name'  => 'password',

           )
        );

        $fieldset->addField(
            'company',
            'text',
            array(
                'label' => Mage::helper('herfox_salesforce')->__('Compañía'),
                'name'  => 'company',
                'required'  => true,
                'class' => 'required-entry',

           )
        );

        $fieldset->addField(
            'industry',
            'text',
            array(
                'label' => Mage::helper('herfox_salesforce')->__('Especialidad'),
                'name'  => 'industry',

           )
        );

        $fieldset->addField(
            'area',
            'text',
            array(
                'label' => Mage::helper('herfox_salesforce')->__('Área'),
                'name'  => 'area',

           )
        );

        $fieldset->addField(
            'title',
            'text',
            array(
                'label' => Mage::helper('herfox_salesforce')->__('Cargo'),
                'name'  => 'title',

           )
        );

        $fieldset->addField(
            'phone',
            'text',
            array(
                'label' => Mage::helper('herfox_salesforce')->__('Teléfono'),
                'name'  => 'phone',
                'required'  => true,
                'class' => 'required-entry',

           )
        );

        $fieldset->addField(
            'fax',
            'text',
            array(
                'label' => Mage::helper('herfox_salesforce')->__('Fax'),
                'name'  => 'fax',

           )
        );

        $fieldset->addField(
            'website',
            'text',
            array(
                'label' => Mage::helper('herfox_salesforce')->__('Sitio Web'),
                'name'  => 'website',

           )
        );

        $fieldset->addField(
            'country_code',
            'text',
            array(
                'label' => Mage::helper('herfox_salesforce')->__('Código país'),
                'name'  => 'country_code',
                'required'  => true,
                'class' => 'required-entry',

           )
        );

        $fieldset->addField(
            'state_code',
            'text',
            array(
                'label' => Mage::helper('herfox_salesforce')->__('Código región'),
                'name'  => 'state_code',
                'required'  => true,
                'class' => 'required-entry',

           )
        );

        $fieldset->addField(
            'city',
            'text',
            array(
                'label' => Mage::helper('herfox_salesforce')->__('Ciudad'),
                'name'  => 'city',
                'required'  => true,
                'class' => 'required-entry',

           )
        );

        $fieldset->addField(
            'locality',
            'text',
            array(
                'label' => Mage::helper('herfox_salesforce')->__('Localidad'),
                'name'  => 'locality',

           )
        );

        $fieldset->addField(
            'street',
            'text',
            array(
                'label' => Mage::helper('herfox_salesforce')->__('Dirección'),
                'name'  => 'street',
                'required'  => true,
                'class' => 'required-entry',

           )
        );

        $fieldset->addField(
            'zip',
            'text',
            array(
                'label' => Mage::helper('herfox_salesforce')->__('Código postal'),
                'name'  => 'zip',

           )
        );

        $fieldset->addField(
            'lead_source',
            'text',
            array(
                'label' => Mage::helper('herfox_salesforce')->__('Como se enteró'),
                'name'  => 'lead_source',

           )
        );

        $fieldset->addField(
            'dentaldoktor',
            'text',
            array(
                'label' => Mage::helper('herfox_salesforce')->__('Proviene de Web DentalDoktor'),
                'name'  => 'dentaldoktor',
                'required'  => true,
                'class' => 'required-entry',

           )
        );

        $fieldset->addField(
            'habeas_data',
            'text',
            array(
                'label' => Mage::helper('herfox_salesforce')->__('Autoriza Habeas Data'),
                'name'  => 'habeas_data',
                'required'  => true,
                'class' => 'required-entry',

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
        $formValues = Mage::registry('current_prospect')->getDefaultValues();
        if (!is_array($formValues)) {
            $formValues = array();
        }
        if (Mage::getSingleton('adminhtml/session')->getProspectData()) {
            $formValues = array_merge($formValues, Mage::getSingleton('adminhtml/session')->getProspectData());
            Mage::getSingleton('adminhtml/session')->setProspectData(null);
        } elseif (Mage::registry('current_prospect')) {
            $formValues = array_merge($formValues, Mage::registry('current_prospect')->getData());
        }
        $form->setValues($formValues);
        return parent::_prepareForm();
    }
}
