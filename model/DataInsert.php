<?php

$custName = $_GET['CustName'];
$custContNo = $_GET['CustContNo'];
$custEmail = $_GET['CustEmail'];
$strDateTime = $_GET['StrDateTime'];
$endDateTime = $_GET['EndDateTime'];
$totAmt = $_GET['TotAmt'];
$paidAmt = $_GET['PaidAmt'];
$collectAmt = $_GET['CollectAmt'];


include_once('../model/config/ConnDB.php');
//echo $conn;
	
	$qryInsert = "INSERT INTO HallBooking (cust_name, cust_cont_no, cust_email, sta_date_time, end_date_time, tot_amt, paid_amt, collect_amt) VALUES ('$custName', $custContNo, '$custEmail', '$strDateTime', '$endDateTime', $totAmt, $paidAmt, $collectAmt)";
	
	
	$stm = $conn->prepare($qryInsert);
	$stm->execute();
	echo "Data Inserted SuccessFully..<br>";
	

$conn = null;
?>