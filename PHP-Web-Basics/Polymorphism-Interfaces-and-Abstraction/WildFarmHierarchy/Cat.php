<?php

class Cat extends Feline
{
    const DEFAULT_SOUND = "Meowwww";

    /** @var string */
    private $breed;

    public function __construct(string $animalName,
                                float $animalWeight,
                                string $livingRegion,
                                string $breed)
    {
        parent::__construct($animalName, $animalWeight, $livingRegion);
        $this->setBreed($breed);
    }

    /**
     * @return string
     */
    public function getBreed(): string
    {
        return $this->breed;
    }

    /**
     * @param string $breed
     */
    private function setBreed(string $breed): void
    {
        $this->breed = $breed;
    }

    public function eat(Food $food): void
    {
        parent::setFoodEaten($food->getQuantity());
    }

    public function makeSound(): void
    {
        echo self::DEFAULT_SOUND . PHP_EOL;
    }

    public function __toString()
    {
        return basename(get_class($this)) .
            "[{$this->getAnimalName()}, {$this->getBreed()}, {$this->getAnimalWeight()}, {$this->getLivingRegion()}, {$this->getFoodEaten()}]\n";
    }
}