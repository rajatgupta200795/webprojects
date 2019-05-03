<?php  
 
$con= new mysqli('localhost','root','Rajat@20071995','bharatbazar') or die("Could not connect to mysql".mysqli_error($con));
$key = $_POST["query"];
$output = '';  
$arr_id = array();

$data = preg_split('/\s+/', $key);
foreach ($data as $i => $value) {
//echo'i='.$i.' value='.strlen($value).' | ';
if(isset($value) && strlen($value)>0)  
{  
$query = "SELECT * FROM india_states_cities WHERE city LIKE '%$value%' OR state LIKE '%$value%'"; 
$result = mysqli_query($con, $query);  
if(mysqli_num_rows($result) > 0)  
{  
while($row = mysqli_fetch_array($result))  
{ 
$city = $row['city'];
$state = $row['state'];
$id = $city.'_'.$state;
$count = (intval(substr_count($city,$value))+intval(substr_count($state,$value)));
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
$output .= '<li>Location Not Found</li>';  
}  

}
}
$succes_count=0;
$output = '<ul class="list-unstyled">';  
arsort($arr_id);
foreach ($arr_id as $key => $id) {
$id = explode('_', $id)[0];
$query = $con->query("SELECT * FROM india_states_cities WHERE city = '$id'"); 
$succes_count=$query->num_rows;
if($succes_count>0)
while ($row = $query->fetch_assoc()) {
$output .= '<a href="view-all-selling-offer-in-location.php?location='.$row['city'].', '.$state.'"><li>'.$row["city"].', '.$state.'</li></a>';  
}
}
$output .= '</ul>';  

if($succes_count>0)
echo ucwords($output);  


?>  







