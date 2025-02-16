

<?php

function extractFileName($url) {
    echo basename($url) . "<br>";
}

extractFileName("https://www.example.com/documents/document.pdf"); 

extractFileName("https://www.example.com/images/image.jpg"); 
?>