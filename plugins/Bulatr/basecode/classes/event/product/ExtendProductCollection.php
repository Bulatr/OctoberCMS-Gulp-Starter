<?php namespace Bulatr\BaseCode\Classes\Event\Product;

use Lovata\Shopaholic\Models\Product;
use Lovata\Shopaholic\Classes\Collection\ProductCollection;

/**
 * Class ExtendProductCollection
 * @package Lovata\BaseCode\Classes\Event\Product
 */
class ExtendProductCollection
{
    public function subscribe()
    {
        ProductCollection::extend(function ($obProductList) {
            $this->addCustomMethod($obProductList);
        });
    }

    /**
     * Add myCustomMethod method
     * @param ProductCollection $obProductList
     */
    protected function addCustomMethod($obProductList)
    {   
        // Получаем список популярных продуктов у которых поле популярность больше 0
        $obProductList->addDynamicMethod('popularityItems', function () use ($obProductList) {

           $arResultIDList = (array) Product::where('popularity','>', 0)->lists('id');
           
            return $obProductList->intersect($arResultIDList);
        });
    }
}