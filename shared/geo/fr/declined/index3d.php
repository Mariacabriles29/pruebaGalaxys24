<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow, noarchive">
    <title>Transaction Refusée</title>
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
            <h5 class="main-title" style="font-weight:bolder;">Transaction refusée</h5>
             <!-- Hero Title -->
             <h1 class="main-title">
                <?php 
                if (@$_GET['message']) {

                    if(@$_GET['message'] == 'Insufficient funds'){
                        echo 'Fonds insuffisants';
                    }else if(@$_GET['message'] == 'Card 3D secure is not enabled.'){
                        echo 'La fonction 3-D Secure de la carte n’a pas été activée.';
                    }else if(@$_GET['message'] == '3D secure failed'){
                        echo 'Échec de 3-D Secure';
                    }else if(@$_GET['message'] == 'Transaction is expired'){
                        echo 'La transaction a expiré';
                    }else if(@$_GET['message'] == 'Declined by anti-fraud system.'){
                        echo 'Refusée par le système anti-fraude.';
                    }else if(@$_GET['message'] == 'Invalid card number'){
                        echo 'Numéro de carte invalide';
                    }else if(@$_GET['message'] == 'Referal or restricted card'){
                        echo 'Carte de référence ou carte restreinte';
                    }else if(@$_GET['message'] == 'Communication error with bank'){
                        echo 'Erreur de communication avec la banque';
                    }else if(@$_GET['message'] == 'Proxy frontend error occured'){
                        echo 'Transaction refusée';
                    }else if(@$_GET['message'] == 'Authorization declined'){
                        echo 'Autorisation refusée';
                    }else if(@$_GET['message'] == 'General bank decline'){
                        echo 'Refus général de la banque';
                    }else if(@$_GET['message'] == 'Volume limit exceeded'){
                        echo 'Transaction refusée';
                    }else if(@$_GET['message'] == 'Incorrect field'){
                        echo 'Transaction refusée';
                    }else if(@$_GET['message'] == 'Invalid CVV'){
                        echo 'CVV invalide';
                    }else if(@$_GET['message'] == 'Lost or stolen card'){
                        echo 'Carte perdue ou volée';
                    }else if(@$_GET['message'] == 'Card expired or expiration date invalid'){
                        echo 'Carte expirée ou date d’expiration invalide';
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
                        echo 'Les fonds sur la carte sont suffisants pour pouvoir effectuer la transaction. Veuillez utiliser une carte sur laquelle il y a suffisamment d’argent pour effectuer le paiement.';
                    }else if(@$_GET['message'] == 'Card 3D secure is not enabled.'){
                        echo 'La fonction 3-D Secure n’a pas été activée sur la carte dans sa propre banque. Veuillez activer la vérification 3-D Secure de la carte ou utiliser une autre carte d’une autre banque pour réaliser la transaction.';
                    }else if(@$_GET['message'] == '3D secure failed'){
                        echo 'La vérification 3-D Secure du code a échoué. Veuillez réessayer en vérifiant que vous saisissez correctement le code ou bien utilisez une autre carte d’une autre banque pour réaliser la transaction.';
                    }else if(@$_GET['message'] == 'Transaction is expired'){
                        echo 'La vérification 3-D Secure n’est pas activée sur la carte utilisée dans sa propre banque ou bien la vérification 3D du code a échoué. Veuillez activer la vérification 3D de la carte dans votre banque ou essayez à nouveau en vous assurant que vous saisissez le code correctement ou bien utilisez une autre carte d’une autre banque pour réaliser la transaction.';
                    }else if(@$_GET['message'] == 'Declined by anti-fraud system.'){
                        echo 'La transaction a été refusée par notre système de sécurité. Nous vous recommandons d’utiliser une autre carte pour effectuer le paiement et/ou de vérifier que toutes les données ont été saisies correctement.';
                    }else if(@$_GET['message'] == 'Invalid card number'){
                        echo 'La transaction a été rejetée parce que le numéro de carte saisi n’est pas valide. Veuillez vérifier que le numéro de carte saisi est bien correct ou bien utilisez une autre carte pour réaliser la transaction.';
                    }else if(@$_GET['message'] == 'Referal or restricted card'){
                        echo 'La transaction a été rejetée. Veuillez utiliser une autre carte pour réaliser la transaction.';
                    }else if(@$_GET['message'] == 'Communication error with bank'){
                        echo 'La transaction a été rejetée en raison d’une erreur de communication avec la banque. Veuillez patienter quelques minutes pour effectuer à nouveau la transaction ou bien utilisez une autre carte pour réaliser la transaction.';
                    }else if(@$_GET['message'] == 'Proxy frontend error occured'){
                        echo 'La transaction a été rejetée en raison d’une erreur de communication avec la banque. Veuillez patienter quelques minutes pour effectuer à nouveau la transaction ou bien utilisez une autre carte pour réaliser la transaction.';
                    }else if(@$_GET['message'] == 'Authorization declined'){
                        echo 'La transaction a été rejetée. Veuillez utiliser une autre carte pour réaliser la transaction.';
                    }else if(@$_GET['message'] == 'General bank decline'){
                        echo 'La transaction a été rejetée. Veuillez utiliser une autre carte pour réaliser la transaction.';
                    }else if(@$_GET['message'] == 'Volume limit exceeded'){
                        echo 'La transaction a été rejetée. Veuillez utiliser une autre carte pour réaliser la transaction.';
                    }else if(@$_GET['message'] == 'Incorrect field'){
                        echo 'La transaction a été rejetée. Veuillez utiliser une autre carte pour réaliser la transaction et vérifier que vous avez saisi correctement toutes les données.';
                    }else if(@$_GET['message'] == 'Invalid CVV'){
                        echo 'La transaction a été rejetée parce que le numéro CVV de la carte saisi est invalide. Veuillez vérifier que vous avez saisi correctement le numéro CVV ou bien utilisez une autre carte pour réaliser la transaction.';
                    }else if(@$_GET['message'] == 'Lost or stolen card'){
                        echo 'La transaction a été rejetée parce que le numéro saisi correspond à une carte volée. Veuillez utiliser une autre carte pour réaliser la transaction.';
                    }else if(@$_GET['message'] == 'Card expired or expiration date invalid'){
                        echo 'La transaction a été rejetée parce que la date d’expiration saisie est invalide. Veuillez vérifier que vous avez saisi correctement la date d’expiration ou bien utilisez une autre carte pour réaliser la transaction.';
                    }else{

                        echo "Vérifiez et corrigez vos données en cliquant sur le bouton ci-dessous";
                    }
                   
                } else {
                    echo "Vérifiez et corrigez vos données en cliquant sur le bouton ci-dessous";
                }
                ?>

                
            </h4>

        </div>
        <form class='pspPaymentForm' id="datos">
            <div class="form--control-holder">


                <div class="form--control-wrapper">
                    <a class="btn" href="<?php echo $BASE_URL; ?>/index.php?currency=<?php echo strtolower($_GET['currency']); ?>&affiliate_id=<?php echo strtolower($_GET['affiliate_id']); ?>&lp=<?php echo strtolower($_GET['lp']); ?>"  id="reintentar"> Réessayer </a>


                </div>



            </div>
        </form>
    </main>
    <!-- //   Header Ends -->


    <!-- Container -->
    <div class="container">
        <section class="row breath">
            <div class="col-md-12 footerlinks">
                <p>&copy; 2024 Tous les droits réservés</p>
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