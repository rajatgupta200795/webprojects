<?php  include ("./inc/header.inc.php"); ?> 


<?php

echo'<div class="row">
<div class="col-sm-8">
<span style="font-size:medium;">';
$query=$con->query("SELECT * from blog_data where blog_file_type=7 ORDER BY RAND() limit 1");
$row_blog=$query->fetch_assoc();
$link_url_address=$row_blog['link_url_address'];


if(isset($_GET['page'])){
$page_inc=$_GET['page'];
include("./movie/index.php");
}
else
include("./movie/index.php");
echo'</span>
<hr style="height:3px;border:none;color:#333;background-color:#333;">
';



echo'
</div>';



echo'
<div class="col-sm-4">';

$x=7;
include "./inc/recommended.php";

echo'
</div>
</div>

</div>';

 include ("./inc/footer.inc.php");

ob_end_flush();
?>

</div>


