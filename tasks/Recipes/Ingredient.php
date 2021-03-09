<?php

class Ingredient
{
    public array $ingredients = [];

    public function addIngredients($enterIngredient): void
    {
        $this->ingredients[] = $enterIngredient;
    }

    public function getIngredients(): array
    {
        return $this->ingredients;
    }
}