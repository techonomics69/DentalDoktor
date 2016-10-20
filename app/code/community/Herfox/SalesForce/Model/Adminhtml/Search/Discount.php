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
/**
 * Admin search model
 *
 * @category    Herfox
 * @package     Herfox_SalesForce
 * @author      Ultimate Module Creator
 */
class Herfox_SalesForce_Model_Adminhtml_Search_Discount extends Varien_Object
{
    /**
     * Load search results
     *
     * @access public
     * @return Herfox_SalesForce_Model_Adminhtml_Search_Discount
     * @author Ultimate Module Creator
     */
    public function load()
    {
        $arr = array();
        if (!$this->hasStart() || !$this->hasLimit() || !$this->hasQuery()) {
            $this->setResults($arr);
            return $this;
        }
        $collection = Mage::getResourceModel('herfox_salesforce/discount_collection')
            ->addFieldToFilter('name', array('like' => $this->getQuery().'%'))
            ->setCurPage($this->getStart())
            ->setPageSize($this->getLimit())
            ->load();
        foreach ($collection->getItems() as $discount) {
            $arr[] = array(
                'id'          => 'discount/1/'.$discount->getId(),
                'type'        => Mage::helper('herfox_salesforce')->__('Descuento'),
                'name'        => $discount->getName(),
                'description' => $discount->getName(),
                'url' => Mage::helper('adminhtml')->getUrl(
                    '*/salesforce_discount/edit',
                    array('id'=>$discount->getId())
                ),
            );
        }
        $this->setResults($arr);
        return $this;
    }
}
