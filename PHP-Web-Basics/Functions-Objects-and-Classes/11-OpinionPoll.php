<?php

class Person
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var int
     */
    private $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
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
    private function setName(string $name): void
    {
        $this->name = $name;
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
    private function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function __toString()
    {
        return $this->getName() . ' - ' . $this->getAge();
    }
}

$n = readline();
$peopleAboveThirty = [];

for ($i = 0; $i < $n; $i++) {
    list($name, $age) = explode(' ', readline());
    $age = intval($age);
    if ($age > 30) {
        $peopleAboveThirty[] = new Person($name, $age);
    }
}
usort($peopleAboveThirty, function (Person $person1, Person $person2) use ($peopleAboveThirty) {
    return $person1->getName() <=> $person2->getName();
});

foreach ($peopleAboveThirty as $person) {
    echo $person . PHP_EOL;
}