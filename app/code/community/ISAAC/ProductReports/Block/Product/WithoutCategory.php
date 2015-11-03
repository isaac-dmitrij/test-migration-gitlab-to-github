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
