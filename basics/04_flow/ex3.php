<?php
// Write a program that reads an positive integer and count the number of digits the number has.


$integer = abs(readline('Enter any integer: '));

echo 'This number has: ' . strlen($integer) . ' digits';