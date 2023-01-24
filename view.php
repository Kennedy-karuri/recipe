<style>
	body{

		background: linear-gradient(to right, #004586, #553186);
		text-align:left;
		color:white;
		
	}
	p{

		font-size:xx-large;
	}
</style>
<?php 
include 'classes.php';

if (isset($_GET['title']) && !(empty(trim($_GET['title'])))){
	$slug=$_GET['title'];
	foreach ($recipe_list as $recipe) {
		$result = stripos($recipe->title, $slug) !== false;
		if ($result){ 
			$image=$recipe->image;
			$title=$recipe->title;
			$description=$recipe->description;
			$ingredients=$recipe->ingredients;
			$Equipment=$recipe->Equipment;
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
				<?php echo '<img class="view-image" src="'.$image.'" alt="">';?>
			</div>
			<div class="view-image-title">
				<h1><?php echo $slug;?></h1>
			</div>
		</div>
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
				<?php echo $Equipment;?>
			</p>
		</div>


	</div> 
</div> 




<?php include 'footer.php';