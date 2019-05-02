<?php include'inc/admin-header.php'; ?>

<div class="container-fluid">
<h3>All Pending Selling Offers to Be Verified</h3>
<hr>

<div class="row" style="font-weight: bold;">
<div class="col-sm-1">Sr.No.</div>
<div class="col-sm-2">Seller</div>
<div class="col-sm-3">Product Name</div>
<div class="col-sm-1">Quantity</div>
<div class="col-sm-1">Price</div>
<div class="col-sm-3">Location</div>
<div class="col-sm-1">Action</div>
</div>
<hr>

<?php

$query=$con->query("SELECT users.name, users.city, users.state, sell_offer.product_title, sell_offer.product_id, sell_offer.quantity, sell_offer.price FROM users INNER JOIN sell_offer on users.username=sell_offer.username and sell_offer.status=0");
if($query->num_rows>0){
$i=0;
while($row = $query->fetch_assoc()){
$i++;
$product_id = $row['product_id'];
$seller_name = ucwords($row['name']);
$city = ucwords($row['city']);
$state = ucwords($row['state']);
$product_title = ucwords($row['product_title']);
$quantity = $row['quantity'];
$price = $row['price'];

echo'
<div class="row">
<div class="col-sm-1"><b>#'.$i.'.</b></div>
<div class="col-sm-2">'.$seller_name.'</div>
<div class="col-sm-3">'.$product_title.'</div>
<div class="col-sm-1">'.$quantity.'</div>
<div class="col-sm-1">'.$price.'/-</div>
<div class="col-sm-3">'.$city.', '.$state.'</div>
<div class="col-sm-1" style="font-size:11px;"><a href="?advertise_verified=true&offer_id='.$product_id.'" style="color:green;">Verify</a> | 	<a href="?advertise_blocked_verified=true&offer_id='.$product_id.'" style="color:red;">Block</a></div>
</div>
<hr>
';
}
}
else echo'<h4>No offer found to be verified.</h4>';


if(isset($_GET['advertise_verified'])){
$product_id = $_GET['offer_id'];
$query =  $con->query("UPDATE sell_offer set status='1' where product_id='$product_id'");
if($query)
header("location:admin-verify-selling-offer.php");
else echo'<script>alert("Not verified : Error Found");</script>';
}

if(isset($_GET['advertise_blocked_verified'])){
$product_id = $_GET['offer_id'];
$query =  $con->query("UPDATE sell_offer set status='-1' where product_id='$product_id'");
if($query)
header("location:admin-verify-selling-offer.php");
else echo'<script>alert("Not verified : Error Found");</script>';
}


?>

</div>

<div style="height: 140px;"></div>

<?php include'inc/footer.php'; ?>