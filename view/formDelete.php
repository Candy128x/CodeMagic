<?php 
include('Header.php');
?>

<!DOCTYPE html>
<html>
<body>
<div class="container">

<h2>Delete Your Data</h2>

<!--InsertData-->
<form method="POST">
<div class="form-group wid500">

<div class="input-group">
<span class="input-group-addon">Cust Contact No:</span>
<input type="number" class="form-control" name="CustContNo" placeholder=" Eg: 9819253545 (Previous: MobNo..)" required>
</div><br>

<input type="submit" class="btn btn-danger" value="delete" formaction="../../model/DataDelete.php"><br>
</div>
</form>

</div>
</body>
</html>

<?php
include('Footer.php');
?>