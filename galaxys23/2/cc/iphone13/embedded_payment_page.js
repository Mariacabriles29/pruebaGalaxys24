$(document).ready(function() {
    // console.log('paymentLandingDomain', paymentLandingDomain);

    var fireEvent = function(eventName) {
        var event = new Event(eventName);
        document.dispatchEvent(event);
    }

    var $signupForm = $('#signup-form');
    // console.log($signupForm.attr('action'));

    var $iframe = $('iframe#embeddedPaymentPageIframe');

    var formS = document.getElementById('signup-form');

    formS.addEventListener('submit', function(e) {

        e.preventDefault();

        var urlFormValidation = $signupForm.attr('action');
        urlFormValidation = urlFormValidation.replace(paymentLandingDomain, window.location.hostname) // replace to avoid cross origin problems on ajax call

        $.ajax({
            url: urlFormValidation,
            type: 'POST',
            data: $signupForm.serialize(),
            success: function (response) {
                var resp = JSON.parse(response)

                if (resp.goToPaymentPage === true) {

                    fireEvent('signupSucceed');

                    $iframe.attr('src', resp.url);

                    fireEvent('iFrameLoading');

                    $iframe.one('load', function(e) {
                        // console.log('paymentPageLoaded', e);

                        fireEvent('paymentPageLoaded');
                        // $('#_submit input#submit').prop("disabled", false);
                        // document.getElementById("signupLoading").style.display = 'none';
                    })

                } else {
                    window.top.location = resp.url;
                }

                // console.log('success', resp);
            },
            error: function (xhr, status) {
                // console.log("error", xhr, status);
                location.reload();
            }
        });

    });

    var receivePostMessage = function(event) {
        if (event.data.type) {

            if (event.data.type === 'threedSecurePage') {

                $('#embeddedPaymentPageIframe').addClass('full-page');
                $('body').css('overflow', 'hidden');

            } else if (event.data.type === 'paymentPageWithError') {

                $('#embeddedPaymentPageIframe').removeClass('full-page');
                $('body').css('overflow', '');

                toastr.error(event.data.data.errorMsg);

            } else if (event.data.type === 'paymentPagePaymentError') {

                toastr.error(event.data.data.errorMsg);

            } else if (event.data.type === 'redirectTo') {
                document.location = event.data.data.url;
            }
        }

    }

    if (window.addEventListener) {
        window.addEventListener('message', receivePostMessage);
    } else {
        window.attachEvent('onmessage', receivePostMessage);
    }

    $('#signup-form #submit').prop('disabled', false);
})