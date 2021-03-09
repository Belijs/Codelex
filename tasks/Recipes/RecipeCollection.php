<?php

class RecipeCollection
{
    private array $recipes = [];

    public function addRecipe(Recipe $recipe): void
    {
        $this->recipes[] = $recipe;
    }

    public function ingredientInRecipe(Ingredient $ingredient): string
    {
        $seeRecipes = '';
        foreach ($this->recipes as $recipe) {
            $checkRecipes = array_intersect($recipe->getIngredients(), $ingredient->getIngredients());

            foreach ($checkRecipes as $checkRecipe) {
                if (!$checkRecipes == 0) {
                    $seeRecipes .= $recipe->getName() . PHP_EOL;
                }
            }
        }
        return $seeRecipes;
    }

    public function whatsMissing(Ingredient $ingredient): string
    {
        $seeMissing = '';
        foreach ($this->recipes as $recipe) {
            $checkWhatsMissing = array_diff($recipe->getIngredients(), $ingredient->getIngredients());
            $checkRecipes = array_intersect($recipe->getIngredients(), $ingredient->getIngredients());

            foreach ($checkRecipes as $checkRecipe) {
                if (!$checkRecipes ==0 ) {
                    foreach ($checkWhatsMissing as $missingIngredient) {
                        $seeMissing .= $missingIngredient . PHP_EOL;
                    }
                }
            }

        }
        return $seeMissing;
    }
}
