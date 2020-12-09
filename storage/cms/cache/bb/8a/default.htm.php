<?php 
class Cms5fcf045429b4e422221015_f6673cc0ce276597c3ee2fa59cad18d1Class extends Cms\Classes\LayoutCode
{
public function onInit() {
	$obCartPositionList = $this->Cart->get();
	$obCartPositionListCount = $obCartPositionList->count();
	$this["obCartPositionList"] = $obCartPositionList;
	$this["obCartPositionListCount"] = $obCartPositionListCount;
}
}
