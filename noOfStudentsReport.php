<?php
//setting header to json
header('Content-Type: application/json');

require_once "db.php";
$connection = mysqli_connect($host,$user,$pass,$database);
		  
$error = mysqli_connect_error();
if($error != null){
  	$output="<p> Unable to connect to database</P>".$error;
	exit($output);
}
//query to get data from the table
$query = "SELECT SID, SName, SStudentsTotal FROM schools;";

//execute query
$result = mysqli_query($connection, $query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
  $data[] = $row;
}

//free memory associated with result
mysqli_free_result($result);

//close connection
mysqli_close($connection);

//now print the data
echo json_encode($data);