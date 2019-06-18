<?php

abstract class Feline extends Mammal
{
    public function __construct(
        string $animalName,
        float $animalWeight,
        string $livingRegion)
    {
        parent::__construct($animalName, $animalWeight, $livingRegion);
    }
}