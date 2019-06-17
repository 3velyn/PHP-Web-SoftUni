<?php

class Citizen extends Human implements IdentificationInterface, Birthable
{
    const DEFAULT_INCREASE = 10;

    /** @var string */
    private $id;

    /** @var string */
    private $birthday;

    public function __construct(string $name, int $age, string $id, string $birthday)
    {
        parent::__construct($name, $age);
        $this->setId($id);
        $this->setBirthday($birthday);
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

    public function buyFood(): void
    {
        $this->food += self::DEFAULT_INCREASE;
    }
}