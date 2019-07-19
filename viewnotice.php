<?php
include 'config/db.php';
$id = $_POST['id'];
$query = mysqli_query($conn, "SELECT * FROM notice WHERE id = '$id'");
$row = mysqli_fetch_array($query);
?>
<div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
        <div class="panel-group" id="accordion_9" role="tablist" aria-multiselectable="true">
          <div class="panel panel-col-pink">
            <div class="panel-heading" role="tab" id="headingOne_9">
              <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion_9" href="#collapseOne_9" aria-expanded="true" aria-controls="collapseOne_9">
                   Notice From <?php echo $row['name'];?>
				</a>
			</h4>
		   </div>
		   <div id="collapseOne_9" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_9">
			 <div class="panel-body">
				<h5>Poster Name: <?php echo $row['name'];?></h5>
				<h5>Poster Username: <?php echo $row['username'];?></h5>
				<h5>Posing Date: <?php echo $row['dates'];?></h5>
				<h5>Posing Title: <?php echo $row['title'];?></h5>
				<p><b>Post: </b><br> <?php echo $row['post'];?></p>
			 </div>
		   </div>
	     </div>
        </div>
       </div> 