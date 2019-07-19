<?php  
	include 'config/db.php';
	$id = $_POST['id'];

	$query = mysqli_query($conn, "SELECT * FROM deparment WHERE name = '$id'");
	$row = mysqli_fetch_array($query);
	echo $row['tcode'];
?>