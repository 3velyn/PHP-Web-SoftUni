<?php

interface Birthable
{
    public function setName(string $name): void;
    public function setBirthday(string $birthday): void;
    public function getBirthday(): string;
}