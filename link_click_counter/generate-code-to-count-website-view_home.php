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
Do you really want to Delete this link ? <a href="generate-code-to-count-website-view_home.php?delete_confirm=true&link_address='.$get_delete_link.'" class="btn btn-default"><span class="glyphicon glyphicon-ok"></span> Yes</span></a> <a href="generate-code-to-count-website-view_home.php" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> No</span></a>
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

$query = $con->query("DELETE FROM $username where link_address = '$get_delete_link' and type='page'");

if($query) echo '<script>alert("You have deleted Link : '.$get_delete_link.' succesfully.");</script>';

}



?>

</br></br>

<div style="height:136px;  background-color:#448aff; border-bottom:3px solid lightgrey;"></div>

</br>

<div style="text-align:center; font-size:20px;" class="navbar-form"  enctype="multipart/form-data">
 <div class="form-group-sm">

  <p style="font-size: 35px; font-family:Roboto Slab',palatino,serif;">Analyse Your Web Page</p>

<div style="height:5px;"></div>

 <h5 style="line-height:200%; font-family: 'Roboto',arial,sans-serif;color: #848484;">Enter Web Page Name Below In The Box For Reference And Click On The Button Generate Web Code. </br>It Will Generate A Code. You Have To Copy It And Paste It Anywhere In Web page Of Your Website .</h5>

<b>Web Page Name : </b><input type="text"  id="inputName" oninput="checkSpace()" onchange="checkSpace()" size="100" class="form-control" placeholder="Enter web page name that is to be analysed" name="full_url"> <button value="Generate Web Code " class="btn btn-primary" onclick="generateCode()"  style="margin-left: 20px;">Generate Web Code </button>
<p id="removeSpaceMssg"></p>
<p style="font-size:15px;" id="webPageCode"></p>




<script>
var flag = 0;
function checkSpace(){
flag = 0;
var inputName = document.getElementById('inputName').value;
for (var i = 0; i < inputName.length; i++) { 
  if(inputName[i]==' '){ flag = 1 ;
    document.getElementById('removeSpaceMssg').innerHTML = '<div style="margin-left:-80px; margin-top:10px; color:red; font-size:14px;">Space is not allowed in web page name. Please remove space from your web page name</div>';
}
else if(flag==0)
document.getElementById('removeSpaceMssg').innerHTML = '';
}
}

function generateCode(){ 
if(flag==0)
{
full_url =  inputName.value;
var username = "<?php echo$_COOKIE['user_in']; ?>";
document.getElementById("webPageCode").innerHTML = '<div id="div_link" class="unhide"><div class="row" style="position:fixed; color:white; top:100px; text-align:center;"><div class="col-sm-3"></div><div class="col-sm-7"><div class="jumbotron" style="background-color: #488273;border-radius:10px; border-bottom:2px solid lightgrey; border-right:2px solid lightgrey;"><div class="container"><a href="#" Onclick="toggle_visibility(\'div_link\')"  style="color:white; padding:5px; padding-right:20px; font-size:16px; padding-left:20px; background-color:red; position:absolute; right:70px; top:30px; font-weight:bold;">X</a><div style="font-size:16px; font-weight:bold; text-align:center;">Your Generated Code Is :</div></br></br><textarea style="color:#e02113;" autocomplete="off" id="textareaCode" wrap="logical" spellcheck="false" rows="6" cols="60"><script>var tS=0;setInterval(sT, 1000);function sT() {++tS;} function gB(){document.write(\'<iframe style="border:none;" height="0" width="0" src="http://www.naiudan.com/link_click_counter/website_visit_optimizer.php/?id='+username+'&link_url='+full_url+'&stayTime=\'+tS+\'"></iframe>\');}window.onbeforeunload=gB;<\/script></textarea></br></br><div style="font-size:16px; text-align:center;">Copy The Code And Paste It In Your Webapage Within "body" Tag .</div></br></br><div style="height:60px;"></div></div></div></div><div class="col-sm-2"></div></div></div>';
}
}

</script>

</div>
</div>

<div style="height:30px;"></div>









<div style="height:250px; background-color:#448aff; border-bottom:4px solid lightgrey; border-top:1px solid lightgrey;""></div>

    <div class="container">
        
        <h3 style="text-align:center;">Analyzed Web Page Status</h3>
        <hr Style="background-color:darkgrey; height:4px;">     

    <div class="row"><div class="col-sm-1"><b>Sr.No.</b></div><div class="col-sm-4"><b>Link Address</b></div><div class="col-sm-1"><b>Total Click</b></div><div class="col-sm-1"><b>Unique Click</b></div><div class="col-sm-2"><b>Details</b></div><div class="col-sm-2"><b>Delete Link</b></div></div></br>

<?php

    $username = $_COOKIE['user_in'];

$query = $con->query("SELECT DISTINCT link_address FROM $username where type='page'");
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


$query1 = $con->query("SELECT id FROM $username where link_address='$link_address' ");
$query2 = $con->query("SELECT DISTINCT ip_address FROM $username where link_address='$link_address' ");


$click_count = $query1->num_rows;
$unique_click_count = $query2->num_rows;

    echo '<div class="row"><div class="col-sm-1">'.$j.'. </div><div class="col-sm-4">'.$new_link_address.'</div><div class="col-sm-1">'.$click_count.'</div><div class="col-sm-1">'.$unique_click_count.'</div><div class="col-sm-2"><a href="link-optimized-datails-view-click-count-click-optimize.php?link_address='.$link_address.'&total='.$click_count.'&unique='.$unique_click_count.'&time=1">View</a></div><div class="col-sm-2"><a href="?delete='.$link_address.'">Delete</a></div></div></br>';
}

else echo"<h2>Sorry ! No Link Found.</h2></br></br>";

?>
</div>
</br></br>
<div style="height:150px; background-color:#444; border-bottom:2px solid darkgrey; border-top:2px solid lightgrey;""></div>

