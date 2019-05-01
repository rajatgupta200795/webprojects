<?php include"../inc/header.php";  

ob_start();

if(!isset($_COOKIE['user_login']))
header("location:../");

?>

<div class="container" style="font-family: sans-serif;">

<center><h1>Student Result</h1></center>
<hr style="height:2px;border:none; background-color: black;">


<?php

if(!isset($_GET['exam_id'])){
echo'
<h3>All Scheduled Exams</h3>
</br>
<div class="row" style="font-weight:bold;">
<div class="col-sm-1">Sr. No.</div>
<div class="col-sm-4">Title</div>
<div class="col-sm-1">Class Level</div>
<div class="col-sm-2">Session</div>
<div class="col-sm-2">Scheduled Date</div>
<div class="col-sm-2">Announce Date</div>
</div>
<hr>
';

$i=0;
$exam_id=111111;
$query = $con->query("SELECT * FROM add_exam WHERE 1=1 order by exam_id ASC");
if($query->num_rows){
while($row = $query->fetch_assoc()){
$i++;
$title = $row['title'];
$exam_id = $row['exam_id'];
$class_level = $row['class_level'];
$scheduled_date = $row['scheduled_date'];
$upload_date = $row['upload_date'];
$session = $row['session'];
echo'
<div class="row">
<div class="col-sm-1" style="font-weight:bold;">#'.$i.'.</div>
<div class="col-sm-4"><a href="student_result.php?exam_id='.$exam_id.'">'.ucwords($title).'</a></div>
<div class="col-sm-1">'.$class_level.'</div>
<div class="col-sm-2">'.$session.'</div>
<div class="col-sm-2">'.$scheduled_date.'</div>
<div class="col-sm-2">'.$upload_date.'</div>
</div>
<hr>
';

}
}
}
else{
$exam_id = $_GET['exam_id'];
$roll_no='';
$roll_no = @$_GET['roll_no'];

echo'
<center>
<form class="navbar-form" method="GET" action="">
<div class="form-group">
<h3>Enter Student Roll Number</h3>
</br>
<input type="text" name="roll_no" value="'.$roll_no.'" class="form-control" size="40" placeholder="Please Enter Student Roll Number"></br></br>
<input type="hidden" value="'.$exam_id.'" name="exam_id">
<input type="submit" value="Show Result" name="send_roll_no" class="btn btn-primary">
</div>
</form>
</center>
<hr style="height:2px;border:none; background-color: red;">
';
}


if(isset($_GET['send_roll_no'])){
$roll_no = $_GET['roll_no'];


$query = $con->query("SELECT * FROM student_entry WHERE roll_no='$roll_no'");

if($query->num_rows){
while($row = $query->fetch_assoc()){

$fname = $row['first_name'];
$lname = $row['last_name'];
$roll_no = $row['roll_no'];
$present_class = $row['present_class'];
$father_name = $row['father_name'];
$contact_phone = $row['contact_phone'];
if($contact_phone=='') $contact_phone = "----";

$paddress = $row['paddress'];
$laddress = $row['laddress'];

$student_photo = $row['student_photo'];
$gender = $row['gender'];
if($student_photo==""){
if($gender=="male") $student_photo="http://mcskkt.com/img/default_male.png";
else $student_photo="http://mcskkt.com/img/default_female.png";
}


echo'
<center><h3>Student Introduction</h3></center>
<hr>
<div class="row" style="line-height:30px;">
<div class="col-sm-5" style="text-align:center;">
<img src="'.$student_photo.'" height="150" style="border:1px solid grey;">
</div>
<div class="col-sm-5">
<b>Name : </b>'.ucwords($fname).' '.ucwords($lname).'</br>
<b>Roll Number : </b>'.$roll_no.'</br>
<b>Class : </b>'.$present_class.'</br>
<b>Father Name : </b>'.ucwords($father_name).'</br>
<b>Contact number : </b>'.$contact_phone.'</br>
</div>
</div>
<hr style="height:2px;border:none; background-color: red;">
</br></br>
';

}
}


$query = $con->query("SELECT * FROM add_exam WHERE exam_id='$exam_id'");
if($query->num_rows>0){
while($row = $query->fetch_assoc()){
$title = $row['title'];
$exam_id = $row['exam_id'];
$class_level = $row['class_level'];
$scheduled_date = $row['scheduled_date'];
$upload_date = $row['upload_date'];
$session = $row['session'];
echo'
<center><h2>'.ucwords($title).'</h2></center>
<hr>
<div class="row" style="font-size:18px;">
<div class="col-sm-3"><b>Session :</b> '.$session.'</div>
<div class="col-sm-4"><b>Exam Date : </b>'.$scheduled_date.'</div>
</div>
<hr style="height:1px;border:none; background-color: black;">
';
}
}

echo'
<div class="row" style="font-weight:bold;">
<div class="col-sm-1">
<b>Sr.No.</b>
</div>
<div class="col-sm-3">Subject Name</div>
<div class="col-sm-2">Obtained Marks</div>
<div class="col-sm-2">Full Masks</div>
<div class="col-sm-2">Passing Masks</div>
<div class="col-sm-2">Result</div>
</div>
<hr>
';

$i_id=0;
$query = "desc exam_".$exam_id;
$result = $con1->query($query);

$query1 = "SELECT * FROM exam_".$exam_id." where roll_no=".$roll_no;
$result1 = $con1->query($query1);

while($row = $result->fetch_array()){
$i_id++;
$marks[$i_id] = '';
}

$query = "desc exam_".$exam_id;
$result = $con1->query($query);
$i_id=0;
$current_roll_no_count = $result1->num_rows;
if($current_roll_no_count>0){
while($row1 = $result1->fetch_assoc()){
while($row = $result->fetch_array()){
$i_id++;
$marks[$i_id]=$row1[$row[0]];
}
break;
}
}

$total=0;
$query = "desc exam_".$exam_id;
$result = $con1->query($query);
$i_id=0;
while($row = $result->fetch_array()){
$i_id++;
$column = str_replace('_',' ',$row[0]);
if($i_id>4){

$query = $con->query("SELECT * FROM subjects WHERE name='$column'");

if($query->num_rows){
while($row = $query->fetch_assoc()){
$i++;
$name = ucwords($row['name']);
$max = $row['max'];
$passing = $row['passing'];
$s_id = $row['s_id'];
}}

echo'
<div class="row">
<div class="col-sm-1"><b>#'.($i_id-4).'.</b></div>
<div class="col-sm-3">
<b>'.$column.'</b>
</div>
<div class="col-sm-2">'.$marks[$i_id].'</div>
<div class="col-sm-2">'.$max.'</div>';

$grade = '';
switch(($marks[$i_id]*100/$max)/10){
case 9 : $grade = 'A+';
case 8 : $grade = 'A';
case 7 : $grade = 'B+';
case 6 : $grade = 'B';
case 5 : $grade = 'C+';
case 4 : $grade = 'C';
default : $grade = '<span style="color:red;">F</span>';
}

echo'<div class="col-sm-2">'.$passing.'</div>
<div class="col-sm-2">';
if($marks[$i_id]>=$passing)echo'PASS'; else echo'FAIL';
echo'
</div>
</div>
<hr>';
$total+=$marks[$i_id];
$total_max+=$max;
}
}

echo'
<div class="row" style="padding:10px; font-weight:bold; font-family:calibri; font-size:18px;">
<div class="col-sm-1"></div>
<div class="col-sm-3" style="font-size:25px;">Total</div>
<div class="col-sm-2">'.$total.'</div>
<div class="col-sm-2">'.$total_max.'</div>';

$grade = '';
switch(($total*100/$total_max)/10){
case 9 : $grade = 'A+';
case 8 : $grade = 'A';
case 7 : $grade = 'B+';
case 6 : $grade = 'B';
case 5 : $grade = 'C+';
case 4 : $grade = 'C';
default : $grade = '<span style="color:red;">F</span>';
}

echo'
<div class="col-sm-2"></div>
<div class="col-sm-2">
';
if($marks[$i_id]>=$passing)echo'PASS'; else echo'FAIL';

echo'
</div>
</div>

<hr style="height:2px;border:none; background-color: red;">
<center><a href="view_marksheet.php?exam_id='.$exam_id.'&roll_no='.$roll_no.'&send_roll_no" class="btn btn-primary btn-lg">View Marksheet</a></center>

</div>
';



}


ob_end_flush();

?>


<?php include"../inc/footer.php";  ?>
