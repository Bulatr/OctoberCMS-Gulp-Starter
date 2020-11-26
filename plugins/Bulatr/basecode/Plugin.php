<?php namespace Bulatr\BaseCode;

use System\Classes\PluginBase;
//Console commands
use Bulatr\BaseCode\Classes\Console\ResetAdminPassword;

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
