<?php
// Write a console program in a class named RollTwoDice that prompts the user for a desired sum,
// then repeatedly rolls two six-sided dice (using a Random object to generate random numbers from 1-6)
// until the sum of the two dice values is the desired sum.

$desiredSum = 10;
$diceSum = 0;

do {
    $play = readline('Roll dices [y/n]');

    if ($play == 'y') {
        $dice1 = rand(1, 6);
        $dice2 = rand(1, 6);
        $diceSum = $dice1 + $dice2;
        echo 'Desired sum: ' . $desiredSum . PHP_EOL;
        echo $dice1 . ' and ' . $dice2 . ' = ' . $diceSum . PHP_EOL;
    }
    if ($diceSum == $desiredSum) {
        echo 'Sweet, you got the right sum!';
    } elseif ($play === 'n') {
        exit ('You wanted to quit...');
    }
} while ($diceSum != $desiredSum);