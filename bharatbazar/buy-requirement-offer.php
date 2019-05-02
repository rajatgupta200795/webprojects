<?php  include "./inc/header.php"; 
ob_start();

if(!isset($_COOKIE['user_login']))
header("location:sign-in.php?create_sell_offer=false&user_login=false");
?>

<div style="background-color: #f0f0f0; height: 1000px;">

<div style="height:450px; background-color: #084153c9; text-align: center; color: white; font-size: 20px; font-family: sans-serif;">
</br>
<div style="font-size: 38px; font-family: \'Open Sans\', sans-serif;">Post Buy Requirement</div>
Post your requrements and we'll help you to find the best seller. 
</br></br>
<center>
<div style="height:800px; width: 70%; border-right: 2px solid lightgrey; border-bottom: 2px solid lightgrey; border-radius: 7px; background-color: white; color: #363030; font-weight: bold; text-align: left; font-size: 17px; font-family: \'PT Sans Narrow\', sans-serif;">
</br></br>

<form class="navbar-form"  method="POST">
<div class="form-group-md">


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
<textarea class="form-control" rows="6" cols="50" name="description" placeholder="Writte something here...." required></textarea>
</div>
</div>
</br></br>

<div class="row">
<div class="col-sm-1"></div><div class="col-sm-3">Quantity: </div>
<div class="col-sm-6">
<input type="number" class="form-control" name="quantity" style="width: 120px;" min="1" value="1" required>
<select class="form-control" name="unit_name">
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
<div class="col-sm-3">Budget </div>
<div class="col-sm-4">
Rs. <input type="number" class="form-control" name="budget" style="width: 120px;" min="1" value="1" required> /-

</div>
</div>
</br></br></br>

<center><input type="submit" class="btn btn-primary btn-lg" value="Submit buy Requirement" name="send"></center>

</div>
</form>

</center>
</div>

</div>


<?php

$send = @$_POST['send'];

if(isset($_POST['send']))
{
$product_title = @$_POST['product_title'];
$quantity = @$_POST['quantity'];
$budget = @$_POST['budget'];
$description = @$_POST['description'];
$c_name = @$_POST['c_name'];
$unit_name = @$_POST['unit_name'];

$query=$con->query("SELECT * FROM unit WHERE  unit_name='$unit_name'");
while($row = $query->fetch_assoc())
$unit_id = $row['unit_id'];

$query=$con->query("SELECT * FROM category WHERE  name='$c_name'");
while($row = $query->fetch_assoc())
$c_id = $row['c_id'];

$date = date_default_timezone_set('Asia/Kolkata');
$offer_date = Date("y-m-d");
$offer_time = date("H-i-s");

$product_id = md5($product_title.''.$offer_date.''.$offer_time);
$username = $_COOKIE['user_login'];

$query=$con->query("INSERT INTO buy_req(product_title, quantity, budget, description, c_id, username, unit_id, product_id, add_date) values('$product_title', '$quantity', '$budget', '$description', '$c_id', '$username', '$unit_id', '$product_id', '$offer_date')");

header("location:index.php?buy-requirement-post=successfully");
}

ob_end_flush();
?>

<?php  include "./inc/footer.php"; ?>
