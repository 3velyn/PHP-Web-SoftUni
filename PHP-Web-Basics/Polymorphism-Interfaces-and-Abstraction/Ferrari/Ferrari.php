<?php

class Ferrari implements CarInterface, Urlable
{
    const MODEL = '488-Spider';
    const DEFAULT_REPLACE = '-';

    /** @var int */
    static $objCount;

    /** @var string */
    private $racer;

    public function __construct(string $racer)
    {
        $this->setRacer($racer);
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return self::MODEL;
    }

    /**
     * @return string
     */
    public function getRacer(): string
    {
        return $this->racer;
    }

    /**
     * @param string $racer
     */
    public function setRacer(string $racer): void
    {
        $this->racer = $racer;
    }

    public function useBreaks(): string
    {
        return 'Brakes!';
    }

    public function pushTheGasPedal(): string
    {
        return 'Zadu6avam sA!';
    }

    public static function forUrl(string $str, string $rep = self::DEFAULT_REPLACE): string
    {
        return strtolower(str_replace(' ', $rep, $str));
    }

    public static function getCount()
    {
        return ++self::$objCount;
    }

    public function __toString(): string
    {
        return "{$this->getModel()}/{$this->useBreaks()}/{$this->pushTheGasPedal()}/";
    }
}