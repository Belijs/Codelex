<?php
// print if number is positive or negative

$number = -6;

function isPositive(int $number): string
{
    if ($number > 0) {
        return 'positive';
    } else {
        return 'negative';
    }
}

echo isPositive($number);