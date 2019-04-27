<?php include ("./inc/connect.inc.php");?>

<?php

setcookie( "user_login", $user_login , time()-1 );

header("Location:../index.php");
?>