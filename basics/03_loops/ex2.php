<?php
// complete loop to multiply i with itself n times, it is NOT allowed to use built-in pow() function
// echo "Input number of terms: ";

$integer = 6;

function double(int $integer): int
{
    $result = 1;

    for ($i = 1; $i <= $integer; $i++) {
        $result *= $integer;
    }
    return $result;
}

echo 'Number ' . $integer . ' multiplied with itself is: ' . double($integer);