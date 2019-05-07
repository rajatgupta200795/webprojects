<?php
$con= new mysqli('localhost','ewisheso_sonyssb','rajat.20071995','ewisheso_ewishesonline') or die("Could not connect to mysql".mysqli_error($con));

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
	<title>Full Your Wish - Online</title>

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
	padding-right: 25px; padding-left: 25px; padding-bottom: 17px; padding-top: 17px;
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

</br></br>

<div class="container">
<div class="jumbotron" style="text-align: center;">
<a href="http://www.ewishes.online">Home</a>  &nbsp;&nbsp;&nbsp;&nbsp;  
<a href="add-item.php">Add Item</a>   &nbsp;&nbsp;&nbsp;
<a href="update-category.php">Update Category</a>  &nbsp;&nbsp;&nbsp;&nbsp;  
<a href="update-sub-category.php">Update Sub Category</a>   &nbsp;&nbsp;&nbsp;
<a href="update-unit.php">Update Unit</a>   &nbsp;&nbsp;&nbsp;
<a href="review-item.php">Review Item</a></br>	
</div>


