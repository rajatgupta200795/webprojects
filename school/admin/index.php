<?php include"../inc/header.php";  

ob_start();


if(isset($_COOKIE['user_login']))
header("location:../admin/home.php");

?>



</br></br></br>
<div class="container-fluid">

<div class="jumbotron">


<center>
    <form  class="navbar-form" method="POST" action="">
 <div class="form-group-sm">

<b>Username</b> : <input type="text" size="30" name="username" class="form-control" placeholder="Enter Username" required></br></br>
<b>Password</b> : <input type="password" size="30" name="password" class="form-control" placeholder="Enter Password" required></br></br>
<input type="submit" name="send" value=" &nbsp;&nbsp;&nbsp;Sign In&nbsp;&nbsp;&nbsp; " style="margin-left:-50px;" class="btn btn-info">




 </div>
 </form>




</center>

</div>
</div>

<?php

$send = @$_POST['send'];

if($send){

	$username = $_POST['username'];
    $password = $_POST['password'];

    if($username="gorakhpur" && $password=="ashi16"){
        
        setcookie("user_login" , md5($username));
    	header("location:home.php");
    	exit();
    }
}


ob_end_flush();

?>

<?php include"../inc/footer.php";  ?>
