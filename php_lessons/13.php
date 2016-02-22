<?php
//配列

// $sales = array(
// 	"fujikawa" => 200,
// 	"fujiyama" => 400,
// 	"fujimura" => 600,
// );

$sales = [
	"fujikawa" => 200,
	"fujiyama" => 400,
	"fujimura" => 600,
];

foreach ($sales as $key => $value) {
	echo "($key) $value";
}


$colors = ["red","blue","pink"];

foreach ($colors as $value) {
	echo "$value";
}

//コロン構文 htmlに埋め込む時にわかりやすい
foreach ($colors as $value) :
	echo "$value";
endforeach;

?>
<ul>
	<?php foreach ($colors as $value) : ?>
	<li><?php echo "$value"; ?></li>
	<?php endforeach; ?>
</ul>

