<?php

	include_once("functions.php");

		$email = $_POST['email'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$mobile = $_POST['mobile'];
		$password = $_POST['password'];
		$confirm_password = $_POST['confirm_password'];
		$p1 = md5($password);
		$p2 = md5($confirm_password);
		$match = ($p1==$p2);
		if(!$match){
			 echo "password do not match";	
			exit();
		}
		$token = sha1( $firstname . $password . $email . time());
		$create = NewUser($email,$firstname,$lastname,$p1,$mobile,$token);
		
		if($create){
			$subject = "NoReply@Innov8.com";
			$headers = 'From: NoReply@Innov8.com' . "\r\n" .
						'Reply-To: support@Innov8.com' . "\r\n" .
						'X-Mailer: PHP/' . phpversion();
			$message = "Welcome,
			<P> You have successfully registered on our platform. Kindly click on the link below to verify your email address</P>
			http://innov8/verify-email?activator=$activator&email=$email";
			
			$mail = mail($email,$subject,$message,$headers);
			if($mail){
			 header("Location: ./login.php");	
			exit();
				}
		}else{
			 header("Location: ./register.php");	
			exit();
		}

?>
