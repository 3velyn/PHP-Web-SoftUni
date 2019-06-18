<?php

class Zebra extends Mammal
{
    const DEFAULT_SOUND = "Zs";

    /**
     * @param Food $food
     * @throws Exception
     */
    public function eat(Food $food): void
    {
        if (basename(get_class($food)) === 'Vegetable') {
            parent::setFoodEaten($food->getQuantity());
        } else {
            throw new Exception("Zebras are not eating that type of food!\n");
        }
    }

    public function makeSound(): void
    {
        echo self::DEFAULT_SOUND . PHP_EOL;
    }

    public function __toString()
    {
        return basename(get_class($this)) . parent::__toString();
    }
}