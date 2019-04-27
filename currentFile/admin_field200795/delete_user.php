<?php include ("headerbsy.inc.php");?>
<?php $active1="active";?>
<?php include ("./inc/activeheader.php");?>

<div class="container" style="padding-left:100px; padding-right:100px;">
<div class="jumbotron" style="background-color:lightgrey;"></br></br></br></br>
<?php

if(!isset($_POST['sbmt_user_delete'])){
echo'<form action="delete_user.php" method="post">
input username : <input type="text" name="username"/>
<input type="submit" value="submit" name="sbmt_user_delete"/>
</form>';
}
$sbmt_user_delete=@_POST['sbmt_user_delete'];

if(isset($_POST['sbmt_user_delete'])){

$username=@$_POST['username'];
$sbmt_user_delete=@_POST['sbmt_user_delete'];
     $query1=$con->query("DELETE from users where username='$username' ");
     $query2=$con->query("DELETE from photos where username='$username' ");
     $query3=$con->query("DELETE from messege where username='$username' ");
     $query4=$con->query("DELETE from settings where username='$username' ");
     $query5=$con->query("DELETE from educationdata where username='$username' ");
     $query6=$con->query("DELETE from locationdata where username='$username' ");
     $query7=$con1->query("DROP TABLE myxidcom_friendlist.list_for_$username");
}
if($query1)
echo"deleted";
?>
</div></div>


<?php include ("./inc/footerbsy.inc.php");?>