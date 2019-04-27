<?php include ("./inc/header.inc.php");
?> 


</br>
<div class="container">
<div class="jumbotron">
<h1><center>Forgot Password?</center></h1>
</br>

<?php
if(isset($_POST['frgtpswd'])){
$email=@$_POST['email'];

$from="This Email Is Sent From myxid.com ,A Social Networking Site, To Recover The Password Of Account At myxid.com.
If This Password Recovery Query Is Sent By You, Click on link given below
If This Is Not You Then Please Don't Click On This Link.In This Case This Link Is Third Person.
Go Back myxid.com";

$query=$con->query("SELECT * FROM users where email='$email'");
$count=$query->num_rows;
if($count>0){
 $proof=md5(rand());$proof1=md5(rand());
 $proof_id=rand(1000,9999);


$con->query("UPDATE users set pswd_change_id='$proof_id' where email='$email'");
$comment="myxid.com/forget_pswd1.php?password_id_change=".$proof."&id_passwordcode=".$proof_id."&account_password=".$proof1;

$mail=mail($email,"Change Your Password",$comment,$from);
if($mail)
echo"A Email Has Been Sent To You. Please Open Your Email Account And Click On Password Recovery Link.";
else
echo "Your Email Is Incorrect";
}
else
echo "Email Is Incorrect.This Email Is Not Exist In Our Database.Please Enter a Correct Email-Id...";
}
else{
echo'<form action="forget_pswd.php" method="POST">
Enter Your Email : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email" placeholder="Please Enter Your Email" size="30" required/></br></br>
<center><input type="submit" value="&nbsp;&nbsp;Submit&nbsp;&nbsp;"   name="frgtpswd"/></center></br></br>
</form>';
}
?>

</div>
</div>

<?php include ("./inc/footer.inc.php");?>
