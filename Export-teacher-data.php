<?php  
    include 'includes/header.php';
?>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Export Section</h2>
            </div>
            <!-- Body Copy -->
            <div class="row clearfix">
                <?php  
                    if (isset($_SESSION['errr'])) {
                        echo $_SESSION['errr'];
                        $_SESSION['errr'] = "";
                    }
                ?>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Export Teacher Data
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li>
                                    <button type="button" class="btn btn-default waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal">ADD TEACHER</button>
                                </li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <div class="body">
                           
                    <div class="row clearfix">
                                <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
                                    <div class="panel-group" id="accordion_9" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-col-pink">
                                            <div class="panel-heading" role="tab" id="headingOne_9">
                                                <h4 class="panel-title">
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion_9" href="#collapseOne_9" aria-expanded="true" aria-controls="collapseOne_9">
                                                        Export All Teacher Data
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne_9" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_9">
                                                <div class="panel-body">
                 In this Section, You can download Your teacher information with specific information, LIKE you want to download all the teacher whose qualification in BSC OR MSC. For this just search in the search box and you will get the Correct Information and then just click on the download option as you want. You can also Print this table.
                               <div class="table-responsive" style="margin-top:20px;">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Education</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Education</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php  
                                            $query = mysqli_query($conn, "SELECT * FROM teacher ORDER BY id");
											$a = 1;
                                            while ($row = mysqli_fetch_array($query)) {
                                                echo '
                                                    <tr>
                                                        <td>'.$a++.'</td>
                                                        <td>'.$row["name"].'</td>
                                                        <td>'.$row["position"].'</td>
                                                        <td>'.$row["qualification"].'</td>
                                                        <td>'.$row["age"].'</td>
                                                        <td>'.$row["startdate"].'</td>
                                                        <td>'.$row["salary"].'</td>
                                                    </tr>
                                                ';
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-col-pink">
                                            <div class="panel-heading" role="tab" id="headingTwo_9">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_9" href="#collapseTwo_9" aria-expanded="false"
                                                       aria-controls="collapseTwo_9">
                                                        Export Teacher Data (Custom Search)
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo_9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_9">
                                                <div class="panel-body">
                   <div class="panel-body">
                   In this Section, you can download specific custom row. Think Teacher table 
                   have 6 row. You just download the specific 2 or 3 row. you can also download all row as well. Just Select the row those given below and click search. Then you can see the download option. 
            <div class="demo-checkbox" style="margin-top: 20px;">
                  <input name="teacher" type="checkbox" id="md_checkbox_21" class=" name filled-in chk-col-red" value="name"  /><label for="md_checkbox_21">Teacher Name</label>
                  
                  <input name="teacher" type="checkbox" id="md_checkbox_22" class=" position filled-in chk-col-red" value="position"  /><label for="md_checkbox_22">Position</label>
                  
                  <input name="teacher" type="checkbox" id="md_checkbox_23" class="qualification filled-in chk-col-red" value="qualification"  /><label for="md_checkbox_23">Qualification</label>
                  
                  <input name="teacher" type="checkbox" id="md_checkbox_24" class="age filled-in chk-col-red" value="age"  /><label for="md_checkbox_24">Age</label>
                  
                  <input name="teacher" type="checkbox" id="md_checkbox_25" class="joindate filled-in chk-col-red" value="startdate"  /><label for="md_checkbox_25">Join Date</label>
                  
                  <input name="teacher" type="checkbox" id="md_checkbox_26" class="salary filled-in chk-col-red" value="salary"  /><label for="md_checkbox_26">Salary</label> <br>
                  <button class="btn btn-danger " id="searchdata" type="button">Search</button>
			</div>
			<div id="res1" style="margin-top: 30px; overflow-x: scroll"></div>
<script>
	$(function() {
		$('#searchdata').click(function() {
			var teacher = [];
			$.each($("input[name='teacher']:checked"), function(){            
                teacher.push($(this).val());
            });
			if(teacher.length < 1) {
				document.getElementById("res1").innerHTML = 
					"<div class='alert alert-danger'><i class='material-icons'>cancel</i>&nbsp;&nbsp; Error: Please Select the Column name & than try Search</div>";
			} else {
				$.ajax({
					url: 'customsearchteacher.php',
					type: 'POST',
					data: {
						teacher: teacher
					},

					success: function(result){
						$('#res1').html(result);
					}
				});
			}
		})
	})
</script>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Body Copy -->
        </div>
    </section>
<!-- Default Size -->
<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">ADD NEW TEACHER</h4>
            </div>
            <div class="modal-body">
                <form action="config/action.php" method="post">
                    <div class="form-group">
                        <label>Name</label>
                        <div class="form-line">
                            <input type="text" name="name" placeholder="Enter Teacher Name" required="1" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Position</label>
                        <div class="form-line">
                            <input type="text" name="position" placeholder="Enter Teacher Position" required="1" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Qualification</label>
                        <div class="form-line">
                            <input type="text" name="qualification" placeholder="Enter Teacher qualification" required="1" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Age</label>
                        <div class="form-line">
                            <input type="number" name="age" placeholder="Enter Teacher Age" required="1" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Start Date</label>
                        <div class="form-line">
                            <input type="date" name="dates" required="1" class="form-control" placeholder="Please choose a date...">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Salary</label>
                        <div class="form-line">
                            <input type="number" name="salary" placeholder="Enter Teacher Salary" required="1" class="form-control">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" name="addTeacher" class="btn btn-link waves-effect">ADD TEACHER</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
            </form>
        </div>
    </div>
</div>

<?php  
    include 'includes/footer.php';
?>