<?php include"inc_admin/header.php"; ?>

<?php 
include"inc_admin/admin-left-quick-menu.php";

if(isset($_GET['request_delete'])){
$delete_item_id = $_GET['delete_item_id'];
$delete_item_name = $_GET['delete_item_name'];
$delete_category = $_GET['delete_category'];
echo'<div style="padding:50px; background-color:#f9f9f9; border:3px solid #f1f1f1; border-radius:5px; text-align:center; position:fixed; z-index:1; margin-left:25%; width:50%;">
<h4>Confirm Delete?</h4><hr>
<b>Item Name : </b>'.$delete_item_name.'</br>
<b>Category : </b>'.$delete_category.'</br></br>
Do you really want to delete this item ?</br></br>
<a href="manage-inventory.php?request_delete_confirm=true&confirm_delete_item_id='.$delete_item_id.'" class="btn btn-default btn-lg"> Yes </a> <a href="manage-inventory.php" class="btn btn-default btn-lg"> No </a>
</div>';
}
if(isset($_GET['request_delete_confirm'])){
$confirm_delete_item_id = $_GET['confirm_delete_item_id'];
$query = $con->query("UPDATE inventory_details set status='0' where item_id='$confirm_delete_item_id'");
if($query){
echo'<script>alert("You successfully deleted one item.");</script>';
header("location:manage-inventory.php");
}else{
echo'<script>alert("Error found. Item was not deleted. Please contact to developer.");</script>';
}

}

?>

</br>
<div class="container-fluid" style="font-size: 14px;">
<div class="row">
<div class="col-xs-1">
<?php include"inc_admin/menu-toggle.php"; ?>
</div>
<div class="col-xs-3"><b>Total Products : </b><span id="total_item"></span></div>
<div class="col-xs-2" style="color: #a34545;"><b>Silver : </b><span id="silver_item"></span></div>
<div class="col-xs-2" style="color:orange;"><b>Gold : </b><span id="gold_item"></span></div>
<div class="col-xs-2" style="color: #22ad6ccf;"><b>Diamond : </b><span id="diamond_item"></span></div>
<div class="col-xs-2"><a href="add-new-product.php" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New</a></div>
</div>
<hr>

</br></br>
<div class="row" style="font-weight: bold;">
<div class="col-xs-4">SNo.&nbsp; Title</div>
<div class="col-xs-2">Quantity</div>
<div class="col-xs-1">GST</div>
<div class="col-xs-1">Silver</div>
<div class="col-xs-1">Gold</div>
<div class="col-xs-1">Diamond</div>
<div class="col-xs-2">Action</div>
</div>
<hr>

<?php

$silver_count=0;
$gold_count = 0;
$diamond_count = 0;
$query = $con->query("SELECT * from inventory_details where status='1'");
if($query->num_rows>0){
$i=0; $silver_count=0; $gold_count=0; $diamond_count=0;
while($row = $query->fetch_assoc()){
$i++;
$item_id = $row['item_id'];
$item_name = ucwords($row['item_name']);
$category = ucwords($row['category']);
$quantity = $row['quantity'];
$gst = $row['gst_rate'];
$access_1 = $row['access_1']; if($access_1=="Yes") $silver_count++;
$price_1 = $row['price_1']; if($price_1=='') $price_1='_';
$access_2 = $row['access_2']; if($access_2=="Yes") $gold_count++;
$price_2 = $row['price_2']; if($price_2=='') $price_1='_';
$access_3 = $row['access_3']; if($access_3=="Yes") $diamond_count++;
$price_3 = $row['price_3']; if($price_3=='') $price_1='_';
$item_link = $row['item_link'];
$weight = $row['weight'];
$length = $row['length'];
$width = $row['width'];
$height = $row['height'];
$packing_cost = $row['packing_cost'];
$shipping_cost = $row['shipping_cost'];
$pic_url = $row['pic_url'];


echo'
<div class="row">
<div class="col-xs-4" style="color: darkblue; cursor: pointer;" onclick="show_item_detail'.$i.'();"><b>#'.$i.'.&nbsp; </b>'.$item_name.'</div>
<div class="col-xs-2">'.$quantity.'</div>
<div class="col-xs-1">'.$gst.'%</div>
<div class="col-xs-1">'.$price_1.'</div>
<div class="col-xs-1">'.$price_2.'</div>
<div class="col-xs-1">'.$price_3.'</div>
<div class="col-xs-2"><a href="edit-existing-product.php?item_id='.$item_id	.'">Edit</a> | <a href="manage-inventory.php?request_delete=true&delete_item_id='.$item_id.'&delete_item_name='.$item_name.'&delete_category='.$category.'">Delete</a></div>
</div>
<div style="height:1px; background-color:#f1f1f1; width:100%; margin-top:15px;"></div>
';


echo'
<script>
function show_item_detail'.$i.'(){
if ( document.getElementById("item_detail_div'.$i.'").classList.contains("hidden") )
document.getElementById("item_detail_div'.$i.'").classList.toggle("hidden");
else document.getElementById("item_detail_div'.$i.'").classList.toggle("hidden");
}
</script>

</br>
<div class="container-fluid hidden" id="item_detail_div'.$i.'" style="position:fixed; top:10px; margin-left:3%; z-index:1; width:90%;">
<div style="background-color:#f9f9f9; width:100%; padding:50px; border:1px solid lightgrey; border-radius:5px;">
<b style="background-color:red; color:white; padding:5px; padding-left:13px; padding-right:13px; border-radius:5px; position:absolute; right:7%; cursor:pointer;" onclick="show_item_detail'.$i.'()"> X </b>
<h3 style="text-align:center;">Product Details</h3>
<hr>
<div class="row">
<div class="col-xs-1"></div>
<div class="col-xs-3"><img src="./item_pic/'.$pic_url.'" style="width:100%; height:auto;"></div>
<div class="col-xs-1"></div>
<div class="col-xs-5" style="line-height:30px;">
<b>Name : </b>'.$item_name.'</br>
<b>Quantity : </b>'.$quantity.'</br>
<b>Category : </b>'.$category.'</br>
<b>GST : </b>'.$gst.' %</br>
<b>Links : </b> ';
$k=explode(",", $item_link);
for($link=0;$link<sizeof($k);$link++){
echo'<a href="'.$k[$link].'">Link '.$link.' </a>';
}
echo'
<hr>';
if($access_1=="Yes")
echo'
<b>Silver Price : </b> Rs.'.$price_1.'/-</br>';
if($access_2=="Yes")
echo'
<b>Gold Price : </b> Rs.'.$price_2.'/-</br>';
if($access_3=="Yes")
echo'
<b>Diamond Price : </b> Rs.'.$price_3.'/-';

echo'<hr>
<b>Weight : </b>'.$weight.' k.g. </br>
<b>Dimensions : </b>'.$length.'x'.$width.'x'.$height.'  cm.
<hr>
<b>Packing Cost : </b> Rs.'.$packing_cost.' /-</br>
<b>Packing Cost : </b> Rs.'.$shipping_cost.' /-</br>
';
echo'
</div>
</div>
</div>
</div>
';

}
}
else echo'</br><h3>No item found.</h3> Please add first item in inventory. Click <a href="add-new-product.php">here</a>';

echo'<script>
document.getElementById("total_item").innerHTML = "'.$query->num_rows.'";
document.getElementById("silver_item").innerHTML = "'.$silver_count.'";
document.getElementById("gold_item").innerHTML = "'.$gold_count.'";
document.getElementById("diamond_item").innerHTML = "'.$diamond_count.'";
</script>';


?>
</div>
</div>
</div>
</div>
</div></div>


<?php include"inc/footer.php"; ?>
