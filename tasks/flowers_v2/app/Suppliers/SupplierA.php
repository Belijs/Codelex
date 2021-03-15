<?php
namespace App;

class SupplierA implements Supplier
{
    public ProductCollection $products;

    public function __construct()
    {
        $this->products = new ProductCollection;
        $this->products->add(new Product(new Flower('tulips'), 60), 1000);
        $this->products->add(new Product(new Flower('roses'), 200), 250);
    }
    public function products(): ProductCollection
    {
        return $this->products;
    }
}