<?php include"./inc/header.php"; 
ob_start(); 



if(!isset($_COOKIE['user_in']))
header("location:index.php");


if(isset($_GET['delete'])){

$get_delete_link = $_GET['delete'];

echo'
<div class="row" style=" position:fixed; top:300px;"><div class="col-sm-3"></div>
<div class="col-sm-6">
<div class="jumbotron" style="background-color: #827BC5;">
<div class="container">
</br></br>

<b>Link :</b> '.$get_delete_link.'</br></br>
Do you really want to Delete this link ? <a href="home.php?delete_confirm=true&link_address='.$get_delete_link.'" class="btn btn-default"><span class="glyphicon glyphicon-ok"></span> Yes</span></a> <a href="home.php" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> No</span></a>
</br>
</br></br>
</div>
</div>
</div><div class="col-sm-3">
</div></div>
';
}


if(isset($_GET['delete_confirm'])){

$get_delete_link = $_GET['link_address'];
$username = $_COOKIE['user_in'];

$query = $con->query("DELETE FROM $username where link_address = '$get_delete_link'");

if($query) echo '<script>alert("You have deleted Link : '.$get_delete_link.' succesfully.");</script>';

}



?>

</br></br>

<div style="height:136px;  background-color:#448aff; border-bottom:3px solid lightgrey;"></div>

</br>

<div style="text-align:center; font-size:20px;" class="navbar-form"  enctype="multipart/form-data">
 <div class="form-group-sm">

 <p style="font-size: 35px; font-family:Roboto Slab',palatino,serif;">Analyse Your Link Address</p>



<div style="height:5px;"></div>

 <h5 style="line-height:200%; font-family: 'Roboto',arial,sans-serif;color: #848484;">Enter Your Link Address Below In The Box Starting With http:// or https:// And Click On The Button Generate My New URL. </br>It Will Generate New Link Address. You Have To Simply Copy It And Paste It Anywhere Like In Your Website , Facebook , Twitter , You Tube etc.</h5>

<b style="font-family:Roboto Slab',palatino,serif;">Original URL : </b><input id="inputid" type="text" size="100" oninput="myFunctionY()" onchange="myFunctionY()" class="form-control" placeholder="Enter Your URL That Is To Be Analysed (please start your url with http:// or https://)" required> 

<button onclick="myFunctionX()" class="btn btn-primary"  style="margin-left: 20px;">Generate New URL </button>

<p id="demo"></p>
<p  style="font-size:15px;" id="democode"></p>

<div style="height:30px;"></div>

</div>
</div>



<script>

var user_id = "<?php echo $_COOKIE['user_in'] ?>";
function myFunctionX() {
    var inpurl = document.getElementById("inputid");
    if ((inpurl.value.substring(0,7)=='http://') || (inpurl.value.substring(0,8)=='https://')) {
       
          document.getElementById("democode").innerHTML = '<div id="div_link" class="unhide"><div class="row" style="position:fixed; color:white; top:100px; text-align:center;"><div class="col-sm-3"></div><div class="col-sm-7"><div class="jumbotron" style="background-color: #488273;border-radius:10px; border-bottom:2px solid lightgrey; border-right:2px solid lightgrey;"><div class="container"><a href="#" Onclick="toggle_visibility(\'div_link\')"  style="color:white; padding:5px; padding-right:20px; font-size:16px; padding-left:20px; background-color:red; position:absolute; right:70px; top:30px; font-weight:bold;">X</a><div style="font-size:16px; font-weight:bold; text-align:center;">Your Generated Code Is :</div></br></br><textarea style="color:#e02113;" autocomplete="off" id="textareaCode" wrap="logical" spellcheck="true" rows="6" cols="60">http://www.naiudan.com/link_click_counter/click_optimizer.php/?id='+user_id+'&link_url='+inpurl.value+'</textarea></br></br><b>Copy This Link And Paste It Any Where .</b></br></br><div style="height:60px;"></div></div></div></div><div class="col-sm-2"></div></div></div>';

document.getElementById("demo").innerHTML = "";

} else {

 document.getElementById("demo").innerHTML = "<div style='margin-top:10px; font-size:13px; color:red; margin-left:-110px;'>Please enter http:// or https:// in the starting of your URL (Example : https://www.facebook.com )</div>";
} 
} 

function myFunctionY() {
    var inpurl = document.getElementById("inputid");
    if ((inpurl.value.substring(0,7)=='http://') || (inpurl.value.substring(0,8)=='https://')) {
document.getElementById("demo").innerHTML = "";

} else {

 document.getElementById("demo").innerHTML = "<div style='margin-top:10px; font-size:13px; color:red; margin-left:-110px;'>Please enter http:// or https:// in the starting of your URL (Example : https://www.facebook.com )</div>";
} 
} 
</script>




<div style="height:250px; background-color:#448aff; border-bottom:4px solid lightgrey; border-top:3px solid lightgrey;"></div>



    <div class="container">
        
        <h3 style="text-align:center; font-weight:bold; font-family:Roboto Slab',palatino,serif;"><b>Optimized Link Status</b></h3>
        <hr Style="background-color:darkgrey; height:4px;">

    <div class="row"><div class="col-sm-1"><b>Sr.No.</b></div><div class="col-sm-4"><b>Link Address</b></div><div class="col-sm-1"><b>Total Click</b></div><div class="col-sm-1"><b>Unique Click</b></div><div class="col-sm-2"><b>Details</b></div><div class="col-sm-2"><b>Delete Link</b></div></div></br>

<?php

    $username = $_COOKIE['user_in'];

$query = $con->query("SELECT DISTINCT link_address FROM $username where type='link'");
$j=0;
if($query->num_rows>0)
while($row=$query->fetch_assoc()){

$j++;

$link_address = $row['link_address'];
$new_link_address = $link_address;
if(strlen($link_address)>40){
$new_link_address = '';
for($i=0;$i<40;$i++){
$new_link_address = $new_link_address.''.$link_address[$i];
}
$new_link_address = $new_link_address.'.....';
}


$query1 = $con->query("SELECT id FROM $username where link_address='$link_address' and type='link' ");
$query2 = $con->query("SELECT DISTINCT ip_address FROM $username where link_address='$link_address' and type='link' ");


$click_count = $query1->num_rows;
$unique_click_count = $query2->num_rows;

    echo '<div class="row"><div class="col-sm-1">'.$j.'. </div><div class="col-sm-4">'.$new_link_address.'</div><div class="col-sm-1">'.$click_count.'</div><div class="col-sm-1">'.$unique_click_count.'</div><div class="col-sm-2"><a href="link-optimized-datails-view-click-count-click-optimize.php?link_address='.$link_address.'&total='.$click_count.'&unique='.$unique_click_count.'">View</a></div><div class="col-sm-2"><a href="?delete='.$link_address.'">Delete</a></div></div></br>';
}

else echo'<h2>Sorry ! No Optimized Link Found.</h2></br></br>';
?>
  </div>

</br></br>
<div style="height:150px; background-color:#444; border-bottom:2px solid darkgrey; border-top:2px solid lightgrey;""></div>
