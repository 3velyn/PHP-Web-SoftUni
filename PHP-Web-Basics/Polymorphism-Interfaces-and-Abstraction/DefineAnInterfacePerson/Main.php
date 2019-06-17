<?php

spl_autoload_register(function ($className) {
    require_once str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';
});

class Main
{
    public function run()
    {
        $this->readData();
    }
    private function readData()
    {
        $name = readline();
        $age = intval(readline());
        $id = readline();
        $birthday = readline();

        $citizen = new Citizen($name, $age, $id, $birthday);
        echo $citizen;
    }
}

$main = new Main();
$main->run();