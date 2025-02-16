<?php
function isArmstrong($num) {
    $sum = 0;
    $temp = $num;
    $digits = strlen((string)$num); 

    while ($temp > 0) {
        $lastDigit = $temp % 10; 
        $sum += pow($lastDigit, $digits); 
        $temp = (int)($temp / 10); 
    }

    return ($sum == $num);
}

$number = 407;

if (isArmstrong($number)) {
    echo "$number is an Armstrong Number.";
} else {
    echo "$number is not an Armstrong Number.";
}
?>
