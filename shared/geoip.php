<?php

require 'db.php';
function get_ClientIp() {
	$ip = getenv("HTTP_CLIENT_IP") ?: getenv("HTTP_X_FORWARDED_FOR") ?: getenv("HTTP_X_FORWARDED") ?: getenv("HTTP_FORWARDED_FOR") ?: getenv("HTTP_FORWARDED") ?: getenv("REMOTE_ADDR");
	return $ip;
}

$ip = get_ClientIp();
$ips_exp = explode(",", $ip);
$ip2 = $ips_exp[0];


// $url = 'https://geoip.maxmind.com/geoip/v2.1/country/' . $ip2 . '?pretty';
// $username = '146195';
// $password = 'lySfwhdWPfqn5acu';
// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, $url);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

// curl_setopt($ch, CURLOPT_USERPWD, $username . ':' . $password);

// $result = curl_exec($ch);
// if (curl_errno($ch)) {
// 	echo 'Error:' . curl_error($ch);
// }
// curl_close($ch);

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

$sql = "SELECT * FROM `country` where iso='$iso'";

if ($result_country = mysqli_query($con, $sql)) {
	while ($row = mysqli_fetch_assoc($result_country)) {
		$iso2 = $row['iso'];
		$iso3 = $row['iso3'];
		$country_name = $row['nicename'];
	}
	if($iso3 == 'CAN' || $iso3 == 'USA'){
		// $state = $res->subdivisions[0]->iso_code;
		$state = $res->region;
		// $city = $res->city;
		$samarr = array('iso' => $iso2,'iso3' => $iso3, 'country' => $country_name, 'state' => $state);
	}
	else{
		$samarr = array('iso' => $iso2,'iso3' => $iso3, 'country' => $country_name);
	}
	echo json_encode($samarr);
}


?>