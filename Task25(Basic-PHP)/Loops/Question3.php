<?php

function letterPattern()
{
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            if ($j < 3 - $i || $j > 1 + $i) {
                echo "A ";
            } else {
                echo chr(65 + $i) . " ";
            }
        }
        echo "<br>";
    }
}

letterPattern();
