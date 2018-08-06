<?php 
include('Header.php');
?>

<!DOCTYPE html>
<html>
<body>
<div class="container">

<h2>Insert Your Data</h2>

<!--InsertData-->
<form method="GET">
<div class="form-group wid500">

<div class="input-group">
<span class="input-group-addon">Cust Name:</span>
<input type="text" class="form-control" name="CustName">
</div><br>

<div class="input-group">
<span class="input-group-addon">Cust Contact No:</span>
<input type="number" class="form-control" name="CustContNo" placeholder=" Eg: 9819253545" required>
</div><br>

<div class="input-group">
<span class="input-group-addon">Cust Email ID:</span>
<input type="email" class="form-control" name="CustEmail">
</div><br>

<div class="input-group">
<span class="input-group-addon">Start Date & Time:</span>
<input type="date" class="form-control" name="StrDateTime">
</div><br>

<div class="input-group">
<span class="input-group-addon">End Date & Time:</span>
<input type="date" class="form-control" name="EndDateTime">
</div><br>

<div class="input-group">
<span class="input-group-addon">Total Amount:</span>
<input type="number" class="form-control" name="TotAmt">
</div><br>

<div class="input-group">
<span class="input-group-addon">Paid Amount:</span>
<input type="number" class="form-control" name="PaidAmt">
</div><br>

<div class="input-group">
<span class="input-group-addon">Collect Amount:</span>
<input type="number" class="form-control" name="CollectAmt">
</div><br>

<!--
<input type="submit" class="btn btn-primary" name="oprnIUSD" value="Insert" formaction="../controller/indexNew.php"><br>
-->

<input type="submit" class="btn btn-primary" name="oprnIUSD" value="Insert" formaction="../model/DataInsert.php"><br>

</div>
</form>



</div>
</body>
</html>

<?php
include('Footer.php');
?>