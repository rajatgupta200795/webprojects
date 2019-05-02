<?php include"inc/header.php"; ?>

<?php

if(!isset($_GET['sign-up-id-1'])){
echo'
<div style="background-color: #f0f0f0; padding-bottom: 850px;">

<div style="height:400px; background-color: #df1414c9; text-align: center; color: white; font-size: 20px; font-family: sans-serif;">
</br>
<div style="font-size: 38px; font-family: \'Open Sans\', sans-serif;">Welcome To HomeEkart</div>
Be a part of India\'s best dropship model</br>
Access more than 150 products with zero investment.
</br></br>
<center>
<div style="padding-bottom:100px; width: 80%; background-color: white; color: grey; text-align: left; font-size: 21px; font-family: \'PT Sans Narrow\', sans-serif;">
</br></br>

<form class="navbar-form" action="new-dropshipper-register.php?sign-up-id-1" method="POST">
<div >
<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-6"><b>Personal Details </b><hr></div>
</div>


<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-2">
Name</br></br>
</div>
<div class="col-sm-6">
<input type="text" name="name" class="form-control" size="30" placeholder="Full Name" required></br></br>
</div>
</div>

<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-2">
Email Id</br></br>
</div>
<div class="col-sm-6">
<input type="text" name="email" class="form-control" size="30" placeholder="Email Id" required></br></br>
</div>
</div>

<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-2">
Mobile Number</br></br>
</div>
<div class="col-sm-6">
<input type="text" name="mobile" class="form-control" size="30" value="" placeholder="Mobile Number" required></br></br>
</div>
</div>
</br>

<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-6"><b>Select Plan </b><hr></div>
</div>

<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-2">
Plan Name</br></br>
</div>
<div class="col-sm-6">
<select class="form-control" name="plan">
';

$query=$con->query("SELECT * FROM plan WHERE  1=1");
if($query->num_rows>0){
while($row = $query->fetch_assoc()){
$plan_name = $row['plan_name'];
echo '<option>'.ucwords($plan_name).'</option>';
}
}
echo'
</select>
</br></br>
</div>
</div>
</br>

<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-6"><b>Address Details </b><hr></div>
</div>

<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-2">
Street Name</br></br>
</div>
<div class="col-sm-6">
<input type="text" name="street" class="form-control" size="30" placeholder="Street Name" required></br></br>
</div>
</div>

<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-2">
City</br></br>
</div>
<div class="col-sm-6">
<input type="text" name="city" class="form-control" size="30" placeholder="City" required></br></br>
</div>
</div>

<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-2">
State</br></br>
</div>
<div class="col-sm-6">
<input type="text" name="state" class="form-control" size="30" placeholder="State" required></br></br>
</div>
</div>


<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-2">
</div>
<div class="col-sm-6" style="font-size: 15px; font-family: arial;">
<input type="checkbox" id="terms_id" name=""  required> <label for="terms_id">I agree to <a href="" >Terms and Conditions</a> of Homeecart</label>
</br></br>
<input type="submit" class="btn btn-danger btn-lg" style="background-color: #df1414c9;" value="&nbsp;&nbsp; Submit &nbsp;&nbsp;" name="send">
</div>
</div>

</div>
</form>

</center>
</div>

</div>
';
}

else {
$email = @$_GET['email_id'];
echo '
</br>
<center>
<div style="font-size: 30px;"> Create New Password</div>
</br>
<div style="width: 27%; height: 400px; background-color: #f7f7f7; border-right: 2px solid lightgrey; border-bottom: 2px solid lightgrey; border-radius: 5px;">
<form class="navbar-form" method="POST" action="new-dropshipper-register.php?sign-up-id-1&email_id='.$email.'">
<div class="form-group-lg">
</br></br>
<span class="glyphicon glyphicon-user" style="font-size: 70px; color: grey;"></span></br></br>
<input type="password" class="form-control" size="23" name="pswd1" placeholder="Enter Password"></br></br>
<input type="password" class="form-control" size="23" name="pswd2" placeholder="Confirm Password"></br></br>
<input type="submit" name="send_pswd" value="Submit" class="btn btn-primary" style="font-size:17px; width: 85%; height: 50px;"></br></br>
</div>
</form>
</div>
</div>
</center>
</br></br></br></br>';

if(isset($_POST['send_pswd'])){
$pswd1 = $_POST['pswd1'];
$pswd2 = $_POST['pswd2'];
if($pswd1==$pswd2){ echo$email = @$_GET['email_id'];
$query1=$con->query("UPDATE member set password='$pswd1' where email='$email'");
$query=$con->query("SELECT add_date, add_time FROM member where email='$email'");
	$count=$query->num_rows;
  if($count>0){
  while($row = $query->fetch_assoc()){
  $date = $row['add_date'];
  $time = $row['add_time'];
  }
  setcookie("user_login", md5($email.' '.$time.' '.$date));
  }
if($query1 && $query)header("location:dropshipper-home.php?successful_sign_up_id"); else echo '<script>alert("Query not completed")</script>';
}
else echo '<script>alert("Password not matched! Try again")</script>';
}

}

$send = @$_POST['send'];

if(isset($_GET['sign-up-id-1']) && isset($_POST['send']))
{
$name = @$_POST['name'];
$email = @$_POST['email'];
$street = @$_POST['street'];
$mobile = @$_POST['mobile'];
$city = @$_POST['city'];

$plan_name = @$_POST['plan'];
$query=$con->query("SELECT * FROM plan WHERE plan_name='$plan_name'");
if($query->num_rows>0){while($row = $query->fetch_assoc()){
$plan_code = $row['plan_code'];
}}

$state = @$_POST['state'];
$username = md5($email.' '.date("h:i:s").' '.date("d-m-Y"));

$query=$con->query("SELECT * FROM member WHERE  email='$email'");
	$count=$query->num_rows;
  if($count>0){
  header("location:dropshipper-signin.php?email_id=$email");
}else{
  $add_date = date("d-m-Y");
  $add_time = date("h:i:s");
$query=$con->query("INSERT INTO member(name, email, password, mobile, street, city, state, username, plan_code, account_status, add_date, add_time) values ('$name', '$email', '', '$mobile', '$street', '$city', '$state', '$username', '$plan_code', '0', '$add_date', '$add_time')");
  header("location:new-dropshipper-register.php?sign-up-id-1&email_id=$email");
}

}


?>


<?php include"inc/footer.php"; ?>
