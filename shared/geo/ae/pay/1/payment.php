<?php
require '../db.php';
require '../constant.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	//echo "<script>window.__payment__ = true;</script>";
	$datetime = date('Y-m-d H:i:s');
	$checktime = date('U', strtotime('-15 minutes'));
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$countryy = $_POST['countryy'];
	$state = $_POST['state'];
	$city = $_POST['city'];
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

$phone_number = "";

 	if(isset($_POST['phone_number'])){

 	  $phone_number=$_POST['phone_number'];
 	}

	$mid = [];
	$card_type = "";
	if ($_POST['card_type'] !="" && $_POST['card_geo'] !="") {
		$card_type = $_POST['card_type'];
		$card_geo = $_POST['card_geo'];

		$blocked = ['mex','col','pan','prt','gbr','usa','cri'
                ,'pri','chl','can','deu', 'pak'];

        if ($card_type == 'VISA' && in_array(strtolower($card_geo), $blocked)) {
         	$mid['mid_reference'] = 'MD0000000D44DDC1';
        }
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
					} else {
						$amtcur = '3 ' . $currency;
						$last_4_cc = substr($card_number, 12, 16);
						//Affliate id and lp session values
						$affiliate_id = @$_SESSION['affiliate_id'];
						$lp =  @$_SESSION['lp'];

						$user_query = "INSERT INTO `users`(`username`, `first_name`, `last_name`, `avatar_url`, `gender`, `legacy_permissions`, `email`, `password`, `api_token`, `card_brand`, `card_last_four`, `remember_token`, `created_at`, `updated_at`, `confirmed`, `confirmation_code`, `language`, `country`, `timezone`, `avatar`, `stripe_id`, `available_space`, `card_holder`, `amount`, `subscription`, `swi_premium`, `reason_delined`, `trial`, `trial_ends_at`, `rebillToken`, `trial_cancel`, `reference`, `sum_amount`, `last_charge`,`affiliate_id`,`lp`) VALUES ('$first_name','$first_name','$last_name',NULL,NULL,NULL,'$s_email','$passhash',NULL,NULL,'$last_4_cc','$itoken','$datetime','$datetime',1,NULL,NULL,'$countryy',NULL,NULL,NULL,100,'$card_holder','$amtcur','No regitered','Pending',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$affiliate_id','$lp')";

						if (mysqli_query($con, $user_query)) {
							$uid = mysqli_insert_id($con);
						} else {
							printerr("Something Wrong! try again later");
						}
					}
					//do payment

					if (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i', $s_email)){
						$user_email = 'user_login_'.$uid.'@regularbuilder.com';
					}
					else{
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
						"city" => $city,
						"state" => $state,
						"zip" => "",
						"country" => $countryy,
						"user_phone" => "",
						"user_email" => $user_email,
						"user_ip" => $ip,
						// "cof_type" => "CIT-subsequent",
						"merchant_domain_name" => $MDN,
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
										

										$click_id = @$_SESSION['CLICK_ID'];

										$user_update_query = "UPDATE `users` SET trial='$datetime',trial_ends_at='$tri_ends',trial_cancel='$tri_ends_cancel',subscription='Trial',rebillToken='$token',reference='$tid',available_space='100',last_charge='$last_charge',swi_premium='Pending',click_id='$click_id' where id='$uid'";
										if (mysqli_query($con, $user_update_query)) {

											$role_ins = "INSERT INTO `user_role`(`user_id`, `role_id`, `created_at`) VALUES ('$uid','2','$datetime')";
											mysqli_query($con, $role_ins);

											$ins_trans = "INSERT INTO `trans_new`(`user_id`, `TYPE`, `auth_tid`, `sale_tid`, `amount`, `currency`, `memo`, `billtoken`, `created_at`, `ip`) VALUES ('$uid','iAUTH','$tid','$tid','$amount','$currency','Trial Pack','$token','$datetime','$ip')";
											
											//Send the Postback conversion
											send_postback_conversion();
											
											if (mysqli_query($con, $ins_trans)) {
												$enuid = base64_encode($uid);
												$uidurlencode = ($enuid);
												header("Location: " . $BASE_URL . "/thank-you/index.php?id=" . $uidurlencode .'&currency=' . base64_encode($currency).'&ctype='. base64_encode($card_type));
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
		"merchant_domain_name" => $MDN,
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


function send_postback_conversion(){
	if (isset($_SESSION['CLICK_ID']) && $_SESSION['CLICK_ID'] != "") {
		$url = "https://admin.cpa-evolution.com/postback?clickid=".trim($_SESSION['CLICK_ID'])."&secure=60833c61b8e03c043b5fcd9c32dff377";
		    $curl = curl_init();
		    curl_setopt($curl, CURLOPT_URL, $url);
		    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		    $result = curl_exec($curl);
		    if (!curl_errno($curl)) {
		        $http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
		        if ($http_code === 200) {
		        	if (isset($_SESSION['CLICK_ID'])) {unset($_SESSION['CLICK_ID']); }
		        	if (isset($_SESSION['affiliate_id'])) {unset($_SESSION['affiliate_id']); }
		        	if (isset($_SESSION['lp'])) {unset($_SESSION['lp']); }
		        } else {}
		    }
		    curl_close($curl);
		    unset($result);
	}
}

?>