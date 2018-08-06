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
}
?>


<h2>Set Your Password..</h2>

<form method="GET">
<div class="form-group wid500">


<div class="input-group">
<span class="input-group-addon">Password:</span>
<input type="password" class="form-control" name="UserPwd" required>
</div><br>


<div class="input-group">
<span class="input-group-addon">Confirm Password:</span>
<input type="password" class="form-control" name="ConPwd" required>
</div><br>


<input type="submit" class="btn btn-primary" name="oprnIUSD" value="Set-Password" formaction="../model/DataInsertForgotPwd.php">

<input type="reset" class="btn btn-danger" name="" value="Reset"><br>

</div>
</form>
</div>

</body>
</html>


<?php
include_once('Footer.php');
?>