<?php

$userEmail = $_GET['UserEmail'];

include_once('../model/config/ConnDB.php');
//echo $conn; 

//$conn = new PDO("mysql:host=localhost; dbname=UserDB", 'root', '');

	$qrySelect = "SELECT * FROM user_tabl WHERE email = '$userEmail' ";
	$stm = $conn->prepare($qrySelect); 	 
	$stm->execute(); 		

	$rowCount = $stm->rowCount();
	$rowName = $stm->fetch();
	
	//var_dump($rowCount);
	
	if($rowCount!=0)
	{
		session_start();
		//echo "Choose Your Password..<br>";
		$_SESSION['pwdNotify'] = "<b>".$rowName['name']."</b> Choose Your Password.. :)";
		$_SESSION['userEmail'] = $userEmail;
		
		// create & insert tocken
		$tockenSHA = hash('sha256', $userEmail);
		$qryInsTkn = "UPDATE user_tabl SET reset_pwd_link='$tockenSHA' WHERE email='$userEmail'";
		$stmTkn = $conn->prepare($qryInsTkn);
		$stmTkn->execute();
		
	}else{
		session_start();
		//echo "invalid email ID, Retry..<br>";
		$_SESSION['pwdNotify'] = "invalid email ID, Retry.. :(";
		header("Refresh:0; url=../view/ForgotPasswordMail.php");
		exit();
	}

$conn = null;


//echo $_SESSION['userEmail']."<br>";

header("Refresh:0; url=../view/ForgotPasswordPwd.php");
?>