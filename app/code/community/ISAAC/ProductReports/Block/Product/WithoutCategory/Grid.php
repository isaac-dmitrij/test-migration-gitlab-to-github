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
