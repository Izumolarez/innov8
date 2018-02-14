<?php

	include_once("functions.php");

	if(isset($_GET['activator']) || isset($_GET['email'])){
		
			$activator = $_GET['activator'];
			$email = $_GET['email'];
			
			$VerifyEmail = VerifyEmail($activator,$email);
			if($VerifyEmail > 0){
				$ConfirmEmail = ConfirmEmail($email);
				header("Location: ./login.php");
				}else{
					$EmailVerified = EmailVerified($activator,$email);
					echo 'Email already Verified';
					}
		}else{
		echo 'page not found';
		exit();	
			}
			
?>
