<?php
// Write a program to produce the sum of 1, 2, 3, ..., to 100.
// Store 1 and 100 in variables lower bound and upper bound, so that we can change their values easily.
// Also compute and display the average. The output shall look like:

// The sum of 1 to 100 is 5050
// The average is 50.5

$minNumber = 1;
$maxNumber = 100;

$sum = array_sum(range($minNumber, $maxNumber));
$average = $sum / $maxNumber;

echo 'The sum of ' . $minNumber . ' and ' . $maxNumber . ' is ' . $sum . PHP_EOL;
echo 'The average of this sum is ' . $average;