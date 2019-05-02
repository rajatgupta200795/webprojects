<?php include"inc/header.php"; 
if(!isset($_COOKIE['user_login']) && basename($_SERVER['PHP_SELF']) != 'index.php') 
header("location:index.php");
?>

<div class="container-fluid" style="line-height: 35px; font-size: 14px;">
<h3><center>All Order Details</center></h3>
<hr>
<?php

echo'
<div class="row" style="font-weight:bold;">
<div class="col-sm-1">Sr.No.</div>
<div class="col-sm-2">Customer Name</div>
<div class="col-sm-3">Product</div>
<div class="col-sm-1">Quantity</div>
<div class="col-sm-1">Amount</div>
<div class="col-sm-1">Status</div>
<div class="col-sm-1">Order Date</div>
<div class="col-sm-1">Support</div>
<div class="col-sm-1">Action</div>
</div>
<hr>
';

$query = $con->query("SELECT order_details.amount, order_details.item_id, order_details.order_id, order_details.username, order_details.basic_price, order_details.quantity, order_details.gst_rate, order_details.packing_cost, order_details.shipping_cost, order_details.bill, order_details.order_date, order_details.status, inventory_details.item_name, inventory_details.pic_url, customer_details.name, customer_details.mobile, customer_details.street, customer_details.city, customer_details.state, customer_details.pincode FROM inventory_details INNER JOIN (order_details INNER JOIN customer_details ON order_details.order_id=customer_details.order_id) ON order_details.item_id=inventory_details.item_id and order_details.username='$username' order by order_details.id DESC");
if($query->num_rows>0){
$i=0;
while($row = $query->fetch_assoc()){
$i++;
$customer_name = ucwords($row['name']);

$pic_url = $row['pic_url'];
$item_name = ucwords($row['item_name']);
$total_amount = $row['amount'];
$item_id = $row['item_id'];
$order_id = $row['order_id'];

$query1 = $con->query("SELECT * from order_payments where order_id='$order_id'");
if($query1->num_rows>0){
while($row1 = $query1->fetch_assoc()){
$transaction_id = $row1['transaction_id'];
$paid_amount = $row1['amount'];
}
}else {
$transaction_id = 'Not Paid';
$paid_amount = '0.00/-';
}

$basic_price = $row['basic_price'];
$gst = $row['gst_rate'];
$bill = $row['bill'];
$quantity = $row['quantity'];
$order_date = $row['order_date'];
$packing_cost = $row['packing_cost'];
$shipping_cost = $row['shipping_cost'];
$status = $row['status'];


$mobile = $row['mobile'];
$street = ucwords($row['street']);
$city = ucwords($row['city']);
$state = ucwords($row['state']);
$pincode = $row['pincode'];

if($status=='0')$order_status = '<b style="color:darkred;">Pending</b>';
elseif($status=='1') $order_status = '<b style="color:orange;">Received</b>';
elseif($status=='2') $order_status = '<b style="color:green;">Dispatched</b>';
echo'
<div class="row">
<div class="col-sm-1"><b>#'.$i.'.</b></div>
<div class="col-sm-2">'.$customer_name.'</div>
<div class="col-sm-3">'.substr($item_name, 0, 40).'...</div>
<div class="col-sm-1">'.$quantity.'</div>
<div class="col-sm-1">'.$total_amount.' /-</div>
<div class="col-sm-1">'.$order_status.'</div>
<div class="col-sm-1">'.$order_date.'</div>
<div class="col-sm-1"><a href="user-chat-box.php?item_id='.$item_id.'" class="menu-link"><span class="glyphicon glyphicon-envelope"></span></a></div>
<div class="col-sm-1"><span style="color:#133c84; cursor:pointer;" onclick="show_order_detail'.$i.'()">Open</span></div>
</div>
';

echo'
<script>
function show_order_detail'.$i.'(){
if (document.getElementById("item_detail_div'.$i.'").classList.contains("hidden"))
document.getElementById("item_detail_div'.$i.'").classList.toggle("hidden");
else document.getElementById("item_detail_div'.$i.'").classList.toggle("hidden");
}
</script>

</br>
<div class="container-fluid hidden" id="item_detail_div'.$i.'" style="position:fixed; top:0px; margin-left:3%; z-index:1; width:90%; line-height:30px;">
<div style="background-color:#f9f9f9; width:100%; padding:50px; border:1px solid lightgrey; border-radius:5px;">
<b style="background-color:red; color:white; padding:2px; padding-left:13px; padding-right:13px; position:absolute; right:7%; cursor:pointer; border-radius:5px;" onclick="show_order_detail'.$i.'()"> X </b>
<h2><center>Order Details</center></h2>
<hr>
<div class="row">
<div class="col-sm-5">
<h4>Item Details</h4>
<hr>
<img src="./item_pic/'.$pic_url.'" style="height:150px; width:auto;">
<hr>
<b>Item Name : </b>'.$item_name.'</br>
<b>Quantity : </b>'.$quantity.'</br>
<b>Basic Price (per Piece) : Rs.</b>'.$basic_price.'/-</br>
<b>GST : </b>'.$gst.'%</br>
<b>Packing Cost : </b>'.$packing_cost.'/-</br>
<b>Shipping Cost : </b>'.$shipping_cost.'/-</br>
<b>Total Amount : </b>'.(($basic_price*$quantity)+($basic_price*$quantity)*$gst/100+$quantity*$packing_cost+$quantity*$shipping_cost).'/-</br>
</div>
<div class="col-sm-4">
<h4>Shipping Details</h4>
<hr>
<b>'.$customer_name.'</b>,</br>
'.$street.',</br>
'.$city.' - '.$pincode.'</br>
'.$state.'</br>
</br>
<h4>Order Status</h4>
<hr>
<b>Status : </b>'.$order_status.'
</div>
<div class="col-sm-3">
<h4>Payment Details</h4>
<hr>
<b>Paid Amount : </b> Rs.'.$paid_amount.'/-</br>
<b>Transaction Id : </b>'.$transaction_id.'</br>
</div>
</div>

</div>
</div>
';

}
}
else echo'<center><h4>No order record found.</h4></center>';


?>

</div>
<?php include"inc/footer.php"; ?>
