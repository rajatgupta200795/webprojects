<?php include'inc/admin-header.php'; ?>

<div class="container-fluid">
<h3>All Buy Requests History</h3>
<hr>

<div class="row" style="font-weight: bold;">
<div class="col-sm-1">Sr.No.</div>
<div class="col-sm-2">Buyer</div>
<div class="col-sm-3">Product Name</div>
<div class="col-sm-1">Quantity</div>
<div class="col-sm-1">Budget</div>
<div class="col-sm-2">Location</div>
<div class="col-sm-1">Status</div>
<div class="col-sm-1">Action</div>
</div>
<hr>

<?php

$query=$con->query("SELECT users.name, users.city, users.state, buy_req.product_title, buy_req.product_id, buy_req.quantity, buy_req.budget, buy_req.status FROM users INNER JOIN buy_req on users.username=buy_req.username");
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
$budget = $row['budget'];
$status_code = $row['status'];
$location = $city.', '.$state;

if($status_code=='1' || $status_code=='2') $status='<span style="color:green">Verified</span>';
elseif($status_code=='-1') $status='<span style="color:red">Blocked</span>';
elseif($status_code=='0') $status='<span style="color:yellow">Pending</span>';

echo'
<div class="row">
<div class="col-sm-1"><b>#'.$i.'.</b></div>
<div class="col-sm-2">'.$seller_name.'</div>
<div class="col-sm-3">'.$product_title.'</div>
<div class="col-sm-1">'.$quantity.'</div>
<div class="col-sm-1">'.$budget.'/-</div>
<div class="col-sm-2" style="color:blue; cursor:pointer;" title="'.$location.'">'.substr($location,0,20).'...</div>
<div class="col-sm-1">'.$status.'</div>';

if($status_code=='1' || $status_code=='2')echo'<div class="col-sm-1"><a href="?block_buy_req=true&product_id='.$product_id.'" style="color:red;">Block</a></div>';
else 
echo'<div class="col-sm-1">
<a href="?verify_buy_req=true&product_id='.$product_id.'" style="color: green;">Verify</a>
</div>';


echo'</div>
<hr>
';
}
}
else echo'<h4>No request found.</h4>';



if(isset($_GET['block_buy_req'])){
$product_id = $_GET['product_id'];
$query =  $con->query("UPDATE buy_req set status='-1' where product_id='$product_id'");
if($query)
header("location:admin-all-buy-request-history.php");
else echo'<script>alert("Not Blocked : Error Found");</script>';
}

if(isset($_GET['verify_buy_req'])){
$product_id = $_GET['product_id'];
$query =  $con->query("UPDATE buy_req set status='1' where product_id='$product_id'");
if($query)
header("location:admin-all-buy-request-history.php");
else echo'<script>alert("Not Verified : Error Found");</script>';
}


?>

</div>

<div style="height: 140px;"></div>

<?php include'inc/footer.php'; ?>