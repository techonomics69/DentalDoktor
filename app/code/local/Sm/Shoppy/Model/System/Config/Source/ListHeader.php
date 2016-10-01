<?php
/*------------------------------------------------------------------------
 # SM Shoppy - Version 1.1
 # Copyright (c) 2013 The YouTech Company. All Rights Reserved.
 # @license - Copyrighted Commercial Software
 # Author: YouTech Company
 # Websites: http://www.magentech.com
-------------------------------------------------------------------------*/

class Sm_Shoppy_Model_System_Config_Source_ListHeader
{
	public function toOptionArray()
	{	
		return array(
		array('value'=>'df', 'label'=>Mage::helper('shoppy')->__('Default')),
		array('value'=>'hd2', 'label'=>Mage::helper('shoppy')->__('Header 2')),
		array('value'=>'hd3', 'label'=>Mage::helper('shoppy')->__('Header 3'))
		);
	}
}
