<?php

class Citizen implements Person, Identifiable, Birthable
{
    /** @var string */
    private $name;

    /** @var int */
    private $age;

    /** @var string */
    private $id;

    /** @var string */
    private $birthday;

    public function __construct(string $name, int $age, string $id, string $birthday)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->setId($id);
        $this->setBirthdate($birthday);
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function setBirthdate(string $birthday): void
    {
        $this->birthday = $birthday;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function __toString()
    {
        return $this->name . PHP_EOL . $this->age . PHP_EOL . $this->id . PHP_EOL . $this->birthday;
    }
}