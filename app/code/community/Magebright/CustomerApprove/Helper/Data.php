<?php
class Magebright_CustomerApprove_Helper_Data extends Mage_Core_Helper_Abstract
{
    const STATE_APPROVED = 1;
    const STATE_UNAPPROVED = 0;

    const ENABLED = 'customerapprove/general/enabled';

    const REDIRECT_ENABLED 	= 'customerapprove/redirect/enabled';
	const REDIRECT_CMS_PAGE 	= 'customerapprove/redirect/cms_page';
	const REDIRECT_USE_CUSTOM = 'customerapprove/redirect/use_custom_url';
	const REDIRECT_CUSTOM_URL = 'customerapprove/redirect/custom_url';

	const ERROR_MSG_ENABLED	= 'customerapprove/error_msg/enabled';
	const ERROR_MSG_TEXT		= 'customerspprove/error_msg/text';

	protected $_enabled;
	protected $_errorMsgEnabled;
	protected $_errorMsgText;
	protected $_redirectEnabled;
	protected $_storeId;
	protected $_redirectURL;

	public function getIsEnabled()
	{
		if(is_null($this->_enabled)) {
			$this->_enabled = intval(Mage::getStoreConfig(self::ENABLED, $this->getStoreId()))==1 ? true : false;
		}
		return $this->_enabled;
	}

	public function getStoreId()
	{
		if(is_null($this->_storeId)) {
			$this->_storeId = intval(Mage::app()->getStore()->getId());
		}

		return $this->_storeId;
	}

	public function getErrorMsgEnabled()
	{
		if(is_null($this->_errorMsgEnabled)) {
			$this->_errorMsgEnabled = intval(Mage::getStoreConfig(self::ERROR_MSG_ENABLED, $this->getStoreId()))==1 ? true : false;
		}
		return $this->_errorMsgEnabled;
	}

	public function getErrorMsgText()
	{
		if(is_null($this->_errorMsgText)) {
			$this->_errorMsgText = Mage::getStoreConfig('customerapprove/error_msg/text', intval(Mage::app()->getStore()->getId()));
		}
		return $this->_errorMsgText;
	}
	
	public function getRedirectEnabled()
	{
		if(is_null($this->_redirectEnabled)) {
			$this->_redirectEnabled = intval(Mage::getStoreConfig(self::REDIRECT_ENABLED, $this->getStoreId()))==1 ? true : false;
		}
		return $this->_redirectEnabled;
	}

	public function getRedirectUrl()
	{
		if(is_null($this->_redirectURL)) {
			
			$storeId = $this->getStoreId();

			if ($this->getRedirectEnabled()) {
				
				$useCustomUrl = intval(Mage::getStoreConfig(self::REDIRECT_USE_CUSTOM, $storeId))==1 ? true : false;

				if ($useCustomUrl) {
					$this->_redirectURL = Mage::getStoreConfig(self::REDIRECT_CUSTOM_URL, $storeId);
				}
				else {
					
					$pageId = Mage::getStoreConfig(self::REDIRECT_CMS_PAGE, $storeId);

					if (!empty($pageId)) {
						
						$delPos = strrpos($pageId, '|');

						
						if ($delPos) {
							$pageId = substr($pageId, 0, $delPos);
						}

						
						$this->_redirectURL = Mage::helper('cms/page')->getPageUrl($pageId);
					}
				}
			}
		}

		return $this->_redirectURL;
	}

	public function getApprovalStates()
	{
		return array(
			self::STATE_APPROVED => $this->__('Yes'),
			self::STATE_UNAPPROVED => $this->__('No'),
		);
	}

	

}
