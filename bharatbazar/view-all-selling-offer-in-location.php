<?php  include "./inc/header.php"; ?>
<?php  include "./inc/category-menu.php"; ?>

<?php
ob_start();

$location = urldecode(@$_GET['location']);
$city = explode(',', $location)[0];
$state = explode(',', $location)[1];

echo'<h4>Sarch results for "<b>'.$location.'</b>"</h4>
<hr style="background-color:white; height:1px; width:100%;">
';

$query = $con->query("SELECT sell_offer.c_id, sell_offer.product_title, sell_offer.product_id, sell_offer.description, sell_offer.img_url, sell_offer.price, sell_offer.quantity, sell_offer.unit_id FROM users INNER JOIN sell_offer on users.username=sell_offer.username and (users.city LIKE '%$city%' or users.state LIKE '%$state%')"); 
if($query->num_rows>0){
while($row = $query->fetch_assoc()){
$category = $row['c_id'];
$title = $row['product_title'];
$product_id = $row['product_id'];
$description = ucfirst($row['description']);
$img_url = $row['img_url'];
$price = $row['price'];
$quantity = $row['quantity'];
$unit_id = $row['unit_id'];

$query = $con->query("SELECT * FROM unit WHERE unit_id = '$unit_id'"); 
$row1 = $query->fetch_assoc();
$unit_name = ucwords($row1['unit_name']);

echo'
<div class="row" style="font-size:16px; line-height:25px;">
<div class="col-sm-1"></div>
<div class="col-sm-2"><a href="profile-of-selling-offers.php?product_id='.$product_id.'"><img src="item_pic/'.$img_url.'" style="width:100%; height:auto; border:2px solid lightgrey; border-radius:10px;"></a></br></div>
<div class="col-sm-8">
<p style="font-size:20px;">'.$title.'</p>
<b>Price : </b>Rs.'.$price.'/-</br>
<b>Quantity : </b>'.$quantity.' '.$unit_name.'</br>
<b>Description : </b>'.substr($description, 0, 150).'
</div>
</div>
<hr style="background-color:white; height:1px; width:100%; margin-left:90px;">
';

}
}

ob_end_flush();
?>

<?php  include "./inc/footer.php"; ?>
