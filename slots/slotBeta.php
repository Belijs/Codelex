<?php

$slotScreen = [];

$myMoney = 100;

$elements = [1, 2, 3, 4];

$startPlaying = readline('Enter money amount (1 spin = 10): ');
$chooseBet = readline('Set your bet [10, 20, 30]');

function removeMoney($myMoney, $startPlaying)
{
    return $myMoney - $startPlaying;
}

echo 'Wallet balance: ' . removeMoney($myMoney, $startPlaying) . PHP_EOL;

while ($chooseBet <= $startPlaying) {
    $spin = readline('Spin? [y/n]');
    if ($spin == 'y') {
        $startPlaying = $startPlaying - $chooseBet;
 //       echo $slotScreen = rand(1, 3) . PHP_EOL;
    }
    echo $startPlaying;
};

$ele = [1, 2, 3]; //test


$slotScreen[0][0] = array_rand($ele);
$slotScreen[0][1] = array_rand($ele);
$slotScreen[0][2] = array_rand($ele);

$slotScreen[1][0] = rand(1, 3);
$slotScreen[1][1] = rand(1, 3);
$slotScreen[1][2] = rand(1, 3);

$slotScreen[2][0] = rand(1, 3);
$slotScreen[2][1] = rand(1, 3);
$slotScreen[2][2] = rand(1, 3);

$line1 = $slotScreen[0][0] . $slotScreen[0][1] . $slotScreen[0][2];
echo $line1;


// horizontal combos
if ($slotScreen[0][0] == $slotScreen[0][1] && $slotScreen[0][1] == $slotScreen[0][2]) {
    if ($slotScreen[0][0] == 1) {
        $myMoney = $myMoney + 10;
    }
    if ($slotScreen[0][0] == 2) {
        $myMoney = $myMoney + 20;

        if ($slotScreen[0][0] == 3) {
            $myMoney = $myMoney + 30;
        }
        if ($slotScreen[0][0] == 4) {
            $myMoney = $myMoney + (5 * 30); // 5 free games
        }
    }
}
if ($slotScreen[1][0] == $slotScreen[1][1] && $slotScreen[1][1] == $slotScreen[1][2]) {
    if ($slotScreen[1][0] == 1) {
        $myMoney = $myMoney + 10;
    }
    if ($slotScreen[1][0] == 2) {
        $myMoney = $myMoney + 20;

        if ($slotScreen[1][0] == 3) {
            $myMoney = $myMoney + 30;
        }
        if ($slotScreen[0][0] == 4) {
            $myMoney = $myMoney + (5 * 30);
        }
    }
}
if ($slotScreen[2][0] == $slotScreen[2][1] && $slotScreen[2][1] == $slotScreen[2][2]) {
    if ($slotScreen[2][0] == 1) {
        $myMoney = $myMoney + 10;
    }
    if ($slotScreen[2][0] == 2) {
        $myMoney = $myMoney + 20;

        if ($slotScreen[2][0] == 3) {
            $myMoney = $myMoney + 30;
        }
        if ($slotScreen[0][0] == 4) {
            $myMoney = $myMoney + (5 * 30);
        }
    }
}
// diognal combos
if ($slotScreen[0][0] == $slotScreen[1][1] && $slotScreen[1][1] == $slotScreen[2][2]) {
    if ($slotScreen[0][0] == 1) {
        $myMoney = $myMoney + 10;
    }
    if ($slotScreen[0][0] == 2) {
        $myMoney = $myMoney + 20;

        if ($slotScreen[0][0] == 3) {
            $myMoney = $myMoney + 30;
        }
        if ($slotScreen[0][0] == 4) {
            $myMoney = $myMoney + (5 * 30);
        }
    }
}
if ($slotScreen[2][0] == $slotScreen[1][1] && $slotScreen[1][1] == $slotScreen[0][2]) {
    if ($slotScreen[2][0] == 1) {
        $myMoney = $myMoney + 10;
    }
    if ($slotScreen[2][0] == 2) {
        $myMoney = $myMoney + 20;

        if ($slotScreen[2][0] == 3) {
            $myMoney = $myMoney + 30;
        }
        if ($slotScreen[0][0] == 4) {
            $myMoney = $myMoney + (5 * 30);
        }
    }
}