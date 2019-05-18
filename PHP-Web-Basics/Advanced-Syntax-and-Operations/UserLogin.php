<?php

$users = [];
$unsuccessfulLogin = 0;
$input = readline();

while ($input !== 'login') {
    list($username, $pass) = explode(' -> ', $input);

    if (!array_key_exists($username, $users)) {
        $users[$username] = '';
    }
    $users[$username] = $pass;
    $input = readline();
}

$input = readline();

while ($input !== 'end') {
    list($username, $pass) = explode(' -> ', $input);

    if (array_key_exists($username, $users) && $users[$username] === $pass) {
        printf("%s: logged in successfully\n", $username);
    } else {
        printf("%s: login failed\n", $username);
        $unsuccessfulLogin++;
    }
    $input = readline();
}
echo 'unsuccessful login attempts: ' . $unsuccessfulLogin;
