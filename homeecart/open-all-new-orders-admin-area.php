<?php include"inc_admin/header.php"; 
ob_start();
?>
<?php include"inc_admin/admin-left-quick-menu.php"; ?>

<div class="container-fluid" style="line-height: 30px; font-size: 14px;">
<h3><center>All Pending Orders</center></h3>
<?php include"inc_admin/menu-toggle.php"; ?>
<hr>

<div class="row" style="font-weight: bold;">
<div class="col-sm-1">Sr.No.</div>
<div class="col-sm-2">Customer</div>
<div class="col-sm-2">Dropshipper</div>
<div class="col-sm-3">Item Name</div>
<div class="col-sm-1">Status</div>
<div class="col-sm-2">Order Date</div>
<div class="col-sm-1">Action</div>
</div>
<hr>

<?php

$query = $con->query("SELECT order_payments.amount, order_payments.transaction_id, order_details.item_id, order_details.order_id, order_details.username, order_details.basic_price, order_details.quantity, order_details.gst_rate, order_details.packing_cost, order_details.shipping_cost, order_details.bill, order_details.order_date, order_details.status FROM order_payments INNER JOIN order_details ON order_payments.order_id=order_details.order_id and not order_details.status='2' order by order_details.id DESC");

if($query->num_rows>0){
$i=0;
while($row = $query->fetch_assoc()){
$i++;	

$item_id = $row['item_id'];
$order_id = $row['order_id'];
$username = $row['username'];
$order_status_code = $row['status'];
if($order_status_code=='0') $order_status='<span style="color:red; font-weight:bold;">Pending</span>'; 
elseif($order_status_code=='1') $order_status='<span style="color:orange; font-weight:bold;">Received</span>'; 
elseif($order_status_code=='2') $order_status='<span style="color:green; font-weight:bold;">Dispatched</span>'; 


$paid_amount = $row['amount'];
$transaction_id = $row['transaction_id'];

$basic_price = $row['basic_price'];
$gst = $row['gst_rate'];
$bill = $row['bill'];
$quantity = $row['quantity'];
$order_date = $row['order_date'];
$packing_cost = $row['packing_cost'];
$shipping_cost = $row['shipping_cost'];

$query1 = $con->query("SELECT * from customer_details where order_id='$order_id'");
if($query1->num_rows>0){
while($row1 = $query1->fetch_assoc()){
$customer_name = ucwords($row1['name']);
$mobile = $row1['mobile'];
$street = ucwords($row1['street']);
$city = ucwords($row1['city']);
$state = ucwords($row1['state']);
$pincode = $row1['pincode'];
}}

$query2 = $con->query("SELECT * from member where username='$username'");
if($query2->num_rows>0){
while($row2 = $query2->fetch_assoc()){
$dropshipper = ucwords($row2['name']);
$plan_code = $row2['plan_code'];
if($plan_code=='1') $plan_name = 'Silver';
elseif($plan_code=='2') $plan_name = 'Gold';
elseif($plan_code=='3') $plan_name = 'Diamond';
$dropshipper_email = $row2['email'];
$dropshipper_mobile = $row2['mobile'];
}}

$query3 = $con->query("SELECT * from inventory_details where item_id='$item_id'");
if($query3->num_rows>0){
while($row3 = $query3->fetch_assoc()){
$item_name = ucwords($row3['item_name']);
$pic_url = $row3['pic_url'];
$current_inventory_quantity = $row3['quantity'];

$change_quantity = ($current_inventory_quantity - $quantity);
}}



echo'
<div class="row">
<div class="col-sm-1"><b>#'.$i.'.</b></div>
<div class="col-sm-2">'.$customer_name.'</div>
<div class="col-sm-2">'.$dropshipper.'</div>
<div class="col-sm-3">'.substr($item_name,0,30).'<b>......</b></div>
<div class="col-sm-1">'.$order_status.'</div>
<div class="col-sm-2">'.$order_date.'</div>
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
<h4>Payment Details</h4>
<hr>
<b>Paid Amount : </b> Rs.'.$paid_amount.'/-</br>
<b>Transaction Id : </b>'.$transaction_id.'</br>
<hr>';

if($order_status_code!='1')
echo'<a href="?confirm_receive_order=true&order_id='.$order_id.'" class="btn btn-info">Receive</a> &nbsp;&nbsp;&nbsp;';

echo'<a href="?confirm_dispatch_order=true&order_id='.$order_id.'&item_id='.$item_id.'&change_quantity='.$change_quantity.'" class="btn btn-success">Dispatch</a> &nbsp;&nbsp;&nbsp;
<a onclick="show_order_detail'.$i.'()" class="btn btn-danger">Cancel</a>
</div>
<div class="col-sm-3">
<h4>Dropshipper Details</h4>
<hr>
<b>Name : </b>'.$dropshipper.'</br>
<b>Plan Name : </b>'.$plan_name.'</br>
<b>Mobile : </b>'.$dropshipper_mobile.'</br>
<b>Email : </b>'.$dropshipper_email.'</br>
</br>
<hr>
</div>
</div>

</div>
</div>
';


}
}
else
echo'No new order found. All is well. </br>
Please wait until you get a new order.
<hr>
View All Previous <a href="all-order-history-admin-area.php">Order History</a></br>
';

if(isset($_GET['confirm_receive_order'])){
$order_id = $_GET['order_id'];
$query = $con->query("UPDATE order_details set status='1' where order_id='$order_id'");
header("location:open-all-new-orders-admin-area.php");
}
elseif(isset($_GET['confirm_dispatch_order'])){
$order_id = $_GET['order_id'];
$item_id = $_GET['item_id'];
$change_quantity = $_GET['change_quantity'];

$query = $con->query("UPDATE order_details set status='2' where order_id='$order_id'");
$query = $con->query("UPDATE inventory_details set quantity='$change_quantity' where item_id='$item_id'");
header("location:open-all-new-orders-admin-area.php");
}

?>

</div></div></div></div>
<?php 
ob_end_flush();
include"inc/footer.php"; ?>

