<?php

class Demon extends Player
{
    public function hashPassword(string $username): void
    {
        $this->password = strlen(parent::getUsername()) * 217;
    }

    public function __toString()
    {
        return parent::__toString() . sprintf("\n%.1f",
                round(parent::getSpecialPoint() * parent::getLevel(), 1));
    }
}