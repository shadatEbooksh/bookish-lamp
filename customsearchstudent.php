<link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet"/>

<?php
include 'config/db.php';

$student = $_POST['student'];
$studentstring = implode(',',$student);
echo '<table class="table table-bordered  table-hover dataTable js-exportable">';
$query = mysqli_query($conn, "SELECT $studentstring FROM student");
$count = count($student);
echo '<thead><tr>';
for($i = 0; $i < $count; $i++) {
	echo '<td>'. strtoupper($student[$i]). '</td>';
}
echo '</tr></thead>';
echo '<tbody>';
$a = '';
for($i = 0; $i < $count; $i++) {
	$a .= $student[$i];
	if($i+1 < $count){
		$a .= ', ';
	}
}
	
	$query2 = mysqli_query($conn, "SELECT $a  FROM student");

	while($row1 = mysqli_fetch_array($query2)){
		echo '<tr>';

		for($i = 0; $i < $count; $i++) {
		$info = $row1[$student[$i]];
		echo '<td>'.$info.'</td>';
		
		}
	echo '</tr>';	
	}
	



echo '</tbody></table>';
include 'includes/footer.php';
?>	
