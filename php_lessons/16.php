<?php
//ローカル変数

$lang = "ruby";

function sayHi($name) {
	$lang ="php";  //この関数内だけ使える
	echo "hi! $name from $lang";
}

sayHi("Tom");
var_dump($lang);