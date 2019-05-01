<?php include"./inc/header.php";  ?>




<div class="container">

</br>
<div style="text-align:center; font-size:50px; font-family:agency fb; text-weight:bold; color:#412C71;">Faculty Members</div>
<hr style="height:2px;border:none;color:#333;background-color:#333;">


<div class="row" >
<div class="col-sm-12"> 
<div " style="padding-top:10px; padding-bottom:70px; font-family:Agency FB; background-color:#8064BF; color: white; font-size:40px; text-align:center; border-radius:10px;"><b>Director</b></br></br>

<div class="container">

<div class="row" >
<div class="col-sm-1"></div><div class="col-sm-4"> 

<?php 

$query=$con->query("SELECT * from teacher_entry where teacher_type='1' ");

if($query->num_rows>0){
while($row=$query->fetch_assoc()) {
echo'<img height="200" width="100%"  src="'.$row['teacher_photo'].'"> ';
}
}
else echo "<div style='  margin-top:100px; height:65px;'>Sorry! Not Data Found ..ERROR</div>";
?>

</div>

<div class="col-sm-7" style="text-align:left; font-size:30px;"> Mr. ANKIT SINGH</br>

<b>Phone</b> : +919628673350 </br>
<b>E-Mail</b> : Akray1607@gmail.com
</div></div>

</div>

</div>
</div>
</div>



<div style="height:20px;"></div>

<hr style="height:1px;border:none;color:#333;background-color:#333;">


<div " style=" font-family:Agency FB; color: #412C71;; font-size:40px; text-align:center; border-radius:10px;">Teachers</div>

<hr style="height:2px;border:none;color:#333;background-color:#333;">
</br>

<?php 

$query=$con->query("SELECT * from teacher_entry where teacher_type='3' ");

if($query->num_rows>0){
$i=0;

while($row=$query->fetch_assoc()) {

if($i%3==0)echo'<div class="row" style="font-family:Agency FB; font-size:20px; color:#412C71; ">';

echo'<div class="col-sm-3"><img height="200" width="200"  src="'.$row['teacher_photo'].'"></br></br>'.strtoupper($row['teacher_name']).'</br><b>Subject : </b>'.strtoupper($row['subject']).'<hr style="height:1px;border:none;color:#333;background-color:#333;"></div><div class="col-sm-1"></div>';

$i++;

if($i%3==0 && $i!=0) echo"</div></br></br>";
}
}
else echo "<div style='  margin-top:100px; height:65px;'>Sorry! Not Data Found ..ERROR</div>";
?>



</div>
  <?php include"./inc/footer.php";  ?>