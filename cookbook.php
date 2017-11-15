<?php
include "classes/recipe.php";
include "classes/render.php";

$recipe1 = new Recipe();
$recipe1->setSource = 'Grandma Lapkin';
$recipe1->setTitle('my first recipe');
$recipe1->addIngredients('egg', 1);
$recipe1->addIngredients('egg', 2, 'cup');

$recipe2 = new Recipe();
$recipe2->setSource = 'Betty Crocker';
$recipe2->setTitle('My second recipe');

$recipe1->addInstruction("This is my first instruction");
$recipe1->addInstruction("This is my second instruction");

$recipe1->addTag('Breakfast');
$recipe1->addTag('Main Course');

$recipe1->setYield('6 servings');

echo Render::displayRecipe($recipe1);