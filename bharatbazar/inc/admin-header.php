<?php
ob_start();
$con= new mysqli('localhost','root','','bharatbazar') or die("Could not connect to mysql".mysqli_error($con));

$query=$con->query("SELECT * FROM users WHERE  1=1");
	$users_count=$query->num_rows;

$sell_status_count=0; $buy_status_count=0;
$query=$con->query("SELECT * FROM sell_offer WHERE  status='0'");
	$sell_status_count=$query->num_rows;

$query=$con->query("SELECT * FROM buy_req WHERE status='0'");
	$buy_status_count=$query->num_rows;
?>

<!DOCTYPE html>
<html>
<head>
	<title>BharatBazar - Indian Exporters, Manufacturers, Suppliers Directory</title>

	<link rel="shortcut icon" href="http://www.ewishes.online/title.png" type="image/png"/>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow|Roboto+Condensed|Arimo|Open+Sans+Condensed;" rel="stylesheet">

           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  

<style type="text/css">
	
a{
	color: grey;
	text-decoration: none;
}

a:hover{
	color: #ce241b;
	text-decoration: none;
}

.menu-link{
	padding-right: 25px; padding-left: 25px; padding-bottom: 17px; padding-top: 17px;
	border-right: 1px solid lightgrey;   border-left: 1px solid lightgrey; 
}
       
</style>

</head>
<body style="overflow-x: hidden;">

<div style="height: 50px; width: 100%; font-size: 20px; background-color: #f0f0f0; font-family: 'PT Sans Narrow', sans-serif;">
<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-4" style="padding-top: 10px; font-family: 'Roboto Condensed', sans-serif;">
<b style="color:red">Bharat</b><b style="color:orange">Bazar</b> - Admin Pannel
</div>
<div class="col-sm-3"></div>
<div class="col-sm-4" style="padding: 7px;">
<a href="index.php" style="color: ;" class="menu-link">Home</a>
</div>
</div>
</div>

</br>

<div class="container">
<div class="row">
<div class="col-sm-10">
<a href="admin-category-field.php">Add Category</a> &nbsp;&nbsp;&nbsp;&nbsp; <b>|</b> &nbsp;&nbsp;&nbsp;&nbsp; 
<a href="admin-unit-field.php">Add Unit</a> &nbsp;&nbsp;&nbsp;&nbsp; <b>|</b> &nbsp;&nbsp;&nbsp;&nbsp; 
<a href="admin-verify-selling-offer.php">Verify Selling Offer (<?php echo$sell_status_count;?>)</a> &nbsp;&nbsp;&nbsp;&nbsp; <b>|</b> &nbsp;&nbsp;&nbsp;&nbsp; 
<a href="admin-verify-buying-req.php">Verify Buying Request (<?php echo$buy_status_count; ?>)</a> &nbsp;&nbsp;&nbsp;&nbsp; <b>|</b> &nbsp;&nbsp;&nbsp;&nbsp; 
<a href="admin-all-selling-offer-history.php">All Selling Offers</a> &nbsp;&nbsp;&nbsp;&nbsp; <b>|</b> &nbsp;&nbsp;&nbsp;&nbsp; 
<a href="admin-all-buy-request-history.php">All Buy Requests</a>
</div>
<div class="col-sm-2"></div>
</div>
</div>

<hr>
