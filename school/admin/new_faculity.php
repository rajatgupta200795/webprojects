<?php include"../inc/header.php";  


echo"</br></br>";

 include"./inc/admin_header.php"; 
 
if(!isset($_COOKIE['user_login']))
header("location:../");

ob_start();

$id = @$_GET['get_id'];
$new_id = @$_GET['get_new_id'];


echo'<div class="container">
<center><h2><b>Update faculity Data</b></h2></center>
<hr style="height:1px;border:none;color:#333;background-color:#333;">
';




if(isset($_GET['delete'])){  
echo'<center><div class="jumbotron">
By Clicking On Yes Button All Data Of This Faculity Member <b>Name : </b>'.strtoupper($_GET['delete_name']).' Will Be Deleted.</br></br>
Do You Really Want To Delete This Member.  
<a href="new_faculity.php?delete_confirm=&get_id='.$id.'&delete_name='.$_GET['delete_name'].'" class="btn btn-default"><span class="glyphicon glyphicon-ok"></span> Yes<a> 
<a href="new_faculity.php?&get_id=<?php echo $id; ?>" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> No</span></a>

</div></center>';
}

if(isset($_GET['delete_confirm'])) {
echo'</br><div class="jumbotron">';

$get_id=$_GET['get_id'];

$query = $con->query("DELETE from teacher_entry where id = '$get_id' ");

echo "You Successfully Deleted <b>".strtoupper($_GET['delete_name'])."</b>";

echo'</div>';


}






echo'
<a href="new_faculity.php?get_new_id=" style="font-size:20px;"><span class="glyphicon glyphicon-plus"></span> Add New faculity Member</a>

<hr style="height:1px;border:none;color:#333;background-color:#333;">';






if((isset($_GET['get_id']) || isset($_GET['get_new_id'])) && !isset($_GET['delete_confirm'])) {

echo'<center><h2>Faculity Member\'s Profile</h2></center><hr>
';

$name = "";
$subject = "";
$about = "";
$priority_order = "";
$teacher_type = "";
$teacher_photo = "../img/website_default_img.png";



if(isset($_GET['get_id'])){
$query = $con->query("SELECT * FROM teacher_entry WHERE id='$id'");

while($row = $query->fetch_assoc()){

$name = $row['teacher_name'];
$subject = $row['subject'];
$priority_order = $row['priority_order'];
$teacher_type = $row['teacher_type'];
$teacher_photo = $row['teacher_photo'];
$about = $row['about'];

}
}

echo'

<form  class="navbar-form" method="POST" action="" enctype="multipart/form-data">
 <div class="form-group-sm">

<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-5">



<b>Teacher\'s Name : </b><input type="text" name="name" size="30" class="form-control" value="'.strtoupper($name).'" placeholder="Enter Teacher\'s Name" required></br></br>

<b>Teacher Type : </b><input type="text" name="teacher_type" size="30"  class="form-control" value="'.$teacher_type.'" placeholder="Teacher\'s Type - 1/2/3" required></br></br>

<b>Priority Order : </b><input type="text" name="priority_order" size="30" class="form-control" value="'.$priority_order.'" placeholder="Enter Teacher\'s Priority Order" required></br></br>

<b>Main Subject : </b><input type="text" name="subject" size="30" class="form-control" value="'.strtoupper($subject).'" placeholder="Enter Teacher\'s Main Subject"></br></br>

<b>Description : </b><textarea name="about" rows="5" cols="60" class="form-control" value="'.$about.'" placeholder="Tell Something About Teacher ...."></textarea></br></br>

</div>


<div class="col-sm-6">
<img height="200" width="200" style="padding-left:3px; padding-bottom:3px; padding-top:3px; padding-right:3px; background-color:grey;" alt="TEACHER\'S PHOTO" src="'.$teacher_photo.'"><br></br>
<input type="file" name="file">
</div>

</div>


<div class="row">
<div class="col-sm-7"></div>
<div class="col-sm-4"> <input type="submit" name="send" value="Submit" class="btn btn-info"></div>
</div>

 </br></br>
</div>
</form>
<hr style="height:1px;border:none;color:#333;background-color:#333;"></br>
';




$send = @$_POST['send'];

if($send){   


$name = $_POST['name'];
$subject = $_POST['subject'];
$priority_order = $_POST['priority_order'];
$teacher_type = $_POST['teacher_type'];
$teacher_photo = $_POST['teacher_photo'];
$about = $_POST['about'];


if(isset($_GET['get_id'])){


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
$newwidth=200; 
$newheight=($height/$width)*$newwidth; 
$tmp=imagecreatetruecolor($newwidth,$newheight); 

imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight, $width,$height); 
$picname = $name."_".$id.".jpg";
$filename = "../img/". $picname; 

if(file_exists("documenti/$picname"))
unlink("documenti/$picname");

imagejpeg($tmp,$filename,70); 
imagedestroy($src); 
imagedestroy($tmp); 
}  //If no errors registred, print the success message 


}


if(!$errors){
$query = $con->query("UPDATE teacher_entry set teacher_name = '$name', teacher_type = '$teacher_type' , priority_order = '$priority_order' , subject = '$subject' ,teacher_photo='$filename' , about='$about' WHERE id='$id' ");

header("location:../admin/new_faculity.php");
}
}


else if(isset($_GET['get_new_id'])){

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
$newwidth=200; 
$newheight=($height/$width)*$newwidth; 
$tmp=imagecreatetruecolor($newwidth,$newheight); 

imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight, $width,$height); 
$picname = $name."_".$id.".jpg";
$filename = "../img/". $picname; 

if(file_exists("documenti/$picname"))
unlink("documenti/$picname");

imagejpeg($tmp,$filename,70); 
imagedestroy($src); 
imagedestroy($tmp); 
}  //If no errors registred, print the success message 


}

if(!$errors){
$query = $con->query("INSERT into teacher_entry( teacher_name , teacher_type , priority_order , subject , teacher_photo  , about) values ('$name' , '$teacher_type' , '$priority_order' , '$subject' , '$filename' , '$about')");

header("location:../admin/new_faculity.php");
}
}

}
}







echo'<div class="row"><div class="col-sm-1"></div><div class="col-sm-1"><b>S.No.</b></div><div class="col-sm-3"><b>Name</b></div><div class="col-sm-1"><b>Type</b></div><div class="col-sm-1"><b>Priority</b></div><div class="col-sm-2"><b>Subject</b></div><div class="col-sm-2"><b>Delete</b></div></div>
<hr>
';



//if(!isset($_GET['get_id']) && !isset($_GET['get_new_id'])){



$query = $con->query("SELECT * FROM teacher_entry WHERE 1=1");
$i=0;
if($query->num_rows>0){
while($row = $query->fetch_assoc()){
$i++;
$id =  $row['id'];
$name = $row['teacher_name'];
$subject = $row['subject'];
$priority_order = $row['priority_order'];
$teacher_type = $row['teacher_type'];
$teacher_photo = $row['teacher_photo'];

echo'<div class="row"><div class="col-sm-1"></div><div class="col-sm-1">'.$i.'.</div><div class="col-sm-3"><a href="new_faculity.php?get_id='.$id.'">'.strtoupper($name).'</a></div><div class="col-sm-1">'.$teacher_type.'</div><div class="col-sm-1">'.$priority_order.'</div><div class="col-sm-2">'.strtoupper($subject).'</div><div class="col-sm-2"><a href="new_faculity.php?get_id='.$id.'&delete=&delete_name='.$name.'">Delete</a></div></div>
<hr>
';

}
}else echo'<h1>Ooopsss ! No Faculity Member Exist In our Database.</h1></br></br>';

echo'<hr style="height:1px;border:none;color:#333;background-color:#333;">
';
//}




echo'</div>';


ob_end_flush();

?>




<?php include"../inc/footer.php";  ?>