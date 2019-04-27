<?php include"./inc/header.php";  ?>

<div class="container">



<center><h1>Exam</h1></center>
<hr style="height:1px;border:none;color:#333;background-color:#333;">

<?php

$query = $con->query("SELECT * from exam where 1 order by id DESC limit 1");

$j=0;
if($query->num_rows>0){
while($row=$query->fetch_assoc()){
  
  $j++;
  $start_date = $row['start_date'];
  $end_date = $row['end_date'];
  $exam_text = $row['exam_text'];
  $added_date = $row['added_date'];
  
  $new_text=$exam_text;

if(strlen($exam_text)>40){

	$new_text="";
	for ($i=0; $i<40 ; $i++) { 
		$new_text = $new_text.''.$exam_text[$i];

	}   $new_text = $new_text.'.....';
}

  $ordered_by = $row['ordered_by'];

echo'

<h2><b>1. '.$added_date.'</b></h2><hr>

<div class="row"><div class="col-sm-0"></div><div class="col-sm-8">
	
	<b>Starting Date : </b>'.$start_date.' 

</div>
<div class="col-sm-4">

<b>End Date : </b>'.$end_date.'

</div></div>

</br>

'.$exam_text.'

</br></br>

<b><u>Ordered By</u> : </b>'.$ordered_by.'

</br></br>';

}
}
else echo'</br><div class="jumbotron"><h2>Sorry ! Exam data Not Found.</h2></div>';


?>




</div>


<?php include"./inc/footer.php";  ?>
