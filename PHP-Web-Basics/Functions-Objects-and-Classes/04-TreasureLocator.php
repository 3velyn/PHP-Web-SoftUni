<?php

$coordinates = array_map('floatval', explode(', ', readline()));

for ($i = 0; $i < count($coordinates); $i+=2) {
    echo findTreasure($coordinates[$i], $coordinates[$i+1]) . PHP_EOL;
}

function findTreasure (float $x, float $y): string {
    if (($x >= 0 && $x <=2) && ($y >= 6 && $y <= 8)) {
        return 'Tonga';
    } elseif (($x >= 1 && $x <=3) && ($y >= 1 && $y <= 3)) {
        return 'Tuvalu';
    } elseif (($x >= 4 && $x <=9) && ($y >= 7 && $y <= 8)) {
        return 'Cook';
    } elseif (($x >= 5 && $x <=7) && ($y >= 3 && $y <= 6)) {
        return 'Samoa';
    } elseif (($x >= 8 && $x <=9) && ($y >= 0 && $y <= 1)) {
        return 'Tokelau';
    }

    return 'On the bottom of the ocean';
}