<?php
/*
アクセス権
private  そのクラスの中からのみ
rotected そのクラスと親子クラス内からのみ
public   どこからでも

*/
class User {
	//property
	//public $name;
	//private $name;
	protected $name; //子クラスのAdminUserも！

	//constructor
	public function __construct($name) {
		$this->name = $name;
	}

	//method
	//override禁止 final
	final public function sayHi() {
		echo "hi, i am $this->name!";
	}
}

//子クラス
class AdminUser extends User {
	public function sayHello() {
		echo "hello from $this->name";
	}

	//override 上書き
	public function sayHi() {
		echo "[admin]hi, i am $this->name!";
	}
}

$tom = new User("Tom");
//echo $tom->name;
$steve = new AdminUser("Steve");
$steve->sayHello();



