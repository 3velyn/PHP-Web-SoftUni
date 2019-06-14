<?php
require_once "Human.php";

class Student extends Human
{
    /** @var string */
    private $facultyNumber;

    /**
     * Student constructor.
     * @param string $firstName
     * @param string $lastName
     * @param string $facultyNumber
     * @throws Exception
     */
    public function __construct(string $firstName, string $lastName, string $facultyNumber)
    {
        parent::__construct($firstName, $lastName);
        $this->setFacultyNumber($facultyNumber);
    }

    /**
     * @return string
     */
    private function getFacultyNumber(): string
    {
        return $this->facultyNumber;
    }

    /**
     * @param string $facultyNumber
     * @throws Exception
     */
    private function setFacultyNumber(string $facultyNumber): void
    {
        if (!preg_match("/^[\d]{5,10}$/", $facultyNumber)) {
            throw new Exception("Invalid faculty number!");
        }
        $this->facultyNumber = $facultyNumber;
    }

    public function __toString()
    {
        return parent::__toString() . PHP_EOL . "Faculty number: {$this->getFacultyNumber()}" . PHP_EOL;
    }
}
