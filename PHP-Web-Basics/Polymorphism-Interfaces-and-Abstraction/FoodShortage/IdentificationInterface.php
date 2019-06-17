<?php

interface IdentificationInterface
{
    public function setId(string $id): void;
    public function getId(): string;
    public function idVerification(string $id): bool;
}