<?php


echo'
</br>
<div class="row"><div class="col-sm-12" style="  font-size:17px; padding:10px; width:90%; background-color: #468293; color:white;"><b> &nbsp;Recommended For You</b></div></div>
<div class="row"><div class="col-sm-12" style="font-size:15px; padding-left:15px; width:90%; background-color: ;"></br></div></div>

';

if($x!="")
$query="SELECT * from whatsapp_jokes where joke_type=$x order by rand() limit 10";
else
$query="SELECT * from whatsapp_jokes where 1=1 order by rand() limit 10";

$query=$con->query($query);
while($row_blog=$query->fetch_assoc()){
$id=$row_blog['id'];
$joke_type=$row_blog['joke_type'];
$joke_title=$row_blog['joke_title'];
$joke_content=$row_blog['joke_content'];


echo'<div class="row"><div class="col-sm-12" style="font-size:15px; padding-left:15px; width:90%; background-color: ;">
<a  href="?joke_id='.$id.'&joke_title='.$joke_title.'&type='.$joke_type.'&meta_description='.$joke_content.'&link_title='.$joke_content.'" style="font-size: medium; color:  grey;">'.$joke_title.'.</a>
<hr style="background-color: black; height:1px; width:100%;">
</div></div>
';

}
?>