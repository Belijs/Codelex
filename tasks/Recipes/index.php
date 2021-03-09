<?php
require_once('Ingredient.php');
require_once('Recipe.php');
require_once('RecipeCollection.php');

$recipes = new RecipeCollection();

$snack = new Recipe('snack', ['bread', 'garlic', 'cheese']);
$main = new Recipe('main', ['potato', 'milk', 'salt', 'butter']);
$dessert = new Recipe('dessert', ['bread', 'ice cream', 'honey', 'jam']);
$recipes->addRecipe($snack);
$recipes->addRecipe($main);
$recipes->addRecipe($dessert);

$amount = readline('How many ingredients do you have? ');

$myIngredient = new Ingredient();

for ($i = 0; $i < $amount; $i++) {
    $enterIngredient = readline('Enter your product: ');
    $myIngredient->addIngredients($enterIngredient);
}

echo 'With this ingredient you can make: ' . PHP_EOL;
echo $recipes->ingredientInRecipe($myIngredient);


echo 'You are missing these ingredients: ' . PHP_EOL;
echo $recipes->whatsMissing($myIngredient);