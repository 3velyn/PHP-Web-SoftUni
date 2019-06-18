<?php
spl_autoload_register();

class Main
{
    const INPUT_END_COMMAND = 'End';
    public function run()
    {
        $this->readData();
    }

    private function readData()
    {
        $input = readline();
        while ($input !== self::INPUT_END_COMMAND) {
            $animalData = explode(' ', $input);
            $animal = AnimalFactory::create($animalData);
            $animal->makeSound();

            $foodData = explode(' ', readline());
            list($foodType, $quantity) = $foodData;
            $food = new $foodType(intval($quantity));

            try {
                $animal->eat($food);
            } catch (Exception $exception) {
                echo $exception->getMessage();
            }

            echo $animal;
            $input = readline();
        }
    }
}

$main = new Main();
$main->run();