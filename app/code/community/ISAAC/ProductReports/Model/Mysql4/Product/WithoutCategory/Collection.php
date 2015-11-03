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

class ISAAC_ProductReports_Model_Mysql4_Product_WithoutCategory_Collection extends Mage_Catalog_Model_Resource_Eav_Mysql4_Product_Collection
{
    public function addWithoutCategoryFilter()
    {
        $this->joinField('category_id', 'catalog/category_product', 'category_id', 'product_id=entity_id', null, 'left')
            ->addAttributeToFilter('category_id', array('null' => 1));

        return $this;
    }
}
