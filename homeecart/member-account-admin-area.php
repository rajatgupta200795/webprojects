<?php include"inc_admin/header.php"; ?>
<?php include"inc_admin/admin-left-quick-menu.php"; ?>
<?php include"inc_admin/menu-toggle.php"; ?>


<div class="container-fluid" style="line-height: 40px; font-size:small;">
<h3><center>Member's Accounts in Detail</center></h3>
<hr>
</br>

<div class="row" style="font-weight: bold;">
<div class="col-sm-3">Sr.No. &nbsp;&nbsp;
Name</div>
<div class="col-sm-1">Mobile</div>
<div class="col-sm-3">Email</div>
<div class="col-sm-1">Plan</div>
<div class="col-sm-3">Address</div>
<div class="col-sm-1">Status</div>
<!--<div class="col-sm-1">Action</div>-->
</div>
<hr>

<?php
$query = $con->query("SELECT member.name, member.email, member.mobile, member.street, member.city, member.state, member.account_status, payment_details.plan_code, payment_details.plan_start_date, payment_details.plan_end_date, payment_details.plan_amount, payment_details.payment_status from payment_details INNER JOIN member on payment_details.username=member.username and member.account_status='1' and payment_details.transaction_id=member.transaction_id");

if($query->num_rows>0){
$i=0;
while($row=$query->fetch_assoc()){
$i++;
$name = ucwords($row['name']);
$email = $row['email'];
$plan_start_date = $row['plan_start_date'];
$plan_end_date = $row['plan_end_date'];
$plan_amount = $row['plan_amount'];
$plan_code = $row['plan_code'];
if($plan_code=='1') $plan_name='Silver';
if($plan_code=='2') $plan_name='Gold';
if($plan_code=='3') $plan_name='Diamond';

$payment_status = $row['payment_status'];
$mobile = $row['mobile'];
$street = $row['street'];
$city = $row['city'];
$state = $row['state'];
$address = $city.', '.$state;
$account_status = $row['account_status'];

$today = date("d-m-Y");
$today_time = strtotime($today);
$expire_date = strtotime($plan_end_date);
if($expire_date > $today_time) $status = '<b style="color:green;">Active</b>';
else $status = '<b style="color:red;">Stopped</b>';

echo'
<div class="row">
<div class="col-sm-3"><b>#'.$i.'.</b> &nbsp; 
'.$name.'</div>
<div class="col-sm-1">'.$mobile.'</div>
<div class="col-sm-3">'.$email.'</div>
<div class="col-sm-1">'.$plan_name.'</div>
<div class="col-sm-3">'.ucwords($address).'</div>
<div class="col-sm-1">'.$status.'</div>
<!--<div class="col-sm-1" style="cursor:pointer; color:blue;">View</div>-->
</div>
';
}
}
else echo'<h4>Sorry! No member account found.</h4>';

?>

</div>

</div></div></div></div>
<?php include"inc/footer.php"; ?>

