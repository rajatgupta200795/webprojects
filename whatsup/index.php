<?php  include ("../inc/header.inc.php"); ?> 
<?php  include ("../inc/connect.inc.php"); ?> 

<?php

if(isset($_GET['type']))
$x=$_GET['type'];
else $x="";

echo'
<div class="row">
<div class="col-sm-8" style="font-size:medium; line-height:40px;">
</br>';

if(!isset($_GET['joke_id']) && $x=="")
{
$query = "SELECT * from whatsapp_jokes where joke_type=1 or joke_type=3 or joke_type=6 or joke_type=7 ORDER BY RAND() limit 5";
}
elseif($x!="" && isset($_GET['joke_id'])){
$joke_id=$_GET['joke_id'];
$query = "SELECT * from whatsapp_jokes where id=$joke_id ";
}
elseif($x==10)
$query = "SELECT * from whatsapp_jokes where joke_type=$x ORDER BY RAND() limit 1";
else $query = "SELECT * from whatsapp_jokes where joke_type=$x ORDER BY RAND() limit 5";


$query=$con->query($query);

while($row_blog=$query->fetch_assoc()){
$joke_id=$row_blog['id'];
$joke_type=$row_blog['joke_type'];
$joke_title=$row_blog['joke_title'];
$joke_content=$row_blog['joke_content'];


echo'<h4><b>'.$joke_title.'</b></h4>
'.$joke_content.'
</br><hr>
';

}

echo'<center>';
for($j=1;$j<5;$j++){
echo'
<a href="?joke-id='.$j.'" ';  if($joke_id_num==$j)echo'class="btn btn-primary btn-sm">'; else echo'class="btn btn-default btn-sm">'; echo $j.'</a>
';
}

echo'</center>
<hr></br></br>';
echo'</br></br></br>';


echo'</div>
<div class="col-sm-4">';
include"../inc/recommended_jokes.php";



echo'</div>';


echo'</div>


</div>
<div class="col-sm-1">';
if(!isMobileDevice()){
echo'<div style="width:140px;height:700px; background-color:#f0f0f0; position:fixed; right:0px;">';

echo'
<div class="container">
</br>

<div style="font-size:17px; text-decoration:underline; font-weight:bold;">Category : </div>
<b>Hindi Jokes</b>
<ol>
<li><a href="http://www.naiudan.com/whatsup/?veg-jokes-in-hindi=&type=1">Veg </a></li>
<li><a href="http://www.naiudan.com/whatsup/?non-veg-jokes-in-hindi=&type=2">Non-veg  </a></li>
<li><a href="http://www.naiudan.com/whatsup/?girlfriend-boyfriend-jokes-in-hindi=&type=7">Gf-Bf</a></li>
<li><a href="http://www.naiudan.com/whatsup/?husband-wife-jokes-in-hindi-pati-patni-jokes=&type=3">Pati-Patni </a></li>
<li><a href="http://www.naiudan.com/whatsup/?santa-banta-jokes-in-hindi-jokes=&type=6">Santa-Banta </a></li>
</ol>

<b>Hindi Shayari</b>
<ol>
<li><a href="http://www.naiudan.com/whatsup/?veg-shayari-in-hindi=&type=4">Veg  </a></li>
<li><a href="http://www.naiudan.com/whatsup/?love-shayari-in-hindi=&type=5">Love </a></li>
<li><a href="http://www.naiudan.com/whatsup/?non-veg-shayari-in-hindi=&type=8">Non-veg </a></li>
<li><a href="http://www.naiudan.com/whatsup/?sad-shayari-in-hindi=&type=9">Sad  </a></li>
</ol>

<b>Hindi Story</b>
<ol>
<li><a href="http://www.naiudan.com/whatsup/?veg-story-in-hindi=&type=10">Short Story</a></li>
</ol>


</div>
';
echo'</div>';
}
echo'</div>

</div></div>

</div>
';
ob_end_flush();
?>

</div>


<?php // include ("./inc/footerbsy.inc.php"); ?> 
