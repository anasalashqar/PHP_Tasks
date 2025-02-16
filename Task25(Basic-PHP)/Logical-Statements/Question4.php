

<?php

$s = 4;
$t = 7;
$y = 55;

function findLargest($a, $b, $c) {
    return max($a, $b, $c);
}

$largest = findLargest($s, $t, $y);

echo "The largest number is: ". $largest;

?>