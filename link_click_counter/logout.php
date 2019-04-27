<?php  include "inc/connect.php";
setcookie("user_in" , md5($email) , time()-1 );
header("location:index.php");
?>
