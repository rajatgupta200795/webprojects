<?php include"../inc/header.php";  

echo"</br></br>";

 include"./inc/admin_header.php"; 

if(!isset($_COOKIE['user_login']))
header("location:../");


?>

<div class="container">

<center><h1>Welcome To Admin Area</h1></center>

<hr style="height:2px;border:none;color:#333;background-color:#333;">


<a href="new_student.php"><span class="glyphicon glyphicon-plus"></span> Add New Student's Profile</a></br></br>

<button class="btn btn-success">CLASSES</button>  <a href='student_by_class.php?class=PLAYWAY' class='btn btn-default btn-xs'> PW </a> <a href='student_by_class.php?class=L.K.G.' class='btn btn-default btn-xs'>L</a> <a href='student_by_class.php?class=U.K.G.' class='btn btn-default btn-xs'>U</a>

<?php for($i=1;$i<=12;$i++){
echo "<a href='student_by_class.php?class=".$i."' class='btn btn-default btn-xs'>".$i."</a> ";
}?>


<hr style="height:2px;border:none;color:#333;background-color:#333;">


<?php

$j=0;
$query=$con->query("SELECT * from student_entry where present_class='PLAYWAY' ");
if($query->num_rows>0){
while($row=$query->fetch_assoc()){
	$j++;
}
}else $j=0; 
echo"1. <div class='row'><div class='col-sm-1'></div><div class='col-sm-3'><a href='student_by_class.php?class=PLAYWAY' class='btn btn-default'>Update Data Of Class PLAYWAY</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='col-sm-4'><b>Total Student Strength : </b>".$j."</div><div class='col-sm-3'><a href='student_attendance.php?class=PLAYWAY' class='btn btn-primary'>Attendance</a></div></div>
<hr style='height:1px;border:none;color:#333;background-color:#333;'>
";
$j=0;
$query=$con->query("SELECT * from student_entry where present_class='L.KG.'");
if($query->num_rows>0){
while($row=$query->fetch_assoc()){
	$j++;
}}else $j=0;
echo"2. <div class='row'><div class='col-sm-1'></div><div class='col-sm-3'>  <a href='student_by_class.php?class=L.K.G.' class='btn btn-default'>Update Data Of Class L.K.G.</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='col-sm-4'><b>Total Student Strength : </b>".$j."</div><div class='col-sm-3'><a href='student_attendance.php?class=L.K.G.' class='btn btn-primary'>Attendance</a></div></div>
<hr style='height:1px;border:none;color:#333;background-color:#333;'>
";

$j=0;
$query=$con->query("SELECT * from student_entry where present_class='U.K.G.' ");
if($query->num_rows>0){
while($row=$query->fetch_assoc()){
	$j++;
}}else $j=0;
echo"3. <div class='row'><div class='col-sm-1'></div><div class='col-sm-3'>  <a href='student_by_class.php?class=U.K.G.' class='btn btn-default'>Update Data Of Class U.K.G.</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='col-sm-4'><b>Total Student Strength : </b>".$j."</div><div class='col-sm-3'><a href='student_attendance.php?class=U.K.G.' class='btn btn-primary'>Attendance</a></div></div>
<hr style='height:1px;border:none;color:#333;background-color:#333;'>
";

for($i=1;$i<=12;$i++){
    
    $j=0;
$query=$con->query("SELECT * from student_entry where present_class='$i' order by first_name");
if($query->num_rows>0){
while($row=$query->fetch_assoc()){
	$j++;
}}else $j=0;
    echo($i+3).". <div class='row'><div class='col-sm-1'></div><div class='col-sm-3'> <a href='student_by_class.php?class=".$i."' class='btn btn-default'>Update Data Of Class ".$i."</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='col-sm-4'><b>Total Student Strength : </b>".$j."</div><div class='col-sm-3'><a href='student_attendance.php?class=".$i."'' class='btn btn-primary'>Attendance</a></div></div></li>
    <hr style='height:1px;border:none;color:#333;background-color:#333;'>
";
}


	?>




</div>


<?php include"../inc/footer.php";  ?>
