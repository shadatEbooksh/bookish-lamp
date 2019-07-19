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
 if(!empty($_FILES["excel_file1"]))  
 {  
      $file_array = explode(".", $_FILES["excel_file1"]["name"]);  
      if($file_array[1] == "csv" OR $file_array[1] == "xlsx")  
      {  
           include("PHPExcel/IOFactory.php");  
           $output = '';  
           $output .= "  
                <table class='table table-bordered'>  
                     <tr>  
                          <th> Name</th>  
                          <th> Position</th>  
                          <th> Qualification</th>  
                          <th> Age</th>  
                          <th> Joining Date</th>  
                          <th> Salary</th>  
                     </tr>  
                     ";  
           $object = PHPExcel_IOFactory::load($_FILES["excel_file1"]["tmp_name"]);  
           foreach($object->getWorksheetIterator() as $worksheet)  
           {  
                $highestRow = $worksheet->getHighestRow();  
                for($row=2; $row<=$highestRow; $row++)  
                {  
                  $name = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(0, $row)->getValue());  
                  $position = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(1, $row)->getValue());  
                  $qualification = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(2, $row)->getValue());  
                  $age = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(3, $row)->getValue());  
                  $startdate = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(4, $row)->getValue());  
                  $salary = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(5, $row)->getValue());  
					
				$name = validate($name);
				$position = validate($position);
				$qualification = validate($qualification);
				$age = validate($age);
				$startdate = validate($startdate);
				$startdate = date("d-F-Y", $startdate);
				$salary = validate($salary);
				if($name == "" || $position == "" || $qualification == "" || $age == "" || $startdate == "" || $salary == "") {
					echo '
	<div class="alert alert-danger"><i class="material-icons">cancel</i>&nbsp;&nbsp; Error: EXCEL file has empty cell in row '.$row.' & this is agains the rule. Please first Insert data into Excel file , Then Try.</div>

					';
				} else {
					$checkTeacherName = mysqli_query($conn, "SELECT * FROM teacher WHERE name = '$name'");
					if(mysqli_num_rows($checkTeacherName) > 0) {
						echo '
	<div class="alert alert-warning"><i class="material-icons">refresh</i>&nbsp;&nbsp; Error: <b>'.$name.'</b> Data is avaiable in our Database. Please Check the EXCEL file & try again</div>
						';
					} else {
						echo '
	<div class="alert alert-success"><i class="material-icons">check_circle</i>&nbsp;&nbsp; Success: <b>'.$name.'</b> Data is Successfully Uploaded into Our System</div>
						';
						$query = "  
                     INSERT INTO teacher  
                     (name, position, qualification, age, startdate, salary)   
                     VALUES ('".$name."', '".$position."', '".$qualification."', '".$age."', '".$startdate."', '".$salary."')  
                     ";  
                     mysqli_query($connect, $query); 
					$output .= '  
                     <tr>  
                      <td>'.$name.'</td>  
                      <td>'.$position.'</td>  
                      <td>'.$qualification.'</td>  
                      <td>'.$age.'</td>  
                      <td>'.$startdate.'</td>  
                      <td>'.$salary.'</td>  
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