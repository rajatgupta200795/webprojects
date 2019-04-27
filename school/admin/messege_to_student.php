<?php include"../inc/header.php";  


echo"</br></br>";

 include"./inc/admin_header.php"; 

if(!isset($_COOKIE['user_login']))
header("location:../");

?>

<div class="container">

<div style="margin-top:30px; text-align:center; font-size:35px;"> Send SMS To Students</div>

<hr style="background-color:black; height:2px;">

<?php

echo'
<form  class="navbar-form" method="POST" action="">
 <div class="form-group-sm">
 <b>Write Your Messege :</b>

<textarea style="margin-top:20px;font-size:20px;" name="sms_text" class="form-control" rows="5" cols="100" placeholder="Write messege here..."></textarea>

';

$query = $con->query("SELECT * from student_entry where 1=1 order by first_name");

if($query->num_rows==0){

	echo'</br></br><h3 style="color:red;">Oooopsss ! No Student exist in our school database. Please fill some student\'s entry in our database. </br>Click <a href="new_student.php">here</a>.</h3>';
}
else{

$playway_count=0; $lkg_count=0;  $ukg_count=0;  

for($i=1;$i<=12;$i++) $count[$i]=0; 
for($i=1;$i<=12;$i++) $class[$i] = "";


		
	while($row=$query->fetch_assoc()){

		if($row['present_class']=='PLAYWAY'){
			$playway_count++; 
			$playway_name[$playway_count] = $row['first_name']." ".$row['last_name'];
			$playway_fname[$playway_count] = $row['father_name'];
			$playway_rollno[$playway_count] = $row['roll_no'];

		}

		if($row['present_class']=='L.K.G.'){
			$lkg_count++; 
			$lkg_name[$lkg_count] = $row['first_name']." ".$row['last_name'];
			$lkg_fname[$lkg_count] = $row['father_name'];
			$lkg_rollno[$lkg_count] = $row['roll_no'];

		}

		if($row['present_class']=='U.K.G.'){
			$ukg_count++; 
			$ukg_name[$ukg_count] = $row['first_name']." ".$row['last_name'];
			$ukg_fname[$ukg_count] = $row['father_name'];
			$ukg_rollno[$ukg_count] = $row['roll_no'];

		}

		
		for($i=1;$i<=12;$i++){
        
        if($row['present_class']==$i){ $count[$i]++;
        	$class_count = $i.'_'.$count[$i]; 
			$class_name[$class_count] = $row['first_name']." ".$row['last_name'];
			$class_fname[$class_count] = $row['father_name'];
			$class_rollno[$class_count] = $row['roll_no'];

		}

		}

	}

$sms_check_count=0;

    echo'<div style="height:60px;"></div>
<div style="text-align:left; font-size:30px;" class="btn btn-primary btn-sm"><b>Select The Students </b></div>
    <div style="height:60px;"></div>';

    if($playway_count!=0){
    	echo '<button class="btn btn-info">PLAYWAY</button></br></br>
    	<div class="row"><div class="col-sm-1"><b>Select</b></div><div class="col-sm-3"><b>Name</b></div><div class="col-sm-3"><b>Roll No</b></div><div class="col-sm-3"><b>Father Name</b></div></div></br>';

    	for($i=1;$i<=$playway_count;$i++){ 

        $sms_check_count++; $sms_check_rollno[$sms_check_count]= $playway_rollno[$i]; $sms_check_name[$sms_check_count]= $playway_name[$i];

        echo '<div class="row"><div class="col-sm-1"><input type="checkbox" name="turn_'.$sms_check_count.'"></div><div class="col-sm-3">'.strtoupper($playway_name[$i]).'</div><div class="col-sm-3">'.$playway_rollno[$i].'</div><div class="col-sm-3">'.strtoupper($playway_fname[$i]).'</div></div>'; echo'</br><hr style="background-color:black; height:1px;"></br>';
    }
}


    if($ukg_count!=0){
    	echo '<button class="btn btn-info">U.K.G.</button></br></br>
    	<div class="row"><div class="col-sm-1"><b>Select</b></div><div class="col-sm-3"><b>Name</b></div><div class="col-sm-3"><b>Roll No</b></div><div class="col-sm-3"><b>Father Name</b></div></div></br>';

    	for($i=1;$i<=$ukg_count;$i++){

        $sms_check_count++; $sms_check_rollno[$sms_check_count]= $ukg_rollno[$i]; $sms_check_name[$sms_check_count]= $ukg_name[$i];

        echo '<div class="row"><div class="col-sm-1"><input type="checkbox" name="turn_'.$sms_check_count.'"></div><div class="col-sm-3">'.strtoupper($ukg_name[$i]).'</div><div class="col-sm-3">'.$ukg_rollno[$i].'</div><div class="col-sm-3">'.strtoupper($ukg_fname[$i]).'</div></div> </br><hr style="background-color:black; height:1px;">';
    }
}


    if($lkg_count!=0){
    	echo '<button class="btn btn-info">L.K.G.</button></br></br>
    	<div class="row"><div class="col-sm-1"><b>Select</b></div><div class="col-sm-3"><b>Name</b></div><div class="col-sm-3"><b>Roll No</b></div><div class="col-sm-3"><b>Father Name</b></div></div></br>';

    	for($i=1;$i<=$lkg_count;$i++){

        $sms_check_count++; $sms_check_rollno[$sms_check_count]= $lkg_rollno[$i]; $sms_check_name[$sms_check_count]= $lkg_name[$i];

        echo '<div class="row"><div class="col-sm-1"><input type="checkbox" name="turn_'.$sms_check_count.'"></div><div class="col-sm-3">'.strtoupper($lkg_name[$i]).'</div><div class="col-sm-3">'.$lkg_rollno[$i].'</div><div class="col-sm-3">'.strtoupper($lkg_fname[$i]).'</div></div> </br><hr style="background-color:black; height:1px;">';
    }
}


for($i=1;$i<=12;$i++){
    if($count[$i]!=0){
    	echo '<button class="btn btn-info">Class '.$i.'</button></br></br>
    	<div class="row"><div class="col-sm-1"><b>Select</b></div><div class="col-sm-3"><b>Name</b></div><div class="col-sm-3"><b>Roll No</b></div><div class="col-sm-3"><b>Father Name</b></div></div></br>';

    	for($j=1;$j<=$count[$i];$j++){ $x = $i.'_'.$j;

        $sms_check_count++; $sms_check_rollno[$sms_check_count]= $class_rollno[$x]; $sms_check_name[$sms_check_count]= $class_name[$x];

        echo '<div class="row"><div class="col-sm-1"><input type="checkbox" name="turn_'.$sms_check_count.'"></div><div class="col-sm-3">'.strtoupper($class_name[$x]).'</div><div class="col-sm-3">'.$class_rollno[$x].'</div><div class="col-sm-3">'.strtoupper($class_fname[$x]).'</div></div> </br>';
       }echo'<hr style="background-color:black; height:1px;">';
    }

  }


}

echo'

</br>
</br>
<center><input type="submit" class="btn btn-primary btn-lg" value="Send SMS" name="send_sms"></center>

</div>
</form>';

?>

</div>

<?php


$send = @$_POST['send_sms'];

if($send){

$sms_text = $_POST['sms_text'];
require 'class-Clockwork.php';

if($sms_check_count!=0){
$query = "SELECT * from student_entry where ";
$first_check = 1;

for($i=0;$i<=$sms_check_count;$i++){
$turn_check = "turn_".$i; 
if($_POST[$turn_check]=="on" && $first_check == 0)
{
$query_part = $query_part.' or roll_no=\''.$sms_check_rollno[$i].'\' ';
}
elseif($_POST[$turn_check]=="on" && $first_check == 1)
{
$query_part = ' roll_no=\''.$sms_check_rollno[$i].'\'';
$first_check = 0;
}
}

$query = $query.' '.$query_part;
$query =  $con->query($query);
while($row=$query->fetch_assoc()){
$mobile=$row['student_phone'];
$name=$row['first_name'];


try
{   $API_KEY = "dc654d3998d34d3046ba37b13a9cd70de5999e0f";
    // Create a Clockwork object using your API key
    $clockwork = new Clockwork( $API_KEY );

    // Setup and send a message
    $message = array( 'to' => $mobile, 'message' => $sms_text );
    $result = $clockwork->send( $message );

    // Check if the send was successful
    if($result['success']) {
        echo 'Message sent - ID: ' . $result['id'];
    } else {
        echo 'Message failed - Error: ' . $result['error_message'];
    }
}
catch (ClockworkException $e)
{
    echo 'Exception sending SMS: ' . $e->getMessage();
}



}
}
}




?>




<?php include"../inc/footer.php";  ?>
