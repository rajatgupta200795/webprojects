<?php include'inc/admin-header.php'; ?>

</br>

<div class="container" style="line-height: 40px;">

<?php

if(isset($_GET['delete_category_id'])){
echo$delete_category_id = $_GET['delete_category_id'];
$query=$con->query("DELETE from category where c_id='$delete_category_id'");
if($query)
header("location:admin-category-field.php");
}

if(isset($_GET['edit_category_id'])){
$edit_category_id = $_GET['edit_category_id'];
$category_name = $_GET['category_name'];
echo'<h3><center>Edit Category</center></h3>
<hr>


<form class="navbar-form" method="POST" style="text-align: center;">
<h4>Enter New Category Name </h4> <input type="text" name="edit_category_name" class="form-control" value="'.$category_name.'">
<input type="submit" name="edit_category_send" value="Update" class="btn btn-primary">
</form>

</br>
<hr>
';
}

if(!isset($_GET['delete_category_id']) && !isset($_GET['edit_category_id']))
echo'
<h3>Add New Category</h3>
<hr>

<div class="container" style="line-height: 40px;">

<form class="navbar-form" method="POST" style="text-align: center;">
<h4>Enter New Category Name </h4> <input type="text" name="add_category_name" class="form-control">
<input type="submit" name="add_category_send" value="Add" class="btn btn-primary">
</form>
</br>
<hr>
';

echo'<h3>List Of All Category</h3>
</br>

<div class="row" style="font-weight: bold;">
<div class="col-sm-1">Sr.No.</div>
<div class="col-sm-4">Category Name</div>
<div class="col-sm-2">Action</div>
</div>
';

$c_id=0;
$query=$con->query("SELECT * FROM category WHERE  1=1 order by c_id ASC");
if($query->num_rows>0){
$i=0;
while($row = $query->fetch_assoc()){
$i++;
$category_name = ucwords($row['name']);
$c_id = $row['c_id'];
echo'
<div class="row">
<div class="col-sm-1"><b>#'.$i.'.</b></div>
<div class="col-sm-4">'.$category_name.'</div>
<div class="col-sm-2"><a href="?edit_category_id='.$c_id.'&category_name='.$category_name.'">Edit</a> | <a href="?delete_category_id='.$c_id.'">Delete</a></div>
</div>
';
}
}

$add_category_send = @$_POST['add_category_send'];
if($add_category_send){
$add_category_name = $_POST['add_category_name'];
$c_id++;
$query = $con->query("INSERT into category(name, c_id) values('$add_category_name', '$c_id')");
if($query)
header("location:admin-category-field.php");
}

$edit_category_send = @$_POST['edit_category_send'];
if($edit_category_send){
$edit_category_name = $_POST['edit_category_name'];
$query = $con->query("UPDATE category set name='$edit_category_name' where c_id='$edit_category_id'");
if($query)
header("location:admin-category-field.php");
}


?>
<hr>

</div>

<?php include'inc/footer.php'; ?>