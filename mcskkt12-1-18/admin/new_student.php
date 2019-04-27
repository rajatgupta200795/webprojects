<?php include"../inc/header.php";  


echo"</br></br>";

 include"./inc/admin_header.php"; 
 
if(!isset($_COOKIE['user_login']))
header("location:../");

ob_start();

echo'<div class="container">';

$fname = "";
$lname = "";
$gender = "";
$present_class = "";
$start_session = "";
$father_name = "";
$mother_name = "";
$student_phone = "";
$contact_phone = "";
$roll_number = "";

$bdate = "";
$bmonth = "";
$byear = "";

$ad_date = "";
$ad_month = "";
$ad_year = "";

$email = "";
$paddress = "";
$laddress = "";
$student_photo = "http://localhost/school/img/website_default_img.png";


$start_session = "";


if(date("m") == "4"   ||  date("m") =="5"   ||  date("m") =="6"   ||  date("m") == "7"  ||  date("m") =="8"   ||  date("m") == "8"  ||  date("m") == "9"  ||  
	date("m") == "10"  || date("m") == "11"  || date("m") == "12")
	$seesion_year = date("Y")."-".(date("Y")+1);

else $seesion_year = (date("Y")-1)	."-".date("Y");


$get_roll_number = @$_GET['get_roll_number'];

if($get_roll_number){
$query = $con->query("SELECT * FROM student_entry WHERE roll_no='$get_roll_number'");

while($row = $query->fetch_assoc()){

$fname = $row['first_name'];
$lname = $row['last_name'];
$roll_number = $row['roll_no'];
$present_class = $row['present_class'];
$start_session = $row['start_session'];
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
$student_photo = $row['student_photo'];


if($start_session=="") $start_session = $seesion_year;

}
}
?>


<div class="container-fluid">


<p style="margin-left:430px; "><b style="font-size:30px; " >Student Details</b>   


<b style="font-size:17px; margin-left:250px;" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-list"></span> Sesseion </b> &nbsp;&nbsp;<b style="font-size:17px;  position:absolute; margin-top:14px;"><?php echo$seesion_year; ?></b>
</p>
<hr style="height:1px;border:none;color:#333;background-color:#333;">



<form  class="navbar-form" method="POST" action="" enctype="multipart/form-data">
 <div class="form-group-sm">

<div class="row">
<div class="col-sm-8">



<div class="row">
<div class="col-sm-6">
<b>First Name</b> : <input type="text" size="20" name="fname" value="<?php echo $fname ;?>" class="form-control" placeholder="Enter First Name" required>
</div>
<div class="col-sm-6">
<b>Last Name</b> : <input type="text" size="20" name="lname" value="<?php echo $lname; ?>" class="form-control" placeholder="Enter Last Name" required>	
</div>
</div>

</br>

<div class="row">
<div class="col-sm-6">
<b>Roll Number</b> : <input type="text" size="20" name="roll_number_new" class="form-control" value="<?php echo $roll_number; ?>" placeholder="Enter Roll Number" required >
</div>
<div class="col-sm-6">
	<b>Present Class</b> : <select  name="present_class"  class="form-control" required >
	<option><?php echo $present_class; ?></option>
        <option>PLAYWAY</option>
	<option>L.K.G.</option>
	<option>U.K.G.</option>	
<?php for($i=1;$i<12;$i++)
	echo'<option>'.$i.'</option>';
	?>
</select>
</div>
</div>

</br>

<div class="row">
<div class="col-sm-6">
	<b>Start Session Year</b> : <select  name="start_session"  class="form-control" required >
	<option><?php echo $start_session; ?></option>
<?php for($i=date("Y");$i>=(date("Y")-12);$i--)
	echo'<option>'.$i.'-'.($i+1).'</option>';
	?>
</select>
</div>
<div class="col-sm-6">
<b>Admission Date</b> : <select  name="ad_date"  class="form-control" required >
	<option><?php echo $ad_date; ?></option>
<?php for($i=1;$i<=31;$i++)
	echo'<option>'.$i.'</option>';
	?>
</select>
<select  name="ad_month"  class="form-control"  required>
	<option><?php echo $ad_month; ?></option>
<?php for($i=1;$i<=12;$i++)
	echo'<option>'.$i.'</option>';
	?>
</select>
<select  name="ad_year" class="form-control"  required>
	<option><?php echo $ad_year ;?></option>
<?php for($i=date("Y");$i>1980;$i--)
	echo'<option>'.$i.'</option>';
	?>
</select></div></div>

</br>

<div class="row"><div class="col-sm-6">
<b>Gender</b> : <select  name="gender" class="form-control"  required>
  	<option><?php echo $gender ;?></option>
  <option>male</option>
    <option>female</option>
</select>
</div>
<div class="col-sm-6">
<b>Birthday</b> : <select  name="bdate" class="form-control" >
	<option><?php echo $bdate; ?></option>
<?php for($i=1;$i<=31;$i++)
	echo'<option>'.$i.'</option>';
	?>
</select>
<select  name="bmonth" class="form-control" >
	<option><?php echo $bmonth; ?></option>
<?php for($i=1;$i<=12;$i++)
	echo'<option>'.$i.'</option>';
	?>
</select>
<select  name="byear" class="form-control" >
	<option><?php echo $byear; ?></option>
<?php for($i=date("Y");$i>1980;$i--)
	echo'<option>'.$i.'</option>';
	?></select>
</div>
</div>

</br>

<div class="row">
<div class="col-sm-6"><b>Father's Name</b> : <input type="text" size="20" name="father_name" value="<?php echo $father_name ;?>" class="form-control" placeholder="Enter Father Name" required>
</div>
<div class="col-sm-6"><b>Mother's Name</b> : <input type="text" size="20" name="mother_name"  value="<?php echo $mother_name ;?>" class="form-control" placeholder="Enter Mother's Name"  >
</div>
</div>

</br>

<div class="row">
<div class="col-sm-6"><b>Parents's Phone</b> : <input type="text" size="20" name="contact_phone" value="<?php echo $contact_phone ;?>" class="form-control" placeholder="Parents's Phone Number" > 	
</div>
<div class="col-sm-6"><b>Student's Phone</b> : <input type="text" size="20" name="student_phone" value="<?php echo $student_phone ;?>" class="form-control" placeholder="Mobile Number (Optional)"> 	</div></div>

</br>

<div class="row">
<div class="col-sm-6">
<b>Email Address</b> : <input type="text" size="20" name="email" value="<?php echo $email ;?>" class="form-control" placeholder="Enter Email Address">
</div></div>

</br>

<div class="row">
<div class="col-sm-6">
<b>Local Address</b> : </br>
<textarea rows="4" name="laddress"  cols="40"><?php echo $laddress ;?></textarea>
</div>
<div class="col-sm-6"><b>Permanent Address</b> : </br>
<textarea name="paddress" class="form-control" value="<?php echo $paddress ;?>" rows="4" cols="40"><?php echo $paddress ;?></textarea>
</div></div>

</br>



<div class="row">
<div class="col-sm-10">
<div style="margin-left:530px;"> <input type="submit" name="send" value="Submit" class="btn btn-info"></div>
</div>
</div>

</div>

<div class="col-sm-4">
<img height="200" width="200" alt="STUDENT'S PHOTO" src="<?php  echo $student_photo; ?>"><br></br>
<input type="file" name="file">
</div>

</div>


</div>
</form>




</div>




<?php


$send = @$_POST['send'];

if($send){

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$roll_number = $_POST['roll_number_new'];
$gender = $_POST['gender'];
$present_class = $_POST['present_class'];
$start_session = $_POST['start_session'];
$father_name = $_POST['father_name'];
$mother_name = $_POST['mother_name'];
$student_phone = $_POST['student_phone'];
$contact_phone = $_POST['contact_phone'];

$bdate = $_POST['bdate'];
$bmonth = $_POST['bmonth'];
$byear = $_POST['byear'];

$ad_date = $_POST['ad_date'];
$ad_month = $_POST['ad_month'];
$ad_year = $_POST['ad_year'];

$email = $_POST['email'];
$paddress = $_POST['paddress'];
$laddress = $_POST['laddress'];

if($get_roll_number && $get_roll_number==$roll_number){


define ("MAX_SIZE","400"); 
$errors=0; 

	$image =$_FILES["file"]["name"]; 
$uploadedfile = $_FILES['file']['tmp_name']; 
if ($image) { 
	$filename = stripslashes($_FILES['file']['name']);
/*$extension = getExtension($filename); 
$extension = strtolower($extension); */
if (($_FILES["file"]["type"] != "image/jpg") && ($_FILES["file"]["type"] != "image/jpeg") && ($_FILES["file"]["type"] != "image/png") && ($_FILES["file"]["type"] != "image/gif")) { 
	echo ' Unknown Image extension '; 
	$errors=1; 
} else { 
	$size=filesize($_FILES['file']['tmp_name']); 
 
if($_FILES["file"]["type"] =="image/jpg" || $_FILES["file"]["type"]=="image/jpeg" ) { 
	$uploadedfile = $_FILES['file']['tmp_name']; $src = imagecreatefromjpeg($uploadedfile); 
} 
else if($_FILES["file"]["type"] =="image/png") { 
$uploadedfile = $_FILES['file']['tmp_name']; 
$src = imagecreatefrompng($uploadedfile); 
} 
else { 
$src = imagecreatefromgif($uploadedfile); 
}
list($width,$height)=getimagesize($uploadedfile); 
$newwidth=400; 
$newheight=($height/$width)*$newwidth; 
$tmp=imagecreatetruecolor($newwidth,$newheight); 

imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight, $width,$height); 
$picname = $fname."_".$lname."_".$roll_number.".jpg";
$filename = "../uploads/". $picname; 

if(file_exists("documenti/$picname"))
unlink("documenti/$picname");

imagejpeg($tmp,$filename,100); 
imagedestroy($src); 
imagedestroy($tmp); 
}  //If no errors registred, print the success message 


}





if(!$errors)
$query = $con->query("UPDATE student_entry set first_name = '$fname', last_name = '$lname' , roll_no = '$roll_number' , present_class = '$present_class' , start_session = '$start_session' , gender = '$gender' , father_name = '$father_name' , mother_name = '$mother_name' , student_phone = '$student_phone' , email = '$email', laddress = '$laddress', paddress = '$paddress', ad_date = '$ad_date' , ad_month = '$ad_month', ad_year =  '$ad_year', birth_date  = '$bdate' , birth_month =  '$bmonth', birth_year = '$byear' , contact_phone = '$contact_phone' , student_photo='$filename' WHERE roll_no='$get_roll_number' ");

header("location:../admin/new_student.php?get_roll_number=$roll_number");

}
else{


define ("MAX_SIZE","400"); 
$errors=0; 

	$image =$_FILES["file"]["name"]; 
$uploadedfile = $_FILES['file']['tmp_name']; 
if ($image) { 
	$filename = stripslashes($_FILES['file']['name']);
/*$extension = getExtension($filename); 
$extension = strtolower($extension); */
if (($_FILES["file"]["type"] != "image/jpg") && ($_FILES["file"]["type"] != "image/jpeg") && ($_FILES["file"]["type"] != "image/png") && ($_FILES["file"]["type"] != "image/gif")) { 
	echo ' Unknown Image extension '; 
	$errors=1; 
} else { 
	$size=filesize($_FILES['file']['tmp_name']); 
 
if($_FILES["file"]["type"] =="image/jpg" || $_FILES["file"]["type"]=="image/jpeg" ) { 
	$uploadedfile = $_FILES['file']['tmp_name']; $src = imagecreatefromjpeg($uploadedfile); 
} 
else if($_FILES["file"]["type"] =="image/png") { 
$uploadedfile = $_FILES['file']['tmp_name']; 
$src = imagecreatefrompng($uploadedfile); 
} 
else { 
$src = imagecreatefromgif($uploadedfile); 
}
list($width,$height)=getimagesize($uploadedfile); 
$newwidth=400; 
$newheight=($height/$width)*$newwidth; 
$tmp=imagecreatetruecolor($newwidth,$newheight); 

imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight, $width,$height); 
$picname = $fname."_".$lname."_".$roll_number.".jpg";
$filename = "../uploads/". $picname; 

if(file_exists("documenti/$picname"))
unlink("documenti/$picname");

imagejpeg($tmp,$filename,100); 
imagedestroy($src); 
imagedestroy($tmp); 
}  //If no errors registred, print the success message 


}





if(!$errors){
$query = $con->query("INSERT into student_entry( first_name , last_name , roll_no , present_class , start_session , gender , father_name , mother_name , student_phone , email , laddress, paddress , ad_date , ad_month , ad_year , birth_date , birth_month , birth_year , contact_phone ,student_photo) values ('$fname' , '$lname' , '$roll_number' , '$present_class' , '$start_session' , '$gender' , '$father_name' , '$mother_name' , '$student_phone' , '$email' , '$laddress' , '$paddress' , '$ad_date' , '$ad_month' , '$ad_year' , '$bdate' , '$bmonth' , '$byear' ,'$contact_phone' , '$filename')");

header("location:../admin/new_student.php?get_roll_number=$roll_number");

}
}

}


echo'</div>';

ob_end_flush();

?>




<?php include"../inc/footer.php";  ?>