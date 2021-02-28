<?php

function randomElement(): string
{
    $elements = ['A', 'B', 'C', 'D', 'E'];
    $randElement = array_rand($elements);
    return $elements[$randElement];
}

$wallet = 200;
$reward = 0;

$moneyInMachine = readline('Insert money: ');
if ($moneyInMachine > $wallet) {
    exit ('Not enough money');
}
$setBid = readline('Set bid [10, 20, 30...]');
if (($setBid % 10 !== 0) || ($setBid > $moneyInMachine)) {
    exit ('Bid error');
}

do {

    $line1 = [];
    $line2 = [];
    $line3 = [];
    $allLines = [];


    for ($i = 0; $i < 3; $i++) {
        array_push($line1, randomElement());
    }
    for ($i = 0; $i < 3; $i++) {
        array_push($line2, randomElement());
    }
    for ($i = 0; $i < 3; $i++) {
        array_push($line3, randomElement());
    }

    $allLines = array_merge($allLines, $line1, $line2, $line3);

    echo 'Your bid size is: ' . $setBid . PHP_EOL;
    $spinAgain = readline('Spin it! [y/n]');

    $moneyInMachine = $moneyInMachine - $setBid;

    if ($spinAgain == 'y') {
        $newLine = 0;
        for ($i = 0; $i < 1; $i++) {
            foreach ($allLines as $char) {
                echo $char;
                $newLine++;

                if ($newLine == 3) {
                    $newLine = 0;
                    usleep(600000);
                    echo PHP_EOL;
                }
            }
        }
    }
    if ($spinAgain == 'n') {
        $wallet = (int)$wallet - (int)$moneyInMachine + (int)$reward;
        exit ('Bye! ' . 'Wallet balance: ' . $wallet);
    }

    echo 'Money in machine:' . $moneyInMachine . PHP_EOL;
    echo 'Winnings: ' . $reward . PHP_EOL;

// winning combos
    if ($allLines[0] == $allLines[1] && $allLines[1] == $allLines[2]) {
        $reward += $setBid * 5;
        echo '***JACKPOT***' . PHP_EOL;
        echo $reward = $reward + $setBid * 5 . PHP_EOL;
    }
    if ($allLines[3] == $allLines[4] && $allLines[4] == $allLines[5]) {
        $reward += $setBid * 5;
        echo '***JACKPOT***' . PHP_EOL;
        echo $reward = $reward + $setBid * 5 . PHP_EOL;
    }
    if ($allLines[6] == $allLines[7] && $allLines[7] == $allLines[8]) {
        $reward += $setBid * 5;
        echo '***JACKPOT***' . PHP_EOL;
        echo $reward = $reward + $setBid * 5 . PHP_EOL;
    }
// diagonal
    if ($allLines[0] == $allLines[4] && $allLines[4] == $allLines[8]) {
        $reward += $setBid * 5;
        echo '***JACKPOT***' . PHP_EOL;
        echo $reward = $reward + $setBid * 5 . PHP_EOL;
    }
    if ($allLines[6] == $allLines[4] && $allLines[4] == $allLines[2]) {
        $reward += $setBid * 5;
        echo '***JACKPOT***' . PHP_EOL;
        echo $reward = $reward + $setBid * 5 . PHP_EOL;
    }

} while ($moneyInMachine > 0);