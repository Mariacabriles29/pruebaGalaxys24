<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$_SESSION['payment_requested'] = true;
	$datetime = date('Y-m-d H:i:s');
	$checktime = date('U', strtotime('-15 minutes'));
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$deviceFingerPrint = $_POST['fingerprint'];
	$countryy = $_POST['countryy'];
	$hdpass = $_POST['hdpass'];
	$amount = $_POST['amount'];
	$currency = $_POST['currency'];
	$itoken = $_POST['itoken'];
	$s_email = strtolower($_POST['s_email']);
	$card_holder = $_POST['card_holder'];
	$card_number = $_POST['card_number'];
	$card_number = str_replace(' ', '', $card_number);
	$card_number = str_replace('+', '', $card_number);
	$card_exp_month = $_POST['card_exp_month'];
	$card_exp_year = '20' . $_POST['card_exp_year'];
	$cvv = $_POST['cvv'];
	$trial_amount = "3.00";
	$passhash = $_POST['patak'];
	$ip = $_SERVER['REMOTE_ADDR'];
    $affiliate_id = $_POST['affiliate_id'];
    $lp = $_POST['lp'];
	$phone_number = "";
	
	if(isset($_POST['phone_number'])){
	  
	  $phone_number=$_POST['phone_number'];
	}

	$mid = [];

	$card_type="";
	// if ($_POST['card_type'] !="" && $_POST['card_geo'] !="") {
	// 	$card_type = $_POST['card_type'];
	// 	$card_geo = $_POST['card_geo'];
	// 	$usa = ['usa'];
    //     if ($card_type == 'MASTERCARD' && in_array(strtolower($card_geo), $usa)) {

	// 		$mid['mid_reference'] = 'MD0000000D478133';
	// 	}elseif ($card_type == 'MASTERCARD') {

	// 		$mid['mid_reference'] = 'MD0000000D44C5A3';
	// 	}
	// }

	if(($_POST['card_type'] != 'MASTERCARD') && ($_POST['card_type'] != 'VISA')){
		echo '<script>javascript:history.go(-1)</script>';
		exit();
	}
    if(empty($_SESSION['affiliate_id'])){
		$affiliate_id = $_POST['affiliate_id'];
		$affiliate_id = str_replace(' ', '', $affiliate_id);
	}else{
		$affiliate_id = @$_SESSION['affiliate_id'];
		$affiliate_id = str_replace(' ', '', $affiliate_id);
	}

	if(empty($_SESSION['lp'])){
		$lp = $_POST['lp'];
		$lp = str_replace(' ', '', $lp);
	}else{
		$lp =  @$_SESSION['lp'];
		$lp = str_replace(' ', '', $lp);
	}

	if(empty($_SESSION['CLICK_ID'])){
		$CLICK_ID = $_POST['cid'];
	}else{
		$CLICK_ID =  @$_SESSION['CLICK_ID'];
	}

	if(strlen($countryy)<3){
		$sql = "SELECT * FROM `country` where iso='$countryy'";
		if ($result_country = mysqli_query($con, $sql)) {
			while ($row = mysqli_fetch_assoc($result_country)) {
				$countryy  = $row['iso3'];
			}
		}
	}
	// $zip_or_postcode = isset($zip_or_postcode) && strlen($zip_or_postcode) <= 10 ? $zip_or_postcode : "";
	// $city = isset($city) && strlen($city) <= 32 ? $city : "";
    // $state = isset($state) && strlen($state) <= 32 ? $state : "";

	if (!isset($zip_or_postcode) || strlen($zip_or_postcode) < 2 || strlen($zip_or_postcode) >= 10) {
		$zip_or_postcode=get_geolocation($ip,'zip' );
		if(strlen($zip_or_postcode) < 2 || strlen($zip_or_postcode) > 10){
			$zip_or_postcode='';
		}
	}
	if (!isset($city) || strlen($city) < 2 || strlen($city) >= 32) {
		$city=get_geolocation($ip,'city' );
		if(strlen($city) < 2 || strlen($city) > 32){
			$city='';
		}
	}
	if (!isset($state) || strlen($state) < 2 || strlen($state) >= 32) {
		$state=get_geolocation($ip,'regionName' );
		if(strlen($state) < 2 || strlen($state) > 32){
			$state='';
		}
	}
	// $phone_number = isset($phone_number) && strlen($phone_number) > 7 ? $phone_number :  "";
	if (!isset($phone_number) || strlen($phone_number) <= 7 || strlen($phone_number) > 15) {
    $phone_number = "";
	}

	unset($_POST);
	$_POST = array();
	if ($first_name != "" && $last_name != "" && $countryy != "" && $hdpass != "" && $currency != "" && $itoken != "" && $s_email != "" && $card_holder != "" && $card_number != "" && $card_exp_month != '' && $card_exp_year != "" && $cvv != "") {
		$passtime = $aes->decrypt($itoken, $aes_key, $bits);
		/*if ($now > $passtime && $checktime < $passtime) {*/
		if ($now) {
			//$passhash = get_pass($API_URL, $hdpass);
			if ($passhash != "") {
				$auth_check = get_authcheck($API_URL, $s_email, $hdpass, $con);
				$auth_res = json_decode($auth_check);
				if ($auth_res) {
					if ($auth_res->status == 'true') {
						$uid = $auth_res->uid;

						$last_4_cc = substr($card_number, 12, 16);
						$bin = mb_substr($card_number, 0, 6);
						$card_brand = card_brand($bin);

						$user_query_update="update users set card_holder = '$card_holder', country = '$countryy', password= '$passhash', bin = '$bin', card_brand = '$card_brand', last_4_cc = '$last_4_cc' where id = '$uid' ";
						
						if (mysqli_query($con, $user_query_update)) {
						
						} else {
							printerr("Something Wrong! try again later");
						}
					} else {
						$amtcur = '3 ' . $currency;
						$last_4_cc = substr($card_number, 12, 16);
						$bin = mb_substr($card_number, 0, 6);
						$card_brand = card_brand($bin);
						$user_query = "INSERT INTO `users`(`username`, `first_name`, `last_name`, `avatar_url`, `gender`, `permissions`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `stripe_active`, `stripe_id`, `stripe_subscription`, `stripe_plan`, `last_four`, `trial`, `trial_cancel`, `trial_ends_at`, `subscription_ends_at`, `cancel`, `fallo`, `space_available`, `straal_id`, `formid`, `recobro1`, `recobro2`, `rebillToken`, `reference`, `card_holder`, `country`,`amount`,`last_4_cc`,`subscription`,`swi_premium`,`sum_amount`,`affiliate_id`,`lp`,`bin`,`card_brand`,`phone_number`, `device_fingerprint`) VALUES ('$first_name','$first_name','$last_name',NULL,NULL,NULL,'$s_email','$passhash',' ','$datetime','$datetime','0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0',NULL,'0',NULL,NULL,NULL,NULL,NULL,'$card_holder','$countryy','$amtcur','$last_4_cc','No regitered','Pending','$amtcur','$affiliate_id','$lp','$bin','$card_brand','$phone_number', '$deviceFingerPrint')";
						if (mysqli_query($con, $user_query)) {
							$uid = mysqli_insert_id($con);
						} else {
							printerr("Something Wrong! try again later");
						}
					}
					//do payment
					$enuid = base64_encode($uid);
					$uidurlencode = ($enuid);
					if (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i', $s_email)){
						$user_email = 'user_login_'.$uid.'@regulardrive.net';
					}else{
						$user_email = $s_email;
					}
					$url = $MAXPAY_URL;
					$pp = array("api_version" => 1,
						"merchant_account" => $MERCHANT_USER,
						"merchant_password" => $MERCHANT_PASS,
						"transaction_unique_id" => "reg-sale3d-". $uid . $now,
						"transaction_type" => "SALE3D",
						"amount" => $trial_amount,
						"currency" => $currency,
						"card_number" => $card_number,
						"card_exp_month" => $card_exp_month,
						"card_exp_year" => $card_exp_year,
						"cvv" => $cvv,
						"first_name" => $first_name,
						"last_name" => $last_name,
						"card_holder" => $card_holder,
						"address" => "",
						"city" => "",
						"state" => "",
						"zip" => "",
						"country" => $countryy,
						"user_phone" => "",
						"user_email" => $user_email,
						"user_ip" => $ip,
						"merchant_user_id" => $CLICK_ID,
						// "merchant_domain_name" => $MDN,
						"custom_device_fingerprint" => $deviceFingerPrint,
						// "cof_type" => "CIT-subsequent",
						"callback_url" => $API_URL . 'callback',
						"redirect_url" => $API_URL . "check3d/?transid=reg-sale3d-". $uid . $now . "&land=1&folder=".$BASE_URL."&affiliate_id=" . $affiliate_id . "&lp=" . $lp."&cid=".$CLICK_ID."&ctype=". base64_encode($card_type)
					);

					if (isset($affiliate_id) && $affiliate_id != "") {
				        $mid['merchant_affiliate_id'] = $affiliate_id;
					}

					$pp = array_merge($pp, $mid);

					$ch = curl_init();
					curl_setopt($ch, CURLOPT_URL, $url);
					curl_setopt($ch, CURLOPT_POST, 1);
					curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($pp));
					curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

					$response = curl_exec($ch);
					$err = curl_error($ch);
					curl_close($ch);
					$res = json_decode($response);
					$res_seri = serialize($res);
					if ($res) {
						$tid = $res->transaction_unique_id;
						$reference = $res->reference;
						$status = strtolower($res->status);
						$amount = $trial_amount;
						$currency = $currency;
						$timestamp = $res->timestamp;
						$message = $res->message;
						$token = $res->token;
						$acs_url = @$res->acs_url;
						$pareq = @$res->pareq;
						$ins_pre_data = "INSERT INTO `demo_list`(`transaction_unique_id`, `reference`, `status`, `amount`, `currency`, `fulldata`, `nowtime`, `uid`) VALUES ('$tid','$reference','$status','$amount','$currency','$res_seri','$now','$uid')";
						if (mysqli_query($con, $ins_pre_data)) {
							if ($status == "success") {

								?>
					<h3 style="color: #000;">Please wait don't refresh the page</h3>
					<form id="acsform" method="POST" action="<?php echo $acs_url; ?>">
        <input name="PaReq" type="hidden" value="<?php echo $pareq; ?>">
        <input name="TermUrl" type="hidden" value="<?php echo $BASE_URL; ?>/pay/payauthload.php?ref=<?php echo $reference; ?>">
        <input name="MD" type="hidden" value="<?php echo $reference; ?>">
    </form>
    <script type="text/javascript">
          //  setTimeout(function(){
						        //     document.getElementById('acsform').submit();
								//   }, 1500);
								document.getElementById('acsform').submit();

    </script>
					<?php	//header("Location: " . $BASE_URL . "/thank-you/index.php?id=" . $uidurlencode);
							} else {
								$user_dec_query = "UPDATE `users` SET subscription='Declined',swi_premium='-',reason_delined='$message',cancel='1' where id='$uid'";
								mysqli_query($con, $user_dec_query);
							    header("Location: " . $BASE_URL . "/declined/index3d.php?currency=" . $currency . "&affiliate_id=" . $affiliate_id . "&lp=" . $lp . "&message=" . $message);
								
							}

						} else {
							$user_dec_query = "UPDATE `users` SET subscription='Declined',swi_premium='-',reason_delined='Transaction Failed/Rejected' where id='$uid'";
							if (mysqli_query($con, $user_dec_query)) {
								header("Location: " . $BASE_URL . "/declined/index3d.php?currency=" . $currency . "&affiliate_id=" . $affiliate_id . "&lp=" . $lp . "&message=Transaction Failed/Rejected");
							} else {
								printerr("Something Wrong! try again later");
							}
						}
					} else {
						if ($err) {
							$err = strtolower($err);
							$user_dec_query = "UPDATE `users` SET subscription='Declined',swi_premium='-',reason_delined='$err' where id='$uid'";
							if(!mysqli_query($con, $user_dec_query)){
								printerr("Something Wrong! try again later");
							}
						}
					}

				}
			} else {
				printerr("Something Wrong! try again later");
			}

		} else {
			printerr("Your Payment Time Expired.");
		}

	} else {
		printerr("Enter valid Card Credentials");
	}

}

function printerr($msg) {
	die("<h3 style='color:#000;'>" . $msg . "</h3>");
}

function get_pass($API_URL, $string) {

	$params = array('pass' => $string);
	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, $API_URL . '/getpass');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	$response = json_decode(curl_exec($ch));
	curl_close($ch);
	if ($response) {
		return $response->result;
	} else {
		return false;
	}
}

function get_authcheck($API_URL, $email, $pass, $con) {
	$check_query = "SELECT * FROM `users` WHERE email='$email'";
	$data = array();
	if ($result_row = mysqli_query($con, $check_query)) {
		$rowcount = mysqli_num_rows($result_row);
		if ($rowcount > 0) {
			while ($row = mysqli_fetch_assoc($result_row)) {
				$data['status'] = "true";
				$data['uid'] = $row['id'];
			}
		} else {
			$data['status'] = "false";
			$data['uid'] = 0;
		}
	}

	$res = json_encode($data);
	return $res;

}

function get_authcheck_old($API_URL, $email, $pass) {

	$params = array('email' => $email, 'password' => $pass);
	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, $API_URL . '/getauthcheck');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	$response = (curl_exec($ch));
	curl_close($ch);
	return $response;
}

function card_brand($cardbin) {
	$firststr = mb_substr($cardbin, 0, 1);
	$secondstr = mb_substr($cardbin, 0, 2);
	if ($firststr == 4) {
		return "VISA";
	} elseif ($firststr == 5) {
		return "MASTER";
	} elseif ($firststr == 6) {
		return "Discover";
	} elseif ($secondstr == 34 || $secondstr == 37) {
		return "AMEX";
	} elseif ($secondstr == 35) {
		return "JCB";
	}
}

?>