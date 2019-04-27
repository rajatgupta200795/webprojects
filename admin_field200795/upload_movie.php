<?php include ("headerbsy.inc.php");?>

</br></br></br></br>
<div class="container">
<div class="jumbotron">
<?php
ob_start();

echo'
<form action="upload_videos.php" method="post" enctype="multipart/form-data">
Video Name : <input type="text" name="video_name"/></br></br>
Video Type : <input type="text" name="video_type"/></br></br>
Video Description : </br><textarea rows="5" cols="50" name="video_about"></textarea></br></br>
Upload Poster : <input type="file" name="fileToUpload"/></br>
<input type="submit" value="submit" name="sbmt"/>
</form>
';


$video_name=@$_POST['video_name'];
$video_type=@$_POST['video_type'];
$video_about=@$_POST['video_about'];
$sbmt=@$_POST['sbmt'];

date_default_timezone_set("Asia/Calcutta");
$date=date("h:i:sa / d-m-y");

if($sbmt){

       $target_dir = "../video/";
       $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
       $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


if ($_FILES["fileToUpload"]["size"] > 100000000) {
       echo "<script type='text/javascript'>('Sorry, your file is too large.')</script>";
}
// Allow certain file formats
else{
if($imageFileType = "jpg" && $imageFileType = "png" && $imageFileType = "jpeg" 
        && $imageFileType != "gif" ) {
if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
$query=$con->query("INSERT INTO video (video_name,video_type,video_about,video_link,photo_link,date_added) values ('$video_name','$video_type','$video_about','./video/','$target_file','$date')");

if($query)
echo"uploaded";
else
echo"NOT Uploaded";
}
}

else 
        echo "</br>File is not an image</br>please Choose A Valid Image.</br>";
}
}

echo'</br></br></br></br>';

echo "<h1>New Bollywood video</h1></br>";

$query=$con->query("SELECT * from video where Video_type=1 ORDER BY id DESC");
while($row=$query->fetch_assoc()){

$video_name=$row['video_name'];
$video_about=$row['video_about'];
$video_link=$row['video_link'];
$photo_link=$row['photo_link'];

echo'<div class="row"><div class="col-sm-7"><a href="'.$video_link.'" download><img height="200"width="200" src="'.$photo_link.'"/></a></div>
<div class="col-sm-5"><div style="color:black; font-size:25px;">'.$video_name.'</div>
'.$video_about.'</br></br>
<div class="row"><div class="col-sm-4"><a href="'.$video_link.'" download><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-download"></span>&nbsp;&nbsp;Download&nbsp;&nbsp;</button></a></div><div class="col-sm-3"></div></div>
</div></div></br></br></br>';
}

echo "<h1>New Bollywood Song</h1></br>";

$query=$con->query("SELECT * from video where Video_type=2 ORDER BY id DESC");
while($row=$query->fetch_assoc()){

$video_name=$row['video_name'];
$video_about=$row['video_about'];
$video_link=$row['video_link'];
$photo_link=$row['photo_link'];

echo'<div class="row"><div class="col-sm-7"><video width="400" height="300" controls>
    <source src="'.$video_link.'" type="video/mp4" /></video></div>
<div class="col-sm-5"><div style="color:black; font-size:25px;">'.$video_name.'</div>
'.$video_about.'</br></br>
<div class="row"><div class="col-sm-4"><a href="'.$video_link.'" download><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-download"></span>&nbsp;&nbsp;Download&nbsp;&nbsp;</button></a></div><div class="col-sm-3"></div></div>
</div></div></br></br></br>';
}



ob_end_flush();

?>
</div>
</div>


</body>
</html>
