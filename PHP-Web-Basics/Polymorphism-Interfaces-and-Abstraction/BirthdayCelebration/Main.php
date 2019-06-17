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
        $birthable = [];

        $input = readline();
        while ($input !== 'End') {
            $tokens = explode(' ', $input);
            list($className, $name) = $tokens;
            if ($className === 'Citizen') {
                $birthable[] = new Citizen($name, intval($tokens[2]), $tokens[3], $tokens[4]);
            } elseif ($className === 'Pet') {
                $birthable[] = new $className($name, $tokens[2]);
            }
            $input = readline();
        }
        
        $input = readline();
        /** @var Citizen,Pet $livingThing */
        foreach ($birthable as $livingThing) {
            $birthyear = substr($livingThing->getBirthday(), -4);
            if ($birthyear === $input) {
                echo $livingThing->getBirthday() . PHP_EOL;
            }
        }
    }
}

$main = new Main();
$main->run();
