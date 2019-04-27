<?php

date_default_timezone_set("Asia/Kolkata");

date_default_timezone_set("Asia/Kolkata");
$date_time = date("h"); 
$time_check = date("a");

if($date_time >=02 &&  $time_check=="am") $wish = "GOOD MORNING VISITER !"; 
if(($date_time ==12 || $date_time == 01 || $date_time == 02 || $date_time == 03) &&  $time_check=="pm") $wish = "GOOD AFTERNOON VISITER !"; 
if($date_time >=04 &&  $time_check=="pm") $wish = "GOOD EVENING VISITER !"; 
if(($date_time ==12 ||  $date_time ==1) && $time_check=="am") $wish = "GOOD EVENING VISITER !"; 


echo'<div class="col-sm-1">';
if(!isMobileDevice()){
echo'
<div style="width:115px; height:20px;background-color:#448aff;border-left : 1px solid #f0f0f0; position:fixed; right:0px;"></div></br>
<div style="width:115px; height:1000px; border-left : 1px solid lightgrey; background-color:#448aff; position:fixed; right:0px;">';
echo'

<div style="width:215px; background-color:#448aff;  position:absolute; text-align:center;">';



echo'</div>

';
echo'</div>';
}
echo'</div>

</div></div>

</div>
';

include ("./inc/js_foot.php");
?>

