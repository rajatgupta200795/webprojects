<?php include"inc_admin/header.php"; ?>
<?php include"inc_admin/admin-left-quick-menu.php"; ?>
<?php include"inc_admin/menu-toggle.php"; ?>


<div class="container-fluid" style="line-height: 40px; font-size: small;">
<h3><center>Payment History For All Dropshippers</center></h3>
<hr>
</br>

<div class="row" style="font-weight: bold;">
<div class="col-sm-3">Sr.No. &nbsp;&nbsp;
Name</div>
<div class="col-sm-1">Mobile</div>
<div class="col-sm-3">Email</div>
<div class="col-sm-1">Plan</div>
<div class="col-sm-2"> &nbsp;&nbsp;&nbsp;&nbsp;Start &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
End</div>
<div class="col-sm-1">Ammount</div>
<div class="col-sm-1">Status</div>
</div>
<hr>

<?php
$query = $con->query("SELECT member.name, member.email, member.mobile, member.account_status, payment_details.plan_code, payment_details.plan_start_date, payment_details.plan_end_date, payment_details.plan_amount, payment_details.payment_status from payment_details INNER JOIN member on payment_details.username=member.username order by payment_details.id DESC");

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
if($plan_code=='1') $plan_name="<b style='color: #a34545;'>Silver</b>";
if($plan_code=='2') $plan_name="<b style='color: orange;'>Gold</b>";
if($plan_code=='3') $plan_name="<b style='color: #22ad6ccf;'>Diamond</b>";

$payment_status = $row['payment_status'];
$mobile = $row['mobile'];
$plan_code = $row['plan_code'];
$account_status = $row['account_status'];
if($payment_status=='1') $payment_status = '<span style="color:green;">Verified</span>';
else $payment_status = '<b style="color:red;">Pending</b>';

echo'
<div class="row">
<div class="col-sm-3"><b>#'.$i.'.</b> &nbsp; 
'.$name.'</div>
<div class="col-sm-1">'.$mobile.'</div>
<div class="col-sm-3">'.$email.'</div>
<div class="col-sm-1">'.$plan_name.'</div>
<div class="col-sm-2">'.$plan_start_date.' &nbsp;&nbsp;&nbsp;
'.$plan_end_date.'</div>
<div class="col-sm-1">Rs.'.$plan_amount.'/-</div>
<div class="col-sm-1">'.$payment_status.'</div>
</div>
';
}
}
else echo'No payment found. ';

?>

</div>

</div></div></div></div>
<?php include"inc/footer.php"; ?>

