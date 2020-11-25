<?php namespace Bulatr\Basecode;
use Event;
use System\Classes\PluginBase;
use Bulatr\BaseCode\Classes\Event\PropertySet\ExtendPropertySetFieldsHandler;
use Bulatr\BaseCode\Classes\Event\PropertySet\ExtendPropertySetModel;

class Plugin extends PluginBase
{
    /**
     * @var array Plugin dependencies
     */
    public $require = ['Lovata.Shopaholic'];

    public function registerComponents()
    {
    }

    public function registerSettings()
    {

    }

    public function boot()
    {
    Event::subscribe(ExtendPropertySetFieldsHandler::class);
    Event::subscribe(ExtendPropertySetModel::class);
    }
}
