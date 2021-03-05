<?php

class RecipeCollection
{
    public array $recipes = [];

    public function addRecipe(Recipe $recipe)
    {
        $this->recipes[] = $recipe;
    }

    public function ingredientInRecipe(Ingredient $ingredient): void
    {
        foreach ($this->recipes as $recipe) {

            $checkRecipes = array_intersect($recipe->ingredients, $ingredient->ingredients);
            $checkWhatsMissing = array_diff($recipe->ingredients, $ingredient->ingredients);

            foreach ($checkRecipes as $checkRecipe) {
                if ($checkRecipes == 0) {
                    echo 'Cant make anything from this product...';
                }
                echo 'This product is in recipe: ' . $recipe->getName() . PHP_EOL;

                foreach ($checkWhatsMissing as $missingIngredient) {
                    echo 'Missing: ' . $missingIngredient . PHP_EOL;
                }
            }
            echo PHP_EOL;
        }
    }
}