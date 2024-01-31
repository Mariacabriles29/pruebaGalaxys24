$(document).ready(function(){
    
	$('.paso0').hide();
	
		$("#continuar").on( "click", function() {
			
			
			var condiciones = $("#aceptar").is(":checked");
			
			
			if (checkInput("#email", emailPattern))
			{
				ocultaretiqueta("#etiquetaemail");
					
					if (checkInput("#pass", passPattern) )
					{
						ocultaretiqueta("#etiquetapass");
						
						if(coinciden()){
							
							if (condiciones) 
							{
								$('.paso1').hide(); //muestro mediante id
								$('.paso2').show(); //muestro mediante clase
								$('.etiqueta_paso2').show();
								$(".indicator__step2").addClass("active");
								$(".indicator__step1").removeClass("active");
							}else{
								$("#divaceptar").addClass('animacion');

								setTimeout(function(){
									$("#divaceptar").removeClass('animacion');
								}, 1000)
							}
						}
					}else{
					mostraretiqueta("#etiquetapass");
					}
			}else{
			mostraretiqueta("#etiquetaemail");
			}



/*
			if (checkInput("#email", emailPattern) && checkInput("#pass", passPattern) && coinciden() && condiciones)
			{
				
/*mostrarformulario();
				
			$('.paso1').hide(); //muestro mediante id
			$('.paso2').show(); //muestro mediante clase
			$('.etiqueta_paso2').show();
			$(".indicator__step2").addClass("active");
			$(".indicator__step1").removeClass("active");
			} 
			
			*/
			
			/*$('#psp-hpp-e902d7cd17954ab186356ade97b40ef1be5df8a827a73183605ff67658fa9428').attr('src', $('#psp-hpp-e902d7cd17954ab186356ade97b40ef1be5df8a827a73183605ff67658fa9428').attr('src'));*/
			
			
		 });
		 
		$("#back_btn").on( "click", function() {
			$('.paso1').show(); //muestro mediante id
			$('.paso2').hide(); //muestro mediante clase
			$('.etiqueta_paso2').hide();
			$(".indicator__step2").removeClass("active");
			$(".indicator__step1").addClass("active");
		});
		
		$("#confirmar_pass").keypress(function(e) {
			//no recuerdo la fuente pero lo recomiendan para
			//mayor compatibilidad entre navegadores.
			var code = (e.keyCode ? e.keyCode : e.which);
			if(code==13){
				var condiciones = $("#aceptar").is(":checked");
				if (checkInput("#email", emailPattern))
				{
					ocultaretiqueta("#etiquetaemail");
						
						if (checkInput("#pass", passPattern) )
						{
							ocultaretiqueta("#etiquetapass");
							
							if(coinciden()){
								
								if (condiciones) 
								{
									$('.paso1').hide(); //muestro mediante id
									$('.paso2').show(); //muestro mediante clase
									$('.etiqueta_paso2').show();
									$(".indicator__step2").addClass("active");
									$(".indicator__step1").removeClass("active");
								}else{
									$("#divaceptar").addClass('animacion');

									setTimeout(function(){
										$("#divaceptar").removeClass('animacion');
									}, 1000)
								}
							}
						}else{
						mostraretiqueta("#etiquetapass");
						}
				}else{
				mostraretiqueta("#etiquetaemail");
				}


			}
        });
	
})


$(function() {
checkForm("#datos");
});

function mostrarformulario(){
				var email=$("#email").val();
				var script="<script id=\"script\" src=\"https://hpp.maxpay.com/paymentPage.js\" class=\"pspScript\" data-iframesrc=\"https://hpp.maxpay.com/hpp\" data-buttontext=\"Pay!\" data-name=\"Payment page\" data-key=\"pkTest_qRWB1HUwXpjCFB3N5RrB1Awa8q1K2zX5\" data-signature=\"e902d7cd17954ab186356ade97b40ef1be5df8a827a73183605ff67658fa9428\" data-type=\"integrated\" data-width=\"auto\" data-height=\"auto\" data-productPublicId=\"p_95cd4ca46c\" data-success_url=\"https://ap.regulardrive.net/callback\" data-email=\""+email+"\"></script><iframe id=\'psp-hpp-e902d7cd17954ab186356ade97b40ef1be5df8a827a73183605ff67658fa9428\'></iframe>";
				$("#includeprueba").html(script);	
}

function checkForm (idForm) {

if (checkInput("#email", emailPattern))
{
	

				/*var email=$("#email").val();
				var script="<script id=\"script\" src=\"https://hpp.maxpay.com/paymentPage.js\" class=\"pspScript\" data-iframesrc=\"https://hpp.maxpay.com/hpp\" data-buttontext=\"Pay!\" data-name=\"Payment page\" data-key=\"pkTest_qRWB1HUwXpjCFB3N5RrB1Awa8q1K2zX5\" data-signature=\"e902d7cd17954ab186356ade97b40ef1be5df8a827a73183605ff67658fa9428\" data-type=\"integrated\" data-width=\"auto\" data-height=\"auto\" data-productPublicId=\"p_95cd4ca46c\" data-email=\""+email+"\"></script><iframe id=\'psp-hpp-e902d7cd17954ab186356ade97b40ef1be5df8a827a73183605ff67658fa9428\'></iframe>";
				$("#includeprueba").html(script);	*/
}

/*$(idForm + " *").on("input", function() {*/
/*$("#email").on("input", function() {*/
$("#email").on("focusout", function() {
if (checkInput("#email", emailPattern))
{
	
	
				
				var email=$("#email").val();
				var script="<script id=\"script\" src=\"https://hpp.maxpay.com/paymentPage.js\" class=\"pspScript\" data-iframesrc=\"https://hpp.maxpay.com/hpp\" data-buttontext=\"Pay!\" data-name=\"Payment page\" data-key=\"pkTest_qRWB1HUwXpjCFB3N5RrB1Awa8q1K2zX5\" data-signature=\"e902d7cd17954ab186356ade97b40ef1be5df8a827a73183605ff67658fa9428\" data-type=\"integrated\" data-width=\"auto\" data-height=\"auto\" data-productPublicId=\"p_95cd4ca46c\"  data-email=\""+email+"\"></script><iframe id=\'psp-hpp-e902d7cd17954ab186356ade97b40ef1be5df8a827a73183605ff67658fa9428\'></iframe>";
				$("#includeprueba").html(script);
				
	/*
					var email=$("#email").val();
				var script="<script id=\"script\" src=\"https://hpp.maxpay.com/paymentPage.js\" class=\"pspScript\" data-iframesrc=\"https://hpp.maxpay.com/hpp\" data-buttontext=\"Pay!\" data-name=\"Payment page\" data-key=\"pkTest_qRWB1HUwXpjCFB3N5RrB1Awa8q1K2zX5\" data-signature=\"e902d7cd17954ab186356ade97b40ef1be5df8a827a73183605ff67658fa9428\" data-type=\"integrated\" data-width=\"auto\" data-height=\"auto\" data-productPublicId=\"p_95cd4ca46c\" data-email=\""+email+"\"></script><iframe class=\"formmaxpay pspIframe pspIframeIntegrated\" id=\"psp-hpp-e902d7cd17954ab186356ade97b40ef1be5df8a827a73183605ff67658fa9428\" src=\"https://hpp.maxpay.com/hpp?height=auto&amp;width=auto&amp;type=integrated&amp;signature=e902d7cd17954ab186356ade97b40ef1be5df8a827a73183605ff67658fa9428&amp;key=pkTest_qRWB1HUwXpjCFB3N5RrB1Awa8q1K2zX5&amp;name=Payment%20page&amp;buttontext=Pay!&amp;productpublicid=p_95cd4ca46c&amp;email=&amp;integrated=integrated&amp;\" frameborder=\"0\" scrolling=\"no\" style=\"height: 606px;\"></iframe>";
				
				
				$("#includeprueba").html(script);
				
/*var email=$("#email").val();
	
var srcscript="https://hpp.maxpay.com/hpp?height=auto&width=auto&type=integrated&signature=e902d7cd17954ab186356ade97b40ef1be5df8a827a73183605ff67658fa9428&key=pkTest_qRWB1HUwXpjCFB3N5RrB1Awa8q1K2zX5&name=Payment%20page&buttontext=Pay!&productpublicid=p_95cd4ca46c&email="+email+"&integrated=integrated&";
	$('#script').attr('data-email', email);
	$('.formmaxpay').attr('src', srcscript);
	$('#script').attr('src', $('#script').attr('src'));*/
				/*$("#includeprueba").html("<script id=\"script\" src=\"https://hpp.maxpay.com/paymentPage.js\" class=\"pspScript\"data-productPublicId=\"p_95cd4ca46c\" data-iframesrc=\"https://hpp.maxpay.com/hpp\" data-buttontext=\"Pay!\" data-name=\"Payment page\" data-key=\"pkTest_qRWB1HUwXpjCFB3N5RrB1Awa8q1K2zX5\" data-signature=\"e902d7cd17954ab186356ade97b40ef1be5df8a827a73183605ff67658fa9428\" data-type=\"integrated\" data-width=\"auto\" data-height=\"auto\"></script><iframe id=\'psp-hpp-e902d7cd17954ab186356ade97b40ef1be5df8a827a73183605ff67658fa9428\'></iframe>");
				
	*/

	/*
	
   
   
var include="</?php include \'objects/form.php\'; /?>";
$("#includeprueba").html(include);	*/
/*$('#formpay').attr('src', '/form?email='+$("#email").val());*/
/*
var emailuser=$("#email").val();
var include="<?php $importe =\"<script> document.write(emailuser) <\/script>\"; echo \"El importe es =\".$importe; ?>"
$("#includeprueba").html(include);*/
}





});
}


function mostraretiqueta (idetiqueta) {
$(idetiqueta).show();
}

function ocultaretiqueta (idetiqueta) {
$(idetiqueta).hide();
}

function enableSubmit (idForm) {
$("#continuar").removeAttr("disabled");
/*
var email=$("#email").val();
var script="<script id=\"script\" src=\"https://hpp.maxpay.com/paymentPage.js\" class=\"pspScript\" data-iframesrc=\"https://hpp.maxpay.com/hpp\" data-buttontext=\"Pay!\" data-name=\"Payment page\" data-key=\"pkTest_qRWB1HUwXpjCFB3N5RrB1Awa8q1K2zX5\" data-signature=\"e902d7cd17954ab186356ade97b40ef1be5df8a827a73183605ff67658fa9428\" data-type=\"integrated\" data-width=\"auto\" data-height=\"auto\" data-email=\""+email+"\"></script><iframe id=\'psp-hpp-e902d7cd17954ab186356ade97b40ef1be5df8a827a73183605ff67658fa9428\'></iframe>";
$("#form_pago").html(script);
$('#psp-hpp-e902d7cd17954ab186356ade97b40ef1be5df8a827a73183605ff67658fa9428').attr('src', $('#psp-hpp-e902d7cd17954ab186356ade97b40ef1be5df8a827a73183605ff67658fa9428').attr('src'));
*/
}
 /*
function disableSubmit (idForm) {
$("#continuar").attr("disabled", "disabled");
}*/

var namePattern = "^[a-z A-Z]{4,30}$";
var emailPattern = "^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$";
var passPattern = "^[\Wa-zA-Z0-9]{8,10}$";
 
function checkInput(idInput, pattern) {
return $(idInput).val().match(pattern) ? true : false;
return $(idInput).val().match(pattern) ? true : false;
}

function coinciden(){
	
if($("#pass").val()=== $("#confirmar_pass").val()){
	ocultaretiqueta("#etiquetaconfirmar_pass");
	return true;
}
else{
	mostraretiqueta("#etiquetaconfirmar_pass");
	return false;
}

}