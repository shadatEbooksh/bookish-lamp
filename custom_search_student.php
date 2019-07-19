
<link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet"/>
<?php

	include 'config/db.php';
	$session = $_POST['session'];
	$tname = $_POST['tname'];
	$semester = $_POST['semester'];
	$query = mysqli_query($conn,"SELECT * FROM student WHERE session = '$session' OR tname = '$tname' OR semester = '$semester' ");
 ?>

 			<div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable1">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Institute Roll</th>
                                            <th>Board Roll</th>
                                            <th>Registration Roll</th>
                                            <th>Admission Year</th>
                                            <th>Passing Year</th>
                                            <th>Curiculam Code</th>
                                            <th>Technoloy</th>
                                            <th>Technology Code</th>
                                            <th>Father Name</th>
                                            <th>Mother Name</th>
                                            <th>Guardian Name</th>
                                            <th>Guardian Phone Number</th>
                                            <th>Address</th>
                                            <th>Remarks</th>
                                            <th>Skill</th>
                                            <th>Industrial Attachment</th>
                                            <th>Session</th>
                                            <th>Entry Date</th>
                                            <th>Semester</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Institute Roll</th>
                                            <th>Board Roll</th>
                                            <th>Registration Roll</th>
                                            <th>Admission Year</th>
                                            <th>Passing Year</th>
                                            <th>Curiculam Code</th>
                                            <th>Technoloy</th>
                                            <th>Technology Code</th>
                                            <th>Father Name</th>
                                            <th>Mother Name</th>
                                            <th>Guardian Name</th>
                                            <th>Guardian Phone Number</th>
                                            <th>Address</th>
                                            <th>Remarks</th>
                                            <th>Skill</th>
                                            <th>Industrial Attachment</th>
                                            <th>Session</th>
                                            <th>Entry Date</th>
                                            <th>Semester</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php  
                                            
                                            while ($row = mysqli_fetch_array($query)) {
                                                echo '
                                                    <tr>
                                                        <td>'.$row["name"].'</td>
                                                        <td>'.$row["phone"].'</td>
                                                        <td>'.$row["email"].'</td>
                                                        <td>'.$row["iroll"].'</td>
                                                        <td>'.$row["broll"].'</td>
                                                        <td>'.$row["rroll"].'</td>
                                                        <td>'.$row["ayear"].'</td>
                                                        <td>'.$row["pyear"].'</td>
                                                        <td>'.$row["ccode"].'</td>
                                                        <td>'.$row["tname"].'</td>
                                                        <td>'.$row["tcode"].'</td>
                                                        <td>'.$row["fname"].'</td>
                                                        <td>'.$row["mname"].'</td>
                                                        <td>'.$row["gname"].'</td>
                                                        <td>'.$row["gphone"].'</td>
                                                        <td>'.$row["address"].'</td>
                                                        <td>'.$row["remarks"].'</td>
                                                        <td>'.$row["skill"].'</td>
                                                        <td>'.$row["Industry"].'</td>
                                                        <td>'.$row["session"].'</td>
                                                        <td>'.$row["entry_date"].'</td>
                                                        <td>'.$row["semester"].'</td>
                                                        
                                                    </tr>
                                                ';
                                            }
                                        ?>
                                    </tbody>
                                </table>
                               
                            </div>


   
    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>
    
    <script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
		

		<script type="">
			$(function(){
				    $('.js-exportable1').DataTable({
        dom: 'Bfrtip',
        responsive: true,
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
			});
		</script>                 
