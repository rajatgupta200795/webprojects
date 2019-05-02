<?php include"inc_admin/header.php"; ?>
<?php include"inc_admin/admin-left-quick-menu.php"; ?>
<?php include"inc_admin/menu-toggle.php"; ?>

<?php

$today_total_earning=0; $today_order_count=0;
$today_date = date("d-m-Y");
$query = $con->query("SELECT SUM(order_payments.amount) as total_earn from order_details INNER JOIN order_payments ON order_details.order_id=order_payments.order_id and order_payments.add_date='$today_date'");
if($query->num_rows>1){
while($row = $query->fetch_assoc()){
$today_total_earning = $row['total_earn'];
}$today_order_count = $query->num_rows;
}

echo'
<div class="container">

<h3 style="color:grey;">Order Details</h3>
<hr>
<div class="row" style="text-align:center;">
<div class="col-sm-4">
<h4>Total Order Today</h4>
<hr>
<span style="font-size:60px;" class="btn btn-success"> &nbsp;&nbsp;'.$today_order_count.'&nbsp;&nbsp; </span>
<hr>
</div>
<div class="col-sm-4">
<h4>Total Earning Today</h4>
<hr>
Rs. <span style="font-size:60px;" class="btn btn-success"> &nbsp;&nbsp;'.$today_total_earning.'&nbsp;&nbsp; </span> /-
<hr>
</div>
<div class="col-sm-4"></div>
</div>
';



$total_item=0; $silver_item=0; $gold_item=0; $diamond_item=0;
$query = $con->query("SELECT * from inventory_details where 1=1");
if($query->num_rows>0){
$total_member=$query->num_rows;
while($row = $query->fetch_assoc()){
if($row['access_1']=='YES') $silver_item++;
elseif($row['access_2']=='YES') $gold_item++;
elseif($row['access_3']=='YES') $diamond_item++;
}
}

echo'
</br>
<h3 style="color: grey;">Products Details</h3>
<hr>
<div class="row" style="text-align:center;">
<div class="col-sm-3">
<h4  style="color: blue;">Total Products</h4>
<hr>
<span style="font-size:60px;" class="btn btn-success"> &nbsp;&nbsp;'.$total_item.'&nbsp;&nbsp; </span>
<hr>
</div>

<div class="col-sm-3">
<h4 style="color: #a34545;">Silver</h4>
<hr>
<span style="font-size:60px; background-color:#a34545; color:white;" class="btn btn-defaut"> &nbsp;&nbsp;'.$silver_item.'&nbsp;&nbsp; </span>
<hr>
</div>

<div class="col-sm-3">
<h4 style="color:orange;">Gold</h4>
<hr>
<span style="font-size:60px; background-color:darkorange; color:white;" class="btn btn-info"> &nbsp;&nbsp;'.$gold_item.'&nbsp;&nbsp; </span>
<hr>
</div>

<div class="col-sm-3">
<h4 style="color: #22ad6ccf;"">Diamond</h4>
<hr>
<span style="font-size:60px;  background-color:#22ad6ccf; color:white;" class="btn btn-info"> &nbsp;&nbsp;'.$diamond_item.'&nbsp;&nbsp; </span>
<hr>
</div>

</div>
';




$total_member=0; $silver_member=0; $gold_member=0; $diamond_member=0;
$query = $con->query("SELECT * from member where 1=1");
if($query->num_rows>0){
$total_member=$query->num_rows;
while($row = $query->fetch_assoc()){
if($row['plan_code']=='1') $silver_member++;
elseif($row['plan_code']=='2') $gold_member++;
elseif($row['plan_code']=='3') $diamond_member++;
}
}

echo'
</br>
<h3 style="color: grey;">Member Details</h3>
<hr>
<div class="row" style="text-align:center;">
<div class="col-sm-3">
<h4  style="color: blue;">Total Dropshippers</h4>
<hr>
<span style="font-size:60px;" class="btn btn-success"> &nbsp;&nbsp;'.$total_member.'&nbsp;&nbsp; </span>
<hr>
</div>

<div class="col-sm-3">
<h4 style="color: #a34545;">Silver</h4>
<hr>
<span style="font-size:60px; background-color:#a34545; color:white;" class="btn btn-defaut"> &nbsp;&nbsp;'.$silver_member.'&nbsp;&nbsp; </span>
<hr>
</div>

<div class="col-sm-3">
<h4 style="color:orange;">Gold</h4>
<hr>
<span style="font-size:60px; background-color:darkorange; color:white;" class="btn btn-info"> &nbsp;&nbsp;'.$gold_member.'&nbsp;&nbsp; </span>
<hr>
</div>

<div class="col-sm-3">
<h4 style="color: #22ad6ccf;"">Diamond</h4>
<hr>
<span style="font-size:60px;  background-color:#22ad6ccf; color:white;" class="btn btn-info"> &nbsp;&nbsp;'.$diamond_member.'&nbsp;&nbsp; </span>
<hr>
</div>

</div>
';


echo'</div>';
?>

</div></div></div>
<?php include"inc/footer.php"; ?>

