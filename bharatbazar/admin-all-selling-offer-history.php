<?php include'inc/admin-header.php'; ?>

<div class="container-fluid">
<h3>All Selling Offers History</h3>
<hr>

<div class="row" style="font-weight: bold;">
<div class="col-sm-1">Sr.No.</div>
<div class="col-sm-2">Seller</div>
<div class="col-sm-3">Product Name</div>
<div class="col-sm-1">Quantity</div>
<div class="col-sm-1">Price</div>
<div class="col-sm-2">Location</div>
<div class="col-sm-1">Status</div>
<div class="col-sm-1">Action</div>
</div>
<hr>

<?php

$query=$con->query("SELECT users.name, users.city, users.state, sell_offer.product_title, sell_offer.product_id, sell_offer.quantity, sell_offer.price, sell_offer.status FROM users INNER JOIN sell_offer on users.username=sell_offer.username");
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
$status_code = $row['status'];
$location = $city.', '.$state;

if($status_code=='1' || $status_code=='2') $status='<span style="color:green;">Verified</span>';
elseif($status_code=='-1') $status='<span style="color:red;">Blocked</span>';
elseif($status_code=='0') $status='<span style="color:orange;">Pending</span>';

echo'
<div class="row">
<div class="col-sm-1"><b>#'.$i.'.</b></div>
<div class="col-sm-2">'.$seller_name.'</div>
<div class="col-sm-3">'.$product_title.'</div>
<div class="col-sm-1">'.$quantity.'</div>
<div class="col-sm-1">'.$price.'/-</div>
<div class="col-sm-2" style="color:blue; cursor:pointer;" title="'.$location.'">'.substr($location,0,20).'...</div>
<div class="col-sm-1">'.$status.'</div>';

if($status_code=='1' || $status_code=='2')
echo'<div class="col-sm-1">
<a href="?block_selling_offer=true&product_id='.$product_id.'" style="color:red;">Block</a>
</div>';
else 
echo'<div class="col-sm-1">
<a href="?verify_selling_offer=true&product_id='.$product_id.'" style="color: green;">Verify</a>
</div>';


echo'</div>
<hr>
';
}
}
else echo'<h4>No offer found to be verified.</h4>';


if(isset($_GET['block_selling_offer'])){
$product_id = $_GET['product_id'];
$query =  $con->query("UPDATE sell_offer set status='-1' where product_id='$product_id'");
if($query)
header("location:admin-all-selling-offer-history.php");
else echo'<script>alert("Not Blocked : Error Found");</script>';
}

if(isset($_GET['verify_selling_offer'])){
$product_id = $_GET['product_id'];
$query =  $con->query("UPDATE sell_offer set status='1' where product_id='$product_id'");
if($query)
header("location:admin-all-selling-offer-history.php");
else echo'<script>alert("Not Verified : Error Found");</script>';
}


?>

</div>

<div style="height: 140px;"></div>

<?php include'inc/footer.php'; ?>