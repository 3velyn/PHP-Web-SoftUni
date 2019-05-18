<?php

if (isset($_GET['lines'])) {
    $lines = explode("\n",htmlspecialchars($_GET['lines']));
    $lines = array_map('trim', $lines);
    $lines = array_filter($lines);
    sort($lines);
    $sortedLines = implode("\n", $lines);
}

?>

<form>
  <textarea rows="10" name="lines"><?= $sortedLines
      ?></textarea> <br>
<input type="submit" value="Sort">
</form>
