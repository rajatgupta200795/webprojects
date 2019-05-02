<?php include"inc/header.php"; 
if(!isset($_COOKIE['user_login']) && basename($_SERVER['PHP_SELF']) != 'index.php') 
header("location:index.php");
?>

<div class="container">
</br>

<?php
echo'
<div style="color:green; font-size:20px; font-weight:bold;">'.$wish.' '.ucwords(explode(" ",$name)[0]).' !</div>
<hr>';

$query=$con->query("SELECT * FROM payment_details WHERE  username='$username' order by id DESC limit 1");
if($query->num_rows>0){
while($row = $query->fetch_assoc()){
$start_date = $row['plan_start_date'];
$end_date = $row['plan_end_date'];
$payment_plan_code = $row['plan_code'];

$today = date("d-m-Y");
$expire = $end_date; //from db
$today_time = strtotime($today);
$expire_time = strtotime($expire);
$payment_status = $row['payment_status'];

$total_product=0;
$query1 = "SELECT * from inventory_details where status='1' and access_".$member_plan_code."='Yes'";
$query1 = $con->query($query1);
if($query1->num_rows>0){
$total_product=$query1->num_rows;
}

if ($expire_time > $today_time && $payment_status=='1') { 
echo'
<div class="row"><div class="col-sm-3"><b>Current Plan : </b>'.ucwords($member_plan_name).'</div><div class="col-sm-3"><b>Start Date : </b>'.ucwords($start_date).'</div><div class="col-sm-3"><b>Expiry Date : </b>'.ucwords($end_date).'</div><div class="col-sm-3"><b>Total Products : </b>'.$total_product.'</div></div>
</br></br>
<center><h2>Access 150+ products with zero investment.</h2></br>
<a href="my-inventory.php" class="btn btn-danger btn-lg">Open Inventory <span class="glyphicon glyphicon-share-alt"></span></a></center>
</br></br>
<hr>
';
}
elseif($payment_status=='0')
echo'<b>Please wait</b>. Your payment is not approved. It\'ll take some time to be approved. </br></br>
Once it is approved we\'ll inform you through your registered email.
</br></br>
<hr>';
else{
$query=$con->query("SELECT * FROM plan WHERE plan_code='$member_plan_code'");
if($query->num_rows>0){while($row = $query->fetch_assoc()){
$plan_name = $row['plan_name'];
$plan_amount = $row['price'];
}}
$query=$con->query("SELECT * FROM plan WHERE plan_code='$payment_plan_code'");
if($query->num_rows>0){while($row = $query->fetch_assoc()){
$payment_plan_name = $row['plan_name'];
$payment_plan_amount = $row['price'];
}}

echo'
<form class="navbar-form" action="dropshipper-home.php" method="POST">
Your last <b>'.ucwords($payment_plan_name).'</b> plan has been expired on <b>'.$end_date.'</b>.</br>
Please renew your order to continue inventory access.</br></br>
You have seleced <b>'.ucwords($member_plan_name).'</b> plan for dropshipping.</br>
Get full access of inventory for one month.</br>
</br>
<b>Pay Rs.'.$plan_amount.'/- only and get membership for one month.</b>
</br></br>
<a href="payment-gateway.php?plan_name='.$member_plan_name.'&plan_code='.$member_plan_code.'" class="btn btn-success btn-lg">Pay Now</a>
</br></br>
<a style="cursor:pointer;" onclick="change_plan_fun()">Change Plan</a> <span id="change_plan_id"></span>
</form>
<hr>
';
}

}
}
else{
$query=$con->query("SELECT * FROM plan WHERE plan_code='$member_plan_code'");
if($query->num_rows>0){while($row = $query->fetch_assoc()){
$plan_name = $row['plan_name'];
$plan_amount = $row['price'];
}}

echo'
<form class="navbar-form" action="dropshipper-home.php" method="POST">
You have seleced <b>'.ucwords($member_plan_name).'</b> plan for dropshipping.</br>
Get full access of inventory for one month.</br>
</br>
<b>Pay Rs.'.$plan_amount.'/- only and get membership for one month.</b>
</br></br>
<a href="payment-gateway.php?plan_name='.$member_plan_name.'&plan_code='.$member_plan_code.'" class="btn btn-success btn-lg">Pay Now</a>
</br></br>
<a style="cursor:pointer;" onclick="change_plan_fun()">Change Plan</a> <span id="change_plan_id"></span>
</form>
<hr>
';
}


echo'
</br>
<h3 style="font-weight:bold;">Payment History</h3>
</br>
<form class="navbar-form">';
echo'<div class="row" style="font-weight:bold;">
<div class="col-sm-1">Sr. No.</div>
<div class="col-sm-2">Plan Name</div>
<div class="col-sm-2">Start Date</div>
<div class="col-sm-2">Expiry Date</div>
<div class="col-sm-2">Amount</div>
<div class="col-sm-2">Transaction Id</div>
</div>
<hr>';

$query=$con->query("SELECT payment_details.plan_start_date, payment_details.plan_end_date, payment_details.plan_amount, payment_details.transaction_id, payment_details.payment_status, plan.plan_name FROM payment_details INNER JOIN plan ON payment_details.plan_code=plan.plan_code and username='$username' order by payment_details.plan_end_date DESC limit 10");
$i=0;
if($query->num_rows>0){
while($row = $query->fetch_assoc()){
$i++;
$start_date = $row['plan_start_date'];
$end_date = $row['plan_end_date'];
$plan_name = $row['plan_name'];
$plan_amount = $row['plan_amount'];
$transaction_id = $row['transaction_id'];
$today = date("d-m-Y");
$expire = $end_date;
$payment_status = $row['payment_status'];

if($payment_status =='1')
echo'<div class="row">
<div class="col-sm-1"><b>#'.$i.'.</b></div>
<div class="col-sm-2">'.ucwords($plan_name).'</div>
<div class="col-sm-2">'.$start_date.'</div>
<div class="col-sm-2">'.$end_date.'</div>
<div class="col-sm-2">'.$plan_amount.'/-</div>
<div class="col-sm-2">'.$transaction_id.'</div>
</div>
<hr>';
elseif($payment_status=='0') 
echo'<b>#'.$i.'. &nbsp;&nbsp;&nbsp;&nbsp; Please wait !</b> Your payment is still not approved.';

}
}
else echo'No payment found. Please select a plan and make a payment to get membership for one month.';
echo'
</form>';




if(isset($_POST['send_new_plan'])){
$new_plan_name = $_POST['new_plan_name'];
if($new_plan_name=='Silver')$plan_code=1;
elseif($new_plan_name=='Gold')$plan_code=2;
elseif($new_plan_name=='Diamond')$plan_code=3;
echo $plan_code;
$query = $con->query("UPDATE member set plan_code='$plan_code' where username='$username'");
if($query)
header("location:dropshipper-home.php");
}

?>


</div>

<script type="text/javascript">

function change_plan_fun(){
document.getElementById("change_plan_id").innerHTML = '</br></br> <b>Select Plan : </b><select class="form-control" name="new_plan_name"><option>Silver</option><option>Gold</option><option>Diamond</option></select> <input type="submit" class="btn btn-primary" name="send_new_plan" value="Update Plan">';
}
	
</script>


<?php include"inc/footer.php"; ?>
