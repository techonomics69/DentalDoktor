<?php
class Magebright_CustomerApprove_Block_Adminhtml_Customer_Grid extends Mage_Adminhtml_Block_Customer_Grid
{
	
    protected function _prepareColumns()
    {
		
		$this->addColumnAfter('mp_cc_is_approved', array(
			'header'    => Mage::helper('customerapprove')->__('Approved'),
			'index'     => 'mp_cc_is_approved',
			'type'      => 'options',
			'options'   => Mage::helper('customerapprove')->getApprovalStates()
		), 'website_id');

		
		return parent::_prepareColumns();
    }

	protected function _prepareMassaction()
    {
		
		parent::_prepareMassaction();

		
        $this->getMassactionBlock()->addItem('approve', array(
             'label'    => Mage::helper('customerapprove')->__('Approve'),
             'url'      => $this->getUrl('customerapprove/adminhtml_customer/massApprove'),
             'confirm'  => Mage::helper('customer')->__('Are you sure?')
        ));

        
        $this->getMassactionBlock()->addItem('disapprove', array(
             'label'    => Mage::helper('customerapprove')->__('Disapprove'),
             'url'      => $this->getUrl('customerapprove/adminhtml_customer/massDisapprove'),
             'confirm'  => Mage::helper('customer')->__('Are you sure?')
        ));

        return $this;
    }
	
}
