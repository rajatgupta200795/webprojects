<?php include"../inc/header.php";  


echo"</br></br>";

 include"./inc/admin_header.php"; 

if(!isset($_COOKIE['user_login']))
header("location:../");

?>

</br>

<center><h1>Welcome To Admin Area</h1></center>

<hr style="height:1px;border:none;color:#333;background-color:#333;">

<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-2">
<b>Student</b>
<ul>
	<li><a href="http://www.mcskkt.com/admin/new_student.php">Add New Student </a></li>
	<li><a href="student_identity_card.php"> ID Card </a></li>
	<li><a href="student_identity_card.php"> Marksheet </a></li>
</ul>

</br>
<b>Faculity</b>
<ul>
<li><a href="new_faculity.php"> Faculity </a></li>
<li><a href="exam_feeds.php"> Exam </a></li>
</ul>

</br>
<b>Information</b>
<ul>
<li><a href="messege_to_student.php"> Send SMS </a></li>
<li><a href="update_notice.php"> Notice</a></li>
</ul>

</br>
<b>For Exam</b>
<ul>
	<li><a href="all_subjects_for_exam.php"> Add Subjects </a></li>
	<li><a href="schedule_exam.php">  Scedule Exam </a></li>
	<li><a href="upload_exam_result.php">  Upload Result </a></li>
	<li><a href="student_result.php">  Student Result </a></li>
</ul>

</div>
<div class="col-sm-3">

<center><h4>Update Fees</h4></center>

<hr style="height:1px;border:none;color:#333;background-color:#333;">

<form  class="navbar-form" method="POST" action="" enctype="multipart/form-data">
 <div class="form-group-sm">

<input type="text"  class="form-control" placeholder="Enter Roll Number" name="roll_number"> 
<input type="submit" value=" Submit Fees" class="btn btn-success btn-sm" name="send_fees">
</div>
</form>

</div>

<div class="col-sm-3">

<center><h4>Update Student Profile</h4></center>

<hr style="height:1px;border:none;color:#333;background-color:#333;">

<form  class="navbar-form" method="POST" action="" enctype="multipart/form-data">
 <div class="form-group-sm">

<input type="text"  class="form-control" placeholder="Enter Roll Number" name="roll_number"> 
<input type="submit" value=" Edit Profile" class="btn btn-success btn-sm" name="edit_profile"></br>

<a href="new_student.php" style="font-size:12px;">New Student ?</a>
</div>
</form>

</div>

</div>


<?php 

$send_fees = @$_POST['send_fees'];

if($send_fees){

$roll_number = $_POST['roll_number'];
header("location:student_fees_feed.php?get_roll_number=$roll_number");

}

$edit_profile = @$_POST['edit_profile'];

if($edit_profile){

$roll_number = $_POST['roll_number'];
header("location:new_student.php?get_roll_number=$roll_number");

}

?>

<?php include"../inc/footer.php";  ?>
