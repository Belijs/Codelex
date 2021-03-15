<?php
namespace App;

class Product
{
    public Sellable $sellable;
    public int $price;

    public function __construct(Sellable $sellable, int $price)
    {
        $this->sellable = $sellable;
        $this->price = $price;
    }

    public function barCode(): string
    {
        return md5($this->sellable->id());
    }
}