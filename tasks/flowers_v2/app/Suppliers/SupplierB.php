<?php
namespace App\Suppliers;

use App\ProductCollection;
use App\Product;
use App\Flower;


class SupplierB implements Supplier
{
    public ProductCollection $products;

    public function __construct()
    {
        $this->products = new ProductCollection;
        $this->products->add(new Product(new Flower('Tulips'), 50), 5000);
        $this->products->add(new Product(new Flower('Orchids'), 400), 350);
    }
    public function products(): ProductCollection
    {
        return $this->products;
    }
}