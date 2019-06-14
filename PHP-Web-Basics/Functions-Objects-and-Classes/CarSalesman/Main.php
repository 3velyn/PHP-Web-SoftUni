<?php

require_once "Car.php";
require_once "Engine.php";

/** @var Engine[] $engines */
$engines = [];

/** @var Car[] $cars */
$cars = [];

$n = intval(readline());

for ($i = 0; $i < $n; $i++) {
    $engine = explode(' ', trim(readline()));
    list($model, $power) = $engine;
    $displacement = null;
    $efficiency = null;

    if (count($engine) === 3) {
        var_dump($engine);
        if (is_numeric($engine[2])) {
            $displacement = ($engine[2]);
        } else {
            $efficiency = $engine[2];
        }
    } elseif (count($engine) === 4) {
        $displacement = ($engine[2]);
        $efficiency = $engine[3];
    }

    $engines[$model] = new Engine($model, intval($power), $displacement, $efficiency);
}

$n = intval(readline());

for ($i = 0; $i < $n; $i++) {
    $car = explode(' ', trim(readline()));
    list($model, $engine) = $car;
    $weight = null;
    $color = null;

    if (count($car) === 3) {
        if (is_numeric($car[2])) {
            $weight = ($car[2]);
        } else {
            $color = $car[2];
        }
    } elseif (count($car) === 4) {
        $weight = intval($car[2]);
        $color = $car[3];
    }

    $cars[] = new Car($model, $engines[$engine], $weight, $color);
}

foreach ($cars as $car) {
    echo $car . PHP_EOL;
}