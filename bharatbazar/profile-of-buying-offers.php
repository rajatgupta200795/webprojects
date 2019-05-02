<?php  include "./inc/header.php"; ?>
<?php  include "./inc/category-menu.php"; ?>

<?php
ob_start();
$product_id = @$_GET['product_id'];

$query = $con->query("SELECT * FROM buy_req WHERE product_id = '$product_id'"); 
$succes_count=$query->num_rows;
if($succes_count>0)
$row = $query->fetch_assoc();
$title = $row['product_title'];
$buyer_id = $row['username'];
$description = $row['description'];
$price = $row['budget'];
$unit_id = $row['unit_id'];
$query = $con->query("SELECT * FROM unit WHERE unit_id = '$unit_id'"); 
$row1 = $query->fetch_assoc();
$unit_name = $row1['unit_name'];
$c_id = $row['c_id'];
$query = $con->query("SELECT * FROM category WHERE c_id = '$c_id'"); 
$row1 = $query->fetch_assoc();
$c_name = $row1['name'];
$quantity = $row['quantity'];
$status = $row['status'];
if($status=1)$status="<b style='color:green';>In Stock</b>"; else $status="<b style='color:red';>Out Of Stock</b>"; 
$view = $row['view']+1;
$offer_date = date('d M, Y',strtotime($row['add_date']));

$query = $con->query("UPDATE buy_req set view='$view' WHERE product_id = '$product_id'"); 


echo'
<h2 style="font-family: \'PT Sans Narrow\', sans-serif;">'.ucwords($title).'</h2>
<div class="row" style="font-family: \'Arimo\', sans-serif;"><div class="col-sm-3"><b>Posted on : </b>'.$offer_date.'</div><div class="col-sm-2"><b>Views : </b>'.$view.'</div><div class="col-sm-4"><b>Status : </b>'.$status.'</div></div> 
<hr style="background-color:grey; height:1px;">
<div class="row" style="font-family: \'Roboto Condensed\', sans-serif;">
<div class="col-sm-1"></div>
<div class="col-sm-10">
<div class="row">
<div class="col-sm-3" style="line-height:50px;">
<b class="btn btn-default">Category </b></br>
<b class="btn btn-default">Unit Price  </b></br>
<b class="btn btn-default">Quantity  </b></br>
<b class="btn btn-default">Total Price  </b></br>
</div>
<div class="col-sm-5" style="line-height:50px; font-size:15px; font-weight:bold; color: #434040;">
'.ucfirst($c_name).'</br>
Rs. '.$price.'/- Per '.ucfirst($unit_name).'</br>
'.$quantity.' '.ucfirst($unit_name).'</br>
Rs. '.($price*$quantity).'/- only</br>
</div>
<div class="col-sm-3"><a href="user-chat-box.php?receiver_id='.$buyer_id.'" class="btn btn-primary">Start Chat With Seller</a></div>
</div>
</br>
<div style="font-family: \'Arimo\', sans-serif; font-size:15px; line-height:25px;"><b>Description : </b>'.ucfirst($description).'</div>
</div>
</div>
<hr style="background-color:grey; height:2px;">

';


ob_end_flush();
?>

<?php  include "./inc/footer.php"; ?>
