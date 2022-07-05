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

    		$ID = $_POST['acID'];
    		$school = $_POST['acSchool'];
    		$type = $_POST['acType'];
    		$date = $_POST['acDate'];
        $stuNum = $_POST['acStuNum'];

    		$sql = "insert into activities values('".$ID."','".$school."','".$type."','".$date."','".$stuNum."')";

    		echo $sql;

    		mysqli_query($connection,$sql);
        header('Location: activities.php');
?>
