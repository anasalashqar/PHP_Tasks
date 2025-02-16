<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <label>input</label><br>
        <input type="number" name="number"><br>
        <input type="submit" value="submit">
    </form>
</body>

</html>


<?php
$number = $_POST["number"];
function prime($num)
{
    if ($num < 2) {
        echo "0 and 1 are not prime numbers";
    }

    for ($i = 2; $i * $i <= $num; $i++) {
        if ($num % $i == 0) {
            echo "this is not a prime number";

            return;
        }
    }
    echo "this is prime number!";
}

prime($number);

?>