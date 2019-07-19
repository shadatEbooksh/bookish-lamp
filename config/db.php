<?php  
date_default_timezone_set("Asia/Dhaka");

	$hostname = 'localhost';
	$username = 'root';
	$userpassword = "";
	$dbname = 'sms';

	$conn = mysqli_connect($hostname, $username, $userpassword, $dbname);

	if (!$conn) {
		echo mysqli_error($conn);
	}
?>