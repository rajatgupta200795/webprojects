<?php include"../inc/header.php"; ?>

</br>

<div class="container">
<div class="jumbotron">
<center><h2>Change Account Password</h2></center></br></br>
<?php 

echo"
<form action='#' method='POST' style='font-weight:bold;'>
<div class='row'><div class='col-sm-2'></div><div class='col-sm-2'>New Password: </div><div class='col-sm-3'><input type='password' name='changpswd1'required/></div></div></br></br>
<div class='row'><div class='col-sm-2'></div><div class='col-sm-2'>Confirm Password: </div><div class='col-sm-3'><input type='password' name='changpswd2'required/></div></div></br>
<center><input type='submit' name='sbmtchang' class='btn btn-primary'/></center>
</form>
";
$changpswd1=@$_POST['changpswd1'];
$changpswd2=@$_POST['changpswd2'];
$sbmtchang=@$_POST['sbmtchang'];
$passwordcode=$_GET['id_passwordcode'];
//setcookie("id_passwordcode",$id_passwordcode);
//$passwordcode=$_COOKIE['id_passwordcode'];

if($sbmtchang){

include"logout.php";

if($changpswd1==$changpswd2){
	$sql=$con->query("SELECT * FROM admin where pswd_change_id='$passwordcode'");

if($sql->num_rows==1){
$query=$con->query("UPDATE admin set password='$changpswd1' where pswd_change_id='$passwordcode'");
$query=$con->query("SELECT * FROM admin where pswd_change_id='$passwordcode'");
$row=$query->fetch_assoc();
$un=$row['username'];

setcookie("user_login",md5($un));
$proof_id=rand(10000,999999);
$con->query("UPDATE admin set pswd_change_id='$proof_id' where username='$un'");
//setcookie("id_passwordcode",$id_passwordcode,time()-1);

header("location:home.php");

}
}
else echo'</br></br><div style="font-size:20px; color:red;"><span class="glyphicon glyphicon-warning-sign"></span> Password is not Same. Please Enter same Password In Both Field.</div>
</br></br>';
}

echo'</div></div>';
?>




<?php include ("../inc/footer.php");?>
