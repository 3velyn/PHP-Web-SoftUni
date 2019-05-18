<?php

list($rows, $cols) = explode(', ', readline());
$matrix = [];
$sum = 0;

for ($i = 0; $i < intval($rows); $i++) {
    $matrix[$i] = array_map('intval', explode(', ', readline()));
    for ($j = 0; $j < intval($cols); $j++) {
        $sum += $matrix[$i][$j];
    }
}
echo $rows . PHP_EOL . $cols . PHP_EOL . $sum;
