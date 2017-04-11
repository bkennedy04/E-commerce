<?php
session_start();
include "db_connect.php";

$sql = "INSERT INTO cart (item_id, user_id) VALUES ('".$_GET["item_id"]."', '".$_SESSION["id"]."')";

if ($conn->query($sql) === TRUE) {
	include "header.php";
    echo " Item added to cart.";
} 
else {
    echo "Error updating cart: " . $conn->error;
}

?>



	
<?php include "footer.php";?>