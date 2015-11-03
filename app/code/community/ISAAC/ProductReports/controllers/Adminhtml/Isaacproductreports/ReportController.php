<?php
/**
 * ISAAC ISAAC_ProductReports
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @category ISAAC
 * @package ISAAC_ProductReports
 * @copyright Copyright (c) 2015 ISAAC Software Solutions B.V. (https://www.isaac.nl)
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @author ISAAC Software Solutions B.V. (https://www.isaac.nl)
 */

class ISAAC_ProductReports_Adminhtml_Isaacproductreports_ReportController extends Mage_Adminhtml_Controller_Action
{
    /**
     * init
     *
     * @return Mage_Adminhtml_Report_ProductController
     */
    public function _initAction()
    {
        $this->loadLayout()
            ->_addBreadcrumb(Mage::helper('reports')->__('Reports'), Mage::helper('reports')->__('Reports'))
            ->_addBreadcrumb(Mage::helper('reports')->__('Products'), Mage::helper('reports')->__('Products'));
        return $this;
    }

    public function withoutCategoryAction()
    {
        $this->_initAction()
            ->_setActiveMenu('report/product/withoutCategory')
            ->_addBreadcrumb(Mage::helper('reports')->__('Products without category'), Mage::helper('reports')->__('Products without category'))
            ->_addContent($this->getLayout()->createBlock('isaacproductreports/product_withoutCategory'))
            ->renderLayout();
    }

    public function withoutImageAction()
    {
        $this->_initAction()
            ->_setActiveMenu('report/product/withoutImage')
            ->_addBreadcrumb(Mage::helper('reports')->__('Products without image'), Mage::helper('reports')->__('Products without image'))
            ->_addContent($this->getLayout()->createBlock('isaacproductreports/product_withoutImage'))
            ->renderLayout();
    }

    protected function _isAllowed()
    {
        $action = strtolower($this->getRequest()->getActionName());
        switch ($action) {
            case 'withoutcategory':
                return Mage::getSingleton('admin/session')->isAllowed('report/products/no_category');
            case 'withoutimage':
                return Mage::getSingleton('admin/session')->isAllowed('report/products/no_image');
            default:
                return false;
        }
    }
}
