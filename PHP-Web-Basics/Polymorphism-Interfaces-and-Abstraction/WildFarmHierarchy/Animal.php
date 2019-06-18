<?php

abstract class Animal
{
    /** @var string */
    private $animalName;

    /** @var float */
    private $animalWeight;

    /** @var int */
    private $foodEaten;

    protected function __construct(string $animalName, float $animalWeight)
    {
        $this->setAnimalName($animalName);
        $this->setAnimalWeight($animalWeight);
        $this->foodEaten = 0;
    }

    /**
     * @return string
     */
    public function getAnimalName(): string
    {
        return $this->animalName;
    }

    /**
     * @param string $animalName
     */
    private function setAnimalName(string $animalName): void
    {
        $this->animalName = $animalName;
    }

    /**
     * @return float
     */
    public function getAnimalWeight(): float
    {
        return $this->animalWeight;
    }

    /**
     * @param float $animalWeight
     */
    private function setAnimalWeight(float $animalWeight): void
    {
        $this->animalWeight = $animalWeight;
    }

    /**
     * @return int
     */
    public function getFoodEaten(): int
    {
        return $this->foodEaten;
    }

    /**
     * @param int $quantity
     */
    protected function setFoodEaten(int $quantity): void
    {
        $this->foodEaten += $quantity;
    }

    public abstract function makeSound(): void;

    public abstract function eat(Food $food): void;
}