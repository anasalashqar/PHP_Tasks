<?php

$array1 = array("red", "green", "blue", "yellow");


echo "Array <br>";

echo "( <br>";
foreach ($array1 as $key){
    echo strtoupper($key) . "<br>";
}
echo ")";
?>