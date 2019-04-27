<?php include "../inc/connect.inc.php";  

ob_start();

if(!isset($_COOKIE['user_gm']) && (basename($_SERVER['PHP_SELF'])=="mydb.php" || basename($_SERVER['PHP_SELF'])=="mydb.php")){
header("location:index.php");
exit();
}
?>

<!DOCTYPE html>
<html>
<head>


             <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />

    <meta name="viewport" content="width=400">
 
    <meta name="description" content="Love Game : Let's play love game and read amazing and 100 percent true facts about your crush.How much your crush loves you and they really love you or not.">


<link rel="shortcut icon" href="../title.png" type="image/png"/>

<title>Love Game</title>

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

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-8498178293221157",
    enable_page_level_ads: true
  });
</script>

</head>


<body style="background-image:url('../lovegame/wp1.jpg'); background-repeat:no-repeat; background-size:cover;">


<?php

if($_SERVER['PHP_SELF']!='/lovegame/crush.php'){

/*if(!isMobileDevice())
echo'<div style="position:fixed; padding:10px; background-color:pink; font-family:cursive; color:darkgreen; font-size:13px; left:45%; top:0px;">For Any Help Whatsapp @ +919807264017</div>
';
else
echo'<div style="position:fixed; padding:10px; background-color:pink; font-family:cursive; color:darkgreen; font-size:13px; left:70%; top:0px;">For Any Help Whatsapp @ +919807264017</div>
';*/


}
?>

<div >

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


