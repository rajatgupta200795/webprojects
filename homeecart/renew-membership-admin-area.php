<?php include"inc_admin/header.php"; ?>
<?php include"inc_admin/admin-left-quick-menu.php"; ?>
<?php include"inc_admin/menu-toggle.php"; ?>

<?php
if(isset($_GET['membership-verify-confirm'])){
$username = $_GET['username'];
$transaction_id = $_GET['transaction_id'];
$today_date = date("d-m-Y");
$end_date = date("d-m-Y", strtotime('+1 month'));
$query = $con->query("UPDATE payment_details set payment_status='1', plan_start_date='$today_date', plan_end_date='$end_date
	' where username='$username' and transaction_id='$transaction_id'");
$query1 = $con->query("UPDATE member set transaction_id='$transaction_id' where username='$username'");
if($query && $query1) {
header("location:open-new-membership-request.php"); 
}
}
?>


<div class="container-fluid" style="line-height: 40px; font-size:15px;">
<h3><center>Renew Membership</center></h3>
<hr>
</br>

<div class="row" style="font-weight: bold;">
<div class="col-sm-2">Sr.No. &nbsp;&nbsp;
Name</div>
<div class="col-sm-1">Mobile</div>
<div class="col-sm-3">Email</div>
<div class="col-sm-1">Plan</div>
<div class="col-sm-1">Payment</div>
<div class="col-sm-3">Transaction Id</div>
<div class="col-sm-1">Action</div>
</div>
<hr>

<?php
$query = $con->query("SELECT member.username, member.name, member.email, member.mobile, member.street, member.city, member.state, member.account_status, payment_details.plan_code, payment_details.plan_start_date, payment_details.plan_end_date, payment_details.plan_amount, payment_details.transaction_id, payment_details.payment_status, payment_details.payment_date from payment_details INNER JOIN member on payment_details.username=member.username and payment_details.payment_status='0' and member.account_status='1'  order by payment_details.id DESC");

if($query->num_rows>0){
$i=0;
while($row=$query->fetch_assoc()){
$i++;
$name = ucwords($row['name']);
$email = $row['email'];
$username = $row['username'];
$plan_start_date = $row['plan_start_date'];
$plan_end_date = $row['plan_end_date'];
$plan_amount = $row['plan_amount'];
$payment_date = $row['payment_date'];
$plan_code = $row['plan_code'];
if($plan_code=='1') $plan_name='Silver';
if($plan_code=='2') $plan_name='Gold';
if($plan_code=='3') $plan_name='Diamond';
$transaction_id = $row['transaction_id'];
$today_date = date("d-m-Y");
$end_date = date("d-m-Y", strtotime('+1 month'));

$payment_status = $row['payment_status'];
$mobile = $row['mobile'];
$street = ucwords($row['street']);
$city = ucwords($row['city']);
$state = ucwords($row['state']);
$account_status = $row['account_status'];

echo'
<div class="row">
<div class="col-sm-2"><b>#'.$i.'.</b> &nbsp; 
'.$name.'</div>
<div class="col-sm-1">'.$mobile.'</div>
<div class="col-sm-3">'.$email.'</div>
<div class="col-sm-1">'.$plan_name.'</div>
<div class="col-sm-1">'.$plan_amount.'/-</div>
<div class="col-sm-3">'.$transaction_id.'</div>
<div class="col-sm-1" style="cursor:pointer; color:blue;" onclick="show_member_detail'.$i.'();">View</div>
</div>
';


echo'
<script>
function show_member_detail'.$i.'(){
if ( document.getElementById("item_detail_div'.$i.'").classList.contains("hidden") )
document.getElementById("item_detail_div'.$i.'").classList.toggle("hidden");
else document.getElementById("item_detail_div'.$i.'").classList.toggle("hidden");
}
</script>

</br>
<div class="container-fluid hidden" id="item_detail_div'.$i.'" style="position:fixed; top:10px; margin-left:3%; z-index:1; width:90%;">
<div style="background-color:#f9f9f9; width:100%; padding:50px; border:1px solid lightgrey; border-radius:5px;">
<b style="background-color:red; color:white; padding:5px; padding-left:13px; padding-right:13px; border-radius:5px; position:absolute; right:7%; cursor:pointer;" onclick="show_member_detail'.$i.'()"> X </b>
<h3 style="text-align:center;">Member and Payment Details</h3>
<hr>
<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-4">
<h4>Member Details</h4>
<hr>
<b>Name : </b>'.$name.'</br>
<b>Mobile number : </b>'.$mobile.'</br>
<b>Email : </b>'.$email.'</br>
<b>Address : </b>'.$street.', '.$city.', '.$state.'</br>
</div>
<div class="col-sm-1"></div>
<div class="col-sm-5">
<h4>Payment Details</h4>
<hr>
<b>Plan Name : </b>'.$plan_name.'</br>
<b>Payment : </b> Rs.'.$plan_amount.'/-</br>
<b>Transaction Id : </b>'.$transaction_id.'</br>
<b>Payment Date : </b>'.$payment_date.'</br>
</div>
<div class="col-sm-1"></div>
</div>
<hr>
<center>If you verify this payment then <b>'.$plan_name.'</b> plan will be valid from <b>'.$today_date.'</b> to <b>'.$end_date.'</b>.
</br></br>
<a href="?membership-verify-confirm=true&username='.$username.'&transaction_id='.$transaction_id.'" class="btn btn-success btn-lg">Verify</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="" class="btn btn-danger btn-lg">Cancel</a>


</center>
';
echo'
</div>
</div>
';



}
}
else echo'<h4>No new request. All is well.</h4>';

?>

</div>

</div></div></div></div>
<?php include"inc/footer.php"; ?>

