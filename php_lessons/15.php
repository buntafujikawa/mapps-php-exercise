<?php
//関数
//引数

function sayHi($name = "fujikawa") {
	//echo "hi!".$name;
	return "hi!".$name;
}

//sayHi();

sayHi("Tom");
sayHi("Bob");
sayHi();

$s = sayHi();
var_dump($s);