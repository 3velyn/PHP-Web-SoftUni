<?php

$numbers = array_map('intval', explode(' ', readline()));

while (true) {
    if (count($numbers) === 1) {
        break;
    }
    $condensed = array_fill(0, count($numbers) - 1, 0);
    for ($i = 0; $i < count($numbers) - 1; $i++) {
        $condensed[$i] = $numbers[$i] + $numbers[$i + 1];
    }
    $numbers = $condensed;
}
echo implode(' ', $numbers);
