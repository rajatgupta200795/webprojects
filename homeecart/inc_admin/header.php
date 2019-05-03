<?php
$con= new mysqli('localhost','root','','Rajat@20071995', 'homeecart') or die("Could not connect to mysql".mysqli_error($con));

if(!isset($_COOKIE['admin_login']))
header("location:index.php");

date_default_timezone_set("Asia/Kolkata");
$date_time = date("h"); 
$time_check = date("a");

if($date_time >=02 &&  $time_check=="am") $wish = "Good Morning "; 
if(($date_time ==12 || $date_time == 01 || $date_time == 02 || $date_time == 03) &&  $time_check=="pm") $wish = "Good Afternoon "; 
if($date_time >=04 &&  $time_check=="pm") $wish = "Good Evening "; 
if(($date_time ==12 ||  $date_time ==1) && $time_check=="am") $wish = "Good Evening "; 

?>


<!DOCTYPE html>
<html>
<head>
	<title>Welcome to B2B E-commerce</title>

	<link rel="shortcut icon" href="http://www.ewishes.online/title.png" type="image/png"/>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow|Roboto+Condensed|Arimo|Open+Sans+Condensed;" rel="stylesheet">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  


<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


</head>
<body style="overflow-x: hidden; font-size: medium; font-family: 'Open Sans', sans-serif;">

<?php

$new_order_count=0;

$query = $con->query("SELECT * from order_details where status='0'");
if($query->num_rows>0)
$new_order_count = $query->num_rows;
if($new_order_count>0)
$order = 'Orders ('.$new_order_count.')';
else $order = 'Orders';

echo'
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><b>HomeEkart</b></a>
    </div>
<ul class="nav navbar-nav navbar-right">
<li><a href="admin-home.php">Home</a></li>
<li><a href="open-all-new-orders-admin-area.php">'.$order.'</a></li>';

$query=$con->query("SELECT distinct username, item_id FROM chat WHERE status='0' and direction='1' order by id DESC");
$rcv_mssg_count= $query->num_rows;
if($rcv_mssg_count==0) 
echo'<li><a href="admin-chat-box.php" class="menu-link"><span class="glyphicon glyphicon-envelope"></span></a></li>';
else{ 
while($row=$query->fetch_assoc()){
$item_id = $row['item_id'];
$user_id = $row['username'];
}
echo'<li><a href="admin-chat-box.php?item_id='.$item_id.'&user_id='.$user_id.'" class="menu-link"><span class="glyphicon glyphicon-envelope" style="font-size:20px; font-weight:bold; color:red; font-family:sans;">'.$rcv_mssg_count.'</span></a></li>';
}

echo'<li><a href="logout-admin.php">Logout(Admin)</a></li>
</ul>
</div>
</nav>
';


?>




