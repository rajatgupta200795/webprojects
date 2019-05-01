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
<a href="forget_pswd.php">Forget Password ?</a></br></br>
<input type="submit" name="send" value=" &nbsp;&nbsp;&nbsp;Sign In&nbsp;&nbsp;&nbsp; " style="margin-left:-50px;" class="btn btn-info">




 </div>
 </form>



<?php

$send = @$_POST['send'];

if($send){

	$username = $_POST['username'];
    $password = $_POST['password'];

$query=$con->query("SELECT * FROM admin where password='$password' and email ='$username'");
$count=$query->num_rows;

    if($count>0){
        
        setcookie("user_login" , md5($username));
    	header("location:home.php");
    	exit();
    }
    else echo'</br></br><div style="font-size:20px; color:red; text-align:center;"><span class="glyphicon glyphicon-warning-sign"></span> Password is not Same. Please Enter same Password In Both Field.</div>
</br></br>';
}

echo'
</center>
</div>
</div>';


ob_end_flush();
include"../inc/footer.php";  ?>
