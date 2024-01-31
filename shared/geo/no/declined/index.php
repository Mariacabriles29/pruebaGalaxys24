<!DOCTYPE html>
<html lang="no">

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow, noarchive">
    <title>Declined Transaction</title>
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
            <h5 class="main-title" style="font-weight:bolder;">Avvist transaksjon</h5>
            <!-- Hero Title -->
            <h1 class="main-title">
                <?php 
                if (@$_GET['message']) {

                    if(@$_GET['message'] == 'Insufficient funds'){
                        echo 'Ikke dekning';
                    }else if(@$_GET['message'] == 'Card 3D secure is not enabled.'){
                        echo 'Kortets 3D-sikkerhet er ikke aktivert.';
                    }else if(@$_GET['message'] == '3D secure failed'){
                        echo 'Mislykket 3D-sikkerhet';
                    }else if(@$_GET['message'] == 'Transaction is expired'){
                        echo 'Transaksjonen har utløpt';
                    }else if(@$_GET['message'] == 'Declined by anti-fraud system.'){
                        echo 'Avvist av anti-svindelsystemet.';
                    }else if(@$_GET['message'] == 'Invalid card number'){
                        echo 'Ugyldig kortnummer';
                    }else if(@$_GET['message'] == 'Referal or restricted card'){
                        echo 'Henvisning eller begrenset kort';
                    }else if(@$_GET['message'] == 'Communication error with bank'){
                        echo 'Kommunikasjonsfeil med banken';
                    }else if(@$_GET['message'] == 'Proxy frontend error occured'){
                        echo 'Avvist transaksjon';
                    }else if(@$_GET['message'] == 'Authorization declined'){
                        echo 'Autorisasjonen er avvist';
                    }else if(@$_GET['message'] == 'General bank decline'){
                        echo 'Generell melding om at banken har avvist betalingen';
                    }else if(@$_GET['message'] == 'Volume limit exceeded'){
                        echo 'Avvist transaksjon';
                    }else if(@$_GET['message'] == 'Incorrect field'){
                        echo 'Avvist transaksjon';
                    }else if(@$_GET['message'] == 'Invalid CVV'){
                        echo 'Ugyldig CVV';
                    }else if(@$_GET['message'] == 'Lost or stolen card'){
                        echo 'Mistet eller stjålet kort';
                    }else if(@$_GET['message'] == 'Card expired or expiration date invalid'){
                        echo 'Kortet er utløpt, eller utløpsdatoen er ugyldig';
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
                        echo 'Det er ikke dekning på kortet til å betale for denne transaksjonen. Du må derfor bruke et kort med dekning for å betale.';
                    }else if(@$_GET['message'] == 'Card 3D secure is not enabled.'){
                        echo 'Det brukte kortet har ikke 3D-bekreftelse aktivert i banken det er tilknyttet. Aktiver kortets 3D-bekreftelse, eller bruk et annet kort fra en annen bank til å betale for transaksjonen.';
                    }else if(@$_GET['message'] == '3D secure failed'){
                        echo '3D-kodebekreftelsen mislyktes. Prøv på nytt og se til at du angir koden riktig, eller bruk et annet kort fra en annen bank til å betale for transaksjonen.';
                    }else if(@$_GET['message'] == 'Transaction is expired'){
                        echo 'Det brukte kortet har ikke 3D-bekreftelse aktivert i banken det er tilknyttet, eller 3D-kodebekreftelsen mislyktes. Du må derfor aktivere kortets 3D-bekreftelse i banken din. Du kan også prøve på nytt og se til at du angir koden riktig, eller bruke et annet kort fra en annen bank til å betale for transaksjonen.';
                    }else if(@$_GET['message'] == 'Declined by anti-fraud system.'){
                        echo 'Transaksjonen er avvist av sikkerhetssystemet vårt. Vi anbefaler at du betaler med et annet kort og/eller angir alle opplysningene riktig.';
                    }else if(@$_GET['message'] == 'Invalid card number'){
                        echo 'Transaksjonen er avvist, siden du anga et ugyldig kortnummer. Se til at du angir det riktige kortnummeret, eller betal transaksjonen med et annet kort.';
                    }else if(@$_GET['message'] == 'Referal or restricted card'){
                        echo 'Transaksjonen er avvist. Bruk et annet kort til å betale for transaksjonen.';
                    }else if(@$_GET['message'] == 'Communication error with bank'){
                        echo 'Transaksjonen er avvist grunnet en kommunikasjonsfeil med banken. Vent et par minutter før du prøver å betale transaksjonen på nytt, eller bruk et annet kort til å betale den med.';
                    }else if(@$_GET['message'] == 'Proxy frontend error occured'){
                        echo 'Transaksjonen er avvist grunnet en kommunikasjonsfeil med banken. Vent et par minutter før du prøver å betale transaksjonen på nytt, eller bruk et annet kort til å betale den med.';
                    }else if(@$_GET['message'] == 'Authorization declined'){
                        echo 'Transaksjonen er avvist. Bruk et annet kort til å betale for transaksjonen.';
                    }else if(@$_GET['message'] == 'General bank decline'){
                        echo 'Transaksjonen er avvist. Bruk et annet kort til å betale for transaksjonen.';
                    }else if(@$_GET['message'] == 'Volume limit exceeded'){
                        echo 'Transaksjonen er avvist. Bruk et annet kort til å betale for transaksjonen.';
                    }else if(@$_GET['message'] == 'Incorrect field'){
                        echo 'Transaksjonen er avvist. Bruk et annet kort til å betale for transaksjonen og se til at du angir alle opplysningene korrekt.';
                    }else if(@$_GET['message'] == 'Invalid CVV'){
                        echo 'Transaksjonen er avvist fordi det ble angitt et ugyldig CVV-nummer. Se til at du angir det riktige CVV-nummeret, eller betal transaksjonen med et annet kort.';
                    }else if(@$_GET['message'] == 'Lost or stolen card'){
                        echo 'Transaksjonen ble avvist fordi et blokkert kortnummer ble angitt. Bruk et annet kort til å betale for transaksjonen.';
                    }else if(@$_GET['message'] == 'Card expired or expiration date invalid'){
                        echo 'Transaksjonen er avvist fordi det ble angitt et ugyldig utløpsnummer. Se til at du angir det riktige utløpsnummeret, eller betal transaksjonen med et annet kort.';
                    }else{

                        echo "Kontroller og korriger opplysningene dine ved å klikke på knappen nedenfor";
                    }
                   
                } else {
                    echo "Kontroller og korriger opplysningene dine ved å klikke på knappen nedenfor";
                }
                ?>

                
            </h4>
        </div>
        <form class='pspPaymentForm' id="datos">
            <div class="form--control-holder">


                <div class="form--control-wrapper">
                    <a class="btn" href="<?php echo $BASE_URL; ?>/index.php?currency=<?php echo strtolower($_GET['currency']); ?>&affiliate_id=<?php echo strtolower($_GET['affiliate_id']); ?>&lp=<?php echo strtolower($_GET['lp']); ?>"  id="reintentar"> Prøv på nytt </a>



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