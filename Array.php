<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Домашнее задание 03</title>
</head>
<body>

<?php

$Animals = array (
	"Eurasia" => array(
		"Himalayan Bear",
		"American buffalo"
	),
	"Africa" => array(
		"Elephan African",
		"giraffe"
	),
	"North America" => array(
		"Coyote",
		"Puma"
	),
	"South Americ" => array (
		"Lama",
		"Jaguar"
	),
	"Australia" => array(
		"Tasmanian Devil",
		"Kangaroo"
	),
	"Antarctica" => array(
		"Seals",
		"Penguins"
	)
);


foreach ($Animals as $k1 => $v1) {
	foreach ($v1 as $v2) {
		$ex = explode(' ',$v2);
		$c = count($ex);
		if($c == 2){
			list($arr1[], $arr2[])=$ex;
		}
	}
}


$result = array_combine($arr1,$arr2);



$array = $result;

function array_quake(&$array) {
	if (is_array($array)) {
		$keys = array_keys($array);
		$temp = $array;
		$array = NULL;
		shuffle($temp); // Array shuffle
		foreach ($temp as $k => $item) {
			$array[$keys[$k]] = $item;
		}
		return;
	}
	return false;
}

array_quake($array);
foreach ($array as $key => $value){
	echo "$key $value <br>";
}

?>

<form action="Array.php" method="POST">
	<input name="myActionName" type="submit" value="Выполнить" />
</form>

</body>
</html>
