<?php
include 'Header.php';
?>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<h3>jQuery-Basic Concept</h3>

<p>click me, i m Para</p>
<p class="pReadyHide" title="click to hide me..">doc ready i'm hide :( </p>

<br><br>

<p class="pClickApple" title="click to show Banana Content..">click to Hide | Apple Content</p>
<p class="pClickBanana" title="click to show Apple Content..">click to Hide | Banana Content</p>

<br><br>

<p class="pdbClick" title="click to hide me..">single click to hide OR<br> double click to show</p>
<p id="pdbContx" title="click to hide me..">i m single/dbclick Contx..</p>

<br><br>

<p claas="pFocus" href="">get huge disscount.. !</p>
<p class="pFoDis">50% Disscount</p>
<p class="pMoDis">80% Disscount</p>

<script type='text/javascript'>
$(document).ready(function(){
    $("p.pReadyHide").hide();
});

$("p.pClickApple").click(function(){
    $("p.pClickApple").hide();
    $("p.pClickBanana").show();
})

$("p.pClickBanana").click(function(){
    $("p.pClickApple").show();
    $("p.pClickBanana").hide();
})

$("p.pdbClick").click(function(){
    $("#pdbContx").hide();
})
$("p.pdbClick").dblclick(function(){
    $("#pdbContx").show();
})

$("p.pFocus").focus(function(){
    $("p.pFoDis").hide();
})
$("p.pFocus").mouseover(function(){
    $("p.pMoDis").hide();
})
</script>
</body>
</html>
<?php
include 'Footer.php';
?>
