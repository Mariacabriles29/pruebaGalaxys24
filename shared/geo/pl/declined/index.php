<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow, noarchive">
    <title>Transakcja anulowana</title>
    <link rel="shortcut icon" type="image/png" href="<?php echo GEO_PATH; ?>/declined/images/error.png" />

    <!-- Bootstrap core CSS -->
    <link href="<?php echo GEO_PATH; ?>/declined/css/bootstrap.min.css" rel="stylesheet">

    <!-- Startup CSS -->
    <link href="<?php echo GEO_PATH; ?>/declined/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
  <script src="elements/js/html5shiv.js"></script>
  <script src="elements/js/respond.min.js"></script>
<![endif]-->

    <!-- Custom Google Font : Montserrat (Choose other: http://www.google.com/fonts/ ) -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <style>
        .light .masthead {
            background: none !important;
        }
    </style>

</head>

<body class="light">

    <!-- Header Starts -->
    <main id="top" class="masthead" role="main">
        <div class="container">
            <!-- Startup Logo -->
            <div class="logo">
                <a href="#"><img style="width: 15%;" src="<?php echo GEO_PATH; ?>/declined/images/error.png" alt="Error Icon"></a>
            </div>
            <h5 class="main-title" style="font-weight:bolder;">Transakcja anulowana</h5>
            <!-- Hero Title -->
            <h1 class="main-title">
                <?php 
                if (@$_GET['message']) {

                    if(@$_GET['message'] == 'Insufficient funds'){
                        echo 'Insufficient funds';
                    }else if(@$_GET['message'] == 'Card 3D secure is not enabled.'){
                        echo 'Card 3D secure is not enabled.';
                    }else if(@$_GET['message'] == '3D secure failed'){
                        echo '3D secure failed';
                    }else if(@$_GET['message'] == 'Transaction is expired'){
                        echo 'Transaction is expired';
                    }else if(@$_GET['message'] == 'Declined by anti-fraud system.'){
                        echo 'Declined by anti-fraud system.';
                    }else if(@$_GET['message'] == 'Invalid card number'){
                        echo 'Invalid card number';
                    }else if(@$_GET['message'] == 'Referal or restricted card'){
                        echo 'Restricted card';
                    }else if(@$_GET['message'] == 'Communication error with bank'){
                        echo 'Communication error with bank';
                    }else if(@$_GET['message'] == 'Proxy frontend error occured'){
                        echo 'Transaction Declined';
                    }else if(@$_GET['message'] == 'Authorization declined'){
                        echo 'Authorization declined';
                    }else if(@$_GET['message'] == 'General bank decline'){
                        echo 'General bank decline';
                    }else if(@$_GET['message'] == 'Volume limit exceeded'){
                        echo 'Transaction Declined';
                    }else if(@$_GET['message'] == 'Incorrect field'){
                        echo 'Transaction Declined';
                    }else if(@$_GET['message'] == 'Invalid CVV'){
                        echo 'Invalid CVV';
                    }else if(@$_GET['message'] == 'Lost or stolen card'){
                        echo 'Lost or stolen card';
                    }else if(@$_GET['message'] == 'Card expired or expiration date invalid'){
                        echo 'Card expired or expiration date invalid';
                    }else{

                        echo @$_GET['message'];
                    }
                   
                } else {
                    echo "something went wrong!";
                }
                ?>
            </h1>
            <!-- Sub Title -->
            <h4 class="sub-title">
            <?php 
                if (@$_GET['message']) {

                    if(@$_GET['message'] == 'Insufficient funds'){
                        echo 'Card without enough funds to make the transaction. Please use a card that has enough money to make the payment.';
                    }else if(@$_GET['message'] == 'Card 3D secure is not enabled.'){
                        echo 'The card used does not have 3D verification activated in its own bank. Please activate 3D verification of the card or use another card from another bank to pay for the transaction.';
                    }else if(@$_GET['message'] == '3D secure failed'){
                        echo '3D code verification has failed. Please try again making sure you enter the code correctly or use another card from another bank to pay for the transaction.';
                    }else if(@$_GET['message'] == 'Transaction is expired'){
                        echo 'The card used does not have 3D verification enabled in its own bank or the 3D code verification has failed. Please enable 3D verification of the card at your bank or try again making sure you enter the code correctly or use another card from another bank to pay for the transaction.';
                    }else if(@$_GET['message'] == 'Declined by anti-fraud system.'){
                        echo 'The transaction has been rejected by our security system. We recommend that you use a different card to make the payment and/or enter all data correctly.';
                    }else if(@$_GET['message'] == 'Invalid card number'){
                        echo 'The transaction has been rejected for entering an invalid card number. Please make sure you enter the card number correctly or use a different card to pay for the transaction.';
                    }else if(@$_GET['message'] == 'Referal or restricted card'){
                        echo 'The transaction has been rejected. Please use a different card to pay for the transaction.';
                    }else if(@$_GET['message'] == 'Communication error with bank'){
                        echo 'The transaction has been rejected due to a communication error with the bank. Please wait a few minutes to make the transaction again or use a different card to pay for the transaction.';
                    }else if(@$_GET['message'] == 'Proxy frontend error occured'){
                        echo 'The transaction has been rejected due to a communication error with the bank. Please wait a few minutes to make the transaction again or use a different card to pay for the transaction.';
                    }else if(@$_GET['message'] == 'Authorization declined'){
                        echo 'The transaction has been rejected. Please use a different card to pay for the transaction.';
                    }else if(@$_GET['message'] == 'General bank decline'){
                        echo 'The transaction has been rejected. Please use a different card to pay for the transaction.';
                    }else if(@$_GET['message'] == 'Volume limit exceeded'){
                        echo 'The transaction has been rejected. Please use a different card to pay for the transaction.';
                    }else if(@$_GET['message'] == 'Incorrect field'){
                        echo 'The transaction has been rejected. Please use a different card to pay for the transaction and make sure you enter all the data correctly.';
                    }else if(@$_GET['message'] == 'Invalid CVV'){
                        echo 'The transaction has been rejected because an invalid CVV number was entered. Please make sure you enter the CVV number correctly or use a different card to pay for the transaction.';
                    }else if(@$_GET['message'] == 'Lost or stolen card'){
                        echo 'The transaction was rejected because a blocked card number was entered. Please use a different card to pay for the transaction.';
                    }else if(@$_GET['message'] == 'Card expired or expiration date invalid'){
                        echo 'The transaction has been rejected because an invalid expiry number was entered. Please make sure you enter the expiry number correctly or use a different card to pay for the transaction.';
                    }else{

                        echo "Check and correct your data by clicking on the button below";
                    }
                   
                } else {
                    echo "Check and correct your data by clicking on the button below";
                }
                ?>

                
            </h4>
        </div>
        <form class='pspPaymentForm' id="datos">
            <div class="form--control-holder">


                <div class="form--control-wrapper">
                    <a class="btn" href="<?php echo $BASE_URL; ?>/index.php?currency=<?php echo strtolower($_GET['currency']); ?>&affiliate_id=<?php echo strtolower($_GET['affiliate_id']); ?>&lp=<?php echo strtolower($_GET['lp']); ?>"  id="reintentar">Spróbuj ponownie</a>


                </div>



            </div>
        </form>
    </main>
    <!-- //   Header Ends -->


    <!-- Container -->
    <div class="container">
        <section class="row breath">
            <div class="col-md-12 footerlinks">
                <p>&copy; 2024 All rights reserved</p>
            </div>
        </section>
        <!-- // End Client Logos -->

    </div>
    <!-- // Container Ends -->

    <!-- JS and analytics only. -->
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="<?php echo GEO_PATH; ?>/declined/js/jquery.js"></script>
</body>

</html>