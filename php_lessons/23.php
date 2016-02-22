<?php
/*
抽象クラス
他のクラスで継承してもらうことを前提としている
共通のものを定義しておけばシンプルにできる
*/
abstract class BaseUser {
	public $name;
	abstract public function sayHi() {
	}
}

class User extends BaseUser {
	public function sayHi() {
		echo "hellofrom User";
	}
}