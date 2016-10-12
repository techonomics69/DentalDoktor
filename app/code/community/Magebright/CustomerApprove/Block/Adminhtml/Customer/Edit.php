<?php
class Magebright_CustomerApprove_Block_Adminhtml_Customer_Edit extends Mage_Adminhtml_Block_Customer_Edit
{
    public function __construct()
    {
		parent::__construct();
 
        if ($this->getCustomerId() &&
            Mage::getSingleton('admin/session')->isAllowed('customer/approve')) {

			
        	$customer = Mage::registry('current_customer');

			
			if (!$customer->getMpCcIsApproved()) {
				$this->_addButton('approve', array(
					'label' => Mage::helper('customerapprove')->__('Approve'),
					'onclick' => 'setLocation(\'' . $this->getUrl('customerapprove/adminhtml_customer/approve', array('customer_id' => $this->getCustomerId())) . '\')',
					'class' => 'save',
				), 0);
			}
			else {
				
				$this->_addButton('disapprove', array(
					'label' => Mage::helper('customerapprove')->__('Disapprove'),
					'onclick' => 'setLocation(\'' . $this->getUrl('customerapprove/adminhtml_customer/disapprove', array('customer_id' => $this->getCustomerId())) . '\')',
					'class' => 'delete',
				), 0);
			}
        }
    }

}
