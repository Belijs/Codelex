<?php

class Ingredient
{
    public array $ingredients = [];

    public function addIngredients() : void
    {
        $amount = readline('How many products do you have: ');
        for ($i = 0; $i < $amount; $i++) {
            $myIngredient = readline('I have: ');
            $this->ingredients[] = $myIngredient;
        }
    }
}