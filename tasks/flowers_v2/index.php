<?php
require_once 'vendor/autoload.php';

use App\Shop;
use App\Suppliers\SupplierA;
use App\Suppliers\SupplierB;
use App\Suppliers\SupplierJ;
use App\Suppliers\SupplierC;

$veikals = new Shop();
$veikals->addSupplier(new SupplierA);
$veikals->addSupplier(new SupplierB);
$veikals->addSupplier(new SupplierJ); // json
$veikals->addSupplier(new SupplierC); // csv

//$enterGender = strtolower(readline('Male of Female? '));
$enterGender = 'male';

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

//$enterFlower = strtolower(readline('Choose flowers [name]: '));
//$enterAmount = intval(readline('Enter amount: '));
$enterFlower = 'tulips';
$enterAmount = 11;
?>
    <br>
    <br>
<?php
foreach ($veikals->products()->all() as ['product' => $product, 'amount' => $amount]) {

    if ($enterFlower == $product->sellable->name && $enterGender == 'male') {
        echo 'You bought: ' . $enterAmount . ' ' . $enterFlower . ' for ' . $enterAmount * $product->price / 100 . ' EUR.';
    }
    if ($enterFlower == $product->sellable->name && $enterGender == 'female') {
        echo 'You bought: ' . $enterAmount . ' ' . $enterFlower . ' for ' . $enterAmount * $product->price / 100 * 0.8 . ' EUR.';
    }
}