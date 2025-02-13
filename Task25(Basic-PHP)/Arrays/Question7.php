<?php

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

$newArray = array_merge($array1, $array2);
echo "Array <br>";

echo "( <br>";
foreach ($newArray as $key => $value) {
    echo "       [$key] => $value<br>";
}
echo ")";
?>