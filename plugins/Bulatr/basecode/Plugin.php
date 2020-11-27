<?php namespace Bulatr\BaseCode;

use Event;
use System\Classes\PluginBase;
//Console commands
use Bulatr\BaseCode\Classes\Console\ResetAdminPassword;
use Bulatr\BaseCode\Classes\Event\Product\ExtendProductFieldsHandler;
use Bulatr\BaseCode\Classes\Event\Product\ExtendProductModel;
use Bulatr\BaseCode\Classes\Event\Product\ExtendProductCollection;
use Bulatr\PropertiesProduct\Controllers\PropertiesProducts;

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
                'class'       => 'Bulatr\BaseCode\Models\Settings',
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
        Event::subscribe(ExtendProductFieldsHandler::class);
        Event::subscribe(ExtendProductModel::class);
        Event::subscribe(ExtendProductCollection::class);
    }

    public function register()
    {
        $this->registerConsoleCommand('basecode:reset_admin_password', ResetAdminPassword::class);
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
