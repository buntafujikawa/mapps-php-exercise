<?php
//真偽値

/*
falseになる
空、０は要注意！！
*/

$x = 5;
if ($x == true) {
	echo "great";
}

//三項演算子

$max = ($a > $b) ? $a : $b;

if ($a > $b) {
	$max = $a;
} else {
	$max = $b;
}