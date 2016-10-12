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
/**
 * Admin search model
 *
 * @category    SalesForce
 * @package     SalesForce_WebToLead
 * @author      Ultimate Module Creator
 */
class SalesForce_WebToLead_Model_Adminhtml_Search_Prospecto extends Varien_Object
{
    /**
     * Load search results
     *
     * @access public
     * @return SalesForce_WebToLead_Model_Adminhtml_Search_Prospecto
     * @author Ultimate Module Creator
     */
    public function load()
    {
        $arr = array();
        if (!$this->hasStart() || !$this->hasLimit() || !$this->hasQuery()) {
            $this->setResults($arr);
            return $this;
        }
        $collection = Mage::getResourceModel('salesforce_webtolead/prospecto_collection')
            ->addFieldToFilter('email', array('like' => $this->getQuery().'%'))
            ->setCurPage($this->getStart())
            ->setPageSize($this->getLimit())
            ->load();
        foreach ($collection->getItems() as $prospecto) {
            $arr[] = array(
                'id'          => 'prospecto/1/'.$prospecto->getId(),
                'type'        => Mage::helper('salesforce_webtolead')->__('Prospecto'),
                'name'        => $prospecto->getEmail(),
                'description' => $prospecto->getEmail(),
                'url' => Mage::helper('adminhtml')->getUrl(
                    '*/webtolead_prospecto/edit',
                    array('id'=>$prospecto->getId())
                ),
            );
        }
        $this->setResults($arr);
        return $this;
    }
}
