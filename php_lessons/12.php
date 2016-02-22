<?php
//ループ
//break ループを抜ける
//continue 次のループに

for ($i = 0; $i < 10; $i++) {
	if ($i === 5) {
		//break;
		continue; //5だけ表示されない
	}
	echo $i;
}