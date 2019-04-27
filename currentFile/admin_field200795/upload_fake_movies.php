<?php include ("headerbsy.inc.php");?>

</br></br></br></br>
<div class="container">
<div class="jumbotron">
<?php
ob_start();

echo'
<form action="upload_fake_movies.php" method="post">
Movie_Name : </br><textarea rows="5" cols="50" name="movie_name"></textarea></br></br>
Browser Title : </br><textarea rows="5" cols="50" name="link_url_title"></textarea></br></br>
Movie_Address : </br><textarea rows="5" cols="50" name="link_url_address"></textarea></br></br>
<input type="submit" value="submit" name="sbmt"/>
</form>
';


$movie_name=@$_POST['movie_name'];
$link_url_title=@$_POST['link_url_title'];
$link_url_address=@$_POST['link_url_address'];
$sbmt=@$_POST['sbmt'];

date_default_timezone_set("Asia/Calcutta");
$date=date("h:i / d-m-y");

if($sbmt){

       $query=$con->query("INSERT INTO fake_movies (id,movie_name,link_url_title,link_url_address) values ('id','$movie_name','$link_url_title','$link_url_address')");

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
