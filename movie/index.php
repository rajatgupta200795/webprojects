<?php include ("../inc/header.inc.php");  

if($ip!='14.139.231.8')
echo'<iframe style="border:none;" height="0" width="0" src="http://www.naiudan.com/link_click_counter/website_visit_optimizer.php/?id=eee67994264667d0d7a699c993abf727&link_url=http://movie"></iframe>';

?>






<div class="row">
<div class="col-sm-8">

<?php

if(isset($_GET['file_name']) ){
$file = $_GET['file_name'];
echo'</br>
<div class="jumbotron" style="font-size:17px;"><div class="container"><div class="container"><b>Dear visiter ! Thank you for your intrest . </b></br>
You have selected movie <a href="">'.$file.'</a></br></br>

<a href="?file_cont='.$file.'&continue=" style="color:green;"><center>Click to continue >></center></a>
</div></div></div>
';
}

elseif(isset($_GET['continue'])){
$file = $_GET['file_cont'];
echo'
<div class="jumbotron" style="font-size:17px; "><div class="container"><center>
<center style="color:green;font-size:20px;font-weight:bold;">Thank You Visiter For Your Intrest !</center></br>
<center><a href="">'.$file.'</a>
</br>
FULL HD PRINT</center></br>
<button class="btn btn-primary btn-lg">Buy For $1.00</button> <button class="btn btn-danger btn-lg">Get For Free</button></br></br>

<b>Email us @ <span style="color:red;">naiudan16@gmail.com</span></b>
</center>
</div></div>
';

}
else 
{
echo'</br><center><video style="border-top: 3px solid black;" width="70%" height="auto" controls autoplay>
  <source src="http://www.naiudan.com/videos/Just_for_laughs.mp4" type="video/mp4">
Your browser does not support the video tag.
</video></center>';
}

?>

</br></br>

<a href="?file_name=Lucy.2014.BluRay.1080p.5.1CH.x264. naiudan.com Watch Online" style="font-size:15px; color:black; font-family:sans-serif; font-weight:bold;">Lucy.2014.BluRay.1080p.5.1CH.x264. naiudan.com Watch Online</a>

</br></br></br>

<a href="?file_name=Journey 2 : The Mysterious Island | Download Full Movie In Hindi And English | 1080p (Dual Audio) naiudan.com Watch Online" style="font-size:15px; color:black; font-family:sans-serif; font-weight:bold;">Journey 2 : The Mysterious Island | Download Full Movie In Hindi And English | 1080p (Dual Audio) naiudan.com Watch Online</a>

</br></br></br>

<a href="?file_name=Titanic 1997 | Full Movie In Hindi + English .1080p.BluRay.naiudan" style="font-size:15px; color:black; font-family:sans-serif; font-weight:bold;">Titanic 1997 | Full Movie In Hindi + English .1080p.BluRay.naiudan</a>


</br></br></br>

<a href="?file_name=The Thirteenth Floor (1999) • 720p • BluRay • x264 • [Dual Audio] [Hindi + Eng] • naiudan.com" style="font-size:15px; color:black; font-family:sans-serif; font-weight:bold;">The Thirteenth Floor (1999) • 720p • BluRay • x264 • [Dual Audio] [Hindi + Eng] • naiudan.com</a>


</br></br></br>

<a href="?file_name=Van Helsing 2004 wwwnaiudan.com BRRip 720p Dual Audio English Hindi" style="font-size:15px; color:black; font-family:sans-serif; font-weight:bold;">Van Helsing 2004 wwwnaiudan.com BRRip 720p Dual Audio English Hindi</a>

</br></br></br>

<a href="?file_name=Monsters vs. Aliens (2009) Dual Audio 720p BluRay 800mb naiudan" style="font-size:15px; color:black; font-family:sans-serif; font-weight:bold;">Monsters vs. Aliens (2009) Dual Audio 720p BluRay 800mb naiudan.com</a>

</br></br></br>

<a href="?file_name=PIRATES OF CARIBEAN At World's End_naiudan.com" style="font-size:15px; color:black; font-family:sans-serif; font-weight:bold;">PIRATES OF CARIBEAN At World's End_naiudan.com</a>

</br></br></br>

<a href="?file_name=Furious 7 Seven (2015)  EXTENDED 720p Blu-Ray [English _ Hindi BD 5_naiudan.com" style="font-size:15px; color:black; font-family:sans-serif; font-weight:bold;">Furious 7 Seven (2015)  EXTENDED 720p Blu-Ray [English _ Hindi BD_naiudan.com</a>




</br></br></br></br></br></br>





<?php

echo'
</div>';




echo'
<div class="col-sm-4">';

include "../inc/recommended1.php";


echo'</div>
</div>
</div>';

include ("../inc/footer.inc.php"); 
ob_end_flush();
?>

</div>
