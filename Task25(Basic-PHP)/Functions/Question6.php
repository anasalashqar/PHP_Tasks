<?php

$array1 = array(2, 4, 7, 4, 8, 4);

function dup($array)
{
    $uniqueArr = array_unique($array);
    return array_values($uniqueArr);
}

$r = dup($array1);


foreach ($array1 as $key) {
    echo  $key . " ";  // Outputs: 2, 4, 7, 8  (the duplicates) 4  (the first occurrence) 4  (the second occurrence) 4  (the third occurrence) 4  (the fourth occurrence) 4  (the fifth occurrence) 4  (the sixth occurrence) 4  (the seventh occurrence) 4  (the eighth occurrence) 4  (the ninth occurrence) 4  (the tenth occurrence) 4  (the eleventh occurrence) 4  (the twelfth occurrence) 4  (the thirteenth occurrence) 4  (the fourteenth occurrence) 4  (the fifteenth occurrence) 4  (the sixteenth occurrence) 4  (the seventeenth occurrence) 4  (the eighteenth occurrence)
}

echo "<br><br>";

foreach ($r as $key) {
    echo $key . " ";  // Outputs: 2, 4, 7, 8  (the duplicates) 4  (the first occurrence) 4  (the second occurrence) 4  (the third occurrence) 4  (the fourth occurrence) 4  (the fifth occurrence) 4  (the sixth occurrence) 4  (the seventh occurrence) 4  (the eighth occurrence) 4  (the ninth occurrence) 4  (the tenth occurrence) 4  (the eleventh occurrence) 4  (the twelfth occurrence) 4  (the thirteenth occurrence) 4  (the fourteenth occurrence) 4  (the fifteenth occurrence) 4  (the sixteenth occurrence) 4  (the seventeenth occurrence) 4  (the eighteenth occurrence)
}
