<?php namespace Bulatr\BaseCode;

use Event;
use System\Classes\PluginBase;
use Bulatr\BaseCode\Classes\Event\PropertyValue\ExtendPropertyValueFieldsHandler;
use Bulatr\BaseCode\Classes\Event\PropertyValue\ExtendPropertyValueModel;
use Bulatr\BaseCode\Classes\Event\ShippingType\ExtendShippingTypeFieldsHandler;
use Bulatr\BaseCode\Classes\Event\ShippingType\ExtendShippingTypeModel;
use Bulatr\Reviews\Classes\Event\Product\ExtendProductFieldsHandler;
use Bulatr\Reviews\Classes\Event\Product\ExtendProductModel;

/**
 * Class Plugin
 *
 * @package Bulatr\BaseCode
 * @author  Andrey Kharanenka, a.khoronenko@lovata.com, LOVATA Group
 */
class Plugin extends PluginBase
{
    /**
     * Register plugin components
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Bulatr\BaseCode\Components\SiteSettings' => 'SiteSettings',
            'Bulatr\BaseCode\Components\Catalog' => 'Catalog',

        ];
    }

    /**
     * Register settings
     * @return array
     */
    public function registerSettings()
    {
        return [
            'config'    => [
                'label'       => 'bulatr.basecode::lang.menu.settings',
                'description' => '',
                'icon'        => 'icon-cogs',
                'class'       => 'bulatr\BaseCode\Models\Settings',
                'permissions' => ['bulatr-site-settings'],
                'order'       => 100,
            ],
        ];
    }

    /**
     * Plugin boot method
     */
    public function boot()
    {
        $this->addEventListener();
        Event::subscribe(ExtendPropertyValueFieldsHandler::class);
        Event::subscribe(ExtendPropertyValueModel::class);
        Event::subscribe(ExtendShippingTypeFieldsHandler::class);
        Event::subscribe(ExtendShippingTypeModel::class);
        Event::subscribe(ExtendProductFieldsHandler::class);
        Event::subscribe(ExtendProductModel::class);
        
    }

    public function register()
    {
        
    }

    /**
     * @return array
     */
    public function registerMailTemplates()
    {
        return [];
    }

    /**
     * Add listener
     */
    protected function addEventListener()
    {
        ///
    }
}
