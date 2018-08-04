<?php
exit('out..here..config..');
echo "in Config..<br>";

//$dbConn = new PDO("mysql:host=localhost; dbname=HallBook", 'root', '');
$dbConn = new PDO("mysql:host=localhost; dbname=HallBook", 'root', '');

class Config
{
	
	public function __construct()
	{
		
	}
	
	public function connToDB()
	{
		$serverName = 'localhost';
		$dataBase = 'HallBook';
		$userName = 'root';
		$passWord = '';
		
		try
		{
		$conn = new PDO("mysql:host=$serverName; dbname=$dataBase", $userName, $passWord);
		
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			echo "Connected SuccessFully..<br>";
		}
		catch(PDOException $e)
		{
			echo "Connection Failed <br>".$e->getMessage();
		}
		
	}
	
}

//  Test
//$objCongig = new Config();
//$objCongig->connToDB();


?>