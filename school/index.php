<?php include"./inc/header.php";  ?>


<div id="myCarousel" class="carousel slide" data-ride="carousel"  data-interval="2000">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>

  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="./img/img2.jpg" alt="Mahaveer Convent School">
      <div class="carousel-caption">
        <h3>Welcome To Mahaveer Convent School</h3>
      
      </div>
    </div>

    <div class="item">
      <img  src="./img/img3.jpg" alt="Mahaveer Convent School">
      <div class="carousel-caption">
        <h2>Class Room</h2>
        <p></p>
      </div>
    </div>

     <div class="item">
      <img  src="./img/img4.jpg" alt="Mahaveer Convent School">
      <div class="carousel-caption">
        <h2>Class Room</h2>
        <p></p>
      </div>
    </div>

    <div class="item">
      <img  src="./img/img5.jpg" alt="Mahaveer Convent School">
      <div class="carousel-caption">
        <h2>Play Ground</h2>
        <p>Large Play Ground To Play</p>
      </div>
    </div>


  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

</div>


<div style="padding-top:8px; padding-bottom:8px; background-color:#f0f0f0; font-size:14px; color:#412C71;">
    <div class="row">
<?php
if(isMobileDevice())
echo'<div class="col-sm-1"></div>  
  <div class="col-sm-11"><div class="link_change">
&nbsp;&nbsp;&nbsp;&nbsp;<a href="./notice_feeds.php"style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif;"><b>Notice</b></a> 
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="exam_shedule.php"style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif;"><b>Exam</b></a> 
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="extra_activity.php"style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif;"><b>Extra Activity</b></a> 
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <a href=""><b>Holydays</b></a>   
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   <a href="contact_us.php"style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif;"><b>Contact Us</b></a>    
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <a href="about_us.php"style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif;"><b>About Us</b></a>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   <a href="../admin/"style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif;"><b>Admin</b></a
</div>';
else  
echo'  <div class="col-sm-1"></div>
  <div class="col-sm-11"><div class="link_change">
&nbsp;&nbsp;&nbsp;&nbsp;<a href="./notice_feeds.php"style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif;"><b>Notice</b></a>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="exam_shedule.php"style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif;"><b>Exam</b></a> 
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <a href="extra_activity.php"style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif;"><b>Extra Activity</b></a> 
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;  <a href=""style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif;"><b>Holydays</b></a>   
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="contact_us.php"style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif;"><b>Contact Us</b></a>    
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="about_us.php"style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif;"><b>About Us</b></a>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <a href="./admin/"style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif;"><b>Admin</b></a
</div>';
?>
   </div></div>
</div>
</div>
<hr>


<div style="height:150px;"></div>


<div class="row" style="padding-top:30px; padding-bottom:120px; background-color:#275F59; border-radius:10px;"><div class="col-sm-3"></div>
<div class="col-sm-6"style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif;">

<div style="margin-top: -140px; padding-top:10px; padding-bottom:50px;font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; background-color:#4A809E; color:white;  font-size:15px;  border-radius:10px;"><b><center style="font-size:30px;"><span  class="glyphicon glyphicon-list"></span> Notice</center></b>

<?php
$query = $con->query("SELECT * from notice where 1=1 ORDER BY id DESC limit 1");

while($row=$query->fetch_assoc()){

$edit_notice="";

if(strlen($row['notice_text'])>200){
  for ($i=0; $i < 200; $i++) { 
$edit_notice = $edit_notice ."". $row['notice_text'][$i];
  }
$edit_notice = $edit_notice ." ... <a href='../notice_feeds.php' style='color:blue;'><u> read more</u></a>";
}else if(strlen($row['notice_text'])>100 && isMobileDevice()){
  for ($i=0; $i < 100; $i++) { 
$edit_notice = $edit_notice ."". $row['notice_text'][$i];
  }
$edit_notice = $edit_notice ." ... <a href='../notice_feeds.php' style='color:blue;'><u> read more</u></a>";
}else $edit_notice = $row['notice_text'];

   echo"<ol class='container-fluid' style=\"width:90%; margin-left:30px; font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;\"><h4 ><b style='color: ; font-size:20px; text-decoration:none;'>Recent Notice</b> : ".$row['added_day']." ".$row['added_date']."</h4>
   ".$edit_notice." </br>
   <b>Notice issued by : ".strtoupper($row['by_teacher'])."</b></ol>"; 
   }
?>

<div class="container-fluid" style="padding-left:40px; padding-right:40px;font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif;">
<div  style="background-color:white; color:black; padding-top:0px; padding-bottom:0px; height:150px; font-size:12px;">

<marquee align="left" direction="up" behavior="scroll" height="135" width="<?php if(!isMobileDevice())echo'430';else echo'280';?>" onMouseOver="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 1, 0);" scrollamount="1" scrolldelay="7" style="margin-top:10px;">
    

<?php
$query = $con->query("SELECT * from notice where 1=1 ORDER BY ID DESC limit 10");
echo"<ol>";
if($query->num_rows>0){
while($row=$query->fetch_assoc()){

   echo" <li><h4><b><u>".$row['added_day']." ".$row['added_date']."</u></b></h4>
   ".$row['notice_text']." </br>
   <b>Notice issued by : ".strtoupper($row['by_teacher'])."</b><hr></li>"; 
   }
}else echo"No Notice Is Issued Till Now</br> Thank You.";
?>
</ol>

    </marquee>			
								
							

</div>
</div>

</div></div>
</div>






<div style="height:300px;"></div>
	

<div style="padding-bottom:140px; background-color: black;">

<div class="row"><div class="col-sm-0"></div>

<div class="col-sm-4"  style="margin-top:-140px;">


<div style="padding-top:10px; padding-bottom:40px; margin-left: 20px; font-family:Agency FB; background-color:#778899; color:white; font-size:30px; text-align:center; border-radius:10px;"><span style="color:darkred;" class="glyphicon glyphicon-map-marker"></span> <b>School Location</b>
<p style="margin-top:-2px; font-size:17px;">See Our School On Google Map</p>
<div class="container-fluid" style="margin-top:15px;">
<iframe style="width:100%; height:auto;" frameborder="2" scrolling="no" marginheight="0" marginwidth="0" src=
"http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=274303,kathkuiyan+market,uttarpradesh,india&amp;sspn=33.984984987,77.607422&amp;ie=UTF8&amp;hq=&amp;hnear=274303,kathkuiyan+market,uttarpradesh,india&amp;z=12&amp;output=embed"></iframe> 
</div>
</div>


</div><div class="col-sm-0"></div>
<div class="col-sm-4"  style="margin-top:-140px;">


<div style="padding-top:10px; padding-bottom:35px; font-family:Agency FB; background-color:#778899; color:white; font-size:30px; text-align:center; border-radius:10px;"><b style="">Director</b>
<div class="container-fluid" style="margin-top:15px;">

<?php 

$query=$con->query("SELECT * from teacher_entry where teacher_type='1' ");

if($query->num_rows>0){
while($row=$query->fetch_assoc()) {
echo'<img width="280" height="155"  src="'.$row['teacher_photo'].'"> ';
}
}
else echo "<div style='  margin-top:100px; height:65px;'>Sorry! Not Data Found ..ERROR</div>";
?>

<p style="margin-top:15px; text-align: left; margin-left: 80px; font-size:20px;">Mr. ANKIT SINGH</br>
B.Tech (ME Er)
</p>

</div>
</div>



</div><div class="col-sm-0"></div>
<div class="col-sm-4"  style="margin-top:-140px;">


<div style="padding-top:10px; margin-right: 20px; padding-bottom:40px; font-family:Agency FB; background-color:#778899; color:white;  font-size:30px; text-align:center; border-radius:10px;"><span  class="glyphicon glyphicon-user"></span> <b>Faculity Members</b></br>

<div class="container-fluid" style="padding-left:40px; margin-top: 15px; padding-right:40px;">
<div class="container-fluid" style=" padding-top:0px; padding-bottom:0px;">
<marquee  direction="right" behavior="alternate">


<?php 

$query=$con->query("SELECT * from teacher_entry where teacher_type='2' or teacher_type='3' ORDER BY priority_order ASC ");

if($query->num_rows>0){
while($row=$query->fetch_assoc()){ $pic2 = $row['teacher_photo'];
echo'<img height="225" width="225"  src="'.$pic2.'"> ';
}
}
else echo "<div style='  margin-top:100px; height:125px;'>Sorry! Not Data Found ..ERROR</div>";
?>


</marquee>
</div>
</div>
</div>

</div><div class="col-sm-0">
</div></div>


</div>


<div style="height:200px;"></div>






<div class="row" style="padding-top:15px; padding-bottom:20px; background-color: #4A809E; border-radius:10px;">

<marquee direction="right" behavior="alternate" scrollamount="10" scrolldelay="1" style="margin-top:10px;"></br>
    <div style=" padding-bottom:20px; font-family:agency fb; background-color:#4A809E; color:white;  font-size:20px;  border-radius:10px;">

<table>
<td>  

<table  style="margin-left:200px;"> 
<td><b><p style="font-size:40px; "> School Bus Service&nbsp;&nbsp;&nbsp; </p></b>

  <div style="font-family:serif; color:white;  font-size:15px;">We Provide School Bus Service To Pick </br>And Drop Our Student From Home </br>And To Home Respectively.
</div>
</td>

<td><img width="auto" height="150" src="../img/school_bus.gif"></td>
</table></td>


<td>
<table  style="margin-left:300px;">
  <td >  <b><p style="font-size:40px; "> Pure Filtered Water &nbsp;&nbsp;</p></b>


  <div style="font-family:serif; color:white;  font-size:15px;">A Purifier Is Kept In Our School </br>Campus To Provide Pure Filtered </br>Water To Students. 
</div>
</td>

<td><img width="auto" height="150" src="../img/pure_water.png"></td>
</table>
</td>

<td>

<table  style="margin-left:300px;">
  <td ><b><p style="font-size:40px; ">  Medical </p></b>


  <div style="font-family:serif; color:white;  font-size:15px;">A Monthly Medical Check Up Service </br>Is Provided to our Students</br> For Free.After All A Healthy Mind Lives </br>In Hellthy body.
</div>
</td>

<td><img width="auto" height="150" src="../img/medical.jpg"></td>

</table>

</td>

<td>

<table  style="margin-left:300px;">
  <td ><b><p style="font-size:40px; "> Computer Lab </p></b>


  <div style="font-family:serif; color:white;  font-size:15px;">There Is A Computer Lab In Our </br>School With Sufficient Number </br>of Modern Updated </br>Computers.
</div>
</td>

<td><img width="auto" height="150" src="../img/computer_lab.jpg"></td>

</table>

</td>

<td>

<table  style="margin-left:300px;">
  <td ><b><p style="font-size:40px; ">Countinuous Power Supply &nbsp;&nbsp;&nbsp;</p></b>


  <div style="font-family:serif; color:white;  font-size:15px;">One Electric Generator Is Kept To Provide</br> Countious Power Supply.
</div>
</td>

<td><img width="auto" height="150" src="../img/el_gen.jpg"></td>

</table>

</td>


</table>




    </marquee>      
                
</div>


<div style="height:50px;"></div>


  <?php include"./inc/footer.php";  ?>
