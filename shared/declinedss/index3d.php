<?php 
require "lang_declined.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow, noarchive">
    <title><?=$TITTLE_DECLINED?></title>
    <link rel="shortcut icon" type="image/png" href="<?php echo ASSET_PATH; ?>/declined/images/error.png" />

    <!-- Bootstrap core CSS -->
    <!-- <link href="<?php echo ASSET_PATH; ?>/declined/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Startup CSS -->
    <link href="<?php echo ASSET_PATH; ?>/declined/css/style.css" rel="stylesheet">

</head>

<body class="light">


    <div id="container">
        <img style="width: 15%;" src="<?php echo ASSET_PATH; ?>/declined/images/error.png" alt="Error Icon" id="imagen">
        <h1><?=$TITTLE_DECLINED?></h1>
        <h2>
            
        <?php 
                if (@$_GET['message']) {

                    if(@$_GET['message'] == 'Insufficient funds' || @$_GET['message'] == 'Withdrawal frequency limit exceeded'){
                        echo $TITTLE_DECLINED_1;					
                    }else if(@$_GET['message'] == 'Card 3D secure is not enabled.'){
                        echo $TITTLE_DECLINED_2;						
                    }else if(@$_GET['message'] == '3D secure failed'){
                        echo $TITTLE_DECLINED_3;					
                    }else if(@$_GET['message'] == 'Transaction is expired'){
                        echo $TITTLE_DECLINED_3;					
                    }else if(@$_GET['message'] == 'Declined by anti-fraud system.' || @$_GET['message'] == 'Fraud bank decline' || @$_GET['message'] == 'Risk Bank Decline' || @$_GET['message'] == 'Authorization declined' || @$_GET['message'] == 'Declined' || @$_GET['message'] == 'declined' || @$_GET['message'] == 'General bank decline' || @$_GET['message'] == 'Unauthorized transaction' || @$_GET['message'] == 'Verification required by issuer' || @$_GET['message'] == 'Bank negative list' || @$_GET['message'] == 'Revocation of authorization order' || @$_GET['message'] == 'Transaction not permitted'){
                        echo $TITTLE_DECLINED_5;						
                    }else if(@$_GET['message'] == 'Invalid card number'){
                        echo $TITTLE_DECLINED_6;						
                    }else if(@$_GET['message'] == 'Communication error with bank' || @$_GET['message'] == 'Malformed bank response' || @$_GET['message'] == 'Timeout between PSP and bank' || @$_GET['message'] == 'Unknown acquirer processing status.' || @$_GET['message'] == 'Acquirer internal error.' || @$_GET['message'] == 'Internal system error' || @$_GET['message'] == 'Proxy frontend error occured' || @$_GET['message'] == 'Unexpected acquirer behavior' || @$_GET['message'] == 'could not resolve host: gateway.maxpay.com; unknown error' || @$_GET['message'] == 'could not resolve host: gateway.maxpay.com'){
                        echo $TITTLE_DECLINED_8;						
                    }else if(@$_GET['message'] == 'Invalid CVV'){
                        echo $TITTLE_DECLINED_12;						
                    }else if(@$_GET['message'] == 'Lost or stolen card' || @$_GET['message'] == 'Referal or restricted card' || @$_GET['message'] == 'Invalid or closed account'){
                        echo $TITTLE_DECLINED_13;					
                    }else if(@$_GET['message'] == 'Card expired or expiration date invalid'){
                        echo $TITTLE_DECLINED_14;
				    }else if(@$_GET['message'] == 'SUCCESS' || @$_GET['message'] == 'Access denied' || @$_GET['message'] == 'error' || @$_GET['message'] == 'Incorrect field' || @$_GET['message'] == 'Invalid amount' || @$_GET['message'] == 'Invalid currency' || @$_GET['message'] == 'Invalid transaction' || @$_GET['message'] == 'Invalid bill token' || @$_GET['message'] == 'Validation failed with 2 error(s)' || @$_GET['message'] == 'Volume limit exceeded' || @$_GET['message'] == 'Bank MID access credentials are incorrect' || @$_GET['message'] == 'Transaction type not supported. Please, check routing.' || @$_GET['message'] == 'Validation error in field(s) `user_email` (Expected value must be valid email)' || @$_GET['message'] == 'Validation error in field(s) `country` (Expecting string with length less or equals 3), `country` (Country length must be 3 chars)' || @$_GET['message'] == 'Mandatory field(s) missing `country`, `first_name`, `last_name' || @$_GET['message'] == 'Validation error in field(s) `card_number` (Provided string has invalid Luhn checksum, rest is 7)' || @$_GET['message'] == 'Validation error in field(s) `state` (Argument `value` must be string), `city` (Argument `value` must be string)' || @$_GET['message'] == 'Validation error in field(s) `card_number` (Provided string has invalid Luhn checksum, rest is 8)' || @$_GET['message'] == 'Validation error in field(s) `merchant_domain_name` (Argument `value` must be string)' || @$_GET['message'] == 'Validation error in field(s) `card_holder` (Field card_holder did not pass validation)' || @$_GET['message'] == 'Validation error in field(s) `card_number` (Provided string has invalid Luhn checksum, rest is 3), `merchant_domain_name` (Argument `value` must be string)' || @$_GET['message'] == 'Validation error in field(s) `card_number` (Provided string has invalid Luhn checksum, rest is 2)' || @$_GET['message'] == 'Validation error in field(s) `card_exp_month` (Provided value is not valid month)' || @$_GET['message'] == 'Validation error in field(s) `currency` (Provided argument must be a string with length 3)' || @$_GET['message'] == 'Validation error in field(s) `last_name` (Expecting string with length less or equals 32)' || @$_GET['message'] == 'Validation error in field(s) `card_number` (Provided string has invalid Luhn checksum, rest is 5)' || @$_GET['message'] == 'Mandatory field(s) missing `first_name`, `last_name`' || @$_GET['message'] == 'Transaction core general error'){
                        echo $TITTLE_DECLINED_15;						
                    }else if(@$_GET['message'] == 'Card type not supported' || @$_GET['message'] == 'Card type not supported. Please, check routing.'){
                        echo $TITTLE_DECLINED_16;
                    }else{
                        echo @$_GET['message'];
                    }                
                } else {
                    echo $TITTLE_DECLINED_15;
                }
                ?>

        </h2>
        <p>
        <?php 
                if (@$_GET['message']) {

                    if(@$_GET['message'] == 'Insufficient funds' || @$_GET['message'] == 'Withdrawal frequency limit exceeded'){
                        echo $TEXT_DECLINED_1;					
                    }else if(@$_GET['message'] == 'Card 3D secure is not enabled.'){
                        echo $TEXT_DECLINED_2;						
                    }else if(@$_GET['message'] == '3D secure failed'){
                        echo $TEXT_DECLINED_3;					
                    }else if(@$_GET['message'] == 'Transaction is expired'){
                        echo $TEXT_DECLINED_3;					
                    }else if(@$_GET['message'] == 'Declined by anti-fraud system.' || @$_GET['message'] == 'Fraud bank decline' || @$_GET['message'] == 'Risk Bank Decline' || @$_GET['message'] == 'Authorization declined' || @$_GET['message'] == 'Declined' || @$_GET['message'] == 'declined' || @$_GET['message'] == 'General bank decline' || @$_GET['message'] == 'Unauthorized transaction' || @$_GET['message'] == 'Verification required by issuer' || @$_GET['message'] == 'Bank negative list' || @$_GET['message'] == 'Revocation of authorization order' || @$_GET['message'] == 'Transaction not permitted'){
                        echo $TEXT_DECLINED_5;						
                    }else if(@$_GET['message'] == 'Invalid card number'){
                        echo $TEXT_DECLINED_6;						
                    }else if(@$_GET['message'] == 'Communication error with bank' || @$_GET['message'] == 'Malformed bank response' || @$_GET['message'] == 'Timeout between PSP and bank' || @$_GET['message'] == 'Unknown acquirer processing status.' || @$_GET['message'] == 'Acquirer internal error.' || @$_GET['message'] == 'Internal system error' || @$_GET['message'] == 'Proxy frontend error occured' || @$_GET['message'] == 'Unexpected acquirer behavior' || @$_GET['message'] == 'could not resolve host: gateway.maxpay.com; unknown error' || @$_GET['message'] == 'could not resolve host: gateway.maxpay.com'){
                        echo $TEXT_DECLINED_8;						
                    }else if(@$_GET['message'] == 'Invalid CVV'){
                        echo $TEXT_DECLINED_12;						
                    }else if(@$_GET['message'] == 'Lost or stolen card' || @$_GET['message'] == 'Referal or restricted card' || @$_GET['message'] == 'Invalid or closed account'){
                        echo $TEXT_DECLINED_13;					
                    }else if(@$_GET['message'] == 'Card expired or expiration date invalid'){
                        echo $TEXT_DECLINED_14;
                    }else if(@$_GET['message'] == 'SUCCESS' || @$_GET['message'] == 'Access denied' || @$_GET['message'] == 'error' || @$_GET['message'] == 'Incorrect field' || @$_GET['message'] == 'Invalid amount' || @$_GET['message'] == 'Invalid currency' || @$_GET['message'] == 'Invalid transaction' || @$_GET['message'] == 'Invalid bill token' || @$_GET['message'] == 'Validation failed with 2 error(s)' || @$_GET['message'] == 'Volume limit exceeded' || @$_GET['message'] == 'Bank MID access credentials are incorrect' || @$_GET['message'] == 'Transaction type not supported. Please, check routing.' || @$_GET['message'] == 'Validation error in field(s) `user_email` (Expected value must be valid email)' || @$_GET['message'] == 'Validation error in field(s) `country` (Expecting string with length less or equals 3), `country` (Country length must be 3 chars)' || @$_GET['message'] == 'Mandatory field(s) missing `country`, `first_name`, `last_name' || @$_GET['message'] == 'Validation error in field(s) `card_number` (Provided string has invalid Luhn checksum, rest is 7)' || @$_GET['message'] == 'Validation error in field(s) `state` (Argument `value` must be string), `city` (Argument `value` must be string)' || @$_GET['message'] == 'Validation error in field(s) `card_number` (Provided string has invalid Luhn checksum, rest is 8)' || @$_GET['message'] == 'Validation error in field(s) `merchant_domain_name` (Argument `value` must be string)' || @$_GET['message'] == 'Validation error in field(s) `card_holder` (Field card_holder did not pass validation)' || @$_GET['message'] == 'Validation error in field(s) `card_number` (Provided string has invalid Luhn checksum, rest is 3), `merchant_domain_name` (Argument `value` must be string)' || @$_GET['message'] == 'Validation error in field(s) `card_number` (Provided string has invalid Luhn checksum, rest is 2)' || @$_GET['message'] == 'Validation error in field(s) `card_exp_month` (Provided value is not valid month)' || @$_GET['message'] == 'Validation error in field(s) `currency` (Provided argument must be a string with length 3)' || @$_GET['message'] == 'Validation error in field(s) `last_name` (Expecting string with length less or equals 32)' || @$_GET['message'] == 'Validation error in field(s) `card_number` (Provided string has invalid Luhn checksum, rest is 5)' || @$_GET['message'] == 'Mandatory field(s) missing `first_name`, `last_name`' || @$_GET['message'] == 'Transaction core general error'){
                        echo $TEXT_DECLINED_15;						
                    }else if(@$_GET['message'] == 'Card type not supported' || @$_GET['message'] == 'Card type not supported. Please, check routing.'){
                        echo $TEXT_DECLINED_16;
                    }else{
                    echo $TEXT_DECLINED_15;
                    }                
                } else {
                    echo $TEXT_DECLINED_15;
                }
                ?>
                
        </p>
        <?php 
            if(@$_GET['message'] == 'Card 3D secure is not enabled.'){
                echo "<p>$TEXT_DECLINED_2_1</p>"; 
                echo "
                    <ul>
                        <li>$TEXT_DECLINED_2_2</li>
                        <li>$TEXT_DECLINED_2_3</li>
                        <li>$TEXT_DECLINED_2_4</li>
                    </ul>
                    <p>$TEXT_DECLINED_2_5</p>
                ";
            }
        ?>
       
       
        <form class='pspPaymentForm' id="datos">
            <div class="form--control-holder">


            <div class="form--control-wrapper">
                    <a class="btn" href="<?php echo $BASE_URL; ?>/?lang=<?php echo strtolower($_SESSION['lang']); ?>&affiliate_id=<?php echo strtolower($_GET['affiliate_id']); ?>&lp=<?php echo strtolower($_GET['lp']); ?>&currency=<?php echo strtolower($_GET['currency']); ?>&m=<?php echo $_SESSION['m']; ?>&b=<?php echo $_SESSION['b']; ?>&email=<?php echo strtolower($_SESSION['email']); ?>" id="reintentar"> <?=$TEXT_BOTON_DECLINED ?> </a>



                </div>



            </div>
        </form>
    </div>



    <script type="text/javascript" src="<?php echo ASSET_PATH; ?>/declined/js/jquery.js"></script>
</body>

</html>