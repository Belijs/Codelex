<?php
// Write a program to accept two integers and return true if the either one is 15 or if their sum or difference is 15.

$first = readline('Enter first number: ');
$second = readline('Enter second number: ');

$sum = $first + $second;
$AB = $first - $second;
$BA = $second - $first;

if ($first == 15 || $second == 15 || $sum == 15 || $AB == 15 || $BA == 15) {
    echo 'true';
} else {
    echo 'false';
}