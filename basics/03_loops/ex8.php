<?php
// Write a console program in a class named NumberSquare that prompts the user for two integers,
// a min and a max, and prints the numbers in the range from min to max inclusive in a square pattern.


$min = 1;
$max = 5;

$digits = range($min, $max);

for ($i = 0; $i < $max; $i++) {
    echo implode('', $digits) . PHP_EOL;
    array_push($digits, array_shift($digits));
}