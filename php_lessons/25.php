<?php
/*
ファイルを分割する
require      fatal error
require_once

include      warning
include_once

autoload
*/

//require "User.class.php";
//include "User.class.php";

spl_autoload_register(function($class) {
	require $class . ".class.php";
});

$bob = new User("Bob");
$bob->sayHi();