<?php  
 include 'config/db.php';
 $connect = $conn;
function validate($data) {
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
 if(!empty($_FILES["excel_file"]))  
 {  
      $file_array = explode(".", $_FILES["excel_file"]["name"]);  
      if($file_array[1] == "xlsx")  
      {  
           include("PHPExcel/IOFactory.php");  
           $output = '';  
           $output .= "  
                <table class='table table-bordered'>  
                     <tr>  
                          <th>Curriculam Code</th>  
                          <th>Technology Name</th>  
                          <th>Technology Code</th>  
                     </tr>  
                     ";  
           $object = PHPExcel_IOFactory::load($_FILES["excel_file"]["tmp_name"]);  
           foreach($object->getWorksheetIterator() as $worksheet)  
           {  
                $highestRow = $worksheet->getHighestRow();  
                for($row=2; $row<=$highestRow; $row++)  
                {  
                  $name = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(0, $row)->getValue());  
                  $fees = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(1, $row)->getValue());  
                  $duration = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(2, $row)->getValue());  
			$name = validate($name);
			$fees = validate($fees);
			$duration = validate($duration);
			
			if($name == "" || $fees == "" || $duration == "") {
				echo '
	<div class="alert alert-danger"><i class="material-icons">cancel</i>&nbsp;&nbsp; Error: EXCEL file has empty cell in row '.$row.' & this is agains the rule. Please first Insert data into Excel file , Then Try.</div>

					';
			} else {
				$checkData = mysqli_query($connect, "SELECT * FROM deparment WHERE name = '$fees' OR tcode = '$duration'");
				if(mysqli_num_rows($checkData) > 0) {
					echo '
	<div class="alert alert-warning"><i class="material-icons">refresh</i>&nbsp;&nbsp; Error: <b>'.$fees.'</b> OR <b>'.$duration.'</b> Data is avaiable in our Database. Please Check the EXCEL file & try again</div>
					';
				} else {
					echo '
	<div class="alert alert-success"><i class="material-icons">check_circle</i>&nbsp;&nbsp; Success: <b>'.$fees.'</b> Data is Successfully Uploaded into Our System</div>
						';
					$query = "  
                     INSERT INTO deparment  
                     (ccode, name, tcode)   
                     VALUES ('".$name."', '".$fees."', '".$duration."')  
                     ";  
                     mysqli_query($connect, $query);  
                     $output .= '  
                     <tr>  
                      <td>'.$name.'</td>  
                      <td>'.$fees.'</td>  
                      <td>'.$duration.'</td>  
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