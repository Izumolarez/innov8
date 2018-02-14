<?php

	$host = "localhost";
	$user = "root";
	$password = "";   //my password will be inbetween the two double quotes.
	$db = "db";			//"db" is the name of database.
	
	$dbCon = mysqli_connect(host,user,password,db) or die("failed db connection");
	
	function NewUser($email,$firstname,$lastname,$password,$mobile,$token){
		global $dbCon;
		$sql = "INSERT INTO accounts(email,firstname,lastname,,password,mobiletoken) VALUES('$email','$firstname','$lastname','$password','$mobile','$token')";
		$NewUser = mysqli_query($dbCon,$sql);
		return mysqli_insert_id();
	}
	
	function UserLogin($email,$password){
		$UserLogin = mysqli_query($this->dbCon,"select * from accounts where email='$email' AND password='$password' LIMIT 0,1");
		$UserLogin = mysqli_fetch_object($UserLogin);
		return $UserLogin;
	}
	
	function VerifyEmail($activator,$email){
		$VerifyEmail = mysqli_query($this->dbCon,"select accid from accounts where email='$email' AND activator='$activator' AND isEmailVerified=0");
		$VerifyEmail = mysqli_num_rows($VerifyEmail);
		return $VerifyEmail;
	}
	
	function ConfirmEmail($email){
		$sql = "update accounts SET isEmailVerified=1 WHERE email='$email'";
		$ConfirmEmail = $mysqli_query($dbCon,$sql);
		return mysqli_affected_rows();
	}
	
	function EmailVerified($activator,$email){
		$EmailVerified = mysqli_query($this->dbCon,"select accid from accounts where email='$email' AND activator='$activator' AND isEmailVerified=1");
		$EmailVerified = mysqli_num_rows($EmailVerified);
		return $EmailVerified;
	
	}
	
	
	
	?>
