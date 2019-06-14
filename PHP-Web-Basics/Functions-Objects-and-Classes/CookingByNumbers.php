<?php

$num = intval(readline());
$cmds = explode(', ', readline());

foreach ($cmds as $cmd) {
    $num = operations($num, $cmd);
    echo $num . PHP_EOL;

}


function operations (float $num, string $cmd) {
    if ($cmd === 'chop') {
        return $num / 2;
    } elseif ($cmd === 'dice') {
        return sqrt($num);
    } elseif ($cmd === 'spice') {
        return $num + 1;
    } elseif ($cmd === 'bake') {
        return $num * 3;
    } elseif ($cmd === 'fillet') {
        return $num * 0.8;
    }
}
