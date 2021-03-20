<?php

namespace App\Suppliers;

use App\ProductCollection;
use App\Product;
use Medoo\Medoo;


class SupplierMySQL implements Supplier
{
    public ProductCollection $products;

    public function __construct()
    {
        $this->products = new ProductCollection;

        $database = new Medoo([
            'database_type' => 'mysql',
            'database_name' => 'flowers',
            'server' => 'localhost',
            'username' => 'root',
            'password' => ''
        ]);
        $data = $database->select('flowers', '*');

        foreach ($data as $info) {
            $this->products->add(new Product($info['id'], $info['name'], $info['price'], $info['amount']));
        }
    }

    public function products(): ProductCollection
    {
        return $this->products;
    }
}
