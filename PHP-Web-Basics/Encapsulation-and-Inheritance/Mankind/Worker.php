<?php
require_once "Human.php";

class Worker extends Human
{
    /** @var float */
    private $weekSalary;

    /** @var float */
    private $workHoursPerDay;

    /** @var string */
    private $lastName;

    /**
     * Worker constructor.
     * @param string $firstName
     * @param string $lastName
     * @param float $weekSalary
     * @param float $workHoursPerDay
     * @throws Exception
     */
    public function __construct(string $firstName, string $lastName, float $weekSalary, float $workHoursPerDay)
    {
        parent::__construct($firstName, $lastName);
        $this->setLastName($lastName);
        $this->setWeekSalary($weekSalary);
        $this->setWorkHoursPerDay($workHoursPerDay);
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
        } elseif (strlen($lastName) <= 3) {
            throw new Exception("Expected length more than 3 symbols!Argument: lastName");
        }
        $this->lastName = $lastName;
    }

    /**
     * @return float
     */
    private function getWeekSalary(): float
    {
        return $this->weekSalary;
    }

    /**
     * @param float $weekSalary
     * @throws Exception
     */
    private function setWeekSalary(float $weekSalary): void
    {
        if ($weekSalary < 10) {
            throw new Exception("Expected value mismatch!Argument: weekSalary");
        }
        $this->weekSalary = $weekSalary;
    }

    /**
     * @return float
     */
    private function getWorkHoursPerDay(): float
    {
        return $this->workHoursPerDay;
    }

    /**
     * @param float $workHoursPerDay
     * @throws Exception
     */
    private function setWorkHoursPerDay(float $workHoursPerDay): void
    {
        if ($workHoursPerDay < 1 || $workHoursPerDay > 12) {
            throw new Exception("Expected value mismatch!Argument: workHoursPerDay");
        }
        $this->workHoursPerDay = $workHoursPerDay;
    }

    /**
     * @param float $salary
     * @param float $hours
     * @return float
     */
    private function getSalaryPerHour(float $salary, float $hours): float
    {
        return $salary / $hours / 7;
    }

    public function __toString()
    {
        return sprintf("First Name: %s\nLast Name: %s\nWeek Salary: %.2f\nHours per day: %.2f\nSalary per hour: %.2f",
                parent::getFirstName(), $this->getLastName(),
                $this->getWeekSalary(), $this->getWorkHoursPerDay(),
                $this->getSalaryPerHour($this->getWeekSalary(), $this->getWorkHoursPerDay()));
    }
}
