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
                                Import Department Data
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
                   Import Department Data From EXCEL || CSV File
				</a>
			</h4>
		   </div>
		   <div id="collapseOne_9" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_9">
			 <div class="panel-body">
				For Importing Department Data , You have to ensure that the column of EXCEL file must be the same of the download file system. You can yse this download file to upload the data . For this first you have to download the demo file whickh is given below,  then Insert data into this EXCEL file then Upload this file into that upload Field. <span class="text-danger">You you change the column format then data will be not uploaded</span>
				<br>    
				<a download href="import-dept-data.xlsx" style="text-decoration: none;">Download Department Demo Excel File</a>
				
				<div class="col-sm-12" style="margin-top: 20px;" >
                  <form mehtod="post" id="export_excel">  
                    <label>Select Excel</label>  
                    <input type="file" name="excel_file" id="excel_file" />  
                  </form>  
                  <div id="result" style="margin-top: 30px; overflow-x:scroll;"></div>
                </div>
                
                
			 </div>
		   </div>
	     </div>
        </div>
       </div> 
                                                   <!--
                                                    <div class="body bg-red">
                                                        Please ensure that Our System can Only takes .xlsx file. No ther file can be harmful for the system. Here You Have to decorate the excel file as 
                                                        <table class="table table-bordered">
                                                            <tr>
                                                                
                                                                <th>Curriculam Code</th>
                                                                <th>Technology Name</th>
                                                                <th>Technology Code</th>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <div class="col-sm-12" >
                   <form mehtod="post" id="export_excel">  
                    <label>Select Excel</label>  
                    <input type="file" name="excel_file" id="excel_file" />  
                  </form>  
                  <div id="result"></div> 
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
<script>
   $(document).ready(function(){  
      $('#excel_file').change(function(){  
           $('#export_excel').submit();  
      });  
      $('#export_excel').on('submit', function(event){  
           event.preventDefault();  
           $.ajax({  
                url:"import.php",  
                method:"POST",  
                data:new FormData(this),  
                contentType:false,  
                processData:false,  
                success:function(data){  
                     $('#result').html(data);  
                     $('#excel_file').val('');  
                }  
           });  
      });  
 });  

</script>
<?php  
    include 'includes/footer.php';
?>