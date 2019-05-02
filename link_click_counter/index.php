<?php include"../link_click_counter/inc/header.php"; 
ob_start(); 


if(isset($_COOKIE['user_in']))
header("location:home.php");

?>

<div style="height:106px;  background-color:#448aff; border-bottom:3px solid lightgrey;"></div>
</br>
<center style="font-family:;"><h1>Welcome To Web Analyser</h1>
<p style="color: #e02113; font-size:17px; line-height:30px;">Count Link Click , Get Visiter's Country Name, IP & Unique And Total Views Of Web Page.</br>It's Simple And Free.</p></center>
<div style="height:20px;"></div>
<div class="row" style=" padding:60px; color:grey;border:1px solid lightgrey; background-color: #488273; font-size:20px;">
<div class="col-sm-1"></div>
<div class="col-sm-2" style="padding-top:40px; border:1px solid lightgrey; padding-bottom:60px; background-color: white;  color:grey; border-radius:7px;">Create An Account If You Are New Here Otherwise Sign in To Your Account.</div>
<div class="col-sm-1"></div>
<div class="col-sm-2" style="padding-top:40px; border:1px solid lightgrey; padding-bottom:30px; background-color: white;  color:grey; border-radius:7px;">Register The Link Which Is To Be Optimized And Generate A New Corresponding Link.</div>
<div class="col-sm-1"></div>
<div class="col-sm-2" style="padding-top:40px; border:1px solid lightgrey; padding-bottom:90px; background-color: white;  color:grey; border-radius:7px;">Paste This Link Anywhere And Analyse Your Link And Web Page.</div>
<div class="col-sm-1"></div>
<div class="col-sm-2" style="padding-top:40px; border:1px solid lightgrey; padding-bottom:60px; background-color: white;  color:grey; border-radius:7px;">Optimze Link Status And Get Visiter's Details In Your Account's Database.</div>
</div>
</div>
<div style="height:150px;"></div>
<div id="signup" style="font-family: 'Roboto Slab',palatino,serif;color: white; font-size:20px; padding-top:60px;padding-bottom:80px; background-color: #ff5252;">

<div style="font-family: 'Roboto Slab',palatino,serif;
    font-size: 78px;
    font-weight: 300;
    letter-spacing: -.2px;
    line-height: 38px; text-align:center;">Let's Start</div></br></br>

<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-3" style="padding-top:10px; padding-bottom:35px; background-color: white;  color:grey; border-radius:7px;">
<h2 style="margin-left:2%; font-weight:;">Sign In Below</h2></br>
 <form  class="navbar-form" method="POST" action="" enctype="multipart/form-data">
 <div class="form-group-sm">
E-mail : &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="form-control" name="email" placeholder="Enter Your Email" required></br></br>
Password : <input type="password" class="form-control" name="pswd" placeholder="Enter Password" required></br></br>
<a href="forget_pswd.php" style="font-size:20px; margin-left:100px;">Forget Password ?</a></br></br>
<input type="submit" value="Sign in!" class="btn btn-primary btn-lg" name="signin" style="margin-left:100px; margin-top:10px;">
</div>
</form>
</div>
<div class="col-sm-1"></div>
<div class="col-sm-3" style="padding-top:10px; padding-bottom:35px; background-color: white; color:grey; border-radius:7px;">
<h2 style="margin-left:2%; font-weight:;">Sign Up Below</h2></br>
<form  class="navbar-form" method="POST" action="" enctype="multipart/form-data">
<div class="form-group-sm">
Full Name : <input type="text" size="19" class="form-control" name="fname" placeholder="Enter Your Full Name" required> </br></br>
E-mail : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="id_email" class="form-control" name="email" oninput="email_check()" onchange="email_check()"  placeholder="Enter Your Email" required></br>
<p id="email_error">&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;</p>
Password : &nbsp;<input type="password" class="form-control" name="password" placeholder="New Password (A-Z,a-z,0-9)" required></br></br>
<input type="submit" value="Sign up ! " class="btn btn-primary btn-lg" name="signup"  style="margin-left:100px;">
</div>
</form>
<div>
</div>


<?php

$signup = @$_POST['signup'];

if($signup){

$fname = $_POST['fname'];
$email = $_POST['email'];
$password = $_POST['password'];
$username = md5($email);

$query = $con->query("INSERT into click_counter (fname , email , password , username) values ('$fname' , '$email' , '$password' , '$username') ");


$query1 = $con->query("CREATE TABLE $username (id INT(11) AUTO_INCREMENT, link_name Varchar(100) , link_address VARCHAR(300) , date_added VARCHAR(50) , ip_address VARCHAR(50) , country VARCHAR(50) , continent VARCHAR (50) , state  VARCHAR (50), type Varchar(100) , stayTime Varchar(100) , PRIMARY KEY (id) ) ") ;

setcookie("user_in" , md5($email));



header("location:home.php");

}




$signin = @$_POST['signin'];

if($signin){

$email = $_POST['email'];
$password = $_POST['pswd'];

$query = $con->query("SELECT * from click_counter where email='$email' and password='$password'");
if($query->num_rows==1){
	setcookie("user_in" , md5($email));
header("location:home.php");
exit();
}
else echo'<script>alert("You Entered Wrong Email or Password , Try Again.");</script>';

}

?>


</div>

<div style="height:80px;"></div>

</div>

</div>

<div class="col-sm-1" style="position:fixed; left:1080px;">


</div>

</div>


<div style="height:0px;"></div>

<div style="height:30px; bottom:0px; position:fixed; text-align:center; width:100%; background-color:#444; border-bottom:1px solid darkgrey; border-top:1px solid lightgrey;">

<div class="row">
<div class="col-sm-2"><p id="wish"></p></div>
<div class="col-sm-1"></div>
<div class="col-sm-8"><p id="sitead"></p></div>
</div>

<script>

	document.getElementById("email_error").innerHTML = '</br>';

function email_check() {

	var name = document.getElementById("id_email");

	if((name.value.substring(0,1)!='@' && name.value.substring(name.value.length-4,name.value.length)=='.com') || name.value=='')
	document.getElementById("email_error").innerHTML = '</br>';
 else {
	document.getElementById("email_error").innerHTML = '<div style="color:red; margin-top:5px; font-size:18px;">Please ! Enter a valid Email</div>';
 }
}


var wishLine = "<?php echo$wish;  ?>";
timedmsg1();

function timedmsg1(){
var t1 = setTimeout("timedmsg2()" , 4000);
document.getElementById("sitead").innerHTML = '<div style="color:white; text-align:center; margin-top:5px;">For any query or inquiry call us +917081717420 or mail us at rajatgupta200795@gmail.com.</div>';
}

function timedmsg2(){
var t2 = setTimeout("timedmsg3()" , 3000);
document.getElementById("sitead").innerHTML = '<div style="color:white; text-align:center; margin-top:5px;">Get your own website today. Call +917081717420</div>';
}

function timedmsg3(){
var t3 = setTimeout("timedmsg1()" , 10000);
document.getElementById("sitead").innerHTML = '<marquee SCROLLAMOUNT=10><div style="color:white; text-align:center; margin-top:5px;">If you have any issues related to our website, contact us now . Call us at +917081717420. Thank you for visiting our site.</div></marquee>';
}

timedwish1();
function timedwish1(){
var t3 = setTimeout("timedwish2()" , 500);
document.getElementById("wish").innerHTML = '<div style="color:white; text-align:center; margin-top:5px;"> ' + wishLine + ' Visiter !</div>';
}
function timedwish2(){
var t4 = setTimeout("timedwish1()" , 500);
document.getElementById("wish").innerHTML = '<div style="color:white; text-align:center; margin-top:5px;"></div>';
}

</script>

</div>




</body>
</html>



<?php ob_end_flush(); 

?>








