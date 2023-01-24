<style>
	body{

		background: linear-gradient(to right, #004586, #553186, #CE1487);
		text-align:center;
		
	}
	p{

		font-size:xx-large;
	}
</style>
<?php 
include 'header.php';
include 'classes.php';

if (isset($_GET['title']) && !(empty(trim($_GET['title'])))){
	$slug=$_GET['title'];
	foreach ($recipe_list as $recipe) {
		$result = stripos($recipe->title, $slug) !== false; /*Searching for a recipe whose title matches the slug*/
		if ($result){ /*Fetching the details of the recipe found*/
			$image=$recipe->image;
			$title=$recipe->title;
			$description=$recipe->description;
			$ingredients=$recipe->ingredients;
			$cookingEquipment=$recipe->cookingEquipment;
		}
	} 
}

?>

<style type="text/css">
	

</style>

<div class="main-container">
	<div class="view-item-row">
		<div class="one">
			<div class="view-image-holder">
				<?php echo '<img class="view-image" src="'.$image.'" alt="Image should be here">';?>
			</div>
			<div class="view-image-title">
				<h1><?php echo $slug;?></h1>
			</div>
		</div><!-- CLosing one -->
		<hr>
		<div class="details description">
			<h1>Description</h1>
			<p>
				<?php echo $description;?>
			</p>
		</div>
		<hr>
		<div class="details ingredients">
			<h1>Ingredients</h1>
			<p>
				<?php echo $ingredients;?>
			</p>
		</div>
		<hr>
		<div class="details equipment">
			<h1>Equipment</h1>
			<p>
				<?php echo $cookingEquipment;?>
			</p>
		</div>


	</div> <!-- Closing the row -->
</div> <!-- Closing the main container -->




<?php include 'footer.php';