<?php
if($state=="xttar Pradesh"){
echo'
<a href="">
<div style="width:90%; text-align:center; border: 1px solid black; font-size:20px; line-height:40px;">
<div style="height:100px; background-color:red;color:white; font-weight:bold;">
<b style="color:white;">Learn PHP & Website Coding</b>
</br>
Only at $15</br>
</div>
<div style="height:130px; background-color:white; color:red; font-weight:bold;">
Start Today
<p style="font-size:15px; color:black;">rajatgupta200795@gmail.com</p>
<marquee style="color:black; top:-20px; position:relative; " width="160" direction="right" SCROLLDELAY=100><span class="glyphicon glyphicon-hand-up"></span></marquee>
</div>
</div>
</a>';
}
else
echo'
<a href="">
<div style="width:90%; text-align:center; border: 1px solid black; font-size:20px; line-height:40px;">
<div style="height:140px; background-color:red;color:white; font-weight:bold;">
<b style="color:white;">Start Advertisment</b></br>
<b style="font-size:17px;">In '.$state.' , '.$country.'</b>
</br>
Only For $15/month</br>
</div>
<div style="height:100px; background-color:white; color:red; font-weight:bold;">
mail us
<p style="font-size:15px; color:black;top:-10px; position:relative;">rajatgupta200795@gmail.com</p>
<marquee style="color:black; top:-35px; position:relative; " width="160" behavior="alternate" direction="right" SCROLLDELAY=100><span class="glyphicon glyphicon-hand-up"></span></marquee>
</div>
</div>
</a>';


?>
</br>

<?php
echo'
<div class="row"><div class="col-sm-12" style="font-family:  Open Sans, Pacifico, Oswald;  font-size:17px; padding:10px; width:90%; background-color: #468293; color:white;"><b> &nbsp;Recommended For You</b></div></div>
<div class="row"><div class="col-sm-12" style="font-size:15px; padding-left:15px; width:90%; background-color: ;"></br></div></div>

';


$i=0;
$query=$con->query("SELECT * from blog_data where blog_file_type=$x ORDER BY RAND()");
while($row_blog=$query->fetch_assoc()){
$blog_file_name=$row_blog['blog_file_name'];
$blog_file_type=$row_blog['blog_file_type'];
$link_url_title=$row_blog['link_url_title'];
$link_url_address=$row_blog['link_url_address'];
$meta_description=$row_blog['meta_description'];

if($i==0 && !isMobileDevice()){
echo'
';
}

echo'<div class="row"><div class="col-sm-12" style="font-size:20px; padding-left:15px; width:90%; background-color:;">
<span style="font-size:20px;"><span> <a  href="?page='.$link_url_address.'&link_title='.$link_url_title.'&meta_description='.$meta_description.'" style="font-size:medium; color: grey ;">'.$blog_file_name.'</a>
<hr style="width:100%; height:1px; background-color:black;">
</div></div>
';
$i++;
}

?>



