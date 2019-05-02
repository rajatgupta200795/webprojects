<!DOCTYPE html>
<html>
<head>
    
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108473282-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-108473282-1');
</script>

    <title>Send online Dhanteras wishes</title>
        <meta name="description" content="Send online Dhanteras e-wishes to your friends, girlfriend, relative.">
        
<?php include "../inc/header.php";?>

<?php include "../inc/leftmenu.php";?>

</br>

<div style="text-align: center; color: ; font-family: 'Josefin Slab', serif; font-weight: bold; padding: 0px;">
    
<p style="font-size: 30px;">Create Your Wishes Of Dhanteras.</p>
</br></br>
<p id="newUserDetails" class="hidden" style=" z-index: 2; ">
    <div style="font-size: 20px; color: black; font-weight:bold;">
        <form>
    Your Name : </br><input id="senderFname" type="text" name="" ng-model="senderName" value="{{}}" required>
    <p id="wrongFname"></p>
    </br>
    Receiver Name :</br><input type="text" name="" ng-model="receiverName" value="{{}}"  required>
    </br></br>
    <buttton type="submit" onclick="genLink()" class="btn btn-info btn-lg"><b>Generate Dhanteras Wishes</b></buttton>
    </form>
    </br>
    <a href="http://www.devopsrider.com" style="font-size:23px; color:red;">Create wishes for another occasion.</a>
    </div>
</p>
<!--
</br></br>

<hr style="width: 98%; text-align: center; height: 2px; border-top: 1px solid #f3f3ee; background-color: #f7f7f7;">

</br></br></br>


<p style="font-size: 30px;">Send Dhanteras Wishes With Lovely Video.</p>
<iframe width="370" height="210" src="https://www.youtube.com/embed/5MOa0Ua5Prg" frameborder="3" allowfullscreen></iframe>
</br></br>
Copy and share this link : <b style="font-size: 25px;"><a href="https://www.youtube.com/5MOa0Ua5Prg">https://www.youtube.com/5MOa0Ua5Prg</a></b></br>
<div style="font-size: 17px;">Just copy this link and send it to your friends, relatives to wish them <b>A HAPPY Dhanteras .</b></div>

</br></br>

<hr style="width: 98%; text-align: center; height: 2px; border-top: 1px solid #f3f3ee; background-color: #f7f7f7;"> 
-->

</br></br>
</div>





<div class="hidden" id="generateLink" style="text-align: center; position: absolute; color:white; top:90px; margin-left: 5%; padding: 30px; font-size: 25px; background-color: black; width: 80%; height: auto;">
        <button class="btn btn-danger" onclick="hideLink()" style="margin-left: <?php  if(isMobileDevice())echo'200';else echo'580'; ?>px; color:white; padding:5px;width:40px; height:40px; font-size:17px;; background-color:red;">X</button></br></br>

    Copy this link and send it to {{receiverName}}.
    </br>
    <div style="padding: 30px; font-size: 20px;">
<p id="showLink"></p>

<script type="text/javascript">

        document.getElementById('showLink').innerHTML = '<a href="my-online-dhanteras-ewishes.php?{{senderName}}-sent-a-wish-to-{{receiverName}}"style="font-size:15px;">http://www.devopsrider.com/create-ewishes-for-dhanteras/my-online-dhanteras-ewishes.php?{{senderName}}-sent-a-wish-to-{{receiverName}}</a>';    
</script>

    </div>
</div>


<script type="text/javascript">

function genLink(){
    if(document.getElementById('senderFname').value!='Your First Name'){
    document.getElementById('generateLink').setAttribute("class","actions_one");
    document.getElementById('wrongFname').innerHTML = '';
    }
    else document.getElementById('wrongFname').innerHTML = '<div style="color:red;">Please enter your first name.</div>';}
function hideLink(){
    document.getElementById('generateLink').setAttribute("class","hidden");
}
</script>




<?php include "what-is-dhanteras.php";?>

<?php include "../inc/footer.php";?>

