<?php
//ループ処理


//前判定
$i = 100;
while ($i < 10) {
	echo $i;
	$i++;
}

//後判定
do {
	echo $i;
	$i++;
} while ($i < 10);