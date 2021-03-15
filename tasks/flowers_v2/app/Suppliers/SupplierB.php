<?php
namespace App;

class SupplierB implements Supplier
{
    public ProductCollection $products;

    public function __construct()
    {
        $this->products = new ProductCollection;
        $this->products->add(new Product(new Flower('tulips'), 50), 5000);
        $this->products->add(new Product(new Flower('orchids'), 400), 350);
    }
    public function products(): ProductCollection
    {
        return $this->products;
    }
}