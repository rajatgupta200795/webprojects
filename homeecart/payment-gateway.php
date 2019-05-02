<?php include"inc/header.php"; 
if(!isset($_COOKIE['user_login']) && basename($_SERVER['PHP_SELF']) != 'index.php') 
header("location:index.php");

?>

<div class="container">
</br>

<?php

echo '
<h3><center>Payment Details</center></h3>
<hr>
</br>
<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-3">
<b>Name : </b></br></br>
<b>Plan Name : </b></br></br>
<b>Payable Amount : </b></br></br>
<b>Valid Period : </b></br></br>
</div>
<div class="col-sm-3">
'.ucwords($name).'</br></br>
'.ucwords($member_plan_name).'</br></br>
<b>Rs. '.$member_plan_amount.'/-</b> (including all taxes)</br></br>
From <b>'.date("M d, Y").'</b> To <b>'.date("M d, Y", strtotime('+1 month')).'</b></br></br>
</div>
</div>
<hr>
';
?>

<center><a href="payment-gateway.php?payment_confirm=true" class="btn btn-success">&nbsp;&nbsp; Pay &nbsp;&nbsp;</a> &nbsp;&nbsp;&nbsp;&nbsp; <a href="dropshipper-home.php" class="btn btn-danger">Cancel</a></center>

</div>

<?php
$today_date = date("d-m-Y");
$end_date = date("d-m-Y", strtotime('+1 month'));
$transaction_id = md5($username." ".rand(2, 100000));

if(isset($_GET['payment_confirm'])){
$query = $con->query("INSERT INTO payment_details(username, plan_start_date, plan_end_date, plan_code, plan_amount, transaction_id, payment_status, payment_date) values('$username', '', '', '$member_plan_code', '$member_plan_amount', '$transaction_id', '0', '$today_date')");
if($query) header("location:dropshipper-home.php");
}
?>

<?php include"inc/footer.php"; ?>
