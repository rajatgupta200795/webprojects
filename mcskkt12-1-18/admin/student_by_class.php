<?php include"../inc/header.php";  


echo"</br></br>";

 include"./inc/admin_header.php"; 

if(!isset($_COOKIE['user_login']))
header("location:../");



$get_roll_number = @$_GET['get_roll_number'];

if($get_roll_number){
$query = $con->query("SELECT * FROM student_entry WHERE roll_no='$get_roll_number'");

while($row = $query->fetch_assoc()){

$fname = $row['first_name'];
$lname = $row['last_name'];
$roll_number = $row['roll_no'];
$present_class = $row['present_class'];
$start_class = $row['start_class'];
$gender = $row['gender'];
$father_name = $row['father_name'];
$mother_name = $row['mother_name'];
$student_phone = $row['student_phone'];
$contact_phone = $row['contact_phone'];

$bdate = $row['birth_date'];
$bmonth = $row['birth_month'];
$byear = $row['birth_year'];

$ad_date = $row['ad_date'];
$ad_month = $row['ad_month'];
$ad_year = $row['ad_year'];

$email = $row['email'];
$paddress = $row['paddress'];
$laddress = $row['laddress'];

}
}



?>



<center><h1>Welcome To Admin Area</h1></center><hr>


<ol>

<?php

if(isset($_GET['delete'])) 
echo'</br><hr><center><div class="jumbotron">
By Clicking On Yes Button All The Fees Data Of Student <b>'.strtoupper($fname).' '.strtoupper($lname).'</b> Will Be Deleted.</br></br>
Do You Really Want To Reset All Student Fees Data.  
<a href="student_by_class.php?delete_confirm=&get_roll_number='.$get_roll_number.'" class="btn btn-default"><span class="glyphicon glyphicon-ok"></span> Yes<a> 
<a href="student_by_class.php?&get_roll_number=<?php echo $get_roll_number; ?>" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> No</span></a>

</div></center>';


if(isset($_GET['delete_confirm'])) {
echo'</br></br><div class="jumbotron">';


$query = $con->query("DELETE from student_fees where roll_no = '$get_roll_number' ");
$query = $con->query("DELETE from student_entry where roll_no = '$get_roll_number' ");

echo "You Successfully Deleted The Fees Data Of <b>".strtoupper($fname)." ".strtoupper($lname)."</b>";

echo'</div>';

}

$class = @$_GET['class']; 

if($class){
$query = $con->query("SELECT * FROM student_entry where present_class = '$class' order by roll_no,first_name ASC");

echo"We have total ".$query->num_rows." Students in class ".$class."<hr>";

echo'<div class="row"><div class="col-sm-2"><b>Roll Number</b></div><div class="col-sm-3"><b>Name</b></div><div class="col-sm-3"><b>Father\'s Name</b></div>
<div class="col-sm-2"><b>Student Fees</b></div><div class="col-sm-1"><b>Delete</b></div></div><hr>';

while($row = $query->fetch_assoc()){

   echo "<div class='row'><div class='col-sm-2'><a href='new_student.php?get_roll_number=".$row['roll_no']."'>".$row['roll_no']."</a></div><div class='col-sm-3'><a href='new_student.php?get_roll_number=".$row['roll_no']."'>".strtoupper($row['first_name'])." ".strtoupper($row['last_name'])."</a></div>
   <div class='col-sm-3'><a href='new_student.php?get_roll_number=".$row['roll_no']."'>".strtoupper($row['father_name'])."</a></div><div class='col-sm-2'><a href='student_fees_feed.php?get_roll_number=".$row['roll_no']."'>Fees</a></div><div class='col-sm-1'><a href='student_by_class.php?delete=&get_roll_number=".$row['roll_no']."'>Delete</a></div></div><hr>";

}
}

?>
</ol>



<?php include"../inc/footer.php";  ?>
