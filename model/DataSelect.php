<?php 
include('../view/Header.php');
?>


<?php

if(isset($_GET['id']))
{

$id = $_GET['id'];

include_once('../model/config/ConnDB.php');

$qrySelect = "SELECT * FROM HallBooking WHERE id=$id";

$seleRow = $conn->prepare($qrySelect);

$seleRow->execute();

$result = $seleRow->fetch();

//echo $custN = $result['cust_name'];
//exit('in update true..');


/*

*/
?>


<!DOCTYPE html>
<html>
<body>
<div class="container">

<h2>Select/View Your Data</h2><br>



<table border="0" class="table table-striped wid500 fonSiz14">
<thead><tr><th>Atrribute's</th><th>Value's</th></tr></thead>
	<tbody>
<tr><td>Cust Name: </td><td><b><?php echo $result['cust_name']; ?></b></td></tr>
<tr><td>Cust Cont No: </td><td><b><?php echo $result['cust_cont_no']; ?></b></td></tr>
<tr><td>Cust Email: </td><td><b><?php echo $result['cust_email']; ?></b></td></tr>
<tr><td>Start Date & Time: </td><td><b><?php echo $result['sta_date_time']; ?></b></td></tr>
<tr><td>End Date & Time: </td><td><b><?php echo $result['end_date_time']; ?></b></td></tr>
<tr><td>Total Amount: </td><td><b><?php echo $result['tot_amt']; ?></b></td></tr>
<tr><td>Paid Amount: </td><td><b><?php echo $result['paid_amt']; ?></b></td></tr>
<tr><td>Collect Amount: </td><td><b><?php echo $result['collect_amt']; ?></b></td></tr>
	</tbody>
</table>

<div style='margin-left: 0px;'>
<a class='btn btn-info' href='javascript:history.go(-1)' role="button"> Back </a>
</div>

</div>
</body>
</html>

<?php
}	
?>



<?php
/*
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
*/
?>

<?php
include('../view/Footer.php');
?>