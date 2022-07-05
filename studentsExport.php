<?php
$host = "localhost";
$database= "recruitment";
$user = "root";
$pass = "";

$connection = mysqli_connect($host, $user, $pass, $database);

$error = mysqli_connect_error();
if($error != null){
  $output = "<p> Unable to connect to database</P>".$error;
  exit($output);
}
    $sql = "select * from students";
    $setRec = mysqli_query($connection, $sql);
    $columnHeader = '';
    $columnHeader = "Student Name" . "\t" . "ID" . "\t" . "Nationality" . "\t" . "School" . "\t" . "Grade" . "\t" . "Mobile" . "\t" . "Email" . "\t";
    $setData = '';
      while ($rec = mysqli_fetch_row($setRec)) {
        $rowData = '';
        foreach ($rec as $value) {
            $value = '"' . $value . '"' . "\t";
            $rowData .= $value;
        }
        $setData .= trim($rowData) . "\n";
    }

    header("Content-type: application/octet-stream");
    header("Content-Disposition: attachment; filename=School_Detail.xls");
    header("Pragma: no-cache");
    header("Expires: 0");

      echo ucwords($columnHeader) . "\n" . $setData . "\n";
?>
