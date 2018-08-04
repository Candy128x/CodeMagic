<?php
include_once('Header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>


<div class="container">

<?php
session_start();
if(!empty($_SESSION['pwdNotify'])) 
{
    $message = $_SESSION['pwdNotify'];
    echo "<div class='alert alert-info' id='autoHide'>".$message."</div>";
	//session_unset();
	unset($_SESSION['pwdNotify']);
	unset($_SESSION['userEmail']);
}
?>


<form method="GET">
<div class="form-group wid500">

<h3>Home Page :)</h3>

</div>
</form>
</div>

</body>
</html>


<?php
//session_unset();
include_once('Footer.php');
?>