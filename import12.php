<?php  
 include 'config/db.php';
 $connect = $conn;
// validation input file
function validate($data) {
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    // $data = mysqli_real_escape_string($conn,$data);
    return $data;
}
 if(!empty($_FILES["excel_file12"]))  
 {  
      $file_array = explode(".", $_FILES["excel_file12"]["name"]);  
      if($file_array[1] == "xlsx")  
      {  
           include("PHPExcel/IOFactory.php");  
           $output = '';  
           $output .= "  
                <table style='' class='table table-bordered'>  <tr>
					<td>Name</td>
					<td>Phone</td>
					<td>Email</td>
					<td>Institute Roll</td>
					<td>Admission Year</td>
					<td>Board Roll</td>
					<td>Registration Roll</td>
					<td>Curriculam Code</td>
					<td>Technology Name</td>
					<td>Technology Code</td>
					<td>Passing Year</td>
					<td>Father Name</td>
					<td>Mother Name</td>
					<td>Guardian Name</td>
					<td>Guardian Phone</td>
					<td>Address</td>
					<td>Remarks</td>
					<td>Skill</td>
					<td>industrial Attatchnment</td>
					<td>Session</td>
					<td>Entry Date</td>
					<td>Semester</td>
				</tr>
                     
                     ";  
           $object = PHPExcel_IOFactory::load($_FILES["excel_file12"]["tmp_name"]);  
           foreach($object->getWorksheetIterator() as $worksheet)  
           {  
                $highestRow = $worksheet->getHighestRow();  
                for($row=2; $row<=$highestRow; $row++)  
                {  
                  $name = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(0, $row)->getValue());  
                  $phone = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(1, $row)->getValue());  
                  $email = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(2, $row)->getValue());  
                  $iroll = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(3, $row)->getValue());  
                  $ayear = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(4, $row)->getValue());  
                  $broll = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(5, $row)->getValue());  
                  $rroll = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(6, $row)->getValue());  
                  $ccode = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(7, $row)->getValue());  
                  $tname = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(8, $row)->getValue());  
                  $tcode = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(9, $row)->getValue());  
                  $pyear = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(10, $row)->getValue());  
                  $fname = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(11, $row)->getValue());  
                  $mname = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(12, $row)->getValue());  
                  $gname = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(13, $row)->getValue());  
                  $gphone = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(14, $row)->getValue());  
                  $address = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(15, $row)->getValue());  
                   
                  $remarks = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(16, $row)->getValue());  
                  $skill = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(17, $row)->getValue());  
                  $industrial = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(18, $row)->getValue()); 
                  $session = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(19, $row)->getValue());  
                  $entrydate = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(20, $row)->getValue()); 
                  $semester = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(21, $row)->getValue());  
                  $dates = date('d-F-Y');
				$entrydate = date("d-F-Y", $entrydate);
				$name = validate($name);
				$phone = validate($phone);
				$email = validate($email);
				$iroll = validate($iroll);
				$broll = validate($broll);
				$ayear = validate($ayear);
				$rroll = validate($rroll);
				$ccode = validate($ccode);
				$tname = validate($tname);
				$tcode = validate($tcode);
				$pyear = validate($pyear);
				$fname = validate($fname);
				$mname = validate($mname);
				$gname = validate($gname);
				$gphone = validate($gphone);
				$address = validate($address);
				$remarks = validate($remarks);
				$skill = validate($skill);
				$industrial = validate($industrial);
				$name = validate($name);
				$session = validate($session);
				$entrydate = validate($entrydate);
				$semester = validate($semester);
				$otp = bin2hex(random_bytes(10));
				if($ayear < 2016) {
					$probidhan = 2010;
				} else {
					$probidhan = 2016;
				}
				if($semester == "" || $session == "" || $tname == "" || $iroll == "" || $name == "") {
					echo '
	<div class="alert alert-danger"><i class="material-icons">cancel</i>&nbsp;&nbsp; Error: EXCEL file has empty cell in row '.$row.' & this is against the rule. Please first Insert data into Excel file , Then Try.</div>
					';
				} else {
					$searchTech = mysqli_query($conn, "SELECT * FROM deparment WHERE name =  '$tname'");
					if(mysqli_num_rows($searchTech) > 0){
						$checktcode = mysqli_query($conn, "SELECT * FROM deparment WHERE name = '$tname' AND tcode = '$tcode'");
						if(mysqli_num_rows($checktcode) > 0) {
						$checkroll = mysqli_query($conn, "SELECT * FROM student WHERE iroll = '$iroll' and semester = '$semester'");
						if(mysqli_num_rows($checkroll) > 0) {
							echo '
	<div class="alert alert-warning"><i class="material-icons">cancel</i>&nbsp;&nbsp; Warning: '.$row.' This row has institute roll '.$iroll.' & semester - '.$semester.' which is already exist in our database & this is against the rule. Please first Insert data into Excel file , Then Try.</div>
							';
						} else {
							echo '
	<div class="alert alert-success"><i class="material-icons">cancel</i>&nbsp;&nbsp; Success: '.$name.' data is Successfully added in our system. Please go to the view student page & search</div>
							';
				$query = "INSERT INTO student (name, phone, email, iroll, ayear, broll, rroll, ccode, tname, tcode, pyear, fname, mname, gname, gphone, address, remarks, skill, Industry, session, entry_date,semester, otp) VALUES ('$name','$phone', '$email', '$iroll', '$ayear', '$broll', '$rroll', '$ccode', '$tname', '$tcode', '$pyear', '$fname', '$mname', '$gname', '$gphone', '$address', '$remarks', '$skill', '$industrial' ,'$session', '$entrydate',
                     '$semester', '$otp'  )";
                     mysqli_query($conn,$query);   
				mysqli_query($conn, "INSERT INTO cgpa (iroll, broll, first, second, third, fourth, fifth, six, seven, eight, total, probidhan, technology) VALUES ('$iroll', '$broll', '', '', '' ,'', '', '', '', '', '', '$probidhan', '$tname')");
                     $output .= '  
                     <tr>  
                      <td>'.$name.'</td>  
                      <td>'.$phone.'</td>  
                      <td>'.$email.'</td>  
                      <td>'.$iroll.'</td>  
                      <td>'.$ayear.'</td>  
                      <td>'.$broll.'</td>  
                      <td>'.$rroll.'</td>  
                      <td>'.$ccode.'</td>  
                      <td>'.$tname.'</td>  
                      <td>'.$tcode.'</td>  
                      <td>'.$pyear.'</td>  
                      <td>'.$fname.'</td>  
                      <td>'.$mname.'</td>  
                      <td>'.$gname.'</td>  
                      <td>'.$gphone.'</td>  
                      <td>'.$address.'</td>  
                      <td>'.$remarks.'</td>  
                      <td>'.$skill.'</td>  
                      <td>'.$industrial.'</td>  
                      <td>'.$session.'</td>  
                      <td>'.$entrydate.'</td>  
                      <td>'.$semester.'</td>  
                     </tr>  
                     ';  
						}
						} else {
							echo '
	<div class="alert alert-danger"><i class="material-icons">cancel</i>&nbsp;&nbsp; Error: EXCEL file has Technology name - '.$tname.' & technology Code - '.$tcode.' in row '.$row.' & this is against the rule. Please first Check data into Excel file , Then Try.</div>
					';
						}

					} else {
						echo '
	<div class="alert alert-danger"><i class="material-icons">cancel</i>&nbsp;&nbsp; Error: EXCEL file has error data in row '.$row.', It\'s take technology Name - <b> '.$tname.' </b> data. Which is not added yet. Please See this because  this is against the rule. Please first Insert data into Excel file , Then Try.</div>
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