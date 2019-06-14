<?php
require_once "Book.php";

class GoldenEditionBook extends Book
{
    /**
     * @return float
     */
    public function getPrice(): float
    {
        return parent::getPrice() * 1.3;
    }
}
