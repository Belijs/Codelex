<?php




public function ingredientInRecipe(Ingredient $ingredient)
{

    $canMake = [];

    foreach ($this->recipes as $recipe) {

        $checkRecipes = array_intersect($recipe->getIngredients(), $ingredient->getIngredients());
        $checkWhatsMissing = array_diff($recipe->getIngredients(), $ingredient->getIngredients());

        foreach ($checkRecipes as $checkRecipe) {
            if ($checkRecipes == 0) {
                echo 'Cant make anything from this product...';
            }
            echo 'This product is in recipe: ' . $recipe->getName() . PHP_EOL;

            foreach ($checkWhatsMissing as $missingIngredient) {
                return $missingIngredient;
            }
        }
    }
}

