
<div class="noprint">

<?php include"../inc/header.php";  

ob_start();

if(!isset($_COOKIE['user_login']))
header("location:../");

?>
</br>
<center><h1>Student Result Marksheet</h1></center>
</br>
<div style="height:1px; border:1px solid #f0f0f0; width:100%;"></div>
</br></br></br>


</div>



<?php

if(isset($_GET['roll_no']) && isset($_GET['exam_id'])){
$roll_no = @$_GET['roll_no'];
$exam_id = @$_GET['exam_id'];

$query = $con->query("SELECT * FROM add_exam WHERE exam_id='$exam_id'");
if($query->num_rows){
while($row = $query->fetch_assoc()){
$i++;
$exam_title = ucwords($row['title']);
$exam_id = $row['exam_id'];
$class_level = $row['class_level'];
$scheduled_date = $row['scheduled_date'];
$upload_date = $row['upload_date'];
$session = $row['session'];
}
}


$query = $con->query("SELECT * FROM student_entry WHERE roll_no='$roll_no'");

if($query->num_rows){
while($row = $query->fetch_assoc()){

$fname = ucwords($row['first_name']);
$lname = ucwords($row['last_name']);
$roll_no = $row['roll_no'];
$class = $row['present_class'];
$father_name = ucwords($row['father_name']);
$mother_name = ucwords($row['mother_name']);
$dob = $row['birth_date'].'/'.$row['birth_month'].'/'.$row['birth_year'];

    
$student_photo = $row['student_photo'];
$gender = $row['gender'];
if($student_photo==""){
if($gender=="male") $student_photo="http://mcskkt.com/img/default_male.png";
else $student_photo="http://mcskkt.com/img/default_female.png";
}
}
}

echo'

<div id="marksheet" style="border:10px solid skyblue;  padding:10px; media:print; ">
<div style="border:2px solid black; height:930;">
<div style="padding:20px;">  
<img src="http://www.mcskkt.com/img/img2.jpg" style="position:absolute; left:79%; width:15%; height: auto; border:1px solid black;">
</div>  
<div style="font-weight:bold; text-align:center;">
<div style="font-family: calibri; font-size:30px; margin-top:-18px; padding-bottom:10px;">MAHAVEER CONVENT SCHOOL</div>
<div style="font-family:Helvetica;">Shri Ram Chauk ,Kubersthan Road Kathkuiyan Bazar</br>
Affiliated to CBSC, New Delhi</div>

</div>

</br>

<div style="background-color:grey; width:100%; border-bottom:2px solid black; border-top:2px solid black; text-align:center; padding:7px; font-size:25px; font-weight:bold;">SESSION '.$session.'</div>

<div style="padding:10px; line-height:35px;">

<div class="row">
<div class="col-sm-4" style="text-align:center;">
<img src="'.$student_photo.'" style="height:100px; width:auto; border:1px solid black;">
</div>
<div class="col-sm-8">

<div class="row">
<div class="col-sm-5">
<b>Student Name :</b> '.$fname.' '.$lname.'
</div>
<div class="col-sm-3">
<b>Class : </b> '.$class.'
</div>
<div class="col-sm-3">
<b>Student Id :</b> '.$roll_no.'
</div>
</div>

<div class="row">
<div class="col-sm-5">
<b>Father\'s Name :</b> '.$father_name.'
</div>
<div class="col-sm-3">
<b>DOB. : </b> '.$dob.'
</div>
<div class="col-sm-3">
<b></b>
</div>
</div>
</div>

</div>
</div>

<div style="height:2px; border:1px solid black; width:100%;"></div>

<div style="text-align:center; padding:10px; font-weight:bold; font-family:courier; font-size:20px; border-bottom:2px solid black;">ACADEMIC PERFORMANCE : SCHOLASTIC AREA</div>

<div style="background-color: #f0f0f0; width:100%; border-bottom:2px solid black; text-align:center; padding:7px; font-size:20px; font-weight:bold; font-family: Georgia;">'.$exam_title.'</div>


<style>
.row.div{
    border:2px solid black;
}
</style>

<div class="row" style="padding:13px;">
<div class="col-sm-1"></div>
<div class="col-sm-1">
<b>Sr.No.</b>
</div>
<div class="col-sm-3">
<b>Subject name</b>
</div>
<div class="col-sm-1">
<b>Obtained Marks</b>
</div>
<div class="col-sm-1">
<b>Maximum Marks</b>
</div>
<div class="col-sm-1">
<b>Weightage (10%)</b>
</div>
<div class="col-sm-1">
<b>Percentage (%)</b>
</div>
<div class="col-sm-1">
<b>Grade</b>
</div>
<div class="col-sm-1">
<b>Result</b>
</div>
</div>
<div style="height:2px; border:1px solid black; width:100%;"></div>';

$i_id=0;
$query = "desc exam_".$exam_id;
$result = $con1->query($query);

$query1 = "SELECT * FROM exam_".$exam_id." where roll_no=".$roll_no;
$result1 = $con1->query($query1);

while($row = $result->fetch_array()){
$i_id++;
$marks[$i_id] = '';
}

$query = "desc exam_".$exam_id;
$result = $con1->query($query);
$i_id=0;
$current_roll_no_count = $result1->num_rows;
if($current_roll_no_count>0){
while($row1 = $result1->fetch_assoc()){
while($row = $result->fetch_array()){
$i_id++;
$marks[$i_id]=$row1[$row[0]];
}
break;
}
}

$total=0;
$total_max=0;
$total_wtg=0;
$query = "desc exam_".$exam_id;
$result = $con1->query($query);
$i_id=0;
while($row = $result->fetch_array()){
$i_id++;
$column = str_replace('_',' ',$row[0]);
if($i_id>4){

$query = $con->query("SELECT * FROM subjects WHERE name='$column'");

if($query->num_rows){
while($row = $query->fetch_assoc()){
$i++;
$name = ucwords($row['name']);
$max = $row['max'];
$passing = $row['passing'];
$s_id = $row['s_id'];
}}

$percentage = round(($marks[$i_id]*100/$max),2);
echo'
<div class="row" style="padding:13px;">
<div class="col-sm-1"></div>
<div class="col-sm-1"><b>#'.($i_id-4).'.</b></div>
<div class="col-sm-3">
<b>'.$column.'</b>
</div>
<div class="col-sm-1">'.$marks[$i_id].'</div>
<div class="col-sm-1">'.$max.'</div>
<div class="col-sm-1">'.($marks[$i_id]*0.1).'</div>
<div class="col-sm-1">'.$percentage.'%</div>';


$grade = '';
switch(round($percentage/10)){
case 9 : {$grade = 'A+';break;}
case 8 : {$grade = 'A';break;}
case 7 : {$grade = 'B+';break;}
case 6 : {$grade = 'B';break;}
case 5 : {$grade = 'C+';break;}
case 4 : {$grade = 'C';break;}
default : $grade = '<span style="color:red;">F</span>';
}

echo'<div class="col-sm-1">'.$grade.'</div>
<div class="col-sm-1">';
if($marks[$i_id]>=$passing)echo'PASS'; else echo'FAIL';
echo'
</div>
</div>
<div style="height:1px; border:1px solid grey; width:100%;"></div>';
$total+=$marks[$i_id];
$total_max+=$max;
$total_wtg+=$marks[$i_id]*0.1;
}
}

$total_percentage = round($total*100/$total_max,2);
echo'
<div class="row" style="padding:10px; font-weight:bold; font-family:calibri; font-size:18px;">
<div class="col-sm-2"></div>
<div class="col-sm-3">Total</div>
<div class="col-sm-1">'.$total.'</div>
<div class="col-sm-1">'.$total_max.'</div>
<div class="col-sm-1">'.$total_wtg.'</div>
<div class="col-sm-1">'.$total_percentage.'%</div>
';

$grade = '';
switch(round($total_percentage/10)){
case 9 : {$grade = 'A+';break;}
case 8 : {$grade = 'A';break;}
case 7 : {$grade = 'B+';break;}
case 6 : {$grade = 'B';break;}
case 5 : {$grade = 'C+';break;}
case 4 : {$grade = 'C';break;}
default : $grade = '<span style="color:red;">F</span>';
}

echo'
<div class="col-sm-1"> '.$grade.'</div>
<div class="col-sm-1">
';
if($marks[$i_id]>=$passing)echo'PASS'; else echo'FAIL';

echo'
</div>
</div>

<div class="row" style="font-weight:bold; margin-top:100px;">
<div class="col-sm-1"></div>
<div class="col-sm-4">Class Teacher\'s Signature</div>
<div class="col-sm-4">Parent/Guardian\'s Signature</div>
<div class="col-sm-3">Principal\'s Signature</div>
</div>
</br></br>
</div>
';




echo'
<div style="height:2px; border:1px solid grey; width:100%;"></div>
</div>
';


} //// if isset both id nd roll no

?>


</br></br>

<div class="noprint">
<div style="height:2px; border:1px solid grey; width:100%;"></div>

</br></br>
<center><button class="btn btn-success btn-lg" onclick="printMarksheet()">Print Marksheet</button></center>


<div><div> <!-- for footer unecessary div -->
<?php include"../inc/footer.php";  ?>

</div>

<style>
@media print
{
.noprint {display:none;}
}
</style>




<script>
    function printMarksheet(){
        window.print();
    }
</script>









