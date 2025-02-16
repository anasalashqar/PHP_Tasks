


<?php
function formatTime($numericString) {
    echo substr($numericString, 0, 2) . ":" . substr($numericString, 2, 2) . ":" . substr($numericString, 4, 2) . "\n";
}

formatTime("085119"); 
?>
