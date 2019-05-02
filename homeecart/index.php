<?php include"inc/header.php"; ?>

<center>
<div style="font-size: 35px; ">Start Online Selling With Zero Investment</div>
Get membership and access unlimed quantity of trending products in all category.</br>
India's first B2B online market for retailers/resellers.
</center>

</br>
<div class="row" style="padding-top: 20px; background-color: #f9f9f9;">
<div class="col-sm-6">

<div style="background-color: #f32e34; padding: 20px; color: white; margin-top: -20px;">
<h2>Let's see five easy steps to start online bussiness with zero investment.</h2>
</br>
<ol style="line-height: 40px;">
<li>Create account, get memebership in diffrent plans.</li>
<li>Get access of inventory of 150+ trending products.</li>
<li>Select products & list it on online/offline market.</li>
<li>Generate orders, send order and shipping details to inventory owner.</li>
<li>Enjoy margin between selling price and actual inventory price.</li>
</ol>
</br></br>

</div>
</div>
<div class="col-sm-6">
<center><h3>Three Step From Dispatch To Delivery</h3></center>
<hr>
<div class=".row .container" style="line-height: 40px; color: #3b5f6d;">
<div class="col-xs-1"></div>
<div class="col-xs-2"><i class="fa fa-university" style="font-size:76px"></i>
</br>
Warehouse
</div>
<div class="col-xs-2"></div>
<div class="col-xs-2"><i class="fa fa-plane" style="font-size:76px;"></i>
</br>
Transport
</div>
<div class="col-xs-2"></div>
<div class="col-xs-2" style="text-align: center;"><span class="glyphicon glyphicon-home" style="font-size: 68px;"></span>
</br>
Home
</div>
</div>

</br>

<div style="padding-left: 90px; padding-right: 110px;">
<div id="delivery_line" style="height: 15px; background-color: #032359; width: 0%; border-radius: 5px; margin-top: 130px; border-right: 25px solid green;"></div>
</div>

<script type="text/javascript">
var dl = document.getElementById("delivery_line");
w=parseInt(dl.style.width);

//document.getElementById("w1").innerHTML = '<center><b>Process Order</b></center>Pass order and shipping details to inventory holder.';
increaseTime();

function initialize(){
w=0;
dl.style.width = w+"%";
document.getElementById("w1").innerHTML = '<center><b style="color:green;">Order Processing</b></center>Pass order and shipping details to inventory holder.';
document.getElementById("w2").innerHTML = '';
document.getElementById("w3").innerHTML = '';
setTimeout(increaseTime, 3000);
}

function increaseTime(){
w = w+1;
dl.style.width = w+"%";

if(w=="5") document.getElementById("w1").innerHTML = '<center><b style="color:green;"><span class="glyphicon glyphicon-ok"></span> Dispatched</b></center>Well packed order will be dispatched from warehouse.';
if(w=="50") document.getElementById("w2").innerHTML = '<b style="color:green;"><span class="glyphicon glyphicon-ok"></span> Shipping</b></br>We also provide shipping.';
if(w=="100") document.getElementById("w3").innerHTML = '<b style="color:green;"><span class="glyphicon glyphicon-ok"></span> Delivered</b></br>Item will be delivered to your customers.';

if(w!="100")
setTimeout(increaseTime, 50);
else{
setTimeout(initialize, 2000);
}
}

</script>

</br>
<div class="row" style="font-family: 'Roboto', sans-serif;">
<div class="col-xs-4" style="text-align: center;" id="w1"></div>
<div class="col-xs-1"></div>
<div class="col-xs-3" id="w2"></div>
<div class="col-xs-1"></div>
<div class="col-xs-3" id="w3"></div>
</div>

</div>
</div>
</div>

</br></br></br></br>

<center>
<h2>Start Your Own Bussiness Now</h2>
</br>
<a href="new-dropshipper-register.php" class="btn btn-info btn-lg"> Create Account </a>
</center>

</br></br></br></br>

<div style="padding: 30px; width: 100%; background-color: #f9f9f9; line-height: 30px;">
<h3>Who can Join and why Should You Join It ?</h3>
<hr>
<ul>
<li>Well, anyone who can sell something can join this program. Even a person with zero knowlege about bussiness can earn money easily with this model.</li> 
<li>Thousands of people are working with us and providing quality products to their customers at best price and earning money without investing money.</li>
<li>Apply your own marketing strategy to get order because more order means more margin.</li>
<li>You can join it as a full time or part time work from home. No need of inventory and investment.</li>
</ul>
</br></br>

<h3>See Some Real Life Dropshipper</h3>
<hr>
<div class="row">
<div class="col-sm-4">
<img src="pic/online-seller.jpg" style="width: 100%; height: 260px;" class="img-circle" alt="Students">	
</br></br>
<b><center>Online Seller</center></b>
<hr>
<p style="font-size: 15px; margin-left: 8%;">Online sellers who sell on online marketplace (Amazon, Flipkart etc.) and don't want to invest on inventory, are selling products without investing money.</p>
<hr>
</div>
<div class="col-sm-4">
<img src="pic/students.png" style="width: 100%; height: 260px;" class="img-circle" alt="Students">
</br></br>
<b><center>Students</center></b>
<hr>
<p style="font-size: 15px; margin-left: 8%;">Students studying in schools, colleges are selling products online as a part time work to earn money in short time without investing capital.</p>
<hr>
</div>
<div class="col-sm-4">
<img src="pic/housewives.png" style="width: 100%; height: 260px;" class="img-circle" alt="Students">
</br></br>
<b><center>Housewives</center></b>
<hr>
<p style="font-size: 15px; margin-left: 8%;">Many housewives with no bussiness knowledge, are working from home and they earn good money.</p>
<hr>
</div>
</div>

</div>



<?php include"inc/footer.php"; ?>
