<div style="background-color: #f0f0f0; padding-bottom: 50px;">
</br>
<div class="row" style="padding-left: 25px;">
<div class="col-sm-2">
<span class='glyphicon glyphicon-map-marker' style="font-size: 25px; position: absolute; padding: 10px; color: darkred;"></span>

<style type="text/css">

          #locationList ul{  
                background-color:#fff;  
                width : 240px;
                position: absolute;
                border-right:1px solid #f0f0f0;
                border-radius: 5px;
                border-bottom:3px solid green;
                border-left:1px solid grey;
                line-height: 25px;
                font-size: 14px;
                z-index: 1;
                padding-bottom: 10px;
                padding-top: 5px;
                max-height:310px;
                overflow-y: scroll;
                cursor: pointer;
           }  
           #locationList a:hover{
           	background-color: green;
           	width: 90%;
           	height: 20px;
           	color: grey;

           }
           li{  
                padding-left:10px; 
           }  
       
</style>

<input type="text" name="location" id="location" class="form-control" placeholder="Enter Location Here" style="width:120%; height: 50px; font-size: 14px; border: 1px solid grey; padding-left: 40px;"/>
<span id="locationList"></span>  

<script>  
$(document).ready(function(){  
$('#location').bind('input', function(){
           var query = $(this).val();  
           if(query != '')  
           {  
                $.ajax({  
                     url:"city_state_query.php",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#locationList').fadeIn(1);  
                          $('#locationList').html(data);  
                     }  
                });  
           }else{  
                $.ajax({  
                     url:"city_state_query.php",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#locationList').fadeIn();  
                          $('#locationList').html(data);  
                     }  
                });  
           }  
      });  

      $(document).on('click', 'li', function(){  
           $('#location').val($(this).text());  
           $('#locationList').fadeOut();  
           $('#product').val('');  
      });  

      /*$(document).focusout(function(){  
           $('#productList').fadeOut(1);  
      });*/
 });  
 </script>  

</br>
<div style="background-color: red; width: 120%; height: 2px;"></div> 
<div style="background-color: #031b4a; width: 120%; padding-bottom: 30px; border: 1px solid lightgrey; padding-left: 20px; font-size: 17px; font-family: 'Arimo', sans-serif; line-height: 40px; color: white;">
<div style="padding-top: 20px; font-size: 25px; font-family: 'Roboto Condensed', sans-serif; font-weight: bold;">CATEGORY</div>
<hr>
<ul>
<?php
      $query = "SELECT * FROM category where 1=1";  
      $result = mysqli_query($con, $query);  
 
while($row = mysqli_fetch_array($result))  
{  
$category = ucwords($row['name']);
$c_id = $row['c_id'];
echo'<li><a href="view-all-selling-offer-in-category.php?category_id='.$c_id.'" style="color:white;">'.$category.'</a></li>';
      } 
?>
</ul>
</div>
</div>

<div class="col-sm-10" style="padding-right: 50px; padding-left: 50px;">
<!--<div style="width:100%; background-color: white; height: 100px; text-align: center; padding: 30px; border: 1px solid lightgrey;">
<button class="btn btn-primary btn-lg"> &nbsp;&nbsp;&nbsp;Sell On BharatBazar &nbsp;&nbsp;&nbsp;</button>
</div>-->
