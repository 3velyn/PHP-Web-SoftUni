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

    /**
     * Person constructor.
     * @param string $name
     * @param int $age
     */
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
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    public function __toString()
    {
        return $this->getName() . ' - ' . $this->getAge();
    }
}

class Family
{
    /**
     * @var array
     */
    private $members;
    /**
     * @var Person
     */
    private $oldestMember;

    public function __construct()
    {
        $this->members = [];
        $this->oldestMember = null;
    }


    /**
     * @param Person $member
     */
    public function addMember(Person $member): void
    {
        if (null === $this->oldestMember || $this->oldestMember->getAge() < $member->getAge()) {
            $this->oldestMember = $member;
        }
        $this->members[] = $member;
    }

    /**
     * @return Person
     */
    public function getOldestMember(): Person
    {
        return $this->oldestMember;
    }

    /**
     * @return array
     */
}

$n = intval(readline());
$family = new Family();
while ($n--) {
    list($name, $age) = explode(' ', readline());
    $person = new Person($name, $age);
    $family->addMember($person);
}

echo $family->getOldestMember();