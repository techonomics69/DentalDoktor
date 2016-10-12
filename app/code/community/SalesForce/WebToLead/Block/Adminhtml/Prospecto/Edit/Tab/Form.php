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
 * Prospecto edit form tab
 *
 * @category    SalesForce
 * @package     SalesForce_WebToLead
 * @author      Ultimate Module Creator
 */
class SalesForce_WebToLead_Block_Adminhtml_Prospecto_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
    /**
     * prepare the form
     *
     * @access protected
     * @return SalesForce_WebToLead_Block_Adminhtml_Prospecto_Edit_Tab_Form
     * @author Ultimate Module Creator
     */
    protected function _prepareForm()
    {
        $form = new Varien_Data_Form();
        $form->setHtmlIdPrefix('prospecto_');
        $form->setFieldNameSuffix('prospecto');
        $this->setForm($form);
        $fieldset = $form->addFieldset(
            'prospecto_form',
            array('legend' => Mage::helper('salesforce_webtolead')->__('Prospecto'))
        );

        $fieldset->addField(
            'first_name',
            'text',
            array(
                'label' => Mage::helper('salesforce_webtolead')->__('Nombres'),
                'name'  => 'first_name',
                'required'  => true,
                'class' => 'required-entry',

           )
        );

        $fieldset->addField(
            'last_name',
            'text',
            array(
                'label' => Mage::helper('salesforce_webtolead')->__('Apellidos'),
                'name'  => 'last_name',
                'required'  => true,
                'class' => 'required-entry',

           )
        );

        $fieldset->addField(
            'document_type',
            'text',
            array(
                'label' => Mage::helper('salesforce_webtolead')->__('Tipo de Documento'),
                'name'  => 'document_type',
                'required'  => true,
                'class' => 'required-entry',

           )
        );

        $fieldset->addField(
            'document_number',
            'text',
            array(
                'label' => Mage::helper('salesforce_webtolead')->__('Número de Documento'),
                'name'  => 'document_number',
                'required'  => true,
                'class' => 'required-entry',

           )
        );

        $fieldset->addField(
            'birthdate',
            'text',
            array(
                'label' => Mage::helper('salesforce_webtolead')->__('Fecha de nacimiento'),
                'name'  => 'birthdate',

           )
        );

        $fieldset->addField(
            'mobile',
            'text',
            array(
                'label' => Mage::helper('salesforce_webtolead')->__('Celular'),
                'name'  => 'mobile',

           )
        );

        $fieldset->addField(
            'email_type',
            'text',
            array(
                'label' => Mage::helper('salesforce_webtolead')->__('Tipo de Correo'),
                'name'  => 'email_type',

           )
        );

        $fieldset->addField(
            'email',
            'text',
            array(
                'label' => Mage::helper('salesforce_webtolead')->__('Correo electrónico'),
                'name'  => 'email',
                'required'  => true,
                'class' => 'required-entry',

           )
        );

        $fieldset->addField(
            'password',
            'text',
            array(
                'label' => Mage::helper('salesforce_webtolead')->__('Clave'),
                'name'  => 'password',

           )
        );

        $fieldset->addField(
            'company',
            'text',
            array(
                'label' => Mage::helper('salesforce_webtolead')->__('Compañía'),
                'name'  => 'company',
                'required'  => true,
                'class' => 'required-entry',

           )
        );

        $fieldset->addField(
            'industry',
            'text',
            array(
                'label' => Mage::helper('salesforce_webtolead')->__('Especialidad'),
                'name'  => 'industry',

           )
        );

        $fieldset->addField(
            'area',
            'text',
            array(
                'label' => Mage::helper('salesforce_webtolead')->__('Área'),
                'name'  => 'area',

           )
        );

        $fieldset->addField(
            'title',
            'text',
            array(
                'label' => Mage::helper('salesforce_webtolead')->__('Cargo'),
                'name'  => 'title',

           )
        );

        $fieldset->addField(
            'phone',
            'text',
            array(
                'label' => Mage::helper('salesforce_webtolead')->__('Teléfono'),
                'name'  => 'phone',
                'required'  => true,
                'class' => 'required-entry',

           )
        );

        $fieldset->addField(
            'fax',
            'text',
            array(
                'label' => Mage::helper('salesforce_webtolead')->__('Fax'),
                'name'  => 'fax',

           )
        );

        $fieldset->addField(
            'website',
            'text',
            array(
                'label' => Mage::helper('salesforce_webtolead')->__('Sitio Web'),
                'name'  => 'website',

           )
        );

        $fieldset->addField(
            'country_code',
            'text',
            array(
                'label' => Mage::helper('salesforce_webtolead')->__('Código país'),
                'name'  => 'country_code',
                'required'  => true,
                'class' => 'required-entry',

           )
        );

        $fieldset->addField(
            'state_code',
            'text',
            array(
                'label' => Mage::helper('salesforce_webtolead')->__('Código región'),
                'name'  => 'state_code',
                'required'  => true,
                'class' => 'required-entry',

           )
        );

        $fieldset->addField(
            'city',
            'text',
            array(
                'label' => Mage::helper('salesforce_webtolead')->__('Ciudad'),
                'name'  => 'city',
                'required'  => true,
                'class' => 'required-entry',

           )
        );

        $fieldset->addField(
            'locality',
            'text',
            array(
                'label' => Mage::helper('salesforce_webtolead')->__('Localidad'),
                'name'  => 'locality',

           )
        );

        $fieldset->addField(
            'street',
            'text',
            array(
                'label' => Mage::helper('salesforce_webtolead')->__('Dirección'),
                'name'  => 'street',
                'required'  => true,
                'class' => 'required-entry',

           )
        );

        $fieldset->addField(
            'zip',
            'text',
            array(
                'label' => Mage::helper('salesforce_webtolead')->__('Código postal'),
                'name'  => 'zip',

           )
        );

        $fieldset->addField(
            'lead_source',
            'text',
            array(
                'label' => Mage::helper('salesforce_webtolead')->__('Como se enteró'),
                'name'  => 'lead_source',

           )
        );

        $fieldset->addField(
            'dentaldoktor',
            'text',
            array(
                'label' => Mage::helper('salesforce_webtolead')->__('Proviene de Web DentalDoktor'),
                'name'  => 'dentaldoktor',
                'required'  => true,
                'class' => 'required-entry',

           )
        );

        $fieldset->addField(
            'habeas_data',
            'text',
            array(
                'label' => Mage::helper('salesforce_webtolead')->__('Autoriza Habeas Data'),
                'name'  => 'habeas_data',
                'required'  => true,
                'class' => 'required-entry',

           )
        );

        $fieldset->addField(
            'response',
            'text',
            array(
                'label' => Mage::helper('salesforce_webtolead')->__('Respuesta'),
                'name'  => 'response',
                'required'  => true,
                'class' => 'required-entry',

           )
        );
        $fieldset->addField(
            'status',
            'select',
            array(
                'label'  => Mage::helper('salesforce_webtolead')->__('Status'),
                'name'   => 'status',
                'values' => array(
                    array(
                        'value' => 1,
                        'label' => Mage::helper('salesforce_webtolead')->__('Enabled'),
                    ),
                    array(
                        'value' => 0,
                        'label' => Mage::helper('salesforce_webtolead')->__('Disabled'),
                    ),
                ),
            )
        );
        $formValues = Mage::registry('current_prospecto')->getDefaultValues();
        if (!is_array($formValues)) {
            $formValues = array();
        }
        if (Mage::getSingleton('adminhtml/session')->getProspectoData()) {
            $formValues = array_merge($formValues, Mage::getSingleton('adminhtml/session')->getProspectoData());
            Mage::getSingleton('adminhtml/session')->setProspectoData(null);
        } elseif (Mage::registry('current_prospecto')) {
            $formValues = array_merge($formValues, Mage::registry('current_prospecto')->getData());
        }
        $form->setValues($formValues);
        return parent::_prepareForm();
    }
}
