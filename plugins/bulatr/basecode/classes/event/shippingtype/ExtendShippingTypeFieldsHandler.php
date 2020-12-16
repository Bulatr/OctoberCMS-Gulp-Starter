<?php namespace Bulatr\BaseCode\Classes\Event\ShippingType;

use Lovata\Toolbox\Classes\Event\AbstractBackendFieldHandler;

use Lovata\OrdersShopaholic\Models\ShippingType;
use Lovata\OrdersShopaholic\Controllers\ShippingTypes;

/**
 * Class ExtendShippingTypeFieldsHandler
 * @package Bulatr\BaseCode\Classes\Event\ShippingType
 */
class ExtendShippingTypeFieldsHandler extends AbstractBackendFieldHandler
{
    /**
     * Extend field
     * @param \Backend\Widgets\Form $obWidget
     */
    protected function extendFields($obWidget)
    {
        $arAdditionFields = [
            'srok_dostavki' => [
                'label'   => 'Срок доставки',
                'tab'     => 'lovata.toolbox::lang.tab.settings',
                'type'    => 'text',
            ],
        ];

        $obWidget->addTabFields($arAdditionFields);
    }

    /**
     * Get model class name
     * @return string
     */
    protected function getModelClass() : string
    {
        return ShippingType::class;
    }

    /**
     * Get controller class name
     * @return string
     */
    protected function getControllerClass() : string
    {
        return ShippingTypes::class;
    }
}