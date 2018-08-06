<?php

//hide
session_start();
session_destroy(); // Is Used To Destroy All Sessions

header("Refresh:2; url=../view/indexNew.php");
exit('destroy all session.. ');
?>