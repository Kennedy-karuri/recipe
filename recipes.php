<?php



/* Creating the objects*/
$one=new Recipe(
	"images/spaghetti.jpg",
	"Spagheti Bolognese",
	"This is a meal made out  spaghetti and nicely cooked minced meat",
	"Spagheti,Minced meat,diced onions,garlic,canned tomatoes,spicy pepper.l",
	"Frying pan"
);

$two=new Recipe(
	"images/grilled-cheese.jpg",
	"Grilled-cheese Sandwitch",
	"This is an easy to prepare meal made of come bread and a slice of cheese between them",
	"Slices of bread,Cheese",
	"Oven or Frying Pan"
);

$three=new Recipe(
	"images/omlette.jpg",
	"Omelette",
	"This is a very simple meal to prepare.it can be asy and very quick to prepare",
	"Eggs,Milk,Salt,",
	"Hot Frying pan"
	);

$four=new Recipe(
	"images/chilli-chicken.jpg",
	"Chilli",
	"This is a meal made from hot chilli and beef",
	"Beef and chilli",
	"Frying Pan"
);


$five=new Recipe(
	"images/macaroni.jpg",
	"Macaroni and Cheese",
	"This is a meal made out of macaroni noodles and melted butter",
	"Macaroni,Milk,Cheese,Salt,Pepper",
	"Frying Pan"
);

$six=new Recipe(
	"images/fried-rice.jpg",
	"Fried Rice",
	"This is a meal made out of rice",
	"Diced vegetables,Rice,Meat",
	"Cooking pot,oven"
);

$seven=new Recipe(
	"images/baked-chicken.jpg",
	"Baked-Chicken",
	"This is a meal made out of hotly grilled chicken",
	"Chicken,spices",
	"Oven"
	);

$eight=new Recipe(
	"images/tacos.jpg",
	"Tacos",
	"This is a meal made out of ground beef and tortillas",
	"Ground beef,Shredded letuce,Cheese",
	"Oven"
);


$nine=new Recipe(
	"images/meatloaf.jpg",
	"Meatloaf",
	"This is a meal made out of Bread and meat",
	"Ground beef,breadcrumbs,eggs,onions",
	"Oven"
);

$ten=new Recipe(
	"images/sausage.jpg",
	"Sausage and Peppers",
	"This is a meal made out of Sausage and Bread",
	"Sausage,Bread",
	"Pan"
);
 

 

$one->addItem($one);
$two->addItem($two);
$three->addItem($three);
$four->addItem($four);
$five->addItem($five);
$six->addItem($six);
$seven->addItem($seven);
$eight->addItem($eight);
$nine->addItem($nine);
$ten->addItem($ten);


?>