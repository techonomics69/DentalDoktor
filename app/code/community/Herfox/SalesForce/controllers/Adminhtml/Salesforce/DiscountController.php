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
 * Descuento admin controller
 *
 * @category    Herfox
 * @package     Herfox_SalesForce
 * @author      Ultimate Module Creator
 */
class Herfox_SalesForce_Adminhtml_Salesforce_DiscountController extends Herfox_SalesForce_Controller_Adminhtml_SalesForce
{
    /**
     * init the descuento
     *
     * @access protected
     * @return Herfox_SalesForce_Model_Discount
     */
    protected function _initDiscount()
    {
        $discountId  = (int) $this->getRequest()->getParam('id');
        $discount    = Mage::getModel('herfox_salesforce/discount');
        if ($discountId) {
            $discount->load($discountId);
        }
        Mage::register('current_discount', $discount);
        return $discount;
    }

    /**
     * default action
     *
     * @access public
     * @return void
     * @author Ultimate Module Creator
     */
    public function indexAction()
    {
        $this->loadLayout();
        $this->_title(Mage::helper('herfox_salesforce')->__('SalesForce'))
             ->_title(Mage::helper('herfox_salesforce')->__('Descuentos'));
        $this->renderLayout();
    }

    /**
     * grid action
     *
     * @access public
     * @return void
     * @author Ultimate Module Creator
     */
    public function gridAction()
    {
        $this->loadLayout()->renderLayout();
    }

    /**
     * edit descuento - action
     *
     * @access public
     * @return void
     * @author Ultimate Module Creator
     */
    public function editAction()
    {
        $discountId    = $this->getRequest()->getParam('id');
        $discount      = $this->_initDiscount();
        if ($discountId && !$discount->getId()) {
            $this->_getSession()->addError(
                Mage::helper('herfox_salesforce')->__('This descuento no longer exists.')
            );
            $this->_redirect('*/*/');
            return;
        }
        $data = Mage::getSingleton('adminhtml/session')->getDiscountData(true);
        if (!empty($data)) {
            $discount->setData($data);
        }
        Mage::register('discount_data', $discount);
        $this->loadLayout();
        $this->_title(Mage::helper('herfox_salesforce')->__('SalesForce'))
             ->_title(Mage::helper('herfox_salesforce')->__('Descuentos'));
        if ($discount->getId()) {
            $this->_title($discount->getName());
        } else {
            $this->_title(Mage::helper('herfox_salesforce')->__('Add descuento'));
        }
        if (Mage::getSingleton('cms/wysiwyg_config')->isEnabled()) {
            $this->getLayout()->getBlock('head')->setCanLoadTinyMce(true);
        }
        $this->renderLayout();
    }

    /**
     * new descuento action
     *
     * @access public
     * @return void
     * @author Ultimate Module Creator
     */
    public function newAction()
    {
        $this->_forward('edit');
    }

    /**
     * save descuento - action
     *
     * @access public
     * @return void
     * @author Ultimate Module Creator
     */
    public function saveAction()
    {
        if ($data = $this->getRequest()->getPost('discount')) {
            try {
                $discount = $this->_initDiscount();
                $discount->addData($data);
                $discount->save();
                Mage::getSingleton('adminhtml/session')->addSuccess(
                    Mage::helper('herfox_salesforce')->__('Descuento was successfully saved')
                );
                Mage::getSingleton('adminhtml/session')->setFormData(false);
                if ($this->getRequest()->getParam('back')) {
                    $this->_redirect('*/*/edit', array('id' => $discount->getId()));
                    return;
                }
                $this->_redirect('*/*/');
                return;
            } catch (Mage_Core_Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
                Mage::getSingleton('adminhtml/session')->setDiscountData($data);
                $this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
                return;
            } catch (Exception $e) {
                Mage::logException($e);
                Mage::getSingleton('adminhtml/session')->addError(
                    Mage::helper('herfox_salesforce')->__('There was a problem saving the descuento.')
                );
                Mage::getSingleton('adminhtml/session')->setDiscountData($data);
                $this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
                return;
            }
        }
        Mage::getSingleton('adminhtml/session')->addError(
            Mage::helper('herfox_salesforce')->__('Unable to find descuento to save.')
        );
        $this->_redirect('*/*/');
    }

    /**
     * delete descuento - action
     *
     * @access public
     * @return void
     * @author Ultimate Module Creator
     */
    public function deleteAction()
    {
        if ( $this->getRequest()->getParam('id') > 0) {
            try {
                $discount = Mage::getModel('herfox_salesforce/discount');
                $discount->setId($this->getRequest()->getParam('id'))->delete();
                Mage::getSingleton('adminhtml/session')->addSuccess(
                    Mage::helper('herfox_salesforce')->__('Descuento was successfully deleted.')
                );
                $this->_redirect('*/*/');
                return;
            } catch (Mage_Core_Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
                $this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
            } catch (Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError(
                    Mage::helper('herfox_salesforce')->__('There was an error deleting descuento.')
                );
                $this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
                Mage::logException($e);
                return;
            }
        }
        Mage::getSingleton('adminhtml/session')->addError(
            Mage::helper('herfox_salesforce')->__('Could not find descuento to delete.')
        );
        $this->_redirect('*/*/');
    }

    /**
     * mass delete descuento - action
     *
     * @access public
     * @return void
     * @author Ultimate Module Creator
     */
    public function massDeleteAction()
    {
        $discountIds = $this->getRequest()->getParam('discount');
        if (!is_array($discountIds)) {
            Mage::getSingleton('adminhtml/session')->addError(
                Mage::helper('herfox_salesforce')->__('Please select descuentos to delete.')
            );
        } else {
            try {
                foreach ($discountIds as $discountId) {
                    $discount = Mage::getModel('herfox_salesforce/discount');
                    $discount->setId($discountId)->delete();
                }
                Mage::getSingleton('adminhtml/session')->addSuccess(
                    Mage::helper('herfox_salesforce')->__('Total of %d descuentos were successfully deleted.', count($discountIds))
                );
            } catch (Mage_Core_Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
            } catch (Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError(
                    Mage::helper('herfox_salesforce')->__('There was an error deleting descuentos.')
                );
                Mage::logException($e);
            }
        }
        $this->_redirect('*/*/index');
    }

    /**
     * mass status change - action
     *
     * @access public
     * @return void
     * @author Ultimate Module Creator
     */
    public function massStatusAction()
    {
        $discountIds = $this->getRequest()->getParam('discount');
        if (!is_array($discountIds)) {
            Mage::getSingleton('adminhtml/session')->addError(
                Mage::helper('herfox_salesforce')->__('Please select descuentos.')
            );
        } else {
            try {
                foreach ($discountIds as $discountId) {
                $discount = Mage::getSingleton('herfox_salesforce/discount')->load($discountId)
                            ->setStatus($this->getRequest()->getParam('status'))
                            ->setIsMassupdate(true)
                            ->save();
                }
                $this->_getSession()->addSuccess(
                    $this->__('Total of %d descuentos were successfully updated.', count($discountIds))
                );
            } catch (Mage_Core_Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
            } catch (Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError(
                    Mage::helper('herfox_salesforce')->__('There was an error updating descuentos.')
                );
                Mage::logException($e);
            }
        }
        $this->_redirect('*/*/index');
    }

    /**
     * export as csv - action
     *
     * @access public
     * @return void
     * @author Ultimate Module Creator
     */
    public function exportCsvAction()
    {
        $fileName   = 'discount.csv';
        $content    = $this->getLayout()->createBlock('herfox_salesforce/adminhtml_discount_grid')
            ->getCsv();
        $this->_prepareDownloadResponse($fileName, $content);
    }

    /**
     * export as MsExcel - action
     *
     * @access public
     * @return void
     * @author Ultimate Module Creator
     */
    public function exportExcelAction()
    {
        $fileName   = 'discount.xls';
        $content    = $this->getLayout()->createBlock('herfox_salesforce/adminhtml_discount_grid')
            ->getExcelFile();
        $this->_prepareDownloadResponse($fileName, $content);
    }

    /**
     * export as xml - action
     *
     * @access public
     * @return void
     * @author Ultimate Module Creator
     */
    public function exportXmlAction()
    {
        $fileName   = 'discount.xml';
        $content    = $this->getLayout()->createBlock('herfox_salesforce/adminhtml_discount_grid')
            ->getXml();
        $this->_prepareDownloadResponse($fileName, $content);
    }

    /**
     * Check if admin has permissions to visit related pages
     *
     * @access protected
     * @return boolean
     * @author Ultimate Module Creator
     */
    protected function _isAllowed()
    {
        return Mage::getSingleton('admin/session')->isAllowed('herfox_salesforce/discount');
    }
}
