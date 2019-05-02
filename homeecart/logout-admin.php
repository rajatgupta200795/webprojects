<?php

setcookie( "admin_login", $user_login , time()-1 );

header("Location:index.php");
?>