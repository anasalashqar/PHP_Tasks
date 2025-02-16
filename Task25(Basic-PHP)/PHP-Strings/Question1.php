<?php

function stringTransformations($input)
{
    echo strtoupper($input) . "<br>";  // Uppercase
    echo strtolower($input) . "<br>";  // Lowercase
    echo ucfirst($input) . "<br>";     // First letter uppercase
    echo ucwords($input) . "<br>";     // Capitalize each word
}

stringTransformations("hello Anas");

