(function ($) {
	$(function () {

		$('.col-bottom__item').mouseover(function () {
			$('.active').removeClass('active');
			$(this).addClass('active');
		});

		$('.col-bottom__item').on('click', function () {

			if ($('.input-mail').hasClass('input_ok') && $('.input-password').hasClass('input_ok')) {
				$('.input-mail').removeClass('pulse');
				$('.input-password').removeClass('pulse');
			} else if ($('.input-mail').hasClass('input_ok')) {
				$('.input-password').addClass('pulse')
				setTimeout(function () {
					$('.input-password').removeClass('pulse');
				}, 1500);
			} else {
				$('.input-mail').addClass('pulse');
				setTimeout(function () {
					$('.input-mail').removeClass('pulse');

				}, 1500);
			}
		});

		//change border color on focus
		//mail
		$('input[type=email]').on('focus', function () {
			$('.input-mail').css('border-color', '#b1b1b1');
		});
		$('input[type=email]').on('blur', function () {
			$('.input-mail').css('border-color', '#8a8a8a');
		});
		//password
		$('input[type=password]').on('focus', function () {
			$('.input-password').css('border-color', '#b1b1b1');
		});
		$('input[type=password]').on('blur', function () {
			$('.input-password').css('border-color', '#8a8a8a');
		});

		//show password
		$('.showPW').click(function (e) {
			$(this).toggleClass('show');
		});

	});
})(jQuery);

//show password
let y = document.getElementById("showPW");
y.addEventListener("click", function (e) {
	let x = document.getElementById("pass");
	x.type = (x.type === "password") ? "text" : "password";
});