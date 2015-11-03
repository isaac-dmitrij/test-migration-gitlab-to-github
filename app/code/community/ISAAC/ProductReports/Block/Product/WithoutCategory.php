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

class ISAAC_ProductReports_Block_Product_WithoutCategory extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    /**
     * Initialize container block settings
     *
     */
    public function __construct()
    {
        $this->_blockGroup = 'isaacproductreports';
        $this->_controller = 'product_withoutCategory';
        $this->_headerText = Mage::helper('reports')->__('Products without category');
        parent::__construct();
        $this->_removeButton('add');
    }
}
