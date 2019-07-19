<link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet"/>

<?php
include 'config/db.php';

$gpa = $_POST['gpa'];
$gpastring = implode(',',$gpa);
echo '<table class="table table-bordered  table-hover dataTable js-exportable">';
$query = mysqli_query($conn, "SELECT $gpastring FROM cgpa");
$count = count($gpa);
echo '<thead><tr>';
for($i = 0; $i < $count; $i++) {
	echo '<td>'. strtoupper($gpa[$i]). '</td>';
}
echo '</tr></thead>';
echo '<tbody>';
$a = '';
for($i = 0; $i < $count; $i++) {
	$a .= $gpa[$i];
	if($i+1 < $count){
		$a .= ', ';
	}
}
	
	$query2 = mysqli_query($conn, "SELECT $a  FROM cgpa");

	while($row1 = mysqli_fetch_array($query2)){
		echo '<tr>';

		for($i = 0; $i < $count; $i++) {
		$info = $row1[$gpa[$i]];
		echo '<td>'.$info.'</td>';
		
		}
	echo '</tr>';	
	}
	



echo '</tbody></table>';
include 'includes/footer.php';
?>	
