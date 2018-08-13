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
<br><br>

<code>Hide in 3re sec</code>
<p class="hide3sec">i m hide in 3re sec</p>
<br><br>

<button class="fadeOut5sec">fadeOut in 3re sec</button>
<button class="fadeIn5sec">fadeIn fast</button>
<p class="fade5sec">i m fade in 5re sec</p>
<br><br>

<code id="flip">single click to slide down & double click to slide up</code>
<pre id="flipPre">
slide down slow
&
slide up 1 in sec
</pre> 
<br><br>

<code id="anim">flip to right 300px</code>
<div id="aniBox" style="background:#98bf21;height:100px;width:100px;position:absolute;"></div>
<br><br>


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

$("p.hide3sec").click(function(){
	$("p.hide3sec").hide(3000);
});

$("button.fadeOut5sec").click(function(){
	$("p.fade5sec").fadeOut(3000);
});
$("button.fadeIn5sec").click(function(){
	$("p.fade5sec").fadeIn("fast");
});

$("#flip").click(function(){
	$("#flipPre").slideDown("slow");
});
$("#flip").dblclick(function(){
	$("#flipPre").slideUp(1000);
});

$("#ani").click(function(){
	$("#aniBox").animate({left: '300px'});
});
</script>
</body>
</html>
<?php
include 'Footer.php';
?>
