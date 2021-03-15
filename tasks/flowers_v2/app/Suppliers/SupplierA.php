<?php

namespace App\Suppliers;

use App\ProductCollection;
use App\Product;
use App\Flower;


class SupplierA implements Supplier
{
    public ProductCollection $products;

    public function __construct()
    {
        $this->products = new ProductCollection;
        $this->products->add(new Product(new Flower('Tulips'), 60), 1000);
        $this->products->add(new Product(new Flower('Roses'), 200), 250);
    }

    public function products(): ProductCollection
    {
        return $this->products;
    }
}