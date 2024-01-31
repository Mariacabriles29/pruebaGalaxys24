<?php

function get_ClientIp() {

	$ip = getenv("HTTP_CLIENT_IP") ?: getenv("HTTP_X_FORWARDED_FOR") ?: getenv("HTTP_X_FORWARDED") ?: getenv("HTTP_FORWARDED_FOR") ?: getenv("HTTP_FORWARDED") ?: getenv("REMOTE_ADDR");
	return $ip;
}

$ip = get_ClientIp();

$ips_exp = explode(",", $ip);

$ip2 = $ips_exp[0];

echo $ip2;

?>