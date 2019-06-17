<?php

require_once "IdentificationInterface.php";
require_once "Citizen.php";
require_once "Robot.php";

$humanoids = [];

$input = readline();

while ($input !== 'End') {
    $humanoid = explode(' ', $input);
    if (count($humanoid) === 3) {
        list($name, $age, $id) = $humanoid;
        $humanoids[] = new \BorderControl\Citizen($name, intval($age), $id);

    } elseif (count($humanoid) === 2) {
        list($model, $id) = $humanoid;
        $humanoids[] = new \BorderControl\Robot($model, $id);
    }
    $input = readline();
}
$fakeIdDigits = readline();
foreach ($humanoids as $humanoid) {
    if ($humanoid->idVerification($fakeIdDigits)) {
        echo $humanoid->getId() . PHP_EOL;
    }
}