<?php
/**
 * Created by PhpStorm.
 * User: Herfox
 * Date: 10/13/16
 * Time: 11:07 AM
 */

class Hwg_Attributemanager_Model_Customer_Api_V2 extends Hwg_Attributemanager_Model_Customer_Api
{

    /**
     * Prepare data to insert/update.
     * Creating array for stdClass Object
     *
     * @param stdClass $data
     * @return array
     */
    protected function _prepareData($data)
    {
        if (null !== ($_data = get_object_vars($data))) {
            return parent::_prepareData($_data);
        }
        return array();
    }

}