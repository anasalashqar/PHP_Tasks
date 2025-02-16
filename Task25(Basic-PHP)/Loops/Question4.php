

<?php

function numberPattern() {
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            if ($j < 3 - $i || $j > 1 + $i) {
                echo "1 ";
            } else {
                echo ($i + 1) . " ";
            }
        }
        echo "<br>";
    }
}

numberPattern();
?>