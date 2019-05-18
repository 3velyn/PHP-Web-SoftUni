<?php

$numbers = explode(' ', readline());

$num = $numbers[0];
$count = 0;

for ($i = 0; $i < count($numbers); $i++) {
    $currCount = 0;
    for ($j = $i; $j < count($numbers); $j++) {
        if ($numbers[$i] === $numbers[$j]) {
            $currCount++;
        }
        if ($currCount > $count) {
            $num = $numbers[$i];
            $count = $currCount;
        }
    }
}
echo $num;
