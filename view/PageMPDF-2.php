<?php 
include('Header.php');
?>


<?php
require_once __DIR__ . '/mpdf/vendor/autoload.php';

$mpdf = new \mpdf\vendor\Mpdf\Mpdf();
$mpdf->WriteHTML('<h1>Hello world!</h1>');
$mpdf->Output();
?>


<?php
//session_unset('msg');
include('Footer.php');
?>