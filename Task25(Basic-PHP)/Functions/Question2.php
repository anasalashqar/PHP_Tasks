


<?php
function reverse($st)
{
    if (!empty($st)) {
        return strrev($st);
    }
}

$hi = "remove";

$g = reverse($hi);

echo "{$g}";
?>