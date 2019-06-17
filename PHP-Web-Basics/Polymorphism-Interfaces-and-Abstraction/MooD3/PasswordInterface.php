<?php

interface PasswordInterface
{
    public function hashPassword(string $username): void;
    public function getPassword(): string;
}