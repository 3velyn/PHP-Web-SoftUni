<?php

require_once "Book.php";
require_once "GoldenEditionBook.php";

$author = readline();
$title = readline();
$price = floatval(readline());
$type = readline();

try {
    if ($type === 'GOLD') {
        $book = new GoldenEditionBook($title, $author, $price, $type);
    } else {
        $book = new Book($title, $author, $price, $type);
    }
    echo $book;
} catch (Exception $exception) {
    echo $exception->getMessage();
}
