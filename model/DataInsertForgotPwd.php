<?php

session_start();
$userEmail = $_SESSION['userEmail'];
//echo $_SESSION['userEmail'];
$userPwd = $_GET['UserPwd'];
$conPwd = $_GET['ConPwd'];


if($userPwd != $conPwd)
{
$_SESSION['pwdNotify'] = "Pls enter Same Password in Password & Confirm Password Feild.. ";
header("Refresh:0; url=../view/ForgotPasswordPwd.php");
exit();
}


//if(!(preg_match('/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/', $userPwd))) //true->further
//if(!(mb_strlen($userPwd)>=6)) //true->further

if(!(mb_strlen($userPwd)>=6))
{
	$_SESSION['pwdNotify'] = "Invalid Password..<br> Password should be grater than or equal to 6 character..<br>";
	header("Refresh:0; url=../view/ForgotPasswordPwd.php");
	exit('invalid...');
}


if(!(preg_match('/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/', $userPwd)))
{
	$_SESSION['pwdNotify'] = "Invalid Password..<br> Password should be Contain A-z, a-z & 0-9 Character..<br>";
	header("Refresh:0; url=../view/ForgotPasswordPwd.php");
	exit('invalid...');
}


include_once('../model/config/ConnDB.php');
//echo $conn; 

//$conn = new PDO("mysql:host=localhost; dbname=UserDB", 'root', '');
		
	
	// select tocken
	$tockenSHA = hash('sha256', $userEmail);
	//$qryInsTkn = "UPDATE user_tabl SET reset_pwd_link='$tockenSHA' WHERE email='$userEmail'";
	$qryInsTknSel = "SELECT * FROM user_tabl WHERE email = '$userEmail' AND reset_pwd_link='$tockenSHA'";
	$stmTknSel = $conn->prepare($qryInsTknSel);
	$stmTknSel->execute();
	echo "Token Verified.. <br>";
	
	var_dump($stmTknSel);
	if($stmTknSel!==true)
	{
		$_SESSION['pwdNotify'] = "Token expire.. Renter pwd.. ! <br>";
		header("Refresh:0; url=../view/ForgotPasswordMail.php");
		exit();
	}

	//  update pwd & set NULL value in reset_pwd_link
	$qryUpdate = "UPDATE user_tabl SET pwd = MD5('$userPwd') WHERE email = '$userEmail'";
	$stm = $conn->prepare($qryUpdate); 	 
	$stm->execute(); 		
	echo "pwd Data Updated SuccessFully..<br>";
	$_SESSION['pwdNotify'] = "Password Updated SuccessFully.. :)";
	
	
	//delete token
	$qryDelTkn = "UPDATE user_tabl SET reset_pwd_link=NULL WHERE email='$userEmail'";
	$stmDelTkn = $conn->prepare($qryDelTkn);
	$stmDelTkn->execute();
	echo "Token Deleted.. <br>";

$conn = null;

//header("Refresh:0; url=../view/indexNew.php");
?>