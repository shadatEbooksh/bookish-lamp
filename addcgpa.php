<?php 
	include 'config/db.php';
	$iroll = $_POST['iroll'];
	$broll = $_POST['broll'];
?>
<!-- Bootstrap Select Css -->
    <link href="plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
<div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
    <div style="color: red;">Please Provide the right information, Because you cant't change this after add. </div>
    <div class="panel-group" id="accordion_4" role="tablist" aria-multiselectable="true">
        <div class="panel panel-danger">
            <div class="panel-heading" role="tab" id="headingOne_4">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion_4" href="#collapseOne_4" aria-expanded="true" aria-controls="collapseOne_4">
                        Add Student CGPA
                    </a>
                </h4>
            </div>
            <div id="collapseOne_4" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_4">
                <div class="panel-body">
                    <form action="config/action.php" method="post">
                        <input type="hidden" name="iroll" value="<?php echo $iroll; ?>">
                        <input type="hidden" name="broll" value="<?php echo $broll; ?>">
                    <fieldset>
                     <div class="form-group form-float">
                        <div class="form-line">
                            <select name="semester" class="form-control">
                                <option value="">-- Choose Semester --</option>
                                <option value="1">First</option>
                                <option value="2">Second</option>
                                <option value="3">Third</option>
                                <option value="4">Fourth</option>
                                <option value="5">Fifth</option>
                                <option value="6">Sixth</option>
                                <option value="7">Seventh</option>
                                <option value="8">Eighth</option>
                            </select>
                        </div>
                    </div>             
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" name="gpa" required>
                            <label class="form-label">Enter GPA</label>
                        </div>
                    </div>

                    <button type="submit" name="AddGpa" class="btn btn-primary waves-effect m-r-20">ADD GPA</button>
                    </form>
                </fieldset>
                </div>
            </div>
        </div>
        <div class="panel panel-danger">
            <div class="panel-heading" role="tab" id="headingTwo_4">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_4" href="#collapseTwo_4" aria-expanded="false"
                       aria-controls="collapseTwo_4">
                        View Student CGPA
                    </a>
                </h4>
            </div>
            <div id="collapseTwo_4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_4">
                <div class="panel-body">
                    <table class="table table-hover">
                        <?php  
                            $query = mysqli_query($conn, "SELECT * FROM cgpa WHERE iroll = '$iroll' AND broll = '$broll'");
                            $row = mysqli_fetch_array($query);
                        ?>
                        <tr>
                            <th>Institute Roll</th>
                            <td><?php echo $row['iroll']; ?></td>
                        </tr>
                        <tr>
                            <th>Board Roll</th>
                            <td><?php echo $row['broll']; ?></td>
                        </tr>
                        <tr>
                            <th>1st Semester</th>
                            <td><?php echo $row['first']; ?></td>
                        </tr>
                        <tr>
                            <th>Second Semester</th>
                            <td><?php echo $row['second']; ?></td>
                        </tr>
                        <tr>
                            <th>Third Semester</th>
                            <td><?php echo $row['third']; ?></td>
                        </tr>
                        <tr>
                            <th>Fourth Semester</th>
                            <td><?php echo $row['fourth']; ?></td>
                        </tr>
                        <tr>
                            <th>Fifth Semester</th>
                            <td><?php echo $row['fifth']; ?></td>
                        </tr>
                        <tr>
                            <th>Six Semester</th>
                            <td><?php echo $row['six']; ?></td>
                        </tr>
                        <tr>
                            <th>Seven Semester</th>
                            <td><?php echo $row['seven']; ?></td>
                        </tr>
                        <tr>
                            <th>Eight Semester</th>
                            <td><?php echo $row['eight']; ?></td>
                        </tr>
                        <tr>
                            <th>Total CGPA</th>
                            <th><?php echo $row['total']; ?> out of 4</th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
 <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>
    <script src="js/pages/forms/basic-form-elements.js"></script>
