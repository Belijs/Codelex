<?php
// Create an associative array with objects of multiple persons.
// Each person should have a name, surname, age and birthday.
// Using loop (by your choice) print out every persons personal data.

$players = [
    'person1' => [
        'name' => 'Tyler',
        'surname' => 'Herro',
        'birthday' => '11 June',
        'age' => 21
    ],
    'person2' => [
        'name' => 'Jimmy',
        'surname' => 'Butler',
        'birthday' => '20 July',
        'age' => 32
    ],
    'person3' => [
        'name' => 'Goran',
        'surname' => 'Dragic',
        'birthday' => '2 March',
        'age' => 36
    ]
];

$persons = [];

foreach ($players as $key => $value) {
    $persons[$key] = (object) $value;
}

foreach ($persons as $person) {
    echo "$person->name $person->surname $person->birthday $person->age \n";
}