<?php

$y = 10;
$x = 12;

echo "y={$y} x={$x}";

function rev($a, $b)
{
    $r = 0;

    $r = $a;
    $a = $b;
    $b = $r;
    echo "<br>After swapping: y={$a} x={$b}";
}

rev($y, $x);
