<?php

class Book
{
    /** @var string */
    private $title;

    /** @var string */
    private $author;

    /** @var float */
    private $price;

    /** @var string */
    private $type;

    /**
     * Book constructor.
     * @param string $title
     * @param string $author
     * @param float $price
     * @param string $type
     * @throws Exception
     */
    public function __construct(string $title, string $author, float $price, string $type)
    {
        $this->setTitle($title);
        $this->setAuthor($author);
        $this->setPrice($price);
        $this->setType($type);
    }

    /**
     * @param string $title
     * @throws Exception
     */
    private function setTitle(string $title): void
    {
        if (strlen($title) < 3) {
            throw new Exception("Title not valid!");
        }
        $this->title = $title;
    }

    /**
     * @param string $author
     * @throws Exception
     */
    private function setAuthor(string $author): void
    {
        list($firstName, $lastName) = explode(' ', $author);
        if (is_numeric($lastName[0])) {
            throw new Exception("Author not valid!");
        }
        $this->author = $author;
    }

    /**
     * @param float $price
     * @throws Exception
     */
    private function setPrice(float $price): void
    {
        if ($price <= 0) {
            throw new Exception("Price not valid!");
        }
        $this->price = $price;
    }

    /**
     * @param string $type
     * @throws Exception
     */
    private function setType(string $type): void
    {
        if ($type !== 'STANDARD' && $type !== 'GOLD') {
            throw new Exception("Type not valid!");
        }
        $this->type = $type;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    public function __toString()
    {
        return "OK" . PHP_EOL . $this->getPrice();
    }
}
