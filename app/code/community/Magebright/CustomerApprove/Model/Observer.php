<?php
class Magebright_CustomerApprove_Model_Observer
{

	public function checkCustomerStatus($event)
	{
		
		$actionName = strtolower(Mage::app()->getRequest()->getActionName());

		if ($actionName == 'createpost' || $actionName == 'create' || $actionName == 'confirm' || $actionName == 'confirmation') {
			return;
		}

		
		if (!Mage::helper('customerapprove')->getIsEnabled()) {
			return;
		}

		
		$this->redirectCustomer($event->getCustomer());
	}

	public function newCustomerAccountCompleted($customer)
	{
		
		if (!Mage::helper('customerapprove')->getIsEnabled()) {
			return;
		}

		
		$this->redirectCustomer($customer);
	}

	public function _getCustomerSession()
	{
		return Mage::getSingleton('customer/session');
	}
	
	public function redirectCustomer($customer)
	{
		 
		$customerhelper = Mage::helper('customerapprove');

		
		if (!($customer instanceof Mage_Customer_Model_Customer)) {
			if ($customer->getCustomer()) {
				$customer = $customer->getCustomer();
			}
		}

		
		$customer_approved = (int) $customer->getMpCcIsApproved() == 1 ? true : false;

		
		if (!$customer_approved) {
			
			$this->_getCustomerSession()->logout()
            	->setBeforeAuthUrl(Mage::getUrl());

			if ($customerhelper->getRedirectEnabled()) {
				
				$redirectURL = $customerhelper->getRedirectUrl();

				
				header("Status: 301");
				header('Location: '.$redirectURL);
				exit;
			}
			else if ($customerhelper->getErrorMsgEnabled()) {
				$this->_getCustomerSession()->addError($customerhelper->getErrorMsgText());
				return;
			}

		}
	}


	
	
}
