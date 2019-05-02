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

<div class="row">
<div class="col-sm-3">

<?php

if(!isMobileDevice())
echo'
<div style="margin-right:40px; padding-left: 40px; line-height: 30px; border-right: 1px solid #f0f0f0; margin-top:-10px;">
    <div style="font-family: \'Pangolin\', cursive; font-size: 18px; margin-top: 20px; font-weight: bold; padding-left: 20px; padding-bottom: 10px;"> Recommended For You</div>
    <div style="font-family: \'Source Sans Pro\', sans-serif; font-size: 15px;  padding-left: 20px;">
        <div style="margin-top: 10px; width: 80%; text-align: center; height: 2px; border-top: 1px solid #f3f3ee; background-color: #f7f7f7;"></div></br>
        <b>Festivals</b></br>
        <a href="http://www.devopsrider.com/my-wishes/create-ewishes-for-diwali/index.php">Diwali Wishes</a></br>
        <a href="http://www.devopsrider.com/my-wishes/create-ewishes-for-dhanteras/index.php">Dhanteras Wishes</a></br>
        <a href="http://www.devopsrider.com/my-wishes/create-ewishes-for-narak-chaudas/index.php">Narak Chaudas Wishes</a></br>
        <a href="http://www.devopsrider.com/my-wishes/create-ewishes-for-bhaiya-dooj/index.php">Bhai Dooj Wishes</a></br>
        <a href="http://www.devopsrider.com/my-wishes/create-ewishes-for-guru-purnima/index.php">Guru Purnima Wishes</a></br>
        <a href="http://www.devopsrider.com/my-wishes/create-ewishes-for-dussehra/index.php">Dussehra Wishes</a></br>
        <div style="margin-top: 20px; width: 80%; text-align: center; height: 2px; border-top: 1px solid #f3f3ee; background-color: #f7f7f7;"></div></br>

        <b>Occasions</b></br>
        <a href="http://www.devopsrider.com/my-wishes/create-ewishes-for-birth-day/index.php">Birthday Wishes</a></br>
        <a href="http://www.devopsrider.com/my-wishes/create-ewishes-for-new-year/index.php">New Year Wishes</a></br>
        <a href="http://www.devopsrider.com/my-wishes/create-ewishes-for-marriage-anniversary/index.php">Marriage Anniversay Wishes</a></br>
        <div style="margin-top: 20px; width: 80%; text-align: center; height: 2px; border-top: 1px solid #f3f3ee; background-color: #f7f7f7;"></div></br>

        <!--<b>Congratulations</b></br>
        <a href="">Congo For Job</a></br>
        <a href="">Congo For New Parents</a></br>
        <a href="">Congo For Marriage</a></br>
        <div style="margin-top: 20px; width: 80%; text-align: center; height: 2px; border-top: 1px solid #f3f3ee; background-color: #f7f7f7;"></div></br>
-->
        <b>Best Of Luck</b></br>
        <a href="http://www.devopsrider.com/my-wishes/create-best-of-luck-ewishes-for-job-interview/index.php">For Job Interview</a></br>
    </div>
</div>
';
?>

</div>
<div class="col-sm-9">
<div <?php if(isMobileDevice()) echo'class="container-fluid"';?> style="margin-right: <?php if(!isMobileDevice()) echo'50'; ?>px;">

