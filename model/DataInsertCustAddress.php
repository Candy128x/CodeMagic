<?php

$custEmail = $_GET['cust_email'];
$addrsFirstLine = $_GET['addrs_first_line'];
$addrsSecondLine = $_GET['addrs_second_line'];
$addrsCity = $_GET['addrs_city'];
$addrsState = $_GET['addrs_state'];
$addrsZipCode = $_GET['addrs_zip_code'];

//var_dump($addrsFirstLine,$addrsSecondLine,'<br><br>');
//exit('<br> out from model->DataInsertCustAddress.. <br>');

echo '<br><br> count: ';
var_dump(count($addrsFirstLine));



include_once('../model/config/ConnDB.php');
//echo $conn;

//$qryInsert = "INSERT INTO user_addrs (cust_email, addrs_first_line, addrs_second_line, addrs_city, addrs_state, addrs_zip_code) VALUES ('$custEmail', ?, ?, ?, ?, ?)";
	
//$qryInsert = "INSERT INTO user_addrs (cust_email, addrs_first_line, addrs_second_line, addrs_city, addrs_state, addrs_zip_code) VALUES (:custEmail, :addrsFirstLine, :addrsSecondLine, :addrsCity, :addrsState, :addrsZipCode)";

//$qryInsert = "INSERT INTO user_addrs (cust_email, addrs_first_line, addrs_second_line, addrs_city, addrs_state, addrs_zip_code) VALUES ('$custEmail', '$addrsFirstLine', '$addrsSecondLine', '$addrsCity', '$addrsState', '$addrsZipCode')";

//$qryInsert = "INSERT INTO user_addrs (cust_email, addrs_first_line, addrs_second_line, addrs_city, addrs_state, addrs_zip_code) VALUES ('$custEmail', '$addrsFirstLine[$i]', '$addrsSecondLine[$i]', '$addrsCity[$i]', ' $addrsState[$i]', '$addrsZipCode[$i]')";

//$stm = $conn->prepare($qryInsert);

for($i=0; $i<count($addrsFirstLine); $i++)
{
	$qryInsert = "INSERT INTO user_addrs (cust_email, addrs_first_line, addrs_second_line, addrs_city, addrs_state, addrs_zip_code) VALUES ('$custEmail', '$addrsFirstLine[$i]', '$addrsSecondLine[$i]', '$addrsCity[$i]', '$addrsState[$i]', '$addrsZipCode[$i]')";
	//$a = $stm->execute('$addrsFirstLine[$i]', '$addrsSecondLine[$i]', '$addrsCity[$i]', '$addrsState[$i]', '$addrsZipCode[$i]');
	$stm = $conn->prepare($qryInsert);
	$stm->execute(array($i));
	var_dump($custEmail,  $addrsFirstLine[$i]);
	echo '<br><br><br>';
	var_dump($qryInsert);
}
//$stm->execute();
echo "Data Inserted SuccessFully..<br>";


if($stm->execute === false)
{
	echo "Data Inserted Faild..<br>";
}
	

$conn = null;
?>