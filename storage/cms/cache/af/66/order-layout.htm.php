<?php 
class Cms5fd3325c607d9408597300_d1720c4a1a90d209513be477c4e976dcClass extends Cms\Classes\LayoutCode
{
public function onInit() {
	$obCartPositionList = $this->Cart->get();
	$obCartPositionListCount = $obCartPositionList->count();
	$this["obCartPositionList"] = $obCartPositionList;
	$this["obCartPositionListCount"] = $obCartPositionListCount;
}
}
