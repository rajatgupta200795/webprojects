<?php include ("headerbsy.inc.php");?>

</br></br></br></br>
<div class="container">
<div class="jumbotron">
<?php
ob_start();

echo'
<form action="upload_jokes.php" method="post">
Type : <input type="text" name="joke_type"/>  <b>(for any joke 1,for non-veg joke 2 ,for pati-patni joke 3 ,for simple-shayari 4 ,for love-shayari 5 , for santa-banta joke 6 , for gf-bf joke 7 , for non-veg sayari 8 , for sad sayari 9, for short story 10)</b>
</br></br>
Title : </br><textarea rows="5" cols="50" name="joke_title"></textarea></br></br>
Joke / Shayari : </br><textarea rows="5" cols="50" name="joke_content"></textarea></br></br>
<input type="submit" value="submit" name="sbmt"/>
</form>
';


$joke_type=@$_POST['joke_type'];
$joke_title=@$_POST['joke_title'];
$joke_content=@$_POST['joke_content'];
$sbmt=@$_POST['sbmt'];

date_default_timezone_set("Asia/Calcutta");
$date=date("h:i / d-m-y");

if($sbmt){

       $query=$con->query("INSERT INTO whatsapp_jokes (joke_type,joke_title,joke_content,date_added) values ('$joke_type','$joke_title','$joke_content','$date')");

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
