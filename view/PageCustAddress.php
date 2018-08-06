<?php
//echo 'in view->PageCustAddress file<br>';
include('Header.php');
?>


<!DOCTYPE html>
<html>
<head>
<style type="text/css">
ul{
padding: 0;
margin: 0;
}

ul li {
list-style: none;
}
td{
	padding: 10px;
}

</style>
</head>
<body>

<form action="../model/DataInsertCustAddress.php" method="GET">
<table align="center" border="1" cellspacing="5">
<tr style="margin-bottom: 20px;">
<td>cust_email:</td>
<td><input type='text' name='cust_email' placeholder="cust_email" required></td>
</tr>

<tr>
<td>cust_address:</td>
<td>
<ul>
<li><input type='text' name='addrs_first_line[]' placeholder="addrs_first_line"></li>
<li><input type='text' name='addrs_second_line[]' placeholder="addrs_second_line"></li>
<li><input type='text' name='addrs_city[]' placeholder="addrs_city"></li>
<li><input type='text' name='addrs_state[]' placeholder="addrs_state"></li>
<li><input type='text' name='addrs_zip_code[]' placeholder="addrs_zip_code"></li>
</ul>
<ul id='fieldList'>
</ul>
</td>
</tr>

<tr>
<td><button id='addMore' class='btn btn-primary'>Add+ Address</button></td>
<td><button id='undo' class='btn btn-danger'>Undo Address</button></td>
</tr>

<tr><td></td>
<td><input type='submit' class='btn btn-info' value='Sumbit'></td></tr>

</table>	
</form>


<script type="text/javascript">
$(function(){
	$('#addMore').click(function(e){
		e.preventDefault();
		$('#fieldList').append("<li>&nbsp</li>");
		$('#fieldList').append("<li><input type='text' name='addrs_first_line[]' placeholder='addrs_first_line'></li>");
		$('#fieldList').append("<li><input type='text' name='addrs_second_line[]' placeholder='addrs_second_line'></li>");
		$('#fieldList').append("<li><input type='text' name='addrs_city[]' placeholder='addrs_city'></li>");
		$('#fieldList').append("<li><input type='text' name='addrs_state[]' placeholder='addrs_state'></li>");
		$('#fieldList').append("<li><input type='text' name='addrs_zip_code[]' placeholder='addrs_zip_code'></li>");
	});
	
		$('#undo').click(function(e){
		e.preventDefault();
		//$('#fieldList').children("li").remove();
		$('#fieldList').children("li").detach();
		
	});
});

</script>
</body>
</html>



<?php
include('Footer.php');
?>