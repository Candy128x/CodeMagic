<?php

$id = $_GET['id'];

if(isset($_GET['id']))
{
	//exit('true');
	
	include_once('../model/config/ConnDB.php');

	$qryDelete = "DELETE FROM HallBooking WHERE id=$id";
	$conn->exec($qryDelete);
	//echo "Data Deleted SuccessFully..<br>";
	
session_start();
$_SESSION['pwdNotify'] = "Data Deleted SuccessFully.. | Where id = <b>".$id."</b>";
header('Location: ' . $_SERVER['HTTP_REFERER']);
exit();

$conn = null;
	
}



?>