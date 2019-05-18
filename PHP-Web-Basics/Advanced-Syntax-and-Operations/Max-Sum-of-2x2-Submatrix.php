<?php

list($rows, $cols) = explode(', ', readline());
$matrix = [];
$sum = PHP_INT_MIN;
$maxSubmatrix = [];

for ($i = 0; $i < intval($rows); $i++) {
    $matrix[$i] = array_map('intval', explode(', ', readline()));
}

for ($i = 0; $i < $rows - 1; $i++) {
    for ($j = 0; $j < $cols - 1; $j++) {
        $currSum = 0;
        $currMatrix = [];

        for ($p = $i; $p < $i + 2; $p++) {
            for ($q = $j; $q < $j + 2; $q++) {
                $currSum += $matrix[$p][$q];
                $currMatrix[$p][$q] = $matrix[$p][$q];
            }
            if ($currSum > $sum) {
                $sum = $currSum;
                $maxSubmatrix = $currMatrix;
            }
        }
    }
}
foreach ($maxSubmatrix as $submatrix) {
    echo implode(' ', $submatrix) . PHP_EOL;
}
echo $sum . PHP_EOL;
