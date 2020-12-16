<?php namespace Bulatr\Reviews\Classes\Event\Product;

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
            'id_review' => [
                'label'   => 'Рейтинг',
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

    public $hasMany = [
        'id_review' => 'Bulatr\Reviews\Models\Reviews'
    ];
}