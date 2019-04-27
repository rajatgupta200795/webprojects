<?php include"../inc/header.php";  

echo"</br></br>";

 include"./inc/admin_header.php";  

ob_start();

if(!isset($_COOKIE['user_login']))
header("location:../");



if(date("m") == "4"   ||  date("m") =="5"   ||  date("m") =="6"   ||  date("m") == "7"  ||  date("m") =="8"   ||  date("m") == "8"  ||  date("m") == "9"  ||  
	date("m") == "10"  || date("m") == "11"  || date("m") == "12")
	$session_year = date("Y")."-".(date("Y")+1);

else $session_year = (date("Y")-1)	."-".date("Y");

$check_session = $session_year;

if(isset($_GET['session_year']))$session_year = $_GET['session_year'];

$error = "";

$apr = "No";
$may = "No";
$june = "No";
$july = "No";
$aug = "No";
$sep = "No";
$oct = "No";
$nov = "No";
$dece = "No";
$jan = "No";
$feb = "No";
$mar = "No";

$apr_am = "00.00";
$may_am = "00.00";
$june_am = "00.00";
$july_am = "00.00";
$aug_am = "00.00";
$sep_am = "00.00";
$oct_am = "00.00";
$nov_am = "00.00";
$dece_am = "00.00";
$jan_am = "00.00";
$feb_am = "00.00";
$mar_am = "00.00";

$apr_bus = "00.00";
$may_bus = "00.00";
$june_bus = "00.00";
$july_bus = "00.00";
$aug_bus = "00.00";
$sep_bus = "00.00";
$oct_bus = "00.00";
$nov_bus = "00.00";
$dece_bus = "00.00";
$jan_bus = "00.00";
$feb_bus = "00.00";
$mar_bus = "00.00";


$total1 = "00.00";
$total2 = "00.00";
$total3 = "00.00";
$total4 = "00.00";
$total5 = "00.00";
$total6 = "00.00";
$total7 = "00.00";
$total8 = "00.00";
$total9 = "00.00";
$total10 = "00.00";
$total11 = "00.00";
$total12 = "00.00";

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

}
}


if($get_roll_number){
$query = $con->query("SELECT * FROM student_fees WHERE roll_no='$get_roll_number' and session_year='$session_year' limit 1");

if($query->num_rows){

	$user_exist = 1;

while($row = $query->fetch_assoc()){

$session_year = $row['session_year'];

$apr = $row['apr'];
$may = $row['may'];
$june = $row['june'];
$july = $row['july'];
$aug = $row['aug'];
$sep = $row['sep'];
$oct = $row['oct'];
$nov = $row['nov'];
$dece = $row['dece'];
$jan = $row['jan'];
$feb = $row['feb'];
$mar = $row['mar'];

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


}
} else  $error ='</br><div class="jumbotron"><h4>Opppppsss ! Either The Student Was Not Exist In Our School Or Data Was Not Uploaded At That Time.</br>Please Enter Valid Session Year</h4></div>';
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

$total = $total1 + $total2 + $total3 + $total4 + $total5 + $total6 + $total7 + $total8 + $total9 + $total10 + $total11 + $total12  ;

if($total==0)$total="00.00";

else{
	if($total[strlen($total)-3]!=".") $total = $total.'.00 / -';
}

?>

</br>


<div class="container">

<div class="row"><div class="col-sm-4"></div><div class="col-sm-4" style="font-size:30px;"><b style="margin-left:50px;">Student Fees Feed</b></div>
<div class="col-sm-4">
	<form  class="navbar-form" method="POST" action="" enctype="multipart/form-data">
 <div class="form-group-sm">
<b style="font-size:17px;" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-list"></span> Sesseion </b>
<select class="form-control" name="manual_session">
    <option><?php echo $session_year; ?></option>
    <?php for($i=date("Y");$i>=(date("Y")-12);$i--)
	echo'<option>'.$i.'-'.($i+1).'</option>';
	?>
</select> <input type="submit" value="Go" class="btn btn-info btn-sm" name="go">
</div>
</form>	
</div>
</div>

<?php

$manual_session = $session_year;
if(@$_POST['go']){ 

    $manual_session = $_POST['manual_session'];
	header("location:student_fees_feed.php?get_roll_number=$get_roll_number&session_year=$manual_session");}
?>

<hr style="height:1px;border:none;color:#333;background-color:#333;">

<div class="row"><div class="col-sm-3">
<b>Name : </b><?php echo strtoupper($fname)." ".strtoupper($lname);?></br>
<b>Roll Number : </b><?php echo $roll_number;?></br>
<b>Class : </b><?php echo $present_class; ?>
</div>
<div class="col-sm-6">


</div>
<div class="col-sm-3">
<a href="student_fees_feed.php?delete=&get_roll_number=<?php echo $get_roll_number; ?>" class="btn btn-danger">
<span class="glyphicon glyphicon-trash"></span> Reset All Fees Data</a>

</div>
</div>



<?php

if(isset($_GET['delete'])) 
echo'</br><hr><center><div class="jumbotron">
By Clicking On Yes Button All The Fees Data Of Student <b>'.strtoupper($fname).' '.strtoupper($lname).'</b> Will Be Deleted.</br></br>
Do You Really Want To Reset All Student Fees Data.  
<a href="student_fees_feed.php?delete_confirm=&get_roll_number='.$get_roll_number.'" class="btn btn-default"><span class="glyphicon glyphicon-ok"></span> Yes<a> 
<a href="student_fees_feed.php?&get_roll_number=<?php echo $get_roll_number; ?>" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> No</span></a>

</div></center>';


if(isset($_GET['delete_confirm'])) {
echo'</br></br><div class="jumbotron">';


$query = $con->query("DELETE from student_fees where roll_no = '$get_roll_number' ");

echo "You Successfully Reset The Fees Data Of <b>".strtoupper($fname)." ".strtoupper($lname)."</b>";

echo'</div>';


}
?>


<hr>

<center><h2>Session <?php echo$session_year; ?> Fees Data</h2></center>

<hr style="height:1px;border:none;color:#333;background-color:#333;">


<?php

if($error!="" && $session_year!=$check_session){
	echo $error.'<hr>';
}

?>

<div class="row">

	<div class="col-sm-1"></div>
	<div class="col-sm-2" style="font-size:16px; font-weight:bold;">Month</div>
	<div class="col-sm-2" style="font-size:16px;font-weight:bold;">Fees Status</div>
	<div class="col-sm-2" style="font-size:16px;  margin-left:-80px; font-weight:bold;">Fees Ammount</div>
	<div class="col-sm-3" style="font-size:16px; font-weight:bold;">Bus Charge</div>
	<div class="col-sm-2" style="font-size:16px;  margin-left:-50px; font-weight:bold;">Monthly Total</div>

</div>

<hr style="height:2px;border:none;color:#333;background-color:#333;">

<form  class="navbar-form" method="POST" action="">
 <div class="form-group-sm">

<div class="row">

	<div class="col-sm-1"></div>
	<div class="col-sm-2"><b>April</b></div>
	<div class="col-sm-1">
		<select name="apr" class="form-control">
			<option><?php echo $apr; ?></option>
			<option>Yes</option>
			<option>No</option>
		</select>
	</div>
	<div class="col-sm-2"><input class="form-control" size="10" type="text" name="apr_am" value="<?php echo $apr_am; ?>"></div>
	<div class="col-sm-3"><input class="form-control" size="10" type="text" name="apr_bus" value="<?php echo $apr_bus; ?>"></div>
	<div class="col-sm-2"><?php echo $total1 ; ?></div>

</div>
</br>

<div class="row">

	<div class="col-sm-1"></div>
	<div class="col-sm-2"><b>May</b></div>
	<div class="col-sm-1">
		<select name="may" class="form-control">
			<option><?php echo $may; ?></option>
			<option>Yes</option>
			<option>No</option>
		</select>
	</div>
	<div class="col-sm-2"><input class="form-control" size="10" type="text" name="may_am" value="<?php echo $may_am; ?>"></div>
	<div class="col-sm-3"><input class="form-control" size="10" type="text" name="may_bus" value="<?php echo $may_bus; ?>"></div>
	<div class="col-sm-2"><?php echo $total2 ;?></div>

</div>

</br>

<div class="row">

	<div class="col-sm-1"></div>
	<div class="col-sm-2"><b>June</b></div>
	<div class="col-sm-1">
		<select name="june" class="form-control">
			<option><?php echo $june; ?></option>
			<option>Yes</option>
			<option>No</option>
		</select>
	</div>
	<div class="col-sm-2"><input class="form-control" size="10" type="text" name="june_am" value="<?php echo $june_am; ?>"></div>
	<div class="col-sm-3"><input class="form-control" size="10" type="text" name="june_bus" value="<?php echo $june_bus; ?>"></div>
	<div class="col-sm-2"><?php echo $total3 ; ?></div>

</div>

</br>

<div class="row">

	<div class="col-sm-1"></div>
	<div class="col-sm-2"><b>July</b></div>
	<div class="col-sm-1">
		<select name="july" class="form-control">
			<option><?php echo $july; ?></option>
			<option>Yes</option>
			<option>No</option>
		</select>
	</div>
	<div class="col-sm-2"><input class="form-control" size="10" type="text" name="july_am" value="<?php echo $july_am; ?>"></div>
	<div class="col-sm-3"><input class="form-control" size="10" type="text" name="july_bus" value="<?php echo $july_bus; ?>"></div>
	<div class="col-sm-2"><?php echo $total4 ; ?></div>

</div>

</br>

<div class="row">

	<div class="col-sm-1"></div>
	<div class="col-sm-2"><b>August</b></div>
	<div class="col-sm-1">
		<select name="aug" class="form-control">
			<option><?php echo $aug; ?></option>
			<option>Yes</option>
			<option>No</option>
		</select>
	</div>
	<div class="col-sm-2"><input class="form-control" size="10" type="text" name="aug_am" value="<?php echo $aug_am; ?>"></div>
	<div class="col-sm-3"><input class="form-control" size="10" type="text" name="aug_bus" value="<?php echo $aug_bus; ?>"></div>
	<div class="col-sm-2"><?php echo $total5 ; ?></div>

</div>

</br>

<div class="row">

	<div class="col-sm-1"></div>
	<div class="col-sm-2"><b>September</b></div>
	<div class="col-sm-1">
		<select name="sep" class="form-control">
			<option><?php echo $sep; ?></option>
			<option>Yes</option>
			<option>No</option>
		</select>
	</div>
	<div class="col-sm-2"><input class="form-control" size="10" type="text" name="sep_am" value="<?php echo $sep_am; ?>"></div>
	<div class="col-sm-3"><input class="form-control" size="10" type="text" name="sep_bus" value="<?php echo $sep_bus; ?>"></div>
	<div class="col-sm-2"><?php echo $total6 ; ?></div>

</div>

</br>

<div class="row">

	<div class="col-sm-1"></div>
	<div class="col-sm-2"><b>October</b></div>
	<div class="col-sm-1">
		<select name="oct" class="form-control">
			<option><?php echo $oct; ?></option>
			<option>Yes</option>
			<option>No</option>
		</select>
	</div>
	<div class="col-sm-2"><input class="form-control" size="10" type="text" name="oct_am" value="<?php echo $oct_am; ?> "></div>
	<div class="col-sm-3"><input class="form-control" size="10" type="text" name="oct_bus" value="<?php echo $oct_bus; ?>"></div>
	<div class="col-sm-2"><?php echo $total7 ; ?></div>

</div>

</br>

<div class="row">

	<div class="col-sm-1"></div>
	<div class="col-sm-2"><b>November</b></div>
	<div class="col-sm-1">
		<select name="nov" class="form-control">
			<option><?php echo $nov; ?></option>
			<option>Yes</option>
			<option>No</option>
		</select>
	</div>
	<div class="col-sm-2"><input class="form-control" size="10" type="text" name="nov_am" value="<?php echo $nov_am; ?> "></div>
	<div class="col-sm-3"><input class="form-control" size="10" type="text" name="nov_bus" value="<?php echo $nov_bus; ?>"></div>
	<div class="col-sm-2"><?php echo $total8 ;?></div>

</div>

</br>

<div class="row">

	<div class="col-sm-1"></div>
	<div class="col-sm-2"><b>December</b></div>
	<div class="col-sm-1">
		<select name="dece" class="form-control">
			<option><?php echo $dece; ?></option>
			<option>Yes</option>
			<option>No</option>
		</select>
	</div>
	<div class="col-sm-2"><input class="form-control" size="10" type="text" name="dece_am" value="<?php echo $dece_am; ?> "></div>
	<div class="col-sm-3"><input class="form-control" size="10" type="text" name="dece_bus" value="<?php echo $dece_bus; ?>"></div>
	<div class="col-sm-2"><?php echo $total9 ; ?></div>

</div>

</br>

<div class="row">

	<div class="col-sm-1"></div>
	<div class="col-sm-2"><b>January</b></div>
	<div class="col-sm-1">
		<select name="jan" class="form-control">
			<option><?php echo $jan; ?></option>
			<option>Yes</option>
			<option>No</option>
		</select>
	</div>
	<div class="col-sm-2"><input class="form-control" size="10" type="text" name="jan_am" value="<?php echo $jan_am; ?> "></div>
	<div class="col-sm-3"><input class="form-control" size="10" type="text" name="jan_bus" value="<?php echo $jan_bus; ?>"></div>
	<div class="col-sm-2"><?php echo $total10 ; ?></div>

</div>

</br>

<div class="row">

	<div class="col-sm-1"></div>
	<div class="col-sm-2"><b>february</b></div>
	<div class="col-sm-1">
		<select name="feb" class="form-control">
			<option><?php echo $feb; ?></option>
			<option>Yes</option>
			<option>No</option>
		</select>
	</div>
	<div class="col-sm-2"><input class="form-control" size="10" type="text" name="feb_am" value="<?php echo $feb_am; ?> "></div>
	<div class="col-sm-3"><input class="form-control" size="10" type="text" name="feb_bus" value="<?php echo $feb_bus; ?>"></div>
	<div class="col-sm-2"><?php echo $total11 ; ?></div>

</div>

</br>

<div class="row">

	<div class="col-sm-1"></div>
	<div class="col-sm-2"><b>March</b></div>
	<div class="col-sm-1">
		<select name="mar" class="form-control">
			<option><?php echo $mar; ?></option>
			<option>Yes</option>
			<option>No</option>
		</select>
	</div>
	<div class="col-sm-2"><input class="form-control" size="10" type="text" name="mar_am" value="<?php echo $mar_am; ?>" ></div>
	<div class="col-sm-3"><input class="form-control" size="10" type="text" name="mar_bus" value="<?php echo $mar_bus; ?>"></div>
	<div class="col-sm-2"><?php echo $total12 ; ?></div>

</div>

<hr style="height:1px;border:none;color:#333;background-color:#333;">

<div class="row">

	<div class="col-sm-1"></div>
	<div class="col-sm-3" style="font-size:20px; font-weight:bold;">TOTAL</div>
	<div class="col-sm-5"></div>
	<div class="col-sm-2"><b><?php  echo $total;  ?></b></div>

</div>

<hr style="height:1px;border:none;color:#333;background-color:#333;">

</br>
</br>


<div class="row">
	<div class="col-sm-9"></div>
	<div class="col-sm-1">
		<input type="submit" value="Submit" class="btn btn-info" name="send">
	</div>
		<div class="col-sm-2">
		<input type="submit" value=" Print" class="btn btn-default" name="fees_print">
	</div>
</div>

</div></div></div></form>

</div>


<?php


$fees_print = @$_POST['fees_print'];

if($fees_print){
	echo'<script type="text/javascript"> var url = "fees_print.php?get_roll_number='.$get_roll_number.'&session_year='.$manual_session.'"; 
	 window.open(url); 
	</script>';

}


$send = @$_POST['send'];
if($send){

$apr = $_POST['apr'];
$may = $_POST['may'];
$june = $_POST['june'];
$july = $_POST['july'];
$aug = $_POST['aug'];
$sep = $_POST['sep'];
$oct = $_POST['oct'];
$nov = $_POST['nov'];
$dece = $_POST['dece'];
$jan = $_POST['jan'];
$feb = $_POST['feb'];
$mar = $_POST['mar'];

$apr_am = $_POST['apr_am'];
$may_am = $_POST['may_am'];
$june_am = $_POST['june_am'];
$july_am = $_POST['july_am'];
$aug_am = $_POST['aug_am'];
$sep_am = $_POST['sep_am'];
$oct_am = $_POST['oct_am'];
$nov_am = $_POST['nov_am'];
$dece_am = $_POST['dece_am'];
$jan_am = $_POST['jan_am'];
$feb_am = $_POST['feb_am'];
$mar_am = $_POST['mar_am'];


$apr_bus = $_POST['apr_bus'];
$may_bus = $_POST['may_bus'];
$june_bus = $_POST['june_bus'];
$july_bus = $_POST['july_bus'];
$aug_bus = $_POST['aug_bus'];
$sep_bus = $_POST['sep_bus'];
$oct_bus = $_POST['oct_bus'];
$nov_bus = $_POST['nov_bus'];
$dece_bus = $_POST['dece_bus'];
$jan_bus = $_POST['jan_bus'];
$feb_bus = $_POST['feb_bus'];
$mar_bus = $_POST['mar_bus'];


if($user_exist!=1){
$query = $con->query("INSERT INTO student_fees (roll_no , session_year , apr , apr_am , may , may_am , june , june_am , july , july_am , aug , aug_am , sep , sep_am , oct , oct_am , nov , nov_am , dece , dece_am , jan ,jan_am , feb ,feb_am , mar , mar_am , apr_bus , may_bus  , june_bus  , july_bus , aug_bus , sep_bus, oct_bus , nov_bus , dece_bus ,jan_bus , feb_bus , mar_bus ) values ('$get_roll_number' , '$session_year' , '$apr' , '$apr_am' , '$may', '$may_am ' , '$june ' , '$june_am ' , '$july' , '$july_am' , '$aug' , '$aug_am' , '$sep' , '$sep_am' , '$oct' , '$oct_am' , 
	'$nov' , '$nov_am' , '$dece' , '$dece_am' , '$jan' ,'$jan_am' , '$feb' , '$feb_am' , '$mar' , '$mar_am' , '$apr_bus' , '$may_bus'  , '$june_bus'  , '$july_bus' , '$aug_bus' , '$sep_bus' , '$oct_bus' , '$nov_bus' , '$dece_bus' , '$jan_bus' , '$feb_bus' , '$mar_bus')");

}

else {

$query = $con->query("UPDATE student_fees set roll_no = '$get_roll_number', session_year = '$session_year' , apr = '$apr' , apr_am = '$apr_am' , may = '$may' , may_am = '$may_am' , june = '$june' , june_am = '$june_am' , july = '$july' , july_am = '$july_am' , aug = '$aug' , aug_am = '$aug_am' , sep = '$sep' , sep_am = '$sep_am' , oct = '$oct' , oct_am = '$oct_am' , nov = '$nov' , nov_am = '$nov_am' , dece = '$dece' , dece_am = '$dece_am' , jan = '$jan' , jan_am = '$jan_am' , feb = '$feb' , feb_am = '$feb_am' , mar = '$mar' , mar_am = '$mar_am' ,  apr_bus = '$apr_bus', may_bus = '$may_bus' , june_bus = '$june_bus', july_bus = '$july_bus' , aug_bus = '$aug_bus' , sep_bus = '$sep_bus' , oct_bus = '$oct_bus' , nov_bus = '$nov_bus'  , dece_bus = '$dece_bus', jan_bus = '$jan_bus' , feb_bus = '$feb_bus', mar_bus = '$mar_bus' where roll_no = '$get_roll_number' ");


}

header("location:student_fees_feed.php?get_roll_number=$get_roll_number&session_year=$manual_session");
exit();

}


ob_end_flush();
 include"../inc/footer.php";  ?>
