<?php

class Rebel extends Human
{
    /** @var string */
    private $group;

    public function __construct(string $name, int $age, string $group)
    {
        parent::__construct($name, $age);
        $this->setGroup($group);
    }

    private function setGroup(string $group): void
    {
        $this->group = $group;
    }
}