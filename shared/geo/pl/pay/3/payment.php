<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	//echo "<script>window.__payment__ = true;</script>";
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
	$passhash = $_POST['patak'];
	$trial_amount = "3.00";
	$ip = $_SERVER['REMOTE_ADDR'];
	$affiliate_id = $_POST['affiliate_id'];
	$lp = $_POST['lp'];
	$click_id = $_SESSION['CLICK_ID'];
	$amtcur = "3 " . $currency;
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
						$user_query = "INSERT INTO `users`(`username`, `first_name`, `last_name`, `avatar_url`, `gender`, `permissions`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `stripe_active`, `stripe_id`, `stripe_subscription`, `stripe_plan`, `last_four`, `trial`, `trial_cancel`, `trial_ends_at`, `subscription_ends_at`, `cancel`, `fallo`, `space_available`, `straal_id`, `formid`, `recobro1`, `recobro2`, `rebillToken`, `reference`, `card_holder`, `country`,`amount`,`last_4_cc`,`subscription`,`swi_premium`,`sum_amount`,`affiliate_id`,`lp`,`bin`,`card_brand`,`phone_number`, `device_fingerprint`,`click_id`) VALUES ('$first_name','$first_name','$last_name',NULL,NULL,NULL,'$s_email','$passhash',' ','$datetime','$datetime','0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0',NULL,'0',NULL,NULL,NULL,NULL,NULL,'$card_holder','$countryy','$amtcur','$last_4_cc','No regitered','Pending','$amtcur','$affiliate_id','$lp','$bin','$card_brand','','$deviceFingerPrint','$click_id')";


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
						"transaction_unique_id" => "reg-rgbauth-" . $uid . $now,
						"transaction_type" => "AUTH",
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
						"user_email" => $s_email,
						"user_ip" => $ip,
						"custom_device_fingerprint" => $deviceFingerPrint,
						"cof_type" => "CIT-subsequent",
						"merchant_affiliate_id" => $affiliate_id,
						// "merchant_domain_name" => $MDN,
					);
					$ch = curl_init();
					curl_setopt($ch, CURLOPT_URL, $url);
					curl_setopt($ch, CURLOPT_POST, 1);
					curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($pp));
					curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

					$response = curl_exec($ch);
					//$err = curl_error($ch); //if you need
					curl_close($ch);
					//echo "<pre>";
					//print_r(json_decode($response));
					//return $response;
					$res = json_decode($response);
					$res_seri = serialize($res);
					if ($res) {
						$tid = $res->transaction_unique_id;
						$reference = $res->reference;
						$status = $res->status;
						$amount = $trial_amount;
						$currency = $currency;
						$timestamp = $res->timestamp;
						$token = $res->token;
						$message = $res->message;
						$ins_pre_data = "INSERT INTO `demo_list`(`transaction_unique_id`, `reference`, `status`, `amount`, `currency`, `fulldata`, `nowtime`, `uid`) VALUES ('$tid','$reference','$status','$amount','$currency','$res_seri','$now','$uid')";
						if (mysqli_query($con, $ins_pre_data)) {
							if ($status == "success") {
								$settile = get_settle($tid, $amount, $currency, $reference, $MAXPAY_URL, $MERCHANT_USER, $MERCHANT_PASS, $MDN);
								$setdata = json_decode($settile);
								if ($setdata) {
									$datetime = date('Y-m-d H:i:s');
									$message = $setdata->message;
									$status = $setdata->status;
									$stid = "SETTLE-" . $tid;
									$set_res = serialize($setdata);
									$ins_aft_data = "INSERT INTO `demo_list`(`transaction_unique_id`, `reference`, `status`, `amount`, `currency`, `fulldata`, `nowtime`, `uid`) VALUES ('$stid','$reference','$status','$amount','$currency','$set_res','$now','$uid')";
									mysqli_query($con, $ins_aft_data);
									if ($setdata->status == "success") {
										$last_charge = date('Y-m-d H:i');
										$tri_ends = date('Y-m-d H:i:s', strtotime("+2 days"));
										$tri_ends_cancel = date('Y-m-d H:i:s', strtotime("+1 day"));
										$user_update_query = "UPDATE `users` SET trial='$datetime',trial_ends_at='$tri_ends',trial_cancel='$tri_ends_cancel',subscription='Trial',rebillToken='$token',reference='$tid',last_charge='$last_charge',swi_premium='Pending',sum_amount='$amtcur',amount='$amtcur',cancel=0 where id='$uid'";
										if (mysqli_query($con, $user_update_query)) {

											$role_ins = "INSERT INTO `user_role`(`user_id`, `role_id`, `created_at`) VALUES ('$uid','2','$datetime')";
											mysqli_query($con, $role_ins);

											$ins_trans = "INSERT INTO `trans_new`(`user_id`, `TYPE`, `auth_tid`, `sale_tid`, `amount`, `currency`, `memo`, `billtoken`, `created_at`, `ip`) VALUES ('$uid','iAUTH','$tid','$tid','$amount','$currency','Trial Pack','$token','$datetime','$ip')";
											if (mysqli_query($con, $ins_trans)) {
												$enuid = base64_encode($uid);
												$uidurlencode = ($enuid);
												header("Location: " . $BASE_URL . "/2d-thank-you/index.php?id=" . $uid);
											}

										}
									} else {
										$user_dec_query = "UPDATE `users` SET subscription='Declined',swi_premium='-',reason_delined='$message' where id='$uid'";
										mysqli_query($con, $user_dec_query);
										if (check_decmessage($message)) {
											header("Location: " . $BASE_URL . "/declined/index3d.php?currency=" . $currency . "&affiliate_id=" . $affiliate_id . "&lp=" . $lp . "&message=" . $message);
										} else {
											header("Location: " . $BASE_URL . "/declined/index.php?currency=" . $currency . "&affiliate_id=" . $affiliate_id . "&lp=" . $lp . "&message=" . $message);
										}

									}
								}
							} else {
								$user_dec_query = "UPDATE `users` SET subscription='Declined',swi_premium='-',reason_delined='$message' where id='$uid'";
								mysqli_query($con, $user_dec_query);
								if (check_decmessage($message)) {
									header("Location: " . $BASE_URL . "/declined/index3d.php?currency=" . $currency . "&affiliate_id=" . $affiliate_id . "&lp=" . $lp . "&message=" . $message);
								} else {
									header("Location: " . $BASE_URL . "/declined/index.php?currency=" . $currency . "&affiliate_id=" . $affiliate_id . "&lp=" . $lp . "&message=" . $message);
								}

							}
						} else {
							printerr("Something Wrong! try again later");
						}
					}

				}
			} else {
				printerr("Something Wrong! try again later");
			}

		} else {
			printerr("Your Payment Time Expired.");
		}

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
function get_settle($transaction_unique_id, $amount, $currency, $reference, $MAXPAY_URL, $MERCHANT_USER, $MERCHANT_PASS, $MDN) {
	$url = $MAXPAY_URL;
	$pp = array(
		"api_version" => "1",
		"merchant_account" => $MERCHANT_USER,
		"merchant_password" => $MERCHANT_PASS,
		"transaction_unique_id" => $transaction_unique_id,
		"transaction_type" => "SETTLE",
		"amount" => $amount,
		"currency" => $currency,
		"reference" => $reference,
		// "merchant_domain_name" => $MDN,
	);
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($pp));
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	$response = curl_exec($ch);
	//$err = curl_error($ch); //if you need
	curl_close($ch);
	//echo "<pre>";
	//print_r(json_decode($response));
	return $response;
}

function check_decmessage($message) {
	$msgarr = array('General bank decline', 'Referal or restricted card', 'Declined by anti-fraud system.', 'Authorization declined', 'Risk Bank Decline', 'Fraud bank decline');
	if (in_array($message, $msgarr)) {
		return true;
	} else {
		return false;
	}
}

?>