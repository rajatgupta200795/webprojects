<!DOCTYPE html>
<html>
<head>
    <meta name="google-site-verification" content="_P-qdQYnppvZ9trgy7Ho8-z6rBvN7Mm-ERjs8j_IjnM" />
    <title>Send online e-wishes to your well wishers for free and let them be a part of your happiness.</title>
    <meta charset="utf-8">
    <meta name="description" content="Send online wishes to your friends, girlfriend, relative by sendting them your ewishes.">

<meta name="viewport" content="width=420">

<link rel="stylesheet" href="http://www.ewishes.online/css/bootstrap.min.css">

<link href="http://www.ewishes.online/css/google_font_code.css?family=Josefin+Slab|Hind|Raleway|Poppins|Pangolin|Source+Sans+Pro|PT+Sans+Caption|Oswald|PT+Sans" rel="stylesheet">

<script src="../js/angular.min.js" async></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" async></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" async></script>

<style>
    a:hover{
        text-decoration:none;
        color: red;
    }

</style>


<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-2231090890588451",
    enable_page_level_ads: true
  });
</script>

</head>
<body style="background-color: white; overflow-x: hidden;"  ng-app="" >

<?php
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

<nav class="navbar navbar-default" style="padding: 5px; font-family: 'Josefin Slab', serif; font-size: 20px; font-weight: bold;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="http://www.ewishes.online/" style="font-size: 30px;">ewishes.online</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">

      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://www.ewishes.online/">Home</a></li>
        <li><a href="http://www.ewishes.online/#ewishes">Wishes</a></li>
        <li><a href="http://www.ewishes.online/#wishSong">Songs</a></li>
        <li><a href="http://www.ewishes.online/about-us.php">About</a></li>
        <li><a href="http://www.ewishes.online/contact-us.php">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>