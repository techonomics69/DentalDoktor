<?php
class Magebright_CustomerApprove_Adminhtml_CustomerController extends Mage_Adminhtml_Controller_Action
{
	public function approveAction()
	{
		
    	$id = $this->getRequest()->getParam('customer_id');

		
		$model = Mage::getModel('customer/customer');

		if($id) {
			try {
				$model->load($id);

				if (!$model->getId()) {
					Mage::getSingleton('adminhtml/session')->addError(Mage::helper('customerapprove')->__('This customer no longer exist or invalid customer id'));
				}
				else if ($model->getMpCcIsApproved()) {
					Mage::getSingleton('adminhtml/session')->addError(Mage::helper('customerapprove')->__('This customer has already been approved'));
				}
				else {
					
					$model->setMpCcIsApproved(true)
						->save();

					
					$model->sendAccountApprovalEmail($model->getStoreId());

					
					Mage::getSingleton('adminhtml/session')->addSuccess(Mage::helper('customerapprove')->__('The customer has been approved'));
				}
			}
			catch (Exception $e){
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
            }
		}

		
		$this->_redirect('adminhtml/customer/edit', array('id' => $id));
		return;
	}
	
	
	public function disapproveAction()
	{		
		
    	$id = $this->getRequest()->getParam('customer_id');

		
		$model = Mage::getModel('customer/customer');

		if($id) {
			try {
				$model->load($id);

				if (!$model->getId()) {
					Mage::getSingleton('adminhtml/session')->addError(Mage::helper('customerapprove')->__('This customer no longer exist or invalid customer id'));
				}
				else if (!$model->getMpCcIsApproved()) {
					//Mage::getSingleton('adminhtml/session')->addError(Mage::helper('customerapprove')->__('This customer is already unapproved'));
				}
				else {
					
					$model->setMpCcIsApproved(false)
						->save();

					
					Mage::getSingleton('adminhtml/session')->addSuccess(Mage::helper('customerapprove')->__('The customer has been disapproved'));
				}
			}
			catch (Exception $e){
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
            }
		}

		$this->_redirect('adminhtml/customer/edit', array('id' => $id));
		return;
	}

	public function massApproveAction()
	{
		
		$customersIds = $this->getRequest()->getParam('customer');

		
		$updatedCount = 0;

        if(!is_array($customersIds)) {
 			Mage::getSingleton('adminhtml/session')->addError(Mage::helper('adminhtml')->__('Please select customer(s).'));
        } else {
			try {
				foreach ($customersIds as $customerId) {
					
                    $customer = Mage::getModel('customer/customer')->load($customerId);

					if (!$customer->getMpCcIsApproved()) {
						
						$customer->setMpCcIsApproved(true)
							->save();

						-
						$customer->sendAccountApprovalEmail($customer->getStoreId());

						$updatedCount++;
					}
                }

                Mage::getSingleton('adminhtml/session')->addSuccess(
					Mage::helper('adminhtml')->__('Total of %d record(s) were updated.', $updatedCount)
                );
            }
			catch (Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
            }
        }

        $this->_redirect('adminhtml/customer/index');
	}

	public function massDisapproveAction()
	{
		
		$customersIds = $this->getRequest()->getParam('customer');

		
		$updatedCount = 0;

        if(!is_array($customersIds)) {
 			Mage::getSingleton('adminhtml/session')->addError(Mage::helper('adminhtml')->__('Please select customer(s).'));
        } else {
			try {
				foreach ($customersIds as $customerId) {
					
                    $customer = Mage::getModel('customer/customer')->load($customerId);

					if ($customer->getMpCcIsApproved()) {
						
						$customer->setMpCcIsApproved(false)
							->save();

						$updatedCount++;
					}
                }
				
                Mage::getSingleton('adminhtml/session')->addSuccess(
					Mage::helper('adminhtml')->__('Total of %d record(s) were updated.', $updatedCount)
                );
            }
			catch (Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
            }
        }
		
        $this->_redirect('adminhtml/customer/index');
	}
	
	
	protected function _isAllowed()
    {
        return Mage::getSingleton('admin/session')->isAllowed('customer/approve');
    }
	
}
