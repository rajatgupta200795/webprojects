<?php include"inc/header.php"; ?>

</br>

<center>
	
<div style="font-size: 30px;"> Sign In As Admin </div>

<?php

if(isset($_GET['email_id'])){
$email = $_GET['email_id'];
echo '<div style="color:red; font-size:20px;">Your email <b>'.$email.'</b> address is already registered with us. Please sign in...</div>';
}
else $email='';

?>

</br>

<div style="width: 27%; padding-bottom: 50px; background-color: #f7f7f7; border: 2px solid #f1f1f1; border-right: 3px solid lightgrey; border-bottom: 3px solid lightgrey; border-radius: 5px;">
<form class="navbar-form" action="admin-signin.php" method="POST">
<div class="form-group-lg">
</br></br>
<span class="glyphicon glyphicon-user" style="font-size: 70px; color: grey;"></span></br></br>
<input type="text" class="form-control" size="23" value="<?php echo$email; ?>" name="email" placeholder="Email or username"></br></br>
<input type="password" class="form-control" size="23" name="pswd" placeholder="Password"></br></br>
<!--<input type="checkbox" id="remember_id" name=""> <label for="remember_id">Remember me</label></br></br>-->
<input type="submit" class="btn btn-primary" value="Sign In" name="send" style="width: 85%; height: 50px;"></br></br>
<a href="">Forget Password ?</a>
</div>
</form>

</div>

</br>


</center>

<?php

$send = @$_POST['send'];

if($send){
$email = @$_POST['email'];
$pswd = @$_POST['pswd'];

  if($email=='admin@gmail.com' && $pswd == '111111'){
  	setcookie("admin_login", md5($email));
  header("location:admin-home.php?login_successfully");
}else{
echo '<script>alert("You entered wrong email or password.");</script>';
}
}

?>


<?php include"inc/footer.php"; ?>
