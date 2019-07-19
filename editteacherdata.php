<?php
	include 'config/db.php';
	$id = $_POST['id'];
	$query = mysqli_query($conn, "SELECT * FROM teacher WHERE id = '$id'");
	$row = mysqli_fetch_array($query);
?>
<div class="form-group">
	<label>Name</label>
	<div class="form-line">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
		<input type="text" value="<?php echo $row["name"]; ?>" name="name" placeholder="Enter Teacher Name" required="1" class="form-control">
	</div>
</div>
<div class="form-group">
	<label>Position</label>
	<div class="form-line">
		<input type="text" value="<?php echo $row["position"]; ?>" name="position" placeholder="Enter Teacher Position" required="1" class="form-control">
	</div>
</div>
<div class="form-group">
	<label>Qualification</label>
	<div class="form-line">
		<input type="text" value="<?php echo $row["qualification"]; ?>" name="qualification" placeholder="Enter Teacher qualification" required="1" class="form-control">
	</div>
</div>
<div class="form-group">
	<label>Age</label>
	<div class="form-line">
		<input type="number" value="<?php echo $row["age"]; ?>" name="age" placeholder="Enter Teacher Age" required="1" class="form-control">
	</div>
</div>
<div class="form-group">
	<label>Start Date</label>
	<div class="form-line">
		<input type="date" value="<?php echo $row["startdate"]; ?>" name="dates" required="1" class="form-control" placeholder="Please choose a date...">
	</div>
</div>
<div class="form-group">
	<label>Salary</label>
	<div class="form-line">
		<input type="number" value="<?php echo $row["salary"]; ?>" name="salary" placeholder="Enter Teacher Salary" required="1" class="form-control">
	</div>
</div>