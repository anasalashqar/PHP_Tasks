<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <p>Array 1 2 3 4 5</p>
        <label for="number">Enter a Location:</label><br>
        <input type="number" name="location" placeholder="Location"><br>
        <input type="text" name="item" placeholder="Item"><br>
        <input type="submit" value="Submit"><br>
    </form>
</body>

</html>



<?php

$arr = array(1, 2, 3, 4, 5);

$item = $_POST["item"];

$location = $_POST["location"];

array_splice($arr, $location - 1, 0, $item);

foreach ($arr as $key){
    echo $key. " ";  // prints the updated array with the new item inserted at the specified location
}
?>