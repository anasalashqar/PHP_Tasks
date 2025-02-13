

<?php

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

asort($fruits);

foreach ($fruits as $key => $value) {
    echo $key . " = " . $value . "<br>"; 

}
?>