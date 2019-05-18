<?php

$numbers = explode(' ', readline());

$num = $numbers[0];
$count = 0;

for ($i = 0; $i < count($numbers); $i++) {
    $currCount = 0;
    for ($j = $i; $j < count($numbers); $j++) {
        if ($numbers[$i] === $numbers[$j]) {
            $currCount++;
        } else {
            break;
        }

        if ($currCount > $count) {
            $count = $currCount;
            $num = $numbers[$i];
        }
    }
}
echo str_repeat($num . ' ', $count);
