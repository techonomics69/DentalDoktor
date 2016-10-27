<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magento.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magento.com for more information.
 *
 * @category    Mage
 * @package     Mage_Customer
 * @copyright  Copyright (c) 2006-2015 X.commerce, Inc. (http://www.magento.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Customer api
 *
 * @category   Mage
 * @package    Mage_Customer
 * @author     Magento Core Team <core@magentocommerce.com>
 */
class Hwg_Attributemanager_Model_Customer_Api extends Mage_Customer_Model_Customer_Api
{
    protected $_mapAttributes = array(
        'customer_id' => 'entity_id'
    );
    /**
     * Prepare data to insert/update.
     * Creating array for stdClass Object
     *
     * @param stdClass $data
     * @return array
     */
    protected function _prepareData($data)
    {
       foreach ($this->_mapAttributes as $attributeAlias=>$attributeCode) {
            if(isset($data[$attributeAlias]))
            {
                $data[$attributeCode] = $data[$attributeAlias];
                unset($data[$attributeAlias]);
            }
        }
        return $data;
    }

    /**
     * Update customer data
     *
     * @param int $customerId
     * @param array $customerData
     * @return boolean
     */
    public function update($customerId, $customerData)
    {
        $customerData = $this->_prepareData($customerData);

        $customer = Mage::getModel('customer/customer')->load($customerId);
        //Mage::log($customerData, null, "herfox_test.log");

        if (!$customer->getId()) {
            $this->_fault('not_exists');
        }

        foreach ($this->getAllowedAttributes($customer) as $attributeCode=>$attribute) {
            if (isset($customerData[$attributeCode])) {
                $customer->setData($attributeCode, $customerData[$attributeCode]);
            }
        }
        // Get group id 
        $group = Mage::getModel('customer/group')->load($customerData['pricelist_id'], 'customer_group_code');
        if(isset($group['customer_group_id'])){
            $customer->setData('group_id', $group["customer_group_id"]);
        }

        $customer->save();

        if(isset($customerData['mp_cc_is_approved_id']) && isset($customerData['account_id'])) {
            if(!empty($customerData['mp_cc_is_approved_id']) && !empty($customerData['account_id'])){
                if($customerData['mp_cc_is_approved_id']) {
                    $customer->setMpCcIsApproved(true)->save();
                    $customer->sendAccountApprovalEmail($customer->getStoreId());
                }
            }
        }

        return true;
    }
}
