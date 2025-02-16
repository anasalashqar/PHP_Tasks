<?php

function generatePassword($characters, $length = 8)
{
    $shuffled = str_shuffle($characters);
    echo substr($shuffled, 0, $length) . "\n";
}

$characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+=-{}[]|:;<>,.?/~";

generatePassword($characters, 12);