<?php include "header.php"; 

 ob_start(); 

if(isset($_COOKIE["user_gm"])){
header("location:mydb.php");
exit();
}
?>


<div class="container">

<div style="font-family:Helvetica,Arial,sans-serif; font-size:50px;"><a href="../">DevOps Rider</a></div>


<center><span style="font-size: 50px; font-family: Helvetica,Arial,sans-serif; color: ; " >Welcome To Love Game</span></center></br>

<?php

if(!isMobileDevice()){

echo'<center>
';

}


else{
echo'';
}
?>
<div style=" background-color: rgba(243, 225, 221, 0.72); width:100%; padding:20px;">
<span style="font-size: 25px; font-weight:; font-family: Helvetica,Arial,sans-serif; color: #7d1bc5;">
&nbsp;&nbsp; &nbsp;&nbsp; By signing up here(if you are new) generate a link and paste it anywhere like facebook wall / sms / whatsup etc.</br>
&nbsp;&nbsp; &nbsp;&nbsp; People who will click on this link will redirect to a page where they will be asked to fill his/her name and his/her crush's name and their filled entry will be sent to your email and you can see all fools on you database by signing in below.</br>
Pretty cool ! hmmm ???? Come On Let's Play</br> 
</span>
</div>

</div>


</br>

<?php
/*
if(!isMobileDevice())
echo'<center><iframe width="500" height="300" src="https://www.youtube.com/embed/KRpRfVIjJpU" frameborder="10" allowfullscreen></iframe></center>';

else
echo'<center><iframe width="370" height="250" src="" frameborder="10" allowfullscreen></iframe></center>';
*/
?>

</br>
<div class="container">



<div class="container">



<div class="row">


<div class="col-sm-2"></div>
<div class="col-sm-5 ">


<div style="font-family: Helvetica,Arial,sans-serif; Color:; font-size:30px;">Sign up Here !</div></br>

 <form action="index.php" class="navbar-form navbar-left" method="POST" >
 <div class="form-group-sm">
  <input type="text" name="name" size="30" class="form-control" placeholder="Enter Your Full Name" required></br></br>
  <input type="text" name="email" size="30" class="form-control" placeholder="Enter Your Email" required></br></br>
  <input type="password" name="pswd" size="30" class="form-control" placeholder="Enter Any Password" required>


</br></br>



    <input class="btn btn-success" type="submit" name="reg" value="Sign up !"></br></br>
</div>
</form>

</div>


<div class="col-sm-3 ">



<div style="font-family:  Helvetica,Arial,sans-serif; Color:; font-size:30px;">Sign in Here !</div></br>

 <form action="index.php" class="navbar-form navbar-left" method="POST" >
 <div class="form-group-sm">
                    <input type="text" name="user_gm" class="form-control" size="30" placeholder="Enter Your Email Address" required/></br></br>
                    <input type="password" name="password_login" class="form-control" size="30" placeholder="Enter Password (0-9,a-z,A-Z)" required/></br></br>

                    <a href="forget_pswd.php" style="color: black; font-size:15px; font-weight:bold; ">Forgot Password ?</a>




</br>
                    <input type="submit" class="btn btn-success" name="login" value=" Sign in !">
 </div>
                 </form>

</div>


</div></div></div>




<?php

$reg = @$_POST['reg'];
if($reg){

$pswd = $_POST['pswd'];

$sign_up_date = date("d/m/Y");

$name = $_POST['name'];
$email = @$_POST['email'];

$name = strtolower($name);

$un = md5($email);
$a = $name[0]."".$name[1];
$link_gen = $a."".rand(100000,999999);

$query="SELECT * FROM love_calc WHERE email='$email'";
  $sql = $con->query($query);

  $userCount = $sql->num_rows;
    if ($userCount >0) {

echo"<script>alert('Sorry ! This Email Is Already Exist In Our Database. please Sign Up With another Email Address.');</script>";

}
else{
$query = $con->query("INSERT INTO love_calc (name,username,email,password,link_gen,sign_up_date) VALUES('$name','$un','$email','$pswd','$link_gen' , '$sign_up_date') ");


include "lastseen.php";

setcookie( "user_gm", $un );
header("location:mydb.php");
exit();
}


}
?>







            

<?php
$login = @$_POST['login'];
$w_height = '<script type="text/javascript">document.write(window.innerWidth);</script>';
$w_width = '<script type="text/javascript">document.write(window.innerWidth);</script>';
$w_width=$w_width/2;
$w_height=$w_height/2;

if($login){

if (isset($_POST["user_gm"]) && isset($_POST["password_login"])) {
$user_gm =@$_POST["user_gm"];

  $password_login =$_POST["password_login"];

  $query="SELECT * FROM love_calc WHERE email='$user_gm' AND password='$password_login' LIMIT 1";
  $sql = $con->query($query);

  $userCount = $sql->num_rows;
    if ($userCount >0) {
      while($row=$sql->fetch_assoc()){
            $un = $row['username'];
}

include "lastseen.php";

    setcookie( "user_gm", $un );
 
    header("location:mydb.php");
    exit();
}



 else{
 	echo '<div class="row"><div class="col-sm-2"></div><div class="col-sm-5">
<div class="container" id="link_generator" >	
<div class="jumbotron" style="position:fixed; top:0px;">
<a href="#" onclick="toggle_visibility(\'link_generator\')";><div style="font-size: 30px; position:absolute; right:35px;top:5px; font-family: monospace; color:red;">x</div></a>';
echo'Sorry! You Entered Wrong Email Address Or Password.Please Try Valid Email Address And Password</br></br>
<button onclick="toggle_visibility(\'link_generator\')"; class="btn btn-default" style="font-size:20px; position:absolute; right:70px;" >ok</button></br>
</div>
</div></div>
</div>

';

  }
}
 }

?>

<!-- <div style="height:150px; background-color: #4e4646; width:100%; "></div> -->



