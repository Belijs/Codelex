<?php
//Create a array of objects that uses the function of exercise 3 but in loop printing out if the person has reached age of 18.

$person0 = new stdClass();
$person0->name = 'Janis';
$person0->surname = 'Berzins';
$person0->age = 33;

$person1 = new stdClass();
$person1->name = 'Andris';
$person1->surname = 'Egle';
$person1->age = 25;

$person2 = new stdClass();
$person2->name = 'Juris';
$person2->surname = 'Upe';
$person2->age = 15;

$persons = [$person0, $person1, $person2];

function checkAge(stdClass $person): bool
{
    return $person->age >= 18;
}

foreach ($persons as $person) {
    if (checkAge($person)) {
        echo $person->name . " is old enough. \n";
    } else {
        echo $person->name . " is too young. \n";
    }
}