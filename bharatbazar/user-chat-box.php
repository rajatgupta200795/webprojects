<?php  include "./inc/header.php"; ?>

</br>

<link rel="stylesheet" type="text/css" href="inc/chatbox-style-sheet.css">

<div class="container-fluid">

<?php

if(!isset($_COOKIE['user_login']))
header("location:sign-in.php");	

echo'
<div class="row">

<div class="col-sm-3">
<p style="width: 100%; background-color: #f1f1f1; text-align: center; padding: 13px; font-size: 18px; border:1px solid lightgrey; border-top-left-radius: 5px; border-top-right-radius: 5px;">All Chat History</p>
<div style="min-height: 480px; border: 1px solid lightgrey; overflow-y: scroll; margin-top: -10px; font-size:17px;">';

$query = $con->query("SELECT DISTINCT sender, receiver, add_date FROM chat where receiver='$username' group by sender, receiver order by id DESC");
if($query->num_rows>0){
while($row = $query->fetch_assoc()){
if($row['sender']!=$username)
$receiver_id=$row['sender'];
else $receiver_id = $row['receiver'];
$add_date = $row['add_date'];

$query1 = $con->query("SELECT * FROM users where username='$receiver_id'");
if($query1->num_rows>0){
while($row1=$query1->fetch_assoc()){
$receiver_name = ucwords($row1['name']);
}}
echo'<a href="?receiver_id='.$receiver_id.'"><div style="padding: 10px 10px 0px 10px;; border:1px solid #f0f0f0;">'.$receiver_name.'<p style="text-align:right; font-size:12px;">'.$add_date.'</p></div></a>';
}
}

echo'
</div>
</div>';

echo'<div class="col-sm-6">';

if(isset($_GET['receiver_id'])){
$receiver_id = @$_GET['receiver_id'];
$query = $con->query("UPDATE chat set status=1 where sender='$receiver_id' and receiver='$username'");
}
else{
$query = $con->query("SELECT * FROM chat where sender='$username' or receiver='$username' order by id DESC limit 1");
if($query->num_rows>0){
while($row=$query->fetch_assoc()){
if($row['sender']!=$username)
$receiver_id=$row['sender'];
else $receiver_id = $row['receiver'];
}
}else$receiver_id='';
}

$query = $con->query("SELECT * FROM users where username='$receiver_id'");
if($query->num_rows>0){
while($row=$query->fetch_assoc()){
$receiver_name = ucwords($row['name']);
echo'<p style="width: 100%; background-color: #f1f1f1; padding: 13px; padding-left:30px; font-weight:bold; font-size: 16px; border:1px solid lightgrey; border-top-left-radius: 5px; border-top-right-radius: 5px;">'.$receiver_name.'</p>';
}
}
else 
echo'<p style="width: 100%; background-color: #f1f1f1; padding: 13px; padding-left:30px; font-weight:bold; font-size: 16px; border:1px solid lightgrey; border-top-left-radius: 5px; border-top-right-radius: 5px;">Chat Now</p>';

echo'<div class="chatlogs" id="chat_box_id">
</br>
';

$add_date='';
$query = $con->query("SELECT * FROM chat where (sender='$username' and receiver='$receiver_id') or (sender='$receiver_id' and receiver='$username') order by id");
if($query->num_rows>0){
while($row = $query->fetch_assoc()){
$mssg_text = $row['mssg_text'];
$sender = $row['sender'];
$add_time = $row['add_time'];
if($add_date!=$row['add_date']){
$add_date=$row['add_date'];
$changed_date = date('D, d M', strtotime($add_date));
echo'</br><center><div style="padding:10px; background-color: skyblue; max-width:150px; border-radius:10px;">'.$changed_date.'</div></center></br><hr>	';
}
if($sender==$username)
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
$query = $con->query("INSERT INTO chat(sender, receiver, mssg_text, add_date, add_time) values('$username', '$receiver_id', '$mssg_text', '$add_date', '$add_time')");
if($query) header("location:user-chat-box.php?receiver_id=$receiver_id");
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

<?php include "./inc/footer.php"; ?>
