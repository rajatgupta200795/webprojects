<?php include"inc/header.php"; ?>


<form action="" method="POST"> 
<b>Add Category</b> : <input type="text" name="add_category"> 
<input type="submit" class="btn btn-primary btn-sm" name="send">
</form>

</br></br></br>

<div style="line-height: 35px;">
<?php

$c_id=0;
$query=$con->query("SELECT * FROM category WHERE  1=1");
$category_count=$query->num_rows;
if($category_count>0){

echo'<div class="row" style="font-weight:bold;"><div class="col-sm-2"><b>SR. Number</b></div><div class="col-sm-2">Category</div><div class="col-sm-2">Id</div><div class="col-sm-2">Request Delete</div></div>';

$i=0;
while($row = $query->fetch_assoc()){
		$i++;
		$category = $row['name'];
		$c_id = $row['c_id'];
		$id = $row['id'];
		echo'<div class="row"><div class="col-sm-2"><b>'.$i.'.</b></div><div class="col-sm-2">'.$category.'</div><div class="col-sm-2">'.$c_id.'</div><div class="col-sm-2"><a href="?id='.$id.'&delete_query=1">Delete</a></div></div>';
	}
}




$send = @$_POST['send'];
$add_category = @$_POST['add_category'];
$c_id = $c_id+1;

if($send){
$query=$con->query("INSERT into category(name, c_id) values('$add_category', '$c_id')");
header("refresh:0");

}









?>

</div>
</div>

<?php include"inc/footer.php"; ?>

