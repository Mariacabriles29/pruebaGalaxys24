<?php

defined('SHARED_PATH') or define('SHARED_PATH', $_SERVER['DOCUMENT_ROOT']."/shared");
require SHARED_PATH.'/db.php';

$geo  = "";


$ip = getenv("HTTP_CLIENT_IP") ?: getenv("HTTP_X_FORWARDED_FOR") ?: getenv("HTTP_X_FORWARDED") ?: getenv("HTTP_FORWARDED_FOR") ?: getenv("HTTP_FORWARDED") ?: getenv("REMOTE_ADDR");

$ips_exp = explode(",", $ip);
$ip2 = $ips_exp[0];

header('Access-Control-Allow-Origin: *');
// Elimina los parámetros suministrador mediante la array $keys de la URL $url
function remove_url_query_args($url,$keys=array()) {
    $url_parts = parse_url($url);
    if(empty($url_parts['query'])) return $url;
            
    parse_str($url_parts['query'], $result_array);
    foreach ( $keys as $key ) { unset($result_array[$key]); }
    $url_parts['query'] = http_build_query($result_array);
    $url = (isset($url_parts["scheme"])?$url_parts["scheme"]."://":"").
            (isset($url_parts["user"])?$url_parts["user"].":":"").
            (isset($url_parts["pass"])?$url_parts["pass"]."@":"").
            (isset($url_parts["host"])?$url_parts["host"]:"").
            (isset($url_parts["port"])?":".$url_parts["port"]:"").
            (isset($url_parts["path"])?$url_parts["path"]:"").
            (isset($url_parts["query"])?"?".$url_parts["query"]:"").
            (isset($url_parts["fragment"])?"#".$url_parts["fragment"]:"");
    return $url;
}
$parama = array("reqi","rand");
$url = $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];




// if (isset($_GET['reqi']) && $_GET['reqi'] != "") {
   
//     $reqi =$_GET['reqi'];
//     $urlIm =remove_url_query_args($url,$parama);
//     $reqi1 = $reqi;
//     $ip21 = $ip2;
    
//     if (strpos($reqi1, '.') > 0) {
//         $reqi1 = implode(".", array_slice(explode(".", $reqi1), 0, 2));
//     }
    
//     if (strpos($ip21, '.') > 0) {
//         $ip21 = implode(".", array_slice(explode(".", $ip21), 0, 2));
//     }
    
//     if ($reqi1 !== $ip21) {
//         die('Content not available!');
//     }

//     $_SESSION['requ']= $_GET['reqi'];
//     header("Location: https://$urlIm");
//     // header("Location:".$urlIm);
  
  
// }elseif(!isset( $_SESSION['requ'])){

//     die('Content not available!');

// }



$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://pro.ip-api.com/json/$ip2?key=8O6cvar7wYYK8Af",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_POSTFIELDS => "",
));
$result = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
}

$res = json_decode($result);
if ($res) {
    $iso = @$res->countryCode;
} else {
    $iso = "";
}

$sql = "SELECT * FROM `country` where iso='AR'";

// echo $sql;

if ($result_country = mysqli_query($con, $sql)) {
    while ($row = mysqli_fetch_assoc($result_country)) {
        $iso2 = $row['iso'];
        $iso3 = $row['iso3'];
        $country_name = $row['nicename'];
        // echo 'hsdfdsffs'.$iso3;
        // die();
    }
    // print_r($result_country);
    // die();
    if ($iso3 == 'CAN' || $iso3 == 'USA') {
        // $state = $res->subdivisions[0]->iso_code;
        $state = $res->region;
        // $city = $res->city;
        $result_data = array('iso' => $iso2,'iso3' => $iso3, 'country' => $country_name, 'state' => $state);
        
    } else {
        $result_data = array('iso' => $iso2,'iso3' => $iso3, 'country' => $country_name);

        
    }
    $geo = $result_data['iso'];
    $countryIso3 = $result_data['iso3'];
    // print_r( $result_data['iso']);
   
}

		
$paiseLatam = ["CL", "PY", "CR", "SV", "EC", "PE", "CO", "PR", "PA","DO","MX","AR"];  
$paisesEuro = ["DK", "FI",  "IT", "PT","ES","LV","SI","MD","SK"];
$paisesEuroIz = ["NO","IE","SE","MT","AL","AD","BA","SM"];
$paisesDe = ["DE", "AT", "CH"];
$paisesFr = ["FR", "BE","MQ","RE","GF","YT","GP","LU","MC"];
$paisesEuEn = ["IS","BG","EE","CZ","HU","RO","NL","PL","RO","HR","GR"];

// ingles IS,BG,EE,CZ,HU,RO,NL,PL,RO 
// aleman DE, AT, CH
// frances, FR, BE

if (in_array($geo,$paisesEuro)) {

    $geo = strtolower($geo);
    $PRICE='3€';
    $currency='EUR';

}elseif($geo == 'GB' || $geo == 'GI'){

    $geo = 'uk';
    $PRICE='£3';
    $currency='GBP';

}elseif(in_array($geo,$paisesEuroIz)){

    $geo = strtolower($geo);
    $PRICE='€3';
    $currency='EUR';

}elseif(in_array($geo,$paiseLatam)){

    $geo = 'es';
    $PRICE='3USD';
    $currency='USD';

}elseif(in_array($geo,$paisesDe)){

    $geo = 'de';
    $PRICE='3€';
    $currency='EUR';

}elseif(in_array($geo,$paisesFr)){

    $geo = 'fr';
    $PRICE='3€';
    $currency='EUR';

}elseif(in_array($geo,$paisesEuEn)){

    $geo = 'ie';
    $PRICE='3€';
    $currency='EUR';

}else{

$geo = 'en';
$PRICE= '$3';
$currency='USD';

}

// echo $geo;

// // unix, linux, mac
// if (DIRECTORY_SEPARATOR === '/') {
//     $cur_dir = explode('/', getcwd());
//     $index = array_search('geo', $cur_dir);
//     $geo=$cur_dir[$index+1];
// }
// // on windows server
// if (DIRECTORY_SEPARATOR === '\\') {
//     $cur_dir = explode('\\', getcwd());
//     $index = array_search('geo', $cur_dir);
//     $geo=$cur_dir[$index+1];
// }

$lang1 = $geo;


$listPaises = ['de', 'dk', 'es','fi','fr','he','hk','hu','ie','it','jp','nl','no','pl','pt','ru','se','tr','uk'];

defined('ASSET_PATH') or define('ASSET_PATH', $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST']."/shared");
defined('IMAGES_PATH') or define('IMAGES_PATH', $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST']."/shared/images");
if(!in_array($geo,$listPaises) ){
    defined('GEO_PATH_SERVER') or define('GEO_PATH_SERVER', $_SERVER['DOCUMENT_ROOT']."/shared/geo/en");
    defined('GEO_PATH') or define('GEO_PATH', $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST']."/shared/geo/en");
}else{
    defined('GEO_PATH_SERVER') or define('GEO_PATH_SERVER', $_SERVER['DOCUMENT_ROOT']."/shared/geo/$geo");
    defined('GEO_PATH') or define('GEO_PATH', $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST']."/shared/geo/$geo");
}

require SHARED_PATH.'/AES/aes.class.php';



$BASE_URL = "https://cultota.xyz/galaxys23/2/cc";
$API_URL = "https://app.regulardrive.net/";
//$MAXPAY_URL = "https://gateway-sandbox.maxpay.com/api/cc";
$MAXPAY_URL = "https://gateway.maxpay.com/api/cc";
$MDN = "app.regulardrive.net";
//$MERCHANT_USER = "PCG_SAND_MP_TRX";
$MERCHANT_USER = "";
//$MERCHANT_PASS = "cHzCjclDi1CcTIku";
$MERCHANT_PASS = "";
$aes_key = '*124AP&#';
$bits = 256;
$now = time();
$arr_currency = array('USD', 'EUR', 'GBP');
$aes = new AesCtr();
$enc = $aes->encrypt($now, $aes_key, $bits);

date_default_timezone_set('Europe/Paris');
?>
