<?php include"../inc/header.php";  


echo"</br></br>";

 include"./inc/admin_header.php"; 

if(!isset($_COOKIE['user_login']))
header("location:../");


$get_class_name = $_GET['class'];
$awe = "";


if(date("m") == "4"   ||  date("m") =="5"   ||  date("m") =="6"   ||  date("m") == "7"  ||  date("m") =="8"   ||  date("m") == "8"  ||  date("m") == "9"  ||  
	date("m") == "10"  || date("m") == "11"  || date("m") == "12")
	$session_year = date("Y")."-".(date("Y")+1);

else $session_year = (date("Y")-1)	."-".date("Y");

if(!isset($_get['get_this_month_record'])){
if(date("m")=="1") {$month = "january"; $month_days="31"; }
if(date("m")=="2") {$month = "february"; if(date("y")%4!=0)$month_days="28"; else $month_days="29"; }
if(date("m")=="3") {$month = "march"; $month_days="31"; }
if(date("m")=="4") {$month = "april"; $month_days="30"; }
if(date("m")=="5") {$month = "may"; $month_days="31"; }
if(date("m")=="6") {$month = "june"; $month_days="30"; }
if(date("m")=="7") {$month = "july"; $month_days="31"; }
if(date("m")=="8") {$month = "august"; $month_days="31"; }
if(date("m")=="9") {$month = "september"; $month_days="30"; }
if(date("m")=="10") {$month = "october"; $month_days="31"; }
if(date("m")=="11") {$month = "november"; $month_days="30"; }
if(date("m")=="12") {$month = "december"; $month_days="31"; }
}


if(isset($_GET['get_this_month_record'])){
	$month = $_GET['get_this_month_record'];

	if($month == "january") $month_days="31"; 
if($month == "february") if(date("y")%4!=0)$month_days="28"; else $month_days="29"; 
if($month == "march") $month_days="31"; 
if($month == "april") $month_days="30"; 
if($month == "may") $month_days="31"; 
if($month == "june") $month_days="30"; 
if($month == "july")$month_days="31"; 
if($month == "august") $month_days="31"; 
if($month == "september") $month_days="30"; 
if($month == "october") $month_days="31"; 
if($month == "november") $month_days="30"; 
if($month == "december") $month_days="31"; 

}




if(isset($_GET['add_first_time'])){

$query=$con->query("SELECT * from student_entry where  present_class='$get_class_name' ");
if($query->num_rows>0 ){
while($row=$query->fetch_assoc()){

$name = $row['first_name']." ".$row['last_name'];
$session_year = $session_year;
$present_class = $row['present_class'];
$roll_no = $row['roll_no'];

$query1=$con->query("INSERT into student_attendance (name , roll_no , month , present_class , session_year) values ('$name' , '$roll_no' , '$month' , '$present_class' , '$session_year') ");

header("location:student_attendance.php?class=$get_class_name&get_this_month_record=$month");
}
}else $awe="<h4>Sorry ! No Student Exist In Class ".$get_class_name." Please Enter Student Data click <a href='new_student.php'>here</a>.</h4>";

}



if(isset($_GET['add_new_student']) && isset($_GET['present_student_number'])){

$query=$con->query("SELECT * from student_entry where  present_class='$get_class_name' order by id ASC");
if($query->num_rows>0 && ($query->num_rows)-($_GET['present_student_number'])>0){
$count=0;
while($row=$query->fetch_assoc()){
$count++;
if($count>$_GET['present_student_number']){
$name = $row['first_name']." ".$row['last_name'];
$session_year = $session_year;
$present_class = $row['present_class'];
$roll_no = $row['roll_no'];

$query1=$con->query("INSERT into student_attendance (name , roll_no , month , present_class , session_year) values ('$name' , '$roll_no' , '$month' , '$present_class' , '$session_year') ");
}

} echo'<script>alert("New Students List Has Been Updated.");</script>';
header("location:student_attendance.php?class=$get_class_name&get_this_month_record=$month");
}else echo"<script> alert('Sorry ! No New Student Exist In This Class.');</script>";

}



if(isset($_GET['reset_all_attendance_record'])){

echo'</br><hr><center><div class="jumbotron">
By Clicking On Yes Button All The Attendance Record Of Class <b>'.$get_class_name.'</b> Will Be Deleted.</br></br>
Do You Really Want To Reset Attendance Record.  
<a href="student_attendance.php?class='.$get_class_name.'&reset_all_attendance_record_confirm_by_admin=true&get_this_month_record='.$month.'" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-ok"></span> Yes</a> 
<a href="student_attendance.php?class='.$get_class_name.'&get_this_month_record='.$month.'" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> No</span></a>

</div></center>';
}





if(isset($_GET['reset_all_attendance_record_confirm_by_admin'])){

$query=$con->query("DELETE from student_attendance where present_class='$get_class_name' and session_year='$session_year' and month='$month' ");

if($query){
echo'<script>alert("You Successfully Deleted The All '.strtoupper($month).'\'s Attendance Record Of Class '.$get_class_name.'.");</script>';
}
}

?>





<div class="container-fluid">

<div class="row"><div class="col-sm-4"></div><div class="col-sm-5" style="font-size:35px;"> Student Daily Attendance</div></div>

<hr style="height:2px;border:none;color:#333;background-color:#333;">



<div class="row" style="font-family:cursive;"><div class="col-sm-0"></div><div class="col-sm-2" style="font-size:20px;"><Button class="btn btn-info" >Session</Button> : <?php  echo $session_year; ?></div><div class="col-sm-6" style="font-size:20px;"><Button class="btn btn-success" >Month</Button> : <?php  echo strtoupper($month); ?></div><div class="col-sm-2" style="font-size:20px;"><Button class="btn btn-primary" >Class</Button> : <?php  echo $get_class_name; ?></div><div class="col-sm-2" style="font-size:20px;"><Button class="btn btn-danger" >Date</Button> : <?php  echo date("d/m/y"); ?></div></div>
	
<hr>	

<form  class="navbar-form" method="POST" action="">
 <div class="form-group-sm">

<table style="font-family:serif; border-collapse:collapse; width: 100%;">
	<tr>
		<th style="border:2px solid black; text-align:center; padding:8px; background-color: #778899; color:white; width: 15%;">Name</th>
	<?php
	for($i=1;$i<=$month_days;$i++){

$bgc = "#778899";
$clr = "white";

//if($i<date("d")) {$bgc="green"; $clr="white";}
//if($i==date("d")) {$bgc="red"; $clr="white";}

echo' <th style="border: 2px solid black; text-align:center; background-color: '.$bgc.'; color:'.$clr.';   padding:8px; width:30px;""> '.$i.' </th> ';

}

?>
	</tr>
</table>


<?php

$m[][]=0;
$j=0;
$query=$con->query("SELECT * from student_attendance where present_class='$get_class_name' and month='$month' and session_year='$session_year' order by name");
if($query->num_rows>0){
while($row=$query->fetch_assoc()){
	$j++;

echo'
<table style="font-family:serif; border-collapse:collapse; width: 100%;">
	<tr>
		<td style="border:1px solid black; text-align:left; padding:8px; background-color: ; color:; width: 15%;"><b>'.$j.'. '.strtoupper($row['name']).' </b>
			</b></td>';
	
for($i=01;$i<=$month_days;$i++){

$bgc = "";
$clr = "";

if($i<date("d")) {$bgc="green"; $clr="white";}
if($i==date("d")) {$bgc="red"; $clr="white";}

if($row['date_'.$i.'']=="P")$ischeck="checked"; else $ischeck="";

$date = date("d");
settype($date, "integer");
if($date[0]=='0') {$date[0]=$date[1]; unset($date[1]);} 
if($date==$i && $row['date_'.$i.'']!="A") {$row['date_'.$i.'']="P";  if($row['date_'.$i.'']=="P")$ischeck="checked"; else $ischeck="";   }
echo'<td style="border: 2px solid black; text-align:center;  background-color: '.$bgc.'; color:'.$clr.';  padding:8px; width:30px;"><input class="form-control" type="checkbox" name="'.$j.''.$i.'" '.$ischeck.'></td>';

//echo $j.''.$i.''.gettype($j).'</br>';
}


echo'<input type="hidden" name="strength" value="'.$j.'">
	</tr>
</table>
';

}
}
else{
    if(isset($_GET['add_first_time'])==false)
	echo"<div class='jumbotron'><center><h2>Sorry ! No Student Exist In Class ".$get_class_name."</h2>
    <a href='student_attendance.php?class=".$get_class_name."&add_first_time=true&get_this_month_record=".$month."' class='btn btn-default btn-sm'><span class='glyphicon glyphicon-plus'></span> Add All Student Of Class ".$get_class_name."<span class='glyphicon glyphicon-user'></span><span class='glyphicon glyphicon-user'></span></a></center>
    	</div></br>";
	else echo $awe;
}








echo'</br></br>
<div class="row"><div class="col-sm-10"></div><div class="col-sm-2"><input type="submit"  value="Submit" class="btn btn-info" name="update"></div></div>

</div>
</form>
</br></br>';


if(strtolower($month)!="april")
echo'<a href="student_attendance.php?class='.$get_class_name.'&get_this_month_record=april" class="btn btn-default btn-sm">April</a> ';
if(strtolower($month)!="may")
echo'<a href="student_attendance.php?class='.$get_class_name.'&get_this_month_record=may" class="btn btn-default btn-sm">May</a> ';
if(strtolower($month)!="june")
echo'<a href="student_attendance.php?class='.$get_class_name.'&get_this_month_record=june" class="btn btn-default btn-sm">June</a> ';
if(strtolower($month)!="july")
echo'<a href="student_attendance.php?class='.$get_class_name.'&get_this_month_record=july" class="btn btn-default btn-sm">July</a> ';
if(strtolower($month)!="august")
echo'<a href="student_attendance.php?class='.$get_class_name.'&get_this_month_record=august" class="btn btn-default btn-sm">August</a> ';
if(strtolower($month)!="september")
echo'<a href="student_attendance.php?class='.$get_class_name.'&get_this_month_record=september" class="btn btn-default btn-sm">September</a> ';
if(strtolower($month)!="october")
echo'<a href="student_attendance.php?class='.$get_class_name.'&get_this_month_record=october" class="btn btn-default btn-sm">October</a> ';
if(strtolower($month)!="november")
echo'<a href="student_attendance.php?class='.$get_class_name.'&get_this_month_record=november" class="btn btn-default btn-sm">November</a> ';
if(strtolower($month)!="december")
echo'<a href="student_attendance.php?class='.$get_class_name.'&get_this_month_record=december" class="btn btn-default btn-sm">December</a> ';
if(strtolower($month)!="january")
echo'<a href="student_attendance.php?class='.$get_class_name.'&get_this_month_record=january" class="btn btn-default btn-sm">January</a> ';
if(strtolower($month)!="february")
echo'<a href="student_attendance.php?class='.$get_class_name.'&get_this_month_record=february" class="btn btn-default btn-sm">February</a> ';
if(strtolower($month)!="march")
echo'<a href="student_attendance.php?class='.$get_class_name.'&get_this_month_record=march" class="btn btn-default btn-sm">March</a> ';



echo'</br></br><a href="student_attendance.php?class='.$get_class_name.'&add_new_student=true&present_student_number='.$j.'&get_this_month_record='.$month.'"  class="btn btn-default btn-sm"><span class="glyphicon glyphicon-plus"></span> Add New Student <span class="glyphicon glyphicon-user"></span></a>
</br></br>
<div class="row"><div class="col-sm-10"></div><div class="col-sm-2"><a href="student_attendance.php?class='.$get_class_name.'&reset_all_attendance_record=true&get_this_month_record='.$month.'"  class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Reset All Attendance Record </a></div></div>
';		



$update = @$_POST['update'];
if($update){

$date = date("d");
settype($date, "integer");
if($date[0]=='0') {$date[0]=$date[1]; unset($date[1]);}

$query=$con->query("SELECT * from student_attendance where present_class='$get_class_name' and session_year='$session_year' and month = '$month' order by name ASC ");
if($query->num_rows>0){
	$j=0;
while($row=$query->fetch_assoc()){
	$j++;
	$name = $row['name'];

 $att=$j.''.$date;

 settype($att,"integer"); 
 

 if(isset($_POST[$att]) && $_POST[$att]=="on")$att="P"; else $att="A";


 echo$att.' '.@$_POST[$j.''.$date].'</br>';





$query1 = "UPDATE student_attendance set date_".$date." = '".$att."' where name = '".$name."' and  present_class='".$get_class_name."' and session_year='".$session_year."' and month = '".$month."'";

//echo $query1;

$query1=$con->query($query1);

}

if($query1)
	header("location:student_attendance.php?class=$get_class_name&get_this_month_record=$month");

}


}

?>



</div>

	<hr style="height:2px;border:none;color:#333;background-color:#333;">



<?php // include"../inc/footer.php";  ?>
