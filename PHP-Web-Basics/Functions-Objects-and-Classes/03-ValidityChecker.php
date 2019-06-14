<?php

list($x1, $y1, $x2, $y2) = array_map('intval', explode(', ', readline()));

echo isValid($x1, $y1, 0, 0) . PHP_EOL;
echo isValid($x2, $y2, 0, 0) . PHP_EOL;
echo isValid($x1, $y1, $x2, $y2) . PHP_EOL;

function isValid (int $x1, int $y1, int $x2, int $y2): string {
    $result = '';
    $distance = sqrt(pow($x1 - $x2, 2) + pow($y1 - $y2, 2));

    if (intval($distance) != $distance) {
        $result = 'invalid';
    } else {
        $result = 'valid';
    }

    return sprintf("{%d, %d} to {%d, %d} is %s", $x1, $y1, $x2, $y2, $result);
}