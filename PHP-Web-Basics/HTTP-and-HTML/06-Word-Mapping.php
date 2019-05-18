<form>
    <textarea name="input" cols="62"></textarea> <br/>
    <input type="submit" value="Count words">
</form>

<?php

if (isset($_GET['input'])) {
    $text = strtolower(htmlspecialchars($_GET['input']));
    preg_match_all('/[a-z]+/', $text, $words);
    $wordsOccurrence = [];

    foreach ($words[0] as $word) {
        if (!array_key_exists($word, $wordsOccurrence)) {
            $wordsOccurrence[$word] = 0;
        }
        $wordsOccurrence[$word]++;
    }

    echo "<table border='2'>";
    foreach ($wordsOccurrence as $word => $count) {
        echo "<tr><td>$word</td><td>$count</td></tr>";
    }
    echo "</table>";
}
