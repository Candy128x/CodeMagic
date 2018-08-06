<?php
echo "in PagInfScr-getData.php... <br>";
if(!empty($_POST['id'])){
	
include_once('../model/config/ConnDB.php');

$lastID = $_POST['id'];

//var_dump($lastID);

$showLimit = 2;

$queryAll = $conn->prepare("SELECT COUNT(*) as num_rows FROM hallbooking WHERE id < ".$lastID." ORDER BY id DESC");
$queryAll->execute();

$rowAll = $queryAll->fetch(PDO::FETCH_ASSOC);
$allNumRows = $rowAll['num_rows'];

//$number_of_rows = $queryAll->fetch_assoc(); 
var_dump($number_of_rows);
exit();

$query = $conn->prepare("SELECT * FROM hallbooking WHERE id < ".$lastID." ORDER BY id DESC LIMIT ".$showLimit);
$query->execute(); 


if($query->rowCount() > 0){
	while($row = $query->fetch(PDO::FETCH_ASSOC)){
		$postID = $row['id'];
?>
<div class='list-item'><h4>
<?php echo $row['title']; ?>
</h4></div>
<?php }?> 
<?php if($allNumRows > $showLimit){?>
<div class="load-more" lastID="<?php echo $postID; ?>" style="display: none;">
        <img src="loading.gif"/>
    </div>
<?php }else{ ?>
    <div class="load-more" lastID="0">
        That's All!
    </div>
<?php }
}else{ ?>
    <div class="load-more" lastID="0">
        That's All!
    </div>
<?php
    }
}
?>

