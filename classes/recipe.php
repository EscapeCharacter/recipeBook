<?php

class Recipe
{
	private $title;
	public $ingredients = [];
	public $instructions = [];
	public $yield;
	public $tag = [];
	public $source = 'Sagiv Lapkin';

	public function setTitle($title)
	{
		$this->title = ucwords($title);
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function displayRecipe()
	{
		return $this->title . ' by ' . $this->source;
	}
}

$recipe1 = new Recipe();
$recipe1->source = 'Grandma Lapkin';
$recipe1->setTitle('my first recipe');

$recipe2 = new Recipe();
$recipe2->source = 'Betty Crocker';
$recipe2->setTitle('My second recipe');

echo $recipe1->getTitle();
echo $recipe2->displayRecipe();