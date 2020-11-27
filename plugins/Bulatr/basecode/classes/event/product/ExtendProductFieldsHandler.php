<?php namespace Bulatr\BaseCode\Classes\Event\Product;

use Lovata\Toolbox\Classes\Event\AbstractBackendFieldHandler;

use Lovata\Shopaholic\Models\Product;
use Lovata\Shopaholic\Controllers\Products;

/**
 * Class ExtendProductFieldsHandler
 * @package Lovata\BaseCode\Classes\Event\Product
 */
class ExtendProductFieldsHandler extends AbstractBackendFieldHandler
{
    /**
     * Extend field
     * @param \Backend\Widgets\Form $obWidget
     */
    protected function extendFields($obWidget)
    {
        $arAdditionFields = [
            'popularity' => [
                'label'   => 'bulatr.basecode::lang.field.popular_prоduct',
                'tab'     => 'lovata.toolbox::lang.tab.settings',
                'type'    => 'number',
                'default' => 0,
            ],
            'properties' => [
                'label' => 'bulatr.basecode::lang.field.properties_product',
                'tab' => 'bulatr.basecode::lang.field.properties',
                'type' => 'repeater',
                'titleFrom' => 'bulatr.basecode::lang.field.properties_product',
                
            ]
        ];

        $obWidget->addTabFields($arAdditionFields);
    }

    /**
     * Get model class name
     * @return string
     */
    protected function getModelClass() : string
    {
        return Product::class;
    }

    /**
     * Get controller class name
     * @return string
     */
    protected function getControllerClass() : string
    {
        return Products::class;
    }
}