<?php
$shop = [
    ['name' => 'desa', 'price' => 10],
    ['name' => 'siers', 'price' => 5],
    ['name' => 'maize', 'price' => 3],
    ['name' => 'kola', 'price' => 15],
    ['name' => 'piens', 'price' => 7],
];

echo 'Here is what we can offer to you:' . PHP_EOL;
foreach ($shop as $key => $value) {
    echo $key . ' ' . $value['name'] . ' ' . PHP_EOL;
}

$choice = readline('Enter product number: ');
$amount = readline('Enter amount: ');

$checkout = 0;

foreach ($shop as $key => $value) {
    if ($choice == $key) {
        $checkout = $value['price'] * $amount;
    }
}

echo 'It will cost you: ' . $checkout . ' EUR ';