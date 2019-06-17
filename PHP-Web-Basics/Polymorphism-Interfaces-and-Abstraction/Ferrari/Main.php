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
        $n = 3;
        Ferrari::$objCount = 0;

        for ($i = 0; $i < $n; $i++) {
            $racer = readline();
            $ferrari = new Ferrari($racer);
            echo $ferrari . Ferrari::forUrl($racer) . '/ inst. ' . Ferrari::getCount() . PHP_EOL;
        }
    }
}

$main = new Main();
$main->run();