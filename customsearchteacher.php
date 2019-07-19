<link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet"/>

<?php
include 'config/db.php';

$teacher = $_POST['teacher'];
$teacherstring = implode(',',$teacher);
echo '<table class="table table-bordered  table-hover dataTable js-exportable">';
$query = mysqli_query($conn, "SELECT $teacherstring FROM teacher");
$count = count($teacher);
echo '<thead><tr>';
for($i = 0; $i < $count; $i++) {
	echo '<td>'. strtoupper($teacher[$i]). '</td>';
}
echo '</tr></thead>';
echo '<tbody>';
$a = '';
for($i = 0; $i < $count; $i++) {
	$a .= $teacher[$i];
	if($i+1 < $count){
		$a .= ', ';
	}
}
	
	$query2 = mysqli_query($conn, "SELECT $a  FROM teacher");

	while($row1 = mysqli_fetch_array($query2)){
		echo '<tr>';

		for($i = 0; $i < $count; $i++) {
		$info = $row1[$teacher[$i]];
		echo '<td>'.$info.'</td>';
		
		}
	echo '</tr>';	
	}
	



echo '</tbody></table>';
include 'includes/footer.php';
?>	
