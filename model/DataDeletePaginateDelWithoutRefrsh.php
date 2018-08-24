<?php
$id = $_GET['id']; echo $id;
if(isset($_GET['id']))
{
	//exit('true');
	
	include_once('../model/config/ConnDB.php');
	$qryDelete = "DELETE FROM HallBooking WHERE id=$id";
	$conn->exec($qryDelete);
	//echo "Data Deleted SuccessFully..<br>";	
$conn = null;
	
}
?>