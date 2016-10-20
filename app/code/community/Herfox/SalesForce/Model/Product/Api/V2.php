<?php
/**
 * Herfox_SalesForce extension
 * 
 * NOTICE OF LICENSE
 * 
 * This source file is subject to the MIT License
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/mit-license.php
 * 
 * @category       Herfox
 * @package        Herfox_SalesForce
 * @copyright      Copyright (c) 2016
 * @license        http://opensource.org/licenses/mit-license.php MIT License
 */
class Herfox_SalesForce_Model_Product_Api_V2 extends Herfox_SalesForce_Model_Product_Api
{
    /**
     * Producto info
     *
     * @access public
     * @param int $productId
     * @return object
     * @author Ultimate Module Creator
     */
    public function info($productId)
    {
        $result = parent::info($productId);
        $result = Mage::helper('api')->wsiArrayPacker($result);
        return $result;
    }
}
