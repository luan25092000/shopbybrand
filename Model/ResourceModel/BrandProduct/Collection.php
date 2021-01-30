<?php
/**
 * Created by PhpStorm.
 */
namespace Magenest\ShopByBrand\Model\ResourceModel\BrandProduct;

use function print_r;
use const true;

/**
 * Class Collection
 *
 * @package Magenest\ShopByBrand\Model\ResourceModel\Brand
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     *  Initialize resource collection
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('Magenest\ShopByBrand\Model\BrandProduct', 'Magenest\ShopByBrand\Model\ResourceModel\BrandProduct');
    }

}
