<?php

$lang = isset($_SERVER["HTTP_ACCEPT_LANGUAGE"]) ? substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2) : '';
if (isset($_GET['lang'])) {
    if (!empty($_GET['lang'])) {
        $lang = $_GET['lang'];
    }
}

if($lang == 'no' || $lang == 'nn'){
    $lang = 'nb';
}
if($lang == 'ca'){
    $lang = 'es';
}
if($lang == 'ko'){
    $lang = 'kr';
}
//   $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
//,'bg','hi','nl','pl','zh','id'

$acceptLang2 = ['ar','bg','cs','da','de', 'el', 'en','es','fi','fr','he','hr','hu','ms','it','ja','kr','nb','nl','pt','pl','ro','ru','sv','tr','zh'];
// echo $lang;



$lang = in_array($lang, $acceptLang2) ? $lang : 'en';

// echo $lang;

$actual_link = "$_SERVER[REQUEST_URI]";

$rrr = strpos($actual_link, 'affiliate_id', 1);


$lin = substr($actual_link, $rrr);
  
    // Constantes iguales para todos los idiomas
  
    


    switch($lang) {

        case 'ar':

            // Form
            $FORM_TITLE="يرجى ملء التفاصيل الخاصة بك";
            $FORM_FIRSTNAME="الاسم الأول";
            $FORM_LASTNAME="الاسم الأخير";
            $FORM_DIRE="العنوان";
            $FORM_POST="الرمز البريدي";
            $FORM_TEL="الهاتف";
            $FORM_EMAIL="البريد الإلكتروني";
            $FORM_PASS="كلمة المرور";
            $FORM_ACCEPT="أوافق على شروط الاستخدام.";
            $FORM_READ_MORE="اقرأ المزيد.";
            $FORM_CARDHOLDER="اسم حامل البطاقة";
            $FORM_CARDNUMBER="رقم البطاقة";
            $FORM_EXP_MONTH="شهر انتهاء الصلاحية";
            $FORM_MONTH="الشهر";
            $FORM_EXP_YEAR="سنة انتهاء الصلاحية";
            $FORM_YEAR="السنة";
            $FORM_BTN_1="واصل";
            $FORM_BTN_2="ادفع الآن";
            $FORM_ERROR_FIRSTNAME_1="أدخل الاسم الأول";
            $FORM_ERROR_FIRSTNAME_2="الحد الأدنى المطلوب هو خانة (1) واحدة";
            $FORM_ERROR_LASTNAME_1="أدخل الاسم الأخير";
            $FORM_ERROR_LASTNAME_2="الحد الأدنى المطلوب هو خانة (1) واحدة";
            $FORM_ERROR_EMAIL_1="إدخال بريد إلكتروني صحيح إلزامي";
            $FORM_ERROR_EMAIL_2="عنوان البريد الإلكتروني موجود بالفعل";
            $FORM_ERROR_PASS_1="أدخل ما بين 5-15 حرفًا لاتينيًا (مسموح من a إلى Z أو 0-9 أو بعض الأحرف الخاصة)";
            $FORM_ERROR_PASS_2="كلمات المرور غير متطابقة";
            $FORM_ERROR_CARDHOLDER_1="أدخل اسم حامل البطاقة";
            $FORM_ERROR_CARDNUMBER_1="رقم البطاقة غير صحيح!";
            $FORM_ERROR_CARDNUMBER_2="VISA cards temporarily not supported.";
            $FORM_ERROR_CARDNUMBER_3="أدخل رقم بطاقة صحيح";
            $FORM_ERROR_CARDNUMBER_4="يتم قبول بطاقات ماستر كارد و فيزا فقط";
            $FORM_ERROR_CARDNUMBER_5="البطاقة من هذا البنك بالذات غير مقبولة (جرب بطاقة أخرى)";
            $FORM_ERROR_MONTH_1="أدخل شهر انتهاء الصلاحية الصحيح";
            $FORM_ERROR_YEAR_1="أدخل سنة انتهاء الصلاحية الصحيحة";
            $FORM_ERROR_CVV_1="أدخل الرقم السري CVV";
            $FORM_EXP="تاريخ انتهاء الصلاحية";

            break;
        case 'bg':
           
            // Form
            $FORM_TITLE="Моля, попълнете данните си";
            $FORM_FIRSTNAME="Собствено име";
            $FORM_LASTNAME="Фамилия";
            $FORM_DIRE="Адрес";
            $FORM_POST="Пощенски код";
            $FORM_TEL="Телефон";
            $FORM_EMAIL="Имейл";
            $FORM_PASS="Парола";
            $FORM_ACCEPT=" Приемам условията за ползване.";
            $FORM_READ_MORE=" Прочетете повече.";
            $FORM_CARDHOLDER="Име на картодържателя";
            $FORM_CARDNUMBER="Номер на карта";
            $FORM_EXP_MONTH="Месец на изтичане";
            $FORM_MONTH="Месец";
            $FORM_EXP_YEAR="Година на изтичане";
            $FORM_YEAR="Година";
            $FORM_BTN_1="Продължи";
            $FORM_BTN_2="Плати сега";
            $FORM_ERROR_FIRSTNAME_1="Въведете собствено име";
            $FORM_ERROR_FIRSTNAME_2="Минимум 1 символ";
            $FORM_ERROR_LASTNAME_1="Въведете фамилия";
            $FORM_ERROR_LASTNAME_2="Минимум 1 символ";
            $FORM_ERROR_EMAIL_1="Въведете валиден имейл адрес";
            $FORM_ERROR_EMAIL_2="Имейл адресът вече съществува";
            $FORM_ERROR_PASS_1="Въведете между 5 и 15 букви на латиница и цифри (позволени са a – Z, 0 – 9 и някои специални знаци).";
            $FORM_ERROR_CARDHOLDER_1="Въведете име на картодържателя";
            $FORM_ERROR_CARDNUMBER_1="Невалиден номер на кредитна карта!";
            $FORM_ERROR_CARDNUMBER_2="Картите VISA временно не се поддържат.";
            $FORM_ERROR_CARDNUMBER_3="Въведете валиден номер на карта";
            $FORM_ERROR_CARDNUMBER_4="Приемат се само MasterCard и Visa.";
            $FORM_ERROR_CARDNUMBER_5="Карта от тази банка не се приема (пробвайте с друга карта)";
            $FORM_ERROR_MONTH_1="Въведете валиден месец на изтичане";
            $FORM_ERROR_YEAR_1="Въведете валидна година на изтичане";
            $FORM_ERROR_CVV_1="Въведете CVV код";
            $FORM_EXP="Срок на валидност";

            break;
        case 'cs':
            
            // Form
            $FORM_TITLE="Vyplňte prosím své údaje";
            $FORM_FIRSTNAME="Křestní jméno";
            $FORM_LASTNAME="Příjmení";
            $FORM_DIRE="Adresa";
            $FORM_POST="PSČ";
            $FORM_TEL="Telefon";
            $FORM_EMAIL="E-mail";
            $FORM_PASS="Heslo";
            $FORM_ACCEPT=" Akceptuji pravidla používání";
            $FORM_READ_MORE=" Přečíst více.";
            $FORM_CARDHOLDER="Jméno držitele karty";
            $FORM_CARDNUMBER="Číslo karty";
            $FORM_EXP_MONTH="Měsíc expirace";
            $FORM_MONTH="Měsíc";
            $FORM_EXP_YEAR="Rok expirace";
            $FORM_YEAR="Rok";
            $FORM_BTN_1="Pokračovat";
            $FORM_BTN_2="Zaplatit nyní";
            $FORM_ERROR_FIRSTNAME_1="Zadejte křestní jméno";
            $FORM_ERROR_FIRSTNAME_2="Je požadován alespoň jeden znak";
            $FORM_ERROR_LASTNAME_1="Zadejte příjmení";
            $FORM_ERROR_LASTNAME_2="Je požadován alespoň jeden znak";
            $FORM_ERROR_EMAIL_1="Je požadováno zadání platné e-mailové adresy";
            $FORM_ERROR_EMAIL_2="E-mailová adresa již existuje";
            $FORM_ERROR_PASS_1="Zadejte 5–15 znaků latinské abecedy (povoleno a–Z, 0–9 a některé speciální znaky)";
            $FORM_ERROR_CARDHOLDER_1="Zadejte jméno držitele karty";
            $FORM_ERROR_CARDNUMBER_1="Neplatné číslo kreditní karty!";
            $FORM_ERROR_CARDNUMBER_2="VISA karty nejsou dočasně podporované.";
            $FORM_ERROR_CARDNUMBER_3="Zadejte platné číslo karty";
            $FORM_ERROR_CARDNUMBER_4="Jsou přijímány jen karty MasterCard a VISA";
            $FORM_ERROR_CARDNUMBER_5="Karta od této banky není akceptovaná (Zkuste jinou kartu)";
            $FORM_ERROR_MONTH_1="Zadejte platný měsíc expirace";
            $FORM_ERROR_YEAR_1="Zadejte platný rok expirace";
            $FORM_ERROR_CVV_1="Zadejte CVV";
            $FORM_EXP="Datum konce platnosti";
            
            break;
        case 'da':

            // Form
            $FORM_TITLE="Indtast dine detaljer";
            $FORM_FIRSTNAME="Fornavn";
            $FORM_LASTNAME="Efternavn";
            $FORM_DIRE="Adresse";
            $FORM_POST="Postnummer";
            $FORM_TEL="Telefon";
            $FORM_EMAIL="E-mail adresse";
            $FORM_PASS="Adgangskode";
            $FORM_ACCEPT=" Jeg accepterer vilkår og betingelser. ";
            $FORM_READ_MORE=" Læs mere";
            $FORM_CARDHOLDER="Kortholders navn";
            $FORM_CARDNUMBER="Kortnummer";
            $FORM_EXP_MONTH="Udløbsmåned";
            $FORM_MONTH="Måned";
            $FORM_EXP_YEAR="Udløbsår";
            $FORM_YEAR="År";
            $FORM_BTN_1="FORTSÆT";
            $FORM_BTN_2="Betal nu";
            $FORM_ERROR_FIRSTNAME_1="Indtaste Navnet";
            $FORM_ERROR_FIRSTNAME_2="Minimum en karakter";
            $FORM_ERROR_LASTNAME_1="Indtaste Efternavn";
            $FORM_ERROR_LASTNAME_2="Minimum en karakter";
            $FORM_ERROR_EMAIL_1="Indtast en gyldig e-mailadresse";
            $FORM_ERROR_EMAIL_2="Der findes allerede e-mail";
            $FORM_ERROR_PASS_1="Indtast mellem 5-15 latinske tegn (a-Z, 0-9 eller nogle specialtegn er tilladt)";
            $FORM_ERROR_CARDHOLDER_1="Indtast kortholders navn";
            $FORM_ERROR_CARDNUMBER_1="Ugyldigt kreditkortnummer!";
            $FORM_ERROR_CARDNUMBER_2="VISA cards temporarily not  supported.";
            $FORM_ERROR_CARDNUMBER_3="Indtast gyldigt kortnummer";
            $FORM_ERROR_CARDNUMBER_4="Kun MasterCard of Visa accepteres";
            $FORM_ERROR_CARDNUMBER_5="Kort fra denne bank accepteres ikke <br>(Prøv et andet kort)";
            $FORM_ERROR_MONTH_1="Indtast gyldig udløbsmåned";
            $FORM_ERROR_YEAR_1="Indtast gyldigt udløbsår";
            $FORM_ERROR_CVV_1="Indtast CVV/Sikkerhedskode";
            $FORM_EXP="Udløbsdato";
        
            break;
        case 'de': 
            
            // Form
            $FORM_TITLE="Bitte tragen Sie Ihre Daten ein";
            $FORM_FIRSTNAME="Vorname";
            $FORM_LASTNAME="Nachname";
            $FORM_DIRE="Adresse";
            $FORM_POST="Postleitzahl";
            $FORM_TEL="Telefon";
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
            $FORM_EXP="Ablaufdatum";
            
            break;
        case 'el':
           
            // Form
            $FORM_TITLE="Συμπληρώστε τα στοιχεία σας";
            $FORM_FIRSTNAME="Όνομα";
            $FORM_LASTNAME="Επώνυμο";
            $FORM_DIRE="Διεύθυνση";
            $FORM_POST="Ταχυδρομικός Κώδικας";
            $FORM_TEL="Τηλέφωνο";
            $FORM_EMAIL="E-mail";
            $FORM_PASS="Κωδικός πρόσβασης";
            $FORM_ACCEPT=" Αποδέχομαι τους όρους χρήσης.";
            $FORM_READ_MORE=" Διαβάστε περισσότερα.";
            $FORM_CARDHOLDER="Όνομα ιδιοκτήτη κάρτας";
            $FORM_CARDNUMBER="Αριθμός κάρτας";
            $FORM_EXP_MONTH="Μήνας λήξης";
            $FORM_MONTH="Μήνας";
            $FORM_EXP_YEAR="Έτος λήξης";
            $FORM_YEAR="Έτος";
            $FORM_BTN_1="Συνέχεια";
            $FORM_BTN_2="Πληρώστε τώρα";
            $FORM_ERROR_FIRSTNAME_1="Εισαγάγετε το Όνομα";
            $FORM_ERROR_FIRSTNAME_2="Απαιτείται τουλάχιστον 1 χαρακτήρας";
            $FORM_ERROR_LASTNAME_1="Εισαγάγετε το Επώνυμο";
            $FORM_ERROR_LASTNAME_2="Απαιτείται τουλάχιστον 1 χαρακτήρας";
            $FORM_ERROR_EMAIL_1="Απαιτείται εισαγωγή έγκυρου e-mail";
            $FORM_ERROR_EMAIL_2="Η διεύθυνση e-mail υπάρχει ήδη";
            $FORM_ERROR_PASS_1="Πληκτρολογήστε 5-15 λατινικούς χαρακτήρες (Επιτρέπονται οι χαρακτήρες A-Z, 0-9 ή ορισμένοι ειδικοί χαρακτήρες).";
            $FORM_ERROR_CARDHOLDER_1="Εισαγάγετε το Όνομα του Ιδιοκτήτη Κάρτας";
            $FORM_ERROR_CARDNUMBER_1="Μη έγκυρος αριθμός πιστωτικής κάρτας!";
            $FORM_ERROR_CARDNUMBER_2="Οι κάρτες VISA δεν υποστηρίζονται προσωρινά.";
            $FORM_ERROR_CARDNUMBER_3="Εισαγάγετε έγκυρο Αριθμό Κάρτας";
            $FORM_ERROR_CARDNUMBER_4="Μόνο MasterCard και Visa γίνονται δεκτές";
            $FORM_ERROR_CARDNUMBER_5="Η κάρτα της συγκεκριμένης τράπεζας δεν έγινε αποδεκτή (Δοκιμάστε άλλη κάρτα)";
            $FORM_ERROR_MONTH_1="Εισαγάγετε Έγκυρο Μήνα Λήξης";
            $FORM_ERROR_YEAR_1="Εισαγάγετε Έγκυρο Έτος Λήξης";
            $FORM_ERROR_CVV_1="Εισαγάγετε CVV";
            $FORM_EXP="Ημερομηνία λήξης";
            
            break;
        case 'en':
        
            // Form
            $FORM_TITLE="Please fill in your details";
            $FORM_FIRSTNAME="First Name";
            $FORM_LASTNAME="Last Name";
            $FORM_DIRE="Address";
            $FORM_POST="Postal Code";
            $FORM_TEL="Telephone";
            $FORM_EMAIL="E-mail";
            $FORM_PASS="Password";
            $FORM_ACCEPT=" I accept the terms of use.";
            $FORM_READ_MORE=" Read more.";
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
            $FORM_ERROR_CARDNUMBER_2="VISA cards temporarily not supported.";
            $FORM_ERROR_CARDNUMBER_3="Enter valid Card Number";
            $FORM_ERROR_CARDNUMBER_4="Only MasterCard and Visa are accepted";
            $FORM_ERROR_CARDNUMBER_5="Card from this particular bank not accepted <br>(Try another card)";
            $FORM_ERROR_MONTH_1="Enter Valid Exp Month";
            $FORM_ERROR_YEAR_1="Enter Valid Exp Year";
            $FORM_ERROR_CVV_1="Enter CVV";
            $FORM_EXP="Expiration date";
            
            break;
        case 'es':
            
            // Form
            $FORM_TITLE="Introduce tus datos abajo";
            $FORM_FIRSTNAME="Nombre";
            $FORM_LASTNAME="Apellido";
            $FORM_DIRE="Dirección";
            $FORM_POST="Código Postal";
            $FORM_TEL="Teléfono";
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
            $FORM_BTN_2="Pagar ahora ";
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
            $FORM_EXP="Fecha de Caducidad";
             
            break;
        case 'fi':
            
             // Form
             $FORM_TITLE="Täytä tietosi";
             $FORM_FIRSTNAME="Etunimi";
             $FORM_LASTNAME="Sukunimi";
             $FORM_DIRE="Osoite";
             $FORM_POST="Postinumero";
             $FORM_TEL="Puhelin";
             $FORM_EMAIL="Sähköpostiosoite";
             $FORM_PASS="Salasana";
             $FORM_ACCEPT=" Hyväksyn käyttö ehdot.";
             $FORM_READ_MORE=" Lue lisää.";
             $FORM_CARDHOLDER="Kortinhaltijan nimi";
             $FORM_CARDNUMBER="Kortin numero";
             $FORM_EXP_MONTH="Päättymiskuukausi";
             $FORM_MONTH="Kuukausi";
             $FORM_EXP_YEAR="Päättymisvuosi";
             $FORM_YEAR="Vuosi";
             $FORM_BTN_1="Jatkaa";
             $FORM_BTN_2="Maksa nyt";
             $FORM_ERROR_FIRSTNAME_1="Syötä etunimi";
             $FORM_ERROR_FIRSTNAME_2="Vähintään 1 merkkiä";
             $FORM_ERROR_LASTNAME_1="Kirjoita suku nimi";
             $FORM_ERROR_LASTNAME_2="Vähintään 1 merkkiä";
             $FORM_ERROR_EMAIL_1="Anna kelvollinen Sähkö posti osoite";
             $FORM_ERROR_EMAIL_2="Sähkö posti osoite jo olemassa";
             $FORM_ERROR_PASS_1="Syötä 5–15 latinalaista merkkiä (a–z, 0–9 tai jotkut erikoismerkit sallittu)";
             $FORM_ERROR_CARDHOLDER_1="Syötä kortinhaltijan nimi";
             $FORM_ERROR_CARDNUMBER_1="Virheellinen luottokortin numero!";
             $FORM_ERROR_CARDNUMBER_2="VISA-kortteja ei väliaikaisesti tueta.";
             $FORM_ERROR_CARDNUMBER_3="Anna voimassa oleva kortin numero";
             $FORM_ERROR_CARDNUMBER_4="Vain MasterCard ja Visa hyväksytään";
             $FORM_ERROR_CARDNUMBER_5="Tämän erityisen pankin korttia ei hyväksytä <br>(Kokeile toista korttia)";
             $FORM_ERROR_MONTH_1="Syötä voimassaoleva päättymiskuukausi";
             $FORM_ERROR_YEAR_1="Syötä voimassaoleva päättymisvuosi";
             $FORM_ERROR_CVV_1="Syötä CVV";
             $FORM_EXP="Vanhentumispäivä";
             
            break;
        case 'fr':
           
            // Form
            $FORM_TITLE="Saisissez vos coordonnées";
            $FORM_FIRSTNAME="Nom";
            $FORM_LASTNAME="Prénom";
            $FORM_DIRE="Adresse";
            $FORM_POST="Code zip";
            $FORM_TEL="Téléphone";
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
            $FORM_ERROR_CARDNUMBER_2="VISA cards temporarily not supported.";
            $FORM_ERROR_CARDNUMBER_3="Entrez un numéro de carte valide";
            $FORM_ERROR_CARDNUMBER_4="Seules les cartes MasterCard et Visa sont acceptées";
            $FORM_ERROR_CARDNUMBER_5="Carte de cette banque particulière non acceptée <br>(Essayez une autre carte)";
            $FORM_ERROR_MONTH_1="Entrez un mois valide";
            $FORM_ERROR_YEAR_1="Entrez une année valide";
            $FORM_ERROR_CVV_1="Entrez CVV";
            $FORM_EXP="Date d'expiration";
            
         break;
        case 'he':
           
            // Form
            $FORM_TITLE="נא למלא את הפרטים שלך";
            $FORM_FIRSTNAME="שם פרטי";
            $FORM_LASTNAME="שם משפחה";
            $FORM_DIRE="כתובת";
            $FORM_POST="מיקוד";
            $FORM_TEL="טלפון";
            $FORM_EMAIL='דוא"ל';
            $FORM_PASS="סיסמה";
            $FORM_ACCEPT="אני מסכימ/ה לתנאי השימוש.";
            $FORM_READ_MORE="לקרוא עוד.";
            $FORM_CARDHOLDER="שם בעל הכרטיס";
            $FORM_CARDNUMBER="מספר הכרטיס";
            $FORM_EXP_MONTH="חודש תפוגה";
            $FORM_MONTH="חודש";
            $FORM_EXP_YEAR="שנת תפוגה";
            $FORM_YEAR="שנה";
            $FORM_BTN_1="המשך";
            $FORM_BTN_2="שלמ/י עכשיו";
            $FORM_ERROR_FIRSTNAME_1="שם פרטי";
            $FORM_ERROR_FIRSTNAME_2="לפחות תו אחד";
            $FORM_ERROR_LASTNAME_1="שם משפחה";
            $FORM_ERROR_LASTNAME_2="לפחות תו אחד";
            $FORM_ERROR_EMAIL_1='יש להזין כתובת דוא"ל חוקית';
            $FORM_ERROR_EMAIL_2='כתובת הדוא"ל הזו כבר קיימת במערכת';
            $FORM_ERROR_PASS_1="יש להזין בין 5-15 תווים לטיניים (ניתן מ- 0-9, a-Z או כמה תווים מיוחדים)";
            $FORM_ERROR_CARDHOLDER_1="שם בעל הכרטיס";
            $FORM_ERROR_CARDNUMBER_1="מספר כרטיס אשראי לא חוקי!";
            $FORM_ERROR_CARDNUMBER_2="VISA cards temporarily not supported.";
            $FORM_ERROR_CARDNUMBER_3="יש להזין מספר כרטיס חוקי";
            $FORM_ERROR_CARDNUMBER_4="אנו מקבלים רק כרטיסי מאסטרקארד וויזה";
            $FORM_ERROR_CARDNUMBER_5="אנו לא מקבלים כרטיסים של הבנק הזה (ניתן לנסות כרטיס אחר)";
            $FORM_ERROR_MONTH_1="יש להזין חודש תפוגה חוקי";
            $FORM_ERROR_YEAR_1="יש להזין שנת תפוגה חוקית";
            $FORM_ERROR_CVV_1="קוד CVV";
            $FORM_EXP="תאריך הפוגה";
            
            break;
        case 'hr':
           
            // Form
            $FORM_TITLE="Unesite svoje podatke";
            $FORM_FIRSTNAME="Ime";
            $FORM_LASTNAME="Prezime";
            $FORM_DIRE="Adresa";
            $FORM_POST="Poštanski broj";
            $FORM_TEL="Telefon";
            $FORM_EMAIL="E-pošta";
            $FORM_PASS="Zaporka";
            $FORM_ACCEPT=" Prihvaćam uvjete upotrebe usluge.";
            $FORM_READ_MORE=" Pročitajte više.";
            $FORM_CARDHOLDER="Ime vlasnika kartice";
            $FORM_CARDNUMBER="Broj kartice";
            $FORM_EXP_MONTH="Mjesec isteka";
            $FORM_MONTH="Mjesec";
            $FORM_EXP_YEAR="Godina isteka";
            $FORM_YEAR="Godina";
            $FORM_BTN_1="Nastavi";
            $FORM_BTN_2="Plati odmah";
            $FORM_ERROR_FIRSTNAME_1="Unesite ime";
            $FORM_ERROR_FIRSTNAME_2="Potrebno je unijeti minimalno 1 znak";
            $FORM_ERROR_LASTNAME_1="Unesite prezime";
            $FORM_ERROR_LASTNAME_2="Potrebno je unijeti minimalno 1 znak";
            $FORM_ERROR_EMAIL_1="Potrebna je valjana adresa e-pošte";
            $FORM_ERROR_EMAIL_2="Adresa e-pošte već postoji";
            $FORM_ERROR_PASS_1="Unesite između 5 i 15 latiničnih znakova (dopušteni su od a do Z, od 0 do 9 ili neki posebni znakovi)";
            $FORM_ERROR_CARDHOLDER_1="Unesite ime vlasnika kartice";
            $FORM_ERROR_CARDNUMBER_1="Nevaljani broj kreditne kartice!";
            $FORM_ERROR_CARDNUMBER_2="VISA kartice privremeno nisu podržane.";
            $FORM_ERROR_CARDNUMBER_3="Unesite valjani broj kartice";
            $FORM_ERROR_CARDNUMBER_4="Prihvaćamo samo MasterCard i Visa kartice";
            $FORM_ERROR_CARDNUMBER_5="Ne prihvaćamo kartice te banke (upotrijebite drugu karticu)";
            $FORM_ERROR_MONTH_1="Unesite valjani mjesec isteka";
            $FORM_ERROR_YEAR_1="Unesite valjanu godinu isteka";
            $FORM_ERROR_CVV_1="Unesite CVV kod";
            $FORM_EXP="Datum isteka";
            
            break;
        case 'hu':
            
            // Form
            $FORM_TITLE="Kérjük, töltse ki adatait";
            $FORM_FIRSTNAME="Keresztnév";
            $FORM_LASTNAME="Vezetéknév";
            $FORM_DIRE="Cím";
            $FORM_POST="Irányítószám";
            $FORM_TEL="Telefonszám";
            $FORM_EMAIL="E-mail";
            $FORM_PASS="Jelszó";
            $FORM_ACCEPT=" Elfogadom a felhasználói feltételeket.";
            $FORM_READ_MORE=" Mutasson többet.";
            $FORM_CARDHOLDER="A kártyatulajdonos neve";
            $FORM_CARDNUMBER="Bankkártyaszám";
            $FORM_EXP_MONTH="Lejárati hónap";
            $FORM_MONTH="Hónap";
            $FORM_EXP_YEAR="Lejárati év";
            $FORM_YEAR="Év";
            $FORM_BTN_1="Tovább";
            $FORM_BTN_2="Fizessen most";
            $FORM_ERROR_FIRSTNAME_1="Adja meg a keresztnevét";
            $FORM_ERROR_FIRSTNAME_2="Minimum 1 karakter kötelező";
            $FORM_ERROR_LASTNAME_1="Adja meg a vezetéknevét";
            $FORM_ERROR_LASTNAME_2="Minimum 1 karakter kötelező";
            $FORM_ERROR_EMAIL_1="Adja meg a valós e-mail címét";
            $FORM_ERROR_EMAIL_2="Ez az e-mail cím már regisztrált";
            $FORM_ERROR_PASS_1="Írjon be 5-15 latin ábécés karaktert (Az a-Z, 0-9 vagy néhány speciális karakter közül)";
            $FORM_ERROR_CARDHOLDER_1="Adja meg a kártyatulajdonos nevét";
            $FORM_ERROR_CARDNUMBER_1="Helytelen bankkártyaszám!";
            $FORM_ERROR_CARDNUMBER_2="VISA kártya átmenetileg nem támogatott";
            $FORM_ERROR_CARDNUMBER_3="Adja meg a helyes kártyaszámot";
            $FORM_ERROR_CARDNUMBER_4="Csak MasterCard és VISA támogatott";
            $FORM_ERROR_CARDNUMBER_5="Ettől a banktól nem fogadunk el kártyát (Próbálja meg másik kártyával)";
            $FORM_ERROR_MONTH_1="Adja meg a helyes lejárati hónapot";
            $FORM_ERROR_YEAR_1="Adja meg a helyes lejárati évet";
            $FORM_ERROR_CVV_1="Adja meg a CVV-t";
            $FORM_EXP="Lejárat dátuma";
            
            break;
        case 'ms':
           
            // Form
            $FORM_TITLE="Sila isikan butiran anda";
            $FORM_FIRSTNAME="Nama Pertama";
            $FORM_LASTNAME="Nama Akhir";
            $FORM_DIRE="Alamat";
            $FORM_POST="Poskod";
            $FORM_TEL="Telefon";
            $FORM_EMAIL="E-mel";
            $FORM_PASS="Kata Laluan";
            $FORM_ACCEPT=" Saya terima syarat penggunaannya.";
            $FORM_READ_MORE=" Baca lebih lanjut.";
            $FORM_CARDHOLDER="Nama pemegang kad";
            $FORM_CARDNUMBER="Nombor kad";
            $FORM_EXP_MONTH="Bulan luput";
            $FORM_MONTH="Bulan";
            $FORM_EXP_YEAR="Tahun luput";
            $FORM_YEAR="Tahun";
            $FORM_BTN_1="Teruskan";
            $FORM_BTN_2="Bayar sekarang";
            $FORM_ERROR_FIRSTNAME_1="Masukkan Nama Pertama";
            $FORM_ERROR_FIRSTNAME_2="Minimum 1 aksara diperlukan";
            $FORM_ERROR_LASTNAME_1="Masukkan Nama Akhir";
            $FORM_ERROR_LASTNAME_2="Minimum 1 aksara diperlukan";
            $FORM_ERROR_EMAIL_1="Masukkan e-mel yang sah adalah diperlukan";
            $FORM_ERROR_EMAIL_2="Alamat e-mel sudah wujud";
            $FORM_ERROR_PASS_1="Masukkan di antara 5-15 aksara Latin (Dibenarkan daripada a-Z, 0-9 atau sesetengah aksara khas)";
            $FORM_ERROR_CARDHOLDER_1="Masukkan Nama Pemegang Kad";
            $FORM_ERROR_CARDNUMBER_1="Nombor kad kredit tidak sah!";
            $FORM_ERROR_CARDNUMBER_2="Kad VISA tidak disokong buat sementara waktu.";
            $FORM_ERROR_CARDNUMBER_3="Masukkan Nombor Kad yang sah";
            $FORM_ERROR_CARDNUMBER_4="Hanya MasterCard dan Visa diterima";
            $FORM_ERROR_CARDNUMBER_5="Kad daripada bank tertentu ini tidak diterima (Cuba kad lain)";
            $FORM_ERROR_MONTH_1="Masukkan Bulan Luput Yang Sah";
            $FORM_ERROR_YEAR_1="Masukkan Tahun Luput Yang Sah";
            $FORM_ERROR_CVV_1="Masukkan CVV";
            $FORM_EXP="Tarikh luput";
            
            break;
        case 'it':
            
            // Form
            $FORM_TITLE="Inserisci i tuoi dati";
            $FORM_FIRSTNAME="Nome";
            $FORM_LASTNAME="Cognome";
            $FORM_DIRE="Indirizzo";
            $FORM_POST="Codice Postale";
            $FORM_TEL="Telefono";
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
            $FORM_ERROR_CARDNUMBER_2="VISA cards temporarily not supported.";
            $FORM_ERROR_CARDNUMBER_3="Inserisci un numero di carta valido";
            $FORM_ERROR_CARDNUMBER_4="Si accettano solo MasterCard e Visa";
            $FORM_ERROR_CARDNUMBER_5="Carta di questa particolare banca non accettata <br>(Prova un'altra carta)";
            $FORM_ERROR_MONTH_1="Inserisci Mese Exp valido";
            $FORM_ERROR_YEAR_1="Inserisci anno Exp valido";
            $FORM_ERROR_CVV_1="Inserisci CVV";
            $FORM_EXP="Data di scadenza";
            
            break;
        case 'ja':
          
            // Form
            $FORM_TITLE="詳細を入力してください";
            $FORM_FIRSTNAME="名";
            $FORM_LASTNAME="姓";
            $FORM_DIRE="住所";
            $FORM_POST="郵便番号";
            $FORM_TEL="電話番号";
            $FORM_EMAIL="メールアドレス";
            $FORM_PASS="パスワード";
            $FORM_ACCEPT=" 利用規約に同意します。";
            $FORM_READ_MORE=" 続きを読む。";
            $FORM_CARDHOLDER="カード名義人の氏名";
            $FORM_CARDNUMBER="カード番号";
            $FORM_EXP_MONTH="有効期限の月";
            $FORM_MONTH="月";
            $FORM_EXP_YEAR="有効期限の年";
            $FORM_YEAR="年";
            $FORM_BTN_1="続行";
            $FORM_BTN_2=" お支払い";
            $FORM_ERROR_FIRSTNAME_1="名を入力してください";
            $FORM_ERROR_FIRSTNAME_2="最低1文字必要です";
            $FORM_ERROR_LASTNAME_1="姓を入力してください";
            $FORM_ERROR_LASTNAME_2="最低1文字必要です";
            $FORM_ERROR_EMAIL_1="有効なメールアドレスを入力してください";
            $FORM_ERROR_EMAIL_2="メールアドレスは既に存在します";
            $FORM_ERROR_PASS_1="アルファベット5〜15文字を入力してください（ a～Z、0〜9または一部の特殊文字から使用できます）";
            $FORM_ERROR_CARDHOLDER_1="カード名義人の氏名を入力してください";
            $FORM_ERROR_CARDNUMBER_1="無効なクレジットカード番号です！";
            $FORM_ERROR_CARDNUMBER_2="一時的にVISAカードには対応していません。";
            $FORM_ERROR_CARDNUMBER_3="有効なカード番号を入力してください";
            $FORM_ERROR_CARDNUMBER_4="MasterCardとVisaのみ受け付けています";
            $FORM_ERROR_CARDNUMBER_5="この銀行のカードは使用できません(別のカードをお試しください)";
            $FORM_ERROR_MONTH_1="有効な有効期限の月を入力してください";
            $FORM_ERROR_YEAR_1="有効な有効期限の年を入力してください";
            $FORM_ERROR_CVV_1="CVVを入力してください";
            $FORM_EXP="有効期限";
            
            break;
        case 'kr':
            
            // Form
            $FORM_TITLE="세부 정보를 입력해 주세요";
            $FORM_FIRSTNAME="이름";
            $FORM_LASTNAME="성";
            $FORM_DIRE="주소";
            $FORM_POST="우편 번호";
            $FORM_TEL="전화번호";
            $FORM_EMAIL="이메일";
            $FORM_PASS="비밀번호";
            $FORM_ACCEPT=" 이용 약관에 동의합니다.";
            $FORM_READ_MORE=" 더 자세히 읽기.";
            $FORM_CARDHOLDER="카드 소지자 이름";
            $FORM_CARDNUMBER="카드 번호";
            $FORM_EXP_MONTH="만료 월";
            $FORM_MONTH="월";
            $FORM_EXP_YEAR="만료 연도";
            $FORM_YEAR="년";
            $FORM_BTN_1="계속";
            $FORM_BTN_2="지금 결제하기";
            $FORM_ERROR_FIRSTNAME_1="이름을 입력하세요";
            $FORM_ERROR_FIRSTNAME_2="최소 1자 이상이어야 합니다";
            $FORM_ERROR_LASTNAME_1="성을 입력하세요";
            $FORM_ERROR_LASTNAME_2="최소 1자 이상이어야 합니다";
            $FORM_ERROR_EMAIL_1="유효한 이메일을 입력해야 합니다";
            $FORM_ERROR_EMAIL_2="이메일 주소가 이미 존재합니다";
            $FORM_ERROR_PASS_1="5-15자 사이의 라틴 문자를 입력합니다(a-Z, 0-9 또는 일부 특수 문자 사용 가능)";
            $FORM_ERROR_CARDHOLDER_1="카드 소지자 이름을 입력하세요";
            $FORM_ERROR_CARDNUMBER_1="유효하지 않은 카드 번호입니다!";
            $FORM_ERROR_CARDNUMBER_2="VISA 카드를 일시적으로 지원하지 않습니다.";
            $FORM_ERROR_CARDNUMBER_3="유효한 카드 번호를 입력하세요";
            $FORM_ERROR_CARDNUMBER_4="Master 카드와 Visa 카드만 사용할 수 있습니다";
            $FORM_ERROR_CARDNUMBER_5="해당 은행의 카드는 사용이 불가합니다 <br>(다른 카드로 시도해 보세요)";
            $FORM_ERROR_MONTH_1="유효한 만료 월을 입력하세요";
            $FORM_ERROR_YEAR_1="유효한 만료 연도를 입력하세요";
            $FORM_ERROR_CVV_1="CVV를 입력하세요";
            $FORM_EXP="만료일";
    
            break;
        case 'nb':
            
            // Form
            $FORM_TITLE="Skriv inn informasjonen din";
            $FORM_FIRSTNAME="Fornavn";
            $FORM_LASTNAME="Etternavn";
            $FORM_DIRE="Adresse";
            $FORM_POST="Postnummer";
            $FORM_TEL="Telefon";
            $FORM_EMAIL="E-postadresse";
            $FORM_PASS="Passord";
            $FORM_ACCEPT=" Jeg godtar vilkårene og betingelsene.";
            $FORM_READ_MORE=" Les mer.";
            $FORM_CARDHOLDER="Navnet på innehaveren";
            $FORM_CARDNUMBER="kortnummer";
            $FORM_EXP_MONTH="Utløpsmåned";
            $FORM_MONTH="Måned";
            $FORM_EXP_YEAR="Utløpsår";
            $FORM_YEAR="År";
            $FORM_BTN_1="Fortsett";
            $FORM_BTN_2="Betal nå";
            $FORM_ERROR_FIRSTNAME_1="Skriv inn fornavn";
            $FORM_ERROR_FIRSTNAME_2="Minimum 1 tegn kreves";
            $FORM_ERROR_LASTNAME_1="Skriv inn etternavn";
            $FORM_ERROR_LASTNAME_2="Minimum 1 tegn kreves";
            $FORM_ERROR_EMAIL_1="Angi en gyldig e-postadresse";
            $FORM_ERROR_EMAIL_2="E-postadresse finnes allerede";
            $FORM_ERROR_PASS_1="Angi mellom 5-15 latinske tegn (tillatt fra a-Z, 0-9 eller noen spesialtegn)";
            $FORM_ERROR_CARDHOLDER_1="Skriv inn navnet på kortinnehaveren";
            $FORM_ERROR_CARDNUMBER_1="Ugyldig kredittkortnummer!";
            $FORM_ERROR_CARDNUMBER_2="VISA-kort støttes midlertidig ikke.";
            $FORM_ERROR_CARDNUMBER_3="Angi gyldig kortnummer";
            $FORM_ERROR_CARDNUMBER_4="Kun MasterCard og Visa er akseptert";
            $FORM_ERROR_CARDNUMBER_5="Kort fra denne spesifikke banken aksepteres ikke <br>(Prøv et annet kort)";
            $FORM_ERROR_MONTH_1="Angi en gyldig måned";
            $FORM_ERROR_YEAR_1="Angi et gyldig år";
            $FORM_ERROR_CVV_1="Innføre CVV";
            $FORM_EXP="Utløp";

            break;
        case 'nl':
          
            // Form
            $FORM_TITLE = "Vul uw gegevens in";
            $FORM_FIRSTNAME = "Voornaam";
            $FORM_LASTNAME = "Achternaam";
            $FORM_CIU = "Woonplaats";
            $FORM_DIRE = "Adres";
            $FORM_POST = "Postcode";
            $FORM_TEL = "Telefoon";
            $FORM_EMAIL = "E-mailadres";
            $FORM_PASS = "Wachtwoord";
            $FORM_PASS_C = "Bevestig wachtwoord";
            $FORM_ACCEPT = " Ik ga akkoord met de Algemene Voorwaarden.";
            $FORM_READ_MORE = " Meer informatie.";
            $FORM_CARDHOLDER = "Naam kaarthouder";
            $FORM_CARDNUMBER = "Kaartnummer";
            $FORM_EXP_MONTH = "Vervalmaand";
            $FORM_MONTH = "Maand";
            $FORM_EXP_YEAR = "Vervaljaar";
            $FORM_YEAR = "Jaar";
            $FORM_BTN_1="Doorgaan";
            $FORM_BTN_2 = "Nu betalen";
            $FORM_ERROR_FIRSTNAME_1 = "Vul voornaam in";
            $FORM_ERROR_FIRSTNAME_2 = "Minimaal 1 tekens vereist";
            $FORM_ERROR_LASTNAME_1 = "Voer achternaam in";
            $FORM_ERROR_LASTNAME_2 = "Minimaal 1 tekens vereist";
            $FORM_ERROR_EMAIL_1 = "Voer een geldig e-mailadres in";
            $FORM_ERROR_EMAIL_2 = "E-mailadres bestaat al";
            $FORM_ERROR_PASS_1 = "Tussen 5 en 15 karakters";
            $FORM_ERROR_PASS_2 = "Wachtwoorden komen niet overeen";
            $FORM_ERROR_CARDHOLDER_1 = "Voer de naam van de kaarthouder in";
            $FORM_ERROR_CARDNUMBER_1 = "Ongeldig creditcardnummer!";
            $FORM_ERROR_CARDNUMBER_2 = "Creditcards van VISA worden tijdelijk niet ondersteund.";
            $FORM_ERROR_CARDNUMBER_3 = "Voer een geldig kaartnummer in";
            $FORM_ERROR_CARDNUMBER_4 = "Alleen MasterCard en Visa worden geaccepteerd";
            $FORM_ERROR_CARDNUMBER_5 = "Kaarten van deze specifieke bank worden niet geaccepteerd <br>(Probeer een andere kaart)";
            $FORM_ERROR_MONTH_1 = "Voer een geldige vervalmaand in";
            $FORM_ERROR_YEAR_1 = "Voer een geldig vervaljaar in";
            $FORM_ERROR_CVV_1 = "Voer CVV in";
            $FORM_EXP="Vervaldatum";
            
            break;
        case 'pt':
            
            // Form
            $FORM_TITLE="Digite os seus detalhes";
            $FORM_FIRSTNAME="Primeiro nome";
            $FORM_LASTNAME="Último nome";
            $FORM_DIRE="Endereço";
            $FORM_POST="Código Postal";
            $FORM_TEL="Telefone";
            $FORM_EMAIL="E-mail";
            $FORM_PASS="Palavra-passe";
            $FORM_ACCEPT=" Aceito os termos e condições.";
            $FORM_READ_MORE=" Consulte Mais informação.";
            $FORM_CARDHOLDER="Nome do titular";
            $FORM_CARDNUMBER="Número do cartão";
            $FORM_EXP_MONTH="Mês de expiração";
            $FORM_MONTH="Mês";
            $FORM_EXP_YEAR="Ano de expiração";
            $FORM_YEAR="Ano";
            $FORM_BTN_1="Continuar";
            $FORM_BTN_2="Pague Agora";
            $FORM_ERROR_FIRSTNAME_1="Introduza o primeiro nome";
            $FORM_ERROR_FIRSTNAME_2="Requer no mínimo 1 caractere";
            $FORM_ERROR_LASTNAME_1="Insira o último nome";
            $FORM_ERROR_LASTNAME_2="Requer no mínimo 1 caractere";
            $FORM_ERROR_EMAIL_1="Digite e-mail válido é necessário";
            $FORM_ERROR_EMAIL_2="O endereço de e-mail já existe";
            $FORM_ERROR_PASS_1="Digite entre 5-15 caracteres latinos (permitido de a-Z, 0-9 ou alguns caracteres especiais)";
            $FORM_ERROR_CARDHOLDER_1="Insira o nome do titular do cartão";
            $FORM_ERROR_CARDNUMBER_1="Número de cartão de crédito inválido!";
            $FORM_ERROR_CARDNUMBER_2="Cartões VISA temporariamente não suportados.";
            $FORM_ERROR_CARDNUMBER_3="Insira um número de cartão válido";
            $FORM_ERROR_CARDNUMBER_4="Apenas MasterCard e Visa são aceitos";
            $FORM_ERROR_CARDNUMBER_5="Cartão deste banco específico não aceito <br>(Tente outro cartão)";
            $FORM_ERROR_MONTH_1="Insira um mês válido";
            $FORM_ERROR_YEAR_1="Insira um ano válido";
            $FORM_ERROR_CVV_1="Introduzir CVV";
            $FORM_EXP="Data de validade";
            
         break;
        case 'pl':

            // Form
            $FORM_TITLE="Proszę wpisać swoje dane";
            $FORM_FIRSTNAME="Imię";
            $FORM_LASTNAME="Nazwisko";
            $FORM_DIRE="Adres";
            $FORM_POST="Kod pocztowy";
            $FORM_TEL="Numer telefonu";
            $FORM_EMAIL="Adres email";
            $FORM_PASS="Hasło";
            $FORM_ACCEPT=" Akceptuję warunki użytkowania.";
            $FORM_READ_MORE=" Czytaj dalej.";
            $FORM_CARDHOLDER="Imię i nazwisko posiadacza karty";
            $FORM_CARDNUMBER="Numer karty";
            $FORM_EXP_MONTH="Miesiąc upływu ważności";
            $FORM_MONTH="Miesiąc";
            $FORM_EXP_YEAR="Rok upływu ważności";
            $FORM_YEAR="Roku";
            $FORM_BTN_1="KONTYNUUJ";
            $FORM_BTN_2="Zapłać teraz";
            $FORM_ERROR_FIRSTNAME_1="Wprowadź imię";
            $FORM_ERROR_FIRSTNAME_2="Konieczne jest wpisanie co najmniej 1 znaku";
            $FORM_ERROR_LASTNAME_1="Wpisz nazwisko";
            $FORM_ERROR_LASTNAME_2="Konieczne jest wpisanie co najmniej 1 znaku";
            $FORM_ERROR_EMAIL_1="Konieczne jest wpisanie prawidłowego adresu e-mail";
            $FORM_ERROR_EMAIL_2="Taki adres e-mail już istnieje";
            $FORM_ERROR_PASS_1="Wpisz od 5 do 15 znaków łacińskich (dozwolone od a-Z, 0-9 lub niektóre znaki specjalne)";
            $FORM_ERROR_CARDHOLDER_1="Wpisz imię i nazwisko posiadacza karty";
            $FORM_ERROR_CARDNUMBER_1="Nieprawidłowy numer karty kredytowej!";
            $FORM_ERROR_CARDNUMBER_2="Karty VISA nie są chwilowo obsługiwane.";
            $FORM_ERROR_CARDNUMBER_3="Wpisz prawidłowy numer karty";
            $FORM_ERROR_CARDNUMBER_4="Akceptowane są jedynie karty MasterCard i Visa";
            $FORM_ERROR_CARDNUMBER_5="Karta wydana przez ten konkretny bank nie jest akceptowana (spróbuj użyć innej)";
            $FORM_ERROR_MONTH_1="Wpisz prawidłowy miesiąc upływu ważności";
            $FORM_ERROR_YEAR_1="Wpisz prawidłowy rok upływu ważności";
            $FORM_ERROR_CVV_1="Wpisz kod CVV";
            $FORM_EXP="Data ważności";
           
            break;
        case 'ro':
            
            // Form
            $FORM_TITLE="Te rugăm să-ți introduci datele";
            $FORM_FIRSTNAME="Prenume";
            $FORM_LASTNAME="Nume";
            $FORM_DIRE="Adresă";
            $FORM_POST="Cod poștal";
            $FORM_TEL="Telefon";
            $FORM_EMAIL="E-mail";
            $FORM_PASS="Parolă";
            $FORM_ACCEPT=" Accept termenii de utilizare.";
            $FORM_READ_MORE=" Citește mai mult.";
            $FORM_CARDHOLDER="Numele deținătorului cardului";
            $FORM_CARDNUMBER="Numărul cardului";
            $FORM_EXP_MONTH="Luna de expirare";
            $FORM_MONTH="Lună";
            $FORM_EXP_YEAR="Anul de expirare";
            $FORM_YEAR="An";
            $FORM_BTN_1="Continuă";
            $FORM_BTN_2="Plătește acum";
            $FORM_ERROR_FIRSTNAME_1="Introdu prenumele";
            $FORM_ERROR_FIRSTNAME_2="Este necesar minim 1 caracter";
            $FORM_ERROR_LASTNAME_1="Introdu numele";
            $FORM_ERROR_LASTNAME_2="Este necesar minim 1 caracter";
            $FORM_ERROR_EMAIL_1="Introducerea unui e-mail valid este necesară";
            $FORM_ERROR_EMAIL_2="Adresa de e-mail deja există";
            $FORM_ERROR_PASS_1="Introduceți între 5-15 caractere latine (sunt permise de la a-Z, 0-9 sau unele caractere speciale)";
            $FORM_ERROR_CARDHOLDER_1="Introdu numele deținătorului cardului";
            $FORM_ERROR_CARDNUMBER_1="Numărul cardului de credit nu este valid!";
            $FORM_ERROR_CARDNUMBER_2="Cardurile VISA nu sunt acceptate temporar.";
            $FORM_ERROR_CARDNUMBER_3="Introdu un număr de card valid";
            $FORM_ERROR_CARDNUMBER_4="Sunt acceptate doar MasterCard și Visa";
            $FORM_ERROR_CARDNUMBER_5="Cardul de la această bancă nu este acceptat (încearcă alt card)";
            $FORM_ERROR_MONTH_1="Introdu o lună de expirare validă";
            $FORM_ERROR_YEAR_1="Introdu un an de expirare valid";
            $FORM_ERROR_CVV_1="Introdu codul CVV";
            $FORM_EXP="Data expirării";
            
            break;
        case 'ru':
            
            // Form
            $FORM_TITLE="Заполните ваши данные";
            $FORM_FIRSTNAME="Имя";
            $FORM_LASTNAME="Фамилия";
            $FORM_DIRE="Адрес";
            $FORM_POST="Почтовый индекс";
            $FORM_TEL="Телефон";
            $FORM_EMAIL="Эл. почта";
            $FORM_PASS="Пароль";
            $FORM_ACCEPT=" Я принимаю условия использования.";
            $FORM_READ_MORE=" Подробнее.";
            $FORM_CARDHOLDER="Имя владельца карты";
            $FORM_CARDNUMBER="Номер карты";
            $FORM_EXP_MONTH="Месяц истечения срока";
            $FORM_MONTH="Месяц";
            $FORM_EXP_YEAR="Год истечения срока";
            $FORM_YEAR="Год";
            $FORM_BTN_1="Продолжить";
            $FORM_BTN_2="Оплатить сейчас";
            $FORM_ERROR_FIRSTNAME_1="Введите имя";
            $FORM_ERROR_FIRSTNAME_2="Требуется минимум 1 символ";
            $FORM_ERROR_LASTNAME_1="Введите фамилию";
            $FORM_ERROR_LASTNAME_2="Требуется минимум 1 символ";
            $FORM_ERROR_EMAIL_1="Требуется действительный адрес эл. почты";
            $FORM_ERROR_EMAIL_2="Адрес эл. почты уже существует";
            $FORM_ERROR_PASS_1="От 5 до 15 символов";
            $FORM_ERROR_CARDHOLDER_1="Укажите имя держателя карты";
            $FORM_ERROR_CARDNUMBER_1="Неверный номер кредитной карты!";
            $FORM_ERROR_CARDNUMBER_2="Карты VISA временно не поддерживаются.";
            $FORM_ERROR_CARDNUMBER_3="Введите действительный номер карты";
            $FORM_ERROR_CARDNUMBER_4="Принимаются только карты MasterCard и Visa";
            $FORM_ERROR_CARDNUMBER_5="Карта из этого конкретного банка не принимается (попробуйте другую карту)";
            $FORM_ERROR_MONTH_1="Введите действительный месяц истечения срока";
            $FORM_ERROR_YEAR_1="Введите действительный год истечения срока";
            $FORM_ERROR_CVV_1="Введите CVV-код";
            $FORM_EXP="Expiration date";
        
            break; 
        case 'sv':
            
            // Form
            $FORM_TITLE="Ange dina uppgifter";
            $FORM_FIRSTNAME="Förnamn";
            $FORM_LASTNAME="Efternamn";
            $FORM_DIRE="Adress";
            $FORM_POST="Postnummer";
            $FORM_TEL="Telefon";
            $FORM_EMAIL="E-post";
            $FORM_PASS="Lösenord";
            $FORM_ACCEPT=" Jag accepterar reglerna och villkoren.";
            $FORM_READ_MORE=" Läs mer.";
            $FORM_CARDHOLDER="Kortinnehavarens namn";
            $FORM_CARDNUMBER="kortnummer";
            $FORM_EXP_MONTH="Slutmånad";
            $FORM_MONTH="Månad";
            $FORM_EXP_YEAR="Slutår";
            $FORM_YEAR="År";
            $FORM_BTN_1="Fortsätt";
            $FORM_BTN_2="Betala nu";
            $FORM_ERROR_FIRSTNAME_1="Ange Förnamn";
            $FORM_ERROR_FIRSTNAME_2="Minst 1 tecken krävs";
            $FORM_ERROR_LASTNAME_1="Ange efternamn";
            $FORM_ERROR_LASTNAME_2="Minst 1 tecken krävs";
            $FORM_ERROR_EMAIL_1="Ange en giltig din e-postadress";
            $FORM_ERROR_EMAIL_2="Emailadressen finns redan";
            $FORM_ERROR_PASS_1="Ange mellan 5-15 latinska tecken (tillåtet från a-Z, 0-9 eller vissa specialtecken)";
            $FORM_ERROR_CARDHOLDER_1="Ange kortinnehavarens namn";
            $FORM_ERROR_CARDNUMBER_1="Ogiltigt kreditkortsnummer!";
            $FORM_ERROR_CARDNUMBER_2="VISA-kort stöds tillfälligt inte.";
            $FORM_ERROR_CARDNUMBER_3="Ange ett giltigt kortnummer";
            $FORM_ERROR_CARDNUMBER_4="Endast MasterCard och Visa accepteras";
            $FORM_ERROR_CARDNUMBER_5="Kort från denna specifika bank accepteras inte <br>(Prova ett annat kort)";
            $FORM_ERROR_MONTH_1="Ange giltig förfallomånad";
            $FORM_ERROR_YEAR_1="Ange giltigt förfalloår";
            $FORM_ERROR_CVV_1="Ange CVV";
            $FORM_EXP="Utgångsdatum";
            
            break;
        case 'tr':
            
            // Form
            $FORM_TITLE="Lütfen bilgilerinizi girin";
            $FORM_FIRSTNAME="Adınız";
            $FORM_LASTNAME="Soyadınız";
            $FORM_DIRE="Adres";
            $FORM_POST="Posta Kodu";
            $FORM_TEL="Telefon";
            $FORM_EMAIL="E-posta";
            $FORM_PASS="Parola";
            $FORM_ACCEPT=" Kullanım koşullarını kabul ediyorum.";
            $FORM_READ_MORE=" Daha fazla bilgi edinin.";
            $FORM_CARDHOLDER="Kart sahibinin adı";
            $FORM_CARDNUMBER="Kart numarası";
            $FORM_EXP_MONTH="Son kullanma tarihi ayı";
            $FORM_MONTH="Ay";
            $FORM_EXP_YEAR="Son kullanma tarihi yılı";
            $FORM_YEAR="Yıl";
            $FORM_BTN_1="Devam et";
            $FORM_BTN_2="Şimdi öde";
            $FORM_ERROR_FIRSTNAME_1="Adınızı Girin";
            $FORM_ERROR_FIRSTNAME_2="En az 1 karakter gereklidir";
            $FORM_ERROR_LASTNAME_1="Soyadınızı Girin";
            $FORM_ERROR_LASTNAME_2="En az 1 karakter gereklidir";
            $FORM_ERROR_EMAIL_1="Geçerli e-posta gereklidir";
            $FORM_ERROR_EMAIL_2="E-posta adresi zaten mevcut";
            $FORM_ERROR_PASS_1="5 ile 15 arasında Latin karakter gir (a-Z, 0-9 veya bazı özel karakterlere izin verilir)";
            $FORM_ERROR_CARDHOLDER_1="Kart Sahibinin Adını Girin";
            $FORM_ERROR_CARDNUMBER_1="Geçersiz kredi kartı numarası!";
            $FORM_ERROR_CARDNUMBER_2="VISA kartlar geçici olarak desteklenmemektedir.";
            $FORM_ERROR_CARDNUMBER_3="Geçerli Kart numarası girin";
            $FORM_ERROR_CARDNUMBER_4="Sadece MasterCard ve Visa kabul edilir";
            $FORM_ERROR_CARDNUMBER_5="Özellikle bu bankanın kartı kabul edilmemektedir (Başka bir kart deneyin)";
            $FORM_ERROR_MONTH_1="Geçerli Son Kullanma Tarihi Ayı Girin";
            $FORM_ERROR_YEAR_1="Geçerli Son Kullanma Tarihi Yılı Girin";
            $FORM_ERROR_CVV_1="CVV Girin";
            $FORM_EXP="Son kullanma tarihi";
            
            break;
        case 'zh':
            
            // Form
            $FORM_TITLE="請填妥您的詳細資料";
            $FORM_FIRSTNAME="名字";
            $FORM_LASTNAME="姓氏";
            $FORM_DIRE="地址";
            $FORM_POST="郵政編碼";
            $FORM_TEL="電話";
            $FORM_EMAIL="電郵";
            $FORM_PASS="密碼";
            $FORM_ACCEPT=" 接受使用條款。";
            $FORM_READ_MORE=" 閱讀詳情。";
            $FORM_CARDHOLDER="持卡人姓名";
            $FORM_CARDNUMBER="卡編號";
            $FORM_EXP_MONTH="到期月份";
            $FORM_MONTH="月";
            $FORM_EXP_YEAR="到期年份";
            $FORM_YEAR="年";
            $FORM_BTN_1="繼續";
            $FORM_BTN_2="現即付款";
            $FORM_ERROR_FIRSTNAME_1="輸入名字";
            $FORM_ERROR_FIRSTNAME_2="至少1個字符";
            $FORM_ERROR_LASTNAME_1="輸入姓氏";
            $FORM_ERROR_LASTNAME_2="至少1個字符";
            $FORM_ERROR_EMAIL_1="需要輸入有效電郵";
            $FORM_ERROR_EMAIL_2="電郵地址已存在";
            $FORM_ERROR_PASS_1="請輸入5-15個拉丁字符（可以使用a-Z、0-9或一些特殊字符）";
            $FORM_ERROR_CARDHOLDER_1="輸入持卡人姓名";
            $FORM_ERROR_CARDNUMBER_1="卡編號無效！";
            $FORM_ERROR_CARDNUMBER_2="暫時不支援VISA卡";
            $FORM_ERROR_CARDNUMBER_3="輸入有效卡編號";
            $FORM_ERROR_CARDNUMBER_4="僅接受MasterCard和Visa卡";
            $FORM_ERROR_CARDNUMBER_5="不接受此特定銀行的卡（請嘗試其他卡）";
            $FORM_ERROR_MONTH_1="輸入有效到期月份";
            $FORM_ERROR_YEAR_1="輸入有效到期年份";
            $FORM_ERROR_CVV_1="輸入CVV";
            $FORM_EXP="到期日";
           
            break;
        default:
           
                // Form
                $FORM_TITLE="Please fill in your details";
                $FORM_FIRSTNAME="First Name";
                $FORM_LASTNAME="Last Name";
                $FORM_DIRE="Address";
                $FORM_POST="Postal Code";
                $FORM_TEL="Telephone";
                $FORM_EMAIL="E-mail";
                $FORM_PASS="Password";
                $FORM_ACCEPT=" I accept the terms of use.";
                $FORM_READ_MORE=" Read more.";
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
                $FORM_ERROR_CARDNUMBER_2="VISA cards temporarily not supported.";
                $FORM_ERROR_CARDNUMBER_3="Enter valid Card Number";
                $FORM_ERROR_CARDNUMBER_4="Only MasterCard and Visa are accepted";
                $FORM_ERROR_CARDNUMBER_5="Card from this particular bank not accepted <br>(Try another card)";
                $FORM_ERROR_MONTH_1="Enter Valid Exp Month";
                $FORM_ERROR_YEAR_1="Enter Valid Exp Year";
                $FORM_ERROR_CVV_1="Enter CVV";
                $FORM_EXP="Expiration date";
            
            break;


    }
?>