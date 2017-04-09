<?php
	$page_name = "Grocery Store";
	include "header.php"; 
	include "db_connect.php";
	
	$query0 = "SELECT title, img, price FROM grocery ORDER BY title";
	$result0 = $conn->query($query0);
?>
	
	
	<div class="col-md-10">
<?php
	if($result0->num_rows > 0) {
		// output data of each row
		while($row = $result0->fetch_array()) {
	

?>
      <div id="grocery_item" class="col-md-2">
        <div class="thumbnail">
          <img src="<?php echo $row["img"];?>" alt="<?php echo $row["title"];?>" class="img-rounded" />
            <h3 style="text-align: center"><?php echo $row["title"];?></h3>
            <div class="btn-group btn-block">
			  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
				$<?php echo $row["price"];?><span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu">
				<li><a href="#">Add to Cart</a></li>
				<!--li role="separator" class="divider"></li>
				<li><a href="#">Separated link</a></li-->
			  </ul>
			</div>
          </div>
        </div>



<?php 

		}
	}
?>
	</div>
	</div>
	
<?php include "footer.php";?>