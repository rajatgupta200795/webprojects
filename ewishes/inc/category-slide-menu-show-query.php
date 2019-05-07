

<div id="carousel">
<?php

if(isMobileDevice())$limit_query_part=' 4'; else $limit_query_part=' 5';

$query="SELECT * FROM item WHERE ".$c_id_query_part." order by rand() limit ".$limit_query_part;
$query=$con->query($query);
while($row = $query->fetch_assoc()){
$img_url = "item-image/".$row['img_url'];
$title = substr($row['title'],0,30).'...';
$mrp = $row['mrp'];
$c_id = $row['c_id'];
$price = $row['price'];
$item_id = $row['item_id'];
$discount = round(($mrp-$price)*100/$mrp);
echo'
<div class="slide" style="padding:0px; text-align:center; font-size:14px;     
    letter-spacing: 0; margin-left:10px;">
        <a href="item-details.php?item_id='.$item_id.'" style="color: grey; ">
        <img src="'.$img_url.'" height="150" max-width="130" />
        <div style="font-size:14px; font-weight:bold; font-family: Roboto, Arial, sans-serif;">'.$title.'</div>
        </a>
        <b>&#8377;'.$price.'</b> <strike>&#8377;'.$mrp.'</strike> <b style="color:green;">'.$discount.'% off</b>
</div>';
}

include"./category/view-more.php";

?>

</div>




<!--  <div class="scroller scroller-left"><i class="glyphicon glyphicon-chevron-left"></i></div>
  <div class="scroller scroller-right"><i class="glyphicon glyphicon-chevron-right"></i></div>
  <div class="wrapper">
    <ul class="nav nav-tabs list" id="myTab">
<?php

$query="SELECT * FROM item WHERE ".$c_id_query_part." order by rand() limit 5";
$query=$con->query($query);
while($row = $query->fetch_assoc()){
$img_url = "item-image/".$row['img_url'];
$title = substr($row['title'],0,30).'...';
$mrp = $row['mrp'];
$c_id = $row['c_id'];
$price = $row['price'];
$item_id = $row['item_id'];
$discount = round(($mrp-$price)*100/$mrp);
echo'
<li style="padding:0px; text-align:center; font-size:17px; font-family:Roboto, Arial, sans-serif; margin-left:10px;">
<a href="item-details.php?item_id='.$item_id.'" title="'.$title.'" style="color:black;">
<img src="'.$img_url.'" height="150" width="150" />
<div style="font-size:15px; font-weight: 500;">'.$title.'</div>
</a>
<b>&#8377;'.$price.'</b> <strike>&#8377;'.$mrp.'</strike> <b style="color:green;">'.$discount.'% off</b>
</li>';
}
?>
  </ul>
  </div>


-->





