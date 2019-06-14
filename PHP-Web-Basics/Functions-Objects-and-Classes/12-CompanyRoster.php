<?php
declare(strict_types=1);

class Employee
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var float
     */
    private $salary;

    /**
     * @var string
     */
    private $position;

    /**
     * @var string
     */
    private $department;

    /**
     * @var mixed
     */
    private $email;

    /**
     * @var mixed
     */
    private $age;

    /**
     * Employee constructor.
     * @param string $name
     * @param float $salary
     * @param string $position
     * @param string $department
     * @param string $email
     * @param int $age
     */
    public function __construct(string $name, float $salary, string $position, string $department, string $email, int $age)
    {
        $this->setName($name);
        $this->setSalary($salary);
        $this->setPosition($position);
        $this->setDepartment($department);
        $this->setEmail($email);
        $this->setAge($age);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getSalary(): float
    {
        return $this->salary;
    }

    /**
     * @param float $salary
     */
    public function setSalary(float $salary): void
    {
        $this->salary = $salary;
    }

    /**
     * @return string
     */
    public function getPosition(): string
    {
        return $this->position;
    }

    /**
     * @param string $position
     */
    public function setPosition(string $position): void
    {
        $this->position = $position;
    }

    /**
     * @return string
     */
    public function getDepartment(): string
    {
        return $this->department;
    }

    /**
     * @param string $department
     */
    public function setDepartment(string $department): void
    {
        $this->department = $department;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail( $email): void
    {
        $this->email = $email;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge( $age): void
    {
        $this->age = $age;
    }

    public function __toString()
    {
        return sprintf("%s %.2f %s %d", $this->getName(), $this->getSalary(), $this->getEmail(), $this->getAge());
    }
}

$n = intval(readline());
/** @var Employee[] $employees */
$employees = [];
$depSalaries = [];

for ($i = 0; $i < $n; $i++) {
    $line = explode(' ', readline());
    $name = $line[0];
    $salary = floatval($line[1]);
    $position = $line[2];
    $department = $line[3];
    $email = null;
    $age = null;

    if (count($line) >= 5) {
        if (is_numeric($line[4])) {
            $age = intval($line[4]);
        } else {
            $email = $line[4];
            if (count($line) === 6) {
                $age = intval($line[5]);
            }
        }
    }
    $email = $email !== null ? $email : 'n/a';
    $age = $age !== null ? $age : -1;

    if (!array_key_exists($department, $depSalaries)) {
        $depSalaries[$department] = [];
    }
    $depSalaries[$department][] = $salary;
    $employees[] = new Employee($name, $salary, $position, $department, $email, $age);
}
$dep = '';
$highestAvgSalary = 0;
foreach ($depSalaries as $department => $salaries) {
    if ($highestAvgSalary < (array_sum($salaries) / count($salaries))) {
        $highestAvgSalary = array_sum($salaries) / count($salaries);
        $dep = $department;
    }
}
echo 'Highest Average Salary: ' . $dep . PHP_EOL;

usort($employees, function (Employee $emp1, Employee $emp2) use ($employees) {
    return $emp2->getSalary() <=> $emp1->getSalary();
});

foreach ($employees as $employee) {
    if ($employee->getDepartment() === $dep) {
        echo $employee . PHP_EOL;
    }
}