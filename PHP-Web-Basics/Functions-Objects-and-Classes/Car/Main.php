<?php
require_once "Carr.php";

list($speed, $fuel, $fuelEconomy) = array_map('floatval', explode(' ', readline()));
$car = new Carr($speed, $fuel, $fuelEconomy);

$input = readline();
while ($input !== 'END') {
    if (substr($input, 0, 6) === 'Travel') {
        list($cmd, $distance) = explode(' ', $input);
        $car->travelDistance(floatval($distance));

    } elseif (substr($input, 0, 6) === 'Refuel') {
        list($cmd, $liters) = explode(' ', $input);
        $car->refuel(floatval($liters));

    } elseif ($input === 'Distance') {
        printf("Total Distance: %.1f\n", $car->getTotalDistance());

    } elseif ($input === 'Time') {
        $hours = floor($car->getTotalTime());
        $minutes = ($car->getTotalTime() * 60) % 60;

        printf("Total Time: %d hours and %d minutes\n", $hours, $minutes);

    } elseif ($input === 'Fuel') {
        printf("Fuel left: %.1f liters\n", $car->getFuel());
    }
    $input = readline();
}