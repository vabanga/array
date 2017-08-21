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

$arr3 = $arr1;

$arr4 = $arr2;
shuffle($arr4);
$result = array_combine($arr3,$arr4);



foreach ($result as $k1=>$v1){
	echo $k1.' '.$v1.'<br>';
};

?>

<form action="Array.php" method="POST">
	<input name="myActionName" type="submit" value="Выполнить" />
</form>

</body>
</html>
