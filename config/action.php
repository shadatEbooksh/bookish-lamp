<?php
// Include Database 

include 'db.php';
session_start();
// Show all Error

ini_set("display_errors", "1");
error_reporting(E_ALL);

// validation input file
function validate($data) {
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    // $data = mysqli_real_escape_string($conn,$data);
    return $data;
}

// Student Login

if(isset($_POST['studentLogin'])) {
	$email = validate($_POST['email']);
	$otp = validate($_POST['otp']);
	
	$query = mysqli_query($conn, "SELECT * FROM student WHERE email = '$email' AND otp = '$otp'");
	if(mysqli_num_rows($query) > 0) {
		if (isset($_POST['rememberme'])) {
			setcookie ("SMSStudentEMAIL",$email,time()+ (86400 * 30), "/");  
        	setcookie ("SMSStudentOTP",$otp,time()+ (86400 * 30), "/");
			$_SESSION['studentEmail'] = $email;
			$_SESSION['studentOTP'] = $otp;
			echo '<script>window.open("../student/Student-Profile", "_self");</script>';
		} else {
			$_SESSION['studentEmail'] = $email;
			$_SESSION['studentOTP'] = $otp;
			echo '<script>window.open("../student/Student-Profile", "_self");</script>';
		}
	} else {
		$_SESSION['errr'] = '
			<div class="alert bg-pink alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                Sorry. Wrond Email or OTP..!
            </div>
		';
		echo '<script>window.open("../student/Student-Profile", "_self");</script>';
	}
}

// Admin Login

if (isset($_POST['adminLogin'])) {
	$username = validate($_POST['username']);
	$password = validate($_POST['password']);

	$qeury = mysqli_query($conn, "SELECT * FROM admin WHERE uname = '$username' AND password = '$password'");

	$count = mysqli_num_rows($qeury);
	if (!$count > 0) {
		$_SESSION['errr'] = '
			<div class="alert bg-pink alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                Sorry. Wrond Username or Password..!
            </div>
		';
		echo '<script>window.open("../admin", "_self");</script>';
	} else {
		if (isset($_POST['rememberme'])) {
			setcookie ("SMSAdminUsername",$username,time()+ (86400 * 30), "/");  
        	setcookie ("SMSAdminPassword",$password,time()+ (86400 * 30), "/");
				$_SESSION['adminUsername'] = $username;
			echo '<script>window.open("../Dashboard", "_self");</script>';
		} else {
			$_SESSION['adminUsername'] = $username;
			echo '<script>window.open("../Dashboard", "_self");</script>';
		}
	}
}

// Update Admin Info

if (isset($_POST['updateInfo'])) {
	if (!isset($_POST['agree'])) {
		$_SESSION['errr'] = '
			<div class="alert bg-pink alert-dismissible cart profile-card" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                You Have to Agree the terms & condition for update your data.
            </div>
		';
		echo '<script>window.open("../profile", "_self");</script>';
		exit();
	}

	$name = validate($_POST['name']);
	$email = validate($_POST['Email']);
	$phone = validate($_POST['phone']);
	$phone2 = validate($_POST['phone2']);
	$address = validate($_POST['address']);
	$address2 = validate($_POST['address2']);
	$city = validate($_POST['city']);
    $photo = date('d_m_Y_H_i_s').'_'.$_FILES['photo']['name'];
    $dates = date("d-F-Y");
	$target = "../images/admin/".basename($photo);

	$dates = date("d-F-Y");
	move_uploaded_file($_FILES['photo']['tmp_name'], $target);

    $qeury = mysqli_query($conn, "UPDATE admin SET name = '$name', email = '$email', phone='$phone', phone2='$phone2', address='$address', address2='$address2', city='$city', photo = '$photo', dates='$dates' ");
    if ($qeury) {
    	$_SESSION['errr'] = '
			<div class="alert bg-green alert-dismissible cart profile-card" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                Your information is successfully updated..!
            </div>
		';
		echo '<script>window.open("../profile", "_self");</script>';
    } else {
    	$_SESSION['errr'] = '
			<div class="alert bg-pink alert-dismissible cart profile-card" role="alert">
                // <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                Something is wrong, please try again.
            </div>
		';
		echo '<script>window.open("../profile", "_self");</script>';
    }
} 

// update usedr info

if (isset($_POST['updateUserInfo'])) {
	if (!isset($_POST['agree'])) {
		$_SESSION['errr'] = '
			<div class="alert bg-pink alert-dismissible cart profile-card" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                You Have to Agree the terms & condition for update your data.
            </div>
		';
		echo '<script>window.open("../profile", "_self");</script>';
		exit();
	}
	$uname = $_POST['uuname'];
	$name = validate($_POST['name']);
	$email = validate($_POST['email']);
	$phone = validate($_POST['phone']);
	$phone2 = validate($_POST['phone2']);
	$address = validate($_POST['address']);
	$address2 = validate($_POST['address2']);
	$city = validate($_POST['city']);
    $photo = date('d_m_Y_H_i_s').'_'.$_FILES['photo']['name'];
    $dates = date("d-F-Y");
	$target = "../images/admin/".basename($photo);

	$dates = date("d-F-Y");
	move_uploaded_file($_FILES['photo']['tmp_name'], $target);

    $qeury = mysqli_query($conn, "UPDATE userinfo SET name = '$name', email = '$email', phone='$phone', phone2='$phone2', address='$address', address2='$address2', city='$city', photo = '$photo', dates='$dates' WHERE uname = '$uname' ");
    if ($qeury) {
    	$_SESSION['errr'] = '
			<div class="alert bg-green alert-dismissible cart profile-card" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                Your information is successfully updated..!
            </div>
		';
		echo '<script>window.open("../User-profile", "_self");</script>';
    } else {
    	$_SESSION['errr'] = '
			<div class="alert bg-pink alert-dismissible cart profile-card" role="alert">
                // <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                Something is wrong, please try again.
            </div>
		';
		echo '<script>window.open("../User-profile", "_self");</script>';
    }
}

if (isset($_POST['updatePassword'])) {
	$opwd = validate($_POST['OldPassword']);
	$npwd = validate($_POST['NewPassword']);
	$npwd2 = validate($_POST['NewPasswordConfirm']);

	$query = mysqli_query($conn, "SELECT * FROM admin");
	$row = mysqli_fetch_array($query);
	$pwd = $row['password'];

	if ($pwd != $opwd) {
		$_SESSION['errr'] = '
			<div class="alert bg-pink alert-dismissible cart profile-card" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                Your Old Password doesn\'t matched..!
            </div>
		';
		echo '<script>window.open("../profile", "_self");</script>';
	} else {
		if ($npwd2 != $npwd) {
			$_SESSION['errr'] = '
				<div class="alert bg-pink alert-dismissible cart profile-card" role="alert">
	                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                Your New Password doesn\'t matched..!
	            </div>
			';
			echo '<script>window.open("../profile", "_self");</script>';
		} else {
			$qury = mysqli_query($conn, "UPDATE admin SET password = '$npwd'");
			$_SESSION['errr'] = '
				<div class="alert bg-green alert-dismissible cart profile-card" role="alert">
	                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                Your Password is successfully Updated..!
	            </div>
			';
			echo '<script>window.open("../profile", "_self");</script>';
		}
	}
}

// Update USr Password

if (isset($_POST['updateUserPassword'])) {
	$uname = $_POST['uuname'];
	$opwd = validate($_POST['OldPassword']);
	$npwd = validate($_POST['NewPassword']);
	$npwd2 = validate($_POST['NewPasswordConfirm']);

	$query = mysqli_query($conn, "SELECT * FROM user WHERE username = '$uname'");
	$row = mysqli_fetch_array($query);
	$pwd = $row['password'];

	if ($pwd != $opwd) {
		$_SESSION['errr'] = '
			<div class="alert bg-pink alert-dismissible cart profile-card" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                Your Old Password doesn\'t matched..!
            </div>
		';
		echo '<script>window.open("../User-profile", "_self");</script>';
	} else {
		if ($npwd2 != $npwd) {
			$_SESSION['errr'] = '
				<div class="alert bg-pink alert-dismissible cart profile-card" role="alert">
	                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                Your New Password doesn\'t matched..!
	            </div>
			';
			echo '<script>window.open("../User-profile", "_self");</script>';
		} else {
			$qury = mysqli_query($conn, "UPDATE user SET password = '$npwd' WHERE username = '$uname'");
			$_SESSION['errr'] = '
				<div class="alert bg-green alert-dismissible cart profile-card" role="alert">
	                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                Your Password is successfully Updated..!
	            </div>
			';
			echo '<script>window.open("../User-profile", "_self");</script>';
		}
	}
}

// ADD TEACHER

if (isset($_POST['addTeacher'])) {
	$name = validate($_POST['name']);
	$position = validate($_POST['position']);
	$qualification = validate($_POST['qualification']);
	$age = validate($_POST['age']);
	$startdate = validate($_POST['dates']);
	$salary = validate($_POST['salary']);

	$query = mysqli_query($conn, "INSERT INTO teacher (name , position, qualification, age, startdate, salary) VALUES ('$name', '$position', '$qualification', '$age', '$startdate', '$salary') ");
	if ($query) {
    	$_SESSION['errr'] = '
			<div class="alert bg-green alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                Teacher is added successfully in Database..!
            </div>
		';
		echo '<script>window.open("../Add-Teacher", "_self");</script>';
    } else {
    	$_SESSION['errr'] = '
			<div class="alert bg-pink alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                Something is wrong, please try again.
            </div>
		';
		echo '<script>window.open("../Add-Teacher", "_self");</script>';
    }
}

// Add Department

if (isset($_POST['addTechnology'])) {
	$ccode = validate($_POST['ccode']);
	$name = validate($_POST['name']);
	$tcode = validate($_POST['tcode']);

	$query = mysqli_query($conn, "INSERT INTO deparment (ccode, name, tcode) VALUES ('$ccode', '$name', '$tcode') ");
	if ($query) {
    	$_SESSION['errr'] = '
			<div class="alert bg-green alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                Department is added successfully in Database..!
            </div>
		';
		echo '<script>window.open("../Add-Department", "_self");</script>';
    } else {
    	$_SESSION['errr'] = '
			<div class="alert bg-pink alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                Something is wrong, please try again.
            </div>
		';
		echo '<script>window.open("../Add-Department", "_self");</script>';
    }
}

// Add User

if (isset($_POST['addUser'])) {
	$username = validate($_POST['username']);
	$password = validate($_POST['password']);
	$name = validate($_POST['name']);
	$position = validate($_POST['position']);
	$qualification = validate($_POST['qualification']);
	$age = validate($_POST['age']);
	$startdate = validate($_POST['dates']);
	$salary = validate($_POST['salary']);

	$query = mysqli_query($conn, "INSERT INTO user (name , position, qualification, age, startdate, salary, username, password) VALUES ('$name', '$position', '$qualification', '$age', '$startdate', '$salary', '$username', '$password') ");
	if ($query) {
		$query2 = mysqli_query($conn, "INSERT INTO userinfo (uname, name, phone, phone2, address, address2, city, photo, dates, email) VALUES ('$username', '$name', '', '', '', '', '', '', '', '')");
    	$_SESSION['errr'] = '
			<div class="alert bg-green alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                User is added successfully in Database..!
            </div>
		';
		echo '<script>window.open("../UniversalAllocation", "_self");</script>';
    } else {
    	$_SESSION['errr'] = '
			<div class="alert bg-pink alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                Something is wrong, please try again.
            </div>
		';
		echo '<script>window.open("../UniversalAllocation", "_self");</script>';
    }
}

// Update User
if (isset($_POST['updateUser'])) {
	$id = $_POST['id'];
	$username = validate($_POST['username']);
	$password = validate($_POST['password']);
	$name = validate($_POST['name']);
	$position = validate($_POST['position']);
	$qualification = validate($_POST['qualification']);
	$age = validate($_POST['age']);
	$startdate = validate($_POST['dates']);
	$salary = validate($_POST['salary']);

	$query = mysqli_query($conn, "UPDATE user SET username = '$username' , password = '$password', name='$name', position = '$position', qualification = '$qualification', age = '$age', startdate = '$startdate', salary = '$salary' WHERE id = '$id'");
	if ($query) {
    	$_SESSION['errr'] = '
			<div class="alert bg-green alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                User is successfully updated..!
            </div>
		';
		echo '<script>window.open("../UniversalAllocation", "_self");</script>';
    } else {
    	$_SESSION['errr'] = '
			<div class="alert bg-pink alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                Something is wrong, please try again.
            </div>
		';
		echo '<script>window.open("../UniversalAllocation", "_self");</script>';
    }
}

// Delete User

if (isset($_POST['deleteUser'])) {
	$id = $_POST['id'];
	$uname = $_POST['uname'];
	$query = mysqli_query($conn, "DELETE FROM user WHERE id = '$id'");
	if ($query) {
		$query2 = mysqli_query($conn, "DELETE FROM userinfo WHERE uname = '$uname'");
    	$_SESSION['errr'] = '
			<div class="alert bg-green alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                User is successfully deleted..!
            </div>
		';
		echo '<script>window.open("../UniversalAllocation", "_self");</script>';
    } else {
    	$_SESSION['errr'] = '
			<div class="alert bg-pink alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                Something is wrong, please try again.
            </div>
		';
		echo '<script>window.open("../UniversalAllocation", "_self");</script>';
    }
}

// User Login

if (isset($_POST['userLOgin'])) {
	$username = validate($_POST['username']);
	$password = validate($_POST['password']);

	$qeury = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");

	$count = mysqli_num_rows($qeury);
	if (!$count > 0) {
		$_SESSION['errr'] = '
			<div class="alert bg-pink alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                Sorry. Wrond Username or Password..!
            </div>
		';
		echo '<script>window.open("../index", "_self");</script>';
	} else {
		if (isset($_POST['rememberme'])) {
			setcookie ("SMSUserUsername",$username,time()+ (86400 * 30), "/");  
        	setcookie ("SMSUserPassword",$password,time()+ (86400 * 30), "/");
			$_SESSION['userloginUname'] = $username;
			echo '<script>window.open("../Dashboard", "_self");</script>';
		} else {
			$_SESSION['userloginUname'] = $username;
			echo '<script>window.open("../Dashboard", "_self");</script>';

		}
	}
}

if (isset($_POST['addStudent'])) {
	if (!isset($_POST['acceptTerms'])) {
		$_SESSION['errr'] = '
			<div class="alert bg-pink alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                Please Agree the terms & condition First
            </div>
		';
		echo '<script>window.open("../Add-Student", "_self");</script>';
		exit();
	}
	$name = validate($_POST['name']);
	$phone = validate($_POST['phone']);
	$email = validate($_POST['email']);
	$iroll = validate($_POST['iroll']);
	$ayear = validate($_POST['ayear']);
	$broll = validate($_POST['broll']);
	$rroll = validate($_POST['rroll']);
	$ccode = validate($_POST['ccode']);
	$tname = validate($_POST['tname']);
	$tcode = validate($_POST['tcode']);
	$pyear = validate($_POST['pyear']);
	$fname = validate($_POST['fname']);
	$mname = validate($_POST['mname']);
	$gname = validate($_POST['gname']);
	$gphone = validate($_POST['gphone']);
	$address = validate($_POST['address']);
	$remarks = validate($_POST['remarks']);
	$otp = bin2hex(random_bytes(10));
	if($ayear < 2016){
		$probidhan = "2010";
	} else {
		$probidhan = "2016";
	}
	$query = "INSERT INTO student (name, phone, email, iroll, ayear, broll, rroll, ccode, tname, tcode, pyear, fname, mname, gname, gphone, address, remarks, skill, Industry, session, entry_date,semester, otp) VALUES ('$name','$phone', '$email', '$iroll', '$ayear', '$broll', '$rroll', '$ccode', '$tname', '$tcode', '$pyear', '$fname', '$mname', '$gname', '$gphone', '$address', '$remarks', '', '' , '' , '',
		'' , '$otp' )";
	$runquery = mysqli_query($conn, $query);
	if ($runquery) {
		$query2 = mysqli_query($conn, "INSERT INTO cgpa (iroll, broll, first, second, third, fourth, fifth, six, seven, eight, total, probidhan, technology) VALUES ('$iroll', '$broll', '','','','','','','','','', '$probidhan', '$tname') ");
		$_SESSION['errr'] = '
			<div class="alert bg-green alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                Student information is successfully Added into Database..!Go to <a href="View-Student">View-Student</a> Page to see the Student Data..!
            </div>
		';
		echo '<script>window.open("../Add-Student", "_self");</script>';
    } else {
    	$_SESSION['errr'] = '
			<div class="alert bg-pink alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                Something is wrong, please try again.
            </div>
		';
		echo '<script>window.open("../Add-Student", "_self");</script>';
    }
}

// Add GPA

if (isset($_POST['AddGpa'])) {
	$iroll = validate($_POST['iroll']);
	$broll = validate($_POST['broll']);
	$gpa = validate($_POST['gpa']);
	$semester = $_POST['semester'];

	$query4 = mysqli_query($conn, "SELECT * FROM student WHERE iroll = '$iroll' AND broll = '$broll'");
	$row = mysqli_fetch_array($query4);
	$year = $row['ayear'];
	if ($year < 2016) {
		$first = 5;
		$second = 5;
		$third = 5;
		$four = 15;
		$five = 15;
		$six = 20;
		$seven = 25;
		$eight = 10;
	} else {
		$first = 5;
		$second = 5;
		$third = 5;
		$four = 10;
		$five = 15;
		$six = 20;
		$seven = 25;
		$eight = 15;
	}
	// gpa 

	if ($semester == 1) {
		$query3 = mysqli_query($conn, "SELECT * FROM cgpa WHERE iroll = '$iroll' AND broll = '$broll'");
		$row = mysqli_fetch_array($query3);
		$eight = $row['first'];
		if ($eight == '') {
			$percentage = ($gpa * $first)/ 100;
			$query = mysqli_query($conn, "UPDATE cgpa SET first = '$gpa' WHERE iroll = '$iroll' AND broll ='$broll'");
			if ($query) {
				$query = mysqli_query($conn, "UPDATE cgpa SET total = '$percentage' WHERE iroll = '$iroll' AND broll ='$broll'");
				$_SESSION['errr'] = '
				<div class="alert bg-green alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
	                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                Student 2nd semester gpa is added into Database..!
	            </div>
				';
				echo '<script>window.open("../View-Student", "_self");</script>';
	    	} else {
	    		$_SESSION['errr'] = '
				<div class="alert bg-pink alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
	                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                Something is wrong, please try again.
	            </div>
				';
				echo '<script>window.open("../View-Student", "_self");</script>';
			}
		} else {
			$_SESSION['errr'] = '
				<div class="alert bg-pink alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
	                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                Data is Already Inserted..!
	            </div>
				';
				echo '<script>window.open("../View-Student", "_self");</script>';
		}
	} elseif ($semester == '2') {
		$query3 = mysqli_query($conn, "SELECT * FROM cgpa WHERE iroll = '$iroll' AND broll = '$broll'");
		$row = mysqli_fetch_array($query3);
		$eight = $row['second'];
		if ($eight == '') {
			$percentage = ($gpa * $second)/ 100;
			$query = mysqli_query($conn, "UPDATE cgpa SET second = '$gpa' WHERE iroll = '$iroll' AND broll ='$broll'");
			if ($query) {
				$query2 = mysqli_query($conn, "SELECT * FROM cgpa WHERE iroll='$iroll' AND broll='$broll'");
				$row = mysqli_fetch_array($query2);
				$total = $row['total'];
				$total = $total + $percentage;
				$query = mysqli_query($conn, "UPDATE cgpa SET total = '$total' WHERE iroll = '$iroll' AND broll ='$broll'");
				$_SESSION['errr'] = '
				<div class="alert bg-green alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
	                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                Student 2nd semester gpa is added into Database..!
	            </div>
				';
				echo '<script>window.open("../View-Student", "_self");</script>';
	    	} else {
	    		$_SESSION['errr'] = '
				<div class="alert bg-pink alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
	                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                Something is wrong, please try again.
	            </div>
				';
				echo '<script>window.open("../View-Student", "_self");</script>';
			}
		} else {
			$_SESSION['errr'] = '
				<div class="alert bg-pink alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
	                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                Data is Already Inserted..!
	            </div>
				';
				echo '<script>window.open("../View-Student", "_self");</script>';
		}
	} elseif ($semester == '3') {
		$query3 = mysqli_query($conn, "SELECT * FROM cgpa WHERE iroll = '$iroll' AND broll = '$broll'");
		$row = mysqli_fetch_array($query3);
		$eight = $row['third'];
		if ($eight == '') {
			$percentage = ($gpa * $third)/ 100;
			$query = mysqli_query($conn, "UPDATE cgpa SET third = '$gpa' WHERE iroll = '$iroll' AND broll ='$broll'");
			if ($query) {
				$query2 = mysqli_query($conn, "SELECT * FROM cgpa WHERE iroll='$iroll' AND broll='$broll'");
				$row = mysqli_fetch_array($query2);
				$total = $row['total'];
				$total = $total + $percentage;
				$query = mysqli_query($conn, "UPDATE cgpa SET total = '$total' WHERE iroll = '$iroll' AND broll ='$broll'");
				$_SESSION['errr'] = '
				<div class="alert bg-green alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
	                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                Student 2nd semester gpa is added into Database..!
	            </div>
				';
				echo '<script>window.open("../View-Student", "_self");</script>';
	    	} else {
	    		$_SESSION['errr'] = '
				<div class="alert bg-pink alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
	                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                Something is wrong, please try again.
	            </div>
				';
				echo '<script>window.open("../View-Student", "_self");</script>';
			}
		} else {
			$_SESSION['errr'] = '
				<div class="alert bg-pink alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
	                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                Data is Already Inserted..!
	            </div>
				';
				echo '<script>window.open("../View-Student", "_self");</script>';
		}
	} elseif ($semester == '4') {
		$query3 = mysqli_query($conn, "SELECT * FROM cgpa WHERE iroll = '$iroll' AND broll = '$broll'");
		$row = mysqli_fetch_array($query3);
		$eight = $row['fourth'];
		if ($eight == '') {
			$percentage = ($gpa * $four)/ 100;
			$query = mysqli_query($conn, "UPDATE cgpa SET fourth = '$gpa' WHERE iroll = '$iroll' AND broll ='$broll'");
			if ($query) {
				$query2 = mysqli_query($conn, "SELECT * FROM cgpa WHERE iroll='$iroll' AND broll='$broll'");
				$row = mysqli_fetch_array($query2);
				$total = $row['total'];
				$total = $total + $percentage;
				$query = mysqli_query($conn, "UPDATE cgpa SET total = '$total' WHERE iroll = '$iroll' AND broll ='$broll'");
				$_SESSION['errr'] = '
				<div class="alert bg-green alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
	                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                Student 2nd semester gpa is added into Database..!
	            </div>
				';
				echo '<script>window.open("../View-Student", "_self");</script>';
	    	} else {
	    		$_SESSION['errr'] = '
				<div class="alert bg-pink alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
	                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                Something is wrong, please try again.
	            </div>
				';
				echo '<script>window.open("../View-Student", "_self");</script>';
			}
		} else {
			$_SESSION['errr'] = '
				<div class="alert bg-pink alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
	                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                Data is Already Inserted..!
	            </div>
				';
				echo '<script>window.open("../View-Student", "_self");</script>';
		}
	} elseif ($semester == '5') {
		$query3 = mysqli_query($conn, "SELECT * FROM cgpa WHERE iroll = '$iroll' AND broll = '$broll'");
		$row = mysqli_fetch_array($query3);
		$eight = $row['fifth'];
		if ($eight == '') {
			$percentage = ($gpa * $five)/ 100;
			$query = mysqli_query($conn, "UPDATE cgpa SET fifth = '$gpa' WHERE iroll = '$iroll' AND broll ='$broll'");
			if ($query) {
				$query2 = mysqli_query($conn, "SELECT * FROM cgpa WHERE iroll='$iroll' AND broll='$broll'");
				$row = mysqli_fetch_array($query2);
				$total = $row['total'];
				$total = $total + $percentage;
				$query = mysqli_query($conn, "UPDATE cgpa SET total = '$total' WHERE iroll = '$iroll' AND broll ='$broll'");
				$_SESSION['errr'] = '
				<div class="alert bg-green alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
	                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                Student 2nd semester gpa is added into Database..!
	            </div>
				';
				echo '<script>window.open("../View-Student", "_self");</script>';
	    	} else {
	    		$_SESSION['errr'] = '
				<div class="alert bg-pink alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
	                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                Something is wrong, please try again.
	            </div>
				';
				echo '<script>window.open("../View-Student", "_self");</script>';
			}
		} else {
			$_SESSION['errr'] = '
				<div class="alert bg-pink alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
	                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                Data is Already Inserted..!
	            </div>
				';
				echo '<script>window.open("../View-Student", "_self");</script>';
		}
	} elseif ($semester == '6') {
		$query3 = mysqli_query($conn, "SELECT * FROM cgpa WHERE iroll = '$iroll' AND broll = '$broll'");
		$row = mysqli_fetch_array($query3);
		$eight = $row['six'];
		if ($eight == '') {
			$percentage = ($gpa * $six)/ 100;
			$query = mysqli_query($conn, "UPDATE cgpa SET six = '$gpa' WHERE iroll = '$iroll' AND broll ='$broll'");
			if ($query) {
				$query2 = mysqli_query($conn, "SELECT * FROM cgpa WHERE iroll='$iroll' AND broll='$broll'");
				$row = mysqli_fetch_array($query2);
				$total = $row['total'];
				$total = $total + $percentage;
				$query = mysqli_query($conn, "UPDATE cgpa SET total = '$total' WHERE iroll = '$iroll' AND broll ='$broll'");
				$_SESSION['errr'] = '
				<div class="alert bg-green alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
	                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                Student 2nd semester gpa is added into Database..!
	            </div>
				';
				echo '<script>window.open("../View-Student", "_self");</script>';
	    	} else {
	    		$_SESSION['errr'] = '
				<div class="alert bg-pink alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
	                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                Something is wrong, please try again.
	            </div>
				';
				echo '<script>window.open("../View-Student", "_self");</script>';
			}
		} else {
			$_SESSION['errr'] = '
				<div class="alert bg-pink alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
	                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                Data is Already Inserted..!
	            </div>
				';
				echo '<script>window.open("../View-Student", "_self");</script>';
		}
	} elseif ($semester == '7') {
		$query3 = mysqli_query($conn, "SELECT * FROM cgpa WHERE iroll = '$iroll' AND broll = '$broll'");
		$row = mysqli_fetch_array($query3);
		$eight = $row['seven'];
		if ($eight == '') {
			$percentage = ($gpa * $seven)/ 100;
			$query = mysqli_query($conn, "UPDATE cgpa SET seven = '$gpa' WHERE iroll = '$iroll' AND broll ='$broll'");
			if ($query) {
				$query2 = mysqli_query($conn, "SELECT * FROM cgpa WHERE iroll='$iroll' AND broll='$broll'");
				$row = mysqli_fetch_array($query2);
				$total = $row['total'];
				$total = $total + $percentage;
				$query = mysqli_query($conn, "UPDATE cgpa SET total = '$total' WHERE iroll = '$iroll' AND broll ='$broll'");
				$_SESSION['errr'] = '
				<div class="alert bg-green alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
	                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                Student 2nd semester gpa is added into Database..!
	            </div>
				';
				echo '<script>window.open("../View-Student", "_self");</script>';
	    	} else {
	    		$_SESSION['errr'] = '
				<div class="alert bg-pink alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
	                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                Something is wrong, please try again.
	            </div>
				';
				echo '<script>window.open("../View-Student", "_self");</script>';
			}
		} else {
			$_SESSION['errr'] = '
				<div class="alert bg-pink alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
	                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                Data is Already Inserted..!
	            </div>
				';
				echo '<script>window.open("../View-Student", "_self");</script>';
		}
	} else {
		$query3 = mysqli_query($conn, "SELECT * FROM cgpa WHERE iroll = '$iroll' AND broll = '$broll'");
		$row = mysqli_fetch_array($query3);
		$eightt = $row['eight'];
		if ($eightt == '') {
			$percentage = ($gpa * $eight)/ 100;
			$query = mysqli_query($conn, "UPDATE cgpa SET eight = '$gpa' WHERE iroll = '$iroll' AND broll ='$broll'");
			if ($query) {
				$query2 = mysqli_query($conn, "SELECT * FROM cgpa WHERE iroll='$iroll' AND broll='$broll'");
				$row = mysqli_fetch_array($query2);
				$total = $row['total'];
				$total = $total + $percentage;
				$query = mysqli_query($conn, "UPDATE cgpa SET total = '$total' WHERE iroll = '$iroll' AND broll ='$broll'");
				$_SESSION['errr'] = '
				<div class="alert bg-green alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
	                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                Student 2nd semester gpa is added into Database..!
	            </div>
				';
				echo '<script>window.open("../View-Student", "_self");</script>';
	    	} else {
	    		$_SESSION['errr'] = '
				<div class="alert bg-pink alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
	                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                Something is wrong, please try again.
	            </div>
				';
				echo '<script>window.open("../View-Student", "_self");</script>';
			}
		} else {
			$_SESSION['errr'] = '
				<div class="alert bg-pink alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
	                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                Data is Already Inserted..!
	            </div>
				';
				echo '<script>window.open("../View-Student", "_self");</script>';
		}
	}
}

// Notice

if (isset($_POST['addNotice'])) {
	$title = validate($_POST['title']);
	$name = $_POST['name'];
	$uname = $_POST['uname'];
	$post = $_POST['post'];
	$dates = date("d-m-Y");

	$query = mysqli_query($conn, "INSERT INTO notice (name, username, title, post, dates) VALUES ('$name', '$uname', '$title', '$post', '$dates')");
	if ($query) {
		$_SESSION['errr'] = '
			<div class="alert bg-green alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                Notice is Posted..!
            </div>
		';
		echo '<script>window.open("../Notice", "_self");</script>';
    } else {
    	$_SESSION['errr'] = '
			<div class="alert bg-pink alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                Something is wrong, please try again.
            </div>
		';
		echo '<script>window.open("../Notice", "_self");</script>';
    }
}

// Edit CGPA

if (isset($_POST['editCgpa'])) {
	$iroll = validate($_POST['iroll']);
	$broll = validate($_POST['broll']);
	$probidhan = validate($_POST['probidhan']);
	$first = validate($_POST['first']);
	$second = validate($_POST['second']);
	$third = validate($_POST['third']);
	$fourth = validate($_POST['fourth']);
	$five = validate($_POST['five']);
	$six = validate($_POST['six']);
	$seven = validate($_POST['seven']);
	$eight = validate($_POST['eight']);

	if ($probidhan == '2010') {
		$g1 = 5;
		$g2 = 5;
		$g3 = 5;
		$g4 = 15;
		$g5 = 15;
		$g6 = 20;
		$g7 = 25;
		$g8 = 10;
	} else {
		$g1 = 5;
		$g2 = 5;
		$g3 = 5;
		$g4 = 10;
		$g5 = 15;
		$g6 = 20;
		$g7 = 25;
		$g8 = 15;
	}

	$c1 = ($first * $g1)/100;
	$c2 = ($second * $g2)/100;
	$c3 = ($third * $g3)/100;
	$c4 = ($fourth * $g4)/100;
	$c5 = ($five * $g5)/100;
	$c6 = ($six * $g6)/100;
	$c7 = ($seven * $g7)/100;
	$c8 = ($eight * $g8)/100;

	$total = $c1 + $c2 + $c3 + $c4 + $c5 + $c6 + $c7 + $c8;
	
	$query = mysqli_query($conn, "UPDATE cgpa SET first = '$first', second = '$second', third = '$third', fourth = '$fourth', fifth = '$five', six = '$six', seven = '$seven', eight = '$eight', total = '$total' WHERE iroll = '$iroll' AND broll = '$broll'");
	if ($query) {
		$_SESSION['errr'] = '
			<div class="alert bg-green alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                GPA is successfully updated..!
            </div>
		';
		echo '<script>window.open("../CcodegraphicalparticularAction", "_self");</script>';
    } else {
    	$_SESSION['errr'] = '
			<div class="alert bg-pink alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                Something is wrong, please try again.
            </div>
		';
		echo '<script>window.open("../CcodegraphicalparticularAction", "_self");</script>';
    }
}

// Delete CGP

if (isset($_POST['delCgpa'])) {
	$iroll = $_POST['iroll'];
	$broll = $_POST['broll'];

	$query = mysqli_query($conn, "DELETE FROM cgpa WHERE iroll = '$iroll' AND broll = '$broll'");
	if ($query) {
		mysqli_query($conn, "DELETE FROM student WHERE iroll = '$iroll' AND broll = '$broll'");
		$_SESSION['errr'] = '
			<div class="alert bg-green alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                GPA is successfully Deleted..!
            </div>
		';
		echo '<script>window.open("../CcodegraphicalparticularAction", "_self");</script>';
    } else {
    	$_SESSION['errr'] = '
			<div class="alert bg-pink alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                Something is wrong, please try again.
            </div>
		';
		echo '<script>window.open("../CcodegraphicalparticularAction", "_self");</script>';
    }
}

// edittech

if (isset($_POST['edittech'])) {
	$ccode = validate($_POST['ccode']);
	$name = validate($_POST['name']);
	$tcode = validate($_POST['tcode']);
	$id = $_POST['id'];
	$query = mysqli_query($conn, "UPDATE deparment SET ccode = '$ccode', name = '$name', tcode = '$tcode' WHERE id = '$id'");
	if ($query) {
		$_SESSION['errr'] = '
			<div class="alert bg-green alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                Department is successfully updated..!
            </div>
		';
		echo '<script>window.open("../DehydraAllocation", "_self");</script>';
    } else {
    	$_SESSION['errr'] = '
			<div class="alert bg-pink alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                Something is wrong, please try again.
            </div>
		';
		echo '<script>window.open("../DehydraAllocation", "_self");</script>';
    }
}

// deltec

if (isset($_POST['deltec'])) {
	$id = $_POST['id'];
	$query = mysqli_query($conn, "DELETE FROM deparment WHERE id = '$id'");
	if ($query) {
		$_SESSION['errr'] = '
			<div class="alert bg-green alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                Department is successfully Deleted..!
            </div>
		';
		echo '<script>window.open("../DehydraAllocation", "_self");</script>';
    } else {
    	$_SESSION['errr'] = '
			<div class="alert bg-pink alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                Something is wrong, please try again.
            </div>
		';
		echo '<script>window.open("../DehydraAllocation", "_self");</script>';
    }
}

// Update Teacher Data
if(isset($_POST['editteacherdata'])){
	$id = $_POST['id'];
	$name = validate($_POST['name']);
	$position = validate($_POST['position']);
	$qualification = validate($_POST['qualification']);
	$age = validate($_POST['age']);
	$startdate = validate($_POST['dates']);
	$salary = validate($_POST['salary']);
	$query = mysqli_query($conn, "UPDATE teacher SET name = '$name', position = '$position', qualification = '$qualification', age= '$age', startdate = '$startdate', salary = '$salary' WHERE id = '$id' ");
	if ($query) {
		$_SESSION['errr'] = '
			<div class="alert bg-green alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                Teacher Data is Successfully Updated..!
            </div>
		';
		echo '<script>window.open("../TitenusAdsorb", "_self");</script>';
    } else {
    	$_SESSION['errr'] = '
			<div class="alert bg-pink alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                Something is wrong, please try again.
            </div>
		';
		echo '<script>window.open("../TitenusAdsorb", "_self");</script>';
    }
}

//Delete Teacher Data
if(isset($_POST['delteacher'])){
	$id = $_POST['id'];
	$query = mysqli_query($conn, "DELETE FROM teacher WHERE id = '$id'");
	if ($query) {
		$_SESSION['errr'] = '
			<div class="alert bg-green alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                Teacher Data is Successfully Deleted..!
            </div>
		';
		echo '<script>window.open("../TitenusAdsorb", "_self");</script>';
    } else {
    	$_SESSION['errr'] = '
			<div class="alert bg-pink alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                Something is wrong, please try again.
            </div>
		';
		echo '<script>window.open("../TitenusAdsorb", "_self");</script>';
    }
}

// aDD Session 
if(isset($_POST['addSession'])) {
	$session = $_POST['session'];
	
	$query = mysqli_query($conn, "INSERT INTO session (session) VALUES ('$session')");
	if ($query) {
		$_SESSION['errr'] = '
			<div class="alert bg-green alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <i class="material-icons">done_all</i>&nbsp;Session Data is Successfully Inserted..!
            </div>
		';
		echo '<script>window.open("../Add-Session", "_self");</script>';
    } else {
    	$_SESSION['errr'] = '
			<div class="alert bg-pink alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <i class="material-icons">close</i>Something is wrong, please try again.
            </div>
		';
		echo '<script>window.open("../Add-Session", "_self");</script>';
    }
}

// Delete Notice
if(isset($_POST['deleteNotice'])){
	$id = $_POST['id'];
	
	$query = mysqli_query($conn, "DELETE FROM notice WHERE id = '$id'");
	if ($query) {
		$_SESSION['errr'] = '
			<div class="alert bg-green alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <i class="material-icons">done_all</i>&nbsp;Notice Data is Successfully Deleted..!
            </div>
		';
		echo '<script>window.open("../NathamOrialTrialInfluenceCarbonEnergy", "_self");</script>';
    } else {
    	$_SESSION['errr'] = '
			<div class="alert bg-pink alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <i class="material-icons">close</i>Something is wrong, please try again.
            </div>
		';
		echo '<script>window.open("../NathamOrialTrialInfluenceCarbonEnergy", "_self");</script>';
    }
}


















