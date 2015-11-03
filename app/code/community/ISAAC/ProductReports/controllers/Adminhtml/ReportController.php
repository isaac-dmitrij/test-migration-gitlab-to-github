<?php
/**
 * ISAAC Product Reports
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    ISAAC
 * @package     ISAAC_ProductReports
 * @copyright   Copyright (c) 2011 ISAAC Software Solutions B.V. (http://www.isaac.nl)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @author      Christian Luijten
 * @version     1.0.0
 */

class ISAAC_ProductReports_Adminhtml_ReportController extends Mage_Adminhtml_Controller_Action
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
}
