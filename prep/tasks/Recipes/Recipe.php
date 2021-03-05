<?php

class Recipe
{
    public string $name;
    public array $ingredients = [];

    public function __construct (string $name, array $ingredients){
        $this->name = $name;
        $this->ingredients = $ingredients;
    }
    public function getName(){
        return $this->name;
    }
}