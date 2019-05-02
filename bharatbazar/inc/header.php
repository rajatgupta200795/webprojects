<?php
ob_start();
$con= new mysqli('localhost','root','Rajat@20071995','bharatbazar') or die("Could not connect to mysql".mysqli_error($con));

$username='';
$query=$con->query("SELECT * FROM users WHERE  1=1");
	$users_count=$query->num_rows;

$query=$con->query("SELECT * FROM sell_offer WHERE  1=1");
	$sell_offer_count=$query->num_rows;

$query=$con->query("SELECT * FROM buy_req WHERE  1=1");
	$buy_req_count=$query->num_rows;


?>

<!DOCTYPE html>
<html>
<head>
	<title>BharatBazar - Indian Exporters, Manufacturers, Suppliers Directory</title>

	<link rel="shortcut icon" href="http://www.ewishes.online/title.png" type="image/png"/>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow|Roboto+Condensed|Arimo|Open+Sans+Condensed;" rel="stylesheet">

           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  

<style type="text/css">
	
a{
	color: grey;
	text-decoration: none;
}

a:hover{
	color: #ce241b;
	text-decoration: none;
}

.menu-link{
	padding-right: 15px; padding-left: 15px; padding-bottom: 13px; padding-top: 14px;
	border-right: 1px solid lightgrey; 
}

 
          #productList ul{  
                background-color:#fff;  
                width : 400px;
                position: absolute;
                border-right:1px solid #f0f0f0;
                border-radius: 5px;
                border-bottom:1px solid grey;
                border-left:1px solid grey;
                line-height: 25px;
                font-weight: bold;
                font-size: 14px;
                z-index: 1;
                padding-bottom: 10px;
                padding-top: 5px;
           }  
           #productList a:hover{
           	background-color: green;
           	width: 90%;
           	height: 20px;
           	color: grey;

           }
           li{  
                padding-left:10px; 
           }  
       
</style>

</head>
<body style="overflow-x: hidden;">

<div style="height: 50px; width: 100%; font-size: 20px; background-color: #f0f0f0; font-family: 'PT Sans Narrow', sans-serif;">
<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-7" style="padding: 12px; font-family: 'Arimo', sans-serif; font-size: 18px;">Registered Users: <b><?php echo $users_count; ?></b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Selling Offers: <b><?php echo $sell_offer_count; ?></b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Buy Requirements: <b><?php echo $buy_req_count; ?></b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </div>
<div class="col-sm-4" style="padding: 7px;">
<a href="index.php" class="menu-link">Home</a>
<?php
if(!isset($_COOKIE['user_login']))
echo'<a href="sign-in.php"  class="menu-link">Sign In</a>
<a href="sign-up.php" style="color: #ce241b;" class="menu-link">Sign Up</a>';
else{
$username = $_COOKIE['user_login'];
echo'<a href="profile.php"  class="menu-link">Account</a>';
$query=$con->query("SELECT * FROM ecart WHERE username='$username'");
$ecart_count=$query->num_rows;
if($ecart_count==0)$ecart_count=''; else $ecart_count = '('.$ecart_count.')';
echo'<a href="item-in-my-cart.php" style="color: orange; font-size: 25px; padding-top: 6px;" class="menu-link"><span class="glyphicon glyphicon-shopping-cart"></span><span style="font-size:15px; font-weight:bold; color:green; font-family:sans;">'.$ecart_count.'</span></a>';


$query=$con->query("SELECT * FROM chat WHERE receiver='$username' and status='0' order by id DESC");
$rcv_mssg_count= $query->num_rows;
if($rcv_mssg_count==0) 
echo'<a href="user-chat-box.php" class="menu-link"><span class="glyphicon glyphicon-envelope"></span></a>';
else{ 
while($row=$query->fetch_assoc()){
$receiver_id = $row['sender'];}
echo'<a href="user-chat-box.php?receiver_id='.$receiver_id.'" class="menu-link"><span class="glyphicon glyphicon-envelope" style="font-size:20px; font-weight:bold; color:red; font-family:sans;">'.$rcv_mssg_count.'</span></a>';
}
echo'<a href="logout.php" class="menu-link">Logout</a>';
}
?>

</div>
</div>
</div>
<div style="height: 1px; width: 100%; background-color: lightgrey;"></div>
<div class="row" style="padding :17px;">
<div class="col-sm-2"><div style="font-size: 32px; font-family: 'Roboto Condensed', sans-serif;"> <b style="color:red">Bharat</b><b style="color:orange">Bazar</b></div>
</div>
<div class="col-sm-10" onclick="border:10px solid grey;">

<input type="text" name="product" id="product" placeholder=" Search Product/Service ..." style="height: 45px; width: 400px; font-family: 'Arimo', sans-serif; font-size: 17px; padding-left: 10px;  border: 3px solid #0a97a9; border-bottom-left-radius: 4px; border-top-left-radius: 4px;"><span style="background-color: #0a97a9; padding: 14px; font-weight: bold; color: white; font-size: 16px; border-bottom-right-radius: 4px; border-top-right-radius: 4px;"> Search &nbsp;</span>
 
 <span id="productList"></span>  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<a href="buy-requirement-offer.php" class="btn btn-lg" style="background-color: #ffc20e; color: black">Post Buy Requirements</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="create-sell-offer.php"  class="btn btn-lg" style="background-color: red; color: white;">Sell On BharatBazar&nbsp;</a> </div>
</div>
<div style="height: 1px; width: 100%; background-color: lightgrey;"></div>

 <script>  
 $(document).ready(function(){  
$('#product').bind('input', function(){
           var query = $(this).val();  
           if(query != '')  
           {  
                $.ajax({  
                     url:"./inc/search_query.php",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#productList').fadeIn(1);  
                          $('#productList').html(data);  
                     }  
                });  
           }else{  
                $.ajax({  
                     url:"./inc/search_query.php",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#productList').fadeIn();  
                          $('#productList').html(data);  
                     }  
                });  
           }  
      });  

      $(document).on('click', 'li', function(){  
           $('#product').val($(this).text());  
           $('#productList').fadeOut();  
      });  

/*      $(document).focusout(function(){ 
           $('#productList').fadeOut(100);  
      });*/
 });  
 </script>  
