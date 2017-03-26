<?php

$servername = "localhost";
$username = "brooke";
$password = "root";
$dbname = "ez_recipies_database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$query1 = "SELECT * FROM recipe WHERE recipe_id = " . $_GET["recipe_id"];
$result = $conn->query($query1);

if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_array()) {
		echo $row["title"];
	}
}
else{
	echo "0 results";
}

$conn->close();
?>