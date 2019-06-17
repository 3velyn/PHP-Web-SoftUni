<?php

class Citizen implements IdentificationInterface, Birthable
{
    /** @var string */
    private $name;

    /** @var int */
    private $age;

    /** @var string */
    private $id;

    public function __construct(string $name, int $age, string $id)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->setId($id);
    }

    private function setId(string $id): void
    {
        $this->id = $id;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    private function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function idVerification(string $fakeIdDigits): bool
    {
        if (substr($this->getId(), strlen($fakeIdDigits) * -1) === $fakeIdDigits) {
            return true;
        }
        return false;
    }

    public function setBirthday(string $birthday): void
    {
        $this->birthday = $birthday;
    }

    public function getBirthday(): string
    {
        return $this->birthday;
    }
}
