<?php include"inc/header.php"; ?>


<form action="" method="POST"> 
<b>Add Sub Category</b> : <input type="text" name="add_sc"> 
<input type="submit" class="btn btn-primary btn-sm" name="send">
</form>

</br></br></br>

<div style="line-height: 35px;">
<?php

$sc_id=0;
$query=$con->query("SELECT * FROM sub_category WHERE  1=1");
$sc_count=$query->num_rows;
if($sc_count>0){

echo'<div class="row" style="font-weight:bold;"><div class="col-sm-2"><b>SR. Number</b></div><div class="col-sm-2">sc</div><div class="col-sm-2">Id</div><div class="col-sm-2">Request Delete</div></div>';

$i=0;
while($row = $query->fetch_assoc()){
		$i++;
		$sc_name = $row['sc_name'];
		$sc_id = $row['sc_id'];
		$id = $row['id'];
		echo'<div class="row"><div class="col-sm-2"><b>'.$i.'.</b></div><div class="col-sm-2">'.$sc_name.'</div><div class="col-sm-2">'.$sc_id.'</div><div class="col-sm-2"><a href="?id='.$id.'&delete_query=1">Delete</a></div></div>';
	}
}




$send = @$_POST['send'];
$add_sc = @$_POST['add_sc'];
$sc_id = $sc_id+1;

if($send){
$query=$con->query("INSERT into sub_category(sc_name, sc_id) values('$add_sc', '$sc_id')");
header("refresh:0");

}









?>

</div>
</div>

<?php include"inc/footer.php"; ?>

