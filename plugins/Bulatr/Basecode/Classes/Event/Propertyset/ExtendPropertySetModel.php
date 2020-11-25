<?php namespace Bulatr\BaseCode\Classes\Event\PropertySet;

use Lovata\PropertiesShopaholic\Models\PropertySet;

/**
 * Class ExtendPropertySetModel
 * @package Lovata\BaseCode\Classes\Event\PropertySet
 */
class ExtendPropertySetModel
{
    public function subscribe()
    {
        PropertySet::extend(function ($obPropertySet) {
            /** @var PropertySet $obPropertySet */
            $obPropertySet->fillable[] = 'color';

            $obPropertySet->addCachedField(['color']);
        });
    }
}