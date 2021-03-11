<?php
require_once('Sellable.php'); // interface
require_once('Supplier.php'); //interface
require_once('Product.php');
require_once('ProductCollection.php');
require_once('Shop.php');
require_once('SupplierA.php');
require_once('SupplierB.php');
require_once('Flower.php');

$veikals = new Shop();
$veikals->addSupplier(new SupplierA);
$veikals->addSupplier(new SupplierB);

$enterGender = strtolower(readline('Male of Female? '));

if ($enterGender == 'male') {
    foreach ($veikals->products()->all() as ['product' => $product, 'amount' => $amount]) {
        echo 'Product name: ' . $product->sellable->name . ', Price: ' . $product->price / 100 . ' EUR ' . ', In stock: ' . $amount . PHP_EOL;
    }
}
if ($enterGender == 'female') {
    echo '*** 20% Discount applied! ***' . PHP_EOL;
    foreach ($veikals->products()->all() as ['product' => $product, 'amount' => $amount]) {
        echo 'Product name: ' . $product->sellable->name . ', Price: ' . $product->price / 100 * 0.80 . ' EUR ' . ', In stock: ' . $amount . PHP_EOL;
    }
}

$enterFlower = strtolower(readline('Choose flowers [name]: '));
$enterAmount = intval(readline('Enter amount: '));

foreach ($veikals->products()->all() as ['product' => $product, 'amount' => $amount]) {

    if ($enterFlower == $product->sellable->name && $enterGender == 'male') {
        echo 'You bought: ' . $enterAmount . ' ' . $enterFlower . ' for ' . $enterAmount * $product->price / 100 . ' EUR.';
    }
    if ($enterFlower == $product->sellable->name && $enterGender == 'female') {
        echo 'You bought: ' . $enterAmount . ' ' . $enterFlower . ' for ' . $enterAmount * $product->price / 100 * 0.8 . ' EUR.';
    }
}