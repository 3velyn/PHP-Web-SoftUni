<?php
spl_autoload_register(function ($className) {
    require_once str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';
});

$vehicles = [];
$factory = new \Factories\VehicleFactory();

$count = 0;
foreach (scandir('Vehicles') as $file) {
    if ($file === '.' || $file === '..') {
        continue;
    }
    $file = str_replace('.php', '', $file);
    $info =  new ReflectionClass('Vehicles\\' . $file);
    if (!$info->isAbstract() && !$info->isInterface()) {
        $count++;
    }
}

for ($i = 0; $i < $count; $i++) {
    list($type, $qty, $consumption) = explode(' ', readline());
    $vehicle = $factory->create($type, floatval($qty), floatval($consumption));
    $vehicles[$type] = $vehicle;
}

$n = intval(readline());

for ($i = 0; $i < $n; $i++) {
    list($action, $type, $param) = explode(' ', readline());
    $vehicle = $vehicles[$type];
    $action = strtolower($action);
    echo $vehicle->$action(floatval($param));
}

foreach ($vehicles as $vehicle) {
    echo $vehicle . PHP_EOL;
}