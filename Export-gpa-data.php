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
                                Export Student GPA Data
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
                                                        Export All CGPA Data
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne_9" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_9">
                                                <div class="panel-body">
                 In this Section, You can download Your All Student CGPA information with specific information, LIKE you want to download all the Student whose read in computer department. For this just search in the search box and you will get the Correct Information and then just click on the download option as you want. You can also Print this table.
                               <div class="table-responsive" style="margin-top:20px;">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Board Roll</th>
                                            <th>Institute Roll</th>
                                            <th>Department</th>
                                            <th>First</th>
                                            <th>Second</th>
                                            <th>Third</th>
                                            <th>Four</th>
                                            <th>Five</th>
                                            <th>Six</th>
                                            <th>Seven</th>
                                            <th>Eight</th>
                                            <th>CGPA</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Board Roll</th>
                                            <th>Institute Roll</th>
                                            <th>Department</th>
                                            <th>First</th>
                                            <th>Second</th>
                                            <th>Third</th>
                                            <th>Four</th>
                                            <th>Five</th>
                                            <th>Six</th>
                                            <th>Seven</th>
                                            <th>Eight</th>
                                            <th>CGPA</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php  
                                            $query = mysqli_query($conn, "SELECT * FROM cgpa ORDER BY id");
											$a = 1;
                                            while ($row = mysqli_fetch_array($query)) {
                                                echo '
                                                    <tr>
                                                        <td>'.$a++.'</td>
                                                        <td>'.$row["broll"].'</td>
                                                        <td>'.$row["iroll"].'</td>
                                                        <td>'.$row["technology"].'</td>
                                                        <td>'.$row["first"].'</td>
                                                        <td>'.$row["second"].'</td>
                                                        <td>'.$row["third"].'</td>
                                                        <td>'.$row["fourth"].'</td>
                                                        <td>'.$row["fifth"].'</td>
                                                        <td>'.$row["six"].'</td>
                                                        <td>'.$row["seven"].'</td>
                                                        <td>'.$row["eight"].'</td>
                                                        <td>'.$row["total"].'</td>
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
                  <input name="teacher" type="checkbox" id="md_checkbox_21" class=" name filled-in chk-col-red" value="iroll"  /><label for="md_checkbox_21">Institute Roll</label>
                  
                  <input name="teacher" type="checkbox" id="md_checkbox_22" class=" position filled-in chk-col-red" value="broll"  /><label for="md_checkbox_22">Board Roll</label>
                  
                  <input name="teacher" type="checkbox" id="md_checkbox_23" class="qualification filled-in chk-col-red" value="technology"  /><label for="md_checkbox_23">Department</label>
                  
                  <input name="teacher" type="checkbox" id="md_checkbox_24" class="age filled-in chk-col-red" value="probidhan"  /><label for="md_checkbox_24">Probidhan</label>
                  
                  <input name="teacher" type="checkbox" id="md_checkbox_25" class="joindate filled-in chk-col-red" value="first"  /><label for="md_checkbox_25">First Semester</label>
                  
                  <input name="teacher" type="checkbox" id="md_checkbox_26" class="salary filled-in chk-col-red" value="second"  /><label for="md_checkbox_26">Second Semester</label>

                  <input name="teacher" type="checkbox" id="md_checkbox_25" class=" name filled-in chk-col-red" value="third"  /><label for="md_checkbox_25">Third Semester</label>
                  
                  <input name="teacher" type="checkbox" id="md_checkbox_26" class=" name filled-in chk-col-red" value="fourth"  /><label for="md_checkbox_26">Fourth Semester</label>
                  
                  <input name="teacher" type="checkbox" id="md_checkbox_27" class=" name filled-in chk-col-red" value="fifth"  /><label for="md_checkbox_27">Fifth Semester</label>
                  
                  <input name="teacher" type="checkbox" id="md_checkbox_28" class=" name filled-in chk-col-red" value="six"  /><label for="md_checkbox_28">Sixth Semester</label>
                  
                  <input name="teacher" type="checkbox" id="md_checkbox_29" class=" name filled-in chk-col-red" value="seven"  /><label for="md_checkbox_29">Seventh Semester</label>
                  
                  <input name="teacher" type="checkbox" id="md_checkbox_30" class=" name filled-in chk-col-red" value="eight"  /><label for="md_checkbox_30">Eightth Semester</label>
                  
                  <input name="teacher" type="checkbox" id="md_checkbox_31" class=" name filled-in chk-col-red" value="total"  /><label for="md_checkbox_31">Total CGPA</label>
                  
                   <br>
                  <button class="btn btn-danger " id="searchdata" type="button">Search</button>
			</div>
			<div id="res1" style="margin-top: 30px; overflow-x: scroll"></div>
<script>
	$(function() {
		$('#searchdata').click(function() {
			var gpa = [];
			$.each($("input[name='teacher']:checked"), function(){            
                gpa.push($(this).val());
            });
			if(gpa.length < 1) {
				document.getElementById("res1").innerHTML = 
					"<div class='alert alert-danger'><i class='material-icons'>cancel</i>&nbsp;&nbsp; Error: Please Select the Column name & than try Search</div>";
			} else {
				$.ajax({
					url: 'customsearchcgpa.php',
					type: 'POST',
					data: {
						gpa: gpa
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

<?php  
    include 'includes/footer.php';
?>