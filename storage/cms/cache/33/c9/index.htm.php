<?php 
class Cms5fbf24ca05052438270530_02aa85acaedf0222d9ccfd4030d292f5Class extends Cms\Classes\PageCode
{
public function onInit()
{
    $this['bHasPopularityPlugin'] = \System\Classes\PluginManager::instance()->hasPlugin('Lovata.PopularityShopaholic') && !\System\Classes\PluginManager::instance()->isDisabled('Lovata.PopularityShopaholic');
    $this['bHasFilterPlugin'] = \System\Classes\PluginManager::instance()->hasPlugin('Lovata.FilterShopaholic') && !\System\Classes\PluginManager::instance()->isDisabled('Lovata.FilterShopaholic');
}
}
