<?php  include "./inc/header.php"; 
include "./inc/profile-menu.php"; 
ob_start();


if(!isset($_COOKIE['user_login']))
header("location:sign-in.php");


$username = $_COOKIE['user_login'];


$active_count=0;
$stop_count=0;
$blocked_count=0;
$query=$con->query("SELECT * from buy_req where username='$username' order by status asc"); 
while ($row=$query->fetch_assoc()) {
$product_title=$row['product_title'];
$status=$row['status'];
if($status==1)$active_count++;
elseif($status==2)$stop_count++;
elseif($status==3)$blocked_count++;
}
?>

<div style="background-color: #f0f0f0; height: 1000px;">

<div style="height:477px; background-color: #064b81ed; border-radius:5px; text-align: center; color: white; font-size: 20px; font-family: sans-serif;">
</br>
<div style="font-size: 38px; font-family: 'Roboto Condensed', sans-serif;">My Selling Offers</div>
</br>
<center>
<div style="padding-bottom:110px; width: 84%; background-color: white; border-radius:5px; font-weight:normal; color: black; text-align: left; font-size: 17px;  font-family: \'PT Sans Narrow\', sans-serif; line-height: 30px;">

<?php
echo'<div class="row" style="padding:20px;">
<div class="col-sm-2"></div>
<div class="col-sm-2"><b style="padding:3px; background-color:grey; border-radius:5px; color:white;"> &nbsp;'.($active_count+$stop_count+$blocked_count).' </b> &nbsp;All <span class="glyphicon glyphicon-" style="color: gray;"></span></div>
<div class="col-sm-2"><b style="padding:3px; background-color:green; border-radius:5px; color:white;"> &nbsp;'.$active_count.' </b> &nbsp;Active <span class="glyphicon glyphicon-" style="color: green;"></span></div>
<div class="col-sm-2"><b style="padding:3px; background-color: orange; border-radius:5px; color:white;"> &nbsp;'.$stop_count.' </b> &nbsp;Stop <span class="glyphicon glyphicon-" style="color: orange;"></span></div>
<div class="col-sm-2"><b style="padding:3px; background-color:red; border-radius:5px; color:white;"> &nbsp;'.$blocked_count.' </b> &nbsp;Block <span class="glyphicon glyphicon-" style="color: red;"></span></div>
</div>';
?>

<div style="background-color: #064b81ed; width: 100%; height: 20px;"></div> 
</br>

<div class="row" style="font-weight: bold;">
<div class="col-sm-1"></div>
<div class="col-sm-6">Product/Services Titles</div>
<div class="col-sm-1">View</div>
<div class="col-sm-1">Status</div>
<div class="col-sm-1">Action</div>
</div>

<div style="font-size:14px; line-height:40px;">
<?php
$status_change=1;
$query=$con->query("SELECT * from buy_req where username='$username' order by status asc"); 
if($query->num_rows){
while ($row=$query->fetch_assoc()) {
$product_id = $row['product_id'];
$product_title=$row['product_title'];
$status=$row['status'];
$view=$row['view'];
if($status==1){echo'<hr>';
echo'<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-6">';
echo'<span class="glyphicon glyphicon-ok" style="color: green;"></span>';
}
elseif($status==2){
if($status_change!=2) echo '<hr>';
echo'<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-6">';
echo'<span class="glyphicon glyphicon-ok" style="color: orange;"></span>';
$status_change=2;
}
elseif($status==-1){
if($status_change!=-1) echo '<hr>';
echo'<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-6">';
echo'<span class="glyphicon glyphicon-remove" style="color: red;"></span>';
$status_change=-1;
}
elseif($status==0){
if($status_change!=0) echo '<hr>';
echo'<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-6">';
echo'<span class="glyphicon glyphicon-remove" style="color: red;"></span>';
$status_change=0;
}
echo' <span style="color:#0f1013; font-weight:normal;">'.$product_title.'</span></br>';
echo '</div>
<div class="col-sm-1">'.$view.'</div>
<div class="col-sm-1">';
if($status==1)echo'<b style="color:green;">Active</b>';
if($status==2)echo'<b style="color:orange";>Stopped</b>';
if($status==-1)echo'<b style="color:red";>Blocked</b>';
if($status==0)echo'<b style="color:red";>Pending</b>';
echo'</div>';

if($status==1) echo'<div class="col-sm-1"><a href="?product_id='.$product_id.'&stop_buy_request=true" style="color:red;">Stop</a></div>';
elseif($status==2) echo'<div class="col-sm-1"><a href="?product_id='.$product_id.'&renew_buy_request=true" style="color:green;">Renew</a></div>';
else echo'<div class="col-sm-1">-</div>';

echo'</div>';
}
}



if(isset($_GET['renew_buy_request'])){
$product_id = $_GET['product_id'];
$query =  $con->query("UPDATE buy_req set status='1' where product_id='$product_id'");
if($query)
header("location:my-all-buy-requirement-post.php");
else echo'<script>alert("Not Renew : Error Found");</script>';
}

if(isset($_GET['stop_buy_request'])){
$product_id = $_GET['product_id'];
$query =  $con->query("UPDATE buy_req set status='2' where product_id='$product_id'");
if($query)
header("location:my-all-buy-requirement-post.php");
else echo'<script>alert("Not Stopped : Error Found");</script>';
}

?>
</div>

</div>
</div>

</center>
</div>

</div>



<?php
ob_end_flush();
?>

<?php  include "./inc/footer.php"; ?>
