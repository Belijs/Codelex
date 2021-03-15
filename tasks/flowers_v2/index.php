<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Flower Store</title>
</head>
<body>
<center><h1>Welcome In The Store!</h1></center>

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
?>
<table align="center" border="3" width="25%" cellpadding="3" cellspacing="2">

    <?php
    if ($enterGender == 'male') {
        foreach ($veikals->products()->all() as ['product' => $product, 'amount' => $amount]) {
            echo "<td>" . ' Name: ' . "<strong>". $product->sellable->name . "</strong>". ', Price: ' . $product->price / 100 . ' EUR ' . ', In stock: ' . $amount . "</td>" . "<tr>" . PHP_EOL;
        }
    }
    ?>

    <?php
    if ($enterGender == 'female') {
        echo '*** 20% Discount applied! ***' . "\n";
        foreach ($veikals->products()->all() as ['product' => $product, 'amount' => $amount]) {
            echo 'Product name: ' . $product->sellable->name . ', Price: ' . $product->price / 100 * 0.80 . ' EUR ' . ', In stock: ' . $amount . PHP_EOL;
        }
    }

    //$enterFlower = strtolower(readline('Choose flowers [name]: '));
    //$enterAmount = intval(readline('Enter amount: '));

    ?>


</table>

<br>
<br>

<?php
$enterFlower = 'Tulips';
$enterAmount = 11;

foreach ($veikals->products()->all() as ['product' => $product, 'amount' => $amount]) {

    if ($enterFlower == $product->sellable->name && $enterGender == 'male') {
        echo "<div align=center>" . 'You bought: ' . $enterAmount . ' ' . $enterFlower . ' for ' . $enterAmount * $product->price / 100 . ' EUR.'. "</div>";
    }
    if ($enterFlower == $product->sellable->name && $enterGender == 'female') {
        echo 'You bought: ' . $enterAmount . ' ' . $enterFlower . ' for ' . $enterAmount * $product->price / 100 * 0.8 . ' EUR.';
    }
}
?>

</body>
</html>
