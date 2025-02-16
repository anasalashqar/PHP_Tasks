<?php

function findGrade($scores)
{
    $average = array_sum($scores) / count($scores);

    if ($average < 60) {
        return "F";
    } elseif ($average < 70) {
        return "D";
    } elseif ($average < 80) {
        return "C";
    } elseif ($average < 90) {
        return "B";
    }
    return "A";
}


$scores = [60, 86, 95, 63, 55, 74, 79, 62, 50];
echo findGrade($scores) . "\n";
