
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

global $arr1;
global $arr2;
shuffle($arr2);
$result = array_combine($arr1,$arr2);
foreach ($result as $k1=>$v1){
	echo $k1.' '.$v1.'<br>';
};

?>

