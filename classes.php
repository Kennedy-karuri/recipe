<?php

$recipe_list=array(); 


class Food {
	function printAll(){ 
		global $recipe_list;
		print_r($recipe_list);
	}

	public function addItem($item){ 
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
		}

		if ($final === ""){
			return '<h3>Recipe for "'.$slug.'" is not available!</h3>';
		}
		return $final;
	}
}


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