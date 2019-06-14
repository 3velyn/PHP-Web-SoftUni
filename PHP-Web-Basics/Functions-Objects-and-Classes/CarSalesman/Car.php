<?php
require_once "Engine.php";

class Car
{
    const DEFAULT_VALUE = 'n/a';

    /** @var string */
    private $model;

    /** @var Engine */
    private $engine;

    /** @var mixed */
    private $weight;

    /** @var mixed */
    private $color;

    /**
     * Car constructor.
     * @param string $model
     * @param $engine
     * @param $weight
     * @param $color
     */
    public function __construct(string $model, $engine, $weight, $color)
    {
        $this->setModel($model);
        $this->setEngine($engine);
        $this->setWeight($weight);
        $this->setColor($color);
    }

    /**
     * @return string
     */
    private function getModel(): string
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
     * @return Engine
     */
    private function getEngine(): Engine
    {
        return $this->engine;
    }

    /**
     * @param Engine $engine
     */
    private function setEngine(Engine $engine): void
    {
        $this->engine = $engine;
    }

    /**
     * @return mixed
     */
    private function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param mixed $weight
     */
    private function setWeight($weight): void
    {
        if ($weight === null) {
            $this->weight = self::DEFAULT_VALUE;
        } else {
            $this->weight = $weight;
        }
    }

    /**
     * @return mixed
     */
    private function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    private function setColor($color): void
    {
        if ($color == null) {
            $this->color = self::DEFAULT_VALUE;
        } else {
            $this->color = $color;
        }
    }

    public function __toString(): string
    {
        return sprintf("%s:\n  %s:\n    Power: %d\n    Displacement: %s\n    Efficiency: %s\n  Weight: %s\n  Color: %s", $this->getModel(), $this->getEngine()->getModel(),
            $this->getEngine()->getPower(), $this->getEngine()->getDisplacement(), $this->getEngine()->getEfficiency(),
            $this->getWeight(), $this->getColor());
    }
}