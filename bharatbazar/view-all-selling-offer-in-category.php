<?php  include "./inc/header.php"; ?>
<?php  include "./inc/category-menu.php"; ?>

<?php
ob_start();
$c_id = @$_GET['category_id'];

$query = $con->query("SELECT * FROM category WHERE c_id = '$c_id'"); 
$row = $query->fetch_assoc();
$c_name = $row['name'];
echo'<h4>Search results for "<b>'.$c_name.'</b>"</h4>
<hr style="background-color:white; height:1px; width:100%;">
';

$query = $con->query("SELECT * FROM sell_offer WHERE c_id='$c_id'"); 
if($query->num_rows>0){
while($row = $query->fetch_assoc()){
$category = $row['c_id'];
$title = $row['product_title'];
$product_id = $row['product_id'];
$description = $row['description'];
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
<p style="font-size:20px;"><a href="profile-of-selling-offers.php?product_id='.$product_id.'">'.$title.'</a></p>
<b>Price : </b>Rs.'.$price.'/-</br>
<b>Quantity : </b>'.$quantity.' '.$unit_name.'</br>
<b>Description : </b>'.substr($description, 0, 150).'
</div>
</div>
<hr style="background-color:white; height:1px; width:100%; margin-left:90px;">
';

}
}
else echo'No result found for '.$c_name;

ob_end_flush();
?>

<?php  include "./inc/footer.php"; ?>
