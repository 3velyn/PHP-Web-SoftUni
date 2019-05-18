<?php

$phonebook = [];
$input = readline();

while ($input !== 'END') {
    $tokens = explode(' ', $input);
    $cmd = $tokens[0];

    if ($cmd === 'A') {
        $name = $tokens[1];
        $number = $tokens[2];

        if (!array_key_exists($name, $phonebook)) {
            $phonebook[$name] = '';
        }
        $phonebook[$name] = $number;
    }

    if ($cmd === 'S') {
        $name = $tokens[1];

        if (!array_key_exists($name, $phonebook)) {
            printf("Contact %s does not exist.\n", $name);
        } else {
            printf("%s -> %s\n", $name, $phonebook[$name]);
        }
    }

    if ($cmd === 'ListAll') {
        ksort($phonebook);
        foreach ($phonebook as $contact => $number) {
            printf("%s -> %s\n", $contact, $number);
        }
    }
    $input = readline();
}
