<?php  
 
$con= new mysqli('localhost','root','','bharatbazar') or die("Could not connect to mysql".mysqli_error($con));
$key = $_POST["query"];
$output = '';  
$arr_id = array();

$data = preg_split('/\s+/', $key);
foreach ($data as $i => $value) {
//echo'i='.$i.' value='.strlen($value).' | ';
if(isset($value) && strlen($value)>0)  
{  
$query = "SELECT * FROM sell_offer WHERE product_title LIKE '%$value%' OR description LIKE '%$value%'"; 
$result = mysqli_query($con, $query);  
if(mysqli_num_rows($result) > 0)  
{  
while($row = mysqli_fetch_array($result))  
{ 
$id = $row["product_id"];
$title = strtolower($row["product_title"]);
$description = strtolower($row["description"]);
$count = (intval(substr_count($title,$value))+intval(substr_count($description,$value)));
if(in_array($id, $arr_id)){
$arr_detail[$id]['count'] = $arr_detail[$id]['count']+$count; 
}
else{
array_push($arr_id, $id);
$arr_detail[$id] = array('count'=>$count);
}
}  
}  
else  
{  
$output .= '<li>Product Not Found</li>';  
}  

}
}
$succes_count=0;
$output = '<ul class="list-unstyled">';  
arsort($arr_id);
foreach ($arr_id as $key => $id) {
$query = $con->query("SELECT * FROM sell_offer WHERE product_id = '$id'"); 
$succes_count=$query->num_rows;
if($succes_count>0)
while ($row = $query->fetch_assoc()) {
$output .= '<a href="profile-of-selling-offers.php?product_id='.$id.'"><li>'.substr($row["product_title"],0,55).' ...</li></a>';  
}
}
$output .= '</ul>';  

if($succes_count>0)
echo strtolower(($output));  


?>  







