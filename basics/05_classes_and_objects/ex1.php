<?php
// Create a class Product that represents a product sold in a shop. A product has a price, amount and name.

class Product
{
    private int $price;
    private int $amount;
    private string $name;

    public function __construct(string $name, int $price, int $amount)
    {
        $this->price = $price;
        $this->amount = $amount;
        $this->name = $name;
    }

    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }

    public function printProduct(): string
    {
        return $this->name . ', ' . $this->price . ' EUR, ' . $this->amount . ' units.' . PHP_EOL;
    }

}

$mouse = new Product('Logitech mouse', 70, 14);
$phone = new Product('iPhone 12', 999, 3);
$projector = new Product('Epson 05', 400, 1);

$mouse->setPrice(59);
$mouse->setAmount(99);

echo $mouse->printProduct();
echo $phone->printProduct();
echo $projector->printProduct();