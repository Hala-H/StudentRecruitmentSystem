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

    		$name = $_POST['studentName'];
    		$ID = $_POST['studentID'];
    		$nationality = $_POST['studentNationality'];
    		$school = $_POST['studentSchool'];
        $grade = $_POST['studentGrade'];
        $mobile = $_POST['studentMobile'];
        $email = $_POST['studentEmail'];


    		$sql = "insert into students values('".$name."','".$ID."','".$nationality."','".$school."','".$grade."','".$mobile."','".$email."')";
        $sql2 = "update schools set SStudentsTotal = SStudentsTotal + 1 where SName = '".$school."'";

    		echo $sql;

    		mysqli_query($connection,$sql);
        mysqli_query($connection,$sql2);
        header('Location: students.php');
?>
