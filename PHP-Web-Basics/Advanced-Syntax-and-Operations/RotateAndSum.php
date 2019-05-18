<?php

$numbers = array_map('intval', explode(' ', readline()));
$k = intval(readline());

$sum = array_fill(0, count($numbers), 0);

for ($i = 0; $i < $k; $i++) {
    $currNumArr = [];
    for ($j = 0; $j < count($numbers); $j++) {
        if ($j === 0) {
            $currNumArr[$j] = $numbers[count($numbers) - 1];
        } else {
            $currNumArr[$j] = $numbers[$j - 1];
        }
        $sum[$j] += $currNumArr[$j];
    }
    $numbers = $currNumArr;
}
echo implode(' ', $sum);
