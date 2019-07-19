<?php
include 'config/db.php';
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$msg = $_POST['msg'];
$dates = date("d-F-Y h:i A");

$query = mysqli_query($conn, "INSERT INTO cmsg (name, email, subject, msg, dates) VALUES ('$name', '$email', '$subject', '$msg', '$dates')");
if($query) {
	echo '
<script>swal("Thank You", "Surely we are connecting with you soon", "success");</script>
	';
} else {
	echo 'no way';
}