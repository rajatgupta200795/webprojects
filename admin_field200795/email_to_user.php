<?php include ("headerbsy.inc.php");?>

<?php


echo'<ol>';

$query=$con->query("SELECT  DISTINCT email FROM love_calc where 1=1");
while($row=$query->fetch_assoc()){
$email=$row['email'];
$fname=$row['name'];

$mssg="Hello friend ! 
           Did you hear about a website which gives money only on one click on a link.
       Start now , you may win and earn upto 1000000/- by clicking on a link only for one time. Click here to visit site goo.gl/Hf4H1j .";


$subject="Click On A Link And Earn Upto 1000000/-";

$mail=mail($email,$subject,$mssg,"http://www.myxid.com");

if($mail)
echo'<li>Sent</li>';
}
echo'</ol>';


?>