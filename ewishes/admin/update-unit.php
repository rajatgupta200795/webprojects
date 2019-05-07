<?php include"inc/header.php"; ?>


<form action="" method="POST"> 
<b>Add unit</b> : <input type="text" name="add_unit"> 
<input type="submit" class="btn btn-primary btn-sm" name="send">
</form>

</br></br></br>

<div style="line-height: 35px;">
<?php

$unit_id=0;
$query=$con->query("SELECT * FROM unit WHERE  1=1");
$unit_count=$query->num_rows;
if($unit_count>0){

echo'<div class="row" style="font-weight:bold;"><div class="col-sm-2"><b>SR. Number</b></div><div class="col-sm-2">unit</div><div class="col-sm-2">Id</div><div class="col-sm-2">Request Delete</div></div>';

$i=0;
while($row = $query->fetch_assoc()){
		$i++;
		$unit_name = $row['unit_name'];
		$unit_id = $row['unit_id'];
		$id = $row['id'];
		echo'<div class="row"><div class="col-sm-2"><b>'.$i.'.</b></div><div class="col-sm-2">'.$unit_name.'</div><div class="col-sm-2">'.$unit_id.'</div><div class="col-sm-2"><a href="?id='.$id.'&delete_query=1">Delete</a></div></div>';
	}
}




$send = @$_POST['send'];
$add_unit = @$_POST['add_unit'];
$unit_id = $unit_id+1;

if($send){
$query=$con->query("INSERT into unit(unit_name, unit_id) values('$add_unit', '$unit_id')");

}









?>

</div>
</div>

<?php include"inc/footer.php"; ?>

