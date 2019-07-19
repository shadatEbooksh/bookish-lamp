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
                                Import Student Data
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



                                            <div id="collapseOne_17" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_17">
                                                <div class="panel-body">
        <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
        <div class="panel-group" id="accordion_9" role="tablist" aria-multiselectable="true">
          <div class="panel panel-col-pink">
            <div class="panel-heading" role="tab" id="headingOne_9">
              <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion_9" href="#collapseOne_9" aria-expanded="true" aria-controls="collapseOne_9">
                   Import all student data From EXCEL || CSV File
				</a>
			</h4>
		   </div>
		   <div id="collapseOne_9" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_9">
			 <div class="panel-body">
				In this Section You can add All of your Student Data together, Think You have four department like - Computer, Electrical, Electronics & Civil. In this Section You can Add All of this Department Student Data together. For Importing Student Data , You have to ensure that the column of EXCEL file must be the same of the download file system. You can use this download file to upload the data . For this first you have to download the demo file whickh is given below,  then Insert data into this EXCEL file then Upload this file into that upload Field. <span class="text-danger">if you change the column format then data will be not uploaded</span>
				<br>    
				<a download href="demo-student-file.xlsx" style="text-decoration: none;">Download Student Demo Excel File</a>
				
				<div class="col-sm-12" style="margin-top: 20px;" >
                  <form mehtod="post" id="export_excel12">  
                    <label>Select Excel</label>  
                    <input type="file" name="excel_file12" id="excel_file12" />  
                  </form>  
                  <div id="result12" style="overflow-x:scroll; margin-top: 30px;"></div> 
                </div>
                
                
			 </div>
		   </div>
	     </div>
        </div>
       </div> 
      
<!--
                                                    <div class="body bg-red">
                                                        Please ensure that Our System can Only takes .xlsx file. No ther file can be harmful for the system. Here You Have to decorate the excel file as 
                                                         <a href="demo-student-file.xlsx" download>Click Here to download Demo</a>
                                                    </div>
                                                    <div class="col-sm-12" >
                   <form mehtod="post" id="export_excel12">  
                    <label>Select Excel</label>  
                    <input type="file" name="excel_file12" id="excel_file12" />  
                  </form>  
                  <div id="result12"></div> 
                </div>
-->
                            </div>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript">
      
    
$(document).ready(function(){  
      $('#excel_file12').change(function(){  
           $('#export_excel12').submit();  
      });  
      $('#export_excel12').on('submit', function(event){  
           event.preventDefault();  
           $.ajax({  
                url:"import12.php",  
                method:"POST",  
                data:new FormData(this),  
                contentType:false,  
                processData:false,  
                success:function(data){  
                     $('#result12').html(data);  
                     $('#excel_file12').val('');  
                     console.log(data);
                }  
           });  
      });  
 });  

</script>
<?php  
    include 'includes/footer.php';
?>