<?php
	require_once "db.php";
		  
	$connection = mysqli_connect($host, $user,$pass,$database);
		  
	$error = mysqli_connect_error();
	 if($error != null){
	  	$output="<p> Unable to connect to database</P>".$error;
		exit($output);
	}
	if(isset($_POST["importForm"])){
		$name = $_POST['SName'];
		$type= $_POST['SType'];
		$total = $_POST['SStudentsTotal'];

		$sql = "INSERT INTO schools(SName,SType,SStudentsTotal) VALUES('".$name."','".$type."',".$total.")";

		echo $sql;

		//mysqli_query($connection,$sql);
		if (mysqli_query($connection,$sql)) {
		  echo "<script> alert('New record created successfully')</script>";
			header('Location: schoolsShow.php');
		} else {
		  echo '<script> alert(Error: " . $sql . "<br>" . mysqli_error($connection))</script>';
			header('Location: schoolsImport.php');
		}
	}
	mysqli_free_result($result);
	mysqli_close($connection);

?>