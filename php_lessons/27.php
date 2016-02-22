<?php
/*
例外処理
なんらかの処理をしていて、予期しない結果が発生した時に適切に処理していく方法
*/

function div($a, $b) {
	try {
		if ($b === 0) {
			throw new Exception("cannot divide by 0!");
		}
		echo $a / $b;
	} catch (Exception $e) {
		echo $e->getMessage();
	}
}

div(7,2);
div(5,0); //0で割るのはエラー！→例外処理で行えるようにする

