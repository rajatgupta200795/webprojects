<?php include"../inc/header.php";  
echo"</br></br>";
include"./inc/admin_header.php"; 
if(!isset($_COOKIE['user_login']))
header("location:../");

$roll_number="";
$roll_number = @$_GET['get_roll_number'];

?>


</br></br>

<center><h1>Student Identity Card</h1>
<hr style="height:1px; width:90%; border:none; color:#333;background-color: #f0f0f0;">


<div class="container">

<?php
if(!isset($_GET['get_roll_number']))
echo'</br><h4>Enter the roll number of student and get instant electronic Identity Card.</h4>';
?>
</br></br>

<form  class="navbar-form" method="POST" action="">
<div class="form-group-lg">

<b>Enter Roll Number : </b><input type="text" size="30" class="form-control form-lg" value="<?php  echo $roll_number; ?>" name="roll_no" placeholder="Enter Roll Number">

<input type="submit"  class="btn btn-primary btn-lg" value="Get Identity Card" name="send">

</div></form>
</center>

<?php

$send = @$_POST['send'];

if($send){

	$roll_no = @$_POST['roll_no'];

	header("location:student_identity_card.php?get_roll_number=$roll_no");
}

if($roll_number){
    $query = $con->query("SELECT * FROM student_entry WHERE roll_no='$roll_number'");


if($query->num_rows){
while($row = $query->fetch_assoc()){

$fname = $row['first_name'];
$lname = $row['last_name'];
$roll_number = $row['roll_no'];
$present_class = $row['present_class'];
$father_name = $row['father_name'];
$student_phone = $row['student_phone'];
$contact_phone = $row['contact_phone'];
if($contact_phone=='') $contact_phone = "----";

$paddress = $row['paddress'];
$laddress = $row['laddress'];

$student_photo = $row['student_photo'];
$gender = $row['gender'];
if($student_photo==""){
if($gender=="male") $student_photo="../../img/default_male.png";
else $student_photo="../../img/default_female.png";
}

}
}
}

?>



</br></br>

<?php

if($query->num_rows){

echo'
<center>
<div id="iCard" style="display:block;">
     
<div style="width:400px;/*30%*/ height:247px; border:1px solid lightgrey; background-color:#f0f0f0; border-radius: 10px; padding:2px;">
<div style="height:60px; width:100%; background-color:#FF6600; border:2px solid #FF6600; border-top-right-radius:7px; border-top-left-radius:7px;">
<div class="row">

<div class="col-sm-4"></br></br>
<div style="border:45px; background-color:#FF6600; border-bottom-right-radius:90px;border-bottom-left-radius:70px; height:90px; width:200px; position:absolute; margin-left:-2px;">
<div style="position:absolute; margin-left:30px; font-size:25px; margin-top:-20px; font-family:cursive; color:white;"></div>
</div>
</div>

<div class="col-sm-8">
    <div style="text-align:left; font-size:21px; color:#041835; font-family:sans; padding-top:2px;">Mahaveer Convent School</div>

<div style="text-align:left; font-size:9px; color:white; font-family:; padding-top:-2px;">Kubersthan Road, Kathkuiyan Bazar, Kushinagar-274303</div>
<div style="text-align:center; font-size:9px; color:white; font-family:; padding-top:-2px;">Phone +919628673350 and Visit www.mcskkt.com</div>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-4">
    </br><img src="'.$student_photo.'" height="110" width="110" style="border:3px solid #eb6e1a; border-radius:10px; margin-left:20px; margin-top:-12px;">
</div>
<div class="col-sm-8">
    
<!-- white student details  -->
<div style="width:250px;/*95%*/ height:105px; background-color:white; margin-top:8px; border:1px solid lightgrey; border-radius:10px; margin-left:-2px;">

<div class="row">
<div class="col-sm-5" style="font-weight:bold; font-size:11px; text-align:right; margin-left:-25px; margin-top:10px;">
Roll No : </br>
Name : </br>
Father : </br>
Mobile : </br>
Class : </br>
</div>
<div class="col-sm-7" style="margin-left:-23px; font-weight:bold; font-size:11px; text-align:left; margin-top:10px; color:#054231; font-family:sans-serif;">

'.$roll_number.'</br>
'.ucwords($fname).' '.ucwords($lname).'</br>
'.ucwords($father_name).'</br>
'.$contact_phone.'</br>
'.$present_class.'


</div>
</div>

</div>
</div>
</div>
<!-- bottom part -->
<div style="height:59px; width:99.8%; background-color:#FF6600; border:2px solid #FF6600; border-bottom-right-radius:7px; border-bottom-left-radius:7px; margin-top:4px;">
<div class="row">
<div class="col-sm-5">
<div style="padding:7px; font-size:10px; color: white; font-family:; text-align:left;">'.ucwords($laddress).', Kushinagar, U.P.</div>
</div>

<div class="col-sm-3">
<iframe src="barcode.php?roll_num='.$roll_number.'" height="50" width="150" scrolling="no" style="text-align:left; color:white; background-color:#ff6600; border:none; position:absolute; margin-left:-70px;"></iframe>    
</div>

<div class="col-sm-4">
<div style="border:35px; background-color:#FF6600; border-top-right-radius:38px;border-top-left-radius:70px; height:75px; width:140px; position:absolute; margin-left:-28px; margin-top:-39px;">
<img src="../../img/prinicipal-sign.jpg" style="height:40px; width:40px; margin-top:17px;">
</div>

<span style="color:black; font-size:12px; position:absolute; margin-left:-30px; margin-top:16px; font-family:verdana;">Principal</span>
</div>
</div>
</div>
</div>

</div>
</center>

</br></br></br>

<div style="text-align:center;"><input type="submit" class="btn btn-primary btn-lg" onclick="printIcard()" value="Print Identity Card"></div>
';
}

?>




</div>

<script>
    function printIcard(){
        var bodyContent = document.body.innerHTML;
        var divContent = document.getElementById("iCard").innerHTML;
        document.body.innerHTML = divContent;
        window.print();
        document.body.innerHTML = bodyContent;
    }
</script>



<?php include"../inc/footer.php";  ?>
