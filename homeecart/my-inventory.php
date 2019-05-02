<?php include"inc/header.php"; 
if(!isset($_COOKIE['user_login']) && basename($_SERVER['PHP_SELF']) != 'index.php') 
header("location:index.php");

?>

<div class="container-fluid" style="font-size: 14px;">
<center><h3>My Inventory</h3></center>
<hr>

<?php

//echo'<div style="color:green; font-size:20px; font-weight:bold;">'.$wish.' '.ucwords(explode(" ",$name)[0]).' !</div>';

$query=$con->query("SELECT * FROM payment_details WHERE  username='$username' order by plan_end_date ASC limit 1");
if($query->num_rows>0){
while($row = $query->fetch_assoc()){
$start_date = $row['plan_start_date'];
$end_date = $row['plan_end_date'];
$plan_code = $row['plan_code'];

$today = date("d-m-Y");
$expire = $end_date; //from db
$today_time = strtotime($today);
$expire_time = strtotime($expire);

$total_product=0;
$query1 = "SELECT * from inventory_details where status='1' and access_".$plan_code."='Yes'";
$query1 = $con->query($query1);
if($query1->num_rows>0){
$total_product=$query1->num_rows;
}
}
}
if ($expire_time > $today_time) { 
echo'
<div class="row"><div class="col-sm-3"><b>Current Plan : </b>'.ucwords($member_plan_name).'</div><div class="col-sm-3"><b>Start Date : </b>'.ucwords($start_date).'</div><div class="col-sm-3"><b>Expiry Date : </b>'.ucwords($end_date).'</div><div class="col-sm-3"><b>Total Products : </b>'.$total_product.'</div></div>';
}

?>

</br></br></br>
<div class="row" style="font-weight: bold;">
<div class="col-xs-4">SNo.&nbsp; Title</div>
<div class="col-xs-1">Quantity</div>
<div class="col-xs-1">GST</div>
<div class="col-xs-1">Price</div>
<div class="col-xs-1">Weight</div>
<div class="col-xs-1">Dimensions</div>
<div class="col-xs-1">Packing</div>
<div class="col-xs-1">Shipping</div>
<div class="col-xs-1">Action</div>
</div>
<hr>

<?php

$silver_count=0;
$gold_count = 0;
$diamond_count = 0;
$query = "SELECT * from inventory_details where status='1' and access_".$member_plan_code."='Yes'";
$query = $con->query($query);
if($query->num_rows>0){
$i=0; $silver_count=0; $gold_count=0; $diamond_count=0;
while($row = $query->fetch_assoc()){
$i++;
$item_id = $row['item_id'];
$item_name = ucwords($row['item_name']);
$category = ucwords($row['category']);
$quantity = $row['quantity'];
$gst = $row['gst_rate'];
$plan_code = "price_".$member_plan_code;
$price = $row[$plan_code];
$item_link = $row['item_link'];
$weight = $row['weight'];
$length = $row['length'];
$width = $row['width'];
$height = $row['height'];
$packing_cost = $row['packing_cost'];
$shipping_cost = $row['shipping_cost'];
$pic_url = $row['pic_url'];

echo'
<div class="row">
<div class="col-xs-4" style="color: darkblue; cursor: pointer;" onclick="show_item_detail'.$i.'();"><b>#'.$i.'.&nbsp; </b>'.$item_name.'</div>
<div class="col-xs-1">'.$quantity.'</div>
<div class="col-xs-1">'.$gst.'%</div>
<div class="col-xs-1">'.$price.'/-</div>
<div class="col-xs-1">'.$weight.' k.g.</div>
<div class="col-xs-1">'.$length.'x'.$width.'x'.$height.'</div>
<div class="col-xs-1">'.$packing_cost.'/-</div>
<div class="col-xs-1">'.$shipping_cost.'/-</div>
<div class="col-xs-1" onclick="show_item_detail'.$i.'();" style="color:blue; cursor:pointer;">Open</div>
</div>
';


echo'
<script>
function show_item_detail'.$i.'(){
if ( document.getElementById("item_detail_div'.$i.'").classList.contains("hidden") )
document.getElementById("item_detail_div'.$i.'").classList.toggle("hidden");
else document.getElementById("item_detail_div'.$i.'").classList.toggle("hidden");
}
</script>

</br>
<div class="container-fluid hidden" id="item_detail_div'.$i.'" style="position:fixed; top:10px; margin-left:4%; z-index:1; width:90%;">
<div style="background-color:#f9f9f9; padding:50px; border:2px solid lightgrey; border-radius:15px;">
<b style="background-color:red; color:white; padding:5px; padding-left:13px; padding-right:13px; border-radius:5px; position:absolute; right:7%; cursor:pointer;" onclick="show_item_detail'.$i.'()"> X </b>
<h3 style="text-align:center;">Product Details</h3>
<hr>
<div class="row">
<div class="col-xs-1"></div>
<div class="col-xs-3"><img src="./item_pic/'.$pic_url.'" style="width:100%; height:auto;"></div>
<div class="col-xs-1"></div>
<div class="col-xs-5" style="line-height:30px;">
<b>Name : </b>'.$item_name.'</br>
<b>Quantity : </b>'.$quantity.'</br>
<b>Category : </b>'.$category.'</br>
<b>GST : </b>'.$gst.' %</br>
<b>Links : </b> ';
$k=explode(",", $item_link);
for($link=0;$link<sizeof($k);$link++){
echo'<a href="'.$k[$link].'">Link '.$link.' </a>';
}
echo'
<hr>
<b>Price : </b> '.$price.'/-</br>';

echo'<hr>
<b>Weight : </b>'.$weight.' k.g. </br>
<b>Dimensions : </b>'.$length.'x'.$width.'x'.$height.'  cm.
<hr>
<b>Packing Cost : </b>'.$packing_cost.' /-</br>
<b>Packing Cost : </b>'.$shipping_cost.' /-</br>
</br>
<form class="navbar-form">
<center><a href="generate-new-order.php?item_id='.$item_id.'" class="btn btn-success">Create Order Now</a></center>
</form>
';
echo'
</div>
</div>
</div>
</div>
';

}
}
else echo'No item found. Please add first item in inventory. Click <a href="add-new-product.php">here</a>';

echo'<script>
document.getElementById("total_item").innerHTML = "'.$query->num_rows.'";
document.getElementById("silver_item").innerHTML = "'.$silver_count.'";
document.getElementById("gold_item").innerHTML = "'.$gold_count.'";
document.getElementById("diamond_item").innerHTML = "'.$diamond_count.'";
</script>';


?>
</div>
</div>
</div>
</div>
</div></div>


<?php include"inc/footer.php"; ?>
