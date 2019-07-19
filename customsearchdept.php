<link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet"/>

<?php
include 'config/db.php';

$dept = $_POST['dept'];
$deptstring = implode(',',$dept);
echo '<table class="table table-bordered  table-hover dataTable js-exportable">';
$query = mysqli_query($conn, "SELECT $deptstring FROM deparment");
$count = count($dept);
echo '<thead><tr>';
for($i = 0; $i < $count; $i++) {
	echo '<td>'. strtoupper($dept[$i]). '</td>';
}
echo '</tr></thead>';
echo '<tbody>';
$a = '';
for($i = 0; $i < $count; $i++) {
	$a .= $dept[$i];
	if($i+1 < $count){
		$a .= ', ';
	}
}
	
	$query2 = mysqli_query($conn, "SELECT $a  FROM deparment");

	while($row1 = mysqli_fetch_array($query2)){
		echo '<tr>';

		for($i = 0; $i < $count; $i++) {
		$info = $row1[$dept[$i]];
		echo '<td>'.$info.'</td>';
		
		}
	echo '</tr>';	
	}
	



echo '</tbody></table>';
?>	
<?php include 'includes/footer.php';?>