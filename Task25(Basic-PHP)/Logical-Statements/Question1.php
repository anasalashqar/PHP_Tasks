<?php

$s = 20;
$g = 10;
function checkSum($a, $b)
{
    return ($a + $b == 30) ? $a + $b : false;
}

$result = checkSum($s, $g);

if ($result) {
    echo "The sum of $s and $g is $result.";
} else {
    echo "The sum of $s and $g is not equal to 30.";
}
