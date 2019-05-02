<?php include "./inc/connect.php"; 
ob_start();
date_default_timezone_set("Asia/Kolkata");

date_default_timezone_set("Asia/Kolkata");
$date_time = date("h"); 
$time_check = date("a");

if($date_time >=02 &&  $time_check=="am") $wish = "GOOD MORNING VISITER !"; 
if(($date_time ==12 || $date_time == 01 || $date_time == 02 || $date_time == 03) &&  $time_check=="pm") $wish = "GOOD AFTERNOON VISITER !"; 
if($date_time >=04 &&  $time_check=="pm") $wish = "GOOD EVENING VISITER !"; 
if(($date_time ==12 ||  $date_time ==1) && $time_check=="am") $wish = "GOOD EVENING VISITER !"; 
?>





<html>
<head>
<title>Web Analyser </title>

<meta name="description" content="A online free link click optimizer to count unique and total clicks , visiter's IP , State , Country , Continent...a naiudan.com product...Create free account and start free optimization...."/>

    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">

        <link rel="shortcut icon" href="../title_bird.png" type="image/png"/>




          <script src="../js/bootstrap.min.js"></script>
          <script src="../js/bootstrap.js"></script>

           <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'  type='text/css'>


<script type="text/javascript">
        
        function toggle_visibility(id){
            var e = document.getElementById(id);
            if (e.className == 'hidden') 
                e.className = 'unhide';         
            else
                e.className = 'hidden';
            
        }
    </script>
    <meta name="viewport" content="width=1300">
    <meta name="description" content="Link click optimizer is an open platform where you can optimize your click links...It's free">

<style type="text/css">

body {
    font-family: Paytone one, Open Sans, Lato   ; overflow-x: hidden;
}

a:hover {
    text-decoration: none;
}
</style>

</head>
<body>





<div style="background-color:#448aff; color:white;position:fixed; border-bottom: 3px solid #448aff; width:100%; ">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="http://www.naiudan.com" style="font-family:Comic Sans MS; font-size:20px; font-weight: bold; color:white;"><span class="glyphicon glyphicon-menu-hamburger"></span> naiudan.com -> Web Analyser</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav" style="position: absolute; right :10px;">
     
     <!-- <li><span class="btn btn-danger" style=" position:fixed; right:550px;">Any Problem ? </br>WhatsApp Us @ +919807264017</span></li>-->

      <?php 
      if(!isset($_COOKIE['user_in'])){
if(basename($_SERVER['PHP_SELF'])=='index.php'){
echo'        <li><a href="#signup" style="color:white;" onclick="toggle_visibility(\'signup\')"><span class="glyphicon glyphicon-pencil"></span> Sign in</a></li> 
        <li> 
          <a href="#signup"  style="color:white;" onclick="toggle_visibility(\'signup\')"><span class="glyphicon glyphicon-pencil"></span> Sign up</a>
        </li>
        ';
}else echo '<li><a href="index.php" style="color:white;" onclick="toggle_visibility(\'signup\')"><span class="glyphicon glyphicon-pencil"></span> <b>Sign in</b></a></li> 
        <li> 
          <a href="index.php"  style="color:white;" onclick="toggle_visibility(\'signup\')"><span class="glyphicon glyphicon-pencil"></span><b> Sign up</b></a>
         </li>';
}
        else echo' <li><a href="home.php" class="btn btn-default"><span class="glyphicon glyphicon-"></span>Analyse Link Clicks</a> </li>

<li><a href="generate-code-to-count-website-view_home.php" class="btn btn-default"><span class="glyphicon glyphicon-"></span> Analyse Web Page</a> &nbsp;&nbsp;</li> 

<li><a href="logout.php"  class="btn btn-danger"><span class="glyphicon glyphicon-log-out"></span> Log Out</a> </li>';
        ?>
      </ul>
    </div>
  </div>
</div>



