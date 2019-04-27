<?php include"../inc/header.php";  
ob_start();?>

<div class="container">

</br>

<center style="font-family:cursive;"><h2>Welcome to Student Interface</h2></center>
<hr style="height:2px;border:none;color:#333;background-color:#333;">


<?php

$roll_number="";
$roll_number = @$_GET['get_roll_number'];
$my_fee_status = @$_GET['my_fee_status'];


?>


<?php
if(!isset($_GET['get_roll_number']))
echo'</br><h4>Enter The Roll Number Of Student And Get <b>Profile/Fees/Attendence</b> Information On One Click.</h4>';
?>
</br>


<form  class="navbar-form" method="POST" action="">
 <div class="form-group-lg">

<b>Enter Roll Number : </b><input type="text" size="30" class="form-control form-lg" value="<?php  echo $roll_number; ?>" name="roll_no" placeholder="Enter Roll Number">

<input type="submit"  class="btn btn-info btn-lg" value="Submit" name="send">

</div></form>


</br>

<?php

$send = @$_POST['send'];

if($send){

	$roll_no = @$_POST['roll_no'];

	header("location:index.php?get_roll_number=$roll_no");
}

if($roll_number){
    $query = $con->query("SELECT * FROM student_entry WHERE roll_no='$roll_number'");


if($query->num_rows){
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
$gender = $row['gender'];
if($student_photo==""){
if($gender=="male") $student_photo="http://mcskkt.com/img/default_male.png";
else $student_photo="http://mcskkt.com/img/default_female.png";
}

if(!$my_fee_status){

echo'
<hr>
<div class="jumbotron">
<div class="row">

<div class="col-sm-1"></div>
<div class="col-sm-3">

<img height="200" width="200" style="border:2px solid lightgrey; border-radius:10px;" src="'.$student_photo.'">

</div>

<div class="col-sm-3">

<b>Name : </b> '.strtoupper($fname).' '.strtoupper($lname).'</br><br>

<b>Father\'s Name : </b> '.strtoupper($father_name).'</br></br>

<b>Mother\'s Name : </b> '.strtoupper($mother_name).'</br></br>

<b>Date Of Birth : </b> '.$bdate.'/'.$bmonth.'/'.$byear.'</br></br>

<b>Class : </b> '.$present_class.'</br></br>


</div>


<div class="col-sm-2">
<a href="index.php?get_roll_number='.$roll_number.'&my_fee_status=1" class="btn btn-success">My Fees Status </a></br>
</div>

<div class="col-sm-1">
 <a href="student_attendance_info.php?get_roll_number='.$roll_number.'&class='.$present_class.'&name='.strtoupper($fname).' '.strtoupper($lname).'&father_name='.strtoupper($father_name).'&mother_name='.strtoupper($mother_name).'&birthday='.$bdate.'/'.$bmonth.'/'.$byear.'" class="btn btn-primary">My Attendence </a></br>
</div>

</div>

</div
';
}

}
}
else echo "<h2>Sorry ! You Entered Wrong Roll Number.Please Enter Valid Roll Number.</h2>";
}



if($roll_number && $my_fee_status==1){


$query = $con->query("SELECT * FROM student_fees WHERE roll_no='$roll_number' limit 1");

if($query->num_rows>0){

while($row = $query->fetch_assoc()){

$session_year = $row['session_year'];

$apr = $row['apr']; if($apr=="Yes")$apr="<span style='color:green; font-size:20px;' class='glyphicon glyphicon-ok'></span>"; else $apr="<span style='color:red; font-size:20px;' class='glyphicon glyphicon-remove'></span>";
$may = $row['may']; if($may=="Yes")$may="<span style='color:green; font-size:20px;' class='glyphicon glyphicon-ok'></span>"; else $may="<span style='color:red; font-size:20px;' class='glyphicon glyphicon-remove'></span>";
$june = $row['june']; if($june=="Yes")$june ="<span style='color:green; font-size:20px;' class='glyphicon glyphicon-ok'></span>"; else $june="<span style='color:red; font-size:20px;' class='glyphicon glyphicon-remove'></span>";
$july = $row['july']; if($july=="Yes")$july="<span style='color:green; font-size:20px;' class='glyphicon glyphicon-ok'></span>"; else $july="<span style='color:red; font-size:20px;' class='glyphicon glyphicon-remove'></span>";
$aug = $row['aug']; if($aug=="Yes") $aug="<span style='color:green; font-size:20px;' class='glyphicon glyphicon-ok'></span>"; else $aug="<span style='color:red; font-size:20px;' class='glyphicon glyphicon-remove'></span>";
$sep = $row['sep']; if($sep=="Yes")$sep="<span style='color:green; font-size:20px;' class='glyphicon glyphicon-ok'></span>"; else $sep="<span style='color:red; font-size:20px;' class='glyphicon glyphicon-remove'></span>";
$oct = $row['oct']; if($oct=="Yes")$oct="<span style='color:green; font-size:20px;' class='glyphicon glyphicon-ok'></span>"; else $oct="<span style='color:red; font-size:20px;' class='glyphicon glyphicon-remove'></span>";
$nov = $row['nov']; if($nov=="Yes")$nov="<span style='color:green; font-size:20px;' class='glyphicon glyphicon-ok'></span>"; else $nov="<span style='color:red; font-size:20px;' class='glyphicon glyphicon-remove'></span>";
$dece = $row['dece']; if($dece=="Yes")$dece="<span style='color:green; font-size:20px;' class='glyphicon glyphicon-ok'></span>"; else $dece="<span style='color:red; font-size:20px;' class='glyphicon glyphicon-remove'></span>";
$jan = $row['jan']; if($jan=="Yes")$jan="<span style='color:green; font-size:20px;' class='glyphicon glyphicon-ok'></span>"; else $jan="<span style='color:red; font-size:20px;' class='glyphicon glyphicon-remove'></span>";
$feb = $row['feb']; if($feb=="Yes")$feb="<span style='color:green; font-size:20px;' class='glyphicon glyphicon-ok'></span>"; else $feb="<span style='color:red; font-size:20px;' class='glyphicon glyphicon-remove'></span>";
$mar = $row['mar']; if($mar=="Yes")$mar="<span style='color:green; font-size:20px;' class='glyphicon glyphicon-ok'></span>"; else $mar="<span style='color:red; font-size:20px;' class='glyphicon glyphicon-remove'></span>";

$apr_am = $row['apr_am'];
$may_am = $row['may_am'];
$june_am = $row['june_am'];
$july_am = $row['july_am']; 
$aug_am = $row['aug_am'];
$sep_am = $row['sep_am'];
$oct_am = $row['oct_am'];
$nov_am = $row['nov_am'];
$dece_am = $row['dece_am'];
$jan_am = $row['jan_am'];
$feb_am = $row['feb_am'];
$mar_am = $row['mar_am'];



$apr_bus = $row['apr_bus'];
$may_bus = $row['may_bus'];
$june_bus = $row['june_bus'];
$july_bus = $row['july_bus']; 
$aug_bus = $row['aug_bus'];
$sep_bus = $row['sep_bus'];
$oct_bus = $row['oct_bus'];
$nov_bus = $row['nov_bus'];
$dece_bus = $row['dece_bus'];
$jan_bus = $row['jan_bus'];
$feb_bus = $row['feb_bus'];
$mar_bus = $row['mar_bus'];
 

$total1 = $row['apr_am'] + $row['apr_bus']; 
$total2 = $row['may_am'] + $row['may_bus']; 
$total3 = $row['june_am'] + $row['june_bus']; 
$total4 = $row['july_am'] + $row['july_bus']; 
$total5 = $row['aug_am'] + $row['aug_bus']; 
$total6 = $row['sep_am'] + $row['sep_bus']; 
$total7 = $row['oct_am'] + $row['oct_bus']; 
$total8 = $row['nov_am'] + $row['nov_bus']; 
$total9 = $row['dece_am'] + $row['dece_bus']; 
$total10 = $row['jan_am'] + $row['jan_bus']; 
$total11 = $row['feb_am'] + $row['feb_bus']; 
$total12 = $row['mar_am'] + $row['mar_bus']; 



$total = $total1 + $total2 + $total3 + $total4 + $total5 + $total6 + $total7 + $total8 + $total9 + $total10 + $total11 + $total12  ;

if($total==0)$total="00.00 / -";

else{
	if($total[strlen($total)-3]!=".") $total = $total.'.00 / -';
}

if($total1==0)$total1="00.00";

else{
	if($total1[strlen($total1)-3]!=".") $total1 = $total1.'.00';
}

if($total2==0)$total2="00.00";

else{
	if($total2[strlen($total2)-3]!=".") $total2 = $total2.'.00';
}

if($total3==0)$total3="00.00";

else{
	if($total3[strlen($total3)-3]!=".") $total3 = $total3.'.00';
}

if($total4==0)$total4="00.00";

else{
	if($total4[strlen($total4)-3]!=".") $total4 = $total4.'.00';
}

if($total5==0)$total5="00.00";

else{
	if($total5[strlen($total5)-3]!=".") $total5 = $total5.'.00';
}

if($total6==0)$total6="00.00";

else{
	if($total6[strlen($total6)-3]!=".") $total6 = $total6.'.00';
}

if($total7==0)$total7="00.00";

else{
	if($total7[strlen($total7)-3]!=".") $total7 = $total7.'.00';
}

if($total8==0)$total8="00.00";

else{
	if($total8[strlen($total8)-3]!=".") $total8 = $total8.'.00';
}

if($total9==0)$total9="00.00";

else{
	if($total9[strlen($total9)-3]!=".") $total9 = $total9.'.00';
}

if($total10==0)$total10="00.00";

else{
	if($total10[strlen($total10)-3]!=".") $total10 = $total10.'.00';
}

if($total11==0)$total11="00.00";

else{
	if($total11[strlen($total11)-3]!=".") $total11 = $total11.'.00';
}

if($total12==0)$total12="00.00";

else{
	if($total12[strlen($total12)-3]!=".") $total12 = $total12.'.00';
}



$total_am = $apr_am + $may_am + $june_am + $july_am + $aug_am + $sep_am + $oct_am + $nov_am + $dece_am + $jan_am + $feb_am + $mar_am ;
if($total_am==0)$total_am="00.00 / -";
else{
	if($total_am[strlen($total_am)-3]!=".") $total_am = $total_am.'.00 /-';
}

$total_bus = $apr_bus + $may_bus + $june_bus + $july_bus + $aug_bus + $sep_bus + $oct_bus + $nov_bus + $dece_bus + $jan_bus + $feb_bus + $mar_bus ;
if($total_bus==0)$total_bus ="00.00 /-";
else{
	if($total_bus[strlen($total_bus)-3]!=".") $total_bus = $total_bus.'.00 /-';
}

}

echo'
</br>

<b>Name : </b>'.strtoupper($fname).' '.strtoupper($lname).'</br>
<b>Roll Number : </b>'.$roll_number.'</br>
<b>Father\'s Name : </b>'.strtoupper($father_name).'</br>
<b>Class : </b>'.$present_class.'</br>

<hr style="height:2px;border:none;color:#333;background-color:#333;">



<b><div class="row"><div class="col-sm-1"></div><div class="col-sm-2">Month</div><div class="col-sm-2">Fees Status</div><div class="col-sm-2">Ammount</div><div class="col-sm-2">Bus Charge</div><div class="col-sm-2">Monthly Total</div></div></b>

<hr style="height:1px;border:none;color:#333;background-color:#333;">

<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">April</div><div class="col-sm-2">'.$apr.'</div><div class="col-sm-2">'.$apr_am.'</div><div class="col-sm-2">'.$apr_bus.'</div><div class="col-sm-2">'.$total1.'</div></div></br>

<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">May</div><div class="col-sm-2">'.$may.'</div><div class="col-sm-2">'.$may_am.'</div><div class="col-sm-2">'.$may_bus.'</div><div class="col-sm-2">'.$total2.'</div></div></br>

<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">June</div><div class="col-sm-2">'.$june.'</div><div class="col-sm-2">'.$june_am.'</div><div class="col-sm-2">'.$june_bus.'</div><div class="col-sm-2">'.$total3.'</div></div></br>

<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">July</div><div class="col-sm-2">'.$july.'</div><div class="col-sm-2">'.$july_am.'</div><div class="col-sm-2">'.$july_bus.'</div><div class="col-sm-2">'.$total4.'</div></div></br>

<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">August</div><div class="col-sm-2">'.$aug.'</div><div class="col-sm-2">'.$aug_am.'</div><div class="col-sm-2">'.$aug_bus.'</div><div class="col-sm-2">'.$total5.'</div></div></br>

<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">September</div><div class="col-sm-2">'.$sep.'</div><div class="col-sm-2">'.$sep_am.'</div><div class="col-sm-2">'.$sep_bus.'</div><div class="col-sm-2">'.$total6.'</div></div></br>

<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">Octomber</div><div class="col-sm-2">'.$oct.'</div><div class="col-sm-2">'.$oct_am.'</div><div class="col-sm-2">'.$oct_bus.'</div><div class="col-sm-2">'.$total7.'</div></div></br>

<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">November</div><div class="col-sm-2">'.$nov.'</div><div class="col-sm-2">'.$nov_am.'</div><div class="col-sm-2">'.$nov_bus.'</div><div class="col-sm-2">'.$total8.'</div></div></br>

<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">December</div><div class="col-sm-2">'.$dece.'</div><div class="col-sm-2">'.$dece_am.'</div><div class="col-sm-2">'.$dece_bus.'</div><div class="col-sm-2">'.$total9.'</div></div></br>

<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">January</div><div class="col-sm-2">'.$jan.'</div><div class="col-sm-2">'.$jan_am.'</div><div class="col-sm-2">'.$jan_bus.'</div><div class="col-sm-2">'.$total10.'</div></div></br>

<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">February</div><div class="col-sm-2">'.$feb.'</div><div class="col-sm-2">'.$feb_am.'</div><div class="col-sm-2">'.$feb_bus.'</div><div class="col-sm-2">'.$total11.'</div></div></br>

<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">March</div><div class="col-sm-2">'.$mar.'</div><div class="col-sm-2">'.$mar_am.'</div><div class="col-sm-2">'.$mar_bus.'</div><div class="col-sm-2">'.$total12.'</div></div></br>

<hr style="height:1px;border:none;color:#333;background-color:#333;">

<b><div class="row"><div class="col-sm-1"></div><div class="col-sm-2" style="font-size:30px; font-weight:bold; margin-top:-10px;">Total</div><div class="col-sm-2"></div><div class="col-sm-2">'.$total_am.'</div><div class="col-sm-2">'.$total_bus.'</div><div class="col-sm-2">'.$total.'</div></div></b>

<hr style="height:1px;border:none;color:#333;background-color:#333;">
';

}

else echo'<hr style="height:1px;border:none;color:#333;background-color:#333;">
<h2>Sorry ! Either Your Fess Data Is not Uploaded Or No Student Of This Roll Number Is Exist.</h2>';



}




?>







</div>

<?php 

ob_end_flush();

include"../inc/footer.php";  ?>
