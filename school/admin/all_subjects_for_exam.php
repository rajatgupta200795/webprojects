<?php include"../inc/header.php";  

echo"</br></br>";

 include"./inc/admin_header.php"; 

if(!isset($_COOKIE['user_login']))
header("location:../");

echo'

<div class="container" style="font-size:16px;">
</br>
<center><h2>Subjects For Exams</h2></center>

<hr style="height:2px;border:none;color:#333;background-color:#333;">
</br>
';

if(!isset($_GET['delete_subject_name'])){
echo'
<h4>Add New Subject For Exams</h4>
</br>

<form class="navbar-form" method="POST" action="">
<div class="form-group-lg">
<div class"row">
<div class="col-sm-6">
<b style="font-size:20px;">Subject Name : </b></br>
<input type="text" class="form-control" style="width:100%;" placeholder="Enter Subject Name" name="new_subject">    
</div>
<div class="col-sm-3">
<b style="font-size:20px;">Max Marks : </b></br>
<input type="text" class="form-control" placeholder="Maximum Marks" name="subject_max">
</div>
<div class="col-sm-3">
<b style="font-size:20px;">Passing Marks : </b></br>
<input type="text" class="form-control" placeholder="Maximum Marks" name="subject_passing">
</div>
</div>
<div style="height:100px;"></div>

<input type="submit" value=" Add Subject " class="btn btn-primary btn-lg" name="send_add">
</div>
</form>
<div style="height:150px;"></div>
';
}
else{
$delete_subject_name = $_GET['delete_subject_name'];
$delete_subject_id = $_GET['delete_subject_id'];
echo'
<div class="jumbotron">
<div style="text-align:center;">
<h2>Do you really want to delete this subject ?</h2>
<h3>Subject Name : '.ucwords($delete_subject_name).'</h3>
<a class="btn btn-default btn-lg">Cancel</a> <a href="?delete_subject_id='.$delete_subject_id.'&delete_subject_id_response=true" class="btn btn-danger btn-lg">Delete</a>
</div>
</div>
';
}

if(isset($_GET['delete_subject_id_response']) && $_GET['delete_subject_id_response']=='true'){
$delete_subject_id = $_GET['delete_subject_id'];
$query = $con->query("DELETE FROM subjects where s_id='$delete_subject_id'");

if($query)
header("location:all_subjects_for_exam.php");
}

echo'
<div style="height:1px; width:100%; background-color:black;"></div>
</br></br>
';

echo'
<div class="row">
<div class="col-sm-1">
<b>Sr. No.</b>
</div>
<div class="col-sm-3">
<b>Subject Name</b>
</div>
<div class="col-sm-2">
<b>Maximaum Marks</b>
</div>
<div class="col-sm-2">
<b>Passing Marks</b>
</div>
<div class="col-sm-2">
<b>Subject Id</b>
</div>
<div class="col-sm-2">
<b>Action</b>
</div>
</div>
<hr>
';


$i=0;
$s_id=111110;
$query = $con->query("SELECT * FROM subjects WHERE 1=1 order by s_id ASC");

if($query->num_rows){
while($row = $query->fetch_assoc()){
$i++;
$name = ucwords($row['name']);
$max = $row['max'];
$passing = $row['passing'];
$s_id = $row['s_id'];

echo'
<div class="row">
<div class="col-sm-1">
<b>#'.$i.'.</b>
</div>
<div class="col-sm-3">
'.$name.'
</div>
<div class="col-sm-2">
'.$max.'
</div>
<div class="col-sm-2">
'.$passing.'
</div>
<div class="col-sm-2">
'.$s_id.'
</div>
<div class="col-sm-2">
<a href="">Edit</a> | <a href="?delete_subject_id='.$s_id.'&delete_subject_name='.$name.'">Delete</a></b>
</div>
</div>
<hr>
';
}
}
else echo'<h4>Sorry! No subject available. Please add subjects.</h4>';



if(isset($_POST['send_add']) && $_POST['new_subject']!=''){
$new_subject = strtolower($_POST['new_subject']); 
$subject_max = $_POST['subject_max'];
$subject_passing = $_POST['subject_passing'];
echo$new_s_id = $s_id+1; // refer to above s_id
$query = $con->query("INSERT INTO subjects(name, max, passing, s_id) values ('$new_subject','$subject_max', '$subject_passing', '$new_s_id') ");
header("refresh:0");
}

?>

</div>


<?php include"../inc/footer.php";  ?>
