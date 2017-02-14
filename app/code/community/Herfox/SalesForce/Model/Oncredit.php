<?php
/**
 * Created by PhpStorm.
 * User: Herfox
 * Date: 10/27/16
 * Time: 4:53 PM
 */

class Herfox_SalesForce_Model_Oncredit extends Mage_Payment_Model_Method_Abstract
{
    protected $_code = 'oncredit';
    protected $_formBlockType = 'herfox_salesforce/form_oncredit';
    protected $_infoBlockType = 'herfox_salesforce/info_oncredit';
}