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
        list($username, $characterType, $specialPoints, $level) = explode(' | ', readline());
        $player = new $characterType($username, $characterType, floatval($specialPoints), $level);
        echo $player;
    }
}

$main = new Main();
$main->run();