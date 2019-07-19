<?php  
include 'config/db.php';
$id = $_POST['id'];
$query = mysqli_query($conn, "SELECT * FROM deparment WHERE id = '$id'");
$row = mysqli_fetch_array($query);
?>
<input type="hidden" name="id" value="<?php echo $id; ?>">
<div class="form-group">
    <label>Curriculam Code</label>
    <div class="form-line">
        <input type="text" name="ccode" placeholder="Enter Curriculam Code" required="1" value="<?php echo $row['ccode']; ?>" class="form-control">
    </div>
</div>
<div class="form-group">
    <label>Technology Name</label>
    <div class="form-line">
        <input type="text" name="name" placeholder="Enter Deparment Name" required="1" value="<?php echo $row['name']; ?>" class="form-control">
    </div>
</div>
<div class="form-group">
    <label>Technology Code</label>
    <div class="form-line">
        <input type="text" name="tcode" placeholder="Enter Technology Code" required="1" value="<?php echo $row['tcode']; ?>" class="form-control">
    </div>
</div>