<?php include"./inc/header.php";  


?>

<div class="container">

<center><h1>All Notice Details</h1></center><hr>



<?php


$query = $con->query("SELECT * from notice where 1=1 ORDER BY id DESC limit 10");

echo"<ol>";
while($row=$query->fetch_assoc()){

   echo" <li><h4><b><u>".$row['added_day']." ".$row['added_date']."</u></b></h4>
   ".$row['notice_text']." </br></br>
   <b>Notice issued by : ".strtoupper($row['by_teacher'])."</b><hr></li>"; 
   

}



?>

</div>


<?php include"./inc/footer.php";  ?>
