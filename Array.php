<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Домашнее задание 03</title>
</head>
<body>

<?php

$geolocationOfAnimals = array (
    "Eurasia" => array(
        "Himalayan" => "Bear",
        "Red" => "Wolf"
    ),
    "Africa" => array(
        "Elephan" => "African",
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
        "Tasmanian" => "Devil",
        "Kangaroo"
    ),
    "Antarctica" => array(
        "Seals",
        "Penguins"
    )
);


foreach ($geolocationOfAnimals as $key => $element)
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
}

?>

<form action="Array.php" method="POST">
    <input name="myActionName" type="submit" value="Выполнить" />
</form>

</body>
</html>
