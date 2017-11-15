<?php

class Render
{
	public function __toString()
	{
		$output = "<br>The following methods are available for " . __CLASS__." objects: <br>";
		$output .= implode("<br>", get_class_methods(__CLASS__));
		return $output;
	}

	public static function listShopping($ingredient_list)
	{
		ksort($ingredient_list);
		return implode("\n", array_keys($ingredient_list));
	}

	public static function listRecipes($titles)
	{
		asort($titles);
		$output = "";
		foreach($titles as $key => $title) {
			if($output != "") {
				$output .= '\n"';
			}
			$output .= "[$key] $title";
		}
		return implode("<br>", $titles);
	}

	public static function listIngredients($ingredients)
	{
		$output = "";
		foreach($ingredients as $ing){
			$output .= $ing['amount'] . " " . $ing['measure'] . " " . $ing['item'];
			$output .= "<br>";
		}
		return $output;
	}

	public static function displayRecipe($recipe)
	{
		$output = "";
		$output .= $recipe->getTitle() . ' by ' . $recipe->getSource();
		$output .= "<br>";
		$output .= implode(", ", $recipe->getTags());
		$output .= "<br><br>";
		$output .= self::listIngredients($recipe->getIngredients());
		$output .= "<br>";
		$output .= implode("<br>", $recipe->getInstructions());
		$output .= "<br>";
		$output .= $recipe->getYield();
		return $output;
	}
}