

<?php

function diagonalPattern() {
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            if ($i == $j) {
                echo ($i + 1) . " ";
            } else {
                echo "0 ";
            }
        }
        echo "<br>";
    }
}

diagonalPattern();

?>