<?php
include "classes/recipe.php";

$recipe1 = new Recipe();
$recipe1->source = 'Grandma Lapkin';
$recipe1->setTitle('my first recipe');
$recipe1->addIngredients('egg', 1);
$recipe1->addIngredients('egg', 2, 'cup');

$recipe2 = new Recipe();
$recipe2->source = 'Betty Crocker';
$recipe2->setTitle('My second recipe');

echo $recipe1->getTitle();

foreach($recipe1->getIngredients() as $ing) {
	echo "\n" . $ing['amount'] . " " . $ing['measure'] . " " . $ing['item'];
}