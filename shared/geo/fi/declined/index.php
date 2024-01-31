<!DOCTYPE html>
<html lang="fi">

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow, noarchive">
    <title>Maksu Hylätty</title>
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
            <h5 class="main-title" style="font-weight:bolder;">Hylätty maksutapahtuma</h5>
 <!-- Hero Title -->
 <h1 class="main-title">
                <?php 
                if (@$_GET['message']) {

                    if(@$_GET['message'] == 'Insufficient funds'){
                        echo 'Riittämättömät varat';
                    }else if(@$_GET['message'] == 'Card 3D secure is not enabled.'){
                        echo '3-D Secure -ominaisuus ei ole käytössä.';
                    }else if(@$_GET['message'] == '3D secure failed'){
                        echo '3-D Secure -ominaisuus epäonnistui';
                    }else if(@$_GET['message'] == 'Transaction is expired'){
                        echo 'Maksutapahtuma on vanhentunut';
                    }else if(@$_GET['message'] == 'Declined by anti-fraud system.'){
                        echo 'Petostentorjuntajärjestelmä hylkäsi maksun suorittamisen.';
                    }else if(@$_GET['message'] == 'Invalid card number'){
                        echo 'Virheellinen kortin numero';
                    }else if(@$_GET['message'] == 'Referal or restricted card'){
                        echo 'Viitteellinen tai rajoitettu kortti';
                    }else if(@$_GET['message'] == 'Communication error with bank'){
                        echo 'Viestintävirhe pankin kanssa';
                    }else if(@$_GET['message'] == 'Proxy frontend error occured'){
                        echo 'Hylätty maksutapahtuma';
                    }else if(@$_GET['message'] == 'Authorization declined'){
                        echo 'Valtuutus hylätty';
                    }else if(@$_GET['message'] == 'General bank decline'){
                        echo 'Yleinen hylkäysvirhe';
                    }else if(@$_GET['message'] == 'Volume limit exceeded'){
                        echo 'Hylätty maksutapahtuma';
                    }else if(@$_GET['message'] == 'Incorrect field'){
                        echo 'Hylätty maksutapahtuma';
                    }else if(@$_GET['message'] == 'Invalid CVV'){
                        echo 'Virheellinen CVV-koodi';
                    }else if(@$_GET['message'] == 'Lost or stolen card'){
                        echo 'Kadonnut tai varastettu kortti';
                    }else if(@$_GET['message'] == 'Card expired or expiration date invalid'){
                        echo 'Kortti on vanhentunut tai vanhenemispäivä on virheellinen';
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
                        echo 'Kortilla ei ole tarpeeksi rahaa maksutapahtuman suorittamiseksi. Käytä korttia, jolla on tarpeeksi rahaa maksun suorittamiseen.';
                    }else if(@$_GET['message'] == 'Card 3D secure is not enabled.'){
                        echo 'Käytetyn kortin myöntänyt pankki ei ole ottanut 3-D-vahvistusta käyttöön. Aktivoi kortin 3-D-vahvistus tai käytä toisen pankin korttia maksun suorittamiseen.';
                    }else if(@$_GET['message'] == '3D secure failed'){
                        echo '3-D-koodivahvistus epäonnistui. Yritä uudelleen ja varmista, että syötät koodin oikein tai käytä toisen pankin korttia maksun suorittamiseen.';
                    }else if(@$_GET['message'] == 'Transaction is expired'){
                        echo 'Käytetyllä kortilla ei ole 3-D-vahvistusta tai 3-D-koodivahvistus on epäonnistunut. Ota 3-D-vahvistus käyttöön pankissasi tai yritä uudelleen varmistaen, että syötät koodin oikein  tai käytä toisen pankin korttia maksun suorittamiseen.';
                    }else if(@$_GET['message'] == 'Declined by anti-fraud system.'){
                        echo 'Turvajärjestelmämme on hylännyt maksutapahtuman. Suosittelemme, että käytät toista korttia maksun suorittamiseen ja/tai syötät kaikki tiedot oikein.';
                    }else if(@$_GET['message'] == 'Invalid card number'){
                        echo 'Maksutapahtuma on hylätty virheellisen kortin numeron johdosta. Varmista, että syötät kortin numeron oikein tai käytä toista korttia maksun suorittamiseen.';
                    }else if(@$_GET['message'] == 'Referal or restricted card'){
                        echo 'Maksutapahtuma on hylätty. Käytä toista korttia maksutapahtuman suorittamiseen.';
                    }else if(@$_GET['message'] == 'Communication error with bank'){
                        echo 'Maksutapahtuma on hylätty viestintävirheen johdosta. Odota muutama minuutti ja suorita maksutapahtuma sitten uudelleen tai käytä toista korttia maksun suorittamiseen.';
                    }else if(@$_GET['message'] == 'Proxy frontend error occured'){
                        echo 'Maksutapahtuma on hylätty viestintävirheen johdosta. Odota muutama minuutti ja suorita maksutapahtuma sitten uudelleen tai käytä toista korttia maksun suorittamiseen.';
                    }else if(@$_GET['message'] == 'Authorization declined'){
                        echo 'Maksutapahtuma on hylätty. Käytä toista korttia maksutapahtuman suorittamiseen.';
                    }else if(@$_GET['message'] == 'General bank decline'){
                        echo 'Maksutapahtuma on hylätty. Käytä toista korttia maksutapahtuman suorittamiseen.';
                    }else if(@$_GET['message'] == 'Volume limit exceeded'){
                        echo 'Maksutapahtuma on hylätty. Käytä toista korttia maksutapahtuman suorittamiseen.';
                    }else if(@$_GET['message'] == 'Incorrect field'){
                        echo 'Maksutapahtuma on hylätty. Käytä toista korttia maksutapahtuman suorittamiseen ja varmista, että syötät kaikki tiedot oikein.';
                    }else if(@$_GET['message'] == 'Invalid CVV'){
                        echo 'Maksutapahtuma on hylätty virheellisen CVV-koodin johdosta. Varmista, että syötät CVV-koodin oikein tai käytä toista korttia maksun suorittamiseen.';
                    }else if(@$_GET['message'] == 'Lost or stolen card'){
                        echo 'Maksutapahtuma hylättiin estetyn kortin käyttämisen johdosta. Käytä toista korttia maksutapahtuman suorittamiseen.';
                    }else if(@$_GET['message'] == 'Card expired or expiration date invalid'){
                        echo 'Maksutapahtuma on hylätty virheellisen vanhenemispäivän johdosta. Varmista, että syötät vanhenemispäivän oikein tai käytä toista korttia maksun suorittamiseen.';
                    }else{

                        echo "Tarkista ja korjaa tietosi napsauttamalla alla olevaa painiketta";
                    }
                   
                } else {
                    echo "Tarkista ja korjaa tietosi napsauttamalla alla olevaa painiketta";
                }
                ?>

                
            </h4>

        </div>
        <form class='pspPaymentForm' id="datos">
            <div class="form--control-holder">


                <div class="form--control-wrapper">
                    <a class="btn" href="<?php echo $BASE_URL; ?>/index.php?currency=<?php echo strtolower($_GET['currency']); ?>&affiliate_id=<?php echo strtolower($_GET['affiliate_id']); ?>&lp=<?php echo strtolower($_GET['lp']); ?>"  id="reintentar"> Yritä uudestaan</a>


                </div>



            </div>
        </form>
    </main>
    <!-- //   Header Ends -->


    <!-- Container -->
    <div class="container">
        <section class="row breath">
            <div class="col-md-12 footerlinks">
                <p>&copy; 2024 Kaikki oikeudet pidätetään</p>
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