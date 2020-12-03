<?php namespace Bulatr\BaseCode\Classes\Event\PropertyValue;

use Lovata\PropertiesShopaholic\Models\PropertyValue;

/**
 * Class ExtendPropertyValueModel
 * @package Lovata\BaseCode\Classes\Event\PropertyValue
 */
class ExtendPropertyValueModel
{
    public function subscribe()
    {
        PropertyValue::extend(function ($obPropertyValue) {
            /** @var PropertyValue $obPropertyValue */
            $obPropertyValue->fillable[] = 'color_code';
            $obPropertyValue->addCachedField(['color_code']);
        });
    }
}