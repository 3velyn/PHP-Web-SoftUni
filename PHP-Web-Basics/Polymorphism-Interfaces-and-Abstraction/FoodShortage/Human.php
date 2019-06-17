<?php

class Human implements Buyer
{
    const DEFAULT_INCREASE = 5;

    /** @var string */
    private $name;

    /** @var int */
    private $age;

    /** @var int  */
    public $food;

    /**
     * Human constructor.
     * @param string $name
     * @param int $age
     */
    public function __construct(string $name, int $age)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->food = 0;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function buyFood(): void
    {
        $this->food += self::DEFAULT_INCREASE;
    }

    public function getFood(): int
    {
        return $this->food;
    }
}