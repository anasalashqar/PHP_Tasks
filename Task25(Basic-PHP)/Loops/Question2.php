


<?php
function sumIntegers()
{
    $sum = 0;
    $num = 0;
    while ($num <= 30) {
        $sum += $num;
        $num++;
    }
    echo $sum . "\n";
}

sumIntegers();
?>
