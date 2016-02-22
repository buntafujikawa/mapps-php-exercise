<?php
/*
Cookie
アクセスしてきたユーザーのブラウザにデータをセットすることができる
期限を設定しない場合、ブラウザを閉じるまでが期限
*/

//setcookie("username", "fujikawa");
//setcookie("username", "fujikawa", time()+60*60);
setcookie("username", "fujikawa", time()-60*60);

echo $_COOKIE['username'];