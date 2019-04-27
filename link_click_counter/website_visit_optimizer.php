<?php  include "./inc/connect.php"; 

ob_start();


function ip_info($ip = NULL, $purpose = "location", $deep_detect = TRUE) {
    $output = NULL;
    if (filter_var($ip, FILTER_VALIDATE_IP) === FALSE) {
        $ip = $_SERVER["REMOTE_ADDR"];
        if ($deep_detect) {
            if (filter_var(@$_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            if (filter_var(@$_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
    }



    $purpose    = str_replace(array("name", "\n", "\t", " ", "-", "_"), NULL, strtolower(trim($purpose)));
    $support    = array("country", "countrycode", "state", "region", "city", "location", "address");
    $continents = array(
        "AF" => "Africa",
        "AN" => "Antarctica",
        "AS" => "Asia",
        "EU" => "Europe",
        "OC" => "Australia (Oceania)",
        "NA" => "North America",
        "SA" => "South America"
    );
    if (filter_var($ip, FILTER_VALIDATE_IP) && in_array($purpose, $support)) {
        $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));
        if (@strlen(trim($ipdat->geoplugin_countryCode)) == 2) {
            switch ($purpose) {
                case "location":
                    $output = $continents[strtoupper($ipdat->geoplugin_continentCode)];
                    break;
                case "address":
                    $address = array($ipdat->geoplugin_countryName);
                    if (@strlen($ipdat->geoplugin_regionName) >= 1)
                        $address[] = $ipdat->geoplugin_regionName;
                    if (@strlen($ipdat->geoplugin_city) >= 1)
                        $address[] = $ipdat->geoplugin_city;
                    $output = implode(", ", array_reverse($address));
                    break;
                case "city":
                    $output = @$ipdat->geoplugin_city;
                    break;
                case "state":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "continent":
                    $output = @$ipdat->geoplugin_continentCode;
                    break;
                case "region":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "country":
                    $output = @$ipdat->geoplugin_countryName;
                    break;
                case "countrycode":
                    $output = @$ipdat->geoplugin_countryCode;
                    break;
            }
        }
    }
    return $output;
}

$country = ip_info("Visitor", "Country"); // India
$state = ip_info("Visitor", "State"); // Andhra Pradesh
$continent = (ip_info("Visitor", "location")); 


date_default_timezone_set("Asia/Kolkata");

$date_added = date("h:i:s").' '.date("d/m/y");
$user_id = @$_GET['id'];
$link_url = @$_GET['link_url'];
$stayTime = @$_GET['stayTime'];


$min = (string)(floor($stayTime/60));
$sec = (string)($stayTime%60);
if(strlen($min)>1) $min= $min; else if(strlen($min)==1) $min = '0'.$min; else $sec = '00';
if(strlen($sec)>1) $sec= $sec; else $sec = '0'.$sec;
$stayTime = $min.' : '.$sec; 


function getUserIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}

$ip_address = getUserIP();

$query = $con->query("INSERT into $user_id (link_address , date_added , ip_address , country , continent , state , type , stayTime) values ('$link_url' , '$date_added' , '$ip_address' , '$country' , '$continent' , '$state' , 'page' , '$stayTime') ");
?>



<?php
ob_end_flush();
?>