<?php include ("headerbsy.inc.php");?>

</br></br></br></br>
<div class="container">
<div class="jumbotron">
<?php
ob_start();

echo'
<form action="upload_blog_data.php" method="post">
Blog Type : <input type="text" name="blog_file_type"/> (1 for current , 3 for biography , 4 for technology , 5 for health , 6 for love tips)</br></br>
Blog File Name : </br><textarea rows="5" cols="50" name="blog_file_name"></textarea></br></br>
Browser Title : </br><textarea rows="5" cols="50" name="link_url_title"></textarea></br></br>
Blog File Address : </br><textarea rows="5" cols="50" name="link_url_address"></textarea></br></br>
Blog Meta Description : </br><textarea rows="5" cols="50" name="meta_description"></textarea></br></br>
<input type="submit" value="submit" name="sbmt"/>
</form>
';


$blog_file_name=@$_POST['blog_file_name'];
$blog_file_type=@$_POST['blog_file_type'];
$link_url_title=@$_POST['link_url_title'];
$link_url_address=@$_POST['link_url_address'];
$meta_description=@$_POST['meta_description'];
$sbmt=@$_POST['sbmt'];

date_default_timezone_set("Asia/Calcutta");
$date=date("h:i / d-m-y");

if($sbmt){

       $query=$con->query("INSERT INTO blog_data (blog_file_type,blog_file_name,link_url_title,link_url_address,meta_description,date_added) values ('$blog_file_type','$blog_file_name','$link_url_title','$link_url_address','$meta_description','$date')");

if($query)
echo"Uploaded";
else
echo"Not Uploaded";

}




ob_end_flush();

?>
</div>
</div>


</body>
</html>
