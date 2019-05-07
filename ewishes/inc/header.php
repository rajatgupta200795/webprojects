<?php

include"connect.php";


$query=$con->query("SELECT * FROM users WHERE  1=1");
	$users_count=$query->num_rows;

$query=$con->query("SELECT * FROM sell_offer WHERE  1=1");
	$sell_offer_count=$query->num_rows;

$query=$con->query("SELECT * FROM buy_req WHERE  1=1");
	$buy_req_count=$query->num_rows;


if(isset($_GET['title']))
$search_value=$_GET['title'];
elseif(isset($_GET['q']))
$search_value=$_GET['q'];
else $search_value='';


function isMobileDevice(){
    $aMobileUA = array(
        '/iphone/i' => 'iPhone', 
        '/ipod/i' => 'iPod', 
        '/ipad/i' => 'iPad', 
        '/android/i' => 'Android', 
        '/blackberry/i' => 'BlackBerry', 
        '/webos/i' => 'Mobile'
    );

    //Return true if Mobile User Agent is detected
    foreach($aMobileUA as $sMobileKey => $sMobileOS){
        if(preg_match($sMobileKey, $_SERVER['HTTP_USER_AGENT'])){
            return true;
        }
    }
    //Otherwise return false..  
    return false;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title><?php if(!isset($_GET['title']))echo"EwishesOnline - Full Your Wish Online"; else echo $_GET['title']; ?></title>
	<meta name="viewport" content="width=1100">


	<link rel="shortcut icon" href="http://www.devopsrider.com/title.png" type="image/png"/>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow|Roboto+Condensed|Arimo|Open+Sans+Condensed;" rel="stylesheet">

           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  

<style type="text/css">
	
a{
	color: blue;
	text-decoration: none;
}

a:hover{
	color: #ce241b;
	text-decoration: none;
}

.menu-link{
	padding-right: 25px; padding-left: 25px; padding-bottom: 17px; padding-top: 17px;
	border-right: 1px solid lightgrey; 
}

 
          #productList ul{  
                background-color:#fff;  
                width : 76%;
                position: absolute;
                border-right:1px solid #f0f0f0;
                border-radius: 5px;
                border-bottom:1px solid grey;
                border-left:1px solid grey;
                line-height: 25px;
                font-size: 16px;
                z-index: 1;
                padding-bottom: 15px;
                padding-top: 5px;
           	    font-family: arial;
           	    font-weight: bold;
           }  
           #productList a:hover{
           	background-color: green;
           	color: black;
           	font-family: arial;
           }
           li{  
                padding-left:10px; 
                margin-top :10px;
            	color: black;
           }  
       
       
       
       
       
#carousel {
    width: 100%;
    height: auto;
    background-color: #fff;
    
    overflow: visible;
    white-space:nowrap;
}

#carousel .slide {
    display: inline-block
}

       
</style>

</head>
<body style="overflow-x: hidden;">

<div style="height: 70px; width: 100%; font-size: 20px; background-color: #383636; font-family: 'PT Sans Narrow', sans-serif; padding:10px;
">
<div class="row" id="#top">
<div class="col-sm-2" style="padding: 5px; margin-left:20px; font-family: 'Arimo', sans-serif; font-size: 18px;">
    <a href="http://www.ewishes.online" style="font-size: 22px; font-family: 'Roboto Condensed', sans-serif;"> <b style="color:white">Ewishes</b><b style="color:orange">Online</b></a>
    </div>
<div class="col-sm-6" onclick="border:10px solid grey;">
<form action="search-results.php" method="get">
<input type="text" name="q" id="q" placeholder=" Search Product/Service ..." value="<?php echo$search_value; ?>" style="height: 45px; width: 80%; font-family: 'Arimo', sans-serif; font-size: 17px; padding-left: 10px;  border: 3px solid #2874f0; border-bottom-left-radius: 7px; border-top-left-radius: 7px;" autocomplete="off"><a style="cursor: pointer; background-color: #2874f0; padding: 14px; font-weight: bold; color: white; font-size: 16px; border-bottom-right-radius: 4px; border-top-right-radius: 7px; font-family:arial;" ><span class="glyphicon glyphicon-search"></span></a> &nbsp;</span>
<span id="productList"></span>
</form>
</div>
<!--#4fbb90-->  *111*4*1# 1900

<div class="col-sm-1" style="color:white;font-size:18px; font-family:arial; padding:3px;"><span style="color:orange; font-size:35px;" 
class="glyphicon glyphicon-shopping-cart"><b style="color:white;font-size:17px; 
font-family:arial;">cart</b></span> <b id="cartDetails"></b>
</div>

<div class="col-sm-2" style="color:white; font-size:16px; font-family:arial; font-weight:bold;">Call At: 7081717420
<!--<a href="index.php" style="color: ;" class="menu-link">Home</a>
<?php
if(!isset($_COOKIE['user_login']))
echo'<a href="sign-in.php" style="color: ;" class="menu-link">Sign In</a>
<a href="sign-up.php" style="color: #ce241b;" class="menu-link">Sign Up</a>';
else
echo'<a href="profile.php" style="color: ;" class="menu-link">Account</a>
<a href="logout.php" style="color: ;" class="menu-link">Logout</a>';
?>
-->
</div>
</div>
</div>

<?php

echo'
<div style="background-color:#fff; height:40px; width:100%; text-align:center; font-weight: bold; font-size:17px; font-family: calibri; border-bottom:2px solid red;">
<div id="carousel">';

$query="SELECT DISTINCT category.c_id, category.name FROM item INNER JOIN category ON category.c_id=item.c_id limit 7";
$query=$con->query($query);
while($row = $query->fetch_assoc()){
$c_name = $row['name'];
$c_id = $row['c_id'];
echo'
<div class="slide" style="padding:10px; margin-left:20px;">
<a href="search-results.php?category='.$c_id.'&q='.$c_name.'&title=search results for '.$c_name.'" style="color: grey;">'.ucwords($c_name).'</a>
</div>';
}

echo'</div>
</div>

<div style="background-color:#f0f0f0; height:5px; width:100%;"></div>
';


?>

 <script>  
 $(document).ready(function(){  
$('#q').bind('input', function(){
           var query = $(this).val();  
           if(query != '')  
           {  
                $.ajax({  
                     url:"/inc/search_query.php",  
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
           $('#q').val($(this).text());  
           $('#productList').fadeOut();  
      });  

      /*$(document).focusout(function(){  
           $('#productList').fadeOut(1);  
      });*/
 });  
 </script>  




