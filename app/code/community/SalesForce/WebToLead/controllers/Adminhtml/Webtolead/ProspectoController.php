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
 * Prospecto admin controller
 *
 * @category    SalesForce
 * @package     SalesForce_WebToLead
 * @author      Ultimate Module Creator
 */
class SalesForce_WebToLead_Adminhtml_Webtolead_ProspectoController extends SalesForce_WebToLead_Controller_Adminhtml_WebToLead
{
    /**
     * init the prospecto
     *
     * @access protected
     * @return SalesForce_WebToLead_Model_Prospecto
     */
    protected function _initProspecto()
    {
        $prospectoId  = (int) $this->getRequest()->getParam('id');
        $prospecto    = Mage::getModel('salesforce_webtolead/prospecto');
        if ($prospectoId) {
            $prospecto->load($prospectoId);
        }
        Mage::register('current_prospecto', $prospecto);
        return $prospecto;
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
        $this->_title(Mage::helper('salesforce_webtolead')->__('SalesForce'))
             ->_title(Mage::helper('salesforce_webtolead')->__('Prospectos'));
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
        $prospectoId    = $this->getRequest()->getParam('id');
        $prospecto      = $this->_initProspecto();
        if ($prospectoId && !$prospecto->getId()) {
            $this->_getSession()->addError(
                Mage::helper('salesforce_webtolead')->__('This prospecto no longer exists.')
            );
            $this->_redirect('*/*/');
            return;
        }
        $data = Mage::getSingleton('adminhtml/session')->getProspectoData(true);
        if (!empty($data)) {
            $prospecto->setData($data);
        }
        Mage::register('prospecto_data', $prospecto);
        $this->loadLayout();
        $this->_title(Mage::helper('salesforce_webtolead')->__('SalesForce'))
             ->_title(Mage::helper('salesforce_webtolead')->__('Prospectos'));
        if ($prospecto->getId()) {
            $this->_title($prospecto->getEmail());
        } else {
            $this->_title(Mage::helper('salesforce_webtolead')->__('Add prospecto'));
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
        if ($data = $this->getRequest()->getPost('prospecto')) {
            try {
                $prospecto = $this->_initProspecto();
                $prospecto->addData($data);
                $prospecto->save();
                Mage::getSingleton('adminhtml/session')->addSuccess(
                    Mage::helper('salesforce_webtolead')->__('Prospecto was successfully saved')
                );
                Mage::getSingleton('adminhtml/session')->setFormData(false);
                if ($this->getRequest()->getParam('back')) {
                    $this->_redirect('*/*/edit', array('id' => $prospecto->getId()));
                    return;
                }
                $this->_redirect('*/*/');
                return;
            } catch (Mage_Core_Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
                Mage::getSingleton('adminhtml/session')->setProspectoData($data);
                $this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
                return;
            } catch (Exception $e) {
                Mage::logException($e);
                Mage::getSingleton('adminhtml/session')->addError(
                    Mage::helper('salesforce_webtolead')->__('There was a problem saving the prospecto.')
                );
                Mage::getSingleton('adminhtml/session')->setProspectoData($data);
                $this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
                return;
            }
        }
        Mage::getSingleton('adminhtml/session')->addError(
            Mage::helper('salesforce_webtolead')->__('Unable to find prospecto to save.')
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
                $prospecto = Mage::getModel('salesforce_webtolead/prospecto');
                $prospecto->setId($this->getRequest()->getParam('id'))->delete();
                Mage::getSingleton('adminhtml/session')->addSuccess(
                    Mage::helper('salesforce_webtolead')->__('Prospecto was successfully deleted.')
                );
                $this->_redirect('*/*/');
                return;
            } catch (Mage_Core_Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
                $this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
            } catch (Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError(
                    Mage::helper('salesforce_webtolead')->__('There was an error deleting prospecto.')
                );
                $this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
                Mage::logException($e);
                return;
            }
        }
        Mage::getSingleton('adminhtml/session')->addError(
            Mage::helper('salesforce_webtolead')->__('Could not find prospecto to delete.')
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
        $prospectoIds = $this->getRequest()->getParam('prospecto');
        if (!is_array($prospectoIds)) {
            Mage::getSingleton('adminhtml/session')->addError(
                Mage::helper('salesforce_webtolead')->__('Please select prospectos to delete.')
            );
        } else {
            try {
                foreach ($prospectoIds as $prospectoId) {
                    $prospecto = Mage::getModel('salesforce_webtolead/prospecto');
                    $prospecto->setId($prospectoId)->delete();
                }
                Mage::getSingleton('adminhtml/session')->addSuccess(
                    Mage::helper('salesforce_webtolead')->__('Total of %d prospectos were successfully deleted.', count($prospectoIds))
                );
            } catch (Mage_Core_Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
            } catch (Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError(
                    Mage::helper('salesforce_webtolead')->__('There was an error deleting prospectos.')
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
        $prospectoIds = $this->getRequest()->getParam('prospecto');
        if (!is_array($prospectoIds)) {
            Mage::getSingleton('adminhtml/session')->addError(
                Mage::helper('salesforce_webtolead')->__('Please select prospectos.')
            );
        } else {
            try {
                foreach ($prospectoIds as $prospectoId) {
                $prospecto = Mage::getSingleton('salesforce_webtolead/prospecto')->load($prospectoId)
                            ->setStatus($this->getRequest()->getParam('status'))
                            ->setIsMassupdate(true)
                            ->save();
                }
                $this->_getSession()->addSuccess(
                    $this->__('Total of %d prospectos were successfully updated.', count($prospectoIds))
                );
            } catch (Mage_Core_Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
            } catch (Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError(
                    Mage::helper('salesforce_webtolead')->__('There was an error updating prospectos.')
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
        $fileName   = 'prospecto.csv';
        $content    = $this->getLayout()->createBlock('salesforce_webtolead/adminhtml_prospecto_grid')
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
        $fileName   = 'prospecto.xls';
        $content    = $this->getLayout()->createBlock('salesforce_webtolead/adminhtml_prospecto_grid')
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
        $fileName   = 'prospecto.xml';
        $content    = $this->getLayout()->createBlock('salesforce_webtolead/adminhtml_prospecto_grid')
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
        return Mage::getSingleton('admin/session')->isAllowed('salesforce_webtolead/prospecto');
    }
}
