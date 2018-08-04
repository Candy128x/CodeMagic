<?php 
include('Header.php');
?>

<!DOCTYPE html>
<html>
<body>
<div class="container">

<h2>Listing from Database</h2>
<h5>#InfiniteScroll</h5>

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


<?php
include_once('../model/config/ConnDB.php');
/*
$query ="SELECT * FROM HallBooking ORDER BY id DESC";
$pdo_statement = $conn->prepare($query);
$pdo_statement->execute();
$result = $pdo_statement->fetchAll();

	echo '<br>SQL Qry:..<br>'.$query.'<br><br>';
	//var_dump('SQL Qry:<br>',$pdo_statement);
	//exit('in search cust_name..');
*/
?>


<div style="overflow-x:auto;">
<table border="1px" class="table table-striped" cellpadding="10" cellspacing="10">
<thead>
<tr>
<th>#ID</th>
<th>Cust Name</th>
<th>Cust Cont No</th>
<th>Cust Email</th>
<th>Start Date & Time</th>
<th>End Date & Time</th>
<th>Total Amount</th>
<th>Paid Amount</th>
<th>Collect Amount</th>
<th class='styOprnIUSD'>Operation</th>
</tr>
</thead>
<tbody>


<div id="postList">
<?php
	
$query = $conn->prepare("SELECT * FROM hallbooking ORDER BY id DESC LIMIT 10");
$query->execute();

var_dump($query);

if($query->fetchColumn() > 0)
{
	while($row = $query->fetch(PDO::FETCH_ASSOC))
	//foreach($result as $row) 
	{
		$postID = $row['id'];
?>
<div class="list-item"><h4><?php //echo $row['id']; ?></h4></div>
<tr>
	<td><?php echo $row['id']; ?></td>
	<td><?php echo $row['cust_name']; ?></td>
	<td><?php echo $row['cust_cont_no']; ?></td>
	<td><?php echo $row['cust_email']; ?></td>
	<td><?php echo $row['sta_date_time']; ?></td>
	<td><?php echo $row['end_date_time']; ?></td>
	<td><?php echo $row['tot_amt']; ?></td>
	<td><?php echo $row['paid_amt']; ?></td>
	<td><?php echo $row['collect_amt']; ?></td>
	<td>
		<a class='btn btn-info' data-toggle='tooltip' title='View..' 
		href='../model/DataSelect.php?id=<?php echo $row['id'];?>'>
		<i class='glyphicon glyphicon-fullscreen'></i></a>
		
		<a class='btn btn-success' data-toggle='tooltip' title='Update..' 
		href='../model/DataUpdate.php?id=<?php echo $row['id'];?>'>
		<i class='glyphicon glyphicon-retweet'></i></a>
		
		<a class='btn btn-danger delData' data-toggle='tooltip' title='Delete..' 
		href='../model/DataDelete.php?id=<?php echo $row['id'];?>'>
		<i class='glyphicon glyphicon-trash'></i></a></td>
</tr>
<?php
	}
?>

<div class="load-more" lastID="<?php echo $postID; ?>" style="display: none;">
        <img src="loading.gif"/>
</div>
<?php
}
?>
</div>

</tbody>
</table>
</div>

</form>
</div>


<script type="text/javascript">
$('.delData').click(function(){
	return confirm("You sure to Delete Data ?");
})


//infinite-scroll-sql-row-fetch
$(document).ready(function(){
	$(window).scroll(function(){
		var lastID.$('.load-more').attr('lastID');
		if(($(window).scrollTop() == $(document).height() - $(window).height()) && (lastID !=0)){
			$.ajax({
				type:'POST',
				url:'PageInfiniteScrollgetData.php',
				data:'id='+lastID,
				beforeSend:function(){
					$('.load-more').show();
				},
				success:function(html){
					$('load-more').remove();
					$('#postList').append(html);
				}
			});
		}
	});
});


$(window).scroll(function() {
   if($(window).scrollTop() + $(window).height() == $(document).height()) {
       alert("bottom!");
   }
});
</script>

</body>
</html>

<?php
//session_unset('msg');
include('Footer.php');
?>