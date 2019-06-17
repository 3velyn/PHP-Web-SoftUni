<?php

abstract class Player implements PasswordInterface
{
    /** @var string */
    private $username;

    /** @var string */
    private $characterType;

    /** @var float */
    private $specialPoint;

    /** @var int */
    private $level;

    /** @var string */
    public $password;

    public function __construct(string $username, string $characterType, float $specialPoint, int $level)
    {
        $this->setUsername($username);
        $this->setCharacterType($characterType);
        $this->setSpecialPoint($specialPoint);
        $this->setLevel($level);
        $this->hashPassword($username);
    }

    /**
     * @return float
     */
    public function getSpecialPoint(): float
    {
        return $this->specialPoint;
    }

    /**
     * @param float $specialPoint
     */
    public function setSpecialPoint(float $specialPoint): void
    {
        $this->specialPoint = $specialPoint;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    private function setUsername(string $username): void
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getCharacterType(): string
    {
        return $this->characterType;
    }

    /**
     * @param string $characterType
     */
    private function setCharacterType(string $characterType): void
    {
        $this->characterType = $characterType;
    }

    /**
     * @return int
     */
    public function getLevel(): int
    {
        return $this->level;
    }

    /**
     * @param int $level
     */
    private function setLevel(int $level): void
    {
        $this->level = $level;
    }


    abstract public function hashPassword(string $username): void;

    public function getPassword(): string
    {
        return $this->password;
    }

    public function __toString()
    {
        return '"' . $this->getUsername() . '" | "' . $this->getPassword() . '" -> ' . $this->getCharacterType();
    }
}