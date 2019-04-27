<div style="height:30px; bottom:0px; position:fixed; text-align:center; width:100%; background-color:#444; border-bottom:1px solid darkgrey; border-top:1px solid lightgrey;">

<div class="row">
<div class="col-sm-2"><p id="wish"></p></div>
<div class="col-sm-1"></div>
<div class="col-sm-8"><p id="sitead"></p></div>
</div>


<script>

var wishLine = "<?php echo$wish;  ?>";
timedmsg1();

function timedmsg1(){
var t1 = setTimeout("timedmsg2()" , 4000);
document.getElementById("sitead").innerHTML = '<div style="color:white; text-align:center; margin-top:5px;">For any query or inquiry call us +919807264017 or mail us at rajatgupta200795@gmail.com.</div>';
}

function timedmsg2(){
var t2 = setTimeout("timedmsg3()" , 3000);
document.getElementById("sitead").innerHTML = '<div style="color:white; text-align:center; margin-top:5px;">Get your own website today. Call +919807264017</div>';
}

function timedmsg3(){
var t3 = setTimeout("timedmsg1()" , 10000);
document.getElementById("sitead").innerHTML = '<marquee SCROLLAMOUNT=10><div style="color:white; text-align:center; margin-top:5px;">If you have any issues related to our website, contact us now . Call us at +919807264017. Thank you for visiting our site.</div></marquee>';
}

timedwish1();
function timedwish1(){
var t3 = setTimeout("timedwish2()" , 500);
document.getElementById("wish").innerHTML = '<div style="color:white; text-align:center; margin-top:5px;"> ' + wishLine + '</div>';
}
function timedwish2(){
var t4 = setTimeout("timedwish1()" , 500);
document.getElementById("wish").innerHTML = '<div style="color:white; text-align:center; margin-top:5px;"></div>';
}

</script>

</div>
