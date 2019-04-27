<?php
setcookie("user_gm" , $un , time()-1);

header("location:index.php");
exit();

?>
