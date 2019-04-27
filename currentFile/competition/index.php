<?php  include"../inc/header.inc.php";  ?>


<a href="?file_name=all-indian-cricket-stadium-name-place.php&meta_description=List of all Indian stadium with place and name of sports | naiudan.com&link_title=Name and list of All Indian Stadium - naiudan.com">All Indian Cricket Stadium</a>

<?php

if(isset($_GET['file_name'])){
$file = $_GET['file_name'];  
include"$file";

}

echo'</div>';

include "../inc/footer.inc.php";

?>