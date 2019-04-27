<?php include "header.php"; ?>


</br>
<div class="container">
<div class="jumbotron">
<h1><center>Forgot Password?</center></h1>
</br>

<?php
if(isset($_POST['frgtpswd'])){
$email=@$_POST['email'];

$from="This Email Is Sent From naiudan.com ,A Entertainment Website, To Recover The Password Of Account Of Lovegame.
If This Password Recovery Query Is Sent By You, Click on link given below
If This Is Not You Then Please Don't Click On This Link.In This Case This Link Is Third Person.
Go Back naiudan.com/lovegame/";

$query=$con->query("SELECT * FROM love_calc where email='$email'");
$count=$query->num_rows;
if($count>0){
 $proof=md5(rand());$proof1=md5(rand());
 $proof_id=rand(100000,999999);


$con->query("UPDATE love_calc set pswd_change_id='$proof_id' where email='$email'");
$comment="naiudan.com/lovegame/forget_pswd1.php?password_id_change=".$proof."&id_passwordcode=".$proof_id."&account_password=".$proof1;

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
<center><input type="submit" value="&nbsp;&nbsp;Submit&nbsp;&nbsp;" class="btn btn-success"   name="frgtpswd"/></center></br></br>
</form>';
}
?>

</div>
</div>

<?php include "footer.php"; ?>
