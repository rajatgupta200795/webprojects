<?php include"inc_admin/header.php"; ?>
<?php include"inc_admin/admin-left-quick-menu.php"; ?>

<div class="container-fluid" style="line-height: 35px; font-size: 14px;">
<h3><center>All Orders Payment History</center></h3>
<?php include"inc_admin/menu-toggle.php"; ?>
<hr>

<div class="row" style="font-weight: bold;">
<div class="col-sm-1">Sr.No.</div>
<div class="col-sm-2">Dropshippers</div>
<div class="col-sm-3">Item Name</div>
<div class="col-sm-1">Amount</div>
<div class="col-sm-3">Tansaction Id</div>
<div class="col-sm-2">Payment Date</div>
</div>
<hr>

<?php

$query = $con->query("SELECT member.name, inventory_details.item_name, order_payments.amount, order_payments.transaction_id, order_payments.add_date FROM member INNER JOIN (order_payments INNER JOIN (order_details INNER JOIN inventory_details ON order_details.item_id=inventory_details.item_id) ON order_payments.order_id=order_details.order_id) ON order_payments.username=order_payments.username");
if($query->num_rows>0){
$i=0;
while($row = $query->fetch_assoc()){
$i++;
$dropshipper_name = ucwords($row['name']);
$item_name = $row['item_name'];
$amount = $row['amount'];
$transaction_id = $row['transaction_id'];
$payment_date = $row['add_date'];

echo'
<div class="row">
<div class="col-sm-1"><b>#'.$i.'.</b></div>
<div class="col-sm-2">'.$dropshipper_name.'</div>
<div class="col-sm-3">'.$item_name.'</div>
<div class="col-sm-1">'.$amount.'</div>
<div class="col-sm-3">'.$transaction_id.'</div>
<div class="col-sm-2">'.$payment_date.'</div>
</div>';

}
}
else echo'</br><h3>No payment found.</h3>';

?>

</div></div></div></div>
<?php include"inc/footer.php"; ?>

