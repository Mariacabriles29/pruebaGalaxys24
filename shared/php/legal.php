<?php 
require 'idioma.php';

if($lang == 'es' || $lang == 'ES'){

    $PRIVACY3=ASSET_PATH."/legal/es/privacy-es.html";
    $TOS3=ASSET_PATH."/legal/es/tos-es.html";
    $GDPR3=ASSET_PATH."/legal/es/gdpr-es.html";

}else {

    $PRIVACY3=ASSET_PATH."/legal/en/privacy.html";
    $TOS3=ASSET_PATH."/legal/en/tos.html";
    $GDPR3=ASSET_PATH."/legal/en/gdpr.html";

}




?>