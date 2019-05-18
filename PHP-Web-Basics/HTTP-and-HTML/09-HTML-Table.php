<form>
    <input type="text" name="name" placeholder="Name"><br/>
    <input type="number" name="phone" placeholder="Phone"><br/>
    <input type="number" name="age" placeholder="Age"><br/>
    <input type="text" name="address" placeholder="Address"><br/>

    <input type="submit">
</form>

<?php

var_dump($_GET);

if (isset($_GET['name']) && isset($_GET['phone'])
    && isset($_GET['age']) && isset($_GET['address'])) {

    $name = htmlspecialchars($_GET['name']);
    $address = htmlspecialchars($_GET['address']);
    $age = $_GET['age'];
    $phone = $_GET['phone'];

    echo "<table border='2'>";
    echo "<tr><td style='background-color: orange'>Name</td><td>$name</td></tr>";
    echo "<tr><td style='background-color: orange'>Phone number</td><td>$phone</td></tr>";
    echo "<tr><td style='background-color: orange'>Age</td><td>$age</td></tr>";
    echo "<tr><td style='background-color: orange'>Address</td><td>$address</td></tr>";
    echo "</table>";
}
