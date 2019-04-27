

<?php

$num = @$_GET['roll_num'];
include 'barcode128.php';
echo '<center style="width:100%; position:absolute; text-align:left;">'.bar128(stripcslashes($num)).'</center>';

?>
