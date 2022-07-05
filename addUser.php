<?php
      include "db.php";

		  $connection = mysqli_connect($host, $user,$pass,$database);

		  $error = mysqli_connect_error();
		  if($error != null){
		  	$output="<p> Unable to connect to database</P>".$error;
			exit($output);
		}

		$fname = $_POST['userFirstName'];
    $lname = $_POST['userLastName'];
		$passwd = $_POST['userPassword'];
		$email= $_POST['userEmail'];
    date_default_timezone_set("Asia/Riyadh");
    $dateTime=date('Y-m-d g:i:s');

		$hash = password_hash($passwd, PASSWORD_DEFAULT);

		$sql = "insert into user values('".$fname."','".$lname."','".$hash."','".$email."','".$dateTime."')";

		echo $sql;

		mysqli_query($connection,$sql);

		header('Location: login.php');
?>
