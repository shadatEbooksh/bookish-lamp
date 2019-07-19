<?php  
	include 'config/db.php';
	$id = $_POST['id'];

	$query = mysqli_query($conn, "SELECT * FROM student WHERE id  = '$id'");
	$row = mysqli_fetch_array($query);
?>
<div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
    <div class="panel-group" id="accordion_4" role="tablist" aria-multiselectable="true">
        <div class="panel panel-danger">
            <div class="panel-heading" role="tab" id="headingOne_4">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion_4" href="#collapseOne_4" aria-expanded="true" aria-controls="collapseOne_4">
                        Important Information
                    </a>
                </h4>
            </div>
            <div id="collapseOne_4" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_4">
                <div class="panel-body">
                    <table class="table table-hover">
                        <tr>
                            <th>Student Name</th>
                            <td><?php echo $row['name']; ?></td>
                        </tr>
                        <tr>
                            <th>Student Phone</th>
                            <td><?php echo $row['phone']; ?></td>
                        </tr>
                        <tr>
                            <th>Student Email</th>
                            <td><?php echo $row['email']; ?></td>
                        </tr>
                        <tr>
                            <th>Student Institute Roll</th>
                            <td><?php echo $row['iroll']; ?></td>
                        </tr>
                        <tr>
                            <th>Student Admission Year</th>
                            <td><?php echo $row['ayear']; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="panel panel-danger">
            <div class="panel-heading" role="tab" id="headingTwo_4">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_4" href="#collapseTwo_4" aria-expanded="false"
                       aria-controls="collapseTwo_4">
                        Institute Information
                    </a>
                </h4>
            </div>
            <div id="collapseTwo_4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_4">
                <div class="panel-body">
                    <table class="table table-hover">
                        <tr>
                            <th>Board Roll</th>
                            <td><?php echo $row['broll']; ?></td>
                        </tr>
                        <tr>
                            <th>Registration Roll</th>
                            <td><?php echo $row['rroll']; ?></td>
                        </tr>
                        <tr>
                            <th>Curriculam Code</th>
                            <td><?php echo $row['ccode']; ?></td>
                        </tr>
                        <tr>
                            <th>Technology Name</th>
                            <td><?php echo $row['tname']; ?></td>
                        </tr>
                        <tr>
                            <th>Technology Code</th>
                            <td><?php echo $row['tcode']; ?></td>
                        </tr>
                        <tr>
                            <th>Passing Year</th>
                            <td><?php echo $row['pyear']; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="panel panel-danger">
            <div class="panel-heading" role="tab" id="headingThree_4">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_4" href="#collapseThree_4" aria-expanded="false"
                       aria-controls="collapseThree_4">
                        Personal Information
                    </a>
                </h4>
            </div>
            <div id="collapseThree_4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_4">
                <div class="panel-body">
                    <table class="table table-hover">
                        <tr>
                            <th>Father Name</th>
                            <td><?php echo $row['fname']; ?></td>
                        </tr>
                        <tr>
                            <th>Mother Name</th>
                            <td><?php echo $row['mname']; ?></td>
                        </tr>
                        <tr>
                            <th>Guardian Name</th>
                            <td><?php echo $row['gname']; ?></td>
                        </tr>
                        <tr>
                            <th>Guardian Phone Number</th>
                            <td><?php echo $row['gphone']; ?></td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td><?php echo $row['address']; ?></td>
                        </tr>
                        <tr>
                            <th>Remarks</th>
                            <td><?php echo $row['remarks']; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
