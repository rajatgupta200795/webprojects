<?php  
 date_default_timezone_set("Asia/Calcutta");
 $date=date("h:i:sa / d-m-y");
  $con->query("UPDATE love_calc set last_seen ='$date' where username ='$un'");
 
 ?>
