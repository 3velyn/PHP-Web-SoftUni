<?php
spl_autoload_register();

class Main
{
    public function run()
    {
        $this->readData();
    }
    private function readData()
    {
        $vehicles = [];

        for ($i = 0; $i < 2; $i++) {
            list($vehicle, $fuelQuantity, $fuelConsumption) = explode(' ', readline());
            $vehicles[$vehicle] = new $vehicle($fuelQuantity, $fuelConsumption);
        }

        $n = intval(readline());
        for ($i = 0; $i < $n; $i++) {
            list($action, $vehicle, $param) = explode(' ', readline());
            $action = strtolower($action);
            echo $vehicles[$vehicle]->$action(floatval($param));
        }
        foreach ($vehicles as $vehicle) {
            echo $vehicle;
        }
    }
}
$main = new Main();
$main->run();