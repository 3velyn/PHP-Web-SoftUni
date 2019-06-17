<?php

interface VehicleInterface
{
    public function drive(float $distance): string;
    public function refuel(float $liters): void;
}