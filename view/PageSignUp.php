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

<h2>SignUp..</h2>

<!--InsertData-->
<form method="GET">
<div class="form-group wid500">

<div class="input-group">
<span class="input-group-addon">Name:</span>
<input type="text" class="form-control" name="UserName" required>
</div><br>


<div class="input-group">
<span class="input-group-addon">Email ID:</span>
<input type="email" class="form-control" name="UserEmail" required>
</div><br>


<div class="input-group">
<span class="input-group-addon">Password:</span>
<input type="password" class="form-control" name="UserPwd" required>
</div><br>


<div class="input-group">
<span class="input-group-addon">Confirm Password:</span>
<input type="password" class="form-control" name="ConPwd" required>
</div><br>

<div class="checkbox">
<label><input type="checkbox" name="SavePwd">Save Password..</label>
</div><br>

<a href='../view/ForgotPasswordMail.php'>forgot password !</a><br><br>

<input type="submit" class="btn btn-primary" name="oprnIUSD" value="SignUp" formaction="../model/DataInsertSignUp.php">

<input type="reset" class="btn btn-danger" name="" value="Reset"><br><br>

<span style="font-size: 22px; font-style: oblique;">
already created account<a href="../view/PageSignIn.php">SignIn</a>
</span>

</div>
</form>
</div>

</body>
</html>


<?php
include_once('Footer.php');
?>