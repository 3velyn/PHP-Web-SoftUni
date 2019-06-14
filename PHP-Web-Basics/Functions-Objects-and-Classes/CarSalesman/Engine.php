<?php

class Engine
{
    const DEFAULT_VALUE = 'n/a';

    /** @var string */
    private $model;

    /** @var int */
    private $power;

    /** @var mixed */
    private $displacement;

    /** @var mixed */
    private $efficiency;

    public function __construct(string $model, int $power, $displacement, $efficiency)
    {
        $this->setModel($model);
        $this->setPower($power);
        $this->setDisplacement($displacement);
        $this->setEfficiency($efficiency);
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @param string $model
     */
    private function setModel(string $model): void
    {
        $this->model = $model;
    }

    /**
     * @return int
     */
    public function getPower(): int
    {
        return $this->power;
    }

    /**
     * @param int $power
     */
    private function setPower(int $power): void
    {
        $this->power = $power;
    }

    /**
     * @return mixed
     */
    public function getDisplacement()
    {
        return $this->displacement;
    }

    /**
     * @param mixed $displacement
     */
    private function setDisplacement($displacement): void
    {
        if ($displacement === null) {
            $this->displacement = self::DEFAULT_VALUE;
        } else {
            $this->displacement = $displacement;
        }
    }

    /**
     * @return mixed
     */
    public function getEfficiency()
    {
        return $this->efficiency;
    }

    /**
     * @param mixed $efficiency
     */
    private function setEfficiency($efficiency): void
    {
        if ($efficiency === null) {
            $this->efficiency = self::DEFAULT_VALUE;
        } else {
            $this->efficiency = $efficiency;
        }
    }
}