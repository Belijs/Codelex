<?php
// Creates an array of ten integers. Should have 10 random numbers from 1 to 100 in the array.

$integerArray = [];
for ($i = 1; $i <= 10; $i++) {
    $integerArray[] += rand(1, 100);
}
echo 'Array1: ';
foreach ($integerArray as $integer) {
    echo $integer . ' ';
};
array_pop($integerArray);
array_push($integerArray, -7);
echo PHP_EOL;

// Copy the array into another array of the same capacity

$newArray = $integerArray;
echo 'Array2: ';
foreach ($newArray as $number) {
    echo $number . ' ';
}





