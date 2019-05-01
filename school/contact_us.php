<?php include"./inc/header.php"; 
//require_once ('../PHPMailer_5.2.4/class.phpmailer.php');
?>

</br>

<div class="container">

<center style="font-size:40px; font-family : agency fb; font-weight:bold;">Contact Us</center>

<hr style="height:2px;border:none;color:#333;background-color:#333;">

<?php


if(isset($_GET['send']))

echo'<div class="jumbotron"><h4><span style="color:green;" class="glyphicon glyphicon-ok"></span> ' . $wish. ' ('.strtoupper($_GET['name']).') We have successfully got your mail. Thank you for sending us your view and suggesion.</br>
Thank you for visiting here.</br></br> Have A Nice Day !
</h4></div>';


?>

</br></br>

<div class="row"><div class="col-sm-5">

<center style="font-size:30px; font-family : agency fb; font-weight:bold;"> Messege Us</center>

<hr style="height:1px;border:none;color:#333;background-color:#333;">

<p style="font-family:serif; "> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Welcome to Mahaveer Convent School, If you have any query or suggession Please feel below option and also reply to us how can we improve our service to make your child's future much better.</p>

<hr>

<form  class="navbar-form" method="POST" action="" enctype="multipart/form-data">
 <div class="form-group-sm">

<b>Your Name :</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" size="38" class="form-control" placeholder="Enter Your Name" name="name" required></br></br>

<b>Mobile Number :</b> <input type="text" class="form-control" size="38" placeholder="Enter Your Name (Optional)" name="mobile" ></br></br>

<b>Your Email :</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" class="form-control" size="38" placeholder="Enter Your Name (Optional)" name="email"></br></br>

<b>Messege : </b></br> <textarea class="form-control" rows="6" cols="60" placeholder="Enter Your Name" name="mssg" required></textarea></br></br>

<div class="row"><div class="col-sm-9"></div><div class="col-sm-2"><input type="submit" value="Send" class="btn btn-info" name="send"></div></div>


</div>
</form>

<hr style="height:1px;border:none;color:#333;background-color:#333;">


&nbsp;&nbsp;&nbsp;<a class="btn btn-social-icon btn-foursquare" style=" padding-left : 15px;  padding-top : 5px;  padding-bottom : 5px;  padding-right : 15px; background-color: #4A809E; color:white; font-size:25px;">
     <span class="fa fa-facebook"></span>  
</a> &nbsp;&nbsp;&nbsp;<b>Like our facebook page</b>



<a class="btn btn-social-icon btn-twitter" style="color:#007BB6; font-size:55px;">
<span class="fa fa-twitter"></span>
</a><b>Follow us on Twitter</b>

</br></br>


<hr style="height:1px;border:none;color:#333;background-color:#333;">


</br></br>




</div>
<div class="col-sm-1"></div>
<div class="col-sm-5">

<center style="font-size:30px; font-family : agency fb; font-weight:bold;"> Postal Address</center>

<hr style="height:1px;border:none;color:#333;background-color:#333;">

<address>
	<span class="glyphicon glyphicon-home"></span><b>Address : </br></b>
	Shri Ram Chauk , Kubersthan Road </br>
	Kathkuiyan Bazar</br>
	Kathkuiyan - 274303 </br>
	Uttar Pradesh , India
</address>

<hr>

<b><span class="glyphicon glyphicon-earphone"></span> Call : </b>+919628673350</br>
<b><span class="glyphicon glyphicon-send"></span> E-mail : </b><a href="https://www.gmail.com" style="color:green;">Akray1607@gmail.com</a>

<hr style="height:1px;border:none;color:#333;background-color:#333;">


<center style="font-size:20px; font-family : agency fb; font-weight:bold;">Find On Google Map</center><hr>

<iframe width="85%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src=
"http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=274303,kathkuiyan+market,uttarpradesh,india&amp;sspn=33.984984987,77.607422&amp;ie=UTF8&amp;hq=&amp;hnear=274303,kathkuiyan+market,uttarpradesh,india&amp;z=12&amp;output=embed"></iframe> 

<hr style="height:1px;border:none;color:#333;background-color:#333;">

</div>
</div>


<?php 

$send = @$_POST['send'];

if($send){
 
  $name = $_POST['name'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
  $mssg = $_POST['mssg'];

  $sub = 'MCSKKT.COM : '.$name.' Mailed You.';
  
 /* $mail = mail("guptarajat20071995@gmail.com" , $sub , $mssg);*/

/*

$mail = new PHPMailer();
$mail = new PHPMailer(true);

$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Port = 25;
$mail->Host = mcskkt.com; // SMTP server
$mail->Username = ankit@mcskkt.com; // SMTP account username
$mail->Password = singhankit123; // SMTP account password

$mail->From = ankit@mcskkt.com;
$mail->FromName = $name;
$mail->AddAddress(guptarajat20071995@gmail.com);// Receiving Mail ID, it can be either domain mail id (or ) any other mail id i.e., gmail id

$mail->Subject = $sub;
$mail->AltBody = ;
$mail->WordWrap = 80;

$body = test message;
$mail->MsgHTML($body);
$mail->IsHTML(true);

if(!$mail->send())
{
echo Mailer Error: . $mail->ErrorInfo;
}
else {


  header("location:contact_us.php?send=success&name=$name");
  exit();
}*/
}

?>

<hr style="height:2px;border:none;color:#333;background-color:#333;">

</div>


<?php include"./inc/footer.php";  ?>
