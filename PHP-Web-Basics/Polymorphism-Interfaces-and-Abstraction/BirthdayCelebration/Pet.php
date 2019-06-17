<?php

class Pet implements Birthable
{
    /** @var string */
    private $name;

    /** @var string */
    private $birthday;

    public function __construct(string $name, string $birthday)
    {
        $this->setName($name);
        $this->setBirthday($birthday);
    }

    public function setBirthday(string $birthday): void
    {
        $this->birthday = $birthday;
    }

    public function getBirthday(): string
    {
        return $this->birthday;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
}