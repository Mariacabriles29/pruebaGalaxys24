window.onload = function(){

(function(){
  var counter = 1;

var idinterval = setInterval(function() {

    //console.log(idinterval, counter);
     if (counter == 14) {
    	clearInterval(idinterval);
    } else if (counter >= 0) {
      span = document.getElementById("timer");
      span.innerHTML = counter;
    }
    counter++;
  }, 1000);

})();

}

$(function(){

	if ($('#title').text().length >= 23 ) {
		$('#title').text($('#title').text().substr(0,23) + '...' );
	}

	//lancement video en fonction du device
	screenwidth = $( window ).width();

	if (screenwidth <= 768) {
		$('video').attr('src', $('video').attr('src').replace('.mp4', '_mob.mp4'));
  	}

	//détection navigateur hack samsung internet
	if($('#videostudio').attr('src') != ''){

		$('.loading').css("display", "none");
		setTimeout(function(){

			$("#videostudio").prop("src","");
			
		}, 15500);

		setTimeout(function(){
			$('loading-bar').css("display", "block");
			$('.meter > span').each (function() {
				$(this)
					.data("originWidth", $(this).width())
					.width(0)
					.animate({
						width:$(this).data("originWidth")
					}, 30000);
			}, 2500)
		});
		
		
	}else{

		setTimeout(function(){
			$('loading-bar').css("display", "block");
			$('.meter > span').each (function() {
				$(this)
					.data("originWidth", $(this).width())
					.width(0)
					.animate({
						width:$(this).data("originWidth")
					}, 30000);
			}, 2500)
		});

		setTimeout(function(){
			$('.otimer').css('display', 'none');
		}, 10220)
	
		setTimeout(function(){
			$('.loading').css("display", "block");
		
		}, 1000)
	
		// setTimeout(function(){
			
		// 	$('.btn-pop-content').css("display", "block");
		// }, 16000)
	
		
		
		
	
		setTimeout(function(){
	
			if($('.loading').css('display') == 'block'){
				$('#adq').css("display", "none");
				$('#adw').css("display", "none");
				$('#ad').css("display", "block");
			}
	
		}, 5500)

	}
	



	setTimeout(function(){

		if($('.popup, .overlay, .paso1').css('display') == 'none'){
			$('.popup, .overlay, .paso1').fadeIn();
			$('.btn-pop-content').css("display", "none");
		}
		
		$('#play-pause').addClass('fa-play').removeClass('fa-pause');
		$('.loading').css("display", "none");
		$('.btn-pop').css("display", "block");
		$('html, body').animate({ scrollTop: $("#tann").offset().top - 100 }, 2000);
	}, 15500)

	$('.next-step').on('click', function(){
		if($('.popup, .overlay, .paso1').css('display') == 'none'){
			$('.popup, .overlay, .paso1').fadeIn();
			$('.btn-pop-content').fadeOut();
			$('html, body').animate({ scrollTop: $("#tann").offset().top - 100 }, 2000);
		}
	});
	
	$('#ad').on('click', function(){
		if($('.popup, .overlay, .paso1').css('display') == 'none'){
			$('.popup, .overlay, .paso1').fadeIn();
			$('.btn-pop-content').fadeOut();
			$('html, body').animate({ scrollTop: $("#tann").offset().top - 100 }, 2000);
		}
	});

	$('.close-pop').on('click', function(){
		$('.popup, .overlay, .paso1').fadeOut();
		$('.btn-pop-content').fadeIn();
	});

	$('#cer').on('click', function(){
		$('.popup, .overlay, .paso1, .paso2').css("display", "none");
		$('.btn-pop-content').css("display", "block");
	});
	
	$('#ad').on('click', function(){
		if($('.popup, .overlay, .paso1').css('display') == 'none'){
			$('.popup, .overlay, .paso1').fadeIn();
			$('.btn-pop-content').fadeOut();
			$('html, body').animate({ scrollTop: $("#tann").offset().top - 100 }, 2000);
		}
	});

	$('.input input').on('focus', function(e) {
      $(this).parent().css('box-shadow', 'inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(152,203,232,.6)');
  	});

	$('.input input').on('blur', function (e) {
		$(this).parent().css('box-shadow', 'none');
	});
});

