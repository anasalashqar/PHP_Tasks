<?php

$ag = 9;

function canVote($age) {
    return ($age >= 18) ? true : false;
}

if (canVote($ag)) {
    echo "can vote";
} else {
    echo "cannot vote";
}
?>