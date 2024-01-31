<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$pares = $_POST['PaRes'];
	$reference = $_REQUEST['ref'];
	$ip = $_SERVER['REMOTE_ADDR'];

	$ref_query = "SELECT * FROM `demo_list` WHERE reference='$reference'";

	if ($result_trans = mysqli_query($con, $ref_query)) {
		while ($row = mysqli_fetch_assoc($result_trans)) {
			$amount = $row['amount'];
			$currency = $row['currency'];
			$uid = $row['uid'];
			$auth_tid = $row['transaction_unique_id'];
		}
		if ($amount != "" && $currency != "" && $uid != "") {
			$res = sale_pares($pares, $amount, $currency, $reference, $MAXPAY_URL, $MERCHANT_USER, $MERCHANT_PASS, $now);
			if ($res) {
				$resdata = json_decode($res);
				$resdata_seri = serialize($resdata);
				$tid = $resdata->transaction_unique_id;
				$token = $resdata->token;
				$reference_sale = $resdata->reference;
				$status = $resdata->status;
				$message = $resdata->message;
				$ins_pre_data = "INSERT INTO `demo_list`(`transaction_unique_id`, `reference`, `status`, `amount`, `currency`, `fulldata`, `nowtime`, `uid`) VALUES ('$tid','$reference_sale','$status','$amount','$currency','$resdata_seri','$now','$uid')";
				if (mysqli_query($con, $ins_pre_data)) {
					if ($resdata->status == 'success') {
						$datetime = date('Y-m-d H:i:s');
						$tri_ends = date('Y-m-d H:i:s', strtotime("+2 days"));
						$tri_ends_cancel = date('Y-m-d H:i:s', strtotime("+1 day"));
						$user_update_query = "UPDATE `users` SET trial='$datetime',trial_ends_at='$tri_ends',trial_cancel='$tri_ends_cancel',subscription='Premium Trial 2 Days',rebillToken='$token',reference='$tid',stripe_plan='100GB',space_available='100',stripe_active='1' where id='$uid'";
						if (mysqli_query($con, $user_update_query)) {

							$oritrans = "INSERT INTO `transaccion`(`plan`, `user_id`, `tarjeta_id`, `straal_id`, `monto`, `trial`, `trial_cancel`, `trial_ends_at`, `created_at`) VALUES ('Premium Trial 2 Days','$uid',NULL,NULL,'$currency','$datetime','$tri_ends_cancel','$tri_ends','$datetime')";
							mysqli_query($con, $oritrans);
							$rand = mt_rand();
							$orifolder = "INSERT INTO `folders`(`name`, `description`, `path`, `user_id`, `folder_id`, `share_id`, `password`, `created_at`, `updated_at`, `deleted_at`) VALUES ('root',NULL,NULL,'$uid',NULL,'$rand',NULL,'$datetime','$datetime',NULL)";

							mysqli_query($con, $orifolder);

							$ins_trans = "INSERT INTO `trans_new`(`user_id`, `TYPE`, `auth_tid`, `sale_tid`, `amount`, `currency`, `memo`, `billtoken`, `created_at`, `ip`) VALUES ('$uid','iAUTH3D','$auth_tid','$tid','$amount','$currency','Trial Pack','$token','$datetime','$ip')";
							if (mysqli_query($con, $ins_trans)) {
								$enuid = base64_encode($uid);
								$uidurlencode = ($enuid);

								// if (isset($_SESSION['CLICK_ID'])) {
					   //      		echo $_SESSION['CLICK_ID'];
					   //      	}

								// exit('payment Success');

								header("Location: " . $BASE_URL . "/thank-you/index.php?id=" . $uidurlencode);
							} else {
								header("Location: " . $BASE_URL . "/declined/index3d.php?currency=" . $currency);
							}
						} else {
							printerr('Something Wrong! try again later');
						}
					} else {
						header("Location: " . $BASE_URL . "/declined/index3d.php?currency=" . $currency . "&message=" . $message);
					}
				}
			} else {
				header("Location: " . $BASE_URL . "/declined/index3d.php?currency=" . $currency);
			}
		}
	} else {
		printerr('Something Wrong! try again later');
	}
}

function printerr($msg) {
	die("<h3 style='color:#000;'>" . $msg . "</h3>");
}

function sale_pares($pares, $amount, $currency, $reference, $MAXPAY_URL, $MERCHANT_USER, $MERCHANT_PASS, $now) {
	$current_timestamp = $now;
	$ip = $_SERVER['REMOTE_ADDR'];
	$url = $MAXPAY_URL;
	$pp = array(
		"api_version" => 1,
		"merchant_account" => $MERCHANT_USER,
		"merchant_password" => $MERCHANT_PASS,
		"transaction_unique_id" => "reg-sale3d-" . $current_timestamp,
		"transaction_type" => "SALE",
		"amount" => $amount,
		"currency" => $currency,
		"user_ip" => $ip,
		"reference" => $reference,
		"pares" => $pares,
		"cof_type" => "CIT-subsequent",
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
	/*print_r(json_decode($response));
		exit;*/
	return $response;
}
?>