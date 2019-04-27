<?php  
 date_default_timezone_set("Asia/Calcutta");
 $date=date("h:i:sa / d-m-y");
  $con->query("UPDATE users set last_seen ='$date' where username ='$username'");
  $result=$con->query("SELECT * from users where username='$username'");
  $row=$result->fetch_assoc();
 $lastseen=$row['last_seen'];
 ?>
