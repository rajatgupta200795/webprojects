<?php include"../inc/header.php";  

ob_start();

if(!isset($_COOKIE['user_login']))
header("location:../");

?>

<div class="container">

<center><h1>Update Notice</h1></center><hr>


<form  class="navbar-form" method="POST" action="">
 <div class="form-group-sm">

<h4><b>Notice :</b></h4>
<textarea rows="6" cols="93" name="notice_text" placeholder="Enter the notice..." class="form-control" required></textarea></br></br>

<b>Issued By</b> : <input type="text" size="40" class="form-control" placeholder="Enter your full name with Mr./Ms." name="by_teacher" required></br></br>

<center><input type="submit" value="Submit" class="btn btn-info" name="send"></center>

</div></form>


</div>

<hr>
</br>

<?php


$query = $con->query("SELECT * from notice where 1=1 ORDER BY id DESC limit 10");

echo"<ol>";
while($row=$query->fetch_assoc()){

   echo" <li><h4><b><u>".$row['added_day']." ".$row['added_date']."</u></b></h4>
   ".$row['notice_text']." </br></br>
   <b>Notice issued by : ".strtoupper($row['by_teacher'])."</b><hr></li>"; 
   
 
   

}
echo"</ol>";


$send = @$_POST['send'];

if($send){

$notice_text = @$_POST['notice_text'];
$by_teacher = @$_POST['by_teacher'];
$added_date = date("d M Y");
$added_day = date("l");


$query = $con->query("INSERT into notice (notice_text , by_teacher , added_date , added_day) values ('$notice_text' , '$by_teacher' , '$added_date' , '$added_day')");

header("location:home.php");
exit();



}

ob_end_flush();

?>


<?php include"../inc/footer.php";  ?>
