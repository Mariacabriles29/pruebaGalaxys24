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

$acceptLang = ['ar','bg','cs','da', 'de', 'el', 'en','es','fi','fr','he','hr','hu','ms','it','ja','kr','nb','nl','pt','pl','ro','sv','tr','zh'];
// echo $lang;
$lang = in_array($lang, $acceptLang) ? $lang : 'en';

// echo $lang;

$actual_link = "$_SERVER[REQUEST_URI]";

$rrr = strpos($actual_link, 'affiliate_id', 1);


$lin = substr($actual_link, $rrr);
  
    // Constantes iguales para todos los idiomas
  
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

    switch($lang) {

        case 'ar':
           
            // index_auth\.php -----------
            // Content
            // $PRICE='$3';
            if($PRICE == '3€' || $PRICE == '€3'){

                $MON_F = 'forty-nine with ninety-nine euros';

            }elseif($PRICE == '3USD' || $PRICE == '$3'){

                $MON_F = 'forty-nine with ninety-nine american dollars';

            }elseif($PRICE == '£3'){

                $MON_F = 'forty-nine pounds and ninety-nine pence';

            }

            $TEXT_1="احصل على الجهاز الجديد";
            $TEXT_2="أسرع! سينتهي هذا العرض قريبًا!";

            $TEXT_3="كاميرا التصوير الليلي";
            $TEXT_4="إضاءة خافتة... كاميرا... أكشن";
            $TEXT_5="التقط أنقى الصور والفيديوهات طوال الليل منذ لحظة الغروب إلى وقت الفجر. فالكاميرا الأكثر تطوراً والمعالج الأسرع في هواتف Galaxy يتكيّفان مع الإضاءة الخافتة وتقليل التشويش، كما أن عدسات الكاميرا ستنقوم بتنقية اللقطة عبر تقليل الوهج.";
           

            $TEXT_6=" قلم S PEN";
            $TEXT_7="علامة Note االفارقة";
            $TEXT_8="لا حاجة بعد الآن لاستخدام الدفاتر بفضل قلم S Pen الذي يعكس فخامة Note، ويجعل الرسم وتدوين الملاحظات أمراً في غاية السهولة وصديقاً للبيئة";
           
            $TEXT_9="قوة هائلة بلا توقف";
            $TEXT_10="استمتع بترفيه متنوّع ومارس ألعابك المفضلة دون توقّف بفضل المعالج الأقوى في هواتف Galaxy المصمم لزيادة الكفاءة والسلاسة عند اللعب ومشاهدة الفيديوهات لأطول فترة تشاء.";

            $TEXT_11="احصل عليها الآن!";

            $TEXT_12="احصل على طلبك الخاص الآن وقم بتعبئة بريدك الإلكتروني:";

            $PRICE="فقط 3 دولار";

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


            // asterisco
            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost '.$MON_F.' every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            // Footer
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a monthly subscription cloud storage service that provides its members access to its platform where they can upload, store, manage, download their files.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs ".$MON_F." per month, payable by credit or debit card.";
            $FOOT_WIN="How can I win?"; 
            $FOOT_WIN_TEXT="With your premium account, you participate in the draw for this promotional product (Samsung S22) by randomly selecting the winner from one of its active users. The next draw will take place on 31-12-2024 among all active users. More information in the Terms of Service section. The winner will be contacted to proceed with the shipment or delivery of the prize. We have no connection with Samsung and its partners.";
            
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

        case 'bg':
            // index_auth.php -----------
            // Content
            // $PRICE='$3';

            if($PRICE == '3€' || $PRICE == '€3'){

                $MON_F = 'forty-nine with ninety-nine euros';

            }elseif($PRICE == '3USD' || $PRICE == '$3'){

                $MON_F = 'forty-nine with ninety-nine american dollars';

            }elseif($PRICE == '£3'){

                $MON_F = 'forty-nine pounds and ninety-nine pence';

            }

            $TEXT_1="Вземете новите";
            $TEXT_2="Побързай! Тази оферта ще изтече скоро!";

            $TEXT_3="NIGHTOGRAPHY КАМЕРА";
            $TEXT_4="Слаба светлина! Камера! Действие!            ";
            $TEXT_5="Прави ясни снимки и видеоклипове от здрач до зори. Най-съвременният и усъвършенстван сензор на камерата и най-бързият процесор на Galaxy се справят отлично при слаба светлина и намаляват шума. Обективът на камерата също спомага за яснотата на кадрите, като намалява отблясъците.";
           

            $TEXT_6="S PEN";
            $TEXT_7="Емблематичната Note писалка идва вградена            ";
            $TEXT_8="S Pen продължава традицията на Note. Освен това ти спестява необходимостта да носиш навсякъде лаптоп. Вече можеш да си водиш бележки и да рисуваш по лесен и екосъобразен начин.            ";
           
            $TEXT_9="Мощ за тези, които не спират";
            $TEXT_10="Вдигни градуса на забавлението с най-мощния чип на смартфон Galaxy. Подобрените функции означават, че всичко от игри до стрийминг е оптимизирано и върви гладко, без да изтощава прекалено бързо батерията.";

            $TEXT_11="вземи сега!";

            $TEXT_12="Вземи специалната си поръчка сега и попълни имейла си:";
            $TEXT_13="Cамо";

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
            //asterisco
            // asterisco
            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost '.$MON_F.' every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            // Footer
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a monthly subscription cloud storage service that provides its members access to its platform where they can upload, store, manage, download their files.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs ".$MON_F." per month, payable by credit or debit card.";
            $FOOT_WIN="How can I win?"; 
            $FOOT_WIN_TEXT="With your premium account, you participate in the draw for this promotional product (Samsung S22) by randomly selecting the winner from one of its active users. The next draw will take place on 31-12-2024 among all active users. More information in the Terms of Service section. The winner will be contacted to proceed with the shipment or delivery of the prize. We have no connection with Samsung and its partners.";
            
 
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


        case 'cs':
            // index_auth.php -----------
            // Content
            // $PRICE='$3';

            if($PRICE == '3€' || $PRICE == '€3'){

                $MON_F = 'forty-nine with ninety-nine euros';

            }elseif($PRICE == '3USD' || $PRICE == '$3'){

                $MON_F = 'forty-nine with ninety-nine american dollars';

            }elseif($PRICE == '£3'){

                $MON_F = 'forty-nine pounds and ninety-nine pence';

            }

            $TEXT_1="Dostat ty nové";
            $TEXT_2="Pospěšte si! Tato nabídka brzy vyprší!";

            $TEXT_3="REŽIM NIGHTOGRAPHY";
            $TEXT_4="Světla. Kamera. Akce";
            $TEXT_5="Pořizujte ostré fotografie a videa od soumraku až do úsvitu. Nejpokročilejší snímač fotoaparátu Galaxy a nejrychlejší procesor se vypořádají se slabým osvětlením a sníží šum. Čočka fotoaparátu pak navíc zjemní záběr tím, že ztlumí odlesky.";
           

            $TEXT_6=" S PEN.";
            $TEXT_7="Note's signature tool comes built in";
            $TEXT_8="S Pen keeps the legacy of Galaxy Note alive. Capture scribbles, strokes of genius and everything in between with the built-in S Pen. You can even snap pics without needing to set a selfie timer.";
           
            $TEXT_9="Dodá výdrž nezastavitelným";
            $TEXT_10="Maximalizujte svůj volný čas s nejvýkonnějším čipem chytrého telefonu Galaxy. Vše od hraní her až po streamování je optimalizované a bezproblémové – aniž by se vybíjela baterie.";

            $TEXT_11="získejte teď!";

            $TEXT_12="Získejte nyní svou speciální objednávku a zadejte svůj e-mail:";
            $TEXT_13="Pouze";

         
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
            //asterisco
            // asterisco
            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost '.$MON_F.' every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            // Footer
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a monthly subscription cloud storage service that provides its members access to its platform where they can upload, store, manage, download their files.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs ".$MON_F." per month, payable by credit or debit card.";
            $FOOT_WIN="How can I win?"; 
            $FOOT_WIN_TEXT="With your premium account, you participate in the draw for this promotional product (Samsung S22) by randomly selecting the winner from one of its active users. The next draw will take place on 31-12-2024 among all active users. More information in the Terms of Service section. The winner will be contacted to proceed with the shipment or delivery of the prize. We have no connection with Samsung and its partners.";
            
 
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


        case 'da':
            // index_auth.php -----------
            // Content
            // $PRICE='3€';

            if($PRICE == '3€' || $PRICE == '€3'){

                $MON_F = 'niogfyrre med nioghalvfems euro';

            }elseif($PRICE == '3USD' || $PRICE == '$3'){

                $MON_F = 'niogfyrre med nioghalvfems amerikanske dollars';

            }elseif($PRICE == '£3'){

                $MON_F = 'niogfyrre pund og nioghalvfems pence';

            }

            $TEXT_1="Få det nye";
            $TEXT_2="Skynd dig! Dette tilbud udløber snart!";

            $TEXT_3="NIGHTOGRAPHY-KAMERA";
            $TEXT_4="Skru ned for lyset, skru op for kameraet.";
            $TEXT_5="Tag skarpe fotos og videoer uanset tid på døgnet. Den mest avancerede kamerasensor og den hurtigste processor i nogen Samsung Galaxy håndterer svagt lys og reducerer støj. Og kameraobjektivet gør billederne klarere ved at reducere refleksioner.";
           

            $TEXT_6="S Pen";
            $TEXT_7="Note-seriens signaturværktøj er indbygget";
            $TEXT_8="S Pen viderefører arven fra Note-serien. Du slipper for at slæbe rundt på tunge computere, så du nemt og fleksibelt kan skrive noter og tegne skitser.";
           
            $TEXT_9="Masser af kræfter – selv til dig, der aldrig sætter farten ned";
            $TEXT_10="Få mere ud af din fritid med den kraftigste processor nogensinde i en Samsung Galaxy-mobil. Forbedrede funktioner over hele linjen sikrer, at alt fra spil til streaming kører optimalt og helt jævnt – uden at batteriet løber tør for strøm.";

            $TEXT_11="få nu!";
            
            $TEXT_12="Få dit særtilbud nu, og udfyld med din e-mailadresse:";

            $TEXT_13="Kun";

           
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
            //asterisco
            $ASTERISCO='*Brug af PRØVEPERIODEN indebærer, at du opretter et todages abonnement på regulardrive.net-tjenesten til den pris, der er angivet i forbindelse med kampagnen. Hvis du ikke opsiger din konto efter de to dage, vil du blive opkrævet for et premium-abonnement, som  koster '.$MON_F.' om måneden. Du finder al denne information samt betingelserne for abonnementet i vores vilkår og betingelser.';
            //footer
            
            // Footer
            $FOOT_WHAT='Hvad er regulardrive.net?';
            $FOOT_WHAT_TEXT='Det er en cloud-baseret lagringstjeneste med et månedligt abonnement, som giver abonnenterne adgang til en platform, hvor de kan uploade, lagre, administrere og downloade deres filer.';
            $FOOT_COMMIT="Hvad forpligter jeg mig til?";
            $FOOT_COMMIT_TEXT="Brug af PRØVEPERIODEN indebærer, at du opretter et premium-abonnement på regulardrive.net-tjenesten. Hvis du ikke opsiger din konto efter prøveperioden på to dage, skal du betale den månedlige takst for premium-abonnementet. Abonnementets betingelser kan ses her: <a id='tos1' href='". $TOS3 ."' style='color: lightgray;' target='_blank'>Vilkår og betingelser for tjenesten</a>. Ubesværet opsigelse. Hvis du ikke opsiger abonnementet i løbet af prøveperioden, skal du betale den månedlige takst for abonnementet, og det bliver automatisk fornyet hver måned, indtil du opsiger det. Abonnementet koster ".$MON_F." om måneden, og du kan betale med kredit- eller debetkort.";
            $FOOT_WIN="Hvordan vinder jeg?"; 
            $FOOT_WIN_TEXT="Med en premium-konto deltager du i lodtrækningen om dette kampagneprodukt (Samsung S22), hvor vi udtrækker en tilfældig vinder blandt vores aktive brugere. Den næste lodtrækning finder sted den 31/12/2024 blandt alle aktive brugere. Få flere oplysninger i afsnittet Vilkår og betingelser for tjenesten. Vinderen bliver kontaktet vedr. forsendelse eller levering af præmien. Kampagnen er ikke tilknyttet Samsung eller dennes partnere.";
            

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


        case 'de': 
            // index_auth.php -----------
            // Content
            // $PRICE='3€';

            if($PRICE == '3€' || $PRICE == '€3'){

                $MON_F = 'Neunundvierzig mit neunundneunzig Euro';

            }elseif($PRICE == '3USD' || $PRICE == '$3'){

                $MON_F = 'Neunundvierzig mit neunundneunzig amerikanischen Dollar';

            }elseif($PRICE == '£3'){

                $MON_F = 'Neunundvierzig Pfund und neunundneunzig Pence';

            }

            $TEXT_1="Holen Sie sich das neue";
            $TEXT_2="Beeilen Sie sich! Dieses Angebot läuft in Kürze ab!";

            $TEXT_3="NIGHTOGRAPHY-KAMERA";
            $TEXT_4="Mach die Nacht zum Tag";
            $TEXT_5="Nimm scharfe Fotos und Videos auf - von der Dämmerung bis zum Morgengrauen. Unser fortschrittlichster Kamerasensor und der schnellste Prozessor in einem Galaxy Smartphone passen sich schlechten Lichtverhältnissen an und können das Rauschen reduzieren. Das Kameraobjektiv sorgt für klare Aufnahmen, indem es Streulicht reduziert.";
           

            $TEXT_6=" S PEN.";
            $TEXT_7="Der S Pen ist schnell zur Hand";
            $TEXT_8="Mit dem integrierten S Pen kannst du dein Notizbuch zu Hause lassen und Papier sparen. Schreibe und zeichne fast wie mit einem echten Stift direkt auf das Display, um deine besten Ideen und wichtige Erinnerungen festzuhalten.";
           
            $TEXT_9="Power für alle, die keine Pausen brauchen";
            $TEXT_10="Genieße deine Freizeit mit dem leistungsstärksten Prozessor, der bisher in einem Galaxy Smartphone verbaut wurde. Freu dich auf angepasste Funktionen in allen Bereichen. Erlebe beeindruckendes Spielen und Streaming – ohne den Akku zu belasten.";

            $TEXT_11="jetzt holen!";
          
            $TEXT_12="Jetzt Sonderbestellung anfordern und E-Mail angeben:";

            $TEXT_13="Nur";
            
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
            //asterisco
            $ASTERISCO='*Mit der Nutzung der PROBE abonnieren Sie den Service regulardrive.net für zwei Tage zum in der Aktion angegebenen Preis. Wenn Sie Ihr Konto nicht innerhalb von zwei Tagen kündigen, wird Ihnen alle 30 Tage die Gebühr für das Premium-Konto in Höhe von '.$MON_F.' in Rechnung gestellt In den Allgemeinen Geschäftsbedingungen finden Sie die vollständigen Informationen und Bedingungen für das Abonnement.';
            
            // Footer
            
            $FOOT_WHAT="Was ist regulardrive.net?";
            $FOOT_WHAT_TEXT="Es ist ein monatliches Abonnement eines Cloud-Speicherdienstes, der den Mitgliedern Zugang zu einer Plattform bietet, auf die sie ihre Dateien hoch laden, diese speichern, verwalten und herunterladen können";
            $FOOT_COMMIT="Wozu verpflichte ich mich?";
            $FOOT_COMMIT_TEXT='Mit der Nutzung von TRIAL abonnieren Sie den Premium-Service regulardrive.net. Wenn Sie Ihr Konto nicht kündigen, müssen Sie nach zwei Probetagen jeden Monat den Wert des Premium-Abonnements bezahlen. Die Abonnementbedingungen finden Sie hier: <a id="tos1" href="'. $TOS3 .'" style="color: lightgray;" target="_blank">Nutzungsbedingungen</a>. Einfache Abmeldung. Wenn Sie Ihr Abonnement während der Probezeit nicht kündigen, müssen Sie Ihr Abonnement jeden Monat bezahlen und es wird automatisch monatlich verlängert, bis Sie Ihr Abonnement kündigen. Das Abonnement kostet '.$MON_F.' pro Monat und ist mit einer Kredit- oder Debitkarte zu zahlen.';
            $FOOT_WIN="Wie kann ich gewinnen?";
            $FOOT_WIN_TEXT="Mit Ihrem Premium-Konto nehmen Sie an der Verlosung dieses Werbeartikels (Samsung S22) teil. Der Gewinner wird nach dem Zufallsprinzip aus der Gruppe aller aktiven Nutzer ausgewählt. Die nächste Ziehung aus der Gruppe aller aktiven Nutzer findet am 31.12.2024 statt. Weitere Informationen finden Sie im Abschnitt Nutzungsbedingungen. Zwecks Versand oder Lieferung des Preises kontaktieren wir den Gewinner. Wir stehen nicht in Verbindung mit Samsung und seinen Partnern.";

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
        case 'el':
            // index_auth.php -----------
            // Content
            // $PRICE='$3';

            if($PRICE == '3€' || $PRICE == '€3'){

                $MON_F = 'forty-nine with ninety-nine euros';

            }elseif($PRICE == '3USD' || $PRICE == '$3'){

                $MON_F = 'forty-nine with ninety-nine american dollars';

            }elseif($PRICE == '£3'){

                $MON_F = 'forty-nine pounds and ninety-nine pence';

            }

            $TEXT_1="Αποκτήστε το νέο";
            $TEXT_2="Βιαστείτε! Αυτή η προσφορά θα λήξει σύντομα!";

            $TEXT_3="ΚΑΜΕΡΑ NIGHTOGRAPHY";
            $TEXT_4="Χαμηλός φωτισμός. Κάμερα. Πάμε!";
            $TEXT_5="Τραβήξτε ευκρινείς φωτογραφίες και βίντεο, από το σούρουπο μέχρι το ξημέρωμα. Ο πιο προηγμένος αισθητήρας κάμερας και ο ταχύτερος επεξεργαστής Samsung Galaxy προσαρμόζουν τον χαμηλό φωτισμό και μειώνουν το θόρυβο, ενώ ο φακός της κάμερας καθαρίζει τη λήψη μειώνοντας την αντανάκλαση.";
           

            $TEXT_6=" S PEN.";
            $TEXT_7="Το εμβληματικό S Pen της σειράς Note, πλέον έρχεται ενσωματωμένο";
            $TEXT_8="Το S Pen διατηρεί ζωντανή την κληρονομιά του Note. Επιπλέον, σας βοηθά να απαλλαγείτε από τα σημειωματάρια, κάνοντας τα σκίτσα και τα σημειώματα μία εύκολη διαδικασία.";
           
            $TEXT_9="Ισχύς για όσους δεν κάνουν παύση";
            $TEXT_10="Αξιοποιήστε τον ελεύθερο χρόνο σας με το πιο ισχυρό τσιπ σε Samsung Galaxy smartphone. Οι βελτιωμένες δυνατότητες σε όλα τα επίπεδα σημαίνει ότι τα πάντα, από το παιχνίδι μέχρι το στριμάρισμα είναι απρόσκοπτα — χωρίς να τελειώνει γρήγορα η μπαταρία.";

            $TEXT_11="λάβετε τώρα!";

            $TEXT_12="Αποκτήστε την ειδική σας παραγγελία τώρα και συμπληρώστε το email σας:";

            $TEXT_13="μόνο";
           
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
            //asterisco
            // asterisco
            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost '.$MON_F.' every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            // Footer
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a monthly subscription cloud storage service that provides its members access to its platform where they can upload, store, manage, download their files.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs ".$MON_F." per month, payable by credit or debit card.";
            $FOOT_WIN="How can I win?"; 
            $FOOT_WIN_TEXT="With your premium account, you participate in the draw for this promotional product (Samsung S22) by randomly selecting the winner from one of its active users. The next draw will take place on 31-12-2024 among all active users. More information in the Terms of Service section. The winner will be contacted to proceed with the shipment or delivery of the prize. We have no connection with Samsung and its partners.";
            
 
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


        case 'en':
            // index_auth.php -----------
            // Content
            // $PRICE='$3';         
                      

            if($PRICE == '3€' || $PRICE == '€3'){

                $MON_F = 'forty-nine with ninety-nine euros';

            }elseif($PRICE == '3USD' || $PRICE == '$3'){

                $MON_F = 'forty-nine with ninety-nine american dollars';

            }elseif($PRICE == '£3'){

                $MON_F = 'forty-nine pounds and ninety-nine pence';

            }

            $TEXT_1="Get the new ";
            $TEXT_2="Hurry! This offer will expire soon!";

            $TEXT_3="NIGHTOGRAPHY";
            $TEXT_4="Low light. Camera. Action. ";
            $TEXT_5="Take crisp photos and videos, no matter the lighting. Galaxy's most advanced camera sensor and fastest processor reduce noise in low light for stunning shots.";
           

            $TEXT_6=" S PEN.";
            $TEXT_7="Note's signature tool comes built in";
            $TEXT_8="S Pen keeps the legacy of Galaxy Note alive. Capture scribbles, strokes of genius and everything in between with the built-in S Pen. You can even snap pics without needing to set a selfie timer.";
           
            $TEXT_9="Power for those who don't pause";
            $TEXT_10="Game at full throttle and smoothly switch between apps with our fastest processor ever.";

            $TEXT_11="get now!";

            $TEXT_12="Get your special order now and fill in your email:";

            $TEXT_13="Only";

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
            //asterisco
            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost '.$MON_F.' every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            // Footer
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a monthly subscription cloud storage service that provides its members access to its platform where they can upload, store, manage, download their files.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs ".$MON_F." per month, payable by credit or debit card.";
            $FOOT_WIN="How can I win?"; 
            $FOOT_WIN_TEXT="With your premium account, you participate in the draw for this promotional product (Samsung S22) by randomly selecting the winner from one of its active users. The next draw will take place on 31-12-2024 among all active users. More information in the Terms of Service section. The winner will be contacted to proceed with the shipment or delivery of the prize. We have no connection with Samsung and its partners.";
            
 
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
            $PRIVACY3=ASSET_PATH."/legal/es/privacy-es.html";
            $TOS3=ASSET_PATH."/legal/es/tos-es.html";
            $GDPR3=ASSET_PATH."/legal/es/gdpr-es.html";
            // index_auth.php -----------
            // Content
            // $PRICE='3USD';           


            if($PRICE == '3€' || $PRICE == '€3'){

                $MON_F = 'cuarenta y nueve con noventa y nueve euros';

            }elseif($PRICE == '3USD' || $PRICE == '$3'){

                $MON_F = 'cuarenta y nueve con noventa y nueve dólares americanos';

            }elseif($PRICE == '£3'){

                $MON_F = 'cuarenta y nueve libras con noventa y nueve peniques';

            }
         

            
            $TEXT_1="Obtén el nuevo"; 
            $TEXT_2="¡Deprisa! ¡Esta oferta caduca pronto!";

            $TEXT_3="CÁMARA NIGHTOGRAPHY";
            $TEXT_4="Lleva la fotografía nocturna a un nuevo nivel";
            $TEXT_5="Captura fotos y vídeos totalmente nítidos,con el nuevo modo de 200MP optimizado por la (IA),con un sensor de estabilización óptica de imagen (OIS) y una apertura más amplia (f/1.8), podras capturar fotos detalladas en condiciones a poco luz, ademas de su modo nocturno mejorado, que usa IA  para optimizar la exposición y reducir el ruido en las fotos nocturnas.";

            $TEXT_6=" S PEN";
            $TEXT_7="La firma de Galaxy Note, ahora en Galaxy S24 Ultra";
            $TEXT_8="El legado de Galaxy Note pervive. Escribe, navega y dibuja con una precisión inalcanzable para tus dedos en la nueva pantalla plana.";
           
            $TEXT_9="Batería para jugar todo el día sin parar";
            $TEXT_10="Con una enorme capacidad y una mayor eficiencia energética, la batería de Galaxy S24 Ultra te da una vida extra cuando más la necesitas. Ahora tienes todas las herramientas para vencer la batalla final.";

            $TEXT_11="OBTÉN YA";

            $TEXT_12="Obtén tu pedido especial ahora y rellena tu correo electrónico:";

            $TEXT_13="Sólo";


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
            $ASTERISCO='*Al usar la PRUEBA, se suscribirá al servicio de regulardrive.net durante 2 días al precio que indica la promoción. Después de 2 días, si no cancela su cuenta, se le cobrará el precio de la cuenta premium que tendrá un costo de '.$MON_F.' cada 30 días. Puede encontrar toda esta información y condiciones para la suscripción en Términos y condiciones.';
            // Footer
            $FOOT_WHAT="¿Qué es regulardrive.net?";
            $FOOT_WHAT_TEXT="Es un servicio de almacenamiento en la nube por suscripción mensual que proporciona a sus miembros acceso a su plataforma donde pueden cargar, almacenar, administrar, descargar sus ficheros.";
            $FOOT_COMMIT="¿A qué me comprometo?";
            $FOOT_COMMIT_TEXT='Al usar TRIAL, usted se suscribe al servicio premium de regulardrive.net. Después de dos días de prueba, si no cancela su cuenta, tendrá que pagar el valor de la suscripción premium cada mes. Las condiciones de suscripción están disponibles aquí: <a id="tos1" href="'. $TOS3 .'" target="_blank">Términos y Condiciones</a> . Fácil desuscripción. Si no cancela la suscripción durante su período de prueba, tendrá que pagar su suscripción cada mes y se renovará mensualmente automáticamente hasta que cancele su suscripción. La suscripción cuesta '.$MON_F.' por mes, pagaderos con tarjeta de crédito o débito.';
            $FOOT_WIN="¿Qué esta página web?";
            $FOOT_WIN_TEXT="Con tu cuenta premium, participas en el sorteo de este producto promocional (Samsung S22) seleccionando al azar al ganador de entre uno de sus usuarios activos. El próximo sorteo se realizará el 31-12-2024 entre todos los usuarios activos. Más información en la sección de Condiciones de Servicio. Se contactará con el ganador para proceder con el envío o entrega del premio. No tenemos conexión con Samsung y sus socios.";
           
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


        
        case 'fi':
            // index_auth.php -----------
            // Content
            // $PRICE='3€';

            if($PRICE == '3€' || $PRICE == '€3'){

                $MON_F = 'neljäkymmentäyhdeksän yhdeksänkymmentäyhdeksän euroa';

            }elseif($PRICE == '3USD' || $PRICE == '$3'){

                $MON_F = 'neljäkymmentäyhdeksän yhdeksänkymmentäyhdeksän Yhdysvaltain dollaria';

            }elseif($PRICE == '£3'){

                $MON_F = 'neljäkymmentäyhdeksän puntaa ja yhdeksänkymmentäyhdeksän penniä';

            }

            $TEXT_1="Hanki uusia";
            $TEXT_2="Kiirehdi! Tämä tarjous päättyy pian!";

            $TEXT_3="NIGHTOGRAPHY-KAMERA";
            $TEXT_4="Hämärä valo. Kamera. Käy.";
            $TEXT_5="Ota teräviä kuvia ja videoita aamun sarastuksesta iltahämärään. Samsung Galaxyn edistynein kamerakenno ja nopein suoritin selviytyvät heikosta valosta ja vähentävät kuvan rakeisuutta. Lisäksi kameran linssi tekee kuvasta selkeämmän heikentämällä heijastuksia.";
           

            $TEXT_6=" S PEN.";
            $TEXT_7="Note-mallien allekirjoitustyökalu sisäisenä";
            $TEXT_8="S Pen pitää Note-mallien perintöä elossa. Et tarvitse mukaasi painavaa kannettavaa tietokonetta ja voit tehdä muistiinpanoja ja luonnoksia todella kätevästi ilman paperia.";
           
            $TEXT_9="Tehoa kaikille, jotka eivät pidä taukoja";
            $TEXT_10="Ota kaikki irti vapaa-ajastasi Samsung Galaxy -puhelinten kaikkien aikojen tehokkaimmalla suorittimella. Kaikkia toimintoja on parannettu, joten kaikki pelaamisesta suoratoistoon toimii optimoidusti ja saumattomasti – eikä akku lopu kesken.";

            $TEXT_11="hanki nyt!";

            $TEXT_12="Hanki erikoistilauksesi nyt ja syötä sähköpostisi:";
            $TEXT_13="Vain";
            
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
             $FORM_ERROR_CARDNUMBER_1="Invalid credit card number!";
             $FORM_ERROR_CARDNUMBER_2="VISA cards temporarily not  supported.";
             $FORM_ERROR_CARDNUMBER_3="Anna kelvollinen kortin numero";
             $FORM_ERROR_CARDNUMBER_4="Only MasterCard and Visa are accepted";
             $FORM_ERROR_CARDNUMBER_5="Kortti tästä tietystä pankista ei hyväksytä <br>(kokeile toista korttia)";
             $FORM_ERROR_MONTH_1="Syötä voimassaoleva päättymiskuukausi";
             $FORM_ERROR_YEAR_1="Syötä voimassaoleva päättymisvuosi";
             $FORM_ERROR_CVV_1="Syötä CVV";
             //asterisco
            $ASTERISCO='* Osallistumalla tähän KOKEILUUN tilaat regulardrive.net-palvelun 2 päiväksi tarjouksessa ilmoitettuun hintaan. Mikäli et peru tilaustasi 2 päivän kokeilun jälkeen, se jatkuu premium-tilin hinnalla, jolloin maksat siitä '.$MON_F.' 30 päivää kohden. Kaikki tilaukseen liittyvät tiedot ja ehdot ovat saatavilla Käyttöehdot-osiossa.';

            // Footer
            $FOOT_WHAT='Mikä regulardrive.net on?';
            $FOOT_WHAT_TEXT='Se on kuukausittaisilla tilauksilla varustettu verkkosivutiedostojen / aloitussivujen luomispalvelu, joka tarjoaa jäsenilleen pääsyn alustalle, jolla he voivat suunnitella ja luoda verkkosivujensa tiedostoja. Luo helposti verkkosivuja / aloitussivuja tai portfolioita. * Työkalua käytetään tiedostojen luomiseen. Jos sinulla on online-verkkosivu, sinun on ladattava tiedostot omaan palvelimellesi / isäntään.';
            $FOOT_COMMIT="Sitoudunko minä mihinkään?";
            $FOOT_COMMIT_TEXT='Osallistumalla KOKEILUUN tilaat regulardrive.net-sivuston premium-palvelun. Jos et peru tilaustasi kahden&nbsp;päivän kokeilun jälkeen, maksat premium-palvelun kuukausittaisen hinnan. Tilauspalvelun ehdot ovat saatavilla tässä:&nbsp;<a id="tos1" href="'. $TOS3 .'" style="color: lightgray;" target="_blank">Käyttöehdot</a>. Peru tilauksesi helposti ja vaivatta. Jos et peru tilaustasi kokeilujakson aikana, maksat siitä kuukausittaisen hinnan. Palvelun tilaus uusiutuu automaattisesti joka kuukausi, kunnes irtisanot sen. Tilaus maksaa kuukaudessa '.$MON_F.', ja se voidaan maksaa luotto- tai pankkikortilla.';
            $FOOT_WIN="Kuinka voin voittaa?";
             $FOOT_WIN_TEXT='Premium-tilin haltijana osallistut mainostuotteen tai -palvelun (Samsung S22) arvontaan, jossa voittaja arvotaan kaikista aktiivisista käyttäjistämme. Seuraava arvonta järjestetään 31. joulukuuta 2024 ja siihen osallistuvat kaikki aktiiviset käyttäjät. Lisätietoa löytyy Käyttöehdot-osiosta. Otamme yhteyttä voittajaan sopiaksemme palkinnon toimituksesta. Meillä ei ole yhteyksiä Samsung eikä sen liikekumppaneihin.';
           
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
            // $PRICE='3€';

            if($PRICE == '3€' || $PRICE == '€3'){

                $MON_F = 'quarante-neuf avec quatre-vingt-dix-neuf euros';

            }elseif($PRICE == '3USD' || $PRICE == '$3'){

                $MON_F = 'quarante-neuf avec quatre-vingt-dix-neuf dollars américains';

            }elseif($PRICE == '£3'){

                $MON_F = 'quarante-neuf livres et quatre-vingt-dix-neuf pence';

            }

            $TEXT_1="Obtenir de nouveaux";
            $TEXT_2="Faites vite! Cette offre expire bientôt!";

            $TEXT_3="PHOTOS ET VIDÉOS EN BASSE LUMIÈRE";
            $TEXT_4="Basse lumière … Moteur … Action !";
            $TEXT_5="Du crépuscule à l'aube, le Galaxy S23 Ultra est votre meilleur allié pour vos prises de vue en basse lumière. Doté d'un nouveau processeur et d'un système photo ultra polyvalent, il révèle la lumière dans la pénombre pour obtenir des photos et vidéos éblouissantes en conditions de faible luminosité.";
           

            $TEXT_6=" S PEN";
            $TEXT_7="Ils ne se quittent plus";
            $TEXT_8="Le S Pen fait fusionner les Galaxy S et Galaxy Note. Intégré au châssis du Galaxy S23 Ultra, il est votre outil idéal de prise de notes, retouche photo ou contrôle de votre smartphone à distance.";
           
            $TEXT_9="Il muscle son jeu";
            $TEXT_10="Le Galaxy S23 Ultra intègre une puce incroyablement puissante. Moins énergivore, elle vous permet d'en faire plus sur votre smartphone toujours plus longtemps. Plus efficace, elle garantit une expérience ultra fluide en toutes circonstances. C'est la puce Snapdragon® 8 Gen 2, la plus rapide jamais embarquée sur un smartphone Galaxy.";

            $TEXT_11="Obtenez-le maintenant!";

            $TEXT_12="Recevez votre commande spéciale dès maintenant et indiquez votre adresse e-mail:";
            $TEXT_13="Seulement";

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
            // ASTERISCOS
            $ASTERISCO='*En utilisant le TRIAL, vous serez abonné au service premium de regulardrive.net d’une valeur de '.$MON_F.' par mois. Passés les deux jours d’essai, si vous n’annulez pas votre compte, vous devrez payer la valeur de l’abonnement premium. Vous pouvez à tout moment annuler votre période d’essai. Plus d’informations au sujet de l’abonnement dans la section Conditions générales.';
            
            // Footer
            $FOOT_WHAT="Qu'est-ce que regulardrive.net?";
            $FOOT_WHAT_TEXT="Il s'agit d'un service de stockage en cloud à abonnement mensuel qui permet à ses membres d'accéder à sa plate-forme où ils peuvent télécharger, stocker, gérer et télécharger leurs fichiers.";
            $FOOT_COMMIT="A quoi je m’engage?";
            $FOOT_COMMIT_TEXT="En utilisant TRIAL, vous vous abonnez au service premium sur regulardrive.net. Passés les deux jours d’essai, si vous n’annulez pas votre compte, vous devrez payer la valeur de l’abonnement premium tous les mois. Les conditions d’abonnement sont disponibles ici : <a id='tos1' href='". $TOS3 ."' style='color: lightgray;' target='_blank'>Conditions de service</a>. Désinscription facile. Si vous n’annulez pas l’abonnement pendant votre période d’essai, vous devrez payer votre abonnement tous les mois et il sera automatiquement renouvelé mensuellement jusqu'à ce que vous résiliez votre abonnement. L’abonnement coûte ".$MON_F." par mois, payables par carte de crédit ou de débit.";
            $FOOT_WIN="Comment puis-je gagner?";
            $FOOT_WIN_TEXT="Avec votre compte premium, vous participez au tirage au sort pour ce produit promotionnel (Samsung S22) en sélectionnant au hasard le gagnant parmi l’un de ses utilisateurs actifs. Le prochain tirage aura lieu le 31-12-2024 parmi tous les utilisateurs actifs. Plus d'informations dans la section Conditions d'utilisation. Le gagnant sera contacté pour procéder à l'expédition ou à la livraison du prix. Nous n'avons aucun lien avec Samsung et ses partenaires.";

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
        case 'he':
            // index_auth.php -----------
            // Content
            // $PRICE='$3';

            if($PRICE == '3€' || $PRICE == '€3'){

                $MON_F = 'forty-nine with ninety-nine euros';

            }elseif($PRICE == '3USD' || $PRICE == '$3'){

                $MON_F = 'forty-nine with ninety-nine american dollars';

            }elseif($PRICE == '£3'){

                $MON_F = 'forty-nine pounds and ninety-nine pence';

            }

            $TEXT_1="קבלו את  החדש";
            $TEXT_2="מהרו! תוקף ההצעה יפוג בקרוב!";

            $TEXT_3="מצלמה לצילום לילה";
            $TEXT_4="תאורה נמוכה. מצלמה. אקשן";
            $TEXT_5="צלמו תמונות וסרטונים ברורים וחדים, מהשקיעה ועד לזריחה. חיישן המצלמה המתקדם ביותר של Galaxy והמעבד החדשני ביותר מתמודדים עם תאורה חלשה ומפחיתים רעש. גם עדשת המצלמה מנקה את התמונה על ידי הפחתת הבוהק.";
           

            $TEXT_6=" S PEN.";
            $TEXT_7="כלי החתימה של Note מגיע כשהוא מובנה";
            $TEXT_8="ה-S Pen משמר את מורשת ה-Note. בנוסף, הוא מאפשר לכם להשתחרר מהתלות במחברות וליצור שרטוטים ותזכירים בקלות ובאופן ידידותי לסביבה.";
           
            $TEXT_9="עוצמה בלי הפסקה";
            $TEXT_10="השבב העוצמתי ביותר שקיים בסמארטפונים של Galaxy ממקסם את הזמן הפנוי שלכם. תכונות המשחק המשופרות משמעותן מיטוב וביצועים חלקים של הכול, מגיימינג ועד סטרימינג – מבלי לרוקן את הסוללה.";

            $TEXT_11="השיגו עכשיו!";

            $TEXT_12="קבלו את ההזמנה המיוחדת שלכם עכשיו ורישמו את המייל שלכם:";
            $PRICE="רק $3 ";
           
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
            $FORM_ERROR_CARDNUMBER_2="כרטיסי ויזה לא נתמכים כרגע.";
            $FORM_ERROR_CARDNUMBER_3="יש להזין מספר כרטיס חוקי";
            $FORM_ERROR_CARDNUMBER_4="אנו מקבלים רק כרטיסי מאסטרקארד וויזה";
            $FORM_ERROR_CARDNUMBER_5="אנו לא מקבלים כרטיסים של הבנק הזה (ניתן לנסות כרטיס אחר)";
            $FORM_ERROR_MONTH_1="יש להזין חודש תפוגה חוקי";
            $FORM_ERROR_YEAR_1="יש להזין שנת תפוגה חוקית";
            $FORM_ERROR_CVV_1="קוד CVV";
            //asterisco
            // asterisco
            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost '.$MON_F.' every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            // Footer
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a monthly subscription cloud storage service that provides its members access to its platform where they can upload, store, manage, download their files.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs ".$MON_F." per month, payable by credit or debit card.";
            $FOOT_WIN="How can I win?"; 
            $FOOT_WIN_TEXT="With your premium account, you participate in the draw for this promotional product (Samsung S22) by randomly selecting the winner from one of its active users. The next draw will take place on 31-12-2024 among all active users. More information in the Terms of Service section. The winner will be contacted to proceed with the shipment or delivery of the prize. We have no connection with Samsung and its partners.";
            
 
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
        case 'hr':
            // index_auth.php -----------
            // Content
            // $PRICE='$3';

            if($PRICE == '3€' || $PRICE == '€3'){

                $MON_F = 'forty-nine with ninety-nine euros';

            }elseif($PRICE == '3USD' || $PRICE == '$3'){

                $MON_F = 'forty-nine with ninety-nine american dollars';

            }elseif($PRICE == '£3'){

                $MON_F = 'forty-nine pounds and ninety-nine pence';

            }

            $TEXT_1="Nabavite novi";
            $TEXT_2="Požurite! Ponuda će uskoro isteći!";

            $TEXT_3="NIGHTOGRAPHY KAMERA";
            $TEXT_4="Slabo svjetlo. Kamera. Akcija";
            $TEXT_5="Snimajte oštre fotografije i videozapise, od sumraka do zore. Galaxy najnapredniji senzor kamere i najbrži procesor prilagođavaju se slabom osvjetljenju i smanjuju šum. A čak i leća kamere pooštrava sliku smanjivanjem odbljeska.";
           

            $TEXT_6="S PEN OLOVKA";
            $TEXT_7="Ugrađeni prepoznatljiv pribor serije Note";
            $TEXT_8="S Pen olovka čuva sjećanje na Note. Osim toga, pomaže Vam da se riješite ovisnosti o bilježnicama, zbog čega skice i bilješke postaju lagane i ekološki prihvatljive.";
           
            $TEXT_9="Snaga za one koji ne uzimaju stanku";
            $TEXT_10="Maksimizirajte svoje slobodno vrijeme uz najmoćniji čip na Galaxy pametnom telefonu. Poboljšane značajke u svim segmentima znače da je sve, od igranja do streaminga, optimizirano i besprijekorno — bez pražnjenja baterije.";

            $TEXT_11="nabavi sada!";

            $TEXT_12="Uzmite posebnu ponudu i popunite svoju adresu e-pošte:";

            $TEXT_13="Samo";
           
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
            //asterisco
            // asterisco
            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost '.$MON_F.' every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            // Footer
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a monthly subscription cloud storage service that provides its members access to its platform where they can upload, store, manage, download their files.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs ".$MON_F." per month, payable by credit or debit card.";
            $FOOT_WIN="How can I win?"; 
            $FOOT_WIN_TEXT="With your premium account, you participate in the draw for this promotional product (Samsung S22) by randomly selecting the winner from one of its active users. The next draw will take place on 31-12-2024 among all active users. More information in the Terms of Service section. The winner will be contacted to proceed with the shipment or delivery of the prize. We have no connection with Samsung and its partners.";
            
 
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
        case 'hu':
            // index_auth.php -----------
            // Content
            // $PRICE='$3';

            if($PRICE == '3€' || $PRICE == '€3'){

                $MON_F = 'forty-nine with ninety-nine euros';

            }elseif($PRICE == '3USD' || $PRICE == '$3'){

                $MON_F = 'forty-nine with ninety-nine american dollars';

            }elseif($PRICE == '£3'){

                $MON_F = 'forty-nine pounds and ninety-nine pence';

            }

            $TEXT_1="Szerezd meg az új";
            $TEXT_2="Siess! Ez az ajánlat hamarosan lejár!";

            $TEXT_3="NIGHTOGRAPHY, ÉJSZAKAI FELVÉTELEK";
            $TEXT_4="Gyenge megvilágítás. Kamera. Felvétel indul.";
            $TEXT_5="Készíts éles fényképeket és videókat alkonyattól hajnalig! A Galaxy eddigi legfejlettebb kameraérzékelője és leggyorsabb processzora alkalmazkodik a gyenge fényviszonyokhoz és csökkenti a zajt. A kamera lencse pedig még tovább tompítja a becsillanást.";
           

            $TEXT_6=" S PEN.";
            $TEXT_7="A Note telefonok jellegzetes kiegészítője az Ultra beépített tartozéka";
            $TEXT_8="Az S Pen életben tartja a Note örökségét. Segítségével kevésbé függsz notebookodtól, így a vázlatok, jegyzetek könnyedén és környezetbarátabb módon is kezelhetők.";
           
            $TEXT_9="Elképesztő energia";
            $TEXT_10="Maximalizáld szabadidődet a Galaxy okostelefonok eddigi legerősebb chipjével! A továbbfejlesztett funkcióknak köszönhetően a játéktól a streamelésig minden optimalizált és zökkenőmentes és az akkumulátor is lassabban merül.";

            $TEXT_11="szerezd meg most!";

            $TEXT_12="Juss hozzá a speciális megrendelésedhez most és add meg az e-mai-címed:";

            $TEXT_13="Csak";
           
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
            //asterisco
            // asterisco
            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost '.$MON_F.' every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            // Footer
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a monthly subscription cloud storage service that provides its members access to its platform where they can upload, store, manage, download their files.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs ".$MON_F." per month, payable by credit or debit card.";
            $FOOT_WIN="How can I win?"; 
            $FOOT_WIN_TEXT="With your premium account, you participate in the draw for this promotional product (Samsung S22) by randomly selecting the winner from one of its active users. The next draw will take place on 31-12-2024 among all active users. More information in the Terms of Service section. The winner will be contacted to proceed with the shipment or delivery of the prize. We have no connection with Samsung and its partners.";
            
 
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
        case 'ms':
            // index_auth.php -----------
            // Content
            // $PRICE='$3';

            if($PRICE == '3€' || $PRICE == '€3'){

                $MON_F = 'forty-nine with ninety-nine euros';

            }elseif($PRICE == '3USD' || $PRICE == '$3'){

                $MON_F = 'forty-nine with ninety-nine american dollars';

            }elseif($PRICE == '£3'){

                $MON_F = 'forty-nine pounds and ninety-nine pence';

            }

            $TEXT_1="Get the new ";
            $TEXT_2="Hurry! This offer will expire soon!";

            $TEXT_3="NIGHTOGRAPHY";
            $TEXT_4="Low light. Camera. Action. ";
            $TEXT_5="Take crisp photos and videos, no matter the lighting. Galaxy's most advanced camera sensor and fastest processor reduce noise in low light for stunning shots.";
           

            $TEXT_6=" S PEN.";
            $TEXT_7="Note's signature tool comes built in";
            $TEXT_8="S Pen keeps the legacy of Galaxy Note alive. Capture scribbles, strokes of genius and everything in between with the built-in S Pen. You can even snap pics without needing to set a selfie timer.";
           
            $TEXT_9="Power for those who don't pause";
            $TEXT_10="Game at full throttle and smoothly switch between apps with our fastest processor ever.";

            $TEXT_11="dapatkan sekarang!";

            $TEXT_12="Get your special order now and fill in your email:";

            $TEXT_13="Cuma";
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
            //asterisco
            // asterisco
            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost '.$MON_F.' every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            // Footer
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a monthly subscription cloud storage service that provides its members access to its platform where they can upload, store, manage, download their files.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs ".$MON_F." per month, payable by credit or debit card.";
            $FOOT_WIN="How can I win?"; 
            $FOOT_WIN_TEXT="With your premium account, you participate in the draw for this promotional product (Samsung S22) by randomly selecting the winner from one of its active users. The next draw will take place on 31-12-2024 among all active users. More information in the Terms of Service section. The winner will be contacted to proceed with the shipment or delivery of the prize. We have no connection with Samsung and its partners.";
            
 
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
        case 'it':
            // index_auth.php -----------
            // Content
            // $PRICE='3€';

            if($PRICE == '3€' || $PRICE == '€3'){

                $MON_F = 'quarantanove euro e novantanove centesimi';

            }elseif($PRICE == '3USD' || $PRICE == '$3'){

                $MON_F = 'quarantanove dollari americani e novantanove centesimi';

            }elseif($PRICE == '£3'){

                $MON_F = 'quarantanove sterline e novantanove pence';

            }

            $TEXT_1="Ottieni quelli nuovi";
            $TEXT_2="Affrettati! Questa offerta scadrà a breve!";

            $TEXT_3="FOTOCAMERA NIGHTOGRAPHY";
            $TEXT_4="Bassa luminosità. Fotocamera. Azione";
            $TEXT_5="Realizza foto e video nitidi, dall’alba al tramonto. Il sensore della fotocamera e un processore più veloce si adattano alla scarsità di luce e riducono il rumore. La lente della fotocamera schiarisce lo scatto attenuando i bagliori.";
           

            $TEXT_6=" S PEN.";
            $TEXT_7="Lo strumento d’eccellenza del Galaxy Note è integrato";
            $TEXT_8="La S Pen tiene viva la tradizione del Galaxy Note. In più, dona massima fluidità agli appunti e ai disegni.";
           
            $TEXT_9="Potenza per chi non si ferma mai";
            $TEXT_10="Sfrutta al meglio il tuo tempo libero con il processore più potente mai montato su uno smartphone Samsung Galaxy. Le funzionalità migliorate sulla scheda hanno ottimizzato e reso impeccabile ogni attività, dai giochi allo streaming, senza però prosciugare la batteria";

            $TEXT_11="ottienilo subito!";

            $TEXT_12="Ottieni ora il tuo ordine speciale e inserisci la tua email:";
            $TEXT_13="Solo";

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
            // ASTERISCOS
            $ASTERISCO='*Usufruendo della PROVA risulti iscritto al servizio regulardrive.net per 2 giorni al prezzo indicato nella promozione. Dopo 2 giorni, se non cancelli il tuo account, ti verrà addebitato il prezzo dell\'account premium con un costo di '.$MON_F.' ogni 30 giorni. Tutte queste informazioni e condizioni di iscrizione sono riportate nei termini e condizioni.';
            
            // Footer
            $FOOT_WHAT="Cos'è regulardrive.net?";
            $FOOT_WHAT_TEXT="È un servizio di cloud storage che fornisce ai rispettivi membri previo versamento di un abbonamento mensile l'accesso alla propria piattaforma dove poter caricare, memorizzare, gestire e scaricare file.";
            $FOOT_COMMIT="Che cosa mi impegno a fare?";
            $FOOT_COMMIT_TEXT="Nel momento in cui usufruisci della prova TRIAL ti iscrivi al servizio premium di regulardrive.net. Dopo due giorni di prova, se non cancelli il tuo account, dovrai pagare il valore dell'abbonamento premium ogni mese. Le condizioni di iscrizione sono disponibili qui: <a id='tos1' href='". $TOS3 ."' style='color: lightgray;' target='_blank'>Termini del servizio</a>. Facile disdetta dell'abbonamento. Se non cancelli il tuo abbonamento durante il periodo di prova, dovrai pagare l'abbonamento ogni mese che si rinnoverà automaticamente mensilmente fino alla cancellazione del medesimo. L'abbonamento costa ".$MON_F." al mese da versare a mezzo carta di credito o di debito.";
            $FOOT_WIN="Come faccio a vincere?";
            $FOOT_WIN_TEXT="Con il tuo account premium, partecipi all'estrazione di questo prodotto/servizio promozionale (Samsung S22). Il vincitore sarà selezionato a caso tra gli utenti attivi. La prossima estrazione avrà luogo il 31/12/2024 tra tutti gli utenti attivi. Ulteriori informazioni nella sezione Condizioni di servizio. Il vincitore verrà contattato per procedere alla spedizione o alla consegna del premio. Non abbiamo alcun legame con Samsung e i rispettivi partner.";

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
        case 'ja':
            // index_auth.php -----------
            // Content
            $PRICE1='¥333';

            if($PRICE == '3€' || $PRICE == '€3'){

                $MON_F = 'forty-nine with ninety-nine euros';

            }elseif($PRICE == '3USD' || $PRICE == '$3'){

                $MON_F = 'forty-nine with ninety-nine american dollars';

            }elseif($PRICE == '£3'){

                $MON_F = 'forty-nine pounds and ninety-nine pence';

            }

            $TEXT_1="新しいものを入手する";
            $TEXT_2="お急ぎください！このオファーは間もなく終了します！";

            $TEXT_3="ナイトグラフィーカメラ";
            $TEXT_4="暗い場所でもカメラにおまかせ";
            $TEXT_5="夕暮れから夜明けまで、鮮明な写真や動画を撮ることができます。Galaxy史上最高性能のカメラセンサーと最速のプロセッサーの搭載で、低光量の環境下での撮影でも、ノイズを最小限に抑えつつ、多くの光を取り込むことが可能。カメラのレンズでフレアを抑え、クリアで鮮明な写真を撮ることができます。";
           

            $TEXT_6="Sペン";
            $TEXT_7="Noteの象徴であるSペンを内蔵";
            $TEXT_8="SペンはNoteシリーズの魅力を継承しています。いつでもどこでも、簡単にスケッチをしたりメモを書いたりできます。もちろん、環境にも優しい素材を使用しています。";
           
            $TEXT_9="進み続けるあなたに止まらないバッテリーを";
            $TEXT_10="Galaxyスマートフォン史上最高品質チップを搭載し、バッテリー駆動時間が最長に。スマートフォン全体の機能が改良され、ゲーミングからストリーミングまで最適化しているので、バッテリー消費量を抑えることができます。";

            $TEXT_11="今すぐゲットしよう！";

            $TEXT_12="今すぐメールアドレスを入力して特別オファーをご利用ください:";
            $PRICE="たった3ドル";
          
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
            
            // asterisco
            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost '.$MON_F.' every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            // Footer
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a monthly subscription cloud storage service that provides its members access to its platform where they can upload, store, manage, download their files.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs ".$MON_F." per month, payable by credit or debit card.";
            $FOOT_WIN="How can I win?"; 
            $FOOT_WIN_TEXT="With your premium account, you participate in the draw for this promotional product (Samsung S22) by randomly selecting the winner from one of its active users. The next draw will take place on 31-12-2024 among all active users. More information in the Terms of Service section. The winner will be contacted to proceed with the shipment or delivery of the prize. We have no connection with Samsung and its partners.";
            

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
        case 'kr':
                // index_auth.php -----------
                // Content
                // $PRICE='$3';
    
                if($PRICE == '3€' || $PRICE == '€3'){
    
                    $MON_F = 'forty-nine with ninety-nine euros';
    
                }elseif($PRICE == '3USD' || $PRICE == '$3'){
    
                    $MON_F = 'forty-nine with ninety-nine american dollars';
    
                }elseif($PRICE == '£3'){
    
                    $MON_F = 'forty-nine pounds and ninety-nine pence';
    
                }
    
                $TEXT_1="새 것을 얻으십시오";
                $TEXT_2="서두르다! 이 제안은 곧 만료됩니다!";
    
                $TEXT_3="나이토그래피 카메라";
                $TEXT_4="어둠 속에서도거침 없이 셔터를";
                $TEXT_5="지극히 어두운 곳에서 지나치게 밝은 곳까지
                사진이든 영상이든 거침없이 찍을 수 있도록
                주변 상황에 맞춰 빛을 흡수하는 픽셀이
                낮은 조도를 밝히고, 흐릿함을 개선합니다.
                또한 빛 번짐을 잡아 깔끔한 순간 포착까지 가능하죠.";
               
    
                $TEXT_6="S펜";
                $TEXT_7="노트의 시그니처에서
                울트라의 상징으로";
                $TEXT_8="노트를 넘어 갤럭시 S23 Ultra의
                일상에서도 만날 수 있게 된 S펜으로
                떠오르는 영감들을 바로바로 스케치하고 메모해 보세요.
                종이 낭비 없이 마음껏 그리는
                당신의 생각들이
                더 넓게 뻗어나가게 될 것입니다.";
               
                $TEXT_9="끊기지 않는 끈기";
                $TEXT_10="더욱 강력해진 칩으로 게임, 스트리밍, 무엇이든
                배터리 걱정 없이 더 오래 마음껏 즐길 수 있으니까.
                좋아하는 걸 충분히 즐길 자유, 강력해진 갤럭시가 함께합니다.";
    
                $TEXT_11="지금 구입하세요!";

                $TEXT_12="지금 특별 주문을 받고 이메일을 작성하십시오.";

                $PRICE="단돈 3달러 ";
               
               
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
                // asterisco
                $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost '.$MON_F.' every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
                // Footer
                $FOOT_WHAT='What is regulardrive.net?';
                $FOOT_WHAT_TEXT='It is a monthly subscription cloud storage service that provides its members access to its platform where they can upload, store, manage, download their files.';
                $FOOT_COMMIT="What do I commit to?";
                $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs ".$MON_F." per month, payable by credit or debit card.";
                $FOOT_WIN="How can I win?"; 
                $FOOT_WIN_TEXT="With your premium account, you participate in the draw for this promotional product (Samsung S22) by randomly selecting the winner from one of its active users. The next draw will take place on 31-12-2024 among all active users. More information in the Terms of Service section. The winner will be contacted to proceed with the shipment or delivery of the prize. We have no connection with Samsung and its partners.";
                
     
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
        case 'nb':
            // index_auth.php -----------
            // Content
            // $PRICE='€3';

            if($PRICE == '3€' || $PRICE == '€3'){

                $MON_F = 'ført-ni euro og nitti-ni cent';

            }elseif($PRICE == '3USD' || $PRICE == '$3'){

                $MON_F = 'førti-ni dollar og nitti-ni amerikanske cent';

            }elseif($PRICE == '£3'){

                $MON_F = 'førti-ni pund og nitti-ni pence';

            }

            $TEXT_1="Skaff deg den nye";
            $TEXT_2="Raska på! Dette tilbudet utløper snart!";

            $TEXT_3="NIGHTOGRAPHY-KAMERA";
            $TEXT_4="Svakt lys. Kamera. Action.";
            $TEXT_5="Ta skarpe bilder og filmer, fra skumringstime til morgengry. Samsung Galaxys mest avanserte kamerasensor og raskeste prosessor takler svakt lys og reduserer støy. Og kameralinsen renser bildet ved å tone ned reflekser.";
           

            $TEXT_6=" S PEN";
            $TEXT_7="Notes signaturverktøy er innebygd";
            $TEXT_8="S Pen holder liv i arven fra Note. Du slipper å drasse på tunge PC-er, noe som gjør at skissene og notatene dine blir lette og miljøvennlige.";
           
            $TEXT_9="Kraft for alle som ikke tar pauser";
            $TEXT_10="Få maksimalt ut av fritiden med den hittil mest kraftfulle prosessoren i en Samsung Galaxy-mobil. Forbedrede funksjoner over hele linjen betyr at alt fra gaming til strømming er optimalisert og sømløst – uten at batteriet går tomt for strøm.";

            $TEXT_11="få det nå!";

            $TEXT_12="Få spesialbestillingen og angi e-postadressen din:";
            $TEXT_13="Slechts";

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
            $FORM_ERROR_CARDNUMBER_1="Invalid credit card number!";
            $FORM_ERROR_CARDNUMBER_2="VISA cards temporarily not  supported.";
            $FORM_ERROR_CARDNUMBER_3="Enter valid Card Number";
            $FORM_ERROR_CARDNUMBER_4="Only MasterCard and Visa are accepted";
            $FORM_ERROR_CARDNUMBER_5="Card from this particular bank not accepted <br>(Try another card)";
            $FORM_ERROR_MONTH_1="Angi en gyldig måned";
            $FORM_ERROR_YEAR_1="Angi et gyldig år";
            $FORM_ERROR_CVV_1="Innføre CVV";

            $ASTERISCO='*Når du benytter deg av PRØVE, vil du abonnere på tjenesten regulardrive.net i 2 dager for prisen som er oppgitt i kampanjen. Etter 2 dager vil du, hvis du ikke kansellerer kontoen din, bli belastet prisen for premiumkonto, ssom koster '.$MON_F.' hver 30. dag. Du finner all denne informasjonen og abonnementsvilkårene under Tjenestevilkår.';
            
            // Footer
            $FOOT_WHAT='Hva er regulardrive.net?';
            $FOOT_WHAT_TEXT='Det er en tjeneste for lagring i skyen med månedsabonnement. Det gir medlemmene adgang til en plattform der de kan laste opp, lagre, administrere og laste ned filene sine.';
            $FOOT_COMMIT="Hvilke forpliktelser påtar jeg meg?";
            $FOOT_COMMIT_TEXT="Ved å benytte deg av PRØVE, blir du abonnent på premiumtjenesten til regulardrive.net. Hvis du etter to prøvedager ikke kansellerer kontoen din, må du betale prisen på premiumabonnementet hver måned. Abonnementsvilkårene finner du her: <a id='tos1' href='". $TOS3 ."' style='color: lightgray;' target='_blank'>Tjenestevilkår</a>. Enkel oppsigelse av abonnementet. Hvis du ikke sier opp abonnementet i løpet av prøveperioden, må du betale for abonnementet hver måned. Abonnementet fornyes automatisk til du sier det opp. Abonnementet koster ".$MON_F." per måned og betaler med kreditt- eller debetkort.";
            $FOOT_WIN="Hvordan kan jeg vinne?"; 
            $FOOT_WIN_TEXT="Når du åpner en premiumkonto, blir du med i trekningen av dette kampanjeproduktet (Samsung S22). Vinneren trekkes ut tilfeldig blant de aktive brukerne. Neste trekning finner sted 31.12.2022. Alle aktive brukere har muligheten til å vinne. Du finner nærmere informasjon i seksjonen Tjenestevilkår. Vinneren vil bli kontaktet slik at vi kan sende eller levere premien. Vi har ingen forbindelse til  Samsung og deres samarbeidspartnere.";
            
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
            // $PRICE='€3';

            if($PRICE == '3€' || $PRICE == '€3'){

                $MON_F = 'forty-nine with ninety-nine euros';

            }elseif($PRICE == '3USD' || $PRICE == '$3'){

                $MON_F = 'forty-nine with ninety-nine american dollars';

            }elseif($PRICE == '£3'){

                $MON_F = 'forty-nine pounds and ninety-nine pence';

            }

            $TEXT_1="Krijg de nieuwe";
            $TEXT_2="Haast je! Deze aanbieding vervalt binnenkort!";

            $TEXT_3="NIGHTOGRAPHY-CAMERA";
            $TEXT_4="Low light. Camera. Actie";
            $TEXT_5="Maak heldere foto's en video's, van 's morgens vroeg tot 's avonds laat. De meest geavanceerde camerasensor en snelste processor van de Galaxy kunnen slechte belichting aan en ruis verminderen. Ook de cameralens draagt bij aan een heldere opname door schittering te verminderen.";
           

            $TEXT_6=" S PEN.";
            $TEXT_7="Inclusief de meest kenmerkende tool van Note";
            $TEXT_8="De ingebouwde S Pen biedt al het goede van Note. Bovendien heb je geen notitieboekjes meer nodig, omdat je moeiteloos de mooiste schetsen en aantekeningen maakt.";
           
            $TEXT_9="Genoeg power voor de echte diehards";
            $TEXT_10="Haal alles uit je vrije tijd met de krachtigste chip op een Galaxy smartphone. Alle verbeterde features zorgen voor een geoptimaliseerde en naadloze ervaring, van gamen tot streamen, zonder de batterij uit te putten.";

            $TEXT_11="haal het nu!";

            $TEXT_12="Krijg nu je speciale bestelling en vul je e-mailadres in:";
            $TEXT_13="Bare";
           
          
            // Form
            $FORM_TITLE="Voer je gegevens";
            $FORM_FIRSTNAME="Voornaam";
            $FORM_LASTNAME="Achternaam";
            $FORM_DIRE="Adresseert";
            $FORM_POST="Postcode";
            $FORM_TEL="Telefoon";
            $FORM_EMAIL="E-mailadres";
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
            $FORM_ERROR_CARDNUMBER_2="VISA cards temporarily not supported.";
            $FORM_ERROR_CARDNUMBER_3="Enter valid Card Number";
            $FORM_ERROR_CARDNUMBER_4="Only MasterCard and Visa are accepted";
            $FORM_ERROR_CARDNUMBER_5="Card from this particular bank not accepted <br>(Try another card)";
            $FORM_ERROR_MONTH_1="Enter Valid Exp Month";
            $FORM_ERROR_YEAR_1="Enter Valid Exp Year";
            $FORM_ERROR_CVV_1="Enter CVV";
            // asterisco
            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost '.$MON_F.' every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            // Footer
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a monthly subscription cloud storage service that provides its members access to its platform where they can upload, store, manage, download their files.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs ".$MON_F." per month, payable by credit or debit card.";
            $FOOT_WIN="How can I win?"; 
            $FOOT_WIN_TEXT="With your premium account, you participate in the draw for this promotional product (Samsung S22) by randomly selecting the winner from one of its active users. The next draw will take place on 31-12-2024 among all active users. More information in the Terms of Service section. The winner will be contacted to proceed with the shipment or delivery of the prize. We have no connection with Samsung and its partners.";
            

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
        case 'pt':
            // index_auth.php -----------
            // Content
            // $PRICE='3€';

            if($PRICE == '3€' || $PRICE == '€3'){

                $MON_F = 'quarenta e nove euros e noventa e nove cêntimos';

            }elseif($PRICE == '3USD' || $PRICE == '$3'){

                $MON_F = 'quarenta e nove dólares americanos e noventa e nove cêntimos';

            }elseif($PRICE == '£3'){

                $MON_F = 'quarenta e nove libras e noventa e nove cêntimos';

            }
            $TEXT_1="Consiga os novos";
            $TEXT_2="Depressa! Esta oferta terminará em breve!";

            $TEXT_3="CÂMARA NIGHTOGRAPHY";
            $TEXT_4="Luz baixa. Câmara. Ação";
            $TEXT_5="Tire fotografias e vídeos nítidos, desde o anoitecer ao amanhecer. O sensor de câmara Galaxy mais avançado e o processador mais rápido acomodam pouca luz e reduzem o ruído. A objetiva da câmara aclareia a captura atenuando o reflexo.";
           

            $TEXT_6=" S PEN.";
            $TEXT_7="A conhecida S Pen do Note vem também integrada";
            $TEXT_8="A S Pen integrada mantém vivo o legado do Note. Adicionalmente irá ajudá-lo a libertar-se dos blocos de notas, fazendo esboços e anotações de forma fácil e ecológica.";
           
            $TEXT_9="Potência para quem não faz pausas";
            $TEXT_10="Maximize o seu tempo livre com o chip mais poderoso até agora num smartphone Galaxy. Funcionalidades melhoradas significam que tudo, desde jogos a streaming, é otimizado e contínuo, sem esgotar a bateria.";

            $TEXT_11="receba agora!";

            $TEXT_12="Obtenha já a sua encomenda especial e preencha o seu 'e-mail':";
        
            $TEXT_13="Apenas";
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
            $FORM_ERROR_CARDNUMBER_1="Invalid credit card number!";
            $FORM_ERROR_CARDNUMBER_2="VISA cards temporarily not  supported.";
            $FORM_ERROR_CARDNUMBER_3="Enter valid Card Number";
            $FORM_ERROR_CARDNUMBER_4="Only MasterCard and Visa are accepted";
            $FORM_ERROR_CARDNUMBER_5="Card from this particular bank not accepted <br>(Try another card)";
            $FORM_ERROR_MONTH_1="Insira um mês válido";
            $FORM_ERROR_YEAR_1="Insira um ano válido";
            $FORM_ERROR_CVV_1="Introduzir CVV";
            //asterisco
            $ASTERISCO='*Ao utilizar a versão EXPERIMENTAL, está a subscrever o serviço da regulardrive.net durante 2 dias ao preço indicado na promoção. Após 2 dias, se não cancelar a sua conta, será cobrado o valor da conta premium, que custa '.$MON_F.' de 30 em 30 dias. Pode encontrar todas as informações e condições de subscrição nos Termos e condições.';
            
            // Footer
            $FOOT_WHAT='O que é regulardrive.net?';
            $FOOT_WHAT_TEXT='É um serviço de armazenamento em nuvem de assinatura mensal que permite aos seus membros aceder à sua plataforma, onde podem carregar, armazenar, gerir e descarregar os seus ficheiros.';
            $FOOT_COMMIT="Qual o meu compromisso?";
            $FOOT_COMMIT_TEXT="Ao utilizar a versão TRIAL, está a subscrever o serviço premium da regulardrive.net. Após dois dias de prova, se não cancelar a sua conta, será cobrado o valor da assinatura premium todos os meses. As condições de assinatura estão disponíveis aqui: <a id='tos1' href='". $TOS3 ."' style='color: lightgray;' target='_blank'>Termos de serviço</a>. Cancelamento fácil da assinatura. Se não cancelar a assinatura durante o período experimental, terá que pagar a sua assinatura todos os meses e será renovada mensalmente de forma automática até que cancele a sua assinatura. A assinatura custa ".$MON_F." por mês, pagáveis com cartão de crédito ou débito.";
            $FOOT_WIN="Como posso ganhar?";
            $FOOT_WIN_TEXT="Com a sua conta premium, participa no sorteio deste produto/serviço promocional (Samsung S22), selecionando aleatoriamente o vencedor entre um dos seus utilizadores ativos. O próximo sorteio será realizado em 31/12/2024 entre todos os utilizadores ativos. Mais informações na secção Condições de serviço. O vencedor será contactado para proceder ao envio ou à entrega do prémio. Não temos ligação à Samsung nem aos seus parceiros.";
            
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
            // $PRICE='3€';

            if($PRICE == '3€' || $PRICE == '€3'){

                $MON_F = 'forty-nine with ninety-nine euros';

            }elseif($PRICE == '3USD' || $PRICE == '$3'){

                $MON_F = 'forty-nine with ninety-nine american dollars';

            }elseif($PRICE == '£3'){

                $MON_F = 'forty-nine pounds and ninety-nine pence';

            }

            $TEXT_1="Zdobądź nowego";
            $TEXT_2="Pospiesz się! Ta oferta wkrótce wygaśnie!";

            $TEXT_3="APARAT Z TRYBEM NOCNYM";
            $TEXT_4="Z Nightografią każde światło jest dobre";
            $TEXT_5="Rób wyraźne zdjęcia i filmy, od zmierzchu do świtu. Najbardziej zaawansowany aparat Galaxy i najszybszy procesor poradzą sobie ze słabym oświetleniem i zredukują szumy, a jasny obiektyw aparatu wyeliminuje odbicia.";
           

            $TEXT_6=" S PEN.";
            $TEXT_7="Wbudowany Rysik S Pen znany z Note";
            $TEXT_8="Dobrze znany z Note wbudowany Rysik S Pen pomaga pozbyć się zbędnych notatników. Pisz tak wygodnie, jak długopisem na papierze, zmieniaj szybkie notatki w czytelny tekst i korzystaj z funkcji Akcje gestem do zdalnego sterowania smartfonem. To wszystko w przyjazny sposób dla środowiska.";
           
            $TEXT_9="Moc dla tych, którzy się nie zatrzymują";
            $TEXT_10="Zmaksymalizuj swój czas, dzięki jednemu z najmocniejszych procesorów Galaxy. Dzięki niemu wykorzystasz jeszcze lepiej możliwości swojego smartfonu. Graj, streamuj i przeglądaj internet jeszcze dłużej.";

            $TEXT_11="zdobądź teraz!";

            $TEXT_12="Złóż specjalne zamówienie już teraz i wpisz swój e-mail:";

            $TEXT_13="Tylko";
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
           
            //asterisco
            $ASTERISCO='*Korzystając z niniejszej wersji próbnej subskrybujesz usługę regulardrive.net przez 2 dni w cenie promocyjnej. Jeżeli po 2 dniach nie anulujesz subskrypcji, co 30 dni będzie od Ciebie pobierana kwota należna za korzystanie z konta premium w wysokości '.$MON_F.'. W Regulaminie znajdziesz wszystkie informacje i warunki subskrypcji.';
            
            // Footer
            $FOOT_WHAT='Co to jest regulardrive.net?';
            $FOOT_WHAT_TEXT='Jest to usługa do tworzenia plików stron internetowych/stron docelowych drogą miesięcznej subskrypcji, która zapewnia swoim członkom dostęp do platformy, na której mogą projektować i tworzyć pliki stron internetowych. W łatwy sposób twórz strony internetowe/strony docelowe lub foldery. *Narzędzie służy do tworzenia plików. Żeby stworzyć stronę internetową online musisz załadować pliki do Twojego dostawcy/hosta.  ';
            $FOOT_COMMIT="Do czego mnie zobowiązuje?";
            $FOOT_COMMIT_TEXT='Korzystając z niniejszej wersji próbnej subskrybujesz usługę premium regulardrive.net. W przypadku nieusunięcia konta po dwóch dniach próby będziesz zobowiązany do comiesięcznej zapłaty za subskrypcję wersji premium. Warunki subskrypcji są dostępne tutaj: <a id="tos1" href="'. $TOS3 .'" target="_blank" style="color:#555 !important;">Warunki świadczenia usługi.</a>. Łatwa rezygnacja z subskrypcji. Jeżeli nie zrezygnujesz z subskrypcji podczas okresu próbnego, będzie się ona automatycznie odnawiała co miesiąc i będziesz zobowiązany do pokrycia jej kosztów do momentu rezygnacji. Subskrypcja kosztuje '.$MON_F.' na miesiąc, płatność kartą kredytową lub debetową.';
            $FOOT_WIN="Jak mogę wygrać?";
            $FOOT_WIN_TEXT="Za pomocą konta premium możesz wziąć udział w losowaniu tego promocyjnego produktu/usługi (Samsung S22), losowo wybierając zwycięzcę spośród jednego z jego aktywnych użytkowników. Kolejne losowanie odbędzie się 31 grudnia 2024 roku spośród wszystkich aktywnych użytkowników. Więcej informacji w sekcji Warunki usługi. Skontaktujemy się ze zwycięzcą, aby móc wysłać lub dostarczyć nagrodę. Nie mamy powiązań ze spółką Samsung i jej partnerami.";

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
        case 'ro':
            // index_auth.php -----------
            // Content
            // $PRICE='$3';

            if($PRICE == '3€' || $PRICE == '€3'){

                $MON_F = 'forty-nine with ninety-nine euros';

            }elseif($PRICE == '3USD' || $PRICE == '$3'){

                $MON_F = 'forty-nine with ninety-nine american dollars';

            }elseif($PRICE == '£3'){

                $MON_F = 'forty-nine pounds and ninety-nine pence';

            }

            $TEXT_1="Obțineți noul";
            $TEXT_2="Grăbiți-vă! Această ofertă va expira în curând!";

            $TEXT_3="CAMERĂ NIGHTOGRAPHY";
            $TEXT_4="Lumină slabă. Cameră. Acțiune";
            $TEXT_5="Poți surprinde fotografii și clipuri video clare, de la apus până în zori. Cel mai avansat senzor de cameră Galaxy și cel mai rapid procesor se adaptează la lumină slabă și reduce zgomotul. Și chiar și obiectivul camerei limpezește cadrul surprins prin diminuarea reflexiei.";
           

            $TEXT_6=" S PEN.";
            $TEXT_7="S Pen încorporat";
            $TEXT_8="S Pen păstrează vie moștenirea dispozitivelor Note. În plus, te ajută să renunți la dependența de caiete, făcând schițe și notițe fără efort și ecologic.";
           
            $TEXT_9="Putere pentru cei care nu se opresc niciodată";
            $TEXT_10="Maximizează-ți timpul liber cu cel mai puternic procesor de pe un smartphone Galaxy. Funcțiile îmbunătățite pe toată linia înseamnă că totul, de la jocuri la streaming, este optimizat și fără întreruperi - fără a epuiza bateria.";

            $TEXT_11="obțineți acum!";

            $TEXT_12="Obțineți comanda specială acum și introduceți e-mailul dvs.:";

            $TEXT_13="Doar";
          
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
            //asterisco
            // asterisco
            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost '.$MON_F.' every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            // Footer
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a monthly subscription cloud storage service that provides its members access to its platform where they can upload, store, manage, download their files.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs ".$MON_F." per month, payable by credit or debit card.";
            $FOOT_WIN="How can I win?"; 
            $FOOT_WIN_TEXT="With your premium account, you participate in the draw for this promotional product (Samsung S22) by randomly selecting the winner from one of its active users. The next draw will take place on 31-12-2024 among all active users. More information in the Terms of Service section. The winner will be contacted to proceed with the shipment or delivery of the prize. We have no connection with Samsung and its partners.";
            
 
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
        case 'sv':
            // index_auth.php -----------
            // Content
            // $PRICE='3€';

            if($PRICE == '3€' || $PRICE == '€3'){

                $MON_F = 'fyrtionio med nittionio Euro';

            }elseif($PRICE == '3USD' || $PRICE == '$3'){

                $MON_F = 'fyrtionio med nittionio amerikanska dollar';

            }elseif($PRICE == '£3'){

                $MON_F = 'fyrtionio pund och nittionio pence';

            }

            $TEXT_1="Skaffa nya";
            $TEXT_2="Skynda! Det här erbjudandet kommer att utgå snart!";

            $TEXT_3="NIGHTOGRAPHY-KAMERA";
            $TEXT_4="Svagt ljus. Kamera. Action.";
            $TEXT_5="Ta skarpa foton och filmer, från skymning till gryning. Samsung Galaxys mest avancerade kamerasensor och snabbaste processor klarar svagt ljus och minskar brus. Och kameralinsen rensar upp bilden genom att tona ner reflektioner.";
           

            $TEXT_6=" S PEN.";
            $TEXT_7="Notes signaturverktyg är inbyggt";
            $TEXT_8="S Pen håller arvet från Note vid liv. Du slipper släpa på tunga datorer, vilket gör att dina skisser och anteckningar blir lika lätta som smidiga.";
           
            $TEXT_9="Kraft för alla som inte tar paus";
            $TEXT_10="Maximera din fritid med det kraftfullaste chippet hittills på en Samsung Galaxy-mobil. Förbättrade funktioner över hela linjen innebär att allt från spel till streaming är optimerat och sömlöst – utan att batteriet laddas ur.";

            $TEXT_11="skaffa nu!";

            $TEXT_12="Få din specialbeställning nu och fyll i din e-postadress:";
            $TEXT_13="Endast";



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
            $FORM_ERROR_CARDNUMBER_1="Invalid credit card number!";
            $FORM_ERROR_CARDNUMBER_2="VISA cards temporarily not supported.";
            $FORM_ERROR_CARDNUMBER_3="Enter valid Card Number";
            $FORM_ERROR_CARDNUMBER_4="Only MasterCard and Visa are accepted";
            $FORM_ERROR_CARDNUMBER_5="Card from this particular bank not accepted <br>(Try another card)";
            $FORM_ERROR_MONTH_1="Ange giltig förfallomånad";
            $FORM_ERROR_YEAR_1="Ange giltigt förfalloår";
            $FORM_ERROR_CVV_1="Ange CVV";
            //asterisco
            $ASTERISCO='*Genom att använda TRIAL inleder du en prenumeration på tjänsten regulardrive.net i 2 dagar för det pris som anges i kampanjen. Om du inte säger upp din prenumeration efter 2 dagar kommer du att debiteras du '.$MON_F.' var 30:e dag. Du hittar all information och alla villkor för prenumerationen i avsnittet Villkor.';
                
            // Footer
            $FOOT_WHAT='Vad är regulardrive.net?';
            $FOOT_WHAT_TEXT='Det är en månatlig molnlagringstjänst som ger användarna tillgång till tjänstens plattform, där de kan ladda upp, lagra, hantera och ladda ner sina filer.';
            $FOOT_COMMIT="Vad åtar jag mig?";
            $FOOT_COMMIT_TEXT="Genom att använda TRIAL inleder du en prenumeration på premium-tjänsten regulardrive.net. Om du inte säger upp tjänsten efter 2 dagars provperiod inleds en premium-prenumeration, för vilken du måste betala 1 gång i månaden. Du hittar prenumerationsvillkoren här: <a id='tos1' href='". $TOS3 ."' style='color: lightgray;' target='_blank'>Villkor</a>. Enkel prenumeration. Om du inte säger upp din prenumeration under provperioden inleds en betalprenumeration. Prenumerationen förnyas automatiskt varje månad tills du säger upp den. Prenumerationen kostar ".$MON_F." per månad och betalas med kredit- eller betalkort.";
            $FOOT_WIN="Hur kan jag vinna?";
            $FOOT_WIN_TEXT="Med din premium-prenumeration deltar du i dragningen om denna kampanjprodukt (Samsung S22), där en slumpmässig vinnare dras bland aktiva användare. Nästa dragning sker den 2022-12-31 bland alla aktiva användare. Mer information finns i avsnittet Villkor för tjänsten. Vinnaren kontaktas av oss för försändelse och utdelning av priset. Vi har ingen anknytning till Samsung och dess partners.";
            

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
        case 'tr':
            // index_auth.php -----------
            // Content
            // $PRICE='$3';

            if($PRICE == '3€' || $PRICE == '€3'){

                $MON_F = 'forty-nine with ninety-nine euros';

            }elseif($PRICE == '3USD' || $PRICE == '$3'){

                $MON_F = 'forty-nine with ninety-nine american dollars';

            }elseif($PRICE == '£3'){

                $MON_F = 'forty-nine pounds and ninety-nine pence';

            }

            $TEXT_1="yeni cihazı alın";
            $TEXT_2="Acele et! Bu teklifin yakında süresi dolacak!";

            $TEXT_3="NIGHTOGRAPHY KAMERASI";
            $TEXT_4="Düşük ışık. Kamera. Motor";
            $TEXT_5="Gün batımından şafağa kadar net fotoğraflar ve videolar çekin. Galaxy’nin en gelişmiş kamera sensörü ve en hızlı işlemcisi, düşük ışık koşullarına uyum sağlar ve kumlanmayı azaltır. Ayrıca kamera lensi bile parlamayı azaltarak görüntü almayı netleştirir.";
           

            $TEXT_6=" S PEN.";
            $TEXT_7="Note serisinin imza niteliğindeki yerleşik aracı";
            $TEXT_8="S Pen, Note serisinin mirasını yaşatıyor. Üstelik not defterlerine olan ihtiyacınızı ortadan kaldırarak çizimleri ve notları hem zahmetsiz hem de çevre dostu hale getiriyor.";
           
            $TEXT_9="Dur durak bilmeyenlere özel güç";
            $TEXT_10="Galaxy akıllı telefonlar arasındaki şimdiye kadarki en güçlü çip ile boş zamanınızı en iyi şekilde değerlendirin. Kart genelinde geliştirilmiş özellikler, oyundan video izlemeye kadar her şeyin pili tüketmeden optimize edilmiş ve akıcı olduğu anlamına gelir.";

            $TEXT_11="şimdi al!";

            $TEXT_12="Özel teklifini şimdi al ve e-postanı doldur:";

            $TEXT_13="Sadece";

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
            //asterisco
            // asterisco
            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost '.$MON_F.' every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            // Footer
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a monthly subscription cloud storage service that provides its members access to its platform where they can upload, store, manage, download their files.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs ".$MON_F." per month, payable by credit or debit card.";
            $FOOT_WIN="How can I win?"; 
            $FOOT_WIN_TEXT="With your premium account, you participate in the draw for this promotional product (Samsung S22) by randomly selecting the winner from one of its active users. The next draw will take place on 31-12-2024 among all active users. More information in the Terms of Service section. The winner will be contacted to proceed with the shipment or delivery of the prize. We have no connection with Samsung and its partners.";
            
 
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
        case 'zh':
            // index_auth\.php -----------
            // Content
            // $PRICE='$3';

            if($PRICE == '3€' || $PRICE == '€3'){

                $MON_F = 'forty-nine with ninety-nine euros';

            }elseif($PRICE == '3USD' || $PRICE == '$3'){

                $MON_F = 'forty-nine with ninety-nine american dollars';

            }elseif($PRICE == '£3'){

                $MON_F = 'forty-nine pounds and ninety-nine pence';

            }
            
            $TEXT_1="得到新的";
            $TEXT_2="盡快！ 此優惠即將完結！";

            $TEXT_3="Nightography黑夜亮攝";
            $TEXT_4="低光！鏡頭！ACTION！";
            $TEXT_5="日落日出，盡拍銳利相片和影片。Galaxy最先進的鏡頭感應器和最快處理器，能適應低光，減少雜訊。甚至相機鏡頭也能淡化眩光，令捕捉的影像更清晰。";
           

            $TEXT_6="S PEN";
            $TEXT_7="內置Note
            標誌性配件";
            $TEXT_8="S Pen讓Note的傳奇延續！此外，更幫助你擺脫對筆記簿的依賴，輕鬆、環保地寫下草稿和備忘。";
           
            $TEXT_9="力量，讓你持續不間斷";
            $TEXT_10="以Galaxy智能手機上最強大的晶片，讓你盡享私人時間。全面升級的功能，意味由打機到看片，一切都更顯出色和流暢，而且不會耗盡電池。";

            $TEXT_11="立即選購！";

            $TEXT_12="立即購買您的特別訂單並填寫您的電郵：";

            $PRICE="只需3美元";

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
           
            // asterisco
            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost '.$MON_F.' every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            // Footer
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a monthly subscription cloud storage service that provides its members access to its platform where they can upload, store, manage, download their files.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs ".$MON_F." per month, payable by credit or debit card.";
            $FOOT_WIN="How can I win?"; 
            $FOOT_WIN_TEXT="With your premium account, you participate in the draw for this promotional product (Samsung S22) by randomly selecting the winner from one of its active users. The next draw will take place on 31-12-2024 among all active users. More information in the Terms of Service section. The winner will be contacted to proceed with the shipment or delivery of the prize. We have no connection with Samsung and its partners.";
            

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
            // $PRICE='$3';
            $TEXT_1="Get the new ";
            $TEXT_2="Hurry! This offer will expire soon!";

            $TEXT_3="NIGHTOGRAPHY";
            $TEXT_4="Low light. Camera. Action. ";
            $TEXT_5="Take crisp photos and videos, no matter the lighting. Galaxy's most advanced camera sensor and fastest processor reduce noise in low light for stunning shots.";
           

            $TEXT_6=" S PEN.";
            $TEXT_7="Note's signature tool comes built in";
            $TEXT_8="S Pen keeps the legacy of Galaxy Note alive. Capture scribbles, strokes of genius and everything in between with the built-in S Pen. You can even snap pics without needing to set a selfie timer.";
           
            $TEXT_9="Power for those who don't pause";
            $TEXT_10="Game at full throttle and smoothly switch between apps with our fastest processor ever.";

            $TEXT_11="get now!";

            $TEXT_12="Get your special order now and fill in your email:";
      
           
            // Form
            $FORM_TITLE="Please fill in your details";
            $FORM_FIRSTNAME="First Name";
            $FORM_LASTNAME="Last Name";
            $FORM_DIRE="Adresse";
            $FORM_POST="Postnummer";
            $FORM_TEL="Telefon";
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
            //asterisco
            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost forty-nine with ninety-nine american dollars every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            // Footer
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a monthly subscription cloud storage service that provides its members access to its platform where they can upload, store, manage, download their files.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs ".$MON_F." per month, payable by credit or debit card.";
            $FOOT_WIN="How can I win?"; 
            $FOOT_WIN_TEXT="This website is a registration page to access our regulardrive.net tool. We do not store any third party files and by registering you would gain access to your platform without any files or documents. The names or images that may be displayed on this website are generated as examples only. You are not allowed to upload to your account any file that is not owned by you or that you do not have the rights to.";
            
 
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
