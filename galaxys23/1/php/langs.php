<?php

	$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    if (isset($_GET['lang'])) {
        if (!empty($_GET['lang'])) {
            $lang = $_GET['lang'];
        }
    }

//   $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
//,'bg','hi','nl','pl','zh','id'

  $acceptLang = ['ae','cs','da', 'de', 'el', 'en','es','fi','fr','hr','hu','it','ja','nb','pt','ro','ru','sv','tr'];
//   echo $lang;
  $lang = in_array($lang, $acceptLang) ? $lang : 'en';

//   echo $lang;

  $actual_link = "$_SERVER[REQUEST_URI]";

  $rrr = strpos($actual_link, 'affiliate_id', 1);


  $lin = substr($actual_link, $rrr);
 
//   echo 'URL actual'.$actual_link;

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

        case 'ae':

            if($PRICE == '1€' || $PRICE == '€1'){

                $MON_F = 'forty-nine with ninety-nine euros';

            }elseif($PRICE == '1USD' || $PRICE == '$1'){

                $MON_F = 'forty-nine with ninety-nine american dollars';

            }elseif($PRICE == '£1'){

                $MON_F = 'forty-nine pounds and ninety-nine pence';

            }

           
            $ALERT="انت لست مسجلًا بعد! لمشاهدة هذا المحتوى بلا حدود، عليك أن تقوم بتفعيل حسابك!";
            // Content

            $m="[مجانا إبوب تنزيل] نسخة كاملة لكتاب إليكتروني";
            $TEXT_1="مواضيع شائعة";
            $TEXT_2="عمل";
            $TEXT_3="تاريخ";
            $TEXT_4="حاسوب";
            $TEXT_5="الدين";
            $TEXT_6="واللياقة";
            $TEXT_6_A="الصحة";
            $TEXT_7="علوم";
            $TEXT_8="الوجهة البدنية والعقلية والروحية";
            $TEXT_9="استعراض المواضيع";
            $TEXT_9_A="البحث حسب العنوان, المؤلف, الموضوع أو رقم دولي معياري للكتاب";
            $TEXT_10="كتب مقترحة";
            $TEXT_11="عناوين جديدة";
            $TEXT_12="اقرأ المزيد";
            $TEXT_13="رأي";
            $TEXT_14=":تقييم المستخدمين";
            $TEXT_15=":التنزيلات";
            $TEXT_16="pdf";
            $TEXT_17="doc";
            $TEXT_18="docx";
            $TEXT_19="mobi";
            $TEXT_20="djvu";
            $TEXT_21="epub";
            $TEXT_22="ibooks";
            $TEXT_23="!التحميل الآن";
            $TEXT_24="آراء المستخدمين";
            $TEXT_25="Facebook";
            $TEXT_26="!انضموا الينا على فيس بوك";
            $TEXT_27="Twitter";
            $TEXT_28="!تابعونا على تويتر";
            $TEXT_29="الحوار";
            $TEXT_30="";
            $TEXT_30_A="";
            $TEXT_31="";
            $TEXT_32="Ms. Butterfly";
            $TEXT_32_A="10.55 / ";
            $TEXT_33=".نا أتفق معك. الكتب رائعة";
            $TEXT_34="Paul";
            $TEXT_34_A="08.58 / ";
            $TEXT_35=".ممتاز, شكراً";
            $TEXT_36="...شارك الأفكار";
            $TEXT_37="عن كتب إليكترونية لـ";
            $TEXT_38="ابحث عن عدد كبير من الكتب المتاحة لعامة";
            $TEXT_39=".الجمهور.استعرض, إقرأ وحمّل مباشرة";
            $TEXT_40="موضوع";
            $TEXT_41="كتاب إليكترونية";
            $TEXT_42="أجهزة قارئ";
            $TEXT_43=".كتاب إليكترونيةقائمة الأجهزة غير الكمبيوتر الملائمة لخدمة ";
            $TEXT_44="التحميل المباشر";
            $TEXT_45=".نزّل كتبك المفضلة على الحاسوب أو أي جهاز آخر";
            $TEXT_46="الأسئلة الشائعة";
            $TEXT_47=".نظر الى قسم الأسئلة الشائعة لقراءة أسئلة وأجوبة الأكثر المتداولة";
            $TEXT_48="استكشاف المشاكل وإصلاحها";
            $TEXT_49="لديك مشكلة؟ فريق الدعم دائماً جاهز لمساعدتك";
            $TEXT_50="!أخبار فريدة,عناوين جديدة وأكثر";
            $TEXT_51="!سجّل في رسائل الأخبار لكي تحصل على عروض خاصة لا تستطيع أن تعثر عليها في أي مكان آخر بالاضافة الى تحديثات صفحتنا مباشرة الى بريدك الإلكتروني";
            $TEXT_52="أدخل عنوانك الإلكتروني هنا";
            $TEXT_53="سجّل";

            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost '.$MON_F.' every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            // Footer
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a monthly subscription cloud storage service that provides its members access to its platform where they can upload, store, manage, download their files.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs ".$MON_F." per month, payable by credit or debit card.";
            $FOOT_WIN="What is this website?"; 
            $FOOT_WIN_TEXT="This website is an example of the download speeds and features you could get with your account at regulardrive.net. We do not store any third party files and when you register you will get access to your platform without any file or document. The names that can be shown on this website are generated only as examples. You are not allowed to upload to your account any file that is not your property or that you do not have their rights.";
            
            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";

            
            break;

        case 'bg':

            if($PRICE == '1€' || $PRICE == '€1'){

                $MON_F = 'forty-nine with ninety-nine euros';

            }elseif($PRICE == '1USD' || $PRICE == '$1'){

                $MON_F = 'forty-nine with ninety-nine american dollars';

            }elseif($PRICE == '£1'){

                $MON_F = 'forty-nine pounds and ninety-nine pence';

            }

            $ALERT="Все още не си регистриран(а)! За да гледаш това съдържание без ограничения, трябва да активираш профила си!";
            // Content

            $m="E-книга, пълна версия";
            $TEXT_1="Popular subjects";
            $TEXT_2="Business";
            $TEXT_3="History";
            $TEXT_4="Computers";
            $TEXT_5="Religion";
            $TEXT_6="Health";
            $TEXT_6_A="Fitness";
            $TEXT_7="Science";
            $TEXT_8="Body Mind Spirit";
            $TEXT_9="Browse our categories";
            $TEXT_9_A="Search by title, author, subject or ISBN";
            $TEXT_10="Featured titles";
            $TEXT_11="Just arrived";
            $TEXT_12="Read more";
            $TEXT_13="Reviews";
            $TEXT_14="User rating:";
            $TEXT_15="Downloads:";
            $TEXT_16="pdf";
            $TEXT_17="doc";
            $TEXT_18="docx";
            $TEXT_19="mobi";
            $TEXT_20="djvu";
            $TEXT_21="epub";
            $TEXT_22="ibooks";
            $TEXT_23="Download now!";
            $TEXT_24="User reviews";
            $TEXT_25="Facebook";
            $TEXT_26="Join us on Facebook!";
            $TEXT_27="Twitter";
            $TEXT_28="Follow us on Twitter!";
            $TEXT_29="discussion";
            $TEXT_30="John Jackson";
            $TEXT_30_A="12.52 / ";
            $TEXT_31="I’m looking for some new good fantasy books. Anyone here that can recommend me something?";
            $TEXT_32="Ms. Butterfly";
            $TEXT_32_A="10.55 / ";
            $TEXT_33="I agree with you. The books are great.";
            $TEXT_34="Paul";
            $TEXT_34_A="08.58 / ";
            $TEXT_35="Great, thanks.";
            $TEXT_36="Share your thoughts...";
            $TEXT_37="About EBOOKS";
            $TEXT_38="Search for thousands of publicly available ebooks.";
            $TEXT_39="Preview, read and download directly.";
            $TEXT_40="categories";
            $TEXT_41="ebooks";
            $TEXT_42="Reader devices";
            $TEXT_43="A list of the non-computer reading devices supported by Ebooks.";
            $TEXT_44="Download directly";
            $TEXT_45="Download your favourite books to your computer or to any other device.";
            $TEXT_46="FAQ";
            $TEXT_47="Check our Frequently Asked Questions for the most common questions and answers.";
            $TEXT_48="Troubleshooting";
            $TEXT_49="Have any problem? Our support team is always available to help.";
            $TEXT_50="Specials, new title alerts and more!";
            $TEXT_51="Sign up for our newsletter to get exclusive deals that you can’t find anywhere else and latest updates from our website straight to your inbox!";
            $TEXT_52="Type your e-mail address here";
            $TEXT_53="Save";

            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost '.$MON_F.' every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            // Footer
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a monthly subscription cloud storage service that provides its members access to its platform where they can upload, store, manage, download their files.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs ".$MON_F." per month, payable by credit or debit card.";
            $FOOT_WIN="What is this website?"; 
            $FOOT_WIN_TEXT="This website is an example of the download speeds and features you could get with your account at regulardrive.net. We do not store any third party files and when you register you will get access to your platform without any file or document. The names that can be shown on this website are generated only as examples. You are not allowed to upload to your account any file that is not your property or that you do not have their rights.";
            
            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";
            break;


        case 'cs':

            if($PRICE == '1€' || $PRICE == '€1'){

                $MON_F = 'forty-nine with ninety-nine euros';

            }elseif($PRICE == '1USD' || $PRICE == '$1'){

                $MON_F = 'forty-nine with ninety-nine american dollars';

            }elseif($PRICE == '£1'){

                $MON_F = 'forty-nine pounds and ninety-nine pence';

            }
            
            $ALERT="Zatím nejste zaregistrovaní! Chcete-li tento obsah sledovat bez omezení, musíte si aktivovat účet!";
            // Content
           
            $m="Ebook, plná verze [zdarma stáhnout epub]";
            $TEXT_1="POPULÁRNÍ TÉMATA";
            $TEXT_2="Byznys";
            $TEXT_3="Historie";
            $TEXT_4="Počítače";
            $TEXT_5="Náboženství";
            $TEXT_6="Zdraví";
            $TEXT_6_A="fitness";
            $TEXT_7="Věda";
            $TEXT_8="Tělo a duše";
            $TEXT_9="Hledání pomoci kategorií";
            $TEXT_9_A="Hledat podle názvu, autora, tématu, ISBN";
            $TEXT_10="Vybrané tituly";
            $TEXT_11="Nejnovější";
            $TEXT_12="Přečíst více";
            $TEXT_13="Hodnocení";
            $TEXT_14="Hodnocení uživatelů:";
            $TEXT_15="Stáhování:";
            $TEXT_16="pdf";
            $TEXT_17="doc";
            $TEXT_18="docx";
            $TEXT_19="mobi";
            $TEXT_20="djvu";
            $TEXT_21="epub";
            $TEXT_22="ibooks";
            $TEXT_23="Ihned stáhnout!";
            $TEXT_24="Uživatelské recenze";
            $TEXT_25="Facebook";
            $TEXT_26="Připojte se k nám na Facebooku!";
            $TEXT_27="Twitter";
            $TEXT_28="Sledujte nás na Twitteru!";
            $TEXT_29="DISKUZE";
            $TEXT_30="Motýlek";
            $TEXT_30_A="19.12 / ";
            $TEXT_31="Souhlasím s tebou. Tyhle knížky jsou super.";
            $TEXT_32="Peter";
            $TEXT_32_A="17.15 / ";
            $TEXT_33="Super, díky";
            $TEXT_34="";
            $TEXT_34_A="";
            $TEXT_35="";
            $TEXT_36="Podělte se o své myšlenky...";
            $TEXT_37="O produktu EBOOKY";
            $TEXT_38="Prohledejte tisíce veřejně dostupných ebooků.";
            $TEXT_39="Nahlédněte, přečtěte si a přímo stahujte.";
            $TEXT_40="kategorií";
            $TEXT_41="ebooků";
            $TEXT_42="Čtečky";
            $TEXT_43="Seznam čteček - mimo PC - které jsou podporovány Ebooks.";
            $TEXT_44="Stáhnout přímo";
            $TEXT_45="Stáhněte si své oblíbené knihy do PC nebo na jakékoli jiné zařízení.";
            $TEXT_46="Často kladené otázky (FAQ)";
            $TEXT_47="Podívejte se na naše Často kladené otázky (FAQ), kde najdete nejčastější otázky a odpovědi.";
            $TEXT_48="Odstraňování problémů";
            $TEXT_49="Máte jakýkoli problém? Náš tým podpory je vám vždy k dispozici.";
            $TEXT_50="Speciální nabídky, upozornění na nové tituly a další!";
            $TEXT_51="Zaregistrujte se k našemu newsletteru a získejte exkluzivní nabídky, které nikde jinde nenajdete, stejně jako nejnovější informace o našem webu, přímo do vaší schránky!";
            $TEXT_52="Zadejte svou e-mailovou adresu zde";
            $TEXT_53="Uložit";

            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost '.$MON_F.' every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            // Footer
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a monthly subscription cloud storage service that provides its members access to its platform where they can upload, store, manage, download their files.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs ".$MON_F." per month, payable by credit or debit card.";
            $FOOT_WIN="What is this website?"; 
            $FOOT_WIN_TEXT="This website is an example of the download speeds and features you could get with your account at regulardrive.net. We do not store any third party files and when you register you will get access to your platform without any file or document. The names that can be shown on this website are generated only as examples. You are not allowed to upload to your account any file that is not your property or that you do not have their rights.";
            
            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";
            break;


        case 'da':

            if($PRICE == '1€' || $PRICE == '€1'){

                $MON_F = 'niogfyrre med nioghalvfems euro';

            }elseif($PRICE == '1USD' || $PRICE == '$1'){

                $MON_F = 'niogfyrre med nioghalvfems amerikanske dollars';

            }elseif($PRICE == '£1'){

                $MON_F = 'niogfyrre pund og nioghalvfems pence';

            }
            
            $ALERT="Du er endnu ikke tilmeldt! For at se dette indhold uden begrænsninger er du nødt til at aktivere din konto!";
            // Content
           
            $m="Ebog, fuld version [gratis epub download]";
            $TEXT_1="POPULÆRE EMNER";
            $TEXT_2="Business";
            $TEXT_3="Historie";
            $TEXT_4="Computer";
            $TEXT_5="Religion";
            $TEXT_6="Sundhed";
            $TEXT_6_A="Fitness";
            $TEXT_7="Videnskab";
            $TEXT_8="Krop Sind Ånd";
            $TEXT_9="Søg vores kategorier";
            $TEXT_9_A="Søg efter titel, forfatter, emne eller ISBN";
            $TEXT_10="Udvalgte titler";
            $TEXT_11="Lige ankommet";
            $TEXT_12="Læs mere";
            $TEXT_13="Anmeldelser";
            $TEXT_14="Brugerbedømmelser:";
            $TEXT_15="Downloads:";
            $TEXT_16="pdf";
            $TEXT_17="doc";
            $TEXT_18="docx";
            $TEXT_19="mobi";
            $TEXT_20="djvu";
            $TEXT_21="epub";
            $TEXT_22="ibooks";
            $TEXT_23="Download nu!";
            $TEXT_24="Brugeranmeldelser";
            $TEXT_25="Facebook";
            $TEXT_26="Vær med os på Facebook!";
            $TEXT_27="Twitter";
            $TEXT_28="Følg os på Twitter!";
            $TEXT_29="DISKUSSION";
            $TEXT_30="Ms. Butterfly";
            $TEXT_30_A="19.32 / ";
            $TEXT_31="Jeg er enig. De bøger er fantastiske.";
            $TEXT_32="Paul";
            $TEXT_32_A="17.35 / ";
            $TEXT_33="Super, tak.";
            $TEXT_34="";
            $TEXT_34_A="";
            $TEXT_35="";
            $TEXT_36="Del dine tanker...";
            $TEXT_37="Om EBØGER";
            $TEXT_38="Søg efter tusindvis af offentlige ebøger.";
            $TEXT_39="Gennemgå, læs og download direkte.";
            $TEXT_40="kategorier";
            $TEXT_41="ebøger";
            $TEXT_42="Læser enheder";
            $TEXT_43="En liste med læseenheder (ikke PC) som understøttes af Ebooks.";
            $TEXT_44="Download direkte";
            $TEXT_45="Download dine yndlings bøger til din computer eller anden enhed.";
            $TEXT_46="FAQ";
            $TEXT_47="Tjek vores Ofte Stillede Spørgsmål for de mest almindelige spørgsmål og svar.";
            $TEXT_48="Problemløsning";
            $TEXT_49="Har du problemer? Vores support team står altid til rådighed.";
            $TEXT_50="Specielle, beskeder om nye titler og mere!";
            $TEXT_51="Tilmeld dig vores nyhedsbrev for at få eksklusive tilbud som ikke findes andre sted, og de seneste opdateringer fra vores hjemmeside direkte til din inbox!";
            $TEXT_52="Indtast din mail adresse her";
            $TEXT_53="Gem";


            //asterisco
            $ASTERISCO='*Brug af PRØVEPERIODEN indebærer, at du opretter et todages abonnement på regulardrive.net-tjenesten til den pris, der er angivet i forbindelse med kampagnen. Hvis du ikke opsiger din konto efter de to dage, vil du blive opkrævet for et premium-abonnement, som  koster '.$MON_F.' om måneden. Du finder al denne information samt betingelserne for abonnementet i vores vilkår og betingelser.';
            //footer
            
            // Footer
            $FOOT_WHAT='Hvad er regulardrive.net?';
            $FOOT_WHAT_TEXT='Det er en cloud-baseret lagringstjeneste med et månedligt abonnement, som giver abonnenterne adgang til en platform, hvor de kan uploade, lagre, administrere og downloade deres filer.';
            $FOOT_COMMIT="Hvad forpligter jeg mig til?";
            $FOOT_COMMIT_TEXT="Brug af PRØVEPERIODEN indebærer, at du opretter et premium-abonnement på regulardrive.net-tjenesten. Hvis du ikke opsiger din konto efter prøveperioden på to dage, skal du betale den månedlige takst for premium-abonnementet. Abonnementets betingelser kan ses her: <a id='tos1' href='". $TOS3 ."' style='color: lightgray;' target='_blank'>Vilkår og betingelser for tjenesten</a>. Ubesværet opsigelse. Hvis du ikke opsiger abonnementet i løbet af prøveperioden, skal du betale den månedlige takst for abonnementet, og det bliver automatisk fornyet hver måned, indtil du opsiger det. Abonnementet koster ".$MON_F." om måneden, og du kan betale med kredit- eller debetkort.";
            $FOOT_WIN="What is this website?"; 
            $FOOT_WIN_TEXT="Dette website er et eksempel på de downloadhastigheder og funktioner, du kunne få, med din konto hos regulardrive.net. Vi gemmer ikke nogen som helst tredjepartsfiler, og når du tilmelder dig, får du adgang til vores platform uden brug af nogen fil eller noget dokument. Navnene, der muligvis vises her på dette website, er eksempler. Du har ikke tilladelse til at uploade nogen fil, der ikke er din ejendom, eller som du ikke har rettighederne til, til din konto.";
            
            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";
            break;


        case 'de': 

            if($PRICE == '1€' || $PRICE == '€1'){

                $MON_F = 'Neunundvierzig mit neunundneunzig Euro';

            }elseif($PRICE == '1USD' || $PRICE == '$1'){

                $MON_F = 'Neunundvierzig Pfund und neunundneunzig Pence';

            }elseif($PRICE == '£1'){

                $MON_F = 'Neunundvierzig mit neunundneunzig amerikanischen Dollar';

            }
            
            $ALERT="Sie sind noch nicht registriert! Um diesen Inhalt ohne Einschränkungen zu sehen, müssen Sie Ihr Konto aktivieren!";
            // Content
          
            $m="EBook, Vollversion [kostenloser ePub Download]";
            $TEXT_1="BELIEBTE THEMEN";
            $TEXT_2="Business";
            $TEXT_3="Geschichte";
            $TEXT_4="Komputer";
            $TEXT_5="Religion";
            $TEXT_6="Gesundheit";
            $TEXT_6_A="Fitness";
            $TEXT_7="Wissenschaft";
            $TEXT_8="Körper & Seele";
            $TEXT_9="Kategorien durchsuchen";
            $TEXT_9_A="Search by title, author, subject or ISBN";
            $TEXT_10="Empfohlene Titel";
            $TEXT_11="Neu eingetroffen";
            $TEXT_12="Weiterlesen";
            $TEXT_13="Bewertungen";
            $TEXT_14="Benutzerbewertung:";
            $TEXT_15="Downloads:";
            $TEXT_16="pdf";
            $TEXT_17="doc";
            $TEXT_18="docx";
            $TEXT_19="mobi";
            $TEXT_20="djvu";
            $TEXT_21="epub";
            $TEXT_22="ibooks";
            $TEXT_23="Jetzt herunterladen!";
            $TEXT_24="Nutzerbewertungen";
            $TEXT_25="Facebook";
            $TEXT_26="Besuchen Sie uns auf Facebook!";
            $TEXT_27="Twitter";
            $TEXT_28="Folgen Sie uns auf Twitter!";
            $TEXT_29="GESPRÄCHE";
            $TEXT_30="";
            $TEXT_30_A="";
            $TEXT_31="";
            $TEXT_32="Ms. Butterfly";
            $TEXT_32_A="20.19 / ";
            $TEXT_33="Ich stimme Ihnen zu. Die Bücher sind großartig.";
            $TEXT_34="Paul";
            $TEXT_34_A="18.22 / ";
            $TEXT_35="Super, vielen Dank.";
            $TEXT_36="Teilen Sie Ihre Meinung...";
            $TEXT_37="Über EBOOKS";
            $TEXT_38="Durchsuchen Sie tausende öffentlich zugängliche Bücher.";
            $TEXT_39="Vorschau, Lesen und direkter Download.";
            $TEXT_40="kategorien";
            $TEXT_41="ebooks";
            $TEXT_42="Lesegeräte";
            $TEXT_43="Eine Liste von Lesegeräten, die von Ebooks unterstützt werden.";
            $TEXT_44="Direkt herunterladen";
            $TEXT_45="Laden Sie Ihre Lieblingsbücher auf Ihren Computer oder jegliche anderen Geräte herunter.";
            $TEXT_46="FAQ";
            $TEXT_47="Schauen Sie die FAQ nach den meist gestellten Fragen und Antworten durch.";
            $TEXT_48="Fehlerbehebung";
            $TEXT_49="Gibt es Probleme? Unser Kundendienst steht immer zur Hilfe zur Verfügung";
            $TEXT_50="Spezialangebote, neue Titel und mehr!";
            $TEXT_51="Melden Sie sich für unseren Newsletter an und erhalten Sie exklusive Deals, die es nirgendwo sonst gibt, sowie die neuesten Updates unserer Website direkt in Ihren Posteingang!";
            $TEXT_52="Geben Sie hier Ihre E-Mail-Adresse ein";
            $TEXT_53="Speichern";

            $ASTERISCO='*Mit der Nutzung der PROBE abonnieren Sie den Service regulardrive.net für zwei Tage zum in der Aktion angegebenen Preis. Wenn Sie Ihr Konto nicht innerhalb von zwei Tagen kündigen, wird Ihnen alle 30 Tage die Gebühr für das Premium-Konto in Höhe von '.$MON_F.' in Rechnung gestellt In den Allgemeinen Geschäftsbedingungen finden Sie die vollständigen Informationen und Bedingungen für das Abonnement.';
            
            // Footer
            
            $FOOT_WHAT="Was ist regulardrive.net?";
            $FOOT_WHAT_TEXT="Es ist ein monatliches Abonnement eines Cloud-Speicherdienstes, der den Mitgliedern Zugang zu einer Plattform bietet, auf die sie ihre Dateien hoch laden, diese speichern, verwalten und herunterladen können";
            $FOOT_COMMIT="Wozu verpflichte ich mich?";
            $FOOT_COMMIT_TEXT='Mit der Nutzung von TRIAL abonnieren Sie den Premium-Service regulardrive.net. Wenn Sie Ihr Konto nicht kündigen, müssen Sie nach zwei Probetagen jeden Monat den Wert des Premium-Abonnements bezahlen. Die Abonnementbedingungen finden Sie hier: <a id="tos1" href="'. $TOS3 .'" style="color: lightgray;" target="_blank">Nutzungsbedingungen</a>. Einfache Abmeldung. Wenn Sie Ihr Abonnement während der Probezeit nicht kündigen, müssen Sie Ihr Abonnement jeden Monat bezahlen und es wird automatisch monatlich verlängert, bis Sie Ihr Abonnement kündigen. Das Abonnement kostet '.$MON_F.' pro Monat und ist mit einer Kredit- oder Debitkarte zu zahlen.';
            $FOOT_WIN="Was ist diese Website?";
            $FOOT_WIN_TEXT="Diese Website ist ein Beispiel für die Download-Geschwindigkeiten und Funktionen, die Sie mit Ihrem Konto bei regulardrive.net erhalten könnten. Wir speichern keine Dateien von Drittanbietern und bei der Registrierung erhalten Sie Zugriff auf Ihre Plattform ohne Dateien oder Dokumente. Die Namen, die auf dieser Website angezeigt werden können, sind nur als Beispiele generiert. Es ist Ihnen nicht erlaubt, Dateien auf Ihr Konto hochzuladen, die nicht Ihr Eigentum sind oder an denen Sie nicht die Rechte besitzen.";

            $FOOT_SOCIAL="Häufig Gestellte Fragen";
            $FOOT_SUPPORT="Unterstützung";
            $FOOT_PRIVACY="Datenschutzerklärung";
            $FOOT_TERMS="Allgemeine Geschäftsbedingungen";
            $FOOT_PRE="Häufig gestellte Fragen";
            $FOOT_CONTACT="Kontakt";
            $FOOT_CANCEL="Mitgliedschaft kündigen";
            $FOOT_RIGHTS="© 2024 Alle Rechte vorbehalten - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 Alle rechte vorbehalten";
        break;
        case 'el':

            if($PRICE == '1€' || $PRICE == '€1'){

                $MON_F = 'forty-nine with ninety-nine euros';

            }elseif($PRICE == '1USD' || $PRICE == '$1'){

                $MON_F = 'forty-nine with ninety-nine american dollars';

            }elseif($PRICE == '£1'){

                $MON_F = 'forty-nine pounds and ninety-nine pence';

            }

            $ALERT="Δεν έχετε εγγραφεί ακόμα! Για να παρακολουθήσετε αυτό το περιεχόμενο απεριόριστα, πρέπει να ενεργοποιήσετε τον λογαριασμό σας!";
            // Content
         
            $m="Ebook, πλήρης έκδοση [δωρεάν λήψη epub]";
            $TEXT_1="ΔΗΜΟΦΙΛΗ ΘΕΜΑΤΑ";
            $TEXT_2="Εργασία";
            $TEXT_3="Ιστορικό";
            $TEXT_4="Υπολογιστές";
            $TEXT_5="Θρησκεία";
            $TEXT_6="Υγεία";
            $TEXT_6_A="Σωματική Άσκηση";
            $TEXT_7="Επιστήμη";
            $TEXT_8="Σώμα Μυαλό Πνεύμα";
            $TEXT_9="Αναζήτηση στις κατηγορίες μας";
            $TEXT_9_A="Αναζήτηση κατά τίτλο, συγγραφέα, θέμα ή ISBN";
            $TEXT_10="Επιλεγμένοι τίτλοι";
            $TEXT_11="Νέες αφίξεις";
            $TEXT_12="Διαβάστε περισσότερα";
            $TEXT_13="Κριτικές";
            $TEXT_14="Βαθμολογία χρήστη:";
            $TEXT_15="Λήψεις:";
            $TEXT_16="pdf";
            $TEXT_17="doc";
            $TEXT_18="docx";
            $TEXT_19="mobi";
            $TEXT_20="djvu";
            $TEXT_21="epub";
            $TEXT_22="ibooks";
            $TEXT_23="Κατέβασμα τώρα!";
            $TEXT_24="Κριτικές χρηστών";
            $TEXT_25="Facebook";
            $TEXT_26="Συνδεθείτε μαζί μας στο Facebook!";
            $TEXT_27="Twitter";
            $TEXT_28="Ακολουθήστε μας στο Twitter!";
            $TEXT_29="ΣΥΖΗΤΗΣΗ";
            $TEXT_30="";
            $TEXT_30_A="";
            $TEXT_31="";
            $TEXT_32="Ms. Butterfly";
            $TEXT_32_A="20.36 / ";
            $TEXT_33="Συμφωνώ μαζί σου. Τα βιβλία είναι εξαιρετικά.";
            $TEXT_34="Paul";
            $TEXT_34_A="18.39 / ";
            $TEXT_35="Τέλεια, ευχαριστώ.";
            $TEXT_36="Μοιράσου τις σκέψεις σου...";
            $TEXT_37="Σχετικά με το EBOOKS";
            $TEXT_38="Αναζήτηση για χιλιάδες δημόσια διαθέσιμα ebooks.";
            $TEXT_39="Προεπισκόπηση, ανάγνωση και λήψη άμεσα.";
            $TEXT_40="κατηγορίες";
            $TEXT_41="ebooks";
            $TEXT_42="Συσκευές ανάγνωσης";
            $TEXT_43="Μια λίστα με τις συσκευές όχι κομπιούτερ ανάγνωσης που υποστηρίζονται από το Ebooks.";
            $TEXT_44="Άμεση λήψη";
            $TEXT_45="Κατεβάστε τα αγαπημένα σας βιβλία στον υπολογιστή σας ή σε οποιαδήποτε άλλη συσκευή.";
            $TEXT_46="Συχνές ερωτήσεις";
            $TEXT_47="Ελέγξτε τις Συχνές Ερωτήσεις μας για τις πιο συχνές ερωτήσεις και απαντήσεις.";
            $TEXT_48="Αντιμετώπιση προβλημάτων";
            $TEXT_49="Έχετε κάποιο πρόβλημα; Η ομάδα υποστήριξής μας είναι πάντα διαθέσιμη να σας βοηθήσει.";
            $TEXT_50="Εξειδικευμένα, νέες ειδοποιήσεις τίτλων και πολλά άλλα!";
            $TEXT_51="Εγγραφείτε στο ενημερωτικό μας δελτίο για να λάβετε αποκλειστικές προσφορές που δεν μπορείτε να βρείτε οπουδήποτε αλλού και τις τελευταίες ενημερώσεις από την ιστοσελίδα μας κατευθείαν στα εισερχόμενά μηνύματά σας!";
            $TEXT_52="Συμπληρώστε το e-mail σας εδώ";
            $TEXT_53="Αποθήκευση";

            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost '.$MON_F.' every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            // Footer
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a monthly subscription cloud storage service that provides its members access to its platform where they can upload, store, manage, download their files.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs ".$MON_F." per month, payable by credit or debit card.";
            $FOOT_WIN="What is this website?"; 
            $FOOT_WIN_TEXT="This website is an example of the download speeds and features you could get with your account at regulardrive.net. We do not store any third party files and when you register you will get access to your platform without any file or document. The names that can be shown on this website are generated only as examples. You are not allowed to upload to your account any file that is not your property or that you do not have their rights.";
            

            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";
            break;


        case 'en':

            if($PRICE == '1€' || $PRICE == '€1'){

                $MON_F = 'forty-nine with ninety-nine euros';

            }elseif($PRICE == '1USD' || $PRICE == '$1'){

                $MON_F = 'forty-nine with ninety-nine american dollars';

            }elseif($PRICE == '£1'){

                $MON_F = 'forty-nine pounds and ninety-nine pence';

            }

            $ALERT="You are not registered yet! To watch this content without limits, you have to activate your account!";
            // Content
            
            $m="Ebook, full version [free epub download]";
            $TEXT_1="Popular subjects";
            $TEXT_2="Business";
            $TEXT_3="History";
            $TEXT_4="Computers";
            $TEXT_5="Religion";
            $TEXT_6="Health";
            $TEXT_6_A="Fitness";
            $TEXT_7="Science";
            $TEXT_8="Body Mind Spirit";
            $TEXT_9="Browse our categories";
            $TEXT_9_A="Search by title, author, subject or ISBN";
            $TEXT_10="Featured titles";
            $TEXT_11="Just arrived";
            $TEXT_12="Read more";
            $TEXT_13="Reviews";
            $TEXT_14="User rating:";
            $TEXT_15="Downloads:";
            $TEXT_16="pdf";
            $TEXT_17="doc";
            $TEXT_18="docx";
            $TEXT_19="mobi";
            $TEXT_20="djvu";
            $TEXT_21="epub";
            $TEXT_22="ibooks";
            $TEXT_23="Download now!";
            $TEXT_24="User reviews";
            $TEXT_25="Facebook";
            $TEXT_26="Join us on Facebook!";
            $TEXT_27="Twitter";
            $TEXT_28="Follow us on Twitter!";
            $TEXT_29="discussion";
            $TEXT_30="John Jackson";
            $TEXT_30_A="12.52 / ";
            $TEXT_31="I’m looking for some new good fantasy books. Anyone here that can recommend me something?";
            $TEXT_32="Ms. Butterfly";
            $TEXT_32_A="10.55 / ";
            $TEXT_33="I agree with you. The books are great.";
            $TEXT_34="Paul";
            $TEXT_34_A="08.58 / ";
            $TEXT_35="Great, thanks.";
            $TEXT_36="Share your thoughts...";
            $TEXT_37="About EBOOKS";
            $TEXT_38="Search for thousands of publicly available ebooks.";
            $TEXT_39="Preview, read and download directly.";
            $TEXT_40="categories";
            $TEXT_41="ebooks";
            $TEXT_42="Reader devices";
            $TEXT_43="A list of the non-computer reading devices supported by Ebooks.";
            $TEXT_44="Download directly";
            $TEXT_45="Download your favourite books to your computer or to any other device.";
            $TEXT_46="FAQ";
            $TEXT_47="Check our Frequently Asked Questions for the most common questions and answers.";
            $TEXT_48="Troubleshooting";
            $TEXT_49="Have any problem? Our support team is always available to help.";
            $TEXT_50="Specials, new title alerts and more!";
            $TEXT_51="Sign up for our newsletter to get exclusive deals that you can’t find anywhere else and latest updates from our website straight to your inbox!";
            $TEXT_52="Type your e-mail address here";
            $TEXT_53="Save";
           

            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost '.$MON_F.' every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            // Footer
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a monthly subscription cloud storage service that provides its members access to its platform where they can upload, store, manage, download their files.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs ".$MON_F." per month, payable by credit or debit card.";
            $FOOT_WIN="What is this website?"; 
            $FOOT_WIN_TEXT="This website is an example of the download speeds and features you could get with your account at regulardrive.net. We do not store any third party files and when you register you will get access to your platform without any file or document. The names that can be shown on this website are generated only as examples. You are not allowed to upload to your account any file that is not your property or that you do not have their rights.";
            
            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";
            break;


        case 'es':

                $PRIVACY3=ASSET_PATH."/legal/es/privacy-es.html";
                $TOS3=ASSET_PATH."/legal/es/tos-es.html";
                $GDPR3=ASSET_PATH."/legal/es/gdpr-es.html";

                if($PRICE == '1€' || $PRICE == '€1'){

                    $MON_F = 'cuarenta y nueve con noventa y nueve euros';
    
                }elseif($PRICE == '1USD' || $PRICE == '$1'){
    
                    $MON_F = 'cuarenta y nueve con noventa y nueve dólares americanos';
    
                }elseif($PRICE == '£1'){
    
                    $MON_F = 'cuarenta y nueve libras con noventa y nueve peniques';
    
                }

                $ALERT="¡Todavía no estás registrado/a! Para ver este contenido sin límites tienes que activar tu cuenta!";
                // Content
                $m="Ebook, versión completa [descargar epub gratis]";
                $TEXT_1="TEMAS POPULARES";
                $TEXT_2="Negocio";
                $TEXT_3="Historial";
                $TEXT_4="Ordenadores";
                $TEXT_5="Religión";
                $TEXT_6="Salud";
                $TEXT_6_A="Fitness";
                $TEXT_7="Revista de ciencia";
                $TEXT_8="Cuerpo Mente y Espíritu";
                $TEXT_9="Explora nuestras categorías";
                $TEXT_9_A="Buscar por título, autor, tema o ISBN";
                $TEXT_10="Los títulos más destacados";
                $TEXT_11="Novedades";
                $TEXT_12="Leer más";
                $TEXT_13="Reseñas";
                $TEXT_14="Clasificación según los usuarios:";
                $TEXT_15="Descargas:";
                $TEXT_16="pdf";
                $TEXT_17="doc";
                $TEXT_18="docx";
                $TEXT_19="mobi";
                $TEXT_20="djvu";
                $TEXT_21="epub";
                $TEXT_22="ibooks";
                $TEXT_23="¡Descargar ahora!";
                $TEXT_24="Reseñas de usuarios";
                $TEXT_25="Facebook";
                $TEXT_26="¡Agréganos en Facebook!";
                $TEXT_27="Twitter";
                $TEXT_28="¡Síguenos en Twitter!";
                $TEXT_29="DISCUSIÓN";
                $TEXT_30="";
                $TEXT_30_A="";
                $TEXT_31="";
                $TEXT_32="Cristina";
                $TEXT_32_A="10.55 / ";
                $TEXT_33="Estoy de acuerdo contigo. Los libros son geniales.";
                $TEXT_34="Pablo";
                $TEXT_34_A="08.58 / ";
                $TEXT_35="Perfecto, gracias.";
                $TEXT_36="Comparte tus pensamientos...";
                $TEXT_37="Sobre EBOOKS";
                $TEXT_38="Busca tus títulos entre los miles de ebooks disponibles.";
                $TEXT_39="Podrás verlos, leer y descargar directamente";
                $TEXT_40="categorías";
                $TEXT_41="ebooks";
                $TEXT_42="Dispositivos de lectura";
                $TEXT_43="Listado de los dispositivos de lectura soportados por Ebooks.";
                $TEXT_44="Descargar directamente";
                $TEXT_45="Descarga tus libros favoritos en tu ordenador o cualquier otro dispositivo.";
                $TEXT_46="FAQ";
                $TEXT_47="Verifica la sección de FAQ para las preguntas y respuestas más frecuentes";
                $TEXT_48="Resolución de problemas";
                $TEXT_49="¿Tienes algún problema? Nuestro soporte está siempre disponible para ayudarte con todo.";
                $TEXT_50="¡Ofertas especiales, avisos de nuevos títulos y mucho más!";
                $TEXT_51="Apúntate a nuestro boletín para recibir las ofertas exclusivas que no encontrarás en ningún otro servicio. ¡Tendrás todas las actualizaciones de nuestra página directamente en tu buzón!";
                $TEXT_52="Introduce tu dirección de correo aquí";
                $TEXT_53="Guardar";

                $ASTERISCO='*Al usar la PRUEBA, se suscribirá al servicio de regulardrive.net durante 2 días al precio que indica la promoción. Después de 2 días, si no cancela su cuenta, se le cobrará el precio de la cuenta premium que tendrá un costo de '.$MON_F.' cada 30 días. Puede encontrar toda esta información y condiciones para la suscripción en Términos y condiciones.';
                // Footer
                $FOOT_WHAT="¿Qué es regulardrive.net?";
                $FOOT_WHAT_TEXT="Es un servicio de almacenamiento en la nube por suscripción mensual que proporciona a sus miembros acceso a su plataforma donde pueden cargar, almacenar, administrar, descargar sus ficheros.";
                $FOOT_COMMIT="¿A qué me comprometo?";
                $FOOT_COMMIT_TEXT='Al usar TRIAL, usted se suscribe al servicio premium de regulardrive.net. Después de dos días de prueba, si no cancela su cuenta, tendrá que pagar el valor de la suscripción premium cada mes. Las condiciones de suscripción están disponibles aquí: <a id="tos1" href="'. $TOS3 .'" target="_blank">Términos y Condiciones</a> . Fácil desuscripción. Si no cancela la suscripción durante su período de prueba, tendrá que pagar su suscripción cada mes y se renovará mensualmente automáticamente hasta que cancele su suscripción. La suscripción cuesta '.$MON_F.' por mes, pagaderos con tarjeta de crédito o débito.';
                $FOOT_WIN="¿Qué esta página web?";
                $FOOT_WIN_TEXT="Esta página web es un ejemplo de las velocidades de descarga y características que podrías obtener con tu cuenta en regulardrive.net. No almacenamos ningún fichero de terceros y al registrarte obtendrías acceso a tu plataforma sin ningún fichero o documento. Los nombres que se puedan mostrar en esta web son generados únicamente como ejemplos. No está permitido que subas a tu cuenta ningún fichero que no sea de tu propiedad o que no tengas sus derechos.";
               
                $FOOT_SUPPORT="Soporte";
                $FOOT_PRIVACY="Política de privacidad";
                $FOOT_TERMS="Términos y condiciones";
                $FOOT_PRE="Preguntas Más Frecuentes";
                $FOOT_CONTACT="Contacto";
                $FOOT_CANCEL="Cancelar la membresía";
                $FOOT_RIGHTS="© 2024 Todos los derechos reservados - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
                $FOOT_RIGHTS_2="&copy; 2024 Todos los derechos reservados";
        
                
            break;


        
        case 'fi':

            if($PRICE == '1€' || $PRICE == '€1'){

                $MON_F = 'neljäkymmentäyhdeksän yhdeksänkymmentäyhdeksän euroa';

            }elseif($PRICE == '1USD' || $PRICE == '$1'){

                $MON_F = 'neljäkymmentäyhdeksän yhdeksänkymmentäyhdeksän Yhdysvaltain dollaria';

            }elseif($PRICE == '£1'){

                $MON_F = 'neljäkymmentäyhdeksän puntaa ja yhdeksänkymmentäyhdeksän penniä';

            }

            $ALERT="Et ole vielä rekisteröitynyt! Sinun täytyy aktivoida tilisi katsoaksesi rajoituksetta tätä sisältöä!";
            // Content
            
            $m="E-kirja, täysversio [ilmainen epub-lataus]";
            $TEXT_1="SUOSITUT AIHEET";
            $TEXT_2="Liiketalous";
            $TEXT_3="Historia";
            $TEXT_4="Tietokoneet";
            $TEXT_5="Uskonto";
            $TEXT_6="Terveys";
            $TEXT_6_A="Kuntoilu";
            $TEXT_7="Tiede";
            $TEXT_8="Keho ja mieli";
            $TEXT_9="Selaa kategorioitamme";
            $TEXT_9_A="Etsi nimekkeellä, tekijällä, aiheella tai ISBN-tunnuksella";
            $TEXT_10="Suositeltuja teoksia";
            $TEXT_11="Juuri saapuneet";
            $TEXT_12="Lue lisää";
            $TEXT_13="Arvioita";
            $TEXT_14="Käyttäjien arvosana:";
            $TEXT_15="Lataukset:";
            $TEXT_16="pdf";
            $TEXT_17="doc";
            $TEXT_18="docx";
            $TEXT_19="mobi";
            $TEXT_20="djvu";
            $TEXT_21="epub";
            $TEXT_22="ibooks";
            $TEXT_23="Lataa nyt!";
            $TEXT_24="Käyttäjien arviot";
            $TEXT_25="Facebook";
            $TEXT_26="Liity meihin Facebookissa!";
            $TEXT_27="Twitter";
            $TEXT_28="Seuraa meitä Twitterissä!";
            $TEXT_29="KESKUSTELU";
            $TEXT_30="Ms. Butterfly";
            $TEXT_30_A="09.54 / ";
            $TEXT_31="Olen samaa mieltä. Kirjat ovat mahtavia.";
            $TEXT_32="Paul";
            $TEXT_32_A="07.57 / ";
            $TEXT_33="Hienoa, kiitos.";
            $TEXT_34="";
            $TEXT_34_A="";
            $TEXT_35="";
            $TEXT_36="Jaa ajatuksesi...";
            $TEXT_37="Tietoja EBOOKS";
            $TEXT_38="Etsi tuhansista julkisesti saatavilla olevista e-kirjoista.";
            $TEXT_39="Esikatsele, lue ja lataa suoraan.";
            $TEXT_40="kategoriat";
            $TEXT_41="e-kirjat";
            $TEXT_42="Lukulaitteet";
            $TEXT_43="Lista lukulaitteista (tietokoneiden lisäksi), joita Ebooks -palvelu tukee.";
            $TEXT_44="Lataa heti";
            $TEXT_45="Lataa suosikkikirjasi tietokoneelle tai jollekin toiselle laitteelle.";
            $TEXT_46="UKK";
            $TEXT_47="Tarkista Usein Kysytyt Kysymykset -osiomme yleisimpiä kysymyksiä ja vastauksia varten.";
            $TEXT_48="Vianetsintä";
            $TEXT_49="Onko ongelmia? Asiakastukemme on aina valmiina auttamaan.";
            $TEXT_50="Erikoisuudet, ilmoitukset uusista nimekkeistä ja paljon muuta!";
            $TEXT_51="Tilaa uutiskirjeemme ja saa erikoistarjouksia, joita et löydä mistään muualta, sekä uusimmat päivitykset verkkosivultamme suoraan sähköpostiisi!";
            $TEXT_52="Kirjoita sähköpostiosoitteesi tähän";
            $TEXT_53="Tallenna";

            $ASTERISCO='* Osallistumalla tähän KOKEILUUN tilaat regulardrive.net-palvelun 2 päiväksi tarjouksessa ilmoitettuun hintaan. Mikäli et peru tilaustasi 2 päivän kokeilun jälkeen, se jatkuu premium-tilin hinnalla, jolloin maksat siitä '.$MON_F.' 30 päivää kohden. Kaikki tilaukseen liittyvät tiedot ja ehdot ovat saatavilla Käyttöehdot-osiossa.';

            // Footer
            $FOOT_WHAT='Mikä regulardrive.net on?';
            $FOOT_WHAT_TEXT='Se on kuukausittaisilla tilauksilla varustettu verkkosivutiedostojen / aloitussivujen luomispalvelu, joka tarjoaa jäsenilleen pääsyn alustalle, jolla he voivat suunnitella ja luoda verkkosivujensa tiedostoja. Luo helposti verkkosivuja / aloitussivuja tai portfolioita. * Työkalua käytetään tiedostojen luomiseen. Jos sinulla on online-verkkosivu, sinun on ladattava tiedostot omaan palvelimellesi / isäntään.';
            $FOOT_COMMIT="Sitoudunko minä mihinkään?";
            $FOOT_COMMIT_TEXT='Osallistumalla KOKEILUUN tilaat regulardrive.net-sivuston premium-palvelun. Jos et peru tilaustasi kahden&nbsp;päivän kokeilun jälkeen, maksat premium-palvelun kuukausittaisen hinnan. Tilauspalvelun ehdot ovat saatavilla tässä:&nbsp;<a id="tos1" href="'. $TOS3 .'" style="color: lightgray;" target="_blank">Käyttöehdot</a>. Peru tilauksesi helposti ja vaivatta. Jos et peru tilaustasi kokeilujakson aikana, maksat siitä kuukausittaisen hinnan. Palvelun tilaus uusiutuu automaattisesti joka kuukausi, kunnes irtisanot sen. Tilaus maksaa kuukaudessa '.$MON_F.', ja se voidaan maksaa luotto- tai pankkikortilla.';
            $FOOT_WIN="Kuinka voin voittaa?";
            $FOOT_WIN_TEXT='Tämä verkkosivu on esimerkki siitä, millaisia latausnopeuksia ja ominaisuuksia voisit saada luomalla tilin osoitteessa regulardrive.net. Me emme tallenna kolmansien osapuolien tiedostoja, ja kun rekisteröidyt, pääset käyttöalustalle ilman mitään tiedostoja tai dokumentteja. Tämän verkkosivun nimet on luotu vain esimerkeiksi. Et saa ladata tilillesi mitään tiedostoja, jotka eivät ole sinun omaisuuttasi tai joihin sinulla ei ole oikeuksia.';
           
            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";
            break;


        case 'fr':

            if($PRICE == '1€' || $PRICE == '€1'){

                $MON_F = 'quarante-neuf avec quatre-vingt-dix-neuf euros';

            }elseif($PRICE == '1USD' || $PRICE == '$1'){

                $MON_F = 'quarante-neuf avec quatre-vingt-dix-neuf dollars américains';

            }elseif($PRICE == '£1'){

                $MON_F = 'quarante-neuf livres et quatre-vingt-dix-neuf pence';

            }

           $ALERT="Vous n'êtes pas encore inscrit(e) ! Pour regarder ce contenu sans limitation, vous devez activer votre compte !";
           // Content
          
            $m="Ebook, version complète [téléchargement d'epub gratuit]";
            $TEXT_1="SUJETS POPULAIRES";
            $TEXT_2="Affaires";
            $TEXT_3="Historique";
            $TEXT_4="Ordinateurs";
            $TEXT_5="Religion";
            $TEXT_6="Santé";
            $TEXT_6_A="fitness";
            $TEXT_7="Science";
            $TEXT_8="Corps et esprit";
            $TEXT_9="Parcourez nos catégories";
            $TEXT_9_A="Chercher par titre, auteur, sujet ou ISBN";
            $TEXT_10="Titres proposés";
            $TEXT_11="Sorti récemment";
            $TEXT_12="Lire la suite";
            $TEXT_13="Commentaires";
            $TEXT_14="Note des utilisateurs:";
            $TEXT_15="Téléchargements:";
            $TEXT_16="pdf";
            $TEXT_17="doc";
            $TEXT_18="docx";
            $TEXT_19="mobi";
            $TEXT_20="djvu";
            $TEXT_21="epub";
            $TEXT_22="ibooks";
            $TEXT_23="Téléchargez maintenant !";
            $TEXT_24="Avis des utilisateurs";
            $TEXT_25="Facebook";
            $TEXT_26="Rejoignez-nous sur Facebook";
            $TEXT_27="Twitter";
            $TEXT_28="Suivez-nous sur Twitter";
            $TEXT_29="DISCUSSION";
            $TEXT_30="Papillon de Nuit";
            $TEXT_30_A="10.35 / ";
            $TEXT_31="Je suis d'accord. Les livres sont géniaux.";
            $TEXT_32="Alexis";
            $TEXT_32_A="08.38 / ";
            $TEXT_33="Parfait, merci.";
            $TEXT_34="";
            $TEXT_34_A="";
            $TEXT_35="";
            $TEXT_36="Partagez votre avis";
            $TEXT_37="Sur EBOOKS";
            $TEXT_38="Recherchez des milliers d'ebooks publiquement disponibles.";
            $TEXT_39="Prévisualiser, lire et télécharger directement.";
            $TEXT_40="catégories";
            $TEXT_41="ebooks";
            $TEXT_42="Périphériques de lecture";
            $TEXT_43="Une liste des périphériques de lecture portables disponibles pour Ebooks.";
            $TEXT_44="Téléchargez directement";
            $TEXT_45="Téléchargez vos livres préférés sur votre ordinateur ou sur tout autre appareil.";
            $TEXT_46="FAQ";
            $TEXT_47="Consultez notre FAQ afin d'accéder à la liste des questions et réponses les plus fréquents.";
            $TEXT_48="Dépannage";
            $TEXT_49="Vous avez un problème? Notre service d'assistance est toujours prêt à vous aider.";
            $TEXT_50="Des promotions, de nouvelles alertes de titre et plus encore !";
            $TEXT_51="Inscrivez-vous à notre newsletter pour obtenir des offres exclusives que vous ne pouvez trouver ailleurs et les dernières mises à jour de notre site directement dans votre boîte de réception !";
            $TEXT_52="Entrez votre email ici:";
            $TEXT_53="Enregistrer";

           $ASTERISCO='*En utilisant le TRIAL, vous serez abonné au service premium de regulardrive.net d’une valeur de '.$MON_F.' par mois. Passés les deux jours d’essai, si vous n’annulez pas votre compte, vous devrez payer la valeur de l’abonnement premium. Vous pouvez à tout moment annuler votre période d’essai. Plus d’informations au sujet de l’abonnement dans la section Conditions générales.';
            
            // Footer
            $FOOT_WHAT="Qu'est-ce que regulardrive.net?";
            $FOOT_WHAT_TEXT="Il s'agit d'un service de stockage en cloud à abonnement mensuel qui permet à ses membres d'accéder à sa plate-forme où ils peuvent télécharger, stocker, gérer et télécharger leurs fichiers.";
            $FOOT_COMMIT="A quoi je m’engage?";
            $FOOT_COMMIT_TEXT="En utilisant TRIAL, vous vous abonnez au service premium sur regulardrive.net. Passés les deux jours d’essai, si vous n’annulez pas votre compte, vous devrez payer la valeur de l’abonnement premium tous les mois. Les conditions d’abonnement sont disponibles ici : <a id='tos1' href='". $TOS3 ."' style='color: lightgray;' target='_blank'>Conditions de service</a>. Désinscription facile. Si vous n’annulez pas l’abonnement pendant votre période d’essai, vous devrez payer votre abonnement tous les mois et il sera automatiquement renouvelé mensuellement jusqu'à ce que vous résiliez votre abonnement. L’abonnement coûte ".$MON_F." par mois, payables par carte de crédit ou de débit.";
            $FOOT_WIN="Qu'est-ce que ce site web?";
            $FOOT_WIN_TEXT="Ce site web est un exemple des vitesses de téléchargement et des fonctionnalités dont vous pourriez profiter avec votre compte sur regulardrive.net. Nous ne stockons aucun fichier d'entités tierces et lorsque vous vous inscrirez, vous aurez accès à votre plateforme sans aucun fichier ni document. Les noms mentionnés sur ce site web ne sont donnés qu'à titre d'exemple. Vous n'êtes pas autorisé à envoyer sur votre compte un fichier dont vous n'êtes pas propriétaire ou pour lequel vous n'avez pas les droits.";

            $FOOT_SOCIAL="Questions Fréquentes";
            $FOOT_SUPPORT="Soutien";
            $FOOT_PRIVACY="Politique de confidentialité";
            $FOOT_TERMS="termes et conditions";
            $FOOT_PRE="Foire aux questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Annuler l'adhésion";
            $FOOT_RIGHTS="© 2024 Tous droits réservés - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 Tous les droits réservés";
        break;
        case 'hi':

            if($PRICE == '1€' || $PRICE == '€1'){

                $MON_F = 'forty-nine with ninety-nine euros';

            }elseif($PRICE == '1USD' || $PRICE == '$1'){

                $MON_F = 'forty-nine with ninety-nine american dollars';

            }elseif($PRICE == '£1'){

                $MON_F = 'forty-nine pounds and ninety-nine pence';

            }

            $ALERT="आप अभी तक रजिस्टर नहीं हुए हैं! बिना किसी सीमा के इस सामग्री को देखने के लिए, आपको अपने खाते को सक्रिय करना होगा!";
            // Content
         
            $m="ईपुस्तक, पूर्ण संस्करण";
            $TEXT_1="Popular subjects";
            $TEXT_2="Business";
            $TEXT_3="History";
            $TEXT_4="Computers";
            $TEXT_5="Religion";
            $TEXT_6="Health";
            $TEXT_6_A="Fitness";
            $TEXT_7="Science";
            $TEXT_8="Body Mind Spirit";
            $TEXT_9="Browse our categories";
            $TEXT_9_A="Search by title, author, subject or ISBN";
            $TEXT_10="Featured titles";
            $TEXT_11="Just arrived";
            $TEXT_12="Read more";
            $TEXT_13="Reviews";
            $TEXT_14="User rating:";
            $TEXT_15="Downloads:";
            $TEXT_16="pdf";
            $TEXT_17="doc";
            $TEXT_18="docx";
            $TEXT_19="mobi";
            $TEXT_20="djvu";
            $TEXT_21="epub";
            $TEXT_22="ibooks";
            $TEXT_23="Download now!";
            $TEXT_24="User reviews";
            $TEXT_25="Facebook";
            $TEXT_26="Join us on Facebook!";
            $TEXT_27="Twitter";
            $TEXT_28="Follow us on Twitter!";
            $TEXT_29="discussion";
            $TEXT_30="John Jackson";
            $TEXT_30_A="12.52 / ";
            $TEXT_31="I’m looking for some new good fantasy books. Anyone here that can recommend me something?";
            $TEXT_32="Ms. Butterfly";
            $TEXT_32_A="10.55 / ";
            $TEXT_33="I agree with you. The books are great.";
            $TEXT_34="Paul";
            $TEXT_34_A="08.58 / ";
            $TEXT_35="Great, thanks.";
            $TEXT_36="Share your thoughts...";
            $TEXT_37="About CrazyEbooks EBOOKS";
            $TEXT_38="Search for thousands of publicly available ebooks.";
            $TEXT_39="Preview, read and download directly.";
            $TEXT_40="categories";
            $TEXT_41="ebooks";
            $TEXT_42="Reader devices";
            $TEXT_43="A list of the non-computer reading devices supported by CrazyEbooks.";
            $TEXT_44="Download directly";
            $TEXT_45="Download your favourite books to your computer or to any other device.";
            $TEXT_46="FAQ";
            $TEXT_47="Check our Frequently Asked Questions for the most common questions and answers.";
            $TEXT_48="Troubleshooting";
            $TEXT_49="Have any problem? Our support team is always available to help.";
            $TEXT_50="Specials, new title alerts and more!";
            $TEXT_51="Sign up for our newsletter to get exclusive deals that you can’t find anywhere else and latest updates from our website straight to your inbox!";
            $TEXT_52="Type your e-mail address here";
            $TEXT_53="Save";

            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost '.$MON_F.' every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            // Footer
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a monthly subscription cloud storage service that provides its members access to its platform where they can upload, store, manage, download their files.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs ".$MON_F." per month, payable by credit or debit card.";
            $FOOT_WIN="What is this website?"; 
            $FOOT_WIN_TEXT="This website is an example of the download speeds and features you could get with your account at regulardrive.net. We do not store any third party files and when you register you will get access to your platform without any file or document. The names that can be shown on this website are generated only as examples. You are not allowed to upload to your account any file that is not your property or that you do not have their rights.";
            
            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";
        break;
        case 'hr':

            if($PRICE == '1€' || $PRICE == '€1'){

                $MON_F = 'forty-nine with ninety-nine euros';

            }elseif($PRICE == '1USD' || $PRICE == '$1'){

                $MON_F = 'forty-nine with ninety-nine american dollars';

            }elseif($PRICE == '£1'){

                $MON_F = 'forty-nine pounds and ninety-nine pence';

            }

            $ALERT="Još uvijek niste registrirani! Da biste gledali sadržaj bez ograničenja, morate aktivirati svoj račun!";
            // Content
            
            $m="E-knjiga, cijela verzija [besplatan epub download]";
            $TEXT_1="POPULARNE TEME";
            $TEXT_2="Posao";
            $TEXT_3="Povijest";
            $TEXT_4="Kompjuteri";
            $TEXT_5="Religija";
            $TEXT_6="Zdravlje";
            $TEXT_6_A="Fitness";
            $TEXT_7="Znanost";
            $TEXT_8="Tijelo Um Duh";
            $TEXT_9="Pretražite naše kategorije";
            $TEXT_9_A="Tražite po naslovu, autoru, temi ili ISBN-u";
            $TEXT_10="Istaknuti naslovi";
            $TEXT_11="Novi naslovi";
            $TEXT_12="Pročitajte više";
            $TEXT_13="Recenzija";
            $TEXT_14="Ocjena korisnika:";
            $TEXT_15="Preuzimanja:";
            $TEXT_16="pdf";
            $TEXT_17="doc";
            $TEXT_18="docx";
            $TEXT_19="mobi";
            $TEXT_20="djvu";
            $TEXT_21="epub";
            $TEXT_22="ibooks";
            $TEXT_23="Preuzmite odmah!";
            $TEXT_24="Recenzije korisnika";
            $TEXT_25="Facebook";
            $TEXT_26="Pridružite nam se na Facebooku!";
            $TEXT_27="Twitter";
            $TEXT_28="Pratite nas na Twitteru!";
            $TEXT_29="DISKUSIJA";
            $TEXT_30="Gđica. Butterfly";
            $TEXT_30_A="10.44 / ";
            $TEXT_31="Slažem se s tobom. Knjige su odlične.";
            $TEXT_32="Paul";
            $TEXT_32_A="08.47 / ";
            $TEXT_33="Super, hvala.";
            $TEXT_34="";
            $TEXT_34_A="";
            $TEXT_35="";
            $TEXT_36="Podijelite svoje mišljenje...";
            $TEXT_37="O E-KNJIGAMA";
            $TEXT_38="Pretraži među hiljadama javno dostupnih elektronskih knjiga.";
            $TEXT_39="Pogledaj, pročitaj i odmah preuzmi.";
            $TEXT_40="kategorija";
            $TEXT_41="eknjiga";
            $TEXT_42="Čitateljski uređaji";
            $TEXT_43="Lista neračunalnih čitačih uređaja podržanih od Ebooks.";
            $TEXT_44="Izravno preuzmite";
            $TEXT_45="Preuzmi omiljene knjige na svoj računar sa bilo kog drugog uređaja.";
            $TEXT_46="Najčešće postavljena pitanja i odgovori";
            $TEXT_47="Provjerite naša Najčešće postavljena pitanja i odgovore za najčešća pitanja i odgovore.";
            $TEXT_48="Rješavanje problema";
            $TEXT_49="Imate problem? Naša podrška korisnicima je uvijek tu da pomogne.";
            $TEXT_50="Posebne ponude, informacije o novim naslovima i još mnogo toga!";
            $TEXT_51="Pretplati se na naš bilten i primaj ekskluzivne ponude koje nećeš dobiti na drugom mjestu i najnovije informacije sa naše web stranice pravo u inbox.";
            $TEXT_52="Unesi svoju e-mail adresu ovdje";
            $TEXT_53="Spremiti";

            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost '.$MON_F.' every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            // Footer
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a monthly subscription cloud storage service that provides its members access to its platform where they can upload, store, manage, download their files.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs ".$MON_F." per month, payable by credit or debit card.";
            $FOOT_WIN="What is this website?"; 
            $FOOT_WIN_TEXT="This website is an example of the download speeds and features you could get with your account at regulardrive.net. We do not store any third party files and when you register you will get access to your platform without any file or document. The names that can be shown on this website are generated only as examples. You are not allowed to upload to your account any file that is not your property or that you do not have their rights.";
            
            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";
        break;
        case 'hu':

            if($PRICE == '1€' || $PRICE == '€1'){

                $MON_F = 'forty-nine with ninety-nine euros';

            }elseif($PRICE == '1USD' || $PRICE == '$1'){

                $MON_F = 'forty-nine with ninety-nine american dollars';

            }elseif($PRICE == '£1'){

                $MON_F = 'forty-nine pounds and ninety-nine pence';

            }

            $ALERT="Még nem regisztráltál! E tartalom korlátozások nélküli megtekintéséhez aktiválnod kell a fiókodat!";
            // Content
          
            $m="E-könyv, teljes verzió [ingyenes epub letöltés]";
            $TEXT_1="NÉPSZERŰ KATEGÓRIÁK";
            $TEXT_2="Üzlet";
            $TEXT_3="Történelem";
            $TEXT_4="Számítástechnika";
            $TEXT_5="Vallás";
            $TEXT_6="Egészség";
            $TEXT_6_A="Fitness";
            $TEXT_7="Tudomány";
            $TEXT_8="Test & Lélek";
            $TEXT_9="Böngésszen a kategóriák között";
            $TEXT_9_A="Keresés cím, szerző, kategória, ISBN-kód alapján";
            $TEXT_10="Kiemelt könyvek";
            $TEXT_11="Újdonságok";
            $TEXT_12="Bővebben";
            $TEXT_13="Értékelés";
            $TEXT_14="Felhasználói értékelés:";
            $TEXT_15="Letöltések:";
            $TEXT_16="pdf";
            $TEXT_17="doc";
            $TEXT_18="docx";
            $TEXT_19="mobi";
            $TEXT_20="djvu";
            $TEXT_21="epub";
            $TEXT_22="ibooks";
            $TEXT_23="Letöltés most!";
            $TEXT_24="felhasználói értékelés";
            $TEXT_25="Facebook";
            $TEXT_26="Csatlakozzon hozzánk a Facebook-on!";
            $TEXT_27="Twitter";
            $TEXT_28="Kövessen minket a Twitter-en!";
            $TEXT_29="BESZÉLGETÉS";
            $TEXT_30="John Jackson";
            $TEXT_30_A="12.52 / ";
            $TEXT_31="I’m looking for some new good fantasy books. Anyone here that can recommend me something?";
            $TEXT_32="Ms. Butterfly";
            $TEXT_32_A="11.03 / ";
            $TEXT_33="Egyetértek veled. Tényleg jók a könyvek.";
            $TEXT_34="Paul";
            $TEXT_34_A="09.06 / ";
            $TEXT_35="Nagyszerű, köszi.";
            $TEXT_36="Ossza meg gondolatait...";
            $TEXT_37="A E-KÖNYVEKRŐL";
            $TEXT_38="Keressen több ezer, nyilvánosan elérhető e-könyv között.";
            $TEXT_39=" Értékelje, olvasson bele és töltse le azonnal.";
            $TEXT_40="kategória";
            $TEXT_41="e-könyv";
            $TEXT_42="Olvasóeszközök";
            $TEXT_43="A Ebooks a következő e-könyv olvasókat támogatja.";
            $TEXT_44="Közvetlen letöltés";
            $TEXT_45="Töltse le kedvenc könyveit számítógépre vagy más olvasóeszközre.";
            $TEXT_46="GYIK";
            $TEXT_47="A Gyakran Ismételt Kérdések közt megtalálhatja a leggyakrabban felmerülő kérdéseket és válaszokat.";
            $TEXT_48="Hibaelhárítás";
            $TEXT_49="Segítségre van szüksége? Lépjen kapcsolatba Ügyfélszolgálatunkkal.";
            $TEXT_50="Akciók, újdonságok és még sok más!";
            $TEXT_51="Iratkozzon fel hírlevelünkre, hogy mindig azonnal értesüljön különleges ajánlatainkról és a legfrissebb hírekről.";
            $TEXT_52="Ide írja be az e-mail címét";
            $TEXT_53="Mentés";

            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost '.$MON_F.' every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            // Footer
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a monthly subscription cloud storage service that provides its members access to its platform where they can upload, store, manage, download their files.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs ".$MON_F." per month, payable by credit or debit card.";
            $FOOT_WIN="What is this website?"; 
            $FOOT_WIN_TEXT="This website is an example of the download speeds and features you could get with your account at regulardrive.net. We do not store any third party files and when you register you will get access to your platform without any file or document. The names that can be shown on this website are generated only as examples. You are not allowed to upload to your account any file that is not your property or that you do not have their rights.";
            
            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";
        break;
        case 'id':

            if($PRICE == '1€' || $PRICE == '€1'){

                $MON_F = 'forty-nine with ninety-nine euros';

            }elseif($PRICE == '1USD' || $PRICE == '$1'){

                $MON_F = 'forty-nine with ninety-nine american dollars';

            }elseif($PRICE == '£1'){

                $MON_F = 'forty-nine pounds and ninety-nine pence';

            }

            $ALERT="Anda belum terdaftar! Untuk menonton konten ini tanpa batas,  harap aktifkan akun Anda!";
            // Content
          
            $m="E-book, versi lengkap";
            $TEXT_1="Popular subjects";
            $TEXT_2="Business";
            $TEXT_3="History";
            $TEXT_4="Computers";
            $TEXT_5="Religion";
            $TEXT_6="Health";
            $TEXT_6_A="Fitness";
            $TEXT_7="Science";
            $TEXT_8="Body Mind Spirit";
            $TEXT_9="Browse our categories";
            $TEXT_9_A="Search by title, author, subject or ISBN";
            $TEXT_10="Featured titles";
            $TEXT_11="Just arrived";
            $TEXT_12="Read more";
            $TEXT_13="Reviews";
            $TEXT_14="User rating:";
            $TEXT_15="Downloads:";
            $TEXT_16="pdf";
            $TEXT_17="doc";
            $TEXT_18="docx";
            $TEXT_19="mobi";
            $TEXT_20="djvu";
            $TEXT_21="epub";
            $TEXT_22="ibooks";
            $TEXT_23="Download now!";
            $TEXT_24="User reviews";
            $TEXT_25="Facebook";
            $TEXT_26="Join us on Facebook!";
            $TEXT_27="Twitter";
            $TEXT_28="Follow us on Twitter!";
            $TEXT_29="discussion";
            $TEXT_30="John Jackson";
            $TEXT_30_A="12.52 / ";
            $TEXT_31="I’m looking for some new good fantasy books. Anyone here that can recommend me something?";
            $TEXT_32="Ms. Butterfly";
            $TEXT_32_A="10.55 / ";
            $TEXT_33="I agree with you. The books are great.";
            $TEXT_34="Paul";
            $TEXT_34_A="08.58 / ";
            $TEXT_35="Great, thanks.";
            $TEXT_36="Share your thoughts...";
            $TEXT_37="About CrazyEbooks EBOOKS";
            $TEXT_38="Search for thousands of publicly available ebooks.";
            $TEXT_39="Preview, read and download directly.";
            $TEXT_40="categories";
            $TEXT_41="ebooks";
            $TEXT_42="Reader devices";
            $TEXT_43="A list of the non-computer reading devices supported by CrazyEbooks.";
            $TEXT_44="Download directly";
            $TEXT_45="Download your favourite books to your computer or to any other device.";
            $TEXT_46="FAQ";
            $TEXT_47="Check our Frequently Asked Questions for the most common questions and answers.";
            $TEXT_48="Troubleshooting";
            $TEXT_49="Have any problem? Our support team is always available to help.";
            $TEXT_50="Specials, new title alerts and more!";
            $TEXT_51="Sign up for our newsletter to get exclusive deals that you can’t find anywhere else and latest updates from our website straight to your inbox!";
            $TEXT_52="Type your e-mail address here";
            $TEXT_53="Save";

            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost '.$MON_F.' every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            // Footer
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a monthly subscription cloud storage service that provides its members access to its platform where they can upload, store, manage, download their files.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs ".$MON_F." per month, payable by credit or debit card.";
            $FOOT_WIN="What is this website?"; 
            $FOOT_WIN_TEXT="This website is an example of the download speeds and features you could get with your account at regulardrive.net. We do not store any third party files and when you register you will get access to your platform without any file or document. The names that can be shown on this website are generated only as examples. You are not allowed to upload to your account any file that is not your property or that you do not have their rights.";
            
            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";
        break;
        case 'it':

            if($PRICE == '1€' || $PRICE == '€1'){

                $MON_F = 'quarantanove euro e novantanove centesimi';

            }elseif($PRICE == '1USD' || $PRICE == '$1'){

                $MON_F = 'quarantanove dollari americani e novantanove centesimi';

            }elseif($PRICE == '£1'){

                $MON_F = 'quarantanove sterline e novantanove pence';

            }

            // Content
            $ALERT="Non sei ancora registrato! Per guardare questo contenuto senza limiti, devi attivare il tuo account!";
       
            $m="EBook, versione completa [free epub download]";
            $TEXT_1="GENERI POPOLARI";
            $TEXT_2="Business";
            $TEXT_3="Cronologia";
            $TEXT_4="Computers";
            $TEXT_5="Religione";
            $TEXT_6="Salute";
            $TEXT_6_A="Fitness";
            $TEXT_7="Scienza";
            $TEXT_8="Corpo Mente Spirito";
            $TEXT_9="Sfoglia le categorie";
            $TEXT_9_A="Cerca per titolo, autore, soggetto o ISBN";
            $TEXT_10="Titoli in primo piano";
            $TEXT_11="Appena arrivato";
            $TEXT_12="Per saperne di più";
            $TEXT_13="Recensioni";
            $TEXT_14="Valutazione degli utenti:";
            $TEXT_15="Downloads:";
            $TEXT_16="pdf";
            $TEXT_17="doc";
            $TEXT_18="docx";
            $TEXT_19="mobi";
            $TEXT_20="djvu";
            $TEXT_21="epub";
            $TEXT_22="ibooks";
            $TEXT_23="Download now!";
            $TEXT_24="User reviews";
            $TEXT_25="Facebook";
            $TEXT_26="Seguici su Facebook";
            $TEXT_27="Twitter";
            $TEXT_28="Seguici su twitter!";
            $TEXT_29="DISCUSSIONE";
            $TEXT_30="";
            $TEXT_30_A="";
            $TEXT_31="";
            $TEXT_32="Ms. Butterfly";
            $TEXT_32_A="11.03 / ";
            $TEXT_33="Sono d'accordo con te. I libri sono fantastici.";
            $TEXT_34="Paolo";
            $TEXT_34_A="09.06 / ";
            $TEXT_35="Perfetto, grazie.";
            $TEXT_36="Condividi i tuoi pensieri...";
            $TEXT_37="Informazioni su EBOOK";
            $TEXT_38="Cerca migliaia di ebook pubblicamente disponibili.";
            $TEXT_39="Guarda l'anteprima, leggi e scarica direttamente.";
            $TEXT_40="categorie";
            $TEXT_41="ebook";
            $TEXT_42="Dispositivi";
            $TEXT_43="Una lista di dispositivi diversi dai computer supportati da CrazyEbooks.";
            $TEXT_44="Scarica direttamente";
            $TEXT_45="Scarica i tuoi libri preferiti sul tuo computer o su altri dispositivi.";
            $TEXT_46="FAQ";
            $TEXT_47="Controlla su FAQ per avere risposte alle domande più comuni.";
            $TEXT_48="Risoluzione dei problemi";
            $TEXT_49="Hai problemi? La nostra assistenza clienti è sempre disponibile ad aiutarti.";
            $TEXT_50="Speciali, nuovi titoli e altro!";
            $TEXT_51="Registrati alla nostra newsletter per ricevere offerte esclusive che non troverai altrove e gli ultimi aggiornamenti dal nostro sito direttamente nella tua casella di posta in arrivo!";
            $TEXT_52="Inserisci la tua e-mail qui";
            $TEXT_53="Salva";

            $ASTERISCO='*Usufruendo della PROVA risulti iscritto al servizio regulardrive.net per 2 giorni al prezzo indicato nella promozione. Dopo 2 giorni, se non cancelli il tuo account, ti verrà addebitato il prezzo dell\'account premium con un costo di '.$MON_F.' ogni 30 giorni. Tutte queste informazioni e condizioni di iscrizione sono riportate nei termini e condizioni.';
            
            // Footer
            $FOOT_WHAT="Cos'è regulardrive.net?";
            $FOOT_WHAT_TEXT="È un servizio di cloud storage che fornisce ai rispettivi membri previo versamento di un abbonamento mensile l'accesso alla propria piattaforma dove poter caricare, memorizzare, gestire e scaricare file.";
            $FOOT_COMMIT="Che cosa mi impegno a fare?";
            $FOOT_COMMIT_TEXT="Nel momento in cui usufruisci della prova TRIAL ti iscrivi al servizio premium di regulardrive.net. Dopo due giorni di prova, se non cancelli il tuo account, dovrai pagare il valore dell'abbonamento premium ogni mese. Le condizioni di iscrizione sono disponibili qui: <a id='tos1' href='". $TOS3 ."' style='color: lightgray;' target='_blank'>Termini del servizio</a>. Facile disdetta dell'abbonamento. Se non cancelli il tuo abbonamento durante il periodo di prova, dovrai pagare l'abbonamento ogni mese che si rinnoverà automaticamente mensilmente fino alla cancellazione del medesimo. L'abbonamento costa ".$MON_F." al mese da versare a mezzo carta di credito o di debito.";
            $FOOT_WIN="Che cos'è questo sito web?";
            $FOOT_WIN_TEXT="Questo sito web è un esempio delle velocità di download e delle funzionalità che potresti ottenere con il tuo account su regulardrive.net. Non archiviamo file di terze parti e, quando ti registri, avrai accesso alla tua piattaforma senza alcun file o documento. I nomi che possono essere visualizzati su questo sito web sono generati solo come esempi. Non sei autorizzato a caricare sul tuo account file che non siano di tua proprietà o di cui tu non detenga i diritti.";

            $FOOT_SOCIAL="Domande Frequenti";
            $FOOT_SUPPORT="Supporto e supporto";
            $FOOT_PRIVACY="Informativa sulla privacy";
            $FOOT_TERMS="Termini e condizioni";
            $FOOT_PRE="Domande frequenti";
            $FOOT_CONTACT="Contattaci";
            $FOOT_CANCEL="Annullare menbresia";
            $FOOT_RIGHTS="© 2024 Tutti i diritti riservati - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 Tutti i diritti riservati";
        break;
        case 'ja':

            if($PRICE == '1€' || $PRICE == '€1'){

                $MON_F = 'forty-nine with ninety-nine euros';

            }elseif($PRICE == '1USD' || $PRICE == '$1'){

                $MON_F = 'forty-nine with ninety-nine american dollars';

            }elseif($PRICE == '£1'){

                $MON_F = 'forty-nine pounds and ninety-nine pence';

            }

            $ALERT="まだ未登録です！無制限でこのコンテンツを見るには、アカウントをアクティベートする必要があります！";
            // Content
         
            $m="電子書籍、全編 [無料EPUBダウンロード]";
            $TEXT_1="人気のカテゴリ";
            $TEXT_2="ビジネス";
            $TEXT_3="履歴";
            $TEXT_4="コンピューター";
            $TEXT_5="宗教";
            $TEXT_6="健康";
            $TEXT_6_A="フィットネス";
            $TEXT_7="科学";
            $TEXT_8="身体、心、精神";
            $TEXT_9="カテゴリを参照する";
            $TEXT_9_A="タイトル、著者、テーマ、ISBNで検索";
            $TEXT_10="特集タイトル";
            $TEXT_11="最新の電子書籍";
            $TEXT_12="続きを読む";
            $TEXT_13="件のレビュー";
            $TEXT_14="ユーザーの評価:";
            $TEXT_15="ダウンロード:";
            $TEXT_16="pdf";
            $TEXT_17="doc";
            $TEXT_18="docx";
            $TEXT_19="mobi";
            $TEXT_20="djvu";
            $TEXT_21="epub";
            $TEXT_22="ibooks";
            $TEXT_23="今すぐダウンロウど！";
            $TEXT_24="件のユーザーレビュー";
            $TEXT_25="Facebook";
            $TEXT_26="Facebookで参加しよう！";
            $TEXT_27="Twitter";
            $TEXT_28="ツイッターでフォロー！";
            $TEXT_29="ディスカッション";
            $TEXT_30="蝶々夫人";
            $TEXT_30_A="11.30 / ";
            $TEXT_31="同意するんです。これらの本は最高。";
            $TEXT_32="ポール";
            $TEXT_32_A="09.33 / ";
            $TEXT_33="わかった、ありがとう。";
            $TEXT_34="";
            $TEXT_34_A="";
            $TEXT_35="";
            $TEXT_36="あなたの考えをシェア";
            $TEXT_37="EBOOKS について";
            $TEXT_38="公に読書可能な何千冊も電子書籍を検索する。";
            $TEXT_39="直接にプレビュー、ダウンロード、読書できる。";
            $TEXT_40="つのカテゴリ";
            $TEXT_41="冊の電子書籍";
            $TEXT_42="電子書籍リーダー端末";
            $TEXT_43="Ebooks に対応しているパソコン以外の電子書籍リーダー端末のリスト。";
            $TEXT_44="直接ダウンロード";
            $TEXT_45="お気に入る本をお使いのパソコンまたは他の端末にダウンロードできます。";
            $TEXT_46="よくある質問";
            $TEXT_47="最も聞かれる質問とその答えを「よくある質問」でチェック";
            $TEXT_48="トラブルシューティング";
            $TEXT_49="何か問題がありますか？いつも対応する当社のサポートにお問い合わせください。";
            $TEXT_50="スパシャル、新タイトルアラートなど！";
            $TEXT_51="当サービスのニュースレターにサインアップして、他のどこにも見つけない排他的な取引や当Webサイトの最新ニュースを直接あなたの受信トレイにお届けします！";
            $TEXT_52="ご自分のEメールアドレスをここに入力してください。";
            $TEXT_53="保存";

            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost '.$MON_F.' every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            // Footer
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a monthly subscription cloud storage service that provides its members access to its platform where they can upload, store, manage, download their files.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs ".$MON_F." per month, payable by credit or debit card.";
            $FOOT_WIN="What is this website?"; 
            $FOOT_WIN_TEXT="This website is an example of the download speeds and features you could get with your account at regulardrive.net. We do not store any third party files and when you register you will get access to your platform without any file or document. The names that can be shown on this website are generated only as examples. You are not allowed to upload to your account any file that is not your property or that you do not have their rights.";
            
            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";
        break;
        case 'nb':

            if($PRICE == '1€' || $PRICE == '€1'){

                $MON_F = 'ført-ni euro og nitti-ni cent';

            }elseif($PRICE == '1USD' || $PRICE == '$1'){

                $MON_F = 'førti-ni dollar og nitti-ni amerikanske cent';

            }elseif($PRICE == '£1'){

                $MON_F = 'førti-ni pund og nitti-ni pence';

            }

            $ALERT="Du er fortsatt ikke registrert! Du må aktivere kontoen din hvis du vil se dette innholdet uten begrensninger!";
            // Content
          
            $m="E-bok, fullversjon [gratis epub-nedlasting]";
            $TEXT_1="POPULÆRE EMNER";
            $TEXT_2="Forretningsliv";
            $TEXT_3="Historie";
            $TEXT_4="Datamaskiner";
            $TEXT_5="Religion";
            $TEXT_6="Helse";
            $TEXT_6_A="Trening";
            $TEXT_7="Vitenskap";
            $TEXT_8="Kropp Sinn Sjel";
            $TEXT_9="Bla gjennom våre kategorier";
            $TEXT_9_A="Søk på tittel, forfatter, emne eller ISBN";
            $TEXT_10="Utvalgte titler";
            $TEXT_11="Nylig ankommet";
            $TEXT_12="Les mer";
            $TEXT_13="Vurderinger";
            $TEXT_14="Brukervurdering:";
            $TEXT_15="Nedlastninger:";
            $TEXT_16="pdf";
            $TEXT_17="doc";
            $TEXT_18="docx";
            $TEXT_19="mobi";
            $TEXT_20="djvu";
            $TEXT_21="epub";
            $TEXT_22="ibooks";
            $TEXT_23="Last ned nå!";
            $TEXT_24="Brukervurderinger";
            $TEXT_25="Facebook";
            $TEXT_26="Følg oss på Facebook!";
            $TEXT_27="Twitter";
            $TEXT_28="Følg oss på Twitter!";
            $TEXT_29="DISKUSJON";
            $TEXT_30="Ms. Butterfly";
            $TEXT_30_A="11.03 / ";
            $TEXT_31="Enig med deg. Disse bøkene er kjempegode.";
            $TEXT_32="Paul";
            $TEXT_32_A="09.06 / ";
            $TEXT_33="Flott, tusen takk.";
            $TEXT_34="";
            $TEXT_34_A="";
            $TEXT_35="";
            $TEXT_36="Del dine tanker...";
            $TEXT_37="Om E-BØKER";
            $TEXT_38="Søk etter tusenvis av offentlig tilgjengelige e-bøker.";
            $TEXT_39="Prøvd, les og last ned direkte.";
            $TEXT_40="kategorier";
            $TEXT_41="e-bøker";
            $TEXT_42="Lese-enheter";
            $TEXT_43="En liste over lesebrett som er støttet av Ebooks.";
            $TEXT_44="Last ned direkte";
            $TEXT_45="Last ned dine favorittbøker til datamaskinen eller en hvilken som helst annen enhet.";
            $TEXT_46="Ofte stilte spørsmål ";
            $TEXT_47="Sjekk våre ofte stilte spørsmål for de mest vanlige spørsmålene og svarene.";
            $TEXT_48="Feilsøking";
            $TEXT_49="Har du problemer? Vårt kundeservice-team står alltid klare til å hjelpe.";
            $TEXT_50="Spesialer, nye utgivelser og mer!";
            $TEXT_51="Meld deg på vårt nyhetsbrev for å få eksklusive tilbud som du ikke kan finne noe annet sted, og de siste oppdateringene fra vår nettside rett til innboksen din!";
            $TEXT_52="Skriv din e-postadresse her";
            $TEXT_53="Lagre";

            $ASTERISCO='*Når du benytter deg av PRØVE, vil du abonnere på tjenesten regulardrive.net i 2 dager for prisen som er oppgitt i kampanjen. Etter 2 dager vil du, hvis du ikke kansellerer kontoen din, bli belastet prisen for premiumkonto, ssom koster '.$MON_F.' hver 30. dag. Du finner all denne informasjonen og abonnementsvilkårene under Tjenestevilkår.';
            
            // Footer
            $FOOT_WHAT='Hva er regulardrive.net?';
            $FOOT_WHAT_TEXT='Det er en tjeneste for lagring i skyen med månedsabonnement. Det gir medlemmene adgang til en plattform der de kan laste opp, lagre, administrere og laste ned filene sine.';
            $FOOT_COMMIT="Hvilke forpliktelser påtar jeg meg?";
            $FOOT_COMMIT_TEXT="Ved å benytte deg av PRØVE, blir du abonnent på premiumtjenesten til regulardrive.net. Hvis du etter to prøvedager ikke kansellerer kontoen din, må du betale prisen på premiumabonnementet hver måned. Abonnementsvilkårene finner du her: <a id='tos1' href='". $TOS3 ."' style='color: lightgray;' target='_blank'>Tjenestevilkår</a>. Enkel oppsigelse av abonnementet. Hvis du ikke sier opp abonnementet i løpet av prøveperioden, må du betale for abonnementet hver måned. Abonnementet fornyes automatisk til du sier det opp. Abonnementet koster ".$MON_F." per måned og betaler med kreditt- eller debetkort.";
            $FOOT_WIN="Hva er dette nettstedet?"; 
            $FOOT_WIN_TEXT="Dette nettstedet er et eksempel på nedlastingshastigheter og funksjoner du kan få med kontoen din på  regulardrive.net. Vi lagrer ingen tredjepartsfiler og når du registrerer deg får du tilgang til plattformen din uten noen fil eller dokumenter. Navnene som kan vises på denne siden frambringes bare som eksempler. Du kan ikke laste opp noen filer på kontoen din som du ikke eier eller har rettighetene til.";
            
            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";
        break;
        case 'nl':

            if($PRICE == '1€' || $PRICE == '€1'){

                $MON_F = 'forty-nine with ninety-nine euros';

            }elseif($PRICE == '1USD' || $PRICE == '$1'){

                $MON_F = 'forty-nine with ninety-nine american dollars';

            }elseif($PRICE == '£1'){

                $MON_F = 'forty-nine pounds and ninety-nine pence';

            }
            $ALERT="Je bent nog niet geregistreerd! Je moet je account activeren voordat je deze content zonder limieten kunt kijken!";
            // Content
            
            $m="E-book, volledige versie";
            $TEXT_1="Popular subjects";
            $TEXT_2="Business";
            $TEXT_3="History";
            $TEXT_4="Computers";
            $TEXT_5="Religion";
            $TEXT_6="Health";
            $TEXT_6_A="Fitness";
            $TEXT_7="Science";
            $TEXT_8="Body Mind Spirit";
            $TEXT_9="Browse our categories";
            $TEXT_9_A="Search by title, author, subject or ISBN";
            $TEXT_10="Featured titles";
            $TEXT_11="Just arrived";
            $TEXT_12="Read more";
            $TEXT_13="Reviews";
            $TEXT_14="User rating:";
            $TEXT_15="Downloads:";
            $TEXT_16="pdf";
            $TEXT_17="doc";
            $TEXT_18="docx";
            $TEXT_19="mobi";
            $TEXT_20="djvu";
            $TEXT_21="epub";
            $TEXT_22="ibooks";
            $TEXT_23="Download now!";
            $TEXT_24="User reviews";
            $TEXT_25="Facebook";
            $TEXT_26="Join us on Facebook!";
            $TEXT_27="Twitter";
            $TEXT_28="Follow us on Twitter!";
            $TEXT_29="discussion";
            $TEXT_30="John Jackson";
            $TEXT_30_A="12.52 / ";
            $TEXT_31="I’m looking for some new good fantasy books. Anyone here that can recommend me something?";
            $TEXT_32="Ms. Butterfly";
            $TEXT_32_A="10.55 / ";
            $TEXT_33="I agree with you. The books are great.";
            $TEXT_34="Paul";
            $TEXT_34_A="08.58 / ";
            $TEXT_35="Great, thanks.";
            $TEXT_36="Share your thoughts...";
            $TEXT_37="About CrazyEbooks EBOOKS";
            $TEXT_38="Search for thousands of publicly available ebooks.";
            $TEXT_39="Preview, read and download directly.";
            $TEXT_40="categories";
            $TEXT_41="ebooks";
            $TEXT_42="Reader devices";
            $TEXT_43="A list of the non-computer reading devices supported by CrazyEbooks.";
            $TEXT_44="Download directly";
            $TEXT_45="Download your favourite books to your computer or to any other device.";
            $TEXT_46="FAQ";
            $TEXT_47="Check our Frequently Asked Questions for the most common questions and answers.";
            $TEXT_48="Troubleshooting";
            $TEXT_49="Have any problem? Our support team is always available to help.";
            $TEXT_50="Specials, new title alerts and more!";
            $TEXT_51="Sign up for our newsletter to get exclusive deals that you can’t find anywhere else and latest updates from our website straight to your inbox!";
            $TEXT_52="Type your e-mail address here";
            $TEXT_53="Save";


            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost '.$MON_F.' every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            // Footer
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a monthly subscription cloud storage service that provides its members access to its platform where they can upload, store, manage, download their files.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs ".$MON_F." per month, payable by credit or debit card.";
            $FOOT_WIN="What is this website?"; 
            $FOOT_WIN_TEXT="This website is an example of the download speeds and features you could get with your account at regulardrive.net. We do not store any third party files and when you register you will get access to your platform without any file or document. The names that can be shown on this website are generated only as examples. You are not allowed to upload to your account any file that is not your property or that you do not have their rights.";
            
            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";
        break;
        case 'pt':

            if($PRICE == '1€' || $PRICE == '€1'){

                $MON_F = 'quarenta e nove euros e noventa e nove cêntimos';

            }elseif($PRICE == '1USD' || $PRICE == '$1'){

                $MON_F = 'quarenta e nove dólares americanos e noventa e nove cêntimos';

            }elseif($PRICE == '£1'){

                $MON_F = 'quarenta e nove libras e noventa e nove cêntimos';

            }

            $ALERT="Ainda não está registado(a)! Para visualizar este conteúdo sem limitações, tem de ativar a sua conta!";
            // Content
       
            $m="Ebook, versão completa [download epub gratuito]";
            $TEXT_1="TEMAS POPULARES";
            $TEXT_2="Negócios";
            $TEXT_3="História";
            $TEXT_4="Tecnologia";
            $TEXT_5="Religião";
            $TEXT_6="Saúde";
            $TEXT_6_A="Bem-Estar";
            $TEXT_7="Ciência";
            $TEXT_8="Corpo, Mente e Espírito";
            $TEXT_9="Pesquisar nossas categorias";
            $TEXT_9_A="Pesquisar por título, autor, assunto ou ISBN";
            $TEXT_10="Títulos em Destaque";
            $TEXT_11="Acabados de chegar";
            $TEXT_12="Leia mais";
            $TEXT_13="Comentários";
            $TEXT_14="Avaliação dos usuários:";
            $TEXT_15="Transferências:";
            $TEXT_16="pdf";
            $TEXT_17="doc";
            $TEXT_18="docx";
            $TEXT_19="mobi";
            $TEXT_20="djvu";
            $TEXT_21="epub";
            $TEXT_22="ibooks";
            $TEXT_23="Faça o download agora mesmo!";
            $TEXT_24="Comentários dos usuários";
            $TEXT_25="Facebook";
            $TEXT_26="Siga-nos no Facebook!";
            $TEXT_27="Twitter";
            $TEXT_28="Siga-nos no Twitter!";
            $TEXT_29="DISCUSSÃO";
            $TEXT_30="Ms. Butterfly";
            $TEXT_30_A="11.51 / ";
            $TEXT_31="Eu concordo com você. Os livros são ótimos.";
            $TEXT_32="Paul";
            $TEXT_32_A="09.54 / ";
            $TEXT_33="Ótimo, obrigado.";
            $TEXT_34="";
            $TEXT_34_A="";
            $TEXT_35="";
            $TEXT_36="Compartilhe suas idéias...";
            $TEXT_37="Sobre os EBOOKS";
            $TEXT_38="Pesquise milhares de ebooks disponíveis publicamente.";
            $TEXT_39="Pré-visualize, leia e baixe directamente";
            $TEXT_40="categorias";
            $TEXT_41="ebooks";
            $TEXT_42="Dispositivos de leitura";
            $TEXT_43="Uma lista dos dispositivos de leitura suportados pelo Ebooks.";
            $TEXT_44="Baixe diretamente";
            $TEXT_45="Baixe seus livros favoritos no seu computador ou em outros dispositivos.";
            $TEXT_46="FAQ";
            $TEXT_47="Confira a nossa lista de perguntas e respostas mais frequentes.";
            $TEXT_48="Solução de problemas";
            $TEXT_49="Algum problema? Nossa equipe de suporte está sempre disponível para ajudar.";
            $TEXT_50="Especiais, alertas de novos títulos e muito mais!";
            $TEXT_51="Inscreva-se no nosso boletim informativo para obter ofertas exclusivas que você não consegue encontrar em nenhum outro lugar e as atualizações mais recentes do nosso site direto para sua caixa de entrada!";
            $TEXT_52="Digite seu email aqui";
            $TEXT_53="Salvar";

            $ASTERISCO='*Ao utilizar a versão EXPERIMENTAL, está a subscrever o serviço da regulardrive.net durante 2 dias ao preço indicado na promoção. Após 2 dias, se não cancelar a sua conta, será cobrado o valor da conta premium, que custa '.$MON_F.' de 30 em 30 dias. Pode encontrar todas as informações e condições de subscrição nos Termos e condições.';
            
            // Footer
            $FOOT_WHAT='O que é regulardrive.net?';
            $FOOT_WHAT_TEXT='É um serviço de armazenamento em nuvem de assinatura mensal que permite aos seus membros aceder à sua plataforma, onde podem carregar, armazenar, gerir e descarregar os seus ficheiros.';
            $FOOT_COMMIT="Qual o meu compromisso?";
            $FOOT_COMMIT_TEXT="Ao utilizar a versão TRIAL, está a subscrever o serviço premium da regulardrive.net. Após dois dias de prova, se não cancelar a sua conta, será cobrado o valor da assinatura premium todos os meses. As condições de assinatura estão disponíveis aqui: <a id='tos1' href='". $TOS3 ."' style='color: lightgray;' target='_blank'>Termos de serviço</a>. Cancelamento fácil da assinatura. Se não cancelar a assinatura durante o período experimental, terá que pagar a sua assinatura todos os meses e será renovada mensalmente de forma automática até que cancele a sua assinatura. A assinatura custa ".$MON_F." por mês, pagáveis com cartão de crédito ou débito.";
            $FOOT_WIN="O que é este site?";
            $FOOT_WIN_TEXT="Este sítio 'web' é um exemplo da velocidade de 'download' e dos recursos que poderia obter com a sua conta no regulardrive.net. Não armazenamos quaisquer ficheiros de terceiros e quando se registar terá acesso à sua plataforma sem qualquer ficheiro ou documento. Os nomes que possam ser mostrados neste sítio 'web' são gerados apenas como exemplos. Não lhe é permitido carregar na sua conta qualquer ficheiro que não seja da sua propriedade ou que não detenha os seus direitos.";
            
            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";
        break;
        case 'pl':

            if($PRICE == '1€' || $PRICE == '€1'){

                $MON_F = 'forty-nine with ninety-nine euros';

            }elseif($PRICE == '1USD' || $PRICE == '$1'){

                $MON_F = 'forty-nine with ninety-nine american dollars';

            }elseif($PRICE == '£1'){

                $MON_F = 'forty-nine pounds and ninety-nine pence';

            }

            $ALERT="Nie jesteś jeszcze zarejestrowany! Aby oglądać te treści bez limitów, musisz aktywować konto!";
           // Content
          
            $m="Ebook, full version";
            $TEXT_1="Popular subjects";
            $TEXT_2="Business";
            $TEXT_3="History";
            $TEXT_4="Computers";
            $TEXT_5="Religion";
            $TEXT_6="Health";
            $TEXT_6_A="Fitness";
            $TEXT_7="Science";
            $TEXT_8="Body Mind Spirit";
            $TEXT_9="Browse our categories";
            $TEXT_9_A="Search by title, author, subject or ISBN";
            $TEXT_10="Featured titles";
            $TEXT_11="Just arrived";
            $TEXT_12="Read more";
            $TEXT_13="Reviews";
            $TEXT_14="User rating:";
            $TEXT_15="Downloads:";
            $TEXT_16="pdf";
            $TEXT_17="doc";
            $TEXT_18="docx";
            $TEXT_19="mobi";
            $TEXT_20="djvu";
            $TEXT_21="epub";
            $TEXT_22="ibooks";
            $TEXT_23="Download now!";
            $TEXT_24="User reviews";
            $TEXT_25="Facebook";
            $TEXT_26="Join us on Facebook!";
            $TEXT_27="Twitter";
            $TEXT_28="Follow us on Twitter!";
            $TEXT_29="discussion";
            $TEXT_30="John Jackson";
            $TEXT_30_A="12.52 / ";
            $TEXT_31="I’m looking for some new good fantasy books. Anyone here that can recommend me something?";
            $TEXT_32="Ms. Butterfly";
            $TEXT_32_A="10.55 / ";
            $TEXT_33="I agree with you. The books are great.";
            $TEXT_34="Paul";
            $TEXT_34_A="08.58 / ";
            $TEXT_35="Great, thanks.";
            $TEXT_36="Share your thoughts...";
            $TEXT_37="About CrazyEbooks EBOOKS";
            $TEXT_38="Search for thousands of publicly available ebooks.";
            $TEXT_39="Preview, read and download directly.";
            $TEXT_40="categories";
            $TEXT_41="ebooks";
            $TEXT_42="Reader devices";
            $TEXT_43="A list of the non-computer reading devices supported by CrazyEbooks.";
            $TEXT_44="Download directly";
            $TEXT_45="Download your favourite books to your computer or to any other device.";
            $TEXT_46="FAQ";
            $TEXT_47="Check our Frequently Asked Questions for the most common questions and answers.";
            $TEXT_48="Troubleshooting";
            $TEXT_49="Have any problem? Our support team is always available to help.";
            $TEXT_50="Specials, new title alerts and more!";
            $TEXT_51="Sign up for our newsletter to get exclusive deals that you can’t find anywhere else and latest updates from our website straight to your inbox!";
            $TEXT_52="Type your e-mail address here";
            $TEXT_53="Save";

            //asterisco
            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost '.$MON_F.' every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            // Footer
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a monthly subscription cloud storage service that provides its members access to its platform where they can upload, store, manage, download their files.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs ".$MON_F." per month, payable by credit or debit card.";
            $FOOT_WIN="What is this website?"; 
            $FOOT_WIN_TEXT="This website is an example of the download speeds and features you could get with your account at regulardrive.net. We do not store any third party files and when you register you will get access to your platform without any file or document. The names that can be shown on this website are generated only as examples. You are not allowed to upload to your account any file that is not your property or that you do not have their rights.";
            
            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";
        break;
        case 'ro':

            if($PRICE == '1€' || $PRICE == '€1'){

                $MON_F = 'forty-nine with ninety-nine euros';

            }elseif($PRICE == '1USD' || $PRICE == '$1'){

                $MON_F = 'forty-nine with ninety-nine american dollars';

            }elseif($PRICE == '£1'){

                $MON_F = 'forty-nine pounds and ninety-nine pence';

            }
            $ALERT="Nu te-ai înregistrat încă! Ca să poți urmări acest conținut fără nicio limitare, trebuie să-ți activezi contul!";
            // Content
          
            $m="E-book, versiune completă [descărcare gratuită de pe epub]";
            $TEXT_1="CATEGORII POPULARE";
            $TEXT_2="Afaceri";
            $TEXT_3="Istorie";
            $TEXT_4="Calculatoare";
            $TEXT_5="Religie";
            $TEXT_6="Sănătate";
            $TEXT_6_A="Fitness";
            $TEXT_7="Știință";
            $TEXT_8="Trup Minte Suflet";
            $TEXT_9="Răsfoiește categoriile";
            $TEXT_9_A="Caută după titlu, autor, subiect sau ISBN";
            $TEXT_10="Titluri recomandate";
            $TEXT_11="Noutăţi";
            $TEXT_12="Citeşte mai mult";
            $TEXT_13="Recenzii";
            $TEXT_14="Rating-ul utilizatorilor:";
            $TEXT_15="Descărcări:";
            $TEXT_16="pdf";
            $TEXT_17="doc";
            $TEXT_18="docx";
            $TEXT_19="mobi";
            $TEXT_20="djvu";
            $TEXT_21="epub";
            $TEXT_22="ibooks";
            $TEXT_23="Descarcă acum!";
            $TEXT_24="Recenzii ale utilizatorilor";
            $TEXT_25="Facebook";
            $TEXT_26="Alătură-te nouă pe Facebook!";
            $TEXT_27="Twitter";
            $TEXT_28="Urmărește-ne pe Twitter!";
            $TEXT_29="PĂRERI";
            $TEXT_30="Doamna Fluture";
            $TEXT_30_A="12.03 / ";
            $TEXT_31="Sunt de acord. Cărţile sunt extraordinare.";
            $TEXT_32="Paul";
            $TEXT_32_A="10.06 / ";
            $TEXT_33="Grozav, mersi.";
            $TEXT_34="";
            $TEXT_34_A="";
            $TEXT_35="";
            $TEXT_36="Spune-ți părerea...";
            $TEXT_37="Despre EBOOKS";
            $TEXT_38="Caută printre miile de ebooks disponibile public.";
            $TEXT_39="Previzualizează, citește și descarcă-le direct.";
            $TEXT_40="categorii";
            $TEXT_41="ebooks";
            $TEXT_42="Dispozitive compatibile";
            $TEXT_43="O listă de dispozitive de citire eReader compatibile cu Ebooks.";
            $TEXT_44="Descarcă direct";
            $TEXT_45="Descarcă acum cărțile tale preferate direct pe calculatorul tău sau orice alt dispozitiv.";
            $TEXT_46="Întrebări frecvente";
            $TEXT_47="Citește secţiunea de Întrebări frecvente pentru cele mai comune întrebări și răspunsuri.";
            $TEXT_48="Remedierea problemelor";
            $TEXT_49="Ai întâmpinat o problem? Echipa noastră de asistență clienţi este întotdeauna gata să te ajute.";
            $TEXT_50="Titluri speciale, notificări legate de titluri noi și multe altele!";
            $TEXT_51="Înscrie-te la newsletter-ul nostru pentru a primi prin email oferte exclusive pe care nu le vei găsi nicăieri altundeva și cele mai recente actualizări de pe site-ul nostru!";
            $TEXT_52="Introdu adresa ta de e-mail";
            $TEXT_53="Salvează";

            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost '.$MON_F.' every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            // Footer
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a monthly subscription cloud storage service that provides its members access to its platform where they can upload, store, manage, download their files.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs ".$MON_F." per month, payable by credit or debit card.";
            $FOOT_WIN="What is this website?"; 
            $FOOT_WIN_TEXT="This website is an example of the download speeds and features you could get with your account at regulardrive.net. We do not store any third party files and when you register you will get access to your platform without any file or document. The names that can be shown on this website are generated only as examples. You are not allowed to upload to your account any file that is not your property or that you do not have their rights.";
            
            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";
        break;
        case 'ru':

            if($PRICE == '1€' || $PRICE == '€1'){

                $MON_F = 'forty-nine with ninety-nine euros';

            }elseif($PRICE == '1USD' || $PRICE == '$1'){

                $MON_F = 'forty-nine with ninety-nine american dollars';

            }elseif($PRICE == '£1'){

                $MON_F = 'forty-nine pounds and ninety-nine pence';

            }
            $ALERT="Вы еще не зарегистрированы! Чтобы просматривать этот контент без ограничений, вам необходимо активировать свой аккаунт!";
            // Content
        
            $m="Эл.книга, полная версия [скачать epub бесплатно]";
            $TEXT_1="ПОПУЛЯРНЫЕ ТЕМЫ";
            $TEXT_2="Бизнес";
            $TEXT_3="История";
            $TEXT_4="Компьютеры";
            $TEXT_5="Религия";
            $TEXT_6="Здоровье";
            $TEXT_6_A="красота";
            $TEXT_7="Наука";
            $TEXT_8="Тело, ум, дух";
            $TEXT_9="Поиск по категориям";
            $TEXT_9_A="Поиск по названию, автору, теме или ISBN";
            $TEXT_10="Избранные книги";
            $TEXT_11="Новинки";
            $TEXT_12="Читать далее";
            $TEXT_13="Отзывы";
            $TEXT_14="Рейтинг пользователей:";
            $TEXT_15="Загрузки:";
            $TEXT_16="pdf";
            $TEXT_17="doc";
            $TEXT_18="docx";
            $TEXT_19="mobi";
            $TEXT_20="djvu";
            $TEXT_21="epub";
            $TEXT_22="ibooks";
            $TEXT_23="Скачать сейчас!";
            $TEXT_24="Отзывы пользователей";
            $TEXT_25="Facebook";
            $TEXT_26="Присоединяйтесь к нам на Facebook!";
            $TEXT_27="Twitter";
            $TEXT_28="Подпишитесь на нас в Twitter!";
            $TEXT_29="ОБСУЖДЕНИЕ";
            $TEXT_30="Мисс Батерфляй";
            $TEXT_30_A="11.03 / ";
            $TEXT_31="Полностью согласен с Вами. Эти книги просто великолепны!";
            $TEXT_32="Пол (Paul)";
            $TEXT_32_A="09.06 / ";
            $TEXT_33="Отлично, спасибо";
            $TEXT_34="";
            $TEXT_34_A="";
            $TEXT_35="";
            $TEXT_36="Поделитесь своим мнением...";
            $TEXT_37="О ЭЛ.КНИГИ";
            $TEXT_38="Поиск среди тысячей книг в открытом доступе.";
            $TEXT_39="Просматривайте, читайте и скачивайте.";
            $TEXT_40="категории";
            $TEXT_41="эл.книги";
            $TEXT_42="Устройства для чтения";
            $TEXT_43="Список устройств, поддерживаемых Ebooks.";
            $TEXT_44="Скачать сейчас";
            $TEXT_45="Скачивайте Ваши любимые книги на Ваш компьютер или любое другое устройство.";
            $TEXT_46="Часто задаваемые вопросы";
            $TEXT_47="Проверьте наш FAQ, чтобы найти ответы на Часто Задаваемые Вопросы.";
            $TEXT_48="Решение проблем";
            $TEXT_49="Возникла проблема? Наша команда поддержки готова помочь!";
            $TEXT_50="Специальные предложения, уведомления о новинках и более!";
            $TEXT_51="Подпишитесь на нашу рассылку, чтобы получать эксклюзивные предложения и последние обновления с нашего сайта прямо на свой e-mail адрес!";
            $TEXT_52="Введите вашу электронную почту здесь";
            $TEXT_53="Сохранить";

            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost '.$MON_F.' every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            // Footer
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a monthly subscription cloud storage service that provides its members access to its platform where they can upload, store, manage, download their files.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs ".$MON_F." per month, payable by credit or debit card.";
            $FOOT_WIN="What is this website?"; 
            $FOOT_WIN_TEXT="This website is an example of the download speeds and features you could get with your account at regulardrive.net. We do not store any third party files and when you register you will get access to your platform without any file or document. The names that can be shown on this website are generated only as examples. You are not allowed to upload to your account any file that is not your property or that you do not have their rights.";
            
            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";
        break;
        case 'sv':

            if($PRICE == '1€' || $PRICE == '€1'){

                $MON_F = 'fyrtionio med nittionio Euro';

            }elseif($PRICE == '1USD' || $PRICE == '$1'){

                $MON_F = 'fyrtionio med nittionio amerikanska dollar';

            }elseif($PRICE == '£1'){

                $MON_F = 'fyrtionio pund och nittionio pence';

            }

            $ALERT="Du är inte registrerad än! För att titta på detta innehåll utan begränsningar måste du aktivera ditt konto!";
            // Content
           
            $m="E-bok, fullständig version [gratis epub-nedladdning]";
            $TEXT_1="POPULÄRA ÄMNEN";
            $TEXT_2="Företag";
            $TEXT_3="Historik";
            $TEXT_4="Datorer";
            $TEXT_5="Religion";
            $TEXT_6="Hälsa";
            $TEXT_6_A="fitness";
            $TEXT_7="Vetenskap";
            $TEXT_8="Kropp och själ";
            $TEXT_9="Bläddra bland våra kategorier";
            $TEXT_9_A="Sök efter titel, författare, ämne eller ISBN";
            $TEXT_10="Titlar i rampljuset";
            $TEXT_11="Anlände precis";
            $TEXT_12="Läs mer";
            $TEXT_13="Recensioner";
            $TEXT_14="Användarbetyg:";
            $TEXT_15="Nedladdningar:";
            $TEXT_16="pdf";
            $TEXT_17="doc";
            $TEXT_18="docx";
            $TEXT_19="mobi";
            $TEXT_20="djvu";
            $TEXT_21="epub";
            $TEXT_22="ibooks";
            $TEXT_23="Ladda ner nu!";
            $TEXT_24="Användarrecensioner";
            $TEXT_25="Facebook";
            $TEXT_26="Anslut dig till oss på Facebook!";
            $TEXT_27="Twitter";
            $TEXT_28="Följ oss på Twitter!";
            $TEXT_29="DISKUSSION";
            $TEXT_30="Ms. Butterfly";
            $TEXT_30_A="11.03 / ";
            $TEXT_31="Jag håller med dig. Böckerna är bra.";
            $TEXT_32="Paul";
            $TEXT_32_A="09.06 / ";
            $TEXT_33="I agree with you. The books are great.";
            $TEXT_34="Paul";
            $TEXT_34_A="08.58 / ";
            $TEXT_35="Bra, tack!";
            $TEXT_36="Dela dina tankar...";
            $TEXT_37="Om E-BÖCKER";
            $TEXT_38="Sök bland tusentals e-böcker.";
            $TEXT_39="Förhandsgranska, läs och ladda ned direkt.";
            $TEXT_40="kategorier";
            $TEXT_41="e-böcker";
            $TEXT_42="Läsenheter";
            $TEXT_43="En lista över läsenheter som stöds av Ebooks.";
            $TEXT_44="Ladda ner direkt";
            $TEXT_45="Ladda ner dina favoritböcker direkt till din dator eller andra enheter.";
            $TEXT_46="Vanliga frågor";
            $TEXT_47="Bläddra i Vanliga frågor för de mest vanligen ställda frågorna och svar.";
            $TEXT_48="Felsökning";
            $TEXT_49="Upplever du ett problem? Vår support är alltid redo att hjälpa";
            $TEXT_50="Extraerbjudanden, notis för nya titlar och mer!";
            $TEXT_51="Prenumerera på vårt nyhetsbrev för att få exklusiva erbjudanden som du inte hittar någon annanstans samt de senaste uppdateringarna från vår hemsida, rakt ner i din inkorg!";
            $TEXT_52="Ange din e-postadress här";
            $TEXT_53="Spara";

            //asterisco
            $ASTERISCO='*Genom att använda TRIAL inleder du en prenumeration på tjänsten regulardrive.net i 2 dagar för det pris som anges i kampanjen. Om du inte säger upp din prenumeration efter 2 dagar kommer du att debiteras du '.$MON_F.' var 30:e dag. Du hittar all information och alla villkor för prenumerationen i avsnittet Villkor.';
                
            // Footer
            $FOOT_WHAT='Vad är regulardrive.net?';
            $FOOT_WHAT_TEXT='Det är en månatlig molnlagringstjänst som ger användarna tillgång till tjänstens plattform, där de kan ladda upp, lagra, hantera och ladda ner sina filer.';
            $FOOT_COMMIT="Vad åtar jag mig?";
            $FOOT_COMMIT_TEXT="Genom att använda TRIAL inleder du en prenumeration på premium-tjänsten regulardrive.net. Om du inte säger upp tjänsten efter 2 dagars provperiod inleds en premium-prenumeration, för vilken du måste betala 1 gång i månaden. Du hittar prenumerationsvillkoren här: <a id='tos1' href='". $TOS3 ."' style='color: lightgray;' target='_blank'>Villkor</a>. Enkel prenumeration. Om du inte säger upp din prenumeration under provperioden inleds en betalprenumeration. Prenumerationen förnyas automatiskt varje månad tills du säger upp den. Prenumerationen kostar ".$MON_F." per månad och betalas med kredit- eller betalkort.";
            $FOOT_WIN="Vad är den är webbplatsen för något?";
            $FOOT_WIN_TEXT="Den här webbplatsen är ett exempel på vilka nedladdningshastigheter och funktioner som du skulle kunna få med ditt konto hos regulardrive.net. Vi lagrar inga tredjepartsfiler och när du registrerar dig får du tillgång till din plattform utan någon fil eller dokument. Namnen som kan visas på denna webbplats tas fram endast som exempel. Du tillåts inte ladda upp någon fil till ditt konto som inte är din egendom eller som du inte har deras rättigheter till.";
            
            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";
        break;
        case 'tr':

            if($PRICE == '1€' || $PRICE == '€1'){

                $MON_F = 'forty-nine with ninety-nine euros';

            }elseif($PRICE == '1USD' || $PRICE == '$1'){

                $MON_F = 'forty-nine with ninety-nine american dollars';

            }elseif($PRICE == '£1'){

                $MON_F = 'forty-nine pounds and ninety-nine pence';

            }
            $ALERT="Henüz kaydolmadınız! Bu içeriği limitsiz izleyebilmek için hesabınızı etkinleştirmeniz gerekir!";
            // Content
       
            $m="Ekitap, tam versiyon [ücretsiz epub indirmesi]";
            $TEXT_1="POPÜLER KONULAR";
            $TEXT_2="İş dünyası";
            $TEXT_3="Tarih";
            $TEXT_4="Bilgisayar";
            $TEXT_5="Dini";
            $TEXT_6="Sağlık";
            $TEXT_6_A="Fitness";
            $TEXT_7="Bilim";
            $TEXT_8="Beden ve ruh sağlığı";
            $TEXT_9="Kategorilerimize göz at";
            $TEXT_9_A="Başlığa göre ara, yazar, konu ya da ISBN";
            $TEXT_10="Öne çıkan başlıklar";
            $TEXT_11="Yeni geldi";
            $TEXT_12="Daha fazlasını oku";
            $TEXT_13="İncelemeler";
            $TEXT_14="Kullanıcı Puanı:";
            $TEXT_15="İndirilme sayısı:";
            $TEXT_16="pdf";
            $TEXT_17="doc";
            $TEXT_18="docx";
            $TEXT_19="mobi";
            $TEXT_20="djvu";
            $TEXT_21="epub";
            $TEXT_22="ibooks";
            $TEXT_23="Hemen indir!";
            $TEXT_24="Kullanıcı yorumları";
            $TEXT_25="Facebook";
            $TEXT_26="Facebook`ta bize katılın!";
            $TEXT_27="Twitter";
            $TEXT_28="Twitter`dan bizi takip edin";
            $TEXT_29="TARTIŞMA";
            $TEXT_30="Bayan Kelebek";
            $TEXT_30_A="12.31 / ";
            $TEXT_31="Sana katılıyorum. Kitaplar harika.";
            $TEXT_32="Paul";
            $TEXT_32_A="10.35 / ";
            $TEXT_33="Harika, teşekkürler";
            $TEXT_34="";
            $TEXT_34_A="";
            $TEXT_35="";
            $TEXT_36="Düşüncelerinizi bizimle paylaşın";
            $TEXT_37="Ebooks EKİTAPLARI Hakkında";
            $TEXT_38="Halka açık binlerce mevcut ekitaptan arayınÖnizleme yapın, okuyun ve direk olarak indirin.";
            $TEXT_39="Preview, read and download directly.";
            $TEXT_40="kategorileri";
            $TEXT_41="ekitapları";
            $TEXT_42="Okuyucu cihazları";
            $TEXT_43="Bilgisayar olmayan okuma cihazları listesi Ebooks tarafından desteklenmektedir.";
            $TEXT_44="Doğrudan indirin";
            $TEXT_45="En sevdiğiniz kitapları bilgisayarınıza yada herhangi bir başka cihaza indirin.";
            $TEXT_46="FAQ";
            $TEXT_47="En çok sorulan sorular ve cevapları için Sıkça Sorulan Sorulara bakabilirsiniz.";
            $TEXT_48="Sorun giderme";
            $TEXT_49="Sorunuz mu var? Destek hepimiz yardım etmek için her zaman burada.";
            $TEXT_50="Özel teklifler, yeni başlık bildirimleri ve daha fazlası!";
            $TEXT_51="Başka hiç bir yerde bulamayacağınız özel teklifleri ve internet sitemizdeki en son güncellemeleri direk olarak gelen kutunuza almak için bültenimize kaydolun!";
            $TEXT_52="Buraya e-posta adresinizi yazınız";
            $TEXT_53="Kaydet";

            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost '.$MON_F.' every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            // Footer
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a monthly subscription cloud storage service that provides its members access to its platform where they can upload, store, manage, download their files.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs ".$MON_F." per month, payable by credit or debit card.";
            $FOOT_WIN="What is this website?"; 
            $FOOT_WIN_TEXT="This website is an example of the download speeds and features you could get with your account at regulardrive.net. We do not store any third party files and when you register you will get access to your platform without any file or document. The names that can be shown on this website are generated only as examples. You are not allowed to upload to your account any file that is not your property or that you do not have their rights.";
            
            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";
        break;
        case 'zh':

            if($PRICE == '1€' || $PRICE == '€1'){

                $MON_F = 'forty-nine with ninety-nine euros';

            }elseif($PRICE == '1USD' || $PRICE == '$1'){

                $MON_F = 'forty-nine with ninety-nine american dollars';

            }elseif($PRICE == '£1'){

                $MON_F = 'forty-nine pounds and ninety-nine pence';

            }
            $ALERT="您還沒有註冊！如希望無限制地觀看此內容，您必須先激活您的賬戶！";
            // Content
            
            $m="电子书，完整版";
            $TEXT_1="Popular subjects";
            $TEXT_2="Business";
            $TEXT_3="History";
            $TEXT_4="Computers";
            $TEXT_5="Religion";
            $TEXT_6="Health";
            $TEXT_6_A="Fitness";
            $TEXT_7="Science";
            $TEXT_8="Body Mind Spirit";
            $TEXT_9="Browse our categories";
            $TEXT_9_A="Search by title, author, subject or ISBN";
            $TEXT_10="Featured titles";
            $TEXT_11="Just arrived";
            $TEXT_12="Read more";
            $TEXT_13="Reviews";
            $TEXT_14="User rating:";
            $TEXT_15="Downloads:";
            $TEXT_16="pdf";
            $TEXT_17="doc";
            $TEXT_18="docx";
            $TEXT_19="mobi";
            $TEXT_20="djvu";
            $TEXT_21="epub";
            $TEXT_22="ibooks";
            $TEXT_23="Download now!";
            $TEXT_24="User reviews";
            $TEXT_25="Facebook";
            $TEXT_26="Join us on Facebook!";
            $TEXT_27="Twitter";
            $TEXT_28="Follow us on Twitter!";
            $TEXT_29="discussion";
            $TEXT_30="John Jackson";
            $TEXT_30_A="12.52 / ";
            $TEXT_31="I’m looking for some new good fantasy books. Anyone here that can recommend me something?";
            $TEXT_32="Ms. Butterfly";
            $TEXT_32_A="10.55 / ";
            $TEXT_33="I agree with you. The books are great.";
            $TEXT_34="Paul";
            $TEXT_34_A="08.58 / ";
            $TEXT_35="Great, thanks.";
            $TEXT_36="Share your thoughts...";
            $TEXT_37="About CrazyEbooks EBOOKS";
            $TEXT_38="Search for thousands of publicly available ebooks.";
            $TEXT_39="Preview, read and download directly.";
            $TEXT_40="categories";
            $TEXT_41="ebooks";
            $TEXT_42="Reader devices";
            $TEXT_43="A list of the non-computer reading devices supported by CrazyEbooks.";
            $TEXT_44="Download directly";
            $TEXT_45="Download your favourite books to your computer or to any other device.";
            $TEXT_46="FAQ";
            $TEXT_47="Check our Frequently Asked Questions for the most common questions and answers.";
            $TEXT_48="Troubleshooting";
            $TEXT_49="Have any problem? Our support team is always available to help.";
            $TEXT_50="Specials, new title alerts and more!";
            $TEXT_51="Sign up for our newsletter to get exclusive deals that you can’t find anywhere else and latest updates from our website straight to your inbox!";
            $TEXT_52="Type your e-mail address here";
            $TEXT_53="Save";

            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost '.$MON_F.' every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            // Footer
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a monthly subscription cloud storage service that provides its members access to its platform where they can upload, store, manage, download their files.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs ".$MON_F." per month, payable by credit or debit card.";
            $FOOT_WIN="What is this website?"; 
            $FOOT_WIN_TEXT="This website is an example of the download speeds and features you could get with your account at regulardrive.net. We do not store any third party files and when you register you will get access to your platform without any file or document. The names that can be shown on this website are generated only as examples. You are not allowed to upload to your account any file that is not your property or that you do not have their rights.";
            
            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";
        break;

        default:

            if($PRICE == '1€' || $PRICE == '€1'){

                $MON_F = 'forty-nine with ninety-nine euros';

            }elseif($PRICE == '1USD' || $PRICE == '$1'){

                $MON_F = 'forty-nine with ninety-nine american dollars';

            }elseif($PRICE == '£1'){

                $MON_F = 'forty-nine pounds and ninety-nine pence';

            }
            $ALERT="You are not registered yet! To watch this and other movies without limits, you have to activate your account!";
            // Content
         
            $m="Ebook, full version [free epub download]";
            $TEXT_1="Members Only Area";
            $TEXT_2="You must create an account in order to read the following content";
            $TEXT_3="SIGN UP – IT’S FREE";

            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost '.$MON_F.' every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            // Footer
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a monthly subscription cloud storage service that provides its members access to its platform where they can upload, store, manage, download their files.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs ".$MON_F." per month, payable by credit or debit card.";
            $FOOT_WIN="What is this website?"; 
            $FOOT_WIN_TEXT="This website is an example of the download speeds and features you could get with your account at regulardrive.net. We do not store any third party files and when you register you will get access to your platform without any file or document. The names that can be shown on this website are generated only as examples. You are not allowed to upload to your account any file that is not your property or that you do not have their rights.";
            
            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";
            break;

    }

?>