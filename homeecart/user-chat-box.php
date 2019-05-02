<?php 
ob_start();
include "./inc/header.php"; ?>

</br>

<link rel="stylesheet" type="text/css" href="./inc/chatbox-style-sheet.css">

<div class="container-fluid">

<?php

if(!isset($_COOKIE['user_login']))
header("location:dropshipper-signin.php");	

$item_id='';
echo'
<div class="row">

<div class="col-sm-4">
<p style="width: 100%; background-color: #f1f1f1; text-align: center; padding: 13px; font-size: 18px; border:1px solid lightgrey; border-top-left-radius: 5px; border-top-right-radius: 5px; font-weight:bold;">All Chat History</p>
<div class="Leftchatlogs">';

$query = $con->query("SELECT distinct item_id FROM chat where username='$username' order by id DESC");
if($query->num_rows>0){
while($row = $query->fetch_assoc()){
$item_id=$row['item_id'];

$query1 = $con->query("SELECT * FROM inventory_details where item_id='$item_id'");
if($query1->num_rows>0){
while($row1=$query1->fetch_assoc()){
$product_title = ucwords($row1['item_name']);
}
echo'<a href="?item_id='.$item_id.'"><div style="padding: 10px 10px 0px 10px;; border:1px solid #f0f0f0;">'.$product_title.'<p style="text-align:right; font-size:12px;"></p></div></a>';
}
echo'<a href="?item_id="><div style="padding: 10px 10px 0px 10px;; border:1px solid #f0f0f0;">General Chat<p style="text-align:right; font-size:12px;"></p></div></a>';
break;
}
}

echo'
</div>
</div>';

echo'<div class="col-sm-7">';

if(isset($_GET['item_id'])){
$item_id = @$_GET['item_id'];
$query = $con->query("UPDATE chat set status=1 where username='$username' and direction='-1'");
}
else{
$query = $con->query("SELECT * FROM chat where username='$username' order by id DESC limit 1");
if($query->num_rows>0){
while($row=$query->fetch_assoc()){
$item_id=$row['item_id'];
}
}else$item_id='';
}

$query = $con->query("SELECT * FROM inventory_details where item_id='$item_id'");
if($query->num_rows>0){
while($row=$query->fetch_assoc()){
$product_title = ucwords($row['item_name']);
echo'<p style="width: 100%; background-color: #f1f1f1; padding: 13px; padding-left:30px; font-weight:bold; font-size: 16px; border:1px solid lightgrey; border-top-left-radius: 5px; border-top-right-radius: 5px;">'.substr($product_title, 0, 50).'...</p>';
}
}
else 
echo'<p style="width: 100%; background-color: #f1f1f1; padding: 13px; padding-left:30px; font-weight:bold; font-size: 16px; border:1px solid lightgrey; border-top-left-radius: 5px; border-top-right-radius: 5px;">Chat Now</p>';

echo'<div class="chatlogs" id="chat_box_id">
</br>
';

$add_date='';
$query = $con->query("SELECT * FROM chat where username='$username' and item_id='$item_id' order by id");
if($query->num_rows>0){
while($row = $query->fetch_assoc()){
$direction = $row['direction'];
$mssg_text = $row['mssg_text'];
$add_time = $row['add_time'];
if($add_date!=$row['add_date']){
$add_date=$row['add_date'];
$changed_date = date('D, d M', strtotime($add_date));
echo'</br><center><div style="padding:10px; background-color: skyblue; max-width:150px; border-radius:10px;">'.$changed_date.'</div></center></br><hr>	';
}
if($direction==1)
echo'
<div class="chat  self">
<div class="user-photo"></div>
<p class="chat-message">'.$mssg_text.'</p>
</div>';
else
echo'<div class="chat friend">
<div class="user-photo"></div>
<p class="chat-message">'.$mssg_text.'</p>
</div>
';
}
}else echo'<h4><center>Select some product and start chat with seller. </br></br> No Conversation Found.</center>	</h4>';

echo'
</div>

<div class="chat-form">
<form method="POST" action="" >
<textarea name="mssg_text"></textarea>
<input type="submit" class="btn btn-info" name="send_text" value=" Send " style="padding: 15px; margin-top: -52px; width: 14%; border-radius: 5px; font-size: 17px;">
</form>
</div>';

$add_date = date("d-m-Y");
$add_time = date("H:i:s");
$send_text = @$_POST['send_text'];
$mssg_text = @$_POST['mssg_text'];
if($send_text && $mssg_text!=''){
$query = $con->query("INSERT INTO chat(username, direction, item_id, mssg_text, add_date, add_time) values('$username', '1', '$item_id', '$mssg_text', '$add_date', '$add_time')");
if($query) header("location:user-chat-box.php?item_id=$item_id");
}

echo'</div>

</div>
</div>
';
?>

<script type="text/javascript">
$(document).ready(function(){
    var $textarea = $('#chat_box_id');
    $textarea.scrollTop($textarea[0].scrollHeight);
});
</script>

<?php 
ob_end_flush();
include "./inc/footer.php"; ?>
