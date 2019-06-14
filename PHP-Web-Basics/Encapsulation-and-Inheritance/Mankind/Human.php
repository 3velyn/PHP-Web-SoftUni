<?php

class Human
{
    /** @var string */
    private $firstName;

    /** @var string */
    private $lastName;

    /**
     * Human constructor.
     * @param string $firstName
     * @param string $lastName
     * @throws Exception
     */
    public function __construct(string $firstName, string $lastName)
    {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @throws Exception
     */
    private function setFirstName(string $firstName): void
    {
        if (!$this->isNameStartsWithCapitalLetter($firstName)) {
            throw new Exception("Expected upper case letter!Argument: firstName");
        } elseif (strlen($firstName) < 4) {
            throw new Exception("Expected length at least 4 symbols!Argument: firstName");
        }
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @throws Exception
     */
    public function setLastName(string $lastName): void
    {
        if (!$this->isNameStartsWithCapitalLetter($lastName)) {
            throw new Exception("Expected upper case letter!Argument: lastName");
        } elseif (strlen($lastName) < 3) {
            throw new Exception("Expected length at least 3 symbols!Argument: lastName");
        }
        $this->lastName = $lastName;
    }

    public function isNameStartsWithCapitalLetter($name)
    {
        return ord($name[0]) >= ord('A') && ord($name[0]) <= ord('Z');
    }

    public function __toString()
    {
        return "First Name: {$this->getFirstName()}\nLast Name: {$this->getLastName()}";
    }
}
