<?php

	include_once("functions.php");

		$email = $_POST['email'];
		$password = $_POST['password'];
		$finalpassword = md5($password);
		$login = UserLogin($email,$finalpassword);
		$session = $_SESSION['loggedin'] = true;
		session.save();
		header("Location: ./dashboard.php");	
		exit();
			
?>
