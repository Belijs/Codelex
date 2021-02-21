<?php
//Create a person object with name, surname and age.
// Create a function that will determine if the person has reached 18 years of age.
// Print out if the person has reached age of 18 or not.

$person = new stdClass();
$person->name = 'Janis';
$person->surname = 'Berzins';
$person->age = 33;

function checkAge(int $age): string
{
    if ($age >= 18) {
        return 'Old enough';
    }
    return 'Too young';
}

echo checkAge($person->age);