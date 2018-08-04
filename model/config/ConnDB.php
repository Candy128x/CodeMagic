<?php
//echo "in ConnDB.. <br>";

//$dbConn = new PDO("mysql:host=localhost; dbname=UserDB", 'root', '');
$dbConn = new PDO("mysql:host=localhost; dbname=UserDB", 'root', '123456');

	$serverName = 'localhost';
	$dataBase = 'UserDB';
	$userName = 'root';
	$passWord = '123456';
	
try
{
	$conn = new PDO("mysql:host=$serverName; dbname=$dataBase", $userName, $passWord);
	
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//echo "Connected Successfully..ConnDB..<br>";
	
}
catch(PDOException $e)
{
	echo "Connection Failed.. <br>".$qryInsert."<br>".$e->getMessage();
}

//$conn = null;

?>