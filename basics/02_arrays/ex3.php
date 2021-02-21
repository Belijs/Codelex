<?php
// check if an array contains a value user entered

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];

echo "Enter the value to search for: ";
$userInput = readline();

if (in_array($userInput, $numbers)) {
    echo 'Your number is in the array.';
} else {
    echo 'number not in the array';
}