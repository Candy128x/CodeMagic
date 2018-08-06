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
if(!empty($_SESSION['pwdNotify'])) {
    $message = $_SESSION['pwdNotify'];
    
    echo "<div class='alert alert-info' id='autoHide'>".$message."</div>";
	//session_unset();
	unset($_SESSION['pwdNotify']);
	unset($_SESSION['userEmail']);
}
?>

<h2>Enter Your Email..</h2>

<!--InsertData-->
<form method="GET">
<div class="form-group wid500">


<div class="input-group">
<span class="input-group-addon">Email ID:</span>
<input type="email" class="form-control" name="UserEmail" required>
</div><br>


<input type="submit" class="btn btn-primary" name="oprnIUSD" value="Submit-Mail" formaction="../model/DataInsertForgotMail.php">

<input type="reset" class="btn btn-danger" name="" value="Reset"><br>

</div>
</form>
</div>

</body>
</html>


<?php
include_once('Footer.php');
?>