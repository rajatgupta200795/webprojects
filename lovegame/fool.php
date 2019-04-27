<?php include "header.php"; ?>



<div class="container">
<div style="font-family:cursive; font-size:50px;"><a href="http://www.naiudan.com">naiudan.com</a></div>


<div class="container">


<div class="row">

<div class="col-sm-3"></div>

<div class="col-sm-1"></div>

<div class="col-sm-5" style="font-size:35px; color:black; padding:15px; background-color:pink;">

Congratulation <?php  echo strtoupper($_GET['fool']); ?> ! <u>You Have Been Fooled</u>.</br>
Your crush's name has been sent to <?php  echo strtoupper($_GET['name']); ?>.Now generate your own link to make other people a fool.</br>click  <a href="index.php">here.</a>

</div>
</div>


</br></br></br></br>



<?php include "index.php"; ?>

</div>
</div>
</div>
<?php include "../inc/footerbsy.inc.php"; ?>
