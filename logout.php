<?php include ("./inc/connect.inc.php");?>

<?php
$username=$_COOKIE['userlogin'];
$con->query("DELETE FROM `searchoutput` WHERE  username='$username'");
setcookie( "passwordcode", $user_login , time()-1 );
setcookie( "userlogin", $user_login , time()-1 );

header("Location:index.php");
?>