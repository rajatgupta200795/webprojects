<?php include ("header.php"); ?> 
<?php setcookie("user_gm",$un ,time()-1); ?>

</br>

<div class="container">
<div class="jumbotron">
<center><h1>Change Account Password</h1></center></br></br>
<?php 

echo"
<form action='#' method='POST'>
New Password: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='password' name='changpswd1'required/></br></br>
Confirm New Password: <input type='password' name='changpswd2'required/></br></br>
<center><input type='submit' class='btn btn-success'  name='sbmtchang'/></center>
</form>
";
$changpswd1=@$_POST['changpswd1'];
$changpswd2=@$_POST['changpswd2'];
$sbmtchang=@$_POST['sbmtchang'];
$id_passwordcode=$_GET['id_passwordcode'];
setcookie("id_passwordcode",$id_passwordcode);

$passwordcode=$_COOKIE['id_passwordcode'];
if($sbmtchang){ 
if($changpswd1==$changpswd2){
	$sql=$con->query("UPDATE love_calc set password='$changpswd1' where pswd_change_id='$passwordcode'");
	if($sql){
$query=$con->query("SELECT * FROM love_calc where pswd_change_id='$passwordcode'");
$row=$query->fetch_assoc();
$un=$row['username'];

setcookie("user_gm",$un);
$proof_id=rand(10000,999999);
$con->query("UPDATE love_calc set pswd_change_id='$proof_id' where username='$un'");
setcookie("id_passwordcode",$id_passwordcode,time()-1);
header("location:mydb.php");

}
}
else echo'</br><span class="glyphicon glyphicon-warning-sign"></span> Password is not Same.Please Enter same Password In Both Field.';
}

echo'</div></div>';
?>




<?php include ("footer.php");?>
