<?php  include "./inc/header.php"; ?>
<?php  include "./inc/category-menu.php"; ?>

<?php
ob_start();
$product_id = @$_GET['product_id'];

$query = $con->query("SELECT * FROM sell_offer WHERE product_id = '$product_id'"); 
$succes_count=$query->num_rows;
if($succes_count>0)
$row = $query->fetch_assoc();
$seller_id = $row['username'];
$category = $row['c_id'];
$title = $row['product_title'];
$description = $row['description'];
$img_url = $row['img_url'];
$price = $row['price'];
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
$offer_date = date('d M, Y',strtotime($row['offer_date']));

$query = $con->query("UPDATE sell_offer set view='$view' WHERE product_id = '$product_id'"); 


echo'
<h2 style="font-family: \'PT Sans Narrow\', sans-serif;">'.ucwords($title).'</h2>
<div class="row" style="font-family: \'Arimo\', sans-serif;"><div class="col-sm-3"><b>Posted on : </b>'.$offer_date.'</div><div class="col-sm-2"><b>Views : </b>'.$view.'</div><div class="col-sm-4"><b>Status : </b>'.$status.'</div></div> 
<hr style="background-color:grey; height:1px;">
<div class="row" style="font-family: \'Roboto Condensed\', sans-serif;">
<div class="col-sm-1"></div>
<div class="col-sm-3" style="text-align:center;">
<img src="item_pic/'.$img_url.'" style="height:auto; width:100%; border:1px solid grey; border-radius:10px;">
</br></br>
</div>
<div class="col-sm-7">
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
<div class="col-sm-3">
<a href="user-chat-box.php?receiver_id='.$seller_id.'" class="btn btn-primary"><span class="glyphicon glyphicon-envelope"></span> Chat With Seller</a></br></br>
<a href="?add-to-cart=true&product_id='.$product_id.'" class="btn btn-success"><span class="glyphicon glyphicon-shopping-cart"></span> Add to My Cart</a>
</div>
</div>
</br>
<div style="font-family: \'Arimo\', sans-serif; font-size:15px; line-height:25px;"><b>Description : </b>'.ucfirst($description).'</div>
</div>
</div>
<hr style="background-color:grey; height:2px;">
';

if(isset($_GET['add-to-cart'])){
$product_id = $_GET['product_id'];
$add_date = date("d-m-Y"); 
$username  = $_COOKIE['user_login'];

$query = $con->query("SELECT * from ecart where username='$username' and product_id='$product_id'");
if($query->num_rows>0)
echo'<script>alert("Item has been already added in cart")</script>';
else{
$query = $con->query("INSERT into ecart(username, product_id, add_date) values('$username', '$product_id', '$add_date')");
if($query)
echo'<script>alert("Successfuly Added into Cart")</script>';
header("location:profile-of-selling-offers.php?product_id=$product_id");
}
}



ob_end_flush();
?>

<?php  include "./inc/footer.php"; ?>
