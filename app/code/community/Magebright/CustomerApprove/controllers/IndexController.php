<?php
class Magebright_CustomerApprove_IndexController extends Mage_Adminhtml_Controller_Action
{
	
	public function norouteAction($coreRoute = null)
    {
        $this->_forward('index','adminhtml_page','customerapprove');
    }
        
  	public function changeLocaleAction()
  	{
  		$this->_forward('changeLocale', 'index','admin');
  	}
    
    protected function _isAllowed()
    {
	    return Mage::getSingleton('admin/session')->isAllowed('customer/approve');
    }
	
}
