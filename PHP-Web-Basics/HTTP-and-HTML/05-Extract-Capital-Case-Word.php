<form>
    <textarea rows="10" name="text"></textarea><br>
    <input type="submit" value="Extract">
</form>

<?php

if (isset($_GET['text'])) {
    $text = htmlspecialchars($_GET['text']);
    preg_match_all('/[a-zA-Z]+/', $text, $matches);
    $words = [];

    foreach ($matches[0] as $word) {
        if (strtoupper($word) === $word) {
            $words[] = $word;
        }
    }
    echo implode(', ', $words);
}
