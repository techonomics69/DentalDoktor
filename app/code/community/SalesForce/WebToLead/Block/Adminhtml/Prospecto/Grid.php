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
 * Prospecto admin grid block
 *
 * @category    SalesForce
 * @package     SalesForce_WebToLead
 * @author      Ultimate Module Creator
 */
class SalesForce_WebToLead_Block_Adminhtml_Prospecto_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    /**
     * constructor
     *
     * @access public
     * @author Ultimate Module Creator
     */
    public function __construct()
    {
        parent::__construct();
        $this->setId('prospectoGrid');
        $this->setDefaultSort('entity_id');
        $this->setDefaultDir('ASC');
        $this->setSaveParametersInSession(true);
        $this->setUseAjax(true);
    }

    /**
     * prepare collection
     *
     * @access protected
     * @return SalesForce_WebToLead_Block_Adminhtml_Prospecto_Grid
     * @author Ultimate Module Creator
     */
    protected function _prepareCollection()
    {
        $collection = Mage::getModel('salesforce_webtolead/prospecto')
            ->getCollection();
        
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    /**
     * prepare grid collection
     *
     * @access protected
     * @return SalesForce_WebToLead_Block_Adminhtml_Prospecto_Grid
     * @author Ultimate Module Creator
     */
    protected function _prepareColumns()
    {
        $this->addColumn(
            'entity_id',
            array(
                'header' => Mage::helper('salesforce_webtolead')->__('Id'),
                'index'  => 'entity_id',
                'type'   => 'number'
            )
        );
        $this->addColumn(
            'email',
            array(
                'header'    => Mage::helper('salesforce_webtolead')->__('Correo electrónico'),
                'align'     => 'left',
                'index'     => 'email',
            )
        );
        
        $this->addColumn(
            'status',
            array(
                'header'  => Mage::helper('salesforce_webtolead')->__('Status'),
                'index'   => 'status',
                'type'    => 'options',
                'options' => array(
                    '1' => Mage::helper('salesforce_webtolead')->__('Enabled'),
                    '0' => Mage::helper('salesforce_webtolead')->__('Disabled'),
                )
            )
        );
        $this->addColumn(
            'first_name',
            array(
                'header' => Mage::helper('salesforce_webtolead')->__('Nombres'),
                'index'  => 'first_name',
                'type'=> 'text',

            )
        );
        $this->addColumn(
            'last_name',
            array(
                'header' => Mage::helper('salesforce_webtolead')->__('Apellidos'),
                'index'  => 'last_name',
                'type'=> 'text',

            )
        );
        $this->addColumn(
            'document_number',
            array(
                'header' => Mage::helper('salesforce_webtolead')->__('Número de Documento'),
                'index'  => 'document_number',
                'type'=> 'text',

            )
        );
        $this->addColumn(
            'mobile',
            array(
                'header' => Mage::helper('salesforce_webtolead')->__('Celular'),
                'index'  => 'mobile',
                'type'=> 'text',

            )
        );
        $this->addColumn(
            'company',
            array(
                'header' => Mage::helper('salesforce_webtolead')->__('Compañía'),
                'index'  => 'company',
                'type'=> 'text',

            )
        );
        $this->addColumn(
            'phone',
            array(
                'header' => Mage::helper('salesforce_webtolead')->__('Teléfono'),
                'index'  => 'phone',
                'type'=> 'text',

            )
        );
        $this->addColumn(
            'city',
            array(
                'header' => Mage::helper('salesforce_webtolead')->__('Ciudad'),
                'index'  => 'city',
                'type'=> 'text',

            )
        );
        $this->addColumn(
            'street',
            array(
                'header' => Mage::helper('salesforce_webtolead')->__('Dirección'),
                'index'  => 'street',
                'type'=> 'text',

            )
        );
        $this->addColumn(
            'response',
            array(
                'header' => Mage::helper('salesforce_webtolead')->__('Respuesta'),
                'index'  => 'response',
                'type'=> 'text',

            )
        );
        $this->addColumn(
            'created_at',
            array(
                'header' => Mage::helper('salesforce_webtolead')->__('Created at'),
                'index'  => 'created_at',
                'width'  => '120px',
                'type'   => 'datetime',
            )
        );
        $this->addColumn(
            'action',
            array(
                'header'  =>  Mage::helper('salesforce_webtolead')->__('Action'),
                'width'   => '100',
                'type'    => 'action',
                'getter'  => 'getId',
                'actions' => array(
                    array(
                        'caption' => Mage::helper('salesforce_webtolead')->__('Edit'),
                        'url'     => array('base'=> '*/*/edit'),
                        'field'   => 'id'
                    )
                ),
                'filter'    => false,
                'is_system' => true,
                'sortable'  => false,
            )
        );
        $this->addExportType('*/*/exportCsv', Mage::helper('salesforce_webtolead')->__('CSV'));
        $this->addExportType('*/*/exportExcel', Mage::helper('salesforce_webtolead')->__('Excel'));
        $this->addExportType('*/*/exportXml', Mage::helper('salesforce_webtolead')->__('XML'));
        return parent::_prepareColumns();
    }

    /**
     * prepare mass action
     *
     * @access protected
     * @return SalesForce_WebToLead_Block_Adminhtml_Prospecto_Grid
     * @author Ultimate Module Creator
     */
    protected function _prepareMassaction()
    {
        $this->setMassactionIdField('entity_id');
        $this->getMassactionBlock()->setFormFieldName('prospecto');
        $this->getMassactionBlock()->addItem(
            'delete',
            array(
                'label'=> Mage::helper('salesforce_webtolead')->__('Delete'),
                'url'  => $this->getUrl('*/*/massDelete'),
                'confirm'  => Mage::helper('salesforce_webtolead')->__('Are you sure?')
            )
        );
        $this->getMassactionBlock()->addItem(
            'status',
            array(
                'label'      => Mage::helper('salesforce_webtolead')->__('Change status'),
                'url'        => $this->getUrl('*/*/massStatus', array('_current'=>true)),
                'additional' => array(
                    'status' => array(
                        'name'   => 'status',
                        'type'   => 'select',
                        'class'  => 'required-entry',
                        'label'  => Mage::helper('salesforce_webtolead')->__('Status'),
                        'values' => array(
                            '1' => Mage::helper('salesforce_webtolead')->__('Enabled'),
                            '0' => Mage::helper('salesforce_webtolead')->__('Disabled'),
                        )
                    )
                )
            )
        );
        return $this;
    }

    /**
     * get the row url
     *
     * @access public
     * @param SalesForce_WebToLead_Model_Prospecto
     * @return string
     * @author Ultimate Module Creator
     */
    public function getRowUrl($row)
    {
        return $this->getUrl('*/*/edit', array('id' => $row->getId()));
    }

    /**
     * get the grid url
     *
     * @access public
     * @return string
     * @author Ultimate Module Creator
     */
    public function getGridUrl()
    {
        return $this->getUrl('*/*/grid', array('_current'=>true));
    }

    /**
     * after collection load
     *
     * @access protected
     * @return SalesForce_WebToLead_Block_Adminhtml_Prospecto_Grid
     * @author Ultimate Module Creator
     */
    protected function _afterLoadCollection()
    {
        $this->getCollection()->walk('afterLoad');
        parent::_afterLoadCollection();
    }
}
