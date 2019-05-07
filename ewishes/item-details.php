<?php include"inc/header.php"; 

if(isset($_GET['item_id'])){
$item_id = $_GET['item_id'];
$query=$con->query("SELECT item.title, item.brand, sub_category.sc_name, category.c_id, category.name, item.description, item.mrp, item.price, item.stock, item.img_url, item.other_link FROM ((item
    INNER JOIN category ON category.c_id=item.c_id) 
    INNER JOIN sub_category ON sub_category.sc_id=item.sc_id) WHERE item_id='$item_id'");
while($row = $query->fetch_assoc()){
$title = $row['title'];
$brand = $row['brand'];
$c_id = $row['c_id'];
$c_name = $row['name'];
$sc_name = $row['sc_name'];
$description = $row['description'];
$mrp = $row['mrp'];
$price = $row['price'];
$stock = $row['stock'];
$img_url = $row['img_url'];
$other_link = $row['other_link'];
$discount = round(($mrp-$price)*100/$mrp);

}
}

echo'
</br>
<div class="container" style="font-weight:bold; color: #3b3a3a; font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif;">
'.ucwords($c_name).' > '.ucwords($sc_name).'
</div>
<hr>
<div class="row" style="line-height:35px;">
<div class="col-sm-1"></div>
<div class="col-sm-4">
</br>
<img src="../item-image/'.$img_url.'" style="width:100%; height:auto;">
</div>
<div class="col-sm-6">
<a href="" style="color:blue;">'.$brand.'</a>
<p style="font-size:25px;">'.$title.'</p>
<hr>
<h4><b>Price : </b>&#8377;<span style="color:#b12704; font-size:25px;">'.$price.'</span> &nbsp;&nbsp;<strike>&#8377;'.$mrp.'</strike> <b style="color:green;">'.$discount.'% off</b> + Delivery Charge</h4>
<b>Inclusive of all taxes</b>
<h4 style="color:green;">'.$stock.' in Stock</h4>
<b>Description : </b></br>
'.$description.'</br>
<a href="'.$other_link.'" target="_blank" style="color:blue;">View on Amazon</a>

</div>
</div>

</br></br>
';



include"inc/suggestion-related-to-item.php";

include"inc/footer.php"; ?>



