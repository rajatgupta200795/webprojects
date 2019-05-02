<?php  include "./inc/header.php"; 
if(!isset($_COOKIE['user_login']) && basename($_SERVER['PHP_SELF']) != 'index.php') 
header("location:index.php");
ob_start();


if(!isset($_COOKIE['user_login']))
header("location:dropshipper-signin.php");


$query=$con->query("SELECT * from member where username='$username'"); 
while ($row=$query->fetch_assoc()) {
$email=$row['email'];
$name=ucwords($row['name']);
$mobile=ucwords($row['mobile']);
$street=ucwords($row['street']);
$city=ucwords($row['city']);
$state=ucwords($row['state']);
}


if(isset($_GET['profile_update'])){
echo'<script>alert("Your Profile hass been successfully updated.");</script>';
}

echo'
<div style="background-color: #f0f0f0; height: 900px;">

<div style="height:447px; background-color: #064b81ed; border-radius:5px; text-align: center; color: white; font-size: 20px; font-family: sans-serif;">
</br>
<div style="font-size: 38px; font-family: \'Open Sans\', sans-serif;">Edit Profile Info</div>
</br>
<center>
<div style="height:700px; width: 84%; background-color: white; border-radius:5px; font-weight:bold; color: grey; text-align: left; font-size: 21px; font-family: \'PT Sans Narrow\', sans-serif;">
</br></br>

<form class="navbar-form" method="POST">
<div class="form-group-lg">
<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-2">
Email Id</br></br>
</div>
<div class="col-sm-6">
<input type="text" name="email" class="form-control" size="30" value="'.$email.'" disabled></br></br>
</div>
</div>

<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-2">
Mobile Number</br></br>
</div>
<div class="col-sm-6">
<input type="text" name="mobile" class="form-control" size="30" value="'.$mobile.'" placeholder="Mobile Number" required></br></br>
</div>
</div>

<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-2">
Name</br></br>
</div>
<div class="col-sm-6">
<input type="text" name="name" class="form-control" value="'.$name.'" size="30" placeholder="Full Name" required></br></br>
</div>
</div>

<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-2">
Street Name</br></br>
</div>
<div class="col-sm-6">
<input type="text" name="street" class="form-control" value="'.$street.'" size="30" placeholder="Street Name" required></br></br>
</div>
</div>

<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-2">
City</br></br>
</div>
<div class="col-sm-6">
<input type="text" name="city" class="form-control" size="30" value="'.$city.'" placeholder="City" required></br></br>
</div>
</div>

<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-2">
State</br></br>
</div>
<div class="col-sm-6">
<input type="text" name="state" class="form-control" size="30" value="'.$state.'" placeholder="State" required></br></br>
</div>
</div>


<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-2">
</div>
<div class="col-sm-6" style="font-size: 15px; font-family: arial;">
</br>
<input type="submit" class="btn btn-primary btn-lg" value="&nbsp;&nbsp; Update &nbsp;&nbsp;" name="send">
</div>
</div>

</div>
</form>

</center>
</div>

</div>
';



$send = @$_POST['send'];

if($send)
{
$name = @$_POST['name'];
$street = @$_POST['street'];
$mobile = @$_POST['mobile'];
$city = @$_POST['city'];
$state = @$_POST['state'];

$query=$con->query("UPDATE member set name = '$name', mobile='$mobile', street='$street', city='$city', state='$state' where username='$username'");
if($query)
header("location:dropshipper-profile.php?profile_update=successful");


}


ob_end_flush();
?>

<?php  include "./inc/footer.php"; ?>
