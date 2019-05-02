<?php include"inc/header.php"; 

if(!isset($_COOKIE['user_login']) && basename($_SERVER['PHP_SELF']) != 'index.php') 
header("location:index.php");

?>

<div class="container">
</br>

<?php

$order_id='';
if(isset($_GET['order_id'])){
$order_id = $_GET['order_id'];
$query = $con->query("SELECT * FROM customer_details where order_id='$order_id'");
if($query->num_rows>0){
while($row = $query->fetch_assoc()){
$customer_name = $row['name'];
$mobile = $row['mobile'];
$street = $row['street'];
$city = $row['city'];
$state = $row['state'];
$pincode = $row['pincode'];
}
}
}

$query = $con->query("SELECT order_details.quantity, order_details.amount, order_details.bill, inventory_details.item_name FROM order_details INNER JOIN inventory_details on order_details.item_id=inventory_details.item_id and order_id='$order_id'");
if($query->num_rows>0){
while($row = $query->fetch_assoc()){
$item_name = ucwords($row['item_name']);
$total_amount = $row['amount'];
$bill = $row['bill'];
$quantity = $row['quantity'];
}
}
echo '
<h3><center>Complete Payment</center></h3>
<hr>
</br>
<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-3">
<b>Customer Name : </b></br></br>
<b>Mobile : </b></br></br>
<b>Customer Address : </b></br></br>
<b>Item Name : </b></br></br>
<b>Quantity : </b></br></br>
<b>Amount : </b></br></br>
</div>
<div class="col-sm-5">
'.ucwords($customer_name).'</br></br>
'.$mobile.'</br></br>
'.ucwords($street).', '.ucwords($city).', '.ucwords($state).' - '.$pincode.'</br></br>
'.$item_name.'</br></br>
'.$quantity.'</br></br>
Rs.'.$total_amount.'/-</br></br>
</div>
</div>
<hr>
';

echo'
<center><a href="complete-order-payment.php?payment_confirm=true&order_id='.$order_id.'&total_amount='.$total_amount.'" class="btn btn-success">&nbsp;&nbsp; Pay &nbsp;&nbsp;</a> &nbsp;&nbsp;&nbsp;&nbsp; <a href="dropshipper-home.php" class="btn btn-danger">Cancel</a></center>
';


?>
</div>

<?php
if(isset($_GET['payment_confirm'])){
$order_id = $_GET['order_id'];
$total_amount = $_GET['total_amount']; 
$today_date = date("d-m-Y");
$today_time = date("H:i:s");
$transaction_id = md5($username." ".$order_id.''.date("h:i:s"));
$query = $con->query("INSERT INTO order_payments(order_id, username, transaction_id, amount, add_date, add_time) values('$order_id', '$username', '$transaction_id', '$total_amount', '$today_date', '$today_time')");
if($query) {
echo'<script>alert("Payment Successfull. Amount : '.$total_amount.'");</script>';
header("location:my-inventory.php");
}
}

?>

<?php include"inc/footer.php"; ?>
