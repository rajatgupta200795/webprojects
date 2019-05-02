<?php  include "./inc/header.php"; 
ob_start();

if(!isset($_GET['sign-up-id-1'])){
echo'
<div style="background-color: #f0f0f0; height: 1000px;">

<div style="height:450px; background-color: #df1414c9; text-align: center; color: white; font-size: 20px; font-family: sans-serif;">
</br>
<div style="font-size: 38px; font-family: \'Open Sans\', sans-serif;">Welcome To BharatBazar</div>
Join Millions Trading On India\'s Largest E-Commerce Platform!
</br>
One account to buy and sell online products and services 
</br></br>
<center>
<div style="height:700px; width: 80%; background-color: white; color: grey; text-align: left; font-size: 21px; font-family: \'PT Sans Narrow\', sans-serif;">
</br></br>

<form class="navbar-form" action="sign-up.php?sign-up-id-1" method="POST">
<div class="form-group-lg">
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

<style type="text/css">
          #locationList ul{  
                background-color:#fff;  
                width : 240px;
                position: absolute;
                border-right:1px solid #f0f0f0;
                border-radius: 5px;
                border-bottom:3px solid green;
                border-left:1px solid grey;
                line-height: 25px;
                font-size: 14px;
                z-index: 1;
                padding-bottom: 10px;
                padding-top: 5px;
                max-height:310px;
                overflow-y: scroll;
                cursor: pointer;
           }  
           #locationList a:hover{
           	background-color: green;
           	width: 90%;
           	height: 20px;
           	color: grey;
           }
           li{  
                padding-left:10px; 
           }  
</style>

<input type="text" name="location" id="location" class="form-control" size="30" placeholder="City" required>
<span id="locationList"></span>  
</div>
</div>
';
?>
</br></br>

<script>  
$(document).ready(function(){  
$('#location').bind('input', function(){
           var query = $(this).val();  
           if(query != '')  
           {  
                $.ajax({  
                     url:"./inc/signup-city_state_query.php",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#locationList').fadeIn(1);  
                          $('#locationList').html(data);  
                     }  
                });  
           }else{  
                $.ajax({  
                     url:"./inc/city_state_query.php",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#locationList').fadeIn();  
                          $('#locationList').html(data);  
                     }  
                });  
           }  
      });  

      $(document).on('click', 'li', function(){  
           $('#location').val($(this).text().split(', ')[0]);  
           $('#state').val($(this).text().split(', ')[1]);  
           $('#locationList').fadeOut();  
           $('#product').val('');  
      });  

      /*$(document).focusout(function(){  
           $('#productList').fadeOut(1);  
      });*/
 });  
 </script>  

<?php
echo'
<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-2">
State</br></br>
</div>
<div class="col-sm-6">
<input type="text" name="state" id="state" class="form-control" size="30" placeholder="State" required></br></br>
</div>
</div>


<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-2">
</div>
<div class="col-sm-6" style="font-size: 15px; font-family: arial;">
<input type="checkbox" name="" id="term_id" required> <label for="term_id">I agree to <a href="" style="color: red;">Terms and Conditions</a> of BharatBazar</label>
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
<form class="navbar-form" method="POST" action="sign-up.php?sign-up-id-1&email_id='.$email.'">
<div class="form-group-lg">
</br></br>
<span class="glyphicon glyphicon-user" style="font-size: 70px; color: grey;"></span></br></br>
<input type="password" class="form-control" size="23" name="pswd1" placeholder="Enter Password"></br></br>
<input type="password" class="form-control" size="23" name="pswd2" placeholder="Confirm Password"></br></br>
<input type="submit" name="send_pswd" value="Sign In" class="btn btn-primary" style="font-size:17px; width: 85%; height: 50px;"></br></br>
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
$query=$con->query("UPDATE users set password='$pswd1' where email='$email'");
setcookie("user_login", md5($email));
if($query)header("location:index.php?successful_sign_up_id"); else echo '<script>alert("Query not completed")</script>';
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
$state = @$_POST['state'];
$username = md5($email);

$query=$con->query("SELECT * FROM users WHERE  email='$email'");
	$count=$query->num_rows;
  if($count>0){
  header("location:Sign-in.php?email_id=$email");
}else{
$query=$con->query("INSERT INTO users(name, email, password, mobile, street, city, state, username) values ('$name', '$email', '', '$mobile', '$street', '$city', '$state', '$username')");
  header("location:Sign-up.php?sign-up-id-1&email_id=$email");
}

}

?>

<?php 
ob_end_flush();
include "./inc/footer.php"; ?>
