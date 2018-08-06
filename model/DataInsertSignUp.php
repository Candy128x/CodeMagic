<?php

$userName2 = $_GET['UserName'];
$userEmail = $_GET['UserEmail'];
$userPwd = $_GET['UserPwd'];
$conPwd = $_GET['ConPwd'];


session_start();

if($userPwd != $conPwd)
{
$_SESSION['pwdNotify'] = "Pls enter Same Password in Password & Confirm Password Feild.. ";
header("Refresh:0; url=../view/PageSignUp.php");
exit();
}


//if(!(preg_match('/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/', $userPwd))) //true->further
//if(!(mb_strlen($userPwd)>=6)) //true->further

if(!(mb_strlen($userPwd)>=6))
{
	$_SESSION['pwdNotify'] = "Invalid Password..<br> Password should be grater than or equal to 6 character..<br>";
	header("Refresh:0; url=../view/PageSignUp.php");
	exit('invalid...');
}



if(!(preg_match('/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/', $userPwd)))
{
	$_SESSION['pwdNotify'] = "Invalid Password..<br> Password should be Contain A-z, a-z & 0-9 Character..<br>";
	header("Refresh:0; url=../view/PageSignUp.php");
	exit('invalid...');
}


include_once('../model/config/ConnDB.php');
//echo $conn;

//$conn = new PDO("mysql:host=localhost; dbname=UserDB", 'root', '');

	$qryInsert = "INSERT INTO user_tabl (name, email, pwd) VALUES ('$userName2', '$userEmail', MD5('$userPwd'))";
	
	$stm = $conn->prepare($qryInsert); 	 
	
	$stm->execute(); 		

	//var_dump($stm);
	//echo "Data Inserted SuccessFully..<br>";
	$_SESSION['pwdNotify'] = "Sign Up SuccessFully.. :)";

$conn = null;

header("Refresh:0; url=../view/indexNew.php");

?>