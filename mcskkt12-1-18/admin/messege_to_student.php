<?php include"../inc/header.php";  


echo"</br></br>";

 include"./inc/admin_header.php"; 

if(!isset($_COOKIE['user_login']))
header("location:../");

?>

<div class="container">

<div  style="margin-top:30px; text-align:center; font-size:35px;"> Send SMS To Students</div>

<hr style="background-color:black; height:2px;">


<?php
    
    
echo'
<form id="form1"  class="navbar-form" method="POST" action="#message_send_details">
 <div class="form-group-sm">
 <b>Write Your Messege :</b>
</br>
<textarea maxlength="160" style="margin-top:20px;font-size:20px; border:2px solid violet; color: green; width:90%;" name="sms_text" id="sms_text_length" class="form-control" rows="3" placeholder="Write messege here..." oninput="check_length()" required></textarea>
</br>
<div class="row"><div class="col-sm-8" style="color:red;" id="check_text_length"></div><div class="col-sm-4" id="text_length" style="color:grey;"></div></div>

<script>
function check_length(){
var text_len = document.getElementById("sms_text_length").value.length;
document.getElementById("text_length").innerHTML = "You have used "+text_len+" characters.";
if(text_len>=160)
document.getElementById("check_text_length").innerHTML = "Sorry! You can not send message having more than 160 characters.";
}
</script>

</br></br>
<div class="row"><div class="col-sm-0"></div><div class="col-sm-9"><div class="btn btn-primary btn-lg" data-toggle="collapse" data-target="#show_students_list">Select Students</div></div><div class="row"><div class="col-sm-2"><input type="submit" class="btn btn-danger btn-lg" value="Send SMS" id="send_sms_id" name="send_sms" ></div>
</div>
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
            if($row['contact_phone']!='')
			$playway_contact[$playway_count] = $row['contact_phone'];
			else $playway_contact[$playway_count] = '<a href="new_student.php?get_roll_number='.$row['roll_no'].'">Update</a>';
		}

		if($row['present_class']=='L.K.G.'){
			$lkg_count++; 
			$lkg_name[$lkg_count] = $row['first_name']." ".$row['last_name'];
			$lkg_fname[$lkg_count] = $row['father_name'];
			$lkg_rollno[$lkg_count] = $row['roll_no'];
            if($row['contact_phone']!='')
			$lkg_contact[$lkg_count] = $row['contact_phone'];
			else $lkg_contact[$lkg_count] = '<a href="new_student.php?get_roll_number='.$row['roll_no'].'">Update</a>';
		}

		if($row['present_class']=='U.K.G.'){
			$ukg_count++; 
			$ukg_name[$ukg_count] = $row['first_name']." ".$row['last_name'];
			$ukg_fname[$ukg_count] = $row['father_name'];
			$ukg_rollno[$ukg_count] = $row['roll_no'];
            if($row['contact_phone']!='')
			$ukg_contact[$ukg_count] = $row['contact_phone'];
			else $ukg_contact[$ukg_count] = '<a href="new_student.php?get_roll_number='.$row['roll_no'].'">Update</a>';
		}

		
		for($i=1;$i<=12;$i++){
        
        if($row['present_class']==$i){ $count[$i]++;
        	$class_count = $i.'_'.$count[$i]; 
			$class_name[$class_count] = $row['first_name']." ".$row['last_name'];
			$class_fname[$class_count] = $row['father_name'];
			$class_rollno[$class_count] = $row['roll_no'];
			if($row['contact_phone']!='')
			$class_contact[$class_count] = $row['contact_phone'];
			else $class_contact[$class_count] = '<a href="new_student.php?get_roll_number='.$row['roll_no'].'">Update</a>';

		}

		}

	}

$sms_check_count=0;

echo'
</br><div id="show_students_list" class="collapse">
<div style="text-align:center; font-size:40px;">Please Select Students</div>
</br>
<hr style="background-color:violet; height:1px;">';

    if($playway_count!=0){
    	echo '<div class="row"><div class="col-sm-3"><a class="btn btn-info" data-toggle="collapse" data-target="#playway">PLAYWAY</a></div><div class="col-sm-4"><input type="checkbox" name="playway_all" id="p_id" style="zoom:1.5;" onchange="p_check_all()"> <label for="p_id" style="font-size:20px;">Select All</label></div></div>
    	<div id="playway" class="collapse">
    	</br></br>
    	<div class="row"><div class="col-sm-1"><b>Select</b></div><div class="col-sm-3"><b>Name</b></div><div class="col-sm-2"><b>Roll No</b></div><div class="col-sm-3"><b>Father Name</b></div><div class="col-sm-2"><b>Parent\'s Mobile</b></div></div></br>
    	';
        echo"<script>
        function p_check_all(){
        $('#playway').find(':checkbox').each(function(){
        if(this.checked == false)
        this.checked = true;
        else this.checked = false;
   });
    }</script>";
            
    	for($i=1;$i<=$playway_count;$i++){ 

        $sms_check_count++; $sms_check_rollno[$sms_check_count]= $playway_rollno[$i]; $sms_check_name[$sms_check_count]= $playway_name[$i]; $sms_check_contact[$sms_check_count]= $playway_contact[$i];

        echo '<div class="row"><div class="col-sm-1"><input type="checkbox" name="turn_'.$sms_check_count.'" style="zoom:2;" id="p_'.$playway_rollno[$i].'"></div><div class="col-sm-3"><label for="p_'.$playway_rollno[$i].'"> '.strtoupper($playway_name[$i]).'</div><div class="col-sm-2">'.$playway_rollno[$i].'</div><div class="col-sm-3">'.strtoupper($playway_fname[$i]).'</div><div class="col-sm-2">'.$playway_contact[$i].'</div></div>'; 
    }
    echo'</div>';
}

echo'<hr style="background-color:black; height:1px;">';
 
    if($lkg_count!=0){
    	echo '<div class="row"><div class="col-sm-3"><a class="btn btn-info" data-toggle="collapse" data-target="#lkg">L.K.G.</a></div><div class="col-sm-4"><input type="checkbox" name="lkg_all" id="l_id" style="zoom:1.5;" onchange="lkg_check_all()"> <label for="l_id" style="font-size:20px;">Select All</label></div></div>
    	<div id="lkg" class="collapse">
    	</br></br>
    	<div class="row"><div class="col-sm-1"><b>Select</b></div><div class="col-sm-3"><b>Name</b></div><div class="col-sm-2"><b>Roll No</b></div><div class="col-sm-3"><b>Father Name</b></div><div class="col-sm-2"><b>Parent\'s Mobile</b></div></div></br>
    	';
        echo"<script>
        function lkg_check_all(){
        $('#lkg').find(':checkbox').each(function(){
        if(this.checked == false)
        this.checked = true;
        else this.checked = false;
   });
    }</script>";
            

    	for($i=1;$i<=$lkg_count;$i++){

        $sms_check_count++; $sms_check_rollno[$sms_check_count]= $lkg_rollno[$i]; $sms_check_name[$sms_check_count]= $lkg_name[$i]; $sms_check_contact[$sms_check_count]= $lkg_contact[$i];

        echo '<div class="row"><div class="col-sm-1"><input type="checkbox" name="turn_'.$sms_check_count.'" style="zoom:2;" id="l_'.$lkg_rollno[$i].'"></div><div class="col-sm-3"><label for="l_'.$lkg_rollno[$i].'"> '.strtoupper($lkg_name[$i]).'</div><div class="col-sm-2">'.$lkg_rollno[$i].'</div><div class="col-sm-3">'.strtoupper($lkg_fname[$i]).'</div><div class="col-sm-2">'.$lkg_contact[$i].'</div></div>'; 
    }
    echo'</div>';
}

echo'<hr style="background-color:black; height:1px;">';

    if($ukg_count!=0){
    	echo '<div class="row"><div class="col-sm-3"><a class="btn btn-info" data-toggle="collapse" data-target="#ukg">U.K.G.</a></div><div class="col-sm-4"><input type="checkbox" name="ukg_all" id="u_id" style="zoom:1.5;" onchange="ukg_check_all()"> <label for="u_id" style="font-size:20px;">Select All</label></div></div>
    	<div id="ukg" class="collapse">
    	</br></br>
    	<div class="row"><div class="col-sm-1"><b>Select</b></div><div class="col-sm-3"><b>Name</b></div><div class="col-sm-2"><b>Roll No</b></div><div class="col-sm-3"><b>Father Name</b></div><div class="col-sm-2"><b>Parent\'s Mobile</b></div></div></br>
    	';
        echo"<script>
        function ukg_check_all(){
        $('#ukg').find(':checkbox').each(function(){
        if(this.checked == false)
        this.checked = true;
        else this.checked = false;
   });
    }</script>";

    	for($i=1;$i<=$ukg_count;$i++){

        $sms_check_count++; $sms_check_rollno[$sms_check_count]= $ukg_rollno[$i]; $sms_check_name[$sms_check_count]= $ukg_name[$i]; $sms_check_contact[$sms_check_count]= $ukg_contact[$i];

        echo '<div class="row"><div class="col-sm-1"><input type="checkbox" name="turn_'.$sms_check_count.'"  style="zoom:2;" id="u_'.$ukg_rollno[$i].'"></div><div class="col-sm-3"><label for="u_'.$ukg_rollno[$i].'">'.strtoupper($ukg_name[$i]).'</label></div><div class="col-sm-2">'.$ukg_rollno[$i].'</div><div class="col-sm-3">'.strtoupper($ukg_fname[$i]).'</div><div class="col-sm-2">'.$ukg_contact[$i].'</div></div> </br>';
    }
    echo'</div>';
}


for($i=1;$i<=8;$i++){
echo'<hr style="background-color:black; height:1px;">';
    if($count[$i]!=0){
    	echo '<div class="row"><div class="col-sm-3"><a class="btn btn-info" data-toggle="collapse" data-target="#class'.$i.'">Class '.$i.'</a></div><div class="col-sm-4"><input type="checkbox" name="class'.$i.'_all" id="class'.$i.'_id" style="zoom:1.5;" onchange="class'.$i.'_check_all()"> <label for="class'.$i.'_id" style="font-size:20px;">Select All</label></div></div>
    	<div id="class'.$i.'" class="collapse">
    	</br></br>
    	<div class="row"><div class="col-sm-1"><b>Select</b></div><div class="col-sm-3"><b>Name</b></div><div class="col-sm-2"><b>Roll No</b></div><div class="col-sm-3"><b>Father Name</b></div><div class="col-sm-2"><b>Parent\'s Mobile</b></div></div></br>
    	';
    	$fun_for_script = 'class'.$i.'_check_all';
        echo"<script>
        function $fun_for_script(){
        $('#class".$i."').find(':checkbox').each(function(){
        if(this.checked == false)
        this.checked = true;
        else this.checked = false;
   });
    }</script>";

    	for($j=1;$j<=$count[$i];$j++){ $x = $i.'_'.$j;

        $sms_check_count++; $sms_check_rollno[$sms_check_count]= $class_rollno[$x]; $sms_check_name[$sms_check_count]= $class_name[$x]; $sms_check_contact[$sms_check_count]= $class_contact[$x];

        echo '<div class="row"><div class="col-sm-1"><input type="checkbox" name="turn_'.$sms_check_count.'" style="zoom:2;" id="class'.$i.'_'.$class_rollno[$x].'"></div><div class="col-sm-3"><label for="class'.$i.'_'.$class_rollno[$x].'">'.strtoupper($class_name[$x]).'</label></div><div class="col-sm-2">'.$class_rollno[$x].'</div><div class="col-sm-3">'.strtoupper($class_fname[$x]).'</div><div class="col-sm-2">'.$class_contact[$x].'</div></div> </br>';
       }
    }
    echo'</div>';

  }
  
echo'</div>';   // data toggle div = show_students_list

}

echo'
</br>

</div>
</form>';

?>

</div>
</div>
</br></br>
<hr>

<?php

$send = @$_POST['send_sms'];
$valid_mobile=0;
$valid_fail_mobile=0;
$invalid_mobile=0;
$cost_count=0;

if($send){

$sms_text = $_POST['sms_text'];

	// Account details
	$apiKey = urlencode('m9afpPgwpRQ-zmOMZK9dkGSauVZ7TSS1JgRN2gvSAp');
	
	// Message details
	$sender = urlencode('TXTLCL');
	$message = rawurlencode($sms_text);
	
$total_select=0;
if($sms_check_count!=0){
$query = "SELECT * from student_entry where ";
$first_check = 1;

for($i=0;$i<=$sms_check_count;$i++){
$turn_check = "turn_".$i; 
if($_POST[$turn_check]=="on" && $first_check == 0)
{
$total_select++;
$query_part = $query_part.' or roll_no=\''.$sms_check_rollno[$i].'\' ';
}
elseif($_POST[$turn_check]=="on" && $first_check == 1)
{
$total_select++;
$query_part = ' roll_no=\''.$sms_check_rollno[$i].'\'';
$first_check = 0;
}
}

$query = $query.' '.$query_part.' order by present_class';


if($total_select>0){
$query =  $con->query($query);

echo'
<div id="message_send_details" style="padding:50px; background-color:#f0f0f0;">
<center><h1>Sent Message Details</h1></center>
</br>
<div class="row" style="font-weight:; font-size:20px;"><div class="col-sm-2"></div><div class="col-sm-3"><b>Total Select : '.$total_select.'</b></div><div class="col-sm-3"><b style="color:green;">Successful : <span id="success_id"></span></b></div><div class="col-sm-3"><b style="color:red;">Failed : <span id="fail_id"></span></b></div></div>
</br><hr>
<div class="row" style="font-weight:bold;"><div class="col-sm-1"></div><div class="col-sm-2">Message Status</div><div class="col-sm-2">Name </div><div class="col-sm-2">Parent\'s Mobile</div><div class="col-sm-2"> Class </div><div class="col-sm-2">Error Message</div></div><hr>';


while($row=$query->fetch_assoc()){
$mobile=$row['contact_phone'];
$mobile='91'.$mobile;
$name=$row['first_name'].' '.$row['last_name'];
$class=$row['present_class'];
$roll_no=$row['roll_no'];
	
 	$numbers = array($mobile);
	$numbers = implode(',', $numbers);
 
	// Prepare data for POST request
	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
 
	// Send the POST request with cURL
	$ch = curl_init('https://api.textlocal.in/send/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	
	// Process your response here
	$response;
	$k = json_decode($response);

if($k->status=='success')
$cost_count++;

if($mobile=='91' && $k->status=='failure'){
$invalid_mobile++;
echo'<div class="row"><div class="col-sm-1"></div><div class="col-sm-2" style="color:red;">Message not sent</div><div class="col-sm-2">'.$name.' </div><div class="col-sm-2">-----</div><div class="col-sm-2"> '.$class.' </div><div class="col-sm-2"><a href="new_student.php?get_roll_number='.$roll_no.'">Update</a></div></div>';
}
else if($mobile!='91' && $k->status=='failure'){
$valid_fail_mobile++;
echo'<div class="row"><div class="col-sm-1"></div><div class="col-sm-2" style="color:red;">Message not sent</div><div class="col-sm-2">'.$name.' </div><div class="col-sm-2">'.$mobile.'</div><div class="col-sm-2"> '.$class.' </div><div class="col-sm-2">Error Code: '.$k->errors[0]->code.'</div></div>';
}
else if ($k->status=='success'){
$valid_mobile++;
echo'<div class="row"><div class="col-sm-1"></div><div class="col-sm-2" style="color:green;">Message sent</div><div class="col-sm-2"> '.$name.' </div><div class="col-sm-2">'.$mobile.'</div><div class="col-sm-2"> '.$class.' </div><div class="col-sm-2">No error</div></div>';
}

echo'<script>
document.getElementById("success_id").innerHTML = "'.$valid_mobile.'";
document.getElementById("fail_id").innerHTML = "'.($valid_fail_mobile+$invalid_mobile).'";
</script>';

}
	// Process your response here
	$responseArray = json_decode($response, true);
	$cost = $responseArray['cost'];
	$balance = ($balance-$cost_count);
	$invalid_mobile = $invalid_mobile+$valid_fail_mobile;
	
	date_default_timezone_set('Asia/Calcutta');
	$time = DATE("h:i:sa"); $date = DATE("d/m/y");
	
	$query = "INSERT into sms_details(send_time, send_date, sms_text, cost, balance, total_select, successful_select, failed_select) values ('$time', '$date', '$sms_text', '$cost_count', '$balance', '$total_select', '$valid_mobile', '$invalid_mobile')";
	$con->query($query);

	echo'</br><hr><h2><div class="row"><div class="col-sm-1"></div><div class="col-sm-3">Cost: '.$cost_count.'</div><div class="col-sm-3">Balance: '.$balance.'</div></div></h2>';

} // if total_select >0
else echo'<script>alert("Please Select At Least One Student");</script>';


}
}


?>




<?php include"../inc/footer.php";  ?>
