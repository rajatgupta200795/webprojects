<?php include"inc_admin/header.php"; ?>
<?php include"inc_admin/admin-left-quick-menu.php"; ?>
<?php include"inc_admin/menu-toggle.php"; ?>

<?php

$item_id = '';
$item_name = '';
$category = '';
$quantity = '';
$gst = '';
$access_1 = '';
$price_1 = '';
$access_2 = '';
$price_2 = '';
$access_3 = '';
$price_3 = '';
$item_link = '';
$weight = '';
$length = '';
$width = '';
$description = '';
$pic_url = '';
$height = '';
$packing_cost = '';
$shipping_cost = '';

$item_id = @$_GET['item_id'];

$query = $con->query("SELECT * from inventory_details where item_id='$item_id'");
if($query->num_rows>0){
$i=0; $silver_count=0; $gold_count=0; $diamond_count=0;
while($row = $query->fetch_assoc()){
$i++;
$item_id = $row['item_id'];
$item_name = $row['item_name'];
$category = $row['category'];
$quantity = $row['quantity'];
$gst = $row['gst_rate'];
$access_1 = $row['access_1']; if($access_1=="Yes") $silver_count++;
$price_1 = $row['price_1'];
$access_2 = $row['access_2']; if($access_2=="Yes") $gold_count++;
$price_2 = $row['price_2'];
$access_3 = $row['access_3']; if($access_3=="Yes") $diamond_count++;
$price_3 = $row['price_3'];
$item_link = $row['item_link'];
$weight = $row['weight'];
$length = $row['length'];
$width = $row['width'];
$pic_url = $row['pic_url'];
$height = $row['height'];
$packing_cost = $row['packing_cost'];
$shipping_cost = $row['shipping_cost'];
$description = $row['description'];
}
}

echo'
<form class="navbar-form" action="" method="POST" style="margin-left:5%;">
<h3>Edit Product In Inventory</h3>
<hr>
</br>

<h3 style="color:#0e407e;">Product Details </h3>
<hr>
<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-2"><b>Product Title : </b></div>
<div class="col-sm-5"><input type="text" style="width: 100%;" value="'.$item_name.'" class="form-control" name="product_title" placeholder="Product Title"></div>
</div>
</br>

<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-2"><b>Category : </b></div>
<div class="col-sm-3"><input type="text" class="form-control" value="'.$category.'" name="category" placeholder="Category"></div>
</div>
</br>

<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-2"><b>Quantity : </b></div>
<div class="col-sm-3"><input type="text" class="form-control" value="'.$quantity.'" name="quantity" placeholder="Quantity"></div>
</div>
</br>

<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-2"><b>Weight : </b></div>
<div class="col-sm-4"><input type="text" class="form-control" value="'.$weight.'" name="weight" placeholder="Weight (k.g.)"> in Kilogram</div>
</div>
</br>

<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-8"><b>Dimensions : </b><input type="text" class="form-control" size="5" placeholder="Length"  value="'.$length.'" name="p_length">cm <b>x</b> <input type="text" class="form-control"  value="'.$width.'" size="5" placeholder="Width" name="p_width">cm <b>x</b> <input type="text" class="form-control" value="'.$height.'" size="5" placeholder="Height" name="p_height">cm</div>
</div>
</br>





<h3 style="color:#0e407e;">Price Details </h3>
<hr>
<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-2"><b>GST : </b></div>
<div class="col-sm-5"><input type="text" class="form-control" value="'.$gst.'" name="gst" size="5" placeholder="GST Rate"> %</div>
</div>
</br>

<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-2"><b>Packing Cost : </b></div>
<div class="col-sm-5"> Rs. <input type="text" class="form-control" value="'.$packing_cost.'" size="5" name="packing_cost" placeholder="Packing Cost"> /-</div>
</div>
</br>

<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-2"><b>Shipping Cost : </b></div>
<div class="col-sm-5"> Rs. <input type="text" class="form-control"  value="'.$shipping_cost.'" size="5" name="shipping_cost" placeholder="Shipping Cost"> /-</div>
</div>
</br></br>

<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-3"><b>Allow Silver : </b>
<select class="form-control" name="silver_access" id="check_silver" oninput="check_silver_access();">
<option>'.$access_1.'</option>
<option>No</option>
<option>Yes</option>
</select>
</div>
<div class="col-sm-5 hidden" id="silver_price_id"><b>Silver Price : </b> Rs.<input type="text" size="6" value="'.$price_1.'" class="form-control" name="silver_price"> /-</div>
</div>
</br>

<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-3"><b>Allow Gold : </b>
<select class="form-control" name="gold_access" id="check_gold" oninput="check_gold_access();">
<option>'.$access_2.'</option>
<option>No</option>
<option>Yes</option>
</select>
</div>
<div class="col-sm-5 hidden" id="gold_price_id"><b>Gold Price : </b> Rs. <input type="text" size="6" value="'.$price_2.'" class="form-control" name="gold_price"> /-</div>
</div>
</br>

<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-3"><b>Allow Diamond : </b>
<select class="form-control" name="diamond_access" id="check_diamond" oninput="check_diamond_access();">
<option>'.$access_3.'</option>
<option>No</option>
<option>Yes</option>
</select>
</div>
<div class="col-sm-5 hidden" id="diamond_price_id"><b>Diamond Price : </b> Rs. <input type="text" size="6" value="'.$price_3.'" class="form-control" name="diamond_price"> /- </div>
</div>
</br></br>

<script type="text/javascript">

check_silver_access();
check_gold_access();
check_diamond_access();
function check_silver_access(){
if ( document.getElementById("silver_price_id").classList.contains("hidden") )
document.getElementById("silver_price_id").classList.toggle("hidden");
else document.getElementById("silver_price_id").classList.toggle("hidden");
}

function check_gold_access(){
if ( document.getElementById("gold_price_id").classList.contains("hidden") )
document.getElementById("gold_price_id").classList.toggle("hidden");
else document.getElementById("gold_price_id").classList.toggle("hidden");
}

function check_diamond_access(){
if ( document.getElementById("diamond_price_id").classList.contains("hidden") )
document.getElementById("diamond_price_id").classList.toggle("hidden");
else document.getElementById("diamond_price_id").classList.toggle("hidden");
}
</script>


<h3 style="color:#0e407e;">Product Description </h3>
<hr>

<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-2"><b>Add Links (Separate by comma) : </b></div>
<div class="col-sm-5"><textarea class="form-control" style="width: 70%; height: 90px;" name="link" placeholder="Add product links here (seprate by comma)"> '.$item_link.'</textarea></div>
</div>
</br>

<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-2"><b>Product Photo : </b></div>
<div class="col-sm-5"><input type="file" value="'.$pic_url.'" name="pic_url"></div>
</div>
</br>


<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-2"><b>Product Description: </b></div>
<div class="col-sm-6"><textarea class="form-control" value="'.$description.'" style="width: 100%; height: 100px;" name="description" placeholder="Product description ..."></textarea></div>
</div>
</br>


<hr>

<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-2">
<input type="submit" class="btn btn-primary btn-lg" value="Add Product" name="send_product"></div>
</div>


</form>



</div>
</div>
</div>
';

if(isset($_POST['send_product'])){

$product_title = $_POST['product_title'];
$category = $_POST['category'];
$quantity = $_POST['quantity'];
$weight = $_POST['weight'];
$p_length = $_POST['p_length'];
$p_height = $_POST['p_height'];
$p_width = $_POST['p_width'];
$gst = $_POST['gst'];
$packing_cost = $_POST['packing_cost'];
$shipping_cost = $_POST['shipping_cost'];
$silver_access = $_POST['silver_access'];
$silver_price = $_POST['silver_price'];
$gold_access = $_POST['gold_access'];
$gold_price = $_POST['gold_price'];
$diamond_access = $_POST['diamond_access'];
$diamond_price = $_POST['diamond_price'];
$link = $_POST['link'];
$description = $_POST['description'];
$add_date = date("d-m-y");


$query = $con->query("UPDATE inventory_details set item_id='$item_id', item_name='$product_title', category='$category', item_link='$link', pic_url='$pic_url', quantity='$quantity', gst_rate='$gst', shipping_cost='$shipping_cost', length='$p_length', height='$p_height', width='$p_width', weight='$weight', packing_cost='$packing_cost', access_1='$silver_access', access_2='$gold_access', access_3='$diamond_access', price_1='$silver_price', price_2='$gold_price', price_3='$diamond_price', add_date='$add_date' where item_id='$item_id'");
if($query){
echo'<script>alert("Product has been successfully Updated. '.$item_id.'");</script>';
}


}

?>




<?php include"inc/footer.php"; ?>
