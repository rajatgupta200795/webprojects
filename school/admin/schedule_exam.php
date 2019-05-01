<?php include"../inc/header.php";  

echo"</br></br>";

include"./inc/admin_header.php"; 

if(!isset($_COOKIE['user_login']))
header("location:../");

echo'

<div class="container" style="font-size:16px;">
</br>
<center><h2>Create New Exam Schedule</h2></center>

<hr style="height:2px;border:none;color:#333;background-color:#333;">
</br>';


if(isset($_GET['delete_exam_data'])){
$delete_exam_data = $_GET['delete_exam_data'];
$delete_exam_id = $_GET['delete_exam_id'];
$delete_exam_title = $_GET['delete_exam_title'];
$delete_exam_session = $_GET['delete_exam_session'];
echo'
<div class="jumbotron">
<div style="text-align:center;">
<h2>Do you really want to delete this exam ?</h2>
<b>Note : </b>You will lost all students\' result who took this exam.</br>
<h4>
<b>Exam Name : </b>'.ucwords($delete_exam_title).'</br>
<b>Session : </b>'.ucwords($delete_exam_session).'</br>
</h4>
<a class="btn btn-default btn-lg">Cancel</a> <a href="?delete_exam_id='.$delete_exam_id.'&delete_exam_id_response=true" class="btn btn-danger btn-lg">Delete</a>
</div>
</div>
';
}
if(isset($_GET['delete_exam_id_response']) && $_GET['delete_exam_id_response']=='true'){
$delete_exam_id = $_GET['delete_exam_id'];
$query = $con->query("DELETE FROM add_exam where exam_id='$delete_exam_id'");
$query1 = "DROP TABLE exam_".$delete_exam_id;
$query1 = $con1->query($query1);

if($query && $query1)
header("location:schedule_exam.php");
}




echo'
<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-6">
<form class="navbar-form" method="POST" action="">
<b>Select Class Level : </b>&nbsp;&nbsp;&nbsp;
Lower Level <input type="radio" value="lower"  name="class level" required>&nbsp;&nbsp;&nbsp;
Upper Level <input type="radio" value="upper" name="class level" required>
</br></br>
<b>Exam Title : </b></br>
<input type="text" name="title" class="form-control" placeholder="Enter Exam Title" style="height:40px; width:100%" required>
</br></br>
<div class="row">
<div class="col-sm-6">
<b>Exam Scheduled Date : </b></br>
<select class="form-control" name="exam_date">';
for($i=1;$i<=31;$i++)
echo'<option>'.$i.'</option>';
echo'</select> / 
<select class="form-control" name="exam_month">';
for($i=1;$i<=12;$i++)
echo'<option>'.$i.'</option>';
echo'</select> / 
<select class="form-control" name="exam_year">';
for($i=date("Y")-1;$i<=date("Y")+1;$i++)
echo'<option>'.$i.'</option>';
echo'</select>
</div>
<div class="col-sm-6">
<b>Session : </b></br>
<select class="form-control" name="session_year">
<option>'.(date("Y")-1).'-'.date("Y").'</option>
<option>'.date("Y").'-'.(date("Y")+1).'</option>
</select>
</div>
</div>
</br>';

$query = $con->query("SELECT * FROM subjects WHERE 1=1 order by s_id ASC");
if($query->num_rows){
$i_id=0;
echo'<h4>Select Subjects for Exam </h4><hr>';
echo'<div class="row" style="font-weight:bold;"><div class="col-sm-5">Subject Name</div><div class="col-sm-3">Max. Marks</div><div class="col-sm-3">Subject Id</div></div></br>';
while($row = $query->fetch_assoc()){
$i_id++;
$name = ucwords($row['name']);
$max = $row['max'];
$s_id = $row['s_id'];
echo'<div class="row"><div class="col-sm-5"><input type="checkbox" style="zoom:140%;" name="subject_'.$i_id.'" id="subject_'.$i_id.'"> <label for="subject_'.$i_id.'"><input class="hidden" name="s_name_'.$i_id.'" value="'.$name.'">'.$name.'</label></div><div class="col-sm-3">'.$max.'</div><div class="col-sm-3">'.$s_id.'</div></div></br>';
}
echo'<h5>Add more subjects, <a href="http://www.mcskkt.com/admin/all_subjects_for_exam.php">click here</a></h5>';
}
else echo'<h3>No subject found. Please add subjects, <a href="http://www.mcskkt.com/admin/all_subjects_for_exam.php">click here</a></h3>';

echo'
<hr>
<center>
<input type="submit" value="Schedule Exam" class="btn btn-primary btn-lg" name="schedule_send">
</center>
</form>
</div>
</div>
</br>
<hr style="height:2px;border:none;color:#333;background-color:#333;">


<h3>All Scheduled Exams</h3>
</br>
<div class="row" style="font-weight:bold;">
<div class="col-sm-1">Sr. No.</div>
<div class="col-sm-4">Title</div>
<div class="col-sm-1">Class Level</div>
<div class="col-sm-2">Session</div>
<div class="col-sm-1">Scheduled Date</div>
<div class="col-sm-2">Announce Date</div>
<div class="col-sm-1">Action</div>
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
<div class="col-sm-4"><a href="upload_exam_result.php?exam_id='.$exam_id.'">'.ucwords($title).'</a></div>
<div class="col-sm-1">'.ucwords($class_level).'</div>
<div class="col-sm-2">'.$session.'</div>
<div class="col-sm-1">'.$scheduled_date.'</div>
<div class="col-sm-2">'.$upload_date.'</div>
<div class="col-sm-1"><a href="?delete_exam_data=1&delete_exam_id='.$exam_id.'&delete_exam_title='.$title.'&delete_exam_session='.$session.'">Delete</a></div>
</div>
<hr>
';

}
}
else echo'
<center><h3>No sheduled exam found. Please schedule new exam.</h3></center>';


if(isset($_POST['schedule_send'])){
$exam_id+=1;
$class_level=$_POST['class_level'];
$title=$_POST['title'];
$exam_date=$_POST['exam_date'].'/'.$_POST['exam_month'].'/'.$_POST['exam_year'];
$session_year=$_POST['session_year'];
$date = date("d/m/Y");

$query= $con->query("INSERT INTO add_exam(title, exam_id, class_level, scheduled_date, upload_date, session) values('$title', '$exam_id', '$class_level', '$exam_date', '$date', '$session_year')");


$query = 'CREATE Table exam_'.$exam_id.'(
id INT(11) NOT NULL AUTO_INCREMENT,
roll_no VARCHAR(10) NOT NULL,
class VARCHAR(30) NOT NULL,
upload_date VARCHAR(20) NOT NULL, ';


for($i=1;$i<=$i_id;$i++){
$selected_subject = 'subject_'.$i;
$s_name_id = 's_name_'.$i;
$s_name = 'subject_name_'.$i;
if(isset($_POST[$selected_subject])){
$query = $query.' `'.str_replace(' ','_',$_POST[$s_name_id]).'` VARCHAR(20) NULL,';
}
}
$query = $query.' PRIMARY KEY (id) )';
$query = $con1->query($query);
echo'<h2>Please Wait! Don\'t refresh.....</h2>';
header("refresh:0");

}




?>

</div>


<?php include"../inc/footer.php";  ?>
