<?php

class AnimalFactory implements AnimalFactoryInterface
{
    public static function create(array $data): Animal
    {
        list($type, $name, $weight, $region) = $data;
        switch ($type){
            case "Cat":
                $breed = $data[4];
                return new Cat($name, floatval($weight), $region, $breed);
            case "Zebra":
            case "Mouse":
            case "Tiger":
                return new $type($name, floatval($weight), $region);
            default:
                return null;
        }
    }
}