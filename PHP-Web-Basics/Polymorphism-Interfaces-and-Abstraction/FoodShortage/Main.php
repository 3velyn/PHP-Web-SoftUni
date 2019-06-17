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
        /** @var Citizen,Rebel $people */
        $people = [];

        $n = intval(readline());
        for ($i = 0; $i < $n; $i++) {
            $personData = explode(' ', readline());
            list($name, $age) = $personData;

            if (count($personData) === 4) {
                $people[$name] = new Citizen($name, intval($age), $personData[2], $personData[3]);
            } elseif (count($personData) === 3) {
                $people[$name] = new Rebel($name, intval($age), $personData[2]);
            }
        }

        $input = readline();
        while ($input !== 'End') {
            if (array_key_exists($input, $people)) {
                $people[$input]->buyFood();
            }
            $input = readline();
        }

        $totalFood = 0;
        foreach ($people as $person) {
            $totalFood += $person->getFood();
        }
        echo $totalFood;
    }
}

$main = new Main();
$main->run();
