<?php  
 include '../config/db.php';
 $connect = $conn;
// validation input file
function validate($data) {
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    // $data = mysqli_real_escape_string($conn,$data);
    return $data;
}
 if(!empty($_FILES["excel_filef"]))  
 {  
      $file_array = explode(".", $_FILES["excel_filef"]["name"]);  
      if($file_array[1] == "csv" OR $file_array[1] == "xlsx")  
      {  
           include("../PHPExcel/IOFactory.php");  
           $output = '';  
           $output .= "  
                <table class='table table-bordered'>  
                     <tr>  
                          <th> Institute Roll</th>  
                          <th> Board Roll</th>  
                          <th> GPA</th>  
                     </tr>  
                     ";  
           $object = PHPExcel_IOFactory::load($_FILES["excel_filef"]["tmp_name"]);  
           foreach($object->getWorksheetIterator() as $worksheet)  
           {  
                $highestRow = $worksheet->getHighestRow();  
                for($row=2; $row<=$highestRow; $row++)  
                {  
                  $iroll = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(0, $row)->getValue());  
                  $broll = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(1, $row)->getValue());  
                  $gpa = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(2, $row)->getValue());  
					
				$iroll = validate($iroll);
				$broll = validate($broll);
				$gpa = validate($gpa);
					if($iroll == "" || $broll == "" || $gpa == "" ) {
						echo '
		<div class="alert alert-danger"><i class="material-icons">cancel</i>&nbsp;&nbsp; Error: EXCEL file has empty cell in row '.$row.' & this is agains the rule. Please first Insert data into Excel file , Then Try.</div>

						';
					} else {
						$checkroll = mysqli_query($conn, "SELECT * FROM cgpa WHERE iroll = '$iroll' AND broll= '$broll'");
						if(!mysqli_num_rows($checkroll) > 0) {
							echo '
		<div class="alert alert-danger"><i class="material-icons">cancel</i>&nbsp;&nbsp; Error:  Row '.$row.' has Institute roll - '.$iroll.' & board roll - '.$broll.', But we could not found this match to our system. Please Verify this again.</div>
						';
						} else {
							$grant = ($gpa * 5) / 100;
							echo '
		<div class="alert alert-success"><i class="material-icons">cancel</i>&nbsp;&nbsp; Success:  Row '.$row.' is Successfully Inserted in our database System.</div>
						';
							$query = "UPDATE cgpa SET first = '$gpa', total = '$grant' WHERE iroll = '$iroll' AND broll = '$broll'";
							mysqli_query($connect, $query);
							$output .= '  
							 <tr>  
							  <td>'.$iroll.'</td>  
							  <td>'.$broll.'</td>  
							  <td>'.$gpa.'</td>  
							 </tr>  
							 ';  
						}
					}
                     
                }  
           }  
           $output .= '</table>';  
           echo $output;  
      }  
      else  
      {  
           echo '<label class="text-danger">Invalid File</label>';  
      }  
 }  

if(!empty($_FILES["excel_files"]))  {
	$file_array = explode(".", $_FILES["excel_files"]["name"]);  
      if($file_array[1] == "csv" OR $file_array[1] == "xlsx")  
      {  
           include("../PHPExcel/IOFactory.php");  
           $output = '';  
           $output .= "  
                <table class='table table-bordered'>  
                     <tr>  
                          <th> Institute Roll</th>  
                          <th> Board Roll</th>  
                          <th> GPA</th>  
                     </tr>  
                     ";  
           $object = PHPExcel_IOFactory::load($_FILES["excel_files"]["tmp_name"]);  
           foreach($object->getWorksheetIterator() as $worksheet)  
           {  
                $highestRow = $worksheet->getHighestRow();  
                for($row=2; $row<=$highestRow; $row++)  
                {  
                  $iroll = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(0, $row)->getValue());  
                  $broll = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(1, $row)->getValue());  
                  $gpa = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(2, $row)->getValue());  
					
				$iroll = validate($iroll);
				$broll = validate($broll);
				$gpa = validate($gpa);
					if($iroll == "" || $broll == "" || $gpa == "" ) {
						echo '
		<div class="alert alert-danger"><i class="material-icons">cancel</i>&nbsp;&nbsp; Error: EXCEL file has empty cell in row '.$row.' & this is agains the rule. Please first Insert data into Excel file , Then Try.</div>

						';
					} else {
						$checkroll = mysqli_query($conn, "SELECT * FROM cgpa WHERE iroll = '$iroll' AND broll= '$broll'");
						if(!mysqli_num_rows($checkroll) > 0) {
							echo '
		<div class="alert alert-danger"><i class="material-icons">cancel</i>&nbsp;&nbsp; Error:  Row '.$row.' has Institute roll - '.$iroll.' & board roll - '.$broll.', But we could not found this match to our system. Please Verify this again.</div>
						';
						} else {
							$data = mysqli_fetch_array($checkroll);
							$first = $data['first'];
              $firstgrant = ($first * 5) / 100;
							$grant = ($gpa * 5) / 100;
							$total = $firstgrant + $grant;
							echo '
		<div class="alert alert-success"><i class="material-icons">cancel</i>&nbsp;&nbsp; Success:  Row '.$row.' is Successfully Inserted in our database System.</div>
						';
							$query = "UPDATE cgpa SET second = '$gpa', total = '$total' WHERE iroll = '$iroll' AND broll = '$broll'";
							mysqli_query($connect, $query);
							$output .= '  
							 <tr>  
							  <td>'.$iroll.'</td>  
							  <td>'.$broll.'</td>  
							  <td>'.$gpa.'</td>  
							 </tr>  
							 ';  
						}
					}
                     
                }  
           }  
           $output .= '</table>';  
           echo $output;  
      }  
      else  
      {  
           echo '<label class="text-danger">Invalid File</label>';  
      }  
}
if(!empty($_FILES["excel_filet"]))  {
	$file_array = explode(".", $_FILES["excel_filet"]["name"]);  
      if($file_array[1] == "csv" OR $file_array[1] == "xlsx")  
      {  
           include("../PHPExcel/IOFactory.php");  
           $output = '';  
           $output .= "  
                <table class='table table-bordered'>  
                     <tr>  
                          <th> Institute Roll</th>  
                          <th> Board Roll</th>  
                          <th> GPA</th>  
                     </tr>  
                     ";  
           $object = PHPExcel_IOFactory::load($_FILES["excel_filet"]["tmp_name"]);  
           foreach($object->getWorksheetIterator() as $worksheet)  
           {  
                $highestRow = $worksheet->getHighestRow();  
                for($row=2; $row<=$highestRow; $row++)  
                {  
                  $iroll = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(0, $row)->getValue());  
                  $broll = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(1, $row)->getValue());  
                  $gpa = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(2, $row)->getValue());  
					
				$iroll = validate($iroll);
				$broll = validate($broll);
				$gpa = validate($gpa);
					if($iroll == "" || $broll == "" || $gpa == "" ) {
						echo '
		<div class="alert alert-danger"><i class="material-icons">cancel</i>&nbsp;&nbsp; Error: EXCEL file has empty cell in row '.$row.' & this is agains the rule. Please first Insert data into Excel file , Then Try.</div>

						';
					} else {
						$checkroll = mysqli_query($conn, "SELECT * FROM cgpa WHERE iroll = '$iroll' AND broll= '$broll'");
						if(!mysqli_num_rows($checkroll) > 0) {
							echo '
		<div class="alert alert-danger"><i class="material-icons">cancel</i>&nbsp;&nbsp; Error:  Row '.$row.' has Institute roll - '.$iroll.' & board roll - '.$broll.', But we could not found this match to our system. Please Verify this again.</div>
						';
						} else {
							$data = mysqli_fetch_array($checkroll);
              $first = $data['first'];
              $firstgrant = ($first * 5) / 100;
							$second = $data['second'];
              $secondgrant = ($second * 5) / 100;

							$grant = ($gpa * 5) / 100;
							$total = $firstgrant + $secondgrant + $grant;
							echo '
		<div class="alert alert-success"><i class="material-icons">cancel</i>&nbsp;&nbsp; Success:  Row '.$row.' is Successfully Inserted in our database System.</div>
						';
							$query = "UPDATE cgpa SET third = '$gpa', total = '$total' WHERE iroll = '$iroll' AND broll = '$broll'";
							mysqli_query($connect, $query);
							$output .= '  
							 <tr>  
							  <td>'.$iroll.'</td>  
							  <td>'.$broll.'</td>  
							  <td>'.$gpa.'</td>  
							 </tr>  
							 ';  
						}
					}
                     
                }  
           }  
           $output .= '</table>';  
           echo $output;  
      }  
      else  
      {  
           echo '<label class="text-danger">Invalid File</label>';  
      }  
}

if(!empty($_FILES["excel_filefo"]))  {
	$file_array = explode(".", $_FILES["excel_filefo"]["name"]);  
      if($file_array[1] == "csv" OR $file_array[1] == "xlsx")  
      {  
           include("../PHPExcel/IOFactory.php");  
           $output = '';  
           $output .= "  
                <table class='table table-bordered'>  
                     <tr>  
                          <th> Institute Roll</th>  
                          <th> Board Roll</th>  
                          <th> GPA</th>  
                     </tr>  
                     ";  
           $object = PHPExcel_IOFactory::load($_FILES["excel_filefo"]["tmp_name"]);  
           foreach($object->getWorksheetIterator() as $worksheet)  
           {  
                $highestRow = $worksheet->getHighestRow();  
                for($row=2; $row<=$highestRow; $row++)  
                {  
                  $iroll = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(0, $row)->getValue());  
                  $broll = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(1, $row)->getValue());  
                  $gpa = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(2, $row)->getValue());  
					
				$iroll = validate($iroll);
				$broll = validate($broll);
				$gpa = validate($gpa);
					if($iroll == "" || $broll == "" || $gpa == "" ) {
						echo '
		<div class="alert alert-danger"><i class="material-icons">cancel</i>&nbsp;&nbsp; Error: EXCEL file has empty cell in row '.$row.' & this is agains the rule. Please first Insert data into Excel file , Then Try.</div>

						';
					} else {
						$checkroll = mysqli_query($conn, "SELECT * FROM cgpa WHERE iroll = '$iroll' AND broll= '$broll'");
						if(!mysqli_num_rows($checkroll) > 0) {
							echo '
		<div class="alert alert-danger"><i class="material-icons">cancel</i>&nbsp;&nbsp; Error:  Row '.$row.' has Institute roll - '.$iroll.' & board roll - '.$broll.', But we could not found this match to our system. Please Verify this again.</div>
						';
						} else {
							$data = mysqli_fetch_array($checkroll);
							$first = $data['first'];
              $firstgrant = ($first * 5) / 100;
              $second = $data['second'];
              $secondgrant = ($second * 5) / 100;
              $third = $data['third'];
              $thirdgrant = ($third * 5) / 100;

							$probidhan = $data['probidhan'];
							if($probidhan == "2010"){
								$div = 15;
							} else {
								$div = 10;
							}
							$grant = ($gpa * $div) / 100;
							$total = $firstgrant + $secondgrant + $thirdgrant + $grant;
							echo '
		<div class="alert alert-success"><i class="material-icons">cancel</i>&nbsp;&nbsp; Success:  Row '.$row.' is Successfully Inserted in our database System.</div>
						';
							$query = "UPDATE cgpa SET fourth = '$gpa', total = '$total' WHERE iroll = '$iroll' AND broll = '$broll'";
							mysqli_query($connect, $query);
							$output .= '  
							 <tr>  
							  <td>'.$iroll.'</td>  
							  <td>'.$broll.'</td>  
							  <td>'.$gpa.'</td>  
							 </tr>  
							 ';  
						}
					}
                     
                }  
           }  
           $output .= '</table>';  
           echo $output;  
      }  
      else  
      {  
           echo '<label class="text-danger">Invalid File</label>';  
      }  
}


if(!empty($_FILES["excel_filefi"]))  {
	$file_array = explode(".", $_FILES["excel_filefi"]["name"]);  
      if($file_array[1] == "csv" OR $file_array[1] == "xlsx")  
      {  
           include("../PHPExcel/IOFactory.php");  
           $output = '';  
           $output .= "  
                <table class='table table-bordered'>  
                     <tr>  
                          <th> Institute Roll</th>  
                          <th> Board Roll</th>  
                          <th> GPA</th>  
                     </tr>  
                     ";  
           $object = PHPExcel_IOFactory::load($_FILES["excel_filefi"]["tmp_name"]);  
           foreach($object->getWorksheetIterator() as $worksheet)  
           {  
                $highestRow = $worksheet->getHighestRow();  
                for($row=2; $row<=$highestRow; $row++)  
                {  
                  $iroll = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(0, $row)->getValue());  
                  $broll = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(1, $row)->getValue());  
                  $gpa = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(2, $row)->getValue());  
					
				$iroll = validate($iroll);
				$broll = validate($broll);
				$gpa = validate($gpa);
					if($iroll == "" || $broll == "" || $gpa == "" ) {
						echo '
		<div class="alert alert-danger"><i class="material-icons">cancel</i>&nbsp;&nbsp; Error: EXCEL file has empty cell in row '.$row.' & this is agains the rule. Please first Insert data into Excel file , Then Try.</div>

						';
					} else {
						$checkroll = mysqli_query($conn, "SELECT * FROM cgpa WHERE iroll = '$iroll' AND broll= '$broll'");
						if(!mysqli_num_rows($checkroll) > 0) {
							echo '
		<div class="alert alert-danger"><i class="material-icons">cancel</i>&nbsp;&nbsp; Error:  Row '.$row.' has Institute roll - '.$iroll.' & board roll - '.$broll.', But we could not found this match to our system. Please Verify this again.</div>
						';
						} else {
							$data = mysqli_fetch_array($checkroll);
							$first = $data['first'];
              $firstgrant = ($first * 5) / 100;
              $second = $data['second'];
              $secondgrant = ($second * 5) / 100;
              $third = $data['third'];
              $thirdgrant = ($third * 5) / 100;

              $probidhan = $data['probidhan'];
              if($probidhan == "2010") {
                $div = 15;
              } else {
                $div = 10;
              }

              $fourth = $data['fourth'];
              $fourthgrant = ($fourth * $div) / 100;

							$grant = ($gpa * 15) / 100;
							$total = $firstgrant + $secondgrant + $thirdgrant + $fourthgrant + $grant;
							echo '
		<div class="alert alert-success"><i class="material-icons">cancel</i>&nbsp;&nbsp; Success:  Row '.$row.' is Successfully Inserted in our database System.</div>
						';
							$query = "UPDATE cgpa SET fifth = '$gpa', total = '$total' WHERE iroll = '$iroll' AND broll = '$broll'";
							mysqli_query($connect, $query);
							$output .= '  
							 <tr>  
							  <td>'.$iroll.'</td>  
							  <td>'.$broll.'</td>  
							  <td>'.$gpa.'</td>  
							 </tr>  
							 ';  
						}
					}
                     
                }  
           }  
           $output .= '</table>';  
           echo $output;  
      }  
      else  
      {  
           echo '<label class="text-danger">Invalid File</label>';  
      }  
}


if(!empty($_FILES["excel_filesi"]))  {
	$file_array = explode(".", $_FILES["excel_filesi"]["name"]);  
      if($file_array[1] == "csv" OR $file_array[1] == "xlsx")  
      {  
           include("../PHPExcel/IOFactory.php");  
           $output = '';  
           $output .= "  
                <table class='table table-bordered'>  
                     <tr>  
                          <th> Institute Roll</th>  
                          <th> Board Roll</th>  
                          <th> GPA</th>  
                     </tr>  
                     ";  
           $object = PHPExcel_IOFactory::load($_FILES["excel_filesi"]["tmp_name"]);  
           foreach($object->getWorksheetIterator() as $worksheet)  
           {  
                $highestRow = $worksheet->getHighestRow();  
                for($row=2; $row<=$highestRow; $row++)  
                {  
                  $iroll = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(0, $row)->getValue());  
                  $broll = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(1, $row)->getValue());  
                  $gpa = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(2, $row)->getValue());  
					
				$iroll = validate($iroll);
				$broll = validate($broll);
				$gpa = validate($gpa);
					if($iroll == "" || $broll == "" || $gpa == "" ) {
						echo '
		<div class="alert alert-danger"><i class="material-icons">cancel</i>&nbsp;&nbsp; Error: EXCEL file has empty cell in row '.$row.' & this is agains the rule. Please first Insert data into Excel file , Then Try.</div>

						';
					} else {
						$checkroll = mysqli_query($conn, "SELECT * FROM cgpa WHERE iroll = '$iroll' AND broll= '$broll'");
						if(!mysqli_num_rows($checkroll) > 0) {
							echo '
		<div class="alert alert-danger"><i class="material-icons">cancel</i>&nbsp;&nbsp; Error:  Row '.$row.' has Institute roll - '.$iroll.' & board roll - '.$broll.', But we could not found this match to our system. Please Verify this again.</div>
						';
						} else {
							$data = mysqli_fetch_array($checkroll);
							
              $first = $data['first'];
              $firstgrant = ($first * 5) / 100;
              $second = $data['second'];
              $secondgrant = ($second * 5) / 100;
              $third = $data['third'];
              $thirdgrant = ($third * 5) / 100;

              $probidhan = $data['probidhan'];
              if($probidhan == "2010") {
                $div = 15;
              } else {
                $div = 10;
              }

              $fourth = $data['fourth'];
              $fourthgrant = ($fourth * $div) / 100;
              $fifth = $data['fifth'];
              $fifthgrant = ($fifth * 15) / 100;
							
							$grant = ($gpa * 20) / 100;
							$total = $firstgrant + $secondgrant + $thirdgrant + $fourthgrant + $fifthgrant + $grant;
							echo '
		<div class="alert alert-success"><i class="material-icons">cancel</i>&nbsp;&nbsp; Success:  Row '.$row.' is Successfully Inserted in our database System.</div>
						';
							$query = "UPDATE cgpa SET six = '$gpa', total = '$total' WHERE iroll = '$iroll' AND broll = '$broll'";
							mysqli_query($connect, $query);
							$output .= '  
							 <tr>  
							  <td>'.$iroll.'</td>  
							  <td>'.$broll.'</td>  
							  <td>'.$gpa.'</td>  
							 </tr>  
							 ';  
						}
					}
                     
                }  
           }  
           $output .= '</table>';  
           echo $output;  
      }  
      else  
      {  
           echo '<label class="text-danger">Invalid File</label>';  
      }  
}


if(!empty($_FILES["excel_filese"]))  {
	$file_array = explode(".", $_FILES["excel_filese"]["name"]);  
      if($file_array[1] == "csv" OR $file_array[1] == "xlsx")  
      {  
           include("../PHPExcel/IOFactory.php");  
           $output = '';  
           $output .= "  
                <table class='table table-bordered'>  
                     <tr>  
                          <th> Institute Roll</th>  
                          <th> Board Roll</th>  
                          <th> GPA</th>  
                     </tr>  
                     ";  
           $object = PHPExcel_IOFactory::load($_FILES["excel_filese"]["tmp_name"]);  
           foreach($object->getWorksheetIterator() as $worksheet)  
           {  
                $highestRow = $worksheet->getHighestRow();  
                for($row=2; $row<=$highestRow; $row++)  
                {  
                  $iroll = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(0, $row)->getValue());  
                  $broll = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(1, $row)->getValue());  
                  $gpa = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(2, $row)->getValue());  
					
				$iroll = validate($iroll);
				$broll = validate($broll);
				$gpa = validate($gpa);
					if($iroll == "" || $broll == "" || $gpa == "" ) {
						echo '
		<div class="alert alert-danger"><i class="material-icons">cancel</i>&nbsp;&nbsp; Error: EXCEL file has empty cell in row '.$row.' & this is agains the rule. Please first Insert data into Excel file , Then Try.</div>

						';
					} else {
						$checkroll = mysqli_query($conn, "SELECT * FROM cgpa WHERE iroll = '$iroll' AND broll= '$broll'");
						if(!mysqli_num_rows($checkroll) > 0) {
							echo '
		<div class="alert alert-danger"><i class="material-icons">cancel</i>&nbsp;&nbsp; Error:  Row '.$row.' has Institute roll - '.$iroll.' & board roll - '.$broll.', But we could not found this match to our system. Please Verify this again.</div>
						';
						} else {
							$data = mysqli_fetch_array($checkroll);
							
              $first = $data['first'];
              $firstgrant = ($first * 5) / 100;
              $second = $data['second'];
              $secondgrant = ($second * 5) / 100;
              $third = $data['third'];
              $thirdgrant = ($third * 5) / 100;

              $probidhan = $data['probidhan'];
              if($probidhan == "2010") {
                $div = 15;
              } else {
                $div = 10;
              }

              $fourth = $data['fourth'];
              $fourthgrant = ($fourth * $div) / 100;
              $fifth = $data['fifth'];
              $fifthgrant = ($fifth * 15) / 100;
              $six = $data['six'];
              $sixgrant = ($six * 20) / 100;
							
							$grant = ($gpa * 25) / 100;
							$total = $firstgrant + $secondgrant + $thirdgrant + $fourthgrant + $fifthgrant + $sixgrant + $grant;
							echo '
		<div class="alert alert-success"><i class="material-icons">cancel</i>&nbsp;&nbsp; Success:  Row '.$row.' is Successfully Inserted in our database System.</div>
						';
							$query = "UPDATE cgpa SET seven = '$gpa', total = '$total' WHERE iroll = '$iroll' AND broll = '$broll'";
							mysqli_query($connect, $query);
							$output .= '  
							 <tr>  
							  <td>'.$iroll.'</td>  
							  <td>'.$broll.'</td>  
							  <td>'.$gpa.'</td>  
							 </tr>  
							 ';  
						}
					}
                     
                }  
           }  
           $output .= '</table>';  
           echo $output;  
      }  
      else  
      {  
           echo '<label class="text-danger">Invalid File</label>';  
      }  
}


if(!empty($_FILES["excel_filee"]))  {
	$file_array = explode(".", $_FILES["excel_filee"]["name"]);  
      if($file_array[1] == "csv" OR $file_array[1] == "xlsx")  
      {  
           include("../PHPExcel/IOFactory.php");  
           $output = '';  
           $output .= "  
                <table class='table table-bordered'>  
                     <tr>  
                          <th> Institute Roll</th>  
                          <th> Board Roll</th>  
                          <th> GPA</th>  
                     </tr>  
                     ";  
           $object = PHPExcel_IOFactory::load($_FILES["excel_filee"]["tmp_name"]);  
           foreach($object->getWorksheetIterator() as $worksheet)  
           {  
                $highestRow = $worksheet->getHighestRow();  
                for($row=2; $row<=$highestRow; $row++)  
                {  
                  $iroll = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(0, $row)->getValue());  
                  $broll = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(1, $row)->getValue());  
                  $gpa = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(2, $row)->getValue());  
					
				$iroll = validate($iroll);
				$broll = validate($broll);
				$gpa = validate($gpa);
					if($iroll == "" || $broll == "" || $gpa == "" ) {
						echo '
		<div class="alert alert-danger"><i class="material-icons">cancel</i>&nbsp;&nbsp; Error: EXCEL file has empty cell in row '.$row.' & this is agains the rule. Please first Insert data into Excel file , Then Try.</div>

						';
					} else {
						$checkroll = mysqli_query($conn, "SELECT * FROM cgpa WHERE iroll = '$iroll' AND broll= '$broll'");
						if(!mysqli_num_rows($checkroll) > 0) {
							echo '
		<div class="alert alert-danger"><i class="material-icons">cancel</i>&nbsp;&nbsp; Error:  Row '.$row.' has Institute roll - '.$iroll.' & board roll - '.$broll.', But we could not found this match to our system. Please Verify this again.</div>
						';
						} else {
							$data = mysqli_fetch_array($checkroll);
							
              $first = $data['first'];
              $firstgrant = ($first * 5) / 100;
              $second = $data['second'];
              $secondgrant = ($second * 5) / 100;
              $third = $data['third'];
              $thirdgrant = ($third * 5) / 100;

              $probidhan = $data['probidhan'];
              if($probidhan == "2010") {
                $divf = 15;
              } else {
                $divf = 10;
              }

              $fourth = $data['fourth'];
              $fourthgrant = ($fourth * $divf) / 100;
              $fifth = $data['fifth'];
              $fifthgrant = ($fifth * 15) / 100;
              $six = $data['six'];
              $sixgrant = ($six * 20) / 100;
              $seven = $data['seven'];
              $sevengrant = ($seven * 25) / 100;

							$probidhan = $data['probidhan'];
							if($probidhan == '2010'){
								$div = 10;
							} else {
								$div = 15;
							}
							$grant = ($gpa * $div) / 100;
							$total = $firstgrant + $secondgrant + $thirdgrant + $fourthgrant + $fifthgrant + $sixgrant + $sevengrant + $grant;
              $total = round($total, 2);
							echo '
		<div class="alert alert-success"><i class="material-icons">cancel</i>&nbsp;&nbsp; Success:  Row '.$row.' is Successfully Inserted in our database System.</div>
						';
							$query = "UPDATE cgpa SET eight = '$gpa', total = '$total' WHERE iroll = '$iroll' AND broll = '$broll'";
							mysqli_query($connect, $query);
							$output .= '  
							 <tr>  
							  <td>'.$iroll.'</td>  
							  <td>'.$broll.'</td>  
							  <td>'.$gpa.'</td>  
							 </tr>  
							 ';  
						}
					}
                     
                }  
           }  
           $output .= '</table>';  
           echo $output;  
      }  
      else  
      {  
           echo '<label class="text-danger">Invalid File</label>';  
      }  
}

if(!empty($_FILES["excel_filea"]))  {
  $file_array = explode(".", $_FILES["excel_filea"]["name"]);  
      if($file_array[1] == "csv" OR $file_array[1] == "xlsx")  
      {  
           include("../PHPExcel/IOFactory.php");  
           $output = '';  
           $output .= "  
                <table class='table table-bordered'>  
                     <tr>  
                          <th> Institute Roll</th>  
                          <th> Board Roll</th>  
                          <th> First</th>  
                          <th> Second</th>  
                          <th> Third</th>  
                          <th> Four</th>  
                          <th> Five</th>  
                          <th> Six</th>  
                          <th> Seven</th>  
                          <th> Eight</th>  
                     </tr>  
                     ";  
           $object = PHPExcel_IOFactory::load($_FILES["excel_filea"]["tmp_name"]);  
           foreach($object->getWorksheetIterator() as $worksheet)  
           {  
                $highestRow = $worksheet->getHighestRow();  
                for($row=2; $row<=$highestRow; $row++)  
                {  
                  $iroll = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(0, $row)->getValue());  
                  $broll = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(1, $row)->getValue());  
                  $first = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(2, $row)->getValue());  
                  $second = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(3, $row)->getValue());  
                  $third = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(4, $row)->getValue());  
                  $four = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(5, $row)->getValue());  
                  $five = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(6, $row)->getValue());  
                  $six = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(7, $row)->getValue());  
                  $seven = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(8, $row)->getValue());  
                  $eight = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(9, $row)->getValue());  
          
        $iroll = validate($iroll);
        $broll = validate($broll);
        $first = validate($first);
        $second = validate($second);
        $third = validate($third);
        $four = validate($four);
        $five = validate($five);
        $six = validate($six);
        $seven = validate($seven);
        $eight = validate($eight);
          if($iroll == "" || $broll == "" || $first == "" || $second == "" || $third == "" || $four == "" || $five == "" || $six == "" || $seven == "" || $eight == "") {
            echo '
    <div class="alert alert-danger"><i class="material-icons">cancel</i>&nbsp;&nbsp; Error: EXCEL file has empty cell in row '.$row.' & this is agains the rule. Please first Insert data into Excel file , Then Try.</div>

            ';
          } else {
            $checkroll = mysqli_query($conn, "SELECT * FROM cgpa WHERE iroll = '$iroll' AND broll= '$broll'");
            if(!mysqli_num_rows($checkroll) > 0) {
              echo '
    <div class="alert alert-danger"><i class="material-icons">cancel</i>&nbsp;&nbsp; Error:  Row '.$row.' has Institute roll - '.$iroll.' & board roll - '.$broll.', But we could not found this match to our system. Please Verify this again.</div>
            ';
            } else {

              $data = mysqli_fetch_array($checkroll);
              $total = 0;
              $probidhan = $data['probidhan'];
              if($probidhan == '2010'){
                $div = 10;
                $divf = 15;
              } else {
                $div = 15;
                $divf = 10;
              }
              $fg = ($first * 5) / 100;
              $sg = ($second * 5) / 100;
              $tg = ($third * 5) / 100;
              $fog = ($four * $divf)/ 100;
              $fig = ($five * 15) / 100;
              $sig = ($six * 20) / 100;
              $seg = ($seven * 25) / 100;
              $eg = ($eight * $div) / 100;

              $total = $fg + $sg + $tg + $fog + $fig + $sig + $seg + $eg;
              $total = round($total, 2);
              echo '
    <div class="alert alert-success"><i class="material-icons">cancel</i>&nbsp;&nbsp; Success:  Row '.$row.' is Successfully Inserted in our database System.</div>
            ';
              $query = "UPDATE cgpa SET 
                    first = '$first',
                    second = '$second',
                    third = '$third',
                    fourth = '$four',
                    fifth = '$five',
                    six = '$six',
                    seven = '$seven',
                    eight = '$eight', 
                    total = '$total' 

                    WHERE iroll = '$iroll' AND broll = '$broll'";
              mysqli_query($connect, $query);
              $output .= '  
               <tr>  
                <td>'.$iroll.'</td>  
                <td>'.$broll.'</td>  
                <td>'.$first.'</td>  
                <td>'.$second.'</td>  
                <td>'.$third.'</td>  
                <td>'.$four.'</td>  
                <td>'.$five.'</td>  
                <td>'.$six.'</td>  
                <td>'.$seven.'</td>  
                <td>'.$eight.'</td>  
               </tr>  
               ';  
            }
          }
                     
                }  
           }  
           $output .= '</table>';  
           echo $output;  
      }  
      else  
      {  
           echo '<label class="text-danger">Invalid File</label>';  
      }  
}
 ?>  