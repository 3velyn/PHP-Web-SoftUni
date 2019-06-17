<?php
namespace Vehicles;

abstract class VehicleAbstract implements VehicleInterface
{
    private $fuelQuantity;
    private $fuelConsumption;
    private $modifier;

    public function __construct(float $fuelQuantity, float $fuelConsumption, float $modifier)
    {
        $this->fuelQuantity = $fuelQuantity;
        $this->fuelConsumption = $fuelConsumption + $modifier;
        $this->modifier = $modifier;
    }

    public function drive(float $distance): string
    {
        if ($this->fuelQuantity >= $this->fuelConsumption * $distance) {
            $this->fuelQuantity -= $this->fuelConsumption * $distance;
            return basename(get_class($this)) . " traveled " . $distance . " km" . PHP_EOL;
        }
        return basename(get_class($this)) . " needs refueling" . PHP_EOL;
    }

    public function refuel(float $liters): void
    {
        $this->fuelQuantity += $liters;
    }

    public function __toString()
    {
        return basename(get_class($this)) . ": " . number_format($this->fuelQuantity, 2);
    }
}