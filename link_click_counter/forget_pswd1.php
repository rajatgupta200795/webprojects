<?php include ("./inc/header.php"); ?> 
<?php setcookie("userlogin",$un ,time()-1); ?>

</br>

<div class="container">
<div class="jumbotron">
<center><h1>Change Account Password</h1></center></br></br>
<?php 

echo"
<form action='#' method='POST'>
New Password: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='password' name='changpswd1'required/></br></br>
Confirm New Password: <input type='password' name='changpswd2'required/></br>
<center><input type='submit' name='sbmtchang'/></center>
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
	$sql=$con->query("UPDATE click_counter set password='$changpswd1' where pswd_change_id='$passwordcode'");
	if($sql){
$query=$con->query("SELECT * FROM click_counter where pswd_change_id='$passwordcode'");
$row=$query->fetch_assoc();
$email=$row['email'];

setcookie("user_in" , md5($email));
$proof_id=rand(10000,999999);
$con->query("UPDATE click_counter set pswd_change_id='$proof_id' where email='$email'");
setcookie("id_passwordcode",$id_passwordcode,time()-1);
header("location:home.php");

}
}
else echo'</br><span class="glyphicon glyphicon-warning-sign"></span> Password is not Same.Please Enter same Password In Both Field.';
}

echo'</div></div>';
?>




