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

$myIngredient = new Ingredient();
$myIngredient->addIngredients();

$recipes->ingredientInRecipe($myIngredient);