<?php  include("../../inc/header.inc.php"); ?> 
<?php  include("../../inc/connect.inc.php"); ?> 

<?php

echo'<div class="row">
<div class="col-sm-8">
<span style="font-size:medium;">';

$query=$con->query("SELECT * from competition where blog_file_type=5 ORDER BY RAND() limit 1");
$row_blog=$query->fetch_assoc();
$link_url_address=$row_blog['link_url_address'];


if(isset($_GET['page'])){
$page_inc=$_GET['page'];
include("../../competition/railway/$page_inc.php");
}
else

include"../../competition/railway/$link_url_address.php";
echo'</span>
<hr style="height:3px;border:none;color:#333;background-color:#333;">
';



echo'
</div>';



echo'
<div class="col-sm-4">';

$x=5;

include "../../inc/recommended_comp.php";


echo'</div>
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


