

<?php

function extractUsername($email) {
    echo strstr($email, "@", true) . "\n";
}

extractUsername("anasalasqhar@example.com"); // Output: john.doe

?>