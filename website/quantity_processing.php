<?php 
session_start();
include "header.php";
include "db_connect.php"; 

$sql = "UPDATE cart SET quantity = ".$_POST["quantity"]." WHERE item_id = ".$_GET["item_id"]." AND user_id = '".$_SESSION["id"]."'";

if ($conn->query($sql) === TRUE) {  
	echo "Quantity updated successfully";
} 
else {
    echo "Error updating quantity: " . $conn->error;
}

$conn->close();
?>