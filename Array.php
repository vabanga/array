
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

$arr1 = [];
$arr2 = [];
shuffle($arr2);
if(count($arr1)!=count($arr2)){
	die("Массивы не одинаковых размеров");
}
for($i = 0; $i<count($arr1); $i++){
	echo $arr1[$i].' '.$arr2[$i].'<br>';
}

?>

