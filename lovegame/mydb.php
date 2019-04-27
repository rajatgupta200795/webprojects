<?php include "header.php"; ?>

<div class="container">

<div class="row" style="font-size: 20px;  color:purple; ">
<div class="col-sm-3"><div style="font-family:cursive; font-size:50px;"><a href="http://www.naiudan.com">naiudan.com</a></div>
</div>
<div class="col-sm-6">
	
<div class="hidden" id="link_generator">	
<div class="jumbotron">
<?php

$un = $_COOKIE['user_gm'];

$query="SELECT * FROM love_calc WHERE username='$un' LIMIT 1";
  $sql = $con->query($query);

  $userCount = $sql->num_rows;
      while($row=$sql->fetch_assoc()){
            $link_gen = $row['link_gen'];

}
echo'<a href="#" onclick="toggle_visibility(\'link_generator\')";><div style="font-size: 30px; position:absolute; right:35px;top:5px; font-family: monospace; color:red;">x</div></a>';
echo'Your Link Is :</br><a href="http://www.naiudan.com/lovegame/crush.php?love_calculator='.$link_gen.'">www.naiudan.com/lovegame/crush.php?love_calculator='.$link_gen.'</a></br></br>
Copy it and paste anywhere to make people fool.</br></br>
<button onclick="toggle_visibility(\'link_generator\')"; class="btn btn-default" style="font-size:20px; position:absolute; right:70px;" >ok</button></br>';

?>
</div>
</div>
</div>

</br></br>
<div class="col-sm-3" style="font-size: 30px; font-family:monospace; position: absolute; right: 0px; color:purple;"><a href="#" class="btn btn-success btn-lg" onclick="toggle_visibility('link_generator')";>MyLink</a> <a href="logout.php" class="btn btn-danger btn-lg" >Logout</a></div>
</div>
</br></br>
</br>


<div class="container">
<?php
echo '<center><span style="font-size: 50px; font-weight: bold; font-family: cursive; color:purple;"><u>List Of All Fools</u></span></center></br>
';


$un = $_COOKIE['user_gm'];

$query="SELECT * FROM calc_db WHERE username='$un' order by id Desc";
  $sql = $con->query($query);

  $userCount = $sql->num_rows;
  if($userCount>0){

  	echo' <div class="row" style="font-size: 30px; font-weight: bold; font-family: cursive; color: black;">
            <div class="col-sm-3"><u>Name</u></div>
            <div class="col-sm-3"><u>First Crush</u></div>
            <div class="col-sm-3"><u>Second Crush</u></div>
            <div class="col-sm-3"><u>Third Crush</u></div>
            </div><hr>';
      while($row=$sql->fetch_assoc()){
            $fool_name = $row['fool_name'];
            $lv_one = $row['lv_one'];
            $lv_two = $row['lv_two'];
            $lv_three = $row['lv_three'];

           $fool_name = strtoupper($row['fool_name']);
            $lv_one = strtoupper($row['lv_one']);
            $lv_two = strtoupper($row['lv_two']);
            $lv_three = strtoupper($row['lv_three']);

            echo' <div class="row" style="font-size: 25px; font-weight: bold; font-family: cursive; color:darkblue;">
            <div class="col-sm-3">'.$fool_name.'</div>
            <div class="col-sm-3">1. '.$lv_one.'</div>
            <div class="col-sm-3">2. '.$lv_two.'</div>
            <div class="col-sm-3">3. '.$lv_three.'</div>
            </div><hr>';
  }
  }else 
  echo'<div style="font-size: 80px; font-family: cursive; color: black;">You still made no fool</div>
<div style="font-size: 30px; font-weight: bold; font-family: cursive; color: black;">get your link <a href="#" onclick="toggle_visibility(\'link_generator\')";>here</a> and paste it anywhere in a attractive way.
    </div>
  ';




?>

</div>
</div>
<?php include "footer.php"; ?>