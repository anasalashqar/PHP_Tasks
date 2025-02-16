<?php

function containsWord($sentence, $word) {
    if (stripos($sentence, $word) !== false) {
        echo "Word Found!\n";
    } else {
        echo "Word Not Found!\n";
    }
}

$sentence = "The quick brown fox jumps over the lazy dog.";

$word = "fx";

containsWord($sentence, $word);
?>
