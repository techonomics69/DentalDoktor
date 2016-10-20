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
class Herfox_SalesForce_Model_Adminhtml_Search_Prospect extends Varien_Object
{
    /**
     * Load search results
     *
     * @access public
     * @return Herfox_SalesForce_Model_Adminhtml_Search_Prospect
     * @author Ultimate Module Creator
     */
    public function load()
    {
        $arr = array();
        if (!$this->hasStart() || !$this->hasLimit() || !$this->hasQuery()) {
            $this->setResults($arr);
            return $this;
        }
        $collection = Mage::getResourceModel('herfox_salesforce/prospect_collection')
            ->addFieldToFilter('customer_id', array('like' => $this->getQuery().'%'))
            ->setCurPage($this->getStart())
            ->setPageSize($this->getLimit())
            ->load();
        foreach ($collection->getItems() as $prospect) {
            $arr[] = array(
                'id'          => 'prospect/1/'.$prospect->getId(),
                'type'        => Mage::helper('herfox_salesforce')->__('Prospecto'),
                'name'        => $prospect->getCustomerId(),
                'description' => $prospect->getCustomerId(),
                'url' => Mage::helper('adminhtml')->getUrl(
                    '*/salesforce_prospect/edit',
                    array('id'=>$prospect->getId())
                ),
            );
        }
        $this->setResults($arr);
        return $this;
    }
}
