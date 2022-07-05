<?php
require "db.php";
require_once "common.php";
		  
$connection = mysqli_connect($host, $user,$pass,$database);
		  
$error = mysqli_connect_error();
if($error != null){
  	$output="<p> Unable to connect to database</P>".$error;
		exit($output);
}
if (isset($_POST['importExcel'])) {
	if($_FILES['excelDoc']['name']) {
		$arrFileName = explode('.', $_FILES['excelDoc']['name']);
		if ($arrFileName[1] == 'csv') {
			$handle = fopen($_FILES['excelDoc']['tmp_name'], "r");
			$count = 0;
			while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
				$count++;
				if ($count == 1) {
					continue; // skip the heading header of sheet
				}
					
					$SName = mysqli_real_escape_string($connection, $data[1]);
					$SType = mysqli_real_escape_string($connection, $data[2]);
					$SStudentsTotal = mysqli_real_escape_string($connection, $data[3]);
//					$SName = $connection->real_escape_string($data[1]);
//					$SType = $connection->real_escape_string($data[2]);
//					$SStudentsTotal = $connection->real_escape_string($data[3]);
					$sql = "INSERT INTO schools(SName,SType,SStudentsTotal) VALUES('".$SName."','".$SType."',".$SStudentsTotal.")";
//      				$result1 = mysqli_ or die("Error in main Query".$connection->error);
//					$common = new Common();
//					$SheetUpload = $common->uploadData($connection,$SName,$SType,$SStudentsTotal);
					if (mysqli_query($connection,$sql)) {
					  echo "<script> alert('New records created successfully')</script>";
						header('Location: schoolsShow.php');
					} else {
					  echo '<script> alert(Error: " . $sql . "<br>" . mysqli_error($connection))</script>';
						header('Location: schoolsImport.php');
					}

//			if ($SheetUpload){
//				echo "<script>alert('Excel file has been uploaded successfully !');</script>";
//				header("Location: schoolsShow.php");
//			}
//			else {
//				echo "<script>alert('Error. Excel file is not uploaded !');</script>";
//				header("Location: schoolsImport.php");
//			}
		}
	}
		else {
			echo "<script>alert('Wrong Format. Please use csv file ! ');</script>";
			header("Location: schoolsImport.php");
		}
	}
}
?>
<?php
//require_once 'vendor/autoload.php';
//require_once 'db.php';
//  
//use PhpSpreadsheet_master\src\PhpSpreadsheet\Spreadsheet;
//use PhpSpreadsheet_master\src\PhpSpreadsheet\Reader\Csv;
//use PhpSpreadsheet_master\src\PhpSpreadsheet\Writer\Xlsx;
//  
//if (isset($_POST['importExcel'])) {
// 
//    $file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
//     
//    if(isset($_FILES['file']['name']) && in_array($_FILES['file']['type'], $file_mimes)) {
//     
//        $arr_file = explode('.', $_FILES['file']['name']);
//        $extension = end($arr_file);
//     
//        if('csv' == $extension) {
//            $reader = new \PhpSpreadsheet_master\src\PhpSpreadsheet\Reader\Csv();
//        } else {
//            $reader = new \PhpSpreadsheet_master\src\PhpSpreadsheet\Reader\Xlsx();
//        }
// 
//        $spreadsheet = $reader->load($_FILES['file']['tmp_name']);
// 
//        $sheetData = $spreadsheet->getActiveSheet()->toArray();
// 
//        if (!empty($sheetData)) {
//            for ($i=1; $i<count($sheetData); $i++) {
//                $SName = $sheetData[$i][1];
//                $SType = $sheetData[$i][2];
//				$STotal = $sheetData[$i][2];
//                $db->query("INSERT INTO USERS(name, email) VALUES('$SName', '$SType', $STotal)");
//            }
//        }
//    }
//}
?>

<?php
//require "db.php";
//		  
//$conn = mysqli_connect($host, $user,$pass,$database);
//		  
//$error = mysqli_connect_error();
//if($error != null){
//  	$output="<p> Unable to connect to database</P>".$error;
//		exit($output);
//}
//
//if (isset($_POST["importExcel"])) {
//
//    include 'simple-xlsx-2020-05-19\src\simplexlsx.class.php';
// 	$file = $_FILES['file']['type'];
//	
//    $xlsx = new SimpleXLSX( '$file' );
//	
//    $fp = fopen( 'file.csv', 'w');
//    foreach( $xlsx->rows() as $fields ) {
//        fputcsv( $fp, $fields);
//    }
//    fclose($fp);
//
//	if(!empty($_FILES['file']['type'])){
//		   // If the file is uploaded
//        if(is_uploaded_file($_FILES['file']['tmp_name'])){
//            
//            // Open uploaded CSV file with read-only mode
//            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
//            
//            // Skip the first line
//            fgetcsv($csvFile);
//			
//			// Parse data from CSV file line by line
//            while(($line = fgetcsv($csvFile)) !== FALSE)
//			{
//				$SName = $line[0];
//				$SType = $line[1];
//				$SStudentsTotal = $line[2];
//				$sql = "INSERT INTO schools(SName, SType, SStudentsTotal) values ('$SName','$SType','$SStudentsTotal')";
//				mysqli_query($conn,$sql);
//			}
//			if($sql)
//			{ 
//				echo "sucess";
//			}
//			else 
//			{
//				echo "Sorry! Unable to import.";
//			}
//	   	}
//		  // Close opened CSV file
//        	fclose($csvFile);
//	}
//}
header('Location: schoolsShow.php');
?>

<?php



?>
