<?php
/*
名前空間
自分が作ったクラスや関数やインターフェースなどには名前空間をつけてあげて他人とかぶらないようにする？？
ファイルの先頭に必ず書く
*/

require "User.class.php";

//階層で使うと長くなるから別名をつける
//use Dotinstall\Lib as Lib;
use Dotinstall\Lib;

$bob = new Dotinstall\Lib\User("Bob");
$bob->sayHi();