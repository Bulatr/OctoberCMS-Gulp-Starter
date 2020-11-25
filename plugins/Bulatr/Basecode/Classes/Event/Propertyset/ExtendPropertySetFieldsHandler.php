<?php namespace Bulatr\BaseCode\Classes\Event\PropertySet;

use Lovata\Toolbox\Classes\Event\AbstractBackendFieldHandler;

use Lovata\PropertiesShopaholic\Models\PropertySet;
use Lovata\PropertiesShopaholic\Controllers\PropertySets;

/**
 * Class ExtendPropertySetFieldsHandler
 * @package Lovata\BaseCode\Classes\Event\PropertySet
 */
class ExtendPropertySetFieldsHandler extends AbstractBackendFieldHandler
{
    /**
     * Extend field
     * @param \Backend\Widgets\Form $obWidget
     */
    protected function extendFields($obWidget)
    {
        $arAdditionFields = [
            'color' => [
                'label'   => 'Цвета',
                'tab'     => 'lovata.toolbox::lang.tab.settings',
                'type'    => 'dropdown',
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
        return PropertySet::class;
    }

    /**
     * Get controller class name
     * @return string
     */
    protected function getControllerClass() : string
    {
        return PropertySets::class;
    }
}