<?php


    $lang = $_SESSION['lang'];


//   $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
$acceptLang = ['ar','bg','cs','da', 'de', 'el', 'en','es','fi','fr','he','hr','hu','ms','it','ja','kr','nb','nl','pt','pl','ro','sv','tr','zh'];
// echo $lang;
$lang = in_array($lang, $acceptLang) ? $lang : 'en';

// echo $lang;

  


switch($lang) {

    case 'ar':

        $TITTLE_DECLINED = 'عذرًا، تعذر إتمام المعاملة';
        $TITTLE_DECLINED_1 = 'لا توجد أموال كافية بالبطاقة أو تم الوصول إلى حد الدفع';
        $TITTLE_DECLINED_2 = 'لم يتم تمكين خدمة 3D Secure الخاصة ببطاقتك';
        $TITTLE_DECLINED_3 = 'فشل تحقق 3D Secure';
        $TITTLE_DECLINED_4 = 'انتهت صلاحية المعاملة';
        $TITTLE_DECLINED_5 = 'حدد نظام الأمان الخاص بنا وجود خطأ ما';
        $TITTLE_DECLINED_6 = 'رقم البطاقة الذي أدخلته غير صحيح.';
        $TITTLE_DECLINED_8 = 'خطأ في الاتصال مع البنك';
        $TITTLE_DECLINED_12 = 'رمز الأمان (CVV) الخاص ببطاقتك غير صحيح';
        $TITTLE_DECLINED_13 = 'قد تكون البطاقة محظورة، أو قد لا تحتوي على رصيد كافٍ، أو قد تكون هناك قيود';
        $TITTLE_DECLINED_14 = 'ربما انتهت صلاحية البطاقة أو ربما يكون تاريخ انتهاء الصلاحية الذي أدخلته غير صحيح';
        $TITTLE_DECLINED_15 = 'حدث خطأ ما بسبب مشكلة غير معروفة';
        $TITTLE_DECLINED_16 = 'نوع البطاقة غير مدعوم';


       //TEXT_DECILNED TEXT DEL ERROR
        $TEXT_DECLINED_1 = 'لا تحتوي البطاقة على أموال كافية لإتمام المعاملة أو ربما وصلت إلى حد الدفع المحدد لبطاقتك.
        <br>
        <br>
        لحل المشكلة، يرجى التأكد من وجود أموال كافية بالبطاقة أو استخدام بطاقة مختلفة لإتمام الدفع.';
        $TEXT_DECLINED_2 = '3D Secure هو إجراء أمني يستخدم لحماية عمليات الشراء عبر الإنترنت. تتطلب بعض البنوك تفعيل إجراء التحقق هذا من أجل السماح بإتمام المعاملات.';
        $TEXT_DECLINED_2_1 = 'لتمكين 3D Secure على بطاقتك، يرجى اتباع الخطوات التالية: ';
        $TEXT_DECLINED_2_2 = 'ادخل إلى حسابك البنكي عبر الإنترنت.';
        $TEXT_DECLINED_2_3 = 'ابحث عن قسم الأمان أو حماية البطاقة.';
        $TEXT_DECLINED_2_4 = 'اتبع التعليمات لتفعيل 3D Secure.';
        $TEXT_DECLINED_2_5 = ' إذا كنت لا ترغب في تفعيل 3D Secure أو لا يمكنك تفعيله، فيمكنك محاولة الدفع باستخدام بطاقة ائتمان أو خصم أخرى تابعة لبنك آخر. غالبًا ما تنجح هذه الطريقة وتحل المشكلة.';       
        $TEXT_DECLINED_3 = '3D Secure هو إجراء أمني يستخدم لحماية عمليات الشراء عبر الإنترنت. إذا لم ينجح تحقق 3D Secure، فلن نتمكن من الموافقة على المعاملة.
        <br>
        <br>
        الرجاء التأكد من إتمام تحقق 3D Secure أو استخدام بطاقة مختلفة من بنك آخر لإتمام الدفع.';
        $TEXT_DECLINED_4 = '3D Secure هو إجراء أمني يُستخدم لحماية عمليات الشراء عبر الإنترنت. إذا لم يتم تفعيلها بشكل صحيح أو لم يتم تمكينها من قبل البنك الخاص بك، فلا يمكننا الموافقة على المعاملة.
        <br>
        <br>
        الرجاء تمكين 3D Secure في حسابك البنكي أو جرب مرة أخرى بإدخال الرمز بشكل صحيح. 
        <br>
        <br>
        يمكنك أيضًا استخدام بطاقة ائتمان أو خصم أخرى لبنك آخر لإتمام الدفع.';
        
        $TEXT_DECLINED_5 = 'على الرغم من وقوع هذا النوع من المشاكل من آن لآخر، فلا داعي للقلق. هذا أمر طبيعي. لدى بعض مزودي البطاقات نظام أمان حساس وقد يرفضون مثل هذه المعاملات.
        <br>
        <br>
        إليك ما يجب فعله بعد ذلك: يمكنك محاولة إتمام المعاملة باستخدام بطاقة مختلفة. غالبًا ما تنجح هذه الطريقة وتحل المشكلة.
        ';
        $TEXT_DECLINED_6 = 'تأكد من مراجعة والتحقق من إدخال جميع معلومات بطاقتك بشكل صحيح، بما في ذلك اسم حامل البطاقة، ورقمها، وتاريخ انتهاء الصلاحية، ورمز الأمان.  
        <br>
        <br>
        إذا استمرت المشكلة، فنرجو منك استخدام بطاقة مختلفة لإتمام المعاملة.';
        $TEXT_DECLINED_8 = 'قد يحدث هذا الأمر من آن لآخر. تعذر إتمام المعاملة بسبب خطأ في الاتصال مع البنك.
        <br>
        <br>
        يرجى الانتظار بضع دقائق لإتمام المعاملة مرة أخرى أو استخدام بطاقة مختلفة لإتمام الدفع.';
 
        $TEXT_DECLINED_12 = 'رمز الأمان (CVV) هو رقم مكون من ثلاثة أو أربعة أرقام موجود على ظهر بطاقتك ويُستخدم للتحقق من هوية حامل البطاقة.  
        <br>
        <br>
        تأكد من مراجعة والتحقق من إدخال رقم CVV بشكل صحيح. 
        <br>
        <br>
        إذا استمرت المشكلة، فجرب بطاقة مختلفة لإتمام المعاملة.
        ';
        $TEXT_DECLINED_13 = 'لحل المشكلة، جرب بطاقة مختلفة. تأكد من مراجعة والتحقق من إدخال جميع معلومات البطاقة بشكل صحيح ومن وجود أموال كافية بها لإتمام المعاملة.  
        <br>
        <br>
        معلومات الدفع الخاصة بك آمنة معنا ونتطلع إلى مساعدتك في إتمام معاملتك بنجاح.';
        $TEXT_DECLINED_14 = 'تاريخ انتهاء الصلاحية هو التاريخ الذي تنتهي عنده صلاحية البطاقة.
        <br>
        <br>
        لحل المشكلة، تأكد من مراجعة والتحقق من إدخال تاريخ انتهاء صلاحية البطاقة بشكل صحيح. 
        <br>
        <br>
        في حالة انتهاء صلاحية البطاقة، استخدم بطاقة أخرى سارية لإتمام المعاملة.';
        $TEXT_DECLINED_15 = 'على الرغم من احتمالية حدوث هذا النوع من المشاكل من آن لآخر، فلا داعي للقلق، حيث تظل معلومات الدفع الخاصة بك آمنة معنا. لحل المشكلة، تأكد من مراجعة والتحقق من إدخال جميع معلومات الدفع بشكل صحيح. 
        <br>
        <br>
        استخدم الأحرف اللاتينية فقط ولا تستخدم الأحرف الخاصة.
        <br>
        <br>
        يمكنك أيضًا محاولة إتمام الدفع باستخدام بطاقة مختلفة. غالبًا ما تنجح هذه الطريقة وتحل المشكلة.';
        $TEXT_DECLINED_16 = 'في الوقت الراهن، نحن لا نقبل سوى بطاقات فيزا أو ماستر كارد. إذا كنت تستخدم نوع بطاقة آخر، فلن نتمكن من معالجة معاملتك.
        <br>
        <br>
        لحل المشكلة، يرجى استخدام بطاقة فيزا أو ماستر كارد والتحقق من إدخال جميع معلومات الدفع بشكل صحيح لإتمام المعاملة.';
        //boton
        $TEXT_BOTON_DECLINED = 'حاول مرة أخرى';
        
        break;

    case 'bg':
        
        $TITTLE_DECLINED = 'За съжаление трансакцията не можe да бъде извършена';
        $TITTLE_DECLINED_1 = 'Картата е с недостатъчно средства или е достигнат лимитът за плащане';
        $TITTLE_DECLINED_2 = '3D Secure на картата Ви не е активирано';
        $TITTLE_DECLINED_3 = 'Неуспешна проверка с 3D Secure';
        $TITTLE_DECLINED_4 = 'Трансакцията е изтекла';
        $TITTLE_DECLINED_5 = 'Системата ни за сигурност отчете грешка';
        $TITTLE_DECLINED_6 = 'Въведеният номер на карта е невалиден.';
        $TITTLE_DECLINED_8 = 'Грешка при комуникацията с банката';
        $TITTLE_DECLINED_12 = 'Невалиден код за сигурност (CVV) на картата';
        $TITTLE_DECLINED_13 = 'Картата може да е блокирана, да няма достатъчно средства или да има ограничение';
        $TITTLE_DECLINED_14 = 'Картата може да е изтекла или въведената дата на изтичане е невалидна';
        $TITTLE_DECLINED_15 = 'Възникна грешка поради неизвестен проблем';
        $TITTLE_DECLINED_16 = 'Типът карта не е поддържан';


       //TEXT_DECILNED TEXT DEL ERROR
        $TEXT_DECLINED_1 = 'Картата е с недостатъчно средства за извършване на трансакцията или сте достигнали лимита на картата си.
        <br>
        <br>
        За да разрешите проблема се уверете, че в картата има достатъчно средства или използвайте друга карта, за да извършите плащането.';
        $TEXT_DECLINED_2 = '3D Secure е мярка за сигурност, използвана за защита при онлайн покупки. Някои банки изискват тази мярка за проверка да е активна, за да разрешават трансакции.';
        $TEXT_DECLINED_2_1 = 'За да активирате 3D Secure на Вашата карта, изпълнете следните стъпки: ';
        $TEXT_DECLINED_2_2 = 'Влезте в онлайн сметката си.';
        $TEXT_DECLINED_2_3 = 'Потърсете раздела за сигурност или защита на картата.';
        $TEXT_DECLINED_2_4 = 'Следвайте инструкциите, за да активирате 3D Secure.';
        $TEXT_DECLINED_2_5 = 'Ако не искате или не можете да активирате 3D Secure, можете да опитате да извършите отново плащането с друга кредитна или дебитна карта от друга банка. Това обикновено действа и разрешава проблема.';
        
        $TEXT_DECLINED_3 = '3D Secure е мярка за сигурност, използвана за защита при онлайн покупки. Ако проверката с 3D Secure не е успешна, не можем да разрешим трансакцията.
        <br>
        <br>
        Уверете се, че проверката с 3D Secure е успешна или използвайте друга карта от друга банка, за да извършите плащането.';
        $TEXT_DECLINED_4 = 'Проверката с 3D Secure е мярка за сигурност, използвана за защита при онлайн покупки. Ако тя не е изпълнена правилно или не е активирана във Вашата банка, не можем да разрешим трансакцията.
        <br>
        <br>
        Активирайте проверката с 3D Secure във Вашата банка или опитайте отново, като се уверите, че въвеждате кода правилно. 
        <br>
        <br>
        Можете също да опитате с друга кредитна или дебитна карта от друга банка, за да извършите плащането.';
        
        $TEXT_DECLINED_5 = 'Въпреки че този вид проблем може да възниква от време на време, не се притеснявайте. Това е нормално. Някои доставчици на карти имат чувствителни системи за сигурност и ще отхвърлят трансакции, подобни на тази.
        <br>
        <br>
        Ето какво да направите след това: можете да опитате да извършите трансакцията с друга карта. Това обикновено действа и разрешава проблема.
        ';
        $TEXT_DECLINED_6 = 'Не забравяйте да проверите и да се уверите, че сте въвели правилно цялата информация за Вашата карта, включително името на картодържателя, номера, датата на валидност и кода за сигурност.  
        <br>
        <br>
        Ако проблемът продължава, използвайте друга карта, за да завършите трансакцията.';
        $TEXT_DECLINED_8 = 'Това е нещо, което може да се случи от време на време. Трансакцията не може да бъде завършена поради грешка в комуникацията с банката.
        <br>
        <br>
        Изчакайте няколко минути, за да извършите трансакцията отново, или използвайте друга карта, за да извършите плащането.';
 
        $TEXT_DECLINED_12 = 'Кодът за сигурност (CVV) е три- или четирицифрено число, намиращо се на гърба на картата, което се използва за потвърждаване на самоличността на картодържателя.  
        <br>
        <br>
        Не забравяйте да проверите и да се уверите, че сте въвели правилно CVV номера. 
        <br>
        <br>
        Ако проблемът продължава, опитайте с друга карта, за да завършите трансакцията.
        ';
        $TEXT_DECLINED_13 = 'За да разрешите проблема, опитайте с друга карта. Не забравяйте да проверите и да се уверите, че сте въвели цялата информация за картата правилно и че имате достатъчно средства, за да завършите трансакцията.  
        <br>
        <br>
        Вашата информация за плащане е на сигурно място при нас и очакваме с нетърпение да Ви помогнем да завършите трансакцията си успешно.';
        $TEXT_DECLINED_14 = 'Срокът на валидност е датата, до която картата е валидна.
        <br>
        <br>
        За да разрешите проблема, не забравяйте да проверите и да се уверите, че сте въвели правилно датата на изтичане на картата. 
        <br>
        <br>
        Ако картата е изтекла, използвайте друга валидна карта, за да извършите трансакцията';
        $TEXT_DECLINED_15 = 'Въпреки че този тип проблем може да възникне от време на време, не се притеснявайте. Вашата информация за плащане е в безопасност при нас. За да разрешите проблема, не забравяйте да проверите и да се уверите, че сте въвели цялата си информация за плащане правилно. 
        <br>
        <br>
        Използвайте само латински символи и не използвайте специални символи.
        <br>
        <br>
        Можете също да опитате да извършите плащането с друга карта. Това обикновено действо и разрешава проблема.';
        $TEXT_DECLINED_16 = 'В момента приемаме само VISA или MasterCard. Ако използвате друг тип карта, няма да можем да обработим Вашата трансакция.
        <br>
        <br>
        За да разрешите проблема, използвайте VISA или MasterCard и не забравяйте да проверите и да се уверите, че сте въвели цялата информация за плащане правилно, за да извършите трансакцията.';
        //boton
        $TEXT_BOTON_DECLINED = 'Пробвайте отново';
        break;


    case 'cs':
        
        $TITTLE_DECLINED = 'Transakci se bohužel nepovedlo provést';
        $TITTLE_DECLINED_1 = 'Na kartě není dostatek prostředků nebo byl dosažen platební limit';
        $TITTLE_DECLINED_2 = 'Vaše karta nemá aktivováno zabezpečení 3D Secure';
        $TITTLE_DECLINED_3 = 'Nezdařilo se ověření pomocí zabezpečení 3D Secure';
        $TITTLE_DECLINED_4 = 'Platnost transakce vypršela';
        $TITTLE_DECLINED_5 = 'Náš bezpečnostní systém zjistil chybu';
        $TITTLE_DECLINED_6 = 'Zadané číslo karty je neplatné';
        $TITTLE_DECLINED_8 = 'Chyba komunikace s bankou';
        $TITTLE_DECLINED_12 = 'Neplatný bezpečnostní kód (CVV) karty';
        $TITTLE_DECLINED_13 = 'Je možné, že karta je zablokována, nemá dostatek prostředků, nebo je její použití limitováno';
        $TITTLE_DECLINED_14 = 'Karta je prošlá, nebo jste zadali neplatné datum expirace';
        $TITTLE_DECLINED_15 = 'Vyskytl se problém s neznámou příčinou';
        $TITTLE_DECLINED_16 = 'Nepodporovaný typ karty';


        //TEXT_DECILNED TEXT DEL ERROR
        $TEXT_DECLINED_1 = 'Na kartě není dostatek prostředků k provedení transakce, nebo byl dosažen její limit.
        <br>
        <br>
        Pro vyřešení problému ověřte, zda je na kartě dostatek prostředků, nebo platbu proveďte jinou kartu.';
        $TEXT_DECLINED_2 = '3D Secure je bezpečnostní funkce, která chrání online nákupy. Některé banky ke schválení transakce vyžadují, aby tato ověřovací funkce byla aktivní.';
        $TEXT_DECLINED_2_1 = 'Zabezpečení 3D Secure aktivujte na své kartě následujícími kroky: ';
        $TEXT_DECLINED_2_2 = 'Přejděte na svůj online bankovní účet. ';
        $TEXT_DECLINED_2_3 = 'Najděte sekci Zabezpečení nebo Ochrana karty.';
        $TEXT_DECLINED_2_4 = 'Řiďte se podle pokynů, které vám umožní zabezpečení 3D Secure aktivovat.';
        $TEXT_DECLINED_2_5 = 'Pokud 3D Secure aktivovat nechcete, nebo to nelze provést, můžete se o platbu pokusit znovu s jinou kreditní nebo debetní kartou od jiné banky. Toto obvykle funguje a problém se vyřeší.';
                
        $TEXT_DECLINED_3 = '3D Secure je bezpečnostní funkce, která chrání online nákupy. Pokud ověření pomocí zabezpečení 3D Secure neproběhne úspěšně, nemůžeme transakci schválit.
        <br>
        <br>
        Zajistěte, aby ověření pomocí funkce 3D Secure proběhlo úspěšně, nebo k provedení platby použijte jinou kartu od jiné banky.';
        $TEXT_DECLINED_4 = '3D Secure je bezpečnostní funkce, která chrání online nákupy. Pokud neproběhne správně nebo ji vaši banka nemá aktivovanou, transakci nelze schválit.
        <br>
        <br>
        Aktivujte si ověření pomocí funkce 3D Secure u své banky, nebo se pokuste platbu provést znovu a přesvědčete se, že zadáváte kód správně. 
        <br>
        <br>
        Také můžete zkusit použít jinou kreditní nebo debetní kartu od jiné banky.';
                
        $TEXT_DECLINED_5 = 'Tento problém se čas od času přihodí, ale nemusíte se ničeho obávat. Je to běžné. Někteří poskytovatelé karet mají citlivý bezpečnostní systém a podobné transakce odmítnou.
        <br>
        <br>
        Dál postupujte takto: Zkuste platbu provést jinou kartou. Toto obvykle funguje a problém se vyřeší.';
        $TEXT_DECLINED_6 = 'Přesvědčete se, že všechny údaje o kartě zadáváte správně (jméno držitele karty, číslo karty, datum expirace a bezpečnostní kód).  
        <br>
        <br>
        Pokud se problém nevyřeší, použijte k provedení transakce jinou kartu.';
        $TEXT_DECLINED_8 = 'Tato věc se občas stává. Transakci se nepovedlo provést kvůli chybě při komunikaci s bankou.
        <br>
        <br>
        Počkejte prosím několik minut a zkuste zaplatit znovu, nebo k provedení platby použijte jinou kartu.';
        
        $TEXT_DECLINED_12 = 'Bezpečnostní kód (CVV) je třímístné nebo čtyřmístné číslo na zadní straně karty, které se používá k ověření totožnosti držitele karty.  
        <br>
        <br>
        Při zadávání čísla CVV se přesvědčete, že ho zapisujete správně. 
        <br>
        <br>
        Pokud se problém nevyřeší, použijte k provedení transakce jinou kartu.';
        $TEXT_DECLINED_13 = 'Problém vyřešte použitím jiné karty. Přesvědčete se, že všechny údaje karty zadáváte správně a že máte k provedení transakce dostatek prostředků.  
        <br>
        <br>
        Vaše platební údaje jsou u nás v bezpečí a budeme rádi, když vám pomůžeme transakci úspěšně dokončit.';
        $TEXT_DECLINED_14 = 'Datum expirace značí, do kdy je karta platná.
        <br>
        <br>
        Pro vyřešení problému se přesvědčete, že datum expirace karty zadáváte správně. 
        <br>
        <br>
        Pokud je karta prošlá, použijte k dokončení transakce jinou kartu, která je platná.';
        $TEXT_DECLINED_15 = 'Tento typ problému se sice čas od času přihodí, ale nemusíte se obávat, vaše platební údaje jsou u nás v bezpečí. Pro vyřešení problému se přesvědčete, že všechny platební údaje zadáváte správně. 
        <br>
        <br>
        Používejte pouze znaky latinské abecedy a vyhněte se speciálním znakům.
        <br>
        <br>
        Také můžete zkusit zaplatit jinou kartou. Toto obvykle funguje a problém se vyřeší.';
        $TEXT_DECLINED_16 = 'V současné době přijímáme pouze karty VISA a Mastercard. Pokud používáte jiný typ karty, nepůjde nám transakce zpracovat.
        <br>
        <br>
        Pro vyřešení problému prosím použijte kartu VISA nebo Mastercard a přesvědčete se, že všechny platební údaje k provedení transakce zadáváte správně.';
        //boton
        $TEXT_BOTON_DECLINED = 'Zkusit znovu';
        break;


    case 'da':
        
        $TITTLE_DECLINED = 'Beklager, transaktionen kunne ikke gennemføres';
        $TITTLE_DECLINED_1 = 'Kortet mangler tilstrækkelige midler eller betalingsgrænsen er nået';
        $TITTLE_DECLINED_2 = 'Dit korts 3D Secure er ikke aktiveret';
        $TITTLE_DECLINED_3 = '3D Secure-verificering mislykkedes';
        $TITTLE_DECLINED_4 = 'Transaktionen er udløbet';
        $TITTLE_DECLINED_5 = 'Vores sikkerhedssystem har opdaget en fejl';
        $TITTLE_DECLINED_6 = 'Det indtastede kortnummer er ugyldigt';
        $TITTLE_DECLINED_8 = 'Kommunikationsfejl med banken';
        $TITTLE_DECLINED_12 = 'Ugyldig sikkerhedskode (CVV) på dit kort';
        $TITTLE_DECLINED_13 = 'Kortet kan være spærret, kan ikke have tilstrækkelig kredit eller kan have en begrænsning';
        $TITTLE_DECLINED_14 = 'Kortet er muligvis udløbet, eller den indtastede udløbsdato er ugyldig';
        $TITTLE_DECLINED_15 = 'Noget gik galt på grund af et ukendt problem';
        $TITTLE_DECLINED_16 = 'Korttypen understøttes ikke';


        //TEXT_DECILNED TEXT DEL ERROR
        $TEXT_DECLINED_1 = 'Kortet har ikke tilstrækkelige midler til at gennemføre transaktionen, eller du kan have nået din kortgrænse.
        <br>
        <br>
        For at løse problemet skal du sikre dig, at der er tilstrækkeligt med penge på dit kort, eller bruge et andet kort til at gennemføre betalingen.';
        $TEXT_DECLINED_2 = '3D Secure er en sikkerhedsforanstaltning, der bruges til at beskytte onlinekøb. Nogle banker kræver, at denne kontrolforanstaltning skal være aktiv for at kunne godkende transaktioner.';
        $TEXT_DECLINED_2_1 = 'For at aktivere 3D Secure på dit kort skal du følge disse trin: ';
        $TEXT_DECLINED_2_2 = 'Få adgang til din banks onlinekonto. ';
        $TEXT_DECLINED_2_3 = 'Se efter afsnittet om sikkerhed eller kortbeskyttelse.';
        $TEXT_DECLINED_2_4 = 'Følg instruktionerne for at aktivere 3D Secure.';
        $TEXT_DECLINED_2_5 = 'Hvis du ikke ønsker eller ikke kan aktivere 3D Secure, kan du forsøge at foretage betalingen igen med et andet kredit- eller betalingskort fra en anden bank. Dette virker som regel og løser problemet.';
                
        $TEXT_DECLINED_3 = '3D Secure er en sikkerhedsforanstaltning, der bruges til at beskytte onlinekøb. Hvis 3D Secure-verificeringen ikke lykkes, kan vi ikke godkende transaktionen.
        <br>
        <br>
        Sørg for, at 3D Secure-verificeringen er lykkedes, eller brug et andet kort fra en anden bank til at gennemføre betalingen.';
        $TEXT_DECLINED_4 = '3D Secure-verificering er en sikkerhedsforanstaltning, der bruges til at beskytte onlinekøb. Hvis den ikke er gennemført korrekt eller ikke er aktiveret i din bank, kan vi ikke godkende transaktionen.
        <br>
        <br>
        Aktivér 3D Secure-verificering i din bank, eller prøv igen og sørg for at indtaste koden korrekt. 
        <br>
        <br>
        Du kan også prøve et andet kredit- eller debetkort fra en anden bank for at gennemføre betalingen.';
                
        $TEXT_DECLINED_5 = 'Selvom denne slags problemer kan forekomme fra tid til anden, skal du ikke være bekymret. Det er normalt. Nogle kortudbydere har et følsomt sikkerhedssystem og vil afvise transaktioner som denne.
        <br>
        <br>
        Her er, hvad du skal gøre som det næste: Du kan prøve at gennemføre transaktionen med et andet kort. Dette virker som regel og løser problemet.
        ';
        $TEXT_DECLINED_6 = 'Sørg for at kontrollere og verificere, at du har indtastet alle dine kortoplysninger korrekt, herunder kortindehaverens navn, nummer, udløbsdato og sikkerhedskode.  
        <br>
        <br>
        Hvis problemet fortsætter, bedes du bruge et andet kort til at gennemføre transaktionen.';
        $TEXT_DECLINED_8 = 'Dette sker en gang i mellem. Transaktionen kunne ikke gennemføres på grund af en kommunikationsfejl med banken.
        <br>
        <br>
        Vent venligst et par minutter for at gennemføre transaktionen igen eller brug et andet kort til at gennemføre betalingen.';
        
        $TEXT_DECLINED_12 = 'Sikkerhedskoden (CVV) er et tre- eller firecifret nummer på bagsiden af dit kort og bruges til at bekræfte kortindehaverens identitet.  
        <br>
        <br>
        Sørg for at kontrollere og verificere, at du har indtastet CVV-nummeret korrekt. 
        <br>
        <br>
        Hvis problemet fortsætter, bedes du bruge et andet kort til at gennemføre transaktionen.
        ';
        $TEXT_DECLINED_13 = 'For at løse problemet skal du prøve et andet kort. Sørg for at kontrollere og verificere, at du har indtastet alle kortoplysningerne korrekt, og at du har tilstrækkelige midler til at gennemføre transaktionen.  
        <br>
        <br>
        Dine betalingsoplysninger er sikre hos os, og vi ser frem til at hjælpe dig med at gennemføre din transaktion.';
        $TEXT_DECLINED_14 = 'Udløbsdatoen er den dato, som kortet er gyldigt indtil.
        <br>
        <br>
        For at løse problemet skal du kontrollere og verificere, at du har indtastet kortets udløbsdato korrekt. 
        <br>
        <br>
        Hvis kortet er udløbet, skal du bruge et andet gyldigt kort til at gennemføre transaktionen';
        $TEXT_DECLINED_15 = 'Selvom denne type problemer kan opstå fra tid til anden, skal du ikke være bekymret, dine betalingsoplysninger er sikre hos os. For at løse problemet skal du kontrollere og verificere, at du har indtastet alle dine betalingsoplysninger korrekt. 
        <br>
        <br>
        Brug kun latinske tegn, og brug ikke specialtegn.
        <br>
        <br>
        Du kan også forsøge at gennemføre betalingen med et andet kort. Dette virker som regel og løser problemet.';
        $TEXT_DECLINED_16 = 'På nuværende tidspunkt accepterer vi kun VISA eller MasterCard. Hvis du bruger en anden korttype, vil vi ikke kunne behandle din transaktion.
        <br>
        <br>
        For at løse problemet skal du bruge et VISA- eller MasterCard og sørge for at kontrollere og verificere, at du har indtastet alle betalingsoplysninger korrekt, så transaktionen kan gennemføres.';
        //boton
        $TEXT_BOTON_DECLINED = 'Prøv igen';
        break;


    case 'de': 
        
        $TITTLE_DECLINED = 'Entschuldigung, doch die Transaktion konnte nicht abgeschlossen werden.';
        $TITTLE_DECLINED_1 = 'Karte mit unzureichender Deckung oder Zahlungslimit erreicht';
        $TITTLE_DECLINED_2 = '3D Secure ist auf Ihrer Karte nicht aktiviert';
        $TITTLE_DECLINED_3 = '3D Secure-Überprüfung fehlgeschlagen';
        $TITTLE_DECLINED_4 = 'Die Transaktion ist abgelaufen';
        $TITTLE_DECLINED_5 = 'Unser Sicherheitssystem hat einen Fehler entdeckt';
        $TITTLE_DECLINED_6 = 'Die eingegebene Kartennummer ist ungültig';
        $TITTLE_DECLINED_8 = 'Kommunikationsfehler mit der Bank';
        $TITTLE_DECLINED_12 = 'Ungültiger Sicherheitscode (CVV) Ihrer Karte';
        $TITTLE_DECLINED_13 = 'Die Karte ist möglicherweise gesperrt, verfügt über kein ausreichendes Guthaben oder hat eine Limitierung.';
        $TITTLE_DECLINED_14 = 'Die Karte ist möglicherweise abgelaufen oder das eingegebene Gültigkeitsdatum ist ungültig';
        $TITTLE_DECLINED_15 = 'Ein unbekanntes Problem ist aufgetreten';
        $TITTLE_DECLINED_16 = 'Kartentyp wird nicht unterstützt';
      
      
        //TEXT_DECILNED TEXT DEL ERROR
        $TEXT_DECLINED_1 = 'Die Karte ist nicht ausreichend gedeckt, um die Transaktion abzuschließen oder Ihr Kartenlimit wurde erreicht.
        <br>
        <br>
        Um das Problem zu beheben, vergewissern Sie sich bitte, dass Ihre Karte über ausreichend Guthaben verfügt oder verwenden Sie eine andere Karte, um die Zahlung durchzuführen.';
        $TEXT_DECLINED_2 = '3D Secure ist eine Sicherheitsmaßnahme, die zum Schutz von Online-Einkäufen verwendet wird. Einige Banken verlangen, dass diese Verifizierungsmaßnahme aktiv ist, um Transaktionen zu autorisieren.';
        $TEXT_DECLINED_2_1 = 'Um 3D Secure auf Ihrer Karte zu aktivieren, folgen Sie bitte diesen Anweisungen: ';
        $TEXT_DECLINED_2_2 = 'Melden Sie sich beim Online-Konto Ihrer Bank an. ';
        $TEXT_DECLINED_2_3 = 'Suchen Sie nach dem Abschnitt „Sicherheit“ oder „Kartenschutz“.';
        $TEXT_DECLINED_2_4 = 'Folgen Sie den Anweisungen, um 3D Secure zu aktivieren.';
        $TEXT_DECLINED_2_5 = 'Wenn Sie 3D Secure nicht aktivieren wollen oder können, dann versuchen Sie bitte die Zahlung mit einer weiteren Kredit- oder Debitkarte einer anderen Bank vorzunehmen. Das funktioniert meistens und behebt das Problem.';
              
        $TEXT_DECLINED_3 = '3D Secure ist eine Sicherheitsmaßnahme, die zum Schutz von Online-Einkäufen verwendet wird. Wenn die Überprüfung mit 3D Secure nicht erfolgreich ist, können wir die Transaktion nicht autorisieren.
        <br>
        <br>
        Bitte vergewissern Sie sich, dass die Überprüfung mit 3D Secure erfolgreich war oder verwenden Sie eine weitere Karte einer anderen Bank, um die Zahlung abzuschließen.';
        $TEXT_DECLINED_4 = 'Die Überprüfung mit 3D Secure ist eine Sicherheitsmaßnahme zum Schutz von Online-Einkäufen. Wenn sie nicht korrekt ausgeführt wird oder in Ihrer Bank nicht aktiviert ist, können wir die Transaktion nicht autorisieren.
        <br>
        <br>
        Bitte aktivieren Sie die Funktion „3D Secure“ bei Ihrer Bank oder versuchen Sie es erneut und geben Sie den Code korrekt ein. 
        <br>
        <br>
        Sie können auch eine weitere Kredit- oder Debitkarte einer anderen Bank verwenden, um die Zahlung abzuschließen.';
              
        $TEXT_DECLINED_5 = 'Dieses Problem kann ab und zu auftreten, aber machen Sie sich keine Sorgen. Das ist ganz normal. Einige Kartenanbieter haben ein besonders sensibles Sicherheitssystem und lehnen Transaktionen wie diese ab.
        <br>
        <br>
        Folgendes sollten Sie als nächstes tun: Sie können versuchen, die Transaktion mit einer anderen Karte abzuschließen. Das funktioniert oftmals und behebt das Problem.
        ';
        $TEXT_DECLINED_6 = 'Vergewissern Sie sich, dass Sie alle Karteninformationen korrekt eingegeben haben, einschließlich des Namens des Karteninhabers, der Kartennummer, des Gültigkeitsdatums und des Sicherheitscodes.  
        <br>
        <br>
        Sollte das Problem weiterhin bestehen, verwenden Sie bitte eine andere Karte, um die Transaktion abzuschließen.';
        $TEXT_DECLINED_8 = 'Das kann manchmal vorkommen. Die Transaktion konnte aufgrund eines Kommunikationsfehlers mit der Bank nicht abgeschlossen werden.
        <br>
        <br>
        Bitte warten Sie ein paar Minuten, um die Transaktion erneut abzuschließen oder verwenden Sie eine andere Karte, um die Zahlung vorzunehmen.';
       
        $TEXT_DECLINED_12 = 'Der Sicherheitscode (CVV) ist eine drei- oder vierstellige Zahl, die sich auf der Rückseite Ihrer Karte befindet und dazu dient, die Identität des Karteninhabers zu überprüfen.  
        <br>
        <br>
        Vergewissern Sie sich, dass Sie die CVV-Nummer korrekt eingegeben haben. 
        <br>
        <br>
        Sollte das Problem weiterhin bestehen, versuchen Sie es mit einer anderen Karte, um die Transaktion abzuschließen.
        ';
        $TEXT_DECLINED_13 = 'Um das Problem zu beheben, versuchen Sie es bitte mit einer anderen Karte. Vergewissern Sie sich, dass Sie alle Kartendaten korrekt eingegeben haben und dass Sie über genügend Geldmittel verfügen, um die Transaktion durchzuführen.  
        <br>
        <br>
        Ihre Zahlungsinformationen sind bei uns sicher und wir freuen uns darauf, Ihnen zu helfen, Ihre Transaktion erfolgreich abzuschließen.';
        $TEXT_DECLINED_14 = 'Das Ablaufdatum ist das Datum, bis zu dem die Karte gültig ist.
        <br>
        <br>
        Um das Problem zu beheben, sollten Sie überprüfen, ob Sie das Ablaufdatum der Karte korrekt eingegeben haben. 
        <br>
        <br>
        Wenn die Karte abgelaufen ist, verwenden Sie eine andere gültige Karte, um die Transaktion abzuschließen.';
        $TEXT_DECLINED_15 = 'Auch wenn solche Probleme gelegentlich auftreten können, machen Sie sich keine Sorgen, Ihre Zahlungsinformationen sind bei uns sicher. Um das Problem zu beheben, sollten Sie überprüfen, ob Sie alle Zahlungsinformationen korrekt eingegeben haben. 
        <br>
        <br>
        Verwenden Sie nur lateinische Buchstaben und keine Sonderzeichen.
        <br>
        <br>
        Sie können auch versuchen, die Zahlung mit einer anderen Karte durchzuführen. Das funktioniert meistens und behebt das Problem.';
        $TEXT_DECLINED_16 = 'Zur Zeit akzeptieren wir nur VISA oder MasterCard. Wenn Sie einen anderen Kartentyp verwenden, können wir Ihre Transaktion nicht bearbeiten.
        <br>
        <br>
        Um das Problem zu beheben, verwenden Sie bitte eine VISA oder MasterCard und stellen Sie sicher, dass Sie alle Zahlungsinformationen korrekt eingegeben haben, um die Transaktion abzuschließen.';
        //boton
        $TEXT_BOTON_DECLINED = 'Versuchen Sie es erneut';
        break;
    case 'el':
        
        $TITTLE_DECLINED = 'Λυπούμαστε, η συναλλαγή δεν ήταν δυνατό να ολοκληρωθεί';
        $TITTLE_DECLINED_1 = 'Κάρτα με ανεπαρκές υπόλοιπο ή υπέρβαση του ορίου πληρωμής';
        $TITTLE_DECLINED_2 = 'Το 3D Secure της κάρτας σας δεν είναι ενεργοποιημένο';
        $TITTLE_DECLINED_3 = 'Η επαλήθευση 3D Secure απέτυχε';
        $TITTLE_DECLINED_4 = 'Η συναλλαγή έχει λήξει';
        $TITTLE_DECLINED_5 = 'Το σύστημα ασφαλείας μας εντόπισε ένα σφάλμα';
        $TITTLE_DECLINED_6 = 'Ο αριθμός της κάρτας που εισαγάγατε δεν είναι έγκυρος';
        $TITTLE_DECLINED_8 = 'Σφάλμα επικοινωνίας με την τράπεζα';
        $TITTLE_DECLINED_12 = 'Μη έγκυρος κωδικός ασφαλείας (CVV) της κάρτας σας';
        $TITTLE_DECLINED_13 = 'Η κάρτα ενδέχεται να είναι μπλοκαρισμένη, να μην διαθέτει επαρκές πίστωση ή να έχει κάποιον περιορισμό';
        $TITTLE_DECLINED_14 = 'Η κάρτα ενδέχεται να έχει λήξει ή η ημερομηνία λήξης που καταχωρίσατε να μην είναι έγκυρη';
        $TITTLE_DECLINED_15 = 'Κάτι πήγε στραβά λόγω άγνωστου προβλήματος';
        $TITTLE_DECLINED_16 = 'Ο τύπος κάρτας δεν υποστηρίζεται';


        //TEXT_DECILNED TEXT DEL ERROR
        $TEXT_DECLINED_1 = 'Κάρτα με ανεπαρκές υπόλοιπο για την ολοκλήρωση της συναλλαγής ή πιθανή υπέρβαση του ορίου της κάρτας σας.
        <br>
        <br>
        Για να διορθώσετε το πρόβλημα, βεβαιωθείτε ότι η κάρτα σας έχει επαρκές υπόλοιπο ή χρησιμοποιήστε διαφορετική κάρτα για να ολοκληρώσετε την πληρωμή.';
        $TEXT_DECLINED_2 = 'Το 3D Secure είναι ένα μέτρο ασφαλείας που χρησιμοποιείται για την προστασία των διαδικτυακών αγορών. Ορισμένες τράπεζες απαιτούν αυτό το μέτρο επαλήθευσης να είναι ενεργό, προκειμένου να εξουσιοδοτούν τις συναλλαγές.';
        $TEXT_DECLINED_2_1 = 'Για να ενεργοποιήσετε το 3D Secure στην κάρτα σας, ακολουθήστε τα εξής βήματα: ';
        $TEXT_DECLINED_2_2 = 'Συνδεθείτε στον ηλεκτρονικό λογαριασμό της τράπεζάς σας. ';
        $TEXT_DECLINED_2_3 = 'Αναζητήστε την ενότητα ασφάλειας ή προστασίας κάρτας.';
        $TEXT_DECLINED_2_4 = 'Ακολουθήστε τις οδηγίες για να ενεργοποιήσετε το 3D Secure.';
        $TEXT_DECLINED_2_5 = 'Εάν δεν θέλετε ή δεν μπορείτε να ενεργοποιήσετε το 3D Secure, μπορείτε να προσπαθήσετε να πραγματοποιήσετε εκ νέου την πληρωμή με διαφορετική πιστωτική ή χρεωστική κάρτα άλλης τράπεζας. Αυτό συνήθως επιλύει το πρόβλημα.';
                
        $TEXT_DECLINED_3 = 'Το 3D Secure είναι ένα μέτρο ασφαλείας που χρησιμοποιείται για την προστασία των διαδικτυακών αγορών. Εάν η επαλήθευση 3D Secure δεν είναι επιτυχής, δεν μπορούμε να εξουσιοδοτήσουμε τη συναλλαγή.
        <br>
        <br>
        Βεβαιωθείτε ότι η επαλήθευση 3D Secure είναι επιτυχής ή χρησιμοποιήστε διαφορετική κάρτα άλλης τράπεζας για να ολοκληρώσετε την πληρωμή.';
        $TEXT_DECLINED_4 = 'Η επαλήθευση 3D Secure είναι ένα μέτρο ασφαλείας που χρησιμοποιείται για την προστασία των διαδικτυακών αγορών. Εάν δεν εκτελεστεί σωστά ή δεν είναι ενεργοποιημένο στην τράπεζά σας, δεν μπορούμε να εξουσιοδοτήσουμε τη συναλλαγή.
        <br>
        <br>
        Ενεργοποιήστε την επαλήθευση 3D Secure στην τράπεζά σας ή προσπαθήστε ξανά, φροντίζοντας να εισαγάγετε σωστά τον κωδικό. 
        <br>
        <br>
        Μπορείτε επίσης να δοκιμάσετε να χρησιμοποιήσετε μια διαφορετική πιστωτική ή χρεωστική κάρτα άλλης τράπεζας για να ολοκληρώσετε την πληρωμή.';
                
        $TEXT_DECLINED_5 = 'Αν και αυτό το πρόβλημα ενδέχεται να παρουσιάζεται κατά διαστήματα, μην ανησυχείτε. Είναι φυσιολογικό. Ορισμένοι πάροχοι καρτών διαθέτουν ευαίσθητο σύστημα ασφαλείας και απορρίπτουν συναλλαγές παρόμοιες με αυτήν.
        <br>
        <br>
        Δείτε τι πρέπει να κάνετε στη συνέχεια: Μπορείτε να δοκιμάσετε να ολοκληρώσετε τη συναλλαγή με διαφορετική κάρτα. Αυτό συνήθως επιλύει το πρόβλημα.';

        $TEXT_DECLINED_6 = 'Βεβαιωθείτε ότι έχετε ελέγξει και επαληθεύσει ότι έχετε εισαγάγει σωστά όλα τα στοιχεία της κάρτας σας, συμπεριλαμβανομένου του ονόματος του κατόχου της κάρτας, του αριθμού της, της ημερομηνίας λήξης και του κωδικού ασφαλείας.  
        <br>
        <br>
        Εάν το πρόβλημα παραμένει, χρησιμοποιήστε διαφορετική κάρτα για να ολοκληρώσετε τη συναλλαγή.';
        $TEXT_DECLINED_8 = 'Αυτό είναι κάτι που μπορεί να συμβεί κατά διαστήματα. Η συναλλαγή δεν ήταν δυνατό να ολοκληρωθεί λόγω σφάλματος επικοινωνίας με την τράπεζα.
        <br>
        <br>
        Περιμένετε λίγα λεπτά για να προσπαθήσετε να ολοκληρώσετε ξανά τη συναλλαγή ή χρησιμοποιήστε διαφορετική κάρτα για να ολοκληρώσετε την πληρωμή.';
        
        $TEXT_DECLINED_12 = 'Ο κωδικός ασφαλείας (CVV) είναι ένας τριψήφιος ή τετραψήφιος αριθμός, ο οποίος βρίσκεται στο πίσω μέρος της κάρτας σας και χρησιμοποιείται για την επαλήθευση της ταυτότητας του κατόχου της κάρτας.  
        <br>
        <br>
        Ελέγξτε και επαληθεύστε ότι έχετε εισαγάγει σωστά τον αριθμό CVV. 
        <br>
        <br>
        Εάν το πρόβλημα παραμένει, χρησιμοποιήστε διαφορετική κάρτα για να ολοκληρώσετε τη συναλλαγή.
        ';
        $TEXT_DECLINED_13 = 'Για να επιλύσετε το πρόβλημα, δοκιμάστε να χρησιμοποιήσετε μια διαφορετική κάρτα. Ελέγξτε και επαληθεύστε ότι έχετε εισαγάγει σωστά όλα τα στοιχεία της κάρτας και ότι έχετε επαρκές υπόλοιπο για να ολοκληρώσετε τη συναλλαγή.  
        <br>
        <br>
        Διατηρούμε ασφαλή τα στοιχεία πληρωμής σας και είμαστε στη διάθεσή σας για να σας βοηθήσουμε να ολοκληρώσετε με επιτυχία τη συναλλαγή σας.';
        $TEXT_DECLINED_14 = 'Η ημερομηνία λήξης είναι η ημερομηνία μέχρι την οποία ισχύει η κάρτα.
        <br>
        <br>
        Για να διορθώσετε το πρόβλημα, ελέγξτε και επαληθεύστε ότι έχετε εισαγάγει σωστά την ημερομηνία λήξης της κάρτας. 
        <br>
        <br>
        Εάν η κάρτα έχει λήξει, χρησιμοποιήστε μια άλλη, έγκυρη κάρτα για να ολοκληρώσετε τη συναλλαγή';
        $TEXT_DECLINED_15 = 'Αν και αυτό το είδος προβλήματος ενδέχεται να παρουσιάζεται κατά διαστήματα, μην ανησυχείτε, καθώς διατηρούμε ασφαλή τα στοιχεία πληρωμής σας. Για να διορθώσετε το πρόβλημα, ελέγξτε και επαληθεύστε ότι έχετε εισαγάγει σωστά όλα τα στοιχεία πληρωμής. 
        <br>
        <br>
        Χρησιμοποιήστε μόνο λατινικούς χαρακτήρες και μην χρησιμοποιείτε ειδικούς χαρακτήρες.
        <br>
        <br>
        Μπορείτε επίσης να δοκιμάσετε να ολοκληρώσετε την πληρωμή με διαφορετική κάρτα. Αυτό συνήθως επιλύει το πρόβλημα.';
        $TEXT_DECLINED_16 = 'Προς το παρόν, δεχόμαστε μόνο VISA ή MasterCard. Εάν χρησιμοποιείτε άλλο τύπο κάρτας, δεν θα μπορέσουμε να επεξεργαστούμε τη συναλλαγή σας.
        <br>
        <br>
        Για να επιλύσετε το πρόβλημα, χρησιμοποιήστε μια κάρτα VISA ή MasterCard και ελέγξτε και επαληθεύστε ότι έχετε εισαγάγει σωστά όλα τα στοιχεία πληρωμής για να ολοκληρώσετε τη συναλλαγή.';
        //boton
        $TEXT_BOTON_DECLINED = 'Προσπαθήστε ξανά';
        break;


    case 'en':

        $TITTLE_DECLINED = 'Sorry, the transaction could not be completed';
        
        //TEXT_DECILNED TEXT DEL ERROR

        $TITTLE_DECLINED_1 = 'Card with insufficient funds or payment limit reached';
        $TITTLE_DECLINED_2 = 'Your card\'s 3D Secure is not enabled';
        $TITTLE_DECLINED_3 = '3D Secure verification failed';
        $TITTLE_DECLINED_4 = 'Transaction is expired';
        $TITTLE_DECLINED_5 = 'Our security system has detected an error';
        $TITTLE_DECLINED_6 = 'The card number entered is invalid';
        $TITTLE_DECLINED_7 = 'Restricted card';
        $TITTLE_DECLINED_8 = 'Communication error with the bank';
        $TITTLE_DECLINED_9 = 'Transaction Declined';
        $TITTLE_DECLINED_10 = 'Authorization declined';
        $TITTLE_DECLINED_11 = 'Transaction Declined';
        $TITTLE_DECLINED_12 = 'Invalid security code (CVV) of your card';
        $TITTLE_DECLINED_13 = 'The card may be blocked, may not have sufficient credit, or may have a limitation';
        $TITTLE_DECLINED_14 = 'The card may have expired or the expiration date entered is invalid';
        $TITTLE_DECLINED_15 = 'Something went wrong due to an unknown problem';
        $TITTLE_DECLINED_16 = 'Card type not supported';


       //TEXT_DECILNED TEXT DEL ERROR
        $TEXT_DECLINED_1 = 'Card with insufficient funds to complete the transaction or you may have reached your card limit.
        <br>
        <br>
        To fix the problem, please make sure your card has sufficient funds or use a different card to complete the payment.';
        $TEXT_DECLINED_2 = '3D Secure is a security measure used to protect online purchases. Some banks require this verification measure to be active in order to authorize transactions.';
        $TEXT_DECLINED_2_1 = 'To enable 3D Secure on your card, please follow these steps: ';
        $TEXT_DECLINED_2_2 = 'Access your bank\'s online account. ';
        $TEXT_DECLINED_2_3 = 'Look for the security or card protection section.';
        $TEXT_DECLINED_2_4 = 'Follow the instructions to activate 3D Secure.';
        $TEXT_DECLINED_2_5 = 'If you do not want to or cannot activate 3D Secure, you can try again to make the payment with another credit or debit card from another bank. This usually works and resolves the problem.';
        
        $TEXT_DECLINED_3 = '3D Secure is a security measure used to protect online purchases. If the 3D Secure verification is not successful, we cannot authorize the transaction.
        <br>
        <br>
        Please make sure that the 3D Secure verification is successful or use a different card from another bank to complete the payment.';
        $TEXT_DECLINED_4 = '3D Secure verification is a security measure used to protect online purchases. If it is not performed correctly or is not enabled in your bank, we cannot authorize the transaction.
        <br>
        <br>
        Please enable 3D Secure verification at your bank or try again making sure to enter the code correctly. 
        <br>
        <br>
        You can also try another credit or debit card from another bank to complete the payment.';
        
        $TEXT_DECLINED_5 = 'Although this kind of problem can occur from time to time, don\'t worry. This is normal. Some card providers have a sensitive security system and will reject transactions similar to this one.
        <br>
        <br>
        Here\'s what to do next: You can try completing the transaction with a different card. This usually works and solves the problem.
        ';
        $TEXT_DECLINED_6 = 'Be sure to check and verify that you have entered all your card information correctly, including cardholder name, number, expiration date and security code.  
        <br>
        <br>
        If the problem persists, please use a different card to complete the transaction.';
        $TEXT_DECLINED_7 = 'The transaction has been declined. Please use a different card to pay for the transaction and be sure to enter all data correctly.';
        $TEXT_DECLINED_8 = 'This is something that may occur from time to time. The transaction could not be completed due to a communication error with the bank.
        <br>
        <br>
        Please wait a few minutes to complete the transaction again or use a different card to complete the payment.';
        $TEXT_DECLINED_9 = 'The transaction has been declined. Please use a different card to pay for the transaction and be sure to enter all data correctly.';
        $TEXT_DECLINED_10 = 'The transaction has been declined. Please use a different card to pay for the transaction and be sure to enter all data correctly.';
        $TEXT_DECLINED_11 = 'The transaction has been declined. Please use a different card to pay for the transaction and be sure to enter all data correctly.';
        $TEXT_DECLINED_12 = 'The security code (CVV) is a three or four digit number found on the back of your card and is used to verify the identity of the cardholder.  
        <br>
        <br>
        Be sure to check and verify that you have entered the CVV number correctly. 
        <br>
        <br>
        If the problem persists, try a different card to complete the transaction.
        ';
        $TEXT_DECLINED_13 = 'To solve the problem, try a different card. Be sure to check and verify that you have entered all the card information correctly and that you have sufficient funds to complete the transaction.  
        <br>
        <br>
        Your payment information is safe with us and we look forward to helping you complete your transaction successfully.';
        $TEXT_DECLINED_14 = 'The expiration date is the date until which the card is valid.
        <br>
        <br>
        To fix the problem, be sure to check and verify that you have entered the card\'s expiration date correctly. 
        <br>
        <br>
        If the card has expired, use a different valid card to complete the transaction';
        $TEXT_DECLINED_15 = 'Although this type of problem may occur from time to time, don\'t worry, your payment information is safe with us. To fix the problem, be sure to check and verify that you have entered all your payment information correctly. 
        <br>
        <br>
        Use only Latin characters and do not use special characters.
        <br>
        <br>
        You can also try to complete the payment with a different card. This usually works and resolves the problem.';
        $TEXT_DECLINED_16 = 'At this time, we only accept VISA or MasterCard. If you are using another card type, we will not be able to process your transaction.
        <br>
        <br>
        To resolve the problem, please use a VISA or MasterCard and be sure to check and verify that you have entered all payment information correctly to complete the transaction.';
        //boton
        $TEXT_BOTON_DECLINED = 'Try again';
        break;


    case 'es':
        
        $TITTLE_DECLINED = 'Lo sentimos, la transacción no ha podido ser completada';
        
        //TEXT_DECILNED TEXT DEL ERROR

        $TITTLE_DECLINED_1 = 'Tarjeta con fondos insuficientes o límite de pago alcanzado';
        $TITTLE_DECLINED_2 = 'El 3D Secure de tu tarjeta no está habilitado';
        $TITTLE_DECLINED_3 = 'La verificación 3D Secure falló';
        $TITTLE_DECLINED_4 = 'La transacción ha expirado';
        $TITTLE_DECLINED_5 = 'Nuestro sistema de seguridad ha detectado un error';
        $TITTLE_DECLINED_6 = 'El número de tarjeta introducido no es válido';
        $TITTLE_DECLINED_7 = 'Tarjeta restringida';
        $TITTLE_DECLINED_8 = 'Error de comunicación con el banco';
        $TITTLE_DECLINED_9 = 'Ocurrió un error con la transacción';
        $TITTLE_DECLINED_10 = 'La autorización fue rechazada';
        $TITTLE_DECLINED_11 = 'Transacción Declinada';
        $TITTLE_DECLINED_12 = 'Código de seguridad (CVV) de tu tarjeta no válido';
        $TITTLE_DECLINED_13 = 'Puede que la tarjeta esté bloqueada, no disponga de suficiente saldo, o que tenga alguna limitación';
        $TITTLE_DECLINED_14 = 'Puede que la tarjeta haya caducado o la fecha de caducidad introducida sea inválida';
        $TITTLE_DECLINED_15 = 'Algo salió mal debido a un problema desconocido';
        $TITTLE_DECLINED_16 = 'Tipo de tarjeta no admitido';


       //TEXT_DECILNED TEXT DEL ERROR
        $TEXT_DECLINED_1 = 'Tarjeta sin fondos suficientes para realizar la transacción o es posible que hayas alcanzado el límite de tu tarjeta.
        <br>
        <br>
        Para solucionar el problema, asegúrate de que tu tarjeta tiene suficientes fondos o utiliza otra tarjeta diferente para completar el pago.';
        $TEXT_DECLINED_2 = 'El 3D Secure es una medida de seguridad que se utiliza para proteger las compras en línea. Algunos bancos exigen que esta medida de verificación esté activa para autorizar las transacciones.';
        $TEXT_DECLINED_2_1 = 'Para activar el 3D Secure de tu tarjeta, por favor sigue estos pasos:';
        $TEXT_DECLINED_2_2 = 'Accede a tu cuenta en línea del banco.';
        $TEXT_DECLINED_2_3 = 'Busca la sección de seguridad o protección de tarjetas.';
        $TEXT_DECLINED_2_4 = 'Sigue las instrucciones para activar el 3D Secure.';
        $TEXT_DECLINED_2_5 = 'Si no quieres o no puedes activar el 3D Secure, puedes intentar nuevamente realizar el pago con otra tarjeta de crédito o débito de otro banco. Esto suele funcionar y resolver el problema.';
        
        $TEXT_DECLINED_3 = 'El 3D Secure es una medida de seguridad que se utiliza para proteger las compras en línea. Si la verificación 3D Secure no se realiza correctamente, no podemos autorizar la transacción.
        <br>
        <br>
        Por favor, asegúrate de que la verificación 3D Secure se realiza correctamente o utiliza otra tarjeta distinta de otro banco para completar el pago.';
        $TEXT_DECLINED_4 = 'La verificación 3D Secure es una medida de seguridad utilizada para proteger las compras en línea. Si no se realiza correctamente o no está habilitada en tu banco, no podemos autorizar la transacción.
        <br>
        <br>
        Por favor, habilita la verificación 3D Secure en tu banco o inténtalo de nuevo asegurándote de introducir el código correctamente.
        <br>
        <br>
        También puedes probar con otra tarjeta de crédito o débito de otro banco para completar el pago.';
        
        $TEXT_DECLINED_5 = 'Aunque este tipo de problemas pueden ocurrir de vez en cuando, no te preocupes. Esto es normal. Algunos proveedores de tarjetas tienen un sistema seguridad sensible y rechazan transacciones similares a ésta.
        <br>
        <br>
        Esto es lo que debes hacer: Intenta completar la transacción con otra tarjeta diferente. Esto suele funcionar y resolver el problema.
        ';
        $TEXT_DECLINED_6 = 'Asegúrate de revisar y verificar que has introducido correctamente todos los datos de tu tarjeta, incluyendo el nombre del titular, el número, la fecha de vencimiento y el código de seguridad.
        <br>
        <br>
        Si el problema persiste, utiliza una tarjeta diferente para completar la transacción.';
        $TEXT_DECLINED_7 = 'La transacción ha sido rechazada. Por favor usa una tarjeta distinta para realizar el pago de la transacción.';
        $TEXT_DECLINED_8 = 'Esto es algo que puede ocurrir de vez en cuando. La transacción no ha podido ser completada debido a un error de comunicación con el banco. 
        <br>
        <br>
        Espere unos minutos para volver a realizar la transacción o utilice otra tarjeta distinta para completar el pago.';
        $TEXT_DECLINED_9 = 'La transacción ha sido rechazada. Por favor usa una tarjeta distinta para realizar el pago de la transacción y asegúrese de introducir todos los datos correctamente.';
        $TEXT_DECLINED_10 = 'La transacción ha sido rechazada por introducir un número de CVV inválido. Por favor asegúrese de introducir el número de CVV correctamente o use otra tarjeta distinta para realizar el pago de la transacción.';
        $TEXT_DECLINED_11 = 'La transacción ha sido rechazada por introducir un número de tarjeta bloqueada. Por favor use otra tarjeta distinta para realizar el pago de la transacción.';
        $TEXT_DECLINED_12 = 'El código de seguridad (CVV) es un número de tres o cuatro dígitos que se encuentra en el reverso de tu tarjeta y se utiliza para verificar la identidad del titular de la tarjeta. 
        <br>
        <br>
        Asegúrate de revisar y verificar que has introducido correctamente el número CVV.
        <br>
        <br>
        Si el problema persiste, prueba con otra tarjeta diferente para completar la transacción.
        ';
        $TEXT_DECLINED_13 = 'Para solucionar el problema, prueba con otra tarjeta diferente. Asegúrate de revisar y verificar que has introducido correctamente todos los datos de la tarjeta y que dispone de saldo suficiente para completar la transacción. 
        <br>
        <br>
        Tu información de pago está segura con nosotros y esperamos poder ayudarte a completar tu transacción manera exitosa.';
        $TEXT_DECLINED_14 = 'La fecha de caducidad es la fecha hasta la que la tarjeta es válida.
        <br>
        <br>
        Para solucionar el problema, asegúrate de revisar y verificar que has introducido correctamente la fecha de caducidad de la tarjeta. 
        <br>
        <br>
        Si la tarjeta ha caducado, utiliza otra tarjeta de crédito o débito válida para completar la transacción.';
        $TEXT_DECLINED_15 = 'Aunque este tipo de problemas pueden ocurrir de vez en cuando, no te preocupes, tu información de pago está segura con nosotros. Para solucionar el problema, asegúrate de revisar y verificar que has introducido correctamente todos los datos de pago. 
        <br>
        <br>
        Usa únicamente caracteres latinos y no uses caracteres especiales.
        <br>
        <br>
        También puedes intentar completar el pago con otra tarjeta de crédito o débito distinta. Esto suele funcionar y resolver el problema.';
        $TEXT_DECLINED_16 = 'En este momento, solo aceptamos tarjetas VISA o MasterCard. Si estás utilizando otro tipo de tarjeta, no podremos procesar tu transacción. 
        <br>
        <br>
        Para solucionar el problema, utiliza una tarjeta VISA o MasterCard y asegúrate de revisar y verificar que has introducido correctamente todos los datos de pago para completar la transacción.';
        //boton
        $TEXT_BOTON_DECLINED = 'Intentar otra vez';

            
        break;


    
    case 'fi':
        
            $TITTLE_DECLINED = 'Valitettavasti tapahtumaa ei voitu suorittaa loppuun';
            $TITTLE_DECLINED_1 = 'Kortilla ei ole riittävästi varoja tai maksuraja saavutettu';
            $TITTLE_DECLINED_2 = 'Korttisi 3D Secure ei ole käytössä';
            $TITTLE_DECLINED_3 = '3D Secure -vahvistus epäonnistui';
            $TITTLE_DECLINED_4 = 'Tapahtuma on vanhentunut';
            $TITTLE_DECLINED_5 = 'Turvajärjestelmämme on havainnut virheen';
            $TITTLE_DECLINED_6 = 'Annettu kortin numero on virheellinen';
            $TITTLE_DECLINED_8 = 'Yhteysvirhe pankin kanssa';
            $TITTLE_DECLINED_12 = 'Virheellinen korttisi turvakoodi (CVV)';
            $TITTLE_DECLINED_13 = 'Kortti voi olla estetty, sillä ei ehkä ole tarpeeksi luottoa tai sillä voi olla rajoitus';
            $TITTLE_DECLINED_14 = 'Kortti voi olla vanhentunut tai syötetty viimeinen voimassaolopäivä on virheellinen';
            $TITTLE_DECLINED_15 = 'Jotain meni pieleen tuntemattoman ongelman vuoksi';
            $TITTLE_DECLINED_16 = 'Korttityyppiä ei tueta';


            //TEXT_DECILNED TEXT DEL ERROR
            $TEXT_DECLINED_1 = 'Kortin varat eivät riitä tapahtuman suorittamiseen tai olet ehkä saavuttanut korttisi rajan.
            <br>
            <br>
            Korjaa ongelma varmistamalla, että kortillasi on riittävästi varoja tai käytä toista korttia maksun suorittamiseen.';
            $TEXT_DECLINED_2 = '3D Secure on turvatoimenpide, jota käytetään suojaamaan verkko-ostoksia. Jotkut pankit vaativat että tämä varmennustoimenpide on aktiivinen, jotta pankki voi hyväksyä tapahtumia.';
            $TEXT_DECLINED_2_1 = 'Ota 3D Secure käyttöön kortillasi seuraavasti: ';
            $TEXT_DECLINED_2_2 = 'Kirjaudu sisään verkkopankkiisi. ';
            $TEXT_DECLINED_2_3 = 'Etsi turvallisuus tai kortin suojaus -osio';
            $TEXT_DECLINED_2_4 = 'Aktivoi 3D Secure noudattamalla ohjeita.';
            $TEXT_DECLINED_2_5 = 'Jos et halua tai voi aktivoida 3D Securea, voit yrittää uudelleen suorittaa maksun toisen pankin luotto- tai maksukortilla. Tämä yleensä toimii ja ratkaisee ongelman.';
                    
            $TEXT_DECLINED_3 = '3D Secure on turvatoimenpide, jota käytetään suojaamaan verkko-ostoksia. Jos 3D Securen vahvistus ei onnistu, emme voi valtuuttaa tapahtumaa.
            <br>
            <br>
            Varmista, että 3D Secure -vahvistus onnistuu, tai käytä maksun suorittamiseen toista korttia toiselta pankilta..';
            $TEXT_DECLINED_4 = '3D Secure -vahvistus on turvatoimenpide, jota käytetään suojaamaan verkko-ostoksia. Jos sitä ei suoriteta oikein tai se ei ole käytössä pankissasi, emme voi valtuuttaa tapahtumaa.
            <br>
            <br>
            Ota 3D Secure -vahvistus käyttöön pankissasi tai yritä uudelleen varmistamalla, että syötät koodin oikein. 
            <br>
            <br>
            Voit myös kokeilla toista luotto- tai maksukorttia toisesta pankista suorittaaksesi maksun loppuun.';
                    
            $TEXT_DECLINED_5 = 'Vaikka tällaista ongelmaa voi esiintyä ajoittain, älä huoli. Tämä on normaalia. Joillakin korttien tarjoajilla on herkkä turvajärjestelmä, ja ne hylkäävät tämän kaltaiset tapahtumat.
            <br>
            <br>
            Toimi seuraavasti: Voit yrittää suorittaa tapahtuman toisella kortilla. Tämä yleensä toimii ja ratkaisee ongelman.
            ';
            $TEXT_DECLINED_6 = 'Muista tarkistaa ja vahvistaa, että olet syöttänyt kaikki korttisi tiedot oikein, mukaan lukien kortinhaltijan nimi, numero, viimeinen voimassaolopäivä ja turvakoodi.  
            <br>
            <br>
            Jos ongelma jatkuu, käytä toista korttia tapahtuman suorittamiseen.';
            $TEXT_DECLINED_8 = 'Tätä voi tapahtua aika ajoin. Tapahtumaa ei voitu suorittaa pankin kanssa yhteysvirheen vuoksi.
            <br>
            <br>
            Odota muutama minuutti suorittaaksesi tapahtuman uudelleen tai käytä toista korttia suorittaaksesi maksun.';
            
            $TEXT_DECLINED_12 = 'Turvakoodi (CVV) on kolmi- tai nelinumeroinen numero, joka löytyy korttisi takaosasta ja jota käytetään kortinhaltijan henkilöllisyyden vahvistamiseen.  
            <br>
            <br>
            Muista tarkistaa ja vahvistaa, että olet syöttänyt CVV-numeron oikein. 
            <br>
            <br>
            Jos ongelma jatkuu, kokeile toista korttia suorittaaksesi tapahtuman.
            ';
            $TEXT_DECLINED_13 = 'Kokeile toista korttia ratkaistaksesi ongelman. Muista tarkistaa ja vahvistaa, että olet syöttänyt kaikki korttitiedot oikein ja että sinulla on riittävästi varoja tapahtuman suorittamiseen.  
            <br>
            <br>
            Maksutietosi ovat turvassa meillä, ja autamme mielellämme sinua suorittamaan tapahtumasi onnistuneesti.';
            $TEXT_DECLINED_14 = 'Viimeinen voimassaolopäivä on päivämäärä, johon asti kortti on voimassa.
            <br>
            <br>
            Korjaa ongelma tarkistamalla ja vahvistamalla, että olet syöttänyt kortin voimassaolopäivän oikein. 
            <br>
            <br>
            Jos kortti on vanhentunut, käytä tapahtuman suorittamiseen toista voimassa olevaa korttia';
            $TEXT_DECLINED_15 = 'Vaikka tämäntyyppisiä ongelmia saattaa ilmetä ajoittain, älä huoli, sillä maksutietosi ovat turvassa meillä. Korjaa ongelma tarkistamalla ja vahvistamalla, että olet antanut kaikki maksutietosi oikein. 
            <br>
            <br>
            Käytä vain latinalaisia merkkejä, äläkä käytä erikoismerkkejä.
            <br>
            <br>
            Voit myös yrittää suorittaa maksun toisella kortilla. Tämä yleensä toimii ja ratkaisee ongelman.';
            $TEXT_DECLINED_16 = 'Tällä hetkellä hyväksymme vain VISA- tai MasterCard-kortit. Jos käytät toista korttityyppiä, emme voi käsitellä tapahtumaasi.
            <br>
            <br>
            Ratkaise ongelma käyttämällä VISA- tai MasterCard-korttia ja varmista, että olet antanut kaikki maksutiedot oikein tapahtuman suorittamiseksi.';
            //boton
            $TEXT_BOTON_DECLINED = 'Yritä uudelleen';
        break;


    case 'fr':
       
        $TITTLE_DECLINED = 'Nous sommes désolés, la transaction n\'a pas pu être complétée';
        $TITTLE_DECLINED_1 = 'Carte avec fonds insuffisants ou limite de paiement atteinte';
        $TITTLE_DECLINED_2 = 'Le 3D Secure de votre carte n\'est pas activé';
        $TITTLE_DECLINED_3 = 'La vérification 3D Secure a échoué';
        $TITTLE_DECLINED_4 = 'La transaction a expiré';
        $TITTLE_DECLINED_5 = 'Notre système de sécurité a détecté une erreur';
        $TITTLE_DECLINED_6 = 'Le numéro de carte saisi n\'est pas valide';
        $TITTLE_DECLINED_8 = 'Erreur de communication avec la banque';
        $TITTLE_DECLINED_12 = 'Code de sécurité (CVV) de votre carte non valide';
        $TITTLE_DECLINED_13 = 'Il se peut que la carte soit bloquée, qu\'elle n\'ait pas assez de solde, ou qu\'elle ait certaines limitations';
        $TITTLE_DECLINED_14 = 'Il se peut que la carte ait expiré ou que la date d\'expiration saisie soit invalide';
        $TITTLE_DECLINED_15 = 'Quelque chose a mal tourné en raison d\'un problème inconnu';
        $TITTLE_DECLINED_16 = 'Type de carte non accepté';


        $TEXT_DECLINED_1 = "La carte n'a pas assez de fonds pour effectuer la transaction ou il est possible que vous ayez atteint la limite de votre carte.
        <br>
        <br>
        Pour résoudre le problème, assurez-vous que votre carte a suffisamment de fonds ou utilisez une autre carte pour compléter le paiement.";
        $TEXT_DECLINED_2 = "Le 3D Secure est une mesure de sécurité utilisée pour protéger les achats en ligne. Certains banques exigent que cette mesure de vérification soit active pour autoriser les transactions.";
        $TEXT_DECLINED_2_1 = "Pour activer le 3D Secure de votre carte, veuillez suivre ces étapes :";
        $TEXT_DECLINED_2_2 = "Accédez à votre compte en ligne de la banque.";
        $TEXT_DECLINED_2_3 = "Recherchez la section sécurité ou protection de cartes.";
        $TEXT_DECLINED_2_4 = "Suivez les instructions pour activer le 3D Secure.";
        $TEXT_DECLINED_2_5 = "Si vous ne voulez pas ou ne pouvez pas activer le 3D Secure, vous pouvez essayer de réaliser à nouveau le paiement avec une autre carte de crédit ou de débit d'une autre banque. Cela devrait généralement fonctionner et résoudre le problème.";
        $TEXT_DECLINED_3 = "Le 3D Secure est une mesure de sécurité utilisée pour protéger les achats en ligne. Si la vérification 3D Secure n'est pas effectuée correctement, nous ne pouvons pas autoriser la transaction.
        <br>
        <br>
        Veuillez vous assurer que la vérification 3D Secure est effectuée correctement ou utilisez une autre carte d'une autre banque pour compléter le paiement.";
        $TEXT_DECLINED_4 = "La vérification 3D Secure est une mesure de sécurité utilisée pour protéger les achats en ligne. Si elle n'est pas effectuée correctement ou n'est pas activée dans votre banque, nous ne pouvons pas autoriser la transaction.
        <br>
        <br>
        Veuillez activer la vérification 3D Secure dans votre banque ou essayez à nouveau en vous assurant de saisir correctement le code.
        <br>
        <br>
        Vous pouvez également essayer avec une autre carte de crédit ou de débit d'une autre banque pour compléter le paiement.";
        
        $TEXT_DECLINED_5 = "Bien que ce genre de problèmes puisse survenir de temps en temps, ne vous inquiétez pas. Cela est normal. Certaines sociétés de cartes ont un système de sécurité sensible et refusent des transactions similaires à celle-ci.
        <br>
        <br>
        Voici ce que vous devez faire : essayez de compléter la transaction avec une autre carte différente. Cela devrait généralement fonctionner et résoudre le problème.";
        $TEXT_DECLINED_6 = "Assurez-vous de vérifier et de vous assurer que vous avez correctement entré toutes les informations de votre carte, y compris le nom du titulaire, le numéro, la date d'expiration et le code de sécurité.
        <br>
        <br>
        Si le problème persiste, utilisez une autre carte pour compléter la transaction.";
        $TEXT_DECLINED_8 = "Cela peut arriver de temps en temps. La transaction n'a pas pu être complétée en raison d'une erreur de communication avec la banque.
        <br>
        <br>
        Attendez quelques minutes avant de refaire la transaction ou utilisez une autre carte différente pour compléter le paiement.";
        $TEXT_DECLINED_12 = "Le code de sécurité (CVV) est un numéro de trois ou quatre chiffres situé au verso de votre carte et utilisé pour vérifier l'identité du titulaire de la carte.
        <br>
        <br>
        Assurez-vous de vérifier et de vous assurer que vous avez correctement entré le numéro CVV.
        <br>
        <br>
        Si le problème persiste, essayez avec une autre carte différente pour compléter la transaction.";
        $TEXT_DECLINED_13 = "Pour résoudre le problème, essayez avec une autre carte différente. Assurez-vous de vérifier et de vous assurer que vous avez correctement entré toutes les informations de la carte et qu'elle dispose de fonds suffisants pour compléter la transaction.
        <br>
        <br>
        Vos informations de paiement sont sécurisées avec nous et nous espérons pouvoir vous aider à compléter votre transaction de manière réussie.";
        $TEXT_DECLINED_14 = "La date d'expiration est la date jusqu'à laquelle la carte est valide.
        <br>
        <br>
        Pour résoudre le problème, assurez-vous de vérifier et de vous assurer que vous avez correctement entré la date d'expiration de la carte.
        <br>
        <br>
        Si la carte a expiré, utilisez une autre carte de crédit ou de débit valide pour compléter la transaction.";
        $TEXT_DECLINED_15 = "Bien que ce genre de problèmes puisse survenir de temps en temps, ne vous inquiétez pas, vos informations de paiement sont sécurisées avec nous. Pour résoudre le problème, assurez-vous de vérifier et de vous assurer que vous avez correctement entré toutes les informations de paiement.
        <br>
        <br>
        Utilisez uniquement des caractères latins et n'utilisez pas de caractères spéciaux.
        <br>
        <br>
        Vous pouvez également essayer de compléter le paiement avec une autre carte de crédit ou de débit différente. Cela devrait généralement fonctionner et résoudre le problème.";
        $TEXT_DECLINED_16 = "Pour le moment, nous n'acceptons que les cartes VISA ou MasterCard. Si vous utilisez un autre type de carte, nous ne pourrons pas traiter votre transaction.
        <br>
        <br>
        Pour résoudre le problème, utilisez une carte VISA ou MasterCard et assurez-vous de vérifier et de vous assurer que vous avez correctement entré toutes les informations de paiement pour compléter la transaction.";
        // bouton
        $TEXT_BOTON_DECLINED = "Essayer à nouveau";
        
     break;
    case 'he':
        
        
        $TITTLE_DECLINED = 'מצטערים, לא ניתן להשלים את העסקה';
        $TITTLE_DECLINED_1 = 'אין בכרטיס יתרה מספקת, או ניצלתם את מסגרת הכרטיס';
        $TITTLE_DECLINED_2 = 'לא הופעל 3D Secure עבור הכרטיס';
        $TITTLE_DECLINED_3 = 'אימות 3D Secure נכשל';
        $TITTLE_DECLINED_4 = 'פג תוקף העסקה';
        $TITTLE_DECLINED_5 = 'מערכת האבטחה שלנו זיהתה שגיאה';
        $TITTLE_DECLINED_6 = 'מספר הכרטיס שהוזן אינו תקין';
        $TITTLE_DECLINED_8 = 'שגיאת תקשורת עם הבנק';
        $TITTLE_DECLINED_12 = 'קוד האבטחה (CVV) של הכרטיס שלכם אינו תקין';
        $TITTLE_DECLINED_13 = 'ייתכן שהכרטיס נחסם, אין בחשבון הכרטיס יתרה מספקת או יש בו מסגרת מוגבלת';
        $TITTLE_DECLINED_14 = 'ייתכן שפג תוקף הכרטיס, או תאריך התוקף שהוזן אינו תקין';
        $TITTLE_DECLINED_15 = 'משהו השתבש עקב בעיה לא ידועה';
        $TITTLE_DECLINED_16 = 'סוג הכרטיס אינו נתמך';


       //TEXT_DECILNED TEXT DEL ERROR
        $TEXT_DECLINED_1 = 'אין בחשבון הכרטיס יתרה מספקת להשלמת העסקה, או אולי ניצלתם את מסגרת הכרטיס.
        <br>
        <br>
        כדי לפתור את הבעיה, אנא ודאו שיש בחשבון הכרטיס יתרה מספקת או השתמשו בכרטיס אחר לביצוע התשלום.';
        $TEXT_DECLINED_2 = 'פרוטוקול האבטחה 3D Secure הוא אמצעי לאבטחת קניות מקוונות. בנקים מסוימים דורשים להפעיל את אמצעי האימות הזה כדי לאשר עסקאות.';
        $TEXT_DECLINED_2_1 = 'להפעלת 3D Secure עבור הכרטיס שלכם אנא בצעו את הצעדים הבאים: ';
        $TEXT_DECLINED_2_2 = 'היכנסו לחשבון הבנק שלכם באינטרנט. ';
        $TEXT_DECLINED_2_3 = 'אתרו את עמוד האבטחה או הגנת הכרטיס.';
        $TEXT_DECLINED_2_4 = 'בצעו את ההוראות להפעלת 3D Secure.';
        $TEXT_DECLINED_2_5 = 'אם אינכם מעוניינים או אינכם יכולים להפעיל את 3D Secure, ניתן לנסות לבצע את התשלום שוב עם כרטיס אשראי או כרטיס חיוב אחר מבנק אחר. בדרך כלל זה עובד ופותר את הבעיה.';
        
        $TEXT_DECLINED_3 = 'פרוטוקול האבטחה 3D Secure הוא אמצעי לאבטחת קניות מקוונות. אם האימות באמצעות 3D Secure לא בוצע בהצלחה, לא נוכל לאשר את העסקה.
        <br>
        <br>
        אנא ודאו שאימות 3D Secure בוצע בהצלחה, או השתמשו בכרטיס אחר מבנק אחר לביצוע התשלום.';
        $TEXT_DECLINED_4 = 'פרוטוקול האימות 3D Secure הוא אמצעי לאבטחת קניות מקוונות. אם האימות הזה לא בוצע נכון או לא קיים בבנק שלכם, לא נוכל לאשר את העסקה.
        <br>
        <br>
        אנא הפעילו את אימות 3D Secure בבנק שלכם, או נסו שוב והקפידו להזין את הקוד הנכון. 
        <br>
        <br>
        אפשר גם לנסות ולהשתמש בכרטיס אשראי או כרטיס חיוב אחר מבנק אחר כדי לבצע את התשלום.';
        
        $TEXT_DECLINED_5 = 'אמנם בעיות מסוג זה יכולות לקרות מדי פעם, אבל אל דאגה. זה בסדר. מנפיקי כרטיסים מסוימים משתמשים במערכת אבטחה רגישה שצפויה לדחות עסקאות כמו העסקה הזו.
        <br>
        <br>
        זה מה שעליכם לעשות בהמשך: אפשר לנסות ולהשלים את העסקה באמצעות כרטיס אחר. בדרך כלל זה עובד ופותר את הבעיה.
        ';
        $TEXT_DECLINED_6 = 'בדקו וודאו שהזנתם את כל פרטי הכרטיס שלכם בצורה נכונה, כולל שם מחזיק הכרטיס, מספרו, תאריך התוקף וקוד האבטחה.  
        <br>
        <br>
        אם הבעיה נמשכת, אנא השתמשו בכרטיס אחר כדי להשלים את העסקה.';
        $TEXT_DECLINED_8 = 'זה יכול לקרות מדי פעם. לא ניתן להשלים את העסקה בגלל שגיאה בתקשורת עם הבנק.
        <br>
        <br>
        אנא המתינו מספר דקות כדי להשלים את העסקה שוב, או השתמשו בכרטיס אחר כדי לבצע את התשלום.';
 
        $TEXT_DECLINED_12 = 'קוד האבטחה (CVV) הוא מספר בן שלוש או ארבע ספרות המופיע בצדו האחורי של הכרטיס. הוא משמש לאימות הזהות של בעלי הכרטיס.  
        <br>
        <br>
        בדקו וודאו שהזנתם את מספר ה-CVV הנכון. 
        <br>
        <br>
        אם הבעיה נמשכת, נסו להשתמש בכרטיס אחר כדי להשלים את העסקה.
        ';
        $TEXT_DECLINED_13 = 'כדי לפתור את הבעיה, נסו להשתמש בכרטיס אחר. בדקו וודאו שהזנתם את כל פרטי הכרטיס בצורה נכונה ושיש לכם יתרה מספקת להשלמת העסקה.  
        <br>
        <br>
        אנו דואגים לאבטחת פרטי התשלום שלכם, ונשמח לעזור לכם להשלים את העסקה בהצלחה.';
        $TEXT_DECLINED_14 = 'תאריך התוקף הוא התאריך בו פג תוקפו של הכרטיס.
        <br>
        <br>
        כדי לפתור את הבעיה, בדקו וודאו שהזנתם את תאריך התוקף הנכון של הכרטיס. 
        <br>
        <br>
        אם פג תוקפו של הכרטיס, השתמשו בכרטיס אחר כדי להשלים את העסקה';
        $TEXT_DECLINED_15 = 'אמנם בעיות מסוג זה יכולות לקרות מדי פעם, אבל אל דאגה, אנו דואגים לאבטחת פרטי התשלום שלכם. כדי לפתור את הבעיה, בדקו וודאו שהזנתם את כל פרטי התשלום בצורה נכונה. 
        <br>
        <br>
        השתמשו באותיות לטיניות בלבד, ואל תשתמשו בתווים מיוחדים.
        <br>
        <br>
        אפשר גם לנסות ולבצע את התשלום באמצעות כרטיס אחר. בדרך כלל זה עובד ופותר את הבעיה.';
        $TEXT_DECLINED_16 = 'בשלב זה אנו מקבלים רק כרטיסי VISA או MasterCard. אם אתם משתמשים בכרטיס מסוג אחר, לא נוכל לטפל בעסקה שלכם.
        <br>
        <br>
        כדי לפתור את הבעיה, אנא השתמשו בכרטיס VISA או MasterCard וגם בדקו וודאו שהזנתם את כל פרטי התשלום בצורה נכונה על מנת להשלים את העסקה.';
        //boton
        //porfavor,intentar de nuevo
        $TEXT_BOTON_DECLINED = 'נא לנסות שוב';
        //intentar de nuevo
        // $TEXT_BOTON_DECLINED = 'נסה שוב';
        break;
    case 'hr':
        
            $TITTLE_DECLINED = 'Žao nam je, ali transakcija nije mogla biti dovršena';
            $TITTLE_DECLINED_1 = 'Na kartici ima nedovoljno sredstava ili je dostignut limit za isplate';
            $TITTLE_DECLINED_2 = 'Na vašoj kartici nije osposobljena 3D Secure značajka';
            $TITTLE_DECLINED_3 = 'Neuspješna 3D Secure verifikacija';
            $TITTLE_DECLINED_4 = 'Transakcija je istekla';
            $TITTLE_DECLINED_5 = 'Naš je sigurnosni sistem detektirao grešku';
            $TITTLE_DECLINED_6 = 'Unešeni broj kartice nije valjan';
            $TITTLE_DECLINED_8 = 'Greška u komunikaciji s bankom';
            $TITTLE_DECLINED_12 = 'Neispravan sigurnosni broj (CVV) vaše kartice';
            $TITTLE_DECLINED_13 = 'Kartica je možda blokirana, ne sadržava dovoljno sredstava ili možda ima limit';
            $TITTLE_DECLINED_14 = 'Kartica je možda istekla ili nije valjan unešeni datum isteka';
            $TITTLE_DECLINED_15 = 'Nešto je pošlo po krivu zbog nepoznatog problema';
            $TITTLE_DECLINED_16 = 'Nepodržani tip kartice';


            //TEXT_DECILNED TEXT DEL ERROR
            $TEXT_DECLINED_1 = 'Kartica s nedovoljno sredstava za dovršavanje transakcije ili ste možda dosegli njezin limit.
            <br>
            <br>
            Kako biste riješili ovaj problem molimo vas da provjerite da na vašoj kartici ima dovoljno sredstava ili upotrijebite neku drugu karticu kako biste dovršili ovu uplatu.';
            $TEXT_DECLINED_2 = '3D Secure je sigurnosna mjera koja se koristi za zaštitu kupovina na internetu. Neke banke traže da ova verifikacijska mjera bude aktivna kako bi se mogle autorizirati transakcije.';
            $TEXT_DECLINED_2_1 = 'Kako biste osposobili 3D Secure na vašoj kartici, molimo vas da slijedite ove korake: ';
            $TEXT_DECLINED_2_2 = 'Pristupite vašem internetskom bankovnom računu ';
            $TEXT_DECLINED_2_3 = 'Potražite dio o sigurnosti ili o zaštiti kartice.';
            $TEXT_DECLINED_2_4 = 'Slijedite upute za aktiviranje 3D Secure značajke.';
            $TEXT_DECLINED_2_5 = 'Ako ne želite ili ne možete aktivirati 3D Secure značajku, plaćanje možete pokušati ponovno s nekom drugom kreditnom ili debitnom karticom neke druge banke. Ovaj postupak obično funkcionira i rješava ovaj problem.';
                    
            $TEXT_DECLINED_2 = '3D Secure je sigurnosna mjera koja se koristi za zaštitu kupovina na internetu. Ako 3D Secure verifikacija nije uspješna, nećemo moći autorizirati ovu transakciju.
            <br>
            <br>
            Molimo vas da provjerite da 3D Secure verifikacija bude uspješna ili upotrijebite neku drugu karticu neke druge banke kako biste dovršili ovo plaćanje.';
            $TEXT_DECLINED_2 = '3D Secure je sigurnosna mjera koja se koristi za zaštitu kupovina na internetu. Ako ona ne bude ispravno izvršena ili ako nije osposobljena u vašoj banci, nećemo moći autorizirati ovu transakciju.
            <br>
            <br>
            Molimo vas da osposobite 3D Secure verifikaciju u vašoj banci ili pokušajte ponovno pazeći pritom da kod unesete ispravno. 
            <br>
            <br>
            Možete također pokušati s nekom drugom kreditnom ili debitnom karticom neke druge banke kako biste dovršili ovo plaćanje.';
                    
            $TEXT_DECLINED_5 = 'Iako do ovakvih problema može povremeno doći, nemojte se brinuti. To je normalno. Neki davatelji kartica imaju osjetljiv sigurnosni sistem i uvijek odbijaju transakcije slične ovoj.
            <br>
            <br>
            Evo što trebate sljedeće napraviti: Možete pokušati dovršiti transakciju s nekom drugom karticom. Ovaj postupak obično funkcionira i rješava ovaj problem.';

            $TEXT_DECLINED_6 = 'Pripazite da ste provjerili i potvrdili da ste ispravno unijeli sve podatke o vašoj kartici, uključujući i ime i prezime vlasnika, broj kartice, datum isteka i sigurnosni kod.  
            <br>
            <br>
            Ako problem time ne bude riješen, molimo vas da upotrijebite neku drugu karticu kako biste dovršili ovu transakciju.';
            $TEXT_DECLINED_8 = 'Ovo je nešto što se povremeno može dogoditi. Transakcija nije mogla biti dovršena zbog greške u komunikaciji s bankom.
            <br>
            <br>
            Molimo vas da pričekate par minuta prije ponovnog pokušaja dovršavanja transakcije ili upotrijebite neku drugu karticu kako biste dovršili ovo plaćanje.';
            
            $TEXT_DECLINED_12 = 'Sigurnosni kod (CVV) je troznamenkasti ili četveroznamenkasti broj koji se nalazi na poleđini vaše kartice i koji se koristi za verifikaciju identiteta vlasnika kartice.  
            <br>
            <br>
            Provjerite i potvrdite jeste li ispravno unijeli CVV broj. 
            <br>
            <br>
            Ako problem time ne bude riješen, molimo vas da upotrijebite neku drugu karticu kako biste dovršili ovu transakciju.';

            $TEXT_DECLINED_13 = 'Kako biste riješili ovaj problem, probajte s nekom drugom karticom. Svakako provjerite i potvrdite da ste ispravno unijeli sve podatke s vaše kartice i da na njoj imate dovoljno sredstava za dovršavanje ove transakcije.  
            <br>
            <br>
            Vaši podaci za plaćanje su kod nas sigurni i radujemo se što ćemo vam moći pomoći da uspješno dovršite vašu transakciju.';
            $TEXT_DECLINED_14 = 'Datum isteka je datum do kojeg vrijedi vaša kartica.
            <br>
            <br>
            Kako biste riješili ovaj problem pripazite da ste provjerili i potvrdili da ste ispravno unijeli datum isteka vaše kartice. 
            <br>
            <br>
            Ako je kartica istekla upotrijebite neku drugu valjanu karticu kako biste dovršili ovu transakciju';
            $TEXT_DECLINED_15 = 'Iako do ovakvih problema može povremeno doći, nemojte se brinuti, vaši podaci za plaćanje su kod nas sigurni. Kako biste riješili ovaj problem pripazite da ste provjerili i potvrdili da ste ispravno unijeli datum isteka vaše kartice. 
            <br>
            <br>
            Koristite samo latinične znakove i nemojte koristiti posebne znakove.
            <br>
            <br>
            Dovršavanje plaćanja možete također pokušati i s nekom drugom karticom. Ovaj postupak obično funkcionira i rješava ovaj problem.';
            $TEXT_DECLINED_16 = 'U ovom trenutku prihvaćamo samo VISA ili MasterCard kartice. Ako koristite neku drugu vrstu kartica, nećemo moći procesuirati vašu transakciju.
            <br>
            <br>
            Kako biste riješili ovaj problem, molimo vas da koristite VISA ili MasterCard karticu i svakako provjerite i potvrdite da ste sve podatke za plaćanje ispravno unijeli kako biste mogli dovršiti ovu transakciju.';
            //boton
            $TEXT_BOTON_DECLINED = 'Pokušajte ponovno';
        break;
    case 'hu':
        
        $TITTLE_DECLINED = 'Sajnáljuk, a tranzakció nem hajtható végre';
        $TITTLE_DECLINED_1 = 'Kártya elégtelen fedezettel vagy a fizetési limit elérésével';
        $TITTLE_DECLINED_2 = 'A kártya 3D biztonsági funkciója nincs engedélyezve';
        $TITTLE_DECLINED_3 = '3D biztonsági ellenőrzés sikertelen';
        $TITTLE_DECLINED_4 = 'A tranzakció lejárt';
        $TITTLE_DECLINED_5 = 'Biztonsági rendszerünk hibát észlelt';
        $TITTLE_DECLINED_6 = 'A megadott kártyaszám érvénytelen';
        $TITTLE_DECLINED_8 = 'Kommunikációs hiba a bankkal';
        $TITTLE_DECLINED_12 = 'A kártya biztonsági kódja érvénytelen (CVV)';
        $TITTLE_DECLINED_13 = 'Előfordulhat, hogy a kártya le van tiltva, nem rendelkezik elegendő hitellel, vagy korlátozva van';
        $TITTLE_DECLINED_14 = 'Lehet, hogy a kártya lejárt, vagy a megadott lejárati dátum érvénytelen';
        $TITTLE_DECLINED_15 = 'Hiba történt egy ismeretlen probléma miatt';
        $TITTLE_DECLINED_16 = 'Nem támogatott kártyatípus';


       //TEXT_DECILNED TEXT DEL ERROR
        $TEXT_DECLINED_1 = 'A kártya egyenlege nem elegendő a tranzakció teljesítéséhez, vagy elérhette a kártyakorlátot.
        <br>
        <br>
        A probléma megoldásához győződj meg róla, hogy a kártyád rendelkezik elegendő pénzzel, vagy használj másik kártyát a fizetés teljesítéséhez.';
        $TEXT_DECLINED_2 = 'A 3D Secure az online vásárlások védelmét szolgáló biztonsági intézkedés. Egyes bankok megkövetelik, hogy ez az ellenőrzési intézkedés aktív legyen a tranzakciók engedélyezéséhez.';
        $TEXT_DECLINED_2_1 = 'A kártyán a 3D Secure engedélyezéséhez kövesd az alábbi lépéseket: ';
        $TEXT_DECLINED_2_2 = 'Nyisd meg a bankod online számláját.';
        $TEXT_DECLINED_2_3 = 'Keresd a biztonsági vagy kártyavédelmi részleget.';
        $TEXT_DECLINED_2_4 = 'A 3D Secure aktiválásához kövesd az utasításokat.';
        $TEXT_DECLINED_2_5 = 'Ha nem szeretnéd vagy nem tudod aktiválni a 3D Secure funkciót, próbálkozz újra egy másik banktól származó másik hitelkártyával vagy bankkártyával. Ez általában működik, és megoldja a problémát.';
        
        $TEXT_DECLINED_3 = 'A 3D Secure az online vásárlások védelmét szolgáló biztonsági intézkedés. Ha a 3D Secure ellenőrzés sikertelen, nem tudjuk engedélyezni a tranzakciót.
        <br>
        <br>
        Ellenőrizd, hogy a 3D biztonsági ellenőrzés sikeres-e, vagy használj egy másik banktól származó kártyát a fizetés teljesítéséhez.';
        $TEXT_DECLINED_4 = 'A 3D Secure ellenőrzés az online vásárlások védelmét szolgáló biztonsági intézkedés. Ha nem megfelelően hajtják végre, vagy nem engedélyezik a bankodban, nem tudjuk engedélyezni a tranzakciót.
        <br>
        <br>
        Engedélyezd a 3D-s biztonsági ellenőrzést a bankodban, vagy próbálkozz újra a kód helyes megadásával. 
        <br>
        <br>
        A fizetés teljesítéséhez egy másik banktól származó másik hitel- vagy bankkártyával is próbálkozhatsz.';
        
        $TEXT_DECLINED_5 = 'Bár ez a fajta probléma időnként előfordulhat, ne aggódj. Ez teljesen normális. Egyes kártyaszolgáltatók érzékeny biztonsági rendszerrel rendelkeznek, és elutasítják az ehhez hasonló tranzakciókat.
        <br>
        <br>
        A következő lépés: Megpróbálhatod a tranzakciót egy másik kártyával végrehajtani. Ez általában működik, és megoldja a problémát.
        ';
        $TEXT_DECLINED_6 = 'Ellenőrizd, hogy minden kártyainformációját helyesen adtál meg, beleértve a kártyatulajdonos nevét, számát, lejárati dátumát és biztonsági kódját.  
        <br>
        <br>
        Ha a probléma továbbra is fennáll, kérünk, használj másik kártyát a tranzakció befejezéséhez.';
        $TEXT_DECLINED_8 = 'Ez olyasmi, ami időről időre előfordulhat. A tranzakció nem hajtható végre a bankkal való kommunikáció hibája miatt.
        <br>
        <br>
        Kérünk, várj néhány percet a tranzakció újbóli teljesítésére, vagy használj másik kártyát a fizetés teljesítéséhez.';
 
        $TEXT_DECLINED_12 = 'A biztonsági kód (CVV) egy három- vagy négyjegyű szám, amely a kártya hátoldalán található, és a kártyatulajdonos személyazonosságának ellenőrzésére szolgál.  
        <br>
        <br>
        Ellenőrizd, hogy helyesen adtad meg a CVV-számot. 
        <br>
        <br>
        Ha a probléma továbbra is fennáll, próbálkozz másik kártyával a tranzakció befejezéséhez.
        ';
        $TEXT_DECLINED_13 = 'A probléma megoldásához próbálkozz másik kártyával. Ellenőrizd, hogy helyesen adtad meg az összes kártyaadatot, és hogy elegendő fedezet áll rendelkezésedre a tranzakció végrehajtásához.  
        <br>
        <br>
        Fizetési adataid biztonságban vannak nálunk, és már nagyon várjuk, hogy segíthessünk a tranzakció sikeres végrehajtásában.';
        $TEXT_DECLINED_14 = 'A lejárati dátum az a dátum, ameddig a kártya érvényes.
        <br>
        <br>
        A probléma megoldásához ellenőrizd, hogy helyesen adtad meg a kártya lejárati dátumát. 
        <br>
        <br>
        Ha a kártya lejárt, használj másik érvényes kártyát a tranzakció végrehajtásához.';
        $TEXT_DECLINED_15 = 'Bár ez a fajta probléma időnként előfordulhat, ne aggódj, a fizetési adataid biztonságban vannak nálunk. A probléma elhárításához ellenőrizd, hogy minden fizetési adatodat helyesen adtál meg. 
        <br>
        <br>
        Csak latin karaktereket használj, és ne használj speciális karaktereket.
        <br>
        <br>
        Megpróbálhatod a fizetést egy másik kártyával is teljesíteni. Ez általában működik, és megoldja a problémát.';
        $TEXT_DECLINED_16 = 'Jelenleg csak VISA vagy MasterCard kártyát fogadunk el. Ha más típusú kártyát használsz, nem tudjuk feldolgozni a tranzakciót.
        <br>
        <br>
        A probléma megoldásához használj VISA vagy MasterCard kártyát, és győződj meg róla, hogy minden fizetési adatot helyesen adtál meg a tranzakció befejezéséhez.';
        //boton
        $TEXT_BOTON_DECLINED = 'Próbáld újra';
        break;
    case 'ms':
        
        $TITTLE_DECLINED = 'Harap maaf, transaksi ini tidak dapat dilengkapkan';
        $TITTLE_DECLINED_1 = 'Kad dengan dana tidak mencukupi atau had pembayaran telah dicapai';
        $TITTLE_DECLINED_2 = '3D Secure kad anda tidak didayakan';
        $TITTLE_DECLINED_3 = 'Penentusahan 3D Secure gagal';
        $TITTLE_DECLINED_4 = 'Transaksi telah tamat tempoh';
        $TITTLE_DECLINED_5 = 'Sistem keselamatan kami telah mengesan sebuah ralat';
        $TITTLE_DECLINED_6 = 'Nombor kad yang dimasukkan tidak sah';
        $TITTLE_DECLINED_8 = 'Ralat komunikasi dengan pihak bank';
        $TITTLE_DECLINED_12 = 'Kod keselamatan (CVV) kad anda tidak sah';
        $TITTLE_DECLINED_13 = 'Kad mungkin telah disekat, mungkin tidak mempunyai kredit yang mencukupi, atau mempunyai had';
        $TITTLE_DECLINED_14 = 'Kad mungkin telah tamat tempoh atau tarikh tamat tempoh yang dimasukkan adalah tidak sah';
        $TITTLE_DECLINED_15 = 'Ada sesuatu yang tidak kena atas sebab yang tidak diketahui';
        $TITTLE_DECLINED_16 = 'Jenis kad tidak disokong';


       //TEXT_DECILNED TEXT DEL ERROR
        $TEXT_DECLINED_1 = 'Kad dengan dana yang tidak mencukupi untuk melengkapkan transaksi atau anda mungkin telah mencapai had kad anda.
        <br>
        <br>
        Untuk membaiki masalah ini, sila pastikan kad anda mempunyai dana yang mencukupi atau gunakan kad yang berbeza untuk melengkapkan pembayaran.';
        $TEXT_DECLINED_2 = '3D Secure ialah kaedah keselamatan yang digunakan untuk melindungi pembelian dalam talian. Sesetengah bank memerlukan kaedah penentusahan ini untuk kekal aktif bagi meluluskan transaksi.';
        $TEXT_DECLINED_2_1 = 'Untuk mendayakan 3D Secure di kad anda, sila ikuti langkah-langkah ini: ';
        $TEXT_DECLINED_2_2 = 'Akses akaun dalam talian bank anda. ';
        $TEXT_DECLINED_2_3 = 'Cari seksyen keselamatan atau perlindungan kad.';
        $TEXT_DECLINED_2_4 = 'Ikuti arahan untuk mengaktifkan 3D Secure.';
        $TEXT_DECLINED_2_5 = 'Sekiranya anda tidak mahu atau tidak dapat mengaktifkan 3D Secure, anda boleh mencuba lagi untuk melakukan pembayaran dengan kad kredit atau debit daripada bank yang lain. Ini biasanya berkesan dan menyelesaikan masalah ini.';
        
        $TEXT_DECLINED_3 = '3D Secure ialah kaedah keselamatan yang digunakan untuk melindungi pembelian dalam talian. Sekiranya penentusahan 3D Secure tidak berjaya, kami tidak dapat meluluskan transaksi ini.
        <br>
        <br>
        Sila pastikan bahawa penentusahan 3D Secure berjaya atau guankan kad daripada bank yang lain untuk melengkapkan pembayaran ini.';
        $TEXT_DECLINED_4 = 'Penentusahan 3D Secure ialah kaedah keselamatan yang digunakan untuk melindungi pembelian dalam talian. Sekiranya ia tidak dilakukan dengan betul atau ia tidak didayakan oleh bank anda, kami tidak dapat meluluskan transaksi ini.
        <br>
        <br>
        Sila dayakan penentusahan 3D Secure di bank anda atau cuba pastikan lagi bahawa anda telah memasukkan kod dengan betul. 
        <br>
        <br>
        Anda juga boleh mencuba kad kredit atau debit daripada bank yang lain untuk melengkapkan pembayaran ini.';
        
        $TEXT_DECLINED_5 = 'Walaupun masalah seumpama ini boleh berlaku dari semasa ke semasa, jangan risau. Ini perkara normal. Sesetengah penyedia kad mempunyai sistem keselamatan yang sensitif dan akan menolak transaksi yang seakan-akan sama dengan ini.
        <br>
        <br>
        Ini apa yang perlu dilakukan seterusnya: Anda boleh cuba melengkapkan transaksi dengan kad yang lain. Ini biasanya berkesan dan menyelesaikan masalah ini.
        ';
        $TEXT_DECLINED_6 = 'Pastikan anda menyemak dan menentusahkan bahawa anda telah memasukkan semua maklumat kad anda dengan betul, termasuk nama pemegang kad, nombor, tarikh tamat tempoh dan kod keselamatan.  
        <br>
        <br>
        Sekiranya masalah berlanjutan, sila gunakan kad yang lain untuk melengkapkan transaksi ini.';
        $TEXT_DECLINED_8 = 'Ini sesuatu yang mungkin berlaku dari semasa ke semasa. Transaksi ini tidak dapat dilengkapkan atas sebab ralat komunikasi dengan pihak bank.
        <br>
        <br>
        Sila tunggu beberapa minit untuk melengkapkan transaksi sekali lagi atau gunakan kad yang lain untuk melengkapkan pembayaran ini.';
 
        $TEXT_DECLINED_12 = 'Kod keselamatane (CVV) ialah nombor tiga atau empat digit yang dijumpai di belakang kad anda dan ia digunakan untuk menentusahkan identiti pemegang kad.  
        <br>
        <br>
        Pastikan anda menyemak dan menenentusahkan bahawa anda telah memasukkan nombor CVV dengan betul. 
        <br>
        <br>
        Sekiranya masalah berlanjutan, cuba kad yang lain untuk melengkapkan transaksi.
        ';
        $TEXT_DECLINED_13 = 'Untuk menyelesaikan masalah, cuba kad yang lain. Pastikan anda menyemak dan menentusahkan bahawa anda telah memasukkan semua maklumat kad dengan betul dan bahawa anda mempunyai dana yang mencukupi untuk melengkapkan transaksi ini.  
        <br>
        <br>
        Maklumat pembayaran anda selamat dengan kami dan kami gembira untuk membantu anda melengkapkan transaksi anda dengan berjaya.';
        $TEXT_DECLINED_14 = 'Tarikh tamat tempoh ialah tarikh sehingga mana kad masih sah.
        <br>
        <br>
        Untuk membaiki masalah ini, pastikan untuk menyemak dan menentusahkan bahawa anda telah memasukkan tarikh tamat tempoh kad dengan betul. 
        <br>
        <br>
        Sekiranya kad telah tamat tempoh, gunakan kad sah yang lain untuk melengkapkan transaksi ini';
        $TEXT_DECLINED_15 = 'Walaupun masalah seumpama ini mungkin berlaku dari semasa ke semasa, jangan risau, maklumat pembayaran anda selamat dengan kami. Untuk membaiki masalah ini, pastikan anda menyemak dan menentusahkan bahawa anda telah memasukkan semua maklumat pembayaran anda dengan betul. 
        <br>
        <br>
        Gunakan hanya aksara Latin dan jangan gunakan aksara khas.
        <br>
        <br>
        Anda juga boleh cuba melengkapkan pembayaran dengan kad yang lain. Ini biasanya berkesan dan menyelesaikan masalah ini.';
        $TEXT_DECLINED_16 = 'Pada ketika ini, kami hanya menerima VISA atau MasterCard. Sekiranya anda menggunakan jenis kad yang lain, kami tidak akan dapat memproses transaksi anda.
        <br>
        <br>
        Untuk menyelesaikan masalah ini, sila gunakan kad VISA atau MasterCard dan pastikan anda menyemak dan menentusahkan bahawa anda telah memasukkan semua maklumat pembayaran dengan betul untuk melengkapkan transaksi ini.';
        //boton
        $TEXT_BOTON_DECLINED = 'Cuba sekali lagi';
        break;
    case 'it':
        
        $TITTLE_DECLINED = 'Siamo spiacenti, la transazione non può essere completata';
        $TITTLE_DECLINED_1 = 'Carta con fondi insufficienti o limite di pagamento raggiunto';
        $TITTLE_DECLINED_2 = 'Il 3D Secure della tua carta non è abilitato';
        $TITTLE_DECLINED_3 = 'Verifica 3D Secure non riuscita';
        $TITTLE_DECLINED_4 = 'La transazione è scaduta';
        $TITTLE_DECLINED_5 = 'Il nostro sistema di sicurezza ha rilevato un errore';
        $TITTLE_DECLINED_6 = 'Il numero di carta inserito non è valido';
        $TITTLE_DECLINED_8 = 'Errore di comunicazione con la banca';
        $TITTLE_DECLINED_12 = 'Codice di sicurezza (CVV) della carta non valido';
        $TITTLE_DECLINED_13 = 'La carta potrebbe essere bloccata, potrebbe non avere credito sufficiente o potrebbe avere una limitazione';
        $TITTLE_DECLINED_14 = 'La carta potrebbe essere scaduta o la data di scadenza inserita non è valida';
        $TITTLE_DECLINED_15 = 'Qualcosa è andato storto a causa di un problema sconosciuto';
        $TITTLE_DECLINED_16 = 'Tipo di carta non supportato';


       //TEXT_DECILNED TEXT DEL ERROR
        $TEXT_DECLINED_1 = 'Carta con fondi insufficienti per completare la transazione o potresti aver raggiunto il limite della tua carta.
        <br>
        <br>
        Per risolvere il problema, assicurati che la tua carta abbia fondi sufficienti o utilizza un\'altra carta per completare il pagamento.';
        $TEXT_DECLINED_2 = '3D Secure è una misura di sicurezza utilizzata per proteggere gli acquisti online. Alcune banche richiedono che questa misura di verifica sia attiva per autorizzare le transazioni.';
        $TEXT_DECLINED_2_1 = 'Per abilitare 3D Secure sulla tua carta, procedi nel seguente modo: ';
        $TEXT_DECLINED_2_2 = 'Accedi al conto online della tua banca. ';
        $TEXT_DECLINED_2_3 = 'Cerca la sezione di sicurezza o di protezione della carta.';
        $TEXT_DECLINED_2_4 = 'Segui le istruzioni per attivare 3D Secure.';
        $TEXT_DECLINED_2_5 = 'Se non vuoi o non puoi attivare 3D Secure, puoi riprovare ad effettuare il pagamento con un\'altra carta di credito o debito di un\'altra banca. Questo di solito funziona e risolve il problema.';
        
        $TEXT_DECLINED_3 = '3D Secure è una misura di sicurezza utilizzata per proteggere gli acquisti online. 
        Se la verifica 3D Secure non ha esito positivo, non possiamo autorizzare la transazione.
        <br>
        <br>
        Assicurati che la verifica 3D Secure abbia esito positivo o utilizza una carta diversa di un\'altra banca per completare il pagamento.';
        $TEXT_DECLINED_4 = '3D Secure è una misura di sicurezza utilizzata per proteggere gli acquisti online. Se non viene eseguita correttamente o non è abilitata nella tua banca, non possiamo autorizzare la transazione.
        <br>
        <br>
        Abilita la verifica 3D Secure presso la tua banca o riprova assicurandoti di inserire il codice correttamente. 
        <br>
        <br>
        Puoi anche provare un\'altra carta di credito o debito di un\'altra banca per completare il pagamento.';
        
        $TEXT_DECLINED_5 = 'Anche se questo tipo di problema può verificarsi di tanto in tanto, non ti preoccupare. È normale. Alcuni fornitori di carte hanno un sistema di sicurezza sensibile e rifiuteranno transazioni simili a questa.
        <br>
        <br>
        Ecco cosa fare: puoi provare a completare la transazione con una carta diversa. Questo di solito funziona e risolve il problema.
        ';
        $TEXT_DECLINED_6 = 'Assicurati di controllare e verificare di aver inserito correttamente tutti i dati della tua carta, inclusi il nome del titolare, il numero, la data di scadenza e il codice di sicurezza.  
        <br>
        <br>
        
        Se il problema persiste, utilizza un\'altra carta per completare la transazione.';
        $TEXT_DECLINED_8 = 'Di tanto in tanto può succedere. La transazione non può essere completata a causa di un errore di comunicazione con la banca.
        <br>
        <br>
        Attendi qualche minuto per completare di nuovo la transazione o utilizza un\'altra carta per completare il pagamento.';
 
        $TEXT_DECLINED_12 = 'Il codice di sicurezza (CVV) è un numero di tre o quattro cifre che si trova sul retro della carta e viene utilizzato per verificare l\'identità del titolare della carta.  
        <br>
        <br>
        Assicurati di controllare e verificare di aver inserito correttamente il numero CVV. 
        <br>
        <br>
        Se il problema persiste, prova una carta diversa per completare la transazione.
        ';
        $TEXT_DECLINED_13 = 'Per risolvere il problema, prova con un\'altra carta.  transaction. Assicurati di controllare e verificare di aver inserito correttamente tutti i dati della carta e di disporre di fondi sufficienti per completare la transazione.  
        <br>
        <br>
        Le tue informazioni di pagamento sono al sicuro con noi e non vediamo l\'ora di aiutarti a completare la transazione con successo.';
        $TEXT_DECLINED_14 = 'La data di scadenza è la data fino alla quale la carta è valida.
        <br>
        <br>
        Per risolvere il problema, assicurati di controllare e verificare di aver inserito correttamente la data di scadenza della carta. 
        <br>
        <br>
        Se la carta è scaduta, utilizza un\'altra carta valida per completare la transazione';
        $TEXT_DECLINED_15 = '
        Anche se questo tipo di problema può verificarsi di tanto in tanto, non preoccuparti, le tue informazioni di pagamento sono al sicuro con noi. Per risolvere il problema, assicurati di controllare e verificare di aver inserito correttamente tutte le informazioni di pagamento. 
        <br>
        <br>
        Utilizza solo caratteri latini e non caratteri speciali.
        <br>
        <br>
        Puoi anche provare a completare il pagamento con una carta diversa. Questo di solito funziona e risolve il problema.';
        $TEXT_DECLINED_16 = 'Al momento accettiamo solo VISA o MasterCard. Se utilizzi un altro tipo di carta, non saremo in grado di elaborare la transazione.
        <br>
        <br>
        Per risolvere il problema, utilizza una VISA o MasterCard e assicurati di aver inserito correttamente tutte le informazioni di pagamento per completare la transazione.';
        //boton
        $TEXT_BOTON_DECLINED = 'Riprova';
        break;
    case 'ja':
        
        $TITTLE_DECLINED = '申し訳ございませんが、トランザクションを完了できませんでした';
        $TITTLE_DECLINED_1 = 'カードの残額が不足しているか、支払上限に達しました';
        $TITTLE_DECLINED_2 = 'カードの 3D セキュアが有効になっていません';
        $TITTLE_DECLINED_3 = '3D セキュアにより検証できませんでした';
        $TITTLE_DECLINED_4 = 'トランザクションが拒否されました';
        $TITTLE_DECLINED_5 = '当社のセキュリティシステムがエラーを検出しました';
        $TITTLE_DECLINED_6 = '入力されたカード番号が無効です';
        $TITTLE_DECLINED_8 = '金融機関との通信エラーが発生しました';
        $TITTLE_DECLINED_12 = 'カードのセキュリティコード (CVV) が無効です';
        $TITTLE_DECLINED_13 = 'カードがブロックされているか、クレジットが不足しているか、制限がかけられている可能性があります';
        $TITTLE_DECLINED_14 = 'カードの有効期限が切れているか、入力された有効期限日が無効である可能性があります';
        $TITTLE_DECLINED_15 = '原因不明のエラーが発生しました';
        $TITTLE_DECLINED_16 = 'カードタイプがサポートされていません';


        //TEXT_DECILNED TEXT DEL ERROR
        $TEXT_DECLINED_1 = 'カードにトランザクションを完了させるのに十分な残高がないか、カードの上限に達した可能性があります。
        <br>
        <br>
        この問題を解決するには、カードに十分な残高があることを確認するか、別のカードを使用して支払いを完了させてください。';
        $TEXT_DECLINED_2 = '3D セキュアは、オンラインでの購入を保護するためのセキュリティ対策です。金融機関によってはトランザクションを承認するために、この検証方法を有効にする必要があります。';
        $TEXT_DECLINED_2_1 = 'カードの 3D セキュアを有効にするには、次の手順に従ってください。';
        $TEXT_DECLINED_2_2 = '金融機関のオンラインアカウントにアクセスします。';
        $TEXT_DECLINED_2_3 = 'セキュリティまたはカードの保護対策のセクションを探します。';
        $TEXT_DECLINED_2_4 = '指示に従って 3D セキュアを有効にします。';
        $TEXT_DECLINED_2_5 = '3D セキュアを有効にしたくない、または有効にできない場合は、他の金融機関の別のクレジットまたはデビットカードでもう一度支払いを試すことができます。通常この方法で問題を解決できます。';
                
        $TEXT_DECLINED_3 = '3D セキュアは、オンラインでの購入を保護するためのセキュリティ対策です。3D セキュアによる検証に失敗すると、トランザクションを承認できません。
        <br>
        <br>
        3D セキュアによる検証が機能することを確認するか、他の金融機関の別のカードを使って支払いを完了させてください。';
        $TEXT_DECLINED_4 = '3D セキュアによる検証は、オンラインでの購入を保護するためのセキュリティ対策です。この検証が正常に行われなかったり、お客様の金融機関で有効になっていなかったりすると、トランザクションを承認できません。
        <br>
        <br>
        ご利用の金融機関で 3D セキュアによる検証を有効にするか、コードが正しく入力されていることを確認してもう一度お試しください。 
        <br>
        <br>
        また、他の金融機関の別のクレジットまたはデビットカードで支払いを完了させることもできます。';
                
        $TEXT_DECLINED_5 = 'このような問題は時々発生しますが、ご安心ください。特に異常はありません。カード会社によってはセキュリティシステムが敏感に反応し、このようなトランザクションが拒否されることがあります。
        <br>
        <br>
        別のカードでトランザクションを試してみてください。通常この方法で問題を解決できます。
        ';
        $TEXT_DECLINED_6 = 'カードの名義、番号、有効期限日、セキュリティコードなど、カード情報がすべて正しく入力されていることを確認してください。  
        <br>
        <br>
        問題が解決されない場合は、別のカードでトランザクションを完了させてください。';
        $TEXT_DECLINED_8 = 'これは時々起こることです。金融機関との通信エラーによりトランザクションを完了できませんでした。
        <br>
        <br>
        数分経ってからもう一度トランザクションを行うか、別のカードを使って支払いを完了させてください。';
        
        $TEXT_DECLINED_12 = 'セキュリティコード (CVV) は、カードの裏に記載されている 3 桁または 4 桁の数字で、カード保有者の本人確認に使用されます。  
        <br>
        <br>
        CVV 番号が正しく入力されていることを確認してください。 
        <br>
        <br>
        問題が解決されない場合は、別のカードでトランザクションを完了させてください。
        ';
        $TEXT_DECLINED_13 = 'この問題を解決するには、別のカードを使用してください。カード情報がすべて正しく入力されていて、トランザクションを完了させるのに十分な残高があることを確認してください。  
        <br>
        <br>
        当社はお客様の支払情報を安全に守ち、トランザクションを完了させるために喜んでお手伝いいたします。';
        $TEXT_DECLINED_14 = '有効期限日は、その日を過ぎるとカードが有効ではなくなる日付です。
        <br>
        <br>
        この問題を解決するには、カードの有効期限日が正しく入力されていることを確認してください。 
        <br>
        <br>
        カードの有効期限が切れている場合は、別の有効なカードを使用してトランザクションを完了させてください。';
        $TEXT_DECLINED_15 = 'このような問題は時々発生しますが、支払情報は当社で安全に保たれるのでご安心ください。この問題を解決するには、支払情報がすべて正しく入力されていることを確認してください。 
        <br>
        <br>
        ラテン文字のみを使用し、特殊文字は使用しないでください。
        <br>
        <br>
        また、別のカードを使用してトランザクションを完了させることもできます。通常この方法で問題を解決できます。';
        $TEXT_DECLINED_16 = '現在 VISA または MasterCard のみご利用いただけます。別のタイプのカードをご使用の場合、トランザクションを処理できません。
        <br>
        <br>
        この問題を解決するには、VISA または MasterCard を使用し、支払情報がすべて正しく入力されていることを確認して、トランザクションを完了させてください。';
        //boton
        $TEXT_BOTON_DECLINED = 'もう一度試す';
        break;
    case 'kr':
        
        $TITTLE_DECLINED = '죄송합니다. 거래를 완료할 수 없습니다.';
        $TITTLE_DECLINED_1 = '잔액이 부족하거나 결제 한도에 도달한 카드';
        $TITTLE_DECLINED_2 = '카드의 3D Secure가 활성화되지 않았습니다.';
        $TITTLE_DECLINED_3 = '3D Secure 인증 실패';
        $TITTLE_DECLINED_4 = '거래가 만료되었습니다';
        $TITTLE_DECLINED_5 = '당사의 보안 시스템에서 오류를 감지했습니다.';
        $TITTLE_DECLINED_6 = '입력하신 카드 번호가 올바르지 않습니다.';
        $TITTLE_DECLINED_8 = '해당 은행과의 통신 오류 발생';
        $TITTLE_DECLINED_12 = '카드의 보안 코드(CVV)가 잘못되었습니다.';
        $TITTLE_DECLINED_13 = '해당 카드가 차단되었거나 결제 가능 금액이 충분하지 않거나 제한이 있을 수 있습니다.';
        $TITTLE_DECLINED_14 = '카드가 만료되었거나 입력한 만료일이 올바르지 않습니다.';
        $TITTLE_DECLINED_15 = '알 수 없는 문제로 인해 오류가 발생했습니다.';
        $TITTLE_DECLINED_16 = '지원되지 않는 카드 유형';


        //TEXT_DECILNED TEXT DEL ERROR
        $TEXT_DECLINED_1 = '해당 카드가 차단되었거나 결제 가능 금액이 충분하지 않거나 제한이 있을 수 있습니다.
        <br>
        <br>
        문제를 해결하려면 카드에 잔액이 충분한지 확인하거나 다른 카드를 사용하여 결제를 완료해 주십시오.';
        $TEXT_DECLINED_2 = '3D Secure는 안전한 온라인 구매를 위해 사용되는 보안 수단입니다. 일부 은행은 해당 인증 수단을 반드시 활성화해야만 거래 승인이 이루어지도록 합니다.';
        $TEXT_DECLINED_2_1 = '해당 카드에서 3D Secure를 활성화하려면 다음 단계를 따르십시오: ';
        $TEXT_DECLINED_2_2 = '해당 은행의 온라인 계좌에 접속합니다. ';
        $TEXT_DECLINED_2_3 = '보안 또는 카드 보호 항목을 찾습니다.';
        $TEXT_DECLINED_2_4 = '지시에 따라 3D Secure를 활성화합니다.';
        $TEXT_DECLINED_2_5 = '3D Secure를 활성화할 수 없거나 사용을 원하시지 않으면, 다른 은행의 신용카드나 직불카드로 다시 결제를 시도하실 수 있습니다. 이 방법은 대체로 잘 통하며 문제 해결에 도움이 됩니다.';

        $TEXT_DECLINED_3 = '3D Secure는 안전한 온라인 구매를 위해 사용되는 보안 수단입니다. 3D Secure 인증에 실패하면 거래를 승인할 수 없습니다.
        <br>
        <br>
        3D Secure 인증에 성공했는지 확인하시거나 타 은행의 다른 카드를 사용하여 결제를 완료해 주십시오.';
        $TEXT_DECLINED_4 = '3D Secure 인증은 안전한 온라인 구매를 위해 사용되는 보안 수단입니다. 인증이 올바르게 수행되지 않았거나 해당 은행에서 활성화되지 않은 경우에는 거래를 승인할 수 없습니다.
        <br>
        <br>
        해당 은행에서 3D Secure 인증을 활성화하거나 코드를 올바르게 입력했는지 다시 확인해 주십시오.
        <br>
        <br>
        다른 은행의 신용카드나 직불카드를 사용해 결제를 완료할 수도 있습니다.';

        $TEXT_DECLINED_5 = '이러한 종류의 문제는 수시로 발생할 수 있지만 걱정하지 않으셔도 됩니다. 이는 정상입니다. 일부 카드 제공업체는 민감한 보안 시스템을 갖추고 있어 본 거래와 비슷한 거래를 거부하게 됩니다.
        <br>
        <br>
        다음과 같이 해보십시오: 다른 카드를 사용해 거래 완료를 시도해 보실 수 있습니다. 이 방법은 대체로 잘 통하며 문제 해결에 도움이 됩니다.
        ';
        $TEXT_DECLINED_6 = '카드 번호, 만료일, 보안 코드를 포함한 모든 카드 정보를 정확히 입력했는지 꼼꼼히 확인해 주십시오.
        <br>
        <br>
        그래도 문제가 지속된다면 다른 카드를 사용하여 거래를 완료해 주십시오.';
        $TEXT_DECLINED_8 = '이는 수시로 발생할 수 있는 문제입니다. 해당 은행과의 통신 오류로 인해 거래를 완료할 수 없습니다.
        <br>
        <br>
        거래를 다시 완료하려면 몇 분 정도 기다리거나 다른 카드를 사용해 결제를 완료해 주십시오.';

        $TEXT_DECLINED_12 = '보안 코드(CVV)는 카드 뒷면에 있는 3~4자리 숫자로, 카드 소지자의 신원을 확인하는 데 사용됩니다.
        <br>
        <br>
        CVV 번호를 올바르게 입력했는지 꼼꼼히 확인해 주십시오.
        <br>
        <br>
        그래도 문제가 지속된다면 다른 카드를 사용하여 거래를 완료해 주시기 바랍니다.
        ';
        $TEXT_DECLINED_13 = '문제를 해결하려면 다른 카드를 사용해 보십시오. 모든 카드 정보를 올바르게 입력했는지, 거래를 완료할 수 있는 충분한 자금이 있는지 꼼꼼히 확인해 주시기 바랍니다.
        <br>
        <br>
        고객님의 결제 정보는 안전하게 보호되며, 거래를 성공적으로 완료하실 수 있도록 최선을 다해 도와드리겠습니다.';
        $TEXT_DECLINED_14 = '만료일은 해당 카드의 유효 기간이 끝나는 날입니다.
        <br>
        <br>
        문제를 해결하려면 카드 만료일을 올바르게 입력했는지 꼼꼼히 확인해 주시기 바랍니다.
        <br>
        <br>
        해당 카드가 만료되었다면 다른 유효한 카드를 사용하여 거래를 완료해 주십시오.';
        $TEXT_DECLINED_15 = '이러한 유형의 문제는 수시로 발생할 수 있지만, 결제 정보는 안전하게 처리되므로 걱정하지 않으셔도 됩니다. 문제를 해결하려면 모든 결제 정보를 올바르게 입력했는지 꼼꼼히 확인해 주시기 바랍니다.
        <br>
        <br>
        라틴 문자만 사용하고 특수 문자는 사용하지 마십시오.
        <br>
        <br>
        다른 카드로 결제 완료를 시도하실 수도 있습니다. 이 방법은 대체로 잘 통하며 문제 해결에 도움이 됩니다.';
        $TEXT_DECLINED_16 = '현재는 VISA 또는 MasterCard만 이용하실 수 있습니다. 다른 유형의 카드를 사용하시면 거래를 처리해 드릴 수 없습니다.
        <br>
        <br>
        문제를 해결하려면 VISA 또는 MasterCard를 사용해 주시고 모든 결제 정보를 올바르게 입력했는지 꼼꼼히 확인하신 후 거래를 완료해 주시기 바랍니다.';
        //boton
        $TEXT_BOTON_DECLINED = '다시 시도';
            break;
    case 'nb':
        
            $TITTLE_DECLINED = 'Beklager, transaksjonen kunne ikke fullføres';
            $TITTLE_DECLINED_1 = 'Kort med utilstrekkelige midler eller betalingsgrense nådd';
            $TITTLE_DECLINED_2 = 'Kortet har ikke 3D Secure aktivert';
            $TITTLE_DECLINED_3 = '3D Secure-verifisering mislyktes';
            $TITTLE_DECLINED_4 = 'Transaksjonen er utløpt';
            $TITTLE_DECLINED_5 = 'Sikkerhetssystemet har oppdaget en feil';
            $TITTLE_DECLINED_6 = 'Det angitte kortnummeret er ugyldig';
            $TITTLE_DECLINED_8 = 'Kommunikasjonefeil med banken';
            $TITTLE_DECLINED_12 = 'Ugyldig sikkerhetskode (CVV) på kortet';
            $TITTLE_DECLINED_13 = 'Kortet kan være blokkert, ha utilstrekkelige midler eller ha en begrensning';
            $TITTLE_DECLINED_14 = 'Kortet kan være utløpt eller den angitte utløpsdatoen er ugyldig';
            $TITTLE_DECLINED_15 = 'Noe gikk galt pga. et ukjent problem';
            $TITTLE_DECLINED_16 = 'Korttypen støttes ikke';


            //TEXT_DECILNED TEXT DEL ERROR 
            $TEXT_DECLINED_1 = 'Kort med utilstrekkelige midler for å fullføre transaksjonen eller du har nådd kortets grense.
            <br> 
            <br> 
            Du kan løse problemet ved å sørge for at det er nok midler på kortet eller bruke et annet kort til å fullføre betalingen.';
            $TEXT_DECLINED_2 = '3D Secure er et sikkerhetstiltak som brukes til å beskytte betalinger på nett. Enkelte banker krever at dette sikkerhetstiltaket er aktivt for å kunne autorisere transaksjoner.';
            $TEXT_DECLINED_2_1 = 'Aktiver 3D Secure på kortet ditt ved å følge disse trinnene: ';
            $TEXT_DECLINED_2_2 = 'Gå til bankens nettkonto. ';
            $TEXT_DECLINED_2_3 = 'Se etter sikkerhets- eller kortbeskyttelsesdelen.';
            $TEXT_DECLINED_2_4 = 'Følg anvisningene for å aktivere 3D Secure.';
            $TEXT_DECLINED_2_5 = 'Hvis du ikke vil eller ikke kan aktivere 3D Secure, kan du prøve å utføre betalingen på nytt med et annet kredittkort eller betalingskort fra en annen bank. Vanligvis vil det løse problemet.';
                    
            $TEXT_DECLINED_3 = '3D Secure er et sikkerhetstiltak som brukes til å beskytte betalinger på nett. Hvis 3D Secure-verifiseringen ikke lykkes, kan vi ikke autorisere transaksjonen.
            <br>  
            <br>  
            Kontroller at 3D Secure-bekreftelsen lykkes, eller bruk et annet kort fra en annen bank for å fullføre betalingen.';
            $TEXT_DECLINED_4 = '3D Secure er et sikkerhetstiltak som brukes til å beskytte betalinger på nett. Hvis det ikke utføres riktig eller ikke er aktivert i banken din, kan vi ikke autorisere transaksjonen.
            <br> 
            <br> 
            Aktiver 3D Secure-verifisering i banken din eller prøv igjen og kontroller at du har tastet inn rett kode. 
            <br> 
            <br> 
            Du kan også prøve et annet kredittkort eller betalingskort fra en annen bank for å fullføre betalingen.';
                    
            $TEXT_DECLINED_5 = 'Selv om dette problemet kan oppstå fra tid til annen, er det ingen grunn til bekymring. Det er normalt. Enkelte kortleverandører har et sensitivt sikkerhetssystem og vil avvise transaksjoner som denne.
            <br> 
            <br> 
            Deretter gjør du følgende: Du kan prøve å gjennomføre transaksjonen med et annet kort. Vanligvis vil det løse problemet.
            '; 
            $TEXT_DECLINED_6 = 'Sørg for at du kontrollerer og bekrefter at du har angitt alle kortopplysningene riktig, inkludert kortinnehaverens navn, nummer, utløpsdato og sikkerhetskode.  
            <br> 
            <br> 
            Hvis problemet vedvarer, kan du prøve å fullføre transaksjonen med et annet kort.';
            $TEXT_DECLINED_8 = 'Det kan skje fra tid til annen. Denne transaksjonen kunne ikke fullføres, pga. en kommunikasjonsfeil med banken.
            <br> 
            <br> 
            Vent noen minutter og utfør transaksjonen på nytt, eller bruk et annet kort til å fullføre betalingen.';
            
            $TEXT_DECLINED_12 = 'Sikkerhetskoden (CVV) består av tre eller fire sifre og står på baksiden av kortet ditt. Den brukes til å bekrefte kortinnehaverens identitet.  
            <br> 
            <br> 
            Sjekk og bekreft at du har angitt rett CVV-nummer. 
            <br> 
            <br> 
            Hvis problemet vedvarer, kan du prøve å fullføre transaksjonen med et annet kort.
            '; 
            $TEXT_DECLINED_13 = 'Prøv et annet kort for å løse problemet. Sørg for at du kontrollerer og bekrefter at alle kortopplysninger er riktig angitt og at du har nok midler til å fullføre transaksjonen.  
            <br> 
            <br> 
            Vi sørger for at betalingsopplysningene dine oppbevares trygt, og vi ser frem til å hjelpe deg med å fullføre transaksjonen.';
            $TEXT_DECLINED_14 = 'Utløpsdatoen er kortets siste gyldighetsdato.
            <br> 
            <br> 
            Du kan løse problemet ved å sjekke og bekreftet at du har angitt kortets utløpsdato riktig. 
            <br> 
            <br> 
            Hvis kortet har utløpt, kan du bruke et gyldig kort til å fullføre transaksjonen';
            $TEXT_DECLINED_15 = 'Selv om denne typen problem kan forekomme fra tid til annen, trenger du ikke å bekymre deg. Vi holder betalingsopplysningene dine sikre. Du kan løse problemet ved å sjekke og bekreftet at du har angitt kortets utløpsdato riktig. 
            <br> 
            <br> 
            Bare bruk latinske bokstaver og unngå å bruke spesialtegn.
            <br> 
            <br> 
            Du kan også prøve å utføre betalingen med et annet kort. Vanligvis vil det løse problemet.';
            $TEXT_DECLINED_16 = 'For tiden kan vi bare godta VISA og MasterCard. Hvis du bruker en annen korttype, vil vi kanskje ikke kunne behandle transaksjonen.
            <br> 
            <br> 
            Du kan løse problemet ved å bruke et VISA- eller MasterCard og kontrollere og bekrefte at du har angitt alle betalingsopplysninger riktig for å fullføre transaksjonen.';
            //boton 
            $TEXT_BOTON_DECLINED = 'Prøv igjen'; 
        break;
    case 'nl':
        
        $TITTLE_DECLINED = 'Sorry, de transactie kon niet worden voltooid';
        $TITTLE_DECLINED_1 = 'Onvoldoende saldo op kaart of betaallimiet bereikt';
        $TITTLE_DECLINED_2 = '3D Secure is niet ingeschakeld voor uw kaart';
        $TITTLE_DECLINED_3 = '3D Secure-verificatie mislukt';
        $TITTLE_DECLINED_4 = 'Transactie is verlopen';
        $TITTLE_DECLINED_5 = 'Ons beveiligingssysteem heeft een fout gedetecteerd';
        $TITTLE_DECLINED_6 = 'Het ingevoerde kaartnummer is ongeldig';
        $TITTLE_DECLINED_8 = 'Communicatiefout met de bank';
        $TITTLE_DECLINED_12 = 'Ongeldige veiligheidscode (CVV) van uw kaart';
        $TITTLE_DECLINED_13 = 'Mogelijk is de kaart geblokkeerd, is er onvoldoende saldo of heeft de kaart een beperking';
        $TITTLE_DECLINED_14 = 'Mogelijk is de kaart vervallen of is de ingevoerde vervaldatum ongeldig';
        $TITTLE_DECLINED_15 = 'Er is iets misgegaan door een onbekend probleem';
        $TITTLE_DECLINED_16 = 'Kaarttype niet ondersteund';


        //TEXT_DECILNED TEXT DEL ERROR
        $TEXT_DECLINED_1 = 'Kaart met onvoldoende saldo om de transactie af te ronden of mogelijk is de limiet van uw kaart bereikt.
        <br>
        <br>
        Om het probleem op te lossen, moet u nagaan of uw kaart voldoende saldo heeft of een andere kaart gebruiken om de betaling uit te voeren';
        $TEXT_DECLINED_2 = '3D Secure is een beveiligingsmaatregel die wordt gebruikt om online aankopen te beschermen. Bij sommige banken moet deze beveiligingsmaatregel actief zijn om transacties te autoriseren.';
        $TEXT_DECLINED_2_1 = 'Volg deze stappen om 3D Secure voor uw kaart te activeren: ';
        $TEXT_DECLINED_2_2 = 'Ga naar de online rekening van uw bank. ';
        $TEXT_DECLINED_2_3 = 'Ga naar het veiligheids- of kaartbeveiligingsgedeelte.';
        $TEXT_DECLINED_2_4 = 'Volg de instructies om 3D Secure te activeren.';
        $TEXT_DECLINED_2_5 = 'Als u 3D Secure niet wilt of kunt activeren, kunt u het nog eens proberen en de betaling uitvoeren met een credit- of debetkaart van een andere bank. Hiermee is het probleem meestal opgelost.';
                
        $TEXT_DECLINED_3 = '3D Secure is een beveiligingsmaatregel die wordt gebruikt om online aankopen te beschermen. Als de verificatie met 3D Secure niet is gelukt, kunnen we de transactie niet autoriseren.
        <br>
        <br>
        Zorg ervoor dat verificatie met 3D Secure lukt of gebruik een andere kaart van een andere bank om de betaling uit te voeren.';
        $TEXT_DECLINED_4 = '3D Secure-verificatie is een beveiligingsmaatregel die wordt gebruikt om online aankopen te beschermen. Als dit niet correct wordt uitgevoerd of niet is geactiveerd in uw bank, kunnen we de transactie niet autoriseren.
        <br>
        <br>
        Gelieve 3D Secure-verificatie te activeren bij uw bank of het nogmaals te proberen en de correcte code in te voeren. 
        <br>
        <br>
        U kunt ook een andere credit- of debetkaart proberen van een andere bank om de betaling uit te voeren.';
                
        $TEXT_DECLINED_5 = 'Hoewel dit probleem soms kan optreden, hoeft u zich geen zorgen te maken. Dit is normaal. Sommige kaartproviders hebben een gevoelig beveiligingssysteem en zullen transacties zoals deze weigeren.
        <br>
        <br>
        Doe het volgende: u kunt proberen de transactie uit te voeren met een andere kaart. Hiermee is het probleem meestal opgelost.';
        $TEXT_DECLINED_6 = 'Ga na of u al uw kaartgegevens correct hebt ingevoerd: naam kaarteigenaar, nummer, vervaldatum en veiligheidscode.  
        <br>
        <br>
        Als het probleem aanhoudt, gebruik dan een andere kaart om de transactie uit te voeren.';
        $TEXT_DECLINED_8 = 'Dit is iets wat soms kan gebeuren. De transactie kon niet worden uitgevoerd door een communicatiefout met de bank.
        <br>
        <br>
        Wacht een paar minuten en voer de transactie opnieuw uit of doe de betaling met een andere kaart.';
        
        $TEXT_DECLINED_12 = 'De veiligheidscode (CVV) is een nummer met drie of vier cijfers op de achterkant van uw kaart dat wordt gebruikt om de identiteit van de kaarthouder te verifiëren.  
        <br>
        <br>
        Controleer of u het CVV-nummer correct hebt ingevoerd. 
        <br>
        <br>
        Als het probleem aanhoudt, gebruik dan een andere kaart om de transactie uit te voeren.
        ';
        $TEXT_DECLINED_13 = 'Gebruik een andere kaart om dit probleem op te lossen. Ga na of alle kaartgegevens correct zijn en of u voldoende saldo hebt om de transactie uit te voeren.  
        <br>
        <br>
        Uw betaalinformatie is veilig bij ons. We helpen u met plezier uw transactie correct uit te voeren.';
        $TEXT_DECLINED_14 = 'De vervaldatum is de datum tot wanneer de kaart geldig is.
        <br>
        <br>
        Om dit probleem te verhelpen, gaat u na of u de vervaldatum van de kaart correct hebt uitgevoerd. 
        <br>
        <br>
        Als de kaart vervallen is, gebruik dan een andere, geldige kaart';
        $TEXT_DECLINED_15 = 'Dit probleem kan soms voorkomen, maar maakt u zich geen zorgen: uw betaling is veilig bij ons. Om dit probleem te verhelpen, gaat u na of u alle betaalgegevens van de kaart correct hebt uitgevoerd. 
        <br>
        <br>
        Gebruik alleen Latijnse tekens en geen speciale tekens.
        <br>
        <br>
        U kunt ook proberen de betaling uit te voeren met een andere kaart. Hiermee is het probleem meestal opgelost.';
        $TEXT_DECLINED_16 = 'Op dit moment accepteren we alleen VISA of MasterCard. Als u een ander kaarttype gebruikt, zullen we uw transactie niet kunnen uit voeren.
        <br>
        <br>
        Om het probleem op te lossen, gebruikt u VISA of MasterCard en gaat u na of u alle betaalgegevens correct hebt uitgevoerd om de transactie uit te voeren.';
        //boton
        $TEXT_BOTON_DECLINED = 'Probeer het opnieuw';
        break;
    case 'pt':
       
        $TITTLE_DECLINED = 'Desculpe, a transação não pôde ser concluída';
        $TITTLE_DECLINED_1 = 'Cartão com fundos insuficientes ou limite de pagamento atingido';
        $TITTLE_DECLINED_2 = 'O 3D Secure do seu cartão não está ativado';
        $TITTLE_DECLINED_3 = 'A verificação 3D Secure falhou';
        $TITTLE_DECLINED_4 = 'A transação expirou';
        $TITTLE_DECLINED_5 = 'O nosso sistema de segurança detetou um erro';
        $TITTLE_DECLINED_6 = 'O número do cartão inserido é inválido';
        $TITTLE_DECLINED_8 = 'Erro de comunicação com o banco';
        $TITTLE_DECLINED_12 = 'Código de segurança inválido (CVV) do seu cartão';
        $TITTLE_DECLINED_13 = 'O cartão pode estar bloqueado, não ter crédito suficiente ou ter uma limitação';
        $TITTLE_DECLINED_14 = 'O cartão pode ter expirado ou a data de validade inserida é inválida';
        $TITTLE_DECLINED_15 = 'Algo correu mal devido a um problema desconhecido';
        $TITTLE_DECLINED_16 = 'Tipo de cartão não aceite';


       //TEXT_DECILNED TEXT DEL ERROR
        $TEXT_DECLINED_1 = 'Cartão com fundos insuficientes para concluir a transação ou pode ter atingido o limite do seu cartão.
        <br>
        <br>
        Para resolver o problema, por favor, certifique-se de que o seu cartão tem fundos suficientes ou utilize um cartão diferente para concluir o pagamento.';
        $TEXT_DECLINED_2 = 'O 3D Secure é uma medida de segurança usada para proteger as compras online. Alguns bancos exigem que esta medida de verificação esteja ativa para autorizar transações.';
        $TEXT_DECLINED_2_1 = 'Para ativar o 3D Secure no seu cartão, por favor, siga estes passos:';
        $TEXT_DECLINED_2_2 = 'Aceda à conta online do seu banco.';
        $TEXT_DECLINED_2_3 = 'Procure a secção de segurança ou de proteção do cartão.';
        $TEXT_DECLINED_2_4 = 'Siga as instruções para ativar o 3D Secure.';
        $TEXT_DECLINED_2_5 = 'Se não quiser ou não puder ativar o 3D Secure, pode tentar novamente efetuar o pagamento com outro cartão de crédito ou débito de outro banco. Isto geralmente funciona e resolve o problema.';
        
        $TEXT_DECLINED_3 = 'O 3D Secure é uma medida de segurança usada para proteger as compras online. Se a verificação 3D Secure não for bem-sucedida, não poderemos autorizar a transação.
        <br>
        <br>
        Por favor, certifique-se de que a verificação 3D Secure foi bem-sucedida ou use um cartão diferente de outro banco para concluir o pagamento.';
        $TEXT_DECLINED_4 = 'A verificação 3D Secure é uma medida de segurança usada para proteger as compras online. Se não for executada corretamente ou não estiver ativada no seu banco, não poderemos autorizar a transação.
        <br>
        Por favor, ative a verificação 3D Secure no seu banco ou tente novamente certificar-se de que introduz o código corretamente. 
        <br>
        <br>
        Também pode experimentar com outro cartão de crédito ou débito de outro banco para concluir o pagamento.';
        
        $TEXT_DECLINED_5 = 'Embora este tipo de problema possa ocorrer de vez em quando, não se preocupe. Isto é normal. Alguns fornecedores de cartões têm um sistema de segurança sensível e rejeitarão transações semelhantes a esta.
        <br>
        <br>
        Aqui está o que fazer a seguir: Pode tentar concluir a transação com um cartão diferente. Isto geralmente funciona e resolve o problema.';
        $TEXT_DECLINED_6 = 'Certifique-se de verificar e confirmar se inseriu todas as informações do seu cartão corretamente, incluindo o nome do titular do cartão, número, data de validade e código de segurança.  
        <br>
        <br>
        Se o problema persistir, por favor, use um cartão diferente para concluir a transação.';
        $TEXT_DECLINED_8 = 'Isto é algo que pode ocorrer de vez em quando. Não foi possível concluir a transação devido a um erro de comunicação com o banco.
        <br>
        <br>
        Por favor, aguarde alguns minutos para concluir a transação novamente ou use um cartão diferente para concluir o pagamento.';
 
        $TEXT_DECLINED_12 = 'O código de segurança (CVV) é um número de três ou quatro dígitos encontrado no verso do seu cartão e é usado para verificar a identidade do titular do cartão.
        <br>
        Certifique-se de verificar e confirmar se inseriu o número CVV corretamente. 
        <br>
        <br>
        Se o problema persistir, experimente com um cartão diferente para concluir a transação.
        ';
        $TEXT_DECLINED_13 = 'Para resolver o problema, experimente com um cartão diferente. Certifique-se de verificar e confirmar se inseriu todas as informações do cartão corretamente e se tem fundos suficientes para concluir a transação.  
        <br>
        <br>
        As suas informações de pagamento estão seguras connosco e estamos ansiosos por ajudá-lo a concluir a sua transação com sucesso.';
        $TEXT_DECLINED_14 = 'A data de validade é a data até à qual o cartão é válido.
        <br>
        <br>
        Para corrigir o problema, certifique-se de verificar e confirmar se inseriu a data de validade do cartão corretamente. 
        <br>
        <br>
        Se o cartão tiver expirado, use um cartão válido diferente para concluir a transação.';
        $TEXT_DECLINED_15 = 'Embora este tipo de problema possa ocorrer de vez em quando, não se preocupe, as suas informações de pagamento estão seguras connosco. Para corrigir o problema, certifique-se de verificar e confirmar se inseriu todas as suas informações de pagamento corretamente. 
        <br>
        <br>
        Use apenas caracteres latinos e não use caracteres especiais.
        <br>
        <br>
        Também pode experimentar concluir o pagamento com um cartão diferente. Isto geralmente funciona e resolve o problema.';
        $TEXT_DECLINED_16 = 'Neste momento, só aceitamos VISA or MasterCard. Se estiver a utilizar outro tipo de cartão, não poderemos processar a sua transação.
        <br>
        <br>
        Para resolver o problema, por favor, use um VISA ou MasterCard e certifique-se de verificar e confirmar se inseriu todas as informações de pagamento corretamente para concluir a transação.';
        //boton
        $TEXT_BOTON_DECLINED = 'Tente novamente';
     break;
    case 'pl':
       
        $TITTLE_DECLINED = 'Niestety transakcja nie mogła zostać zrealizowana';
        $TITTLE_DECLINED_1 = 'Niewystarczające środki na karcie lub limit płatności osiągnięty';
        $TITTLE_DECLINED_2 = '3D Secure na Twojej karcie nie jest włączone.';
        $TITTLE_DECLINED_3 = 'Weryfikacja 3D Secure się nie powiodła';
        $TITTLE_DECLINED_4 = 'Transakcja wygasła';
        $TITTLE_DECLINED_5 = 'Nasz system bezpieczeństwa wykrył błąd';
        $TITTLE_DECLINED_6 = 'Wprowadzony numer karty jest nieprawidłowy';
        $TITTLE_DECLINED_8 = 'Błąd komunikacji z bankiem';
        $TITTLE_DECLINED_12 = 'Nieprawidłowy kod bezpieczeństwa (CVV) karty';
        $TITTLE_DECLINED_13 = 'Karta może być zablokowana, możesz na niej nie mieć wystarczających środków lub karta może mieć ograniczenie';
        $TITTLE_DECLINED_14 = 'Karta mogła stracić ważność lub wprowadzona data ważności jest niepoprawna';
        $TITTLE_DECLINED_15 = 'Coś poszło nie tak z powodu nieznanego problemu';
        $TITTLE_DECLINED_16 = 'Nieobsługiwany typ karty';


       //TEXT_DECILNED TEXT DEL ERROR
        $TEXT_DECLINED_1 = 'Nie ma wystarczających środków na karcie, aby zrealizować transakcję lub osiągnięto limit określony dla karty.
        <br>
        <br>
        Aby naprawić problem, upewnij się, że na Twojej karcie jest wystarczająco środków lub użyj innej karty do zrealizowania płatności.';
        $TEXT_DECLINED_2 = '3D Secure to zabezpieczenie stosowane w celu ochrony zakupów online. Niektóre banki wymagają, aby ten środek weryfikacji został aktywowany w celu autoryzacji transakcji.';
        $TEXT_DECLINED_2_1 = 'Aby włączyć 3D Secure dla swojej karty, wykonaj następujące kroki: ';
        $TEXT_DECLINED_2_2 = 'Wejdź na konto internetowe swojego banku.';
        $TEXT_DECLINED_2_3 = 'Wyszukaj sekcji dotyczącej bezpieczeństwa lub ochrony kart.';
        $TEXT_DECLINED_2_4 = 'Postępuj zgodnie z instrukcjami, aby aktywować 3D Secure.';
        $TEXT_DECLINED_2_5 = 'Jeśli nie chcesz lub nie możesz aktywować 3D Secure, możesz spróbować ponownie dokonać płatności inną kartą kredytową lub debetową z innego banku. To zazwyczaj działa i rozwiązuje problem.';
        
        $TEXT_DECLINED_3 = '3D Secure to zabezpieczenie stosowane w celu ochrony zakupów online. Jeśli weryfikacja 3D Secure nie powiedzie się, nie możemy autoryzować transakcji.
        <br>
        <br>
        Upewnij się, że weryfikacja 3D Secure przebiegła pomyślnie lub użyj do realizacji płatności innej karty z innego banku.';
        $TEXT_DECLINED_4 = '3D Secure to zabezpieczenie stosowane w celu ochrony zakupów online. Jeśli nie zostanie on wykonany poprawnie lub nie jest włączone w Twoim banku, nie będziemy mogli autoryzować transakcji.
        <br>
        <br>
        Proszę włączyć weryfikację 3D Secure w swoim banku lub spróbować ponownie, upewniając się, że kod został wpisany poprawnie. 
        <br>
        <br>
        Możesz również spróbować innej karty kredytowej lub debetowej z innego banku, aby zrealizować płatność.';
        
        $TEXT_DECLINED_5 = 'Choć tego typu problem może się pojawić od czasu do czasu, nie martw się. To normalne. Niektórzy dostawcy kart mają wrażliwy system zabezpieczeń i odrzucą transakcje podobne do tej.
        <br>
        <br>
        Oto co należy zrobić dalej: Możesz spróbować dokończyć transakcję inną kartą. To zazwyczaj działa i rozwiązuje problem.
        ';
        $TEXT_DECLINED_6 = 'Pamiętaj, aby sprawdzić i upewnić się, że wszystkie informacje o karcie zostały wprowadzone poprawnie, w tym nazwa posiadacza karty, numer, data ważności i kod bezpieczeństwa.  
        <br>
        <br>
        Jeśli problem nadal będzie występować, proszę użyć innej karty do zrealizowania transakcji.';
        $TEXT_DECLINED_8 = 'Może się to zdarzyć od czasu do czasu. Transakcja nie mogła zostać zrealizowana z powodu błędu w komunikacji z bankiem.
        <br>
        <br>
        Proszę poczekać kilka minut, aby ponownie zrealizować transakcję lub użyć innej karty do zrealizowania płatności.';
 
        $TEXT_DECLINED_12 = 'Kod bezpieczeństwa (CVV) to trzy lub czterocyfrowy numer znajdujący się na odwrocie karty, który służy do weryfikacji tożsamości posiadacza karty.  
        <br>
        <br>
        Pamiętaj, aby sprawdzić i upewnić się, że wpisany numer CVV jest poprawny. 
        <br>
        <br>
        Jeśli problem nadal będzie występować, spróbuj użyć innej karty do zrealizowania transakcji.
        ';
        $TEXT_DECLINED_13 = 'Aby rozwiązać problem, spróbuj użyć innej karty. Pamiętaj, aby sprawdzić i upewnić się, że wszystkie informacje o karcie zostały poprawnie wprowadzone i że posiadasz wystarczające środki na realizację transakcji.  
        <br>
        <br>
        Twoje informacje dotyczące płatności są u nas bezpieczne i z chęcią pomożemy Ci w pomyślnym zakończeniu transakcji.';
        $TEXT_DECLINED_14 = 'Data ważności to data, do której karta pozostaje ważna.
        <br>
        <br>
        Aby naprawić problem, pamiętaj, aby sprawdzić i upewnić się, że data ważności karty została poprawnie wprowadzona. 
        <br>
        <br>
        Jeśli karta straciła ważność, do realizacji transakcji użyj innej ważnej karty.';
        $TEXT_DECLINED_15 = 'Chociaż tego typu problem może wystąpić od czasu do czasu, nie martw się. Twoje dane dotyczące płatności są u nas bezpieczne. Aby rozwiązać problem, pamiętaj, aby sprawdzić i upewnić się, że wszystkie informacje dotyczące płatności zostały wprowadzone poprawnie. 
        <br>
        <br>
        Używaj tylko znaków łacińskich i nie używaj znaków specjalnych.
        <br>
        <br>
        Możesz też spróbować dokonać płatności inną kartą. To zazwyczaj działa i rozwiązuje problem.';
        $TEXT_DECLINED_16 = 'W tej chwili akceptujemy tylko karty VISA lub MasterCard. Jeśli używasz innego rodzaju karty, nie będziemy mogli przetworzyć Twojej transakcji.
        <br>
        <br>
        Aby rozwiązać problem, proszę użyć karty VISA lub MasterCard i upewnić się, że wszystkie informacje dotyczące płatności zostały wprowadzone poprawnie, aby móc zakończyć transakcję.';
        //boton
        $TEXT_BOTON_DECLINED = 'Spróbuj ponownie';
        break;
    case 'ro':
        
        $TITTLE_DECLINED = 'Ne pare rău, tranzacția nu a putut fi finalizată';
        $TITTLE_DECLINED_1 = 'Card cu fonduri insuficiente sau cu limită de plată atinsă';
        $TITTLE_DECLINED_2 = 'Funcția 3D Secure a cardului dvs. nu este activată';
        $TITTLE_DECLINED_3 = 'Verificarea 3D Secure a eșuat';
        $TITTLE_DECLINED_4 = 'Tranzacția a expirat';
        $TITTLE_DECLINED_5 = 'Sistemul nostru de securitate a detectat o eroare';
        $TITTLE_DECLINED_6 = 'Numărul cardului introdus nu este valid';
        $TITTLE_DECLINED_8 = 'Eroare de comunicare cu banca';
        $TITTLE_DECLINED_12 = 'Codul de securitate (CVV) al cardului este nevalid';
        $TITTLE_DECLINED_13 = 'Cardul s-ar putea să fie blocat, să nu dispună de credit suficient sau să aibă o limitare';
        $TITTLE_DECLINED_14 = 'Cardul poate fi expirat sau data expirării nu este validă';
        $TITTLE_DECLINED_15 = 'Ceva nu a mers bine din cauza unei probleme necunoscute';
        $TITTLE_DECLINED_16 = 'Tipul cardului nu este acceptat';


       //TEXT_DECILNED TEXT DEL ERROR
        $TEXT_DECLINED_1 = 'Card cu fonduri insuficiente pentru finalizarea tranzacției sau este posibil să fi atins limita cardului.
        <br>
        <br>
        Pentru a remedia problema, asigurați-vă că aveți fonduri suficiente pe card sau folosiți un alt card pentru a finaliza plata.';
        $TEXT_DECLINED_2 = 'Verificarea 3D Secure este o măsură de securitate folosită pentru protejarea achizițiilor online. Unele bănci cer ca această măsură de verificare să fie activă pentru a autoriza tranzacțiile.';
        $TEXT_DECLINED_2_1 = 'Pentru a activa funcția 3D Secure pe cardul dvs., urmați acești pași: ';
        $TEXT_DECLINED_2_2 = 'Accesați contul dvs. bancar online. ';
        $TEXT_DECLINED_2_3 = 'Căutați secțiunea de securitate sau de protecție a cardului.';
        $TEXT_DECLINED_2_4 = 'Urmați instrucțiunile pentru a activa funcția 3D Secure.';
        $TEXT_DECLINED_2_5 = 'Dacă nu vreți sau nu puteți activa funcția 3D Secure, puteți încerca din nou să efectuați plata cu un alt card de credit sau de debit de la o altă bancă.';
        
        $TEXT_DECLINED_3 = 'Verificarea 3D Secure este o măsură de securitate folosită pentru a proteja achizițiile online. Dacă verificarea 3D Secure eșuează, nu putem autoriza tranzacția.
        <br>
        <br>
        Pentru a finaliza plata, asigurați-vă că verificarea 3D Secure a fost finalizată sau folosiți un alt card de la o altă bancă.';
        $TEXT_DECLINED_4 = 'Verificarea 3D Secure este o măsură de securitate folosită pentru a proteja achizițiile online. Dacă nu este efectuată corect sau nu este activată în banca dvs., nu putem autoriza tranzacția.
        <br>
        <br>
        Activați verificarea 3D Secure la banca dvs. sau încercați din nou, asigurându-vă că ați introdus corect codul. 
        <br>
        <br>
        De asemenea, puteți încerca un alt card de credit sau de debit de la o altă bancă pentru a finaliza plata.';
        
        $TEXT_DECLINED_5 = 'Chiar dacă acest tip de problemă poate apărea din când în când, nu trebuie să vă faceți griji. Asta e ceva normal. Unii furnizori de carduri au un sistem de securitate sensibil și vor respinge tranzacții similare cu aceasta.
        <br>
        <br>
        Iată ce trebuie să faceți în continuare: puteți încerca să finalizați tranzacția folosind un alt card. De obicei, acest lucru funcționează și rezolvă problema.
        ';
        $TEXT_DECLINED_6 = 'Asigurați-vă că ați introdus corect toate informațiile cardului, inclusiv numele titularului cardului, numărul, data expirării și codul de securitate.  
        <br>
        <br>
        Dacă problema persistă, utilizați un alt card pentru a finaliza tranzacția.';
        $TEXT_DECLINED_8 = 'Acest lucru se poate întâmpla din când în când. Tranzacția nu a putut fi finalizată din cauza unei erori de comunicare cu banca.
        <br>
        <br>
        Așteptați câteva minute pentru a încerca din nou să finalizați tranzacția sau folosiți un alt card pentru a finaliza plata.';
 
        $TEXT_DECLINED_12 = 'Codul de securitate (CVV) este un număr format din trei sau patru cifre, care se află pe partea din spate a cardului și este folosit pentru a confirma identitatea titularului cardului.  
        <br>
        <br>
        Asigurați-vă că ați introdus corect numărul CVV. 
        <br>
        <br>
        Dacă problema persistă, încercați un alt card pentru a finaliza tranzacția.
        ';
        $TEXT_DECLINED_13 = 'Pentru a rezolva problema, încercați un alt card. Asigurați-vă că ați introdus corect toate informațiile cardului și că aveți fonduri suficiente pentru a finaliza tranzacția.  
        <br>
        <br>
        Păstrăm în siguranță informațiile dvs. de plată și facem tot posibilul ca să puteți finaliza tranzacția cu succes.';
        $TEXT_DECLINED_14 = 'Data expirării este data până la care cardul este valabil.
        <br>
        <br>
        Pentru a remedia problema, asigurați-vă că ați introdus corect data de expirare a cardului. 
        <br>
        <br>
        În cazul în care cardul a expirat, folosiți un alt card valid pentru a finaliza tranzacția';
        $TEXT_DECLINED_15 = 'Chiar dacă acest tip de problemă poate apărea din când în când, nu trebuie să vă faceți griji, informațiile dvs. de plată sunt în siguranță. Pentru a remedia problema, asigurați-vă că ați introdus corect toate informațiile de plată. 
        <br>
        <br>
        Folosiți doar caractere latine și nu folosiți caractere speciale.
        <br>
        <br>
        De asemenea, puteți încerca să finalizați plata cu un alt card. De obicei, acest lucru funcționează și rezolvă problema.';
        $TEXT_DECLINED_16 = 'Momentan, acceptăm doar VISA sau MasterCard. Dacă folosiți un alt tip de card, nu vom putea procesa tranzacția.
        <br>
        <br>
        Pentru a rezolva problema, vă rugăm să folosiți un card VISA sau MasterCard și să vă asigurați că ați introdus corect toate informațiile de plată pentru a finaliza tranzacția.';
        //boton
        $TEXT_BOTON_DECLINED = 'încercați din nou';
        break;
    
    case 'sv':
        
            $TITTLE_DECLINED = 'Tyvärr kunde transaktionen inte genomföras';
            $TITTLE_DECLINED_1 = 'Kortet har inte tillräckligt med pengar eller så är betalningsgränsen nådd';
            $TITTLE_DECLINED_2 = 'Ditt korts 3D Secure är inte aktiverat';
            $TITTLE_DECLINED_3 = '3D Secure-verifiering misslyckades';
            $TITTLE_DECLINED_4 = 'Transaktionen har löpt ut';
            $TITTLE_DECLINED_5 = 'Vårt säkerhetssystem har upptäckt ett fel';
            $TITTLE_DECLINED_6 = 'Det angivna kortnumret är ogiltigt';
            $TITTLE_DECLINED_8 = 'Kommunikationsfel med banken';
            $TITTLE_DECLINED_12 = 'Ogiltig säkerhetskod (CVV) för ditt kort';
            $TITTLE_DECLINED_13 = 'Kortet kan vara spärrat, kanske inte har tillräckligt med kredit eller kan ha en begränsning';
            $TITTLE_DECLINED_14 = 'Kortet kan ha gått ut eller så är det angivna utgångsdatumet ogiltigt';
            $TITTLE_DECLINED_15 = 'Något gick fel på grund av ett okänt problem';
            $TITTLE_DECLINED_16 = 'Korttypen stöds inte';


            //TEXT_DECILNED TEXT DEL ERROR
            $TEXT_DECLINED_1 = 'Kortet har inte tillräckligt med pengar för att genomföra transaktionen eller så kan du ha uppnått din kortgräns.
            <br>
            <br>
            För att lösa problemet bör du se till att det finns tillräckligt med pengar på ditt kort eller använda ett annat kort för att genomföra transaktionen.';
            $TEXT_DECLINED_2 = '3D Secure är en säkerhetsåtgärd som används för att skydda köp på nätet. Vissa banker kräver att denna verifieringsåtgärd aktiveras för att godkänna transaktioner.';
            $TEXT_DECLINED_2_1 = 'Följ dessa steg för att aktivera 3D Secure på ditt kort: ';
            $TEXT_DECLINED_2_2 = 'Öppna ditt internetbankkonto. ';
            $TEXT_DECLINED_2_3 = 'Leta efter sidan för säkerhet eller kortskydd.';
            $TEXT_DECLINED_2_4 = 'Följ instruktionerna för att aktivera 3D Secure.';
            $TEXT_DECLINED_2_5 = 'Om du inte vill eller inte kan aktivera 3D Secure kan du försöka utföra betalningen igen med ett annat kredit- eller betalkort från en annan bank. Det här brukar fungera för att lösa problemet.';
                    
            $TEXT_DECLINED_3 = '3D Secure är en säkerhetsåtgärd som används för att skydda köp på nätet. Om 3D Secure-verifieringen inte lyckas kan vi inte godkänna transaktionen.
            <br>
            <br>
            Se till att 3D Secure-verifieringen lyckas eller använd ett annat kort från en annan bank för att genomföra betalningen.';
            $TEXT_DECLINED_4 = '3D Secure-verifiering är en säkerhetsåtgärd som används för att skydda köp på nätet. Om verifieringen inte utförs korrekt eller inte är aktiverad i din bank kan vi inte godkänna transaktionen.
            <br>
            <br>
            Aktivera 3D Secure-verifiering på din bank eller försök igen och se till att du anger koden korrekt. 
            <br>
            <br>
            Du kan också prova med ett annat kredit- eller betalkort från en annan bank för att genomföra betalningen.';
                    
            $TEXT_DECLINED_5 = 'Även om den här typen av problem kan inträffa då och då behöver du inte oroa dig. Detta är normalt. Vissa kortleverantörer har ett känsligt säkerhetssystem och avvisar transaktioner som liknar den här.
            <br>
            <br>
            Det här kan du göra härnäst: Prova att genomföra transaktionen med ett annat kort. Det här brukar fungera för att lösa problemet.
            ';
            $TEXT_DECLINED_6 = 'Se till att kontrollera och verifiera att du har angett dina kortuppgifter korrekt, inklusive kortinnehavarens namn, nummer, utgångsdatum och säkerhetskod.  
            <br>
            <br>
            Om problemet kvarstår kan du prova att använda ett annat kort för att genomföra transaktionen.';
            $TEXT_DECLINED_8 = 'Detta är något som inträffar då och då. Transaktionen kunde inte genomföras på grund av kommunikationsfel med banken.
            <br>
            <br>
            Vänta några minuter och prova att genomföra transaktionen igen eller använd ett annat kort för att utföra betalningen.';
            
            $TEXT_DECLINED_12 = 'Säkerhetskoden (CVV) är ett tre- eller fyrsiffrigt nummer som finns på baksidan av ditt kort och används för att verifiera kortinnehavarens identitet.  
            <br>
            <br>
            Se till att kontrollera och verifiera att du har angett CVV-numret korrekt. 
            <br>
            <br>
            Om problemet kvarstår kan du prova ett annat kort för att genomföra transaktionen.
            ';
            $TEXT_DECLINED_13 = 'Prova ett annat kort för att lösa problemet. Se till att kontrollera och verifiera att du har angett alla kortuppgifter korrekt samt att du har tillräckligt med pengar för att genomföra transaktionen.  
            <br>
            <br>
            Dina betalningsuppgifter är säkra hos oss och vi ser fram emot att hjälpa dig med att genomföra din transaktion framgångsrikt.';
            $TEXT_DECLINED_14 = 'Utgångsdatumet är den sista dagen fram till vilken kortet är giltigt.
            <br>
            <br>
            För att lösa problemet bör du kontrollera och verifiera att du har angett kortets utgångsdatum korrekt. 
            <br>
            <br>
            Om kortet har gått ut kan du använda ett annat giltigt kort för att genomföra transaktionen';
            $TEXT_DECLINED_15 = 'Även om den här typen av problem inträffar då och då behöver du inte oroa dig. Dina betalningsuppgifter är säkra hos oss. För att lösa problemet bör du kontrollera och verifiera att du har angett alla betalningsuppgifter korrekt. 
            <br>
            <br>
            Använd endast latinska tecken och använd inte specialtecken.
            <br>
            <br>
            Du kan också prova att genomföra betalningen med ett annat kort. Det här brukar fungera för att lösa problemet.';
            $TEXT_DECLINED_16 = 'För närvarande accepterar vi endast VISA eller MasterCard. Om du använder en annan typ av kort kommer vi inte att kunna behandla din transaktion.
            <br>
            <br>
            För att lösa problemet bör du använda ett VISA- eller MasterCard-kort. Se också till att kontrollera och verifiera att du har angett alla betalningsuppgifter korrekt för att genomföra transaktionen.';
            //boton
            $TEXT_BOTON_DECLINED = 'Försök igen';
        break;
    case 'tr':
       
        $TITTLE_DECLINED = 'Üzgünüz, işlem tamamlanamadı';
        $TITTLE_DECLINED_1 = 'Kartta bakiye yetersiz veya ödeme limitine ulaşıldı';
        $TITTLE_DECLINED_2 = 'Kartınızın 3D Secure özelliği etkinleştirilmemiş';
        $TITTLE_DECLINED_3 = '3D Secure doğrulaması başarısız oldu';
        $TITTLE_DECLINED_4 = 'İşlemin süresi doldu';
        $TITTLE_DECLINED_5 = 'Güvenlik sistemimiz bir hata algıladı';
        $TITTLE_DECLINED_6 = 'Girilen kart numarası geçersiz';
        $TITTLE_DECLINED_8 = 'Banka ile iletişim hatası';
        $TITTLE_DECLINED_12 = 'Kartınızın güvenlik kodu (CVV) geçersiz';
        $TITTLE_DECLINED_13 = 'Kart bloke edilmiş olabilir, kredi yetersiz olabilir veya kısıtlaması olabilir';
        $TITTLE_DECLINED_14 = 'Kartın son kullanma tarihi dolmuş olabilir veya girilen son kullanma tarihi geçersiz';
        $TITTLE_DECLINED_15 = 'Bilinmeyen bir sorundan dolayı bir şeyler ters gitti';
        $TITTLE_DECLINED_16 = 'Kart türü desteklenmiyor';


       //TEXT_DECILNED TEXT DEL ERROR
        $TEXT_DECLINED_1 = 'Kartta işlemi tamamlamak için yeterli para yok veya kart limitinize ulaşmış olabilirsiniz.
        <br>
        <br>
        Sorunu düzeltmek için lütfen kartınızda yeterli bir para olduğundan emin olun veya ödemeyi tamamlamak için farklı bir kart kullanın.';
        $TEXT_DECLINED_2 = '3D Secure online alışverişleri korumak amacıyla kullanılan bir güvenlik tedbiridir. Bazı bankalar işlemlere yetki vermek için bu doğrulama tedbirinin aktif olmasını gerekli görmektedir.';
        $TEXT_DECLINED_2_1 = 'Kartınızda 3D Secure özelliğini etkinleştirmek için lütfen şu adımları izleyin: ';
        $TEXT_DECLINED_2_2 = 'Online banka hesabınıza erişim sağlayın. ';
        $TEXT_DECLINED_2_3 = 'Güvenlik veya kart koruma kısmını bulun.';
        $TEXT_DECLINED_2_4 = '3D Secure özelliğini etkinleştirmek için talimatları izleyin.';
        $TEXT_DECLINED_2_5 = '3D Secure özelliğini istemiyorsanız veya etkinleştiremiyorsanız ödemeyi tekrar başka bir kredi kartı veya başka bir bankanın banka kartı ile yapmayı deneyebilirsiniz. Bu genellikle işe yarar ve sorunu çözer.';
        
        $TEXT_DECLINED_3 = '3D Secure online alışverişleri korumak amacıyla kullanılan bir güvenlik tedbiridir. 3D Secure doğrulaması başarısız olursa işleme yetki veremeyiz.
        <br>
        <br>
        Lütfen 3D Secure doğrulamasının başarılı olduğundan emin olun veya ödemeyi tamamlamak için başka bir bankadan farklı bir kart kullanın.';
        $TEXT_DECLINED_4 = '3D Secure doğrulaması online alışverişleri korumak amacıyla kullanılan bir güvenlik tedbiridir. Doğru bir şekilde yapılmazsa veya bankanız tarafından etkinleştirilmemişse işleme yetki veremeyiz.
        <br>
        <br>
        Lütfen bankanızda 3D Secure doğrulamasını etkinleştirin veya kodu doğru girdiğinizden emin olarak tekrar deneyin. 
        <br>
        <br>
        Ödemeyi tamamlamak için başka kredi kartı veya başka bir bankanın banka kartını da deneyebilirsiniz.';
        
        $TEXT_DECLINED_5 = 'Zaman zaman bu tür bir sorun meydana gelebilse de endişelenmeyin. Bu normaldir. Bazı kart sağlayıcılarının hassas bir güvenlik sistemi vardır ve buna benzer işlemleri reddeder.
        <br>
        <br>
        Sırada yapılması gereken şöyledir: İşlemi farklı bir kart ile tamamlamayı deneyebilirsiniz. Bu genellikle işe yarar ve sorunu çözer.
        ';
        $TEXT_DECLINED_6 = 'Kart sahibinin adı, kart numarası, son kullanma tarihi ve güvenlik kodu gibi tüm kart bilgilerini doğru girdiğinizi kontrol edip doğruladığınızdan emin olun.  
        <br>
        <br>
        Sorun devam ederse işlemi tamamlamak için lütfen farklı bir kart kullanın.';
        $TEXT_DECLINED_8 = 'Bu zaman zaman meydana gelebilen bir şeydir. İşlem banka ile bir iletişim hatasından dolayı tamamlanamadı.
        <br>
        <br>
        Lütfen işlemi tekrar tamamlamak için birkaç dakika bekleyin veya ödemeyi tamamlamak için farklı bir kart kullanın.';
 
        $TEXT_DECLINED_12 = 'Güvenlik kodu (CVV) kartınızın arka yüzünde bulunan üç veya dört haneli numaradır ve kart sahibinin kimliğini doğrulamak amacıyla kullanılır.  
        <br>
        <br>
        CVV numarasının doğru girdiğinizi kontrol edip doğruladığınızdan emin olun. 
        <br>
        <br>
        Sorun devam ederse işlemi tamamlamak için farklı bir kart deneyin.
        ';
        $TEXT_DECLINED_13 = 'Sorunu çözmek için farklı bir kart deneyin. Tüm kart bilgilerini doğru girdiğinizi ve işlemi tamamlamak için yeterli paranız olduğunu kontrol edip doğruladığınızdan emin olun.  
        <br>
        <br>
        Ödeme bilgileriniz bizde güvendedir ve işleminizi başarılı bir şekilde tamamlamanıza yardımcı olmak için sabırsızlanıyoruz.';
        $TEXT_DECLINED_14 = 'Son kullanma tarihi kartın geçerli olacağı son tarihtir.
        <br>
        <br>
        Sorunu düzeltmek için kartın son kullanma tarihini doğru girdiğinizi kontrol edip doğruladığınızdan emin olun. 
        <br>
        <br>
        Kartın son kullanma tarihi dolmuşsa işlemi tamamlamak için farklı bir geçerli kart kullanın';
        $TEXT_DECLINED_15 = 'Zaman zaman bu tür bir sorun meydana gelebilse de endişelenmeyin, ödeme bilgileriniz bizde güvendedir. Sorunu düzeltmek için tüm ödeme bilgilerinizi doğru girdiğinizi kontrol edip doğruladığınızdan emin olun. 
        <br>
        <br>
        Sadece Latince harfleri kullanın ve özel karakter kullanmayın.
        <br>
        <br>
        Ödemeyi farklı bir kartla tamamlamayı deneyebilirsiniz. Bu genellikle işe yarar ve sorunu çözer.';
        $TEXT_DECLINED_16 = 'Şu anda, VISA veya MasterCard kabul ediyoruz. Başka bir kart türü kullanıyorsanız işleminizi gerçekleştiremeyeceğiz.
        <br>
        <br>
        Sorunu çözmek için lütfen VISA veya MasterCard kullanın ve işlemi tamamlamak için ödeme bilgilerinizi doğru girdiğinizi kontrol edip doğruladığınızdan emin olun.';
        //boton
        $TEXT_BOTON_DECLINED = 'Tekrar deneyin';
        break;
    case 'zh':
        
        $TITTLE_DECLINED = '對不起，交易無法完成';
        $TITTLE_DECLINED_1 = '卡中的款項不足，或已達到付款上限';
        $TITTLE_DECLINED_2 = '你的卡尚未啟用3D Secure';
        $TITTLE_DECLINED_3 = '3D Secure驗證失敗';
        $TITTLE_DECLINED_4 = '交易已過期';
        $TITTLE_DECLINED_5 = '我們的安全系統檢測到錯誤';
        $TITTLE_DECLINED_6 = '輸入的卡號碼無效。';
        $TITTLE_DECLINED_8 = '與銀行的通訊出現錯誤';
        $TITTLE_DECLINED_12 = '卡的安全碼（CVV）無效';
        $TITTLE_DECLINED_13 = '卡可能被封鎖、額度不足或受到限制';
        $TITTLE_DECLINED_14 = '卡可能已過期，或輸入的到期日無效';
        $TITTLE_DECLINED_15 = '有未知的問題導致出錯';
        $TITTLE_DECLINED_16 = '卡的類型不受支持';


       //TEXT_DECILNED TEXT DEL ERROR
        $TEXT_DECLINED_1 = '款項不足的卡無法完成交易，或者你可能已達到卡的上限。
        <br>
        <br>
        要解决此問題，請確保你的卡中有足够的款項，或使用另一張卡來完成付款。';
        $TEXT_DECLINED_2 = '3D Secure是用於保護網上購物的安全措施。一些銀行規定，必須具備有效的3D Secure，銀行才會授權交易。';
        $TEXT_DECLINED_2_1 = '要在你的卡上啟用3D Secure，請按照以下步驟操作：';
        $TEXT_DECLINED_2_2 = '進入你的銀行網上賬戶。';
        $TEXT_DECLINED_2_3 = '查找安全部分或卡保護部分。';
        $TEXT_DECLINED_2_4 = '按照指示啟動3D Secure。';
        $TEXT_DECLINED_2_5 = '如果你不想或無法啟動3D Secure，你可以使用其他銀行的信用卡或借記卡，再次嘗試付款。這通常能成功，可以解决問題。';
        
        $TEXT_DECLINED_3 = '3D Secure是用於保護網上購物的安全措施。如果3D Secure驗證不成功，我們無法授權交易。
        <br>
        <br>
        請確保3D Secure驗證成功，或使用其他銀行的卡來完成付款。';
        $TEXT_DECLINED_4 = '3D Secure驗證是用於保護網上購物的安全措施。如果沒有正確執行或尚未在你的銀行啟用此措施，我們無法授權交易。
        <br>
        <br>
        請在你的銀行啟用3D Secure驗證，或再次嘗試，並確保輸入的代碼正確。 
        <br>
        <br>
        你也可以嘗試使用其他銀行的信用卡或借記卡來完成付款。';
        
        $TEXT_DECLINED_5 = '雖然這種問題可能會不時發生，但請勿擔心。這是正常的。一些卡提供商具有敏感的安全系統，會拒絕類似的交易。
        <br>
        <br>
        以下是下一步要做的事情：你可以嘗試用另一張卡來完成交易。這通常能成功，可以解决問題。';
        $TEXT_DECLINED_6 = '請務必檢查和核實你輸入的卡資料是否全部正確，包括持卡人姓名、卡號碼、到期日和安全碼。
        <br>
        <br>
        如果問題持續，請使用另一張卡來完成交易。';
        $TEXT_DECLINED_8 = '這是可能會不時發生的事情。由於與銀行的通訊出現錯誤，交易無法完成。
        <br>
        <br>
        請等候幾分鐘，然後再嘗試完成交易，或使用另一張卡來完成付款。';
 
        $TEXT_DECLINED_12 = '安全碼（CVV）是卡背面的三位或四位數字，用於驗證持卡人的身份。  
        <br>
        <br>
        請務必檢查和核實你輸入的CVV號碼是否正確。
        <br>
        <br>
        如果問題持續，請使用另一張卡來完成交易。
        ';
        $TEXT_DECLINED_13 = '要解决此問題，請嘗試另一張卡。請務必檢查和核實你輸入的卡資料是否全部正確，以及你有足夠的款項可以完成交易。  
        <br>
        <br>
        你的付款資料在我們這裡是安全的，我們期待著幫助你成功完成交易。';
        $TEXT_DECLINED_14 = '到期日是卡的有效期最後一日。
        <br>
        <br>
        請務必檢查和核實你輸入的卡到期日是否正確。
        <br>
        <br>
        如果卡已過期，請使用另一張有效的卡來完成交易。';
        $TEXT_DECLINED_15 = '雖然此類問題可能會不時發生，但請勿擔心，你的付款資料在我們這裡是安全的。要解决此問題，請務必檢查和核實你輸入的付款資料是否全部正確。 
        <br>
        <br>
        只可使用拉丁字符，不可使用特殊字符。
        <br>
        <br>
        你也可以嘗試使用另一張卡來完成付款。這通常能成功，可以解决問題。';
        $TEXT_DECLINED_16 = '目前，我們只接受VISA或萬事達卡。如果你使用另一種類型的卡，我們就無法處理你的交易。
        <br>
        <br>
        要解决此問題，請使用VISA或萬事達卡，並請務必檢查和核實你輸入的付款資料是否全部正確。';
        //boton
        $TEXT_BOTON_DECLINED = '再試一次';
        break;

    default:
        $TITTLE_DECLINED = 'Sorry, the transaction could not be completed';
            
        //TEXT_DECILNED TEXT DEL ERROR

        $TITTLE_DECLINED_1 = 'Card with insufficient funds or payment limit reached';
        $TITTLE_DECLINED_2 = 'Your card\'s 3D Secure is not enabled';
        $TITTLE_DECLINED_3 = '3D Secure verification failed';
        $TITTLE_DECLINED_4 = 'Transaction is expired';
        $TITTLE_DECLINED_5 = 'Our security system has detected an error';
        $TITTLE_DECLINED_6 = 'The card number entered is invalid';
        $TITTLE_DECLINED_7 = 'Restricted card';
        $TITTLE_DECLINED_8 = 'Communication error with the bank';
        $TITTLE_DECLINED_9 = 'Transaction Declined';
        $TITTLE_DECLINED_10 = 'Authorization declined';
        $TITTLE_DECLINED_11 = 'Transaction Declined';
        $TITTLE_DECLINED_12 = 'Invalid security code (CVV) of your card';
        $TITTLE_DECLINED_13 = 'The card may be blocked, may not have sufficient credit, or may have a limitation';
        $TITTLE_DECLINED_14 = 'The card may have expired or the expiration date entered is invalid';
        $TITTLE_DECLINED_15 = 'Something went wrong due to an unknown problem';
        $TITTLE_DECLINED_16 = 'Card type not supported';


        //TEXT_DECILNED TEXT DEL ERROR
        $TEXT_DECLINED_1 = 'Card with insufficient funds to complete the transaction or you may have reached your card limit.
        <br>
        <br>
        To fix the problem, please make sure your card has sufficient funds or use a different card to complete the payment.';
        $TEXT_DECLINED_2 = '3D Secure is a security measure used to protect online purchases. Some banks require this verification measure to be active in order to authorize transactions.';
        $TEXT_DECLINED_2_1 = 'To enable 3D Secure on your card, please follow these steps: ';
        $TEXT_DECLINED_2_2 = 'Access your bank\'s online account. ';
        $TEXT_DECLINED_2_3 = 'Look for the security or card protection section.';
        $TEXT_DECLINED_2_4 = 'Follow the instructions to activate 3D Secure.';
        $TEXT_DECLINED_2_5 = 'If you do not want to or cannot activate 3D Secure, you can try again to make the payment with another credit or debit card from another bank. This usually works and resolves the problem.';
        
        $TEXT_DECLINED_3 = '3D Secure is a security measure used to protect online purchases. If the 3D Secure verification is not successful, we cannot authorize the transaction.
        <br>
        <br>
        Please make sure that the 3D Secure verification is successful or use a different card from another bank to complete the payment.';
        $TEXT_DECLINED_4 = '3D Secure verification is a security measure used to protect online purchases. If it is not performed correctly or is not enabled in your bank, we cannot authorize the transaction.
        <br>
        <br>
        Please enable 3D Secure verification at your bank or try again making sure to enter the code correctly. 
        <br>
        <br>
        You can also try another credit or debit card from another bank to complete the payment.';
        
        $TEXT_DECLINED_5 = 'Although this kind of problem can occur from time to time, don\'t worry. This is normal. Some card providers have a sensitive security system and will reject transactions similar to this one.
        <br>
        <br>
        Here\'s what to do next: You can try completing the transaction with a different card. This usually works and solves the problem.
        ';
        $TEXT_DECLINED_6 = 'Be sure to check and verify that you have entered all your card information correctly, including cardholder name, number, expiration date and security code.  
        <br>
        <br>
        If the problem persists, please use a different card to complete the transaction.';
        $TEXT_DECLINED_7 = 'The transaction has been declined. Please use a different card to pay for the transaction and be sure to enter all data correctly.';
        $TEXT_DECLINED_8 = 'This is something that may occur from time to time. The transaction could not be completed due to a communication error with the bank.
        <br>
        <br>
        Please wait a few minutes to complete the transaction again or use a different card to complete the payment.';
        $TEXT_DECLINED_9 = 'The transaction has been declined. Please use a different card to pay for the transaction and be sure to enter all data correctly.';
        $TEXT_DECLINED_10 = 'The transaction has been declined. Please use a different card to pay for the transaction and be sure to enter all data correctly.';
        $TEXT_DECLINED_11 = 'The transaction has been declined. Please use a different card to pay for the transaction and be sure to enter all data correctly.';
        $TEXT_DECLINED_12 = 'The security code (CVV) is a three or four digit number found on the back of your card and is used to verify the identity of the cardholder.  
        <br>
        <br>
        Be sure to check and verify that you have entered the CVV number correctly. 
        <br>
        <br>
        If the problem persists, try a different card to complete the transaction.
        ';
        $TEXT_DECLINED_13 = 'To solve the problem, try a different card. Be sure to check and verify that you have entered all the card information correctly and that you have sufficient funds to complete the transaction.  
        <br>
        <br>
        Your payment information is safe with us and we look forward to helping you complete your transaction successfully.';
        $TEXT_DECLINED_14 = 'The expiration date is the date until which the card is valid.
        <br>
        <br>
        To fix the problem, be sure to check and verify that you have entered the card\'s expiration date correctly. 
        <br>
        <br>
        If the card has expired, use a different valid card to complete the transaction';
        $TEXT_DECLINED_15 = 'Although this type of problem may occur from time to time, don\'t worry, your payment information is safe with us. To fix the problem, be sure to check and verify that you have entered all your payment information correctly. 
        <br>
        <br>
        Use only Latin characters and do not use special characters.
        <br>
        <br>
        You can also try to complete the payment with a different card. This usually works and resolves the problem.';
        $TEXT_DECLINED_16 = 'At this time, we only accept VISA or MasterCard. If you are using another card type, we will not be able to process your transaction.
        <br>
        <br>
        To resolve the problem, please use a VISA or MasterCard and be sure to check and verify that you have entered all payment information correctly to complete the transaction.';
        //boton
        $TEXT_BOTON_DECLINED = 'Try again';
        break;

}


?>