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
 * Prospecto admin controller
 *
 * @category    Herfox
 * @package     Herfox_SalesForce
 * @author      Ultimate Module Creator
 */
class Herfox_SalesForce_Adminhtml_Salesforce_ProspectController extends Herfox_SalesForce_Controller_Adminhtml_SalesForce
{
    /**
     * init the prospecto
     *
     * @access protected
     * @return Herfox_SalesForce_Model_Prospect
     */
    protected function _initProspect()
    {
        $prospectId  = (int) $this->getRequest()->getParam('id');
        $prospect    = Mage::getModel('herfox_salesforce/prospect');
        if ($prospectId) {
            $prospect->load($prospectId);
        }
        Mage::register('current_prospect', $prospect);
        return $prospect;
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
             ->_title(Mage::helper('herfox_salesforce')->__('Prospectos'));
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
     * edit prospecto - action
     *
     * @access public
     * @return void
     * @author Ultimate Module Creator
     */
    public function editAction()
    {
        $prospectId    = $this->getRequest()->getParam('id');
        $prospect      = $this->_initProspect();
        if ($prospectId && !$prospect->getId()) {
            $this->_getSession()->addError(
                Mage::helper('herfox_salesforce')->__('This prospecto no longer exists.')
            );
            $this->_redirect('*/*/');
            return;
        }
        $data = Mage::getSingleton('adminhtml/session')->getProspectData(true);
        if (!empty($data)) {
            $prospect->setData($data);
        }
        Mage::register('prospect_data', $prospect);
        $this->loadLayout();
        $this->_title(Mage::helper('herfox_salesforce')->__('SalesForce'))
             ->_title(Mage::helper('herfox_salesforce')->__('Prospectos'));
        if ($prospect->getId()) {
            $this->_title($prospect->getCustomerId());
        } else {
            $this->_title(Mage::helper('herfox_salesforce')->__('Add prospecto'));
        }
        if (Mage::getSingleton('cms/wysiwyg_config')->isEnabled()) {
            $this->getLayout()->getBlock('head')->setCanLoadTinyMce(true);
        }
        $this->renderLayout();
    }

    /**
     * new prospecto action
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
     * save prospecto - action
     *
     * @access public
     * @return void
     * @author Ultimate Module Creator
     */
    public function saveAction()
    {
        if ($data = $this->getRequest()->getPost('prospect')) {
            try {
                $prospect = $this->_initProspect();
                $prospect->addData($data);
                $prospect->save();
                Mage::getSingleton('adminhtml/session')->addSuccess(
                    Mage::helper('herfox_salesforce')->__('Prospecto was successfully saved')
                );
                Mage::getSingleton('adminhtml/session')->setFormData(false);
                if ($this->getRequest()->getParam('back')) {
                    $this->_redirect('*/*/edit', array('id' => $prospect->getId()));
                    return;
                }
                $this->_redirect('*/*/');
                return;
            } catch (Mage_Core_Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
                Mage::getSingleton('adminhtml/session')->setProspectData($data);
                $this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
                return;
            } catch (Exception $e) {
                Mage::logException($e);
                Mage::getSingleton('adminhtml/session')->addError(
                    Mage::helper('herfox_salesforce')->__('There was a problem saving the prospecto.')
                );
                Mage::getSingleton('adminhtml/session')->setProspectData($data);
                $this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
                return;
            }
        }
        Mage::getSingleton('adminhtml/session')->addError(
            Mage::helper('herfox_salesforce')->__('Unable to find prospecto to save.')
        );
        $this->_redirect('*/*/');
    }

    /**
     * delete prospecto - action
     *
     * @access public
     * @return void
     * @author Ultimate Module Creator
     */
    public function deleteAction()
    {
        if ( $this->getRequest()->getParam('id') > 0) {
            try {
                $prospect = Mage::getModel('herfox_salesforce/prospect');
                $prospect->setId($this->getRequest()->getParam('id'))->delete();
                Mage::getSingleton('adminhtml/session')->addSuccess(
                    Mage::helper('herfox_salesforce')->__('Prospecto was successfully deleted.')
                );
                $this->_redirect('*/*/');
                return;
            } catch (Mage_Core_Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
                $this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
            } catch (Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError(
                    Mage::helper('herfox_salesforce')->__('There was an error deleting prospecto.')
                );
                $this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
                Mage::logException($e);
                return;
            }
        }
        Mage::getSingleton('adminhtml/session')->addError(
            Mage::helper('herfox_salesforce')->__('Could not find prospecto to delete.')
        );
        $this->_redirect('*/*/');
    }

    /**
     * mass delete prospecto - action
     *
     * @access public
     * @return void
     * @author Ultimate Module Creator
     */
    public function massDeleteAction()
    {
        $prospectIds = $this->getRequest()->getParam('prospect');
        if (!is_array($prospectIds)) {
            Mage::getSingleton('adminhtml/session')->addError(
                Mage::helper('herfox_salesforce')->__('Please select prospectos to delete.')
            );
        } else {
            try {
                foreach ($prospectIds as $prospectId) {
                    $prospect = Mage::getModel('herfox_salesforce/prospect');
                    $prospect->setId($prospectId)->delete();
                }
                Mage::getSingleton('adminhtml/session')->addSuccess(
                    Mage::helper('herfox_salesforce')->__('Total of %d prospectos were successfully deleted.', count($prospectIds))
                );
            } catch (Mage_Core_Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
            } catch (Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError(
                    Mage::helper('herfox_salesforce')->__('There was an error deleting prospectos.')
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
        $prospectIds = $this->getRequest()->getParam('prospect');
        if (!is_array($prospectIds)) {
            Mage::getSingleton('adminhtml/session')->addError(
                Mage::helper('herfox_salesforce')->__('Please select prospectos.')
            );
        } else {
            try {
                foreach ($prospectIds as $prospectId) {
                $prospect = Mage::getSingleton('herfox_salesforce/prospect')->load($prospectId)
                            ->setStatus($this->getRequest()->getParam('status'))
                            ->setIsMassupdate(true)
                            ->save();
                }
                $this->_getSession()->addSuccess(
                    $this->__('Total of %d prospectos were successfully updated.', count($prospectIds))
                );
            } catch (Mage_Core_Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
            } catch (Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError(
                    Mage::helper('herfox_salesforce')->__('There was an error updating prospectos.')
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
        $fileName   = 'prospect.csv';
        $content    = $this->getLayout()->createBlock('herfox_salesforce/adminhtml_prospect_grid')
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
        $fileName   = 'prospect.xls';
        $content    = $this->getLayout()->createBlock('herfox_salesforce/adminhtml_prospect_grid')
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
        $fileName   = 'prospect.xml';
        $content    = $this->getLayout()->createBlock('herfox_salesforce/adminhtml_prospect_grid')
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
        return Mage::getSingleton('admin/session')->isAllowed('herfox_salesforce/prospect');
    }
}
