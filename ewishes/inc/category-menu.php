<div style="background-color: #f0f0f0; ">
</br>

<div class="row" style="padding-left: 25px;">
<!--<div class="col-sm-2">
<span class='glyphicon glyphicon-map-marker' style="font-size: 25px; position: absolute; padding: 10px; color: grey;"></span>
<input type="text" name="" class="form-control" placeholder="Enter Location Here" style="width:120%; height: 50px; font-size: 18px; font-family: 'Arimo', sans-serif; border: 1px solid grey; padding-left: 40px;"/>



<div style="background-color: red; width: 120%; height: 2px;"></div> 
<div style="background-color: #031b4a; width: 120%; padding-bottom: 30px; border: 1px solid lightgrey; padding-left: 5px; font-size: 17px; font-family: 'Arimo', sans-serif; line-height: 40px; color: white;">
<div style="padding-top: 20px; font-size: 25px; font-family: 'Roboto Condensed', sans-serif; font-weight: bold;">&nbsp;	CATEGORY</div>
<hr>
<ul>
<?php
      $query = "SELECT * FROM category where 1=1 order by name";  
      $result = mysqli_query($con, $query);  
 
while($row = mysqli_fetch_array($result))  
{  
$category = $row['name'];
echo'<li><a href="" style="color:white;">'.ucwords($category).'</a></li>';
      } 
?>
</ul>
</div>
</div>

<div class="col-sm-12" style="padding-right: 50px; padding-left: 50px;">
<!--<div style="width:100%; background-color: white; height: 100px; text-align: center; padding: 30px; border: 1px solid lightgrey;">
<button class="btn btn-primary btn-lg"> &nbsp;&nbsp;&nbsp;Sell On BharatBazar &nbsp;&nbsp;&nbsp;</button>
</div>-->
