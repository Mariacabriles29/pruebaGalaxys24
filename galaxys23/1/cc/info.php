<?php

$ip = $_SERVER['REMOTE_ADDR'];

$url = 'https://geoip.maxmind.com/geoip/v2.1/country/' . $ip . '?pretty';
$username = '146195';
$password = 'lySfwhdWPfqn5acu';

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

curl_setopt($ch, CURLOPT_USERPWD, $username . ':' . $password);

$result = curl_exec($ch);
if (curl_errno($ch)) {
	echo 'Error:' . curl_error($ch);
}
curl_close($ch);

$res = json_decode($result);

$iso_code = $res->country->iso_code;

print_r($iso_code);

?>