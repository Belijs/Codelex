<?php

namespace App;

use App\Suppliers\Supplier;


class Shop
{
    public array $suppliers = [];

    public function addSupplier(Supplier $supplier): void
    {
        $this->suppliers[] = $supplier;
    }

    public function products(): ProductCollection
    {
        $products = new ProductCollection();

        foreach ($this->suppliers as $supplier) {
            $supplierProducts = $supplier->products->all();

            foreach ($supplierProducts as $barCode => ['product' => $product, 'amount' => $amount]) {
                $products->add(new Product($product->sellable, $product->price), $amount);
            }
        }
        return $products;
    }
}