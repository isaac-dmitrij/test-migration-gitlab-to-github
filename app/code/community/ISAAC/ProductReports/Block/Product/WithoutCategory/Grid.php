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

class ISAAC_ProductReports_Block_Product_WithoutCategory_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    /**
     * Initialize Grid settings
     *
     */
    public function __construct()
    {
        parent::__construct();
        $this->setId('gridProductsWithoutCategory');
    }

    /**
     * Prepare collection object for grid
     *
     * @return Mage_Adminhtml_Block_Report_Product_Sold_Grid
     */
    protected function _prepareCollection()
    {
        $collection = Mage::getResourceModel('isaacproductreports/product_withoutCategory_collection')
            ->addAttributeToSelect('name')
            ->addWithoutCategoryFilter();

        $this->setCollection($collection);

        return parent::_prepareCollection();
    }

    /**
     * Prepare Grid columns
     *
     * @return Mage_Adminhtml_Block_Report_Product_Sold_Grid
     */
    protected function _prepareColumns()
    {
        $this->addColumn('sku', array(
            'header'    =>Mage::helper('reports')->__('SKU'),
            'width'     =>'120px',
            'align'     =>'right',
            'index'     =>'sku'
        ));

        $this->addColumn('name', array(
            'header'    =>Mage::helper('reports')->__('Product Name'),
            'index'     =>'name'
        ));

        return parent::_prepareColumns();
    }

    /**
     * Retrieve Row Click callback URL
     *
     * @return string
     */
    public function getRowUrl($row)
    {
        return $this->getUrl('adminhtml/catalog_product/edit', array('id' => $row->getId(), 'active_tab' => 'categories'));
    }
}
