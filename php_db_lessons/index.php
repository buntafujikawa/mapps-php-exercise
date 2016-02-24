<?php

define('DB_DATABASE', 'dotinstall_db');
define('DB_USERNAME', 'dbuser');
define('DB_PASSWORD', 'mapps-fujikawa');
define('PDO_DSN', 'mysql:dbhost=localhost;dbname=' . DB_DATABASE);

class User {
	// public $id;
	// public $name;
	// public $score
	public function show() {
		echo "$this->name ($this->score)";
	}
}

try {
  //connect
  $db = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  /*
  1,exec()    結果を返さない、 安全なSQL
  2,query()   結果を返す、    安全なSQL、   何回も実行されないSQL
  3,prepare() 結果を返す、    安全対策必要、 複数回実行されるSQL
  */

  //insert
  //bindValue:値をbind
  //bindParam:変数への参照をbind
  // $stmt = $db->prepare("insert into users (name, score) values (?, ?)");

  // $name = 'taguchi';
  // $stmt->bindValue(1, $name, PDO::PARAM_STR);
  // $stmt->bindValue(':name', $name, PDO::PARAM_STR)
  // $score = 23;
  // $stmt->bindValue(2, $score, PDO::PARAM_INT);
  // $stmt->execute();
  // $score = 44;
  // $stmt->bindValue(2, $score, PDO::PARAM_INT);
  // $stmt->execute();

  // $stmt->bindParam(2, $score, PDO::PARAM_INT);
  // $score = 52;
  // $stmt->execute();
  // $score = 44;
  // $stmt->execute();
  // $score = 6;
  // $stmt->execute();

  //select all
  // $stmt = $db->query("select * from users");
  // $stmt = $db->prepare("select score from users where score > ?");
  // $stmt->execute([60]);
  // $stmt = $db->prepare("select name from users where name like ?");
  // $stmt->execute([%t%]);
  // $stmt = $db->prepare("select score from users order by score desc limit ?");
  // $stmt->bindValue(1, 1, PDO::PARAM_INT);
  // $stmt->xexcute();
  // $stmt->execute([1]);


  //FETCH_CLASS
  // $stmt = $db->query("select * from users");

  // $users = $stmt->fetchAll(PDO::FETCH_CLASS, 'User');
  // foreach ($users as $user) {
  // 	$user->show();
  // }
  // echo $stmt->rowCount() . "records fount.";

  //updata
  // $stmt = $db->prepare("update users set score = :score where name = :name");
  // $stmt->execute([
  // 	':score' => 100,
  // 	':name' => 'taguchi'
  // 	]);
  // echo 'row updated:' . $stmt->rowCount();

  // //delete
  // $stmt = $db->prepare("delete from users where name = :name");
  // $stmt->execute([
  // 	':name' => 'dotinstall'
  // 	]);
  // echo 'row deleted:' . $stmt->rowCount();

  //transaction
  $db->beginTransaction();
  $db->exec("update users set score = score - 10 where name = 'taguchi");
  $db->exec("update users set score = score + 10 where name = 'fkoji");
  $db->commit();

} catch(PDOException $e) {
	$db->rollback();
	echo $e->getMessage();
	exit;
}