<?php


echo'<div class="row"><div class="col-sm-12" style="font-family: fb agency;  font-size:17px; padding:10px; width:90%; background-color: #468293; color:white;"><b> &nbsp;Recommended For You</b></div></div>
<div class="row"><div class="col-sm-12" style="font-size:15px; padding-left:15px; width:90%; background-color: #f1f1f1;"></br></div></div>

';



$query=$con->query("SELECT * from competition where blog_file_type=5 ORDER BY RAND()");
while($row_blog=$query->fetch_assoc()){
$blog_file_name=$row_blog['blog_file_name'];
$blog_file_type=$row_blog['blog_file_type'];
$link_url_title=$row_blog['link_url_title'];
$link_url_address=$row_blog['link_url_address'];
$meta_description=$row_blog['meta_description'];


echo'<div class="row"><div class="col-sm-12" style="font-size:15px; padding-left:15px; width:90%; background-color: #f1f1f1;">
<span style="font-size:15px;"><span> <a  href="?page='.$link_url_address.'&link_title='.$link_url_title.'&meta_description='.$meta_description.'" style="font-size:small; color:  #4682B4;">'.$blog_file_name.'.</a>
<hr style="background-color: white; height:4px; width:100%;">
</div></div>
';

}

?>