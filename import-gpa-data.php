<?php  
    include 'includes/header.php';
?>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Import Data</h2>
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
                                Import GPA Data
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
                                    <div class="panel-group" id="accordion_4" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-danger">
                                            <div class="panel-heading" role="tab" id="headingOne_4">
                                                <h4 class="panel-title">
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion_4" href="#collapseOne_4" aria-expanded="true" aria-controls="collapseOne_4">
                                                        Import GPA Data <b>First Semester</b> From EXCEL || CSV File
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne_4" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_4">
                                                <div class="panel-body">
                                                    For Importing First Semester Student Data, You can add all of Your Student data together of all Department. Think you have 20 Student in computer Department( You can add other department also), For this You can download this Excel file which is given below and Insert all Student GPA then Seave this file and upload into below field. <span class="text-danger"> If you Didn't Insert Your Student Institute Roll & board Roll Correctly, then our system is throw an error. </span>
													<br>    
													<a download href="gpa-1.xlsx" style="text-decoration: none;">Download First Semester GPA Demo Excel File</a>

													<div class="col-sm-12" style="margin-top: 20px;" >
													  <form mehtod="post" id="export_excelf">  
														<label>Select Excel</label>  
														<input type="file" name="excel_filef" id="excel_filef" />  
													  </form>  
													  <div id="resultf" style="margin-top: 30px; overflow-x:scroll;"></div>
													</div>
                
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-danger">
                                            <div class="panel-heading" role="tab" id="headingTwo_4">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_4" href="#collapseTwo_4" aria-expanded="false"
                                                       aria-controls="collapseTwo_4">
                                                        Import GPA Data <b>Second Semester</b> From EXCEL || CSV File
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo_4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_4">
                                                <div class="panel-body">
                                                     For Importing Second Semester Student Data, You can add all of Your Student data together of all Department. Think you have 20 Student in computer Department( You can add other department also), For this You can download this Excel file which is given below and Insert all Student GPA then Seave this file and upload into below field. <span class="text-danger"> If you Didn't Insert Your Student Institute Roll & board Roll Correctly, then our system is throw an error. </span>
													<br>    
													<a download href="gpa-2.xlsx" style="text-decoration: none;">Download Second Semester GPA Demo Excel File</a>

													<div class="col-sm-12" style="margin-top: 20px;" >
													  <form mehtod="post" id="export_excels">  
														<label>Select Excel</label>  
														<input type="file" name="excel_files" id="excel_files" />  
													  </form>  
													  <div id="results" style="margin-top: 30px; overflow-x:scroll;"></div>
													</div>
                                
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-danger">
                                            <div class="panel-heading" role="tab" id="headingThree_4">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_4" href="#collapseThree_4" aria-expanded="false"
                                                       aria-controls="collapseThree_4">
                                                        Import GPA Data <b>Third Semester</b> From EXCEL || CSV File
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree_4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_4">
                                                <div class="panel-body">
                                                    For Importing Third Semester Student Data, You can add all of Your Student data together of all Department. Think you have 20 Student in computer Department( You can add other department also), For this You can download this Excel file which is given below and Insert all Student GPA then Seave this file and upload into below field. <span class="text-danger"> If you Didn't Insert Your Student Institute Roll & board Roll Correctly, then our system is throw an error. </span>
													<br>    
													<a download href="gpa-3.xlsx" style="text-decoration: none;">Download Third Semester GPA Demo Excel File</a>

													<div class="col-sm-12" style="margin-top: 20px;" >
													  <form mehtod="post" id="export_excelt">  
														<label>Select Excel</label>  
														<input type="file" name="excel_filet" id="excel_filet" />  
													  </form>  
													  <div id="resultt" style="margin-top: 30px; overflow-x:scroll;"></div>
													</div>
                                
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="panel panel-danger">
                                            <div class="panel-heading" role="tab" id="headingFour_4">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_4" href="#collapseFour_4" aria-expanded="false"
                                                       aria-controls="collapseFour_4">
                                                        Import GPA Data <b>Fourth Semester</b> From EXCEL || CSV File
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseFour_4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour_4">
                                                <div class="panel-body">
                                                    For Importing Four Semester Student Data, You can add all of Your Student data together of all Department. Think you have 20 Student in computer Department( You can add other department also), For this You can download this Excel file which is given below and Insert all Student GPA then Seave this file and upload into below field. <span class="text-danger"> If you Didn't Insert Your Student Institute Roll & board Roll Correctly, then our system is throw an error. </span>
													<br>    
													<a download href="gpa-4.xlsx" style="text-decoration: none;">Download Fourth Semester GPA Demo Excel File</a>

													<div class="col-sm-12" style="margin-top: 20px;" >
													  <form mehtod="post" id="export_excelfo">  
														<label>Select Excel</label>  
														<input type="file" name="excel_filefo" id="excel_filefo" />  
													  </form>  
													  <div id="resultfo" style="margin-top: 30px; overflow-x:scroll;"></div>
													</div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="panel panel-danger">
                                            <div class="panel-heading" role="tab" id="headingFive_4">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_4" href="#collapseFive_4" aria-expanded="false"
                                                       aria-controls="collapseFive_4">
                                                        Import GPA Data <b>Fifth Semester</b> From EXCEL || CSV File
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseFive_4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive_4">
                                                <div class="panel-body">
                                                    For Importing Five Semester Student Data, You can add all of Your Student data together of all Department. Think you have 20 Student in computer Department( You can add other department also), For this You can download this Excel file which is given below and Insert all Student GPA then Seave this file and upload into below field. <span class="text-danger"> If you Didn't Insert Your Student Institute Roll & board Roll Correctly, then our system is throw an error. </span>
													<br>    
													<a download href="gpa-5.xlsx" style="text-decoration: none;">Download Fifth Semester GPA Demo Excel File</a>

													<div class="col-sm-12" style="margin-top: 20px;" >
													  <form mehtod="post" id="export_excelfi">  
														<label>Select Excel</label>  
														<input type="file" name="excel_filefi" id="excel_filefi" />  
													  </form>  
													  <div id="resultfi" style="margin-top: 30px; overflow-x:scroll;"></div>
													</div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="panel panel-danger">
                                            <div class="panel-heading" role="tab" id="headingSix_4">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_4" href="#collapseSix_4" aria-expanded="false"
                                                       aria-controls="collapseFour_4">
                                                        Import GPA Data <b>Six Semester</b> From EXCEL || CSV File
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseSix_4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix_4">
                                                <div class="panel-body">
                                                    For Importing Six Semester Student Data, You can add all of Your Student data together of all Department. Think you have 20 Student in computer Department( You can add other department also), For this You can download this Excel file which is given below and Insert all Student GPA then Seave this file and upload into below field. <span class="text-danger"> If you Didn't Insert Your Student Institute Roll & board Roll Correctly, then our system is throw an error. </span>
													<br>    
													<a download href="gpa-6.xlsx" style="text-decoration: none;">Download Six Semester GPA Demo Excel File</a>

													<div class="col-sm-12" style="margin-top: 20px;" >
													  <form mehtod="post" id="export_excelsi">  
														<label>Select Excel</label>  
														<input type="file" name="excel_filesi" id="excel_filesi" />  
													  </form>  
													  <div id="resultsi" style="margin-top: 30px; overflow-x:scroll;"></div>
													</div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="panel panel-danger">
                                            <div class="panel-heading" role="tab" id="headingSeven_4">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_4" href="#collapseSeven_4" aria-expanded="false"
                                                       aria-controls="collapseFour_4">
                                                        Import GPA Data <b>Seven Semester</b> From EXCEL || CSV File
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseSeven_4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven_4">
                                                <div class="panel-body">
                                                    For Importing Seven Semester Student Data, You can add all of Your Student data together of all Department. Think you have 20 Student in computer Department( You can add other department also), For this You can download this Excel file which is given below and Insert all Student GPA then Seave this file and upload into below field. <span class="text-danger"> If you Didn't Insert Your Student Institute Roll & board Roll Correctly, then our system is throw an error. </span>
													<br>    
													<a download href="gpa-7.xlsx" style="text-decoration: none;">Download Seven Semester GPA Demo Excel File</a>

													<div class="col-sm-12" style="margin-top: 20px;" >
													  <form mehtod="post" id="export_excelse">  
														<label>Select Excel</label>  
														<input type="file" name="excel_filese" id="excel_filese" />  
													  </form>  
													  <div id="resultse" style="margin-top: 30px; overflow-x:scroll;"></div>
													</div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="panel panel-danger">
                                            <div class="panel-heading" role="tab" id="headingEight_4">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_4" href="#collapseEight_4" aria-expanded="false"
                                                       aria-controls="collapseFour_4">
                                                        Import GPA Data <b>Eight Semester</b> From EXCEL || CSV File
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseEight_4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight_4">
                                                <div class="panel-body">
                                                    For Importing Eight Semester Student Data, You can add all of Your Student data together of all Department. Think you have 20 Student in computer Department( You can add other department also), For this You can download this Excel file which is given below and Insert all Student GPA then Seave this file and upload into below field. <span class="text-danger"> If you Didn't Insert Your Student Institute Roll & board Roll Correctly, then our system is throw an error. </span>
													<br>    
													<a download href="gpa-8.xlsx" style="text-decoration: none;">Download Eight Semester GPA Demo Excel File</a>

													<div class="col-sm-12" style="margin-top: 20px;" >
													  <form mehtod="post" id="export_excele">  
														<label>Select Excel</label>  
														<input type="file" name="excel_filee" id="excel_filee" />  
													  </form>  
													  <div id="resulte" style="margin-top: 30px; overflow-x:scroll;"></div>
													</div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="panel panel-danger">
                                            <div class="panel-heading" role="tab" id="headingNine_4">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_4" href="#collapseNine_4" aria-expanded="false"
                                                       aria-controls="collapseFour_4">
                                                        Import GPA Data <b>All Semester</b> From EXCEL || CSV File
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseNine_4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine_4">
                                                <div class="panel-body">
                                                    For Importing All Semester Student Data, You can add all of Your Student data together of all Department. Think you have 20 Student in computer Department( You can add other department also), For this You can download this Excel file which is given below and Insert all Student GPA then Seave this file and upload into below field. <span class="text-danger"> If you Didn't Insert Your Student Institute Roll & board Roll Correctly, then our system is throw an error. </span>
                                                    <br>    
                                                    <a download href="gpa-all.xlsx" style="text-decoration: none;">Download All Semester GPA Demo Excel File</a>

                                                    <div class="col-sm-12" style="margin-top: 20px;" >
                                                      <form mehtod="post" id="export_excela">  
                                                        <label>Select Excel</label>  
                                                        <input type="file" name="excel_filea" id="excel_filea" />  
                                                      </form>  
                                                      <div id="resulta" style="margin-top: 30px; overflow-x:scroll;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
								</div>
								</div>
  					         </div>
		  				
		  			</div>
		  		</div>
		  	</div>
		</div>
    </section>
<script>
	$(document).ready(function(){  
		  $('#excel_filef').change(function(){  
			   $('#export_excelf').submit();  
		  });  
		  $('#export_excelf').on('submit', function(event){  
			   event.preventDefault();  
			   $.ajax({  
					url:"gpa/importf.php",  
					method:"POST",  
					data:new FormData(this),  
					contentType:false,  
					processData:false,  
					success:function(data){  
						 $('#resultf').html(data);  
						 $('#excel_filef').val('');  
					}  
			   });  
		  });  
		
		$('#excel_files').change(function(){  
			   $('#export_excels').submit(); 
		});  
		$('#export_excels').on('submit', function(event){  
			   event.preventDefault();  
			   $.ajax({  
					url:"gpa/importf.php",  
					method:"POST",  
					data:new FormData(this),  
					contentType:false,  
					processData:false,  
					success:function(data){  
						 $('#results').html(data);  
						 $('#excel_files').val('');  
					}  
			   });  
	  	   });  
		
		$('#excel_filet').change(function(){  
			   $('#export_excelt').submit(); 
		});  
		$('#export_excelt').on('submit', function(event){  
			   event.preventDefault();  
			   $.ajax({  
					url:"gpa/importf.php",  
					method:"POST",  
					data:new FormData(this),  
					contentType:false,  
					processData:false,  
					success:function(data){  
						 $('#resultt').html(data);  
						 $('#excel_filet').val('');  
					}  
			   });  
	  	   });  
		
		$('#excel_filefo').change(function(){  
			   $('#export_excelfo').submit(); 
		});  
		$('#export_excelfo').on('submit', function(event){  
			   event.preventDefault();  
			   $.ajax({  
					url:"gpa/importf.php",  
					method:"POST",  
					data:new FormData(this),  
					contentType:false,  
					processData:false,  
					success:function(data){  
						 $('#resultfo').html(data);  
						 $('#excel_filefo').val('');  
					}  
			   });  
	  	   });  
		$('#excel_filefi').change(function(){  
			   $('#export_excelfi').submit(); 
		});  
		$('#export_excelfi').on('submit', function(event){  
			   event.preventDefault();  
			   $.ajax({  
					url:"gpa/importf.php",  
					method:"POST",  
					data:new FormData(this),  
					contentType:false,  
					processData:false,  
					success:function(data){  
						 $('#resultfi').html(data);  
						 $('#excel_filefi').val('');  
					}  
			   });  
	  	   });  
		
		$('#excel_filesi').change(function(){  
			   $('#export_excelsi').submit(); 
		});  
		$('#export_excelsi').on('submit', function(event){  
			   event.preventDefault();  
			   $.ajax({  
					url:"gpa/importf.php",  
					method:"POST",  
					data:new FormData(this),  
					contentType:false,  
					processData:false,  
					success:function(data){  
						 $('#resultsi').html(data);  
						 $('#excel_filesi').val('');  
					}  
			   });  
	  	   });  
		
		$('#excel_filese').change(function(){  
			   $('#export_excelse').submit(); 
		});  
		$('#export_excelse').on('submit', function(event){  
			   event.preventDefault();  
			   $.ajax({  
					url:"gpa/importf.php",  
					method:"POST",  
					data:new FormData(this),  
					contentType:false,  
					processData:false,  
					success:function(data){  
						 $('#resultse').html(data);  
						 $('#excel_filese').val('');  
					}  
			   });  
	  	   }); 
		
		$('#excel_filee').change(function(){  
			   $('#export_excele').submit(); 
		});  
		$('#export_excele').on('submit', function(event){  
			   event.preventDefault();  
			   $.ajax({  
					url:"gpa/importf.php",  
					method:"POST",  
					data:new FormData(this),  
					contentType:false,  
					processData:false,  
					success:function(data){  
						 $('#resulte').html(data);  
						 $('#excel_filee').val('');  
					}  
			   });  
	  	   });  
	    
        $('#excel_filea').change(function(){  
               $('#export_excela').submit(); 
        });  
        $('#export_excela').on('submit', function(event){  
               event.preventDefault();  
               $.ajax({  
                    url:"gpa/importf.php",  
                    method:"POST",  
                    data:new FormData(this),  
                    contentType:false,  
                    processData:false,  
                    success:function(data){  
                         $('#resulta').html(data);  
                         $('#excel_filea').val('');  
                    }  
               });  
           });  
        
	 }); 
</script>
<?php  
    include 'includes/footer.php';
?>