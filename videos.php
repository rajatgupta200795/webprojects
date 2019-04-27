<?php  include ("./inc/header.inc.php"); ?> 


<?php

echo'<div class="row">
<div class="col-sm-8">
<span style="font-size:medium;">';
$query=$con->query("SELECT * from video_data where video_file_type=1 ORDER BY RAND() limit 1");
$row_video=$query->fetch_assoc();
$link_url_address=$row_video['link_url_address'];


if(isset($_GET['page'])){
$page_inc=$_GET['page'];
echo'<iframe src="./videos/$page_inc"></iframe>';
}
else
echo'<video width="100%" height="auto" style="border:3px solid black; border-radius:4px;"
controls><source src="./videos/a-inspiring-video.mp4" type="video/mp4" /></video>';

echo'</span>
<hr style="height:1px;border:none;color:#333;background-color:#333;">
';



echo'
</div>';



echo'
<div class="col-sm-4">';

$x=1;
include "./inc/recommended.php";

echo'
</div>
</div>

</div>

<div class="col-sm-2">';
if(!isMobileDevice()){
echo'<div style="width:200px; background-color:#f6f6f6; position:fixed; right:0px;">';
echo'


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
<?php  include ("./inc/header.inc.php"); ?> 


<?php

echo'<div class="row">
<div class="col-sm-8">
<span style="font-size:medium;">';
$query=$con->query("SELECT * from blog_data where blog_file_type=1 ORDER BY RAND() limit 1");
$row_blog=$query->fetch_assoc();
$link_url_address=$row_blog['link_url_address'];


if(isset($_GET['page'])){
$page_inc=$_GET['page'];
include("./blog_file/$page_inc.php");
}
else
include("./blog_file/$link_url_address.php");
echo'</span>
<hr style="height:3px;border:none;color:#333;background-color:#333;">
';



echo'
</div>';



echo'
<div class="col-sm-4">';

$x=1;
include "./inc/recommended.php";

echo'
</div>
</div>

</div>

<div class="col-sm-2">';
if(!isMobileDevice()){
echo'<div style="width:200px; background-color:#f6f6f6; position:fixed; right:0px;">';
echo'


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
