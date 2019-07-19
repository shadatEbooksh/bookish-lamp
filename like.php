<?php
	include 'config/db.php';
	$id = $_POST['id'];
	$uid = $_POST['uid'];
	$a = mysqli_query($conn, "SELECT * FROM noticelike WHERE nid = '$id' AND uid = '$uid'" );
	$b = mysqli_num_rows($a);
	if ($b > 0) {
		$c = mysqli_fetch_array($a);
		$status = $c['status'];
		echo $status;
		if ($status == '0') {
			mysqli_query($conn, "UPDATE noticelike SET status = '1' WHERE nid='$id' and uid = '$uid'");
		} else {
			mysqli_query($conn, "UPDATE noticelike SET status = '0' WHERE nid='$id' and uid = '$uid'");
		}
	} else {
		$query = mysqli_query($conn, "INSERT INTO noticelike (nid, uid, status) VALUES ('$id', '$uid', '1')");
	}
	