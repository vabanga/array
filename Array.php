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

foreach ($Animals as $key=>$element){

    $array1 = $Animals["Eurasia"];
    $array2 = $Animals["Africa"];
    $array3 = $Animals["Australia"];
    $result = array_merge($array1,$array2,$array3);
    unset($result[3]);
    unset($result[5]);

    $res = explode(" ",$result[0]);
    $res1 = explode(" ",$result[1]);
    $res2 = explode(" ",$result[2]);
    $res3 = explode(" ",$result[4]);

    $r1 = array_merge($res,$res1,$res2,$res3);
    unset($r1[1]);
    unset($r1[3]);
    unset($r1[5]);
    unset($r1[7]);
    $r2 = array_merge($res,$res1,$res2,$res3);
    unset($r2[0]);
    unset($r2[2]);
    unset($r2[4]);
    unset($r2[6]);
    $assoc = array_combine($r1,$r2);
    break;
}



$array = $assoc;

function array_quake(&$array) {
    if (is_array($array)) {
        $keys = array_keys($array); // We need this to preserve keys
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
