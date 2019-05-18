<?php

$numbers = explode(' ', readline());

$count = 0;
$startIndex = 0;

for ($i = 1; $i < count($numbers); $i++) {
    $currCount = 1;
    for ($j = $i; $j < count($numbers); $j++) {
        if ($numbers[$j - 1] < $numbers[$j]) {
            $currCount++;
        } else {
            break;
        }

        if ($currCount > $count) {
            $count = $currCount;
            $startIndex = $i - 1;
        }
    }
}
echo implode(' ', array_slice($numbers, $startIndex, $count));
