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
 * Producto admin controller
 *
 * @category    Herfox
 * @package     Herfox_SalesForce
 * @author      Ultimate Module Creator
 */
class Herfox_SalesForce_Adminhtml_Salesforce_ProductController extends Herfox_SalesForce_Controller_Adminhtml_SalesForce
{
    /**
     * init the producto
     *
     * @access protected
     * @return Herfox_SalesForce_Model_Product
     */
    protected function _initProduct()
    {
        $productId  = (int) $this->getRequest()->getParam('id');
        $product    = Mage::getModel('herfox_salesforce/product');
        if ($productId) {
            $product->load($productId);
        }
        Mage::register('current_product', $product);
        return $product;
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
             ->_title(Mage::helper('herfox_salesforce')->__('Productos'));
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
     * edit producto - action
     *
     * @access public
     * @return void
     * @author Ultimate Module Creator
     */
    public function editAction()
    {
        $productId    = $this->getRequest()->getParam('id');
        $product      = $this->_initProduct();
        if ($productId && !$product->getId()) {
            $this->_getSession()->addError(
                Mage::helper('herfox_salesforce')->__('This producto no longer exists.')
            );
            $this->_redirect('*/*/');
            return;
        }
        $data = Mage::getSingleton('adminhtml/session')->getProductData(true);
        if (!empty($data)) {
            $product->setData($data);
        }
        Mage::register('product_data', $product);
        $this->loadLayout();
        $this->_title(Mage::helper('herfox_salesforce')->__('SalesForce'))
             ->_title(Mage::helper('herfox_salesforce')->__('Productos'));
        if ($product->getId()) {
            $this->_title($product->getName());
        } else {
            $this->_title(Mage::helper('herfox_salesforce')->__('Add producto'));
        }
        if (Mage::getSingleton('cms/wysiwyg_config')->isEnabled()) {
            $this->getLayout()->getBlock('head')->setCanLoadTinyMce(true);
        }
        $this->renderLayout();
    }

    /**
     * new producto action
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
     * save producto - action
     *
     * @access public
     * @return void
     * @author Ultimate Module Creator
     */
    public function saveAction()
    {
        if ($data = $this->getRequest()->getPost('product')) {
            try {
                $product = $this->_initProduct();
                $product->addData($data);
                $product->save();
                Mage::getSingleton('adminhtml/session')->addSuccess(
                    Mage::helper('herfox_salesforce')->__('Producto was successfully saved')
                );
                Mage::getSingleton('adminhtml/session')->setFormData(false);
                if ($this->getRequest()->getParam('back')) {
                    $this->_redirect('*/*/edit', array('id' => $product->getId()));
                    return;
                }
                $this->_redirect('*/*/');
                return;
            } catch (Mage_Core_Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
                Mage::getSingleton('adminhtml/session')->setProductData($data);
                $this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
                return;
            } catch (Exception $e) {
                Mage::logException($e);
                Mage::getSingleton('adminhtml/session')->addError(
                    Mage::helper('herfox_salesforce')->__('There was a problem saving the producto.')
                );
                Mage::getSingleton('adminhtml/session')->setProductData($data);
                $this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
                return;
            }
        }
        Mage::getSingleton('adminhtml/session')->addError(
            Mage::helper('herfox_salesforce')->__('Unable to find producto to save.')
        );
        $this->_redirect('*/*/');
    }

    /**
     * delete producto - action
     *
     * @access public
     * @return void
     * @author Ultimate Module Creator
     */
    public function deleteAction()
    {
        if ( $this->getRequest()->getParam('id') > 0) {
            try {
                $product = Mage::getModel('herfox_salesforce/product');
                $product->setId($this->getRequest()->getParam('id'))->delete();
                Mage::getSingleton('adminhtml/session')->addSuccess(
                    Mage::helper('herfox_salesforce')->__('Producto was successfully deleted.')
                );
                $this->_redirect('*/*/');
                return;
            } catch (Mage_Core_Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
                $this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
            } catch (Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError(
                    Mage::helper('herfox_salesforce')->__('There was an error deleting producto.')
                );
                $this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
                Mage::logException($e);
                return;
            }
        }
        Mage::getSingleton('adminhtml/session')->addError(
            Mage::helper('herfox_salesforce')->__('Could not find producto to delete.')
        );
        $this->_redirect('*/*/');
    }

    /**
     * mass delete producto - action
     *
     * @access public
     * @return void
     * @author Ultimate Module Creator
     */
    public function massDeleteAction()
    {
        $productIds = $this->getRequest()->getParam('product');
        if (!is_array($productIds)) {
            Mage::getSingleton('adminhtml/session')->addError(
                Mage::helper('herfox_salesforce')->__('Please select productos to delete.')
            );
        } else {
            try {
                foreach ($productIds as $productId) {
                    $product = Mage::getModel('herfox_salesforce/product');
                    $product->setId($productId)->delete();
                }
                Mage::getSingleton('adminhtml/session')->addSuccess(
                    Mage::helper('herfox_salesforce')->__('Total of %d productos were successfully deleted.', count($productIds))
                );
            } catch (Mage_Core_Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
            } catch (Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError(
                    Mage::helper('herfox_salesforce')->__('There was an error deleting productos.')
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
        $productIds = $this->getRequest()->getParam('product');
        if (!is_array($productIds)) {
            Mage::getSingleton('adminhtml/session')->addError(
                Mage::helper('herfox_salesforce')->__('Please select productos.')
            );
        } else {
            try {
                foreach ($productIds as $productId) {
                $product = Mage::getSingleton('herfox_salesforce/product')->load($productId)
                            ->setStatus($this->getRequest()->getParam('status'))
                            ->setIsMassupdate(true)
                            ->save();
                }
                $this->_getSession()->addSuccess(
                    $this->__('Total of %d productos were successfully updated.', count($productIds))
                );
            } catch (Mage_Core_Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
            } catch (Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError(
                    Mage::helper('herfox_salesforce')->__('There was an error updating productos.')
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
        $fileName   = 'product.csv';
        $content    = $this->getLayout()->createBlock('herfox_salesforce/adminhtml_product_grid')
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
        $fileName   = 'product.xls';
        $content    = $this->getLayout()->createBlock('herfox_salesforce/adminhtml_product_grid')
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
        $fileName   = 'product.xml';
        $content    = $this->getLayout()->createBlock('herfox_salesforce/adminhtml_product_grid')
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
        return Mage::getSingleton('admin/session')->isAllowed('herfox_salesforce/product');
    }
}
