<?php  include "./inc/header.php"; ?>
<?php  include "./inc/category-menu.php"; ?>

<?php
ob_start();

$query = $con->query("SELECT sell_offer.c_id, sell_offer.product_id, sell_offer.product_title, sell_offer.description, sell_offer.img_url, sell_offer.price, sell_offer.quantity, sell_offer.unit_id from sell_offer INNER JOIN ecart on sell_offer.product_id=ecart.product_id and ecart.username='$username'"); 
if($query->num_rows>0){
echo'<h4 style="font-family:sans-serif;"><b>My Cart : </b><i>'.$query->num_rows.' items found.</i></h4>
<hr style="background-color:white; height:1px; width:100%;">
';
while($row = $query->fetch_assoc()){
$category = $row['c_id'];
$title = ucwords($row['product_title']);
$product_id = $row['product_id'];
$description = ucfirst($row['description']);
$img_url = $row['img_url'];
$price = $row['price'];
$quantity = $row['quantity'];
$unit_id = $row['unit_id'];

$query1 = $con->query("SELECT * FROM unit WHERE unit_id = '$unit_id'"); 
$row1 = $query1->fetch_assoc();
$unit_name = ucwords($row1['unit_name']);

echo'
<div class="row" style="font-size:16px; line-height:25px;">
<div class="col-sm-1"></div>
<div class="col-sm-2"><a href="profile-of-selling-offers.php?product_id='.$product_id.'"><img src="item_pic/'.$img_url.'" style="width:100%; height:auto; border:2px solid lightgrey; border-radius:10px;"></a></br></div>
<div class="col-sm-8">
<p style="font-size:20px;"><a href="profile-of-selling-offers.php?product_id='.$product_id.'">'.$title.'</a></p>
<b>Price : </b>Rs.'.$price.'/-</br>
<b>Quantity : </b>'.$quantity.' '.$unit_name.'</br>
<b>Description : </b>'.substr($description, 0, 150).'</br>
<a href="?remove-from-ecart=true&product_id='.$product_id.'&user_id='.$username.'" class="btn btn-danger btn-xs">Remove</a>
</div>
</div>
<hr style="background-color:white; height:1px; width:100%; margin-left:90px;">
';

}
}
else echo'<h4>No item found in ecart.</h4>
<hr style="background-color:white; height:1px; width:100%;">';

if(isset($_GET['remove-from-ecart'])){
$product_id = $_GET['product_id'];
$user_id = $_GET['user_id'];

$query = $con->query("DELETE from ecart where username='$user_id' and product_id='$product_id'");
if($query) header("location:item-in-my-cart.php");
}

ob_end_flush();
?>

<?php  include "./inc/footer.php"; ?>
