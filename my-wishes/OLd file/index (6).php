<?php include "../inc/header.php";?>

<?php include "../inc/leftmenu.php";?>

</br>

<div style="text-align: center; color: ; font-family: 'Josefin Slab', serif; font-weight: bold; padding: 0px;">
	
<p style="font-size: 30px;">Create Your Bhaiya Dooj Wishes</p>
</br></br>
<p id="newUserDetails" class="hidden" style=" z-index: 2; ">
    <div style="font-size: 20px; color: black; font-weight:bold;">
        <form>
    Your Name : </br><input id="fname" type="text" name="" style="border:1px solid orange;" ng-model="senderName" value="{{}}" required> 
    <p id="wrongFname"></p>
    </br>
    <input type="hidden" style="border:1px solid orange;"  name="" ng-model="receiverName" value="{{}}"  required>
    
    <?php
    if(!isMobileDevice())
    echo'<buttton type="submit" onclick="genLink()" class="btn btn-success btn-lg"><b>Create Bhaiya Dooj Wishes</b></buttton>';
    else{
        echo'<a href="https://api.whatsapp.com/send?text=touch this blue line and see magic
         ðŸ‘‰ http://www.ewishes.online/create-ewishes-for-bhaiya-dooj/my-online-bhaiya-dooj-ewishes.php?{{senderName}}-sent-a-wish-to-" class="btn btn-success btn-lg" style="font-family:arial;">Share on Whatsapp</a>';
        }
        ?>
        
    </form>
    </br></br>
    <a href="http://www.ewishes.online" style="font-size:23px; color:grey;">Create wishes for another occasion.</a>
    </div>
</p>

</br></br>

<hr style="width: 98%; text-align: center; height: 2px; border-top: 1px solid #f3f3ee; background-color: #f7f7f7;">

</br></br></br>


<p style="font-size: 30px;">Send Bhaiya Dooj Wishes With Lovely Video.</p>
<iframe width="370" height="210" src="https://www.youtube.com/embed/s5W_QiuFjgo" frameborder="3" allowfullscreen></iframe>
</br></br>
Copy and share this link : <b style="font-size: 20px;"><a href="https://www.youtube.com/s5W_QiuFjgo">https://www.youtube.com/s5W_QiuFjgo</a></b></br>
<div style="font-size: 17px;">Just copy this link and send it to your friends, relatives to wish them <b>A HAPPY Bhaiya Dooj .</b></div>

</br></br>

<hr style="width: 98%; text-align: center; height: 2px; border-top: 1px solid #f3f3ee; background-color: #f7f7f7;"> 
</br></br>
</div>





<div class="hidden" id="generateLink" style="text-align: center; position: absolute; color:white; top:90px; margin-left: 5%; padding: 30px; font-size: 25px; background-color: black; width: 80%; height: auto;">
        <button class="btn btn-danger" onclick="hideLink()" style="margin-left: <?php  if(isMobileDevice())echo'200';else echo'580'; ?>px; color:white; padding:5px;width:40px; height:40px; font-size:17px;; background-color:red;">X</button></br></br>

	<div class="copyMssgClass" id="copyMssg">Press the Copy Button.</div>
	
	<div style="padding: 20px; font-size: 15px;">
<p id="showLink"></p>

<p class="hidden" id="linkCopied"style="font-size:20px;"><button class="btn btn-success btn-lg">Wishes Copied</button></br></br> Your Bhaiya Dooj wishes has been copied, now please share it.</p>

</br>

<script type="text/javascript">

		document.getElementById('showLink').innerHTML = '<a id="textLink" style="background-color:white; padding:5px;" href="my-online-bhaiya-dooj-ewishes.php?{{senderName}}-sent-a-wish-to-" style="font-size:15px;">http://www.ewishes.online/create-ewishes-for-bhaiya-dooj/my-online-bhaiya-dooj-ewishes.php?{{senderName}}-sent-a-wish-to-</a></br></br></br> <button class="btn btn-primary btn-lg" onClick="copyToClipboard()">Copy</button>';	
		
		
		function copyToClipboard() {
	
   text = document.getElementById("textLink");
	
	document.getElementById('showLink').setAttribute("class","hidden");
	document.getElementById('copyMssg').setAttribute("class","hidden");
	document.getElementById('linkCopied').setAttribute("class","linkCopiedClass");

    if (window.clipboardData && window.clipboardData.setData) {
        // IE specific code path to prevent textarea being shown while dialog is visible.
        return clipboardData.setData("Text", text); 

    } else if (document.queryCommandSupported && document.queryCommandSupported("copy")) {
        var textarea = document.createElement("textarea");
        textarea.textContent = text;
        textarea.style.position = "fixed";  // Prevent scrolling to bottom of page in MS Edge.
        document.body.appendChild(textarea);
        textarea.select();
        try {
            return document.execCommand("copy");  // Security exception may be thrown by some browsers.
        } catch (ex) {
            console.warn("Copy to clipboard failed.", ex);
            return false;
        } finally {
            document.body.removeChild(textarea);
        }
    }
}


</script>

	</div>
</div>


<script type="text/javascript">

function genLink(){
	document.getElementById('generateLink').setAttribute("class","actions_one");
}
function hideLink(){
	document.getElementById('generateLink').setAttribute("class","hidden");

    document.getElementById('showLink').setAttribute("class","showLinkClass");
	document.getElementById('copyMssg').setAttribute("class","copyMssgClass");
	document.getElementById('linkCopied').setAttribute("class","hidden");
}
</script>




<?php include "../inc/diwaliEffect.php";?>

<?php include "what-is-bhaiya-dooj.php";?>

<?php include "../inc/footer.php";?>

