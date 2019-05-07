<?php include"inc/header.php"; ?>


<form class="navbar-form" action="add-item.php" method="post" enctype="multipart/form-data"> 
<div class="form-group-md"> 

<b>Title : </b><input class="form-control" type="text" style="width: 60%; height: 40px;" name="title"> </br></br>
<b>Brand : </b><input class="form-control" type="text" style="width: 30%; height: 40px;" name="brand"> </br></br>
<b>Description : </b></br>
<textarea class="form-control" rows="6" cols="100" name="description"></textarea> </br></br>
<b>MRP. : </b>Rs. <input class="form-control" type="text" style="width: 10%; height: 40px;" name="mrp"> /- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<b>Price : </b>Rs. <input class="form-control" type="text" style="width: 10%; height: 40px;" name="price"> /- </br></br>
<b>Total in Stock : </b> <input class="form-control" type="text" style="width: 10%; height: 40px;" name="total_item"> </br></br>
<b>Category : </b>
<select class="form-control" name="c_name">
<?php $query=$con->query("SELECT * FROM category WHERE  1=1");
while ($row = $query->fetch_assoc()) {
	echo"<option>".$row['name']."</option>";
}
 ?>
</select>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<b>Sub Category : </b>
<select class="form-control" name="sub_category_name">
<?php $query=$con->query("SELECT * FROM sub_category WHERE  1=1");
while ($row = $query->fetch_assoc()) {
	echo"<option>".$row['sc_name']."</option>";
}
?>
</select>
 </br></br>

<b>Add Other Link : </b><input class="form-control" type="text" style="width: 30%; height: 40px;" name="other_link"> </br></br>

<b>Item Photo : </b> <input class="form-control" type="file" name="fileToUpload">

</br></br><input type="submit" class="btn btn-primary btn-lg" name="send">

</div>
</form>

</br></br></br>

<div style="line-height: 35px;">
<?php


if(isset($_POST['send'])){
$title = @$_POST['title'];
$brand = @$_POST['brand'];
$description = @$_POST['description'];
$mrp = @$_POST['mrp'];
$price = @$_POST['price'];
$total_item = @$_POST['total_item'];
$c_name = @$_POST['c_name'];
$query=$con->query("SELECT c_id FROM category WHERE name='$c_name'");
while($row = $query->fetch_assoc()){
$c_id = $row['c_id'];
}
$sc_name = $_POST['sub_category_name'];
$query=$con->query("SELECT * FROM sub_category WHERE sc_name='$sc_name'");
while($row = $query->fetch_assoc()){
$sc_id = $row['sc_id'];
}
$date = date_default_timezone_set('Asia/Kolkata');
$upload_date = Date("y-m-d");
$upload_time = date("H:s:i");
$item_id = md5($title);
$img_url = str_replace(' ', '-', $title);
$img_url = $img_url.'.jpg';
$other_link = $_POST['other_link'];

$query = $con->query("INSERT into item(title, brand, description, item_id, mrp, price, stock, c_id, sc_id, upload_date, upload_time, img_url, other_link) values('$title', '$brand', '$description', '$item_id', '$mrp', '$price', '$total_item', '$c_id', '$sc_id', '$upload_date', '$upload_time', '$img_url', '$other_link')");
if($query) echo'Item Updated!';

}

?>

</div>
</div>

<?php include"inc/footer.php"; ?>

