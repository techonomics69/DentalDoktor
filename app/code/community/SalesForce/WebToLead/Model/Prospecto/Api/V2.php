<?php
/**
 * SalesForce_WebToLead extension
 * 
 * NOTICE OF LICENSE
 * 
 * This source file is subject to the MIT License
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/mit-license.php
 * 
 * @category       SalesForce
 * @package        SalesForce_WebToLead
 * @copyright      Copyright (c) 2016
 * @license        http://opensource.org/licenses/mit-license.php MIT License
 */
class SalesForce_WebToLead_Model_Prospecto_Api_V2 extends SalesForce_WebToLead_Model_Prospecto_Api
{
    /**
     * Prospecto info
     *
     * @access public
     * @param int $prospectoId
     * @return object
     * @author Ultimate Module Creator
     */
    public function info($prospectoId)
    {
        $result = parent::info($prospectoId);
        $result = Mage::helper('api')->wsiArrayPacker($result);
        return $result;
    }
}
