<!DOCTYPE html>
<html lang="se">

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
            <h5 class="main-title" style="font-weight:bolder;">Avböjd transaktion</h5>
            <!-- Hero Title -->
            <h1 class="main-title">
                <?php 
                if (@$_GET['message']) {

                    if(@$_GET['message'] == 'Insufficient funds'){
                        echo 'Otillräckliga medel';
                    }else if(@$_GET['message'] == 'Card 3D secure is not enabled.'){
                        echo 'Kortets 3D-secure är inte aktiverat.';
                    }else if(@$_GET['message'] == '3D secure failed'){
                        echo '3D-secure misslyckades';
                    }else if(@$_GET['message'] == 'Transaction is expired'){
                        echo 'Transaktionen har löpt ut';
                    }else if(@$_GET['message'] == 'Declined by anti-fraud system.'){
                        echo 'Avböjt av bedrägeribekämpningssystemet.';
                    }else if(@$_GET['message'] == 'Invalid card number'){
                        echo 'Ogiltigt kortnummer';
                    }else if(@$_GET['message'] == 'Referal or restricted card'){
                        echo 'Hänvisning eller begränsat kort';
                    }else if(@$_GET['message'] == 'Communication error with bank'){
                        echo 'Kommunikationsfel till bank';
                    }else if(@$_GET['message'] == 'Proxy frontend error occured'){
                        echo 'Avböjd transaktion';
                    }else if(@$_GET['message'] == 'Authorization declined'){
                        echo 'Nekad auktorisering';
                    }else if(@$_GET['message'] == 'General bank decline'){
                        echo 'Allmän vägran från bank';
                    }else if(@$_GET['message'] == 'Volume limit exceeded'){
                        echo 'Avböjd transaktion';
                    }else if(@$_GET['message'] == 'Incorrect field'){
                        echo 'Avböjd transaktion';
                    }else if(@$_GET['message'] == 'Invalid CVV'){
                        echo 'Ogiltigt CVV';
                    }else if(@$_GET['message'] == 'Lost or stolen card'){
                        echo 'Förlorat eller stulet kort';
                    }else if(@$_GET['message'] == 'Card expired or expiration date invalid'){
                        echo 'Kortet har löpt ut eller förfallodatum är ogiltigt';
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
                        echo 'Kortet utan tillräckligt med medel för att utföra transaktionen. Vänligen använd ett kort som har tillräckligt med pengar för att utföra betalningen.';
                    }else if(@$_GET['message'] == 'Card 3D secure is not enabled.'){
                        echo 'Kortet som används har inte 3D-verifiering aktiverad i sin egen bank. Vänligen aktivera kortets 3D-verifiering eller använd ett annat kort från en annan bank för att betala för transaktionen.';
                    }else if(@$_GET['message'] == '3D secure failed'){
                        echo '3D-kodverifieringen misslyckades. Försök igen och se till att du anger koden korrekt eller använd ett annat kort från en annan bank för att betala för transaktionen.';
                    }else if(@$_GET['message'] == 'Transaction is expired'){
                        echo 'Kortet som används har inte 3D-verifiering aktiverad i sin egen bank eller 3D-kodverifieringen misslyckades. Vänligen aktivera kortets 3D-verifiering hos din bank eller försök igen och se till att du anger koden korrekt eller använd ett annat kort från en annan bank för att betala för transaktionen.';
                    }else if(@$_GET['message'] == 'Declined by anti-fraud system.'){
                        echo 'Transaktionen har avvisats av vårt säkerhetssystem. Vi rekommenderar att du använder ett annat kort för att utföra betalningen och/eller anger all data korrekt.';
                    }else if(@$_GET['message'] == 'Invalid card number'){
                        echo 'Transaktionen har avvisats då ett ogiltigt kortnummer angivits. Säkerställ att du anger kortnumret korrekt eller använd ett annat kort för att betala för transaktionen.';
                    }else if(@$_GET['message'] == 'Referal or restricted card'){
                        echo 'Transaktionen har avvisats. Vänligen använd ett annat kort för att betala för transaktionen.';
                    }else if(@$_GET['message'] == 'Communication error with bank'){
                        echo 'Transaktionen har avvisats på grund av ett kommunikationsfel till banken. Vänligen vänta några minuter för att utföra transaktionen igen eller använd ett annat kort för att betala för transaktionen.';
                    }else if(@$_GET['message'] == 'Proxy frontend error occured'){
                        echo 'Transaktionen har avvisats på grund av ett kommunikationsfel till banken. Vänligen vänta några minuter för att utföra transaktionen igen eller använd ett annat kort för att betala för transaktionen.';
                    }else if(@$_GET['message'] == 'Authorization declined'){
                        echo 'Transaktionen har avvisats. Vänligen använd ett annat kort för att betala för transaktionen.';
                    }else if(@$_GET['message'] == 'General bank decline'){
                        echo 'Transaktionen har avvisats. Vänligen använd ett annat kort för att betala för transaktionen.';
                    }else if(@$_GET['message'] == 'Volume limit exceeded'){
                        echo 'Transaktionen har avvisats. Vänligen använd ett annat kort för att betala för transaktionen.';
                    }else if(@$_GET['message'] == 'Incorrect field'){
                        echo 'Transaktionen har avvisats. Vänligen använd ett annat kort för att betala för transaktionen och säkerställ att du anger all data korrekt.';
                    }else if(@$_GET['message'] == 'Invalid CVV'){
                        echo 'Transaktionen har avvisats då ett ogiltigt CVV-nummer angavs. Vänligen säkerställ att du anger CVV-numret korrekt eller använd ett annat kort för att betala för transaktionen.';
                    }else if(@$_GET['message'] == 'Lost or stolen card'){
                        echo 'Transaktionen avvisades då ett blockerat kortnummer angavs. Vänligen använd ett annat kort för att betala för transaktionen.';
                    }else if(@$_GET['message'] == 'Card expired or expiration date invalid'){
                        echo 'Transaktionen har avvisats då ett ogiltigt utgångsnummer angavs. Vänligen säkerställ att du anger utgångsnumret korrekt eller använd ett annat kort för att betala för transaktionen.';
                    }else{

                        echo "Kontrollera och korrigera din data genom att klicka på knappen nedan";
                    }
                   
                } else {
                    echo "Kontrollera och korrigera din data genom att klicka på knappen nedan";
                }
                ?>

                
            </h4>
        </div>
        <form class='pspPaymentForm' id="datos">
            <div class="form--control-holder">


                <div class="form--control-wrapper">
                    <a class="btn" href="<?php echo $BASE_URL; ?>/index.php?currency=<?php echo strtolower($_GET['currency']); ?>&affiliate_id=<?php echo strtolower($_GET['affiliate_id']); ?>&lp=<?php echo strtolower($_GET['lp']); ?>"  id="reintentar"> Försök igen </a>



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