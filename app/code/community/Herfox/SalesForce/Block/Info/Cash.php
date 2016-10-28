<?php
/**
 * Created by PhpStorm.
 * User: Herfox
 * Date: 10/27/16
 * Time: 7:12 PM
 */

class Herfox_SalesForce_Block_Info_Cash extends Mage_Payment_Block_Info
{
    protected function _prepareSpecificInformation($transport = null)
    {
        if (null !== $this->_paymentSpecificInformation) {
            return $this->_paymentSpecificInformation;
        }
        
        $transport = new Varien_Object();
        $transport = parent::_prepareSpecificInformation($transport);
        $transport->addData(array(
            Mage::helper('payment')->__('Forma de Pago') => $this->getInfo()->getWayToPay()
        ));
        return $transport;
    }
}