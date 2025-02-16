<?php

function checkNumber($num) {
    if ($num > 0) {
        return "Positive";
    } elseif ($num < 0) {
        return "Negative";
    }
    return "Zero";
}

$number = 10;

echo "The number is: " . checkNumber($number) . "<br>";
?>