<?php
namespace BorderControl;

interface IdentificationInterface
{
    public function idVerification(string $fakeIdDigits): bool;
}