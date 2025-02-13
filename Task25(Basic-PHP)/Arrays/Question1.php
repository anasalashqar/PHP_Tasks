<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>green</li>
        <li>red</li>
        <li>white</li>
    </ul>
</body>
</html>


<?php 

echo "    <ul>
        <li>green</li>
        <li>red</li>
        <li>white</li>
    </ul>";
$colors = array('white', 'green', 'red');

foreach($colors as $key){
    echo "{$key}" . "<br>";
}

?>