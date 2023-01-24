<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/css/styles.css">
	<title>Recipe</title>
</head>
<script>
	document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')

console.log("testing");


</script>
<body>
	
<h1>WELCOME TO KEN'S RECIPIES</h1>
<p>FOOD SERVED AT IT'S BEST</p>

<div class="search">
<input id="searchInput" type="text" name="search" placeholder="Search your recipe here.." ><button>search</button>
</div>



 <?php 
include 'classes.php';
?> 


<div class="container">
	<div class="row">
		<?php
		if (isset($_GET['search'])){
			echo $recipes->search($_GET['search']);
		}else{
			foreach ($recipe_list as $recipe) {
				echo $recipe->getter();
			}		
		}
		?>

	</div> <!-- Closing the row -->
</div> <!-- Closing the main container -->

<script>
/*Listening for search params*/
document.getElementById("searchInput").addEventListener("keyup", function(event) {
  // If the "enter" key is pressed
  if (event.keyCode === 13) {
    // Get the search parameter
    var searchParam = document.getElementById("searchInput").value;
    // Send the search parameter to /search.php
    window.location.href = "/index.php?search=" + searchParam;
  }
});

</script>


</body>
</html>