<?php
/**
 * Created by PhpStorm.
 * User: Herfox
 * Date: 10/27/16
 * Time: 4:53 PM
 */

class Herfox_SalesForce_Model_Cash extends Mage_Payment_Model_Method_Abstract
{
    protected $_code = 'cash';
    protected $_formBlockType = 'herfox_salesforce/form_cash';
    protected $_infoBlockType = 'herfox_salesforce/info_cash';

    public function assignData($data)
    {
        if (!($data instanceof Varien_Object)) {
            $data = new Varien_Object($data);
        }
        $info = $this->getInfoInstance();
        if ($data->getWayToPay()) {
            $info->setWayToPay($data->getWayToPay());
        }
        return $this;
    }

    public function validate()
    {
        parent::validate();
        
        $info = $this->getInfoInstance();

        if (!$info->getWayToPay()) {
            $errorCode = 'invalid_data';
            $errorMsg = $this->_getHelper()->__("Forma de Pago es requerido.\n");
        }

        if ($errorMsg) {
            Mage::throwException($errorMsg);
        }
        return $this;
    }
/*
    public function getOrderPlaceRedirectUrl()
    {
        return Mage::getUrl('herfox_salesforce/payment/redirect', array('_secure' => false));
    }
*/
}