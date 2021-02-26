<?php
// Write a program which prints “Sunday”, “Monday”, ... “Saturday” if the int variable "dayNumber" is 0, 1, ..., 6, respectively.
// Otherwise, it shall print "Not a valid day".

//use  "nested-if" statement , "switch-case-default" statement.

$dayNumber = rand(1, 10); // 8, 9, 10 = not valid days

// Nested if statement
function checkDay(int $dayNumber): string
{
    if ($dayNumber === 1) {
        return 'Monday';
    } else
        if ($dayNumber === 2) {
            return 'Tuesday';
        } else
            if ($dayNumber === 3) {
                return 'Wednesday';
            } else
                if ($dayNumber === 4) {
                    return 'Thursday';
                } else
                    if ($dayNumber === 5) {
                        return 'Friday';
                    } else
                        if ($dayNumber === 6) {
                            return 'Saturday';
                        } else
                            if ($dayNumber === 7) {
                                return 'Sunday';
                            } else {
                                return 'Not a valid day...';
                            }
}

echo checkDay($dayNumber) . PHP_EOL;

// Switch-case-default

switch ($dayNumber){
    case ($dayNumber === 1):
        echo 'Monday';
        break;
    case ($dayNumber === 2):
        echo 'Tuesday';
        break;
    case ($dayNumber === 3):
        echo 'Wednesday';
        break;
    case ($dayNumber === 4):
        echo 'Thursday';
        break;
    case ($dayNumber === 5):
        echo 'Friday';
        break;
    case ($dayNumber === 6):
        echo 'Saturday';
        break;
    case ($dayNumber === 7):
        echo 'Sunday';
        break;
    default:
        echo 'Not a valid day...';
}