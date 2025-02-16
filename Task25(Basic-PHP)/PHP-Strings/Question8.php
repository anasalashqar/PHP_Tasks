<?php

function replaceFirstWord($sentence, $newWord)
{
    $words = explode(" ", $sentence);
    $words[0] = $newWord;
    echo implode(" ", $words) . "\n";
}

replaceFirstWord("That new trainee is so genius.", "Our");
