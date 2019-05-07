<?php  

include"connect.php";

$key = $_POST["query"];
$q = $key;
$output = '';  
$arr_id = array();



function globalSearchItem($key, $con, $success_count){
$arr_id = array();
$arr_detail_id =-1;
$arr_detail=array();
$data = preg_split('/\s+/', $key);
foreach ($data as $i => $value) {
if($success_count<1)break; else $limit_count = $success_count;
if(isset($value) && strlen($value)>0)  
{  
$query = "SELECT item.item_id, item.title, item.description, sub_category.sc_name, category.name FROM ((item
    INNER JOIN category ON category.c_id=item.c_id) 
    INNER JOIN sub_category ON sub_category.sc_id=item.sc_id) where item.title LIKE '%$value%' or item.description LIKE '%$value%' or item.brand LIKE '%$value%' limit ".$limit_count; 
$result = mysqli_query($con, $query);  
if(mysqli_num_rows($result) > 0)  
{  
while($row = mysqli_fetch_array($result))  
{ 
$item_id = $row["item_id"];
$title = strtolower($row["title"]);
$brand = strtolower($row["brand"]);
$description = strtolower($row["description"]);
$sub_category = strtolower($row["sc_name"]);
$category = strtolower($row["name"]);
$count = (intval(count(array_keys(preg_split('/\s+/', $title), $value)))+(count(array_keys(preg_split('/\s+/', $description),$value)))+5*(count(array_keys(preg_split('/\s+/', $sub_category),$value)))+5*(count(array_keys(preg_split('/\s+/', $category),$value))));
if(in_array($item_id, $arr_id)){
$key = array_search($item_id, array_column($arr_detail, 'item_id'));
$arr_detail[$key]['count'] = $arr_detail[$key]['count'] + $count;
}
else{
array_push($arr_id, $item_id); 
$arr_detail_id++;
$arr_detail[$arr_detail_id]['item_id']=$item_id;
$arr_detail[$arr_detail_id]['count']=$count;
}
}
} 
else  
{  
$output .= '<li>Item Not Found</li>';  
}  
}
}
return $arr_detail;
}




function searchFullQuery($key, $con){
$arr_id = array();
$arr_detail_id =-1;
$value = $key;
if(isset($value) && strlen($value)>0)  
{  
$query = "SELECT item.item_id, item.title, item.description, sub_category.sc_name, category.name FROM ((item
    INNER JOIN category ON category.c_id=item.c_id) 
    INNER JOIN sub_category ON sub_category.sc_id=item.sc_id) where sub_category.sc_name='%$value%' or category.name Like '%$value%' or item.brand Like '%$value%'"; 
$result = mysqli_query($con, $query);
$success_count=mysqli_num_rows($result);
if($success_count > 0)  
{  
while($row = mysqli_fetch_array($result))  
{ 
$item_id = $row["item_id"];
$title = strtolower($row["title"]);
$description = strtolower($row["description"]);
$sub_category = strtolower($row["sc_name"]);
$category = strtolower($row["name"]);
$count = (intval(count(array_keys(preg_split('/\s+/', $title), $value)))+intval(count(array_keys(preg_split('/\s+/', $description),$value)))+5*intval(count(array_keys(preg_split('/\s+/', $sub_category),$value)))+5*intval(count(array_keys(preg_split('/\s+/', $category),$value))));
if(in_array($item_id, $arr_id)){
$key = array_search($item_id, array_column($arr_detail, 'item_id'));
}
else{
array_push($arr_id, $item_id); 
$arr_detail_id++;
$arr_detail[$arr_detail_id]['item_id']=$item_id;
$arr_detail[$arr_detail_id]['count']=$count;
}
}
}
$arr_detail1 = globalSearchItem($key, $con, (15-$success_count));
function array_merge_recursive_distinct ( $array1, $array2 )
{
  $merged = $array1;

  foreach ( $array2 as $key => &$value )
  {
    if ( is_array ( $value ) && isset ( $merged [$key] ) && is_array ( $merged [$key] ) )
    {
      $merged [$key] = array_merge_recursive_distinct ( $merged [$key], $value );
    }
    else
    {
      $merged [$key] = $value;
    }
  }

  return $merged;
}
$arr_detail = array_merge_recursive_distinct ( $arr_detail1, $arr_detail );

function super_unique($array,$key)
    {
       $temp_array = [];
       foreach ($array as &$v) {
           if (!isset($temp_array[$v[$key]]))
           $temp_array[$v[$key]] =& $v;
       }
       $array = array_values($temp_array);
       return $array;

    }
array_multisort( array_column($arr_detail, "count"), SORT_DESC, $arr_detail );
$arr_detail = super_unique($arr_detail,'item_id');
}
return $arr_detail;
}

$arr_detail = searchFullQuery($key, $con);



$succes_count=0; 
$output = '<ul class="list-unstyled">';  
foreach ($arr_detail as $key => $arr_item_id) {
$item_id = $arr_item_id['item_id'];
$succes_count++;
if($succes_count>10)break;
$query = $con->query("SELECT * FROM item WHERE item_id = '$item_id'"); 
if($query->num_rows>0)
while ($row = $query->fetch_assoc()) {
$title = $row['title'];
$output .= '<a href="search-results.php?q='.$q.'&title='.$title.'"><li>'.substr($row["title"],0,70).' ...</li></a>';  
}
}
$output .= '</ul>';  

if($succes_count>0)
echo strtolower(($output));  


?>  







