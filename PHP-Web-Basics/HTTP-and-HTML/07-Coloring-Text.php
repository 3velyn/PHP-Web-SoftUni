<form>
    <textarea name="input"></textarea> <br/>
    <input type="submit" value="Color text">
</form>

<?php

if (isset($_GET['input'])) {
    $text = htmlspecialchars($_GET['input']);
    for ($i = 0; $i < strlen($text); $i++) {
        if ($text[$i] === ' ') {
            continue;
        }
        if (ord($text[$i]) % 2 === 0) {
            echo "<span style='color: red'>$text[$i]</span> ";
        } else {
            echo "<span style='color: blue'>$text[$i]</span> ";
        }
    }
}
