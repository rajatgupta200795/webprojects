<?php include"inc/header.php"; 
if(!isset($_COOKIE['user_login']) && basename($_SERVER['PHP_SELF']) != 'index.php') 
header("location:index.php");
ob_start();
?>

<div class="container-fluid" style="font-size: 15px;">
<center><h3>Create New Order</h3></center>
<hr>

<?php

$item_id = @$_GET['item_id'];
$silver_count=0;
$gold_count = 0;
$diamond_count = 0;
$query = "SELECT * from inventory_details where status='1' and access_".$member_plan_code."='Yes' and item_id='".$item_id."'";
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
$total=((1*$price)+(1*$price)*$gst/100+1*$packing_cost+1*$shipping_cost);
}
}

echo'
<form class="navbar-form" method="POST">
<div class="row">
<div class="col-xs-1"></div>
<div class="col-xs-5" style="line-height:50px;">
<h3 style="color:#1a2b7e;">Customer Details</h3>
<hr style="height:2px; background-color: grey;">
<b>Customer Name : </b><input type="" class="form-control" size="40" name="customer_name" required></br>
<b>Mobile : </b><input type="" class="form-control" name="mobile" required></br>
<b>Email : </b><input type="" class="form-control" name="email" size="30"></br>
<b>Street : </b><input type="" class="form-control" name="street" size="50" required></br>
<b>City : </b><input type="" class="form-control" name="city" required></br>
<b>State : </b><input type="" class="form-control" name="state" required></br>
<b>Pin Code : </b><input type="text" max="999999" class="form-control" name="pincode" required></br>
</div>
';


echo'

<div class="col-xs-5" style="line-height:45px;">
<h3 style="color:#1a2b7e;">Product Details</h3>
<hr style="height:2px; background-color: grey;">
<b>Item Name : </b>'.$item_name.'</br>
<b>Price : </b>'.$price.' /-</br>
<b>GST Rate : </b>'.$gst.' %</br>
<b>Packing Cost : </b>'.$packing_cost.'/-</br>
<b>Shipping Cost : </b>'.$shipping_cost.'/-</br>
<b>Quantity : </b><input type="number" min="1" value="1" name="quantity" oninput="change_order_details()" id="order_quantity_input_id" class="form-control" size="5"></br>
<b>Invoice Bill : </b><input type="number" class="form-control" name="bill" required> (Selling Price For Customer)

</div>
</div>
<hr>

<div class="container">
<h3 style="color:#1a2b7e;">Calculation</h3>
<hr style="height:2px; background-color: grey;">
<div class="row" style="font-weight:bold;">
<div class="col-sm-1">Quantity</div>
<div class="col-sm-1">Price</div>
<div class="col-sm-1">GST</div>
<div class="col-sm-1">Packing</div>
<div class="col-sm-1">Shipping</div>
<div class="col-sm-4">Calculation</div>
<div class="col-sm-1">Total</div>
</div>
<hr>	
<div class="row">
<div class="col-sm-1" id="order_quantity_id">1</div>
<div class="col-sm-1">'.$price.'/-</div>
<div class="col-sm-1">'.$gst.'%</div>
<div class="col-sm-1">'.$packing_cost.'/-</div>
<div class="col-sm-1">'.$shipping_cost.'/-</div>
<div class="col-sm-4" id="calculation_id"><b>(</b>1 <b>x</b> '.$price.'<b>) x (</b>1<b>x</b> '.$price.'<b>) x </b>0.'.$gst.'<b> + </b>'.$packing_cost.'<b> + </b>'.$shipping_cost.'</div>
<div class="col-sm-1" id="total_id">'.$total.'/-</div>
</div>

</br>
<hr>


</div>


<center>
<input type="submit" value="Place Order Now" name="send_order_details" class="btn btn-success btn-lg"></center>
</form>
';

echo'
<script>
function change_order_details(){
order_quantity = document.getElementById("order_quantity_input_id").value;
document.getElementById("order_quantity_id").innerHTML = order_quantity;
document.getElementById("calculation_id").innerHTML = "<b>(</b> "+order_quantity+" <b>x</b> '.$price.'<b>) x (</b>"+order_quantity+" <b>x</b> '.$price.'<b>) x </b>0.'.$gst.'<b> + </b> "+order_quantity+" x '.$packing_cost.'<b> + </b> "+order_quantity+" x '.$shipping_cost.'";
document.getElementById("total_id").innerHTML = ((order_quantity*'.$price.')+(order_quantity*'.$price.')*'.$gst.'/100+order_quantity*'.$packing_cost.'+order_quantity*'.$shipping_cost.');
}
</script>
';

if(isset($_POST['send_order_details'])){
$customer_name = $_POST['customer_name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$street = $_POST['street'];
$city = $_POST['city'];
$state = $_POST['state'];
$pincode = $_POST['pincode'];
$bill = $_POST['bill'];

$quantity = $_POST['quantity'];
$price = $price;
$gst = $gst;
$total = (($quantity*$price)+($quantity*$price)*$gst/100+$quantity*$packing_cost+$quantity*$shipping_cost);
$order_id = md5($customer_name.' '.$username.''.date("h:i:s"));
$order_date = date("d-m-Y");

$query = $con->query("INSERT INTO customer_details(name, mobile, email, street, city, state, pincode, order_id, username) values('$customer_name', '$mobile', '$email', '$street', '$city', '$state', '$pincode', '$order_id', '$username')");

$query1 = $con->query("INSERT INTO order_details(item_id, quantity, order_date, order_id, amount, basic_price, gst_rate, packing_cost, shipping_cost, username, bill) values('$item_id', '$quantity', '$order_date', '$order_id', '$total', '$price', '$gst', '$packing_cost', '$shipping_cost', '$username', '$bill')");

if($query1 && $query)
header("location:complete-order-payment.php?order_id=$order_id");
else
echo'<script>alert("Error : Sorry, Not submitted. Please contact to owner");</script>';
}



?>

</div></div>

<?php 
ob_end_flush();
include"inc/footer.php"; ?>
