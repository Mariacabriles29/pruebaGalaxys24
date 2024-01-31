var baseurl = "https://app.regulardrive.net/";
var emailvalido = "";

var namePattern = "^[a-zA-ZáéíóúAÉÍÓÚÑñ0-9]{4,30}$";
//^[a-z A-Z]{4,30}$
//^[a-zA-ZáéíóúAÉÍÓÚÑñ0-9]{4,30}$
//var emailPattern = "^[a-zA-Z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?$";
//var emailPattern="/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/";
var passPattern = "^[a-zA-Z0-9\\?\\@\\&\\$\\;\\:\\.\\,\\%\\!\\*\\(\\)\\-\\_\\#\\^\\`\\/\\<\\>\\+]{5,15}$";
var passPattern1 = "^([a-zA-Z0-9\\?\\@\\&\\$\\;\\:\\.\\,\\%\\!\\*\\(\\)\\-\\_\\#\\^\\`\\/\\<\\>\\+]*)$";
var alphabetspattern = '^[^\'$%&|<>#0-9]{2,32}$';
var alphabetspattern1 = '^[^\'$%&|<>#]{1,32}$';

// [ A-Za-zäÄëËïÏöÖüÜáéíóúáéíóúÁÉÍÓÚÂÊÎÔÛâêîôûàèìòùÀÈÌÒÙ.-]+

//^[A-Za-z ]+$
//^[a-zA-ZáéíóúAÉÍÓÚÑñ0-9 ]+$
//var alphaspace ="^[a-zA-Z ]*$";
var numberspattern = "[0-9 ]+";
var numberspattern1 = "^[0-9]{3,3}$";

//var emailPattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;

var emailPattern = '^(([^\'<>()[\\]\\\\.,;:\\s@\\"]+(\\.[^\'<>()[\\]\\\\.,;:\\s@\\"]+)*)|(\\".+\\"))@(([^\'<>()[\\]\\.,;:\\s@\\"]+\\.)+[^\'<>()[\\]\\.,;:\\s@\\"]{2,})$';
// "(?:[a-z0-9!#$%&\'*+\/=?^_`{|}~-]+(?:\\.[a-z0-9!#$%&\'*+\/=?^_`{|}~-]+)*|\"(?:[\\x01-\\x08\\x0b\\x0c\\x0e-\\x1f\\x21\\x23-\\x5b\\x5d-\\x7f]|\\\\[\\x01-\\x09\\x0b\\x0c\\x0e-\\x7f])*\")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\\x01-\\x08\\x0b\\x0c\\x0e-\\x1f\\x21-\\x5a\\x53-\\x7f]|\\\\[\\x01-\\x09\\x0b\\x0c\\x0e-\\x7f])+)\\])";
// '^(([^<>()[\\]\\\\.,;:\\s@\\"]+(\\.[^<>()[\\]\\\\.,;:\\s@\\"]+)*)|(\\".+\\"))@(([^<>()[\\]\\.,;:\\s@\\"]+\\.)+[^<>()[\\]\\.,;:\\s@\\"]{2,})$';

$(document).ready(function () {

  setupEvents();

  if (window.__payment__) {
    $(".paso1").hide(); //muestro mediante id
    $("#form_title").hide();
    $("#step1").hide();
    $("#step2").show();
    $(".paso2").show(); //muestro mediante clase
    $(".etiqueta_paso2").show();
    $(".indicator__step2").addClass("active");
    $(".indicator__step1").removeClass("active");
  } else {
    $(".paso0").hide();
    $(".paso1").show(); 
    $("#step1").show();
    $("#step2").hide();//muestro mediante id
    $(".paso2").hide(); //muestro mediante clase
    $(".etiqueta_paso2").hide();
    $(".indicator__step2").removeClass("active");
    $(".indicator__step1").addClass("active");
  }

  // $("#lp").val(window.location.href + "thank-you/");
  // createPaymentForm("");
  // var url      = window.location.href+"thank-you/";
  // $("#lp").val(url);
  setupcountry();
});

function setupEvents(idForm) {
  //$("#lp").val(window.location.href + "thank-you/");

  $("#confirmar_pass").keypress(function (e) {
    //no recuerdo la fuente pero lo recomiendan para
    //mayor compatibilidad entre navegadores.
    var code = e.keyCode ? e.keyCode : e.which;
    if (code == 13) {
      // validateForm();
    }
  });

  $("#reintentar").on("click", function () {
    window.location.href = "../";
  });

  $("#back_btn").on("click", function () {
    // $('.paso1').show(); //muestro mediante id
    // $('.paso2').hide(); //muestro mediante clase
    // $('.etiqueta_paso2').hide();
    // $(".indicator__step2").removeClass("active");
    // $(".indicator__step1").addClass("active");

    // location.reload();

    window.location.href = "./";
  });

  $('input[type="checkbox"]').on("change", function (e) {
    if (this.checked) {
      $("#continuar").prop("disabled", false);
    }
  });

  // $("#email").focus(function () {
  //   $('#continuar').prop('disabled', true);
  // });

  // $("#email").on("blur", function() {
  //   updateIFrame();
  // });
}

function mostraretiqueta(idetiqueta) {
  $(idetiqueta).show();
}

function ocultaretiqueta(idetiqueta) {
  $(idetiqueta).hide();
}

function enableSubmit(idForm) {
  $("#continuar").removeAttr("disabled");
}

function showErrorEmail(msg) {
  $("#error-msg-email").show();
  $("#error-msg-email").html(msg);
}

function hideErrorEmail() {
  $("#error-msg-email").hide();
  $("#error-msg-email").html("");
}

function checkInput(idInput, pattern) {
  return $(idInput)
    .val()
    .match(pattern) ?
    true :
    false;
}
function checkInputPass(idInput, pattern){
  return true;
}
$("#datos_old").submit(function (e) {
  // e.preventDefault();

  if (!checkInput("#email", emailPattern)) {
    showErrorEmail("Email address is not valid");
    //Email address is not valid
    return;
  }

  if (emailvalido !== "true") {
    e.preventDefault();
    showErrorEmail("Email address already exists");
    return;
  }

  hideErrorEmail();

  if (!checkInput("#pass", passPattern)) {
    e.preventDefault();
    mostraretiqueta("#etiquetapass");
    $("#pass").addClass("parsley-error");
    return;
  }

  if ($("#pass").val() !== $("#confirmar_pass").val()) {
    e.preventDefault();
    mostraretiqueta("#etiquetaconfirmar_pass");
    return;
  }

  ocultaretiqueta("#etiquetaconfirmar_pass");

  var condiciones = $("#aceptar").is(":checked");

  if (!condiciones) {
    e.preventDefault();
    $("#divaceptar").addClass("animacion");

    setTimeout(function () {
      $("#divaceptar").removeClass("animacion");
    }, 1000);
    return;
  }

  ocultaretiqueta("#etiquetapass");
  $("#pass").removeClass("parsley-error");

  // get email address from registration form
  var emailAddress = $("form.pspPaymentForm #email").val();

  // $('.paso1').hide(); //muestro mediante id
  // $('.paso2').show(); //muestro mediante clase
  // $('.etiqueta_paso2').show();
  // $(".indicator__step2").addClass("active");
  // $(".indicator__step1").removeClass("active");

  // put email in payment form
  // setTimeout(function() {

  // },1200);
});

function updateEmailAddressInPaymentForm(emailAddress) {
  $(".email > input#email").value = emailAddress;
}

function updateIFrame() {
  var w = document.getElementsByClassName("pspIframe")[0].contentWindow;
  var options = getStartSettings();
  var emailAddress = $("form.pspPaymentForm #email").val();
  options["email"] = emailAddress;
  var iframeSrc = getIFrameSrc(options);

  $(
    "#psp-hpp-b5ac71a958f38f41edd3d2827a9b66f398ca9322071bbfe61b240f3832634776"
  ).load(iframeSrc, function () {
    w.postMessage(options, iframeSrc);
  });

  // var iframe = document.getElementById("psp-hpp-f56f412beea34b9491c09687e961b898a7172b58c0f449b57268ac54a7bd06db");
  // iframe.setAttribute("src", iframeSrc);
}

function getIFrameSrc(options) {
  if (options.iframesrc) {
    var src = options.iframesrc;
    if (options.hasOwnProperty("key") && options.hasOwnProperty("signature")) {
      src = src + "?";
      for (var key in options) {
        if (
          options.hasOwnProperty(key) &&
          key !== "iframesrc" &&
          options[key] !== null
        ) {
          src =
            src +
            encodeURIComponent(key) +
            "=" +
            encodeURIComponent(options[key]) +
            "&";
        }
      }
    }
    return src;
  }
}

function getStartSettings() {
  //Parse options
  var optionSelector = document.getElementsByClassName("pspScript")[0];

  var startSettings = optionSelector.attributes;
  var options = {};
  var i = 0;
  var length = startSettings.length;
  for (i; i < length; i++) {
    var attr = startSettings[i];
    var match = attr.name.match(/^data-(.+)$/);
    if (match !== null ? match[1] : void 0) {
      options[match[1]] = attr.value;
    }
  }

  return options;
}

function realizaProceso(valorCaja1) {
  var parametros = {
    valorCaja1: valorCaja1
  };

  $.ajaxSetup({
    headers: {
      "X-CSRF-TOKEN": $('meta[name="_token"]').attr("content")
    }
  });

  $(".paso0").show();

  $("#s_form_but").attr("disabled", true);
  $("#s_form_but").hide();
  $("#continuar").attr("disabled", true);

  $.ajax({
    url: baseurl + "gethint",
    method: "post",
    data: {
      email: valorCaja1
    },
    success: function (result) {
      $("#s_form_but").removeAttr("disabled", true);
      $("#s_form_but").show();
      $("#continuar").removeAttr("disabled", true);
      $(".paso0").hide();
      if (result == "true") {
        emailvalido = "true";

        var email = $("#email").val();

        //  $("#aceptar").prop("checked", false);

        ocultaretiqueta("#verificaremail");
        $("#email").removeClass("parsley-error");
      } else if (result == "false") {
        emailvalido = "false";
        mostraretiqueta("#verificaremail");
        $("#email").addClass("parsley-error");
        $("#email").addClass("animacionE");

        setTimeout(function () {
          $("#email").removeClass("animacionE");
        }, 1000);
      }
    }
  });
}

$(document).ready(function () {
  $(".paso0").hide();

  $("#continuar").on("click", function () {

    var condiciones = $("#aceptar").is(":checked");
    if (checkInput("#email", emailPattern)) {
      ocultaretiqueta("#etiquetaemail");
      $("#email").removeClass("parsley-error");
      mostraretiqueta('#lp-pom-text-826');
      if (emailvalido == "true") {
        ocultaretiqueta("#verificaremail");
        $("#email").removeClass("parsley-error");
        mostraretiqueta('#lp-pom-text-826');
        if (checkInput("#f_first_name", alphabetspattern1)) {

          ocultaretiqueta("#err_f_first_name");
          $("#f_first_name").removeClass("parsley-error");
          mostraretiqueta('#lp-pom-text-826');
          if (checklength1("#f_first_name")) {

            ocultaretiqueta("#err_f_first_name1");
            $("#f_first_name").removeClass("parsley-error");
            mostraretiqueta('#lp-pom-text-826');
            if (checkInput("#f_last_name", alphabetspattern1)) {

              ocultaretiqueta("#err_f_last_name");
              $("#f_last_name").removeClass("parsley-error");
              mostraretiqueta('#lp-pom-text-826');
              if (checklength1("#f_last_name")) {
                ocultaretiqueta("#err_f_last_name1");
                $("#f_last_name").removeClass("parsley-error");
                mostraretiqueta('#lp-pom-text-826');
                if (checkInputPass("#pass", passPattern)) {
                  ocultaretiqueta("#etiquetapass");
                  $("#pass").removeClass("parsley-error");
                  mostraretiqueta('#lp-pom-text-826');
                  if (checkvalue("#country")) {
                    ocultaretiqueta("#err_country");
                    mostraretiqueta('#lp-pom-text-826');
                    if (checklength3("#country")) {
                      ocultaretiqueta("#err_country");
                      mostraretiqueta('#lp-pom-text-826');
                      // if(coinciden()){

                     
                      if (condiciones) {
                        var email = $("#email").val().toLowerCase();
                        var country = $("#country").val();
                        var pass = $("#pass").val();
                        var f_name = primeraMayus($("#f_first_name").val());
                        var l_name = primeraMayus($("#f_last_name").val());
                        $(".paso1").hide(); //muestro mediante id
                        $("#form_title").hide();
                        $("#step1").hide();
                        $("#step2").show();
                        $(".paso2").show(); //muestro mediante clase
                        ocultaretiqueta('#lp-pom-text-899');
                        ocultaretiqueta('#lp-pom-text-826');
                        ocultaretiqueta('#lp-pom-image-927');
                        ocultaretiqueta('#filemon');
                        // $('html, body').animate({ scrollTop: $("#tann").offset().top - 100 }, 2000);
                        $('.etiqueta_paso2').show();

                        $("#s_email").val(email);
                        $("#countryy").val(country);
                        $("#hdpass").val(pass);
                        $("#s_first_name").val(f_name);
                        $("#s_last_name").val(l_name);
                        getsepas(pass);
                      } else {
                        $("#divaceptar").addClass('animacion');

                        setTimeout(function () {
                          $("#divaceptar").removeClass('animacion');
                        }, 1000)
                      }

                      //}
                    } else {
                      mostraretiqueta("#err_country");
                      $("#country").addClass('animacionC');

                      setTimeout(function () {
                        $("#country").removeClass('animacionC');
                      }, 1000)

                    }
                  } else {

                    mostraretiqueta("#err_country");
                    $("#country").addClass('animacionC');

                    setTimeout(function () {
                      $("#country").removeClass('animacionC');
                    }, 1000)
                  }

                } else {
                 
                  mostraretiqueta("#etiquetapass");
                  $("#pass").addClass("parsley-error");
                  // if ($(window).width() <=600) {
                  //   ocultaretiqueta('#lp-pom-text-826'); 
                  // }else{
                  //   mostraretiqueta('#lp-pom-text-826');
                  // }
                  $("#pass").addClass('animacionP');

                  setTimeout(function () {
                    $("#pass").removeClass('animacionP');
                  }, 1000)
                }
              } else {
                mostraretiqueta("#err_f_last_name1");
                $("#f_last_name").addClass("parsley-error");
                $("#f_last_name").addClass('animacionL');

                setTimeout(function () {
                  $("#f_last_name").removeClass('animacionL');
                }, 1000)

              }

            } else {
              mostraretiqueta("#err_f_last_name");
              $("#f_last_name").addClass("parsley-error");
              $("#f_last_name").addClass('animacionL');

              setTimeout(function () {
                $("#f_last_name").removeClass('animacionL');
              }, 1000)

            }
          } else {
            mostraretiqueta("#err_f_first_name1");
            $("#f_first_name").addClass("parsley-error");
            $("#f_first_name").addClass('animacionF');

            setTimeout(function () {
              $("#f_first_name").removeClass('animacionF');
            }, 1000)
          }

        } else {
          mostraretiqueta("#err_f_first_name");
          $("#f_first_name").addClass("parsley-error");
          $("#f_first_name").addClass('animacionF');

          setTimeout(function () {
            $("#f_first_name").removeClass('animacionF');
          }, 1000)
        }

      } else {

        ocultaretiqueta('#etiquetaemail');
         realizaProceso($('#email').val());
         if(emailvalido == false && emailvalido != ''){  

             mostraretiqueta("#verificaremail");
             $("#email").addClass('animacionE');

              setTimeout(function(){
                $("#email").removeClass('animacionE');
              }, 1000)
           
           }
      }


    } else {
      mostraretiqueta("#etiquetaemail");
      $("#email").addClass("parsley-error");
      $("#email").addClass('animacionE');

      setTimeout(function () {
        $("#email").removeClass('animacionE');
      }, 1000)
    }

  });

  $("#email").on("focusout", function () {
    if (checkInput("#email", emailPattern)) {
      ocultaretiqueta('#etiquetaemail');
      realizaProceso($('#email').val());

    } else {
      mostraretiqueta("#etiquetaemail");
      $("#email").addClass("parsley-error");
      $("#email").addClass('animacionE');

      setTimeout(function () {
        $("#email").removeClass('animacionE');
      }, 1000)
    }

  });

  $("#f_first_name").on("focusout", function () {
    if (checkInput("#f_first_name", alphabetspattern1)) {
      ocultaretiqueta("#err_f_first_name");
      $("#f_first_name").removeClass("parsley-error");
      if (checklength1("#f_first_name")) {

        ocultaretiqueta("#err_f_first_name1");
        $("#f_first_name").removeClass("parsley-error");

        mostraretiqueta('#lp-pom-text-826');

      } else {

        mostraretiqueta("#err_f_first_name1");
        $("#f_first_name").addClass("parsley-error");
        $("#f_first_name").addClass('animacionF');

        setTimeout(function () {
          $("#f_first_name").removeClass('animacionF');
        }, 1000)
      }

    } else {

      mostraretiqueta("#err_f_first_name");
      $("#f_first_name").addClass("parsley-error");
      $("#f_first_name").addClass('animacionF');

      setTimeout(function () {
        $("#f_first_name").removeClass('animacionF');
      }, 1000)
    }



  });

  $("#f_last_name").on("focusout", function () {
    if (checkInput("#f_last_name", alphabetspattern1)) {
      ocultaretiqueta("#err_f_last_name");
      $("#f_last_name").removeClass("parsley-error");
      if (checklength1("#f_last_name")) {

        ocultaretiqueta("#err_f_last_name1");
        $("#f_last_name").removeClass("parsley-error");

        mostraretiqueta('#lp-pom-text-826');

      } else {

        mostraretiqueta("#err_f_last_name1");
        $("#f_last_name").addClass("parsley-error");
        $("#f_last_name").addClass('animacionL');

        setTimeout(function () {
          $("#f_last_name").removeClass('animacionL');
        }, 1000)
      }

    } else {

      mostraretiqueta("#err_f_last_name");
      $("#f_last_name").addClass("parsley-error");
      $("#f_last_name").addClass('animacionL');

      setTimeout(function () {
        $("#f_last_name").removeClass('animacionL');
      }, 1000)
    }



  });
  //Country

  $("#country").on("focusout", function () {

    if (checkvalue("#country")) {
      ocultaretiqueta("#err_country");
      mostraretiqueta('#lp-pom-text-826');

      if (checklength3("#country")) {
        ocultaretiqueta("#err_country");
        mostraretiqueta('#lp-pom-text-826');

      } else {
        mostraretiqueta("#err_country");
        $("#country").addClass('animacionC');

        setTimeout(function () {
          $("#country").removeClass('animacionC');
        }, 1000)

      }

    } else {

      mostraretiqueta("#err_country");
      $("#country").addClass('animacionC');

      setTimeout(function () {
        $("#country").removeClass('animacionC');
      }, 1000)
    }






  });

  


});

function coinciden() {
  if ($("#pass").val() === $("#confirmar_pass").val()) {
    ocultaretiqueta("#etiquetaconfirmar_pass");
    return true;
  } else {
    mostraretiqueta("#etiquetaconfirmar_pass");
    $("#pass").addClass("animacionPC");

    setTimeout(function () {
      $("#pass").removeClass("animacionPC");
    }, 1000);
    return false;
  }
}

function checkvalue(idInput) {
  if ($(idInput).val() != "") {
    return true;
  } else {
    return false;
  }
}

function checklength(idInput) {
  var cd_len = $("#s_cd_number").val().length;
  if (cd_len == 19) {
    return true;
  } else {
    return false;
  }
}

function checklength3(idInput) {
  var cd_len = $("#country").val().length;
  if (cd_len != 0) {
    return true;
  } else {
    return false;
  }
}

const checkMonth = () => {
  var monthSelected = document.getElementById('card_exp_month').value;
  var yearSelected = document.getElementById('card_exp_year').value;
  var month = new Date().getMonth();
  var year = new Date().getFullYear().toString().substr(-2);
  return (yearSelected <= year && monthSelected <= month) ? false : true;
}

$("#s_form_but").on("click", function () {
  if (checkInput("#s_cd_holder", alphabetspattern)) {
    ocultaretiqueta("#err_s_cd_holder");
    $("#s_cd_holder").removeClass("parsley-error");
    if (checkvalue("#s_cd_holder")) {
      ocultaretiqueta("#err_s_cd_holder");
      $("#s_cd_holder").removeClass("parsley-error");
      if (checkCardName()) {
        if (checkInput("#s_cd_number", numberspattern)) {
          ocultaretiqueta("#err_s_cd_number");
          $("#s_cd_number").removeClass("parsley-error");
          if (checkvalue("#s_cd_number") == "" || checkvalue("#s_cd_number")) {
            ocultaretiqueta("#err_s_cd_number");
            $("#s_cd_number").removeClass("parsley-error");
            if (checklength("#s_cd_number")) {
              ocultaretiqueta("#err_s_cd_number");
              $("#s_cd_number").removeClass("parsley-error");
              if (checkInput("#card_exp_month", numberspattern)) {
                if (checkvalue("#card_exp_month")) {
                  ocultaretiqueta("#err_card_exp_month");
                  $("#card_exp_month").removeClass("parsley-error");
                  if (checklength_card("#card_exp_month")) {
                    ocultaretiqueta("#err_card_exp_month");
                    $("#card_exp_month").removeClass("parsley-error");
                    if (checkMonth()) {
                      $("#card_exp_month").removeClass("parsley-error");
                      ocultaretiqueta("err_card_exp_month");
                      if (checkInput("#card_exp_year", numberspattern)) {
                        ocultaretiqueta("#err_card_exp_year");
                        $("#card_exp_year").removeClass("parsley-error");
                        if (checklength_card("#card_exp_year")) {
                          ocultaretiqueta("#err_card_exp_year");
                          $("#card_exp_year").removeClass("parsley-error");
                          if (checkvalue("#card_exp_year")) {
                            ocultaretiqueta("#err_card_exp_year");
                            $("#card_exp_year").removeClass("parsley-error");
                            if (checkInput("#cvv", numberspattern1)) {
                              ocultaretiqueta("#err_cvv");
                              $("#cvv").removeClass("parsley-error");
                              if (
                                checkvalue("#cvv") ||
                                checkvalue("#cvv") == ""
                              ) {
                                ocultaretiqueta("#err_cvv");
                                $("#cvv").removeClass("parsley-error");
                                if (checklength_cvv("#cvv")) {
                                  ocultaretiqueta("#err_cvv");
                                  $("#cvv").removeClass("parsley-error");
                                  $(".paso0").show();
                                  $("#s_form_but").attr("disabled", true);
                                  $("#s_form_but").hide();
                                  $("#test").css("display", "none");
                                  $("#test").hide();
                                  var c_nameHolder = primeraMayus($("#s_cd_holder").val());
                                  $("#s_cd_holder").val(c_nameHolder);
                                  $("#dopayment").submit();
                                } else {
                                  mostraretiqueta("#err_cvv");
                                  $("#cvv").addClass("parsley-error");
                                  $("#cvv").addClass("animacionVV");

                                  setTimeout(function () {
                                    $("#cvv").removeClass("animacionVV");
                                  }, 1000);
                                  return false;
                                }
                                //alert('Okay');
                              }
                            } else {
                              mostraretiqueta("#err_cvv");
                              $("#cvv").addClass("parsley-error");
                              $("#cvv").addClass("animacionVV");

                              setTimeout(function () {
                                $("#cvv").removeClass("animacionVV");
                              }, 1000);
                              return false;
                            }
                          } else {
                            mostraretiqueta("#err_card_exp_year");
                            $("#card_exp_year").addClass("parsley-error");
                            $("#card_exp_year").addClass("animacionY");

                            setTimeout(function () {
                              $("#card_exp_year").removeClass("animacionY");
                            }, 1000);
                            return false;
                          }
                        } else {
                          mostraretiqueta("#err_card_exp_year");
                          $("#card_exp_year").addClass("parsley-error");
                          $("#card_exp_year").addClass("animacionY");

                          setTimeout(function () {
                            $("#card_exp_year").removeClass("animacionY");
                          }, 1000);
                          return false;
                        }
                        ///
                      } else {
                        mostraretiqueta("#err_card_exp_year");
                        $("#card_exp_year").addClass("parsley-error");
                        $("#card_exp_year").addClass("animacionY");

                        setTimeout(function () {
                          $("#card_exp_year").removeClass("animacionY");
                        }, 1000);
                        return false;
                      }
                    } else {
                      mostraretiqueta("#err_card_exp_month");
                      $("#card_exp_month").addClass("parsley-error");
                      $("#card_exp_month").addClass("animacionX");

                      setTimeout(function () {
                        $("#card_exp_month").removeClass("animacionX");
                      }, 1000);
                      return false;
                    }
                  } else {
                    mostraretiqueta("#err_card_exp_month");
                    $("#card_exp_month").addClass("parsley-error");
                    $("#card_exp_month").addClass("animacionX");

                    setTimeout(function () {
                      $("#card_exp_month").removeClass("animacionX");
                    }, 1000);
                    return false;
                  }

                  //
                } else {
                  mostraretiqueta("#err_card_exp_month");
                  $("#card_exp_month").addClass("parsley-error");
                  $("#card_exp_month").addClass("animacionX");

                  setTimeout(function () {
                    $("#card_exp_month").removeClass("animacionX");
                  }, 1000);
                  return false;
                }
              } else {
                mostraretiqueta("#err_card_exp_month");
                $("#card_exp_month").addClass("parsley-error");
                $("#card_exp_month").addClass("animacionX");

                setTimeout(function () {
                  $("#card_exp_month").removeClass("animacionX");
                }, 1000);
                return false;
              }
            } else {
              mostraretiqueta("#err_s_cd_number");
              $("#s_cd_number").addClass("parsley-error");
              $("#s_cd_number").addClass("animacionU");

              setTimeout(function () {
                $("#s_cd_number").removeClass("animacionU");
              }, 1000);
              return false;
            }
          }
        } else {
          mostraretiqueta("#err_s_cd_number");
          $("#s_cd_number").addClass("parsley-error");
          $("#s_cd_number").addClass("animacionU");

          setTimeout(function () {
            $("#s_cd_number").removeClass("animacionU");
          }, 1000);
          return false;
        }
      } else {
        return false;
      }
    } else {
      mostraretiqueta("#err_s_cd_holder");
      $("#s_cd_holder").addClass("parsley-error");
      $("#s_cd_holder").addClass("animacionH");

      setTimeout(function () {
        $("#s_cd_holder").removeClass("animacionH");
      }, 1000);
      return false;
    }
  } else {
    mostraretiqueta("#err_s_cd_holder");
    $("#s_cd_holder").addClass("parsley-error");
    $("#s_cd_holder").addClass("animacionH");

    setTimeout(function () {
      $("#s_cd_holder").removeClass("animacionH");
    }, 1000);
    return false;
  }
});

//HOLDER
$("#s_cd_holder").on("focusout", function () {
  if (checkInput("#s_cd_holder", alphabetspattern)) {
    ocultaretiqueta("#err_s_cd_holder");
    $("#s_cd_holder").removeClass("parsley-error");
    if (checkvalue("#s_cd_holder")) {} else {
      mostraretiqueta("#err_s_cd_holder");
      $("#s_cd_holder").addClass("parsley-error");
      $("#s_cd_holder").addClass("animacionH");

      setTimeout(function () {
        $("#s_cd_holder").removeClass("animacionH");
      }, 1000);
      return false;
    }
  } else {
    mostraretiqueta("#err_s_cd_holder");
    $("#s_cd_holder").addClass("parsley-error");
    $("#s_cd_holder").addClass("animacionH");

    setTimeout(function () {
      $("#s_cd_holder").removeClass("animacionH");
    }, 1000);
    return false;
  }
});

//NumberU
$("#s_cd_number").on("focusout", function () {
  if (checkCardName()) {
    if (checkInput("#s_cd_number", numberspattern)) {
      ocultaretiqueta("#err_s_cd_number");
      $("#s_cd_number").removeClass("parsley-error");
      if (checkvalue("#s_cd_number") == "" || checkvalue("#s_cd_number")) {
        ocultaretiqueta("#err_s_cd_number");
        $("#s_cd_number").removeClass("parsley-error");

        if (checklength("#s_cd_number")) {
          ocultaretiqueta("#err_s_cd_number");
          $("#s_cd_number").removeClass("parsley-error");
        } else {
          mostraretiqueta("#err_s_cd_number");
          $("#s_cd_number").addClass("parsley-error");
          $("#s_cd_number").addClass("animacionU");

          setTimeout(function () {
            $("#s_cd_number").removeClass("animacionU");
          }, 1000);
          return false;
        }
      }
    } else {
      mostraretiqueta("#err_s_cd_number");
      $("#s_cd_number").addClass("parsley-error");
      $("#s_cd_number").addClass("animacionU");

      setTimeout(function () {
        $("#s_cd_number").removeClass("animacionU");
      }, 1000);
      return false;
    }
  }
});

$("#s_cd_number").on("keyup", function () {
  checkCardName();
});

//mesX
$("#card_exp_month").on("focusout", function () {
  if (checkInput("#card_exp_month", numberspattern)) {
    ocultaretiqueta("#err_card_exp_month");
    $("#card_exp_month").removeClass("parsley-error");
    if (checkvalue("#card_exp_month")) {
      ocultaretiqueta("#err_card_exp_month");
      $("#card_exp_month").removeClass("parsley-error");
      if (checklength_card("#card_exp_month")) {
        ocultaretiqueta("#err_card_exp_month");
        $("#card_exp_month").removeClass("parsley-error");
      } else {
        mostraretiqueta("#err_card_exp_month");
        $("#card_exp_month").addClass("parsley-error");
        $("#card_exp_month").addClass("animacionX");

        setTimeout(function () {
          $("#card_exp_month").removeClass("animacionX");
        }, 1000);
        return false;
      }
    } else {
      mostraretiqueta("#err_card_exp_month");
      $("#card_exp_month").addClass("parsley-error");
      $("#card_exp_month").addClass("animacionX");

      setTimeout(function () {
        $("#card_exp_month").removeClass("animacionX");
      }, 1000);
      return false;
    }
  } else {
    mostraretiqueta("#err_card_exp_month");
    $("#card_exp_month").addClass("parsley-error");
    $("#card_exp_month").addClass("animacionX");

    setTimeout(function () {
      $("#card_exp_month").removeClass("animacionX");
    }, 1000);
    return false;
  }
});

//añoY
$("#card_exp_year").on("focusout", function () {
  if (checkInput("#card_exp_year", numberspattern)) {
    ocultaretiqueta("#err_card_exp_year");
    $("#card_exp_year").removeClass("parsley-error");
    if (checklength_card("#card_exp_year")) {
      ocultaretiqueta("#err_card_exp_year");
      $("#card_exp_year").removeClass("parsley-error");
      if (checkvalue("#card_exp_year")) {
        ocultaretiqueta("#err_card_exp_year");
        $("#card_exp_year").removeClass("parsley-error");
      } else {
        mostraretiqueta("#err_card_exp_year");
        $("#card_exp_year").addClass("parsley-error");
        $("#card_exp_year").addClass("animacionY");

        setTimeout(function () {
          $("#card_exp_year").removeClass("animacionY");
        }, 1000);
        return false;
      }
    } else {
      mostraretiqueta("#err_card_exp_year");
      $("#card_exp_year").addClass("parsley-error");
      $("#card_exp_year").addClass("animacionY");

      setTimeout(function () {
        $("#card_exp_year").removeClass("animacionY");
      }, 1000);
      return false;
    }
  } else {
    mostraretiqueta("#err_card_exp_year");
    $("#card_exp_year").addClass("parsley-error");
    $("#card_exp_year").addClass("animacionY");

    setTimeout(function () {
      $("#card_exp_year").removeClass("animacionY");
    }, 1000);
    return false;
  }
});

//cvvVV
$("#cvv").on("focusout", function () {
  if (checkInput("#cvv", numberspattern1)) {
    ocultaretiqueta("#err_cvv");
    $("#cvv").removeClass("parsley-error");
    if (checkvalue("#cvv") || checkvalue("#cvv") == "") {
      ocultaretiqueta("#err_cvv");
      $("#cvv").removeClass("parsley-error");
      if (checklength_cvv("#cvv")) {
        ocultaretiqueta("#err_cvv");
        $("#cvv").removeClass("parsley-error");
      } else {
        mostraretiqueta("#err_cvv");
        $("#cvv").addClass("parsley-error");
        $("#cvv").addClass("animacionVV");

        setTimeout(function () {
          $("#cvv").removeClass("animacionVV");
        }, 1000);
        return false;
      }
      //alert('Okay');
    }
  } else {
    mostraretiqueta("#err_cvv");
    $("#cvv").addClass("parsley-error");
    $("#cvv").addClass("animacionVV");

    setTimeout(function () {
      $("#cvv").removeClass("animacionVV");
    }, 1000);
    return false;
  }
});

function getsepas(pass) {
  var autogenpass = 0;
  if(pass.trim() == ''){
    autogenpass = 1;
  }
  $.ajax({
    type: "get",
    url: baseurl + "generatepass",
    data: "pass=" + encodeURIComponent(pass),
    // data: "pass=" + window.btoa(pass),
    success: function (data) {
      var data1 = JSON.parse(data);
      $("#patak").val(data1.result);
      $("#hdpass").val(data1.pass);
      $("#autogenpass").val(autogenpass);
      //console.log(data1.result);
    }
  });
}
function checklength1(idInput) {
  var cd_len = $(idInput).val().length;
  if (cd_len >= 1) {
    return true;
  } else {
    return false;
  }
}

function checklength_card(idInput) {
  var cd_len = $(idInput).val().length;
  if (cd_len == 2) {
    return true;
  } else {
    return false;
  }
}

function checklength_cvv(idInput) {
  var cd_len = $(idInput).val().length;
  if (cd_len >= 3) {
    return true;
  } else {
    return false;
  }
}

function setupcountry() {
  var ts = Math.round((new Date()).getTime() / 1000);
  $.ajax({
    type: 'get',
    url:window.ASSET_PATH+'/geoip.php?'+ts,
    data: '',
    success: function (datac) {
      var data2 = JSON.parse(datac);
      setTimeout(function () {
        $("#country").val(data2.iso3);
        $('body #card_geo').val(data2.iso3);
        console.log(data2.iso3);
        window.check_geo = data2.iso3;
      }, 50);

    }
  })
}



function primeraMayus(string) {

  return string.split(' ').map((v) => {
    return v.charAt(0).toUpperCase() + v.slice(1).toLowerCase()
  }).join(' ')


}

$("#s_cd_holder").keypress(function(tecla)

{

   if(tecla.charCode < 48 || tecla.charCode > 57)

   {

     return true;
   

   }else{
           return false;
     }

});

$("#pass").keypress(function(tecla){

  if(tecla.keyCode == 32 || tecla.keyCode == 27 || tecla.keyCode == 8 || tecla.code == "Space") {

    mostraretiqueta("#etiquetapass");
    $("#pass").addClass("parsley-error");
    $("#pass").addClass('animacionP');

    setTimeout(function () {
      $("#pass").removeClass('animacionP');
    }, 1000)
  
  
    return false;
  
  
  }else{
    ocultaretiqueta("#etiquetapass");
    $("#pass").removeClass("parsley-error");
          return true;
    }
  
});