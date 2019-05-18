<form>
    <input type="text" name="name" placeholder="Name.."><br/>
    <input type="number" name="age" placeholder="Age.."><br/>
    <input type="radio" name="gender" value="male">Male<br/>
    <input type="radio" name="gender" value="female">Female<br/>
    <input type="submit">
</form>

<?php

if (isset($_GET['name']) && isset($_GET['age']) && isset($_GET['gender'])) {
    $name = htmlspecialchars($_GET['name']);
    $age = $_GET['age'];
    $gender = $_GET['gender'];

    echo "My name is $name. I am $age years old. I am $gender.";
}
