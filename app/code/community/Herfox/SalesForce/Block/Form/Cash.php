<?php
/**
 * Created by PhpStorm.
 * User: Herfox
 * Date: 10/27/16
 * Time: 4:53 PM
 */

class Herfox_SalesForce_Block_Form_Cash extends Mage_Payment_Block_Form
{
    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('herfox_salesforce/form/cash.phtml');
    }
}