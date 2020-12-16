<?php namespace Bulatr\BaseCode\Classes\Event\ShippingType;

use Lovata\OrdersShopaholic\Models\ShippingType;

/**
 * Class ExtendShippingTypeModel
 * @package Lovata\BaseCode\Classes\Event\ShippingType
 */
class ExtendShippingTypeModel
{
    public function subscribe()
    {
        ShippingType::extend(function ($obShippingType) {
            /** @var ShippingType $obShippingType */
            $obShippingType->fillable[] = 'srok_dostavki';

            $obShippingType->addCachedField(['srok_dostavki']);
        });
    }
}