<?php

class DecimalNumber
{
    /**
     * @var double
     */
    private $number;

    public function __construct(string $number)
    {
        $this->number = $number;
    }

    /**
     * @return string
     */
    public function getReversedNumber()
    {
        return strrev($this->number);
    }
}

$number = new DecimalNumber(readline());
echo $number->getReversedNumber();