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
 * Precio admin controller
 *
 * @category    Herfox
 * @package     Herfox_SalesForce
 * @author      Ultimate Module Creator
 */
class Herfox_SalesForce_Adminhtml_Salesforce_PriceController extends Herfox_SalesForce_Controller_Adminhtml_SalesForce
{
    /**
     * init the precio
     *
     * @access protected
     * @return Herfox_SalesForce_Model_Price
     */
    protected function _initPrice()
    {
        $priceId  = (int) $this->getRequest()->getParam('id');
        $price    = Mage::getModel('herfox_salesforce/price');
        if ($priceId) {
            $price->load($priceId);
        }
        Mage::register('current_price', $price);
        return $price;
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
             ->_title(Mage::helper('herfox_salesforce')->__('Precios'));
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
     * edit precio - action
     *
     * @access public
     * @return void
     * @author Ultimate Module Creator
     */
    public function editAction()
    {
        $priceId    = $this->getRequest()->getParam('id');
        $price      = $this->_initPrice();
        if ($priceId && !$price->getId()) {
            $this->_getSession()->addError(
                Mage::helper('herfox_salesforce')->__('This precio no longer exists.')
            );
            $this->_redirect('*/*/');
            return;
        }
        $data = Mage::getSingleton('adminhtml/session')->getPriceData(true);
        if (!empty($data)) {
            $price->setData($data);
        }
        Mage::register('price_data', $price);
        $this->loadLayout();
        $this->_title(Mage::helper('herfox_salesforce')->__('SalesForce'))
             ->_title(Mage::helper('herfox_salesforce')->__('Precios'));
        if ($price->getId()) {
            $this->_title($price->getName());
        } else {
            $this->_title(Mage::helper('herfox_salesforce')->__('Add precio'));
        }
        if (Mage::getSingleton('cms/wysiwyg_config')->isEnabled()) {
            $this->getLayout()->getBlock('head')->setCanLoadTinyMce(true);
        }
        $this->renderLayout();
    }

    /**
     * new precio action
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
     * save precio - action
     *
     * @access public
     * @return void
     * @author Ultimate Module Creator
     */
    public function saveAction()
    {
        if ($data = $this->getRequest()->getPost('price')) {
            try {
                $price = $this->_initPrice();
                $price->addData($data);
                $price->save();
                Mage::getSingleton('adminhtml/session')->addSuccess(
                    Mage::helper('herfox_salesforce')->__('Precio was successfully saved')
                );
                Mage::getSingleton('adminhtml/session')->setFormData(false);
                if ($this->getRequest()->getParam('back')) {
                    $this->_redirect('*/*/edit', array('id' => $price->getId()));
                    return;
                }
                $this->_redirect('*/*/');
                return;
            } catch (Mage_Core_Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
                Mage::getSingleton('adminhtml/session')->setPriceData($data);
                $this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
                return;
            } catch (Exception $e) {
                Mage::logException($e);
                Mage::getSingleton('adminhtml/session')->addError(
                    Mage::helper('herfox_salesforce')->__('There was a problem saving the precio.')
                );
                Mage::getSingleton('adminhtml/session')->setPriceData($data);
                $this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
                return;
            }
        }
        Mage::getSingleton('adminhtml/session')->addError(
            Mage::helper('herfox_salesforce')->__('Unable to find precio to save.')
        );
        $this->_redirect('*/*/');
    }

    /**
     * delete precio - action
     *
     * @access public
     * @return void
     * @author Ultimate Module Creator
     */
    public function deleteAction()
    {
        if ( $this->getRequest()->getParam('id') > 0) {
            try {
                $price = Mage::getModel('herfox_salesforce/price');
                $price->setId($this->getRequest()->getParam('id'))->delete();
                Mage::getSingleton('adminhtml/session')->addSuccess(
                    Mage::helper('herfox_salesforce')->__('Precio was successfully deleted.')
                );
                $this->_redirect('*/*/');
                return;
            } catch (Mage_Core_Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
                $this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
            } catch (Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError(
                    Mage::helper('herfox_salesforce')->__('There was an error deleting precio.')
                );
                $this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
                Mage::logException($e);
                return;
            }
        }
        Mage::getSingleton('adminhtml/session')->addError(
            Mage::helper('herfox_salesforce')->__('Could not find precio to delete.')
        );
        $this->_redirect('*/*/');
    }

    /**
     * mass delete precio - action
     *
     * @access public
     * @return void
     * @author Ultimate Module Creator
     */
    public function massDeleteAction()
    {
        $priceIds = $this->getRequest()->getParam('price');
        if (!is_array($priceIds)) {
            Mage::getSingleton('adminhtml/session')->addError(
                Mage::helper('herfox_salesforce')->__('Please select precios to delete.')
            );
        } else {
            try {
                foreach ($priceIds as $priceId) {
                    $price = Mage::getModel('herfox_salesforce/price');
                    $price->setId($priceId)->delete();
                }
                Mage::getSingleton('adminhtml/session')->addSuccess(
                    Mage::helper('herfox_salesforce')->__('Total of %d precios were successfully deleted.', count($priceIds))
                );
            } catch (Mage_Core_Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
            } catch (Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError(
                    Mage::helper('herfox_salesforce')->__('There was an error deleting precios.')
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
        $priceIds = $this->getRequest()->getParam('price');
        if (!is_array($priceIds)) {
            Mage::getSingleton('adminhtml/session')->addError(
                Mage::helper('herfox_salesforce')->__('Please select precios.')
            );
        } else {
            try {
                foreach ($priceIds as $priceId) {
                $price = Mage::getSingleton('herfox_salesforce/price')->load($priceId)
                            ->setStatus($this->getRequest()->getParam('status'))
                            ->setIsMassupdate(true)
                            ->save();
                }
                $this->_getSession()->addSuccess(
                    $this->__('Total of %d precios were successfully updated.', count($priceIds))
                );
            } catch (Mage_Core_Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
            } catch (Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError(
                    Mage::helper('herfox_salesforce')->__('There was an error updating precios.')
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
        $fileName   = 'price.csv';
        $content    = $this->getLayout()->createBlock('herfox_salesforce/adminhtml_price_grid')
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
        $fileName   = 'price.xls';
        $content    = $this->getLayout()->createBlock('herfox_salesforce/adminhtml_price_grid')
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
        $fileName   = 'price.xml';
        $content    = $this->getLayout()->createBlock('herfox_salesforce/adminhtml_price_grid')
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
        return Mage::getSingleton('admin/session')->isAllowed('herfox_salesforce/price');
    }
}
