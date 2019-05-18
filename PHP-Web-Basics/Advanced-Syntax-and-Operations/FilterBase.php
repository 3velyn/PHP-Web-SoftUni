<?php

$database = [
    'Salary' => [],
    'Position' => [],
    'Age' => []
];

while (true) {
    $input = readline();
    if ($input === 'filter base') {
        break;
    }

    list($name, $info) = explode(' -> ', $input);

    if (is_numeric($info)) {
        if (ctype_digit($info)) {
            $database['Age'][$name] = $info;
        } else {
            $database['Salary'][$name] = sprintf('%.2f', $info);
        }
    } else {
        $database['Position'][$name] = $info;
    }
}
$infoToPrint = readline();

foreach ($database[$infoToPrint] as $employee => $inf) {
    printf("Name: %s\n%s: %s\n", $employee, $infoToPrint, $inf);
    echo str_repeat('=', 20) . PHP_EOL;
}
