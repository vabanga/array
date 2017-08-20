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

    $res1 = explode(' ', $result[0]);
    $res2 = explode(' ', $result[1]);
    $res3 = explode(' ', $result[2]);
    $res4 = explode(' ', $result[4]);
    $arr = array(
        $res1,
        $res2,
        $res3,
        $res4
    );
    unset($arr[0][0]);
    unset($arr[1][0]);
    unset($arr[2][0]);
    unset($arr[3][0]);
    shuffle($arr);

    $arr2 = array(
        $res1,
        $res2,
        $res3,
        $res4
    );
    unset($arr2[0][1]);
    unset($arr2[1][1]);
    unset($arr2[2][1]);
    unset($arr2[3][1]);

    $results = $arr.' '.$arr2;
    foreach ($arr2 as $item){
        foreach ($item as $value){
            echo $value.'<br>';
        }
    }
    foreach ($arr as $item){
        foreach ($item as $value){
            echo $value.'<br>';
        }
    }
    break;
}

/*foreach ($geolocationOfAnimals as $key => $element)
{
    foreach ($element as $key => $element)
    {
        if (!is_numeric($key)) {
            $assoc["Himalayan"] = "Bear";
            $assoc["Red"] = "Wolf";
            $assoc["Elephan"] = "African";
            $assoc["Tasmanian"] = "Devil";
        }
    }
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
}*/

?>

<form action="Array.php" method="POST">
    <input name="myActionName" type="submit" value="Выполнить" />
</form>

</body>
</html>
