<?php
/*Creating the array that will store the various recipes*/
$recipe_list=array(); // This array will store objects

// Creating a class to Add ,View and Search recipes.
class Food {
	function printAll(){ // Shows all available recipes
		global $recipe_list;
		print_r($recipe_list);
	}

	public function addItem($item){ // Adds a recipe to the collection
		global $recipe_list;
		array_push($recipe_list,$item);
	}

    public function search($slug) {
    	global $recipe_list;
    	$final="";
		foreach ($recipe_list as $recipe) {
		  $result = stripos($recipe->title, $slug) !== false;
		  if ($result){
				$image=$recipe->image;
				$title=$recipe->title;
				$output='<div class="row-item"><div class="item-image-holder">';
				$output.='		<img src="'.$image.'" alt="Image one">';
				$output.='	</div>';
				$output.='	<div class="item-title">';
				$output.='		<h1><a href="/view.php?title='.$title.'">'.$title.'</a></h1>';
				$output.='	</div>';
				$output.='</div>';
				$final.=$output;
		  }
		}/*Closing the for loop*/

		if ($final === ""){
			return '<h3>Recipe for "'.$slug.'" is not available!</h3>';
		}
		return $final;
	}
}

/*Creating the template for individual recipes*/
class Recipe extends Food{
	public $image;
	public $title;
	public $description;
	public $ingredients;
	public $Equipment;

	function __construct($image,$title,$description,$ingredients,$Equipment){
		$this->image=$image;
		$this->title=$title;
		$this->description=$description;
		$this->ingredients=$ingredients;
		$this->Equipment=$Equipment;
	}

/* Fetches a recipe and adds to the main page*/
	public function getter(){
		$image=$this->image;
		$title=$this->title;
		$output='<div class="row-item"><div class="item-image-holder">';
		$output.='		<img src="'.$image.'" alt="Image one">';
		$output.='	</div>';
		$output.='	<div class="item-title">';
		$output.='		<h1><a href="/view.php?title='.$title.'">'.$title.'</a></h1>';
		$output.='	</div>';
		$output.='</div>';

		return $output;
	}
}

include 'recipes.php';
$recipes=new Food();



?>