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

			mysqli_query($connection,$sql);
			header('Location: schools.php');
			
		}
	 mysqli_close($connection);

?>