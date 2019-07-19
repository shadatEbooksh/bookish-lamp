<?php  
  include '../config/db.php';
  $iroll = base64_decode($_GET['industrialrollingobjectlongestlives']);
  $broll = base64_decode($_GET['businessrollingobjectlongestlives']);
  $query = mysqli_query($conn, "SELECT * FROM student WHERE iroll = '$iroll' AND broll='$broll'");
  $row = mysqli_fetch_array($query);
  $ayear = $row['ayear'];
  if ($ayear < 2016) {
    $f = 15;
    $e = 10;
  } else {
     $f = 10;
    $e = 15;
  }
?>
<script>
  window.print();
</script>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SMS | STUDENT CGPA</title>
	<link rel="stylesheet" href="bootstrap2.css">
    <link rel="icon" href="../1.ico" type="image/x-icon">
	<style>
	@import url(http://fonts.googleapis.com/css?family=Bree+Serif);
	body, h1, h2, h3, h4, h5, h6{
		font-family: 'Bree Serif', serif;
	}
  .footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  text-align: center;
}
	</style>
</head>
<body>

	<div class="container">

		<div class="row" style="margin-top: 30px;">
			<div class="col-xs-6">
			    <img style="width: 100px;" src="../1.ico" alt="">
			</div>
			<div class="col-xs-6 text-right">
			  SADIK KHAN <br>
        Manik Mia Road, Talaimary, Rajshahi <br>
        (880) 1880-756157 <br>
        <a href="mailto:sadik.cse15@gmail.com">sadik.cse15@gmail.com</a>
			</div>
		</div>

		  <div class="row" style="margin-top: 30px;">
		    <div class="col-xs-5">
		      <div class="panel panel-default">
		              <div class="panel-heading">
		                <h4>STUDENT INFORMATION</h4>
		              </div>
		              <div class="panel-body">
		                <div style="text-align: left; float: left;">Student Phone </div>
          <div style="text-align: right"><b><?php echo $row['phone']; ?></b></div>
          <div style="text-align: left; float: left;">Father Name</div>
          <div style="text-align: right;"><b><?php echo $row['fname']; ?></b></div>
          <div style="text-align: left; float: left;">Mother Name </div>
          <div style="text-align: right"><b><?php echo $row['mname']; ?></b></div>
          <div style="text-align: left; float: left;">Guardian Name</div>
          <div style="text-align: right;"><b><?php echo $row['gname']; ?></b></div>
          <div style="text-align: left; float: left;">Guardian Phone Phone </div>
          <div style="text-align: right"><b><?php echo $row['gphone']; ?></b></div>
          <div style="text-align: left; float: left;">Address </div>
          <div style="text-align: right;"><b><?php echo $row['address']; ?></b></div>
          <div style="text-align: left; float: left;">Email </div>
          <div style="text-align: right;"><b><a href="mailto:<?php echo $row['email']; ?>"></a><?php echo $row['email']; ?></b></div>
		              </div>
		            </div>
		    </div>
		    <div class="col-xs-5 col-xs-offset-2 text-right">
		      <div class="panel panel-default">
		              <div class="panel-heading">
		                <h4>INSTITUTE INFORMATION</h4>
		              </div>
		              <div class="panel-body">
		                <div style="text-align: left; float: left;">Department</div>
          <div style="text-align: right"><b><?php echo $row['tname']; ?></b></div>
          <div style="text-align: left; float: left;">Curiculam Code</div>
          <div style="text-align: right;"><b><?php echo $row['ccode']; ?></b></div>
          <div style="text-align: left; float: left;">Department Code </div>
          <div style="text-align: right"><b><?php echo $row['tcode']; ?></b></div>
          <div style="text-align: left; float: left;">Institute Roll</div>
          <div style="text-align: right;"><b><?php echo $row['iroll']; ?></b></div>
          <div style="text-align: left; float: left;">Board Roll </div>
          <div style="text-align: right"><b><?php echo $row['broll']; ?></b></div>
          <div style="text-align: left; float: left;">Registration Roll </div>
          <div style="text-align: right;"><b><?php echo $row['rroll']; ?></b></div>
          <div style="text-align: left; float: left;">Session </div>
          <div style="text-align: right;"><b><?php echo $row['ayear'] ?> - <?php echo $row['pyear']; ?></div>
		              </div>
		            </div>
		    </div>
		  </div> <!-- / end client details section -->

		  <div class="col-md-8 col-md-offset-2">
      <table style="margin-top: 30px; margin-bottom: 50px;" class="table table-bordered">
        <thead>
          <tr>
            <th class="text-center"><h4>Semester</h4></th>
            <th class="text-center"><h4>GPA</h4></th>
            <th class="text-right"><h4>Average Point</h4></th>
          </tr>
        </thead>
        <tbody>
          <?php  
            $a = mysqli_query($conn, "SELECT * FROM cgpa WHERE iroll = '$iroll' AND broll = '$broll'");
            $row1 = mysqli_fetch_array($a);
          ?>
          <tr>
            <td class="text-center">First</td>
            <td class="text-center"><?php echo $row1['first']; ?> out of 4</td>
            <td class="text-right">
              <?php 
                  echo ($row1['first'] * 5)/100;
               ?>
            </td>
          </tr>
          <tr>
            <td class="text-center">Second</td>
            <td class="text-center"><?php echo $row1['second']; ?> out of 4</td>
            <td class="text-right">
              <?php 
                  echo ($row1['second'] * 5)/100;
               ?>
            </td>
          </tr>
          <tr>
            <td class="text-center">Third</td>
            <td class="text-center"><?php echo $row1['third']; ?> out of 4</td>
            <td class="text-right">
              <?php 
                  echo ($row1['third'] * 5)/100;
               ?>
            </td>
          </tr>
          <tr>
            <td class="text-center">Fourth</td>
            <td class="text-center"><?php echo $row1['fourth']; ?> out of 4</td>
            <td class="text-right">
              <?php 
                  echo ($row1['fourth'] * $f)/100;
               ?>
            </td>
          </tr>
          <tr>
            <td class="text-center">Fifth</td>
            <td class="text-center"><?php echo $row1['fifth']; ?> out of 4</td>
            <td class="text-right">
              <?php 
                  echo ($row1['fifth'] * 5)/100;
               ?>
            </td>
          </tr>
          <tr>
            <td class="text-center">Sixth</td>
            <td class="text-center"><?php echo $row1['six']; ?> out of 4</td>
            <td class="text-right">
              <?php 
                  echo ($row1['six'] * 5)/100;
               ?>
            </td>
          </tr>
          <tr>
            <td class="text-center">Seventh</td>
            <td class="text-center"><?php echo $row1['seven']; ?> out of 4</td>
            <td class="text-right">
              <?php 
                  echo ($row1['seven'] * 5)/100;
               ?>
            </td>
          </tr>
          <tr>
            <td class="text-center">Eight</td>
            <td class="text-center"><?php echo $row1['eight']; ?> out of 4</td>
            <td class="text-right">
              <?php 
                  echo ($row1['eight'] * $e)/100;
               ?>
            </td>
          </tr>
          <tr>
            <td></td>
            <th class="text-center">Total CGPA</th>
            <th class="text-right"><?php echo $row1['total']; ?></th>
          </tr>
        </tbody>
      </table>  
      </div>
      <footer class="footer" style="bottom: 0;">
        <p>&copy; <?php echo date("Y"); ?> All right reserve by <a href="sadik.cse15@gmail.com">Sadik</a> . A fantasy group Marchendise. Develop by - <a href="#">Team Toygers</a>. Powered By - <a href="#">Chittagong Polytechnic Institute</a></p>
      </footer>
	</div>
  
</body>
</html>
