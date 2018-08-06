<?php

session_start();
if(empty($_SESSION['log'])) 
{
	$_SESSION['pwdNotify'] = "Please Signin First..";
	header("location:../view/PageSignIn.php");
	exit('pls login..');
}

$tockenSHA = hash('sha256','abc@m.com');
$tockenB2H = bin2hex($tockenSHA);

echo "String Length: ".strlen($tockenSHA)."<br>";
echo "Token SHA256: <br>".$tockenSHA."<br> bin2hex: <br>".$tockenB2H;

?>