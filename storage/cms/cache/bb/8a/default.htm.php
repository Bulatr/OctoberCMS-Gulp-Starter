<?php 
class Cms5fd334c5b8d8d344632081_c5997c5d76072a3210e49dc88d49eabeClass extends Cms\Classes\LayoutCode
{
public function onInit() {
	$obCartPositionList = $this->Cart->get();
	$obCartPositionListCount = $obCartPositionList->count();
	$this["obCartPositionList"] = $obCartPositionList;
	$this["obCartPositionListCount"] = $obCartPositionListCount;
}
}
