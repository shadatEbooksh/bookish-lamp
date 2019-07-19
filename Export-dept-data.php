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
                                Export Department Data
                            </h2>
                            <ul class="header-dropdown m-r--5">
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
                                                        Export All Department Data
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne_9" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_9">
                                                <div class="panel-body">
                 In this Section, You can download Your Department information with specific information, LIKE you want to download all the Department whose curriculam code is 15 For this just search in the search box and you will get the Correct Information and then just click on the download option as you want. You can also Print this table.
                               <div class="table-responsive" style="margin-top:20px;">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Curriculam Code</th>
                                            <th>Technology Name</th>
                                            <th>Technology Code</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                           	<th>Curriculam Code</th>
                                            <th>Technology Name</th>
                                            <th>Technology Code</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php  
                                            $query = mysqli_query($conn, "SELECT * FROM deparment ORDER BY id");
											$a = 1;
                                            while ($row = mysqli_fetch_array($query)) {
                                                echo '
                                                    <tr>
                                                        <td>'.$a++.'</td>
                                                        <td>'.$row["ccode"].'</td>
                                                        <td>'.$row["name"].'</td>
                                                        <td>'.$row["tcode"].'</td>
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
                   In this Section, you can download specific custom row. Think Department table 
                   have 4 row. You just download the specific 2 or 3 row. you can also download all row as well. Just Select the row those given below and click search. Then you can see the download option. 
            <div class="demo-checkbox" style="margin-top: 20px;">
                  <input name="teacher" type="checkbox" id="md_checkbox_21" class=" name filled-in chk-col-red" value="ccode"  /><label for="md_checkbox_21">  Curriculam Code</label>
                  
                  <input name="teacher" type="checkbox" id="md_checkbox_22" class=" position filled-in chk-col-red" value="name"  /><label for="md_checkbox_22">Technology Name</label>
                  
                  <input name="teacher" type="checkbox" id="md_checkbox_23" class="qualification filled-in chk-col-red" value="tcode"  /><label for="md_checkbox_23">Technology Code</label>
                  
                  <br>
                  <button class="btn btn-danger " id="searchdata" type="button">Search</button>
			</div>
			<div id="res1" style="margin-top: 30px; overflow-x: scroll"></div>
<script>
	$(function() {
		$('#searchdata').click(function() {
			var dept = [];
			$.each($("input[name='teacher']:checked"), function(){            
                dept.push($(this).val());
            });
			if(dept.length < 1) {
				document.getElementById("res1").innerHTML = 
					"<div class='alert alert-danger'><i class='material-icons'>cancel</i>&nbsp;&nbsp; Error: Please Select the Column name & than try Search</div>";
			} else {
				$.ajax({
					url: 'customsearchdept.php',
					type: 'POST',
					data: {
						dept: dept
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