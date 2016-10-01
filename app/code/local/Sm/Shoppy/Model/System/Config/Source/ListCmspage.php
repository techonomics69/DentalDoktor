<?php
/*------------------------------------------------------------------------
 # SM Shoppy - Version 1.1
 # Copyright (c) 2013 The YouTech Company. All Rights Reserved.
 # @license - Copyrighted Commercial Software
 # Author: YouTech Company
 # Websites: http://www.magentech.com
-------------------------------------------------------------------------*/

class Sm_Shoppy_Model_System_Config_Source_ListCmspage
{
	public function toOptionArray()
	{	
		return array(
		array('value'=>'cmspage1', 'label'=>Mage::helper('shoppy')->__('Default')),
		array('value'=>'cmspage2', 'label'=>Mage::helper('shoppy')->__('CMS 2')),
		array('value'=>'cmspage3', 'label'=>Mage::helper('shoppy')->__('CMS 3'))
		);
	}
}
