<?php
//Imagine you own a gun store. Only certain guns can be purchased with license types.
// Create an object (person) that will be the requester to purchase a gun (object) Person object has a name, valid licenses (multiple) & cash.
// Guns are objects stored within an array. Each gun has license letter, price & name.
// Using PHP in-built functions determine if the requester (person) can buy a gun from the store.

$buyer = new stdClass();
$buyer->name = 'Joe';
$buyer->licences = ['A', 'B'];
$buyer->cash = 2000;

class Gun
{
    public $name;
    public $licence;
    public $price;

    public function __construct(string $name,string $licence,int $price)
    {
        $this->name = $name;
        $this->licence = $licence;
        $this->price = $price;
    }
}

$guns = [
    new Gun('m416', 'A', 1500),
    new Gun('m762', 'S', 1000),
    new Gun('kar98', 'B', 2500)
];

foreach ($guns as $gun) {

    if (in_array($gun->licence, $buyer->licences) && $gun->price <= $buyer->cash) {
        echo 'You can buy these guns: ' . $gun->name . PHP_EOL;
    }
    if (!in_array($gun->licence, $buyer->licences) || $gun->price >= $buyer->cash) {
        echo 'You CANT buy these guns: ' . $gun->name . PHP_EOL;
    }
}




