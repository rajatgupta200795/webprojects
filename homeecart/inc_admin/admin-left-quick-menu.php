<div class="container-fluid">
<div class="row">



<?php

$new_request_count=0;
$membership_request_count=0;


$query = $con->query("SELECT payment_details.payment_status from payment_details INNER JOIN member on payment_details.username=member.username and payment_details.payment_status='0' and member.account_status='0'");
if($query->num_rows>0)
$new_request_count = $query->num_rows;

$query = $con->query("SELECT payment_details.payment_status from payment_details INNER JOIN member on payment_details.username=member.username and payment_details.payment_status='0' and member.account_status='1'");
if($query->num_rows>0)
$membership_request_count = $query->num_rows;

echo'
<div class="col-sm-2 hidden" id="hide_left_admin_menu" style="padding:20px; line-height: 30px; font-size: 14px;">
<b>Quick Links</b></br>
<a href="manage-inventory.php">Manage Inventory</a></br>
<a href="open-all-new-orders-admin-area.php">New Orders('.$new_order_count.')</a></br>
<a href="all-order-history-admin-area.php">Order History</a></br>
<a href="payment-history-orders-admin-area.php">Payment History</a></br>
</br>

<b>Dropship</b></br>
<a href="member-account-admin-area.php">Members account</a></br>
<a href="open-new-membership-request.php">New Requests('.$new_request_count.')</a></br>
<a href="renew-membership-admin-area.php">Renew Membership('.$membership_request_count.')</a></br>
<a href="payment-history-dropshippers-admin-area.php">Payment History</a></br>
</br>

<b>Customer Care</b></br>
<a href="admin-chat-box.php">New Chat('.$rcv_mssg_count.')</a></br>
<a href="admin-chat-box.php">Chat History</a>

</div>
<div class="col-sm-12" id="mid_page_id">
';
?>
