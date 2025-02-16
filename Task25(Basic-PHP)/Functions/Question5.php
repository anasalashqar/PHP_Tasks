<?php
function isPalindrome($str) {
    $cleanStr = preg_replace("/[^A-Za-z0-9]/", '', strtolower($str));

    $reversedStr = strrev($cleanStr);

    return ($cleanStr === $reversedStr);
}

$input = "Eva, can I see bees in a cave?";

echo $input . "<br>";

if (isPalindrome($input)) {
    echo "Yes, it is a palindrome.";
} else {
    echo "No, it is not a palindrome.";
}
?>
