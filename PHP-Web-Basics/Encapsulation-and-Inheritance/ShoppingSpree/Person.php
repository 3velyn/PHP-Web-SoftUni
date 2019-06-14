<?php
require_once "Product.php";

class Person
{
    /** @var string */
    private $name;

    /** @var float */
    private $money;

    /** @var  Product[] */
    private $bagOfProducts;

    /**
     * PersonN constructor.
     * @param string $name
     * @param float $money
     * @throws Exception
     */
    public function __construct(string $name, float $money)
    {
        $this->setName($name);
        $this->setMoney($money);
        $this->bagOfProducts = [];
    }

    /**
     * @param string $name
     * @throws Exception
     */
    private function setName(string $name): void
    {
        if (strlen($name) === 0) {
            throw new Exception('Name cannot be empty');
        }
        $this->name = $name;
    }

    /**
     * @param float $money
     * @throws Exception
     */
    private function setMoney(float $money): void
    {
        if ($money < 0) {
            throw new Exception('Money cannot be negative');
        }
        $this->money = $money;
    }

    /**
     * @return string
     */
    private function getName(): string
    {
        return $this->name;
    }

    /**
     * @return float
     */
    private function getMoney(): float
    {
        return $this->money;
    }

    /**
     * @param Product $product
     * @return bool
     */
    private function canAffordAProduct(Product $product): bool
    {
        return $product->getCost() > $this->getMoney();
    }

    /**
     * @param Product $product
     * @return string
     * @throws Exception
     */
    public function buyProduct(Product $product): string
    {
        if ($this->canAffordAProduct($product)) {
            throw new Exception("{$this->getName()} can't afford {$product->getName()}");
        }
        $this->setMoney($this->getMoney() - $product->getCost());
        $this->addProduct($product);
        return "{$this->getName()} bought {$product->getName()}";
    }

    /**
     * @param Product $product
     */
    private function addProduct(Product $product): void
    {
        $this->bagOfProducts[] = $product;
    }

    /**
     * @return array|Product[]
     */
    private function getBagOfProducts()
    {
        return $this->bagOfProducts;
    }

    public function __toString()
    {
        $result = $this->getName() . ' - ';
        if (count($this->getBagOfProducts()) === 0) {
            $result .= 'Nothing bought';
        } else {
            $result .= implode(',', array_map(function (Product $prod) {
                return $prod->getName();
            },$this->getBagOfProducts()));
        }
        return $result;
    }
}