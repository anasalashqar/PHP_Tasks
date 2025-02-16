<?php

$num_one = 8;
$num_two = 12;
$op = "/";

function calculator($num1, $num2, $operation) {
    if ($operation == '+') {
        return $num1 + $num2;
    } elseif ($operation == '-') {
        return $num1 - $num2;
    } elseif ($operation == '*') {
        return $num1 * $num2;
    } elseif ($operation == '/') {
        return ($num2 != 0) ? $num1 / $num2 : "Division by zero error";
    }
    return "Invalid operation";
}

echo calculator($num_one, $num_two, $op);

?>