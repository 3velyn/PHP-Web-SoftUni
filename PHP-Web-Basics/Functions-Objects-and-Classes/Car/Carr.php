<?php

class Carr
{
    /** @var float */
    private $speed;

    /** @var float */
    private $fuel;

    /** @var float */
    private $fuelEconomy;

    /** @var float */
    private $totalTravelDistance;

    /** @var float */
    private $totalTravelTime;

    public function __construct(float $speed, float $fuel, float $fuelEconomy)
    {
        $this->setSpeed($speed);
        $this->setFuel($fuel);
        $this->setFuelEconomy($fuelEconomy);
        $this->totalTravelDistance = 0.0;
        $this->totalTravelTime = 0.0;
    }

    /**
     * @param float $speed
     */
    private function setSpeed(float $speed): void
    {
        $this->speed = $speed;
    }

    /**
     * @param float $fuel
     */
    private function setFuel(float $fuel): void
    {
        $this->fuel = $fuel;
    }

    /**
     * @param float $fuelEconomy
     */
    private function setFuelEconomy(float $fuelEconomy): void
    {
        $this->fuelEconomy = $fuelEconomy;
    }

    /**
     * @return float
     */
    public function getFuel(): float
    {
        return $this->fuel;
    }

    /**
     * @param float $distance
     */
    public function travelDistance(float $distance): void
    {
        if ($this->fuel >= ($distance * $this->fuelEconomy / 100)) {
            $this->totalTravelDistance += $distance;
            $this->totalTravelTime += $distance / $this->speed;
            $this->fuel -= $distance * $this->fuelEconomy / 100;
        } else {
            $possibleDistance = $this->fuel / ($this->fuelEconomy / 100);
            $this->totalTravelDistance += $possibleDistance;
            $this->totalTravelTime += $possibleDistance / $this->speed;
            $this->fuel = 0;
        }
    }

    /**
     * @param float $fuelLiters
     */
    public function refuel(float $fuelLiters): void
    {
        $this->fuel += $fuelLiters;
    }

    /**
     * @return float
     */
    public function getTotalDistance(): float
    {
        return $this->totalTravelDistance;
    }

    /**
     * @return float
     */
    public function getTotalTime(): float
    {
        return $this->totalTravelTime;
    }

    public function getRemainingFuel(): float
    {
        return $this->fuel;
    }
}