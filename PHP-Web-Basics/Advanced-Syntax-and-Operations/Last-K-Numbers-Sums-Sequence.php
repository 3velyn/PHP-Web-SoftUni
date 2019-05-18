<?php

$n = intval(readline());
$k = intval(readline());

$arr = array_fill(0, $n, 0);
$arr[0] = 1;

for ($i = 0; $i < count($arr); $i++) {
    $startIndex = max(0, $i - $k);
    $sum = 0;
    for ($j = $startIndex; $j <= $i; $j++) {
        $sum += $arr[$j];
    }
    $arr[$i] = $sum;
}

echo implode(' ', $arr);
