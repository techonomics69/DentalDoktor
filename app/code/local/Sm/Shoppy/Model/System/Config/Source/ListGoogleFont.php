<?php
/*------------------------------------------------------------------------
 # SM Zen - Version 1.0
 # Copyright (c) 2014 The YouTech Company. All Rights Reserved.
 # @license - Copyrighted Commercial Software
 # Author: YouTech Company
 # Websites: http://www.magentech.com
-------------------------------------------------------------------------*/

class Sm_Shoppy_Model_System_Config_Source_ListGoogleFont
{
	public function toOptionArray()
	{	
		return array(
			array('value'=>'', 'label'=>Mage::helper('shoppy')->__('No select')),
			array('value'=>'Dosis Regular', 'label'=>Mage::helper('shoppy')->__('Dosis Regular')),
			array('value'=>'Anton', 'label'=>Mage::helper('shoppy')->__('Anton')),
			array('value'=>'Questrial', 'label'=>Mage::helper('shoppy')->__('Questrial')),
			array('value'=>'Kameron', 'label'=>Mage::helper('shoppy')->__('Kameron')),
			array('value'=>'Oswald', 'label'=>Mage::helper('shoppy')->__('Oswald')),
			array('value'=>'Open Sans', 'label'=>Mage::helper('shoppy')->__('Open Sans')),
			array('value'=>'BenchNine', 'label'=>Mage::helper('shoppy')->__('BenchNine')),
			array('value'=>'Droid Sans', 'label'=>Mage::helper('shoppy')->__('Droid Sans')),
			array('value'=>'Droid Serif', 'label'=>Mage::helper('shoppy')->__('Droid Serif')),
			array('value'=>'PT Sans', 'label'=>Mage::helper('shoppy')->__('PT Sans')),
			array('value'=>'Vollkorn', 'label'=>Mage::helper('shoppy')->__('Vollkorn')),
			array('value'=>'Ubuntu', 'label'=>Mage::helper('shoppy')->__('Ubuntu')),
			array('value'=>'Neucha', 'label'=>Mage::helper('shoppy')->__('Neucha')),
			array('value'=>'Cuprum', 'label'=>Mage::helper('shoppy')->__('Cuprum'))	
		);
	}
}
