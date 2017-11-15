<?php

class Recipe
{
	private $title;
	public $ingredients = [];
	public $instructions = [];
	public $yield;
	public $tag = [];
	public $source = 'Sagiv Lapkin';

	private $measurements = ['tsp', 'tbsp', 'cup', 'oz', 'lb', 'fl oz', 'pint', 'quart', 'gallon'];

	public function setTitle($title)
	{
		$this->title = ucwords($title);
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function addIngredients($item, $amount = null, $measure = null)
	{
		if($amount != null && !is_int($amount) && !is_int($measure))
			{
				exit('The amount must be a float: ' . gettype($amount) . ' amount given' );
			}
		if($measure != null && !in_array(strtolower($measure), $this->measurements))
		{
			exit('please enter a valid measurement: '. implode(", ", $this->measurements));
		}
		$this->ingredients[] = [
			'item' => ucwords($item),
		 	'amount' => $amount,
		  	'measure' => strtolower($measure)];
	}

	public function getIngredients()
	{
		return $this->ingredients;
	}

	public function displayRecipe()
	{
		return $this->title . ' by ' . $this->source;
	}
}