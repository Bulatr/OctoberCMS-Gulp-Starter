<?php namespace Bulatr\BaseCode\Classes\Event\Product;

use Lovata\Shopaholic\Models\Product;

/**
 * Class ExtendProductModel
 * @package Lovata\BaseCode\Classes\Event\Product
 */
class ExtendProductModel
{
    public function subscribe()
    {
        Product::extend(function ($obProduct) {
            /** @var Product $obProduct */
            $obProduct->fillable[] = 'popularity';
            $obProduct->fillable[] = 'properties';
            $obProduct->addCachedField(['popularity','properties']);

            
        });
    }
}