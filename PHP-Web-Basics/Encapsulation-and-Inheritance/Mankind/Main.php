<?php

require_once "Human.php";
require_once "Student.php";
require_once "Worker.php";

$studentInfo = explode(' ', readline());
$workerInfo = explode(' ', readline());

try {
    $student = new Student($studentInfo[0], $studentInfo[1], $studentInfo[2]);
    $worker = new Worker($workerInfo[0], $workerInfo[1], floatval($workerInfo[2]), floatval($workerInfo[3]));

    echo $student . PHP_EOL . $worker;
} catch (Exception $exception) {
    echo $exception->getMessage();
    return;
}
