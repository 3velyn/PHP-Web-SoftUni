<form>
    Categories: <input type="text" name="categories"><br/>
    Tags: <input type="text" name="tags"><br/>
    Months: <input type="text" name="months"><br/>
    <input type="submit" value="Generate">
</form>

<?php

if (isset($_GET['categories']) && isset($_GET['tags']) && isset($_GET['months'])) {
    $form = $_GET;

    foreach ($form as $inputName => $inputValue) {
        $inputName[0] = strtoupper($inputName[0]);
        $entries = explode(', ', $inputValue);

        echo "<h2>$inputName</h2>";
        echo "<ul>";
        foreach ($entries as $entry) {
            echo "<li>$entry</li>";
        }
        echo "</ul>";
    }
}
