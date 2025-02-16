<?php

$e = 33;

function inRange($num) {
    return ($num >= 20 && $num <= 50); // Returns boolean true or false
}

if(inRange($e)){
    echo "The number $e is within the range of 20 to 50.";
}else{
    echo "The number $e is not within the range of 20 to 50.";
}

?>
