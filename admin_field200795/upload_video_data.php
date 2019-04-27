<?php include ("headerbsy.inc.php");?>

</br></br></br></br>
<div class="container">
<div class="jumbotron">
<?php
ob_start();

echo'
<form action="upload_video_data.php" method="post">
video Type : <input type="text" name="video_file_type"/></br></br>
video File Name : </br><textarea rows="5" cols="50" name="video_file_name"></textarea></br></br>
Browser Title : </br><textarea rows="5" cols="50" name="link_url_title"></textarea></br></br>
video File Address : </br><textarea rows="5" cols="50" name="link_url_address"></textarea></br></br>
video Meta Description : </br><textarea rows="5" cols="50" name="meta_description"></textarea></br></br>
<input type="submit" value="submit" name="sbmt"/>
</form>
';


$video_file_name=@$_POST['video_file_name'];
$video_file_type=@$_POST['video_file_type'];
$link_url_title=@$_POST['link_url_title'];
$link_url_address=@$_POST['link_url_address'];
$meta_description=@$_POST['meta_description'];
$sbmt=@$_POST['sbmt'];

date_default_timezone_set("Asia/Calcutta");
$date=date("h:i / d-m-y");

if($sbmt){

       $query=$con->query("INSERT INTO video_data (video_file_type,video_file_name,link_url_title,link_url_address,meta_description,date_added) values ('$video_file_type','$video_file_name','$link_url_title','$link_url_address','$meta_description','$date')");

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
