<?php
// Write a program called CheckOddEven which prints "Odd Number" if the int variable “number” is odd, or “Even Number” otherwise.
// The program shall always print “bye!” before exiting.

$number = readline('Enter your number: ');

function checkOddEven (int $number) : string
{
    if ($number % 2 === 0) {
        return 'Even Number';
    } else {
        return 'Odd Number';
    }
}

echo checkOddEven($number). exit('bye!');