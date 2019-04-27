<script type="text/javascript">
  	window.print();
 </script>


<?php  ob_start();?>




<?php  include"../inc/connect.php";


date_default_timezone_set("Asia/Kolkata");
$date_time = date("h"); 
$time_check = date("a");


$wish="";


function isMobileDevice(){
    $aMobileUA = array(
        '/iphone/i' => 'iPhone', 
        '/ipod/i' => 'iPod', 
        '/ipad/i' => 'iPad', 
        '/android/i' => 'Android', 
        '/blackberry/i' => 'BlackBerry', 
        '/webos/i' => 'Mobile'
    );

    //Return true if Mobile User Agent is detected
    foreach($aMobileUA as $sMobileKey => $sMobileOS){
        if(preg_match($sMobileKey, $_SERVER['HTTP_USER_AGENT'])){
            return true;
        }
    }
    //Otherwise return false..  
    return false;
}


?>

<!DOCTYPE html>
<html>
<head>
   
      <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="../css/manual_change.css">

          <script src="../js/bootstrap.min.js"></script>
          <script src="../js/bootstrap.js"></script>

<meta view-port  content="width=1400">

<meta charset="utf-8">
<?php /*  <meta name="viewport" content="width=device-width, initial-scale=1">*/ ?>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


<script type="text/javascript">
    
    function toggle_visibility(id){
      var e = document.getElementById(id);
      if (e.className == 'hidden') 
                e.className = 'unhide';     
            else
        e.className = 'hidden';
      
    }
  </script>


  <style>
 .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
    <?php if(1==1)echo'height:500px;'; else echo'height:200px;'; ?> width:100%;
     
  }

  
</style>

  <title>MAHAVEER CONVENT SCHOOL</title>

</head>
<body>




<div style="text-align:center; font-family:cursive;top:16px; text-shadow:2px 0 0 black, -2px 0 0 black, 0 2px 0 black,0 -2px 0 black,1px 1px black, -1px -1px 0 black , 1px -1px 0 black , -1px 1px 0 black; color:white; font-size:30px;">MAHAVEER CONVENT SCHOOL - KATHKUIYA </div>
<div style="text-align:center;color:white; font-family:cursive;">Shri Ram Chauk , Kubersthan Road Kathkuiya Bazar - 274303</br>
The Best English Medium School In Kathkuia</div>



<hr>





<div class="container">

<?php

$roll_number="";
$roll_number = @$_GET['get_roll_number'];
$my_fee_status = @$_GET['my_fee_status'];


?>



<?php

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



}
}
else echo "<h2>Sorry ! You Entered Wrong Roll Number.Please Enter Valid Roll Number.</h2>";
}



if(1==1){


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

if($total==0)$total="00.00";

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
if($total_am==0)$total_am="00.00";

else{
  if($total_am[strlen($total_am)-3]!=".") $total_am = $total_am.'.00 / -';
}

$total_bus = $apr_bus + $may_bus + $june_bus + $july_bus + $aug_bus + $sep_bus + $oct_bus + $nov_bus + $dece_bus + $jan_bus + $feb_bus + $mar_bus ;
if($total_bus==0)$total_bus="00.00";

else{
  if($total_bus[strlen($total_bus)-3]!=".") $total_bus = $total_bus.'.00 / -';
}
}

echo'

<b>Name : </b>'.strtoupper($fname).' '.strtoupper($lname).'</br>
<b>Roll Number : </b>'.$roll_number.'</br>
<b>Father\'s Name : </b>'.strtoupper($father_name).'</br>
<b>Class : </b>'.$present_class.'

<div style="top:10px; text-align:center; text-decoration:underline; font-size:25px;">Session '.$session_year.'</div><hr>


<b><div class="row"><div class="col-sm-1"></div><div class="col-sm-2">Month</div><div class="col-sm-2">Fees Status</div><div class="col-sm-2">Ammount</div><div class="col-sm-2">Bus Charge</div><div class="col-sm-2">Monthly Total</div></div></b>

<hr>
<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">April</div><div class="col-sm-2">'.$apr.'</div><div class="col-sm-2">'.$apr_am.'</div><div class="col-sm-2">'.$apr_am.'</div><div class="col-sm-2">'.$total1.'</div></div></br>

<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">May</div><div class="col-sm-2">'.$may.'</div><div class="col-sm-2">'.$may_am.'</div><div class="col-sm-2">'.$may_bus.'</div><div class="col-sm-2">'.$total2.'</div></div></br>

<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">June</div><div class="col-sm-2">'.$june.'</div><div class="col-sm-2">'.$june_am.'</div><div class="col-sm-2">'.$june_bus.'</div><div class="col-sm-2">'.$total3.'</div></div></br>

<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">July</div><div class="col-sm-2">'.$july.'</div><div class="col-sm-2">'.$july_am.'</div><div class="col-sm-2">'.$july_bus.'</div><div class="col-sm-2">'.$total4.'</div></div></br>

<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">August</div><div class="col-sm-2">'.$aug.'</div><div class="col-sm-2">'.$aug_am.'</div><div class="col-sm-2">'.$aug_bus.'</div><div class="col-sm-2">'.$total5.'</div></div></br>

<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">September</div><div class="col-sm-2">'.$sep.'</div><div class="col-sm-2">'.$sep_am.'</div><div class="col-sm-2">'.$sep_bus.'</div><div class="col-sm-2">'.$total5.'</div></div></br>

<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">Octomber</div><div class="col-sm-2">'.$oct.'</div><div class="col-sm-2">'.$oct_am.'</div><div class="col-sm-2">'.$oct_bus.'</div><div class="col-sm-2">'.$total6.'</div></div></br>

<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">November</div><div class="col-sm-2">'.$nov.'</div><div class="col-sm-2">'.$nov_am.'</div><div class="col-sm-2">'.$nov_bus.'</div><div class="col-sm-2">'.$total7.'</div></div></br>

<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">December</div><div class="col-sm-2">'.$dece.'</div><div class="col-sm-2">'.$dece_am.'</div><div class="col-sm-2">'.$dece_bus.'</div><div class="col-sm-2">'.$total8.'</div></div></br>

<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">January</div><div class="col-sm-2">'.$jan.'</div><div class="col-sm-2">'.$jan_am.'</div><div class="col-sm-2">'.$jan_bus.'</div><div class="col-sm-2">'.$total9.'</div></div></br>

<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">February</div><div class="col-sm-2">'.$feb.'</div><div class="col-sm-2">'.$feb_am.'</div><div class="col-sm-2">'.$feb_bus.'</div><div class="col-sm-2">'.$total10.'</div></div></br>

<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">March</div><div class="col-sm-2">'.$mar.'</div><div class="col-sm-2">'.$mar_am.'</div><div class="col-sm-2">'.$mar_bus.'</div><div class="col-sm-2">'.$total11.'</div></div></br>

<hr>
<b><div class="row"><div class="col-sm-1"></div><div class="col-sm-2" style="font-size:30px; font-weight:bold; margin-top:-10px;">Total</div><div class="col-sm-2"></div><div class="col-sm-2">'.$total_am.'</div><div class="col-sm-2">'.$total_bus.'</div><div class="col-sm-2">'.$total.'</div></div></b>

<hr>';


}

else echo'<hr><h2>Sorry ! Either Your Fess Data Is not Uploaded Or No Student Of This Roll Number Is Exist.</h2>';



}




?>







</div>

<?php ob_end_flush(); ?>
