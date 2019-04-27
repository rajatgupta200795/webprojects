<?php include"./inc/header.php"; 
ob_start(); 

$link_address = @$_GET['link_address'];
$total = @$_GET['total'];
$unique = @$_GET['unique'];
$username = $_COOKIE['user_in'];
$time = @$_GET['time'];

echo'

<div style="height:56px;  background-color:#448aff; border-bottom:0px solid lightgrey;"></div>

	<div style="height:0px;"></div>

<div style="text-align:center; color:white; padding:10px; background-color:#448aff ; font-size:30px;">Analysed Web Page Visits</div>


	<div style="font-size:17px;color:white; padding:15px; border-bottom:3px solid lightgrey; background-color:#448aff ;"><b>Web Page Name :</b> <span style="color:;">'.$link_address.'</span></br>
<b>Total Clicks : </b>'.$total.'</br>
<b>Unique Clicks : </b>'.$unique.'
</div>	</br>
	<hr style="height:2px; background-color:white;">
    </br>

<div class="container">';

if($time!='')
echo'<div class="row"><div class="col-sm-1"><b>Sr.No.</b></div><div class="col-sm-2"><b>IP Address</b></div><div class="col-sm-1"><b>Continent</b></div><div class="col-sm-1"><b>Country</b></div><div class="col-sm-2"><b>State</b></div><div class="col-sm-2"><b>Time & Date</b></div><div class="col-sm-2"><b>Time Spend (min/sec)</b></div></div></br>
<hr style="height:2px; background-color:black;">';
else 
echo'<div class="row"><div class="col-sm-1"><b>Sr.No.</b></div><div class="col-sm-2"><b>IP Address</b></div><div class="col-sm-2"><b>Continent</b></div><div class="col-sm-2"><b>Country</b></div><div class="col-sm-2"><b>State</b></div><div class="col-sm-1"><b>Time & Date</b></div></div></br>
<hr style="height:2px; background-color:black;">';


$query = $con->query("SELECT * from $username where link_address = '$link_address' order by id DESC ");

$j= $query->num_rows+1;
while($row=$query->fetch_assoc()){

$j--;

$ip_address = $row['ip_address'];
$continent = $row['continent'];
$country = $row['country'];
$state = $row['state'];
$date_added = $row['date_added'];
if($time!='') $stayTime = $row['stayTime'];


if($time!='')
echo'<div class="row"><div class="col-sm-1"><b>'.$j.'.</b></div><div class="col-sm-2"><b>'.$ip_address.'</b></div><div class="col-sm-1"><b>'.$continent.'</b></div><div class="col-sm-1"><b>'.$country.'</b></div><div class="col-sm-2"><b>'.$state.'</b></div><div class="col-sm-2"><b>'.$date_added.'  IST </b></div><div class="col-sm-2"><b>'.$stayTime.'</b></div></div>
<hr style="height:1px; background-color:white;">
';
else
echo'<div class="row"><div class="col-sm-1"><b>'.$j.'.</b></div><div class="col-sm-2"><b>'.$ip_address.'</b></div><div class="col-sm-2"><b>'.$continent.'</b></div><div class="col-sm-2"><b>'.$country.'</b></div><div class="col-sm-2"><b>'.$state.'</b></div><div class="col-sm-2"><b>'.$date_added.'  IST </b></div></div>
<hr style="height:1px; background-color:white;">';

}

echo'
</div>

';
?>


</br></br>
<div style="height:150px; background-color:#444; border-bottom:2px solid darkgrey; border-top:2px solid lightgrey;""></div>
