<?php namespace Bulatr\BaseCode\Components;

use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
use Lovata\Shopaholic\Classes\Item\ProductItem;

class Reviews extends \Cms\Classes\ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Reviews',
            'description' => 'Отзывы о продуктах'
        ];
    }

    /** Свойства компонента */
    public function defineProperties()
    {
        return [
            
        ];
    }


}