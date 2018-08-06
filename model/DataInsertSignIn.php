<?php

$userEmail = $_GET['UserEmail'];
$userPwd = $_GET['UserPwd'];

include_once('../model/config/ConnDB.php');
//echo $conn;

//$conn = new PDO("mysql:host=localhost; dbname=UserDB", 'root', '//');

	$qryInsert = "SELECT * FROM user_tabl WHERE email = '$userEmail' AND pwd = MD5('$userPwd')";
	$stm = $conn->prepare($qryInsert); 	 
	$stm->execute(); 
	
	$rowCount = $stm->rowCount();
	$rowName = $stm->fetch();
	
	var_dump($rowCount);
	
	if($rowCount!=0)
	{
		session_start();
		echo "Signin SuccessFully..<br>";
		$_SESSION['pwdNotify'] = "<b>".$rowName['name']."</b> SignIn SuccessFully.. :)";
		$_SESSION['log'] ="login";
	}else{
		session_start();
		echo "Signin Fail..<br>";
		$_SESSION['pwdNotify'] = "SignIn Fail.. :(";
		header("Refresh:0; url=../view/PageSignIn.php");
		exit();
	}
	
	
$conn = null;

header("Refresh:0; url=../view/indexNew.php");
?>