<?php
require_once "Person.php";
require_once "Product.php";

/** @var Person[] $people */
$people = [];
/** @var Product[] $products */
$products = [];

$peopleLine = preg_split("/[=;]/", readline());
$productsLine = explode(';', substr(readline(), 0, -1));

for ($i = 0; $i < count($peopleLine) - 1; $i += 2) {
    $name = $peopleLine[$i];
    $money = floatval($peopleLine[$i+1]);

    try {
        $people[$name] = new Person($name, $money);
    } catch (Exception $exception) {
        echo $exception->getMessage();
        return;
    }
}

foreach ($productsLine as $product) {
    list($name, $cost) = explode('=', $product);
    $products[$name] = new Product($name, $cost);
}

$input = readline();
while ($input !== 'END') {
    list($person, $product) = explode(' ', $input);
    if (array_key_exists($person, $people) && array_key_exists($product, $products)) {
        try {
            echo $people[$person]->buyProduct($products[$product]) . PHP_EOL;
        } catch (Exception $exception) {
            echo $exception->getMessage() . PHP_EOL;
        }
    }
    $input = readline();
}

foreach ($people as $person) {
    echo $person . PHP_EOL;
}