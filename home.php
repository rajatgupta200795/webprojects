<?php include ("./inc/headerbsy.inc.php");?>
<?php  $active1="active";?>
<?php include ("./inc/activeheader.php");?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div class="fb-sen" data-href="http://myxid.com/home.php" data-colorscheme="dark" data-ref="join+now" style="position:absolute; left:0px; top:170px;"></div>

<?php

$fb_like_share='<div class="fb-like" data-href="https://www.facebook.com/myxid" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>';

echo'
<div class="container">
<div class="jumbotron" style="background-color:'.$backgroundcolorjumbotron.';">';

echo'</br><div class="row"><div class="col-sm-4">Like Our <a href="https://www.facebook.com/myxid">myxid.com</a> Facebook Page</div><div class="col-sm-5">'.$fb_like_share.'</div><div class="col-sm-3">
<div style="border:2px solid grey; border-radius:10px;"><form action="home.php" method="post" id="searc">
      <input type="text" name="searchmovie" size="18" placeholder="Search New Movies..."/> <span class="glyphicon glyphicon-search"></span> 
</form></div>
</div></div>';



$output='';
$count='';
if(isset($_POST['searchmovie'])){
$searchq=$_POST['searchmovie'];
// $searchq=preg_replace("#[^0-9a-z]#i","",$searchq);

  $query1=$con->query("SELECT * FROM movie WHERE movie_name Like '%$searchq%' or movie_about Like '%$searchq%'") or die("could not search!");
  $count=$query1->num_rows;
  if($count==0)
    $output='There was no search results!';
  else{
       while($row1=$query1->fetch_assoc()){

$movie_name1=$row1['movie_name'];


$query2=$con->query("SELECT * FROM movie WHERE movie_name='$movie_name1'"); 
while ($row2=$query2->fetch_assoc()) {

$movie_name=$row2['movie_name'];
$video_type=$row2['video_type'];
$movie_about=$row2['movie_about'];
$movie_link=$row2['movie_link'];
$photo_link=$row2['photo_link'];
$date_added=$row2['date_added'];

if($video_type!=3)
$download_button_type='
<div class="row"><div class="col-sm-4"><a href="'.$movie_link.'" download><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-download"></span>&nbsp;&nbsp;Download&nbsp;&nbsp;</button></a></div><div class="col-sm-3"></div></div>
</div></div><hr>';
else
$download_button_type='
<div class="row"><div class="col-sm-4"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-"></span>&nbsp;&nbsp;Coming Soon On myxid&nbsp;&nbsp;</button></div><div class="col-sm-3"></div></div>
</div></div><hr>';


$output.='<div class="row"><div class="col-sm-2"><a href="'.$movie_link.'" download><img height="100"width="100" src="'.$photo_link.'"/></a></div><div class="col-sm-10"><div class="row"><div class="col-sm-6" style="color:black; font-size:18px;">'.strtoupper($movie_name).'</div><div class="col-sm-2"><div class="fb-share-button" data-href="'.$movie_link.'" data-layout="button_count"></div></div><div class="col-sm-4"><a href="">Upload On :'.$date_added.'</a></div></div>
'.$movie_about.'.'.$download_button_type;
}
}
}

echo"
<table border='2' border-radius='10' width='95%' cellspacing='30' cellpadding='7'><th colspan='7'>&nbsp;&nbsp;Total Search Result is ".$count."</th></br>
         <table border='2' width='95%' cellspacing='30' cellpadding='7'>
             <td></br><ol>".$output."</ol></td></table>
";
}
echo '<h2><span class="glyphicon glyphicon-hand-right"></span> Upcoming Movies - 2016</h2>
<hr style="height: 1px; background-color:grey; border-style:solid; border-width:1px; border-color:grey; ">
<marquee scrollamount="5" direction="right" behavior="alternate"><div class="row">';

$count=0;
$query=$con->query("SELECT * from movie where Video_type=3 ORDER BY RAND()");
while($row=$query->fetch_assoc()){

$movie_name=$row['movie_name'];
$movie_about=$row['movie_about'];
$movie_link=$row['movie_link'];
$photo_link=$row['photo_link'];
$date_added=$row['date_added'];

/*if($count%3==0)
echo'<div class="row">';
echo'
<div class="col-sm-4"><div class="row"><div class="col-sm-8" style="color:black; font-size:15px;">'.strtoupper($movie_name).'</div></div></br>
<div class="row"><div class="col-sm-7"><img src="'.$photo_link.'" height="150"width="150"/></div></div><hr></div>
';
if($count%3==2)
echo'</div>';
$count++;*/

echo '
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="'.$photo_link.'" height="150"width="150"/>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';

}
echo'</div>';
echo'</marquee><hr>';

echo '<h2><span class="glyphicon glyphicon-hand-right"></span> myxid ONLINE MULTIPLEX <span class="glyphicon glyphicon-film"></h2>
<hr style="height: 1px; background-color:grey; border-style:solid; border-width:1px; border-color:grey; " />

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- myxid.com -->
<ins class="adsbygoogle"
     style="display:inline-block;width:1028px;height:290px"
     data-ad-client="ca-pub-8498178293221157"
     data-ad-slot="6004666629"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

';

$query=$con->query("SELECT * from movie where Video_type=10 ORDER BY id DESC");
while($row=$query->fetch_assoc()){

$movie_name=$row['movie_name'];
$movie_about=$row['movie_about'];
$movie_link=$row['movie_link'];
$photo_link=$row['photo_link'];
$date_added=$row['date_added'];

echo'
<div class="row"><div class="col-sm-8" style="color:black; font-size:30px;">'.strtoupper($movie_name).'</div>
<div class="col-sm-1"><div class="fb-share-button" data-href="'.$movie_link.'" data-layout="button_count"></div> </div>
<div class="col-sm-3"><a href="">Upload On :'.$date_added.'</a></div></div></br>
<div class="row"><div class="col-sm-7"><video width="100%" height="auto" style="border:1px solid black; border-radius:4px;"
controls><source src="'.$movie_link.'" type="video/mp4" /></video></div><div class="col-sm-5"><b><u>Description :</u></b> </br>
'.$movie_about.' <a href="'.$movie_link.'" download><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-download"></span>&nbsp;&nbsp;Download&nbsp;&nbsp;</button></a></div>
</div>
<hr/>
';
}
echo '
<hr style="height: 1px; background-color:grey; border-style:solid; border-width:1px; border-color:grey; " />';

echo '<h2><span class="glyphicon glyphicon-hand-right"></span> Latest Movies - 2016</h2></br></br>';

$query=$con->query("SELECT * from movie where Video_type=1 ORDER BY id DESC");
while($row=$query->fetch_assoc()){

$movie_name=$row['movie_name'];
$movie_about=$row['movie_about'];
$movie_link=$row['movie_link'];
$photo_link=$row['photo_link'];
$date_added=$row['date_added'];

echo'<div class="row"><div class="col-sm-2"><a href="'.$movie_link.'" download><img height="100"width="100" src="'.$photo_link.'"/></a></div>
<div class="col-sm-10"><div class="row"><div class="col-sm-6" style="color:black; font-size:18px;">'.strtoupper($movie_name).'</div><div class="col-sm-2"><div class="fb-share-button" data-href="'.$movie_link.'" data-layout="button_count"></div></div><div class="col-sm-4"><a href="">Upload On :'.$date_added.'</a></div></div>
'.$movie_about.'.
<div class="row"><div class="col-sm-4"><a href="'.$movie_link.'" download><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-download"></span>&nbsp;&nbsp;Download&nbsp;&nbsp;</button></a></div><div class="col-sm-3"></div></div>
</div></div><hr>';
}
echo '
<hr style="height: 1px; background-color:grey; border-style:solid; border-width:1px; border-color:grey; " />';

/*echo'<h2><span class="glyphicon glyphicon-hand-right"></span> New Bollywood Song</h2></br>';

$query=$con->query("SELECT * from movie where Video_type=2 ORDER BY RAND()");
while($row=$query->fetch_assoc()){

$movie_name=$row['movie_name'];
$movie_about=$row['movie_about'];
$movie_link=$row['movie_link'];
$photo_link=$row['photo_link'];
$date_added=$row['date_added'];

echo'<div class="row"><div class="col-sm-2"><a href="'.$movie_link.'" download><img height="100"width="100" src="'.$photo_link.'"/></a></div>
<div class="col-sm-10"><div class="row"><div class="col-sm-6" style="color:black; font-size:18px;">'.strtoupper($movie_name).'</div><div class="col-sm-2"><div class="fb-share-button" data-href="'.$movie_link.'" data-layout="button_count"></div></div><div class="col-sm-4"><a href="">Upload On :'.$date_added.'</a></div></div>
'.$movie_about.'.
<div class="row"><div class="col-sm-4"><a href="'.$movie_link.'" download><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-download"></span>&nbsp;&nbsp;Download&nbsp;&nbsp;</button></a></div><div class="col-sm-3"></div></div>
</div></div><hr>';
}

echo'<hr style="height: 1px; background-color:grey; border-style:solid; border-width:1px; border-color:grey; " />';
*/
echo'
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- myxid.com -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-8498178293221157"
     data-ad-slot="6004666629"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
';

echo'
</div>
';
?>

<?php include ("./inc/footerbsy.inc.php");?>