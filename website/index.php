
<html>

<?php
	$page_name = "Home";
	include "header.php"; 
?>

  <div class="col-sm-10 suggested-recipes">

    <div id="bar">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for a recipe...">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">Go</button>
        </span>
      </div><!-- /input-group -->
    </div>
    <div class="row">
      <?php include "trending.php"; ?>
    </div>
  </div>

 <?php include "footer.php";?>
