<?php include"../inc/header.php";  
ob_start();?>

<div class="container">
</br></br>

<div style="font-size:30px; text-align:center;" >My Attendance Status</div>

<hr style="height:2px;border:none;color:#333;background-color:#333;">
	
<?php

$roll_number="";
$roll_number = @$_GET['get_roll_number'];
$get_present_class = @$_GET['class'];


if(date("m") == "4"   ||  date("m") =="5"   ||  date("m") =="6"   ||  date("m") == "7"  ||  date("m") == "8"  ||  date("m") == "9"  ||  
	date("m") == "10"  || date("m") == "11"  || date("m") == "12")
	$session_year = date("Y")."-".(date("Y")+1);

else $session_year = (date("Y")-1)	."-".date("Y");

$check_session = $session_year;




echo'
<div class="row">

<div class="col-sm-1"></div>

<div class="col-sm-6">

<b>Name : </b> '.$_GET['name'].'</br>
<b>Roll Number : </b> '.$roll_number.'</br>
<b>Father\'s Name : </b> '.$_GET['father_name'].'</br>
<b>Class : </b> '.$get_present_class.'</br>
</br>


</div>


<div class="col-sm-2">
</div>

<div class="col-sm-1">
 <a href="index.php?get_roll_number='.$roll_number.'&class='.$get_present_class.'" class="btn btn-default">Go back </a>
</div>

</div>

<hr style="height:1px;border:none;color:#333;background-color:lightgrey;">





<center><div class="btn btn-primary" style="font-size:25px;" >Session '.$session_year.'</div></center>

<hr style="height:2px;border:none;color:#333;background-color:#333;">



';




$query=$con->query("SELECT * from student_attendance where present_class='$get_present_class' and roll_no='$roll_number' and session_year='$session_year' order by id ASc");
if($query->num_rows>0){
	$j=0;
while($row=$query->fetch_assoc()){
	$j++;


	
	$month = $row['month'];

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




echo'<table style="font-family:serif; border-collapse:collapse; width: '; if($month_days=="30")echo'97%'; elseif($month_days=="31")echo'100%';else echo'92%'; echo';">
	<tr>
		<th style="border:2px solid black; text-align:center; padding:8px; background-color: #778899; color:white; width: 12%;">Month</th>';
	
	for($i=1;$i<=$month_days;$i++){

$bgc = "#778899";
$clr = "white";

echo' <th style="border: 2px solid black; text-align:center; background-color: '.$bgc.'; color:'.$clr.';   padding:8px; width:30px;""> '.$i.' </th> ';

}

	echo'</tr>
</table>';


echo'
<table style="font-family:serif; border-collapse:collapse; width: '; if($month_days=="30")echo'97%'; elseif($month_days=="31")echo'100%'; echo';">
	<tr>
		<td style="border:1px solid black; text-align:left; padding:8px; background-color: ; color:; width: 12%;"><b>'.$j.'. '.strtoupper($row['month']).' </b>
			</b></td>';



$p_count=0; $a_count=0;

for($i=01;$i<=$month_days;$i++){

$bgc = "";
$clr = "";


if($row['date_'.$i.'']=="P") {$clr="green"; $p_count++;}
elseif($row['date_'.$i.'']=="A") {$clr="red"; $a_count++;}



   
echo'<td style="border: 2px solid black; text-align:center;  color:'.$clr.';  padding:8px; width:30px;"><b>'.$row['date_'.$i.''].'</b></td>';

}


echo'</tr>
</table></br>
<div class="row" style="font-size:20px;"><div class="col-sm-3"><b>Total Attendance : </b>'.$p_count.'/'.($p_count+$a_count).'</div><div class="col-sm-2"><b style="color:green;">Present : </b>'.$p_count.'</div><div class="col-sm-2"><b style="color:red;">Absent : </b>'.$a_count.'</div><div class="col-sm-4"><b style="color:blue;">Percentage : </b>'; if($a_count+$p_count!=0) echo($p_count*100)/($a_count+$p_count); else echo "0"; echo'%</div></div>

<hr style="height:1px;border:none;color:#333;background-color:#333;">
</br>
';


}
}else echo"<div class='jumbotron'><center><h4>Student's Name Is Not Registered In Our Online Attendence Record.Student Should Concern To His/Her Class Teacher.</h4>
Thank You.</center></div>";

?>

</br></br>
<samp><u style="color:red;">Note</u> : If you have any issue with this online attendance system, you can concern to class teacher.</samp>

<hr style="height:2px;border:none;color:#333;background-color:#333;">


</div>

<?php 

ob_end_flush();

include"../inc/footer.php";  ?>
