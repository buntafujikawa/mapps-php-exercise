<?php
//組み込み関数

//数値
$x = 5.6;
echo ceil($x);  //切り上げる
echo floor($x); //切り捨てる
echo round($x); //四捨五入
echo rand(1,10);//乱数を生成する


//文字列
$s1 = "hello";
$s2 = "ねこ";
echo strlen($s1);
echo mb_strlen($s2);
print("%s - %s - %.3f", $s1, $s2, $x);


//配列
$colors = ["red", "blue", "pink"];
echo count($colors);
echo implode("@", $colors);