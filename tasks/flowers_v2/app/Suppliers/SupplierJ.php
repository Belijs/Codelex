<?php

namespace App\Suppliers;

use App\ProductCollection;
use App\Product;
use App\Flower;

class SupplierJ implements Supplier
{
    public ProductCollection $products;

    public function __construct()
    {
        $jsonData = file_get_contents("app/Storage/JsonSupplier.json");
        $json = json_decode($jsonData, true);
        $this->products = new ProductCollection();
        foreach ($json as $flower) {
            $this->products->add(new Product(new Flower($flower['name']), $flower['price']), $flower['amount']);
        }
    }

    public function products(): ProductCollection
    {
        return $this->products;
    }
}