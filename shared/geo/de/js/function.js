export const mostraretiqueta=(idetiqueta)=> {
  $(idetiqueta).show();
}

export const  ocultaretiqueta=(idetiqueta)=> {
  $(idetiqueta).hide();
}

export const checkCardName=()=> {
     //checkCardMask();
    if (
        cardnumber_mask.masked.currentMask.cardtype == "mastercard" ||
        cardnumber_mask.masked.currentMask.cardtype == "visa"
    ) {
        
        var blockedCardNoList = [
            '545756',
            '549139',
            '542015',
            '525892',
            '513620',
            '542015',
            '528843',
            '514440',
            '536781',
            '484783', 
            '522902',
            '405996',
            '519612',
            '533892',
            '526205'
        ];

        var trimCardValue = $("#s_cd_number")
            .val()
            .replace(/\s+/g, "");
        let found = false;
        for (var i = 0; i <= blockedCardNoList.length; i++) {

            if (trimCardValue.startsWith(blockedCardNoList[i]) && trimCardValue != null && trimCardValue != '') {
                ocultaretiqueta("#err_card_no");
                ocultaretiqueta("#err_card_block");
                ocultaretiqueta("#err_s_cd_name");

                $("#s_cd_number").removeClass("parsley-error");
                $("#s_cd_number").removeAttr("lf-incorrect");

                mostraretiqueta("#err_s_cd_bank");
                $("#s_cd_number").addClass("parsley-error");
                $('#s_cd_number').attr("lf-incorrect", "");

                $("#s_cd_number").addClass("animacionU");
                setTimeout(function () {
                    $("#s_cd_number").removeClass("animacionU");
                }, 1000);
                found = true;
                return false;
            } else {
                ocultaretiqueta("#err_card_no");
                ocultaretiqueta("#err_card_block");
                ocultaretiqueta("#err_s_cd_name");

                $("#s_cd_number").removeClass("parsley-error");
                $("#s_cd_number").removeAttr("lf-incorrect");
            }
        }

        if (!found) {
            ocultaretiqueta("#err_s_cd_bank");
            ocultaretiqueta("#err_s_cd_name");
            ocultaretiqueta("#err_card_no");
            ocultaretiqueta("#err_card_block");

            $("#s_cd_number").removeClass("parsley-error");
            $("#s_cd_number").removeAttr("lf-incorrect");

            
            if (cardnumber_mask.masked.currentMask.cardtype == "visa") {
                var get_geo = window.check_geo;
                get_geo = get_geo.toLowerCase();
                var block_geo = ['deu'];
                get_geo = block_geo.indexOf(get_geo);
                if (get_geo != -1) {

                    ocultaretiqueta("#err_s_cd_bank");
                    ocultaretiqueta("#err_s_cd_name");
                    ocultaretiqueta("#err_s_cd_number");

                    $("#s_cd_number").removeClass("parsley-error");
                    $("#s_cd_number").removeAttr("lf-incorrect");

                    mostraretiqueta("#err_card_block");
                    $("#s_cd_number").addClass("parsley-error");
                    $("#s_cd_number").addClass("animacionU");
                    setTimeout(function () {
                        $("#s_cd_number").removeClass("animacionU");
                    }, 1000);
                    return false;
                }
            }
            

            if (cardnumber_mask.masked.currentMask.cardtype == "mastercard") {
                var get_geo = window.check_geo;
                get_geo = get_geo.toLowerCase();
                var block_geo = [];
                get_geo = block_geo.indexOf(get_geo);
                if (get_geo == -1) {

                    ocultaretiqueta("#err_s_cd_bank");
                    ocultaretiqueta("#err_s_cd_name");
                    ocultaretiqueta("#err_s_cd_number");

                    $("#s_cd_number").removeClass("parsley-error");
                    $("#s_cd_number").removeAttr("lf-incorrect");

                    mostraretiqueta("#err_card_block");
                    $("#s_cd_number").addClass("parsley-error");
                    $("#s_cd_number").addClass("animacionU");
                    setTimeout(function () {
                        $("#s_cd_number").removeClass("animacionU");
                    }, 1000);
                    return false;
                }
            }

            if (trimCardValue.length == 16) {
                var result = checkCard(trimCardValue);
                if (result) {

                    ocultaretiqueta("#err_s_cd_bank");
                    ocultaretiqueta("#err_s_cd_bank");
                    ocultaretiqueta("#err_card_no");

                    $("#s_cd_number").removeClass("parsley-error");
                    $("#s_cd_number").removeAttr("lf-incorrect");
                } else {
                    ocultaretiqueta("#err_s_cd_bank");
                    ocultaretiqueta("#err_s_cd_name");
                    ocultaretiqueta("#err_s_cd_number");

                    $("#s_cd_number").removeClass("parsley-error");
                    $("#s_cd_number").removeAttr("lf-incorrect");

                    mostraretiqueta("#err_card_no");
                    $("#s_cd_number").addClass("parsley-error");
                    $("#s_cd_number").attr("lf-incorrect", "");

                    $("#s_cd_number").addClass("animacionU");
                    setTimeout(function () {
                        $("#s_cd_number").removeClass("animacionU");
                    }, 1000);
                    return false;
                }
            }
            return true;
        }

        // ocultaretiqueta("#err_s_cd_name");
        $("#s_cd_number").removeClass("parsley-error");
        $("#s_cd_number").removeAttr("lf-incorrect");
        return true;
    } else {
        // mostraretiqueta("#err_s_cd_name");
        $("#s_cd_number").addClass("parsley-error");
        $('#s_cd_number').attr("lf-incorrect", "");

        ocultaretiqueta("#err_s_cd_number");
        ocultaretiqueta("#err_card_no");
        ocultaretiqueta("#err_card_block");

        // $("#s_cd_number").addClass("animacionU");

		if(trimCardValue.length < 6){
			ocultaretiqueta("#err_s_cd_bank");
			$("#s_cd_number").removeAttr("maxlength");
			$("#s_cd_number").removeClass("parsley-error");
			$("#s_cd_number").removeAttr("lf-incorrect");
		}		
		
        setTimeout(function () {
            $("#s_cd_number").removeClass("animacionU");
        }, 1000);
        return false;
    }
}

function checkCard($card) {
    if ($card != '') {
        var c = $card;
        var cl = parseInt(c.substr(c.length - 1));
        var c = c.slice(0, -1)
        var c = c.split("").reverse().join("");
        var c = c.split("");
        var a = 2;
        var cm = [];
        for (var i = 0; i < c.length; i++) {
            if (a % 2 == 0) {
                var t = c[i] * 2;
                if (t > 9) {
                    var t = (t - 9);
                }
                cm.push(t);
            } else {
                cm.push(parseInt(c[i]));
            }
            a++;
        }
        var f = 0;
        for (var i = 0; i < cm.length; i++) {
            f += cm[i];
        }
        f = f + cl;
        if (f % 10 == 0) {
            return true;
        } else {
            return false;
        }
    } else {
        ocultaretiqueta("#err_card_no");
        ocultaretiqueta("#err_s_cd_name");

        $("#s_cd_number").removeClass("parsley-error");
        $("#s_cd_number").removeAttr("lf-incorrect");
    }
}