<?php
// Create a 2D associative array in 2nd dimension with fruits and their weight.
//Create a function that determines if fruit has weight over 10kg.
// Create a secondary array with shipping costs per weight.
// Meaning that you can say that over 10 kg shipping costs are 2 euros, otherwise its 1 euro.
// Using foreach loop print out the values of the fruits and how much it would cost to ship this product.

$fruits = [
    ['type' => 'apple', 'weight' => 5],
    ['type' => 'banana', 'weight' => 15],
    ['type' => 'kiwi', 'weight' => 7]
];
$shipping = [
    'heavy' => '2 EUR',
    'light' => '1 EUR'
];

function weighted($fruitBox, $ship)
{
    for ($i = 0; $i < count($fruitBox); $i++) {
        if ($fruitBox[$i]['weight'] < 10) {
            echo "{$fruitBox[$i]['type']}s weight: {$fruitBox[$i]['weight']}, and the shipping costs are {$ship['light']}\n";
        }
        if ($fruitBox[$i]['weight'] >= 10) {
            echo "{$fruitBox[$i]['type']}s weight: {$fruitBox[$i]['weight']}, and the shipping costs are {$ship['heavy']}\n";
        }
    }
    }

weighted($fruits, $shipping);