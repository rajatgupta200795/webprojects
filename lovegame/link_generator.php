<?php include "header.php"; ?>

<div class="container">
<div class="jumbotron">


<?php

$un = $_COOKIE['user_gm'];

$query="SELECT * FROM love_calc WHERE username='$un' LIMIT 1";
  $sql = $con->query($query);

  $userCount = $sql->num_rows;
      while($row=$sql->fetch_assoc()){
            $link_gen = $row['link_gen'];

}



echo'Your Link Is <a href="http://localhost/imsingle/lovegame/crush.php?love_calculator='.$link_gen.'">http://localhost/imsingle/lovegame/crush.php?love_calculator='.$link_gen.'</a></br>
Copy it and paste anywhere to make people fool.';



?>


</div>
</div>



<?php include "footer.php"; ?>