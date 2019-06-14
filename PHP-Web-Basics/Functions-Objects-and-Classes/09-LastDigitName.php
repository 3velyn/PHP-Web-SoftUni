<?php

const digitName = ['zero', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine'];

class Number
{
    /**
     * @var int
     */
    private $value;

    /**
     * Number constructor.
     * @param int $value
     */
    public function __construct(int $value)
    {
        $this->value = $value;
    }

    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * @param int $value
     */
    public function setValue(int $value): void
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getLastDigitName(): string
    {
        $lastDigit = $this->value % 10;
        return digitName[$lastDigit];
    }
}

$number = new Number(intval(readline()));
echo $number->getLastDigitName();