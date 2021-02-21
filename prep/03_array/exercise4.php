<?php
//Program should display concatenated value of - Jane Doe 41

$people = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]
];
echo $people[0][1]['name'].' '.$people[0][1]['surname'].' '.$people[0][1]['age'];