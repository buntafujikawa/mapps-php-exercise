<?php
//クラスの作成
//クラスの継承

//親クラス
class User {
	//property
	public $name;

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
		echo "hello from Admin!";
	}

	//override 上書き
	public function sayHi() {
		echo "[admin]hi, i am $this->name!";
	}
}

$tom = new User("Tom");
$steve = new AdminUser("Steve");
echo $steve->name;
$steve->sayHi();
$steve->sayHello();


$bob = new User("Bob");

echo $tom->name;
$bob->sayHi();