<?php include"../inc/header.php";  

echo"</br></br>";

include"./inc/admin_header.php"; 

if(!isset($_COOKIE['user_login']))
header("location:../");

echo'

<div class="container" style="font-size:16px;">
</br>
<center><h2>Upload Exam Result</h2></center>
<hr style="height:2px;border:none;color:#333;background-color:#333;">';

$exam_id='';
$roll_no='';
$exam_id = @$_GET['exam_id'];
$roll_no = @$_GET['student_roll_number'];


if(isset($_GET['exam_id'])){

$query = "SELECT * FROM add_exam where exam_id='$exam_id'";
$query = $con->query($query);
while($query->num_rows>0 && $row = $query->fetch_assoc()){
$class_level = $row['class_level'];
$title = $row['title'];
$exam_date = $row['scheduled_date'];
$announce_date = $row['upload_date'];
$session = $row['session'];
}

echo'
<div class="row">
<div class="col-sm-6">
<b>Exam Name : </b>'.ucwords($title).'
</div>
<div class="col-sm-3">
<b>Exam Date : </b>'.$exam_date.'
</div>
<div class="col-sm-2">
<b>Session : </b>'.$session.'
</div>
</div>
<hr>
';



echo'
<center><h3>Please Enter Student Roll Number</h3>
</br>
<form class="navbar-form" method="POST" action="">
<div class="form-group">
<input type="text" name="roll_no" placeholder="Enter Student Roll Number" value="'.$roll_no.'" class="form-control input-lg"> &nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="Submit" name="send_roll_no" class="btn btn-success btn-lg">
</div>
</form>
</center>
</br>
<hr style="height:2px;border:none; background-color: green;">

';

if(isset($_POST['send_roll_no'])){
$roll_no=$_POST['roll_no'];
header("location:upload_exam_result.php?student_roll_number=$roll_no&exam_id=$exam_id");
}



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
</br>
';

}
}

echo'
<h2><center>'.ucwords($title).'</center></h2>
<hr>
<div class="row" style="text-align:right;">
<div class="col-sm-6"></div>
<div class="col-sm-3"><b>Session : </b>'.$session.'</div>
<div class="col-sm-3"><b>Exam Date : </b>'.$exam_date.'</div>
</div>

<h3>Enter Result Details</h3>
</br>
<div class="row" style="font-weight:bold;">
<div class="col-sm-1">
Sr. No.
</div>
<div class="col-sm-4">
Subject Name
</div>
<div class="col-sm-2">
Obtained Masks
</div>
<div class="col-sm-2">
Full Masks
</div>
<div class="col-sm-2">
Passing Masks
</div>
</div>
<hr>
';

echo'<form class="navbar-form" method="POST" action="">';

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
<div class="col-sm-1">
<b>#'.($i_id-4).'.</b>
</div>
<div class="col-sm-4">
'.$column.'
</div>
<div class="col-sm-2">
<input type="text" name="marks_'.$i_id.'" value="'.$marks[$i_id].'" class="form-control" size="10">
<input type="hidden" name="subject_name_'.$i_id.'" value="'.$column.'">
</div>
<div class="col-sm-2">'.$max.'</div>
<div class="col-sm-2">'.$passing.'</div>
</div>
<hr>
';
}
}
echo'
<center><input type="submit" value="Upload Result" class="btn btn-primary btn-lg" name="send_result"></center>
</form>';

$date = date("d/m/Y");
if(isset($_POST['send_result'])){

if($current_roll_no_count==0){
$query = "INSERT INTO exam_".$exam_id." (roll_no, class, upload_date, ";
$query_val = " values('".$roll_no."', '".$present_class."', '".$date."', ";
}
elseif($current_roll_no_count==1){
$query = "UPDATE exam_".$exam_id." SET upload_date=".$date.', ';
}


for($i=5;$i<=$i_id;$i++){
$marks_id = 'marks_'.$i;
$subject_name = 'subject_name_'.$i;
$marks_id=$_POST[$marks_id];
$subject_name= str_replace(' ','_',$_POST[$subject_name]);

if($current_roll_no_count==0){
$query = $query.''.$subject_name.', ';
$query_val = $query_val.''.$marks_id.', ';
}
else 
$query = $query.''.$subject_name.'='.$marks_id.', ';

}

if($current_roll_no_count==0){
$query = substr($query,0,(strlen($query)-2)).') ';
$query_val = substr($query_val,0,(strlen($query_val)-2)).') ';
} else $query = substr($query,0,(strlen($query)-2)).' where roll_no="'.$roll_no.'" ';

if($current_roll_no_count==0){
$query = $query.' '.$query_val;
}

$query = $con1->query($query);   ///////////////////////////////////////

if($query){
if($current_roll_no_count==0)
echo'<script>alert("Student Result Successfully Uploaded");</script>';
elseif($current_roll_no_count==1)
echo'<script>alert("Student Result Successfully Updated");</script>';
header("refresh:0");
}
else
echo'<script>alert("'.$con1->error.' Failed to upload.");</script>';
}



} //  isset($_GET['exam_id'])
else{
echo'
<h3>List Of All Exams</h3>
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
<div class="col-sm-4"><a href="http://www.mcskkt.com/admin/upload_exam_result.php?exam_id='.$exam_id.'">'.ucwords($title).'</a></div>
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

?>


</div>


<?php include"../inc/footer.php";  ?>
