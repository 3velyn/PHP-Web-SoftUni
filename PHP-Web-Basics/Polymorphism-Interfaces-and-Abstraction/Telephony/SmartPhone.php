<?php

class SmartPhone implements BrowsingInterface, TelephoneInterface
{

    public function browsing(string $url): string
    {
        if (preg_match('/[\d]+/', $url)) {
            throw new Exception("Invalid URL!\n");
        }
        return "Browsing: $url!\n";
    }

    public function calling(string $number): string
    {
        if (!is_numeric($number)) {
            throw new Exception("Invalid number!\n");
        }
        return "Calling... $number\n";
    }
}