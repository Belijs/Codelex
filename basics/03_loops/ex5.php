<?php
// Write a console program in a class named Piglet that implements a simple 1-player dice game called "Piglet" (based on the game "Pig").
// The player's goal is to accumulate as many points as possible without rolling a 1.
// Each turn, the player rolls the die; if they roll a 1, the game ends and they get a score of 0. Otherwise,
// they add this number to their running total score.
// The player then chooses whether to roll again, or end the game with their current point total.
// Here is an example dialogue where the user plays until rolling a 1, which ends the game with 0 points:

echo 'Welcome to Piglet! Lets play the game...';
$score = 0;

do {
    $play = readline('[YES = y / No = n]');
    $rollDice = rand(1, 6);

    if ($rollDice === 1) {
        exit('Unlucky... Score is: 0 ');
    }

    if ($play === 'y') {
        $score += $rollDice;
        echo 'Your score at the moment is: ' . $score . PHP_EOL;
    } elseif ($play === 'n') {
        exit ('GG! Your score is: ' . $score);
    }

} while ($play !== 1);