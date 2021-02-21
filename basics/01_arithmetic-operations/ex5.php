<?php
// Write a program that picks a random number from 1-100.
// Give the user a chance to guess it. If they get it right, tell them so.
// If their guess is higher than the number, say "Too high."
// If their guess is lower than the number, say "Too low." Then quit. (They don't get any more guesses for now.)

//I'm thinking of a number between 1-100.  Try to guess it.
//> 13
//
//Sorry, you are too low.  I was thinking of 34.

echo 'Computer is thinking of a number between 1-100. Try to guess it!'. PHP_EOL;
$randomNumber = rand(1, 100);
$userNumber = readline('Enter 1-100: ');

switch ([$randomNumber, $userNumber]){
    case ($userNumber === $randomNumber):
        echo 'CORRECT!';
        break;
    case ($userNumber > $randomNumber):
        echo 'Too high... Computer was thinking: '. $randomNumber;
        break;
    case ($userNumber < $randomNumber):
        echo 'Too low... Computer was thinking: '. $randomNumber;
        break;
}