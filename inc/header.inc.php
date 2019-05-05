<?php include ("../inc/connect.inc.php"); ?>
<?php include ("./inc/connect.inc.php"); ?>
<?php include ("./inc/location.inc.php"); ?>
<?php include ("../inc/location.inc.php"); ?>
<?php
ob_start();

date_default_timezone_set('Asia/Kolkata');

if (!isset($_COOKIE["userlogin"])) {
 
 $account_button='
<a href="signin_signup.php"><button class="btn btn-default" style="font-family:cursive; margin-top:7px; color:blue;"> Sign in </button></a>
<a href="signin_signup.php"><button class="btn btn-default" style="font-family:cursive; margin-top:7px; color:blue;">Sign up</button></a>
';
  } 
else
{

 $account_button='<a href="signin_signup.php"><button class="btn btn-default" style="font-family:cursive; margin-top:7px; color:blue;">devopsrider Account</button></a>';
      
       require_once("./inc/lastseen.php");

} ?>

 <!doctype html>
 <html>
       <head>



<meta name="google-site-verification" content="OVFWaU62XlBmPDpNGfkdLQhTVZX4DgC1O9RTiJmyTn8" />

             <meta charset="UTF-8">
             <title><?php if(isset($_GET['link_title']) && $_GET['link_title']!="")echo$_GET['link_title'];else echo"DevOps Rider"; ?></title>
             <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css" />
             <link rel="stylesheet" type="text/css" href="./cssindex/styleprofile1.css" />
             <link rel="stylesheet" type="text/css" href="./cssindex/style.css" />

    <meta name="viewport" content="width=400">

    <meta name="description" content="<?php if($_GET['meta_description']!="")echo$_GET['meta_description']; else echo'A multi purpose entertainmenting website having educational blog , games , love tools and free software corner.'; ?>">

<script type="text/javascript">
		
		function toggle_visibility(id){
			var e = document.getElementById(id);
			if (e.className == 'hidden') 
                e.className = 'unhide';			
            else
				e.className = 'hidden';
			
		}

		function toggle_disappear(id){
			var e = document.getElementById(id);
			if (e.className == 'unhide') 
                e.className = 'hidden';			
            else
				e.className = 'hidden';
			
		}
	</script>

<link rel="shortcut icon" href="../title.png" type="image/png"/>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script>
function goForward() {
    window.history.forward()
}
function goBack() {
    window.history.back()
}
</script>


  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'  type='text/css'>


<style>



body {
	font-family: Paytone one, Open Sans, Lato   ; overflow-x: hidden;
}

a:hover, a:visited, a:link, a:active
{
    text-decoration: none;
}


ul{    
       /* padding: 0;
        list-style: none;
        background: #f2f2f2;*/
    }
    ul li{

       display: inline-block;
       /* position: relative;*/
       /* text-align: left;*/
    }
    ul li a{
        display: block;
        padding-bottom: 7px;
        color: blue;
        text-decoration: none;
    }
    ul li a:hover{
        color: green;
        background: #f0f0f0;
    }
    ul li ul.dropdown{
        min-width: 98%; /* Set width of the dropdown */
        background: white;
        border-left: 1px solid darkblue;
        border-bottom : 1px solid darkblue;
        border-right : 1px solid darkblue;
        display: none;
        font-size: 15px;
        line-height: 30px;
        position: absolute;
        margin-top: -2px;
        padding: 20px;
        z-index: 999;
        left: 0;
        color: green;
    }
    ul li:hover ul.dropdown{
        display: block; /* Display the dropdown */
    }
    ul li ul.dropdown li{
        display: block;
    }


</style>


      </head> 
      <body>
        

<?php
function getRealUserIp(){
    switch(true){
      case (!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
      case (!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
      case (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
      default : return $_SERVER['REMOTE_ADDR'];
    }
 }
$ip = getRealUserIp();

?>


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


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







if(isMobileDevice()){
    echo'<div class="container">'; 
echo'
<div class="row">
<div class="col-sm-2">';
echo'</div>


<div class="col-sm-8">

<div class="row">
<div class="col-sm-7"><h1>devopsrider.com</h1>';


echo'</div>
<!--<div class="col-sm-2"  > <a href="http://www.devopsrider.com/lovegame/index.php/"><div style="margin-top:10px; font-size:17px;font-weight:bold;"> Game</div></a></div>
<div class="col-sm-2"  > <a href="/current-indian-polity/general-science.php"><div style="margin-top:10px; font-size:17px;font-weight:bold; ">Current Indian Polity</div></a></div>
<div class="col-sm-3" style="margin-top:0px; font-size:10px;"><a href="https://www.facebook.com/Technical-Friend-741984279311981/"> Like Our Facebook Page</a> <div class="fb-like" data-href="https://www.facebook.com/Technical-Friend-741984279311981/" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div></div>-->
</div>';
echo'
';
}


if(!isMobileDevice()){
    echo'
<div class="row">
<div class="col-sm-1">';
echo'<div style="width:97px; height:1000px; border-right : 1px solid lightgrey; background-color:#448aff; position:fixed; text-align:center;">';
echo'

<span style="height:100px;"></span>
';
echo'</div>';
echo'</div>
<div class="col-sm-10">


<div class="row">
<div class="col-sm-12" style="color:lightgrey; margin-left:-4px; padding-bottom:1px;  padding-left:20px; border-bottom : 1px solid lightgrey; padding-top:1px; font-size:12px; background-color: #448aff;">
<span style="margin-left:0px;padding-bottom:1px; padding-top:1px; font-size:12px; background-color: #448aff;">
<a href="http://www.devopsrider.com/link_click_counter/index.php" style="color: white;" >Click Optimizer</a> &nbsp; | &nbsp; 
<a href="/current-indian-polity/general-science.php" style="color:white;">Current Indian Polity</a> &nbsp;|&nbsp; 
<a href="../lovegame/index.php" style="color:white;">Love Game</a> &nbsp;|&nbsp; 
<a href="https://www.facebook.com/Technical-Friend-741984279311981/" style="padding:4px; color: white;" >Like Our Facebook Page</a><div class="fb-like" data-href="https://www.facebook.com/Technical-Friend-741984279311981/" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>

</span>
</div></div>


<div class="row" style="margin-top:5px;">
<div class="col-sm-2" style="font-size:25px; font-family:serif; line-height:22px;">

<b style="color:black; margin-top:10px;">DevOps Rider</b></br>
<a href="http://www.devopsrider.com/index.php" style="font-size:16px; color:black; top:0px;">www.devopsrider.com</a>
';

echo'</div>
<div class="col-sm-2">
<b>Date & Time : </b> '.date("h:i").' IST</br>
'.date("l").' '.date("d/m/20y").'
</div>
<div class="col-sm-4">
<b>Your IP Address : </b>'.$ip.'</br>
<b>Location</b> : '.$state.' '.$country.' '.$continent.'
</div>
<div class="col-sm-3" style="margin-top:0px; font-size:17px;font-weight:bold;" > ';

echo'
</div>
</div>
';




echo'<div style="height:10px;"></div>';

echo'<ul style="margin-left:150px;"><li><a href="/index.php"><span style="padding:7px; padding-left:25px; padding-right:15px; font-size:15px; color:white; font-weight:bold; background-color: #4682B4;" onmouseover="this.style.background=\'#f0f0f0\'; this.style.color=\'black\'; this.style.decoration=\'none\';" onmouseout="this.style.background=\'#4682B4\'; this.style.color=\'white\';" ><span class="glyphicon glyphicon-home"></span></span></a></li><li><a href="/current_affairs.php"><span style="padding:7px;padding-left:8px; padding-right:8px;font-size:15px; color:white; font-weight:bold; background-color: #4682B4;" onmouseover="this.style.background=\'#f0f0f0\'; this.style.color=\'black\'; this.style.decoration=\'none\';" onmouseout="this.style.background=\'#4682B4\'; this.style.color=\'white\';" >Current Affairs</span></a></li><li><a href="/technology.php"><span style="padding:7px;padding-left:13px; padding-right:13px; font-size:15px; color:white; font-weight:bold; background-color: #4682B4;" onmouseover="this.style.background=\'#f0f0f0\'; this.style.color=\'black\'; this.style.decoration=\'none\';" onmouseout="this.style.background=\'#4682B4\'; this.style.color=\'white\';" >Technology</span></a><ul class="dropdown">
<center style="color:black; font-weight:bold;font-size:20px;">Technology - Free Software , Services & Tricks</center><hr>
<div class="row"><div class="col-sm-5">
<li><a href="/technology.php?page=free_download_internet_download_manager&link_title=INTERNET%20DOWNLOAD%20MANAGER%20-%20SETUP%20+%20UNLIMITED%20CRACK%20+%20KEYS%20-%20FREE%20DOWNLOAD&meta_description=Internet%20Download%20Manager%20is%20a%20task%20management%20tool%20that%20makes%20it%20easier%20to%20download%20multiple%20files%20at%20a%20time.%20Internet%20Download%20Manager,%20free%20and%20safe%20download,Setup,Crack%20Download%20logic%20accelerator,resume%20and%20schedule%20downloads...."><span>Internet Download Manager</span></a></li>
<li><a href="/technology.php?page=how-to-get-password-of-any-wifi-leegaly-without-any-software-download&link_title=How%20To%20Get%20Any%20wifi%20Password%20Near%20Your%20Location%20Easily%20-%20www.myxid.com&meta_description=I%20am%20sure%20you%20got%20nothing%20after%20a%20lots%20of%20search%20everywhere.Today%20i\%27ll%20show%20you%20how%20you%20can%20find%20someone\%27s%20wifi%20password%20(anywhere%20in%20the%20world)%20without%20doing%20any%20illegal%20work."><span>Get Any wifi Password ?</span></a></li>
<li><a href="/technology.php?page=revo_uninstaller&link_title=REVO%20UNINSTALLER%20:%20SET%20UP%20+%20UNRECOVERABLE%20DELETE%20TOOL%20+%20EVIDENCE%20REMOVER%20+%20WINDOWS%20HISTORY%20CLEANER%20+%20%20FREE%20DOWNLOAD%20REVO%20UNINSTALLER%20&meta_description=Revo%20Uninstaller%20helps%20you%20to%20uninstall%20software%20and%20remove%20unwanted%20programs%20installed%20on%20your%20computer%20even%20if%20you%20have%20problems%20uninstalling%20and%20cannot%20uninstall%20them%20from"><span>Enjoy Free Software For Lifetime</span></a></li>
</div>
<div class="col-sm-5">
<li><a href="/link_click_counter/"><span>Count Your Web Address Click</span></a></li>
</div>
</div>
<hr>
<b>To be updated with latest technology and tricks , Like our Facebook Page. <div class="fb-like" data-href="https://www.facebook.com/Technical-Friend-741984279311981/" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div></b>
</ul>
</li><li><a href="/biography.php"><span style="padding:7px;padding-left:17px; padding-right:17px; font-size:15px; color:white; font-weight:bold; background-color: #4682B4;" onmouseover="this.style.background=\'#f0f0f0\'; this.style.color=\'black\'; this.style.decoration=\'none\';" onmouseout="this.style.background=\'#4682B4\'; this.style.color=\'white\';" >Biography</span></a></li><li><a href="/health_tips.php"><span style="padding:7px; padding-left:13px; padding-right:13px; font-size:15px; color:white; font-weight:bold; background-color: #4682B4;" onmouseover="this.style.background=\'#f0f0f0\'; this.style.color=\'black\'; this.style.decoration=\'none\';" onmouseout="this.style.background=\'#4682B4\'; this.style.color=\'white\';" >Health</span></a>
<!--<ul class="dropdown">
<center style="color:black; font-weight:bold; font-size:20px;">Health & Beauty Tips</center><hr>
<div class="row"><div class="col-sm-3">
<li><a href="/health_tips.php?page=cancer_all_types_of_cancer&link_title=Cancer%20-%20Long%20Illness%20-%20Incurable-%20Disease_Facts_Symptoms&meta_description=Cancers%20are%20a%20large%20family%20of%20diseases%20that%20involve%20abnormal%20cell%20growth%20with%20the%20potential%20to%20invade%20or%20spread%20to%20other%20parts%20of%20the%20body.%20Read%20All%20Signs%20and%20symptoms%20,%20Causes%20,%20Types%20of%20Cancer%20-%20Carcinoma%20,%20Sarcoma%20Lymphoma%20and%20leukemia,Germ%20cell%20tumor,Blastoma,Prevention..."><span>Cancer</span></a></li>
<li><a href="/health_tips.php?page=heart_attack_what_should_do&link_title=Heart%20Attack%20:%20How%20To%20Save%20Someone%27s%20Life.%20A%20heart%20attack%20can%20strike%20anyone,%20anywhere,%20at%20any%20time.&meta_description=A%20heart%20attack%20occurs%20when%20oxygen%20fails%20to%20reach%20the%20heart...Symptoms%20of%20heart%20attack,How%20To%20Save%20Someone\%27s%20Life,CPR.."><span>Heart Attack</span></a></li>
<li><a href="videos.php"><span>Sex</span></a></li>
<li><a href="videos.php"><span>Brain</span></a></li>
<li><a href="videos.php"><span>Yoga</span></a></li>
</div>
<div class="col-sm-3">
<li><a href="videos.php"><span>Cancer</span></a></li>
<li><a href="videos.php"><span>Heart Attack</span></a></li>
<li><a href="videos.php"><span>Sex</span></a></li>
<li><a href="videos.php"><span>Brain</span></a></li>
<li><a href="videos.php"><span>Yoga</span></a></li></div>
</div>
<hr>
</ul>-->
</li><li><a href="/love-tips.php"><span style="padding:7px;padding-left:22px; padding-right:22px; font-size:15px; color:white; font-weight:bold; background-color: #4682B4;" onmouseover="this.style.background=\'#f0f0f0\'; this.style.color=\'black\'; this.style.decoration=\'none\';" onmouseout="this.style.background=\'#4682B4\'; this.style.color=\'white\';" > Love </span></a>
<!--<ul class="dropdown">
<center style="color:black; font-weight:bold; font-size:20px;">Love And Romance</center><hr>
<div class="row">
<div class="col-sm-3">
<li><a href="videos.php"><span>Cancer</span></a></li>
<li><a href="videos.php"><span>Heart Attack</span></a></li>
<li><a href="videos.php"><span>Sex</span></a></li>
<li><a href="videos.php"><span>Brain</span></a></li>
<li><a href="videos.php"><span>Yoga</span></a></li></div>
</div>
<hr>
</ul>-->
</li><!--<li><a href="/competition/"><span style="padding:7px;padding-left:17px; padding-right:17px; font-size:15px; color:white; font-weight:bold; background-color:red;" onmouseover="this.style.background=\'#f0f0f0\'; this.style.color=\'black\'; this.style.decoration=\'none\';" onmouseout="this.style.background=\'red\'; this.style.color=\'white\';" >Competetion</span></a>
<ul class="dropdown">
<center style="color:black; font-weight:bold; font-size:20px;">Comptitive Study For SSC , Railway And Bank</center><hr>
<div class="row" style="font-size:15px;"><div class="col-sm-3">
<li><a href="videos.php"><span>General Science</span></a></li>
<li><a href="videos.php"><span>Comptitive Maths</span></a></li>
<li><a href="videos.php"><span>Geography</span></a></li>
<li><a href="/current-indian-polity/general-science.php"><span>Indian Polity</span></a></li>
<li><a href="videos.php"><span>History</span></a></li>
<li><a href="videos.php"><span>English</span></a></li>
</div>
<div class="col-sm-3">
<li><a href="videos.php"><span>Indian Constitution</span></a></li>
<li><a href="/competition/railway/"><span>Railway</span></a></li>
<li><a href="videos.php"><span>World Oceans</span></a></li>
<li><a href="videos.php"><span>World Famous Frontiers</span></a></li>
</div>
<div class="col-sm-3">
<li><a href="videos.php"><span>First in India</span></a></li>
<li><a href="videos.php"><span>Famous in India</span></a></li>
<li><a href="videos.php"><span>Famous in World</span></a></li>
</div>
<div class="col-sm-3">
<li><a href="videos.php"><span style="color:red;">Test Yourself</span></a></li>
<li><a href="videos.php"><span style="color:red;">SSC CGL Test Papers</span></a></li>
<li><a href="videos.php"><span style="color:red;">SSC CHCL Test Papers</span></a></li>
<li><a href="videos.php"><span style="color:red;">Bank Test Papers</span></a></li>
<li><a href=""><span style="color:red;">Railway Test Papers</span></a></li>
</div>
</div>
<hr>
</ul>
</li><li><a href="/movie/"><span style="padding:7px;padding-left:17px; padding-right:17px; font-size:15px; color:white; font-weight:bold; background-color: #4682B4;" onmouseover="this.style.background=\'#f0f0f0\'; this.style.color=\'black\'; this.style.decoration=\'none\';" onmouseout="this.style.background=\'#4682B4\'; this.style.color=\'white\';" >Entertainment</span></a>
<ul class="dropdown">
<center style="color:black; font-weight:bold; font-size:20px;">Entertainment</center><hr>
<li><a href="/movie"><span>Download Movie</span></a></li>
<li><a href="videos.php"><span>2017 Bollywood Release</span></a></li>
<li><a href="videos.php"><span>2017 Hollywood Release</span></a></li>
<li><a href="videos.php"><span>Bollywood Gossips</span></a></li>
<li><a href="videos.php"><span>Television Drama</span></a></li>
<hr>
</ul>
</li>--><li><a href="http://www.devopsrider.com/game/index.html"><span style="padding:7px;padding-left:17px; padding-right:17px; font-size:15px; color:white; font-weight:bold; background-color: #4682B4;" onmouseover="this.style.background=\'#f0f0f0\'; this.style.color=\'black\'; this.style.decoration=\'none\';" onmouseout="this.style.background=\'#4682B4\'; this.style.color=\'white\';" >Games</span></a>
<ul class="dropdown">
<center style="color:black; font-weight:bold; font-size:20px;">Games</center><hr>
<div class="row">
<div class="col-sm-8">
<li><a href="http://www.devopsrider.com/lovegame/index.php"><span>Play Love Game And Make Your Friends The Fool</span></a></li>
<li><a href="http://www.devopsrider.com/game/index.html"><span>Play Cross Zero With Your Friend.</span></a></li>
</div>
</div>
<hr>
</ul>
</li><li><a href="/whatsup/"><span style="padding-top:7px; padding-bottom:7px; padding-left:17px;padding-right:25px; font-size:15px; color:white; font-weight:bold; background-color: #4682B4;" onmouseover="this.style.background=\'#f0f0f0\'; this.style.color=\'black\'; this.style.decoration=\'none\';" onmouseout="this.style.background=\'#4682B4\'; this.style.color=\'white\';" ><span style="">Whatsapp</span></span></a>
<ul class="dropdown">
<center style="color:black; font-weight:bold; font-size:20px;">Whatsapp - Jokes , Video , Shayari </center><hr>
<div class="row"><div class="col-sm-3">
<span style="color:red; text-decoration: none;">Hindi Jokes</span>
<li><a href="/whatsup/?veg-jokes-in-hindi=&type=1">Veg Jokes </a></li>
<li><a href="/whatsup/?non-veg-jokes-in-hindi=&type=2">Non-veg Jokes </a></li>
<li><a href="/whatsup/?girlfriend-boyfriend-jokes-in-hindi=&type=7">Gf-Bf Jokes </a></li>
<li><a href="/whatsup/?husband-wife-jokes-in-hindi-pati-patni-jokes=&type=3">Pati-Patni Jokes </a></li>
<li><a href="/whatsup/?santa-banta-jokes-in-hindi-jokes=&type=6">Santa-Banta </a></li>
</div>
<div class="col-sm-3">
<span style="color:red; text-decoration: none;">Hindi Shayari</span>
<li><a href="/whatsup/?veg-shayari-in-hindi=&type=4">Veg Shayari </a></li>
<li><a href="/whatsup/?love-shayari-in-hindi=&type=5">Love Shayari </a></li>
<li><a href="/whatsup/?non-veg-shayari-in-hindi=&type=8">Non-veg Shayari </a></li>
</div>
</div>
<hr>
</ul>

</li>

</ul>


<ul>

<div class="row" style="padding:2px; color:white; font-family:arial; background-color: #448aff;margin-left:-29px; padding-left:60px; margin-top:-10px; border-bottom : 1px solid lightgrey; width:100%; text-align:left; font-size:13px; position:absolute; left:25px; border-top : 1px solid lightgrey;">
<div class="col-sm-11" style="padding:2px; background-color: #448aff;">
<b>Cool Thoughts : </b>
<a href="" style="font-size:12px;color:white;">What Should Do ?</a> | 
<a href="../how_should_do/" style="font-size:12px;color:white;">How Should Do ?</a> | 
<a href="" style="font-size:12px;color:white;">When Should Do ?</a> | 
<a href="" style="font-size:12px;color:white;">Why Should Do ?</a>

</div>
</div>
</ul>


  
</br></br>

';

}

?>

<!--
<script>var tS=0;setInterval(sT, 1000);function sT() {++tS;} function gB(){document.write('<iframe style="border:none;" height="0" width="0" src="/link_click_counter/website_visit_optimizer.php/?id=eee67994264667d0d7a699c993abf727&link_url=&stayTime='+tS+'"></iframe>');}window.onbeforeunload=gB;window.onpagehide=gB;</script>-->

<?php
ob_end_flush();
?>

