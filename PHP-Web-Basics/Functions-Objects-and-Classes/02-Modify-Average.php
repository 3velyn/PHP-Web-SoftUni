<?php

$num = readline();

while (findAverage($num)) {
    $num .= '9';
}
echo $num;

function findAverage (string $num): bool {
    $sum = 0;
    for ($i = 0; $i < strlen($num); $i++) {
        $sum += intval($num[$i]);
    }
    if (($sum/strlen($num)) > 5) {
        return false;
    }
    return true;
}