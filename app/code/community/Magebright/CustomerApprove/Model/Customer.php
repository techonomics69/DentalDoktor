<?php
class Magebright_CustomerApprove_Model_Customer extends Mage_Customer_Model_Customer
{
	const APPROVAL_EMAIL_ENABLED 			= 'customerapprove/email/enabled';
	const APPROVAL_EMAIL_TEMPLATE 			= 'customerapprove/email/template';
	const APPROVAL_EMAIL_IDENTITY 			= 'customerapprove/email/identity';

	const ADMIN_NOTIFICATION_ENABLED		= 'customerapprove/admin_notification/enabled';
	const ADMIN_NOTIFICATION_TEMPLATE		= 'customerapprove/admin_notification/template';
	const ADMIN_NOTIFICATION_IDENTITY		= 'customerapprove/admin_notification/identity';
	const ADMIN_NOTIFICATION_RECIPIENTS	= 'customerapprove/admin_notification/recipients';

	const XML_PATH_GENERAL_WELCOME_EMAIL			= 'customerapprove/general/welcome_email';
	
  

    public function sendAccountApprovalEmail($storeId = '0')
    {
    	
		if (!Mage::getStoreConfig(Magebright_CustomerApprove_Helper_Data::ENABLED, $storeId)) {
			return $this;
		}
		
		
		$enabled = (intval(Mage::getStoreConfig(self::APPROVAL_EMAIL_ENABLED, $storeId)) == 1) ? true : false;

		if ($enabled) {
			$translate = Mage::getSingleton('core/translate');

			
			$translate->setTranslateInline(false);

			if (!$storeId) {
				$storeId = $this->_getWebsiteStoreId($this->getSendemailStoreId());
			}

			Mage::getModel('core/email_template')
				->setDesignConfig(array('area' => 'frontend', 'store' => $storeId))
				->sendTransactional(
					Mage::getStoreConfig(self::APPROVAL_EMAIL_TEMPLATE, $storeId),
					Mage::getStoreConfig(self::APPROVAL_EMAIL_IDENTITY, $storeId),
					$this->getEmail(),
					$this->getName(),
					array('customer' => $this));

			$translate->setTranslateInline(true);
		}
		
        return $this;
    }


	public function sendNewAccountNotificationEmail($storeId = '0')
	{
		
		if (!Mage::getStoreConfig(Magebright_CustomerApprove_Helper_Data::ENABLED, $storeId)) {
			return $this;
		}

		
		$enabled = (intval(Mage::getStoreConfig(self::ADMIN_NOTIFICATION_ENABLED, $storeId)) == 1) ? true : false;

		if ($enabled) {
			$translate = Mage::getSingleton('core/translate');

			
			$translate->setTranslateInline(false);

			if (!$storeId) {
				$storeId = $this->_getWebsiteStoreId($this->getSendemailStoreId());
			}

			
			$recipients = array();

			
			$recipientsConfig = Mage::getStoreConfig(self::ADMIN_NOTIFICATION_RECIPIENTS, $storeId);

			if (!empty($recipientsConfig)) {
				if (strrpos($recipientsConfig,',') > 0) {
					$recipientArr = explode(',',$recipientsConfig);

					if (count($recipientArr)) {
						$recipients = $recipientArr;
					}
				}
				else if (strrpos($recipientsConfig,'@') > 0) {
					$recipients = array($recipientsConfig);
				}
			}

			
			if (count($recipients)) {
				foreach ($recipients as $address) {
					Mage::getModel('core/email_template')
						->setDesignConfig(array('area' => 'frontend', 'store' => $storeId))
						->sendTransactional(
						Mage::getStoreConfig(self::ADMIN_NOTIFICATION_TEMPLATE, $storeId),
						Mage::getStoreConfig(self::ADMIN_NOTIFICATION_IDENTITY, $storeId),
						$address,
						$this->getName(),
						array('customer' => $this));
				}
			}

			$translate->setTranslateInline(true);
		}

		return $this;
	}
	
	  public function sendNewAccountEmail($type = 'registered', $backUrl = '', $storeId = '0')
    {		
		$enabled = Mage::getStoreConfig(Magebright_CustomerApprove_Helper_Data::ENABLED, $storeId);
		
		$defaultWelcomeEmailEnabled = (intval(Mage::getStoreConfig(self::XML_PATH_GENERAL_WELCOME_EMAIL, $storeId)) == 1) ? true : false;

		if (!$enabled || ($enabled && $defaultWelcomeEmailEnabled)) {			
			parent::sendNewAccountEmail($type, $backUrl, $storeId);
		}
		
		$this->sendNewAccountNotificationEmail($storeId);
		
		Mage::dispatchEvent('customer_new_account_email_sent',
			array('customer' => $this)
		);

		return $this;
	}

}
