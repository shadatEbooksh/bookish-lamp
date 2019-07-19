<?php
	include 'config/db.php';
	$id = $_POST['id'];
	$query = mysqli_query($conn, "SELECT * FROM user WHERE id = '$id'");
	$row = mysqli_fetch_array($query);
?>
<div class="form-group">
    <label>Username</label>
    <div class="form-line">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="text" name="username" placeholder="Enter User  Username" value="<?php echo $row['username']; ?>" required="1" class="form-control">
    </div>
</div>
<div class="form-group">
    <label>Password</label>
    <div class="form-line">
        <input type="text" value="<?php echo $row['password']; ?>" name="password" placeholder="Enter User Password" required="1" class="form-control">
    </div>
</div>
<div class="form-group">
    <label>Name</label>
    <div class="form-line">
        <input type="text" value="<?php echo $row['name']; ?>" name="name" placeholder="Enter User Name" required="1" class="form-control">
    </div>
</div>
<div class="form-group">
    <label>Position</label>
    <div class="form-line">
        <input value="<?php echo $row['position']; ?>" type="text" name="position" placeholder="Enter User Position" required="1" class="form-control">
    </div>
</div>
<div class="form-group">
    <label>Qualification</label>
    <div class="form-line">
        <input value="<?php echo $row['qualification']; ?>" type="text" name="qualification" placeholder="Enter User qualification" required="1" class="form-control">
    </div>
</div>
<div class="form-group">
    <label>Age</label>
    <div class="form-line">
        <input value="<?php echo $row['age']; ?>" type="number" name="age" placeholder="Enter User Age" required="1" class="form-control">
    </div>
</div>
<div class="form-group">
    <label>Start Date</label>
    <div class="form-line">
        <input value="<?php echo $row['startdate']; ?>" type="date" name="dates" required="1" class="form-control" placeholder="Please choose a date...">
    </div>
</div>
<div class="form-group">
    <label>Salary</label>
    <div class="form-line">
        <input value="<?php echo $row['salary']; ?>" type="number" name="salary" placeholder="Enter User Salary" required="1" class="form-control">
    </div>
</div>