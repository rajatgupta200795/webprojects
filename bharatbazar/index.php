<?php  include "./inc/header.php"; ?>
<?php  include "./inc/category-menu.php"; ?>

<?php

echo'
<div style="width:30%; height:70px; background-color:white; padding:16px; font-size: 24px; font-family: \'Open Sans Condensed\', sans-serif; border-top-left-radius:10px;"> What is new for sale ?</div>
<div style="background-color: red; width: 100%; height: 2px;"></div> 
<div style="background-color: white; height: 250px; border: 1px solid lightgrey; border-bottom-left-radius:10px; border-bottom-right-radius:10px; border-top-right-radius:5px;">
<div class="row" style="text-align:center; line-height:20px; font-family: \'Roboto\', sans-serif;">';

$query=$con->query("SELECT sell_offer.product_id, sell_offer.product_title, sell_offer.price, sell_offer.img_url, sell_offer.quantity, users.city, unit.unit_name from users INNER JOIN (sell_offer INNER JOIN unit ON sell_offer.unit_id=unit.unit_id) ON users.username=sell_offer.username and sell_offer.status='1' and NOT sell_offer.username='$username' order by sell_offer.id DESC limit 4");
if($query->num_rows>0){
$i=0;
while($row = $query->fetch_assoc()){
$product_title = ucwords($row['product_title']);
$price = $row['price'];
$img_url = $row['img_url'];
$product_id = $row['product_id'];
$quantity = $row['quantity'];
$city = ucwords($row['city']);
$unit_name = ucwords($row['unit_name']);
$i++;
echo'<div class="col-sm-3" style="padding-top:15px;">
<a href="profile-of-selling-offers.php?product_id='.$product_id.'">
<img src="item_pic/'.$img_url.'" style="width:70%; height:150px; border:1px solid #f0f0f0; border-radius:10px;"></br>
'.substr($product_title, 0, 30).'...</a></br>
Rs.'.$price.'/- ('.$quantity.' '.$unit_name.') </br>
'.$city.'</b>
</div>';
}
}
else echo'<h3>No product found for selling.</h3>';
echo'
</div>
</div>

</br></br>

<div style="width:32%; height:70px; background-color:white; padding:16px; font-size: 30px; font-family: \'Open Sans Condensed\', sans-serif; border-top-left-radius:10px;"> Buy Requirements</div>
<div style="background-color: red; width: 100%; height: 2px;"></div> 
<div style="background-color: white; height: 270px; border: 1px solid lightgrey; padding:20px; font-size:16px;  border-bottom-left-radius:10px; border-bottom-right-radius:10px; border-top-right-radius:5px;"">
<div class="row" style="line-height:26px; font-family: \'Roboto\', sans-serif;">';

$query=$con->query("SELECT buy_req.product_title, buy_req.product_id, buy_req.budget, buy_req.description, buy_req.quantity, buy_req.add_date, users.city, users.state, unit.unit_name from users INNER JOIN (buy_req INNER JOIN unit ON buy_req.unit_id=unit.unit_id) ON users.username=buy_req.username and buy_req.status='1' and NOT buy_req.username='$username' order by buy_req.id DESC limit 3");
if($query->num_rows>0){
while($row = $query->fetch_assoc()){
$product_title = ucwords($row['product_title']);
$product_id = ucwords($row['product_id']);
$budget = $row['budget'];
$quantity = $row['quantity'];
$city = ucwords($row['city']);
$state = ucwords($row['state']);
$description = ucfirst($row['description']);
$unit_name = ucwords($row['unit_name']);
$offer_date = date('d M, Y',strtotime($row['add_date']));

echo'<div class="col-sm-4" style="padding-top:5px;">
<a href="profile-of-buying-offers.php?product_id='.$product_id.'"><b>'.substr($product_title, 0, 34).'...</b></a></br>
<u>Description</u> : '.substr($description, 0, 90).'<b>...</b></br>
<u>Price</u> : Rs.'.$budget.'/- ('.$quantity.' '.$unit_name.') </br>
<u>Location</u> : '.$city.', '.$state.'</br><?br>
<b>Posted on : </b>'.$offer_date.'</br>
<a href="profile-of-buying-offers.php?product_id='.$product_id.'" class="btn btn-info btn-sm">Open</a>
</div>';
}
}
else echo'<h3><center>No buy requirement found.</center></h3>';
echo'
</div>
</div>
';

include "./inc/footer.php"; ?>
