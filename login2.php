<?php
  include "db.php";

	$connection = mysqli_connect($host, $user,$pass,$database);

	 $error = mysqli_connect_error();
	 if($error != null){
	 	$output="<p> Unable to connect to database</P>".$error;
		exit($output);
	}

	$email = $_POST['userEmail'];
	$passwd = $_POST['userPassword'];

	$sql = "select * from user where Email like '".$email."'";
	$result = mysqli_query($connection, $sql);
	$rowcount=mysqli_num_rows($result);
	if($rowcount>0)
		{
			$row = mysqli_fetch_assoc($result);
			echo $passwd;
			echo $row['Pass'];
			if (password_verify($passwd, $row['Pass']))
				{
          date_default_timezone_set("Asia/Riyadh");
          $dateTime = date('Y-m-d g:i:s');
          $sql2 = "update user set lastLogin = '".$dateTime."'";
          mysqli_query($connection,$sql2);
          session_start();
          $minutesBeforeSessionExpire=1;
          if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > ($minutesBeforeSessionExpire*60))) {
              session_unset();     // unset $_SESSION
              session_destroy();   // destroy session data
          }
          $_SESSION['LAST_ACTIVITY'] = time();
					$_SESSION['userEmail'] = $email;
					header('Location: index.php');
				}
        else {
          header('Location: login.php');
        }
		}
	else {
    echo "password is not correct";
		header('Location: login.php');
  }
?>
