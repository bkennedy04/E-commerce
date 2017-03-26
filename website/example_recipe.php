<head>
  <link rel="stylesheet" href="styles.css">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Set favicon -->
  <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">

  <title>EZ Recipes: Dishes</title>
</head>

<body>

<nav class="navbar navbar-default">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-cutlery">&nbsp;</span>EZ Recipes</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home<span class="sr-only">(current)</span></a></li>
        <li><a href="#">Grocery Store</a></li>
		<li><a href="#">User Account</a></li>
		<li><a href="#">Shopping Cart</a></li>
        <!--li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li-->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Help</a></li>
        <!--li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul-->
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
</nav>

<div class="container-fluid">
  <div class="col-sm-2" style="padding: 0; margin: 0;">
	<div class="list" style="margin-bottom: 15px">
	  <span class="list-group-item active" style="font-weight: bold">Categories</span>
	  <a href="#" class="list-group-item">Vegetarian</a>
	  <a href="#" class="list-group-item">Italian</a>
	  <a href="#" class="list-group-item">American</a>
	  <a href="#" class="list-group-item">Popular Recipes</a>
	</div>
	<div class="list" style="margin-bottom: 15px">
	  <span class="list-group-item active" style="font-weight: bold">Tools</span>
	  <a href="#" class="list-group-item">Popular Recipes</a>
	  <a href="#" class="list-group-item">Something New</a>
	</div>
  </div>  


<?php

$servername = "localhost";
$username = "brooke";
$password = "root";
$dbname = "ez_recipies_database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$query1 = "SELECT title, image_url FROM recipe WHERE recipe_id = " .$_GET["recipe_id"];
$query2 = "SELECT * FROM recipe JOIN ingredients ON ingredients.recipe_id = recipe.recipe_id WHERE recipe.recipe_id = " . $_GET["recipe_id"];
$result1 = $conn->query($query1);
$result2 = $conn->query($query2);

if ($result1->num_rows > 0) {
	// output data of each row
	while($row = $result1->fetch_array()) {
	
?>


  <div class="col-md-7">
	<h1><?php echo $row["title"]; ?></h1>
  </div>
  <div class="col-md-4">
	<img src="<?php echo $row["image_url"] ?>" alt="<?php echo $row["title"]; ?>" class="img-rounded" style="width: 100%;" />
  </div>
  <div class="col-md-4">
	<ul style="padding: 0;">
<?php
	}
}
else{
	echo "0 results";
}

if ($result2->num_rows > 0) {
	// output data of each row
	while($row = $result2->fetch_array()) {

?>

 

		<li><strong><?php echo $row["quantity"]?> <?php echo $row["unit_of_measure"]?></strong> <?php echo $row["ingredient_name"] ?> </li>



<?php
	}
}
else{
	echo "0 results";
}

$conn->close();
?>

	</ul>
  </div>


</div>
     

</body>
<footer>
  <!-- Import jQuery -->
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</footer>