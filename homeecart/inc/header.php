<?php
$con= new mysqli('localhost','root','Rajat@20071995','homeecart') or die("Could not connect to mysql".mysqli_error($con));

if( isset($_COOKIE['user_login']) && basename($_SERVER['PHP_SELF']) == 'index.php') 
header("location:dropshipper-home.php");

date_default_timezone_set("Asia/Kolkata");
$date_time = date("h"); 
$time_check = date("a");

if($date_time >=02 &&  $time_check=="am") $wish = "Good Morning "; 
if(($date_time ==12 || $date_time == 01 || $date_time == 02 || $date_time == 03) &&  $time_check=="pm") $wish = "Good Afternoon "; 
if($date_time >=04 &&  $time_check=="pm") $wish = "Good Evening "; 
if(($date_time ==12 ||  $date_time ==1) && $time_check=="am") $wish = "Good Evening "; 

$username='';
if(isset($_COOKIE['user_login'])){
$username = $_COOKIE['user_login'];
$query=$con->query("SELECT * FROM member WHERE  username='$username'");
if($query->num_rows>0){
while($row = $query->fetch_assoc()){
$name = $row['name'];
$member_plan_code = $row['plan_code'];
$account_status = $row['account_status'];
}
}

if($member_plan_code=='1') {$member_plan_name="<b style='color: #a34545;'>Silver</b>"; $member_plan_amount='200'; }
if($member_plan_code=='2') {$member_plan_name="<b style='color: orange;'>Gold</b>"; $member_plan_amount='500'; }
if($member_plan_code=='3') {$member_plan_name="<b style='color: #22ad6ccf;'>Diamond</b>"; $member_plan_amount='1000'; }

}
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


<link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body style="overflow-x: hidden; font-size: medium; font-family: 'Open Sans', sans-serif;">


<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://www.devopsrider.com"><b>HomeEkart</b></a>
    </div>
    <ul class="nav navbar-nav navbar-right">
<?php
if(!isset($_COOKIE['user_login']))
echo'
<li><a href="index.php">Home</a></li>
<li><a href="dropshipper-signin.php">Dropshipper</a></li>
<li><a href="admin-signin.php">Admin</a></li>
<li><a href="#">Help</a></li>
';
else{
echo'
<li><a href="dropshipper-home.php">Home</a></li>
<li><a href="dropshipper-all-orders-list.php">Orders</a></li>
<li><a href="dropshipper-profile.php">Account</a></li>';

$query=$con->query("SELECT * FROM chat WHERE username='$username' and status='0' and direction='-1' order by id DESC");
$rcv_mssg_count= $query->num_rows;
if($rcv_mssg_count==0) 
echo'<li><a href="user-chat-box.php" class="menu-link"><span class="glyphicon glyphicon-envelope"></span></a></li>';
else{ 
while($row=$query->fetch_assoc()){
$item_id = $row['item_id'];}
echo'<li><a href="user-chat-box.php?receiver_id='.$item_id.'" class="menu-link"><span class="glyphicon glyphicon-envelope" style="font-size:20px; font-weight:bold; color:red; font-family:sans;">'.$rcv_mssg_count.'</span></a></li>';
}

echo'<li><a href="logout-dropshipper.php">Logout('.ucwords(explode(" ",$name)[0]).')</a></li>
';
}
?>
</ul>
</div>
</nav>



