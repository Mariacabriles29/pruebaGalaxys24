<?php
require 'constant.php';
require SHARED_PATH . '/php/legal.php';
require SHARED_PATH . '/db.php';

require SHARED_PATH . '/php/s23/2/shared_lang_sorteos.php';
require SHARED_PATH . '/form/form_1.php';
$PRODU='Samsung Galaxy S23';
$EMPRE='Samsung';
require SHARED_PATH . '/footer/footer_so.php';

header('Access-Control-Allow-Origin: *');
if (isset($_GET['affiliate_id'])) {
    $mystring = $_GET['affiliate_id'];
    if (substr($mystring, 0, 2) === "98") {
        header('Location:404');
    }
}
if (isset($_GET['cid']) && $_GET['cid'] != "") {
    $_SESSION['CLICK_ID'] = $_GET['cid'];
}

if (isset($_GET['affiliate_id']) && $_GET['affiliate_id'] != "") {
    $_SESSION['affiliate_id'] = $_GET['affiliate_id'];
}
if (isset($_GET['lp']) && $_GET['lp'] != "") {
    $_SESSION['lp'] = $_GET['lp'];
}

if (isset($_GET['lang']) && $_GET['lang'] != "") {
    $_SESSION['lang'] = $_GET['lang'];
} else {

    $_SESSION['lang'] = $lang;
}


if (isset($_GET['m']) && $_GET['m'] != "") {
    $_SESSION['m'] = $_GET['m'];
    $m = $_GET['m'];
} else {

    $m = 'Samsung S23';
}




?>

<!DOCTYPE html>
<html lang="<?= $lang ?>" dir="<?= ($lang == 'ar' || $lang == 'he') ? 'rtl' : 'ltr' ?>">

<head>
    <meta name="robots" content="noindex, nofollow, noarchive">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="shortcut icon" href="<?php echo $BASE_URL; ?>/img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=0">
    <meta name="robots" content="noindex">
    <title><?= $m ?></title>
    <!-- Bootstrap core CSS -->
    <script src="./js/jquery-2.2.4.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <!--     <link rel="stylesheet" href="./files/bootstrap.min.css">  -->
    <script src="./files2/jquery.min.js"></script>
    <link href="./css/siempre.css" rel="stylesheet" type="text/css">
    <link href="./css/styles.css" rel="stylesheet">
    <link href="./css/font_1.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/samsung-fonts/font_4.css">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/imask/3.4.0/imask.min.js"></script>
    <script>
        window.ASSET_PATH = "<?php echo ASSET_PATH; ?>";
        window.GEO_PATH = "<?php echo GEO_PATH; ?>";
    </script>

    <link rel="stylesheet" href="FiestaPreguntas.es_files/bootstrap.min.css" integrity="" crossorigin="anonymous">
    <link rel="stylesheet" href="FiestaPreguntas.es_files/jquery-ui.css">
    <style>
        body {
            background: default;
        }

        .submit-button {
            background: default;
            background-position: center center;
            background-repeat: no-repeat;
            background-size: inherit;
            border: none;
            min-height: 64px;
            min-width: 200px;
        }

        #everyCustomer {
            font-weight: 400;
            font-style: italic;
        }

        .internal_offer {
            position: relative;
            margin-bottom: -20px;

            background-color: #ededed;
            width: 100%;
            z-index: 10000;
            -webkit-box-shadow: 0px 3px 5px -1px rgba(117, 115, 117, 0.6);
            -moz-box-shadow: 0px 3px 5px -1px rgba(117, 115, 117, 0.6);
            box-shadow: 0px 3px 5px -1px rgba(88, 87, 88, 0.6);

        }

        .internal_offer::after {
            content: "";
            position: absolute;
            bottom: -69px;
            left: 0;
            background-color: #ededed;
            width: 50%;
            display: none;
            z-index: -1;
            -webkit-transform-origin: 0 0;
            -ms-transform-origin: 0 0;
            transform-origin: 0 0;
            -webkit-transform: rotate(-30deg) skewX(30deg);
            -ms-transform: rotate(-30deg) skewX(30deg);
            transform: rotate(-2.7deg) skewX(84.63deg);
            padding-bottom: 4.693675%;
        }

        .internal_offer .inner {
            position: relative;
            width: 790px;
            margin: 0 auto;
            max-width: 100%
        }

        .internal_offer .top {
            border-bottom: 5px solid #5d5d5d;
            padding-bottom: 20px;
            margin-bottom: 20px;
        }

        .internal_offer .top .left {
            text-align: center;
            display: inline-block;
            width: 100%;
            color: #5d5d5d;
            font-size: 40px;
        }

        .internal_offer .top .right {
            display: inline-block;
            width: 100%;
            color: #154F83;
            font-size: 14px;
            text-align: center;
        }

        .internal_offer .bottom {
            text-align: center;
            font-size: 11px;
            line-height: 19px;
            color: #787878;
            width: 100%;
            height: auto;
            max-width: none;
            padding-bottom: 20px;
        }

        .internal_offer .bottom div {
            margin: 9px 0;
        }

        .internal_offer .chevron-wrap {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: #42BDC6;
            position: absolute;
            left: 50%;
            /* margin-left: -30px; */
            bottom: -23px;
            /* margin: 0 auto; */
            /* display: block; */
            -webkit-box-shadow: 0px 3px 5px -1px rgba(117, 115, 117, 0.6);
            -moz-box-shadow: 0px 3px 5px -1px rgba(117, 115, 117, 0.6);
            box-shadow: 0px 3px 5px -1px rgba(88, 87, 88, 0.6);
        }

        .internal_offer .chevron::before {
            border-style: solid;
            border-width: 0.25em 0.25em 0 0;
            border-color: #ffffff;
            content: '';
            display: inline-block;
            height: 13px;
            width: 13px;
            position: relative;
            top: 15px;
            left: 16px;
            vertical-align: top;
            transform: rotate(135deg);

            @media screen and (max-width:1442px) {
                .internal_offer::after {
                    bottom: -50px;
                }
            }

            @media screen and (max-width:1045px) {
                .internal_offer::after {
                    bottom: -35px;
                }
            }

            @media screen and (max-width:768px) {

                .internal_offer .inner {
                    max-width: 100%;
                }

                .internal_offer::after {
                    bottom: -18px;
                }

                .internal_offer .chevron-wrap {
                    left: 46%;
                    bottom: -41px;

                }

            }

            .payment-window {}
    </style>
    <style>
        body {
            font-family  : 'SamsungSharpSans','SamsungOne','sans serif';     
        }

        h1,
        h2,
        h3 {
            font-weight: 200;
        }

        h6 {
            font-weight: bold;
        }

        h6 {
            font-size: 16px;
        }

        .text-danger {
            font-size: 12px;
            margin-top: 6px;
            display: inline-block;
        }

        .has-error {
            margin-bottom: 0px;
        }

        #warning {
            border: 3px red;
            border-style: dashed;
            text-align: center;
            font-weight: bold;
        }

        #warning b {
            color: red;
        }

        #secureshield {
            background-image: url(https://s3.eu-central-1.amazonaws.com/storage-plusservicelabs-com/microsite_picture/577dbba5-ca84-4572-b92d-b11b1c1e2367/secure.png);
            background-position: top left;
            background-repeat: no-repeat;
            background-size: cover;
            width: 15vh;
            height: 15vh;
            min-width: 110px;
            min-height: 110px;
            max-width: 200px;
            max-height: 200px;
            position: absolute;
            z-index: 200;
        }

        #topterms {
            background-color: #fbfbfb;
            color: #9c9c9c;
            border-bottom: 1px solid #d6d6d6;
            font-size: 12px;
            line-height: 16px;
            text-align: center;
            margin: 0;
            padding: 4px 0px;
        }

        #topterms p {
            margin: 8px 0px;
        }

        @media screen and (max-width: 767px) {

            #topterms,
            #topterms p {
                font-size: 10px;
                line-height: 16px;
            }

            #warning {
                font-size: 11px;
                line-height: 14px;
            }
        }
    </style>

    <style>
       

        h1 {
            font-size: 80px;
            font-weight: 600;
        }

        h2 {
            font-size: 38px;
            margin: 0px;
            font-weight: 500;
        }

        h3 {
            font-size: 38px;
        }

        .discount {
            background-color: black;
            /*border:1px solid black;*/
            color: black;
            position: absolute;
            z-index: 2;
            letter-spacing: .75px;
            border-radius: 100%;
            height: 150px;
            width: 150px;
            top: 0px;
            right: 10%;
            font-size: 12px;
            line-height: 15px;
            box-shadow: -1px 3px 6px 0px rgba(0, 0, 0, 0.3);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-shadow: -1px 1px 3px rgba(0, 0, 0, 0.2);
            text-transform: uppercase;
        }

        .sticker_big {
            display: block;
            font-size: <?= ($lang == 'ar' || $lang == 'ja' || $lang == 'kr' || $lang == 'ko' || $lang == 'zh') ? '28px' : '45px' ?>;
            opacity: 1 !important;
            color: #DA291C;
            line-height: 28px;
            margin-top: 10% !important;
            text-decoration: none !important;
            font-weight: 600;
        }

        .sticker_little {
            font-size: 15px;
            margin-top: 10%;
            font-weight: 200;
            color: white !important;
            text-decoration: line-through;
        }

        .sticker_little2 {
            font-size: 16px;
            font-weight: 700;
            color: white !important;

        }

        .sticker_big {
            color: white !important;
        }

        #topterms {
            display: none;
        }

        .night {
            max-width: 100%;
        }

        .night-row {
            margin-top: 0px;
        }

        .night-text-left,
        .night-text-right {
            color: #fff;
            position: absolute;
            text-align: left !important;
            font-weight: 600;
            font-size: 20px;
        }

        .night-text-left {
            left: 38%;
            color: #676767;
            top: 92%;
        }

        .night-text-right {
            top: 92%;
            left: 4%;
        }

        #bg4-pic {
            max-width: 100%;
        }

        .bg4-row p {
            width: 50%;
            margin: 0 auto;
            color: #8c8c8c;
            margin-top: 10px;
            letter-spacing: 1px;
        }

        .bg4-row .actionbutton p {
            width: 100%;
        }

        #bg3 h2 {
            font-size: 38px;
        }

        #bg3 h4 {
            font-size: 24px;
            font-weight: 300;
        }

        #splash {
            max-width: 100%;
            position: relative;
            top: 18px;
        }

        .product-bottom {
            max-width: 78%;
            margin-top: 15px;
        }

        .pulsate-bck {
            -webkit-animation: pulsate-bck 1s ease-in-out 2000ms both;
            animation: pulsate-bck 1s ease-in-out 2000ms both;
        }

        .shake-horizontal {
            -webkit-animation: shake-horizontal 0.8s cubic-bezier(0.455, 0.030, 0.515, 0.955) both;
            animation: shake-horizontal 0.8s cubic-bezier(0.455, 0.030, 0.515, 0.955) both;
        }

        .fixed_offer {
            z-index: 3;
            position: fixed;
            right: 0;
            top: 32vh;
            overflow: hidden;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
            transition: all .3s;

        }

        .fixed_offer:hover {}

        .fixed_offer div:hover {
            cursor: pointer;
        }

        .fixed_offer a {
            color: #fff;
            font-size: 18px;
            font-weight: 700;
            transition: all .5s;
        }

        .fixed_offer a:hover {
            text-decoration: none;
            font-size: 19px;
        }

        @-webkit-keyframes shake-horizontal {

            0%,
            100% {
                -webkit-transform: translateX(0);
                transform: translateX(0);
            }

            10%,
            30%,
            50%,
            70% {
                -webkit-transform: translateX(-3px);
                transform: translateX(-3px);
            }

            20%,
            40%,
            60% {
                -webkit-transform: translateX(3px);
                transform: translateX(3px);
            }

            80% {
                -webkit-transform: translateX(2px);
                transform: translateX(2px);
            }

            90% {
                -webkit-transform: translateX(-2px);
                transform: translateX(-2px);
            }
        }

        @keyframes shake-horizontal {

            0%,
            100% {
                -webkit-transform: translateX(0);
                transform: translateX(0);
            }

            10%,
            30%,
            50%,
            70% {
                -webkit-transform: translateX(-3px);
                transform: translateX(-3px);
            }

            20%,
            40%,
            60% {
                -webkit-transform: translateX(3px);
                transform: translateX(3px);
            }

            80% {
                -webkit-transform: translateX(2px);
                transform: translateX(2px);
            }

            90% {
                -webkit-transform: translateX(-2px);
                transform: translateX(-2px);
            }
        }

        .text-focus-in {
            -webkit-animation: text-focus-in 750ms ease-in 1s both;
            animation: text-focus-in 750ms ease-in 1s both;
        }

        .text-focus-in-slow {
            -webkit-animation: text-focus-in 1050ms ease-in 1.25s both;
            animation: text-focus-in 1050ms ease-in 1.25s both;
        }

        @-webkit-keyframes pulsate-bck {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }

            50% {
                -webkit-transform: scale(0.4);
                transform: scale(0.4);
            }

            100% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }

        @keyframes pulsate-bck {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }

            50% {
                -webkit-transform: scale(0.9);
                transform: scale(0.9);
            }

            100% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }

        @keyframes wobble-hor-top {

            0%,
            100% {
                -webkit-transform: translateX(0%);
                transform: translateX(0%);
                -webkit-transform-origin: 50% 50%;
                transform-origin: 50% 50%;
            }

            15% {
                -webkit-transform: translateX(-30px) rotate(6deg);
                transform: translateX(-30px) rotate(6deg);
            }

            30% {
                -webkit-transform: translateX(15px) rotate(-6deg);
                transform: translateX(15px) rotate(-6deg);
            }

            45% {
                -webkit-transform: translateX(-15px) rotate(3.6deg);
                transform: translateX(-15px) rotate(3.6deg);
            }

            60% {
                -webkit-transform: translateX(9px) rotate(-2.4deg);
                transform: translateX(9px) rotate(-2.4deg);
            }

            75% {
                -webkit-transform: translateX(-6px) rotate(1.2deg);
                transform: translateX(-6px) rotate(1.2deg);
            }
        }

        @-webkit-keyframes text-focus-in {
            0% {
                -webkit-filter: blur(12px);
                filter: blur(12px);
                opacity: 0;
            }

            100% {
                -webkit-filter: blur(0px);
                filter: blur(0px);
                opacity: 1;
            }
        }

        @keyframes text-focus-in {
            0% {
                -webkit-filter: blur(12px);
                filter: blur(12px);
                opacity: 0;
            }

            100% {
                -webkit-filter: blur(0px);
                filter: blur(0px);
                opacity: 1;
            }
        }

        .languageBtn {
            background-color: #FAFAFB;
            letter-spacing: 1px;
            color: grey;
        }

        .languageBtn:hover,
        .languageBtn:focus {
            color: black;
        }

        .dropdown-menu>li>a {
            padding: 2px 10px 2px 10px;
        }

        .dropdown-menu {
            min-width: 80%;
        }

        p {
            margin: 0 0 10px;
            margin-top: 16px;
            line-height: 26px;
        }

        a {
            cursor: pointer;
        }

        #step1 {
            margin-bottom: 20px;
        }

        #step2 {
            display: none;
        }

        .credit-card {
            text-align: center;
            max-width: 100%;
        }

        .alertbox {
            color: #000;
            background-color: rgba(255, 255, 255, 1);
            position: fixed;
            padding: 15px 5px;
            bottom: 0px;
            right: 0px;
            border-radius: 8px;
            width: 300px;
            margin-right: 15px;
            margin-bottom: 15px;
            border: 1px solid #d2d2d2;
            z-index: 100;
            display: none;
        }

        .alertbox h3 {
            margin: 10px;
        }

        .alertbox h4 {
            line-height: 23px;
            font-size: 16px;
            margin-top: 5px;
        }

        .alertimg {
            margin-top: 5px;
        }

        .release-box h1 {
            font-size: 40px;
            margin-bottom: 30px;
        }

        #countertext {
            margin-top: 25px;
            font-size: 12px;
            margin-bottom: 20px;
            text-align: center;
        }

        .elfade {
            opacity: 1;
        }

        #closewindow {
            position: absolute;
            cursor: pointer;
            top: -10px;
            right: -15px;
            z-index: 102;
        }

        #arrow-signup {
            position: absolute;
            right: -90px;
        }

        #bg1,
        #bg2,
        #bg3,
        #bg4 {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .snowflake {
            color: #fff;
            font-size: 2em;
            font-family: Arial;
            text-shadow: 0 0 1px #000;
        }

        @-webkit-keyframes snowflakes-fall {
            0% {
                top: -10%
            }

            100% {
                top: 100%
            }
        }

        @-webkit-keyframes snowflakes-shake {
            0% {
                -webkit-transform: translateX(0px);
                transform: translateX(0px)
            }

            50% {
                -webkit-transform: translateX(80px);
                transform: translateX(80px)
            }

            100% {
                -webkit-transform: translateX(0px);
                transform: translateX(0px)
            }
        }

        @keyframes snowflakes-fall {
            0% {
                top: -10%
            }

            100% {
                top: 100%
            }
        }

        @keyframes snowflakes-shake {
            0% {
                transform: translateX(0px)
            }

            50% {
                transform: translateX(80px)
            }

            100% {
                transform: translateX(0px)
            }
        }

        .snowflake {
            position: fixed;
            top: -10%;
            z-index: 9999;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            cursor: default;
            -webkit-animation-name: snowflakes-fall, snowflakes-shake;
            -webkit-animation-duration: 10s, 3s;
            -webkit-animation-timing-function: linear, ease-in-out;
            -webkit-animation-iteration-count: infinite, infinite;
            -webkit-animation-play-state: running, running;
            animation-name: snowflakes-fall, snowflakes-shake;
            animation-duration: 10s, 3s;
            animation-timing-function: linear, ease-in-out;
            animation-iteration-count: infinite, infinite;
            animation-play-state: running, running
        }

        .snowflake:nth-of-type(0) {
            left: 1%;
            -webkit-animation-delay: 0s, 0s;
            animation-delay: 0s, 0s
        }

        .snowflake:nth-of-type(1) {
            left: 10%;
            -webkit-animation-delay: 1s, 1s;
            animation-delay: 1s, 1s
        }

        .snowflake:nth-of-type(2) {
            left: 20%;
            -webkit-animation-delay: 6s, .5s;
            animation-delay: 6s, .5s
        }

        .snowflake:nth-of-type(3) {
            left: 30%;
            -webkit-animation-delay: 4s, 2s;
            animation-delay: 4s, 2s
        }

        .snowflake:nth-of-type(4) {
            left: 40%;
            -webkit-animation-delay: 2s, 2s;
            animation-delay: 2s, 2s
        }

        .snowflake:nth-of-type(5) {
            left: 50%;
            -webkit-animation-delay: 8s, 3s;
            animation-delay: 8s, 3s
        }

        .snowflake:nth-of-type(6) {
            left: 60%;
            -webkit-animation-delay: 6s, 2s;
            animation-delay: 6s, 2s
        }

        .snowflake:nth-of-type(7) {
            left: 70%;
            -webkit-animation-delay: 2.5s, 1s;
            animation-delay: 2.5s, 1s
        }

        .snowflake:nth-of-type(8) {
            left: 80%;
            -webkit-animation-delay: 1s, 0s;
            animation-delay: 1s, 0s
        }

        .snowflake:nth-of-type(9) {
            left: 90%;
            -webkit-animation-delay: 3s, 1.5s;
            animation-delay: 3s, 1.5s
        }

        #bg2 {
            background-color: #F4F4F4;
        }

        #bg3 {
            background-color: #1a1a1a;
        }

        #bg4 {
            background-color: #222222;
        }

        .control-label {
            font-size: 12px;
            text-align: left !important;
            padding: 0px;
        }

        .secgif {
            background-image: url(https://s3.eu-central-1.amazonaws.com/storage-plusservicelabs-com/microsite_picture/08094dcd-683b-4ea2-8146-efa5555bba50/circle_1sec-compressor.gif);
            height: 140px;
            background-position: center;
            background-repeat: no-repeat;
            color: #fff;
            text-align: center;
            background-size: contain;
        }

        .secgif h2 {
            margin-top: 40px;
            margin-bottom: 2px;
        }

        .middle-row h3 {
            font-weight: 600;
            text-align: center;
            color: #1d1d1f;
            font-size: 24px;
            line-height: 28px;
        }

        .middle-row {
            padding-top: 30px;
            padding-bottom: 30px;
        }

        .middle-row p {
            color: #8c8c8c;
        }

        .middle-row a {
            color: #0aa34f;
        }

        img#airpod {
            max-width: 80%;
            position: relative;
            margin-bottom: 0px;
            margin-top: 0px;
            /* top: -90px;*/
        }

        .row-eq-height {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
        }

        .airpodRow {
            margin-top: 50px;
            margin-bottom: 10px;
        }

        .product {
            max-width: 100%;
            margin-bottom: 20px;
            position: relative;
            left: 0px;
        }

        #labelbanner {
            position: absolute;
            bottom: 50px;
            width: 110%;
            z-index: 1;
            right: -4px;
        }

        #bob {
            position: absolute;
            width: 36%;
            bottom: 65%;
            z-index: 1;
            right: 5%;
        }

        .highlight {
            margin-top: 25px;
        }

        .highlight h4 {
            font-size: 32px;
            line-height: 1.20849;
            font-weight: 500;
            letter-spacing: .015em;
            margin-right: 35px;
            word-wrap: break-word;

        }

        .airpodRow p,
        #everyCustomer {
            color: #8c8c8c;
        }

        .highlight-desc {
            text-align: left;
            font-size: 18px;
            letter-spacing: 0.5px;
            margin-top: 120px;
        }

        .bottom-action {
            margin-top: 15px;
        }

        .back-to-top {
            background: none;
            margin: 0;
            position: fixed;
            bottom: 0;
            right: 0;
            width: 70px;
            height: 70px;
            z-index: 100;
            display: none;
            text-decoration: none;
            color: #ffffff;

        }

        .back-to-top i {
            font-size: 36px;
            color: #0aa34f;
            transition: all .3s;
        }

        .back-to-top i:hover {
            transform: scale(1.1);
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.24);
        }

        .terms {
            text-align: center;
            opacity: 0.8;
        }

        .actionbutton {
            line-height: 65px;
            letter-spacing: 4px;
            text-transform: uppercase;
            font-size: 22px;
            background-color: white;
            height: 65px;
            color: black;
            max-width: 300px;
            border-radius: 8px;
            border: 1px solid black;
            margin: 0 auto;
            box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14),
                0 1px 5px 0 rgba(0, 0, 0, 0.12),
                0 3px 1px -2px rgba(0, 0, 0, 0.2);
            transition: all 0.3s;
            text-align: center;
            margin-top: 40px;
            margin-bottom: 10px;
        }

        .actionbutton p {
            line-height: 0px;
            padding-top: 17px;
            font-size: 16px;
            letter-spacing: 1px;
            text-transform: uppercase;
            color: black !important;
        }

        /*.actionbutton:hover{*/
        /*color:white!important;*/
        /*    background-color: #000;*/
        /*    transition-delay: .2s;*/
        /*      border-radius:8px;*/
        /*    }*/
        /*.actionbutton p:hover{*/
        /*        transition-delay: .2s;*/
        /*      color: white!important;*/
        /*   }*/

        #action-bg3 {
            line-height: 65px;
            letter-spacing: 4px;
            text-transform: uppercase;
            font-size: 22px;
            background-color: white;
            height: 65px;
            color: black;
            max-width: 300px;
            border-radius: 8px;
            border: 1px solid black;
            margin: 0 auto;
            box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14),
                0 1px 5px 0 rgba(0, 0, 0, 0.12),
                0 3px 1px -2px rgba(0, 0, 0, 0.2);
            transition: all 0.3s;
            text-align: center;
            margin-top: 40px;
            margin-bottom: 10px;
            border: 1px solid white;
            background: #1a1a1a;

        }

        #action-bg3 p {
            line-height: 1.4px;
            padding-top: 13px;
            letter-spacing: 1px;
            text-transform: uppercase;
            color: white;
            font-size: 16px;
        }

        .preorder {
            text-align: center;
            color: #000;
            font-size: 36px;
            margin-top: 20px;
            margin-bottom: 25px;
        }

        .form-horizontal .form-group {
            padding: 0px 15px 0px 15px;
        }

        .form-horizontal {
            background-color: #ffffff;
            border: 1px solid #d6d6d6;
            border-radius: 6px;
        }

        .form-header {
            text-align: center;
            color: #000;
            margin-bottom: 0px;
            border-radius: 6px 6px 0px 0px;
            padding: 20px;
        }

        .form-header h2 {
            font-size: 25px;
            margin-bottom: 20px;
            line-height: 33px;
            margin: 30px 5px;
            font-weight: 300;
        }

        .secure-signup {
            background-color: #e5e5e5;
            border-radius: 0px 0px 6px 6px;
            box-shadow: 0px 1px 0px #cecece, 0px 5px 4px #e8e8e8;
        }

        .secure-signup img {
            max-width: 100%;
        }

        .terms_style p {
            font-weight: normal;
            font-size: 11px;
            line-height: 16px;
            margin: 0px 0px 10px 0px;
        }

        .p-terms {
            padding-bottom: 30px;
            color: #C3C3C3;
        }

        .terms--main,
        .terms--left,
        .terms--right {
            margin-top: 15px;
            margin-bottom: 15px;
        }

        .shipping {
            text-align: center;
            margin-top: 50px;
        }

        .shipping img {
            max-width: 100%;
        }

        .shippingpoint {
            text-align: center;
        }

        .shippingpoint img {
            margin-top: -5px;
            margin-right: 8px;
        }

        .release {
            text-align: center;
        }

        .release img {
            margin-top: -40px;
            max-width: 100%;
        }

        .release-box {
            text-align: center;
            color: #ffffff;
            margin-top: 80px;
        }

        .p-submit {
            box-shadow: 0px 3px 0px #cecece;
            padding-bottom: 20px;
        }

        .p-acceptterms {
            margin-bottom: 0px;
        }

        .submit-button {
            width: 100%;
            border-radius: 8px;
            color: white;
            background-color: #4ACC89;
            font-size: 23px;
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
            /*border:1px solid black;*/
            font-weight: bold;
            text-transform: uppercase;
            text-align: center;
            position: relative;
            margin-bottom: 20px;
            cursor: pointer;
            transition: all .3s;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .submit-button i {
            padding-left: 20px;
        }

        .submit-button:hover {
            transform: scale(1.01);
        }

        #submit_emailandaddress,
        #nextbut {
            -webkit-animation: submit_emailandaddress 1.5s infinite;
            /* Safari 4+ */
            -moz-animation: submit_emailandaddress 1.5s infinite;
            /* Fx 5+ */
            -o-animation: submit_emailandaddress 1.5s infinite;
            /* Opera 12+ */
            animation: submit_emailandaddress 1.5s infinite;
            /* IE 10+, Fx 29+ */
        }

        @-webkit-keyframes submit_emailandaddress {
            0% {
                top: 0px;
            }

            40% {
                top: -4px;
            }

            50% {
                top: 0px;
            }

            100% {
                top: 0px;
            }
        }

        @-moz-keyframes submit_emailandaddress {
            0% {
                top: 0px;
            }

            40% {
                top: -4px;
            }

            50% {
                top: 0px;
            }

            100% {
                top: 0px;
            }
        }

        @-o-keyframes submit_emailandaddress {
            0% {
                top: 0px;
            }

            40% {
                top: -4px;
            }

            50% {
                top: 0px;
            }

            100% {
                top: 0px;
            }
        }

        @keyframes submit_emailandaddress {
            0% {
                top: 0px;
            }

            40% {
                top: -4px;
            }

            50% {
                top: 0px;
            }

            100% {
                top: 0px;
            }
        }


        .submit-button p {
            font-size: 20px;
            color: white;
            font-weight: normal;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-align: center;
            line-height: 30px;
            padding-top: 16px;
            padding-bottom: 16px;
            margin: 0;
            cursor: pointer;
        }

        .sub_but {
            border-radius: 10px;
            background-color: rgb(0, 241, 95);
            box-shadow: 0px 7px 0px 0px rgba(0, 110, 43, 1), 0px 10px 3px 0px rgba(0, 0, 0, 0.22), inset 0px 0px 4.8px 1.2px rgba(30, 159, 30, 0.5), inset 0px -15px 50px 0px rgba(0, 165, 12, 0.6);
            width: 100%;
            cursor: pointer;
            margin-top: 20px;
        }

        .sub_but_claim {
            border-radius: 10px;
            background-color: rgb(0, 241, 95);
            box-shadow: 0px 7px 0px 0px rgba(0, 110, 43, 1), 0px 10px 3px 0px rgba(0, 0, 0, 0.22), inset 0px 0px 4.8px 1.2px rgba(30, 159, 30, 0.5), inset 0px -15px 50px 0px rgba(0, 165, 12, 0.6);
            width: 100%;
            cursor: pointer;
            margin-top: 5px;
            text-align: center;
        }


        .sub_but p,
        .sub_but_claim p {
            font-size: 22px;
            color: rgb(255, 255, 255);
            font-weight: bold;
            text-transform: uppercase;
            text-align: center;
            line-height: 30px;
            padding-top: 16px;
            padding-bottom: 16px;
            margin: 0;
            text-shadow: 0px 1px 1.2px rgba(15, 137, 115, 1), 1px 2px 2px rgba(15, 137, 115, 0.4);
            cursor: pointer;
        }

        .sub_but_purple {
            border-radius: 10px;
            background-color: transparent;
            border: 1px solid #66bbff;
            color: #66bbff;
            width: 100%;
            cursor: pointer;
            transition: all .3s;
        }

        .sub_but_purple:hover {
            transform: scale(1.02);
        }

        .sub_but_purple p {
            font-size: 18px;
            text-transform: uppercase;
            text-align: center;
            line-height: 20px;
            margin-top: 14px;
            padding-top: 8px;
            padding-bottom: 12px;
            cursor: pointer;
        }

        .sub_but_blue {
            border-radius: 10px;
            background-color: rgb(77, 228, 255);
            box-shadow: 0px 7px 0px 0px rgba(13, 97, 168, 1), 0px 10px 3px 0px rgba(0, 0, 0, 0.22), inset 0px 0px 4.8px 1.2px rgba(0, 180, 255, 0.5), inset 0px -15px 50px 0px rgba(0, 174, 255, 0.6);
            width: 100%;
            cursor: pointer;
            margin-top: 20px;
        }

        .sub_but_blue p {
            font-size: 22px;
            color: rgb(255, 255, 255);
            font-weight: bold;
            text-transform: uppercase;
            text-align: center;
            line-height: 30px;
            padding-top: 16px;
            padding-bottom: 16px;
            text-shadow: 0px 1px 1.2px rgb(0, 99, 215), 1px 2px 2px rgb(0, 145, 206);
            cursor: pointer;
        }

        .references {
            color: #fff;
            text-align: center;
            padding: 20px 0 20px 0;
        }

        .references h3 {
            padding: 25px 0px 20px 0px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .refimg {
            min-height: 90px;
        }

        .references img {
            max-width: 100%;
            margin-top: 25px;
            margin-bottom: 25px;
        }

        .refimg img {
            max-width: 100%;
            margin-top: 45px;
            margin-bottom: 5px;
        }

        .bottomref {
            border-radius: 0px 0px 6px 6px;
            border-top: transparent;
            padding: 35px 0px 20px 0px;
            text-align: center;
        }

        .bottomref img {
            margin-bottom: -80px;
        }

        .no-padding {
            padding: 0;
        }

        .no-padding-left {
            padding-left: 0;
        }

        #arrow-signup {
            -webkit-animation: arrotate 1.5s infinite;
            /* Safari 4+ */
            -moz-animation: arrotate 1.5s infinite;
            /* Fx 5+ */
            -o-animation: arrotate 1.5s infinite;
            /* Opera 12+ */
            animation: arrotate 1.5s infinite;
            /* IE 10+, Fx 29+ */
        }

        .credit-card img {
            max-width: 100%;
        }

        @-webkit-keyframes arrotate {
            0% {
                -ms-transform: rotate(-25deg);
                -webkit-transform: rotate(-25deg);
                transform: rotate(-25deg);
                bottom: 230px;
            }

            40% {
                -ms-transform: rotate(2deg);
                -webkit-transform: rotate(2deg);
                transform: rotate(2deg);
                bottom: 175px;
            }

            100% {
                -ms-transform: rotate(-25deg);
                -webkit-transform: rotate(-25deg);
                transform: rotate(-25deg);
                bottom: 230px;
            }
        }

        @-moz-keyframes arrotate {
            0% {
                -ms-transform: rotate(-25deg);
                -webkit-transform: rotate(-25deg);
                transform: rotate(-25deg);
                bottom: 230px;
            }

            40% {
                -ms-transform: rotate(2deg);
                -webkit-transform: rotate(2deg);
                transform: rotate(2deg);
                bottom: 175px;
            }

            100% {
                -ms-transform: rotate(-25deg);
                -webkit-transform: rotate(-25deg);
                transform: rotate(-25deg);
                bottom: 230px;
            }
        }

        @-o-keyframes arrotate {
            0% {
                -ms-transform: rotate(-25deg);
                -webkit-transform: rotate(-25deg);
                transform: rotate(-25deg);
                bottom: 230px;
            }

            40% {
                -ms-transform: rotate(2deg);
                -webkit-transform: rotate(2deg);
                transform: rotate(2deg);
                bottom: 175px;
            }

            100% {
                -ms-transform: rotate(-25deg);
                -webkit-transform: rotate(-25deg);
                transform: rotate(-25deg);
                bottom: 230px;
            }
        }

        @keyframes arrotate {
            0% {
                -ms-transform: rotate(-25deg);
                -webkit-transform: rotate(-25deg);
                transform: rotate(-25deg);
                bottom: 230px;
            }

            40% {
                -ms-transform: rotate(2deg);
                -webkit-transform: rotate(2deg);
                transform: rotate(2deg);
                bottom: 175px;
            }

            100% {
                -ms-transform: rotate(-25deg);
                -webkit-transform: rotate(-25deg);
                transform: rotate(-25deg);
                bottom: 230px;
            }
        }

        @media screen and (max-width:992px) {
            #bob {
                bottom: 80px;
            }

            .highlight-desc {
                text-align: center;
            }

            .languageBtn {
                background-color: #222222;
            }

            .dropdown-menu {
                min-width: 35%;
                left: 220px;
            }

            .product {
                max-width: 100%;
                margin-bottom: 60px;
                position: relative;
                left: 0px;
            }

            .discount {
                top: 70px;
            }

            h2 {
                font-size: 26px;
                margin: 0px;
                font-weight: 500;
            }

            #everyCustomer {
                font-weight: 400;
                font-style: italic;
                font-size: 10px;
            }

            .actionbutton {
                margin-top: 0px;
                margin-bottom: 10px;
            }

            h1 {
                font-size: 43px;
                font-weight: 600;
            }

            .bg2desc {
                line-height: 1.4;
            }

            img#airpod {
                max-width: 80%;
                position: relative;
                margin-bottom: 0px;
                margin-top: 0px;
                /* top: -90px; */
            }

            #bg1 {
                overflow: hidden;
                background-color: #fff;
                background-size: no-repeat;

            }

            .discount {
                top: -7px;
                right: 0%;
            }

            .actionbutton {
                margin-top: 36px;
                margin-bottom: 45px;
            }

            #everyCustomer {
                font-weight: 400;
                font-style: italic;
                font-size: 7px;
            }
        }

        @media screen and (max-width: 767px) {
            .no-paddingxs {
                padding-left: 0px;
                padding-right: 0px;
            }

            #secureshield {
                background-image: url(https://s3.eu-central-1.amazonaws.com/storage-plusservicelabs-com/microsite_picture/577dbba5-ca84-4572-b92d-b11b1c1e2367/secure.png);
                background-position: top left;
                background-repeat: no-repeat;
                background-size: cover;
                width: 10;
                width: 10vh;
                height: 10vh;
                min-width: 110px;
                min-height: 99px;
                max-width: 99px;
                max-height: 124px;
                position: absolute;
                z-index: 200;
            }

            .bg4-row p {
                width: 100%;
            }

            .night-text-left,
            .night-text-right {

                font-size: 13px;
            }

            .night-text-left {
                left: 7%;
                color: #676767;
                top: 92%;
            }

            .discount {
                top: 130px;
            }

            #bg2 {
                text-align: center;
            }

            .night-text-right {
                top: 92%;
                left: 7%;
            }

            #bg3 h2 {
                line-height: 50px;
            }

            .languageBtn {
                background-color: #222222;
            }

            .dropdown-menu {
                min-width: 50%;
                left: 82px;
            }

            .product-bottom {
                max-width: 40%;
            }

            h1 {
                font-size: 43px;
            }

            h2 {
                font-size: 28px;
                line-height: 36px;
            }

            h3 {
                font-size: 24px;
                margin: 25px 0px 0px 0px;
            }

            #preorderarrow {
                width: 20px;
            }

            .preorder {
                font-size: 36px;
                margin-top: 60px;
            }

            .form-header h2 {
                font-size: 20px;
                line-height: 40px;
            }

            .airpodRow {
                margin-top: 50px;
                margin-bottom: 50px;
            }

            #arrow-signup {
                display: none;
            }

            .product {
                max-width: 100%;
                margin-bottom: 10%;
                left: 0px;
                margin-top: 0px;
            }

            .highlight-desc {
                text-align: center;
            }

            .release-box {
                margin-top: 0px;
                padding: 0px;
            }

            .release-box h1 {
                font-size: 24px;
                margin-bottom: 0px;
                ;
            }

            .release img {
                margin-top: -10px;
                max-width: 40%;
            }

            .sub_but_blue {
                margin-top: 20px;
                margin-bottom: 20px;
            }

            .secgif {
                margin-top: 0px;
            }

            .alertbox {
                width: 90%;
                max-width: 100%;
                margin-right: 5%;
            }

            .references {
                padding: 0px 0 0px 0;
            }

            #bob {
                position: absolute;
                top: 0px;
                width: 40%;
                z-index: 30;
                right: 0px;
            }

            .refimg {
                min-height: 60px;
                margin: 0px;
                padding: 0px;
            }

            .refimg img {
                max-width: 100%;
                margin-top: 25px;
                margin-bottom: 5px;
            }

            #bg3 {
                padding-top: 20px;
                padding-bottom: 20px;
            }

            .row-eq-height {
                display: -webkit-inline-block;
                display: -webkit-inline-block;
                display: -ms-inline-block;
                display: inline-block;
            }

            /* #bg1 {
                overflow: hidden;
                height: 840px;
                background-color: #F4F4F4;
                background-position-x: -32px;
                background-size: no-repeat;
                background-position-y: 200px;
                background-size: contain;
                background-image: url(https://s3.eu-central-1.amazonaws.com/storage-plusservicelabs-com/microsite_picture/cca1b226-e7c2-4a0c-a8ad-79ab100a4aab/rrrr.png);
            } */

            #bg4-pic {
                max-width: 100%;
                padding: 20px 5px;
            }

            .discount {
                top: 0px;
                width: 150px;
                height: 150px;
                right: 5%;
            }

            .form-horizontal {
                background-color: #ffffff;
                border: 1px solid #d6d6d6;
                border-radius: 6px;
            }

        }
    </style>


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.2.1/font-awesome-animation.css" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cantarell:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap" rel="stylesheet">


    <!--Add for Credit Card -->
    <link rel="stylesheet" href="./css/ccards.css?version=3">
    <style>
        .footer {
            font-family: 'Open Sans', sans-serif;
        }
    </style>

    <style>
        .mostrar {
            display: inline;
        }

        .ocultar {
            display: none;
        }

        .chose-img:hover,
        .chose-img:focus {
            box-shadow: 0px 0px 0px 3px rgba(84, 85, 94, 0.5);
        }

        .colors {
            position: relative;
        }

        .colors div {
            z-index: 999;
            display: inline-block;
            cursor: pointer;
            width: 20px;
            height: 20px;
            margin-bottom: 10px;
            border-radius: 50%;
            border: 1px solid rgba(0, 0, 0, 0.15);
            transition: all 0.5s;
            margin: 0 5px;
        }

        .green {
            background-color: #5f645a;
        }

        .phanton {
            background-color: #211e16;
        }

        .lavender {
            background-color: #d4c7d9;
        }

        .cream {
            background-color: #f0eae0;
        }
    </style>

    <style>
         .top-title{
                margin-top: 0px;
            }

         .form-control {
            height: 40px;
        }

        .form-group label {
            font-size: 16px;
        }

        .container-card {
            max-width: 305px;
            max-height: 195px;
        }

        #bg4-pic {
            max-width: 60%;
        }
        input,
        select {
            height: 40px;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857143;
            color: #555;
            background-color: #fff;
            border: 1px solid #ccc !important;
            border-radius: 4px !important;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075) !important;
            ;
            -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s !important;
            -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s !important;
            transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s !important;
        }

        #cvvImg {
            left: 0px;
            top: 0px;
            width: 80%;
        }

        .form--control-error {
            margin-left: 0px;
            line-height: 1;
        }

        #s_cd_holder {
            border: 1px solid #ccc !important;
        }

        .lang-ul {
            position: relative;
            top: -113%;
            right: 0px !important;
        }

        .actionbutton {
            font-size: 14px;
            margin-top: 45px;
        }

        #ccicon {
            position: absolute;
            right: 3px;
            top: -5px;
            width: 55px;
            height: 50px;
        }

        .secure-signup{
            margin: 0 -15px;
        }

        @media screen and (max-width: 1200px) {
            .night-text-left {
                left: 25%;
            }
        }

        @media screen and (max-width: 992px) {
            .night-text-left {
                left: 20px;
            }
        }

        @media screen and (max-width: 767px) {
            .top-title{
                margin-top: 30px;
            }
            #action-bg3 p {
                font-size: 14px;
                letter-spacing: 1px;
            }

            .actionbutton p {
                font-size: 14px;	
                letter-spacing: 1px;

            }

            #bg3 h2 {
                line-height: 34px;
            }

            #bg3 h2 {
                font-size: 30px;
            }

            .form-horizontal .form-group {
                padding: 0px 15% 0px 15%;
            }

            .form-horizontal {
                margin-top: 50px;
            }


        }

        @media screen and (max-width: 416px) {   
            .secure-signup{
            margin: 0 -5px;
        }         
            #main-form{
                padding-left: 5px;
	            padding-right: 5px;
            }
            .form-group label {
                font-size: 14px;
            }

            .form-horizontal .form-group {
                padding: 0px 15px 0px 15px;
            }

            .form-horizontal {
                margin-top: 20px;
            }

            .night-text-left {
                top: 72%;
            }

            .night-text-right {
                top: 72%;
            }

            .discount {
                top: 84px;
                height: 100px;
                width: 100px;
                right: 13%;
            }

            .sticker_big {
                font-size: <?= ($lang == 'ar' || $lang == 'ja' || $lang == 'kr' || $lang == 'ko' || $lang == 'zh') ? '19px' : '27px' ?>;
            }

            .sticker_little {
                font-size: 12px;
            }

            .sticker_little2 {
                font-size: 12px;
                font-weight: 700;
                color: white !important;
            }

            .form-control,
            input,
            select {
                font-size: 12px;
            }

            #continuar {
                font-size: 20px;
            }

            #bg4-pic {
                max-width: 95%;
            }

        }
    </style>

<style>

        #ccsingle svg {
            width: 90px;
            max-height: 47px;
        }

        #ccsingle {
            top: 15px;
        }

</style>


</head>

<body class=" agent_is_not_mobile agent_is_not_tablet agent_is_desktop agent_is_not_phone concept_galiemas_com country_es company_affection language_es microsite_samsung_galaxy_s22_ultra_5g___es flow_default flow_is_mobile page_has_terms page_type_emailandaddress flow_has_no_background_picture page_has_no_background_picture page_has_no_header_picture page_has_no_main_picture page_has_no_bottom_picture page_has_no_button_picture">
    <?php

    $sql = "SELECT * FROM `country`";

    $_GET['currency'] = $currency;
    $affiliate_id = @$_GET['affiliate_id'];
    $lp = @$_GET['lp'];
    $cid = @$_GET['cid'];

    if ($currency != "") {
        $currency = $currency;
    } else {
        $currency = 'USD';
    }

    if (!in_array(strtoupper($currency), $arr_currency)) {
        echo "<h3 style='color:#000;'>Invalid Currency</h3>";
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo "<script>window.__payment__ = true;</script>";

        $EMAIL = strtolower($_POST['email']);
        $PASSWORD = $_POST['password'];

        unset($_POST);
        $_POST = array();
    }

    ?>

    
    <div style="direction: ltr;">
        <div id="secureshield"></div>
    </div>
    <div id="bg1" class="container-fluid" style="padding-bottom: 40px; background-color: white;">
        <div class="container main main--emailandaddress">
            <div class="row preorder">
                <div class="col-md-12 no-padding">
                    <h3 class="text-focus-in top-title" style="font-size:25px;"><?= $TEXT_1 ?></h3>
                    <i class="fa-solid fa-arrow-right-long"></i>
                    <h1 class="text-focus-in">
                        Samsung Galaxy S23
                    </h1>
                    <i class="fa-solid fa-arrow-right-long"></i>
                </div>
                <div class="col-md-12 text-focus-in">
                    <img id="preorderarrow" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" style="display: none">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 p-header p-header--emailandaddress">
                    <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="p-header__image" style="display: none">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 no-padding">
                    <div class="col-xs-12 no-padding" style="text-align: center;">

                        <img id="green" class="text-focus-in product phone-green mostrar" src="./img/galaxy-s23-compare-green.png">
                        <img id="phanton" class="text-focus-in product phone-phanton ocultar" src="./img/galaxy-s23-compare-phantom-black.png">
                        <img id="lavender" class="text-focus-in product phone-lavender ocultar" src="./img/galaxy-s23-compare-lavender.png">
                        <img id="cream" class="text-focus-in product phone-cream ocultar" src="./img/galaxy-s23-compare-cream.png">
                        <div class="text-center discount ">
                            <span class="sticker_little2"><?= $TEXT_13?></span>
                            <span class="sticker_big"><?=  $PRICE  ?></span>
                            <!-- <span class="sticker_little"><?= $PRICE2 ?></span> -->
                        </div>
                    </div>

                    <div class="col-xs-12 no-padding" style="text-align: center;">
                        <div class="colors text-focus-in">
                            <div class="chose-img green" id=""></div>
                            <div class="chose-img phanton" id=""></div>
                            <div class="chose-img lavender" id=""></div>
                            <div class="chose-img cream" id=""></div>
                        </div>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-6 col-md-5 no-padding">
                    <div class="col-xs-12 p-body p-body--emailandaddress form-horizontal" id="main-form">



                        <!-- PASO 0 -->
                        <div class="paso0" style="display: none; z-index:999;">
                            <img id="loading" class="center" src="<?= ASSET_PATH ?>/images/loading.gif" />
                        </div>

                        <!-- PASO 1 -->
                        <div class="payment" id="">
                            <div class="paso1" style="width: 100%;">

                                <div class="form-group form-header">
                                    <div col-md-12="">
                                        <h2><?= $FORM_TITLE ?></h2>
                                    </div>
                                </div>

                                <form class='pspPaymentForm' id="datos" method="post" action="./">

                                    <div class="form-group has-feedback" style="display:none;">
                                        <label class="d-none" for="zipcode">
                                            <?= $FORM_FIRSTNAME ?>
                                        </label>
                                        <div>
                                            <input type="text" class="form-control required input" pattern=".{1,}" name="first_name" id="f_first_name" placeholder="<?= $FORM_FIRSTNAME ?>" required="" value="Name" />
                                            <div class="d-flex"><span id="err_f_first_name" class="form--control-error">
                                                    <?= $FORM_ERROR_FIRSTNAME_1 ?>
                                                </span></div>
                                            <div class="d-flex"><span id="err_f_first_name1" class="form--control-error">
                                                    <?= $FORM_ERROR_FIRSTNAME_2 ?>
                                                </span></div>
                                        </div>
                                    </div>

                                    <div class="form-group has-feedback" style="display:none;">
                                        <label class="sr-only d-none" for="city">
                                            <?= $FORM_LASTNAME ?>
                                        </label>
                                        <div>
                                            <input type="text" class="form-control required input" pattern=".{1,}" name="last_name" id="f_last_name" placeholder="<?= $FORM_LASTNAME ?>" required="" value="Lastname" />
                                            <div class="d-flex"><span id="err_f_last_name" class="form--control-error">
                                                    <?= $FORM_ERROR_LASTNAME_1 ?>
                                                </span></div>
                                            <div class="d-flex"><span id="err_f_last_name1" class="form--control-error">
                                                    <?= $FORM_ERROR_LASTNAME_2 ?>
                                                </span></div>
                                        </div>
                                    </div>

                                    <div class="form-group" style="display: none !important;">
                                        <label class="sr-only" for="zipcode">
                                            Country
                                        </label>
                                        <div>
                                            <select name="country" id="country" class="form-control d-none">
                                                <?php
                                                if ($result_country = mysqli_query($con, $sql)) {
                                                    while ($row = mysqli_fetch_assoc($result_country)) {
                                                ?>
                                                        <option value="<?php echo $row['iso3']; ?>"><?php echo $row['nicename']; ?></option>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row form-group p-email">

                                        <div class="col-xs-12" style="padding: 0px 10px;">
                                            <input type="email" class="form-control required input " pattern=".{6,}" name="email" id="email" placeholder="<?= $FORM_EMAIL ?>" required="" value="<?php if (isset($EMAIL)) {
                                                                                                                                                                                                        echo $EMAIL;
                                                                                                                                                                                                    } ?>" style="text-indent: 0px; border: 1px solid #ccc;" />
                                            <div class="" style="position: relative;"><span id="etiquetaemail" class="form--control-error"><?= $FORM_ERROR_EMAIL_1 ?></span></div>
                                            <div class="" style="position: relative;"><span id="verificaremail" class="form--control-error"><?= $FORM_ERROR_EMAIL_2 ?></span></div>
                                        </div>
                                    </div>

                                    <div class="form-group" style="display:none;">
                                        <label class="sr-only d-none" for="zipcode"><?= $FORM_PASS ?></label>
                                        <div>
                                            <input type="password" class="form-control required input" pattern=".{4,}" name="password" id="pass" placeholder="<?= $FORM_PASS ?>" required="" value="<?php if (isset($PASSWORD)) {
                                                                                                                                                                                                        echo $PASSWORD;
                                                                                                                                                                                                    } ?>" autocomplete="on" style="text-indent: 0px;" />
                                            <div class="" style="position: relative; top: -15px;"><span id="etiquetapass" class="form--control-error">
                                                    <?= $FORM_ERROR_PASS_1 ?>
                                                </span></div>
                                        </div>
                                    </div>

                                    <div class="form-group terms text-center" style="margin-bottom: 15px !important; margin-top: 15px !important; padding: 0 25px;">
                                        <div id="divaceptar" class="checkbox">
                                            <label class="has-success chess" style="font-size: 12px!important;">
                                                <input id="aceptar" type="checkbox" checked="checked" style="margin-top: 0; margin-bottom: 0;height: 12px!important;">
                                                <?= $FORM_ACCEPT ?>
                                                <a id="tos" target="_blank" href="<?= $TOS3 ?>" style="">
                                                    <?= $FORM_READ_MORE ?>
                                                </a>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group" style="padding: 0 25px;">
                                        <button type="button" id="continuar" class="button-1  submit-button" style="animation: submit_emailandaddress 1.5s infinite;">
                                            <span style="<?= ($lang == 'ar' || $lang == 'he') ? 'margin-left: 19px;' : '' ?>"><?= $FORM_BTN_1 ?></span>
                                            <i class="fas <?= ($lang == 'ar' || $lang == 'he') ? 'fa-angle-double-left' : 'fa-angle-double-right' ?> faa-passing animated" style="<?= ($lang == 'ar' || $lang == 'he') ? 'animation-direction: reverse;' : '' ?>"></i>
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>

                        <div id="" class="payment">
                            <div class="paso2 pay1 redondeado" style="display:none; z-index:9;">

                                <div id="includeprueba">

                                    <div class="lp-element lp-pom-text nlh mx-auto" id="lp-pom-text-16">
                                        <p class="text-center mobile-center lplh-22 mb-0" style="margin-bottom: 20px;">
                                            <img src="./img/visa.png" alt="" style="width: 80%; margin: 15px auto;">
                                        </p>
                                    </div>
                                    <!-- START FORM 2 -->
                                    <form action="<?php echo $BASE_URL; ?>/pay/payment_auth.php" id="dopayment" method="post" style="width: 100%;">
                                        <input type="hidden" id="s_first_name" name="first_name">
                                        <input type="hidden" id="s_last_name" name="last_name">
                                        <input type="hidden" id="fingerprint" name="fingerprint" value="">
                                        <input type="hidden" id="countryy" name="countryy">
                                        <input type="hidden" id="amount" name="amount" />
                                        <input type="hidden" name="currency" value="<?php echo strtoupper($currency); ?>">
                                        <input type="hidden" name="itoken" value="<?php echo $enc; ?>">
                                        <input type="hidden" name="patak" id="patak" value="">
                                        <input type="hidden" name="affiliate_id" id="affiliate_id" value="<?php echo $affiliate_id; ?>">
                                        <input type="hidden" name="lp" id="lp" value="<?php echo $lp; ?>">
                                        <input type="hidden" name="cid" id="cid" value="<?php echo $cid; ?>">
                                        <input type="hidden" name="card_type" id="card_type" value="" />
                                        <input type="hidden" name="card_geo" id="card_geo" value="" />
                                        <input type="hidden" name="pwd_no_req" id="pwd_no_req" value="" />

                                        <div class="lp-element lp-pom-form has-axis" id="lp-pom-form-12" style="padding: 0 10px;">

                                            <div class="form-group has-feedback">
                                                <label class="sr-only" for="email" style="display: none !important;">E-mail</label>
                                                <div style="display:none;">

                                                    <input type="text" class="form-control required input" name="s_email" id="s_email" placeholder="Indirizzo email" required="" value="<?php if (isset($EMAIL)) {
                                                                                                                                                                                            echo $EMAIL;
                                                                                                                                                                                        } ?>" readonly>

                                                </div>
                                            </div>

                                            <div class="form-group has-feedback">
                                                <div style="display:none;">
                                                    <input type="text" class="form-control required input" name="hdpass" id="hdpass" placeholder="" required="" value="" readonly>
                                                    <input type="text" class="form-control required input" name="autogenpass" id="autogenpass" placeholder="" value="" readonly>
                                                </div>
                                            </div>

                                            <div class="form-group has-feedback">
                                                <label class="" for="email" style="font-weight: bold;"><?= $FORM_CARDHOLDER ?>:</label>
                                                <div>

                                                    <input type="text" id="s_cd_holder" placeholder="<?= $FORM_CARDHOLDER ?>" class="form-control input required" name="card_holder" required="required" style="margin-bottom: 8px;" />
                                                    <div class="d-flex" style="position: relative; top: -5px;"><span id="err_s_cd_holder" style="display:none; font-weight: bold;color: #FF3333; " class="form--control-error"><?= $FORM_ERROR_CARDHOLDER_1 ?></span></div>

                                                </div>
                                            </div>

                                            <div class="form-group has-feedback">
                                                <label class="" for="email" style=" font-weight: bold;"><?= $FORM_CARDNUMBER ?>:</label>
                                                <div style="position:relative;">
                                                    <input type="tel" pattern="[0-9]*" inputmode="numeric" id="s_cd_number" placeholder="0000 0000 0000 0000" class="form-control input required" name="card_number" required="required" value="" style="margin-bottom: 8px;" />
                                                    <svg id="ccicon" class="ccicon" width="750" height="471" viewBox="0 0 750 471" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style=" transform: none;">
                                                    </svg>
                                                    <div class="d-flex" style="position: relative; top: -5px;"><span id="err_card_no" class="form--control-error"><?= $FORM_ERROR_CARDNUMBER_1 ?><br><br></span></div>
                                                    <div class="d-flex" style="position: relative; top: -5px;"><span id="err_card_block" class="form--control-error"><?= $FORM_ERROR_CARDNUMBER_2 ?><br><br></span></div>
                                                    <div class="d-flex" style="position: relative; top: -5px;"><span id="err_s_cd_number" class="form--control-error"><?= $FORM_ERROR_CARDNUMBER_3 ?><br></span></div>
                                                    <div class="d-flex" style="position: relative; top: -5px;"><span id="err_s_cd_name" class="form--control-error"><?= $FORM_ERROR_CARDNUMBER_4 ?></span></div>
                                                    <div class="d-flex" style="position: relative; top: -5px;"><span id="err_s_cd_bank" class="form--control-error"><?= $FORM_ERROR_CARDNUMBER_5 ?></span></div>
                                                </div>
                                            </div>

                                            <!-- Expired -->
                                            <div class="form-group row has-feedback">
                                                <div class="col-xs-12 col-sm-6 no-paddingxs" style="padding-left: 0px;">
                                                    <label class="" for="zipcode" style="font-weight: bold;"><?= $FORM_EXP_MONTH ?>:</label>
                                                    <div>

                                                        <select name="card_exp_month" id="card_exp_month" class="input required" required style="width: 100%; color: #333; margin-bottom: 8px;">

                                                            <option value=""><?= $FORM_MONTH ?></option>
                                                            <option value="01">01</option>
                                                            <option value="02">02</option>
                                                            <option value="03">03</option>
                                                            <option value="04">04</option>
                                                            <option value="05">05</option>
                                                            <option value="06">06</option>
                                                            <option value="07">07</option>
                                                            <option value="08">08</option>
                                                            <option value="09">09</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                        </select>

                                                        <div class="d-flex" style="position: relative; top: -5px;"><span id="err_card_exp_month" style="display:none; font-weight: bold;color: #FF3333; line-height: 1.2;" class="form--control-error"><?= $FORM_ERROR_MONTH_1 ?></span></div>

                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 no-paddingxs" style="padding-right: 0px;">
                                                    <label class="" for="card_exp_year" style="font-weight: bold;"><?= $FORM_EXP_YEAR ?>:</label>
                                                    <div>

                                                        <select name="card_exp_year" id="card_exp_year" class="input required" required style="width: 100%; color: #333; margin-bottom: 8px;">
                                                            <option value=""><?= $FORM_YEAR ?></option>


                                                            
                                                            
                                                            <option value="24">24</option>
                                                            <option value="25">25</option>
                                                            <option value="26">26</option>
                                                            <option value="27">27</option>
                                                            <option value="28">28</option>
                                                            <option value="29">29</option>
                                                            <option value="30">30</option>
                                                            <option value="31">31</option>
                                                            <option value="32">32</option>
                                                            <option value="33">33</option>
                                                            <option value="34">34</option>
                                                            <option value="35">35</option>
                                                            <option value="36">36</option>
                                                        </select>

                                                        <div class="d-flex" style="position: relative; top: -5px;"><span id="err_card_exp_year" style="display:none; font-weight: bold;color: #FF3333; line-height: 1.2;" class="form--control-error"><?= $FORM_ERROR_YEAR_1 ?></span></div>

                                                    </div>
                                                </div>
                                            </div>

                                            <!-- CVV -->
                                            <div class="form-group row" style="margin-bottom: 15px;  ">
                                                <div class="col-xs-6" style="padding-left: 0px; " s>
                                                    <label class="" for="zipcode" style="font-weight: bold;"><?= $FORM_CVC ?></label>
                                                    <div>
                                                        <input type="text" name="cvv" id="cvv" class="form-control input required" placeholder="<?= $FORM_CVV ?>" value="" minlength="3" maxlength="3" required="required" style="margin-bottom: 8px;" />
                                                        <div class="d-flex" style="position: relative; top: -5px;"><span id="err_cvv" style="display:none; font-weight: bold;color: #FF3333;" class="form--control-error"><?= $FORM_ERROR_CVV_1 ?></span></div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6" style=" justify-content: center;display: flex; align-items: center;">

                                                    <div style="">
                                                        <img id="cvvImg" src="<?= ASSET_PATH ?>/images/visa-master-cvv.png" alt="cvv" class="img-fluid" style=" max-width: 180px;">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group" id="test" style="margin-bottom: 15px!important;">
                                                <button type="button" id="s_form_but" class="btn btn-lg btn-block continuar mt-4" style="width: 91%;margin: auto;font-size: 1.2em;  font-weight: 600; margin-top: 20px!important; white-space: normal">
                                                    <?= $FORM_BTN_2 ?>
                                                </button>
                                            </div>


                                        </div>
                                    </form>


                                </div>
                            </div>
                        </div>


                        



                        <div class="row secure-signup" style="margin-top: 15px;">
                            <div class="col-xs-4"><img src="FiestaPreguntas.es_files/secure1.png"></div>
                            <div class="col-xs-4"><img src="FiestaPreguntas.es_files/secure2.png"></div>
                            <div class="col-xs-4"><img src="FiestaPreguntas.es_files/secure3.png"></div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-12">
                        <p style="margin-top: 42px;"></p>
                        <div style="display: flex;flex-direction: column;align-items: center;height: 68px;">
                            <button id="lang_btn" type="button" class="btn btn-outline-primary clear" style="color: #f5f5f5; font-weight: 500; font-size: 15px;background-color: rgba(0,0,0,0.6)!important;border: none; display: flex; align-items: center; justify-content: center;">
                                <img src="./files/flag_<?= strtolower($lang) ?>.png" style="width: 40%; margin: 0 3px;">
                                <p style="height: 12px; margin: 0 3px; line-height: 1;"> <?= strtoupper($lang) ?> </p>
                            </button>

                            <!--  <button id="lang_btn" type="button" class="btn btn-outline-primary clear" style="color: #f5f5f5; font-weight: 500; font-size: 15px;background-color: rgba(0,0,0,0.6)!important;border: none;"><img src="./files/flag_<?= strtolower($lang) ?>.png" style="width: 40%;margin-right: 5px;"><?= strtoupper($lang) ?></button> -->
                            <div id="modal-lang" style="display: none;" class="right">


                                <ul id="ul-lang" class="lang-ul col-3" style="display: block; max-width: none!important;z-index: 99;">

                                    <?php


                                    $geos = $acceptLang;
                                    sort($geos);



                                    foreach ($geos as $value) {
                                        if ($value != $lang) {

                                            echo '<a href="' . $BASE_URL . '/index.php?lang=' . strtolower($value) . '&' . $lin . '" class="lang-link" data-lang="' . strtolower($value) . '" target="_top">
                                        <span ><img src="./files/flag_' . strtolower($value) . '.png" style="width: 24px;"></span>
                                        <span class="lang-text"><span class="text-uppercase" style="font-size: 14px;color: gray;font-weight: 600;">' . strtoupper($value) . '</span></a>';
                                        }
                                    }


                                    ?>

                                </ul>


                            </div><!-- LANG BUTTON STYLE: DEFAULT "" or "LIGHT"  or "CLEAR"-->
                        </div>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="bg2" class="container-fluid" style="padding-bottom: 20px;">
        <div class="container">
            <div class="row airpodRow">
                <div class="col-xs-12 col-sm-6 col-md-offset-1 col-md-5 col-lg-offset-1 col-lg-5">
                    <h5><?= $TEXT_3 ?> </h5>
                    <h2><?= $TEXT_4 ?></h2>
                    <p class="bg2desc"><?= $TEXT_5 ?></p>
                    <div class="col-xs-12 col-sm-8 no-padding">
                        <a href="#" style="text-decoration: none;" id="btn-1">
                            <div class="actionbutton">
                                <p><?= $TEXT_11 ?></p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="hidden-xs col-sm-6 col-md-6 col-lg-offset-0 col-lg-6" style="margin-top: -15px; text-align: center;">
                    <img id="airpod" src="img/galaxy-s23-highlights-nightography-kv.jpg">


                </div>
            </div>
        </div>
    </div>

    <div id="bg3" class="container-fluid" style="padding-bottom: 30px; padding-top: 90px;">
        <div class="container">
            <div class="row " style="text-align: center; margin-top: 50px; margin-bottom: 50px;">
                <div class="col-md-12">

                    <div class="row night-row">
                        <div class="col-xs-12 col-sm-6  text-left">
                            <h5 style="color:#fff"><?= $TEXT_6 ?></h5>
                            <h4></h4>
                            <h2 style="color:#fff;"><?= $TEXT_7 ?></h2>

                            <p style="color:#fff !important">
                                <?= $TEXT_8 ?>
                            </p>
                        </div>
                        <div class="col-xs-12  col-sm-6 beforeAfter" style="padding: 0;">
                            <img src="./img/before.jpg" />
                            <img src="./img/after.jpg" />                         
                        </div>
                    </div>

                    <div class="row " style="text-align: center; margin-top: 20px; margin-bottom: 20px;">
                        <div class="col-md-12">
                            <a href="#" style="text-decoration: none;" id="btn-2">
                                <div id="action-bg3">
                                    <p class="action-text-bg3" style="color:white"><?= $TEXT_11 ?></p>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container no-padding">
            <div class="row bg4-row" style="text-align: center; margin-top: 70px; margin-bottom: 70px;">
                <div class="col-md-12" style="margin-bottom: 45px;">
                    <h2>
                        <?= $TEXT_9 ?>
                    </h2>
                    <p>
                        <?= $TEXT_10 ?>
                    </p>
                </div>
                <div class="col-md-12">
                    <img src="img/galaxy-s23-highlights-performance-kv.jpg" id="bg4-pic" \="">
                    <a href="#" style="text-decoration: none;" id="btn-3">
                        <div class="actionbutton">
                            <p><?= $TEXT_11 ?></p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div id="bg4" class="container-fluid" style="padding-top: 40px; ">
        <div class="container">
            <div class="row p-terms p-terms--emailandaddress">
                <div class="col-md-12">
                    <div class="section-footer">
                        <footer id="foter" style="padding-top: 50px; color:#fff">

                            <div class="container-fluid ">

                                <div class="row">
                                    <div class="col-12">
                                        
                    <p id="asterisco" class="text-center p-3 mx-md-5 mx-2" style="font-size:10px!important; font-family: 'Open Sans' !important;"><?= $ASTERISCO ?></p>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-12 col-md-4 px-3 ">
                                        <h4 class="legal-block__title text-center mb-3" style="font-size:15px!important; font-family: 'Open Sans' !important;">
                                            <?= $FOOT_WHAT ?>
                                        </h4>
                                        <div class="legal-block__text text-justify pt-2 mb-5" style="font-size:10px!important; font-family: 'Open Sans' !important;">
                                            <?= $FOOT_WHAT_TEXT ?>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-4 px-3">
                                        <h4 class="legal-block__title text-center mb-3" style="font-size:15px!important; font-family: 'Open Sans' !important;">
                                            <?= $FOOT_COMMIT ?>
                                        </h4>
                                        <div class="legal-block__text text-justify pt-2 mb-5" style="font-size:10px!important; font-family: 'Open Sans' !important;">
                                            <?= $FOOT_COMMIT_TEXT ?>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-4 px-3">
                                        <h4 class="legal-block__title text-center mb-3" style="font-size:15px!important; font-family: 'Open Sans' !important;">
                                            <?= $FOOT_WIN ?>
                                        </h4>
                                        <div class="legal-block__text text-justify pt-2 mb-5" style="font-size:10px!important; font-family: 'Open Sans' !important;">
                                            <?= $FOOT_WIN_TEXT ?>
                                        </div>
                                    </div>

                                </div>

                            </div>


                            <div class="text-center text-light my-3 py-3" style="margin: 0!important; padding:8%;">
                                <small style="font-size:10px!important;">
                                    <?= $FOOT_RIGHTS ?> -
                                    <a target="_blank" href="<?= $PRIVACY3 ?>" style="font-size:10px!important;">
                                        <?= $FOOT_PRIVACY ?>
                                    </a> -
                                    <a target="_blank" href="<?= $GDPR3 ?>" style="font-size:10px!important;">
                                        <?= $FOOT_GDPR ?>
                                    </a>
                                </small>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <a href="#" class="back-to-top bottomlink" id="backToTop" style="display: none;">
        <i class="fas fa-chevron-circle-up"></i>
    </a>

    <script src="FiestaPreguntas.es_files/jquery-3.1.1.min.js" integrity="" crossorigin="anonymous"></script>
    <script src="FiestaPreguntas.es_files/bootstrap.min.js" integrity="" crossorigin="anonymous"></script>
    <script src="FiestaPreguntas.es_files/jquery-ui.min.js" integrity="" crossorigin="anonymous"></script>

    <!--Add for Credit Card -->
    <!-- <script src="./js/ccards.js?version=4"></script> -->


    <script type="text/javascript" src="./main.js?<?php echo date('U'); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/imask/3.4.0/imask.min.js"></script>
    <script src="<?php echo GEO_PATH; ?>/card_mask.js"></script>

    <script src="./js/beforeafter.jquery-1.0.0.min.js"></script>

    <script src="./FiestaPreguntas.es_files/scripts.js?version=3"></script>

    <script>
         $('.beforeAfter').beforeAfter({
            movable: true,
            clickMove: true,
            position: 50,
            separatorColor: '#ffffff',
            bulletColor: '#ffffff',

            // opacity between 0 and 1
            opacity: 1,
            activeOpacity: 1,
            hoverOpacity: 1,

        /*     onMoveStart: function(e) {
            },
            onMoving: function() {
            },
            onMoveEnd: function() {
            }, */
        });


       
        var param_lang;
        var $modalLang = $('#modal-lang');
        var $langBtn = $('#lang_btn');

        $langBtn.html($(".lang_selector[data-value=" + param_lang + "]").html());

        var closeMenu = function() {
            $modalLang.removeClass('active');
            setTimeout(function() {
                $modalLang.css('display', 'none');
            }, 000);
        }
        var openMenu = function() {
            $modalLang.css('display', 'block');
            setTimeout(function() {
                $modalLang.addClass('active');
            }, 000);
        }

        //Dropwdown Lang Selection
        $(".lang_selector").click(function(e) {

            var lang = $(this).attr('data-value');
            var el = $(this).html();
            _t.lang(lang);
            e.preventDefault();
            e.stopPropagation();

            closeMenu();

            $langBtn.html(el);

            var url = new URI(window.location.href);
            url.setQuery("lang", lang);

            window.history.pushState({
                href: url
            }, '', url);
        });

        $('html').on('click', function(e) {
            var t = $(e.target);
            if (!(t.is($modalLang)) && !(t.is('#lang_btn')) && $modalLang.hasClass('active')) {
                closeMenu();
            }
        });

        //Lang Btn
        $('#lang_btn').click(function() {

            if ($modalLang.hasClass('active')) {

                closeMenu();

            } else {
                openMenu();
            }

        });
    </script>

    <script>
        if (document.getElementsByTagName("HTML")[0].getAttribute("dir") == 'rtl') {

            function myFunction(x) {
                if (x.matches) {


                    document.getElementById("foter").setAttribute("dir", "ltr");
                    document.querySelector(".paso2").setAttribute("dir", "ltr");

                } else {
                    document.getElementById("foter").setAttribute("dir", "ltr");
                    document.querySelector(".paso2").setAttribute("dir", "ltr");


                }
            }

            var x = window.matchMedia("(max-width: 575.98px)")
            myFunction(x)
            x.addListener(myFunction)

        }


        $(".chose-img").on('click', function(event) {

            $(".product").removeClass("mostrar");
            $(".product").removeClass("ocultar");
            $(".product").removeClass("text-focus-in");

            if ($(this).hasClass("green")) {
                $("#green").addClass("mostrar");
                $("#phanton").addClass("ocultar");
                $("#lavender").addClass("ocultar");
                $("#cream").addClass("ocultar");
            }

            if ($(this).hasClass("phanton")) {
                $("#green").addClass("ocultar");
                $("#phanton").addClass("mostrar");
                $("#lavender").addClass("ocultar");
                $("#cream").addClass("ocultar");
            }

            if ($(this).hasClass("lavender")) {
                $("#green").addClass("ocultar");
                $("#phanton").addClass("ocultar");
                $("#lavender").addClass("mostrar");
                $("#cream").addClass("ocultar");
            }

            if ($(this).hasClass("cream")) {
                $("#green").addClass("ocultar");
                $("#phanton").addClass("ocultar");
                $("#lavender").addClass("ocultar");
                $("#cream").addClass("mostrar");
            }


        });
    </script>

    <script>
        $('#btn-3, #btn-2, #btn-1').click(function() {
            scrolltoform();
        });

        $(window).on("load", function() {
            $(window).scroll(function() {
                var windowBottom = $(this).scrollTop() + $(this).innerHeight();
                $(".elfade").each(function() {
                    /* Check the location of each desired element */
                    var objectBottom = $(this).offset().top + $(this).outerHeight();

                    /* If the element is completely within bounds of the window, fade it in */
                    if (objectBottom < windowBottom) { //object comes into view (scrolling down)
                        if ($(this).css("opacity") == 0) {
                            $(this).fadeTo(500, 1);
                        }
                    } else { //object goes out of view (scrolling up)
                        if ($(this).css("opacity") == 1) {
                            $(this).fadeTo(500, 0);
                        }
                    }
                });
            }).scroll(); //invoke scroll-handler on page-load
        });
        $(window).scroll(function(event) {
            var scroll = $(window).scrollTop();
            if (scroll > 100) {
                $('.bottomlink').fadeIn().css('display', 'inline');
            } else if (scroll < 100) {
                $('.bottomlink').fadeOut("slow", function() {
                    $(this).css({
                        display: "none"
                    });
                });
            }
        });
        $(window).scroll(function(event) {
            var scroll = $(window).scrollTop();
            if (scroll > 100) {
                $('.bottomlink').fadeIn().css('display', 'inline');
            } else if (scroll < 100) {
                $('.bottomlink').fadeOut("slow", function() {
                    $(this).css({
                        display: "none"
                    });
                });
            }
        });
        var animatePulse = setInterval(pulse, 3500);

        function pulse() {
            if ($('.fa-bell').hasClass('shake-horizontal')) {
                $('.fa-bell').removeClass('shake-horizontal');
            } else {
                $('.fa-bell').addClass('shake-horizontal');
            }

        }
        $("#closewindow").click(function() {
            $(".alertbox").fadeOut();
        });
        $(document).ready(function() {
            $(".alertbox").delay(2500).fadeIn(500);
        });
        $(".alertbox").click(function() {
            $(".alertbox").fadeOut();
        });

        function scrolltoform() {
            $('html, body').animate({
                scrollTop: $(".p-body--emailandaddress").offset().top - 240
            }, 1000);
        }
        $(".sub_but").click(function() {
            scrolltoform();
        });
        $(".bottomlink").click(function() {
            scrolltoform();
        });
        $(".sub_but_claim").click(function() {
            scrolltoform();
        });
        $(".sub_but_blue").click(function() {
            scrolltoform();
        });
        $(".sub_but_purple").click(function() {
            scrolltoform();
        });
        var shown = 0;



    </script>






</body>

</html>