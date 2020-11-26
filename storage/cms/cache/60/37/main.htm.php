<?php 
class Cms5fbf24b540317673291811_2bd1509123ac2ac8566c19567ca4dc2dClass extends Cms\Classes\LayoutCode
{
public function onInit()
{
    $this['bHasPropertiesPlugin'] = \System\Classes\PluginManager::instance()->hasPlugin('Lovata.PropertiesShopaholic') && !\System\Classes\PluginManager::instance()->isDisabled('Lovata.PropertiesShopaholic');
}
}
