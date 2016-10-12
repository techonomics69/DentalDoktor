<?php
class Magebright_CustomerApprove_Model_Customer_Entity_Customer extends Mage_Customer_Model_Resource_Customer
{
    protected function _getDefaultAttributes()
    {
		$ret = parent::_getDefaultAttributes();
		$ret[] = 'mp_cc_is_approved';
		return $ret;
    }
}
