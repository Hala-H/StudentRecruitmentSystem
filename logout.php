<?php
	session_start();
	$_SESSION['userEmail'] = "";

	session_destroy();
	header('Location: login.php');
?>
