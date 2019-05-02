<?php include"inc_admin/header.php"; ?>
<?php include"inc_admin/admin-left-quick-menu.php"; ?>
<?php include"inc_admin/menu-toggle.php"; ?>

<h3><center> Add New Product In Inventory</center></h3>
<hr>
</br>
<form class="navbar-form" action="" method="POST" style="margin-left: 5%;" enctype="multipart/form-data">

<h3 style="color:#0e407e;">Product Details </h3>
<hr>
<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-2"><b>Product Title : </b></div>
<div class="col-sm-5"><input type="text" style="width: 100%;" class="form-control" name="product_title" placeholder="Product Title"></div>
</div>
</br>

<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-2"><b>Category : </b></div>
<div class="col-sm-3"><input type="text" class="form-control" name="category" placeholder="Category"></div>
</div>
</br>

<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-2"><b>Quantity : </b></div>
<div class="col-sm-3"><input type="text" class="form-control" name="quantity" placeholder="Quantity"></div>
</div>
</br>

<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-2"><b>Weight : </b></div>
<div class="col-sm-4"><input type="text" class="form-control" name="weight" placeholder="Weight (k.g.)"> in Kilogram</div>
</div>
</br>

<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-8"><b>Dimensions : </b><input type="text" class="form-control" size="5" placeholder="Length" name="p_length">cm <b>x</b> <input type="text" class="form-control" size="5" placeholder="Width" name="p_width">cm <b>x</b> <input type="text" class="form-control" size="5" placeholder="Height" name="p_height">cm</div>
</div>
</br>





<h3 style="color:#0e407e;">Price Details </h3>
<hr>
<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-2"><b>GST : </b></div>
<div class="col-sm-5"><input type="text" class="form-control" name="gst" placeholder="GST Rate"></div>
</div>
</br>

<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-2"><b>Packing Cost : </b></div>
<div class="col-sm-5"><input type="text" class="form-control" name="packing_cost" placeholder="Packing Cost"></div>
</div>
</br>

<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-2"><b>Shipping Cost : </b></div>
<div class="col-sm-5"><input type="text" class="form-control" name="shipping_cost" placeholder="Shipping Cost"></div>
</div>
</br></br>

<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-3"><b>Allow Silver : </b>
<select class="form-control" name="silver_access" id="check_silver" oninput="check_silver_access();">
<option>No</option>
<option>Yes</option>
</select>
</div>
<div class="col-sm-5 hidden" id="silver_price_id"><b>Silver Price : </b> <input type="text" class="form-control" name="silver_price"></div>
</div>
</br>

<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-3"><b>Allow Gold : </b>
<select class="form-control" name="gold_access" id="check_gold" oninput="check_gold_access();">
<option>No</option>
<option>Yes</option>
</select>
</div>
<div class="col-sm-5 hidden" id="gold_price_id"><b>Gold Price : </b> <input type="text" class="form-control" name="gold_price"></div>
</div>
</br>

<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-3"><b>Allow Diamond : </b>
<select class="form-control" name="diamond_access" id="check_diamond" oninput="check_diamond_access();">
<option>No</option>
<option>Yes</option>
</select>
</div>
<div class="col-sm-5 hidden" id="diamond_price_id"><b>Diamond Price : </b> <input type="text" class="form-control" name="diamond_price"></div>
</div>
</br></br>

<script type="text/javascript">

function check_silver_access(){
if ( document.getElementById("silver_price_id").classList.contains('hidden') )
document.getElementById("silver_price_id").classList.toggle('hidden');
else document.getElementById("silver_price_id").classList.toggle('hidden');
}

function check_gold_access(){
if ( document.getElementById("gold_price_id").classList.contains('hidden') )
document.getElementById("gold_price_id").classList.toggle('hidden');
else document.getElementById("gold_price_id").classList.toggle('hidden');
}

function check_diamond_access(){
if ( document.getElementById("diamond_price_id").classList.contains('hidden') )
document.getElementById("diamond_price_id").classList.toggle('hidden');
else document.getElementById("diamond_price_id").classList.toggle('hidden');
}
</script>


<h3 style="color:#0e407e;">Product Description </h3>
<hr>

<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-2"><b>Add Links (Separate by comma) : </b></div>
<div class="col-sm-5"><textarea class="form-control" style="width: 70%; height: 90px;" name="link" placeholder="Add product links here (seprate by comma)"></textarea></div>
</div>
</br>

<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-2"><b>Product Photo : </b></div>
<div class="col-sm-5"><input type="file" name="file"></div>
</div>
</br>


<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-2"><b>Product Description: </b></div>
<div class="col-sm-6"><textarea class="form-control" style="width: 100%; height: 100px;" name="description" placeholder="Product description ..."></textarea></div>
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

<?php

if(isset($_POST['send_product'])){

$product_title = $_POST['product_title'];
$item_id = md5($product_title.' '.rand(1, 1000));
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
$pic_url = $_POST['pic_url'];
$description = $_POST['description'];
$add_date = date("d-m-y");

$pic_title = preg_replace('/\s+/', '_', $product_title);
define ("MAX_SIZE","1000"); 
$errors=0; 

	$image =$_FILES["file"]["name"]; 
$uploadedfile = $_FILES['file']['tmp_name']; 
if ($image) { 
	$filename = stripslashes($_FILES['file']['name']);
/*$extension = getExtension($filename); 
$extension = strtolower($extension); */
if (($_FILES["file"]["type"] != "image/jpg") && ($_FILES["file"]["type"] != "image/jpeg") && ($_FILES["file"]["type"] != "image/png") && ($_FILES["file"]["type"] != "image/gif")) { 
	echo ' Unknown Image extension '; 
	$errors=1; 
} else { 
	$size=filesize($_FILES['file']['tmp_name']); 
 
if($_FILES["file"]["type"] =="image/jpg" || $_FILES["file"]["type"]=="image/jpeg" ) { 
	$uploadedfile = $_FILES['file']['tmp_name']; $src = imagecreatefromjpeg($uploadedfile); 
} 
else if($_FILES["file"]["type"] =="image/png") { 
$uploadedfile = $_FILES['file']['tmp_name']; 
$src = imagecreatefrompng($uploadedfile); 
} 
else { 
$src = imagecreatefromgif($uploadedfile); 
}
list($width,$height)=getimagesize($uploadedfile); 
$newwidth=200; 
$newheight=($height/$width)*$newwidth; 
$tmp=imagecreatetruecolor($newwidth,$newheight); 

imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight, $width,$height); 
$picname = $pic_title."_".$item_id.".jpg";
$filename = 'item_pic/'.$picname; 

if(file_exists("documenti/$picname"))
unlink("documenti/$picname");

imagejpeg($tmp,$filename,70); 
imagedestroy($src); 
imagedestroy($tmp); 
$filename = $picname;
}  //If no errors registred, print the success message 


}

if(!$errors){



$query = $con->query("INSERT INTO inventory_details(item_id, item_name, category, item_link, pic_url, quantity, gst_rate, shipping_cost, length, height, width, weight, packing_cost, access_1, access_2, access_3, price_1, price_2, price_3, add_date, description) values('$item_id', '$product_title', '$category', '$link', '$filename', '$quantity', '$gst', '$shipping_cost', '$p_length', '$p_height', '$p_width', '$weight', '$packing_cost', '$silver_access', '$gold_access', '$diamond_access', '$silver_price', '$gold_price', '$diamond_price', '$add_date', '$description')");
if($query){
echo'<script>alert("Your item has been added in list succesfully.");</script>';
}
}

}

?>




<?php include"inc/footer.php"; ?>
