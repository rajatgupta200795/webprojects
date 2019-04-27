<?php  include"connect.php";

ob_start();

date_default_timezone_set("Asia/Kolkata");
$date_time = date("h"); 
$time_check = date("a");

if($date_time >=02 &&  $time_check=="am") $wish = "GOOD MORNING VISITER !"; 
if(($date_time ==12 || $date_time == 01 || $date_time == 02 || $date_time == 03) &&  $time_check=="pm") $wish = "GOOD AFTERNOON VISITER !"; 
if($date_time >=04 &&  $time_check=="pm") $wish = "GOOD EVENING VISITER !"; 
if(($date_time ==12 ||  $date_time ==1) && $time_check=="am") $wish = "GOOD EVENING VISITER !"; 

//echo "</br></br></br></br></br></br>Sorry Site testing".$date_time;

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



  <style>
 .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
    <?php if(1==1)echo'height:500px;'; else echo'height:200px;'; ?> width:100%;
     
  }
</style>

  <title>MAHAVEER CONVENT SCHOOL</title>

</head>
<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php if(1==1){
//echo'<div style="width:105px; background-color:#f0f0f0; height:700px; position:fixed;"></div>';
//echo'<div class="container">';


   
 echo'   <div style="padding-top:17px; padding-bottom:15px; background-color:#2C5C77;" ><div style="text-align:center; font-family:cursive;top:16px; text-shadow:2px 0 0 black, -2px 0 0 black, 0 2px 0 black,0 -2px 0 black,1px 1px black, -1px -1px 0 black , 1px -1px 0 black , -1px 1px 0 black; color:white; font-size:40px;">MAHAVEER CONVENT SCHOOL - KATHKUIYAN </div>
<div style="text-align:center;color:white; font-family:cursive;">Shri Ram Chauk , Kubersthan Road Kathkuiyan Bazar - 274303</br>
The Best English Medium School In Kathkuiyan</div>


<marquee style="color:white; font-size:17px; margin-top:15px; font-family:serif;">'.$wish.' '.strtoupper("Welcome To MAHAVEER CONVENT SCHOOL - KATHKUIYAN One And Only The Best English Medium Convent Academy In Kathkuiyan . Address :  Shri Ram Chauk , Kubersthan Road Kathkuiyan Bazar - 274303 . For Any Inquiry call Us ").'<span class="glyphicon glyphicon-earphone"></span> +919628673350 . You Can Mail Us On <a href="https://www.gmail.com"   style="color:white;">Akray1607@gmail.com</a></marquee>';

if(!isMobileDevice())echo'<div style="position:absolute; top:10px; left:10px;"><img height="105" width="110" style="padding-left:2px; padding-bottom:2px;  padding-top:2px; padding-right:2px; background-color:black;" src="../img/baby_img.jpg"></div>';

echo'</div>
';
}
?>




<div style="padding-top:8px; padding-bottom:3px; font-family:Agency FB; background-color:#f0f0f0; font-size:17px; color:#2C5C77;">

<?php if(isMobileDevice())
echo'<div class="row">
  <div class="col-xs-9"><div class="link_change" >&nbsp;&nbsp;&nbsp;&nbsp;<a href="../index.php" class"active"><b>Home</b></a> 
  &nbsp;&nbsp;&nbsp;&nbsp; <a href="../student/"><b>Student</b></a> 
  &nbsp;&nbsp;&nbsp;&nbsp;  <a href="../faculity_details.php"><b>Faculty</b></a>   
  &nbsp;&nbsp;&nbsp;&nbsp; <a href=""><b>Fee Structure</b></a>  
  &nbsp;&nbsp;&nbsp;&nbsp;   <a href="../uniform_details.php"><b>Uniform</b></a>    
  &nbsp;&nbsp;&nbsp;&nbsp;  <a href=""><b>Facility</b></a>   
  &nbsp;&nbsp;&nbsp;&nbsp;   <a href=""><b>About Us</b></a>    
</div> 
</div>
';

else    echo'<div class="row">
  <div class="col-xs-0"></div>
  <div class="col-xs-12"><div class="link_change" >    
&nbsp;&nbsp; &nbsp;&nbsp; <a href="../index.php" class"active"><b>Home</b></a> 
   &nbsp;&nbsp;&nbsp;&nbsp; <a href="../student/"><b>Student</b></a> 
  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <a href="../faculity_details.php"><b>Faculty</b></a>   
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href=""><b>Fee Structure</b></a>  
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="../uniform_details.php"><b>Uniform</b></a>    
  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;  <a href=""><b>Facility</b></a>    
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <a href=""><b><span style="color:darkred;" class="glyphicon glyphicon-earphone"></span>Call Now +919628673350</b></a>     
</div> 
</div>';
?>
<!--
<div class="col-xs-2" style="top:-5px;">

<a class="btn btn-social-icon btn-foursquare" style="color:#007BB6; font-size:20px;">
    <span class="fa fa-facebook"></span>
</a>
<a class="btn btn-social-icon btn-odnoklassniki" style="color:#007BB6; font-size:20px;">
    <span class="fa fa-google-plus"></span>
</a>
<a class="btn btn-social-icon btn-twitter" style="color:#007BB6; font-size:20px;">
    <span class="fa fa-twitter"></span>
</a>
<a class="btn btn-social-icon btn-linkedin" style="color:#007BB6; font-size:20px;">
    <span class="fa fa-linkedin"></span>
</a>

   </div>-->
</div>
<?php if(isMobileDevice())
echo'</div>';
?>

</div>

