<?php 
class Cms5fd582f1be53f999166168_a8ad8b8273a60c82aa76e3555852d940Class extends Cms\Classes\PartialCode
{
public function onStart() {
	$categoryId = $_POST["categoryId"];
	$this["categoryId"] = (int)$categoryId;
}
}
