<?php include"../inc/header.php";  


echo"</br></br>";

 include"./inc/admin_header.php"; 

if(!isset($_COOKIE['user_login']))
header("location:../");

?>





<center><h1>Update Exam Schedule</h1></center>
<hr style="height:1px;border:none;color:#333;background-color:#333;">



<div class="container">

<?php


if(isset($_GET['uploaded'])){

echo'
<h2><div class="jumbotron">Exam Schedule Has Been Uploaded successfully.</div></h2>
<hr style="height:1px;border:none;color:#333;background-color:#333;">
';

}


?>


<form  class="navbar-form" method="POST" action="" enctype="multipart/form-data">
 <div class="form-group-sm">


<div class="row"><div class="col-sm-0"></div><div class="col-sm-8">
	
	<b>Starting Date :</b> 
<?php

echo'<select class="form-control" name="std1">';
for ($i=1; $i <=31 ; $i++) { 
echo'<option>'.$i.'</option>';
}echo'</select> ';


echo'<select class="form-control" name="std2">';
for ($i=1; $i <=12 ; $i++) { 
echo'<option>'.$i.'</option>';
}echo'</select> ';


echo'<select class="form-control" name="std3">';
for ($i=(date("Y")+1); $i >=2001 ; $i--) { 
echo'<option>'.$i.'</option>';
}echo'</select> ';

?>

</div>
<div class="col-sm-4">

<b>End Date : </b>
<?php

echo'<select class="form-control" name="end1">';
for ($i=1; $i <=31 ; $i++) { 
echo'<option>'.$i.'</option>';
}echo'</select> ';


echo'<select class="form-control" name="end2">';
for ($i=1; $i <=12 ; $i++) { 
echo'<option>'.$i.'</option>';
}echo'</select> ';


echo'<select class="form-control" name="end3">';
for ($i=(date("Y")+1); $i >=2001 ; $i--) { 
echo'<option>'.$i.'</option>';
}echo'</select> ';

?>	
</div></div>

</br>
<textarea rows="20" cols="166" placeholder="Enter Exam Schedule Here..." class="form-control" name="exam_text"></textarea>

</br></br>

<b>Ordered By : </b><input type="text" size="30" placeholder="Exam Controller Name" class="form-control" name="ordered_by">

</br></br>

<div class="row"><div class="col-sm-9"></div><div class="col-sm-3"><input type="submit" name="send" class="btn btn-info" value="Update"></div></div>

</div>
</form>

<?php

$send = @$_POST['send'];

if($send){

   $std1 = $_POST['std1'];
   $std2 = $_POST['std2'];
   $std3 = $_POST['std3'];
   $end1 = $_POST['end1'];
   $end2 = $_POST['end2'];
   $end3 = $_POST['end3'];

$start_date = $std1.'/'.$std2.'/'.$std3;

$end_date = $end1.'/'.$end2.'/'.$end3;

$exam_text = $_POST['exam_text'];
$ordered_by = $_POST['ordered_by'];
$added_date = date("l").' , '.date("d/m/y");



$query = $con->query("INSERT into exam (start_date, end_date , exam_text , ordered_by , added_date) values ( '$start_date' , '$end_date' , '$exam_text' , '$ordered_by' , '$added_date') ");

header("location:exam_feeds.php?uploaded=Successfully");

}


echo'<hr style="height:1px;border:none;color:#333;background-color:#333;">';

echo'</br><center><h3>Uploaded Exam Schedule</h3></center><hr>';

echo'<div class="row"><div class="col-sm-1"><b>Sr.No.</b></div><div class="col-sm-2"><b>Starting Date</b></div><div class="col-sm-2"><b>Ending Date</b></div><div class="col-sm-3"><b>Exam Notice</b></div>
  <div class="col-sm-2"><b>Ordered By</b></div><div class="col-sm-2"><b>Date</b></div></div><hr>';

$query = $con->query("SELECT * from exam where 1 order by id DESC limit 10");

$j=0;
while($row=$query->fetch_assoc()){
  
  $j++;
  $start_date = $row['start_date'];
  $end_date = $row['end_date'];
  $exam_text = $row['exam_text'];
  $added_date = $row['added_date'];
  
  $new_text=$exam_text;

if(strlen($exam_text)>35){

	$new_text="";
	for ($i=0; $i<35 ; $i++) { 
		$new_text = $new_text.''.$exam_text[$i];

	}   $new_text = $new_text.'.....';
}

  $ordered_by = $row['ordered_by'];

  echo'<div class="row"><div class="col-sm-1">'.$j.'.</div><div class="col-sm-2">'.$start_date.'</div><div class="col-sm-2">'.$end_date.'</div><div class="col-sm-3">'.$new_text.'</div>
  <div class="col-sm-2">'.$ordered_by.'</div><div class="col-sm-2">'.$added_date.'</div></div><hr>';



}



?>





</div>





<?php include"../inc/footer.php";  ?>
