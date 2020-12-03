<?php namespace Bulatr\BaseCode\Classes\Event\PropertyValue;
use Lovata\Toolbox\Classes\Event\AbstractBackendFieldHandler;

use Lovata\PropertiesShopaholic\Models\PropertyValue;
use Lovata\PropertiesShopaholic\Controllers\PropertyValues;

/**
 * Class ExtendPropertyValueFieldsHandler
 * @package Lovata\BaseCode\Classes\Event\PropertyValue
 */
class ExtendPropertyValueFieldsHandler extends AbstractBackendFieldHandler
{
    /**
     * Extend field
     * @param \Backend\Widgets\Form $obWidget
     */
    protected function extendFields($obWidget)
    {
        $arAdditionFields = [
            
            'color_code' => [
                'label'   => 'Цвет',
                'tab'     => 'lovata.toolbox::lang.tab.settings',
                'type'    => 'colorpicker',
                
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
        return PropertyValue::class;
    }

    /**
     * Get controller class name
     * @return string
     */
    protected function getControllerClass() : string
    {
        return PropertyValues::class;
    }
}