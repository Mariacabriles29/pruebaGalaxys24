<?php

    // Constantes iguales para todos los idiomas
    //$ARTICLE='iPhone 11';
    //$COMPANY='Apple';

    $ARTICLE='PRODUCT';
    $COMPANY='COMPANY';


    $NAME='RegularDrive';
    $NAV_RIGHTS_2='PCG MARKETING EVOLUTION LTD';
    $FOOT_EMAIL='info@regulardrive.net';
    $FOOT_PHONE='+34 800 880 897';
    $FOOT_GDPR="GDPR";
    $FOOT_FAQ="FAQ";
    $PRIVACY=ASSET_PATH."/legal/en/privacy.html";
    $TOS=ASSET_PATH."/legal/en/tos.html";
    $GDPR=ASSET_PATH."/legal/en/gdpr.html";
    $FAQ="https://regulardrive.net/faq/index.php";
    $FORM_CVC="CVC/CVV";
    $FORM_CVV="CVV";


    function FOOT_WIN_TEXT_FUNCTION($TEXT ,$COMPANY = "Apple",$PRODUCT = "iPhone 11"){
        $ARR_FOOT_WIN_TEXT = explode(" ",$TEXT);
        $KEY_COMPANY = array_search('COMPANY', $ARR_FOOT_WIN_TEXT);
        $KEY_PRODUCT = array_search('(PRODUCT)', $ARR_FOOT_WIN_TEXT); 
        $ARR_FOOT_WIN_TEXT[$KEY_COMPANY] = $COMPANY;
        $ARR_FOOT_WIN_TEXT[$KEY_PRODUCT] = $PRODUCT;
        return implode(" ",$ARR_FOOT_WIN_TEXT);
    }

    //Cambiar de switch a if
    
    switch($lang) {

        case 'de':
            // index_auth.php -----------
            // Content
            $PRICE='3€';
            // Form
            $FORM_TITLE="Bitte tragen Sie Ihre Daten ein";
            $FORM_FIRSTNAME="Vorname";
            $FORM_LASTNAME="Nachname";
            $FORM_EMAIL="E-mail";
            $FORM_PASS="Passwort";
            $FORM_ACCEPT=" Ich akzeptiere die AGB.";
            $FORM_READ_MORE=" Mehr lesen.";
            $FORM_CARDHOLDER="Name des Karteninhabers";
            $FORM_CARDNUMBER="Kartennummer";
            $FORM_EXP_MONTH="Ablaufmonat";
            $FORM_MONTH="Monat";
            $FORM_EXP_YEAR="Ablaufjahr";
            $FORM_YEAR="Jahr";
            $FORM_BTN_1="Weiter";
            $FORM_BTN_2="Bezahlen";
            $FORM_ERROR_FIRSTNAME_1="Namen eingeben";
            $FORM_ERROR_FIRSTNAME_2="Mindestens 1 Zeichen";
            $FORM_ERROR_LASTNAME_1="Nachname einfügen";
            $FORM_ERROR_LASTNAME_2="Mindestens 1 Zeichen";
            $FORM_ERROR_EMAIL_1="Geben Sie eine gültige E-Mail Adresse ein";
            $FORM_ERROR_EMAIL_2="Die E-Mail Adresse existiert bereits";
            $FORM_ERROR_PASS_1="Geben Sie zwischen 5–15 lateinische Zeichen ein (erlaubt sind a–Z, 0–9 oder einige Sonderzeichen)";
            $FORM_ERROR_CARDHOLDER_1="Geben Sie den Namen des Inhabers ein";
            $FORM_ERROR_CARDNUMBER_1="Invalid credit card number!";
            $FORM_ERROR_CARDNUMBER_2="VISA cards temporarily not supported";
            $FORM_ERROR_CARDNUMBER_3="Gültige Kartennummer eingeben";
            $FORM_ERROR_CARDNUMBER_4="Nur Mastercard und Visa werden akzeptiert";
            $FORM_ERROR_CARDNUMBER_5="Karte dieser Bank wird nicht akzeptiert <br>(versuchen Sie es mit einer anderen Karte)";
            $FORM_ERROR_MONTH_1="Gültigen Exp Monat eingeben";
            $FORM_ERROR_YEAR_1="Gültigen Exp Jahr eingeben";
            $FORM_ERROR_CVV_1="CVV eingeben";
            //asterisco
            $ASTERISCO='*Mit der Nutzung der PROBE abonnieren Sie den Service regulardrive.net für zwei Tage zum in der Aktion angegebenen Preis. Wenn Sie Ihr Konto nicht innerhalb von zwei Tagen kündigen, wird Ihnen alle 30 Tage die Gebühr für das Premium-Konto in Höhe von neunundvierzig Euro und neunundneunzig Cent in Rechnung gestellt In den Allgemeinen Geschäftsbedingungen finden Sie die vollständigen Informationen und Bedingungen für das Abonnement.';
            // Footer
            $FOOT_WIN_TEXT="Mit Ihrem Premium-Konto nehmen Sie an der Verlosung dieses Werbeartikels/Dienstleistung (".$ARTICLE.") teil. Der Gewinner wird nach dem Zufallsprinzip aus der Gruppe aller aktiven Nutzer ausgewählt. Die nächste Ziehung aus der Gruppe aller aktiven Nutzer findet am 31.12.2024 statt. Weitere Informationen finden Sie im Abschnitt Nutzungsbedingungen. Zwecks Versand oder Lieferung des Preises kontaktieren wir den Gewinner. Wir stehen nicht in Verbindung mit ".$COMPANY." und seinen Partnern.";
            $FOOT_WHAT="Was ist regulardrive.net?";
            $FOOT_WHAT_TEXT="Es ist ein monatliches Abonnement eines Cloud-Speicherdienstes, der den Mitgliedern Zugang zu einer Plattform bietet, auf die sie ihre Dateien hoch laden, diese speichern, verwalten und herunterladen können.";
            $FOOT_COMMIT="Wozu verpflichte ich mich?";
            $FOOT_COMMIT_TEXT='Mit der Nutzung von TRIAL abonnieren Sie den Premium-Service regulardrive.net. Wenn Sie Ihr Konto nicht kündigen, müssen Sie nach zwei Probetagen jeden Monat den Wert des Premium-Abonnements bezahlen. Die Abonnementbedingungen finden Sie hier: <a id="tos1" href="'. $TOS3 .'" style="color: rgb(102, 86, 86);" target="_blank">Nutzungsbedingungen</a>. Einfache Abmeldung. Wenn Sie Ihr Abonnement während der Probezeit nicht kündigen, müssen Sie Ihr Abonnement jeden Monat bezahlen und es wird automatisch monatlich verlängert, bis Sie Ihr Abonnement kündigen. Das Abonnement kostet neunundvierzig Euro und neunundneunzig Cent pro Monat und ist mit einer Kredit- oder Debitkarte zu zahlen.';
            $FOOT_WIN="Wie kann ich gewinnen?";
            $FOOT_SOCIAL="Häufig Gestellte Fragen";
            $FOOT_SUPPORT="Unterstützung";
            $FOOT_PRIVACY="Datenschutzerklärung";
            $FOOT_TERMS="Allgemeine Geschäftsbedingungen";
            $FOOT_PRE="Häufig gestellte Fragen";
            $FOOT_CONTACT="Kontakt";
            $FOOT_CANCEL="Mitgliedschaft kündigen";
            $FOOT_RIGHTS="© 2024 Alle Rechte vorbehalten - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 Alle rechte vorbehalten";
            // declined/index.php
            $DECLINED_TITLE_1="Abgelehnt Transaktion";
            $DECLINED_TITLE_2="Etwas ist schief gelaufen!";
            $DECLINED_SUBTITLE="Überprüfen und korrigieren Sie Ihre Daten, indem Sie auf die Schaltfläche unten klicken.";
            $DECLINED_BTN="Wiederholen";
            // thank-you/index.php
            $THANKYOU_TITLE="Vielen Dank!";
            $THANKYOU_SUBTITLE="Ihre Zahlung wurde korrekt durchgeführt. In Kürze erhalten Sie Informationen per E-Mail.";
            break;

        case 'en':
            // index_auth.php -----------
            // Content
            $PRICE='$3';
            //asterisco
            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost forty-nine with ninety-nine american dollars every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs forty-nine american dollar and ninety-nine cents per month, payable by credit or debit card.";

            // Form
            $FORM_TITLE="Please fill in your details";
            $FORM_FIRSTNAME="First Name";
            $FORM_LASTNAME="Last Name";
            $FORM_EMAIL="E-mail";
            $FORM_PASS="Password";
            $FORM_ACCEPT=" I accept the terms of use.";
            $FORM_READ_MORE=" Read more.";;
            $FORM_CARDHOLDER="Cardholder name";
            $FORM_CARDNUMBER="Card number";
            $FORM_EXP_MONTH="Expiration month";
            $FORM_MONTH="Month";
            $FORM_EXP_YEAR="Expiration year";
            $FORM_YEAR="Year";
            $FORM_BTN_1="Continue";
            $FORM_BTN_2="Pay now";
            $FORM_ERROR_FIRSTNAME_1="Enter First Name";
            $FORM_ERROR_FIRSTNAME_2="Minimum 1 characters required";
            $FORM_ERROR_LASTNAME_1="Enter Last Name";
            $FORM_ERROR_LASTNAME_2="Minimum 1 characters required";
            $FORM_ERROR_EMAIL_1="Enter valid e-mail is required";
            $FORM_ERROR_EMAIL_2="E-mail address already exists";
            $FORM_ERROR_PASS_1="Enter between 5-15 Latin characters (Allowed from a-Z, 0-9 or some special characters)";
            $FORM_ERROR_CARDHOLDER_1="Enter Card Holder Name";
            $FORM_ERROR_CARDNUMBER_1="Invalid credit card number!";
            $FORM_ERROR_CARDNUMBER_2="This card brand is temporarily not supported.";
            $FORM_ERROR_CARDNUMBER_3="Enter valid Card Number";
            $FORM_ERROR_CARDNUMBER_4="Only MasterCard and Visa are accepted";
            $FORM_ERROR_CARDNUMBER_5="Card from this particular bank not accepted <br>(Try another card)";
            $FORM_ERROR_MONTH_1="Enter Valid Exp Month";
            $FORM_ERROR_YEAR_1="Enter Valid Exp Year";
            $FORM_ERROR_CVV_1="Enter CVV";
            // Footer
            $FOOT_WIN_TEXT="With your premium account, you participate in the draw for this promotional product/service (".$ARTICLE.") by randomly selecting the winner from one of its active users. The next draw will take place on 31-12-2024 among all active users. More information in the Terms of Service section. The winner will be contacted to proceed with the shipment or delivery of the prize. We have no connection with ".$COMPANY." and its partners.";
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a service for the creation of the files of websites/landing pages by monthly subscription that provides its members access to a platform where they can design and create the files of their websites. Easily create a website/ landing pages or portfolios. * The tool is for creating files, to have an online website you have to upload files to your own server / hosting.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_WIN="How can I win?";
            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";
                    
            // declined/index.php
            $DECLINED_TITLE_1="Declined Transaction";
            $DECLINED_TITLE_2="Something went wrong!";
            $DECLINED_SUBTITLE="Check and correct your data by clicking on the button below";
            $DECLINED_BTN="Try again";
    
            // thank-you/index.php
            $THANKYOU_TITLE="Thank you!";
            $THANKYOU_SUBTITLE="Your payment was successfully made. You will soon receive information by email";
            break;


        case 'es':
            // Urls
            $PRIVACY=ASSET_PATH."/legal/es/privacy-es.html";
            $TOS=ASSET_PATH."/legal/es/tos-es.html";
            $GDPR=ASSET_PATH."/legal/es/gdpr-es.html";
            // index_auth.php -----------
            // Content
            $PRICE='$3';
            // Form
            $FORM_TITLE="Introduce tus datos abajo";
            $FORM_FIRSTNAME="Nombre";
            $FORM_LASTNAME="Apellido";
            $FORM_EMAIL="E-mail";
            $FORM_PASS="Contraseña";
            $FORM_ACCEPT=" Acepto los términos y condiciones.";
            $FORM_READ_MORE=" Leer más.";
            $FORM_CARDHOLDER="Nombre del titular";
            $FORM_CARDNUMBER="Número de tarjeta";
            $FORM_EXP_MONTH="Mes de caducidad";
            $FORM_MONTH="Mes";
            $FORM_EXP_YEAR="Año de caducidad";
            $FORM_YEAR="Año";
            $FORM_BTN_1="Continuar";
            $FORM_BTN_2="Pagar ahora";
            $FORM_ERROR_FIRSTNAME_1="Introduce Nombre";
            $FORM_ERROR_FIRSTNAME_2="Mínimo 1 carácter";
            $FORM_ERROR_LASTNAME_1="Introduce Apellido";
            $FORM_ERROR_LASTNAME_2="Mínimo 1 carácter";
            $FORM_ERROR_EMAIL_1="Introduce un e-mail válido";
            $FORM_ERROR_EMAIL_2="E-mail ya existe";
            $FORM_ERROR_PASS_1="Introduzca entre 5 y 15 carácteres latinos (permitidos de a-Z, 0-9 o algunos carácteres especiales)";
            $FORM_ERROR_CARDHOLDER_1="Introduce nombre del titular de la tarjeta";
            $FORM_ERROR_CARDNUMBER_1="¡Número de tarjeta de crédito inválido!";
            $FORM_ERROR_CARDNUMBER_2="Las tarjetas VISA no son admitidas temporalmente.";
            $FORM_ERROR_CARDNUMBER_3="Introduce un numero de tarjeta válido";
            $FORM_ERROR_CARDNUMBER_4="Solo aceptamos Visa o MasterCard";
            $FORM_ERROR_CARDNUMBER_5="No se acepta la tarjeta de este banco en particular <br>(Pruebe con otra tarjeta)";
            $FORM_ERROR_MONTH_1="Introduce un mes válido";
            $FORM_ERROR_YEAR_1="Introduce un año válido";
            $FORM_ERROR_CVV_1="Introduce CVV";
            //asterisco
            $ASTERISCO='*Al usar la PRUEBA, se suscribirá al servicio de regulardrive.net durante 2 días al precio que indica la promoción. Después de 2 días, si no cancela su cuenta, se le cobrará el precio de la cuenta premium que tendrá un costo de cuarenta y nueve con noventa y nueve dólares americanos cada 30 días. Puede encontrar toda esta información y condiciones para la suscripción en Términos y condiciones.';
            // Footer
            $FOOT_WIN_TEXT="Con tu cuenta premium, participas en el sorteo de este producto/servicio promocional (".$ARTICLE.") seleccionando al azar al ganador de entre uno de sus usuarios activos. El próximo sorteo se realizará el 31-12-2024 entre todos los usuarios activos. Más información en la sección de Condiciones de Servicio. Se contactará con el ganador para proceder con el envío o entrega del premio. No tenemos conexión con ".$COMPANY." y sus socios.";
            $FOOT_WHAT="¿Qué es regulardrive.net?";
            $FOOT_WHAT_TEXT="Es un servicio para la creación de los ficheros de paginas webs/landing pages por suscripción mensual que proporciona a sus miembros acceso a una plataforma donde poder diseñar y crear los ficheros de sus paginas webs. Crea fácilmente paginas web/ landing pages o portfolios. *La herramienta sirve para la creación de los ficheros, para tener una pagina web online tienes que subir los ficheros a tu propio servidor/hosting.";
            $FOOT_COMMIT="¿A qué me comprometo?";
            $FOOT_COMMIT_TEXT='Al usar TRIAL, usted se suscribe al servicio premium de regulardrive.net. Después de dos días de prueba, si no cancela su cuenta, tendrá que pagar el valor de la suscripción premium cada mes. Las condiciones de suscripción están disponibles aquí: <a id="tos1" href="'. $TOS3 .'" target="_blank">Términos y Condiciones</a> . Fácil desuscripción. Si no cancela la suscripción durante su período de prueba, tendrá que pagar su suscripción cada mes y se renovará mensualmente automáticamente hasta que cancele su suscripción. La suscripción cuesta cuarenta y nueve dólares americanos y noventa y nueve centavos por mes, pagaderos con tarjeta de crédito o débito.';
            $FOOT_WIN="¿Cómo puedo ganar?";
            $FOOT_SUPPORT="Soporte";
            $FOOT_PRIVACY="Política de privacidad";
            $FOOT_TERMS="Términos y condiciones";
            $FOOT_PRE="Preguntas Más Frecuentes";
            $FOOT_CONTACT="Contacto";
            $FOOT_CANCEL="Cancelar la membresía";
            $FOOT_RIGHTS="© 2024 Todos los derechos reservados - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 Todos los derechos reservados";

            $FAQ="https://regulardrive.net/faq/index-es.php";   
            // declined/index.php
            $DECLINED_TITLE_1="Transacción Rechazada";
            $DECLINED_TITLE_2="Algo salió mal!";
            $DECLINED_SUBTITLE="Verifique y corrija sus datos haciendo clic en el botón de abajo";
            $DECLINED_BTN="Intenta nuevamente";
            // thank-you/index.php
            $THANKYOU_TITLE="Gracias!";
            $THANKYOU_SUBTITLE="Su pago se realizó con éxito. Pronto recibirá información por correo electrónico.";
            break;


        case 'ie':
            // index_auth.php -----------
            // Content
            $PRICE='€3';
            // ASTERISCOS
            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost forty-nine with ninety-nine euros every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            // Footer
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs forty-nine euros and ninety-nine cents per month, payable by credit or debit card.";

             // Form
             $FORM_TITLE="Please fill in your details";
             $FORM_FIRSTNAME="First Name";
             $FORM_LASTNAME="Last Name";
             $FORM_EMAIL="E-mail";
             $FORM_PASS="Password";
             $FORM_ACCEPT=" I accept the terms of use.";
             $FORM_READ_MORE=" Read more.";;
             $FORM_CARDHOLDER="Cardholder name";
             $FORM_CARDNUMBER="Card number";
             $FORM_EXP_MONTH="Expiration month";
             $FORM_MONTH="Month";
             $FORM_EXP_YEAR="Expiration year";
             $FORM_YEAR="Year";
             $FORM_BTN_1="Continue";
             $FORM_BTN_2="Pay now";
             $FORM_ERROR_FIRSTNAME_1="Enter First Name";
             $FORM_ERROR_FIRSTNAME_2="Minimum 1 characters required";
             $FORM_ERROR_LASTNAME_1="Enter Last Name";
             $FORM_ERROR_LASTNAME_2="Minimum 1 characters required";
             $FORM_ERROR_EMAIL_1="Enter valid e-mail is required";
             $FORM_ERROR_EMAIL_2="E-mail address already exists";
             $FORM_ERROR_PASS_1="Enter between 5-15 Latin characters (Allowed from a-Z, 0-9 or some special characters)";
             $FORM_ERROR_CARDHOLDER_1="Enter Card Holder Name";
             $FORM_ERROR_CARDNUMBER_1="Invalid credit card number!";
             $FORM_ERROR_CARDNUMBER_2="This card brand is temporarily not supported.";
             $FORM_ERROR_CARDNUMBER_3="Enter valid Card Number";
             $FORM_ERROR_CARDNUMBER_4="Only MasterCard and Visa are accepted";
             $FORM_ERROR_CARDNUMBER_5="Card from this particular bank not accepted <br>(Try another card)";
             $FORM_ERROR_MONTH_1="Enter Valid Exp Month";
             $FORM_ERROR_YEAR_1="Enter Valid Exp Year";
             $FORM_ERROR_CVV_1="Enter CVV";
             // Footer
             $FOOT_WIN_TEXT="With your premium account, you participate in the draw for this promotional product/service (".$ARTICLE.") by randomly selecting the winner from one of its active users. The next draw will take place on 31-12-2024 among all active users. More information in the Terms of Service section. The winner will be contacted to proceed with the shipment or delivery of the prize. We have no connection with ".$COMPANY." and its partners.";
            $FOOT_WHAT='What is regulardrive.net?';
             $FOOT_WHAT_TEXT='It is a service for the creation of the files of websites/landing pages by monthly subscription that provides its members access to a platform where they can design and create the files of their websites. Easily create a website/ landing pages or portfolios. * The tool is for creating files, to have an online website you have to upload files to your own server / hosting.';
             $FOOT_COMMIT="What do I commit to?";
             $FOOT_WIN="How can I win?";
             $FOOT_SUPPORT="Support";
             $FOOT_PRIVACY="Privacy Policy";
             $FOOT_TERMS="Terms of Conditions";
             $FOOT_PRE="Frequently Asked Questions";
             $FOOT_CONTACT="Contact";
             $FOOT_CANCEL="Cancel membership";
             $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
             $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";
                     
             // declined/index.php
             $DECLINED_TITLE_1="Declined Transaction";
             $DECLINED_TITLE_2="Something went wrong!";
             $DECLINED_SUBTITLE="Check and correct your data by clicking on the button below";
             $DECLINED_BTN="Try again";
     
             // thank-you/index.php
             $THANKYOU_TITLE="Thank you!";
             $THANKYOU_SUBTITLE="Your payment was successfully made. You will soon receive information by email";
            break;


        case 'fi': 
            // index_auth.php -----------
            // Content
            $PRICE='3€';
            //asterisco
            $ASTERISCO='* Osallistumalla tähän KOKEILUUN tilaat regulardrive.net-palvelun 2 päiväksi tarjouksessa ilmoitettuun hintaan. Mikäli et peru tilaustasi 2 päivän kokeilun jälkeen, se jatkuu premium-tilin hinnalla, jolloin maksat siitä neljäkymmentäyhdeksän euroa yhdeksänkymmentäyhdeksän senttiä 30 päivää kohden. Kaikki tilaukseen liittyvät tiedot ja ehdot ovat saatavilla Käyttöehdot-osiossa.';
            // Footer
            $FOOT_WIN_TEXT="aqui va el cp";
            $FOOT_COMMIT_TEXT='Osallistumalla KOKEILUUN tilaat regulardrive.net-sivuston premium-palvelun. Jos et peru tilaustasi kahden&nbsp;päivän kokeilun jälkeen, maksat premium-palvelun kuukausittaisen hinnan. Tilauspalvelun ehdot ovat saatavilla tässä:&nbsp;<a id="tos1" href="'. $TOS3 .'" target="_blank">Käyttöehdot</a>. Peru tilauksesi helposti ja vaivatta. Jos et peru tilaustasi kokeilujakson aikana, maksat siitä kuukausittaisen hinnan. Palvelun tilaus uusiutuu automaattisesti joka kuukausi, kunnes irtisanot sen. Tilaus maksaa kuukaudessa neljäkymmentäyhdeksän&nbsp;euroa yhdeksänkymmentäyhdeksän senttiä, ja se voidaan maksaa luotto- tai pankkikortilla.';

             // Form
             $FORM_TITLE="Please fill in your details";
             $FORM_FIRSTNAME="Etunimi";
             $FORM_LASTNAME="Sukunimi";
             $FORM_EMAIL="Sähköpostiosoite";
             $FORM_PASS="Salasana";
             $FORM_ACCEPT=" Hyväksyn käyttö ehdot.";
             $FORM_READ_MORE=" Lue lisää.";
             $FORM_CARDHOLDER="Cardholder name";
             $FORM_CARDNUMBER="Card number";
             $FORM_EXP_MONTH="Expiration month";
             $FORM_MONTH="Month";
             $FORM_EXP_YEAR="Expiration year";
             $FORM_YEAR="Year";
             $FORM_BTN_1="JATKAA";
             $FORM_BTN_2="Pay now";
             $FORM_ERROR_FIRSTNAME_1="Syötä etunimi";
             $FORM_ERROR_FIRSTNAME_2="Vähintään 1 merkkiä";
             $FORM_ERROR_LASTNAME_1="Kirjoita suku nimi";
             $FORM_ERROR_LASTNAME_2="Vähintään 1 merkkiä";
             $FORM_ERROR_EMAIL_1="Anna kelvollinen Sähkö posti osoite";
             $FORM_ERROR_EMAIL_2="Sähkö posti osoite jo olemassa";
             $FORM_ERROR_PASS_1="Syötä 5–15 latinalaista merkkiä (a–z, 0–9 tai jotkut erikoismerkit sallittu)";
             $FORM_ERROR_CARDHOLDER_1="Anna kortin haltijan nimi";
             $FORM_ERROR_CARDNUMBER_1="Invalid credit card number!";
             $FORM_ERROR_CARDNUMBER_2="This card brand is temporarily not supported.";
             $FORM_ERROR_CARDNUMBER_3="Anna kelvollinen kortin numero";
             $FORM_ERROR_CARDNUMBER_4="Only MasterCard and Visa are accepted";
             $FORM_ERROR_CARDNUMBER_5="Kortti tästä tietystä pankista ei hyväksytä <br>(kokeile toista korttia)";
             $FORM_ERROR_MONTH_1="Anna kelvollinen exp-kuukausi";
             $FORM_ERROR_YEAR_1="Anna kelvollinen exp-vuosi";
             $FORM_ERROR_CVV_1="Syötä CVV";
             // Footer
            $FOOT_WIN_TEXT="aqui va el cp";
             $FOOT_WHAT='Mikä regulardrive.net on?';
             $FOOT_WHAT_TEXT='Se on kuukausittaisilla tilauksilla varustettu verkkosivutiedostojen / aloitussivujen luomispalvelu, joka tarjoaa jäsenilleen pääsyn alustalle, jolla he voivat suunnitella ja luoda verkkosivujensa tiedostoja. Luo helposti verkkosivuja / aloitussivuja tai portfolioita. * Työkalua käytetään tiedostojen luomiseen. Jos sinulla on online-verkkosivu, sinun on ladattava tiedostot omaan palvelimellesi / isäntään.';
             $FOOT_COMMIT="Sitoudunko minä mihinkään?";
             $FOOT_WIN="Kuinka voin voittaa?";
             $FOOT_SUPPORT="Support";
             $FOOT_PRIVACY="Privacy Policy";
             $FOOT_TERMS="Terms of Conditions";
             $FOOT_PRE="Frequently Asked Questions";
             $FOOT_CONTACT="Contact";
             $FOOT_CANCEL="Cancel membership";
             $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
             $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";
                     
             // declined/index.php
             $DECLINED_TITLE_1="Maksu hylätty";
             $DECLINED_TITLE_2="Something went wrong!";
             $DECLINED_SUBTITLE="Tarkista ja korjaa tietosi klikkaamalla alla olevaa painiketta";
             $DECLINED_BTN="Yritä uudestaan";
     
             // thank-you/index.php
             $THANKYOU_TITLE="Kiitos!";
             $THANKYOU_SUBTITLE="Maksusi on suoritettu onnistuneesti. Saat pian tietoja sähköpostitse";
        break;

        case 'fr':
            // index_auth.php -----------
            // Content
            $PRICE='3€';
            // Form
            $FORM_TITLE="Saisissez vos coordonnées";
            $FORM_FIRSTNAME="Nom";
            $FORM_LASTNAME="Prénom";
            $FORM_EMAIL="Adresse e-mail";
            $FORM_PASS="Password";
            $FORM_ACCEPT=" J'accepte les termes et conditions.";
            $FORM_READ_MORE=" Lire la suite.";
            $FORM_CARDHOLDER="Nom du titulaire";
            $FORM_CARDNUMBER="Numéro de carte";
            $FORM_EXP_MONTH="Mois d'expiration";
            $FORM_MONTH="Mois";
            $FORM_EXP_YEAR="Année d'expiration";
            $FORM_YEAR="Année";
            $FORM_BTN_1="Continuer";
            $FORM_BTN_2="PAYEZ MAINTENANT";
            $FORM_ERROR_FIRSTNAME_1="Entrez le nom";
            $FORM_ERROR_FIRSTNAME_2="1 caractères minimum requis";
            $FORM_ERROR_LASTNAME_1="Entrez votre nom de famille";
            $FORM_ERROR_LASTNAME_2="1 caractères minimum requis";
            $FORM_ERROR_EMAIL_1="Il est nécessaire d'entrer un email valide";
            $FORM_ERROR_EMAIL_2="l'adresse e-mail existe déjà";
            $FORM_ERROR_PASS_1="Saisissez entre 5 et 15 caractères latins (autorisés de a à Z, de 0 à 9 ou certains caractères spéciaux)";
            $FORM_ERROR_CARDHOLDER_1="Entrez le nom du détenteur";
            $FORM_ERROR_CARDNUMBER_1="Invalid credit card number!";
            $FORM_ERROR_CARDNUMBER_2="This card brand is temporarily not supported.";
            $FORM_ERROR_CARDNUMBER_3="Entrez un numéro de carte valide";
            $FORM_ERROR_CARDNUMBER_4="Seules les cartes MasterCard et Visa sont acceptées";
            $FORM_ERROR_CARDNUMBER_5="Carte de cette banque particulière non acceptée <br>(Essayez une autre carte)";
            $FORM_ERROR_MONTH_1="Entrez un mois valide";
            $FORM_ERROR_YEAR_1="Entrez une année valide";
            $FORM_ERROR_CVV_1="Entrez CVV";
            // ASTERISCOS
            $ASTERISCO='*En utilisant le TRIAL, vous serez abonné au service premium de regulardrive.net d’une valeur de quarante-neuf euros et quatre-vingt-dix-neuf centimes par mois. Passés les deux jours d’essai, si vous n’annulez pas votre compte, vous devrez payer la valeur de l’abonnement premium. Vous pouvez à tout moment annuler votre période d’essai. Plus d’informations au sujet de l’abonnement dans la section Conditions générales.';
            // Footer
            $FOOT_WIN_TEXT="Avec votre compte premium, vous participez au tirage au sort pour ce produit / service promotionnel (une carte cadeau Auchan de 500 €) en sélectionnant au hasard le gagnant parmi l’un de ses utilisateurs actifs. Le prochain tirage aura lieu le 31-12-2024 parmi tous les utilisateurs actifs. Plus d'informations dans la section Conditions d'utilisation. Le gagnant sera contacté pour procéder à l'expédition ou à la livraison du prix. Nous n'avons aucun lien avec Auchan et ses partenaires.";     
            $FOOT_WHAT="Qu'est-ce que regulardrive.net?";
            $FOOT_WHAT_TEXT="Il s'agit d'un service de création de fichiers de sites Web/pages d'accueil par abonnement mensuel qui permet à ses membres d'accéder à une plate-forme où ils peuvent concevoir et créer les fichiers de leurs sites Web. Créez facilement un site Web/pages d'atterrissage ou des portfolios. *l'outil est utilisé pour la création de fichiers, pour avoir un site web en ligne, vous devez télécharger les fichiers sur votre propre serveur / hébergement.";
            $FOOT_COMMIT="A quoi je m’engage?";
            $FOOT_COMMIT_TEXT="En utilisant TRIAL, vous vous abonnez au service premium sur regulardrive.net. Passés les deux jours d’essai, si vous n’annulez pas votre compte, vous devrez payer la valeur de l’abonnement premium tous les mois. Les conditions d’abonnement sont disponibles ici : <a id='tos1' href='". $TOS3 ."' target='_blank'>Conditions de service</a>. Désinscription facile. Si vous n’annulez pas l’abonnement pendant votre période d’essai, vous devrez payer votre abonnement tous les mois et il sera automatiquement renouvelé mensuellement jusqu'à ce que vous résiliez votre abonnement. L’abonnement coûte quarante-neuf euros et quatre-vingt-dix-neuf centimes par mois, payables par carte de crédit ou de débit.";
            $FOOT_WIN="Comment puis-je gagner?";
            $FOOT_SOCIAL="Questions Fréquentes";
            $FOOT_SUPPORT="Soutien";
            $FOOT_PRIVACY="Politique de confidentialité";
            $FOOT_TERMS="termes et conditions";
            $FOOT_PRE="Foire aux questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Annuler l'adhésion";
            $FOOT_RIGHTS="© 2024 Tous droits réservés - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 Tous les droits réservés";
            // declined/index.php
            $DECLINED_TITLE_1="Transaction Refusée";
            $DECLINED_TITLE_2="Quelque chose s'est mal passé!";
            $DECLINED_SUBTITLE="Vérifiez et corrigez vos données en cliquant sur le bouton ci-dessous";
            $DECLINED_BTN="Réessayer";
            // thank-you/index.php
            $THANKYOU_TITLE="Je vous remercie!";
            $THANKYOU_SUBTITLE="Votre paiement a été effectué correctement. Bientôt, vous recevrez des informations par email";
            break;


        case 'it':
            // index_auth.php -----------
            // Content
            $PRICE='3€';
            // Form
            $FORM_TITLE="Inserisci i tuoi dati";
            $FORM_FIRSTNAME="Nome";
            $FORM_LASTNAME="Cognome";
            $FORM_EMAIL="Indirizzo e-mail";
            $FORM_PASS="Password";
            $FORM_ACCEPT=" Accetto i termini e le condizioni.";
            $FORM_READ_MORE=" Leggi di più.";
            $FORM_CARDHOLDER="Nome del titolare";
            $FORM_CARDNUMBER="Numero di carta";
            $FORM_EXP_MONTH="Mese di scadenza";
            $FORM_MONTH="Mese";
            $FORM_EXP_YEAR="Anno di scadenza";
            $FORM_YEAR="Anno";
            $FORM_BTN_1="Continua";
            $FORM_BTN_2="Paga ora";
            $FORM_ERROR_FIRSTNAME_1="Inserisci nome";
            $FORM_ERROR_FIRSTNAME_2="Minimo 1 caratteri richiesti";
            $FORM_ERROR_LASTNAME_1="Inserisci il cognome";
            $FORM_ERROR_LASTNAME_2="Minimo 1 caratteri richiesti";
            $FORM_ERROR_EMAIL_1="Inserisci Email valida è richiesto";
            $FORM_ERROR_EMAIL_2="L'indirizzo email è già esistente";
            $FORM_ERROR_PASS_1="Inserisci tra 5-15 caratteri latini (consentiti dalla A alla Z,  da 0 a 9 o alcuni caratteri speciali)";
            $FORM_ERROR_CARDHOLDER_1="Inserisci il nome del titolare";
            $FORM_ERROR_CARDNUMBER_1="Invalid credit card number!";
            $FORM_ERROR_CARDNUMBER_2="This card brand is temporarily not supported.";
            $FORM_ERROR_CARDNUMBER_3="Inserisci un numero di carta valido";
            $FORM_ERROR_CARDNUMBER_4="Si accettano solo MasterCard e Visa";
            $FORM_ERROR_CARDNUMBER_5="Carta di questa particolare banca non accettata <br>(Prova un'altra carta)";
            $FORM_ERROR_MONTH_1="Inserisci Mese Exp valido";
            $FORM_ERROR_YEAR_1="Inserisci anno Exp valido";
            $FORM_ERROR_CVV_1="Inserisci CVV";
            // ASTERISCOS
            $ASTERISCO='*Usufruendo della PROVA risulti iscritto al servizio regulardrive.net per 2 giorni al prezzo indicato nella promozione. Dopo 2 giorni, se non cancelli il tuo account, ti verrà addebitato il prezzo dell\'account premium con un costo di quarantanove euro e novantanove centesimi ogni 30 giorni. Tutte queste informazioni e condizioni di iscrizione sono riportate nei termini e condizioni.';
            // Footer
            $FOOT_WIN_TEXT="Questo sito web è una pagina di registrazione per accedere al nostro strumento regulardrive.net. Non memorizziamo alcun file di terze parti e registrandovi otterrete l'accesso alla piattaforma per creare i file per le pagine web. Non è possibile caricare alcun file o file di terze parti sulla nostra piattaforma, è possibile scaricare solo i disegni delle pagine web che si fanno con la nostra piattaforma. Questo sito web è un esempio delle pagine che si possono creare con regulardrive.net";
            $FOOT_WHAT="Che cosa è regulardrive.net?";
            $FOOT_WHAT_TEXT="È un servizio di cloud storage che fornisce ai rispettivi membri previo versamento di un abbonamento mensile l'accesso alla propria piattaforma dove poter caricare, memorizzare, gestire e scaricare file.";
            $FOOT_COMMIT="Che cosa mi impegno a fare?";
            $FOOT_COMMIT_TEXT="Nel momento in cui usufruisci della prova TRIAL ti iscrivi al servizio premium di regulardrive.net. Dopo due giorni di prova, se non cancelli il tuo account, dovrai pagare il valore dell'abbonamento premium ogni mese. Le condizioni di iscrizione sono disponibili qui: <a id='tos1' href='". $TOS3 ."' target='_blank'>Termini del servizio</a>. Facile disdetta dell'abbonamento. Se non cancelli il tuo abbonamento durante il periodo di prova, dovrai pagare l'abbonamento ogni mese che si rinnoverà automaticamente mensilmente fino alla cancellazione del medesimo. L'abbonamento costa quarantanove euro e novantanove centesimi al mese da versare a mezzo carta di credito o di debito.";
            $FOOT_WIN="Come faccio a vincere?";
            $FOOT_SOCIAL="Domande Frequenti";
            $FOOT_SUPPORT="Supporto e supporto";
            $FOOT_PRIVACY="Informativa sulla privacy";
            $FOOT_TERMS="Termini e condizioni";
            $FOOT_PRE="Domande frequenti";
            $FOOT_CONTACT="Contattaci";
            $FOOT_CANCEL="Annullare menbresia";
            $FOOT_RIGHTS="© 2024 Tutti i diritti riservati - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 Tutti i diritti riservati";
            // declined/index.php
            $DECLINED_TITLE_1="Transazione Rifiutata";
            $DECLINED_TITLE_2="Qualcosa è andato storto!";
            $DECLINED_SUBTITLE="Controlla e correggi i tuoi dati cliccando sul pulsante sottostante";
            $DECLINED_BTN="Prova di nuovo";
            // thank-you/index.php
            $THANKYOU_TITLE="Grazie!";
            $THANKYOU_SUBTITLE="Il tuo pagamento è stato effettuato correttamente. Presto riceverai informazioni via e-mail";
            break;


        case 'uk':
            // index_auth.php -----------
            // Content
            $PRICE='£3';
            // ASTERISCOS
            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost forty-nine pounds and ninety-nine cents every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            // Footer
            $FOOT_WIN_TEXT="aqui va el cp";
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs forty-nine pounds and ninety-nine cents per month, payable by credit or debit card.";

             // Form
             $FORM_TITLE="Please fill in your details";
             $FORM_FIRSTNAME="First Name";
             $FORM_LASTNAME="Last Name";
             $FORM_EMAIL="E-mail";
             $FORM_PASS="Password";
             $FORM_ACCEPT=" I accept the terms of use.";
             $FORM_READ_MORE=" Read more.";;
             $FORM_CARDHOLDER="Cardholder name";
             $FORM_CARDNUMBER="Card number";
             $FORM_EXP_MONTH="Expiration month";
             $FORM_MONTH="Month";
             $FORM_EXP_YEAR="Expiration year";
             $FORM_YEAR="Year";
             $FORM_BTN_1="Continue";
             $FORM_BTN_2="Pay now";
             $FORM_ERROR_FIRSTNAME_1="Enter First Name";
             $FORM_ERROR_FIRSTNAME_2="Minimum 1 characters required";
             $FORM_ERROR_LASTNAME_1="Enter Last Name";
             $FORM_ERROR_LASTNAME_2="Minimum 1 characters required";
             $FORM_ERROR_EMAIL_1="Enter valid e-mail is required";
             $FORM_ERROR_EMAIL_2="E-mail address already exists";
             $FORM_ERROR_PASS_1="Enter between 5-15 Latin characters (Allowed from a-Z, 0-9 or some special characters)";
             $FORM_ERROR_CARDHOLDER_1="Enter Card Holder Name";
             $FORM_ERROR_CARDNUMBER_1="Invalid credit card number!";
             $FORM_ERROR_CARDNUMBER_2="This card brand is temporarily not supported.";
             $FORM_ERROR_CARDNUMBER_3="Enter valid Card Number";
             $FORM_ERROR_CARDNUMBER_4="Only MasterCard and Visa are accepted";
             $FORM_ERROR_CARDNUMBER_5="Card from this particular bank not accepted <br>(Try another card)";
             $FORM_ERROR_MONTH_1="Enter Valid Exp Month";
             $FORM_ERROR_YEAR_1="Enter Valid Exp Year";
             $FORM_ERROR_CVV_1="Enter CVV";
             // Footer
             $FOOT_WIN_TEXT="With your premium account, you participate in the draw for this promotional product/service (".$ARTICLE.") by randomly selecting the winner from one of its active users. The next draw will take place on 31-12-2024 among all active users. More information in the Terms of Service section. The winner will be contacted to proceed with the shipment or delivery of the prize. We have no connection with ".$COMPANY." and its partners.";
            $FOOT_WHAT='What is regulardrive.net?';
             $FOOT_WHAT_TEXT='It is a service for the creation of the files of websites/landing pages by monthly subscription that provides its members access to a platform where they can design and create the files of their websites. Easily create a website/ landing pages or portfolios. * The tool is for creating files, to have an online website you have to upload files to your own server / hosting.';
             $FOOT_COMMIT="What do I commit to?";
             $FOOT_WIN="How can I win?";
             $FOOT_SUPPORT="Support";
             $FOOT_PRIVACY="Privacy Policy";
             $FOOT_TERMS="Terms of Conditions";
             $FOOT_PRE="Frequently Asked Questions";
             $FOOT_CONTACT="Contact";
             $FOOT_CANCEL="Cancel membership";
             $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
             $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";
                     
             // declined/index.php
             $DECLINED_TITLE_1="Declined Transaction";
             $DECLINED_TITLE_2="Something went wrong!";
             $DECLINED_SUBTITLE="Check and correct your data by clicking on the button below";
             $DECLINED_BTN="Try again";
     
             // thank-you/index.php
             $THANKYOU_TITLE="Thank you!";
             $THANKYOU_SUBTITLE="Your payment was successfully made. You will soon receive information by email";
            break;


        case 'cn':
            // index_auth\.php -----------
            // Content
            $PRICE='$3';
            //asterisco
            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost forty-nine with ninety-nine american dollars every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs forty-nine american dollars and ninety-nine cents per month, payable by credit or debit card.";

            // Form
            $FORM_TITLE="输入您的详细信息，然后按继续！";
            $FORM_FIRSTNAME="名字";
            $FORM_LASTNAME="Last Name";
            $FORM_EMAIL="电子邮件";
            $FORM_PASS="密码";
            $FORM_ACCEPT=" 我接受使用条款。";
            $FORM_READ_MORE=" 阅读更多。";
            $FORM_CARDHOLDER="Cardholder name";
            $FORM_CARDNUMBER="Card number";
            $FORM_EXP_MONTH="Expiration month";
            $FORM_MONTH="Month";
            $FORM_EXP_YEAR="Expiration year";
            $FORM_YEAR="Year";
            $FORM_BTN_1="继续";
            $FORM_BTN_2="Pay now";
            $FORM_ERROR_FIRSTNAME_1="输入名字";
            $FORM_ERROR_FIRSTNAME_2="至少1个字符";
            $FORM_ERROR_LASTNAME_1="输入姓氏";
            $FORM_ERROR_LASTNAME_2="至少1个字符";
            $FORM_ERROR_EMAIL_1="请输入有效的电子邮件";
            $FORM_ERROR_EMAIL_2="电子邮件地址已存在";
            $FORM_ERROR_PASS_1="5至15个字符";
            $FORM_ERROR_CARDHOLDER_1="Enter Card Holder Name";
            $FORM_ERROR_CARDNUMBER_1="Invalid credit card number!";
            $FORM_ERROR_CARDNUMBER_2="This card brand is temporarily not supported.";
            $FORM_ERROR_CARDNUMBER_3="Enter valid Card Number";
            $FORM_ERROR_CARDNUMBER_4="Only MasterCard and Visa are accepted";
            $FORM_ERROR_CARDNUMBER_5="Card from this particular bank not accepted <br>(Try another card)";
            $FORM_ERROR_MONTH_1="Enter Valid Exp Month";
            $FORM_ERROR_YEAR_1="Enter Valid Exp Year";
            $FORM_ERROR_CVV_1="Enter CVV";
            // Footer
            $FOOT_WIN_TEXT="With your premium account, you participate in the draw for this promotional product/service (".$ARTICLE.") by randomly selecting the winner from one of its active users. The next draw will take place on 31-12-2024 among all active users. More information in the Terms of Service section. The winner will be contacted to proceed with the shipment or delivery of the prize. We have no connection with ".$COMPANY." and its partners.";
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a service for the creation of the files of websites/landing pages by monthly subscription that provides its members access to a platform where they can design and create the files of their websites. Easily create a website/ landing pages or portfolios. * The tool is for creating files, to have an online website you have to upload files to your own server / hosting.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_WIN="How can I win?";
            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";
                    
            // declined/index.php
            $DECLINED_TITLE_1="Declined Transaction";
            $DECLINED_TITLE_2="Something went wrong!";
            $DECLINED_SUBTITLE="Check and correct your data by clicking on the button below";
            $DECLINED_BTN="Try again";
    
            // thank-you/index.php
            $THANKYOU_TITLE="Thank you!";
            $THANKYOU_SUBTITLE="Your payment was successfully made. You will soon receive information by email";
        break;


        case 'dk':
            // index_auth.php -----------
            // Content
            $PRICE='3€';
            //asterisco
            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost forty-nine with ninety-nine american dollars every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs forty-nine american dollars and ninety-nine cents per month, payable by credit or debit card.";

            // Form
            $FORM_TITLE="Indtast dine detaljer og tryk på FORTSÆT!";
            $FORM_FIRSTNAME="Fornavn";
            $FORM_LASTNAME="Efternavn";
            $FORM_EMAIL="E-mail adresse";
            $FORM_PASS="Adgangskode";
            $FORM_ACCEPT="  Jeg accepterer vilkår og betingelser. ";
            $FORM_READ_MORE=" Læs mere";
            $FORM_CARDHOLDER="Cardholder name";
            $FORM_CARDNUMBER="Card number";
            $FORM_EXP_MONTH="Expiration month";
            $FORM_MONTH="Month";
            $FORM_EXP_YEAR="Expiration year";
            $FORM_YEAR="Year";
            $FORM_BTN_1="FORTSÆT";
            $FORM_BTN_2="Pay now";
            $FORM_ERROR_FIRSTNAME_1="Indtaste Navnet";
            $FORM_ERROR_FIRSTNAME_2="Minimum en karakter";
            $FORM_ERROR_LASTNAME_1="Indtaste Efternavn";
            $FORM_ERROR_LASTNAME_2="Minimum en karakter";
            $FORM_ERROR_EMAIL_1="Angiv en gyldig e-mail";
            $FORM_ERROR_EMAIL_2="Der findes allerede e-mail";
            $FORM_ERROR_PASS_1="Mellem 5 og 15 tegn";
            $FORM_ERROR_CARDHOLDER_1="Enter Card Holder Name";
            $FORM_ERROR_CARDNUMBER_1="Invalid credit card number!";
            $FORM_ERROR_CARDNUMBER_2="This card brand is temporarily not supported.";
            $FORM_ERROR_CARDNUMBER_3="Enter valid Card Number";
            $FORM_ERROR_CARDNUMBER_4="Only MasterCard and Visa are accepted";
            $FORM_ERROR_CARDNUMBER_5="Card from this particular bank not accepted <br>(Try another card)";
            $FORM_ERROR_MONTH_1="Enter Valid Exp Month";
            $FORM_ERROR_YEAR_1="Enter Valid Exp Year";
            $FORM_ERROR_CVV_1="Enter CVV";
            // Footer
            $FOOT_WIN_TEXT="With your premium account, you participate in the draw for this promotional product/service (".$ARTICLE.") by randomly selecting the winner from one of its active users. The next draw will take place on 31-12-2024 among all active users. More information in the Terms of Service section. The winner will be contacted to proceed with the shipment or delivery of the prize. We have no connection with ".$COMPANY." and its partners.";
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a service for the creation of the files of websites/landing pages by monthly subscription that provides its members access to a platform where they can design and create the files of their websites. Easily create a website/ landing pages or portfolios. * The tool is for creating files, to have an online website you have to upload files to your own server / hosting.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_WIN="How can I win?";
            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";
                    
            // declined/index.php
            $DECLINED_TITLE_1="Declined Transaction";
            $DECLINED_TITLE_2="Something went wrong!";
            $DECLINED_SUBTITLE="Check and correct your data by clicking on the button below";
            $DECLINED_BTN="Try again";
    
            // thank-you/index.php
            $THANKYOU_TITLE="Thank you!";
            $THANKYOU_SUBTITLE="Your payment was successfully made. You will soon receive information by email";
        break;


        case 'jp':
            // index_auth.php -----------
            // Content
            $PRICE='$3';
            //asterisco
            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost forty-nine with ninety-nine american dollars every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs forty-nine american dollars and ninety-nine cents per month, payable by credit or debit card.";

            // Form
            $FORM_TITLE="情報を入力してコンティニューをクリックしよう！";
            $FORM_FIRSTNAME="ファーストネーム";
            $FORM_LASTNAME="苗字";
            $FORM_EMAIL="メールアドレス";
            $FORM_PASS="パスワード";
            $FORM_ACCEPT=" 利用条件に同意します。";
            $FORM_READ_MORE=" もっと詳しく。";
            $FORM_CARDHOLDER="Cardholder name";
            $FORM_CARDNUMBER="Card number";
            $FORM_EXP_MONTH="Expiration month";
            $FORM_MONTH="Month";
            $FORM_EXP_YEAR="Expiration year";
            $FORM_YEAR="Year";
            $FORM_BTN_1="続行";
            $FORM_BTN_2="Pay now";
            $FORM_ERROR_FIRSTNAME_1="名を入力してください";
            $FORM_ERROR_FIRSTNAME_2="1文字以上必要です";
            $FORM_ERROR_LASTNAME_1="姓を入力してください";
            $FORM_ERROR_LASTNAME_2="1文字以上必要です";
            $FORM_ERROR_EMAIL_1="有効なメールアドレスを入力";
            $FORM_ERROR_EMAIL_2="電子メールアドレスはすでに存在しています";
            $FORM_ERROR_PASS_1="アルファベット5〜15文字を入力してください（ a～Z、0〜9または一部の特殊文字から使用できます）";
            $FORM_ERROR_CARDHOLDER_1="Enter Card Holder Name";
            $FORM_ERROR_CARDNUMBER_1="Invalid credit card number!";
            $FORM_ERROR_CARDNUMBER_2="This card brand is temporarily not supported.";
            $FORM_ERROR_CARDNUMBER_3="Enter valid Card Number";
            $FORM_ERROR_CARDNUMBER_4="Only MasterCard and Visa are accepted";
            $FORM_ERROR_CARDNUMBER_5="Card from this particular bank not accepted <br>(Try another card)";
            $FORM_ERROR_MONTH_1="Enter Valid Exp Month";
            $FORM_ERROR_YEAR_1="Enter Valid Exp Year";
            $FORM_ERROR_CVV_1="Enter CVV";
            // Footer
            $FOOT_WIN_TEXT="With your premium account, you participate in the draw for this promotional product/service (".$ARTICLE.") by randomly selecting the winner from one of its active users. The next draw will take place on 31-12-2024 among all active users. More information in the Terms of Service section. The winner will be contacted to proceed with the shipment or delivery of the prize. We have no connection with ".$COMPANY." and its partners.";
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a service for the creation of the files of websites/landing pages by monthly subscription that provides its members access to a platform where they can design and create the files of their websites. Easily create a website/ landing pages or portfolios. * The tool is for creating files, to have an online website you have to upload files to your own server / hosting.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_WIN="How can I win?";
            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";
                    
            // declined/index.php
            $DECLINED_TITLE_1="Declined Transaction";
            $DECLINED_TITLE_2="Something went wrong!";
            $DECLINED_SUBTITLE="Check and correct your data by clicking on the button below";
            $DECLINED_BTN="Try again";
    
            // thank-you/index.php
            $THANKYOU_TITLE="Thank you!";
            $THANKYOU_SUBTITLE="Your payment was successfully made. You will soon receive information by email";
        break;


        case 'nl':
            // index_auth.php -----------
            // Content
            $PRICE='3€';
            //asterisco
            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost forty-nine with ninety-nine american dollars every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs forty-nine american dollars and ninety-nine cents per month, payable by credit or debit card.";

            // Form
            $FORM_TITLE="Voer je gegevens in en druk op GA VERDER!";
            $FORM_FIRSTNAME="Voornaam";
            $FORM_LASTNAME="Achternaam";
            $FORM_EMAIL="E-mail";
            $FORM_PASS="Wachtwoord";
            $FORM_ACCEPT=" Ik ga akkoord met de Algemene Voorwaarden.";
            $FORM_READ_MORE=" Meer informatie.";
            $FORM_CARDHOLDER="Cardholder name";
            $FORM_CARDNUMBER="Card number";
            $FORM_EXP_MONTH="Expiration month";
            $FORM_MONTH="Month";
            $FORM_EXP_YEAR="Expiration year";
            $FORM_YEAR="Year";
            $FORM_BTN_1="Doorgaan";
            $FORM_BTN_2="Pay now";
            $FORM_ERROR_FIRSTNAME_1="Vul voornaam in";
            $FORM_ERROR_FIRSTNAME_2="Minimaal 1 tekens vereist";
            $FORM_ERROR_LASTNAME_1="Voer achternaam in";
            $FORM_ERROR_LASTNAME_2="Minimaal 1 tekens vereist";
            $FORM_ERROR_EMAIL_1="Voer een geldig e-mailadres in";
            $FORM_ERROR_EMAIL_2="E-mailadres bestaat al";
            $FORM_ERROR_PASS_1="Voer 5-15 latijnse tekens in (toegestaan van a-Z, 0-9 of een aantal speciale tekens)";
            $FORM_ERROR_CARDHOLDER_1="Enter Card Holder Name";
            $FORM_ERROR_CARDNUMBER_1="Invalid credit card number!";
            $FORM_ERROR_CARDNUMBER_2="This card brand is temporarily not supported.";
            $FORM_ERROR_CARDNUMBER_3="Enter valid Card Number";
            $FORM_ERROR_CARDNUMBER_4="Only MasterCard and Visa are accepted";
            $FORM_ERROR_CARDNUMBER_5="Card from this particular bank not accepted <br>(Try another card)";
            $FORM_ERROR_MONTH_1="Enter Valid Exp Month";
            $FORM_ERROR_YEAR_1="Enter Valid Exp Year";
            $FORM_ERROR_CVV_1="Enter CVV";
            // Footer
            $FOOT_WIN_TEXT="With your premium account, you participate in the draw for this promotional product/service (".$ARTICLE.") by randomly selecting the winner from one of its active users. The next draw will take place on 31-12-2024 among all active users. More information in the Terms of Service section. The winner will be contacted to proceed with the shipment or delivery of the prize. We have no connection with ".$COMPANY." and its partners.";
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a service for the creation of the files of websites/landing pages by monthly subscription that provides its members access to a platform where they can design and create the files of their websites. Easily create a website/ landing pages or portfolios. * The tool is for creating files, to have an online website you have to upload files to your own server / hosting.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_WIN="How can I win?";
            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";
                    
            // declined/index.php
            $DECLINED_TITLE_1="Declined Transaction";
            $DECLINED_TITLE_2="Something went wrong!";
            $DECLINED_SUBTITLE="Check and correct your data by clicking on the button below";
            $DECLINED_BTN="Try again";
    
            // thank-you/index.php
            $THANKYOU_TITLE="Thank you!";
            $THANKYOU_SUBTITLE="Your payment was successfully made. You will soon receive information by email";
        break;


        case 'no':
            // index_auth.php -----------
            // Content
            $PRICE='3€';
            //asterisco
            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost forty-nine with ninety-nine american dollars every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs forty-nine american dollars and ninety-nine cents per month, payable by credit or debit card.";

            // Form
            $FORM_TITLE="Skriv inn informasjonen din, og trykk på FORTSETT!";
            $FORM_FIRSTNAME="Fornavn";
            $FORM_LASTNAME="Etternavn";
            $FORM_EMAIL="E-postadresse";
            $FORM_PASS="Passord";
            $FORM_ACCEPT=" Jeg godtar vilkårene og betingelsene.";
            $FORM_READ_MORE="  Les mer.";
            $FORM_CARDHOLDER="Cardholder name";
            $FORM_CARDNUMBER="Card number";
            $FORM_EXP_MONTH="Expiration month";
            $FORM_MONTH="Month";
            $FORM_EXP_YEAR="Expiration year";
            $FORM_YEAR="Year";
            $FORM_BTN_1="Fortsett";
            $FORM_BTN_2="Pay now";
            $FORM_ERROR_FIRSTNAME_1="Skriv inn fornavn";
            $FORM_ERROR_FIRSTNAME_2="Minimum 1 tegn kreves";
            $FORM_ERROR_LASTNAME_1="Skriv inn etternavn";
            $FORM_ERROR_LASTNAME_2="Minimum 1 tegn kreves";
            $FORM_ERROR_EMAIL_1="Angi en gyldig e-postadresse";
            $FORM_ERROR_EMAIL_2="E-postadresse finnes allerede";
            $FORM_ERROR_PASS_1="Angi mellom 5-15 latinske tegn (tillatt fra a-Z, 0-9 eller noen spesialtegn)";
            $FORM_ERROR_CARDHOLDER_1="Enter Card Holder Name";
            $FORM_ERROR_CARDNUMBER_1="Invalid credit card number!";
            $FORM_ERROR_CARDNUMBER_2="This card brand is temporarily not supported.";
            $FORM_ERROR_CARDNUMBER_3="Enter valid Card Number";
            $FORM_ERROR_CARDNUMBER_4="Only MasterCard and Visa are accepted";
            $FORM_ERROR_CARDNUMBER_5="Card from this particular bank not accepted <br>(Try another card)";
            $FORM_ERROR_MONTH_1="Enter Valid Exp Month";
            $FORM_ERROR_YEAR_1="Enter Valid Exp Year";
            $FORM_ERROR_CVV_1="Enter CVV";
            // Footer
            $FOOT_WIN_TEXT="With your premium account, you participate in the draw for this promotional product/service (".$ARTICLE.") by randomly selecting the winner from one of its active users. The next draw will take place on 31-12-2024 among all active users. More information in the Terms of Service section. The winner will be contacted to proceed with the shipment or delivery of the prize. We have no connection with ".$COMPANY." and its partners.";
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a service for the creation of the files of websites/landing pages by monthly subscription that provides its members access to a platform where they can design and create the files of their websites. Easily create a website/ landing pages or portfolios. * The tool is for creating files, to have an online website you have to upload files to your own server / hosting.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_WIN="How can I win?";
            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";
                    
            // declined/index.php
            $DECLINED_TITLE_1="Declined Transaction";
            $DECLINED_TITLE_2="Something went wrong!";
            $DECLINED_SUBTITLE="Check and correct your data by clicking on the button below";
            $DECLINED_BTN="Try again";
    
            // thank-you/index.php
            $THANKYOU_TITLE="Thank you!";
            $THANKYOU_SUBTITLE="Your payment was successfully made. You will soon receive information by email";
        break;


        case 'pl':
            // index_auth.php -----------
            // Content
            $PRICE='3€';
            //asterisco
            $ASTERISCO='*Korzystając z niniejszej wersji próbnej subskrybujesz usługę regulardrive.net przez 2 dni w cenie promocyjnej. Jeżeli po 2 dniach nie anulujesz subskrypcji, co 30 dni będzie od Ciebie pobierana kwota należna za korzystanie z konta premium w wysokości czterdzieści dziewięć euro i dziewięćdziesiąt dziewięć centów. W Regulaminie znajdziesz wszystkie informacje i warunki subskrypcji.';
            $FOOT_COMMIT_TEXT='Korzystając z niniejszej wersji próbnej subskrybujesz usługę premium regulardrive.net. W przypadku nieusunięcia konta po dwóch dniach próby będziesz zobowiązany do comiesięcznej zapłaty za subskrypcję wersji premium. Warunki subskrypcji są dostępne tutaj: <a id="tos1" href="'. $TOS3 .'" target="_blank">Warunki świadczenia usługi.</a>. Łatwa rezygnacja z subskrypcji. Jeżeli nie zrezygnujesz z subskrypcji podczas okresu próbnego, będzie się ona automatycznie odnawiała co miesiąc i będziesz zobowiązany do pokrycia jej kosztów do momentu rezygnacji. Subskrypcja kosztuje 49,99 euro na miesiąc, płatność kartą kredytową lub debetową.';

            // Form
            $FORM_TITLE="Wpisz swoje dane i naciśnij opcję KONTYNUUJ!";
            $FORM_FIRSTNAME="Imię";
            $FORM_LASTNAME="Nazwisko";
            $FORM_EMAIL="Adres email";
            $FORM_PASS="Hasło";
            $FORM_ACCEPT=" Akceptuję";
            $FORM_READ_MORE=" Czytaj więcej.";
            $FORM_CARDHOLDER="Imię właściciela";
            $FORM_CARDNUMBER="Numer karty";
            $FORM_EXP_MONTH="Miesiąc ważności";
            $FORM_MONTH="Miesiąc";
            $FORM_EXP_YEAR="Rok ważności";
            $FORM_YEAR="Roku";
            $FORM_BTN_1="KONTYNUUJ";
            $FORM_BTN_2="Zapłać teraz";
            $FORM_ERROR_FIRSTNAME_1="Wprowadź imię";
            $FORM_ERROR_FIRSTNAME_2="Wymagane minimum 1 znaki";
            $FORM_ERROR_LASTNAME_1="Wprowadź nazwisko";
            $FORM_ERROR_LASTNAME_2="Wymagane minimum 1 znaki";
            $FORM_ERROR_EMAIL_1="Wprowadź aktualny adres email";
            $FORM_ERROR_EMAIL_2="Adres email już istnieje";
            $FORM_ERROR_PASS_1="Wpisz od 5 do 15 znaków łacińskich (dozwolone od a-Z, 0-9 lub niektóre znaki specjalne)";
            $FORM_ERROR_CARDHOLDER_1="Wprowadź imię posiadacza karty";
            $FORM_ERROR_CARDNUMBER_1="Invalid credit card number!";
            $FORM_ERROR_CARDNUMBER_2="This card brand is temporarily not supported.";
            $FORM_ERROR_CARDNUMBER_3="Enter valid Card Number";
            $FORM_ERROR_CARDNUMBER_4="Akceptujemy tylko karty Visa i MasterCard";
            $FORM_ERROR_CARDNUMBER_5="Card from this particular bank not accepted <br>(Try another card)";
            $FORM_ERROR_MONTH_1="Wprowadź miesiąc ważności";
            $FORM_ERROR_YEAR_1="Wprowadź rok ważności";
            $FORM_ERROR_CVV_1="Wprowadź kod CVV";
            // Footer
            $FOOT_WIN_TEXT="aqui va el cp";
            $FOOT_WHAT='Co to jest regulardrive.net?';
            $FOOT_WHAT_TEXT='Jest to usługa do tworzenia plików stron internetowych/stron docelowych drogą miesięcznej subskrypcji, która zapewnia swoim członkom dostęp do platformy, na której mogą projektować i tworzyć pliki stron internetowych. W łatwy sposób twórz strony internetowe/strony docelowe lub foldery. *Narzędzie służy do tworzenia plików. Żeby stworzyć stronę internetową online musisz załadować pliki do Twojego dostawcy/hosta.  ';
            $FOOT_COMMIT="Do czego mnie zobowiązuje?";
            $FOOT_WIN="Jak mogę wygrać?";
            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";
                    
            // declined/index.php
            $DECLINED_TITLE_1="Transakcja anulowana";
            $DECLINED_TITLE_2="Coś poszło nie tak!";
            $DECLINED_SUBTITLE="Zweryfikuj i popraw swoje dane, klikając przycisk poniżej";
            $DECLINED_BTN="Spróbuj ponownie";
    
            // thank-you/index.php
            $THANKYOU_TITLE="Thank you!";
            $THANKYOU_SUBTITLE="Your payment was successfully made. You will soon receive information by email";
        break;


        case 'pt':
            // index_auth.php -----------
            // Content
            $PRICE='3€';
            //asterisco
            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost forty-nine with ninety-nine american dollars every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs forty-nine american dollars and ninety-nine cents per month, payable by credit or debit card.";

            // Form
            $FORM_TITLE="Digite os seus detalhes e pressione CONTINUAR!";
            $FORM_FIRSTNAME="Primeiro nome";
            $FORM_LASTNAME="Último nome";
            $FORM_EMAIL="E-mail";
            $FORM_PASS="Palavra-passe";
            $FORM_ACCEPT=" eu aceito";
            $FORM_READ_MORE=" Consulte Mais informação.";
            $FORM_CARDHOLDER="Cardholder name";
            $FORM_CARDNUMBER="Card number";
            $FORM_EXP_MONTH="Expiration month";
            $FORM_MONTH="Month";
            $FORM_EXP_YEAR="Expiration year";
            $FORM_YEAR="Year";
            $FORM_BTN_1="Continuar";
            $FORM_BTN_2="Pay now";
            $FORM_ERROR_FIRSTNAME_1="Introduza o primeiro nome";
            $FORM_ERROR_FIRSTNAME_2="Requer no mínimo 1 caractere";
            $FORM_ERROR_LASTNAME_1="Insira o último nome";
            $FORM_ERROR_LASTNAME_2="Requer no mínimo 1 caractere";
            $FORM_ERROR_EMAIL_1="Digite e-mail válido é necessário";
            $FORM_ERROR_EMAIL_2="O endereço de e-mail já existe";
            $FORM_ERROR_PASS_1="Digite entre 5-15 caracteres latinos (permitido de a-Z, 0-9 ou alguns caracteres especiais)";
            $FORM_ERROR_CARDHOLDER_1="Enter Card Holder Name";
            $FORM_ERROR_CARDNUMBER_1="Invalid credit card number!";
            $FORM_ERROR_CARDNUMBER_2="This card brand is temporarily not supported.";
            $FORM_ERROR_CARDNUMBER_3="Enter valid Card Number";
            $FORM_ERROR_CARDNUMBER_4="Only MasterCard and Visa are accepted";
            $FORM_ERROR_CARDNUMBER_5="Card from this particular bank not accepted <br>(Try another card)";
            $FORM_ERROR_MONTH_1="Enter Valid Exp Month";
            $FORM_ERROR_YEAR_1="Enter Valid Exp Year";
            $FORM_ERROR_CVV_1="Enter CVV";
            // Footer
            $FOOT_WIN_TEXT="With your premium account, you participate in the draw for this promotional product/service (".$ARTICLE.") by randomly selecting the winner from one of its active users. The next draw will take place on 31-12-2024 among all active users. More information in the Terms of Service section. The winner will be contacted to proceed with the shipment or delivery of the prize. We have no connection with ".$COMPANY." and its partners.";
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a service for the creation of the files of websites/landing pages by monthly subscription that provides its members access to a platform where they can design and create the files of their websites. Easily create a website/ landing pages or portfolios. * The tool is for creating files, to have an online website you have to upload files to your own server / hosting.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_WIN="How can I win?";
            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";
                    
            // declined/index.php
            $DECLINED_TITLE_1="Declined Transaction";
            $DECLINED_TITLE_2="Something went wrong!";
            $DECLINED_SUBTITLE="Check and correct your data by clicking on the button below";
            $DECLINED_BTN="Try again";
    
            // thank-you/index.php
            $THANKYOU_TITLE="Thank you!";
            $THANKYOU_SUBTITLE="Your payment was successfully made. You will soon receive information by email";
        break;


        case 'ar':
            // index_auth\.php -----------
            // Content
            $PRICE='$3';
            //asterisco
            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost forty-nine with ninety-nine american dollars every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs forty-nine american dollars and ninety-nine cents per month, payable by credit or debit card.";

            // Form
            $FORM_TITLE='أدخل تفاصيلك واضغط على "متابعة"!';
            $FORM_FIRSTNAME="الاسم الاول";
            $FORM_LASTNAME="الكنية";
            $FORM_EMAIL="البريد الإلكتروني";
            $FORM_PASS="كلمه السر";
            $FORM_ACCEPT=" أنا أتفق";
            $FORM_READ_MORE=" اقرأ أكثر.";
            $FORM_CARDHOLDER="Cardholder name";
            $FORM_CARDNUMBER="Card number";
            $FORM_EXP_MONTH="Expiration month";
            $FORM_MONTH="Month";
            $FORM_EXP_YEAR="Expiration year";
            $FORM_YEAR="Year";
            $FORM_BTN_1="استمر";
            $FORM_BTN_2="Pay now";
            $FORM_ERROR_FIRSTNAME_1="أدخل الاسم الأول";
            $FORM_ERROR_FIRSTNAME_2="الحد الأدنى المطلوب هو 1 حرف";
            $FORM_ERROR_LASTNAME_1="إدخال اسم آخر";
            $FORM_ERROR_LASTNAME_2="الحد الأدنى المطلوب هو 1 حرف";
            $FORM_ERROR_EMAIL_1="مطلوب إدخال بريد إلكتروني صالح";
            $FORM_ERROR_EMAIL_2="عنوان البريد الإلكتروني موجود بالفعل";
            $FORM_ERROR_PASS_1="بين 5 و 15 حرفا";
            $FORM_ERROR_CARDHOLDER_1="Enter Card Holder Name";
            $FORM_ERROR_CARDNUMBER_1="Invalid credit card number!";
            $FORM_ERROR_CARDNUMBER_2="This card brand is temporarily not supported.";
            $FORM_ERROR_CARDNUMBER_3="Enter valid Card Number";
            $FORM_ERROR_CARDNUMBER_4="Only MasterCard and Visa are accepted";
            $FORM_ERROR_CARDNUMBER_5="Card from this particular bank not accepted <br>(Try another card)";
            $FORM_ERROR_MONTH_1="Enter Valid Exp Month";
            $FORM_ERROR_YEAR_1="Enter Valid Exp Year";
            $FORM_ERROR_CVV_1="Enter CVV";
            // Footer
            $FOOT_WIN_TEXT="With your premium account, you participate in the draw for this promotional product/service (".$ARTICLE.") by randomly selecting the winner from one of its active users. The next draw will take place on 31-12-2024 among all active users. More information in the Terms of Service section. The winner will be contacted to proceed with the shipment or delivery of the prize. We have no connection with ".$COMPANY." and its partners.";
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a service for the creation of the files of websites/landing pages by monthly subscription that provides its members access to a platform where they can design and create the files of their websites. Easily create a website/ landing pages or portfolios. * The tool is for creating files, to have an online website you have to upload files to your own server / hosting.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_WIN="How can I win?";
            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";
                    
            // declined/index.php
            $DECLINED_TITLE_1="Declined Transaction";
            $DECLINED_TITLE_2="Something went wrong!";
            $DECLINED_SUBTITLE="Check and correct your data by clicking on the button below";
            $DECLINED_BTN="Try again";
    
            // thank-you/index.php
            $THANKYOU_TITLE="Thank you!";
            $THANKYOU_SUBTITLE="Your payment was successfully made. You will soon receive information by email";
        break;


        case 'se':
            // index_auth.php -----------
            // Content
            $PRICE='3€';
            //asterisco
            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost forty-nine with ninety-nine american dollars every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs forty-nine american dollars and ninety-nine cents per month, payable by credit or debit card.";

            // Form
            $FORM_TITLE="Ange dina uppgifter och tryck på FORTSÄTT!";
            $FORM_FIRSTNAME="Förnamn";
            $FORM_LASTNAME="Efternamn";
            $FORM_EMAIL="E-post";
            $FORM_PASS="Lösenord";
            $FORM_ACCEPT=" Jeg godtar vilkårene og betingelsene.";
            $FORM_READ_MORE=" Läs mer.";
            $FORM_CARDHOLDER="Cardholder name";
            $FORM_CARDNUMBER="Card number";
            $FORM_EXP_MONTH="Expiration month";
            $FORM_MONTH="Month";
            $FORM_EXP_YEAR="Expiration year";
            $FORM_YEAR="Year";
            $FORM_BTN_1="Fortsätta";
            $FORM_BTN_2="Pay now";
            $FORM_ERROR_FIRSTNAME_1="Ange Förnamn";
            $FORM_ERROR_FIRSTNAME_2="Minst 1 tecken krävs";
            $FORM_ERROR_LASTNAME_1="Ange efternamn";
            $FORM_ERROR_LASTNAME_2="Minst 1 tecken krävs";
            $FORM_ERROR_EMAIL_1="Ange giltigt e-postmeddelande krävs";
            $FORM_ERROR_EMAIL_2="Emailadressen finns redan";
            $FORM_ERROR_PASS_1="Ange mellan 5-15 latinska tecken (tillåtet från a-Z, 0-9 eller vissa specialtecken)";
            $FORM_ERROR_CARDHOLDER_1="Ange kortinnehavarens namn";
            $FORM_ERROR_CARDNUMBER_1="Invalid credit card number!";
            $FORM_ERROR_CARDNUMBER_2="This card brand is temporarily not supported.";
            $FORM_ERROR_CARDNUMBER_3="Enter valid Card Number";
            $FORM_ERROR_CARDNUMBER_4="Only MasterCard and Visa are accepted";
            $FORM_ERROR_CARDNUMBER_5="Card from this particular bank not accepted <br>(Try another card)";
            $FORM_ERROR_MONTH_1="Enter Valid Exp Month";
            $FORM_ERROR_YEAR_1="Enter Valid Exp Year";
            $FORM_ERROR_CVV_1="Enter CVV";
            // Footer
            $FOOT_WIN_TEXT="With your premium account, you participate in the draw for this promotional product/service (".$ARTICLE.") by randomly selecting the winner from one of its active users. The next draw will take place on 31-12-2024 among all active users. More information in the Terms of Service section. The winner will be contacted to proceed with the shipment or delivery of the prize. We have no connection with ".$COMPANY." and its partners.";
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a service for the creation of the files of websites/landing pages by monthly subscription that provides its members access to a platform where they can design and create the files of their websites. Easily create a website/ landing pages or portfolios. * The tool is for creating files, to have an online website you have to upload files to your own server / hosting.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_WIN="How can I win?";
            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";
                    
            // declined/index.php
            $DECLINED_TITLE_1="Declined Transaction";
            $DECLINED_TITLE_2="Something went wrong!";
            $DECLINED_SUBTITLE="Check and correct your data by clicking on the button below";
            $DECLINED_BTN="Try again";
    
            // thank-you/index.php
            $THANKYOU_TITLE="Thank you!";
            $THANKYOU_SUBTITLE="Your payment was successfully made. You will soon receive information by email";
        break;


        default:
            // index_auth.php -----------
            // Content
            $PRICE='$3';
            //asterisco
            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost forty-nine with ninety-nine american dollars every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs forty-nine american dollars and ninety-nine cents per month, payable by credit or debit card.";

            // Form
            $FORM_TITLE="Please fill in your details";
            $FORM_FIRSTNAME="First Name";
            $FORM_LASTNAME="Last Name";
            $FORM_EMAIL="E-mail";
            $FORM_PASS="Password";
            $FORM_ACCEPT=" I accept the terms of use.";
            $FORM_READ_MORE=" Read more.";;
            $FORM_CARDHOLDER="Cardholder name";
            $FORM_CARDNUMBER="Card number";
            $FORM_EXP_MONTH="Expiration month";
            $FORM_MONTH="Month";
            $FORM_EXP_YEAR="Expiration year";
            $FORM_YEAR="Year";
            $FORM_BTN_1="Continue";
            $FORM_BTN_2="Pay now";
            $FORM_ERROR_FIRSTNAME_1="Enter First Name";
            $FORM_ERROR_FIRSTNAME_2="Minimum 1 characters required";
            $FORM_ERROR_LASTNAME_1="Enter Last Name";
            $FORM_ERROR_LASTNAME_2="Minimum 1 characters required";
            $FORM_ERROR_EMAIL_1="Enter valid e-mail is required";
            $FORM_ERROR_EMAIL_2="E-mail address already exists";
            $FORM_ERROR_PASS_1="Enter between 5-15 Latin characters (Allowed from a-Z, 0-9 or some special characters)";
            $FORM_ERROR_CARDHOLDER_1="Enter Card Holder Name";
            $FORM_ERROR_CARDNUMBER_1="Invalid credit card number!";
            $FORM_ERROR_CARDNUMBER_2="This card brand is temporarily not supported.";
            $FORM_ERROR_CARDNUMBER_3="Enter valid Card Number";
            $FORM_ERROR_CARDNUMBER_4="Only MasterCard and Visa are accepted";
            $FORM_ERROR_CARDNUMBER_5="Card from this particular bank not accepted <br>(Try another card)";
            $FORM_ERROR_MONTH_1="Enter Valid Exp Month";
            $FORM_ERROR_YEAR_1="Enter Valid Exp Year";
            $FORM_ERROR_CVV_1="Enter CVV";
            // Footer
            $FOOT_WIN_TEXT="With your premium account, you participate in the draw for this promotional product/service (".$ARTICLE.") by randomly selecting the winner from one of its active users. The next draw will take place on 31-12-2024 among all active users. More information in the Terms of Service section. The winner will be contacted to proceed with the shipment or delivery of the prize. We have no connection with ".$COMPANY." and its partners.";
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a service for the creation of the files of websites/landing pages by monthly subscription that provides its members access to a platform where they can design and create the files of their websites. Easily create a website/ landing pages or portfolios. * The tool is for creating files, to have an online website you have to upload files to your own server / hosting.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_WIN="How can I win?";
            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";
                    
            // declined/index.php
            $DECLINED_TITLE_1="Declined Transaction";
            $DECLINED_TITLE_2="Something went wrong!";
            $DECLINED_SUBTITLE="Check and correct your data by clicking on the button below";
            $DECLINED_BTN="Try again";
    
            // thank-you/index.php
            $THANKYOU_TITLE="Thank you!";
            $THANKYOU_SUBTITLE="Your payment was successfully made. You will soon receive information by email";
            break;

    }
  

?>