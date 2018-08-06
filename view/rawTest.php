<?php

$tockenSHA = hash('sha256','abc@m.com');
$tockenB2H = bin2hex($tockenSHA);

echo strlen($tockenSHA);
echo "<br>".$tockenSHA."<br>".$tockenB2H;

//hide
//for NoAuth > debug..
session_start();
unset($_SESSION['log']);
session_destroy(); // Is Used To Destroy All Sessions

?>