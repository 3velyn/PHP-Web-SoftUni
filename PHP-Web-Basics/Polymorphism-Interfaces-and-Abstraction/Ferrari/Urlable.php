<?php

interface Urlable
{
    public static function forUrl(string $str, string $rep): string;
}