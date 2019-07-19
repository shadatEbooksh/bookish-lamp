<?php  

include 'config/db.php';
$id = $_POST['id'];
$query = mysqli_query($conn, "SELECT * FROM cgpa WHERE id = '$id'");
$row = mysqli_fetch_array($query);
$iroll = $row['iroll'];
$a = mysqli_query($conn, "SELECT * FROM student WHERE iroll = '$iroll'");
$b = mysqli_fetch_array($a);
$ayear = $b['ayear'];
if ($ayear < 2016) {
	$probidhan = "2010";
} else {
	$probidhan = "2016";
}
?>

<div class="form-group">
    <label>Institute Roll</label>
    <div class="form-line">
        <input type="text" name="iroll"value="<?php echo $row['iroll']; ?>" required="1" class="form-control">
    </div>
</div>
<div class="form-group">
    <label>Board Roll</label>
    <div class="form-line">
        <input type="text" name="broll" value="<?php echo $row['broll']; ?>"  required="1" class="form-control">
    </div>
</div>
<div class="form-group">
    <label>Probidhan</label>
    <div class="form-line">
        <input type="text" name="probidhan" value="<?php echo $probidhan; ?>"  required="1" class="form-control">
    </div>
</div>
<div class="form-group">
    <label>First Semester</label>
    <div class="form-line">
        <input type="text" name="first" placeholder="First Semester GPA" required="1"  value="<?php echo $row['first']; ?>"  class="form-control">
    </div>
</div>
<div class="form-group">
    <label>Second Semester</label>
    <div class="form-line">
        <input type="text" name="second" required="1" class="form-control" placeholder="Second Semester GPA" value="<?php echo $row['second']; ?>">
    </div>
</div>
<div class="form-group">
    <label>Thiird Semester</label>
    <div class="form-line">
        <input type="text" name="third" placeholder="Third Semester GPA" required="1" class="form-control" value="<?php echo $row['third']; ?>">
    </div>
</div>
<div class="form-group">
    <label>Four Semester</label>
    <div class="form-line">
        <input type="text" name="fourth" placeholder="Four Semester GPA" required="1" class="form-control" value="<?php echo $row['fourth']; ?>">
    </div>
</div>
<div class="form-group">
    <label>Five Semester</label>
    <div class="form-line">
        <input type="text" name="five" required="1" class="form-control" placeholder="Five Semester GPA" value="<?php echo $row['fifth']; ?>">
    </div>
</div>
<div class="form-group">
    <label>Six Semester</label>
    <div class="form-line">
        <input type="text" name="six" placeholder="Six Semester GPA" required="1" class="form-control" value="<?php echo $row['six']; ?>">
    </div>
</div>
<div class="form-group">
    <label>Seven Semester</label>
    <div class="form-line">
        <input type="text" name="seven" placeholder="Seven Semester GPA" required="1" class="form-control" value="<?php echo $row['seven']; ?>">
    </div>
</div>
<div class="form-group">
    <label>Eight Semester</label>
    <div class="form-line">
        <input type="text" name="eight" required="1" class="form-control" placeholder="Eight Semester GPA" value="<?php echo $row['eight']; ?>">
    </div>
</div>