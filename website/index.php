
<?php
	$page_name = "Home";
	include "home_header.php"; 
?>

  <div class="col-sm-10 suggested-recipes">

    <div id="bar">
		<form action="search.php" method="post">
		  <div class="input-group">
			<input type="text" class="form-control" name="search" placeholder="Search for a recipe...">
			<span class="input-group-btn">
			  <button class="btn btn-default" type="submit" value="submit">Go</button>
			</span>
		  </div><!-- /input-group -->
		</form>
    </div>
    <div class="row">
      <?php include "trending.php"; ?>
    </div>
  </div>

 <?php include "footer.php";?>
