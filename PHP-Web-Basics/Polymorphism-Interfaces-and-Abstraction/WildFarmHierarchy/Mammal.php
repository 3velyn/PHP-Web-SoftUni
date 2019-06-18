<?php

abstract class Mammal extends Animal
{
    /** @var string */
    private $livingRegion;

    public function __construct(
        string $animalName,
        float $animalWeight,
        string $livingRegion)
    {
        parent::__construct($animalName, $animalWeight);
        $this->setLivingRegion($livingRegion);
    }

    /**
     * @return string
     */
    public function getLivingRegion(): string
    {
        return $this->livingRegion;
    }

    /**
     * @param string $livingRegion
     */
    private function setLivingRegion(string $livingRegion): void
    {
        $this->livingRegion = $livingRegion;
    }

    public function __toString()
    {
        return
            "[{$this->getAnimalName()}, {$this->getAnimalWeight()}, {$this->getLivingRegion()}, {$this->getFoodEaten()}]\n";
    }
}