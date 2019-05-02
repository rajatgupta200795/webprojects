<?php include'inc/admin-header.php'; ?>

</br>

<div class="container" style="line-height: 40px;">

<?php

if(isset($_GET['delete_unit_id'])){
echo$delete_unit_id = $_GET['delete_unit_id'];
$query=$con->query("DELETE from unit where unit_id='$delete_unit_id'");
if($query)
header("location:admin-unit-field.php");
}

if(isset($_GET['edit_unit_id'])){
$edit_unit_id = $_GET['edit_unit_id'];
$unit_name = $_GET['unit_name'];
echo'<h3><center>Edit Unit</center></h3>
<hr>


<form class="navbar-form" method="POST" style="text-align: center;">
<h4>Enter New Unit Name </h4> <input type="text" name="edit_unit_name" class="form-control" value="'.$unit_name.'">
<input type="submit" name="edit_unit_send" value="Update" class="btn btn-primary">
</form>

</br>
<hr>
';
}

if(!isset($_GET['delete_unit_id']) && !isset($_GET['edit_unit_id']))
echo'
<h3>Add New unit</h3>
<hr>

<div class="container" style="line-height: 40px;">

<form class="navbar-form" method="POST" style="text-align: center;">
<h4>Enter New Unit Name </h4> <input type="text" name="add_unit_name" class="form-control">
<input type="submit" name="add_unit_send" value="Add" class="btn btn-primary">
</form>
</br>
<hr>
';

echo'<h3>List Of All Unit</h3>
</br>

<div class="row" style="font-weight: bold;">
<div class="col-sm-1">Sr.No.</div>
<div class="col-sm-4">Unit Name</div>
<div class="col-sm-2">Action</div>
</div>
';

$unit_id=0;
$query=$con->query("SELECT * FROM unit WHERE  1=1 order by unit_id ASC");
if($query->num_rows>0){
$i=0;
while($row = $query->fetch_assoc()){
$i++;
$unit_name = ucwords($row['unit_name']);
$unit_id = $row['unit_id'];
echo'
<div class="row">
<div class="col-sm-1"><b>#'.$i.'.</b></div>
<div class="col-sm-4">'.$unit_name.'</div>
<div class="col-sm-2"><a href="?edit_unit_id='.$unit_id.'&unit_name='.$unit_name.'">Edit</a> | <a href="?delete_unit_id='.$unit_id.'">Delete</a></div>
</div>
';
}
}

$add_unit_send = @$_POST['add_unit_send'];
if($add_unit_send){
$add_unit_name = $_POST['add_unit_name'];
$unit_id++;
$query = $con->query("INSERT into unit(unit_name, unit_id) values('$add_unit_name', '$unit_id')");
if($query)
header("location:admin-unit-field.php");
}

$edit_unit_send = @$_POST['edit_unit_send'];
if($edit_unit_send){
$edit_unit_name = $_POST['edit_unit_name'];
$query = $con->query("UPDATE unit set unit_name='$edit_unit_name' where unit_id='$edit_unit_id'");
if($query)
header("location:admin-unit-field.php");
}


?>
<hr>

</div>

<?php include'inc/footer.php'; ?>