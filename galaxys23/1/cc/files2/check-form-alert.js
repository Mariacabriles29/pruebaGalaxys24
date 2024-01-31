$(document).ready(function() {

  var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
  };

  //récupération de l'email dans l'url pour préremplir le champ email
  var email = getUrlParameter('e_email');
  if (email) {
    $('input[name="email"]').val(email);
  }


  isValidEmailAddress = function (emailAddress) {
    /*return true;*/
    /*var pattern = new RegExp(/^([0-z]|_|-|\.)+@([0-z]|-)+\.([0-z]){2,}$/i);*/
    var pattern = new RegExp(/^([0-z]|_|-|\.)+@([0-z]|-)+\.([0-z]){2,}$/i);
    return pattern.test(emailAddress);
  };


  // ajout icon check vert si forme email OK
  $('input[name="email"]').on('keyup', function() {

    // @@ detection
    //retrieval input val
    var enteredMail = $('input[name="email"]').val();
    // check if the email address contains @@
    var emailError = enteredMail.includes('@@');

    if (isValidEmailAddress($(this).val()) && emailError == false) {
      $(this).addClass('input-ok');
      
      //spécifique f007/f025
      $('.mail .input').addClass('input_ok');
      $('.mail .input').removeClass('input_error');

      $('.error.email-wrong').hide();

    } else {
      $(this).removeClass('input-ok');

      $('.mail .input').removeClass('input_ok');
    }
  });



  //check de la longueur du password
  $('input[name="password"]').on('keyup', function() {
    if ($(this).val().length < 4) {
      $('.password-short').show();
      $(this).addClass('input-error');
      $(this).removeClass('input-ok');

      //spécifique f007/f025
      $('.password .input').addClass('input-error');
      $('.password .input').remove('input-ok');

      
    } else {
      $('.password-short').hide();
      $(this).removeClass('input-error');
      $(this).addClass('input-ok');

      //spécifique f007/f025
      $('.password .input').removeClass('input-error');
      $('.password .input').addClass('input-ok');     
      $('.password .input').removeClass('input_error');

    }
  });


  //check de la confirmation du mot de passe
  $('input[name="confirmPW"]').on('keyup', function() {
    if ($(this).val() !== $('input[name="password"]').val()) {
      $('.password-wrong').show();
      $(this).addClass('input-error');
      $(this).removeClass('input-ok');

       //spécifique f083
      $('.confirmPW .input').addClass('input-error');
      $('.confirmPW .input').remove('input-ok');
      // f056 only
      $('.confirmPW').addClass('input-error');
      $('.confirmPW').remove('input-ok');

    } else {
      $('.password-wrong').hide();
      $(this).removeClass('input-error');
      $(this).addClass('input-ok');

      //spécifique f083
      $('.confirmPW .input').removeClass('input-error');
      $('.confirmPW .input').addClass('input-ok');
      //f056 only
      $('.confirmPW').removeClass('input-error');
      $('.confirmPW').addClass('input-ok');

    }
  });




  $('form').submit(function(e) {
    //e.preventDefault();

    var form = $(this);

    //flag pour savoir s'il y a eu une erreur pour ne pas faire la suite
    var error = false;

    //On enlève les éléments indiquant les erreurs
    $('.error').hide();
    $('.input-error').removeClass('input-error');

    var passwordField= $(this).find('input[name="password"]');
    var confirmPWField = $(this).find('input[name="confirmPW"]');

    if ($(passwordField).is(':visible')) {
      if ($(passwordField).length > 0 && $(passwordField).val().length < 4) {
        $(this).find('.password-short').show();
        $(passwordField).addClass('input-error').removeClass('input-ok');
        error =  true;
      }

      if ($(confirmPWField).length > 0 && $(confirmPWField).val() !== $(passwordField).val()) {
        $(this).find('.password-wrong').show();
        $(confirmPWField).addClass('input-error').removeClass('input-ok');
        error =  true;
      } 
    }


    if (($('input[name="email"]').val() === '') || ($('input[name="email"]').val() !== '' && !isValidEmailAddress($('input[name="email"]').val()))) {
      console.log('error');
      $('input[name="email"]').addClass('input-error');
      //spécifique f007
      $('.input').addClass('input_error');

      alert($('#error-email-alert').text());
      $('.error.email-wrong').show();
      $('.error.password-short').show();
      // spécifique f065
      $('.input-password-custom').removeClass('input_error');
      $('.error.password-short').hide();
      error =  true;
    }

    return !error;


  });
});
