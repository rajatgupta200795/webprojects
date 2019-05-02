<?php  include "./inc/header.php"; 
ob_start();

if(!isset($_COOKIE['user_login']))
header("location:sign-in.php?create_sell_offer=false&user_login=false");
?>

<div style="background-color: #f0f0f0; height: 1000px;">

<div style="height:450px; background-color: #2c0220c9; text-align: center; color: white; font-size: 20px; font-family: sans-serif;">
</br>
<div style="font-size: 38px; font-family: \'Open Sans\', sans-serif;">Start Selling Today</div>
Create the best sell offer having good price and better quality product/services.
</br></br>
<center>
<div style="height:800px; width: 70%; border-right: 2px solid lightgrey; border-bottom: 2px solid lightgrey; border-radius: 7px; background-color: white; color: #363030; font-weight: bold; text-align: left; font-size: 17px; font-family: \'PT Sans Narrow\', sans-serif;">
</br></br>

<form class="navbar-form" action="" method="POST" enctype="multipart/form-data">


<div class="row">
<div class="col-sm-1"></div><div class="col-sm-3">Category: </div>
<div class="col-sm-6">
<select class="form-control" name="c_name">
<?php $query=$con->query("SELECT * FROM category WHERE  1=1");
while ($row = $query->fetch_assoc()) {
	echo"<option>".$row['name']."</option>";
}
 ?>
</select>
</div>
</div>
</br></br>

<div class="row">
<div class="col-sm-1"></div><div class="col-sm-3">Product/Service Title: </div>
<div class="col-sm-6">
<input type="text" class="form-control" size="47" name="product_title" placeholder="Enter Product / Service title" required>
</div>
</div>
</br></br>

<div class="row">
<div class="col-sm-1"></div><div class="col-sm-3">Brief Description: </div>
<div class="col-sm-6">
<textarea class="form-control" name="description" rows="6" cols="50" placeholder="Writte something here...." required></textarea>
</div>
</div>
</br></br>


<div class="row">
<div class="col-sm-1"></div><div class="col-sm-3">Upload Photo: </div>
<div class="col-sm-6">
<input type="file" name="file" class="form-control">
</div>
</div>
</br></br>


<div class="row">
<div class="col-sm-1"></div><div class="col-sm-3">Quantity: </div>
<div class="col-sm-6">
<input type="number" class="form-control" name="quantity" style="width: 120px;" min="1" value="1" id="quantity_id" oninput="total_fun();" required>
<select class="form-control" name="unit_name" id="unit_id" oninput="unit_select()">
<?php $query=$con->query("SELECT * FROM unit WHERE  1=1");
while ($row = $query->fetch_assoc()) {
	echo"<option>".$row['unit_name']."</option>";
}
 ?>
</select>
</div>
</div>
</br></br>


<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-3">Price per Unit: </div>
<div class="col-sm-4">
<input type="number" class="form-control" name="price" style="width: 120px;" min="1" value="1" id="price_id" oninput="total_fun();" required>
 	per 
<span id="price_per_unit">Piece</span>
<script>
function unit_select(){
document.getElementById("price_per_unit").innerHTML = document.getElementById("unit_id").value;
}
</script>
</div>
</div>
</br>
</br>

<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-9">
<span id="total_statement" style="color: green;"></span>
<script>
function total_fun(){
price = document.getElementById("price_id").value;
quantity = document.getElementById("quantity_id").value;
unit = document.getElementById("unit_id").value;
document.getElementById("total_statement").innerHTML = "You want to sell "+quantity+" "+unit+" At Rs. "+price*quantity+"/-";
}
</script>
</div>
</div>
</br>

<center><input type="submit" class="btn btn-primary btn-lg" value="Submit Selling Offer" name="send"></center>

</form>

</center>
</div>

</div>

<?php
$send = @$_POST['send'];

if($send){
	
$product_title = strtolower($_POST['product_title']);
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$description = $_POST['description'];
$c_name = $_POST['c_name'];
$c_name = strtolower($c_name);
$unit_name = $_POST['unit_name'];
$unit_name = strtolower($unit_name);

$date = date_default_timezone_set('Asia/Kolkata');
$offer_date = Date("y-m-d");
$offer_time = date("H-i-s");

$product_id = md5($product_title.''.$offer_date.''.$offer_time);

$query=$con->query("SELECT c_id FROM category WHERE  name='$c_name'");
while($row = $query->fetch_assoc()){
$c_id = $row['c_id'];
}
$query=$con->query("SELECT unit_id FROM unit WHERE  unit_name='$unit_name'");
while($row1 = $query->fetch_assoc()){
$unit_id = $row1['unit_id'];
}
$username = $_COOKIE['user_login'];

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
$picname = $pic_title.".jpg";
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

$query=$con->query("INSERT INTO sell_offer(product_title, product_id, quantity, price, description, c_id, unit_id, username, offer_date, offer_time, img_url) values('$product_title', '$product_id', '$quantity', '$price', '$description', '$c_id', '$unit_id', '$username', '$offer_date', '$offer_time', '$filename')");

header("location:index.php?selling-offer-post=successfully");
}
}

ob_end_flush();
?>

<?php  include "./inc/footer.php"; ?>
