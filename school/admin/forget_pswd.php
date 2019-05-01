<?php include ("../inc/header.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

?> 


</br>
<div class="container">
<div class="jumbotron">
<h2><center>Forgot Password?</center></h2>
</br></br>

<?php

if(!isset($_GET['successful_email_sent'])){
echo'
<form action="" class="navbar-form" method="POST" style="border:5px solid #f0f0f0";>
 <div class="form-group-sm">

<div class="row">
<div class="col-sm-2"></div><div class="col-sm-2"><b>Enter Your Email :</b></div>
<div class="col-sm-8"><input type="text" class="form-control" name="email" placeholder="Please Enter Your Email" size="30" required/></br></br>
<input type="submit" value="&nbsp;&nbsp;Submit&nbsp;&nbsp;"  class="btn btn-primary" name="frgtpswd"/>
</div>
</div>
</div>
</form>';
}else if(isset($_GET['successful_email_sent']))
echo'<div style="font-size:22px; color:green;">An email has been sent to you. Please open your email inbox and click on password recovery link.</div>';



if(isset($_POST['frgtpswd'])){
$email=@$_POST['email'];

$query=$con->query("SELECT * FROM admin where email='$email'");
$count=$query->num_rows;
if($count>0){
 $proof=md5(rand());
 $proof1=md5(rand());
 $proof_id=rand(1000,9999);

$con->query("UPDATE admin set pswd_change_id='$proof_id' where email='$email'");
$link="http://mcskkt.com/admin/forget_pswd1.php?password_id_change=".$proof."&id_passwordcode=".$proof_id."&account_password=".$proof1;

$message="This email is sent from mcskkt.com for password recovery.
Click on link given below and create new password. 
</br></br>
".$link." ";
//$mail=mail($email,"mcskkt.com : Change Password Request",$comment,$from);

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'host7.dnsforindia.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'forget.password@mcskkt.com';                 // SMTP username
    $mail->Password = 'rajat.20071995';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('forget.password@mcskkt.com', 'mcskkt.com');
    $mail->addAddress($email, 'Ankit Singh');     // Add a recipient
    $mail->addAddress($email);               // Name is optional
    $mail->addReplyTo('noreply@example.com', 'Noreply');


    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Mcskkt.com : Forget Password Recovery';
    $mail->Body    = $message;
    $mail->AltBody = $message;

    if($mail->send())
    header("location:forget_pswd.php?successful_email_sent");
    
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;

}
}
else
echo '</br></br><div style="color:red; font-size:20px; ">Sorry! Email Is Incorrect. This email is not exist in our database. Please enter valid email.</div>';
}
?>

</div>
</div>

<?php include ("../inc/footer.php");?>
