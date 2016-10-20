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
class Herfox_SalesForce_Model_Adminhtml_Search_Product extends Varien_Object
{
    /**
     * Load search results
     *
     * @access public
     * @return Herfox_SalesForce_Model_Adminhtml_Search_Product
     * @author Ultimate Module Creator
     */
    public function load()
    {
        $arr = array();
        if (!$this->hasStart() || !$this->hasLimit() || !$this->hasQuery()) {
            $this->setResults($arr);
            return $this;
        }
        $collection = Mage::getResourceModel('herfox_salesforce/product_collection')
            ->addFieldToFilter('name', array('like' => $this->getQuery().'%'))
            ->setCurPage($this->getStart())
            ->setPageSize($this->getLimit())
            ->load();
        foreach ($collection->getItems() as $product) {
            $arr[] = array(
                'id'          => 'product/1/'.$product->getId(),
                'type'        => Mage::helper('herfox_salesforce')->__('Producto'),
                'name'        => $product->getName(),
                'description' => $product->getName(),
                'url' => Mage::helper('adminhtml')->getUrl(
                    '*/salesforce_product/edit',
                    array('id'=>$product->getId())
                ),
            );
        }
        $this->setResults($arr);
        return $this;
    }
}
