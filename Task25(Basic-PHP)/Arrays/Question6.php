<?php

$array = [
    78,
    60,
    62,
    68,
    71,
    68,
    73,
    85,
    66,
    64,
    76,
    63,
    75,
    76,
    73,
    68,
    62,
    73,
    72,
    65,
    74,
    62,
    62,
    65,
    64,
    68,
    73,
    75,
    79,
    73
];

asort($array);

$Average = array_sum($array) / count($array);

echo "Average: " . $Average . "<br>";

$Lowest = array_slice($array, 0, 7);

echo "Highest 7 numbers: " . implode(", ", $Lowest) . "<br>";


$Highest = array_slice($array, -7);

echo "Lowest 7 numbers: " . implode(", ", $Highest) . "<br>";

?>