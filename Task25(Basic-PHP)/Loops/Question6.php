<?php

function factorial($num) {
    $result = 1;
    for ($i = 1; $i <= $num; $i++) {
        $result *= $i;
    }
    echo $result . "<br>";
}

factorial(5);
?>