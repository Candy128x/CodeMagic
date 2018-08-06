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

echo $custN = $result['cust_name'];
//exit('in update true..');


/*

*/
?>


<!DOCTYPE html>
<html>
<body>
<div class="container">

<h2>Update Your Data</h2>

<!--InsertData-->
<form method="GET">
<div class="form-group wid500">

<div class="input-group">
<span class="input-group-addon">Cust Name:</span>
<input type="text" class="form-control" name="CustName" value="<?php echo $result['cust_name']; ?>">
</div><br>

<div class="input-group">
<span class="input-group-addon">Cust Contact No:</span>
<input type="number" class="form-control" name="CustContNo" placeholder=" Eg: 9819253545" 
	value="<?php echo $result['cust_cont_no']; ?>" required>
</div><br>

<div class="input-group">
<span class="input-group-addon">Cust Email ID:</span>
<input type="email" class="form-control" name="CustEmail" value="<?php echo $result['cust_email']; ?>">
</div><br>

<div class="input-group">
<span class="input-group-addon">Start Date & Time:</span>
<input type="datetime-local" class="form-control" name="StrDateTime" value="<?php echo $result['sta_date_time']; ?>">
</div><br>

<div class="input-group">
<span class="input-group-addon">End Date & Time:</span>
<input type="datetime-local" class="form-control" name="EndDateTime" value="<?php echo $result['end_date_time']; ?>">
</div><br>

<div class="input-group">
<span class="input-group-addon">Total Amount:</span>
<input type="number" class="form-control" name="TotAmt" value="<?php echo $result['tot_amt']; ?>">
</div><br>

<div class="input-group">
<span class="input-group-addon">Paid Amount:</span>
<input type="number" class="form-control" name="PaidAmt" value="<?php echo $result['paid_amt']; ?>">
</div><br>

<div class="input-group">
<span class="input-group-addon">Collect Amount:</span>
<input type="number" class="form-control" name="CollectAmt" value="<?php echo $result['collect_amt']; ?>">
</div><br>

<!--
<input type="submit" class="btn btn-primary" name="oprnIUSD" value="Update" formaction="../controller/indexNew.php"><br>
-->

<input type="submit" class="btn btn-primary" name="oprnIUSD" value="Update" formaction="../model/DataUpdate.php"><br>

<br>
<a class='btn btn-info' href='javascript:history.go(-1)' role="button"> Back </a>

</div>
</form>



</div>
</body>
</html>

<?php
}else
{
include_once('../model/config/ConnDB.php');

$custName = $_GET['CustName'];
$custContNo = $_GET['CustContNo'];
$custEmail = $_GET['CustEmail'];
$strDateTime = $_GET['StrDateTime'];
$endDateTime = $_GET['EndDateTime'];
$totAmt = $_GET['TotAmt'];
$paidAmt = $_GET['PaidAmt'];
$collectAmt = $_GET['CollectAmt'];

	$qryUpdate = "UPDATE HallBooking SET cust_name='$custName',cust_cont_no='$custContNo', cust_email='$custEmail', sta_date_time='$strDateTime', end_date_time='$endDateTime', tot_amt=$totAmt, paid_amt=$paidAmt, collect_amt=$collectAmt WHERE cust_cont_no=$custContNo";

	$conn->exec($qryUpdate);
	echo "Data Updated SuccessFully..<br>";
}	
?>

<?php
include('../view/Footer.php');
?>