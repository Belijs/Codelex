<?php

namespace App\Suppliers;

use App\ProductCollection;
use App\Product;
use App\Flower;


class SupplierC implements Supplier
{
    public ProductCollection $products;

    public function __construct()
    {
        $this->products = new ProductCollection();
        $file = fopen("app/Storage/CsvSupplier.csv", 'r');

        while (!feof($file)) {
            $content = fgetcsv($file);
            $count = count($content);
            for ($i = 0; $i < $count; $i++) {
                $this->products->add(new Product(new Flower($content[0]), $content[1]), $content[2]);
            }
            echo PHP_EOL;
        }
    }

    public function products(): ProductCollection
    {
        return $this->products;
    }
}