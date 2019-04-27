<?php include ("headerbsy.inc.php");?>

<?php

echo'
<form action="email_to_user.php" method="POST">
Enter Subject : <input type="text" name="subject"/>
Enter Messege : <input type="text" name="msg_to_user"/>
<input type="submit" value="submit" name="submit"/>
</form>  
';

$subject=@$_POST['subject'];
$msg_to_user=@$_POST['msg_to_user'];
$submit=@$_POST['submit'];

if($submit){
$query=$con->query("SELECT * FROM users where first_name='rajat'");
while($row=$query->fetch_assoc()){
$email=$row['email'];
$fname=$row['first_name'];

$mssg="Hello $fname $msg_to_user";

$subject=$subject;

mail($email,$subject,$mssg,"http://www.myxid.com");
}
}

?>