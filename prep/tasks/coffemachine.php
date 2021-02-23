<?php
$drinks = [
    ['type' => 'latte', 'price' => 300],
    ['type' => 'tea', 'price' => 100],
    ['type' => 'henesey', 'price' => 3000]
];

// wallet coins and SUM
$walletCoins = [100 => 2, 200 => 1, 500 => 2];

function walletSum(array $walletCoins): int
{
    $sum = 0;
    foreach ($walletCoins as $key => $coin) {
        $sum += $key * $coin;
    }
    return $sum; // 14
}

// print drink options
echo 'Our Coffee Machine offers: ' . PHP_EOL;
foreach ($drinks as $key => $drink) {
    echo $key . ' - ' . $drink['type'] . ' ' . ($drink['price'] / 100) . '€' . PHP_EOL;
}

// user INPUT + check if the right button is pressed (0,1,2)
$buyerChoice = intval(readline('Press the number of your drink: '));
if ($buyerChoice < 0 || $buyerChoice > 2) {
    exit ('Invalid button') . PHP_EOL;
}


$allCoinsInserted = [];

while (true) {
    system('clear');
    echo 'Wallet balance: ' . walletSum($walletCoins) / 100 . ' €' . PHP_EOL;
    echo 'Your drink: ' . $drinks[$buyerChoice]['type'] . PHP_EOL;
    echo 'Price: ' . $drinks[$buyerChoice]['price'] / 100 . ' €' . PHP_EOL;
    echo 'Amount inserted: ' . array_sum($allCoinsInserted) / 100 . ' €' . PHP_EOL;

    $throwCoin = readline('Insert coin: ');

    if (!array_key_exists($throwCoin, $walletCoins)) {
        $coinInserted = readline('Insert a valid coin: ');
    }

    if ($walletCoins[$throwCoin] == 0) {
        $coinInserted = readline('You are out of these coins: ');
    }

    array_push($allCoinsInserted, $throwCoin);
    $walletCoins[$throwCoin]--;

    if (array_sum($allCoinsInserted) >= $drinks[$buyerChoice]['price']) {
        echo 'Sorry, because of a bad programmer, we are not able to hand out your change...' . PHP_EOL;
        exit ('Thanks for the order. Enjoy your drink!');
    }
}