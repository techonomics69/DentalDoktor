<?php
/*------------------------------------------------------------------------
 # SM Zen - Version 1.0
 # Copyright (c) 2014 The YouTech Company. All Rights Reserved.
 # @license - Copyrighted Commercial Software
 # Author: YouTech Company
 # Websites: http://www.magentech.com
-------------------------------------------------------------------------*/

class Sm_Shoppy_Model_System_Config_Source_ListColor
{
	public function toOptionArray()
	{	
		return array(
		array('value'=>'blue', 'label'=>Mage::helper('shoppy')->__('Blue')),
		array('value'=>'red', 'label'=>Mage::helper('shoppy')->__('Red')),
		array('value'=>'green', 'label'=>Mage::helper('shoppy')->__('Green')),
		array('value'=>'pink', 'label'=>Mage::helper('shoppy')->__('Pink')),
		array('value'=>'orange', 'label'=>Mage::helper('shoppy')->__('Orange'))
		);
	}
}
