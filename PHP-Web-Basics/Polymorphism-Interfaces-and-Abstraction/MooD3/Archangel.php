<?php

class Archangel extends Player
{
    public function hashPassword(string $username): void
    {
        $this->password = strrev($username) . strlen($username) * 21;
    }

    public function __toString()
    {
        return parent::__toString() . sprintf("\n%d",
                intval(parent::getSpecialPoint() * parent::getLevel()));
    }
}