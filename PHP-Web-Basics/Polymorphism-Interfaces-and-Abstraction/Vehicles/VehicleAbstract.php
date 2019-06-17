<?php

abstract class VehicleAbstract implements VehicleInterface
{
    /** @var float */
    private $fuelQuantity;

    /** @var float */
    private $fuelConsumption;

    /** @var float */
    private $fuelModifier;

    public function __construct(float $fuelQuantity, float $fuelConsumption, float $fuelModifier)
    {
        $this->setFuelQuantity($fuelQuantity);
        $this->setFuelConsumption($fuelConsumption, $fuelModifier);
        $this->fuelModifier = $fuelModifier;
    }

    /**
     * @param float $fuelQuantity
     */
    private function setFuelQuantity(float $fuelQuantity): void
    {
        $this->fuelQuantity = $fuelQuantity;
    }

    /**
     * @param float $fuelConsumption
     * @param float $fuelModifier
     */
    private function setFuelConsumption(float $fuelConsumption, float $fuelModifier): void
    {
        $this->fuelConsumption = $fuelConsumption + $fuelModifier;
    }

    public function drive(float $distance): string
    {
        $litersNeeded = $distance * $this->fuelConsumption;
        if ($this->fuelQuantity < $litersNeeded) {
            return basename(get_class($this)) . ' needs refueling' . PHP_EOL;
        }
        $this->fuelQuantity -= $litersNeeded;
        return basename(get_class($this)) . ' travelled ' . $distance . ' km' . PHP_EOL;
    }

    public function refuel(float $liters): void
    {
        $this->fuelQuantity += $liters;
    }

    public function __toString()
    {
        return sprintf("%s: %.2f\n", basename(get_class($this)), $this->fuelQuantity);
    }
}