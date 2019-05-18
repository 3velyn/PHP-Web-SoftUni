<?php
$scoreboard = [];

while (true) {
    $input = readline();
    if ($input === 'Result') {
        break;
    }

    $input = preg_replace('/[@\%\$\*]/', '', $input);
    $tokens = explode('|', $input);
    $points = $tokens[2];

    if ($tokens[0] === strtoupper($tokens[0])) {
        $team = $tokens[0];
        $player = $tokens[1];
    } else {
        $team = $tokens[1];
        $player = $tokens[0];
    }

    $scoreboard[$team][$player] = intval($points);
    arsort($scoreboard[$team]);
}

foreach ($scoreboard as $team => $info) {
    $scoreboard[$team]['total'] = 0;
    foreach ($info as $player => $points) {
        $scoreboard[$team]['total'] += $points;
    }
}
uasort($scoreboard, function ($tp1, $tp2) use ($scoreboard) {
    return $tp2['total'] <=> $tp1['total'];
});

foreach ($scoreboard as $team => $info) {
    printf("%s => %d\nMost points scored by %s\n", $team, $info['total'], key($info));
}
