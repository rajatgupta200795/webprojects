<?php include ("./inc/header.php"); ?>

</br>
<div class="container">
<div class="jumbotron">
<h2><center>Forgot Password?</center></h2>
</br>

<?php
if(isset($_POST['frgtpswd'])){
$email=@$_POST['email'];

$from="This Email Is Sent From naiudan.com ,A multi purpose website , to recover password of Clicks And Visits Optimizer.
If this password recovery is sent byy you, click on link given below
If this is not you then please don't click on this link .
Go back naiudan.com";

$query=$con->query("SELECT * FROM click_counter where email='$email'");
$count=$query->num_rows;
if($count>0){
 $proof=md5(rand());$proof1=md5(rand());
 $proof_id=rand(1000,9999);


$con->query("UPDATE click_counter set pswd_change_id='$proof_id' where email='$email'");
$comment="naiudan.com/link_click_counter/forget_pswd1.php?password_id_change=".$proof."&id_passwordcode=".$proof_id."&account_password=".$proof1;

$mail=mail($email,"Change Your Password",$comment,$from);
if($mail)
echo'<p style="color:green; font-size:18px;">A Email Has Been Sent To You. Please Open Your Email Account And Click On Password Recovery Link.</p>';
else
echo "Your Email Is Incorrect";
}
else
echo '<p style="color:red; font-size:18px;">Email Is Incorrect.This Email Is Not Exist In Our Database.Please Enter a Correct Email Id .<a href="forget_pswd.php"> Try again .</a></p>

<p style="color:red; font-size:18px;">
<ul>
<li>Make sure that you have an account.</li>
<li>If you heve already registered here then make sure that you entered right email address.</li>
<li>If you are new here then Please <b>Sign up</b>.</li>
</ul>
</p>';
}
else{
echo'<form  class="navbar-form" action="forget_pswd.php" method="POST">
 <div class="form-group-sm">
<h4>Enter your registered email below and we\'ll send you a mail containing <b>password recovery link</b>.</h4></br></br>
<b>Enter Your Email :</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="form-control"  name="email" placeholder="Please Enter Your Email" size="30" required/></br></br>
<input type="submit" value="&nbsp;&nbsp;Submit&nbsp;&nbsp;" style="margin-left:150px;" class="btn btn-primary" name="frgtpswd"/></br></br>
</div>
</form>';
}
?>
</div>
</div>

