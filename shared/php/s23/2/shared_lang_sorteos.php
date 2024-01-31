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
            $TEXT_4="نوّر لياليك"; 
            $TEXT_5="استعد لاستديو حافل بالصور الليلية المبهرة التي يتمناها الجميع. يمتاز التصوير الليلي بتقنية الذكاء الاصطناعي المحسنة والتي ستحافظ على وضوح التفاصيل، مما يجعل الصور والفيديوهات ذات الإضاءة الخافتة مشرقة وزاهية الألوان طوال اليوم من الغروب إلى الفجر.";

            $TEXT_6="تطبيق PHOTO REMASTER";
            $TEXT_7="حوّل الصور الباهتة إلى لوحات فنية";            
            $TEXT_8="انتقل إلى الاستديو لتحسين الصور المظلمة والضبابية وحتى صور الطفولة، أو الصور التي التقطتها عبر الإنترنت. والآن يمكنك تجديد جودة صور GIF غير الواضحة ، وتقليل التشويش ورفع مستوى الوضوح للحفاظ على مظهر الصورة لتبدو كأنها جديدة.";

            $TEXT_9="طاقة أكثر بين يديك";
            $TEXT_10="لا مجال للتوقف مع المعالج المبتكر الذي يزود هاتفك بالطاقة لتستمتع بأفضل الألعاب وبث الفيديوهات، مع إطالة عمر البطارية لمواكبة أدائك خلال أوقاتك المميزة.";
 
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
            $TEXT_4="Повече светлина в твоя нощен кадър"; 
            $TEXT_5="Напълни галерията на телефона си с епични нощни снимки, които всеки иска да види. Усъвършенстваният изкуствен интелект на Nightography запазва яснотата на всеки детайл, така че снимките и видеоклиповете, заснети в слабо осветена среда, остават ярки и цветни - от здрач до зори.";

            $TEXT_6="PHOTO REMASTER";
            $TEXT_7="Превърни грешките в шедьоври";            
            $TEXT_8="Отиди в галерията, за да подобриш качеството на тъмни и размазани снимки, стари фотографии от детството ти или снимки, които си изтеглил онлайн. Можеш лесно да вдъхнеш живот на размазаните GIF кадри, като намалиш шума и подобриш контраста. Последователите ти в Instagram ще ти бъдат благодарни за това.";

            $TEXT_9="Повече мощ за теб";
            $TEXT_10="Когато няма как да спреш, този революционен чип захранва телефона ти, за да ти осигури по-добро геймърско и стрийминг изживяване. Батерията издържа по-дълго, за да те съпровожда и в най-епичните дни.";
 
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
            $TEXT_4="Více světla pro vaši noc"; 
            $TEXT_5="Připravte se na galerii plnou epických nočních snímků, které bude chtít každý. Vylepšená umělá inteligence režimu nightography zachovává jasné detaily, takže videa a fotografie pořízené při slabém osvětlení budou jasné a barevné – od soumraku do svítání.";

            $TEXT_6="ZVÝŠENÍ KVALITY OBRÁZKU";
            $TEXT_7="Proměňte nepovedené záběry v mistrovská díla";            
            $TEXT_8="V Galerii můžete vylepšit tmavé, rozmazané snímky, a dokonce i zvýšit kvalitu fotografií z dětství nebo obrázků nalezených na internetu. Nově můžete vylepšit rozmazané GIFy, snížit šum a zvýšit zřetelnost, aby vaše obrázky vypadaly jako nové.";

            $TEXT_9="Dopřejte si více výkonu";
            $TEXT_10="Když zkrátka není možné přestat, spolehněte se na tento revoluční čip. Vašemu telefonu zajistí lepší hraní her, streamování i prodlouženou výdrž baterie, které vás provedou nejvíce epickými zážitky.";
 
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
            $TEXT_4="Mere lys om natten"; 
            $TEXT_5="Gør natten episk med Nightography. Med Nightographys forbedrede AI bliver dine natbilleder og -film næsten lige så skarpe som om dagen. Fra skumring til daggry – og alt derimellem.";

            $TEXT_6="FOTO-REMASTER";
            $TEXT_7="Lav billeder om til mesterværker";            
            $TEXT_8="Gå til dit galleri og giv dine gamle billeder nyt liv. Gør slørede og mørke billeder bedre, eller forbedr kvaliteten af et barndomsbillede, du har modtaget via e-mail. Du kan også give slørede GIF'er fornyet liv ved at reducere støj og forbedre skarpheden.";

            $TEXT_9="Flere kræfter til dig";
            $TEXT_10="Når du ikke er klar til at stoppe det, du er i gang med, så giver den revolutionerende processor din telefon energi til at blive ved med at levere bedre spil- og streamingoplevelser. Med forbedret batteri kan du også holde telefonen tændt endnu længere.";
 
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
            $TEXT_4="Lass deine Nächte erstrahlen"; 
            $TEXT_5="Mach dich bereit, deine Galerie mit Aufnahmen zu füllen, die jeder haben will. Die KI von Nightography denkt mit, damit deine detailreichen Fotos und Videos hell, klar und farbenfroh werden – von einem Sonnenuntergang bis zum nächsten.";

            $TEXT_6="FOTO-EDITOR";
            $TEXT_7="Verwandle schnelle
            Schnapp-schüsse
            in kleine Meisterwerke";            
            $TEXT_8="Öffne deine Galerie und passe dunkle und unscharfe Fotos im Handumdrehen an. Auch alten Kinderbildern oder Fotos aus dem Internet kannst du neue Schärfe verleihen. Sogar verschwommenen GIFs kannst du neues Leben einhauchen, indem du das Rauschen reduzierst.";

            $TEXT_9="Power für dich";
            $TEXT_10="Wenn du dich nicht stoppen lassen willst, ist dieser leistungsstarke Prozessor genau richtig für dich. Erlebe atemberaubendes Video-Streaming und Gaming mit viel Akku-Ausdauer, die dich sicher auch durch lange Tage bringt.";
 
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
            $TEXT_4="Δώστε φως στη νύχτα σας"; 
            $TEXT_5="Ετοιμαστείτε για μια Συλλογή γεμάτη επικές νυχτερινές λήψεις που θα θέλουν όλοι. Η τεχνητή νοημοσύνη του Nightography διατηρεί τις λεπτομέρειες καθαρές, έτσι ώστε οι φωτογραφίες και τα βίντεο σε χαμηλό φωτισμό να είναι φωτεινά και πολύχρωμα από το σούρουπο μέχρι την αυγή και πάλι από την αρχή.";

            $TEXT_6="PHOTO REMASTER";
            $TEXT_7="Μετατρέψτε τις αστοχίες σε αριστουργήματα";            
            $TEXT_8="Κατευθυνθείτε στη Συλλογή για να βελτιώσετε τις σκοτεινές, θολές εικόνες, ακόμη και να αναβαθμίσετε παιδικές φωτογραφίες ή τις φωτογραφίες που βρήκατε στο διαδίκτυο. Τώρα, μπορείτε επίσης να ανανεώσετε τα θολά GIF, μειώνοντας τον θόρυβο και αυξάνοντας την καθαρότητα.";

            $TEXT_9="Μπαταρία που διαρκεί";
            $TEXT_10="Όταν η διακοπή δεν αποτελεί επιλογή, αυτό το ισχυρό τσιπ τροφοδοτεί το smartphone σας για καλύτερο στριμάρισμα παιχνιδιών και βίντεο, με εκτεταμένη διάρκεια ζωής μπαταρίας για να σας βοηθάει στις πιο επικές σας μέρες.";
 
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

            $TEXT_3="NIGHTOGRAPHY CAMERA";
            $TEXT_4="More light for your night"; 
            $TEXT_5="Get ready for a Gallery full of epic night shots everyone will want. Nightography's enhanced AI keeps details clear, so low light photos and videos will be bright and colourful from dusk to dawn.";

            $TEXT_6="PHOTO REMASTER";
            $TEXT_7="Turn misfires into masterpieces";            
            $TEXT_8="Head to the Gallery to enhance dark, blurry images and even upscale childhood photos or pictures you picked up online. And now you can revamp fuzzy GIFs, reducing noise and upping clarity to keep your loops looking fresh.";

            $TEXT_9="More power to you";
            $TEXT_10="When stopping's not an option, the Snapdragon chip powers your phone to deliver better gaming and video streaming, with extended battery life to carry you through the most epic of days.";
 
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
            $TEXT_4="Más luz para tu noche"; 
            $TEXT_5="Prepárate para una galería llena de fotos nocturnas épicas que todos querrán tener. La IA mejorada de Nightography mantiene los detalles nítidos, por lo que las fotos y los vídeos con poca luz serán brillantes y coloridos desde el atardecer hasta el amanecer, y viceversa.";

            $TEXT_6="REMASTERIZACIÓN FOTOGRÁFICA";
            $TEXT_7="Convierte los fallos en obras maestras";            
            $TEXT_8="Dirígete a la galería para mejorar las imágenes oscuras y borrosas, e incluso para mejorar fotos de la infancia o imágenes que hayas cogido en Internet. Ahora puedes renovar los GIF borrosos, reducir el ruido y aumentar la claridad para que tus vídeos tengan un aspecto fresco.";

            $TEXT_9="Más poder para ti";
            $TEXT_10="Cuando parar no es una opción. Este revolucionario chip impulsa tu smartphone para ofrecer mejores juegos y streaming de vídeo, con una mayor autonomía de la batería para que superes lo más épico de cada día.";
 
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
            $TEXT_4="Enemmän valoa yöhön"; 
            $TEXT_5="Valmistaudu ottamaan eeppisiä kuvia, jotka kaikki haluavat nähdä. Nightography-tekniikan parannettu tekoäly pitää yksityiskohdat terävinä, jolloin videoista tulee kirkkaita ja värikkäitä hämärissäkin olosuhteissa. Aamun sarastuksesta auringonlaskuun – ja kaikkiin hetkiin sillä välillä.";

            $TEXT_6="PHOTO REMASTER";
            $TEXT_7="Tee epäonnistuneista kuvistasi mestariteoksia";            
            $TEXT_8="Siirry Galleriaan ja anna kuvillesi uusi mahdollisuus. Voit parantaa epätarkkoja ja alivalottuneita kuvia, tai parantaa sähköpostitse saamasi lapsuuskuvan laatua. Voit myös parantaa epätarkkojen GIF-kuvien terävyyttä ja vähentää kuvakohinaa.";

            $TEXT_9="Enemmän tehoa sinulle";
            $TEXT_10="Kun et ole vielä valmis lopettamaan, puhelimen mullistava suoritin antaa lisätehoa, jotta voit nauttia paremmista pelielämyksistä tai suoratoistosisällöstä. Parannetun akkukeston ansiosta voit jatkaa entistä pidempään.";
 
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
            $TEXT_4="Il n'a pas peur du noir"; 
            $TEXT_5="Préparez-vous à devenir le photographe officiel en soirée. Avec un mode Nuit encore amélioré et dopé à l'IA, vos clichés et vidéos en basse lumière sont clairs et incroyablement détaillés. Pour des rendus époustouflants, du soir au matin.";

            $TEXT_6="RETOUCHE PHOTO";
            $TEXT_7="Et vos ratés deviennent des chefs-d'œuvre";            
            $TEXT_8="Votre application Galerie embarque une fonctionnalité de retouche de vos photos et vidéos. Grâce à cette dernière, vous pouvez effacer des objets, ajuster les différents paramètres ou redimensionner vos créations. Pour que vos albums soient remplis de chefs-d'œuvre.";

            $TEXT_9="Ses performances repoussent encore les limites";
            $TEXT_10="Les Galaxy S23 et Galaxy S23+ intègrent un nouveau processeur ultra puissant. Moins énergivore, il vous permet d'en faire plus sur votre smartphone toujours plus longtemps. Plus efficace, il garantit une expérience ultra fluide en toutes circonstances. Dites bonjour à la puce Snapdragon® 8 Gen 2, la plus rapide jamais embarquée sur un smartphone Galaxy.";
 
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
            $TEXT_4="להאיר את הלילה"; 
            $TEXT_5="התכוננו לגלריה של תמונות לילה מרהיבות ומעוררות התפעלות. הבינה המלאכותית המשופרת של צילום הלילה שומרת על חדות הפרטים, כך שגם תמונות וסרטונים שמצולמים בתנאים של תאורה חלשה יהיו בהירים ועשירים בצבעים – מהשקיעה ועד לזריחה וחוזר חלילה.";

            $TEXT_6="PHOTO REMASTER";
            $TEXT_7="להפוך תמונות גרועות ליצירות מופת";            
            $TEXT_8="היכנסו לגלריה ושפרו תמונות כהות ומטושטשות, או שדרגו תמונות ילדות ישנות. כעת תוכלו גם להפיח חיים חדשים בסרטוני GIF מטושטשים, להפחית רעשים ולהגביר את החדות למראה ברור ורענן.";

            $TEXT_9="מעניק לכם יותר כוח";
            $TEXT_10="כשאין לכם זמן לעצור, השבב המהפכני הזה מאפשר לטלפון לספק יכולות משופרות של גיימינג וסטרימינג. חיי הסוללה הארוכים מאפשרים לכם לעבור גם את הימים התובעניים ביותר.";
 
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
            $TEXT_4="Više svjetla za Vašu noć"; 
            $TEXT_5="Spremite se za galeriju punu spektakularnih noćnih fotografija koje će svi htjeti imati. Nightography kamera s pojačanom umjetnom inteligencijom čini detalje jasnima tako da će fotografije i videozapisi s malo svjetla biti svijetli i imati jake boje od sumraka do zore i od zore do sumraka.";

            $TEXT_6="PHOTO REMASTER";
            $TEXT_7="Od slučajnih fotografija do remek-djela";            
            $TEXT_8="Idite u Galeriju i uredite tamne, mutne slike te čak možete urediti i slike iz djetinjstva ili slike koje ste našli na internetu. Sada možete obraditi mutne GIF slike, smanjiti smetnje i povećati jasnoću kako bi Vaše petlje izgledale svježe.";

            $TEXT_9="Više snage za Vas";
            $TEXT_10="Kada zaustavljanje nije opcija, ovaj revolucionarni čip daje snagu Vašem telefonu i pruža bolje igranje igrica i gledanje videa, a produženo trajanje baterije nosi Vas kroz najbolje trenutke u danu.";
 
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
            $TEXT_4="Még több fény a sötétségben"; 
            $TEXT_5="Készülj fel egy olyan albumra tele lenyűgöző éjszakai felvételekkel, amire mindenki vágyik! A Nightography, éjszakai felvételek továbbfejlesztett mesterséges intelligenciája gondoskodik a tiszta részletekről, így még a gyenge fényviszonyok mellett (például alkonyatkor vagy hajnalban) készült képek és videók is nagy fényerejűek és gazdag színvilágúak lesznek.";

            $TEXT_6="FOTÓJAVÍTÁS";
            $TEXT_7="Félresikerült képből remekmű";            
            $TEXT_8="Látogass el az Album mappába, és skálázd fel a sötét, elmosódott képeket, a szívednek kedves gyermekkori fotóidat vagy akár az internetről letöltött képeket. Mostantól a homályos GIF-jeidet is felújíthatod, csökkentve a zajt és növelve a tisztaságot, hogy a bumerángok is jól nézzenek ki.";

            $TEXT_9="Még több lehetőség a kezedben";
            $TEXT_10="Ha nincs megállás! A forradalmi chip a jobb játék- és videostreamelés érdekében meghosszabbított akkumulátor-üzemidőt biztosít, így a leghosszabb napon is végigkísér miközben játszol.";
 
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

            $TEXT_3="NIGHTOGRAPHY CAMERA";
            $TEXT_4="More light for your night"; 
            $TEXT_5="Get ready for a Gallery full of epic night shots everyone will want. Nightography's enhanced AI keeps details clear, so low light photos and videos will be bright and colourful from dusk to dawn.";

            $TEXT_6="PHOTO REMASTER";
            $TEXT_7="Turn misfires into masterpieces";            
            $TEXT_8="Head to the Gallery to enhance dark, blurry images and even upscale childhood photos or pictures you picked up online. And now you can revamp fuzzy GIFs, reducing noise and upping clarity to keep your loops looking fresh.";

            $TEXT_9="More power to you";
            $TEXT_10="When stopping's not an option, the Snapdragon chip powers your phone to deliver better gaming and video streaming, with extended battery life to carry you through the most epic of days.";
 
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
            $TEXT_4="Più luce nella tua notte"; 
            $TEXT_5="Preparati a una Galleria ricca di scatti notturni epici, che tutti vorranno condividere. L’IA migliorata di Nightography mantiene nitidi i dettagli, così le foto e i video con scarsa luminosità saranno brillanti e colorati dal tramonto all’alba, e viceversa.";

            $TEXT_6="RIMASTERIZZA IMMAGINE";
            $TEXT_7="Trasforma ogni foto in un capolavoro";            
            $TEXT_8="Tuffati nella Galleria per perfezionare le immagini buie e sfocate, e dai una marcia in più alle foto della tua infanzia o alle immagini scovate online. Ora puoi anche migliorare le tue GIF sfocate, riducendo il rumore e migliorandone la chiarezza.";

            $TEXT_9="Più energia per te";
            $TEXT_10="Quando fermarsi non è un'opzione, il processore rivoluzionario alimenta il tuo telefono per regalarti un migliore streaming di giochi o di video, grazie alla estesa durata della batteria che ti accompagna nelle tue giornate più epiche.";
 
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
            $TEXT_4="あなたの夜に、さらなる光を"; 
            $TEXT_5="誰もが羨む、最高の夜景写真を、あなたのギャラリーに。ナイトグラフィー機能を強化したAIが細部までクリアに表現。夕暮れや夜明けなど、暗い場所での写真や動画も明るく色彩豊かに再現します。";

            $TEXT_6="フォトリマスター";
            $TEXT_7="編集機能で最高の1枚を";            
            $TEXT_8="暗くぼやけた画像や子どもの頃の写真などを、ギャラリーアプリで補正してみましょう。また、GIFのノイズを減らし、鮮明度を上げることができます。";

            $TEXT_9="ゲームも動画も、心おきなく";
            $TEXT_10="革新的なチップで、快適なゲーム体験や動画ストリーミングの視聴ができます。バッテリー容量が大きくなったので、よりバッテリー切れの心配をせずにスマートフォンライフを楽しめます。バッテリー切れの心配は必要ありません。";
 
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
                $TEXT_4="어둠을 이기는
                나이토그래피의 진화"; 
                $TEXT_5="나이토그래피가 진화했다는 건,
                이제 당신의 갤러리가 밤의 추억들로
                가득 채워질 거라는 얘기.
                섬세하게 살아나는 디테일,
                저조도에서 찍어도
                밝고 선명해질 사진과 영상으로
                밤의 추억은 낮의 시간만큼 선명해질 거예요.";
    
                $TEXT_6="리마스터";
                $TEXT_7="처음부터 잘 찍은 사진처럼";            
                $TEXT_8="어두운 곳에서 찍힌 사진,
                지나간 세월만큼 흐릿해진 어린 시절 사진,
                온라인에서 찾은 저화질 이미지와 GIF까지.
                해상도를 높이고 노이즈는 제거해
                선명하게 바꿀 수 있습니다.";
    
                $TEXT_9="더 강력한, 더 뛰어난능력 그 이상";
                $TEXT_10="게임? 동영상 스트리밍? 어떤 것이든
                당신이 멈추기 전에 갤럭시가 먼저 멈추지 않도록.
                혁신적인 칩과 향상된 배터리로
                갤럭시 S23 | S23+의 시간을 오래 지속시킵니다.7";
         
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
            $TEXT_4="Mer lys for natten"; 
            $TEXT_5="Gjør deg klar for et galleri fullt av episke bilder som alle ønsker å få se. Nightographys forbedrede AI bevarer detaljene skarpe, slik at bilder og filmer i mørke omgivelser blir lyse og fargerike. Fra morgengry til solnedgang – og alle øyeblikk derimellom.";

            $TEXT_6="PHOTO REMASTER";
            $TEXT_7="Forvandle middelmådige bilder til mesterverk";            
            $TEXT_8="Gå til kameragalleriet og gi de gamle bildene dine nytt liv. Gjør uskarpe og mørke bilder bedre, eller hev kvaliteten på et barndomsbilde du fikk i en e-post. Du kan til og med gi uskarpe GIF-er en ny sjanse ved å redusere støy og gjøre dem skarpere.";

            $TEXT_9="Mer kraft til deg";
            $TEXT_10="Når du ikke er klar til å avslutte det du holder på med, sørger den banebrytende prosessoren for å gi mobilen kraft til å fortsette å levere bedre gaming- og strømmeopplevelser. Med økt batteritid kan du dessuten holde ut enda lengre.";
 
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
            $TEXT_4="Meer licht in het donker"; 
            $TEXT_5="Vul je Galerij met de mooiste avondopnames die bij iedereen in de smaak zullen vallen. De verbeterde AI van Nightography zorgt voor helderdere details. Hierdoor worden foto's en video's helder en kleurrijk, op ieder uur van de dag.";

            $TEXT_6="PHOTO REMASTER";
            $TEXT_7="Van mislukking naar meesterwerk";            
            $TEXT_8="Ga naar de Galerij om donkere, vage foto's te bewerken. Je kunt zelfs foto's uit de oude doos of internetfoto's mooier maken. Neem een wazig gifje onder handen en maak er een mooi beeld van.";

            $TEXT_9="Meer power";
            $TEXT_10="Als stoppen geen optie is, voorziet deze revolutionaire chip je telefoon van voldoende vermogen voor een betere game- en streamervaring. Dankzij de verlengde batterijduur kun je zelfs op intensieve dagen voort.";
 
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
            $TEXT_4="Mais luz para a sua noite"; 
            $TEXT_5="Prepare-se para uma Galeria cheia de fotografias noturnas épicas que todos vão querer. A IA melhorada da Nightography mantém os detalhes nítidos, para que as fotografias e vídeos com pouca luz sejam luminosos e coloridos desde o anoitecer ao amanhecer, e vice-versa.";

            $TEXT_6="REMASTERIZADOR DE FOTOGRAFIAS";
            $TEXT_7="Transforme os erros em obras-primas";            
            $TEXT_8="Visite a Galeria para melhorar as imagens escuras e desfocadas e até melhorar as fotografias de infância ou as fotografias que selecionou online. Vai ainda poder renovar GIFs difusos, reduzindo o ruído e aumentando a claridade.";

            $TEXT_9="Mais potência para si";
            $TEXT_10="Quando parar não é uma opção, este revolucionário chip alimenta o seu telefone para proporcionar melhor jogabilidade e streaming de vídeo, com uma duração de bateria prolongada.";
 
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

            $TEXT_3="APARAT DO ZDJĘĆ NOCNYCH";
            $TEXT_4="Nocne zdjęcia których każdy Ci pozazdrości"; 
            $TEXT_5="Szykuj się na galerię pełną niesamowitych nocnych ujęć, o których inni mogą pomarzyć. Z udoskonaloną sztuczną inteligencją Nightografii szczegóły są wyraźne, więc zdjęcia i filmy przy słabym oświetleniu będą jasne i kolorowe niezależnie od pory dnia.";

            $TEXT_6="PRZETWARZANIE ZDJĘĆ";
            $TEXT_7="Zamień nieudane zdjęcia w dzieła sztuki";            
            $TEXT_8="Zajrzyj do Galerii, aby poprawić ciemne, nieostre obrazy, a nawet podrasować zdjęcia z dzieciństwa lub te znalezione w sieci. Możesz ulepszyć rozmazane GIF-y, redukując szumy i poprawiając wyrazistość tak, aby Twoje animacje wyglądały jeszcze lepiej.";

            $TEXT_9="Więcej mocy";
            $TEXT_10="Gdy nie ma czasu do stracenia, ten oto rewolucyjny procesor zapewnia lepszą jakość gier i streamingu video przy bardziej wydajnym działaniu baterii. Przeżyj niezwykłe dni z Galaxy.";
           
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
            $TEXT_4="Poze mai luminoase și clare noaptea"; 
            $TEXT_5="Pregătește-te pentru o galerie plină de fotografii epice pe timp de noapte pe care toată lumea le va dori. Inteligența artificială îmbunătățită a Nightography păstrează detaliile clare, astfel încât fotografiile și clipurile video cu lumină slabă vor fi luminoase și colorate de la apus la răsărit și invers.";

            $TEXT_6="PHOTO REMASTER";
            $TEXT_7="Transformă orice poză în capodoperă";            
            $TEXT_8="Acum poți îmbunătăți claritatea imaginilor întunecate, neclare, chiar și a fotografiilor din copilărie, imaginilor de pe internet sau GIF-urilor reducând zgomotul.";

            $TEXT_9="Mai multă putere pentru tine";
            $TEXT_10="Atunci când ești în mijlocul acțiunii, procesorul revoluționar îți alimentează telefonul pentru a-ți oferi jocuri și streaming video mai bune, cu o durată de viață extinsă a bateriei.";
 
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
            $TEXT_4="Mer ljus i natten"; 
            $TEXT_5="Gör dig redo för ett galleri fullt av episka bilder som alla vill ta del av. Nightography:ns förbättrade AI håller detaljerna skarpa, så att bilder och filmer i mörka miljöer blir ljusa och färgstarka. Från gryning till solnedgång – och alla ögonblick däremellan.";

            $TEXT_6="FOTO-REMASTER";
            $TEXT_7="Förvandla halvdana bilder till mästerverk";            
            $TEXT_8="Gå till kameragalleriet och ge dina gamla bilder nytt liv. Förbättra suddiga och mörka foton, eller höj kvaliteten på en barndomsbild du fick i ett mejl. Du kan till och med ge oskarpa GIF:ar en ny chans genom att reducera brus och förbättra skärpan.";

            $TEXT_9="Mer kraft till dig";
            $TEXT_10="När du inte är redo att sluta med det du gör, ger den revolutionerande processorn din mobil krafter att fortsätta leverera bättre gaming- och streamingupplevelser. Med utökat batteriliv kan du dessutom hålla igång ännu längre.";
 
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
            $TEXT_4="Gecenizi aydınlatacak daha fazla ışık"; 
            $TEXT_5="Herkesin arzu ettiği olağanüstü gece çekimleriyle dolu bir galeriye hazır olun. Nightography’nin gelişmiş Yapay Zekası ayrıntıları net tutar, böylece düşük ışıkta fotoğraf ve videolar gün batımından şafağa kadar parlak ve renkli olur.";

            $TEXT_6="FOTOĞRAF DÜZENLEME";
            $TEXT_7="Sarsıntılı çekimleri sanat eserlerine dönüştürün";            
            $TEXT_8="Karanlık, bulanık görüntüleri ve hatta çocukluk fotoğraflarını veya çevrimiçi olarak topladığınız resimleri iyileştirmek için galeriye gidin. Artık döngülerinizin yepyeni görünmesini sağlamak için bulanık GIF’leri yenileyebilir, kumlanmayı azaltabilir ve netliği artırabilirsiniz.";

            $TEXT_9="Daha fazla güç elinizde";
            $TEXT_10="Durmak bir seçenek olmadığında, bu devrim niteliğindeki çip, telefonunuzu en destansı günlerde sizi başarıya ulaştıracak uzatılmış pil ömrüyle daha iyi oyun ve video akışı sunacak şekilde güçlendirir.";
 
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
            $TEXT_4="夜，更顯明亮"; 
            $TEXT_5="準備以震撼的夜攝場景填滿相簿，讓人人羨慕。Nightography黑夜亮攝的升級AI技術，讓細節保持清晰。因此，由日落拍到日出，甚至再回到晚上，低光照片或影片都依然明亮、鮮艷。";

            $TEXT_6="相片重製功能";
            $TEXT_7="錯手 • 變成大師作品";            
            $TEXT_8="

            前往媒體瀏覽器，調整黑暗或模糊影像，甚至為童年相片或你在網上找到的圖像增加像素。現在你可重制模糊不清的GIFs，減少雜訊，提升銳利度，即使重複播放，依然歷看常新。";

            $TEXT_9="給你更多強大力量";
            $TEXT_10="需要全力以赴時，這個嶄新晶片讓你的手機更強，帶來更好的打機和看片體驗，配備更長的電池壽命，帶領你走過最具挑戰的日子。";
 
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

            $TEXT_3="NIGHTOGRAPHY CAMERA";
            $TEXT_4="More light for your night"; 
            $TEXT_5="Get ready for a Gallery full of epic night shots everyone will want. Nightography's enhanced AI keeps details clear, so low light photos and videos will be bright and colourful from dusk to dawn.";

            $TEXT_6="PHOTO REMASTER";
            $TEXT_7="Turn misfires into masterpieces";            
            $TEXT_8="Head to the Gallery to enhance dark, blurry images and even upscale childhood photos or pictures you picked up online. And now you can revamp fuzzy GIFs, reducing noise and upping clarity to keep your loops looking fresh.";

            $TEXT_9="More power to you";
            $TEXT_10="When stopping's not an option, the Snapdragon chip powers your phone to deliver better gaming and video streaming, with extended battery life to carry you through the most epic of days.";
 
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
