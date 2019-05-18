<?php

$inventory = [];

while (true) {
    $input = readline();
    if ($input === 'shopping time') {
        break;
    }
    list($cmd, $product, $quantity) = explode(' ', $input);
    if (!array_key_exists($product, $inventory)) {
        $inventory[$product] = 0;
    }
    $inventory[$product] += intval($quantity);
}

while (true) {
    $input = readline();
    if ($input === 'exam time') {
        break;
    }
    list($cmd, $product, $quantity) = explode(' ', $input);

    if (!array_key_exists($product, $inventory)) {
        printf("%s doesn't exist\n", $product);
    } elseif ($inventory[$product] === 0) {
        printf("%s out of stock\n", $product);
    } else {
        if (intval($quantity) > $inventory[$product]) {
            $inventory[$product] = 0;
        } else {
            $inventory[$product] -= intval($quantity);
        }
    }
}

foreach ($inventory as $prod => $qty) {
    if ($qty > 0) {
        printf("%s -> %d\n", $prod, $qty);
    }
}
