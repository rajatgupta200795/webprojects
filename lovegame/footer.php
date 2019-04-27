</div>

</br></br></br></br>

<?php  /*

if(!isMobileDevice() && $_SERVER['PHP_SELF']=='/lovegame/index.php'){

echo'
<div style="padding-top:30px; padding-bottom:30px; width:100%; background-color:grey;">
<div class="container">

<a style="color:white; font-size:30px;" href="http://www.myxid.com">myxid.com</a>

<div class="row">

<div class="col-sm-4">

<h2 style="color:green;">Recommended By myxid</h2>
<ul>
<li><a href="http://www.myxid.com/link_click_counter/" style="font-size:small; color:blue;">Link Click Optimizer (Click Counter)</a></li>
<hr style="height:1px;border:none;color:green;background-color:green;">

<li><a href="http://www.singlebird.in/click-and-win" style="font-size:small; color:blue;">Click Earn And Win Dollars</a></li>
<hr style="height:1px;border:none;color:green;background-color:green;">

<li><a href="http://www.myxid.com/?page=how-to-get-password-of-any-wifi-leegaly-without-any-software-download&link_title=How%20To%20Get%20Any%20wifi%20Password%20Near%20Your%20Location%20Easily%20-%20www.myxid.com&meta_description=I%20am%20sure%20you%20got%20nothing%20after%20a%20lots%20of%20search%20everywhere.Today%20i\%27ll%20show%20you%20how%20you%20can%20find%20someone\%27s%20wifi%20password%20(anywhere%20in%20the%20world)%20without%20doing%20any%20illegal%20work." style="font-size:small; color:blue;">Trick To Get Any Wifi Password Near Your Location</a></li>
<hr style="height:1px;border:none;color:green;background-color:green;">

<li><a href="http://www.myxid.com/?page=what_to_do_after_btech&link_title=What%20To%20Do%20After%20B.tech%20-%20M.tech%20or%20M.B.A.%20&meta_description=Many%20are%20left%20wondering%20what%20to%20pursue%20next%20after%20B.Tech%20%EF%BF%BD%20management%20through%20MBA%20or%20carry%20forward%20the%20technical%20qualifications%20with%20an%20M.Tech..%20MBA%20secures%20future%20in%20Industries%20and%20No-technical%20workouts..M.Tech%20deals%20with%20Technical%20field...Main%20Field%20which%20M.Tech%20or%20MBA%20covers,Comparison%20in%20M.Tech%20and%20MBA......" style="font-size:small; color:blue;">What To Do After B.tech - M.tech or M.B.A.</a></li>
<hr style="height:1px;border:none;color:green;background-color:green;">


<li><a href="http://www.myxid.com/?page=cancer_all_types_of_cancer&link_title=Cancer%20-%20Long%20Illness%20-%20Incurable-%20Disease_Facts_Symptoms&meta_description=Cancers%20are%20a%20large%20family%20of%20diseases%20that%20involve%20abnormal%20cell%20growth%20with%20the%20potential%20to%20invade%20or%20spread%20to%20other%20parts%20of%20the%20body.%20Read%20All%20Signs%20and%20symptoms%20,%20Causes%20,%20Types%20of%20Cancer%20-%20Carcinoma%20,%20Sarcoma%20Lymphoma%20and%20leukemia,Germ%20cell%20tumor,Blastoma,Prevention..." style="font-size:small; color:blue;">Cancer : All Types Of Cancer Disease Signs And Symptoms</a></li>
<hr style="height:1px;border:none;color:green;background-color:green;">


<li><a href="http://www.myxid.com/?page=forget_her_after_brack_up&link_title=How%20To%20Forget%20Your%20Ex%20-%20Top%20Ten%20After%20Break%20Up%20Tips&meta_description=How%20to%20Get%20Over%20Your%20Ex.%20The%20end%20of%20a%20relationship%20is%20always%20somewhat%20painful%20and%20comes%20with%20some%20negativity%20or%20confrontation..Make%20New%20Memories,Cut%20all%20Contact%20With%20Your%20,Ex,Avoid%20asking%20about%20him,Use%20your%20personal%20space...." style="font-size:small; color:blue;">Top Ten Tips To Forget Your Ex</a></li>
<hr style="height:1px;border:none;color:green;background-color:green;">



</ul>

</div>

<div class="col-sm-4">
 
Like Our Facebbok page

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-like" data-href="https://www.facebook.com/myxid" data-layout="standard" data-action="like" data-size="large" data-show-faces="false" data-share="true"></div>

</div>


<div class="col-sm-4">
 
<h2 style="color:green;">myxid Blog</h2>
<ul>
';

$query=$con->query("SELECT * from blog_data where blog_file_type=1 ORDER BY RAND() limit 6");
while($row_blog=$query->fetch_assoc()){
$blog_file_name=$row_blog['blog_file_name'];
$blog_file_type=$row_blog['blog_file_type'];
$link_url_title=$row_blog['link_url_title'];
$link_url_address=$row_blog['link_url_address'];
$meta_description=$row_blog['meta_description'];

echo'<li><a href="http://www.myxid.com?page='.$link_url_address.'&link_title='.$link_url_title.'&meta_description='.$meta_description.'" style="font-size:small; color:blue;">'.$blog_file_name.'</a></li>
<hr style="height:1px;border:none;color:green;background-color:green;">
';

}

echo'

</ul>
</div>

</div>

</div>

</div>';

}

*/?>

<?php // include "../inc/footerbsy.inc.php"; ?>

