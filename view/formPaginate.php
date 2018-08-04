<?php 
include('Header.php');
?>

<!DOCTYPE html>
<html>
<head>
<style>
.button_link {color:#FFF;text-decoration:none; background-color:#428a8e;padding:10px;}
#keyword{border: #CCC 1px solid; border-radius: 4px; padding: 7px;background:url("demo-search-icon.png") no-repeat center right 7px; width: auto;}
.btn-page{margin-right:10px;padding:5px 10px; border: #CCC 1px solid; background:#FFF; border-radius:4px;cursor:pointer;}
.btn-page:hover{background:#F0F0F0;}
.btn-page.current{background:#F0F0F0;}
</style>
</head>
<body>
<div class="container">

<h2>Listing from Database</h2>
<h5>#Paginate</h5>

<?php
define("ROW_PER_PAGE",5);
include_once('../model/config/ConnDB.php');


$search_keyword = ''; 
//$sql = '';

unset($sqlQry);

if(!empty($_GET['search']['keyword']))
{
	$search_keyword = $_GET['search']['keyword'];
	$sqlQry[] = 'cust_name LIKE '.$search_keyword.' OR cust_cont_no LIKE '.$search_keyword.' OR cust_email LIKE '.$search_keyword.' OR sta_date_time LIKE '.$search_keyword.' OR end_date_time LIKE '.$search_keyword.' OR tot_amt LIKE '.$search_keyword.' OR paid_amt LIKE '.$search_keyword.' OR collect_amt LIKE '.$search_keyword;
}


if(!empty($_GET['search']['keyword_id']))
{
	$search_keyword = $_GET['search']['keyword_id'];
	$sqlQry[] = 'id LIKE '.$search_keyword;
}


if(!empty($_GET['search']['keyword_cust_name']))
{
	$search_keyword = $_GET['search']['keyword_cust_name'];
	$sqlQry[] = 'cust_name LIKE '.$search_keyword;
}


if(!empty($_GET['search']['keyword_cust_cont_no']))
{
	$search_keyword = $_GET['search']['keyword_cust_cont_no'];
	$sqlQry[] = 'cust_cont_no LIKE '.$search_keyword;
}


$sql = 'SELECT * FROM HallBooking';

if(!empty($sqlQry))
{
	$sql .= ' WHERE ' . implode(' AND ',$sqlQry).' ORDER BY id DESC'; 
}

if(empty($sqlQry))
{
	$sql .= ' ORDER BY id DESC'; 
}


// $sql = 'SELECT * FROM HallBooking WHERE cust_name LIKE :keyword OR cust_cont_no LIKE :keyword OR cust_email LIKE :keyword OR sta_date_time LIKE :keyword OR end_date_time LIKE :keyword OR tot_amt LIKE :keyword OR paid_amt LIKE :keyword OR collect_amt LIKE :keyword ORDER BY id DESC';

//  Pagination
$per_page_html = '';
$page = 1;
$start = 0;
if(!empty($_GET["page"]))
{
	$page = $_GET["page"];
	$start=($page-1) * ROW_PER_PAGE;
}
$limit = " limit ".$start.",".ROW_PER_PAGE;
$pagination_statement = $conn->prepare($sql);
$pagination_statement->bindValue(':keyword', '%'.$search_keyword.'%', PDO::PARAM_STR);
$pagination_statement->execute();

$row_count = $pagination_statement->rowCount();
if(!empty($row_count))
{
	$per_page_html .= "<div style='text-align: center; margin:20px 0px;'>";
	$page_count = ceil($row_count/ROW_PER_PAGE);
	
	if($page_count>1)
	{
		for($i=1; $i<=$page_count; $i++)
		{
			if($i==$page)
			{
				$per_page_html .= '<input type="submit" name="page" value="'.$i.'" class="btn-page current" />';
			}
			else{
				$per_page_html .= '<input type="submit" name="page" value="'.$i.'" class="btn-page" />';
			}
		}
	}
	$per_page_html .= "</div>";
}

$query = $sql.$limit;
$pdo_statement = $conn->prepare($query);
$pdo_statement->bindValue(':keyword', '%'.$search_keyword.'%', PDO::PARAM_STR);
$pdo_statement->execute();
$result = $pdo_statement->fetchAll();

	var_dump($pdo_statement);
	//exit('in search cust_name..');

?>


<?php
session_start();
if(!empty($_SESSION['msg'])) {
    $message = $_SESSION['msg'];
    
    echo "<div class='alert alert-info'>".$message."</div>";
}
//session_unset('msg'); //inFooter..
?>


<!--
<a href='../model/DataDelete.php?id=<?php echo $row['id'];?>'>Xdel</a>
-->
<div class="delSesion alert alert-info" id="delStatus"></div>


<form name ='' action='' method='GET'>
<div style='text-align: right; margin:20px 0px;'>
<input type='text' name='search[keyword]' 
value="<?php echo $search_keyword; ?>" id='keyword' placeholder=" Search.. ?" maxlength='16'>
</div>


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

	<tr>
<td><input type='text' name='search[keyword_id]' value="<?php echo $search_keyword; ?>" id='keyword' placeholder=" Search.. ?" maxlength='16'></td>
<td><input type='text' name='search[keyword_cust_name]' value="<?php echo $search_keyword; ?>" id='keyword' placeholder=" Search.. ?" maxlength='16'></td>
<td><input type='text' name='search[keyword_cust_cont_no]' value="<?php echo $search_keyword; ?>" id='keyword' placeholder=" Search.. ?" maxlength='16'></td>
<td><input type='text' name='search[keyword_cust_email]' value="<?php echo $search_keyword; ?>" id='keyword' placeholder=" Search.. ?" maxlength='16'></td>
<td><input type='text' name='search[keyword_sta_date_time]' value="<?php echo $search_keyword; ?>" id='keyword' placeholder=" Search.. ?" maxlength='16'></td>
<td><input type='text' name='search[keyword_end_date_time]' value="<?php echo $search_keyword; ?>" id='keyword' placeholder=" Search.. ?" maxlength='16'></td>
<td><input type='text' name='search[keyword_tot_amt]' value="<?php echo $search_keyword; ?>" id='keyword' placeholder=" Search.. ?" maxlength='16'></td>
<td><input type='text' name='search[keyword_paid_amt]' value="<?php echo $search_keyword; ?>" id='keyword' placeholder=" Search.. ?" maxlength='16'></td>
<td><input type='text' name='search[keyword_collect_amt]' value="<?php echo $search_keyword; ?>" id='keyword' placeholder=" Search.. ?" maxlength='16'></td>
<td></td>
	</tr>


<?php
if(!empty($result)) 
{
	foreach($result as $row) 
	{
?>
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
		<a href='../model/DataSelect.php?id=<?php echo $row['id'];?>'>
		<i class='glyphicon glyphicon-eye-open padd-10'></i></a>
		
		<a href='../model/DataUpdate.php?id=<?php echo $row['id'];?>'>
		<i class='glyphicon glyphicon-pencil padd-10'></i></a>
		
		<a class='delData' href="../model/DataDelete.php?id=<?php echo $row['id']; ?>">
		<i class='glyphicon glyphicon-trash padd-10'></i></a></td>
</tr>
<?php
	}
}
?>
</tbody>
</table>
</div>

<?php
echo $per_page_html;
?>
</form>
</div>


<script type="text/javascript">

$('.delData').click(function(){
	return confirm("Sure You want to Delete Data ?");
})

</script>

</body>
</html>

<?php
//session_unset('msg');
include('Footer.php');
?>